<?php
session_start();
if(! isset($_SESSION['is_login']))
{
    header('location:login.php');
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="" rel="icon">
  <link href="" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="" alt="">
        <span class="d-none d-lg-block">Home Page</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li>

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="profile.jfif" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['name']; ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $_SESSION['name']; ?></h6>
              <span>User</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul>
        </li>

      </ul>
    </nav>

  </header>

  
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="about.php">
          <i class="bi bi-card-list"></i>
          <span>About</span>
        </a>
      </li>
    </ul>

  </aside>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>About</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">About</li>
        </ol>
      </nav>
    </div>

    <section class="section">
      <div class="row">
        <div class="col-lg-15">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">SEKILAS PT INDONESIA POWER</h5>
              <p>PT Indonesia Power (Perusahaan), yang sebelumnya bernama PT PLN Pembangkit Tenaga Listrik Jawa Bali I (PLN PJB I), adalah salah satu Anak Perusahaan PT PLN (Persero) yang didirikan pada tanggal 3 Oktober 1995. Pendirian perusahaan ini merupakan langkah awal untuk memulai kemandirian bisnis di sektor pembangkitan tenaga listrik di Indonesia. Pada tanggal 3 Oktober 2000, nama PT PLN Pembangkitan Tenaga Listrik Jawa Bali I (PLN PJB I) secara resmi berubah menjadi PT Indonesia Power. Perubahan tersebut merupakan penegasan atas tujuan Perusahaan sebagai perusahaan pembangkit tenaga listrik independen yang berorientasi bisnis murni. Dengan perubahan indentitas itu, Perusahaan terdorong untuk menetapkan berbagai rencana dan strategi baru agar menjadi Perusahaan publik dan meningkatkan diri menjadi pembangkit kelas dunia. Kegiatan utama bisnis Perusahaan saat ini yakni fokus sebagai penyedia tenaga listrik melalui pembangkitan tenaga listrik dan sebagai penyedia jasa operasi dan pemeliharaan pembangkit listrik yang mengoperasikan pembangkit yang tersebar di Indonesia. Selain mengelola unit pembangkit, Indonesia Power memiliki 5 Anak Perusahaan, 1 Perusahaan Patungan dan 1 Perusahaan Asosiasi untuk mendukung strategi dan proses Bisnis Perusahaan.</p>
              <h5 class="card-title">PROFIL PT INDONESIA POWER</h5>
              <p>Indonesia Power berkomitmen untuk senantiasa mengelola perusahaan dengan baik. Karena komitmen tersebut, sepanjang tahun 2015, Indonesia Power telah memperoleh penghargaan baik di tingkat nasional dan internasional, antara lain ASEAN Energy Awards, PROPER, Zero Accident, Indonesia Sustainability Report Award, Vision Award, Indonesian Human Capital Study. “Menjadi Perusahaan energi tepercaya yang tumbuh berkelanjutan” merupakan sasaran utama Indonesia Power, sebagaimana dapat dilihat dari visi Perusahaan. Dalam upaya mewujudkan visi tersebut, Perusahaan telah menetapkan misi Indonesia Power yaitu “Menyelenggarakan bisnis pembangkitan tenaga listrik dan jasa terkait yang bersahabat dengan lingkungan”. Pada tahap selanjutnya, Perusahaan menetapkan kompetensi inti Indonesia Power yakni “Operasi dan Pemeliharaan Pembangkit serta Pengembangan Pembangkit” sebagai upaya untuk meningkatkan daya saing dan menjalankan misi Perusahaan. Guna mendukung pencapaian Visi dan Misi, Perusahaan menetapkan prinsip yang menjadi landasan dalam mengarahkan perilaku individu dan kebijakan dalam Perusahaan. Prinsip-prinsip tersebut disebut Budaya Perusahaan yang tercermin dalam “Indonesia Power Way” dengan tata nilai perusahaan yaitu “IP AkSi (Integritas, Profesional, Proaktif, Sinergi)”. Penyempurnaan proses bisnis yang lebih efektif dan efisien dilakukan melalui integrasi sistem-sistem manajemen perusahaan dengan implementasi Indonesia Power Integrated Management System (InPower IMS) yang mengintegrasikan ISO 14001 (Sistem Manajemen Lingkungan), ISO 9001 (Sistem Manajemen Mutu), ISO 31000 (Sistem Manajemen Risiko), OHSAS 18001, ISO 28001 (Security Management System for Supply Chain), Malcom Baldrige, SMP (Sistem Manajemen Pengamanan), dan SMK3 (Sistem Manajemen K3), ISO 26000 (Standar Tanggung Jawab Sosial Perusahaan), ISO 55001 (Standar Manajemen Aset).</p>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong>2022
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>