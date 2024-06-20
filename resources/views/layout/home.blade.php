<!DOCTYPE html>
<html lang="en">
    @include('layout.header')
    <body id="page-top" >
        <!-- Navigation-->
    
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a href="#" class="navbar-logo">Show<span>Shoes</span>.</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#service">Log In</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">New Product</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">registrasi</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!--Carousel-->
    <div id="service">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="{{asset('startbootstrap-agency-gh-pages/assets/img/1.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <a class="btn btn-primary btn-xl text-uppercase" href="{{route('layout.login')}}" >Sign In</a>
                </div>
            
              </div>
              <div class="carousel-item" data-bs-interval="10000">
                <img src="{{asset('startbootstrap-agency-gh-pages/assets/img/2.png')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <a class="btn btn-primary btn-xl text-uppercase" href="{{route('layout.login')}}" >Sign In</a>
                </div>
              </div>
              <div class="carousel-item"  data-bs-interval="10000">
                <img src="{{asset('startbootstrap-agency-gh-pages/assets/img/3.png')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <a class="btn btn-primary btn-xl text-uppercase" href="{{route('layout.login')}}" >Sign In</a>
                </div>
              </div>
              <div class="carousel-item"  data-bs-interval="10000">
                <img src="{{asset('startbootstrap-agency-gh-pages/assets/img/4.png')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <a class="btn btn-primary btn-xl text-uppercase" href="{{route('layout.login')}}" >Sign In</a>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

    </div>

        <!--end-->
        
        
        <!-- New Product Men-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Men Shoes</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('assets/img/men/1.jpg')}}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Threads</div>
                                <div class="portfolio-caption-subheading text-muted">Illustration</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('assets/img/men/Brg4.jpg')}}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Explore</div>
                                <div class="portfolio-caption-subheading text-muted">Graphic Design</div>
                            </div>
                        </div></div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('assets/img/men/monk1.png')}}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Finish</div>
                                <div class="portfolio-caption-subheading text-muted">Identity</div>
                            </div>
                    </div>
                        </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                    <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('assets/img/men/PlnT4.avif')}}"  alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Lines</div>
                                <div class="portfolio-caption-subheading text-muted">Branding</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('assets/img/men/slipOn5.jpg')}}"alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Southwest</div>
                                <div class="portfolio-caption-subheading text-muted">Website Design</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('assets/img/men/sneakrs6.webp')}}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Window</div>
                                <div class="portfolio-caption-subheading text-muted">Photography</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- New Product Woman-->
          <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Woman Shoes</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal7">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('assets/img/women/pumps4.webp')}}"  alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Threads</div>
                                <div class="portfolio-caption-subheading text-muted">Illustration</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal8">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('assets/img/women/SpollH2.jpg')}}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Explore</div>
                                <div class="portfolio-caption-subheading text-muted">Graphic Design</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal9">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('assets/img/women/Espadrille2.webp')}}" alt="..." />
                            </a>
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Finish</div>
                                    <div class="portfolio-caption-subheading text-muted">Identity</div>
                                </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal10">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('assets/img/women/ABoots5.jpg')}}"  alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Lines</div>
                                <div class="portfolio-caption-subheading text-muted">Branding</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal11">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('assets/img/women/plattform2.jpg')}}"alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Southwest</div>
                                <div class="portfolio-caption-subheading text-muted">Website Design</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal12">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('assets/img/women/wedges1.jpg')}}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Window</div>
                                <div class="portfolio-caption-subheading text-muted">Photography</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        

        <!-- Contact-->
        <section class="page-section bg-light " id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Me</h2>
                </div>
                <div class="row d-flex justify-content-center"> 
                    <div class="col-lg-12">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{asset('assets/img/11.jpg')}}" alt="..." />
                            <h4>Muhanif Azizul Fikri</h4>
                            <p class="text-muted">Chief Executive Officer Of ShowShoes.</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/azzlfchr/" ><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/muhanif-azizul-fikri-016923299/" ><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
                </div>
            </div>
        </section>
        <!-- Registrasi-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Registrasi</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <div class="d-flex justify-content-center">
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN" class="w-50" method="POST" action="{{route('registrasi')}}">
                        @csrf
                        <div class="row align-items-stretch mb-5">
                            <div class="col-md-6-center">
                                <div class="form-group">
                                    <!-- Name input-->
                                    <input class="form-control" id="username" name="name" type="text" placeholder="username *" data-sb-validations="required" />
                                    <div class="invalid-feedback" data-sb-feedback="name:required"></div>
                                </div>
                                <div class="form-group">
                                    <!-- Email address input-->
                                    <input class="form-control" id="email" name="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                    <div class="invalid-feedback" data-sb-feedback="email:required"></div>
                                    <div class="invalid-feedback" data-sb-feedback="email:email"></div>
                                </div>
                                <div class="form-group mb-md-0">
                                    <!-- Phone number input-->
                                    <input class="form-control" id="password" name="password" type="password" placeholder="password *" data-sb-validations="required" />
                                    <div class="invalid-feedback" data-sb-feedback="phone:required"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button href="" type="submit" class="btn btn-primary">Sign Up</button>
                        </div>
                        <!-- Submit success message-->
                    </form>

                </div>
            </div>
        </section>
        @include('layout.footer')

        <!-- Modals-->
        <!-- New Product item popup-->
        <!--Men-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">OXFORD</h2>
                                    <p class="item-intro text-muted">Kalau kamu ingin mencari sepatu formal paling klasik, 
                                        jawabannya adalah oxford shoes. Kebanyakan orang sudah mengetahui model sepatu oxford karena desainnya yang timeless. Jadi, sepatu oxford pria tepat untuk dibeli bagi kamu yang ingin membeli sepatu formal untuk pertama kalinya.</p>
                                    <img class="img-fluid d-block mx-auto" src="{{asset('assets/img/men/1.jpg')}}" alt="..." />
                                    <p></p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">Brogue</h2>
                                    <p class="item-intro text-muted">Brogue shoes berkaitan dengan ciri khas aksen dekorasi perforasi pada sepatu formal. Ada fungsi unik dalam brogue shoes, lubang-lubang pada sepatu ini berguna untuk membantu mengeluarkan air pada sepatu.</p>
                                    <img class="img-fluid d-block mx-auto" src="{{asset('assets/img/men/Brg4.jpg')}}" alt="..." />
                                    <p></p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">Monk</h2>
                                    <p class="item-intro text-muted">Mencari sepatu formal yang lebih trendi dan stylish? Coba tengok model monk strap. Perbedaan yang paling mencolok dengan model-model sebelumnya ada pada tali kulit bahu pengikat sepatu yang cukup lebar. Itulah alasan sepatu ini diberi nama “strap” yang berguna untuk mengencangkan sepatu.
                                        Strap tersebut ada yang memiliki satu atau dua tali bahu. Keduanya sama-sama dapat dipakai pada acara formal dan smart-casual.</p>
                                    <img class="img-fluid d-block mx-auto" src="{{asset('assets/img/men/monk1.png')}}" alt="..." />
                                    <p></p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">Plain-Toe</h2>
                                    <p class="item-intro text-muted">Untuk model sepatu kulit yang satu ini tidak berbeda dari sepatu oxford atau derby. Hanya saja sepatu ini tidak memiliki lipatan atau dekorasi sebagai penghiasnya. Meskipun polos dan memberi kesan kesederhanaan, 
                                        tapi sepatu ini justru elegan karena kerapian yang ditonjolkannya. Untuk kamu yang mau tampil tidak terlalu heboh, sepatu model ini adalah jawabannya.</p>
                                    <img class="img-fluid d-block mx-auto" src="{{asset('assets/img/men/PlnT4.avif')}}" alt="..." />
                                    <p></p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">Slip-On</h2>
                                    <p class="item-intro text-muted">jenis sepatu dengan tampilan yang lebih minimalis tanpa adanya tali sebagai pengikat. Slip on dirancang untuk memberikan fleksibilitas yang tinggi.</p>
                                    <img class="img-fluid d-block mx-auto" src="{{asset('assets/img/men/slipOn5.jpg')}}" alt="..." />
                                    <p></p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">Sneakers</h2>
                                    <p class="item-intro text-muted">Sneakers adalah jenis sepatu yang tujuan pembuatannya memang khusus untuk kebutuhan aktivitas sehari-hari. Awalnya nih, produsen memproduksinya untuk kebutuhan khusus olah raga. Dengan desain sol dan bahan yang kuat. Namun seiring berjalannya waktu, sepatu ini menjadi pilihan untuk berbagai aktivitas.
                                    </p>
                                    <img class="img-fluid d-block mx-auto" src="{{asset('assets/img/men/sneakrs6.webp')}}" alt="..." />
                                    <p></p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Women-->
        <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">Pumps</h2>
                                    <p class="item-intro text-muted">Pumps adalah jenis sepatu berhak tinggi maupun sedang dengan bagian jari kaki tertutup. Pumps juga sering kali disebut dengan nama court shoes dan umumnya tidak bertali strap.</p>
                                    <img class="img-fluid d-block mx-auto" src="{{asset('assets/img/women/pumps4.webp')}}" alt="..." />
                                    <p></p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">Spool-Heels</h2>
                                    <p class="item-intro text-muted">Jenis sepatu ini memiliki desain yang lebar di bagian atas dan bawahnya, tapi sedikit lebih sempit di bagian tengah. Sepatu ini memiliki kelebihan dalam segi kepraktisan dan kenyamanan dibandingkan dengan tipe sepatu berhak tinggi lainnya.</p>
                                    <img class="img-fluid d-block mx-auto" src="{{asset('assets/img/women/SpollH2.jpg')}}" alt="..." />
                                    <p></p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">Espadrille</h2>
                                    <p class="item-intro text-muted">Jenis sepatu ini sungguh unik. Dengan menggunakan bahan alam sejenis jerami yang bernama Esparto untuk bagian sol-nya,
                                        bagian atasnya bisa menggunakan bahan dari katun atau kanvas sehingga nyaman digunakan dan fleksibel.</p>
                                    <img class="img-fluid d-block mx-auto" src="{{asset('assets/img/women/Espadrille2.webp')}}" alt="..." />
                                    <p></p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal10" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">Ankle Boots</h2>
                                    <p class="item-intro text-muted">Ankle Boots adalah jenis sepatu boots yang menutupi mata kaki dan bagian bawah kaki sang pemakai. Jenis sepatu ini dapat digunakan untuk suasana santai maupun formal.</p>
                                    <img class="img-fluid d-block mx-auto" src="{{asset('assets/img/women/ABoots5.jpg')}}" alt="..." />
                                    <p></p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal11" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">Plattform</h2>
                                    <p class="item-intro text-muted">Dengan bagian sol yang tebal, sampai setebal 3 hingga 10 cm, dan heels atau hak yang tinggi, lebih tinggi dari mata kaki, tipe sepatu ini menambah keanggunan penggunanya. Hanya saja, ini sepatu jenis ini bukan untuk wanita yang ceroboh.</p>
                                    <img class="img-fluid d-block mx-auto" src="{{asset('assets/img/women/plattform2.jpg')}}" alt="..." />
                                    <p></p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal12" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">Wedges</h2>
                                    <p class="item-intro text-muted">Tipe jenis ini kini sedang naik daun. Tipe sepatu wedges memiliki tipe khas yaitu sol nya tebal dan juga memiliki fungsi sebagai heels. Biasanya solnya akan lebih tebal di bagian belakang daripada di bagian depannya. Menjadikannya sepatu layaknya hak tinggi seperti pumps.</p>
                                    <img class="img-fluid d-block mx-auto" src="{{asset('assets/img/women/wedges1.jpg')}}" alt="..." />
                                    <p></p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
       <script src="{{asset('js/scripts.js')}}"></script>

        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
