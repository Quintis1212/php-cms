<?php 

function insert_categories() {
    global $connection;
    if (isset($_POST["submit"])){
        $cat_title = $_POST["cat_title"];
        if ($cat_title == "" || empty($cat_title)){
            echo "Field is empty";
        } else {
            $query = " INSERT INTO categories(cat_title) ";
            $query .= " VALUE('$cat_title') ";
            $create_category = mysqli_query($connection,$query);
            if(!$create_category){
                die("Query failed  ".mysqli_error($connection));
            }
        }
    }
};

function get_all_categories() {
    global $connection;  
    $query = "SELECT * FROM categories";
    $result = mysqli_query($connection,$query);
    while($row =mysqli_fetch_assoc($result)){
        echo "<tr>";
    echo " <td>{$row["cat_id"]}</td>";
    echo " <td>{$row["cat_title"]}</td>";
    echo " <td><a href='categories.php?delete={$row["cat_id"]}'>delete</a></td>";
    echo " <td><a href='categories.php?edit={$row["cat_id"]}'>edit</a></td>";
    echo "</tr>";
    }
};

function delete_category() {
    global $connection; 
    if(isset($_GET["delete"])){
        $delete_id = $_GET["delete"];
        $query = "DELETE FROM categories WHERE cat_id='$delete_id' ";
        $result = mysqli_query($connection,$query);
        if(!$result){
            die("ERROR  ".mysqli_error($connection));
        }
        header("Location:categories.php");
    }
}

function confirm_query($result){
    global $connection; 
    if(!$result){
        die("QUERY FAILED ".mysqli_error($connection));
       }
};

?>