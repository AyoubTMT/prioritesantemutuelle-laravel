<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
    <h2>Nouveau message de contact</h2>
    <p><strong>Prénom:</strong> {{ $contactData['firstName'] }}</p>
    <p><strong>Nom:</strong> {{ $contactData['lastName'] }}</p>
    <p><strong>Email:</strong> {{ $contactData['email'] }}</p>
    <p><strong>Numéro de téléphone:</strong> {{ $contactData['phone'] }}</p>
    <p><strong>Message:</strong> {{ $contactData['message'] }}</p>
</body>
</html>
