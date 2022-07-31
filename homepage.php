<html lang="en">
<?php date_default_timezone_set('Asia/Jakarta'); ?>
<?php include 'koneksi.php' ?>
<?php
//Menampilkan wish pada kolom wish
$query = mysqli_query($koneksi, "SELECT * FROM tbl_harapan");
$row_query = mysqli_fetch_assoc($query);
$date_time = date("Y:m:d h:i:sa");

// Jika tombol konfirmasi kehadiran di klik
if (isset($_POST['konfirmasi'])) {
    $nama = $_POST['nama'];
    $nomor = $_POST['nomor'];
    $konfirmasi_kehadiran = $_POST['konfirmasi_kehadiran'];
    $sesi = $_POST['sesi'];

    $query_insert_rsvp = mysqli_query($koneksi, "INSERT INTO tbl_kehadiran(nama, nomor, konfirmasi_kehadiran, sesi) VALUES ('$nama', '$nomor', '$konfirmasi_kehadiran', '$sesi') ");

    if ($query_insert_rsvp) {
        empty($nama);
        empty($nomor);
        empty($konfirmasi_kehadiran);
        empty($sesi);
        header("Location: homepage.php?konfirmasi=berhasil&#data-kehadiran");
    } else {
        header("Location: homepage.php?konfirmasi=gagal");
    }
}

