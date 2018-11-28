<?php
ob_start();
require_once("db.php");
require_once("tpl/header.tpl.php");
$id = !empty($_GET["id"]) ? intval($_GET["id"]) : NULL;
if ($id) {
    $stmt = $pdo->prepare("SELECT * FROM posts WHERE id = :id");
    $stmt->execute(["id" => $id]);
    if ($stmt->rowCount()) {
        $post = $stmt->fetch();
        $title = $post["title"];
        $body = $post["body"];
        if (isset($_POST["editPost"])) {
            $title = strip_tags($_POST["title"]);
            $body = strip_tags($_POST["body"], '<p><a><img>');
            if (!empty($title) && !empty($body)) {
                $stmt1 = $pdo->prepare("UPDATE posts SET title=:title, body=:body WHERE id=:id");
                $stmt1->execute(["title" => $title, "body" => $body, "id" => $id]);
                header("Location: index.php");
                ob_get_flush();
            } else {
                echo "<div class='error_container'>Enter correct title and body!</div>";
            }
        }
    } else {
        die("<div class='error_container'>Access denied!</div>");
    }
} else {
    die("<div class='error_container'>Enter correct id value!</div>");
}
?>
<div class="form_container">
    <h4>Edit post #<?php echo $id; ?>:</h4>
    <form action="" method="post">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="<?php echo $title; ?>">
        <label for="body">Body:</label>
        <textarea rows="10" cols="45" name="body" id="body"><?php echo $body; ?></textarea>
        <input type="submit" value="Edit post" name="editPost">
    </form>
    <a href="/" class="back">Cancel</a>
</div>

