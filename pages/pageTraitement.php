<?php
$post = (isset($_POST)) ? $_POST : "";

echo '<pre>';
print_r($post);
echo '</pre>';


echo$post['profil'] ;