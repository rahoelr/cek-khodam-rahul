<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cek Khodam Gratis</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-image: url("page_3.png");
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-position: center;
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      font-family: "Sirukota", sans-serif;
    }

    .container {
      width: 90%;
      max-width: 630px;
      height: auto;
      margin: auto;
    }

    .glass {
      text-align: center;
      background: linear-gradient(135deg,
          rgba(255, 255, 255, 0.1),
          rgba(255, 255, 255, 0));
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(10px);
      border-radius: 40px;
      border: 1px solid rgba(255, 255, 255, 0.7);
      box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.3),
        0 0 20px rgba(255, 255, 255, 0.4),
        0 0 30px rgba(255, 255, 255, 0.4),
        0 0 40px rgba(255, 255, 255, 0.4);
      padding: 20px;
    }

    @font-face {
      font-family: "Sirukota";
      src: url("sirukota.ttf") format("truetype");
      font-weight: normal;
      font-style: normal;
    }

    .form-control-glass {
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(5px);
      -webkit-backdrop-filter: blur(5px);
      border: none;
      border-radius: 30px;
      padding: 10px 15px;
      margin: 30px auto;
      display: block;
      color: white;
      font-family: "Sirukota", sans-serif;
      border: 1px solid rgba(255, 255, 255, 0.7);
      width: 80%;
      max-width: 360px;
      height: 52px;
      text-align: center;
      font-size: 5vw;
    }

    .form-control-glass::placeholder {
      color: rgba(255, 255, 255, 0.5);
    }

    .form-control-glass:focus {
      outline: none;
      background: rgba(255, 255, 255, 0.1);
    }

    .card-title {
      font-size: 10vw;
      margin-bottom: 8px;
    }

    .btn-block-custom {
      margin: 0 auto;
      padding: 10px 15px;
      display: block;
      border-radius: 30px;
      font-family: "Sirukota", sans-serif;
      font-size: 5vw;
    }

    .btn-block-custom img {
      margin-right: 10px;
    }

    @media (min-width: 768px) {
      .card-title {
        font-size: 56px;
      }

      .form-control-glass {
        font-size: 23px;
      }

      .btn-block-custom {
        font-size: 16px;
      }
    }

    footer {
      width: 100%;
      text-align: center;
      padding: 10px 0;
      position: fixed;
      bottom: 0;
      background-color: rgba(0, 0, 0, 0.5);
    }

    p {
      margin: 0;
      margin-bottom: 80px;
      color: white;
      font-family: "Sirukota", sans-serif;
    }

    .glass-footer {
      background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      border-radius: 20px;
      border: 1px solid rgba(255, 255, 255, 0.18);
      box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
      padding: 6px 10px;
    }

    .glass:hover {
      box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.5),
        0 0 20px rgba(255, 255, 255, 0.7),
        0 0 30px rgba(255, 255, 255, 0.7),
        0 0 40px rgba(255, 255, 255, 0.7);
    }

    .dashed-border {
      border: 4px dashed white;
      border-radius: 30px;
      display: inline-block;
      padding: 20px 30px;
      margin: 20px 30px;
    }
  </style>
</head>

<body>
  <?php
  $nama = "";
  $khodam = "";

  if (isset($_POST['nama'])) {
    $nama = htmlspecialchars($_POST['nama']);

    $khodam_list = array(
      "Air Cucian Beras",
      "Api Menyala",
      "Angin Sejuk",
      "Batu Karang",
      "Cahaya Bulan",
      "Daun Rimbun",
      "Embun Pagi",
      "Gurun Pasir",
      "Hujan Deras",
      "Pelangi Indah",
      "Sungai Mengalir",
      "Tanah Subur",
      "Sepeda Ontel",
      "Titid Terbang",
      "Layangan Putus",
      "Baju Robek",
      "Buaya Putih",
      "Kuntilanak merah",
      "Pocong Bambu",
      "Tuyul emas",
      // Add more khodam names as needed
    );

    $khodam = $khodam_list[array_rand($khodam_list)];
  }
  ?>
  <div class="container glass" data-tilt>
    <h1 class="card-title text-center" style="color: white; padding-top: 20px;" id="name-user"><?php echo $nama; ?></h1>
    <h4 class="text-center" style="color: white">khodam kamu adalah</h4>

    <form>
      <div class="form-group">
        <div class="dashed-border text-center" style="color: white;">
          <div class="row justify-content-center align-items-center">
            <img src="bintang_emas.png" alt="Icon" class="col-auto bouncing-icon" width="30" height="30" />
            <h2><?php echo $khodam; ?></h2>
            <img src="bintang_emas.png" alt="Icon" class="col-auto bouncing-icon" width="30" height="30" />
          </div>
        </div>
      </div>
      <button id="cekLagiButton" type="button" class="btn btn-danger btn-block-custom" style="font-size: 22px;">
        <img src="bintang.png" alt="Icon" width="24" height="24" />coba nama lain <img src="bintang.png" alt="Icon" width="24" height="24" />
      </button>
    </form>
  </div>

  <div>
    <p class="glass-footer">
      <img src="skill-icons_instagram.png" alt="Footer Image" width="24" height="24" />
      <a href="https://www.instagram.com/rahoolll_" style="color: white;">@rahoolll_</a>
    </p>
  </div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- VanillaTilt.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js"></script>
  <script>
    // Initialize VanillaTilt on the .glass element
    VanillaTilt.init(document.querySelector('.glass'), {
      max: 25,
      speed: 400,
      glare: true,
      'max-glare': 0.5,
    });

    // Add event listener for the 'Coba Nama Lain' button
    document.getElementById('cekLagiButton').addEventListener('click', function() {
      // Redirect back to the index.php page
      window.location.href = 'index.php';
    });
  </script>
</body>

</html>