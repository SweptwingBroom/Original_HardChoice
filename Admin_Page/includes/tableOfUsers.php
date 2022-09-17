<?php
require '../Server/data.php'; //change later the path

$sql = "SELECT * FROM users ORDER BY idUsers";

$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

echo "<h1>Found: ".$resultCheck." Users</h1>";

set_time_limit(500);
    echo '
        <table class="table table-bordered table-hover table-responsive-md">
        <thead>
            <tr>
                <th scope="col">UsersID</th>
                <th scope="col">UsersName</th>
                <th scope="col">EmailUsers</th>
                <th scope="col">AskForNews</th>
                <th scope="col">DeleteUser</th>
            </tr>
        </thead>
        <tbody>';

for ($i=1; $i <= $resultCheck; $i++){
    $row = mysqli_fetch_assoc($result);
    $a1 = $row['idUsers'];
    echo '<tr>';
    echo '<td scope="row">'.$row["idUsers"].'</th>';
    echo '<td scope="row">'.$row["usersName"].'</th>';
    echo '<td scope="row">'.$row["emailUsers"].'</th>';
    echo '<td scope="row">'.$row["askForNews"].'</th>';
    echo '<td><a href="includes/includes.inc/deleteUser.php?idUsers='.$a1.'"><i class="far fa-times-circle icon"></i></a></td>';
    echo '</tr>';
}

echo '
    </tbody>
    </table>';