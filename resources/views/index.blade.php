@extends('layouts.app', ['title' => 'Home'])

@section('container')
    {{-- jumbotron --}}
    <div class="container-fluid" id="home">
        <div class="row justify-content-center align-items-center">
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
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#166974" fill-opacity="1"
            d="M0,96L48,122.7C96,149,192,203,288,224C384,245,480,235,576,208C672,181,768,139,864,117.3C960,96,1056,96,1152,112C1248,128,1344,160,1392,176L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>
    <section class="bg-main" id="aboutme">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
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

    <section id="projects" class="pb-5">

    </section>
@endsection
