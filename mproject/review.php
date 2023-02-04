<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get form data
  $bookTitle = $_POST['book-title'];
  $reviewText = $_POST['review-text'];
  $rating = $_POST['rating'];

  // Validate form data
  if (empty($bookTitle) || empty($reviewText) || empty($rating)) {
    echo 'Please fill out all fields';
    exit;
  }

  // Save review to database or file
  // ...

  // Redirect to thank you page
  header('Location: thank-you.php');
  exit;
}
?>
