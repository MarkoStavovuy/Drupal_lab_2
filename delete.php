<?php
ob_start();
require_once("db.php");
require_once("tpl/header.tpl.php");
$id = !empty($_GET["id"]) ? intval($_GET['id']) : NULL;
if ($id) {
    $stmt = $pdo->prepare("SELECT title FROM posts WHERE id = :id");
    $stmt->execute(["id" => $id]);
    if ($stmt->rowCount()) {
        $post = $stmt->fetch();
        $title = $post["title"];
        if (isset($_POST["deletePost"])) {
            $stmt = $pdo->prepare("DELETE FROM posts WHERE id=:id");
            $stmt->execute(['id' => $id]);
            header("Location: index.php");
        }
    } else {
        die("<div class='error_container'>Access denied!</div>");
    }
} else {
    die("<div class='error_container'>Enter correct id value!</div>");
} ?>
<div class="form_container">
    <h4>Delete post "<?php echo $title; ?>"?</h4>
    <form action="" method="post">
        <input type="submit" value="Confirm" name="deletePost">
    </form>
    <a href="/" class="back">Cancel</a>
</div>

