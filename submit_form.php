<?php
include("connection.php");

$first_name = isset($_POST['first-name']) ? $_POST['first-name'] : '';
$second_name = isset($_POST['second-name']) ? $_POST['second-name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$phone_number = isset($_POST['phone-number']) ? $_POST['phone-number'] : '';
$rating = isset($_POST['rating']) ? $_POST['rating'] : '';
$recommendation = isset($_POST['recommendation']) ? $_POST['recommendation'] : '';
$additional_feedback = isset($_POST['additionalFeedback']) ? $_POST['additionalFeedback'] : '';
$find_question = isset($_POST['findQuestion']) ? $_POST['findQuestion'] : '';
$additional_feedback_find = isset($_POST['additionalFeedbackFind']) ? $_POST['additionalFeedbackFind'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';

$staff_treatment = isset($_POST['staffTreatment']) ? $_POST['staffTreatment'] : '';
$additional_feedback_staff = isset($_POST['additionalFeedbackStaff']) ? $_POST['additionalFeedbackStaff'] : '';

$sql = "INSERT INTO feedback_data (first_name, second_name, email, phone_number, rating, recommendation, additional_feedback, find_question, additional_feedback_find, staffTreatment, additionalFeedbackStaff, message)
VALUES ('$first_name', '$second_name', '$email', '$phone_number', '$rating', '$recommendation', '$additional_feedback', '$find_question', '$additional_feedback_find', '$staff_treatment', '$additional_feedback_staff', '$message')";
if ($conn->query($sql) === TRUE) {
    $buttonStyle = 'btn-success'; 
    $buttonStyle = 'btn-danger'; 

     $buttonStyle = 'background-color: #28a745; border-color: #28a745; color: #fff;'; 

    $response = array("success" => true, "message" => "New record created successfully", "buttonStyle" => $buttonStyle);
} else {
    $response = array("success" => false, "message" => "Error: " . $sql . "<br>" . $conn->error);
}

echo json_encode($response);

$conn->close();
?>
