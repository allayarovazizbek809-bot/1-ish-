<?php
// HTML formadan kelgan malumotlarni olish
$name = $_POST['name'];
$kod  = $_POST['kod'];

// Ekranga chiqarish
echo "Salom, " . htmlspecialchars($name) . "!<br>";
echo "Sening koding: " . htmlspecialchars($kod);
?>
