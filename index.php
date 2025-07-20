<?php include 'config/db.php'; include 'includes/header.php'; ?>

<main>
  <h2>All Posts</h2>
  <?php
    $posts = $conn->query("SELECT * FROM posts ORDER BY created_at DESC");
    while ($post = $posts->fetch_assoc()) {
      echo "<h3><a href='post.php?id=".$post['id']."'>".$post['title']."</a></h3>";
      echo "<p>".$post['created_at']."</p>";
    }
  ?>
</main>

<?php include 'includes/footer.php'; ?>