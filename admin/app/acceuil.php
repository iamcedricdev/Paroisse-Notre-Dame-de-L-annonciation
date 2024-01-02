
<?php
include('config/datab.php');
if(isset($_GET['action'])) {
if($_GET['action']== 'delete') {
    $deletecontact = $bd->prepare("DELETE FROM contact WHERE id=?");
    $deletecontact->execute(array($_GET['id']));
    header('Location: admin.php?page=acceuil');
}}

?>