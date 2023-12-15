<?php include '../config/head.php';?>

<!-- <?php include '../app/home/views/partials/intro.php';?> -->
<?php include '../app/views/templates/navigation.php';?>



<?php

if (isset($_GET["source"])) {
    $source = $_GET["source"];
} else {
    $source = '';
}
switch ($source) {

    case "clients";
        include "../app/clients/views/index.php";
        break;
    default:
        include "../app/home/views/index.php";
}

?>

<?php include '../app/views/templates/footer.php';
