<?php include "includes/admin_header.php";?>
    <div id="wrapper">
    <?php include "includes/admin_navigation.php";?>
    <div id="page-wrapper">

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1><?php echo "Welcome";?></h1>
            <?php 
            if (isset($_GET["source"])){
                $source = $_GET["source"];
            } else {
                $source = "";
            }
            switch($source){

                case "add_post":
                include "includes/add_post.php";
                break;

                default:
                include "includes/all_posts.php";
                break;
            }
            ?>





        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include "includes/admin_footer.php";?>
