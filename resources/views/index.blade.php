@extends('layouts.app', ['title' => 'Home'])

@section('container')
    {{-- jumbotron --}}
    <div class="container-fluid" id="home">
        <div class="row justify-content-center align-items-center pb-5">
            <div class="col-md-6">
                <div class="jumbotron py-3">
                    <h1 class="display-5 text-main font-couriernew">Hallo,</h1>
                    <h1 class="display-4 text-main fw-bold font-poppins">I'm <div class="hero">Zinedine Ziddan
                            Fahdlevy</div>
                    </h1>
                    <p class="display-6 font-garamond text-main2">Web Programmer</p>
                    <a class="cta" href="index.html">
                        <span>Download Resume</span>
                        <svg width="15px" height="10px" viewBox="0 0 13 10">
                            <path d="M1,5 L11,5"></path>
                            <polyline points="8 1 12 5 8 9"></polyline>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-md-5">
                <img src="img/udin.png" alt="gambar zinedine" class="img-fluid" width="500px" data-aos="zoom-in">
            </div>
        </div>
    </div>
    {{-- akhir jumbotron --}}

    {{-- main --}}

    {{-- about me --}}
    <section class="bg-main pt-5" style="border-radius: 50px 50px 0px 0px;" id="aboutme">
        <div class="container-fluid pt-5">
            <div class="row justify-content-center align-items-center pb-5">
                <div class="col-md-5">
                    <iframe data-aos="zoom-in"
                        src="https://my.atlistmaps.com/map/2880df8f-667b-4e9d-87bb-9121c0d5d4c7?share=true"
                        allow="geolocation" width="100%" height="350px" frameborder="0" scrolling="no"
                        allowfullscreen></iframe>
                </div>
                <div class="col-md-6">
                    <div class="card bg-transparent border-0">
                        <div class="card-body text-white">
                            <h3 class="card-title fw-bold font-poppins mb-4">About <span class="text-main2">Me</span>
                            </h3>
                            <h6 class="card-subtitle mb-2 text-light font-poppins2 fw-bold ">Hallo, Saya Zinedine
                                Ziddan
                                Fahdlevy.
                                Seorang pelajar
                                dari SMK Negeri 26 Jakarta.</h6>
                            <p class="card-text font-poppins2">
                                Saya orang yang dapat
                                bertanggung jawab, pekerja keras,
                                dapat
                                bekerja
                                sama dan disiplin dalam mengerjakan segala hal. Saya sangat tertarik dengan dunia Web
                                Programming dan Android Engineer</p>
                            <div class="row justify-content-start align-items-center">
                                <h5 class="card-title fw-bold text-white font-poppins2 mb-3">My Hobby</h5>
                                <div class="col-md-3">
                                    <div class="card-main mb-3 text-center p-3" data-bs-toggle='tooltip'
                                        data-bs-placement="top" title="Berenang">
                                        <i class="fas fa-swimmer icon text-white"></i>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card-main mb-3 text-center p-3" data-bs-toggle='tooltip'
                                        data-bs-placement="top" title="Mendengarkan Musik">
                                        <i class="fas fa-headphones-alt icon text-white"></i>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card-main mb-3 text-center p-3" data-bs-toggle='tooltip'
                                        data-bs-placement="top" title="Futsal">
                                        <i class="fas fa-futbol icon text-white"></i>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card-main mb-3 text-center p-3" data-bs-toggle='tooltip'
                                        data-bs-placement="top" title="Bernyanyi">
                                        <i class="fas fa-microphone icon text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
    {{-- akhir about me --}}


    {{-- skills --}}
    <section id="skills" class="pb-5">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#166974" fill-opacity="1"
                d="M0,288L48,256C96,224,192,160,288,117.3C384,75,480,53,576,64C672,75,768,117,864,128C960,139,1056,117,1152,112C1248,107,1344,117,1392,122.7L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
            </path>
        </svg>
        <h3 class="fw-bold font-poppins my-5 text-center text-main"><span class="text-main2">Main</span>
            Qualification</h3>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <h4 class="font-main6 mb-4 fw-bold text-main">Programming<i
                            class="fas fa-laptop-code ms-2 text-main2"></i>
                    </h4>
                    {{-- kualifikasi utama --}}
                    <div class="label" data-aos="fade-up">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-couriernew fw-bold">Bootstrap</h6>
                            <h6 class="fst-italic font-couriernew">90%</h6>
                        </div>
                        <div class="progress" style="height: 3px;">
                            <div class="progress-bar bg-main2 progress-bar-striped progress-bar-animated" role="progressbar"
                                style="width: 23%;" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress mt-2 mb-2" style="height: 15px;">
                            <div class="progress-bar bg-main2 progress-bar-striped progress-bar-animated" role="progressbar"
                                style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="label" data-aos="fade-up">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-couriernew fw-bold">PHP</h6>
                            <h6 class="fst-italic font-couriernew">90%</h6>
                        </div>
                        <div class="progress" style="height: 3px;">
                            <div class="progress-bar bg-main2 progress-bar-striped progress-bar-animated" role="progressbar"
                                style="width: 9%;" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress mt-2 mb-2" style="height: 15px;">
                            <div class="progress-bar bg-main2 progress-bar-striped progress-bar-animated" role="progressbar"
                                style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="label" data-aos="fade-up">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-couriernew fw-bold">Visual Studio Code</h6>
                            <h6 class="fst-italic font-couriernew">85%</h6>
                        </div>
                        <div class="progress" style="height: 3px;">
                            <div class="progress-bar bg-main2 progress-bar-striped progress-bar-animated" role="progressbar"
                                style="width: 43%;" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress mt-2 mb-2" style="height: 15px;">
                            <div class="progress-bar bg-main2 progress-bar-striped progress-bar-animated" role="progressbar"
                                style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="label" data-aos="fade-up">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-couriernew fw-bold">Laravel</h6>
                            <h6 class="fst-italic font-couriernew">85%</h6>
                        </div>
                        <div class="progress" style="height: 3px;">
                            <div class="progress-bar bg-main2 progress-bar-striped progress-bar-animated" role="progressbar"
                                style="width: 18%;" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress mt-2 mb-2" style="height: 15px;">
                            <div class="progress-bar bg-main2 progress-bar-striped progress-bar-animated" role="progressbar"
                                style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="label" data-aos="fade-up">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-couriernew fw-bold">HTML & CSS</h6>
                            <h6 class="fst-italic font-couriernew">80%</h6>
                        </div>
                        <div class="progress" style="height: 3px;">
                            <div class="progress-bar bg-main2 progress-bar-striped progress-bar-animated" role="progressbar"
                                style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress mt-2 mb-2" style="height: 15px;">
                            <div class="progress-bar bg-main2 progress-bar-striped progress-bar-animated" role="progressbar"
                                style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="label" data-aos="fade-up">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-couriernew fw-bold">Node JS</h6>
                            <h6 class="fst-italic font-couriernew">80%</h6>
                        </div>
                        <div class="progress" style="height: 3px;">
                            <div class="progress-bar bg-main2 progress-bar-striped progress-bar-animated" role="progressbar"
                                style="width: 19%;" aria-valuenow="19" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress mt-2 mb-2" style="height: 15px;">
                            <div class="progress-bar bg-main2 progress-bar-striped progress-bar-animated" role="progressbar"
                                style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="label" data-aos="fade-up">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-couriernew fw-bold">Javascript</h6>
                            <h6 class="fst-italic font-couriernew">75%</h6>
                        </div>
                        <div class="progress" style="height: 3px;">
                            <div class="progress-bar bg-main2 progress-bar-striped progress-bar-animated" role="progressbar"
                                style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="25"></div>
                        </div>
                        <div class="progress mt-2 mb-2" style="height: 15px;">
                            <div class="progress-bar bg-main2 progress-bar-striped progress-bar-animated" role="progressbar"
                                style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="label" data-aos="fade-up">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-couriernew fw-bold">Python</h6>
                            <h6 class="fst-italic font-couriernew">75%</h6>
                        </div>
                        <div class="progress" style="height: 3px;">
                            <div class="progress-bar bg-main2 progress-bar-striped progress-bar-animated"
                                role="progressbar" style="width: 18%;" aria-valuenow="18" aria-valuemin="0"
                                aria-valuemax="18"></div>
                        </div>
                        <div class="progress mt-2 mb-2" style="height: 15px;">
                            <div class="progress-bar bg-main2 progress-bar-striped progress-bar-animated"
                                role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="label" data-aos="fade-up">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-couriernew fw-bold">MYSQL</h6>
                            <h6 class="fst-italic font-couriernew">65%</h6>
                        </div>
                        <div class="progress" style="height: 3px;">
                            <div class="progress-bar bg-main2 progress-bar-striped progress-bar-animated"
                                role="progressbar" style="width: 13%;" aria-valuenow="13" aria-valuemin="0"
                                aria-valuemax="13"></div>
                        </div>
                        <div class="progress mt-2 mb-2" style="height: 15px;">
                            <div class="progress-bar bg-main2 progress-bar-striped progress-bar-animated"
                                role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    {{-- akhir kualifikasi utama --}}
                </div>
                <div class="col-md-4">
                    <h4 class="font-main6 mb-4 fw-bold text-main">Another Skills</h4>

                    <button class="learn-more mb-2" data-bs-toggle="collapse" data-bs-target="#collapsevideo">
                        <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                        </span>
                        <span class="button-text">See More</span>
                    </button>

                    {{-- kualifikasi utama --}}
                    <div class="label" data-aos="fade-up">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-couriernew fw-bold">Editing Video</h6>
                            <h6 class="fst-italic font-couriernew">75%</h6>
                        </div>
                        <div class="progress" style="height: 3px;">
                            <div class="progress-bar bg-main4 progress-bar-striped progress-bar-animated"
                                role="progressbar" style="width: 32%;" aria-valuenow="32" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                        <div class="progress mt-2 mb-2" style="height: 15px;">
                            <div class="progress-bar bg-main4 progress-bar-striped progress-bar-animated"
                                role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0"
                                aria-valuemax="100">
                            </div>
                        </div>
                        <div class="collapse mb-3" id="collapsevideo">
                            <blockquote class="blockquote mb-0 border-end border-start border-bottom rounded p-2">
                                <p><small class="fw-bold font-garamond text-main">Software</small></p>
                                <footer class="blockquote-footer"><small class="font-couriernew">Adobe Premier Pro,
                                        Wondershare Filmora 9,
                                        Videoscribe</small>
                                </footer>
                            </blockquote>
                        </div>
                    </div>

                    <div class="label" data-aos="fade-up">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-couriernew fw-bold">Microsoft Office</h6>
                            <h6 class="fst-italic font-couriernew">70%</h6>
                        </div>
                        <div class="progress" style="height: 3px;">
                            <div class="progress-bar bg-main4 progress-bar-striped progress-bar-animated"
                                role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                        <div class="progress mt-2 mb-2" style="height: 15px;">
                            <div class="progress-bar bg-main4 progress-bar-striped progress-bar-animated"
                                role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0"
                                aria-valuemax="100">
                            </div>
                        </div>
                        <div class="collapse mb-3" id="collapsevideo">
                            <blockquote class="blockquote mb-0 border-end border-start border-bottom rounded p-2">
                                <p><small class="fw-bold font-garamond text-main">Software</small></p>
                                <footer class="blockquote-footer"><small class="font-couriernew">Microsoft Word, Microsoft
                                        Excell, Microsoft PowerPoint</small>
                                </footer>
                            </blockquote>
                        </div>
                    </div>

                    <div class="label" data-aos="fade-up">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-couriernew fw-bold">Graphic Design</h6>
                            <h6 class="fst-italic font-couriernew">85%</h6>
                        </div>
                        <div class="progress" style="height: 3px;">
                            <div class="progress-bar bg-main4 progress-bar-striped progress-bar-animated"
                                role="progressbar" style="width: 35%;" aria-valuenow="35%" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                        <div class="progress mt-2 mb-2" style="height: 15px;">
                            <div class="progress-bar bg-main4 progress-bar-striped progress-bar-animated"
                                role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0"
                                aria-valuemax="100">
                            </div>
                        </div>
                        <div class="collapse mb-3" id="collapsevideo">
                            <blockquote class="blockquote mb-0 border-end border-start border-bottom rounded p-2">
                                <p><small class="fw-bold font-garamond text-main">Software</small></p>
                                <footer class="blockquote-footer"><small class="font-couriernew">Corel Draw, Photoshop,
                                        Canva.com, Adobe Ilustrator, Figma.com</small>
                                </footer>
                            </blockquote>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row justify-content-center text-center g-0 mt-5">
            <div class="col-1">
                <i class="fab i-jello atas fa-laravel text-danger display-3 text-center"></i>
            </div>
            <div class="col-1">
                <i class="fab i-jello bawah fa-bootstrap text-primary display-3 text-center"></i>
            </div>
            <div class="col-1">
                <i style="color: rgb(219, 148, 15);" class="fab i-jello atas fa-html5 display-3 text-center"></i>
            </div>
            <div class="col-1">
                <i class="fab i-jello bawah text-primary fa-css3-alt display-3 text-center"></i>
            </div>
            <div class="col-1">
                <i class="fab i-jello atas  text-success fa-node-js display-3 text-center"></i>
            </div>
            <div class="col-1">
                <i class="fab i-jello bawah text-info fa-python display-3 text-center"></i>
            </div>
            <div class="col-1">
                <i class="fab i-jello atas  text-warning fa-js-square display-3 text-center"></i>
            </div>
            <div class="col-1">
                <i style="color: #166974;" class="fab i-jello bawah fa-php display-3 text-center"></i>
            </div>
        </div>
    </section>
    {{-- akhir skills --}}


    {{-- my projek --}}
    <div class="custom-shape-divider-bottom-1643243682">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M1200 0L0 0 892.25 114.72 1200 0z" class="shape-fill"></path>
        </svg>
    </div>
    <section id="myprojects" class="pb-5 bg-main">
        <div class="row justify-content-center container-fluid mb-4">
            <div class="col-md-11">
                <h3 class="fw-bold font-poppins my-5 text-center text-white"><span class="text-main2">My</span>
                    Projects</h3>
                <div id="datascience" class="border-rd mb-5">
                    <h5 class="font-poppins mb-4 fw-bold text-white"><span class="text-main2">Kamp Kreatif SMK
                            Indonesia </span>- Data Science
                    </h5>
                    <p class="text-white font-poppins2">Saya mengikuti kegiatan KKSI pada bidang Data Science pada tahun
                        2021. Saya dan tim menganalisis data prestasi sekolah, untuk mengetahui kualitas dari sekolah,
                        dengan adanya analisis ini kami mengharapkan sekolah dapat memberikan perhatian, pembelajaran, serta
                        fasilitas untuk meningkatkan prestasi dari jurusan tersebut. Saya dan tim juga menyelesaikan
                        kompetisi Time Series dari Kaggle.com mengenai Sales Forecasting.</p>
                    <p class="text-white font-poppins2">Saya disini bertugas untuk membuat Insight dengan menggunakan
                        bahasa pemrograman Python dibantu dengan beberapa library seperti Matplotlib, Pandas, Seaborn.
                        Berikut Insight dan link Animation Explainer :</p>
                    <a href="#ytdatascience" data-bs-toggle="modal"
                        class="btn btn-light font-poppins px-4 py-1 border-rd mb-3">Embed
                        Youtube</a>
                    <a href="https://youtu.be/oumyNbu9qlU" target="_blank"
                        class="btn btn-outline-light font-poppins px-4 py-1 border-rd mb-3">Link Youtube <i
                            class="fab fa-youtube"></i></a>

                    <div class="modal fade" id="ytdatascience" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="card card-body bg-transparent">
                                        <iframe width="100%" height="500"
                                            src="https://www.youtube-nocookie.com/embed/oumyNbu9qlU"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary border-rd"
                                        data-bs-dismiss="modal">Keluar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-4 mb-3">
                            <figure class="c4-izmir c4-gradient-top-left c4-border-center c4-image-zoom-in">
                                <img width="50" src="img/datascience/alasan-siswa-tidak-mengikuti-lomba.jpeg"
                                    alt="alasan siswa tidak mengikuti lomba">
                                <figcaption>
                                    <h6>Insight alasan siswa tidak mengikuti lomba</h6>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4 mb-3">
                            <figure class="c4-izmir c4-gradient-top-left c4-border-center c4-image-zoom-in">
                                <img width="50" src="img/datascience/data-lomba-setiap-jurusan.jpeg"
                                    alt="data lomba setiap jurusan">
                                <figcaption>
                                    <h6>Insight data lomba setiap jurusan</h6>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4 mb-3">
                            <figure class="c4-izmir c4-gradient-top-left c4-border-center c4-image-zoom-in">
                                <img width="50" src="img/datascience/data-prestasi-masing-masing-jurusan.jpeg"
                                    alt="data prestasi dari masing masing jurusan">
                                <figcaption>
                                    <h6>Insight data prestasi dari masing masing jurusan</h6>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4 mb-3">
                            <figure class="c4-izmir c4-gradient-top-left c4-border-center c4-image-zoom-in">
                                <img width="50" src="img/datascience/prestasi-smkn-26-setiap-tahun.jpeg"
                                    alt="prestasi SMK Negeri 26 Jakarta">
                                <figcaption>
                                    <h6>Insight prestasi SMK Negeri 26 Jakarta</h6>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4 mb-3">
                            <figure class="c4-izmir c4-gradient-top-left c4-border-center c4-image-zoom-in">
                                <img width="50" src="img/datascience/data-pendukung.png" alt="data pendukung alasan siswa">
                                <figcaption>
                                    <h6>Insight data pendukung alasan siswa</h6>
                                </figcaption>
                            </figure>
                        </div>

                    </div>
                </div>
                <div id="smartschool" class="border-rd mb-5">
                    <h5 class="font-poppins mb-4 fw-bold text-white"><span class="text-main2">Kamp Kreatif SMK
                            Indonesia </span>- Smartschool / Digital School
                    </h5>
                    <p class="text-white font-poppins2">Saya mengikuti kegiatan KKSI pada bidang Smartschool pada tahun
                        2021. Saya dan tim membangun sebuah aplikasi berbasis Web E-Learning untuk memudahkan proses belajar
                        mengajar yang bernama <span class="text-main2">SINAU</span>. Aplikasi ini terdapat 3 pintu
                        utama yaitu <span class="text-main2">Perpustakaan Online</span>, <span
                            class="text-main2">E-School</span>, dan <span class="text-main2">Pusat
                            Informasi</span>. Pada aplikasi ini Guru dan Siswa dapat berinteraksi jarak jauh, seperti dapat
                        Membuat Kelas, Memberikan Absen, Memberikan Tugas, Membuat Pertemuan kepada Siswa Siswinya.
                    </p>
                    <p class="text-white font-poppins2">Saya disini bertugas menjadi seorang Fullstack Developer. Saya
                        mengimplementasikan tampilan grafis yang diberikan oleh UI Designer sekaligus menghubungkannya
                        dengan Database yang sudah didefinisikan oleh Database Administrator. Saya menggunakan framework
                        Bootstrap 5 sebagai Front-End dan Laravel 8 sebagai Back-End Berikut gambaran dari
                        Aplikasi dan Link Demo Aplikasi :</p>
                    <a href="#ytsmartschool" data-bs-toggle="modal"
                        class="btn btn-light font-poppins px-4 py-1 border-rd mb-3">Embed
                        Youtube</a>
                    <a href="https://youtu.be/HnLDkPxYVeE" target="_blank"
                        class="btn btn-outline-light font-poppins px-4 py-1 border-rd mb-3">Link Youtube <i
                            class="fab fa-youtube"></i></a>
                    <a href="https://drive.google.com/drive/folders/1SOyJJQ_DzXD8PdHcMdi2Jk9_KQjKPjKo" target="_blank"
                        class="btn btn-outline-light font-poppins px-4 py-1 border-rd mb-3">Download
                        Aplikasi <i class="fas fa-download"></i></a>

                    <div class="modal fade" id="ytsmartschool" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="card card-body bg-transparent">
                                        <iframe width="100%" height="500"
                                            src="https://www.youtube-nocookie.com/embed/HnLDkPxYVeE"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary border-rd"
                                        data-bs-dismiss="modal">Keluar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-4 mb-3">
                            <figure class="c4-izmir c4-gradient-top-left c4-border-center c4-image-zoom-in">
                                <img width="50" src="img/smartschool/halaman-daftarbuku.png"
                                    alt="halaman daftar semua buku">
                                <figcaption class="c4-layout-top-left">
                                    <h4>Halaman daftar semua buku</h4>
                                    <h6>Halaman ini berisi daftar buku buku yang sudah diuploadkan</h6>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4 mb-3">
                            <figure class="c4-izmir c4-gradient-top-left c4-border-center c4-image-zoom-in">
                                <img width="50" src="img/smartschool/halaman-forum.png" alt="halaman utama forum">
                                <figcaption>
                                    <h4>Halaman utama forum</h4>
                                    <h6>Halaman utama forum</h6>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4 mb-3">
                            <figure class="c4-izmir c4-gradient-top-left c4-border-center c4-image-zoom-in">
                                <img width="50" src="img/smartschool/halaman-login.png"
                                    alt="data prestasi dari masing masing jurusan">
                                <figcaption>
                                    <h4></h4>
                                    <h6>data prestasi dari masing masing jurusan</h6>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4 mb-3">
                            <figure class="c4-izmir c4-gradient-top-left c4-border-center c4-image-zoom-in">
                                <img width="50" src="img/smartschool/halaman-pusatinformasi.png"
                                    alt="prestasi SMK Negeri 26 Jakarta">
                                <figcaption>
                                    <h4></h4>
                                    <h6>prestasi SMK Negeri 26 Jakarta</h6>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4 mb-3">
                            <figure class="c4-izmir c4-gradient-top-left c4-border-center c4-image-zoom-in">
                                <img width="50" src="img/smartschool/halaman-utama-eschool.png"
                                    alt="data pendukung alasan siswa">
                                <figcaption>
                                    <h4></h4>
                                    <h6>data pendukung alasan siswa</h6>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4 mb-3">
                            <figure class="c4-izmir c4-gradient-top-left c4-border-center c4-image-zoom-in">
                                <img width="50" src="img/smartschool/halaman-utama-perpustakaan.png"
                                    alt="data pendukung alasan siswa">
                                <figcaption>
                                    <h4></h4>
                                    <h6>data pendukung alasan siswa</h6>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4 mb-3">
                            <figure class="c4-izmir c4-gradient-top-left c4-border-center c4-image-zoom-in">
                                <img width="50" src="img/smartschool/pintu-eschool.png" alt="data pendukung alasan siswa">
                                <figcaption>
                                    <h4></h4>
                                    <h6>data pendukung alasan siswa</h6>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4 mb-3">
                            <figure class="c4-izmir c4-gradient-top-left c4-border-center c4-image-zoom-in">
                                <img width="50" src="img/smartschool/portal.png" alt="data pendukung alasan siswa">
                                <figcaption>
                                    <h4></h4>
                                    <h6>data pendukung alasan siswa</h6>
                                </figcaption>
                            </figure>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="custom-shape-divider-top-1643243888">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
        </svg>
    </div>
    {{-- akhir my projek --}}
@endsection
