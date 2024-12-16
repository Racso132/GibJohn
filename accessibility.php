<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accessibility Page</title>
    <style> 
        body {
            font-family: Arial, sans-serif;
        }
        .content {
            /* Default styles */
            color: #000;
            font-size: 16px;
        } 
    </style>
</head>
<body> 
    <h1>Accessibility Settings</h1>
    <form id="accessibility-form">
        <label for="font-color">Font Color:</label>
        <input type="color" id="font-color" name="font-color" value="#000000"><br><br>
        <label for="font-size">Font Size:</label>
        <input type="number" id="font-size" name="font-size" value="16" min="10" max="72"><br><br>
        <button type="button" onclick="applySettings()">Apply</button>
    </form>
    <div class="content" id="content">
        <p>Nothing to see here</p>
        <!-- ...existing code... -->
    </div>
    <script>
        function applySettings() {
            var fontColor = document.getElementById('font-color').value;
            var fontSize = document.getElementById('font-size').value + 'px';
            var content = document.getElementById('content');
            content.style.color = fontColor;
            content.style.fontSize = fontSize;
        }
    </script>
</body>
</html> 
<?php
