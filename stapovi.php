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
            <label for="tipIgre">Tip Igre</label>
            <input type="text" class="form-control" id="tipIgre" value="<?php if (isset($tipIgre)) echo $tipIgre; ?>" name="tipIgre">
          </div>

          <div class="form-group">
            <label for="precnikKapice">precnikKapice</label>
            <input type="number" class="form-control" id="precnikKapice" value="<?php if (isset($precnikKapice)) echo $precnikKapice; ?>" name="precnikKapice">
          </div>

          <div class="form-group">
            <label for="img">Slika URL</label>
            <input type="text" class="form-control" value="<?php if (isset($img)) echo $img; ?>" name="img" id="img">
          </div>

          <div class="form-group">
            <label for="Opis">Opis</label>
            <textarea class="form-control" id="opis" rows="3" name="opis"><?php if (isset($opis)) echo $opis; ?></textarea>
          </div>

          <div class="form-group">
            <label for="cena">Cena</label>
            <input type="number" class="form-control" id="cena" value="<?php if (isset($cena)) echo $cena; ?>" name="cena">
          </div>

          <fieldset class="form-group">
            <label class="text-left font-size-17">kozniGrip</label>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="kozniGrip" value="DA" <?php if (isset($kozniGrip) && $kozniGrip == "DA") echo "CHECKED"; ?>>
                DA
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="kozniGrip" value="NE" <?php if (isset($kozniGrip) && $kozniGrip == "NE") echo "CHECKED"; ?>>
                NE
              </label>
            </div>
          </fieldset>

          <button type="submit" name="dodaj-stap" class="btn btn-primary w-100">DODAJ STAP</button>

        </form>
      </div>
    </div>