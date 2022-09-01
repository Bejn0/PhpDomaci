<?php

require_once 'Database.php';
$db = new Database("itehdom");


if (isset($_POST['vrstaSorta'])) {
  $vrstaSorta = $_POST['vrstaSorta'];
  $db->select($_POST['table'], $rows = "*", null, null, null, null, $vrstaSorta);
  $rezultat = $db->getResult()->fetch_all(MYSQLI_ASSOC);

  echo json_encode($rezultat);
}
