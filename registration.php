<?php



//Initialize variables to store error messages
$errors = [];

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include 'server.php';
    // Validate form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];

    // Validate username
    if (empty($username)) {
        $errors['username'] = "Username is required.";
    }

    // Validate email
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email format or email is empty.";
    }

    // Validate password
    if (empty($password)) {
        $errors['password'] = "Password is required.";
    }

    // Validate confirm password
    if ($password !== $confirm_password) {
        $errors['confirm_password'] = "Passwords do not match.";
    }

    // Validate first name and last name
    if (empty($first_name) || empty($last_name)) {
        $error['name'] = "First name and Last name are required.";
    }

    // If no validation errors, proceed to hash password and insert into database
    if (empty($errors)) {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Prepare the INSERT statement
        $stmt = $conn->prepare("INSERT INTO users (username, email, password, first_name, last_name) VALUES (?, ?, ?, ?, ?)");

        // Bind parameters and execute the statement
        $stmt->bind_param("sssss", $username, $email, $hashed_password, $first_name, $last_name);
        if ($stmt->execute()) {
            // Registration successful, redirect to login page or another page
            header("Location: login.html");
            exit();
        } else {
            // Error inserting data into database
            $errors['database'] = "Error registering user. Please try again later.";
        }

        // Close the statement
        $stmt->close();
    }
}

$conn->close();

?>