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
            margin: auto; /* Menjadikan margin auto untuk mengatur posisi */
        }

        .glass {
            text-align: center;
            background: linear-gradient(
                    135deg,
                    rgba(255, 255, 255, 0.1),
                    rgba(255, 255, 255, 0)
            );
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 40px;
            border: 1px solid rgba(255, 255, 255, 0.7);
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.3),
                        0 0 20px rgba(255, 255, 255, 0.4), 0 0 30px rgba(255, 255, 255, 0.4),
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
            background: rgba(255, 255, 255, 0.05); /* Ubah opacity ke 0.05 */
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: none;
            border-radius: 30px;
            padding: 10px 15px;
            margin: 30px auto; /* Mengatur input ke posisi tengah */
            display: block; /* Menjadikan input menjadi block */
            color: white; /* Ubah warna teks menjadi putih */
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
            background: rgba(255, 255, 255, 0.1); /* Ubah opacity pada fokus */
        }

        .card-title {
            font-size: 10vw; /* Sesuaikan ukuran font yang diinginkan */
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
                font-size: 56px; /* Ukuran font untuk layar yang lebih besar */
            }

            .form-control-glass {
                font-size: 23px; /* Ukuran font untuk layar yang lebih besar */
            }

            .btn-block-custom {
                font-size: 16px; /* Ukuran font untuk layar yang lebih besar */
            }
        }

        footer {
            width: 100%;
            text-align: center;
            padding: 10px 0;
            position: fixed; /* Ubah position menjadi fixed */
            bottom: 0;
            background-color: rgba(
                    0,
                    0,
                    0,
                    0.5
            ); /* Menambahkan warna latar belakang */
        }

        p {
            margin: 0;
            margin-bottom: 80px;
            color: white;
            font-family: "Sirukota", sans-serif;
        }

        .glass-footer {
            background: linear-gradient(
                    135deg,
                    rgba(255, 255, 255, 0.1),
                    rgba(255, 255, 255, 0)
            );
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.18);
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
            padding: 6px 10px;
        }

        .glass:hover {
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.5),
                        0 0 20px rgba(255, 255, 255, 0.7), 0 0 30px rgba(255, 255, 255, 0.7),
                        0 0 40px rgba(255, 255, 255, 0.7);
        }
    </style>
</head>
<body>

<?php
// Daftar nama-nama khodam
$khodamNames = [
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
    // Tambahkan nama-nama khodam lainnya sesuai kebutuhan
];

// Fungsi untuk mengembalikan nama khodam secara acak
function getRandomKhodam() {
    global $khodamNames;
    $randomIndex = array_rand($khodamNames);
    return $khodamNames[$randomIndex];
}
?>

<div class="container glass" data-tilt>
    <h1 class="card-title text-center" style="color: white; padding-top: 20px">
        cek khodam gratis
    </h1>
    <h4 class="text-center" style="color: white">
        CEK khodam YANG ADA DI DALAM DIRI KAMU
    </h4>

    <form id="namaForm" method="post" action="result.php">
        <div class="form-group">
            <input
                type="text"
                id="nama"
                name="nama"
                class="form-control form-control-glass"
                style="color: white"
                placeholder="Masukkan nama Anda"
                required
            />
        </div>
        <button
            type="submit"
            class="btn btn-danger btn-block-custom"
            style="font-size: 20px"
        >
            <img src="bintang.png" alt="Icon" width="24" height="24" />Cek
            <img src="bintang.png" alt="Icon" width="24" height="24" />
        </button>
    </form>
</div>

<div>
    <p class="glass-footer">
        <img
            src="skill-icons_instagram.png"
            alt="Footer Image"
            width="20"
            height="20"
        />
        <a href="https://www.instagram.com/rahoolll_" style="color: white"
        >@rahoolll_</a
        >
    </p>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- VanillaTilt.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js"></script>
<script>
    VanillaTilt.init(document.querySelector(".glass"), {
        max: 25,
        speed: 100,
        glare: true,
        "max-glare": 0.5,
    });

    function getRandomKhodam() {
      const khodamNames = <?php echo json_encode($khodamNames); ?>;
      const randomIndex = Math.floor(Math.random() * khodamNames.length);
      return khodamNames[randomIndex];
    }

    // Add event listener for the 'Coba Nama Lain' button
    document.getElementById('cekLagiButton').addEventListener('click', function() {
      const randomKhodam = getRandomKhodam();
      document.getElementById('khodamInput').value = randomKhodam;
      this.closest('form').submit();
    });
</script>

</body>
</html>
