<?php
    require 'HeaderSearch.php';
?>
<main id="main">
    <form class="d-flex justify-content-center" style="padding: 20px" action="includes/Search_Sys.php" method="POST">
        <input class="col-4 form-control" type="text" name="search" placeholder="Search">
        <div style="padding-left: 20px;">
            <button class="btn btn-primary" type="submit" name="submit-search"><i class="fas fa-search"></i></button>
        </div>
    </form>
    <div class="page-container">
    <?php
        $sql = "SELECT * FROM search_form";
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);

        if($queryResults > 0){
            while ($row = mysqli_fetch_assoc($result)){
                echo "<div class='contant-box'>
                    <h3>".$row['name_Page']."</h3>
                    <p>".$row['Text_Page']."</p>
                </div>";
            }
        }
    ?>
    </div>  
<?php require '../Footer.php'; ?>