<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phản Hồi Liên Hệ</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #007bff;
            text-align: center;
        }
        p {
            color: #555;
            line-height: 1.6;
            margin: 10px 0;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 0.9em;
            color: #777;
        }
        .highlight {
            color: #007bff;
            font-weight: bold;
        }
        .reply-content {
            background-color: #f9f9f9;
            border-left: 4px solid #007bff;
            padding: 10px;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Phản Hồi từ DU HỌC QT</h1>
        <div class="reply-content">
            <p>{{ $replyContent }}</p>
        </div>
        <p>Cảm ơn bạn đã liên hệ với chúng tôi!</p>
        
        <div class="footer">
            <p>Trân trọng,</p>
            <p>Đội ngũ DU HỌC QT</p>
        </div>
    </div>
</body>
</html>