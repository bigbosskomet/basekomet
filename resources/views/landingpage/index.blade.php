<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keyword" content="komet, uin, malang, olimpiade, webinar, nasional">
    <title>KOMET UIN Malang</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('komet/img/komet-uin-malang.png') }}">
    <!-- Bootstrap CSS links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/1c256bdeea.js" crossorigin="anonymous"></script>
    <!-- CSS link -->
    <link rel="stylesheet" href="{{ asset ('komet/css/style.css')}}">
</head>
<body>

    <!-- Header START -->
    <header class="fixed-top">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a href="{{ asset ('komet/index.html')}}" class="navbar-brand">
                    <img src="{{asset('komet/img/komet-oval-putih.png')}}">
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars text-light fs-1"></i>
                </button>
                <div id="navbar" class="navbar-collapse collapse justify-content-center text-center">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a href="#home" class="nav-link link-light">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#about" class="nav-link link-light">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#event" class="nav-link link-light">Event</a>
                        </li>
                        <li class="nav-item">
                            <a href="#timeline" class="nav-link link-light">Timeline</a>
                        </li>
                        <li class="nav-item">
                            <a href="#gallery" class="nav-link link-light">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" class="nav-link link-light">Contact</a>
                        </li>
                    </ul>
                    <a id="login" href="{{route('login')}}" class="btn btn-outline-light py-2 px-4">Login</a>
                </div>
            </div>
        </nav>
    </header>
    <!-- Header END -->

    <!-- Main START -->
    <main>
        <!-- Section HOME START -->
        <section id="home">
            <div class="cover hmj-cover">
                <div class="container text-center">
                    <h1 class="display-2 fw-bold">HMJ "Integral" Matematika</h1>
                    <p class="fs-2">Universitas Islam Negeri Maulana Malik Ibrahim Malang</p><br>
                    <p class="present fs-1">Proudly Present</p>
                </div>
            </div>
            <div class="cover komet-cover">
                <div class="container text-center text-light">
                    <h1 class="display-2">KOMET UIN MALANG XXI</h1>
                    <p class="fs-4 fw-bold">“Enjoy The Glory of Number to Be the Greatest Mathematics Generation”</p><br>
                    <a href="" class="btn btn-light fw-bold text-danger py-2 px-3 fs-5 shadow">Daftar</a><br><br>
                </div>
            </div>
        </section>
        <!-- Section HOME END -->
        <!-- Section ABOUT START -->
        <section id="about">
            <div class="container">
                <div class="row pt-4">
                    <div class="col-sm-12 col-lg-6">
                        <img class="w-100" src="{{ asset ('komet/img/figure1.png')}}" alt="figure1">
                    </div>
                    <article class="col-lg py-5">
                        <h2 class="lh-base fw-bold text-center text-lg-start">About Us</h2>
                        <p><strong>Kompetisi Matematika</strong> atau disingkat KOMET merupakan suatu event perlombaan berskala  nasional yang diadakan oleh Himpunan Mahasiswa Jurusan (HMJ) “Integral” Matematika Universitas Islam Negeri Maulana Malik Ibrahim Malang.</p>
                        <p>Kompetisi ini diikuti oleh pelajar SMA/SMK/MA/MAK sederajat yang dikemas dengan serangkaian lomba yang akan mengasah pengetahuan siswa seputar matematika. Adapun untuk perlombaan yang ada dalam kompetisi ini yakni Olimpiade Matematika.</p>
                        <p>KOMET bertujuan untuk mengenalkan Program Studi Matematika UIN Maulana Malik Ibrahim Malang kepada pelajar SMA/SMK/MA/MAK sederajat dalam skala nasional.</p>
                    </article>
                </div>
            </div>
        </section>
        <!-- section ABOUT END -->
        <!-- Section EVENT START -->
        <section id="event">
            <div class="container">
                <h2 class="text-center lh-base fw-bold mb-4">Our Event</h2>
                <div class="row px-lg-5 justify-content-center">
                    <div class="olimpiade col-lg-5 pt-lg-5 mt-5 py-4">
                        <div class="card shadow p-4 rounded-0">
                            <img class="figure align-self-center" src="{{asset('komet/img/f-sample.png')}}" alt="sample">
                            <h3 class="text-center lh-base fw-bold">Olimpiade Matematika</h3>
                            <p class="text-center">Merupakan event perlombaan yang mengasah pengetahuan seputar Matematika melalui soal-soal Olimpiade berskala nasional yang diikuti oleh pelajar SMA/MA/SMK/sederajat se-Indonesia.</p>
                            <div class="row justify-content-center">
                                <div class="col-lg-5 m-0 mb-2 mb-lg-0 text-center">
                                    <a href="" class="btn btn-danger w-100 fw-bold">Guidebook</a>
                                </div>
                                <div class="col text-center">
                                    <a href="" class="btn btn-danger w-100 px-3 fw-bold">Bank Soal Latihan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="webinar col-lg-5 pb-4 mt-5 pt-5">
                        <div class="card shadow p-4 rounded-0">
                            <img class="figure align-self-center" src="{{asset('komet/img/f-sample.png')}}" alt="sample">
                            <h3 class="text-center lh-base fw-bold">Webinar Pendidikan</h3>
                            <p class="text-center">Merupakan serangkaian acara yang bertujuan untuk memberikan informasi, pengetahuan dan wawasan untuk tetap melangkah kedepan dalam menghadapi era yang saat ini dalam tahap perkembangan.</p>
                            <a href="" class="btn btn-danger w-100 fw-bold">Kunjungi halaman webinar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section EVENT END -->
        <!-- Section TIMELINE START -->
        <section id="timeline">
            <div class="container p-lg-5">
                <h2 class="text-center lh-base fw-bold pt-2 mt-4 mb-2">
                    Timeline
                </h2>
                <div class="row">
                    <div class="col-lg-4 py-4">
                        <div class="olimpiade-btn bg-red shadow">
                            <h3 class="lh-base px-3 py-2 fw-bold">Timeline<br>Olimpiade Matematika</h3>
                        </div>
                        <div class="webinar-btn bg-whitesmoke shadow">
                            <h3 class="lh-base px-3 py-2 fw-bold">Timeline<br>Webinar Pendidikan</h3>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <table class="olimpiade table">
                            <tr>
                                <td class="px-0">
                                    <p class="text-red fw-bold">
                                        <i class="fas fa-calendar-alt"></i>&nbsp;
                                        04 November 2021 - 23 November 2021
                                    </p>
                                </td>
                                <td class="pe-0">
                                    <p class="fw-bold">Pendaftaran Gelombang 1</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-0">
                                    <p class="text-red fw-bold">
                                        <i class="fas fa-calendar-alt"></i>&nbsp;
                                        24 November 2021 - 24 Desember 2021
                                    </p>
                                </td>
                                <td class="pe-0">
                                    <p class="fw-bold">Pendaftaran Gelombang 2</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-0">
                                    <p class="text-red fw-bold">
                                        <i class="fas fa-calendar-alt"></i>&nbsp;
                                        25 Desember 2021 - 28 Januari 2022
                                    </p>
                                </td>
                                <td class="pe-0">
                                    <p class="fw-bold">Pendaftaran Gelombang 3</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-0">
                                    <p class="text-red fw-bold">
                                        <i class="fas fa-calendar-alt"></i>&nbsp;
                                        05 Februari 2022
                                    </p>
                                </td>
                                <td class="pe-0">
                                    <p class="fw-bold">Babak Penyisihan</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-0">
                                    <p class="text-red fw-bold">
                                        <i class="fas fa-calendar-alt"></i>&nbsp;
                                        12 Februari 2022
                                    </p>
                                </td>
                                <td class="pe-0">
                                    <p class="fw-bold">Babak Semifinal & Final</p>
                                </td>
                            </tr>
                        </table>
                        <table class="webinar table d-none">
                            <tr>
                                <td class="px-0">
                                    <p class="text-red fw-bold">
                                        <i class="fas fa-calendar-alt"></i>&nbsp;
                                        04 November 2021 - 23 November 2021
                                    </p>
                                </td>
                                <td class="pe-0">
                                    <p class="fw-bold">Pendaftaran Gelombang 1</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-0">
                                    <p class="text-red fw-bold">
                                        <i class="fas fa-calendar-alt"></i>&nbsp;
                                        04 November 2021 - 23 November 2021
                                    </p>
                                </td>
                                <td class="pe-0">
                                    <p class="fw-bold">Pendaftaran Gelombang 2</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-0">
                                    <p class="text-red fw-bold">
                                        <i class="fas fa-calendar-alt"></i>&nbsp;
                                        04 November 2021 - 23 November 2021
                                    </p>
                                </td>
                                <td class="pe-0">
                                    <p class="fw-bold">Pendaftaran Gelombang 3</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-0">
                                    <p class="text-red fw-bold">
                                        <i class="fas fa-calendar-alt"></i>&nbsp;
                                        04 November 2021 - 23 November 2021
                                    </p>
                                </td>
                                <td class="pe-0">
                                    <p class="fw-bold">Pendaftaran Gelombang 1</p>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section TIMELINE END -->
        <!-- Section GALLERY START -->
        <section id="gallery">
            <div class="container mt-2 pt-3">
                <h2 class="text-center fw-bold  lh-base">Gallery</h2>
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                    </div>
                    <div class="carousel-inner gallery">
                      <div class="carousel-item active">
                        <img src="{{asset('komet/img/1.jpeg')}}" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('komet/img/2.jpeg')}}" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('komet/img/3.jpeg')}}" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('komet/img/4.jpeg')}}" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('komet/img/5.jpeg')}}" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('komet/img/6.jpeg')}}" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
        </section>
        <!-- Section GALLERY END -->
        <!-- Section SPONSOR START -->
        <section id="sponsor" class="">
            <h2 class="lh-base text-center fw-bold">Sponsored by :</h2>
            <div class="container mt-4">
                <div class="row justify-content-center">
                    <div class="col-2 col-lg-1">
                        <img src="{{asset('komet/img/komet-uin-malang.png')}}" alt="">
                    </div>
                    <div class="col-2 col-lg-1">
                        <img src="{{asset('komet/img/komet-uin-malang.png')}}" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- Section SPONSOR END -->
        <!-- Section QNA START -->
        <section id="qna">
            <div class="container">
                <h2 class="text-center lh-base fw-bold mb-4">Question and Answer :</h2>
                <div class="accordion accordion-flush" id="kometAccordionFlush">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Apa itu KOMET? 
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#kometAccordionFlush">
                            <div class="accordion-body">
                                KOMET atau kepanjangan dari Kompetisi Matematika merupakan event tahunan yang diselenggarakan oleh HMJ "Integral" Matematika UIN Maulana Malik Ibrahim Malang sebagai ajang kompetisi yang ditujukan kepada pelajar SMA/SMK/MA/MAK sederajat serta memperkenalkan program studi Matematika UIN Maulana Malik Ibrahim Malang kepada Khalayak umum.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Apa Manfaat Mengikuti KOMET? 
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#kometAccordionFlush">
                            <div class="accordion-body">
                                Manfaat mengikuti KOMET antara lain :
                                <ol>
                                    <li>Menambah pengetahuan mengenai ilmu matematika</li>
                                    <li>Meningkatkan minat peserta dalam menguasai dan mendalami bidang ilmu matematika dan penerapannya dalam kehidupan.</li>
                                    <li>Meningkatkan pemahaman konsep matematis dan menerapkannya dalam kehidupan sehari-hari.</li>
                                    <li>Menciptakan pola pikir yang aktif, rasionalis, sistematis, dan matematis.</li>
                                    <li>Menumbuhkan jiwa sportivitas dan semangat dalam berkompetisi.</li>
                                    <li>Menambah pengalaman berkompetisi dan relasi dari pelajar seluruh Indonesia.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Dimana KOMET dilaksanakan?  
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#kometAccordionFlush">
                            <div class="accordion-body">
                                KOMET dilaksanakan secara online untuk seluruh wilayah Indonesia
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                Bagaimana Cara Untuk Mendaftar KOMET?   
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#kometAccordionFlush">
                            <div class="accordion-body">
                                Untuk cara pendaftaran KOMET XXI dapat dilihat melalui GUIDEBOOK KOMET XXI 2022
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                Bagaimana Cara Untuk Mendapatkan Informasi Seputar KOMET?
                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#kometAccordionFlush">
                            <div class="accordion-body">
                                Informasi lengkap seputar KOMET bisa didapatkan melalui sosial media berikut :
                                <ul>
                                    <li>Website : <a href="index.html">kometuinmalang.com</a></li>
                                    <li>Instagram : <a href="https://instagram.com/kometuinmaliki">@kometuinmaliki</a></li>
                                    <li>Email : <a href="mailto:kometuinmalang@gmail.com">kometuinmalang@gmail.com</a></li>
                                    <li>Whatsapp : <a href="wa.me/6281211244921">0812-1124-4921 (Fadil)</a> & <a href="wa.me/6282131576045"> 0821-3157-6045 (Diva)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section QNA END -->
    </main>
    <!-- Main END -->
    
    <!-- Footer START -->
    <footer class="bg-red">
        <!-- Section CONTACT START -->
        <section id="contact">
            <div class="container">
                <div class="logos">
                    <img src="{{asset('komet/img/uin-malang.png')}}" alt="UIN Maulana Malik Ibrahim Malang" height="50px">
                    <img src="{{asset('komet/img/hmj-integral.png')}}" alt="HMJ Integral Matematika UIN Malang" height="50px">
                    <img src="{{asset('komet/img/komet-uin-malang.png')}}" alt="KOMET UIN Malang" height="50px">
                </div>
                <div class="row mt-4 text-center text-lg-start">
                    <div class="col-sm-12 col-lg-6">
                        <h3 class="lh-base fw-bold">Address</h3>
                        <address>
                            <a href="" class="text-light text-decoration-none">Himpunan Mahasiswa Jurusan (HMJ) “Integral” Matematika, Gedung Student Center Lt.1, Universitas Islam Negeri Maulana Malik Ibrahim Malang, Jl. Gajayana No. 50, Dinoyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65144</a>
                        </address>
                    </div>
                    <div class="col-sm-12 col-lg-3">
                        <h3 class="lh-base fw-bold">Contact</h3>
                        <a href="https://wa.me/6281211244921" class="text-light text-decoration-none" target="_blank">
                            <i class="fab fa-whatsapp fs-5"></i>&nbsp;
                            Fadil (081211244921)
                        </a><br>
                        <a href="https://wa.me/6282131576045" class="text-light text-decoration-none" target="_blank">
                            <i class="fab fa-whatsapp fs-5"></i>&nbsp;
                            Diva (082131576045)
                        </a>
                    </div>
                    <div class="col-sm-12 col-lg-3 mt-3 mt-lg-0">
                        <h3 class="lh-base fw-bold">Social links</h3>
                        <a href="https://instagram.com/kometuinmaliki" class="text-light text-decoration-none" target="_blank">
                            <i class="fab fa-instagram fs-5"></i>&nbsp;
                            @kometuinmaliki
                        </a><br>
                        <a href="mailto:kometuinmalang@gmail.com" class="text-light text-decoration-none" target="_blank">
                            <i class="fas fa-envelope fs-5"></i>&nbsp;
                            kometuinmalang@gmail.com
                        </a>
                    </div>
                </div><hr>
            </div>
        </section>
        <section id="copyright" class="text-center pb-4">
            <p class="mb-0">
                &copy; Copyright IT KOMET XXI 2021. All Rights Reserved
            </p>
            <p class="mb-0">
                Made with <i class="fas fa-heart"></i> by IT TEAM KOMET XXI.
            </p>
        </section>
        <!-- Section CONTACT END -->
    </footer>
    <!-- Footer END -->

    <!--Bootstrap JavaScript links -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- JavaScript links -->
    <script src="{{ asset('komet/js/main.js') }}"></script>
</body>
</html>