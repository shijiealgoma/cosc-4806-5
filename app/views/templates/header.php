<?php
if (!isset($_SESSION['auth'])) {
    header('Location: /login');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="icon" href="/favicon.png">
        <title>COSC 4806</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="mobile-web-app-capable" content="yes">
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f9;
                margin: 0;
                padding: 0;
            }

            .container {
                width: 80%;
                margin: 0 auto;
                padding: 20px;
            }

            header {
                background-color: #35424a;
                color: #ffffff;
                padding: 10px 0;
                text-align: center;
            }

            header h1 {
                margin: 0;
            }

            nav {
                margin: 20px 0;
                text-align: center;
            }

            nav a {
                margin: 0 15px;
                text-decoration: none;
                color: #35424a;
            }

            nav a:hover {
                text-decoration: underline;
            }

            .main-content {
                background-color: #ffffff;
                padding: 20px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            .main-content h2 {
                color: #35424a;
            }

            .main-content p {
                line-height: 1.6;
            }

            .main-title {
                color: lightblue;
                text-align: left;
                font-size: 40px;
                font-weight: 800;
            }

            footer {
                background-color: #35424a;
                color: #ffffff;
                text-align: center;
                padding: 10px 0;
                position: fixed;
                bottom: 0;
                width: 100%;
            }

            .inRow{
                width: 100%;
                display:flex;
                flex-direction: row;
                justify-content: space-between;
                align-content: center;
            }

            .pr50{
                padding-right:50px;
            }
        </style>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">COSC 4806</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/home">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/reminders">Reminders</a>
        </li>
        <!-- logout -->
        <li class="nav-item">
            <a class="nav-link" href="/logout">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>