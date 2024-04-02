<?php

include_once 'server.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query to check if user exists
    $stmt = $db_connection->prepare("SELECT id, username, email, password FROM users WHERE username = ?");
    $stmt->bind_param("ss", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    // Verify password if user exists
    if ($user && password_verify($password, $user['password'])) {
        // Login successful
        // Start session and store user data if needed
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];

        //Redirect to dashboard or another page
        header("Location: dashboard.php");
        exit();
    } else {
        // Login failed, show error message
        $error_message = "Invalid username or password.";
    }

    // Close the statement and database connection
    $stmt->close();
    $db_connection->close();
}

?>
