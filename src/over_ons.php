<?php
$menu = json_decode(file_get_contents(__DIR__ . '/data/menu.json'), true);

// Databaseverbinding
$host = 'localhost'; // Wijzig indien nodig
$db = 'suitableOpdracht'; // Wijzig naar je databasenaam
$user = 'root'; // Wijzig naar je databasegebruikersnaam
$pass = ''; // Wijzig naar je databasewachtwoord
$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Databaseverbinding mislukt: ' . $e->getMessage();
}

// Verwerk formulierinzending
if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    // Gegevens invoegen in de database
    $stmt = $pdo->prepare("INSERT INTO contact_form (name, email, message) VALUES (?, ?, ?)");
    if ($stmt->execute([$name, $email, $message])) {
        echo "Bericht succesvol verzonden!";
    } else {
        echo "Er is een fout opgetreden bij het verzenden van uw bericht.";
    }
}

$title = 'Over ons';
include 'header.php';
?>
<h1>Over ons</h1>

<div class="row intro-segment __web-inspector-hide-shortcut__">
<div class="col-xs-10 col-xs-offset-1">
    <div class="h1 no-margin text-center">Suitable staat voor</div>
    <div class="text-center">
    </div>
</div>
</div>
<div class="row margin--2x margin-bottom-2x">
<div class="col-xs-12 col-sm-4 padding-half">
    <div class="block-content content-icon">
        <div class="content">
            <div class="icon suitableicon-people"></div>
            <div class="title">De man in zijn kracht</div>
            <p class="content-height flex">We begrijpen wat hij wil en hoe we hem het beste kunnen helpen</p>
        </div>
    </div>
</div>

<div class="col-xs-12 col-sm-4 padding-half">
    <div class="block-content content-icon">
        <div class="content">
            <div class="icon suitableicon-clock"></div>
            <div class="title">Snel &amp; eenvoudig</div>
            <p class="content-height flex">We weten hoe we de man het beste kunnen bedienen met het juiste aanbod.</p>
        </div>
    </div>
</div>

<div class="col-xs-12 col-sm-4 padding-half">
    <div class="block-content content-icon">
        <div class="content">
            <div class="icon suitableicon-warrant"></div>
            <div class="title">Kwaliteit</div>
            <p class="content-height flex">Onze collectie is van hoge kwaliteit met een degelijke prijs.</p>
        </div>
    </div>
</div>
</div>
<div class="row intro-segment">


    <div class="h1 no-margin text-center">Kernwaarden</div>
    <div class="text-center">
        <div class="spacer-half"></div>
    </div>


    <div class="row margin--2x">
        <div class="col-xs-12 col-sm-4 padding-half">
            <div class="block-content content-icon">
                <div class="content">
                    <div class="title">Betrokken</div>
                    <p class="content-height flex">Binding met de klant, breed geïnteresseerd en collegialiteit.</p>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-4 padding-half">
            <div class="block-content content-icon">
                <div class="content">
                    <div class="title">Innovatief</div>
                    <p class="content-height flex">Vernieuwende producten, materialen en denken in oplossingen.</p>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-4 padding-half">
            <div class="block-content content-icon">
                <div class="content">
                    <div class="title">Krachtig</div>
                    <p class="content-height flex">Goede kwaliteit leveren en daadkrachtig zijn.</p>
                </div>
            </div>
        </div>
    </div>

<h1>Contactformulier</h1>
<form action="over_ons.php" method="post">
    <div class="mb-3">
        <label for="name" class="form-label">Naam</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Bericht</label>
        <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Verstuur</button>
</form>

<?php include 'footer.php'; ?>