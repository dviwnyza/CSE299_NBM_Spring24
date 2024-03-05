<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $rubric_link = $_POST['link1'];
    $student_details_link = $_POST['link2'];

   
    if (empty($rubric_link) || empty($student_details_link)) {
        echo "<p>Please fill in all fields.</p>";
    } else {
        // we will retrieve the data from spreadsheet
        //rubric to question answer form and email the google form 
    }
}
?>