// Jika tombol wish ditekan
if (isset($_POST['kirim'])) {
    $nama_tamu = $_POST['nama_tamu'];
    $harapan = $_POST['harapan'];  
    $kehadiran = $_POST['kehadiran'];

    echo `
    <script>
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();

        today = mm + '/' + dd + '/' + yyyy;
        console.log(today)
    </script>
    `;

    $query_insert_wish = mysqli_query($koneksi, "INSERT INTO tbl_harapan(nama_tamu, harapan, waktu, kehadiran) VALUES ('$nama_tamu', '$harapan', '$date_time', '$kehadiran')");
    if ($query_insert_wish) {
        empty($nama_tamu);
        empty($harapan);     
        empty($kehadiran);
        header("Location: homepage.php?sent_wish=berhasil&#ucapan-doa");
    } else {
        header("Location: homepage.php?sent_wish=gagal");
    }
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zakiah & Ganda</title> 
   
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cedeen.netlify.app/font-awesome-5-pro/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="./css/lightbox.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
 
</head>

<body>
   <nav class="navbar navbar-expand navbar-dark fixed-bottom" style="background-color: #5aa5ca;">
    <ul class="navbar-nav nav-justified w-100">
        
    <li class="nav-item">
     <a href= "index.php" class="nav-link"><script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
<lord-icon
    src="https://cdn.lordicon.com/hjbsbdhw.json"
    trigger="hover"
    style="width: 30px;height: 30px;">
</lord-icon>
<span class="small d-block">Home</span></a>
        </li>
        <li class="nav-item">
            <a href= "#data-kehadiran" class="nav-link "><script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
<lord-icon
    src="https://cdn.lordicon.com/cjyxqyly.json"
    trigger="hover"
    style="width: 30px;height: 30px;">
</lord-icon>
<span class="small d-block">Kehadiran</span></a>
        </li>
        <li class="nav-item">
            <a href= "#ucapan-doa" class="nav-link "><script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
<lord-icon
    src="https://cdn.lordicon.com/dxoycpzg.json"
    trigger="morph"
    style="width: 30px;height: 30px;">
</lord-icon>
<span class="small d-block">Ucapan</span></a>
        </li>
        <li class="nav-item">
            <a href= "#gallery" class="nav-link "><script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
<lord-icon
    src="https://cdn.lordicon.com/qierxeeb.json"
    trigger="hover"
    style="width: 30px;height: 30px;">
</lord-icon>
<span class="small d-block">Gallery</span></a>
        </li>
        <li class="nav-item">
            <a href= "#angpao" class="nav-link "><script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
<lord-icon
    src="https://cdn.lordicon.com/liqouopv.json"
    trigger="hover"
    style="width: 30px;height: 30px;">
</lord-icon>
<span class="small d-block">Gift</span></a>
        </li>
</ul>
</nav>
    
        <main>
        
    <div class="into_firefly">
        <div id="content">
            <div class="landing-page">
                <div class="image-holder" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1300"></div>
                <div class="landpage-caption text-center pt-3 overflow-x-hidden" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1300">
               
                <p class="text-secondary text font-italic">The Wedding of</p>
                    <p class="font-alexBrush m-0 text-size-xl" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="1800">Zakiah</p>
                    <h1 class="font-alexBrush m-0">&</h1>
                    <p class="font-alexBrush m-0 text-size-xl" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="1800">Ganda</p>
</div> </div> <!-- end landpage-caption -->
                <div class="text-center mt-3">
                    <img class="w-25" src="./img/leaf2.png" alt="">
                </div>
            </div> <!-- end landing-page -->
            <div class=" container intro-person mt-1">
                <div class="hadith col-md-8">
                    <p data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="800">"Bismillahhirrahmanirrahim"</p>
                    <p data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="800">
                        Maha Suci Allah SWT
                        yang telah menciptakan makhluk-Nya berpasang-pasangan
                        perkenankan kami melaksanakan syariat agamamu mengikuti sunnah Rasul-mu, membentuk keluarga Sakinah Mawadah Warahmah.
                    </p>
                </div> <!-- end hadith -->
                <div class="container-couple overflow-x-hidden">
                    <div class="couple-half" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="1000">
                        <div class="photo-holder">
                            <img src="./img/profile1.jpg" alt="">
                        </div> <!-- end photo-holder -->
                        <div class="desc-groom">
                            <h1 class="font-alexBrush m-0">Zakiah</h1>
                            <p class="text-secondary">Zakiah Putri Ramadhan, S.Tr. Kom.</p>
                            <p>
                                <small><i>Putri Kedua Dari</i></small>
                                <br>
                                Bapak Syamsurian Citrayasa &
                                <br>
                                Ibu Halimah Zuriati
                            </p>
                        </div> <!-- end desc-groom -->
                    </div> <!-- end couple-half -->
                    <div class="m-auto">
                        <h1 class="font-alexBrush">- & -</h1>
                    </div>
                    <div class="couple-half text-right" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="1000">
                        <div class="desc-groom">
                            <h1 class="font-alexBrush m-0">Ganda</h1>
                            <p class="text-secondary">Muhammad Gandariansyah, S.Tr. T.</p>
                            <p>
                                <small><i>Putra Pertama Dari</i></small>
                                <br>
                                Bapak Ahmad Gani &
                                <br>
                                Ibu Rima Melati
                            </p>
                        </div> <!-- end desc-groom -->
                        <div class="photo-holder">
                            <img src="./img/profile2.jpg" alt="">
                        </div> <!-- end photo-holder -->
                    </div> <!-- end couple-half -->
                </div> <!-- end container-couple -->
            </div> <!-- end intro-person -->
            <div class="container schedule-container">
                <div class="hadith col-md-8" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="800">
                    <p>
                        Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu istri-istri dari
                        jenismu sendiri, supaya kamu cenderung dan merasa tentram kepadanya, dan dijadikan-Nya
                        diantaramu rasa kasih dan sayang. Sesungguhnya pada demikian itu benar-benar terdapat
                        tanda-tanda bagi kaum yang berfikir.
                    </p>
                    <p class="font-weight-bold">- Surat Ar-Rum Ayat 21 -</p>
                </div> <!-- end hadith -->
                <div class="schedule" id="schedule">
                    <div class="akad" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <h1 class="font-alexBrush text-center">Akad Nikah</h1>
                        <div class="mb-4">
                         <img class="w-100" src="./img/akad.svg" >
                        </div>
                    </div> <!-- end akad -->
                    <div class="akad" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <h1 class="font-alexBrush text-center">Resepsi</h1>
                        <div class="mb-4">
                        <img class="w-100" src="./img/resepsi.svg" > 
                        </div>
                    </div> <!-- end akad -->
                </div> <!-- end schedule -->
                <div class="location d-flex flex-column col-md-8 mb-5" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="800">
                    <i class="fas fa-map-marker-alt mb-2"></i>
                    <div>Jl. Jend. Sudirman No.Km. 3.5, Pahlawan, Kec. Kemuning, Kota Palembang, Sumatera Selatan 30128</div>
                </div> <!-- end location -->
                <div class="mb-5 text-center" data-aos="zoom-in-up" data-aos-easing="ease-in-sine" data-aos-duration="800">
                    <iframe src="https://www.google.com/maps/d/embed?mid=1qi001BYJC2Lwi2OmXr4BAAgPEpxu_Gg&ehbc=2E312F" class="mb-4"></iframe>
                    <div class="col-md-8 m-auto d-flex justify-content-center">
                        <a href="https://goo.gl/maps/ExguoSmMVR8bWgAi9" class="btn btn-brown mr-2 slide" target="_blank"><i class="fas fa-location-arrow mr-2"></i> Google Maps</a>
                        
                    </div>
                </div>
            </div> <!-- end schedule-container -->
            <div class="countdown-container">
                <div class="container">
                    <h1 class="font-alexBrush text-center" data-aos="zoom-in-down" data-aos-easing="ease-in-sine" data-aos-duration="1000">Countdown</h1>
                    <h5 class="text-center mb-4" data-aos="zoom-in-down" data-aos-easing="ease-in-sine" data-aos-duration="1000">SUNDAY, 15 JANUARY 2023</h5>
                    <div class="d-flex mb-5">
                        <div class="part-countdown">
                            <h1 id="days" class="m-0"></h1>
                            <p class="m-0">Days</p>
                        </div>
                        <div class="part-countdown">
                            <h1 id="hours" class="m-0"></h1>
                            <p class="m-0">Hours</p>
                        </div>
                        <div class="part-countdown">
                            <h1 id="minutes" class="m-0"></h1>
                            <p class="m-0">Minutes</p>
                        </div>
                        <div class="part-countdown">
                            <h1 id="seconds" class="m-0"></h1>
                            <p class="m-0">Seconds</p>
                        </div>
                    </div>
                 
                </div> <!-- end container -->
            </div> <!-- end countdown-container -->
            <br>
            <div class="love-story-wrapper">
                <div class="container ">
                    <h1 class="font-alexBrush text-center mb-4" data-aos="zoom-in-down" data-aos-easing="ease-in-sine" data-aos-duration="900">Love Story</h1>
                    <div class="timelines overflow-x-hidden">
                        <div class="timeline ">
                            <div class="timelineBar"></div> <!-- end timelineBar -->
                            <section data-aos="zoom-in-left" data-aos-easing="ease-in-sine" data-aos-duration="1000">
                                <div class="year">
                                    <p><small class="font-weight-bold">SEPTEMBER 2021</small></p>
                                </div>
                                <div class="timelineContent">
                                    <p>First Date</p>
                                    <p><small class="text-secondary">Bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</small></p>
                                </div> <!-- end timelineContent -->
                            </section>
                        </div> <!-- end timeline -->
                        <div class="timeline ">
                            <div class="timelineBar"></div> <!-- end timelineBar -->
                            <section data-aos="zoom-in-left" data-aos-easing="ease-in-sine" data-aos-duration="1000">
                                <div class="year">
                                    <p><small class="font-weight-bold">MEI 2022</small></p>
                                </div>
                                <div class="timelineContent">
                                    <p>Second Date</p>
                                    <p><small class="text-secondary">Bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</small></p>
                                </div> <!-- end timelineContent -->
                            </section>
                        </div> <!-- end timeline -->
                        <div class="timeline ">
                            <div class="timelineBar"></div> <!-- end timelineBar -->
                            <section data-aos="zoom-in-left" data-aos-easing="ease-in-sine" data-aos-duration="1000">
                                <div class="year">
                                    <p><small class="font-weight-bold">NOVEMBER 2022</small></p>
                                </div>
                                <div class="timelineContent">
                                    <p>Engagement Day</p>
                                    <p><small class="text-secondary">20 November 2022 kami mengadakan pertemuan keluarga sekaligus acara lamaran</small></p>
                                </div> <!-- end timelineContent -->
                            </section>
                        </div> <!-- end timeline -->
                        <div class="timeline ">
                            <div class="timelineBar"></div> <!-- end timelineBar -->
                            <section data-aos="zoom-in-left" data-aos-easing="ease-in-sine" data-aos-duration="1000">
                                <div class="year">
                                    <p><small class="font-weight-bold">JANUARI 2023</small></p>
                                </div>
                                <div class="timelineContent">
                                    <p>Wedding Day<span class="text-secondary"> (SOON)</span></p>
                                    <p><small class="text-secondary">Pernikahan akan berlangsung pada 15 Januari 2023 &#10084;</small></p>
                                </div> <!-- end timelineContent -->
                            </section>
                        </div> <!-- end timeline -->
                    </div> <!-- end timelines -->
                </div> <!-- end container -->
            </div> <!-- end love-story-wrapper -->
            <div class="gallery-container" id="gallery">
                <h1 class="font-alexBrush text-center mb-4">Gallery</h1>
                <div class="gallery container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-12" data-aos="fade-up" data-aos-easing="ease-in-sine">
                            <img src="./img/1.jpg" alt="">
                        </div>
                        <div class="col-md-6 col-sm-6 col-12" data-aos="fade-up" data-aos-easing="ease-in-sine">
                            <img src="./img/2.jpg" alt="">
                        </div>
                        <div class="col-md-6 col-sm-6 col-12" data-aos="fade-up" data-aos-easing="ease-in-sine">
                            <img src="./img/3.jpg" alt="">
                        </div>
                        <div class="col-md-6 col-sm-6 col-12" data-aos="fade-up" data-aos-easing="ease-in-sine">
                            <img src="./img/4.jpg" alt="">
                        </div>
                    </div> <!-- end row -->
                </div> <!-- end gallery -->
            <div id="data-kehadiran" class="rsvp container">
                <h1 class="font-alexBrush text-center mb-4">Data Kehadiran</h1>
                <form method="POST" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600">
                    <div class="form-group">
                        <label for="namaTamu">Nama</label>
                        <input type="text" name="nama" class="form-control" id="namaTamu" placeholder="Nama Lengkap Anda" required>
                    </div>
                    <div class="form-group">
                        <label for="noWhatsapp">Alamat</label>
                        <input type="text" name="nomor" class="form-control" id="noWhatsapp" placeholder="Asal / Alamat" required>
                    </div>
                    <div class="form-group">
                        <label for="konfirmasi">Konfirmasi Kehadiran</label>
                        <select name="konfirmasi_kehadiran" class="form-control" id="konfirmasi" onchange="checkKonfirmasi()">
                            <option selected>- Pilih Jawaban -</option>
                            <option id="hadir" value="hadir">Hadir</option>
                            <option value="tidak hadir">Maaf, berhalangan hadir</option>
                        </select>
                    </div>
                  
                    <button type="submit" name="konfirmasi" class="btn btn-brown">Konfirmasi</button>
                </form>
                <br>
            </div> <!-- end rsvp -->

            <div id="ucapan-doa" class="chatbox-container overflow-x-hidden">
                <h1 class="font-alexBrush text-center mb-4" data-aos="zoom-out-down" data-aos-easing="ease-in-sine" data-aos-duration="1000">Ucapan dan Do'a</h1>
                <div class="hadith col-md-8 mb-4" data-aos="zoom-out-down" data-aos-easing="ease-in-sine" data-aos-duration="1000">
                    <p>
                        Tinggalkan pesan dan Do'a anda untuk kami
                    </p>
                </div>
                <div class="container d-flex justify-content-between">
                   
                    <div class="form-wishes">
                        <form method="POST">
                            <div class="form-group">
                                <input name="nama_tamu" id="wish-from" type="text" class="form-control" placeholder="Nama Lengkap Anda" required>
                            </div>
                            <div class="form-group">
                        <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Asal / Alamat" required>
                    </div>
                    <div class="form-group">
                        <select name="kehadiran" class="form-control" id="kehadiran" onchange="checkKonfirmasi()">
                            <option selected>- Konfirmasi Kehadiran -</option>
                            <option id="hadir" value="hadir">Hadir</option>
                            <option value="tidak hadir">Maaf, berhalangan hadir</option>
                        </select>
                    </div>
                            <div class="form-group">
                                <textarea name="harapan" id="wish-content" class="form-control" rows="5" placeholder="Tulis harapan dan do'a" required></textarea>
                            </div>
                            <button type="submit" name="kirim" class="btn btn-outline-brown">Kirim</button>
                            <!-- <a href="Javascript:void(0);" onclick="addWishes()" type="submit" class="btn btn-outline-brown">Kirim</a> -->
                        </form>
                    </div> <!-- end form-wishes -->
                    <div class="chatbox">
                        <ul id="wish-room" class="mb-0" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="1000">
                            <?php do { ?>
                                <li>
                                    <div class="message-data">
                                        <span class="message-data-name">
                                            <img src="./img/profile.svg" alt="Profile Foto">
                                            <?= $row_query['nama_tamu']; ?> -
                                        </span> <!-- end message-data-name -->
                                        <span class="kehadiran">
                                            <?= $row_query['kehadiran']; ?>
                                        </span> <!-- end message-data-attendance--> 
                                        <span class="message-data-time">
                                            <?php echo date('h:i A, F d', strtotime($row_query['waktu'])); ?>
                                        </span> <!-- end message-data-time -->
                                       
                                    </div> <!-- end message-data -->
                                    <div class="message">
                                        <?= $row_query['harapan']; ?>
                                    </div> <!-- end message -->
                                </li>
                            <?php } while ($row_query = mysqli_fetch_assoc($query)); ?>
                        </ul>
                        <span id="new-messages-icon" class="fa-stack fa-sm" onclick="scrollToBottom()">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fas fa-angle-double-down fa-stack-1x fa-inverse"></i>
                        </span>
                    </div> <!-- end chatbox -->
                </div> <!-- end container -->
            </div> <!-- end chatbox-container -->
        </div> <!-- end #content -->


            <div class="container-fluid closing-hadith" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600">
                <div class="hadith col-md-8">
                    <p data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="800">
                        Barangsiapa menikah maka ia telah melengkapi separuh agamanya.
                        Dan hendaklah ia bertaqwa kepala Allah dalam memelihara yang separuhnya lagi.
                    </p>
                    <p class="font-alexBrush" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="800">- HR. Al Baihaqi -</p>
                </div> <!-- end hadith -->
            </div> <!-- end container-fluid -->
            <br>
            <div class="container">
                <h1 class="font-alexBrush text-center mb-4" id="angpao">Angpao Online</h1>
                <div class="hadith col-md-8 mb-4">
                    <p>
                        Klik pada barcode untuk memperbesar
                    </p>
                </div>
                <div class="qrcode-container">
                    <div class="ovo" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600">
                        <h7 class="text-center">OVO</h7>
                        <a href="./img/ovo.png" data-lightbox="OVO" data-title="QR Code OVO" style="cursor: pointer; outline: 20px;">
                            <img src="./img/ovo.png" alt="OVO">
                        </a>
                    </div>
                    <div class="dana" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600">
                        <h8 class="text-center">DANA</h8>
                        <a href="./img/dana.png" data-lightbox="DANA" data-title="QR Code DANA" style="cursor: pointer; outline: 20px;">
                            <img src="./img/dana.png" alt="DANA">
                        </a>
                    </div>
                </div>
            </div> <!-- end container -->
       
<br>
        <div class="container">
                <h1 class="font-alexBrush text-center">Protokol Kesehatan</h1>
                <div class="hadith col-md-8">
                    <p>
                        Di masa <b>Pandemi Covid-19</b> ini kami memohon agar seluruh tamu undangan yang hadir dalam acara ini
                        dapat mengikuti protokol kesehatan yang berlaku dan mengikuti himbauan pemerintah
                    </p>
                </div>
                <div class="protokol-kesehatan">
                    <div data-aos="zoom-in-up" data-aos-easing="ease-in-sine" data-aos-duration="800">
                    <center> <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
                    <lord-icon
                        src="https://cdn.lordicon.com/whvrlbbr.json"
                        trigger="hover"
                        style="width: 100px;height: 100px;">
                    </lord-icon>
                        <p>Membawa dan menggunakan masker</p></center>
                    </div>
                    <div data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="800">
                 
                    <center>  <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
                    <lord-icon
                        src="https://cdn.lordicon.com/tpjviwre.json"
                        trigger="hover"
                        style="width: 100px;height: 100px;">
                    </lord-icon>
                        <p>Mencuci tangan dengan sabun/hand sanitizer</p></center>
                    </div>
                    <div data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="800">
                    <center>  <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
                    <lord-icon
                        src="https://cdn.lordicon.com/flvisirw.json"
                        trigger="hover"
                        style="width: 100px;height: 100px;">
                    </lord-icon>
                        <p>Menjaga jarak minimal 1 meter selama acara berlangsung</p></center>
                    </div>
                    <div data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="800">
                    <center> <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
                    <lord-icon
                        src="https://cdn.lordicon.com/jyrzzwxi.json"
                        trigger="hover"
                        style="width: 100px;height: 100px;">
                    </lord-icon>
                        <p>Suhu badan normal dan tidak sedang flu</p>
                    </div>
                  
                </div> <!-- end protokol-kesehatan -->
            </div> <!-- end container -->

        <!-- Background Music -->
        <center>
        <audio controls autoplay loop>
        <source src="Ada_Untukmu.webm" type="audio/ogg">
        <source src="Ada_Untukmu.webm" type="audio/mpeg">
</audio></center>
<br>

       </main>
    <footer><br>
        <span>&copy; Built with &#10084;  by Zakiah Citrayasa - 2022 </span>
        <div class="social-media">
            <a href="mailto:zakiah.putri@gmail.com" target="_blank"><i class="fas fa-envelope"></i></a>
            <a href="https://www.instagram.com/zakiahputrir/" target="_blank"><i class="fab fa-instagram"></i></a>
           </div> <!-- end social-media -->
                            </footer> 
        
                            <br> <br> <br>
           <!--                 <div class="player">
              <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/976210396&color=%23153e80&auto_play=true&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/tyok-satrio-732559373" title="Tyok Satrio" target="_blank" style="color: #cccccc; text-decoration: none;">Tyok Satrio</a> · <a href="https://soundcloud.com/tyok-satrio-732559373/ada-untukmu" title="ADA UNTUKMU" target="_blank" style="color: #cccccc; text-decoration: none;">ADA UNTUKMU</a></div> </footer>
              </div> -->
         <script src="./js/jquery-3.5.1.js"></script>
    <script src="./js/lightbox-plus-jquery.min.js"></script>
    <script src="./js/countdown.js"></script>
    <script src="./js/jquery.firefly-0.3-min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
        AOS.init();
    </script>
    <script>
       
        const hadir = document.querySelector('#hadir')
        const wishRoom = document.querySelector('#wish-room')
        const wishFrom = document.querySelector('#wish-from')
        const wishContent = document.querySelector('#wish-content')

       

        function addWishes() {
            // Get time
            var date = new Date(); // for now

            let hours = date.getHours();
            let minutes = date.getMinutes();
            let ampm = hours >= 12 ? 'PM' : 'AM';
            hours = hours % 12;
            // hours = hours ? hours : 12; // the hour '0' should be '12'
            minutes = minutes < 10 ? '0' + minutes : minutes;
            let strTime = hours + ':' + minutes + ' ' + ampm;
            wishRoom.innerHTML += `
                            <li>
                                <div class="message-data">
                                    <span class="message-data-name">
                                        <img src="./img/profile.svg" alt="Profile Foto">
                                        ${wishFrom.value}
                                    </span> <!-- end message-data-name -->
                                    <span class="message-data-time">
                                        ${strTime}, Today
                                    </span> <!-- end message-data-time -->
                                </div> <!-- end message-data -->
                                <div class="message">
                                    ${wishContent.value}
                                </div> <!-- end message -->
                            </li>`
            // Abis pencet kirim ilangin valuenya di form
            wishFrom.value = ""
            wishContent.value = ""
        }


        // Ngehapus icon new message pada wish jika berada di bawah
        // document.querySelector('.chatbox').addEventListener("scroll", evt => {
        //     console.log(evt.target.scrollTop)
        //     console.log( document.querySelector('.chatbox').scrollHeight)
        //     if(evt.target.scrollTop == wishRoom.scrollHeight) {
        //         console.log("mentok")
        //     }
        // })
        function scrollToBottom() {
            document.querySelector('.chatbox').scrollTo(0, document.querySelector('.chatbox').scrollHeight);
        }
        
    </script>
</body>

</html>