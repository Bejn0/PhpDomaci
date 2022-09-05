<?php include_once 'header.php'; ?>

<?php

if (isset($_POST['dodaj-sto'])) {
  $erros = [];
  $values = [];

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
    array_push($values, $marka, $naziv, $velicina, $tezina, $boja, $tipIgre, $opis, $cena, $godina, $img);
    $db->insert("stolovi", "marka, naziv, velicina, tezina, boja, tipIgre, opis, cena, godina, img", $values);
    header("Location: admin.php");
  }
}

?>

<section id="dodaj-sto" class="my-5">
  <div class="container">
    <h1 class="text-center mb-5">DODAJ STO
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
            <input type="text" class="form-control" id="marka" value="<?php if (isset($marka)) echo $marka; ?>" name="marka">
          </div>

          <div class="form-group">
            <label for="naziv">Naziv</label>
            <input type="text" class="form-control" id="naziv" value="<?php if (isset($naziv)) echo $naziv; ?>" name="naziv">
          </div>

          <div class="form-group">
            <label for="velicina">Velicina</label>
            <input type="text" class="form-control" id="velicina" value="<?php if (isset($velicina)) echo $velicina; ?>" name="velicina">
          </div>

          <div class="form-group">
            <label for="tezina">Tezina</label>
            <input type="text" class="form-control" id="tezina" value="<?php if (isset($tezina)) echo $tezina; ?>" name="tezina">
          </div>

          <div class="form-group">
            <label for="boja">Boja</label>
            <input type="text" class="form-control" id="boja" value="<?php if (isset($boja)) echo $boja; ?>" name="boja">
          </div>

          <div class="form-group">
            <label for="img">Slika URL</label>
            <input type="text" class="form-control" value="<?php if (isset($img)) echo $img; ?>" name="img" id="img">
          </div>

          <div class="form-group">
            <label for="tipIgre">Tip igre</label>
            <input type="text" class="form-control" id="tipIgre" value="<?php if (isset($tipIgre)) echo $tipIgre; ?>" name="tipIgre">
          </div>

          <div class="form-group">
            <label for="godina">Godina</label>
            <input type="number" class="form-control" id="godina" value="<?php if (isset($godina)) echo $godina; ?>" name="godina">
          </div>

          <div class="form-group">
            <label for="Opis">Opis</label>
            <textarea class="form-control" id="opis" rows="3" name="opis"><?php if (isset($opis)) echo $opis; ?></textarea>
          </div>

          <div class="form-group">
            <label for="cena">Cena</label>
            <input type="number" class="form-control" id="cena" value="<?php if (isset($cena)) echo $cena; ?>" name="cena">
          </div>

          <button type="submit" name="dodaj-sto" class="btn btn-primary w-100">DODAJ STO</button>

        </form>
      </div>
    </div>
  </div>
</section>

<?php include_once 'footer.php'; ?>