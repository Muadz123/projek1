<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<header class="p-3 text-bg-primary">
    <h1><center>Puskesmas - Depok</center></h1>
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none"></a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="home.php" class="nav-link px-2 text-white">Home</a></li>
                <li><a href="data_pasien.php" class="nav-link px-2 text-white">Booking</a></li>
                <li><a href="contact.php" class="nav-link px-2 text-white">Contact</a></li>
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                <input type="search" class="form-control form-control-dark text-bg-primary" placeholder ="Search..." aria-label="Search">
            </form>

            <div class="text-end">
                <button type="button" class="btn btn-outline-light me-2"><a href="login.php" style="text-decoration: none;color: white;" >Login</a></button>
            </div>
        </div>
    </div>
</header>

<div class="container mt-5">
    <div class="row">
        <!-- Kolom Card -->
        <div class="col-md-9">
            <div class="border border-4 ">
                <h5 class="ms-3 mt-3">Puskesmas Depok</h5>
                <p class="ms-3">Tiba di Puskesmas Depok, tempat di mana setiap langkah menuju kesembuhan dimulai. Kami dengan tulus menyambut dengan harapan agar setiap kunjungan di sini membawa keceriaan dan kesembuhan. Selamat datang, semoga Anda selalu dalam keadaan sehat dan sejahtera.</p>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                                <h3>Layanan</h3>
                              <div class="row no-gutters mt-5">
                                <div class="col-md-4">
                                  <img src="layanan gigi.jpg" class="card-img" alt="Gambar 1" height="100% width= 160%">
                                </div>
                                <div class="col-md-8">
                                  <div class="card-body">
                                    <h5 class="card-title">Layanan Puskesmas Depok</h5>
                                    <p class="card-text">Layanan kesehatan masyarakat Depok agar sehat dan bersih.</p>
                                  </div>
                                </div>
                              </div>
                          </div>
                      
                          <!-- Card kedua -->
                          <div class="col-md-6">
                            <h3>Jadwal Praktik</h3>
                          <div class="row no-gutters mt-5">
                            <div class="col-md-4">
                              <img src="jadwal.jpeg" class="card-img" alt="Gambar 1" height="55% width= 160%">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">Jadwal Konsultasi</h5>
                                <p class="card-text">Jadwal konsultasi Puskesmas Depok.</p>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
		  <!-- Kolom Kategori -->
		  <div class="col-md-3">
            <h3><center>Link Akses Cepat</center></h3>
            <div class="list-group">
                <a href="data_pasien.php" class="list-group-item list-group-item-action">Booking</a>
                <a href="contact.php" class="list-group-item list-group-item-action">Contact</a>
                <a href="login.php" class="list-group-item list-group-item-action">Login</a>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5">
    <form>
      <fieldset class="border border-4 p-2">
        <legend class="float-none w-auto">Daftar Dokter Puskesmas Depok</legend>
        <div class="row">
          <!-- Card 1 -->
          <div class="col-md-3 mb-4">
            <div class="card">
              <img src="dokter lulu.jpg" class="card-img-top" alt="Gambar 1" style="height: 30vh; width: 100%;">
              <div class="card-body">
                <h5 class="card-title">Drg Anis</h5>
                <a class="btn btn-primary" style="text-decoration: none;" href="profil1.html">Profil Dokter</a>
              </div>
            </div>
          </div>
  
          <!-- Card 2 -->
          <div class="col-md-3 mb-4">
            <div class="card">
              <img src="dokterindra.jpg" class="card-img-top" alt="Gambar 2" style="height: 30vh; width: 100%;">
              <div class="card-body">
                <h5 class="card-title">Drg Ali</h5>
                <a class="btn btn-primary" style="text-decoration: none;" href="profil2.html">Profil Dokter</a>
              </div>
            </div>
          </div>
  
          <!-- Card 3 -->
          <div class="col-md-3 mb-4">
            <div class="card">
              <img src="dokteramelia.jpg" class="card-img-top" alt="Gambar 3" style="height: 30vh; width: 100%;">
              <div class="card-body">
                <h5 class="card-title">Drg Mei</h5>
                <a class="btn btn-primary" style="text-decoration: none;" href="profil3.html">Profil Dokter</a>
              </div>
            </div>
          </div>
  
          <!-- Card 4 -->
          <div class="col-md-3 mb-4">
            <div class="card">
              <img src="dokterputri.jpg" class="card-img-top" alt="Gambar 4" style="height: 30vh; width: 100%;">
              <div class="card-body">
                <h5 class="card-title">Drg Sasa</h5>
                <a class="btn btn-primary" style="text-decoration: none;" href="profil4.html">Profil Dokter</a>
              </div>
            </div>
            </div>
          </div>
        </div>
        </fieldset>
        <footer class="footer">
            <div class="container">
              <p class="mt-3">&copy;Develop By Mahasiswa STT-NF @2024</p>
            </div>
          </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>