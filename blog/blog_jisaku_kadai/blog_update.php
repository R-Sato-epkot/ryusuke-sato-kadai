<?php
require_once('blog.php');
$blogs = $_POST;

$blog = new Blog();
$blog->blogValidate($blogs);
$blog->blogUpdate($blogs);

?>
<p><a href="/blog_jisaku_kadai/">戻る</a></p>
