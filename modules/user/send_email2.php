<?php

if (!defined('_CODE')) {
    die('Access denied');
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    if (!empty($email)) {
        $dataInsert = [
            'email' => $email,
        ];
        $insertStatus = insert('email', $dataInsert);
        if ($insertStatus) {
            echo json_encode(['status' => 'success', 'message' => 'Email sent successfully!']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to send email.']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'All fields are required.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request.']);
}
