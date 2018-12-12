<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email</title>
</head>

<body>
<h2>Welcome to the site {{$user->fullName}}</h2>
<br/>
Your registered email-id is {{$user['email']}} , Please click on the below link to verify your email account
<br/>
<a href="{{ url(sprintf('api/verify/%s', $user['api_token'])) }}">Verify Email</a>
</body>

</html>

//@todo!
// - zmienić token po aktywowaniu konta // może jako osobną klasę, bo będzie to robione często
// - dodania w kernelu joba który będzie sprawdzać, czy konto zostało aktywowane po wysłaniu maila, skorzystaj z daty wysłania maila i czy jest update_at u usera
// - zrób ładego maila :)
// - posprzątaj w bazie danych, bo syf 
// - dodaj loader na wysylanie maila