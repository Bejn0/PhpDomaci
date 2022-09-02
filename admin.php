<?php include_once 'header.php'; ?>

<?php
$db->select("stolovi", $rows = "*", null, null, null);
$stolovi = $db->getResult()->fetch_all(MYSQLI_ASSOC);

$db->select("stapovi", $rows = "*", null, null, null);
$stapovi = $db->getResult()->fetch_all(MYSQLI_ASSOC);

?>

<section id="stolovi" class="container">
  <h1 class="text-center my-5">STOLOVI
    <hr>
  </h1>
  <table class="table table-sm table-hover table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Marka</th>
        <th scope="col">Naziv</th>
        <th scope="col">Velicina</th>
        <th scope="col">Tezina</th>
        <th scope="col">Boja</th>
        <th scope="col">Tip Igre</th>
        <th scope="col">Opis</th>
        <th scope="col">Cena</th>
        <th scope="col">Godina</th>
      </tr>
    </thead>
    <tbody>
      <?php $counter = 1;
      foreach ($stolovi as $sto) : ?>
        <tr>
          <th scope="row"><?php echo $counter++; ?></th>
          <td><?php echo $sto['marka']; ?></td>
          <td><?php echo $sto['naziv']; ?></td>
          <td><?php echo $sto['velicina']; ?></td>
          <td><?php echo $sto['tezina']; ?></td>
          <td><?php echo $sto['boja']; ?></td>
          <td><?php echo $sto['tipIgre']; ?></td>
          <td><?php echo substr($sto['opis'], 0, 30) . "..."; ?></td>
          <td><?php echo $sto['cena']; ?></td>
          <td><?php echo $sto['godina']; ?></td>
          <td class="text-center text-danger"><a href="izmeniSto.php?id=<?php echo $sto['id']; ?>"><i class="far fa-edit"></i></a></td>
          <form method="POST">
            <input type="hidden" name="delete-id-sto" value="<?php echo $sto['id']; ?>">
            <td class="text-center text-danger"><button class="delete-btn" name="delete" type="submit"><i class="fas fa-trash-alt"></i></button></td>
          </form>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <a href="dodajSto.php" class="btn btn-dark">DODAJ STO</a>
</section>

<section id="stapovi" class="container mb-5">
  <h1 class="text-center my-5">STAPOVI
    <hr>
  </h1>
  <table class="table table-sm table-hover table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Marka</th>
        <th scope="col">Naziv</th>
        <th scope="col">Tip Igre</th>
        <th scope="col">Precnik Kapice</th>
        <th scope="col">Kozni Grip</th>
        <th scope="col">Cena</th>
        <th scope="col">Opis</th>
      </tr>
    </thead>
    <tbody>
      <?php $counter = 1;
      foreach ($stapovi as $stap) : ?>
        <tr>
          <th scope="row"><?php echo $counter++; ?></th>
          <td><?php echo $stap['marka']; ?></td>
          <td><?php echo $stap['naziv']; ?></td>
          <td><?php echo $stap['tipIgre']; ?></td>
          <td><?php echo $stap['precnikKapice']; ?></td>
          <td><?php echo $stap['kozniGrip']; ?></td>
          <td><?php echo $stap['cena']; ?></td>
          <td><?php echo substr($stap['opis'], 0, 30) . "..."; ?></td>
          <td class="text-center text-warning"><a href="izmeniStap.php?id=<?php echo $stap['id']; ?>"><i class="far fa-edit"></i></a></td>
          <form method="POST">
            <input type="hidden" name="delete-id-stap" value="<?php echo $stap['id']; ?>">
            <td class="text-center"><button class="delete-btn" name="delete" type="submit"><i class="fas fa-trash-alt"></i></button></td>
          </form>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <a href="dodajStap.php" class="btn btn-dark">DODAJ STAP</a>
</section>

<?php include_once 'footer.php'; ?>