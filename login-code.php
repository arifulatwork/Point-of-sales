<?php
    session_start();

    // Skip the login validation
    if (isset($_POST['login'])) {
        // You can set the session variables directly here for bypassing
        $_SESSION['loggedIn'] = true;
        $_SESSION['loggedInUser'] = [
            'user_id' => 1,  // Use a test user ID or a default value
            'name' => 'Admin', // Set the name of the logged-in user
            'email' => 'admin@example.com', // Test email
            'phone' => '1234567890', // Test phone number
        ];

        // Redirect to the admin dashboard or home page
        header('Location: admin/index.php');
        exit(0);
    }
?>
