<?php include_once 'header.php'; ?>

<?php

if($_GET['id']){
  $id = $_GET['id'];
  $db->select("stolovi", "*", null, null, null, "id = '$id'");
  $sto = $db->getResult()->fetch_array();
}else{
  header("Location: index.php");
}

if (isset($_POST['update-sto'])) {
  $erros = [];
  $values = [];
  $keys = [];

  $marka =   $_POST['marka'];
  $naziv =   $_POST['naziv'];
  $velicina =   $_POST['velicina'];
  $tezina =   $_POST['tezina'];
  $boja =   $_POST['boja'];
  $tipIgre =   $_POST['tipIgre'];
  $opis =   $_POST['opis'];
  $cena =   $_POST['cena'];
  $godina =   $_POST['godina'];
  $img =   $_POST['img'];

  if (empty($marka) || empty($naziv) || empty($tipIgre) || empty($velicina) || empty($opis) || empty($cena) || empty($tezina) || empty($boja) || empty($godina) || empty($img)) {
    array_push($erros, "Sva polja su obavezna!");
  }

  if (count($erros) == 0) {
    array_push($keys, "marka", "naziv", "velicina", "tezina", "boja", "tipIgre", "opis", "cena", "godina", "img");
    array_push($values, $marka, $naziv, $velicina, $tezina, $boja, $tipIgre, $opis, $cena, $godina, $img);
    $db->update("stolovi", $id,  $keys, $values);
    header("Location: admin.php");
  }
}

?>

<section id="update-sto" class="my-5">
  <div class="container">
    <h1 class="text-center mb-5">UPDATE STO <br>
"<?php echo $sto['marka'] . " " . $sto['naziv']; ?>"
      <hr>
    </h1>
    <div id="errors" class="text-center text-danger mb-5">
      <?php
      if (isset($erros)) {
        foreach ($erros as $error) {
          echo $error . "<br>";
        }
      }
      ?>
    </div>
    <div class="row">
      <div class="col-md-6 col-sm-6 offset-md-3 offset-sm-3">
        <form method="POST">

        <div class="form-group">
            <label for="marka">Marka</label>
            <input type="text" class="form-control" id="marka" value="<?php echo $sto['marka']; ?>" name="marka">
          </div>

          <div class="form-group">
            <label for="naziv">Naziv</label>
            <input type="text" class="form-control" id="naziv" value="<?php echo $sto['naziv']; ?>" name="naziv">
          </div>

          <div class="form-group">
            <label for="velicina">Velicina</label>
            <input type="text" class="form-control" id="velicina" value="<?php echo $sto['velicina']; ?>" name="velicina">
          </div>

          <div class="form-group">
            <label for="tezina">Tezina</label>
            <input type="text" class="form-control" id="tezina" value="<?php echo $sto['tezina']; ?>" name="tezina">
          </div>

          <div class="form-group">
            <label for="boja">Boja</label>
            <input type="text" class="form-control" id="boja" value="<?php echo $sto['boja']; ?>" name="boja">
          </div>

          <div class="form-group">
            <label for="img">Slika URL</label>
            <input type="text" class="form-control" value="<?php echo $sto['img']; ?>" name="img" id="img">
          </div>

          <div class="form-group">
            <label for="tipIgre">Tip igre</label>
            <input type="text" class="form-control" id="tipIgre" value="<?php echo $sto['tipIgre']; ?>" name="tipIgre">
          </div>

          <div class="form-group">
            <label for="godina">Godina</label>
            <input type="number" class="form-control" id="godina" value="<?php echo $sto['godina']; ?>" name="godina">
          </div>

          <div class="form-group">
            <label for="Opis">Opis</label>
            <textarea class="form-control" id="opis" rows="3" name="opis"><?php echo $sto['opis']; ?></textarea>
          </div>

          <div class="form-group">
            <label for="cena">Cena</label>
            <input type="number" class="form-control" id="cena" value="<?php echo $sto['cena']; ?>" name="cena">
          </div>

          <button type="submit" name="update-sto" class="btn btn-primary w-100">UPDATE STO</button>

        </form>
      </div>
    </div>
  </div>
</section>

<?php include_once 'footer.php'; ?>