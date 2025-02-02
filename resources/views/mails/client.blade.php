<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Confirmation de votre demande - Santé Pro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <style>
    /* Global styles */
    body {
      margin: 0;
      padding: 0;
      font-family: 'Arial', sans-serif;
      color: #333;
    }
    /* Hidden preheader text for inbox previews */
    .preheader {
      display: none;
      font-size: 1px;
      line-height: 1px;
      max-height: 0;
      max-width: 0;
      opacity: 0;
      overflow: hidden;
    }
    /* Main container */
    .container {
        background-color: #f4f8fb !important;
        max-width: 600px;
      margin: 20px auto;
      background: #ffffff;
      padding: 25px;
      border-radius: 8px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      border-left: 6px solid #007bff;
    }
    /* Header section */
    .header {
      text-align: center;
      padding-bottom: 15px;
      border-bottom: 2px solid #ddd;
    }
    .header h1 {
      margin: 0;
      font-size: 26px;
      color: #007bff;
    }
    .header p {
      margin: 5px 0 0;
      font-size: 14px;
      color: #555;
    }
    /* Banner image */
    .banner {
      margin: 20px 0;
    }
    .banner img {
      width: 100%;
      border-radius: 6px;
      display: block;
    }
    /* Content section */
    .content {
      text-align: center;
      padding: 20px 0;
    }
    .content p {
      margin: 10px 0;
      font-size: 16px;
      line-height: 1.6;
    }
    /* Contact information block */
    .contact-info {
      padding: 15px;
      border-radius: 6px;
      margin: 20px 0;
      text-align: center;
    }
    .contact-info p {
      margin: 8px 0;
      font-size: 14px;
      color: #555;
    }
    .contact-info a {
      color: #007bff;
      text-decoration: none;
      font-weight: bold;
    }
    .contact-info a:hover {
      text-decoration: underline;
    }
    /* Button styles */
    .btn {
      display: inline-block;
      background: #007bff;
      color: #ffffff !important;
      text-decoration: none;
      padding: 14px 30px;
      border-radius: 6px;
      font-size: 16px;
      margin-top: 20px;
      transition: background 0.3s ease;
    }
    .btn:hover {
      background: #0056b3;
    }
    /* Footer section */
    .footer {
      text-align: center;
      padding: 15px;
      border-top: 1px solid #ddd;
      margin-top: 25px;
      font-size: 14px;
      color: #666;
    }
    .footer a {
      color: #007bff;
      text-decoration: none;
    }
    .footer a:hover {
      text-decoration: underline;
    }
    /* Responsive adjustments */
    @media screen and (max-width: 600px) {
      .container {
        width: 90% !important;
        /* margin: 10px;
        padding: 20px; */
      }
    }
  </style>
</head>
<body>
  <!-- Hidden preheader text -->
  <span class="preheader">Votre demande a été enregistrée. Un de nos conseillers vous contactera sous peu.</span>

  <div class="container">
    <div class="header">
      <h1>Santé Pro Audio</h1>
      <p>Votre partenaire en assurance santé</p>
    </div>

    <div class="content">
      <p>Bonjour {{ $details['step4']['firstName'] }},</p>
      <p>Nous avons bien enregistré votre demande. Un de nos conseillers vous contactera dans les plus brefs délais.</p>
      <p>Pour toute question ou modification, n’hésitez pas à nous contacter :</p>
      
      <div class="contact-info">
        <p>📞 <strong>Service Client :</strong> <a href="tel:+33146592228">01 46 59 22 28</a>  </p>
        <p>📧 <strong>Email :</strong> <a href="mailto:contact@santeproaudio.fr">contact@santeproaudio.fr</a></p>
      </div>
      
      <a href="https://santeproaudio.fr/" class="btn btn-primary text-white">Visitez notre site</a>
    </div>

    <div class="footer">
      <p>&copy; {{ date('Y') }} Santé Pro Audio - Tous droits réservés</p>
    </div>
  </div>
</body>
</html>
