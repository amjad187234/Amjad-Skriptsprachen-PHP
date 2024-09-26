<?php
include('db.php');
include('templates/header.php');
include('templates/navbar.php');

// Abrufen von Daten aus der Datenbank
$query = "SELECT * FROM posts";
$result = $conn->query($query);
?>

<div class="container">
    <h1>Willkommen auf unserer Website!</h1>
    <p>Hier finden Sie spannende Inhalte und Informationen über unsere Dienstleistungen.</p>
    
    <?php while($row = $result->fetch_assoc()): ?>
        <div class="post">
            <h2><?php echo $row['title']; ?></h2>
            <p><?php echo substr($row['content'], 0, 100); ?>...</p>
            <a href="single.php?id=<?php echo $row['id']; ?>">Weiterlesen</a>
        </div>
    <?php endwhile; ?>
</div>

<?php include('templates/footer.php'); ?>
