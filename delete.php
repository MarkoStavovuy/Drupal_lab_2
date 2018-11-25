<?php
ob_start();
require_once("db.php");
require_once("tpl/header.tpl.php");
$id = !empty($_GET["id"]) ? intval($_GET['id']) : NULL;
if (is_null($id)) {
    die("<div class='error_container'>Enter correct id value!</div>");
} else {
    $stmt = $pdo->prepare("SELECT title FROM posts WHERE id = :id");
    $stmt->execute(["id" => $id]);
    $post = $stmt->fetch();
    $title = $post["title"];
	if (isset($_POST["deletePost"])) {
    $stmt = $pdo->prepare("DELETE FROM posts WHERE id=:id");
    $stmt->execute(['id' => $id]);
    header("Location: index.php");
}
} ?>
<div class="form_container">
    <h4>Delete post "<?php echo $title; ?>"?</h4>
    <form action="" method="post">
        <input type="submit" value="Confirm" name="deletePost">
    </form>
    <a href="/" class="back">Cancel</a>
</div>

