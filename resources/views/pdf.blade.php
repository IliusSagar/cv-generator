<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
</head>
<body>
    <h1>Record Details</h1>
    <p><strong>Name:</strong> {{ $record->name }}</p>
    <p><strong>Email:</strong> {{ $record->email }}</p>
    <p><strong>Message:</strong> {{ $record->message }}</p>
</body>
</html>
