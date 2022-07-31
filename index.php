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
        header("Location: index.php?konfirmasi=berhasil&#data-kehadiran");
    } else {
        header("Location: index.php?konfirmasi=gagal");
    }
}

// Jika tombol wish ditekan
if (isset($_POST['kirim'])) {
    $nama_tamu = $_POST['nama_tamu'];
    $harapan = $_POST['harapan'];

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

    $query_insert_wish = mysqli_query($koneksi, "INSERT INTO tbl_harapan(nama_tamu, harapan, waktu) VALUES ('$nama_tamu', '$harapan', '$date_time')");
    if ($query_insert_wish) {
        empty($nama_tamu);
        empty($harapan);
        header("Location: index.php?sent_wish=berhasil&#ucapan-doa");
    } else {
        header("Location: index.php?sent_wish=gagal");
    }
}
?>

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

    <main>

    <div id="ucapan-doa" class="opening-wrapper overflow-x-hidden">
    <div id="content">
            <div class="landing-page">
               <div class="landpage-caption text-center pt-3 overflow-x-hidden" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1300">
               <br><br><br><br>  <p class="text-secondary text font-italic">The Wedding of </p>
                    <p class="font-alexBrush m-0 text-size-xl" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="1800">Zakiah</p>
                    <h1 class="font-alexBrush m-0">&</h1>
                    <p class="font-alexBrush m-0 text-size-xl" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="1800">Ganda</p>
                </div> <!-- end landpage-caption -->
              
            </div> <!-- end landing-page -->

                <div class="hadith col-md-8">
                    <p data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="800">"Bismillahhirrahmanirrahim"</p>
                    <p data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="800">
                        Tanpa mengurangi rasa hormat,
                        kami mengundang Bapak/Ibu dan Saudara/i 
                        untuk menghadiri acara pernikahan kami
                    </p>
                    
                </div> <!-- end hadith -->
                <p data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="800">
  <center>  
  <a href="homepage.php" class="btn btn-brown mr-2 slide" i class="fas fa-location-arrow mr-2"></i> Buka Undangan </a>
            <br> <br> <br>
                <div class="container d-flex justify-content-between">
                      
                   
</div>       </div> <!-- end #content -->

       </main>
       <footer><br>
        <span>&copy; Built with &#10084;  by Zakiah Citrayasa - 2022 </span>
        <div class="social-media">
            <a href="mailto:zakiah.putri@gmail.com" target="_blank"><i class="fas fa-envelope"></i></a>
            <a href="https://www.instagram.com/zakiahputrir/" target="_blank"><i class="fab fa-instagram"></i></a>
           </div> <!-- end social-media -->
                            </footer> 
    <script src="./js/jquery-3.5.1.js"></script>
    <script src="./js/lightbox-plus-jquery.min.js"></script>
    <script src="./js/countdown.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        const music = document.querySelector('#music');
        const playButton = document.querySelector('#playButton');
        const pauseButton = document.querySelector('#pauseButton');
        const hadir = document.querySelector('#hadir')
        const wishRoom = document.querySelector('#wish-room')
        const wishFrom = document.querySelector('#wish-from')
        const wishContent = document.querySelector('#wish-content')

        function playAudio() {
            music.play();
            playButton.classList.add('d-none')
            pauseButton.classList.remove('d-none')
        }

        function pauseAudio() {
            music.pause();
            pauseButton.classList.add('d-none')
            playButton.classList.remove('d-none')
        }

        function checkKonfirmasi() {
            if (hadir.selected == true) {
                $('#konfirmasiSesi').attr('disabled', false);
            } else {
                $('#konfirmasiSesi').attr('disabled', true);
            }
        }

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