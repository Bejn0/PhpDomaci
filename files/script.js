let select = document.getElementById("exampleFormControlSelect1");
let select2 = document.getElementById("exampleFormControlSelect2");
let form = document.getElementById("search-form");
let form2 = document.getElementById("search-form2");

if (select != null) {
  select.addEventListener('change', (event) => {
    let vrstaSorta = event.target.value;

    $.ajax({
      url: 'sort.php',
      type: 'POST',
      data: {
        vrstaSorta: vrstaSorta,
        table: "stapovi"
      },
      success: (response) => {
        let stapovi = JSON.parse(response);
        let html = "";

        stapovi.forEach(stap => {
          html += `<div class="col-md-4 col-sm-6 col-12 mt-4">
          <div class="card">
            <div class="card-img">
            <img src="${stap.img}" alt="">
            </div>
            <div class="card-sadrzaj">
                        <h4 class="card-naziv">${stap.marka} ${stap.naziv}</h4>
                        <p class="card-cena">${stap.cena} E</p>
                        <p class="card-opis">${stap.opis.substring(0, 250)}</p>
            </div>
          </div>
        </div>`;
        });

        document.getElementById('stapovi-container').innerHTML = html;
      }
    });
  });
}


if (select2 != null) {
  select2.addEventListener('change', (event) => {
    let vrstaSorta = event.target.value;

    $.ajax({
      url: 'sort.php',
      type: 'POST',
      data: {
        vrstaSorta: vrstaSorta,
        table: "stolovi"
      },
      success: (response) => {
        console.log(response);
        let stolovi = JSON.parse(response);
        let html = "";

        stolovi.forEach(sto => {
          html += `<div class="col-md-4 col-sm-6 col-12 mt-4">
                    <div class="card">
                      <div class="card-img">
                        <img src="${sto.img}" alt="">
                      </div>
                      <div class="card-sadrzaj">
                        <h4 class="card-naziv">${sto.marka} ${sto.naziv}</h4>
                        <p class="card-cena">${sto.cena} E</p>
                        <p class="card-opis">${sto.opis.substring(0, 250)}</p>
                      </div>
                    </div>
                  </div>`;
        });

        document.getElementById('stolovi-container').innerHTML = html;
      }
    });
  });
}

if (form != null) {
  form.addEventListener('submit', (event) => {
    event.preventDefault();

    let unetTekst = document.getElementById('search-input').value;

    $.ajax({
      url: 'search.php',
      type: 'POST',
      data: {
        unetTekst: unetTekst,
        table: "stapovi"
      },
      success: (response) => {
        console.log(response);
        let stapovi = JSON.parse(response);
        let html = "";

        stapovi.forEach(stap => {
          html += `<div class="col-md-4 col-sm-6 col-12 mt-4">
                    <div class="card">
                      <div class="card-img">
                        <img src="${stap.img}" alt="">
                      </div>
                      <div class="card-sadrzaj">
                        <h4 class="card-naziv">${stap.marka} ${stap.naziv}</h4>
                        <p class="card-cena">${stap.cena} E</p>
                        <p class="card-opis">${stap.opis.substring(0, 250)}</p>
                      </div>
                    </div>
                  </div>`;
        });

        document.getElementById('stapovi-container').innerHTML = html;
      }
    });
  });
}


if (form2 != null) {
  form2.addEventListener('submit', (event) => {
    event.preventDefault();

    let unetTekst = document.getElementById('search-input').value;

    $.ajax({
      url: 'search.php',
      type: 'POST',
      data: {
        unetTekst: unetTekst,
        table: "stolovi"
      },
      success: (response) => {
        console.log(response);
        let stolovi = JSON.parse(response);
        let html = "";

        stolovi.forEach(sto => {
          html += `<div class="col-md-4 col-sm-6 col-12 mt-4">
                    <div class="card">
                      <div class="card-img">
                        <img src="${sto.img}" alt="">
                      </div>
                      <div class="card-sadrzaj">
                        <h4 class="card-naziv">${sto.marka} ${sto.naziv}</h4>
                        <p class="card-cena">${sto.cena} E</p>
                        <p class="card-opis">${sto.opis.substring(0, 250)}</p>
                      </div>
                    </div>
                  </div>`;
        });

        document.getElementById('stolovi-container').innerHTML = html;
      }
    });
  });
}
