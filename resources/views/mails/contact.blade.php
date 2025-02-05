<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Santé Pro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f8fb;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: #ffffff;
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

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            text-align: left;
            padding: 10px;
            border-bottom: 1px solid #ddd;
            width: 50%;
        }

        th {
            background-color: #f4f4f4;
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
            <h2 class="title">Nouvelle Demande de Contact</h2>
        </div>

        <div class="content">
            <h3>👤 Informations du Client</h3>
            <table>
                <tr>
                    <th>Genre</th>
                    <td>{{ $details['step2']['gender'] }}</td>
                </tr>
                <tr>
                    <th>Nom</th>
                    <td>{{ $details['step4']['lastName'] }}</td>
                </tr>
                <tr>
                    <th>Prénom</th>
                    <td>{{ $details['step4']['firstName'] }}</td>
                </tr>
                <tr>
                    <th>Date de Naissance</th>
                    <td>{{ $details['step2']['birthdate'] }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $details['step4']['email'] }}</td>
                </tr>
                <tr>
                    <th>Téléphone</th>
                    <td>{{ $details['step4']['telephone'] }}</td>
                </tr>
                <tr>
                    <th>Adresse</th>
                    <td>{{ $details['step4']['adresse'] }}</td>
                </tr>
                <tr>
                    <th>Code Postal</th>
                    <td>{{ $details['step4']['postalCode'] }}</td>
                </tr>
                <tr>
                    <th>Ville</th>
                    <td>{{ $details['step4']['ville'] }}</td>
                </tr>
                <tr>
                    <th>Profession</th>
                    <td>{{ $details['step2']['profession'] }}</td>
                </tr>
                <tr>
                    <th>Régime</th>
                    <td>{{ $details['step2']['regime'] }}</td>
                </tr>
                <tr>
                    <th>Complémentaire santé</th>
                    <td>{{ $details['step2']['complementaire'] }}</td>
                </tr>
                <tr>
                    <th>Consentement RGPD</th>
                    <td>{{ $details['step4']['gdprConsent'] ? '✅ Oui' : '❌ Non' }}</td>
                </tr>
            </table>

            <h3>👪 Situation Familiale</h3>
            <table>
                <tr>
                    <th>Statut</th>
                    <td>{{ $details['step3']['familyStatus'] }}</td>
                </tr>
                <tr>
                    <th>Assurer le Conjoint</th>
                    <td>{{ $details['step3']['insureSpouse'] ? '✅ Oui' : '❌ Non' }}</td>
                </tr>
                <tr>
                    <th>Date de Naissance du Conjoint</th>
                    <td>{{ $details['step3']['spouseBirthdate'] ?? '-' }}</td>
                </tr>
                <tr>
                    <th>Nombre d'Enfants</th>
                    <td>{{ $details['step3']['childrenCount'] }}</td>
                </tr>
                <tr>
                    <th>Dates de Naissance des Enfants</th>
                    <td>
                        @if (!empty($details['step3']['childrenBirthdates']))
                            <ul>
                                @foreach ($details['step3']['childrenBirthdates'] as $birthdate)
                                    <li>{{ $birthdate }}</li>
                                @endforeach
                            </ul>
                        @else
                            -
                        @endif
                    </td>
                </tr>
            </table>

            <h3>🏥 Détails de l'Assurance</h3>
            <table>
                <tr>
                    <th>Soins courants</th>
                    <td>{{ $details['step1']['soins'] .'  -  '.$details['step1']['custom']['soins'] }}</td>
                </tr>
                <tr>
                    <th>Optique</th>
                    <td>{{ $details['step1']['optique'] .'  -  '.$details['step1']['custom']['optique'] }}</td>
                </tr>
                <tr>
                    <th>Dentaire</th>
                    <td>{{ $details['step1']['dentaire'] .'  -  '.$details['step1']['custom']['dentaire'] }}</td>
                </tr>
                <tr>
                    <th>Hospitalisation</th>
                    <td>{{ $details['step1']['hospitalisation'] .'  -  '.$details['step1']['custom']['hospitalisation'] }}</td>
                </tr>
                <tr>
                    <th>Aides Auditives</th>
                    <td>{{ $details['step1']['aides_auditives'] .'  -  '.$details['step1']['custom']['aides_auditives'] }}</td>
                </tr>
                <tr>
                    <th>Médecines Douces</th>
                    <td>{{ $details['step1']['medecines_douces'] .'  -  '.$details['step1']['custom']['medecines_douces'] }}</td>
                </tr>
                <tr>
                    <th>Renfort</th>
                    <td>{{ $details['step1']['renfort'] .'  -  '.$details['step1']['custom']['renfort'] }}</td>
                </tr>
            </table>
        </div>

        <div class="footer">
            <p>&copy; {{ date('Y') }} Santé Pro - Tous droits réservés</p>
        </div>
    </div>

</body>

</html>