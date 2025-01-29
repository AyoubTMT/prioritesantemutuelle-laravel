<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de votre demande - Santé Pro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f8fb;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-left: 5px solid #007bff;
        }

        .header {
            text-align: center;
            padding: 10px 0;
            border-bottom: 2px solid #ddd;
        }

        .header img {
            max-width: 150px;
        }

        .title {
            color: #007bff;
            font-size: 22px;
            margin: 10px 0;
        }

        .content {
            padding: 20px 0;
        }

        p {
            font-size: 16px;
            line-height: 1.6;
            color: #333;
        }

        .summary {
            background: #f4f4f4;
            padding: 10px;
            border-radius: 5px;
            font-size: 14px;
        }

        .footer {
            text-align: center;
            padding: 15px;
            font-size: 14px;
            color: #666;
        }

        .btn {
            display: inline-block;
            padding: 10px 15px;
            background: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="header">
            <h1>Santé Pro</h1>
            <h2 class="title">Merci pour votre demande !</h2>
        </div>

        <div class="content">
            <p>Bonjour {{ $details['step4']['firstName'] }},</p>
            <p>Nous avons bien reçu votre demande d’information. Un de nos conseillers prendra contact avec vous sous
                peu.</p>

            <p>📌 <strong>Récapitulatif de votre demande :</strong></p>
            <div class="summary">
                <p><strong>Nom :</strong> {{ $details['step4']['lastName'] }}</p>
                <p><strong>Prénom :</strong> {{ $details['step4']['firstName'] }}</p>
                <p><strong>Email :</strong> {{ $details['step4']['email'] }}</p>
                <p><strong>Téléphone :</strong> {{ $details['step3']['phone'] }}</p>
                <p><strong>Régime :</strong> {{ $details['step2']['regime'] }}</p>
            </div>

            <p>Si vous avez des questions, n’hésitez pas à nous contacter :</p>
            <p>📞 <strong>Service Client :</strong> <a href="tel:+33123456789">01 23 45 67 89</a></p>
            <p>📧 <strong>Email :</strong> <a href="mailto:contact@santeproaudio.fr">contact@santeproaudio.fr</a></p>

            <p>Merci de votre confiance et à bientôt !</p>

            <p style="text-align:center;">
                <a href="https://santeproaudio.fr/" class="btn">Visitez notre site</a>
            </p>
        </div>

        <div class="footer">
            <p>&copy; {{ date('Y') }} Santé Pro - Tous droits réservés</p>
        </div>
    </div>

</body>

</html>