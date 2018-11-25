<?php
ob_start();
require_once("db.php");
require_once("tpl/header.tpl.php");
if (isset($_POST["addPost"])) {
    $title = strip_tags($_POST["title"]);
    $body = strip_tags($_POST["body"], "<p><a><img>");
    if (!empty($title) && !empty($body)) {
        $stmt = $pdo->prepare("INSERT INTO posts VALUES (NULL, :title, :body)");
        $stmt->execute(["title" => $title, "body" => $body]);
        header("Location: index.php");
        ob_get_flush();
    } else {
        echo "<div class='error_container'>Enter correct title and body!</div>";
    }
}
?>
    <div class="form_container">
        <h4>Add new post:</h4>
        <form action="" method="post">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title">
            <label for="body">Body:</label>
            <textarea rows="10" cols="45" name="body" id="body"></textarea>
            <input type="submit" value="Create post" name="addPost">
        </form>
        <a href="/" class="back">Cancel</a>
    </div>
<?php
require_once("tpl/footer.tpl.php");
?>