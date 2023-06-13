<?php
session_start();

// Check if user is already logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="dashboard.js"></script>
  <style>
    /* CSS styles */

    body {
      font-family: monospace;
    }

    .navbar {
      background-color: #333;
      padding: 10px;
    }

    .navbar h1 {
      margin: 0;
      color: #fff;
    }

    .navbar .logout-btn {
      background-color: #f44336;
      color: #fff;
      border: none;
      padding: 8px 12px;
      cursor: pointer;
      float: right;
    }

    .container {
      margin: 20px;
    }

    h2 {
      margin-top: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }

    .update-btn, .delete-btn {
      padding: 5px 10px;
      margin-right: 5px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      cursor: pointer;
    }

    .delete-btn {
      background-color: #f44336;
    }

    .update-btn:hover, .delete-btn:hover {
      opacity: 0.8;
    }

    .add-form {
      margin-bottom: 20px;
    }

    .add-form h3 {
      margin-bottom: 10px;
    }

    .add-form div {
      margin-bottom: 10px;
    }

    .add-form label {
      display: inline-block;
      width: 150px;
    }

    .add-form input[type="text"] {
      width: 250px;
      padding: 5px;
    }

    .add-btn {
      background-color: #4CAF50;
      color: #fff;
      border: none;
      padding: 5px 10px;
      cursor: pointer;
    }

    .add-btn:hover {
      opacity: 0.8;
    }

    .edit-form {
      display: none;
      margin-bottom: 20px;
    }

    .edit-form h3 {
      margin-bottom: 10px;
    }

    .edit-form div {
      margin-bottom: 10px;
    }

    .edit-form label {
      display: inline-block;
      width: 150px;
    }

    .edit-form input[type="text"] {
      width: 250px;
      padding: 5px;
    }

    .save-btn, .cancel-btn {
      padding: 5px 10px;
      margin-right: 5px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      cursor: pointer;
    }

    .cancel-btn {
      background-color: #f44336;
    }

    .save-btn:hover, .cancel-btn:hover {
      opacity: 0.8;
    }
  </style>
