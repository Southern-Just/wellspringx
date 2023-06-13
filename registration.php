<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wellspringx registration</title>
    <link rel="stylesheet" href="registration.css">
</head>
<body>
    <form action="" method="">
        <h2>Get registered!</h2>
        <div class="inputbox">
            <input type="text" name="username" required>
            <label>Username</label>
        </div>
        <div class="inputbox">
            <input type="text" name="email" required>
            <label>Email</label>
        </div>
        <div class="inputbox">
            <input type="password" name="password" required>
            <label>Create Password</label>
        </div>
        <div class="inputbox">
            <input type="password" name="confirm_password" required>
            <label>Confirm Password</label>
        </div>
        <div class="inputbox">
            <input type="submit" value="Register">
        </div>
        <p>Already have an account? <a href="login.php">Login</a></p>
    </form>
    
    <script>
        let label = document.querySelectorAll('label').forEach(label => {
            label.innerHTML = label.innerText.split('').map((letters, i) => `<span style="transition-delay: ${i * 50}ms">${letters}</span>`).join('');
        });
    </script>
</body>
</html>
