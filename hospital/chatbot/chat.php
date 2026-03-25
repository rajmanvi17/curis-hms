<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Chatbot</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <style>
        .chat-container {
            max-width: 400px;
            margin: 20px auto;
            border: 1px solid #ddd;
            border-radius: 8px;
        }
        .chat-header {
            background: #00a1ff;
            color: white;
            padding: 15px;
            border-radius: 8px 8px 0 0;
        }
        .chat-messages {
            height: 400px;
            overflow-y: auto;
            padding: 15px;
            background: #f9f9f9;
        }
        .message {
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 5px;
        }
        .user-message {
            background: #e3f2fd;
            margin-left: 20%;
        }
        .bot-message {
            background: white;
            margin-right: 20%;
        }
        .chat-input {
            padding: 15px;
            background: white;
            border-top: 1px solid #ddd;
        }
        .chat-input input {
            width: 80%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .chat-input button {
            width: 18%;
            padding: 8px;
            background: #00a1ff;
            color: white;
            border: none;
            border-radius: 4px;
            margin-left: 2%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="chat-container">
            <div class="chat-header">
                <h4 class="mb-0">Hospital Assistant</h4>
            </div>
            <div class="chat-messages" id="chatMessages">
                <div class="message bot-message">
                    Hello! How can I help you today?
                </div>
            </div>
            <div class="chat-input">
                <input type="text" id="userInput" placeholder="Type your message...">
                <button onclick="sendMessage()">Send</button>
            </div>
        </div>
    </div>

    <script src="../assets/js/jquery.min.js"></script>
    <script>
        function sendMessage() {
            const userInput = document.getElementById('userInput');
            const message = userInput.value.trim();
            
            if (message === '') return;

            // Add user message to chat
            addMessage(message, 'user');
            userInput.value = '';

            // Get bot response
            $.ajax({
                url: 'chatbot.php',
                method: 'POST',
                data: { message: message },
                dataType: 'json',
                success: function(data) {
                    addMessage(data.response, 'bot');
                },
                error: function() {
                    addMessage("Sorry, there was an error processing your request.", 'bot');
                }
            });
        }

        function addMessage(message, sender) {
            const chatMessages = document.getElementById('chatMessages');
            const messageDiv = document.createElement('div');
            messageDiv.className = `message ${sender}-message`;
            messageDiv.textContent = message;
            chatMessages.appendChild(messageDiv);
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }

        // Allow Enter key to send message
        document.getElementById('userInput').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                sendMessage();
            }
        });
    </script>
</body>
</html>
