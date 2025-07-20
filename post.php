<?php
include 'config/db.php';
include 'includes/header.php';
$id = $_GET['id'];
$post = $conn->query("SELECT * FROM posts WHERE id = $id")->fetch_assoc();
?>

<article>
  <h2><?php echo $post['title']; ?></h2>
  <p><?php echo $post['created_at']; ?></p>
  <div><?php echo $post['content']; ?></div>
</article>

<?php include 'includes/footer.php'; ?>