<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $data = json_decode(file_get_contents('php://input'), true);
  if (isset($data['subject']) && isset($data['from']) && isset($data['message'])) {
    // mails always go to Lou 
    $to = "kontakt@lou-taylor.ch";
    $subject = $data['subject'];
    $message = "This mail is straight (ew) from the contact form!\n" . $data['message'];
    $headers = 'From: ' . $data['from'];
    $success = mail($to, $subject, $message, $headers);

    if ($success) {
      $response = ['status' => 'success', 'message' => 'Email sent successfully'];
    } else {
      $response = ['status' => 'error', 'message' => 'Failed to send email'];
    }
  } else {
    $response = ['status' => 'error', 'message' => 'Missing required fields'];
  }
} else {
  $response = ['status' => 'error', 'message' => 'Invalid request method'];
}
header('Content-Type: application/json');
echo json_encode($response);
