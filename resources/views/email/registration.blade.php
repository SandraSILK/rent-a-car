<!DOCTYPE html>
<html>
<head>
    <title>Rent A Car - aktywacja konta</title>
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

        a {
            border: 1px solid #121515;
            padding: 10px 20px;
            text-decoration: none;
            color: #121515;
        }

        a:hover {
            background: #121515;
            color: #bfdad6;
        }
    </style>
</head>

<body>
    <header>
        <h1>Witaj {{ $user->fullName }}!
    </header>
    <main>
        <p>Cieszymy się, że będziemy jeździć wspólnie. Nim to się jednak stanie, musisz
        aktywować swoje konto poprzez klinięcie przycisku.</p>
        <a href="{{ url(sprintf('api/verify/%s', $user['api_token'])) }}">Aktywuj konto</a>
        <p>Konto zostało założone na adres mailowy {{ $user->email }}</p>
    </main>
    <footer>
        <p>Szerokiej drogi,</p>
        <p>Zespół <strong>Rent A Car</strong></p>
    </footer>
</body>
</html>