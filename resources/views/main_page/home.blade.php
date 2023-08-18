<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Scarwash</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{asset('creative')}}/assets/favicon.ico" />
    <!-- Bootstrap Icons-->
    <link href="{{asset('creative')}}/https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="{{asset('creative')}}/https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="{{asset('creative')}}/https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="{{asset('creative')}}/https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('creative')}}/css/styles.css" rel="stylesheet" />
    <!-- w3 schools -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-0" id="mainNav">
        <div class="container px-0 px-lg-0">
            <a class="navbar-brand" href="{{asset('home')}}"><img src="scarwash/LOGO SCARWASH.png" width="100"></img></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#location">Location</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('blog.index')}}">Articles</a></li>
                    <li class="nav-item nav-item-admin"><a class="nav-link" href="{{route('admin')}}"><img src="../assets/img/login.png" width="25px"></img></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">BUAT SEPATU DAN TAS ANDA BARU KEMBALI</h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5">Dengan Metode Perawatan Yang Menjadikan Kami Cuci Sepatu No.1 Di Surabaya</p>
                    <a class="btn btn-primary btn-xl" href="#services">Find Out More</a>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <!-- <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">We've got what you need!</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">Start Bootstrap has everything you need to get your new website up and running in no time! Choose one of our open source, free to download, and easy to use themes! No strings attached!</p>
                        <a class="btn btn-light btn-xl" href="#services">Get Started!</a>
                    </div>
                </div>
            </div>
        </section> -->
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">Our Services</h2>
            <hr class="divider" />
            <div class="container-services">
                <!-- services carousel -->
                <div>
                    <div class="content">
                        <h2>Fast Cleaning</h2>
                        <!-- <span>testing 123</span> -->
                    </div>
                </div>
                <div>
                    <div class="content">
                        <h2>Shoes Repair</h2>
                        <!-- <span>CEO Expert</span> -->
                    </div>
                </div>
                <div>
                    <div class="content">
                        <h2>Unyellowing</h2>
                        <!-- <span>Web Designer</span> -->
                    </div>
                </div>
                <div>
                    <div class="content">
                        <h2>Repaint</h2>
                        <!-- <span>Marketing Coordinator</span> -->
                    </div>
                </div>
                <div>
                    <div class="content">
                        <h2>Deep Cleaning</h2>
                        <!-- <span>Marketing Coordinator</span> -->
                    </div>
                </div>
                <div>
                    <div class="content">
                        <h2>Leather Care</h2>
                        <!-- <span>Marketing Coordinator</span> -->
                    </div>
                </div>
                <div>
                    <div class="content">
                        <h2>Helmet Cleaning</h2>
                        <!-- <span>Marketing Coordinator</span> -->
                    </div>
                </div>
                <div>
                    <div class="content">
                        <h2>Cap Cleaning</h2>
                        <!-- <span>Marketing Coordinator</span> -->
                    </div>
                </div>
                <div>
                    <div class="content">
                        <h2>Bag Care</h2>
                        <!-- <span>Marketing Coordinator</span> -->
                    </div>
                </div>
                <div>
                    <div class="content">
                        <h2>Gloves Cleaning</h2>
                        <!-- <span>Marketing Coordinator</span> -->
                    </div>
                </div>
            </div>
    </section>
    <!-- Portfolio-->
    <!-- <div id="portfolio">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{route('blog.index')}}" title="Project Name">
                        <img class="img-fluid" src="{{asset('creative')}}/assets/img/portfolio/thumbnails/1.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Project Name</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{asset('creative')}}/assets/img/portfolio/fullsize/2.jpg" title="Project Name">
                        <img class="img-fluid" src="{{asset('creative')}}/assets/img/portfolio/thumbnails/2.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Project Name</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{asset('creative')}}/assets/img/portfolio/fullsize/3.jpg" title="Project Name">
                        <img class="img-fluid" src="{{asset('creative')}}/assets/img/portfolio/thumbnails/3.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Project Name</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{asset('creative')}}/assets/img/portfolio/fullsize/4.jpg" title="Project Name">
                        <img class="img-fluid" src="{{asset('creative')}}/assets/img/portfolio/thumbnails/4.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Project Name</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{asset('creative')}}/assets/img/portfolio/fullsize/5.jpg" title="Project Name">
                        <img class="img-fluid" src="{{asset('creative')}}/assets/img/portfolio/thumbnails/5.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Project Name</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{asset('creative')}}/assets/img/portfolio/fullsize/6.jpg" title="Project Name">
                        <img class="img-fluid" src="{{asset('creative')}}/assets/img/portfolio/thumbnails/6.jpg" alt="..." />
                        <div class="portfolio-box-caption p-3">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Project Name</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Location -->
    <section class="page-section-action bg-dark text-white" id="location">
        <div class="container px-4 px-lg-5 text-center">
            <div class="container-lokasi">
            <h2 class="mb-4">Our Store Location</h2>
            <hr class="divider" />
                <div class="mySlides">
                    <img src="{{asset('scarwash/Foto Toko/toko_citraland_main.jpg')}}" style="width:25%">
                </div>

                <div class="mySlides">
                    <img src="{{asset('scarwash/Foto Toko/toko_dharmahusada_main.jpg')}}" style="width:25%">
                </div>

                <div class="mySlides">
                    <img src="{{asset('scarwash/Foto Toko/toko_lidah_wetan_main.jpg')}}" style="width:25%">
                </div>

                <div class="mySlides">
                    <img src="{{asset('scarwash/Foto Toko/toko_sukolilo_main.jpg')}}" style="width:25%">
                </div>

                <div class="mySlides">
                    <img src="{{asset('scarwash/Foto Toko/alamat toko.jpg')}}" style="width:25%">
                </div>
                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>
                <hr class="divider">

                <div class="row-slide">
                    <div class="column">
                        <img class="demo cursor" src="{{asset('scarwash/Foto Toko/toko_citraland.jpg')}}" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="{{asset('scarwash/Foto Toko/toko_dharmahusada.jpg')}}"  style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="{{asset('scarwash/Foto Toko/toko_lidah_wetan.jpg')}}" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="{{asset('scarwash/Foto Toko/toko_sukolilo.jpg')}}" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="{{asset('scarwash/Foto Toko/alamat toko column.jpg')}}" style="width:100%" onclick="currentSlide(5)" alt="Northern Lights">
                    </div>
                </div>
            </div>
    </section>

    <!-- articles -->
   <!--  <section class="page-section" id="articles">
    <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">Newest Articles</h2>
            <hr class="divider" />
            <div class="flex-container">
                <div>1</div>
                <div>2</div>
                <div>3</div>
            </div>
    </div>
    </section> -->
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h2 class="mt-0">Let's Get In Touch!</h2>
                    <hr class="divider" />
                    <p class="text-muted mb-5">Ready to start your next project with us? Send us a messages and we will get back to you as soon as possible!</p>
                </div>
            </div>
            <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                <div class="col-lg-6">
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                            <label for="name">Full name</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                            <label for="email">Email address</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                            <label for="phone">Phone number</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                            <label for="message">Message</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                        </div>
                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                                To activate this form, sign up at
                                <br />
                                <a href="{{asset('creative')}}/https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div>
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Error sending message!</div>
                        </div>
                        <!-- Submit Button-->
                        <div class="d-grid"><button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Submit</button></div>
                    </form>
                </div>
            </div>
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-4 text-center mb-5 mb-lg-0">
                    <i class="bi-phone fs-2 mb-3 text-muted"></i>
                    <div>+1 (555) 123-4567</div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container px-4 px-lg-5">
            <div class="small text-center text-muted">Copyright &copy; 2023 - Company Name</div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="{{asset('creative')}}/https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="{{asset('creative')}}/https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{asset('creative')}}/js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="{{asset('creative')}}/https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("demo");
            let captionText = document.getElementById("caption");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            captionText.innerHTML = dots[slideIndex - 1].alt;
        }
    </script>

</body>

</html>