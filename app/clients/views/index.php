
<?php
if (isset($_GET["cl_id"])) {
    $cl_id = $_GET["cl_id"];
    $query = "SELECT * FROM myclients Where cl_id = $cl_id";
    $selectMyClients = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($selectMyClients)) {
        $cl_id = $row["cl_id"];
        $cl_name = $row["cl_name"];
        $cl_story = $row["cl_story"];
        $cl_img = $row["cl_img"];

        include '../app/clients/views/partials/header.php';
        include '../app/clients/views/partials/feature_section.php';
    }
}
?>
