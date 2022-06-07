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
                            <iframe src="../content/Gambar Ruangan/Lantai 1 Gedung Kuliah/C106.jpg" frameborder="0" width="100%"></iframe>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col informasi-fasilitas pt-4">
                        <h4>Fasilitas Ruangan:</h4>
                        <ul>
                            <li> Untitled</li>
                        </ul>
                        <h4>Deskripsi:</h4>
                        <p>-</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col pb-5">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-striped table-hover">
                                    <?php
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Meeting Room -->
            <div id="meet-room-lt1">
                <div class="row">
                    <div class='col'>
                        <h3>Meeting Room</h3>
                        <div class="360deg-img">
                            <iframe src="../content/Gambar Ruangan/Lantai 1 Gedung Kuliah/Musholla.jpg" frameborder="0" width="100%"></iframe>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col informasi-fasilitas pt-4">
                        <h4>Fasilitas Ruangan:</h4>
                        <ul>
                            <li> Untitled</li>
                        </ul>
                        <h4>Deskripsi:</h4>
                        <p>-</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col pb-5">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-striped table-hover">
                                    <?php
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Toilet -->
            <div id="toilet-lt1">
                <div class="row">
                    <div class='col'>
                        <h3>Toilet</h3>
                        <div class="360deg-img">
                            <iframe src="../content/Gambar Ruangan/Lantai 1 Gedung Kuliah/AkademikKemahasiswaan.jpg" frameborder="0" width="100%"></iframe>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col informasi-fasilitas pt-4">
                        <h4>Fasilitas Ruangan:</h4>
                        <ul>
                            <li> Untitled</li>
                        </ul>
                        <h4>Deskripsi:</h4>
                        <p>-</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col pb-5">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-striped table-hover">
                                    <?php
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Lobby -->
            <div id="lobby-lt1">
                <div class="row">
                    <div class='col'>
                        <h3>Lobby</h3>
                        <div class="360deg-img">
                            <iframe src="../content/Gambar Ruangan/Lantai 1 Gedung Kuliah/lobby.jpg" frameborder="0" width="100%"></iframe>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col informasi-fasilitas pt-4">
                        <h4>Fasilitas Ruangan:</h4>
                        <ul>
                            <li> Untitled</li>
                        </ul>
                        <h4>Deskripsi:</h4>
                        <p>-</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col pb-5">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-striped table-hover">
                                    <?php
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Satff & Lecture Room -->
            <div id="staff-lec-lt1">
                <div class="row">
                    <div class="col">
                        <h3>Pantry</h3>
                        <div class="360deg-img">
                            <iframe src="../content/Gambar Ruangan/Lantai 1 Gedung Kuliah/pantry.jpg" frameborder="0" width="100%" style="@media (min-width: 992px) {padding-left: 200px;}"></iframe>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col informasi-fasilitas pt-4">
                        <h4>Fasilitas Ruangan:</h4>
                        <ul>
                            <li> Untitled</li>
                        </ul>
                        <h4>Deskripsi:</h4>
                        <p>-</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col pb-5">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-striped table-hover">
                                    <?php
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Storage -->
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
