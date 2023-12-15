<?php include("config.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile</title>
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


</head>
<body>
    <header class="header">
        <img src="download-removebg-preview.png" alt="" class="icon">
        <a href="#" class="logo">Semen 3 Roda</a>

        <nav class="navbar">
            <a href="#Home" class="active">Home</a>
            <a href="#About">About</a>
            <a href="#Produk">Produk</a>
            <a href="#Feedback">Feedback</a>
            <a href="#Comment">Comment</a>
        </nav>

        <div class="bx bx-moon" id="darkmode-icon"></div>

        <div class="bx bx-menu" id="menu-icon"></div>
    </header>
    <section class="home" id="Home">
        <div class="home-content">
            <h3>Welcome</h3>
            <h1>Selamat Melihat produk kami</h1>
            <p>"Inovasi Kuat, Fondasi Kekuatan. Kami adalah Pabrik Semen yang Membangun Masa Depan."</p>
        </div>

    <div class="profession-container">
        <div class="profession-box">
            <div class="profession" style="--i:0">
                <h3>Semen PPC</h3>
            </div>
            <div class="profession" style="--i:1">
                <h3>Semen OPC Jenis ll</h3>
            </div>
            <div class="profession" style="--i:2">
                <h3>Semen OPC Jenis V</h3>
            </div>
            <div class="profession" style="--i:3">
                <h3>Semen OWC</h3>
            </div>
            <div class="circle"></div>
        </div>
        <div class="overlay"></div>
    </div>

    <div class="home-img">
        <img src="mentahan pabrik.png" alt="">
    </div>
    </section>

    <!-- about section design -->
    <section class="about" id="About">
        <div class="about-img">
            <img src="pngwing.com.png" alt="">
        </div>

        <div class="about-content" style="text-align: justify;">
            <h2 class="heading"><span>About</span></h2>
            <h3>Membangun Masa Depan yang Kokoh Bersama Kami</h3>
            <p>Selamat datang di Pabrik Semen kami, tempat di mana fondasi kokoh dan masa depan yang berkelanjutan mulai dibangun. 
                Sebagai pelopor di industri ini, kami berkomitmen untuk menyediakan produk semen berkualitas 
                tinggi yang menjadi landasan setiap proyek konstruksi.</p>
        </div>
    </section>

    <!--produk section design -->
    <section class="produk" id="Produk">
        <h2 class="heading">OUR <span>Produk</span></h2>

        <div class="produk-container">
            <div class="produk-box">
                <img src="ppc.png" alt="">
                <h3>Semen PPC</h3>
                <p>PCC digunakan dalam konstruksi beton umum yang mengutamakan durabilitas atau 
                    ketahanan terhadap berbagai kondisi lingkungan.</p>
            </div>
                <div class="produk-box">
                    <img src="OPC JENIS ll.png" alt="">
                    <h3>Semen OPC Jenis ll</h3>
                    <p>Semen Portland Jenis II adalah jenis semen yang cocok digunakan dalam berbagai aplikasi
                        daya tahan yang baik terhadap kadar sulfat sedang.</p>
                </div>
                <div class="produk-box">
                    <img src="OPC jenis V.png" alt="">
                    <h3>Semen OPC Jenis V</h3>
                    <p>Semen Portland Jenis V merupakan jenis semen yang sesuai untuk berbagai macam aplikasi beton di mana diperlukan daya tahan yang baik</p>
                </div>
                <div class="produk-box">
                    <img src="OWC.png" alt="">
                    <h3>Semen OWC</h3>
                    <p>Semen Sumur Minyak (Oil Well Cement) adalah jenis semen yang digunakan sebagai penyekat dalam proses pengeboran sumur minyak. </p>
                </div>
                <div class="produk-box">
                    <img src="slag-cement.png" alt="">
                    <h3>Slag Cement</h3>
                    <p>Duracem merupakan jenis semen Portland yang menggunakan slag dari industri baja sebagai salah satu bahan bakunya. 
                        Duracem mengedepankan sustainability dan memiliki daya tahan yang luar biasa, sehingga sangat cocok digunakan dalam 
                        proyek-proyek dermaga, bendungan, dan konstruksi massa</p>

                </div>
                <div class="produk-box">
                    <img src="beton.png" alt="">
                    <h3>Beton</h3>
                    <p>Beton siap-pakai atau Ready Mix Cement (RMC) adalah beton segar siap pakai yang diproduksi di batching plant dengan kualitas tertentu sesuai spesifikasi yang diinginkan oleh konsumen. 
                        Ready Mix diproduksi dengan mencampur semen dengan bahan campuran yang tepat (pasir dan batu) serta air dan kemudian dikirimkan</p>
                </div>
        </div>
    </section>

        <!--section feddback-->
        <section class="Feedback" id="Feedback">
            <h2 class="heading">Feedback <span>Our!</span></h2>

            <form action="insert_feedback.php" method="POST">
                <div class="input-box">
                    <input type="text" name="username" placeholder="Full Name">
                    <input type="email" name="email" placeholder="Your Email">
                </div>
                <textarea name="pesan" id="" cols="30" rows="10" placeholder="Your Message"></textarea> 
                <input type="submit" name="submit" class="button-63">
            </form>
        </section>
    
        <!-- section coment -->
        <section id="Comment">
            <div class="kotak1">
                <p class="text1">Coment Feedback</p>
            </div>
            <div class="kotak2">
                <?php
                    $sql = "SELECT * FROM feedback";
                    $query = mysqli_query($db, $sql);
                    while($message = mysqli_fetch_array($query)){
                        echo "<div class='kotak3'>";
                        echo "<p class='text2' id='message'>".$message['username']." |<span>".$message['tanggal']."<span><p>";
                        echo "<p class='text3' id='message'>".$message['email']."<p>";
                        echo "<p class='text4' id='message'>".$message['pesan']."<p>";
                        echo "</div>";
                    } 
                ?>
            </div>
        </section>


        <!-- scroll reveal-->
        <script src="https://unpkg.com/scrollreveal"></script>


    <!-- custom js -->
    <script src="scrip.js"></script>
    <script>
        // Fungsi untuk mensensor kata-kata kasar
 function sensorKataKasar(teks) {
    // Daftar kata-kata kasar yang ingin di-sensor
    var kataKasar = ["ancuk","ancok","ajig","anjay","anjg","anjing","anying","anjir","asu","asyu","babangus","babi","bacol","bacot","bagong","bajingan","balegug","banci","bangke","bangsat","bedebah","bedegong","bego","belegug","beloon","bencong","bloon","blo'on","bodoh","boloho","buduk","budug","celeng","cibai","cibay","cocot","cocote","cok","cokil","colai","colay","coli","colmek","conge","congean","congek","congor","cuk","cukima","cukimai","cukimay","dancok","entot","entotan","ewe","ewean","gelo","genjik","germo","gigolo","goblo","goblog","goblok","hencet","henceut","heunceut","homo","idiot","itil","jancuk","jancok","jablay","jalang","jembut","jiancok","jilmek","jurig","kacung","kampang","kampret","kampungan","kehed","kenthu","kentot","kentu","keparat","kimak","kintil","kirik","kunyuk","kurap","konti","kontol","kopet","koplok","lacur","lebok","lonte","maho","meki","memek","monyet","ndas","ndasmu","ngehe","ngentot","nggateli","nyepong","ngewe","ngocok","pante","pantek","patek","pathek","peju","pejuh","pecun","pecundang","pelacur","pelakor","peler","pepek","puki","pukima","pukimae","pukimak","pukimay","sampah","sepong","sial","sialan","silit","sinting","sontoloyo","tai","taik","tempek","tempik","tete","tetek","tiembokne","titit","toket","tolol","ublag","udik","wingkeng"];
    
    // Loop melalui setiap kata-kata kasar dan ganti dengan karakter '*'
    for (var i = 0; i < kataKasar.length; i++) {
        var regex = new RegExp(kataKasar[i], "gi");
        teks = teks.replace(regex, '****');
    }
    
    return teks;
}

// Jalankan fungsi sensor setelah halaman dimuat
document.addEventListener("DOMContentLoaded", function () {
    var messages = document.querySelectorAll('#message');
    messages.forEach(function (message) {
        // Dapatkan teks pesan
        var teksPesan = message.innerHTML;
        
        // Sensor kata-kata kasar
        var teksSensor = sensorKataKasar(teksPesan);

        // Terapkan teks yang sudah disensor ke dalam elemen
        message.innerHTML = teksSensor;
    });
});
    </script>
</body>

</html>