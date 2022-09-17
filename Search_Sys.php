<?php
if(isset($_POST['submit-search'])){
    require '../../Server/data.php';

    $search = mysqli_real_escape_string($conn, $_POST['search']);
    
    if(empty($search)){
        header("Location: ../Search.php?error=emptySearchfield");
        exit();
    }
    
    $sql = "SELECT * FROM search_form WHERE name_Page LIKE '%$search%' OR Text_Page LIKE '%$search%'";
    $result = mysqli_query($conn, $sql);
    $queryResult = mysqli_num_rows($result);


        echo "There are " .$queryResult." result!";

        if ($queryResult > 0){
            while ($row = mysqli_fetch_assoc($result)){
                echo "<a href='".$row['name_Page']."'><div class='contant-box'>
                    <h3>".$row['name_Page']."</h3>
                    <p>".$row['Text_Page']."</p>
                </div></a>";
            }
        }
}
else{
    echo "There are no results matching your search!";
}
    ?>
</div>