<?php
session_start();
include('../hms/include/config.php');

// Function to get chatbot response
function getChatbotResponse($message) {
    $message = strtolower($message);
    
    $responses = [
        'appointment' => "You can book an appointment by logging in and visiting the 'Book Appointment' section, or call our reception.",
        'timing' => "Our hospital is open 24/7 for emergencies. Regular consultation hours are from 9 AM to 6 PM.",
        'doctor' => "We have specialists in various fields. Please specify which department you're looking for.",
        'emergency' => "For emergencies, please call our emergency hotline or visit our emergency department immediately.",
        'location' => "We are located at [Hospital Address]. You can find directions on our contact page.",
        'contact' => "You can reach us at [Contact Number] or email us at [Email].",
        'hello' => "Hello! How can I help you today?",
        'hi' => "Hi! How may I assist you?",
    ];

    foreach ($responses as $keyword => $response) {
        if (strpos($message, $keyword) !== false) {
            return $response;
        }
    }

    return "I'm sorry, I couldn't understand your query. Please try rephrasing or contact our reception for assistance.";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';
    if (!empty($message)) {
        $response = getChatbotResponse($message);
        echo json_encode(['response' => $response]);
        exit;
    }
}
?>
