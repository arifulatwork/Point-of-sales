<?php
// admin-setup.php
require 'config/function.php';

// You can change these details as per your needs
$name = 'Admin Name';
$email = 'admin@example.com';
$password = password_hash('adminpassword', PASSWORD_DEFAULT);  // Hash the password
$phone = '1234567890';
$is_ban = 0;  // Set to 1 if banned

// SQL query to insert admin data
$query = "INSERT INTO admins (name, email, password, phone, is_ban) 
          VALUES ('$name', '$email', '$password', '$phone', '$is_ban')";

// Execute the query
if(mysqli_query($conn, $query)) {
    echo "Admin inserted successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
