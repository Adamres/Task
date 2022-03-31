<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= '/DAO/getAll.php';
include ($path);

?>
    <div class="topnav">
        <h3><a href="index.php">Index</a></h3>
    </div>
<?php
getAllnames();
?>