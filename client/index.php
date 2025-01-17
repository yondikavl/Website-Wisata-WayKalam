<?php include "navbar.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./bg/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="style.css">

    <!-- BOOTSRAP -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- FONT -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <title>Way Kalam | Beranda</title>

</head>

<body style="font-family: 'Plus Jakarta Sans', sans-serif;">
    <header>
        <div id="latar" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#latar" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#latar" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#latar" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#latar" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#latar" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                    <img src="bg/gambarCard1.png" class="d-block w-100" alt="bg1" style="background-size: cover; background-repeat: no-repeat;">
                    <h1 id="judul" style="font-family: 'Big Shoulders Display', sans-serif; font-weight: 900;">AIR TERJUN <br> WAY KALAM</h1>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="bg/gambarCard2.png" class="d-block w-100" alt="bg2" style="background-size: cover; background-repeat: no-repeat;">
                    <h1 id="judul" style="font-family: 'Big Shoulders Display', sans-serif; font-weight: 900;">AIR TERJUN <br> ANAKAN</h1>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="bg/gambarCard3.png" class="d-block w-100" alt="bg3" style="background-size: cover; background-repeat: no-repeat;">
                    <h1 id="judul" style="font-family: 'Big Shoulders Display', sans-serif; font-weight: 900;">CAMPING <br> GROUND</h1>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="bg/gambarCard4.png" class="d-block w-100" alt="bg4" style="background-size: cover; background-repeat: no-repeat;">
                    <h1 id="judul" style="font-family: 'Big Shoulders Display', sans-serif; font-weight: 900;">MASUK KEDALAM 300 <br> DESA WISATA TERBAIK <br> DI INDONESIA</h1>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="bg/gambarCard5.png" class="d-block w-100" alt="bg" style="background-size: cover; background-repeat: no-repeat;" 5>
                    <h1 id="judul" style="font-family: 'Big Shoulders Display', sans-serif; font-weight: 900;">AIR TERJUN <br> ANAKAN</h1>
                </div>
            </div>

            <div class="text-header">
                <p>
                    Desa Wisata Way Kalam adalah salah satu dari sekian banyak desa wisata yang berkembang di wilayah
                    Kabupaten Lampung Selatan. Berlokasi di kawasan lereng gunung Rajabasa (salah satu gunung yang
                    terkenal di Kabupaten Lampung Selatan).
                </p>
            </div>
        </div>
    </header>

    <!-- About us -->
    <section id="section1">
        <table class="table1">
            <td class="td1">
                <p>WAY KALAM</p>
            </td>
            <td class="td2">
                <p class="fw-light">Desa Way Kalam merupakan sebuah desa wisata yang terletak di lereng gunung Rajabasa kabupaten Lampung Selatan. Hampir semua wisata yang ada di desa Way Kalam berhubungan dengan alam. Di Desa Wisata Way Kalam kamu diajak untuk merasakan experience yang memacu adrenalin dan menambah pengetahuan. Air terjun dan taman edukatif "Lebah Kelanceng" merupakan sarana yang tepat. Tak jarang wisatawan asing memilih Desa Way Kalam sebagai destinasi wisata mereka..... </p>
                <a type="button" class="nav-link btn btn-primary p-2" href="#" style="background: var(--pu2, #00A693); color:white;">Lihat Selengkapnya <img src="../client/bg/penunjukIcon.svg" alt=""> </a>
            </td>
        </table>
        <table class="table2 d-flex justify-content-center align-items-center py-5">
            <tr class="d-flex align-items-center gap-5 mt-5">
                <td class="d-flex align-items-center">
                    <iframe width="100%" height="100%" src="https://drive.google.com/file/d/1AVUQN7lWLPwGtA1c-EjdJjRkD_9u4etG/preview" class="rounded-5" allowfullscreen allow='autoplay'></iframe>
                </td>
                <td id="visitor" class="text-white d-flex flex-column justify-content-center align-items-center rounded-5" style="background-color: #132758; background-image: url(./bg/visit.png); background-repeat: no-repeat; background-size: cover; min-width: 457px; min-height: 457px;">
                    <div class="d-flex justify-content-center flex-column align-items-center">
                        <p style="font-size: 64px; font-family: 'Big Shoulders Display', sans-serif; font-weight: 900; background: var(--p2, linear-gradient(137deg, #fff 24.22%, #7cdbf0 105.58%)); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">2000+</p>
                        <p style="font-size: 20px;">Pengunjung Air Terjun</p>
                     </div>
                    <div class="d-flex justify-content-center flex-column align-items-center">
                        <p style="font-size: 64px; font-family: 'Big Shoulders Display', sans-serif; font-weight: 900; background: var(--p2, linear-gradient(137deg, #fff 24.22%, #7cdbf0 105.58%)); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">22+</p>
                        <p style="font-size: 20px;">Homestay</p>
                    </div>
                </td>
            </tr>
        </table>
    </section>

    <!-- section 2 -->
    <section id="section2">
        <div class="wisata" id="wisata">
            <div class="ex1">
                <p class="teks-wisata">Wisata</p>
                <p class="teks-explore">EXPLORE THE VILLAGE AND PRECISION BEHIND OUR HEALING AND ENJOY</p>
            </div>
            <div class="ex2">
                <p class="teks-desc">Sudah saatnya kamu melihat keindahan Desa Wisata Way Kalam. Bawa dirimu dan masuk ke pesona alam lebih dalam.</p>
                <a type="button" class="nav-link btn btn-primary p-2" href="#" style="background: var(--pu2, #00A693); color:white;">
                Lihat Selengkapnya<img src="../client/bg/penunjukIcon.svg" alt="" style="margin-left: 10px;"> </a> 
            </div>
        </div>

        <div class="cardboard">
            <!-- Card 1 -->
            <div class="card1 active" id = "wisata1">
                <div class="teksWisata2">
                    <h5 class="card-title font-plusJakarta">Air Terjun Way Kalam</h5>
                    <p class="card-text font-plusJakarta">Desa Wisata Way Kalam adalah salah satu dari sekian banyak desa wisata yang berkembang di wilayah Kabupaten Lampung Selatan.  Berlokasi di kawasan lereng gunung Rajabasa.</p>
                    <a href="#" class="btn buttonColor font-plusJakarta">Lihat Selengkapnya </a>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="card1" id = "wisata2">
                <div class="teksWisata2">
                    <h5 class="card-title font-plusJakarta">Air Terjun Anakan Way Kalam</h5>
                    <p class="card-text font-plusJakarta">Desa Wisata Way Kalam adalah salah satu dari sekian banyak desa wisata yang berkembang di wilayah Kabupaten Lampung Selatan.  Berlokasi di kawasan lereng gunung Rajabasa.</p>
                    <a href="#" class="btn buttonColor font-plusJakarta">Lihat Selengkapnya </a>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="card1" id = "wisata3">
                <div class="teksWisata2">
                    <h5 class="card-title font-plusJakarta">Camping Ground Air Terjun Way Kalam</h5>
                    <p class="card-text font-plusJakarta">Desa Wisata Way Kalam adalah salah satu dari sekian banyak desa wisata yang berkembang di wilayah Kabupaten Lampung Selatan.  Berlokasi di kawasan lereng gunung Rajabasa.</p>
                    <a href="#" class="btn buttonColor font-plusJakarta">Lihat Selengkapnya </a>
                </div>
            </div>
        </div>

        <div class="umkm d-flex" id="umkm">
            <div class="direction">
                <div>
                    <p class="teks-produk">PRODUK UKM DESA</p>
                    <p class="teks-dukungUMKM">YUK, LIAT PRODUK <br> UMKM DESA WAY <br>KALAM!</p>
                </div>
                <div>
                <a type="button" class="nav-link btn btn-primary p-2" href="#" style="background: var(--pu2, #00A693); color:white;">
                Lihat Selengkapnya<img src="../client/bg/penunjukIcon.svg" alt="" style="margin-left: 10px;"> </a> 
                </div>
                
            </div>
            <ul class="cardumkm">
                <div class="card2" id="satu">
                    <p>KOPI WAY KALAM</p>
                </div>
                <div class="card2" id="dua">
                    <p>ANEKA CAMILAN PISANG</p>
                </div>
                <div class="card2" id="tiga">
                    <p>PRODUKSI MADU KELULUT</p>
                </div>
                <div class="card2" id="tiga">
                    <p>PRODUKSI MADU KELULUT</p>
                </div>
            </ul>
        </div> 
    </section>

    <section id="section3">
        <div class="layer1">
            <div class="banner" style="position:relative">
                <img src="../client/bg/piagam1.jpeg" alt="contoh gambar" style="z-index: 2;">
                <img src="../client/bg/back2.png" alt="piagam 1" style="position: absolute; top: -100px; left: -80px;z-index: 1;"/>
                <img src="../client/bg/back2_1.png" alt="piagam 1" style="position: absolute; top: 287px; left: 370px;z-index: 3;">
            </div>
            <div class="explain">
                <p class="main-heading">PENGHARGAAN</p>
                <p class="sub-heading">ANUGERAH DESA WISATA INDONESIA 2023</p>
                <p class="explain-text">Desa Wisata Way Kalam tak ada henti hentinya mencetak prestasi di tingkat nasional. Kali ini, Way Kalam dipilih oleh Kemenparekraf sebagai Anugerah Desa Wisata Indonesia 2023 dengan tema Desa Sebagai Simbol Kebangkitan Nasional.</p>
            </div>
        </div>

        <div class="layer2">
            <div class="explain">
                <p class="main-heading">PENGHARGAAN</p>
                <p class="sub-heading">300 Besar Anugerah Desa Wisata Indonesia 2022</p>
                <p class="explain-text">Desa Way Kalam merupakan satu dari 300 besar Anugerah Desa Wisata Indonesia Tahun 2022. Tidak hanya tahun 2022, pada tahun 2021 Desa Way Kalam juga menerima penghargaan yang sama sebagai desa wisata yang berkualitas.</p>
            </div>
            <div class="banner" style="position: relative;">
                <img src="../client/bg/piagam2.jpeg" alt="piagam 2" style="z-index: 2;"/>
                <img src="../client/bg/back.png" alt="piagam 2" style="position:absolute; top: -140px; left: 0;z-index: 1;"/>
            </div>
        </div>

    </section>
    <section class="added">
        <div class="moreopt" style="background-color: #132758; background-image: url(./bg/moreopt.png); background-size: cover; background-repeat: no-repeat;">
            <div class="exp3">
                <p class="teks-penghargaan">LIHAT PENGHARGAAN DESA WAY KALAM LEBIH BANYAK</p>
            </div>
            <div class="exp4">
                <p class="teks-moreopt">Desa Wisata Way Kalam adalah salah satu dari sekian banyak desa wisata yang berkembang di wilayah Kabupaten</p>
                <a type="button" class="nav-link btn btn-primary p-2" href="#" style="background: var(--pu2, #00A693); color:white; display: flex; padding: 15px 20px;justify-content: center;align-items: center;gap: 10px;">Lihat Selengkapnya<img src="../client/bg/penunjukIcon.svg" alt=""></a>
            </div>
        </div>
    </section>

    <!-- Section 4 (Testimonial) -->
    <section id="section4">
        <div class="judultest" align="center">
            <p class="text-testimonial">TESTIMONIAL</p>
            <p class="text-katamereka">AYO, BACA PENGALAMAN DAN CERITA SERU MEREKA</p>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="cardTestimoni custom-card">
                        <div class="card">
                            <div class="card-header" style="background-color: #fff;">
                                <div class="card-profile">
                                    <img src="../client/bg/MoeraRamadhan.jpeg" class="card-img-top" alt="">
                                </div>
                                <div class="profile-info">
                                    <p>Wiwin Andayani</p>
                                    <span class = "">Mahasiswa</span>
                                    <span><i class="fa-solid fa-star" style="color: #D3E564;"></i><i class="fa-solid fa-star" style="color: #D3E564;"></i><i class="fa-solid fa-star" style="color: #D3E564;"></i><i class="fa-solid fa-star" style="color: #D3E564;"></i></span>
                                    <!-- rating star -->
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Akses jalannya udah bagus, fasilitas juga lumayan, tempat parkir luas dan aman...yg bawa motor bisa parkir on the spot dan yg bawa mobil bisa parkir didepan bayar 15K masuk air terjun per orang bayar 7K, ada ojek juga bayarnya sukarela...harus siap stamina kalo mau keair terjun ini tapi bagus banget...beli duren dan pete juga murah</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" style="background-color: #fff;">
                                <div class="card-profile">
                                    <img src="../client/bg/MiftahulPutri.jpeg" class="card-img-top" alt="">
                                </div>
                                <div class="profile-info">
                                    <p>Sinta Desna</p>
                                    <span class = "">Mahasiswa</span>
                                    <span><i class="fa-solid fa-star" style="color: #D3E564;"></i><i class="fa-solid fa-star" style="color: #D3E564;"></i><i class="fa-solid fa-star" style="color: #D3E564;"></i><i class="fa-solid fa-star" style="color: #D3E564;"></i><i class="fa-solid fa-star" style="color: #D3E564;"></i></span>
                                    <!-- rating star -->
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Bagusss banget tempatnyaaa!<br>Dan masih asri banget hutannya ❤️ akses nya juga gampang banget buat dicari, the best pokoknya mah</p>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="carousel-item">
                    <div class="cardTestimoni custom-card">
                        <div class="card">
                            <div class="card-header" style="background-color: #fff;">
                                <div class="card-profile">
                                    <img src="../client/bg/MoeraRamadhan.jpeg" class="card-img-top" alt="">
                                </div>
                                <div class="profile-info">
                                    <p>Abdurahman James</p>
                                    <span class = "">Mahasiswa</span>
                                    <span><i class="fa-solid fa-star" style="color: #D3E564;"></i><i class="fa-solid fa-star" style="color: #D3E564;"></i><i class="fa-solid fa-star" style="color: #D3E564;"></i><i class="fa-solid fa-star" style="color: #D3E564;"></i></span>
                                    <!-- rating star -->
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Aku cinta way kalam, karena di way kalam aku bisa healing. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit quos aspernatur ducimus necessitatibus debitis dolores quidem quo alias! Esse a dolore quasi rerum error, optio commodi dicta non suscipit quis?</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" style="background-color: #fff;">
                                <div class="card-profile">
                                    <img src="../client/bg/MiftahulPutri.jpeg" class="card-img-top" alt="">
                                </div>
                                <div class="profile-info">
                                    <p>Yeet Toby</p>
                                    <span class = "">Mahasiswa</span>
                                    <span><i class="fa-solid fa-star" style="color: #D3E564;"></i><i class="fa-solid fa-star" style="color: #D3E564;"></i><i class="fa-solid fa-star" style="color: #D3E564;"></i><i class="fa-solid fa-star" style="color: #D3E564;"></i><i class="fa-solid fa-star" style="color: #D3E564;"></i></span>
                                    <!-- rating star -->
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos repellat necessitatibus quasi dolorem tempore illum mollitia saepe neque soluta impedit pariatur culpa libero omnis quisquam quibusdam accusamus ratione, nostrum modi?</p>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="carousel-item">
                    <div class="cardTestimoni custom-card">
                            <div class="card">
                                <div class="card-header" style="background-color: #fff;">
                                    <div class="card-profile">
                                        <img src="../client/bg/MoeraRamadhan.jpeg" class="card-img-top" alt="">
                                    </div>
                                    <div class="profile-info">
                                        <p>Husni Loki</p>
                                        <span class = "">Mahasiswa</span>
                                        <span><i class="fa-solid fa-star" style="color: #D3E564;"></i><i class="fa-solid fa-star" style="color: #D3E564;"></i><i class="fa-solid fa-star" style="color: #D3E564;"></i><i class="fa-solid fa-star" style="color: #D3E564;"></i></span>
                                        <!-- rating star -->
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto quos dignissimos voluptas id dolorum consequuntur labore ullam vitae adipisci, dolor placeat nemo harum quibusdam nam aperiam velit! Atque, quo molestiae.</p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" style="background-color: #fff;">
                                    <div class="card-profile">
                                        <img src="../client/bg/MiftahulPutri.jpeg" class="card-img-top" alt="">
                                    </div>
                                    <div class="profile-info">
                                        <p>Yanto Man</p>
                                        <span class = "">Mahasiswa</span>
                                        <span><i class="fa-solid fa-star" style="color: #D3E564;"></i><i class="fa-solid fa-star" style="color: #D3E564;"></i><i class="fa-solid fa-star" style="color: #D3E564;"></i><i class="fa-solid fa-star" style="color: #D3E564;"></i><i class="fa-solid fa-star" style="color: #D3E564;"></i></span>
                                        <!-- rating star -->
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Bagusss banget tempatnyaaa!Dan masih asri banget hutannya ❤️ akses nya juga gampang banget buat dicari, the best pokoknya mah</p>
                                </div>
                            </div>
                    </div> 
                </div>
            </div>
        </div>
        
    </section>

    <!--  Section 5 (Reminder Map Interaktif) -->
    <section id="section5" class="archive">
        <div id="inner-section5">
            <div align="center" class="teks-map">
                <p class=fs-2 style="color: #FFF;"> MAP INTERAKTIF</p>
                <p> TAKUT NYASAR? TEMUKAN <br>PETANYA DISINI</p>
            </div>
            <div class="button-map">
                <a type="button" class="nav-link" href="./mapInteraktif.php">Map Interaktif <i class="fa-solid fa-map" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </section>

    <footer>
        <div class="banner" id="contact">
            <div class="container">
                <div class="contact-us">
                    <h4 style="font-size: 24px;font-style: normal;font-weight: 900;line-height: normal;">CONTACT US</h4>
                    <p class="kunjungi-dan-rasakan">MASIH RAGU DAN MEMILIKI<br>BANYAK PERTANYAAN?</p>
                </div>
            </div>

            <div class="contact-info">
                <p>Way Kalam, Kec. Penengahan, Kabupaten Lampung Selatan, Lampung 35592</p>
                <p>083773473484</p>
                <!-- icon ig, icon facebook, icon website -->
                <div class="icons" style="padding-top: 10px;">
                    <li><img src="../client/bg/instagram.svg" alt=""></li>
                    <li> <img src="../client/bg/facebook.svg" alt=""></li>
                    <li> <img src="../client/bg/globe.svg" alt=""></li>
                </div>
            </div>
        </div>
        
        <hr>
        <div>
            <div class="down">
                <div class="connect">
                    <div class="reserved">
                        <p>&copy; 2023 CONNECTH US ALL RIGHT RESERVED</p>
                    </div>
                </div>

                <div class="menuItems">
                    <li><a href='#' data-item='Home'>Home</a></li>
                    <li><a href='#' data-item='Wisata'>Wisata</a></li>
                    <li><a href='#' data-item='UMKM'>UMKM</a></li>
                    <li><a href='#' data-item='Contact Us'>Contact Us</a></li>
                    <li><a href='#' data-item='Testimonial'>Testimonial</a></li>
                </div>
            </div>
        </div>
    </footer>
    <script>
        activeslideimg();
        function activeslideimg(activeSlide = 0){
            const slides = document.querySelectorAll(".card1");

            slides[activeSlide].classList.add("active");

            for(const slide of slides){
                slide.addEventListener("click", () => {
                    clearActiveClasses();

                    slide.classList.add("active");
                });
            }

            function clearActiveClasses(){
                slides.forEach((slide) => {
                    slide.classList.remove("active");
                })
            }
        }
    </script>
    <!-- script untuk card umkm -->
    <script>
        const slider = document.querySelector('.cardumkm');
        let isDown = false;
        let startX;
        let scrollLeft;

        slider.addEventListener('mousedown', e => {
        isDown = true;
        slider.classList.add('active');
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
        });
        slider.addEventListener('mouseleave', _ => {
        isDown = false;
        slider.classList.remove('active');
        });
        slider.addEventListener('mouseup', _ => {
        isDown = false;
        slider.classList.remove('active');
        });
        slider.addEventListener('mousemove', e => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const SCROLL_SPEED = 3;
        const walk = (x - startX) * SCROLL_SPEED;
        slider.scrollLeft = scrollLeft - walk;
        });
    </script>
</body>

</html>