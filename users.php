<html>
<head>
    <html lang="pl-PL"></html>
    <title>Panel administratora</title>
    <link rel="stylesheet" href="styl4.css">
    </head>
    <body>
    <div class="baner">
        <h3>Portal Społecznościowy - panel administratora</h3>
        </div>
        <div class="left">
        <h4>Użytkownicy</h4>
            <?php
            $conn = new mysqli("127.0.0.1:3307", "root", "", "dane4");
            $sql = "SELECT id, imie, nazwisko, rok_urodzenia, zdjecie FROM `osoby` LIMIT 29;";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_row($result)) {
                
            }
            mysqli_close($conn);
            ?>
            <a href="settings.html">Inne ustawienia</a>
        </div>
        <div class="right">
        <h4>Podaj id użytkownika</h4>
            <?php
            $conn = new mysqli("127.0.0.1:3307", "root", "", "dane4");
            $sql = "SELECT id, imie, nazwisko, rok_urodzenia, zdjecie FROM `osoby` LIMIT 29;";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_row($result)) {
                
            }
            mysqli_close($conn);
            ?>
        </div>
        <div class="footer">
        Stronę wykonał: 00000000000OZ
        </div>
    </body>
</html>