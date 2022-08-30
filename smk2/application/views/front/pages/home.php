    <!-- main-slider -->
    <section class="w3l-main-slider" id="home">
        <div class="companies20-content">
            <div class="owl-one owl-carousel owl-theme">
                <?php
                foreach ($data_carousel as $value) :

                ?>
                    <div class="item">
                        <li>
                            <div style="background: url(<?= base_url('images/carousel/') . $value->passfoto ?>);background-repeat:no-repeat;background-size:100%" class="slider-info banner-view bg bg2">
                                <div class="banner-info">
                                    <div class="container">
                                        <div class="banner-info-bg">
                                            <h5><?= $value->judul ?></h5>
                                            <p class="mt-4 pr-lg-4"><?= $value->deskripsi ?></p>
                                            <a class="btn btn-style btn-primary mt-xl-5 mt-4 mr-2" href="about.html"> Get
                                                Started <span class="fa fa-chevron-right ml-2" aria-hidden="true"></span></a>
                                            <a class="btn btn-style btn-white mt-xl-5 mt-4" href="services.html"> View
                                                Courses <span class="fa fa-chevron-right ml-2" aria-hidden="true"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </div>
                <?php

                endforeach;
                ?>
            </div>
    </section>
    <!-- /main-slider -->
    <!-- //banner section -->
    <!-- /content-1-->
    <div class="content-1 py-5">
        <div class="container py-md-5">
            <div class="row content-1-grids">
                <?php
                foreach ($data_about as $value) :
                ?>
                    <div class="col-lg-4 content-1-left forms-25-info">
                        <div class="header-title">
                            <h3 class="hny-title"><?= $value->judul ?></h3>

                        </div>
                    </div>
                    <div class="col-lg-4 content-1-right pl-lg-5 mt-lg-0 mt-4">
                        <p class=""><?= $value->visi ?></p>
                    </div>
                    <div class="col-lg-4 content-1-right pl-lg-5 mt-lg-0 mt-4">
                        <p class=""><?= $value->misi ?></p>
                    </div>
                <?php
                endforeach;
                ?>
            </div>
        </div>
    </div>
    <!-- //content-1-->
    <!--/courses-->
    <div class="w3l-homeblog py-5" id="homeblog">
        <div class="container py-lg-5 py-md-4">
            <div class="header-title mb-3 mt-5">
                <!-- <span class="sub-title">Top Courses</span> -->
                <h3 class="hny-title text-left">Jurusan</h3>
            </div>
            <div class="row top-pics ">
                <?php
                foreach ($data_jurusan as $value) :

                ?>
                    <div class="col-lg-3 col-md-6 mt-5">
                        <div style="background: url(<?= base_url('images/jurusan/') . $value->passfoto ?>) 
                            no-repeat center;background-size: contain;" class="top-pic1">
                            <div class="card-body blog-details">
                                <!-- <p class="course-sub">283 online courses</p> -->
                                <a href="services.html" class="blog-desc"><?= $value->jurusan ?>
                                </a>
                                <div class="author align-items-center">
                                    <img src="<?= base_url('images/jurusan/') . $value->passfoto ?>" alt="" class="img-fluid rounded-circle">
                                    <ul class="blog-meta">
                                        <ul class="blog-meta">
                                        </ul>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php

                endforeach;
                ?>
                <div class="readhny-btm text-center mx-auto mt-md-4">
                    <a class="btn btn-primary btn-style mt-md-5 mt-4" href="about.html">Read More <span class="fa fa-chevron-right ml-2" aria-hidden="true"></span></a>
                </div>
            </div>
        </div>
    </div>
    <!--//courses-->

    <div class="album py-5 bg-light">
        <div class="container">
            <h1><b>
                    <center>EKSTRAKULIKULER</center>
                </b></h1>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-5">
                <?php
                foreach ($data_eskul as $value) :
                ?>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="<?= base_url('images/eskul/') . $value->passfoto ?>" style="width: auto;height:300px;object-fit:cover;">
                            <h3><b><?= $value->eskul ?></b></h3>
                            <div class="card-body">
                                <p class="card-text"><?= $value->deskripsi ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php

                endforeach;
                ?>
            </div>

        </div>
    </div>

    <!-- Organisasi -->
    <div class="album py-5 bg-light">
        <div class="container">
            <h1><b>
                    <center>ORGANISASI</center>
                </b></h1>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-5">
                <?php
                foreach ($data_organisasi as $value) :
                ?>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="<?= base_url('images/organisasi/') . $value->passfoto ?>" style="width: auto;height:300px;object-fit:cover;">
                            <h3><b><?= $value->organisasi ?></b></h3>
                            <div class="card-body">

                                <div class="d-flex justify-content-between align-items-center">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php

                endforeach;
                ?>
            </div>

        </div>
    </div>
 
    <!-- //bottom-grids-->

    <!-- middle -->
    <!-- <div class="middle py-5">
        <div class="container pt-lg-2 pb-lg-4 py-4">
            <div class="welcome-left text-center py-lg-4">
                <h3 class="hny-title">Educating Champions of a Just and Sustainable World.</h3>
                <div class="middle-buttons pb-5">
                    <a href="about.html" class="btn btn-style btn-white mt-sm-5 mt-4 mr-2">Read More <span class="fa fa-chevron-right ml-2" aria-hidden="true"></span></a>
                    <a href="contact.html" class="btn btn-style btn-primary mt-sm-5 mt-4">Contact Us <span class="fa fa-chevron-right ml-2" aria-hidden="true"></span></a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- //middle -->
    <!-- stats -->
    <!-- <section class="w3_stats py-lg-0 py-5" id="stats">
        <div class="container">
            <div class="w3-stats">
                <div class="row">
                    <div class="col-md-3 col-6 mt-md-0 mt-5">
                        <div class="counter">
                            <span class="fa fa-clone"></span>
                            <div class="timer count-title count-number mt-3" data-to="15100" data-speed="1500"></div>
                            <p class="count-text">Successfully Trained</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mt-md-0 mt-5">
                        <div class="counter">
                            <span class="fa fa-video-camera"></span>
                            <div class="timer count-title count-number mt-3" data-to="19256" data-speed="1500"></div>
                            <p class="count-text ">We Proudly Received</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mt-md-0 mt-5">
                        <div class="counter">
                            <span class="fa fa-smile-o"></span>
                            <div class="timer count-title count-number mt-3" data-to="12100" data-speed="1500"></div>
                            <p class="count-text">Getting Featured On</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mt-md-0 mt-5">
                        <div class="counter">
                            <span class="fa fa-users"></span>
                            <div class="timer count-title count-number mt-3" data-to="2560" data-speed="1500"></div>
                            <p class="count-text">Firmly Eastablished</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- //stats -->
    <!-- home page video popup section -->
    <section class="w3l-videohny" id="video" style="  background: url(http://i3.ytimg.com/vi/OM88Muxs10w/hqdefault.jpg ) no-repeat center;">
        <div class="new-block py-5">
            <div class="container py-lg-5">
                <div class="history-info position-relative">
                    <!--//video-->
                    <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center pl-3">
                        <span class="video-play-icon">
                            <span class="fa fa-play"></span>
                        </span>
                    </a>

                    <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                    <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                        <iframe src="https://www.youtube.com/embed/OM88Muxs10w" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                    </div>
                    <!--//video-->
                </div>

                <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                    <iframe src="https://www.youtube.com/embed/OM88Muxs10w" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- //home page video popup section -->
    <!--/blog-post-->
    <section class="w3l-blogpost-content py-5">
        <div class="container py-md-5">
            <div class="header-title mb-md-5 mt-5">
                <h3 class="hny-title text-left">Blog</h3>
            </div>
            <div class="row">
                <?php
                foreach ($data_blog as $value) :

                ?>
                    <div class="col-lg-4 col-md-6 item">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="blog-single.html">
                                    <img class="card-img-bottom d-block radius-image-full" src="<?= base_url('images/blog/') . $value->foto ?>" alt="">
                                </a>
                            </div>
                            <div class="card-body blog-details">
                                <a href="blog-single.html" class="blog-desc"><?= $value->judul ?>
                                </a>
                                <div class="author align-items-center">
                                    <img src="<?= base_url('images/blog/') . $value->foto ?>" alt="" class="img-fluid rounded-circle">
                                    <ul class="blog-meta">
                                        <!-- <li>
                                        <a href="#">Isabella ava</a> 
                                    </li> -->
                                        <li class="meta-item blog-lesson">
                                            <span class="meta-value"> <?= $value->tanggal ?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php

                endforeach;
                ?>
            </div>
        </div>
    </section>
    <!--//blog-posts-->
    <!--/w3l-newsletter-->
    <section class="w3l-newsletter">
        <!-- /form-25-section -->
        <div class="form-25-main py-5">
            <div class="container py-lg-5">
                <div class="forms-25-info">

                    <div class="header-title mb-md-5 mt-4">
                        <!-- <span class="sub-title">Subscribe to our Newsletter</span> -->
                        <h3 class="hny-title text-left">Form Pendaftaran</h3>
                    </div>
                    <form action="<?= base_url('admin/MasterSiswa/add_new_data_siswa') ?>" method="post" class="signin-form mt-4 mb-2" enctype="multipart/form-data">
                        <div class="forms-gds">
                            <div class="row">
                                <input class="mb-2" type="number" name="nik" placeholder="NIK" required />
                                <input class="mb-2" type="text" name="nama_siswa" placeholder="Nama Siswa" required />
                                <select name="jk" class="form-control mb-2">
                                    <option value="l">Laki-laki</option>
                                    <option value="p">Perempuan</option>
                                </select>
                                <select name="jurusan" class="form-control mb-2">
                                    <option value="rpl">Rekayasa Perangkat Lunak</option>
                                    <option value="tkj">tekhnik komputer jaringan</option>
                                    <option value="akutansi">Akutansi</option>
                                </select>
                                <input class="mb-2" type="text" name="alamat" placeholder="Alamat" required />
                                <input class="form-control mb-2" type="file" name="passfoto" id="inputPassfoto" />
                                <button class="btn btn-style btn-primary">Daftar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--//w3l-newsletter-->
 