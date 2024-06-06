<?php include "db.php"; ?>

<?php
$error_message = "";

if (isset($_POST['sign_up'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate inputs
    if (empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($confirm_password)) {
        $error_message = "All fields are required.";
    } else {
        // Check if email is already taken
        $check_query = "SELECT * FROM account WHERE email = ?";
        $check_stmt = mysqli_prepare($connection, $check_query);

        if ($check_stmt) {
            mysqli_stmt_bind_param($check_stmt, "s", $email);
            mysqli_stmt_execute($check_stmt);
            mysqli_stmt_store_result($check_stmt);

            if (mysqli_stmt_num_rows($check_stmt) > 0) {
                $error_message = "Email is already taken. Please choose another one.";
            } else {
                // Check if password and confirm password match
                if ($password !== $confirm_password) {
                    $error_message = "Password and Confirm Password do not match.";
                } else {
                    // Hash the password
                    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                    
                    $query = "INSERT INTO account (firstname, lastname, email, password) VALUES (?, ?, ?, ?)";
                    $insert_user = mysqli_prepare($connection, $query);

                    if ($insert_user) {
                        mysqli_stmt_bind_param($insert_user, "ssss", $firstname, $lastname, $email, $hashed_password);
                        $result = mysqli_stmt_execute($insert_user);

                        if ($result) {
                            
                            header("Location: ../index.php");
                            exit;
                        } else {
                            $error_message = "Query Failed! " . mysqli_stmt_error($insert_user);
                        }

                        mysqli_stmt_close($insert_user);
                    } else {
                        $error_message = "Insert statement preparation failed.";
                    }
                }
            }

            mysqli_stmt_close($check_stmt);
        } else {
            $error_message = "Check statement preparation failed.";
        }
    }
}

// Display error message if any
if (!empty($error_message)) {
    echo '<script>alert("' . $error_message . '"); window.location.href = "../sign_in.php";</script>';
}
?>