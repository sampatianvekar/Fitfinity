<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $rating = $_POST["rating"];
  $comments = $_POST["comments"];

  

  // Display the feedback in the HTML of the same page
  echo "<div id='feedback'>";
    echo "<h2>Your Feedback</h2>";
    echo "<p>Rating: $rating</p>";
    echo "<p>Comments: $comments</p>";
  echo "</div>";
}
?>