<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fale com Michael Scott</title>
    <link rel="stylesheet" href="assets/css/chat.css">
</head>
<body>
    <div class="main-container">
        <a href="/">VOLTAR</a>

        <div class="container">
            <h1>Como posso ajudar?</h1>
            <textarea name="chat" id="chat" readonly  style="width: 40%; height: 300px; resize: none;"></textarea>
            <div class="input-container">
                <input type="text" id="userMessage" placeholder="Mensagem">
                <button id="sendMessage">ENVIAR</button>
            </div>
        </div>

    </div>

    <script>
        const chat = document.getElementById("chat");
        const userMessage = document.getElementById("userMessage");
        const sendMessageButton = document.getElementById("sendMessage");

        function sendMessage() {
            const message = userMessage.value.trim();
            if (message) {
                chat.value += `Você: ${message}\n`;

                userMessage.value = "";

                chat.scrollTop = chat.scrollHeight;
            }
        }

        sendMessageButton.addEventListener("click", sendMessage);
        userMessage.addEventListener("keypress", function(event) {
            if (event.key === "Enter") {
                event.preventDefault();
                sendMessage();
            }
        });
    </script>
</body>
</html>
