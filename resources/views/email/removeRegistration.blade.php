<!DOCTYPE html>
<html>
<head>
    <title>Rent A Car - unieważnienie aktywacji konta</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <style>
        body {
            background: #bfdad6;
            color: #121515;
            font-family: Raleway;
            padding: 5px 25px;
        }

        h1 {
            font-size: 20px;
        }

        p {
            font-size: 18px;
        }
    </style>
</head>

<body>
    <header>
        <h1>Witaj {{ $user->fullName }}!
    </header>
    <main>
        <p>Przykro nam, ale link aktywacyjny do konta w serwisie
        <strong>Rent A Car</strong> stracił ważność.</p>
        <p>Na podany adres mailowy {{ $user->email }} nie zostało utworzone konto.</p>
        <p>Dane podane w formularzu rejestracyjnym zostały usunięte.</p>
    </main>
    <footer>
        <p>Szerokiej drogi,</p>
        <p>Zespół <strong>Rent A Car</strong></p>
    </footer>
</body>
</html>