<html>
<style>
    
    body {
        text-align: center;
        
    }
    p{
        font-weight: bold;
    }
</style>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body style="background-color: lightblue;">
    <div style="margin-top:5%;text-align:center;">
        <p>MODULO DI ISCRIZIONE</p>
        <br>
        <form action="conferma_registraz.php" method="post">
        <label><p>Cognome: <input type="text" name="cognome"></p></label><br>
        <br>
        <label><p>Nome: <input type="text" name="nome"></p></label><br>
        <br>
        <label><p>Sesso: <input type="radio" value="Maschio" name="sess">Maschio <input type="radio" value="Femmina" name="sess">Femmina</p></label><br>
        <br>
        <label><p>Nazionalità: <input list="nazionalit" name="nazionalita">
            <datalist id="nazionalit">
                <option value="Italia">
                <option value="Spagna">
                <option value="Francia">
                <option value="Regno Unito">
                <option value="Stati Uniti">
            </datalist></p></label><br>
        <br>
        <label><p>Patente: <input type="radio" value="Patente A" name="patente">Patente A <input type="radio" value="Patente B" name="patente">Patente B</p></label><br>
        <br>
        <label><p>E-mail <input type="text" name="email" placeholder="*Email"></p></label><br>
        <br>
        <label><p>Password <input type="text" name="password" placeholder="*Password"></p></label><br>
        <br>
        <button class="btn btn-primary" value="Conferma" name="conferma">Conferma</button>
    </form>
    <a href="login.php"><button class="btn btn-primary" value="Annulla" name="annulla">Annulla</button></a>
    </div>
</body>

</html>