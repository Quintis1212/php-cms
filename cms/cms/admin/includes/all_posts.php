<table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Author</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Image</th>
                        <th>Tags</th>
                        <th>Comments</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        global $connection;  
                        $query = "SELECT * FROM posts";
                        $result = mysqli_query($connection,$query);
                        while($row=mysqli_fetch_assoc($result)){
                            $post_title = $row["post_title"];
                            $post_id = $row["post_id"];
                            $post_author = $row["post_author"];
                            $post_tags=$row["post_tags"];
                            $post_comment_count=$row["post_comment_count"];
                            $post_status=$row["post_status"];
                            $post_data=$row["post_data"];
                            $post_image=$row["post_image"];
                            $post_category_id=$row["post_category_id"];
                            ?>
                                <tr>
                                <td><?php echo $post_id;?></td>
                                <td><?php echo $post_author;?></td>
                                <td><?php echo $post_title;?></td>                              
                                <td><?php echo  $post_category_id;?></td>
                                <td><?php echo $post_status;?></td>
                                <td><?php echo "<img width='100' class='img-responsive' src='../images/".$post_image."' alt='content-img'>";?></td>
                                <td><?php echo $post_tags;?></td>
                                <td><?php echo $post_comment_count;?></td>
                                </tr>
                                        
                            <?php
                        }
                    
                    ?>

                </tbody>
            </table>