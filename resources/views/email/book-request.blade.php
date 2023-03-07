<!DOCTYPE html>
<html>
<head>
    <title>Book Request from FLMS System</title>
</head>
<body>
    <h1>{{ $mailData['title'] }}</h1>
    <p>{{ $mailData['body'] }}</p>

    <p>
        Email Generated on: {{ date('d-m-Y h:i:s') }}
    </p>
     
    <p>Thank you</p>
</body>
</html>