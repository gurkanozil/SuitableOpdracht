<?php
$menu = json_decode(file_get_contents(__DIR__ . '/data/menu.json'), true);
?>

<nav class="navbar navbar-default">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="images/logo.svg" alt="Logo" style="height: 30px;">
        </a>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <?php foreach ($menu['menu'] as $item): ?>
                    <li class="nav-item" style="margin-right: 15px;">
                        <a class="nav-link" href="<?php echo $item['link']; ?>"><?php echo $item['title']; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</nav> 