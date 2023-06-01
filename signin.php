<?php include("assets/layout/head.php") ?>

<div class="sub-banner-section contact_us_section">
    <?php include("assets/layout/navbar.php") ?>

    <!-- plan de precios -->
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-lg-block d-md-flex align-items-center">
                    <!-- <div class="contact_us_image">
                    <figure class="mb-0">
                        <img src="./assets/images/contact_us_image.png" alt="">
                    </figure>
                </div>-->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="signin">
                    <div class="contact_us_form_content" data-aos="fade-right">
                        <h5>Iniciar Session</h5>
                        <form action="assets/controller/signin.php" method="POST">
                            <div class="row">

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group mb-0">
                                        <input type="email" name="email" id="emailaddrs" class="form-placeholder-color"
                                            placeholder="Correo">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group mb-0">
                                        <input type="password" name="password" id="password"
                                            class="form-placeholder-color form_style" placeholder="Contraseña">
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <input type="submit" value="Iniciar Seccion" class="btn">
                                <input type="button" onclick="signin();" value="Registrame" class="btn">


                            </div>



                        </form>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="signup" style="display:none">
                    <div class="contact_us_form_content" data-aos="fade-right">
                        <h5>Registrarse</h5>
                        <form action="assets/controller/signup.php" method="POST">
                            <div class="row">

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group mb-0">
                                        <input type="text" name="name" id="fullname" class="form-placeholder-color"
                                            placeholder="Nombre">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group mb-0">
                                        <input type="tel" name="phone" id="phonenum"
                                            class="form-placeholder-color form_style" placeholder="Telefono">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group mb-0">
                                        <input type="email" name="email" id="emailaddrs" class="form-placeholder-color"
                                            placeholder="Correo">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group mb-0">
                                        <input type="password" name="password" id="password"
                                            class="form-placeholder-color form_style" placeholder="Contraseña">
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <input type="submit" value="Registrarse" class="btn">
                                <input type="button" onclick="signup();" value="Iniciar Session" class="btn">


                            </div>



                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>





<!-- FOOTER SECTION -->
<?php include("assets/layout/footer.php") ?>