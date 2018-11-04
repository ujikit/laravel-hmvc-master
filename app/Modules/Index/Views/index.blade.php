<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Selamat Datang di Ujikit!</title>
  <?php include_once base_path()."/public/global_views/bundle_css.blade.php" ?>
  <style media="screen">
    .tabs li.is-active a {
      /* border-bottom-color: #fff; */
      /* color: #fff; */
      color: #26292857;
      border-bottom-color: #26292857;
    }
    .tabs a {
      color: #262928;
      border-bottom-color: #262928;
    }
    #tab-content p {
      color: white;
    display: none;
    }
    #tab-content p.is-active {
      display: block;
    }
  </style>
</head>
<body>
  <?php include_once base_path()."/public/global_views/header.blade.php" ?>
  <section style="margin-top:62px">
    <div class="container">
      <div class="columns is-desktop">
        <div class="column is-4" style="background:#f5f5f58a">
          <div class="tabs is-centered">
            <ul id="tabs">
              <li class="is-active" data-tab="1">
                <a>Welcome</a>
              </li>
              <li data-tab="2">
                <a>Profile</a>
              </li>
            </ul>
          </div>
            <div id="tab-content">
              <p class="has-text-centered is-active" data-content="1">
                <a class="is-size-2 has-text-dark">Hi !</a><br>
                <img class="rounded-image is-rounded" src="https://ujikit.github.io/frontend/img/fotoku" width="150px" style="margin-top:15px">
                <br><br>
                <a class="is-size-6 has-text-dark">Namaku Fauzi Zaki. <br>Biasa dipanggil ujik, uzik atau fauzi.<br>Antusias pada stunning potrait fotografi.</a>
              </p>
              <p class="has-text-centered" data-content="2">
                Music
              </p>
            </div>
        </div>
        <div class="column is-8" style="background:white">
          <div class="section">
            <div class="columns">
              <div class="column is-6">
                <figure class="image is-3by1">
                  <img src="https://bulma.io/images/placeholders/720x240.png">
                </figure>
                <br>
                <p class="has-text-weight-bold">
                  BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
                </p>
                <p class="is-size-7" style="padding-top:15px;padding-bottom:15px;">Ini saatnya saya</p>
                <p class="is-size-7"><b>Fauzi Zaki</b></p>
                <p class="is-size-7" style="margin-top:7px;">2 Desember 2019 | 6 Menit Membaca</p>
              </div>
              <div class="column is-6">
                <div class="columns">
                  <div class="column is-4">
                    <figure class="image is-96x96">
                      <img src="https://bulma.io/images/placeholders/256x256.png">
                    </figure>
                  </div>
                  <div class="column is-8">
                    <p class="has-text-weight-bold">
                      Bahasa Pemrograman ss
                    </p>
                    <br>
                    <p class="is-size-7"><b>Fauzi Zaki M</b></p>
                    <p class="is-size-7" style="margin-top:7px;">2 Desember 2019 | 6 Menit Membaca</p>
                  </div>
                </div>
                <div class="columns">
                  <div class="column is-4">
                    <figure class="image is-96x96">
                      <img src="https://bulma.io/images/placeholders/256x256.png">
                    </figure>
                  </div>
                  <div class="column is-8">
                    <p class="has-text-weight-bold">
                      Bahasa Pemrograman ss
                    </p>
                    <br>
                    <p class="is-size-7"><b>Fauzi Zaki M</b></p>
                    <p class="is-size-7" style="margin-top:7px;">2 Desember 2019 | 6 Menit Membaca</p>
                  </div>
                </div>
                <div class="columns">
                  <div class="column is-4">
                    <figure class="image is-96x96">
                      <img src="https://bulma.io/images/placeholders/256x256.png">
                    </figure>
                  </div>
                  <div class="column is-8">
                    <p class="has-text-weight-bold">
                      Bahasa Pemrograman ss
                    </p>
                    <br>
                    <p class="is-size-7"><b>Fauzi Zaki M</b></p>
                    <p class="is-size-7" style="margin-top:7px;">2 Desember 2019 | 6 Menit Membaca</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
    </div>
  </section>
  <?php include_once base_path()."/public/global_views/footer.blade.php" ?>
  <?php include_once base_path()."/public/global_views/bundle_js.blade.php" ?>
</body>
</html>
