
  <form action="" method="post">
                <div class="form-group">
                <labebel for="title">Edit category</labebel>
                <?php 
                if (isset($_GET["edit"])){
                    $edit_id = $_GET["edit"];
                    $query = "SELECT * FROM categories WHERE cat_id='$edit_id' ";
                    $result = mysqli_query($connection,$query);

                    while($row =mysqli_fetch_assoc($result)){
                        $cat_title = $row["cat_title"];
                        $cat_id = $row["cat_id"];
                            ?>  
                            <input value="<?php if(isset($cat_title)){echo $cat_title;}?>" type="text" name="cat_title">
                            <?php
                    }
                }

                ?>
                <?php 
                    if (isset($_POST["edit"])){
                        $cat_title = $_POST["cat_title"];
                        $query = "UPDATE categories SET cat_title='$cat_title' WHERE cat_id='$cat_id' ";
                        $result = mysqli_query($connection,$query);
                        header("Location:categories.php");

                    }
                ?>
                </div>
                <div class="form-group">
                <input class="btn btn-primary" type="submit" name="edit" value="Edit category">
                </div>
                </form>