  // Function to handle update operation
  function updateRecord(tableName, id) {
    var data = {
      action: 'update',
      tableName: tableName,
      id: id,
      // Add your updated data here (e.g., columnName: value)
      // Example: name: 'John Doe', age: 30
    };

    $.ajax({
      url: 'dashboard.php',
      type: 'POST',
      data: data,
      success: function(response) {
        // Handle success response
        console.log(response);
        // You can perform additional actions here after successful update
      },
      error: function(xhr, status, error) {
        // Handle error response
        console.error(error);
        // You can display an error message or perform other actions here
      }
    });
  }

  // Function to handle delete operation
  function deleteRecord(tableName, id) {
    var data = {
      action: 'delete',
      tableName: tableName,
      id: id
    };

    $.ajax({
      url: 'dashboard.php',
      type: 'POST',
      data: data,
      success: function(response) {
        // Handle success response
        console.log(response);
        // You can perform additional actions here after successful deletion
      },
      error: function(xhr, status, error) {
        // Handle error response
        console.error(error);
        // You can display an error message or perform other actions here
      }
    });
  }