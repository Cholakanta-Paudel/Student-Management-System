<?php 
$con = mysqli_connect("localhost","root","","project") or die(mysql_error());

$name = $_POST['name'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$register_no = $_POST['register_no'];
$password = $_POST['password']; // Hash the password for security
$roll_no = $_POST['roll_no'];
$year = $_POST['year'];

// Check if the email already exists
$emailCheckQuery = "SELECT * FROM login1 WHERE email = '$email'";
$result = mysqli_query($con, $emailCheckQuery);

if (mysqli_num_rows($result) > 0) {
    // Email already exists, display an error
    echo "Error: Email already exists. Please choose a different email.";
} else {
    // Email doesn't exist, proceed with registration
    // Insert data into the database
    $sql = "INSERT INTO login1 (roll_no, register_no, name, year, dob, email, password) VALUES ('$roll_no', '$register_no', '$name', '$year', '$dob', '$email', '$password')";

    if (mysqli_query($con, $sql)) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}

// Close the database connection
mysqli_close($con);
?>