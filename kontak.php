<?php include 'header.php';?>
<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="./assets/img/photos/bg2.jpg">
    <div class="container pt-10 pb-12 pt-md-18 pb-md-21 text-center">
        <div class="row">
            <div class="col-md-7 col-lg-6 mx-auto">
                <h1 class="display-1 mb-3 text-white">Kontak Kami</h1>
                <p class="lead px-lg-5 px-xxl-8">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti, porro.
                </p>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light angled upper-end">
    <div class="container pb-11">
        <div class="row mb-14 mb-md-16">
            <div class="col-xl-10 mx-auto mt-n19">
                <div class="card">
                    <div class="row gx-0">
                        <div class="col-lg-6 align-self-stretch">
                            <div class="map map-full rounded-top rounded-lg-start">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.745008916489!2d110.34752281434406!3d-7.816793194367282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a577faf968e75%3A0x2f1089d3e54a4fdb!2sJMC%20Indonesia!5e0!3m2!1sen!2sid!4v1651098073376!5m2!1sen!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <!-- /.map -->
                        </div>
                        <!--/column -->
                        <div class="col-lg-6">
                            <div class="p-10 p-md-11 p-lg-14">
                                <div class="d-flex flex-row">
                                    <div>
                                        <div class="icon text-primary fs-28 me-4 mt-n1"> <i
                                                class="uil uil-location-pin-alt"></i> </div>
                                    </div>
                                    <div class="align-self-start justify-content-start">
                                        <h5 class="mb-1">Address</h5>
                                        <address>
                                        Jl. Prapanca (Gumuk Indah) No.6a, Tirtonirmolo, Kasihan, Bantul, D.I.Yogyakarta
                                        </address>
                                    </div>
                                </div>
                                <!--/div -->
                                <div class="d-flex flex-row">
                                    <div>
                                        <div class="icon text-primary fs-28 me-4 mt-n1"> <i
                                                class="uil uil-phone-volume"></i> </div>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">Phone</h5>
                                        <p>0811-2582-510</p>
                                    </div>
                                </div>
                                <!--/div -->
                                <div class="d-flex flex-row">
                                    <div>
                                        <div class="icon text-primary fs-28 me-4 mt-n1"> <i
                                                class="uil uil-envelope"></i> </div>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">E-mail</h5>
                                        <p class="mb-0">
                                            hello@jmc.co.id (Marketing)
                                        </p>
                                        <p class="mb-0">
                                            recruitment@jogjamedia.co.id (Career)
                                        </p>
                                    </div>
                                </div>
                                <!--/div -->
                            </div>
                            <!--/div -->
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                <h2 class="display-4 mb-3 text-center">Hubungi Kami</h2>
                <p class="lead text-center mb-10">
                    Apakah masih ada pertanyaan yang ingin anda ajukan kepada kami ?
                </p>
                <form class="contact-form needs-validation" method="post" action="./assets/php/contact.php" novalidate>
                    <div class="messages"></div>
                    <div class="row gx-4">
                        <div class="col-md-6">
                            <div class="form-floating mb-4">
                                <input id="form_name" type="text" name="name" class="form-control" placeholder="Jane"
                                    required>
                                <label for="form_name">Nama Depan *</label>
                                <div class="valid-feedback"> Looks good! </div>
                                <div class="invalid-feedback"> Please enter your first name. </div>
                            </div>
                        </div>
                        <!-- /column -->
                        <div class="col-md-6">
                            <div class="form-floating mb-4">
                                <input id="form_lastname" type="text" name="surname" class="form-control"
                                    placeholder="Doe" required>
                                <label for="form_lastname">Nama Belakang *</label>
                                <div class="valid-feedback"> Looks good! </div>
                                <div class="invalid-feedback"> Please enter your last name. </div>
                            </div>
                        </div>
                        <!-- /column -->
                        <div class="col-md-12">
                            <div class="form-floating mb-4">
                                <input id="form_email" type="email" name="email" class="form-control"
                                    placeholder="jane.doe@example.com" required>
                                <label for="form_email">Email *</label>
                                <div class="valid-feedback"> Looks good! </div>
                                <div class="invalid-feedback"> Please provide a valid email address. </div>
                            </div>
                        </div>
                        <!-- /column -->
                        <div class="col-12">
                            <div class="form-floating mb-4">
                                <textarea id="form_message" name="message" class="form-control"
                                    placeholder="Your message" style="height: 150px" required></textarea>
                                <label for="form_message">Pesan *</label>
                                <div class="valid-feedback"> Looks good! </div>
                                <div class="invalid-feedback"> Please enter your messsage. </div>
                            </div>
                        </div>
                        <!-- /column -->
                        <div class="col-12 text-center">
                            <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3"
                                value="Kirim Pesan">
                            <p class="text-muted"><strong>*</strong> These fields are required.</p>
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </form>
                <!-- /form -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->

<?php include 'footer.php';?>