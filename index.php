<?php
require_once("db.php");
require_once("tpl/header.tpl.php");
$stmt = $pdo->query("SELECT COUNT(*) FROM posts");
$countPosts = $stmt->fetchColumn();
$stmt2 = $pdo->query("SELECT * FROM posts");
$posts = $stmt2->fetchAll();
?>
<div class="container">
    <a href="create.php" class="add">Add new post</a>
    <div class="count">Count posts: <?php echo $countPosts . "\n"; ?></div>
</div>
<table border="0" cellspacing="0" cellpadding="0">
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Body</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php
    foreach ($posts as $post) {
        echo "<tr><td>" . $post['id'] . "</td><td>" . $post['title'] . "</td><td>" . $post['body'] .
            "</td><td><a href='edit.php?id=" . $post['id'] . "'>Edit</a></td><td><a href='delete.php?id="
            . $post['id'] . "'>Delete</a></td></tr>";
    }
    ?>
</table>
<?php
require_once("tpl/footer.tpl.php");
?>
