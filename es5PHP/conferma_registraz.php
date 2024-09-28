<html>
<head>
    <style>
body {
        text-align: center;
        
    }
    p{
        font-weight: bold;
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body style="background-color: gray;">

    <div style="margin-top:5%;text-align:center;">
        <form action="esito_registraz.php" method="post">
        <p>RIEPILOGO DATI REGISTRAZIONE</p>

        <p>Cognome: <?php echo "$_POST[cognome]";?></p>
        <br>
        <p>Nome: <?php echo "$_POST[nome]";?></p>
        <br>
        <p>Sesso: <?php echo "$_POST[sess]";?></p>
        <br>
        <p>Nazionalita: <?php echo "$_POST[nazionalita]";?></p>
        <br>
        <p>Patente: <?php echo "$_POST[patente]";?></p>
        <br>
        <p>E-mail: <?php echo "$_POST[email]";?></p>
        <br>
        <p>Password: <?php echo "$_POST[password]";?></p>
        <br>
    <button class="btn btn-primary" value="Conferma" name="conferma">Conferma</button>
    </form>
    <a href="registrazione.php"><button class="btn btn-primary" value="Annulla" name="annulla">Annulla</button></a>
    </div>
</body>

</html>