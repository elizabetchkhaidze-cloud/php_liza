<?php

if(isset($_GET['saxeli'])){
echo "<h1>Worker</h1>";
echo "<pre>";
print_r($_GET);
echo "<pre>";
echo "<p>".$_GET['saxeli']. " Learns ". $_GET['sagani']."</p>";
}

if(isset($_POST['saxeli'])){
echo "<hr></hr>";
echo "<h1>Worker1</h1>";
echo "<pre>";
print_r($_POST);
echo "<pre>";
echo "<p>".$_POST['saxeli']. " Learns ". $_POST['sagani']."</p>";
}
?>