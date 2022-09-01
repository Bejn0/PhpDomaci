<?php

require_once 'Database.php';
$db = new Database("itehdom");


if (isset($_POST['unetTekst'])) {
  $unetTekst = $_POST['unetTekst'];

  $db->select($_POST['table'], $rows = "*", null, null, null, "naziv LIKE '%$unetTekst%' OR marka LIKE '%$unetTekst%'");
  $rezultat = $db->getResult()->fetch_all(MYSQLI_ASSOC);

  echo json_encode($rezultat);
}
