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
