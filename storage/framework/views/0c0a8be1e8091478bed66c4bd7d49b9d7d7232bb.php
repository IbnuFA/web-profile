<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
    <header>
        <div class="judul">
            <h1>My Profile</h1>
            <span id="nyapauser" class="halo">Nyapa</span>
            
        </div>
        
        <nav>
            <ul>       
                <li><a href="#aboutme">About Me</a></li>
                <li><a href="#interest">Interest</a></li>
                <li><a href="#contactme">Contact Me</a></li>
            </ul>
       </nav>
    </header>

    <aside id="aboutme"class="contact">
        <figure>
            <h2 class="subjudul">Siapa Saya?</h2>
            <img src="asset/img/profileku.jpg" alt="profile" class="gambar profile">
            <p>
                Halo! Nama saya Ibnu Fauzan Afiifudin. Saya berumur 21 tahun dan 
                sekarang sedang menempuh pendidikan di Universitas Negeri Surabaya
                dijurusan Teknik Informatika.
            </p>
            <br>
            <p>
                Tujuan saya saat ini adalah untuk mencari skill sebanyak-banyaknya 
                dan saya mempunyai impian kecil yaitu membuat game saya sendiri dari 0.
            </p>
        </figure>
        
        <figure>
            <h2 id="contactme" class="subjudul">You Can Found Me on</h2>
            <a href="https://www.facebook.com/ibnu.fauzan.92" target="_blank">
                <img src="asset/img/facebook.png" alt="facebook" class="gambar">
            </a>

            <a href="https://github.com/IbnuFA" target="_blank">
                <img src="asset/img/github-logo.png" alt="github" class="gambar">
            </a>

            <a href="https://www.instagram.com/ibnu_fauzan_343/?hl=id" target="_blank">
                <img src="asset/img/instagram.png" alt="instagram" class="gambar"> 
            </a>

            <a href="https://www.dicoding.com/users/769267" target="_blank">
                <img src="asset/img/dicoding.png" alt="dicoding" class="gambar">
            </a>
        </figure>           
    </aside>

    <main>
       <div class="content">
           <article>
                <section id="interest" class="isi">
                    <h2 class="subjudul">Saya tertarik dengan desain UI/UX</h2>
                    <img src="asset/img/ui-ux.jpg" alt="ui" class="gambar isigambar floatleft">
                    <p>
                        Saya tertarik dengan desain UI/UX. Bukan itu saja,
                        saya juga tertarik dengan hal-hal yang berhubungan dengan desain
                        seperti desain karakter dan desain level di game.
                    </p> 
                    <p>
                        Motivasi saya dalam mendalami desain yaitu
                        saya ingin melatih imajinasi dan kreativitas saya
                        dan membuat desain yang unik dan berbeda dengan lainnya.
                    </p>
                </section>

                <section class="isi">
                    <h2 class="subjudul">Membuat Game!</h2>
                    <img src="asset/img/make-game.png" alt="Game" class="gambar isigambar floatright">
                    <p>
                        Saat ini saya dan kelompok saya sedang membuat game
                        yang berjudul Lara Tales yang dibuat dengan menggunkan
                        Unity.
                    </p> 
                    <p>
                        Pembuatan game ini digunakan untuk memenuhi tugas
                        mata kuliah Pengembangan Aplikasi Permainan.
                    </p>
                </section>
    
                <section class="isi">
                    <h2 class="subjudul">Storywriter dan Desain Level</h2>
                    <img src="asset/img/make-level.png" alt="Game" class="gambar isigambar floatleft">
                    <p>
                        Dalam pembuatan game Lara Tales, saya mendapatkan
                        bagian membuat alur cerita game yang bertema fantasy
                        dan juga bagian desain level.
                    </p> 
                    <p>
                        Untuk bagian desain level, saya bertanggung jawab
                        dalam desain level cave dan juga level terakhir yang
                        digunakan sebagai arena melawan last boss.
                    </p>
                </section>

           </article>
       </div>
    </main>
    
    <footer class="copyright">
        <p>
            2020 &copy; Ibnu Fauzan Affifudin
        </p>
    </footer>

    <script src="asset/javascript/about_me.js"></script>

</body>
</html><?php /**PATH C:\xampp\htdocs\web-profile\resources\views/welcome.blade.php ENDPATH**/ ?>