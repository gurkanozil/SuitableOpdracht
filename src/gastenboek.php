<?php
$menu = json_decode(file_get_contents(__DIR__ . '/data/menu.json'), true);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "suitableOpdracht";

// Maak verbinding met de database
$conn = new mysqli($servername, $username, $password, $dbname);

// Controleer de verbinding
if ($conn->connect_error) {
    die("Verbinding mislukt: " . $conn->connect_error);
}

// Controleer of de aanvraagmethode is ingesteld en POST is
if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $message = $_POST['message'];

    $sql = "INSERT INTO gastenboek (name, message) VALUES ('$name', '$message')";
    $conn->query($sql);
}

$result = $conn->query("SELECT * FROM gastenboek");

$title = 'Gastenboek';
include 'header.php';
?>
<h1>Gastenboek</h1>
<form action="gastenboek.php" method="post">
    <div class="mb-3">
        <label for="name" class="form-label">Naam</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Bericht</label>
        <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Verstuur</button>
</form>
<h2>Berichten</h2>
<ul class="list-group">
    <?php while($row = $result->fetch_assoc()): ?>
        <li class="list-group-item">
            <strong><?php echo $row['name']; ?>:</strong> <?php echo $row['message']; ?>
        </li>
    <?php endwhile; ?>
</ul>
<?php include 'footer.php'; ?>

<?php
$conn->close();
?> 