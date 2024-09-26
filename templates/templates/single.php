<?php
include('db.php');
include('templates/header.php');
include('templates/navbar.php');

$id = $_GET['id'];
$query = "SELECT * FROM posts WHERE id = $id";
$result = $conn->query($query);
$post = $result->fetch_assoc();
?>

<div class="container">
    <h1><?php echo $post['title']; ?></h1>
    <p><?php echo $post['content']; ?></p>
</div>

<?php include('templates/footer.php'); ?>
