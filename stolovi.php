<?php include_once 'header.php'; ?>
<br>
<div id="sortirajdiv" class="text-center d-flex flex-wrap">
  <label for="exampleFormControlSelect2" class="mr-3"><b>Sortiraj</b></label>
  <select class="form-control mr-3" style="width: 150px;" id="exampleFormControlSelect2">
    <option></option>
    <option value="cena">Ceni</option>
    <option value="godina">Godini</option>
  </select>
  <form id="search-form2" class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" id="search-input" type="search" placeholder="Pretraga..." aria-label="Search">
    <button class="btn btn-dark my-2 my-sm-0" type="submit">Pretrazi</button>
  </form>
</div>

<?php

$db->select("stolovi", $rows = "*", null, null, null);
$stolovi = $db->getResult()->fetch_all(MYSQLI_ASSOC);

?>

<section id="stolovi" class="mb-5">
  <div class="container">
    <div class="row" id="stolovi-container">

      <?php foreach ($stolovi as $sto) : ?>

        <div class="col-md-4 col-sm-6 col-12 mt-4">
          <div class="card">
            <div class="card-img">
              <img src="<?php echo $sto['img']; ?>" alt="">
            </div>
            <div class="card-sadrzaj">
              <h4 class="card-naziv"><?php echo $sto['marka'] . " " . $sto['naziv']?></h4>
              <p class="card-cena">Cena: <?php echo $sto['cena']; ?> $</p>
              <p class="card-opis"><?php echo substr($sto['opis'], 0, 250); ?></p>
            </div>
          </div>
        </div>

      <?php endforeach; ?>


    </div>
  </div>
</section>

<?php include_once 'footer.php'; ?>