<!DOCTYPE html>
<html>

<head>
    <title>Devis: Décennale Express</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333333;
            margin: 0;
            padding: 0;
        }

        .email-container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .email-header {
            background-color: #0066cc;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }

        .email-body {
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            vertical-align: top;
            font-size: 14px;
        }

        th {
            background-color: #f4f4f4;
            color: #555555;
            font-weight: bold;
        }

        td {
            background-color: #ffffff;
        }

        tr:nth-child(even) td {
            background-color: #f9f9f9;
        }

        a {
            color: #0066cc;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .footer {
            background-color: #0066cc;
            color: white;
            text-align: center;
            padding: 15px;
            font-size: 14px;
        }

        /* Responsive Design */
        @media (max-width: 600px) {
            .email-container {
                margin: 10px;
            }

            th, td {
                display: block;
                width: 100%;
                text-align: left;
                padding: 8px;
            }

            th {
                background-color: transparent;
                color: #333333;
                font-weight: normal;
            }

            td {
                background-color: #f9f9f9;
                border-bottom: 1px solid #e0e0e0;
            }

            tr:nth-child(even) td {
                background-color: #ffffff;
            }
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="email-header">
            Devis: Santé Pro
        </div>
        <div class="email-body">
            {{-- <table>
                <tr>
                    <th>Profession</th>
                    <td>{{ $details['step1']['profession'] }}</td>
                </tr>
                <tr>
                    <th>Num de SIREN</th>
                    <td>{{ $details['step1']['siren'] }}</td>
                </tr>
                <tr>
                    <th>Entreprise</th>
                    <td>{{ $details['step2']['nom_entreprise'] }}</td>
                </tr>
                <tr>
                    <th>Type</th>
                    <td>{{ $details['step2']['type'] }}</td>
                </tr>
                <tr>
                    <th>Adresse</th>
                    <td>{{ $details['step2']['adresse'] }}</td>
                </tr>
                <tr>
                    <th>Code Postal</th>
                    <td>{{ $details['step2']['code_postal'] }}</td>
                </tr>
                <tr>
                    <th>Ville</th>
                    <td>{{ $details['step2']['ville'] }}</td>
                </tr>
                <tr>
                    <th>Mobile</th>
                    <td>{{ $details['step2']['mobile'] }}</td>
                </tr>
                <tr>
                    <th>Mail</th>
                    <td><a href="mailto:{{ $details['step2']['mail'] }}" target="_blank">{{ $details['step2']['mail'] }}</a></td>
                </tr>
                <tr>
                    <th>Nombre de Salariés + Patron</th>
                    <td>{{ $details['step2']['nombre_salaries'] }}</td>
                </tr>
                <tr>
                    <th>Chiffre d'affaires</th>
                    <td>{{ $details['step2']['chiffre_affaires'] }}</td>
                </tr>
                <tr>
                    <th>Date de création</th>
                    <td>{{ $details['step2']['date_creation'] }}</td>
                </tr>
                <tr>
                    <th>Nom &amp; Prénom du Dirigeant</th>
                    <td>{{ $details['step2']['nom_dirigeant'] }}</td>
                </tr>
                <tr>
                    <th>Date de Naissance</th>
                    <td>{{ $details['step2']['date_naissance'] }}</td>
                </tr>
                <tr>
                    <th>Avez-vous déjà été assuré</th>
                    <td>{{ $details['step3']['deja_assure'] }}</td>
                </tr>
                <tr>
                    <th>Nombre d'années d'assurance</th>
                    <td>{{ $details['step3']["assureur"]['annee'] }}</td>
                </tr>
                <tr>
                    <th>Votre contrat est-il en cours</th>
                    <td>{{ $details['step3']["assureur"]['en_cours'] }}</td>
                </tr>
                <tr>
                    <th>Date de résiliation de votre dernier contrat</th>
                    <td>{{ $details['step3']["assureur"]['date_resiliation'] }}</td>
                </tr>
                <tr>
                    <th>Nom de l'ancienne compagnie</th>
                    <td>{{ $details['step3']["assureur"]['nom'] }}</td>
                </tr>
                <tr>
                    <th>Nombre de sinistres déclarés sur 36 mois</th>
                    <td>{{ $details['step3']["assureur"]['nombre_sinistre'] }}</td>
                </tr>
                <tr>
                    <th>Montant des sinistres déclarés sur 36 mois</th>
                    <td>{{ $details['step3']["assureur"]['montant_sinistre'] }}</td>
                </tr>
                <tr>
                    <th>Votre ancien contrat a-t-il été résilié pour non-paiement</th>
                    <td>{{ $details['step3']["assureur"]['non_paiement'] }}</td>
                </tr>
                <tr>
                    <th>Si oui, avez-vous réglé l’arriéré à la compagnie</th>
                    <td>{{ $details['step3']["assureur"]['arriere'] }}</td>
                </tr>
                <tr>
                    <th>Votre ancien contrat a-t-il été résilié pour fausse déclaration</th>
                    <td>{{ $details['step3']["assureur"]['fausse_declaration'] }}</td>
                </tr>
                <tr>
                    <th>Donnez vous des chantiers en sous traitance à plus de 30%</th>
                    <td>{{ $details['step4']['chantiers_sous_traitance'] }}</td>
                </tr>
                <tr>
                    <th>Souhaitez vous la reprise du passé sur 1 an (+15%)</th>
                    <td>{{ $details['step4']['reprise_un_annee'] }}</td>
                </tr>
                <tr>
                    <th>Etes-vous en redressement judiciaire</th>
                    <td>{{ $details['step4']['redressement_judiciaire'] }}</td>
                </tr>
                <tr>
                    <th>Avez-vous des diplomes du batiment</th>
                    <td>{{ $details['step4']['diplomes_batiment'] }}</td>
                </tr>
                <tr>
                    <th>Activité principale</th>
                    <td>{{$details['step5'][0]}}</td>
                </tr>
                <tr>
                    <th>Réalisez-vous des activités secondaires</th>
                    <td>
                        <ul>
                            @foreach ( $details['step5'] as $activity)
                            <li>{{ $activity }}</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th>Date d'effet demandée</th>
                    <td>{{ $details['step6']['date_effet'] }}</td>
                </tr>
                <tr>
                    <th>Franchise</th>
                    <td>{{ $details['step6']['franchise'] }}</td>
                </tr>
                <tr>
                    <th>Fractionnement</th>
                    <td>{{ $details['step6']['fractionnement'] }}</td>
                </tr>
                <tr>
                    <th>Observations diverses</th>
                    <td>{{ $details['step6']['observations_diverses'] }}</td>
                </tr>
            </table> --}}
        </div>
        <div class="footer">
            © 2025 SANTÉ PRO. All rights reserved.
        </div>
    </div>
</body>

</html>