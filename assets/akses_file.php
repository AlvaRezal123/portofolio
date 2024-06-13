<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Metadata untuk karakter set dan kompatibilitas IE -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Comatible"content="IE=edge"/>

  <!-- Metadata untuk responsif pada perangkat mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Judul halaman dan link ke stylesheet dan ikon Font Awesome -->
    <title>Web Pengelolaan Administrasi Penggajian Pegawai</title>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous"
    >

  <!-- Link ke file CSS tambahan -->
    <link 
    href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    rel="stylesheet"
    integrity="sha384-AYmEc3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
    crossorigin="anonymous"/>
    <link rel="stylesheet" href="style.css">
</head> 
<body>
<!-- Navigasi bar menggunakan Bootstrap -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
  <div class="container">
    <!-- Brand/logo perusahaan -->
    <a class="navbar-brand" href="#">DREAMCORP.</a>

    <!-- Tombol toggler untuk navigasi responsif pada perangkat kecil -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
     aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navigasi menu dengan dropdown menggunakan Bootstrap -->
    <div class="collapse navbar-collapse text-right" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#fitur" id="navbarDropdown" 
          role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Fitur
          </a>

          <!-- Dropdown menu untuk fitur-fitur aplikasi -->
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="html-database.php">Pembuatan Data Base</a></li>
            <li><a class="dropdown-item" href="html-tambah.php">Tambah Data Pegawai</a></li>
            <li><a class="dropdown-item" href="html-ubah.php">Ubah Data Pegawai</a></li>
            <li><a class="dropdown-item" href="html-hapus.php">Hapus Data Pegawai</a></li>
            <li><a class="dropdown-item" href="html-search.php">Pencarian Data Pegawai</a></li>
            <li><a class="dropdown-item" href="html-tampil.php">Seluruh Data Data Pegawai</a></li>
            <li><a class="dropdown-item" href="html-gaji.php">Hitung Gaji Pegawai</a></li>
          </ul>

          <!-- Tautan untuk logout -->
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
          </li>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <!-- Bagian banner untuk menyambut pengguna -->
    <div class="container-fluid banner">
     <div class="container text-center"> 
        <b><h2 class="display-2" style="font-family:'Roboto Slab', serif;" > Hallo</b></h2>
        <b><h3 class="display-4" style="font-family:'Roboto Slab', serif;" > Selamat Datang<h/3></b><br> 
        <a href="#fitur"> 
     </div>   
    </div>

    <!-- Script JavaScript untuk Bootstrap -->
    <script 
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
            crossorigin="anonymous">
    </script>
    
</body>
</html>