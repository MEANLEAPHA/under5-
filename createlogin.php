<?php
session_start();
$con = new mysqli('localhost', 'root', '', 'online_shop');

if (!$con) {
    die('Connection Failed..!');
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Registration Logic
    if (isset($_POST['btnDissave'])) {
        $Email = $_POST['emails'];
        $Password = $_POST['passwords'];
        $fullname=$_POST['username'];
        // Hash the password
        $hashedPassword = password_hash($Password, PASSWORD_DEFAULT);
        $DQL = "INSERT INTO `tbl_user`(`USER-ID`, `USER_FULLNAME`, `USER_EMAIL`, `USER-PASSWORD`)
         VALUES (Null,'$fullname','$Email','$hashedPassword')";
        $res = $con->query($DQL);
        
        // Check if the user is the admin
        if ($Email === 'meanleapha@gmail.com' && $Password === 'leap333') {
            header('Location: http://localhost/PHP/shop/admin/index.php');
            exit();
        } else {
            header('Location: http://localhost/PHP/shop/client/index.php'); // Redirect to user area
            exit();
        }
    }

    
        }
    

    if (isset($_POST['btnDislogin'])) {
        // Login Logic
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Prepare an SQL query to fetch the user
        $sql = "SELECT * FROM tbl_user WHERE USER_EMAIL = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if a user with the provided email exists
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            // Verify the password (make sure passwords are hashed in your database)
            if ($password === $user['USER-PASSWORD']) {
                // Successful login, set session variables
                $_SESSION['user_id'] = $user['USER-ID'];
                $_SESSION['user_email'] = $user['USER_EMAIL'];

                // Redirect to the client area
                header('Location: http://localhost/PHP/shop/client/index.php');
                exit();
            } else {
                // Incorrect password
                echo "Invalid password. Please try again.";
            }
        } else {
            // User not found
            echo "No account found with that email.";
        }
    }

?>
