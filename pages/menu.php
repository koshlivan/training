<?php
$page="";
?>
<nav class="menu">
            <a href="index.php?page=1">Main Page</a>
            <a  href="index.php?page=2">Edit</a>
            <a href="index.php?page=3">Login</a>
            <a href="index.php?page=4">Register</a>
            <a href="index.php?page=logout">Logout</a>
</nav>
<?php

if(isset($_GET["page"])){
    $page=$_GET["page"];
}

?>