</head>
<body>
  <div class="navbar">
    <h1>Wellspringx Dashboard</h1>
    <button class="logout-btn">Logout</button>
  </div>

  <div class="container">
    <?php
    // Include the database configuration file
    include 'config.php';

    // Fetch all tables from the database
    $tables = array();
    $result = mysqli_query($conn, "SHOW TABLES");
    while ($row = mysqli_fetch_row($result)) {
      $tables[] = $row[0];
    }

    // Function to fetch and display table data
    function displayTableData($tableName)
    {
      global $conn;

      // Fetch table columns
      $columns = array();
      $result = mysqli_query($conn, "SHOW COLUMNS FROM $tableName");
      while ($row = mysqli_fetch_assoc($result)) {
        $columns[] = $row['Field'];
      }

      // Fetch table rows
      $rows = array();
      $result = mysqli_query($conn, "SELECT * FROM $tableName");
      while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
      }

      // Display table and data
      echo '<h2>' . $tableName . '</h2>';
      echo '<table>';
      echo '<thead>';
      echo '<tr>';
      foreach ($columns as $column) {
        echo '<th>' . $column . '</th>';
      }
      echo '<th>Actions</th>';
      echo '</tr>';
      echo '</thead>';
      echo '<tbody>';
      foreach ($rows as $row) {
        echo '<tr>';
        foreach ($columns as $column) {
          echo '<td>';
          echo '<div class="cell-content">' . $row[$column] . '</div>';
          echo '<input type="text" class="cell-input" value="' . $row[$column] . '" style="display:none">';
          echo '</td>';
        }
        echo '<td>';
        echo '<button class="update-btn" onclick="editRow(this)">Edit</button>';
        echo '<button class="save-btn" onclick="saveRow(this, \'' . $tableName . '\', ' . $row['id'] . ')" style="display:none">Save</button>';
        echo '<button class="cancel-btn" onclick="cancelEdit(this)" style="display:none">Cancel</button>';
        echo '<button class="delete-btn" onclick="deleteRecord(\'' . $tableName . '\', ' . $row['id'] . ')">Delete</button>';
        echo '</td>';
        echo '</tr>';
      }
      echo '</tbody>';
      echo '</table>';

      // Add form for adding new records
      echo '<form class="add-form">';
      echo '<h3>Add New Record</h3>';
      echo '<input type="hidden" name="tableName" value="' . $tableName . '">';
      foreach ($columns as $column) {
        echo '<div>';
        echo '<label for="' . $column . '">' . $column . ':</label>';
        echo '<input type="text" name="data[' . $column . ']" id="' . $column . '">';
        echo '</div>';
      }
      echo '<button type="submit" class="add-btn">Add</button>';
      echo '</form>';
    }

    // Handle create operation
    function createRecord($tableName, $data)
    {
      global $conn;

      $columns = implode(',', array_keys($data));
      $values = "'" . implode("','", array_values($data)) . "'";

      $query = "INSERT INTO $tableName ($columns) VALUES ($values)";
      mysqli_query($conn, $query);
    }

    // Handle update operation
    function updateRecord($tableName, $id, $data)
    {
      global $conn;

      $updates = '';
      foreach ($data as $key => $value) {
        $updates .= $key . "='" . $value . "',";
      }
      $updates = rtrim($updates, ',');

      $query = "UPDATE $tableName SET $updates WHERE id=$id";
      mysqli_query($conn, $query);
    }

    // Handle delete operation
    function deleteRecord($tableName, $id)
    {
      global $conn;

      $query = "DELETE FROM $tableName WHERE id=$id";
      mysqli_query($conn, $query);
    }

    // Check if the request method is POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // Check the type of CRUD operation requested
      if (isset($_POST['action'])) {
        $action = $_POST['action'];

        // Handle different actions
        switch ($action) {
          case 'create':
            $tableName = $_POST['tableName'];
            $data = $_POST['data'];
            createRecord($tableName, $data);
            break;

          case 'update':
            $tableName = $_POST['tableName'];
            $id = $_POST['id'];
            $data = $_POST['data'];
            updateRecord($tableName, $id, $data);
            break;

          case 'delete':
            $tableName = $_POST['tableName'];
            $id = $_POST['id'];
            deleteRecord($tableName, $id);
            break;
        }

        // Redirect to refresh the page
        header('Location: dashboard.php');
        exit();
      }
    }

    // Display data for each table
    foreach ($tables as $table) {
      displayTableData($table);
    }
    ?>
  </div>

  <script>
    // AJAX form submission for adding new records
    $('.add-form').submit(function(event) {
      event.preventDefault();

      var form = $(this);
      var url = form.attr('action');
      var formData = form.serialize();

      $.ajax({
        type: 'POST',
        url: url,
        data: formData,
        success: function(response) {
          location.reload(); // Refresh the page after successful creation
        }
      });
    });

    // Edit row data
    function editRow(button) {
      var row = $(button).closest('tr');
      $(row).find('.cell-content').hide();
      $(row).find('.cell-input').show();
      $(row).find('.update-btn').hide();
      $(row).find('.save-btn').show();
      $(row).find('.cancel-btn').show();
    }

    // Save updated row data
    function saveRow(button, tableName, id) {
      var row = $(button).closest('tr');
      var inputs = $(row).find('.cell-input');

      var data = {};
      $(inputs).each(function() {
        var columnName = $(this).closest('td').prev('td').text();
        var value = $(this).val();
        data[columnName] = value;
      });

      var formData = {
        action: 'update',
        tableName: tableName,
        id: id,
        data: data
      };

      $.ajax({
        type: 'POST',
        url: 'dashboard.php',
        data: formData,
        success: function(response) {
          location.reload(); // Refresh the page after successful update
        }
      });
    }

    // Cancel row editing
    function cancelEdit(button) {
      var row = $(button).closest('tr');
      $(row).find('.cell-content').show();
      $(row).find('.cell-input').hide();
      $(row).find('.update-btn').show();
      $(row).find('.save-btn').hide();
      $(row).find('.cancel-btn').hide();
    }

    // Delete record
    function deleteRecord(tableName, id) {
      var confirmation = confirm('Are you sure you want to delete this record?');
      if (confirmation) {
        var formData = {
          action: 'delete',
          tableName: tableName,
          id: id
        };

        $.ajax({
          type: 'POST',
          url: 'dashboard.php',
          data: formData,
          success: function(response) {
            location.reload(); // Refresh the page after successful deletion
          }
        });
      }
    }

    // Logout button
    $('.logout-btn').click(function() {
    $.ajax({
        url: 'logout.php', // Path to the logout script
        type: 'POST',
        success: function(response) {
        // Redirect to the login page after successful logout
        window.location.href = 'login.html';
        },
        error: function(xhr, status, error) {
        // Handle error if logout request fails
        console.log(error);
        }
    });
    });

  </script>
</body>
</html>
