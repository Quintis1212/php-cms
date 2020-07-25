

<?php 
if(isset($_POST["create_post"])){
   $post_title = $_POST["post_title"];
   $post_tags = $_POST["post_tags"];
   $post_comment_count = 3;
   $post_status = $_POST["post_status"];
   $post_category_id=$_POST["post_category_id"];
   $post_author=$_POST["post_author"];
   $post_content=$_POST["post_content"];
   $post_data = date("d-m-y");
   $post_img=$_FILES["image"]["name"];
   $post_img_temp=$_FILES["image"]["tmp_name"];

   move_uploaded_file($post_img_temp,"../images/$post_img");

   $query = "INSERT INTO posts(post_tags,post_comment_count,post_status,post_category_id,post_title, post_author,post_data,post_image, post_content) ";
   $query .= " VALUES('{$post_tags}','{$post_comment_count}','{$post_status}',now(),'{$post_category_id}','{$post_title}','{$post_author}','{$post_img}','{$post_content}')";

   $add_post_query_result = mysqli_query($connection,$query);
   confirm_query($add_post_query_result);
};

?>



<h1>Hello new post )</h1>
<div class="container">
<div class="row">
<form action="" method="post" enctype="multipart/form-data">
<label for="">post_tags</label>
<input type="text" name="post_tags">
</div>

<div class="row">
<form action="" method="post">
<label for="">post_comment_count</label>
<input type="text" name="post_comment_count	">
</div>

<div class="row">
<form action="" method="post">
<label for="">post_status</label>
<input type="text" name="post_status">
</div>

<div class="row">
<form action="" method="post">
<label for="">post_category_id</label>
<input type="text" name="post_category_id">
</div>

<div class="row">
<form action="" method="post">
<label for="">post_title</label>
<input type="text" name="post_title">
</div>
<div class="row">
<form action="" method="post">
<label for="">post_author</label>
<input type="text" name="post_author">
</div>

<div class="row">
<form action="" method="post">
<label for="">post_image</label>
<input type="file" name="image">
</div>

<div class="row">
<form action="" method="post">
<label for="">post_content</label>
<input type="text" name="post_content">
</div>


<input class="btn btn-primary" type="submit" name="create_post" value="create_post">
</form>
</div>