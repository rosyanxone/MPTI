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
    <title>Ruang Laboratory Building</title>
</head>

<body onload="initClock()">

    <!-- Navbar -->
    <nav class="navbar navbar-dark" style="background-color: #0097A7;">
        <div class="container">
            <a class="navbar-brand" href="http://gedungbaru-ftunmul.rf.gd">LABORATORY BUILDING</a>
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
        <!-- LANTAI SATU -->
        <div id="lantai1" class="container pt-4">
            <h1>Lantai 1</h1>
            <!-- Library -->
            <div id="library">
                <div class="row">
                    <div class='col'>
                        <h3>Library</h3>
                        <div class="360deg-img">
                            <iframe src="../content/Gambar Ruangan/Lantai 1 Lab/library.jpg" frameborder="0" width="100%"></iframe>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col informasi-fasilitas pt-4 pb-5">
                        <h4>Fasilitas Ruangan:</h4>
                        <ul>
                            <li>Locker 15 Pintu</li>
                            <li>Stop Kontak</li>
                            <li>Kursi Staff</li>
                            <li>Kursi Serbaguna</li>
                            <li>File Cabinet</li>
                            <li>Rak Buku</li>
                            <li>Meja Baca</li>
                            <li>Meja Kerja</li>
                            <li>Mobile Drawer</li>
                            <li>Meja Rapat Sedang</li>
                            <li>Tempat Sampah Kecil</li>
                            <li>Papan Nama Ruangan</li>
                        </ul>
                        <h4>Deskripsi:</h4>
                        <p>Fasilitas membaca dan meminjam buku untuk mahasiswa dan civitas akademik.</p>
                    </div>
                </div>
            </div>
            <!-- Pantry -->
            <div id="pantry">
                <div class="row">
                    <div class='col'>
                        <h3>Pantry</h3>
                        <div class="360deg-img">
                            <iframe src="../content/Gambar Ruangan/Lantai 1 Lab/pantry.jpg" frameborder="0" width="100%"></iframe>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col informasi-fasilitas pt-4 pb-5">
                        <h4>Fasilitas Ruangan:</h4>
                        <ul>
                            <li>Dry Pantry/ Kabinet Atas</li>
                            <li>Papan Nama Ruangan</li>
                        </ul>
                        <h4>Deskripsi:</h4>
                        <p>Merupakan ruangan dapur yang digunakan oleh petugas.</p>
                    </div>
                </div>
            </div>
            <!-- Toilet -->
            <div id="toilet">
                <div class="row">
                    <div class='col'>
                        <h3>Toilet</h3>
                        <div class="360deg-img">
                            <iframe src="../content/Gambar Ruangan/Lantai 1 Lab/toilet.jpg" frameborder="0" width="100%"></iframe>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col informasi-fasilitas pt-4 pb-5">
                        <h4>Fasilitas Ruangan:</h4>
                        <ul>
                            <li>Tempat Sampah Kecil</li>
                            <li>Tempat Sabun </li>
                            <li>Papan Nama Ruangan</li>
                            <li>Papan Nama Simbol</li>
                            <li>Tempat Tissu Besar</li>
                            <li>Tempat Tissu Gulung</li>
                            <li>Papan Nama Simbol</li>
                        </ul>
                        <h4>Deskripsi:</h4>
                        <p>Merupakan Toilet yang digunakan oleh mahasiswa dan civitas akademik laki-laki, perempuan dan penyandang disabilitas.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- LANTAI DUA -->
        <div id="lantai2" class="container pt-4">
            <h1>Lantai 2</h1>
            <!-- Ruang Sidang -->
            <div id="ruang-sidang">
                <div class="row">
                    <div class='col'>
                        <h3>Ruang Sidang</h3>
                        <div class="360deg-img">
                            <iframe src="../content/Gambar Ruangan/Lantai 2 Lab/ruang-sidang.jpg" frameborder="0" width="100%"></iframe>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col informasi-fasilitas pt-4 pb-5">
                        <h4>Fasilitas Ruangan:</h4>
                        <ul>
                            <li>Kursi Staff</li>
                            <li>Kursi Serbaguna</li>
                            <li>Meja Kerja</li>
                            <li>Meja Rapat Modular</li>
                            <li>Tempat Sampah Kecil</li>
                            <li>Papan Nama Ruangan</li>
                            <li>Patung Lambang Garuda</li>
                            <li>Photo Presiden dan Wapres</li>
                        </ul>
                        <h4>Deskripsi:</h4>
                        <p>Merupakan Ruangan yang digunakan Sebagai tempat untuk seminar , sebagai sarana mengajar dosen untuk presentasi mahasiswa, Sebagai sarana mahasiswa mempresentasikan tugas akhir, dan tempat pengujian tugas akhir mahasiswa.</p>
                    </div>
                </div>
            </div>
            <!-- Studio Arsitektur & Perencanaan -->
            <div id="arsitektur-perencanaan">
                <div class="row">
                    <div class='col'>
                        <h3>Studio Arsitektur & Perencanaan</h3>
                        <div class="360deg-img">
                            <iframe src="../content/Gambar Ruangan/Lantai 2 Lab/studio-arsitektur-perencanaan.jpg" frameborder="0" width="100%"></iframe>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col informasi-fasilitas pt-4 pb-5">
                        <h4>Fasilitas Ruangan:</h4>
                        <ul>
                            <li>Locker 15 Pintu</li>
                            <li>Kursi Staff</li>
                            <li>Kursi Serbaguna</li>
                            <li>Lemari Besi Sliding</li>
                            <li>Locker 15 Pintu</li>
                            <li>Meja Komputer</li>
                            <li>Meja Kerja</li>
                            <li>White Board</li>
                            <li>Rised Floor</li>
                            <li>Screen Projector</li>
                            <li>Tempat Sampah Kecil</li>
                            <li>Papan Nama Ruangan</li>
                        </ul>
                        <h4>Deskripsi:</h4>
                        <p>Merupakan ruangan studio yang digunakan untuk program studi arsitekrur.</p>
                    </div>
                </div>
            </div>
            <!-- Musholla -->
            <div id="musholla">
                <div class="row">
                    <div class='col'>
                        <h3>Musholla</h3>
                        <div class="360deg-img">
                            <iframe src="../content/Gambar Ruangan/Lantai 2 Lab/musholla.jpg" frameborder="0" width="100%"></iframe>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col informasi-fasilitas pt-4 pb-5">
                        <h4>Fasilitas Ruangan:</h4>
                        <ul>
                            <li>Rak Sepatu<li>
                            <li>Lemari Pakaian<li>
                            <li>Lemari Pendek <li>
                            <li>Carpet Roll<li>
                            <li>Papan Nama Ruangan<li>
                        </ul>
                        <h4>Deskripsi:</h4>
                        <p>Fasilitas ibadah.</p>
                    </div>
                </div>
            </div>
            <!-- Toilet -->
            <div id="toilet-lt2">
                <div class="row">
                    <div class='col'>
                        <h3>Toilet</h3>
                        <div class="360deg-img">
                            <iframe src="../content/Gambar Ruangan/Lantai 2 Lab/toilet.jpg" frameborder="0" width="100%"></iframe>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col informasi-fasilitas pt-4 pb-5">
                        <h4>Fasilitas Ruangan:</h4>
                        <ul>
                            <li>Tempat Sampah Kecil</li>
                            <li>Tempat Sabun </li>
                            <li>Papan Nama Ruangan</li>
                            <li>Papan Nama Simbol</li>
                            <li>Tempat Tissu</li>
                        </ul>
                        <h4>Deskripsi:</h4>
                        <p>Merupakan Toilet yang digunakan oleh mahasiswa dan civitas akademik laki-laki, perempuan dan penyandang disabilitas.</p>
                    </div>
                </div>
            </div>
            <!-- Janitor -->
            <div id="janitor">
                <div class="row">
                    <div class='col'>
                        <h3>Janitor</h3>
                        <div class="360deg-img">
                            <iframe src="../content/Gambar Ruangan/Lantai 2 Lab/janitor.jpg" frameborder="0" width="100%"></iframe>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col informasi-fasilitas pt-4 pb-5">
                        <h4>Fasilitas Ruangan:</h4>
                        <ul>
                            <li>Tempat Sampah Kecil</li>
                            <li>Papan Nama Ruangan</li>
                        </ul>
                        <h4>Deskripsi:</h4>
                        <p>Merupakan ruangan yang digunakan untuk berwudhu.</p>
                    </div>
                </div>
            </div>
            <!-- Lab Basic Programming -->
            <div id="lab-basic-prog">
                <div class="row">
                    <div class='col'>
                        <h3>Laboratory of Basic Programming</h3>
                        <div class="360deg-img">
                            <iframe src="../content/Gambar Ruangan/Lantai 2 Lab/lab-basic-programming.jpg" frameborder="0" width="100%"></iframe>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col informasi-fasilitas pt-4 pb-5">
                        <h4>Fasilitas Ruangan:</h4>
                        <ul>
                            <li>Kursi Staff</li>
                            <li>Kursi Serbaguna</li>
                            <li>Lemari Besi Sliding</li>
                            <li>Locker</li>
                            <li>Meja Komputer</li>
                            <li>Meja Kerja</li>
                            <li>White Board</li>
                            <li>Screen Projector</li>
                            <li>Tempat Sampah Kecil</li>
                            <li>Papan Nama Ruangan</li>
                        </ul>
                        <h4>Deskripsi:</h4>
                        <p>Merupakan ruanga Labolatorium komputer sebagai sarana praktikum yang menggunakan perangkat komputer.</p>
                    </div>
                </div>
            </div>
            <!-- Seminar Room 1 -->
            <div id="seminar-room1">
                <div class="row">
                    <div class='col'>
                        <h3>Seminar Room 1</h3>
                        <div class="360deg-img">
                            <iframe src="../content/Gambar Ruangan/Lantai 2 Lab/seminar-room1.jpg" frameborder="0" width="100%"></iframe>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col informasi-fasilitas pt-4 pb-5">
                        <h4>Fasilitas Ruangan:</h4>
                        <ul>
                            <li>Kursi Staff</li>
                            <li>Kursi Serbaguna</li>
                            <li>Meja Kerja</li>
                            <li>Meja Rapat Modular</li>
                            <li>Tempat Sampah Kecil</li>
                            <li>Papan Nama Ruangan</li>
                            <li>Patung Lambang Garuda</li>
                            <li>Photo Presiden dan Wapres</li>
                        </ul>
                        <h4>Deskripsi:</h4>
                        <p>Merupakan Ruangan yang digunakan Sebagai tempat untuk seminar, sebagai sarana mengajar dosen untuk presentasi mahasiswa, Sebagai sarana mahasiswa mempresentasikan tugas akhir, dan tempat pengujian tugas akhir mahasiswa.</p>
                    </div>
                </div>
            </div>
            <!-- Seminar Room 2 -->
            <div id="seminar-room2">
                <div class="row">
                    <div class='col'>
                        <h3>Seminar Room 2</h3>
                        <div class="360deg-img">
                            <iframe src="../content/Gambar Ruangan/Lantai 2 Lab/seminar-room2.jpg" frameborder="0" width="100%"></iframe>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col informasi-fasilitas pt-4 pb-5">
                        <h4>Fasilitas Ruangan:</h4>
                        <ul>
                            <li>Kursi Staff</li>
                            <li>Kursi Serbaguna</li>
                            <li>Meja Kerja</li>
                            <li>Meja Rapat Modular</li>
                            <li>Tempat Sampah Kecil</li>
                            <li>Papan Nama Ruangan</li>
                            <li>Patung Lambang Garuda</li>
                            <li>Photo Presiden dan Wapres</li>
                        </ul>
                        <h4>Deskripsi:</h4>
                        <p>Merupakan Ruangan yang digunakan Sebagai tempat untuk seminar, sebagai sarana mengajar dosen untuk presentasi mahasiswa, Sebagai sarana mahasiswa mempresentasikan tugas akhir, dan tempat pengujian tugas akhir mahasiswa.</p>
                    </div>
                </div>
            </div>
            <!-- Seminar Room 3 -->
            <div id="seminar-room3">
                <div class="row">
                    <div class='col'>
                        <h3>Seminar Room 3</h3>
                        <div class="360deg-img">
                            <iframe src="../content/Gambar Ruangan/Lantai 2 Lab/seminar-room3.jpg" frameborder="0" width="100%"></iframe>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col informasi-fasilitas pt-4 pb-5">
                        <h4>Fasilitas Ruangan:</h4>
                        <ul>
                            <li>Kursi Staff</li>
                            <li>Kursi Serbaguna</li>
                            <li>Meja Kerja</li>
                            <li>Meja Rapat Modular</li>
                            <li>Tempat Sampah Kecil</li>
                            <li>Papan Nama Ruangan</li>
                            <li>Patung Lambang Garuda</li>
                            <li>Photo Presiden dan Wapres</li>
                        </ul>
                        <h4>Deskripsi:</h4>
                        <p>Merupakan Ruangan yang digunakan Sebagai tempat untuk seminar , sebagai sarana mengajar dosen untuk presentasi mahasiswa, Sebagai sarana mahasiswa mempresentasikan tugas akhir, dan tempat pengujian tugas akhir mahasiswa.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- LANTAI TIGA -->
        <div id="lantai3" class="container pt-4 pb-5">
            <h1>Lantai 3</h1>
            <!-- Meeting Room -->
            <div id="meeting-room">
                <div class="row">
                    <div class='col'>
                        <h3>Meeting Room</h3>
                        <div class="360deg-img">
                            <iframe src="../content/Gambar Ruangan/Lantai 3 Lab/meeting-room.jpg" frameborder="0" width="100%"></iframe>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col informasi-fasilitas pt-4 pb-5">
                        <h4>Fasilitas Ruangan:</h4>
                        <ul>
                            <li>Kursi Staff</li>
                            <li>Lemari Buku Kaca/Obat</li>
                            <li>Meja Rapat Modular</li>
                            <li>Meja Sudut</li>
                            <li>Screen Projector</li>
                            <li>Tempat Sampah Kecil</li>
                            <li>Papan Nama Ruangan
                            <li>Floor Outlet</li>
                            <li>Carpet Tile</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Lab Web Engineering -->
            <div id="lab-web">
                <div class="row">
                    <div class='col'>
                        <h3>Laboratory of Web Engineering</h3>
                        <div class="360deg-img">
                            <iframe src="../content/Gambar Ruangan/Lantai 3 Lab/lab-web.jpg" frameborder="0" width="100%"></iframe>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col informasi-fasilitas pt-4 pb-5">
                        <h4>Fasilitas Ruangan:</h4>
                        <ul>
                            <li>Kursi Staff</li>
                            <li>Kursi Serbaguna</li>
                            <li>Lemari Besi Sliding</li>
                            <li>Locker</li>
                            <li>Meja Komputer</li>
                            <li>Meja Kerja</li>
                            <li>White Board</li>
                            <li>Screen Projector</li>
                            <li>Tempat Sampah Kecil</li>
                            <li>Papan Nama Ruangan</li>
                        </ul>
                        <h4>Deskripsi:</h4>
                        <p>Merupakan ruanga Labolatorium komputer sebagai sarana praktikum yang menggunakan perangkat komputer.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- LANTAI EMPAT -->
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
