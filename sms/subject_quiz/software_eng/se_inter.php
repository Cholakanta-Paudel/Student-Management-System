<?php
include '../../db.php';

// Start the session (assuming you are using sessions for tracking user information)
session_start();

$email = $_SESSION['email'];
$userScore = $_POST['userScore'];

// Check if the user with the given email already exists in the database
$existingScoreQuery = "SELECT se_inter FROM scores WHERE email = '$email'";
$existingScoreResult = $con->query($existingScoreQuery);

if ($existingScoreResult->num_rows > 0) {
    // User exists, compare the scores
    $row = $existingScoreResult->fetch_assoc();
    $existingScore = $row['se_inter'];

    // Update the score only if the new score is higher
    if ($userScore > $existingScore) {
        $updateScoreQuery = "UPDATE scores SET se_inter = $userScore WHERE email = '$email'";
        if ($con->query($updateScoreQuery) === TRUE) {
            echo "Score updated successfully";
        } else {
            echo "Error updating score: " . $con->error;
        }
    } else {
        echo "User already has a higher or equal score";
    }
} else {
    // User doesn't exist, insert a new record
    $insertScoreQuery = "INSERT INTO scores (email, se_inter) VALUES ('$email', $userScore)";
    if ($con->query($insertScoreQuery) === TRUE) {
        echo "Score stored successfully";
    } else {
        echo "Error storing score: " . $con->error;
    }
}
?>
