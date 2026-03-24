<?php
header('Content-Type: application/json');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST['name'] ?? ''));
    $phone = strip_tags(trim($_POST['phone'] ?? ''));
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $hotel = strip_tags(trim($_POST['hotel'] ?? ''));
    $message = strip_tags(trim($_POST['message'] ?? ''));
    $consent = isset($_POST['marketingConsent']) ? 'Yes' : 'No';
    if (empty($name) || empty($phone) || empty($hotel)) {
        echo json_encode(['status' => 'error', 'message' => 'Please fill in all required fields.']);
        exit;
    }
    $to = "sales@acronhotelsgoa.com";
    $subject = "New Website Enquiry: " . ucfirst($hotel) . " - Acron Group of Hotels";
    $email_content = "You have received a new enquiry from the Acron website.\n\n";
    $email_content .= "Name: $name\n";
    $email_content .= "Phone: $phone\n";
    $email_content .= "Email: " . ($email ? $email : 'Not provided') . "\n";
    $email_content .= "Selected Hotel: " . ucfirst($hotel) . "\n\n";
    $email_content .= "Message:\n$message\n\n";
    $email_content .= "Marketing Consent: $consent\n";
    $headers = "From: noreply@acronhotelsgoa.com\r\n";
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $headers .= "Reply-To: $email\r\n";
    }
    if (mail($to, $subject, $email_content, $headers)) {
        echo json_encode(['status' => 'success', 'message' => 'Thank you! Your enquiry has been sent.']);
    } else {
        http_response_code(500);
        echo json_encode(['status' => 'error', 'message' => 'Oops! The server failed to send your message.']);
    }
} else {
    http_response_code(403);
    echo json_encode(['status' => 'error', 'message' => 'Invalid submission method.']);
}
