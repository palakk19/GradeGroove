<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GradeGroove</title>
  <style> </style></head>
  <body> 
  <?php
  if ($_SERVER['REQUEST_METHOD']=='GET'){$physics_score = 0;
    $ds_score = 0;

    if (isset($_POST['p_question1']) && isset($_POST['p_question2']) && isset($_POST['p_question3'])) {
        if ($_POST['p_question1'] == 'b') {
        $physics_score++;
    }
    if ($_POST['p_question2'] == 'b') {
        $physics_score++;
    }
    if ($_POST['p_question3'] == 'b') {
        $physics_score++;
    }}

    if (isset($_POST['d_question1']) && isset($_POST['d_question2']) && isset($_POST['d_question3'])) {
        if ($_POST['d_question1'] == 'a') {
        $ds_score++;
    }
    if ($_POST['d_question2'] == 'a') {
        $ds_score++;
    }
    if ($_POST['d_question3'] == 'a') {
        $ds_score++;
    }}

    echo "<h2>Test Results</h2>";
echo "<p>Physics Score: $physics_score</p>";
echo "<p>Maths Score: $maths_score</p>";

echo "<h2>Based on your results:</h2>";
<br>


    if ($physics_score > $ds_score) {
    echo "<p>You may study Electronics <a href='physics_resources.html'>IC-161 Applied Electronics</a></p>";
} else if($ds_score > $physics_score) {
    echo "<p>You may study Data Science <a href='beginner_physics.html'>IC-252 Data Science2</a></p>";
}
else{
    echo "<p>You may choose <a href='physics_resources.html'>IC-161 Applied Electronics</a> <a href='beginner_physics.html'>IC-252 Data Science2</a></p>";
}}
  
?>
  </body>
  
    
    
  </html>