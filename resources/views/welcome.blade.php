<!DOCTYPE html>
<html lang="en">

<head>
    <title>SchoolHELP - Landing Page</title>
    <link rel="icon" href="img/schoolhelpicon.png" type="image/gif" sizes="16x16">
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="BizLand/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="BizLand/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="BizLand/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="BizLand/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="BizLand/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="BizLand/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="BizLand/assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center" data-aos="zoom-out" data-aos-delay="2">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a
                        href="mailto:contact@example.com">helpdesk@schoolhelp.org</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62 8214-1552-64</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="" class="logo" data-aos="fade-left" data-aos-delay="2"><img src="img/schoolhelpicon.png"
                    alt="schoolhelp" width="40"> SchoolHELP</a>

            <nav id="navbar" class="navbar" data-aos="fade-up" data-aos-delay="2">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#request">Request Catalogue</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    @if (Route::has('login'))
                    @auth
                    @if (Auth::user()->role == 'superadmin')
                    <li><a href="{{ route('superadmin_dashboard') }}" class="nav-link scrollto">Admin</a></li>
                    @elseif (Auth::user()->role == 'schooladmin')
                    <li><a href="{{ route('schooladmin_dashboard') }}" class="nav-link scrollto">Admin</a></li>
                    @elseif (Auth::user()->role == 'volunteer')
                    <li><a href="{{ route('volunteer_dashboard') }}" class="nav-link scrollto">Admin</a></li>
                    @endif
                    @else
                    <li><a href="{{ route('login') }}" class="nav-link scrollto">Log in</a></li>
                    @if (Route::has('register'))
                    <li><a href="{{ route('register') }}" class="ml-4 nav-link scrollto">Register</a></li>
                    @endif
                    @endauth
                    @endif
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container col-lg-5">
            <h1 data-aos="fade-right" data-aos-delay="2">Welcome to <span>SchoolHELP</span></h1>
            <h2 data-aos="zoom-in" data-aos-delay="2"><strong>Recovering Education 2021: </strong> Together, helping
                restore education from the COVID-19 Pandemic</h2>
            <div class="d-flex">
                <a href="#about" class="btn-get-started scrollto" data-aos="zoom-in" data-aos-delay="5"><i
                        class='bx bx-caret-down-circle'></i> Get Started</a>
                <a href="{{ route('register') }}" class="btn-get-started scrollto"
                    style="margin-left: 10px; background-color: gray" data-aos="zoom in" data-aos-delay="5"><i
                        class="bi bi-person-circle"></i><span> Register as Volunteer</span></a>
            </div>
        </div>
        <div class="col-lg-5"></div>
    </section>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="2">
                            <div class="icon"><i class='bx bx-check-circle'></i></div>
                            <h4 class="title"><a href="">Priorities</a></h4>
                            <p class="description">Supporting our children who need to catch up on Lost Learning due to
                                COVID-19 Pandemic</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="2">
                            <div class="icon"><i class="bx bxs-school"></i></div>
                            <h4 class="title"><a href="">School</a></h4>
                            <p class="description">Allow school to request for help from the general public to support
                                the priorities mission</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="2">
                            <div class="icon"><i class="bx bx-street-view"></i></div>
                            <h4 class="title"><a href="">Volunteer</a></h4>
                            <p class="description">Allow volunteer the volunteer to view the aids needed and give the
                                aids to the students</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="2">
                            <div class="icon"><i class="bx bxl-xing"></i></div>
                            <h4 class="title"><a href="">Action</a></h4>
                            <p class="description">Supporting the world of education from lost-learning with the
                                implementation of IT</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Featured Services Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>About</h2>
                    <h3>Find Out More <span>About Us</span></h3>
                    <p></p>
                </div>
                <div class="row" style="margin-right: 10px">
                    <div class="col-lg-4" data-aos="fade-right" data-aos-delay="2">
                        <img src="BizLand/assets/img/about-us-img.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content d-flex flex-column justify-content-center p-4"
                        data-aos="fade-up" data-aos-delay="2">
                        <h3 style="text-align: justify">Many children all over the world have been disadvantaged by the
                            COVID pandemic in the last two years</h3>
                        <p style="text-align: justify">
                            Most schools are back on track throughout the world after being closed for years due to the
                            historic COVID-19 outbreak,
                            but the educational system is currently in the midst of a recovery phase during which it is
                            reviewing the harm done and learning from the experience.
                            More than 1.5 billion children and teenagers were impacted by the pandemic, the hardest hit
                            affecting the most vulnerable students.
                            Even after the schools have reopened, there is a possibility that additional students would
                            lose motivation to learn in areas where distance
                            learning has not been successful. It is essential that everyone act right away if we are
                            going to stop a learning crisis from
                            becoming a generational disaster.
                        </p>
                        <p style="text-align: justify">
                            SchoolHELP is a system that has been proposed to allow schools to request for help from the
                            general public. The schools may schedule tutorials
                            for students who need remedial education, or request for resources. Volunteers can then
                            check SchoolHELP for requests and make an offer to volunteer
                            for any requests that they can fulfill, for example to help out in a tutorial or donate
                            digital devices.
                            The school administrator will review the offers for their requests and then contact the
                            volunteers themselves.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Catalogue Section ======= -->
        <section id="request" class="faq section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Request Calogue</h2>
                    <h3>Find the newest <span>Request from School</span></h3>
                </div>
                <div class="row row-cols-1 row-cols-md-4 g-4">
                    @foreach ($request_datas as $request)
                    <div class="col">
                        <div class="card h-100">
                            <img src="BizLand/assets/img/request.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="">
                                        {{$request->school->school_name}}
                                    </a>
                                </h5>
                                <h6 class="card-subtitle mb-2 text-muted">
                                    Posted by: {{$request->user->name}}
                                </h6>

                                <h6 class="card-subtitle mb-2 text-muted">
                                    Request Type: {{$request->resource_category ? "Resource" : "Tutorial"}}
                                </h6>

                                <hr>

                                <p class="card-text" style="text-align: justify">
                                    {{Str::limit($request->description, 95)}}
                                </p>
                            </div>
                            <div class="card-footer">
                                <a  @auth href="javascript:;" onclick="view_request('{{route('offer.index',['request_data' => $request->id])}}')" @else href="{{route('login')}}" @endauth class="btn btn-primary" style="width: 100%"> View Request</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Catalogue Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Contact</h2>
                    <h3><span>Contact Us</span></h3>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="2">
                    <div class="col-lg-6">
                        <div class="info-box mb-4">
                            <i class="bx bx-map"></i>
                            <h3>Our Address</h3>
                            <p>Jl. Raya Puputan No. 86 Denpasar, Bali</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email Us</h3>
                            <p>helpdesk@schoolhelp.org</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Call Us</h3>
                            <p>+62 8214-1552-64</p>
                        </div>
                    </div>

                    <div class="row" data-aos="fade-up" data-aos-delay="2">

                        <div class="col-lg-6 ">
                            <iframe class="mb-4 mb-lg-0"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.1924038136344!2d115.22439021457107!3d-8.673244893768114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd240f24881c587%3A0xe8413f111e0aa096!2sInstitut%20Teknologi%20Dan%20Bisnis%20STIKOM%20BALI!5e0!3m2!1sen!2sid!4v1669356616066!5m2!1sen!2sid"
                                frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                        </div>

                        <div class="col-lg-6">
                            <form action="forms/co  ntact.php" method="post" role="form" class="php-email-form">
                                <div class="row">
                                    <div class="col form-group">
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Your Name" required>
                                    </div>
                                    <div class="col form-group">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Your Email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="Subject" required>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                        required></textarea>
                                </div>
                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center"><button type="submit">Send Message</button></div>
                            </form>
                        </div>
                    </div>
                </div>
        </section>
        <!-- End Contact Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>SchoolHELP</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Request Detail</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modal-body"></div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <!-- Vendor JS Files -->
    {{-- <script src="BizLand/assets/vendor/purecounter/purecounter_vanilla.js"></script> --}}
    <script src="BizLand/assets/vendor/aos/aos.js"></script>
    <script src="BizLand/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="BizLand/assets/vendor/glightbox/js/glightbox.min.js"></script>
    {{-- <script src="BizLand/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script> --}}
    <script src="BizLand/assets/vendor/swiper/swiper-bundle.min.js"></script>
    {{-- <script src="BizLand/assets/vendor/waypoints/noframework.waypoints.js"></script> --}}
    {{-- <script src="BizLand/assets/vendor/php-email-form/validate.js"></script> --}}

    <!-- Template Main JS File -->
    <script src="BizLand/assets/js/main.js"></script>

    <script>
        const modal = new bootstrap.Modal('#exampleModal')

        // show modal
        // modal.show()

        function view_request(url) {
            modal.show();
            $.ajax({
                url: url,
                type: 'GET',
                beforeSend: () => {
                    $('#modal-body').html('Loading...')
                },
                success: (data) => {
                    $('#modal-body').html(data);
                },
                error: (data) => {
                    console.log('Error:', data);
                    $('#modal-body').html('Error Showing Request')
                }
            });
        }

    </script>
</body>

</html>
