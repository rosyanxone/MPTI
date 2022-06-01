<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="../style.css">

    <!-- Web Icon -->
    <link rel="shortcut icon" href="../img/unmul.png">

    <!-- Title -->
    <title>Ruang Lecture Building</title>
</head>

<body onload="initClock()">

    <!-- Navbar -->
    <nav class="navbar navbar-dark" style="background-color: #0097A7;">
        <div class="container">
            <a class="navbar-brand" href="http://gedungbaru-ftunmul.rf.gd">LECTURE BUILDING</a>
            <div class="d-flex search-bar lec">
                <input class="form-control me-2" id="kode-ruang" type="text" placeholder="Kode Ruangan" aria-label="Search">
                <button class="btn btn-outline-success" id="search-button" onclick="goToPage();" type="submit" style="color: white;">Search</button>
            </div>
        </div>
    </nav>
    
    <!-- Digital clock -->
    <section id="clock">
        <div class="container datetime mt-4">
            <div class="row">
                <div class="date">
                    <span id="dayname">Hari</span>,
                    <span id="daynum">00</span>
                    <span id="month">Bulan</span>
                    <span id="year">Tahun</span>
                </div>
                <div class="time">
                    <span id="hour">00</span>:
                    <span id="minutes">00</span>:
                    <span id="seconds">00</span>
                </div>
            </div>
        </div>
    </section>


    <!-- 360deg Ruang -->
    <section class="ruang">
        <!-- LANTAI TIGA -->
        <div id="lantai3" class="container pt-4">
            <h1>Lantai 3</h1>
            <!-- C302 -->
            <div id="c302">
                <div class="row">
                    <div class='col'>
                        <h3>C302</h3>
                        
                        <!-- style="margin:0px; padding:0px; overflow: hidden;" -->
                        <div class="360deg-img">
                            <iframe src="../content/Gambar Ruangan/Lantai 3 Gedung Kuliah/ruang-c302.jpg" frameborder="0" width="100%"></iframe>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col informasi-fasilitas pt-4">
                        <h4>Fasilitas Ruangan:</h4>
                        <ul>
                            <li> Kursi Staff</li>
                            <li> 78 Kursi Kuliah</li>
                            <li> Meja Kerja Single</li>
                            <li> White Board</li>
                            <li> Tempat Sampah Kecil</li>
                            <li> Papan Nama Ruangan</li>
                            <li> Screen Projector</li>
                        </ul>
                        <h4>Deskripsi:</h4>
                        <p>Marupakan ruangan perkuliahan yang dilengkapi oleh proyektor dan layar proyektor sebagai fasilitas persentasi.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col pb-5">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-striped table-hover">
                                    <?php
                                        $sql = "SELECT * FROM c302";
                                        include_once 'dbh.inc.php';
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- C303 -->
            <div id="c303">
                <div class="row">
                    <div class='col'>
                        <h3>C303</h3>
                        
                        <div class="360deg-img">
                            <iframe src="../content/Gambar Ruangan/Lantai 3 Gedung Kuliah/ruang-c303.jpg" frameborder="0" width="100%"></iframe>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col informasi-fasilitas pt-4">
                        <h4>Fasilitas Ruangan:</h4>
                        <ul>
                            <li> Kursi Staff</li>
                            <li> 40 Kursi Serbaguna</li>
                            <li> 40 Meja Siswa</li>
                            <li> Meja Kerja Single</li>
                            <li> White Board</li>
                            <li> Tempat Sampah Kecil</li>
                            <li> Papan Nama Ruangan</li>
                            <li> Screen Projector</li>
                        </ul>
                        <h4>Deskripsi:</h4>
                        <p>Marupakan ruangan perkuliahan yang dilengkapi oleh proyektor dan layar proyektor sebagai fasilitas persentasi.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col pb-5">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-striped table-hover">
                                    <?php
                                        $sql = "SELECT * FROM r401";
                                        include_once 'dbh.inc.php';
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- C304 -->
            <div id="c304">
                <div class="row">
                    <div class='col'>
                        <h3>C304</h3>
                        
                        <div class="360deg-img">
                            <iframe src="../content/Gambar Ruangan/Lantai 3 Gedung Kuliah/ruang-c304.jpg" frameborder="0" width="100%"></iframe>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col informasi-fasilitas pt-4">
                        <h4>Fasilitas Ruangan:</h4>
                        <ul>
                            <li> Kursi Staff</li>
                            <li> 40 Kursi Serbaguna</li>
                            <li> 40 Meja Siswa</li>
                            <li> Meja Kerja Single</li>
                            <li> White Board</li>
                            <li> Tempat Sampah Kecil</li>
                            <li> Papan Nama Ruangan</li>
                            <li> Screen Projector</li>
                        </ul>
                        <h4>Deskripsi:</h4>
                        <p>Marupakan ruangan perkuliahan yang dilengkapi oleh proyektor dan layar proyektor sebagai fasilitas persentasi.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col pb-5">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-striped table-hover">
                                    <?php
                                        $sql = "SELECT * FROM r401";
                                        include_once 'dbh.inc.php';
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- C306 -->
            <div id="c306">
                <div class="row">
                    <div class='col'>
                        <h3>C306</h3>
                        
                        <div class="360deg-img">
                            <iframe src="../content/Gambar Ruangan/Lantai 3 Gedung Kuliah/ruang-c306.jpg" frameborder="0" width="100%"></iframe>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col informasi-fasilitas pt-4">
                        <h4>Fasilitas Ruangan:</h4>
                        <ul>
                            <li> Kursi Staff</li>
                            <li> 113 Kursi Kuliah</li>
                            <li> Meja Kerja Single</li>
                            <li> White Board</li>
                            <li> Tempat Sampah Kecil</li>
                            <li> Papan Nama Ruangan</li>
                            <li> Screen Projector</li>
                        </ul>
                        <h4>Deskripsi:</h4>
                        <p>Marupakan ruangan perkuliahan yang dilengkapi oleh proyektor dan layar proyektor sebagai fasilitas persentasi.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col pb-5">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-striped table-hover">
                                    <?php
                                        $sql = "SELECT * FROM r401";
                                        include_once 'dbh.inc.php';
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- C307 -->
            <div id="c307">
                <div class="row">
                    <div class='col'>
                        <h3>C307</h3>
                        
                        <div class="360deg-img">
                            <iframe src="../content/Gambar Ruangan/Lantai 3 Gedung Kuliah/ruang-c307.jpg" frameborder="0" width="100%"></iframe>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col informasi-fasilitas pt-4">
                        <h4>Fasilitas Ruangan:</h4>
                        <ul>
                            <li> Kursi Staff</li>
                            <li> 78 Kursi Kuliah</li>
                            <li> Meja Kerja Single</li>
                            <li> White Board</li>
                            <li> Tempat Sampah Kecil</li>
                            <li> Papan Nama Ruangan</li>
                            <li> Screen Projector</li>
                        </ul>
                        <h4>Deskripsi:</h4>
                        <p>Marupakan ruangan perkuliahan yang dilengkapi oleh proyektor dan layar proyektor sebagai fasilitas persentasi.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col pb-5">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-striped table-hover">
                                    <?php
                                        $sql = "SELECT * FROM r401";
                                        include_once 'dbh.inc.php';
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- C308 -->
            <div id="c308">
                <div class="row">
                    <div class="col">
                        <h3>C308</h3>
                        <div class="360deg-img">
                            <iframe src="../content/Gambar Ruangan/Lantai 3 Gedung Kuliah/ruang-c308.jpg" frameborder="0" width="100%" style="@media (min-width: 992px) {padding-left: 200px;}"></iframe>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col informasi-fasilitas pt-4">
                        <h4>Fasilitas Ruangan:</h4>
                        <ul>
                            <li> Kursi Staff</li>
                            <li> 78 Kursi Kuliah</li>
                            <li> Meja Kerja Single</li>
                            <li> Tempat Sampah Kecil</li>
                            <li> Papan Nama Ruangan</li>
                            <li> Screen Projector</li>
                        </ul>
                        <h4>Deskripsi:</h4>
                        <p>Marupakan ruangan perkuliahan yang dilengkapi oleh proyektor dan layar proyektor sebagai fasilitas persentasi.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col pb-5">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-striped table-hover">
                                    <?php
                                        $sql = "SELECT * FROM r401";
                                        include_once 'dbh.inc.php';
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- C309 -->
            <div id="storage">
                <div class="row">
                    <div class="col">
                        <h3>Storage</h3>
                        <div class="360deg-img">
                            <iframe src="../content/Gambar Ruangan/Lantai 3 Gedung Kuliah/storage-c309.jpg" frameborder="0" width="100%" style="@media (min-width: 992px) {padding-left: 200px;}"></iframe>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col informasi-fasilitas pt-4">
                        <h4>Fasilitas Ruangan:</h4>
                        <ul>
                            <li> Rak Penyimpanan Besi</li>
                            <li> Tempat Sampah Kecil</li>
                            <li> Papan Nama Ruangan</li>
                        </ul>
                        <h4>Deskripsi:</h4>
                        <p>Merupakan ruangan penyimpanan barang.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col pb-5">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-striped table-hover">
                                    <?php
                                        $sql = "SELECT * FROM r401";
                                        include_once 'dbh.inc.php';
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- C310 -->
            <div id="pantry-lt3">
                <div class="row">
                    <div class="col">
                        <h3>Pantry</h3>
                        <div class="360deg-img">
                            <iframe src="../content/Gambar Ruangan/Lantai 3 Gedung Kuliah/pantry-c310.jpg" frameborder="0" width="100%" style="@media (min-width: 992px) {padding-left: 200px;}"></iframe>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col informasi-fasilitas pt-4">
                        <h4>Fasilitas Ruangan:</h4>
                        <ul>
                            <li> Dry Pantry/Kabinet Atar</li>
                            <li> Tempat Sampah Kecil</li>
                            <li> Papan Nama Ruangan</li>
                        </ul>
                        <h4>Deskripsi:</h4>
                        <p>Merupakan ruangan dapur yang digunakan oleh petugas.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col pb-5">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-striped table-hover">
                                    <?php
                                        $sql = "SELECT * FROM r401";
                                        include_once 'dbh.inc.php';
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- LANTAI EMPAT -->
        <div id="lantai4" class="container pt-4">
            <h1>Lantai 4</h1>
            <!-- C402 -->
            <div id="c402">
                <div class="row">
                    <div class='col'>
                        <h3>C402</h3>
                        
                        <!-- style="margin:0px; padding:0px; overflow: hidden;" -->
                        <div class="360deg-img">
                            <iframe src="../content/Gambar Ruangan/Lantai 4 Gedung Kuliah/ruang-c402.jpg" frameborder="0" width="100%"></iframe>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h4>Info:</h4>
                        <ul>
                            <li> Kursi 50</li>
                            <li> Meja 50</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col pb-5">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-striped table-hover">
                                    <?php
                                        $sql = "SELECT * FROM c302";
                                        include_once 'dbh.inc.php';
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- C403 -->
            <div id="c403">
                <div class="row">
                    <div class='col'>
                        <h3>C403</h3>
                        
                        <div class="360deg-img">
                            <iframe src="../content/Gambar Ruangan/Lantai 4 Gedung Kuliah/ruang-c403.jpg" frameborder="0" width="100%"></iframe>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h4>Info:</h4>
                        <ul>
                            <li> Kursi 50</li>
                            <li> Meja 50</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col pb-5">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-striped table-hover">
                                    <?php
                                        $sql = "SELECT * FROM r401";
                                        include_once 'dbh.inc.php';
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- C404 -->
            <div id="c404">
                <div class="row">
                    <div class='col'>
                        <h3>C404</h3>
                        
                        <div class="360deg-img">
                            <iframe src="../content/Gambar Ruangan/Lantai 4 Gedung Kuliah/ruang-c404.jpg" frameborder="0" width="100%"></iframe>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h4>Info:</h4>
                        <ul>
                            <li> Kursi 50</li>
                            <li> Meja 50</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col pb-5">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-striped table-hover">
                                    <?php
                                        $sql = "SELECT * FROM r401";
                                        include_once 'dbh.inc.php';
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- C406 -->
            <div id="c406">
                <div class="row">
                    <div class='col'>
                        <h3>C406</h3>
                        
                        <div class="360deg-img">
                            <iframe src="../content/Gambar Ruangan/Lantai 4 Gedung Kuliah/ruang-c406.jpg" frameborder="0" width="100%"></iframe>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h4>Info:</h4>
                        <ul>
                            <li> Kursi 50</li>
                            <li> Meja 50</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col pb-5">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-striped table-hover">
                                    <?php
                                        $sql = "SELECT * FROM r401";
                                        include_once 'dbh.inc.php';
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- C407 -->
            <div id="c407">
                <div class="row">
                    <div class='col'>
                        <h3>C407</h3>
                        
                        <div class="360deg-img">
                            <iframe src="../content/Gambar Ruangan/Lantai 4 Gedung Kuliah/ruang-c407.jpg" frameborder="0" width="100%"></iframe>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h4>Info:</h4>
                        <ul>
                            <li> Kursi 50</li>
                            <li> Meja 50</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col pb-5">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-striped table-hover">
                                    <?php
                                        $sql = "SELECT * FROM r401";
                                        include_once 'dbh.inc.php';
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- C408 -->
            <div id="c408">
                <div class="row">
                    <div class="col">
                        <h3>C408</h3>
                        <div class="360deg-img">
                            <iframe src="../content/Gambar Ruangan/Lantai 4 Gedung Kuliah/ruang-c408.jpg" frameborder="0" width="100%" style="@media (min-width: 992px) {padding-left: 200px;}"></iframe>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h4>Info:</h4>
                        <ul>
                            <li> Kursi 50</li>
                            <li> Meja 50</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col pb-5">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-striped table-hover">
                                    <?php
                                        $sql = "SELECT * FROM r401";
                                        include_once 'dbh.inc.php';
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- C409 -->
            <div id="storage">
                <div class="row">
                    <div class="col">
                        <h3>Storage</h3>
                        <div class="360deg-img">
                            <iframe src="../content/Gambar Ruangan/Lantai 4 Gedung Kuliah/storage-c409.jpg" frameborder="0" width="100%" style="@media (min-width: 992px) {padding-left: 200px;}"></iframe>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h4>Info:</h4>
                        <ul>
                            <li> Kursi 50</li>
                            <li> Meja 50</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col pb-5">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-striped table-hover">
                                    <?php
                                        $sql = "SELECT * FROM r401";
                                        include_once 'dbh.inc.php';
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- C410 -->
            <div id="pantry">
                <div class="row">
                    <div class="col">
                        <h3>Pantry</h3>
                        <div class="360deg-img">
                            <iframe src="../content/Gambar Ruangan/Lantai 4 Gedung Kuliah/pantry-c410.jpg" frameborder="0" width="100%" style="@media (min-width: 992px) {padding-left: 200px;}"></iframe>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h4>Info:</h4>
                        <ul>
                            <li> Kursi 50</li>
                            <li> Meja 50</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col pb-5">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-striped table-hover">
                                    <?php
                                        $sql = "SELECT * FROM r401";
                                        include_once 'dbh.inc.php';
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Toilet -->
            <div id="toilet">
                <div class="row">
                    <div class="col">
                        <h3>Toilet</h3>
                        <div class="360deg-img">
                            <iframe src="../content/Gambar Ruangan/Lantai 4 Gedung Kuliah/toilet-lp.jpg" frameborder="0" width="100%" style="@media (min-width: 992px) {padding-left: 200px;}"></iframe>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h4>Info:</h4>
                        <ul>
                            <li> Kursi 50</li>
                            <li> Meja 50</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col pb-5">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-striped table-hover">
                                    <?php
                                        $sql = "SELECT * FROM r401";
                                        include_once 'dbh.inc.php';
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="justify-content-center align-items-center" style="background-color: #0097A7;">
        <div class="row">
            <div class="col-sm-6">
                <p>Jalan Kuaro Kotak Pos 1068<br>Telp. (0541) 749343<br>Email : humas@unmul.ac.id<br>Fax. (0541) 747479 - 732870<br>Samarinda 75119, Kalimantan<br>Timur, Indonesia</p>
            </div>
            <div class="col-sm-6">
                <ul class="footer-logo nav justify-content-end">
                    <li>
                        <a href="https://www.instagram.com/ai.unmul/"><img src="../img/ai-min.png" alt="Logo Hima"></a>
                    </li>
                    <li>
                        <a href="https://unmul.ac.id/"><img src="../img/unmul-min.png" alt="Logo Kampus"></a>
                    </li>
                    <li>
                        <a href="http://informatika.ft.unmul.ac.id/"><img src="../img/informatika.png" alt="Logo Prodi"></a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>


    <!-- Searching Script -->
    <script type="text/javascript">
        function goToPage() {
            var kodeRuang = document.getElementById("kode-ruang").value;
            location.href = "#" + kodeRuang.toLowerCase();
        }
        const input = document.getElementById("kode-ruang");
        input.addEventListener("keydown", (e) => {
            if (e.key.toLowerCase() === "enter") goToPage();
        });
    </script>

    <!-- Box Date TIme -->
    <script src="../js/date_time.js"></script>

    <!-- Optional JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Bar Button -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
