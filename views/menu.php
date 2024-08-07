
<!-- Main Header-->
    <header class="main-header header-style-one">
        <!-- Header Top -->
        <div class="header-top">
            <div class="inner-container">
                <div class="top-left">
                    <?php if (!empty($direccion)){ ?>
                    <!-- Info List -->
                    <ul class="list-style-one">
                        <li><a href="<?php echo $maps ?>" target="_blank"> <i class="fa fa-map-marker-alt"></i> <?php echo $direccion ?></a></li>
                    </ul>
                    <?php } ?>
                </div>

                <div class="top-right">
                    <ul class="social-icon-one">
                        <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Header Top -->

        <div class="header-lower">
            <!-- Main box -->
            <div class="main-box">
                <div class="logo-box">
                    <?php if ($page =="proinsa"){?>
                    <div class="logo"><a href="?page=inicio"><img style="height: 115px!important;" src="assets/images/menu/<?php echo $logo?>" alt="" title="Grupo Universal"></a></div>
                    <?php }else{?>
                        <div class="logo"><a href="?page=inicio"><img style="width: 200px;" src="assets/images/menu/<?php echo $logo?>" alt="" title="Grupo Universal"></a></div>
                        <?php }?>
                </div>

                <!--Nav Box-->
                <div class="nav-outer">
                    <nav class="nav main-menu">
                        <ul class="navigation">
                            <li class="<?php echo $inicio ?>"><a href="?page=inicio">Grupo Universal</a></li>
                            <li class="<?php echo $universal ?>"><a href="?page=universal-cooling">Universal Cooling</a> </li>
                            <li class="<?php echo $gdi ?>"><a href="?page=gdi">GDI</a> </li>
                            <li class="<?php echo $proinsa ?>"><a href="?page=proinsa">PROINSA</a> </li>
                            <li> <div id="google_translate_element"></div>

                            </li>
<!--                            <li><a href="?page=contactanos">Contactanos</a></li>-->
<!--                            <li><a href="?page=proyectos">Proyectos</a></li>-->
                        </ul>
                    </nav>
                    <!-- Main Menu End-->
                    <div class="outer-box">
                        <!-- Info Btn -->
                        <a href="tel:+503<?php echo $telefono ?>" class="info-btn">
                            <i class="icon fa fa-phone"></i>
                            <small>Llamanos:</small>
                            <strong>(503) <?php echo $telefono ?></strong>
                        </a>

                        <!-- Mobile Nav toggler -->
                        <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>

            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            <nav class="menu-box">
                <div class="upper-box">
                    <div class="nav-logo"><a href="?page=inicio"><img src="assets/images/menu/<?php echo $logo?>" alt="" title=""></a></div>
                    <div class="close-btn"><i class="icon fa fa-times"></i></div>
                </div>

                <ul class="navigation clearfix">

                </ul>
                <ul class="contact-list-one">
                    <li>
                        <i class="icon lnr-icon-phone-handset"></i>
                        <span class="title">Llamanos</span>
                        <div class="text"><a href="tel:+503<?php echo $telefono ?>">+503 <?php echo $telefono ?></a></div>
                    </li>
                    <li>
                        <i class="icon lnr-icon-envelope1"></i>
                        <span class="title">Email</span>
                        <div class="text"><a href="mailto:<?php echo $correo ?>"><?php echo $correo ?></a></div>
                    </li>
                    <li>
                        <i class="icon lnr-icon-map-marker"></i>
                        <span class="title">Dirección</span>
                        <div class="text"><?php echo $direccion ?></div>
                    </li>
                </ul>
                <ul class="social-links">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                </ul>
            </nav>
        </div><!-- End Mobile Menu -->


        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container">
                <div class="inner-container">
                    <!--Logo-->
                    <div class="logo">
                        <a href="?page=inicio" title=""><img src="assets/images/menu/<?php echo $logo?>" alt="" title=""></a>
                    </div>

                    <!--Right Col-->
                    <div class="nav-outer">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-collapse show collapse clearfix">
                                <ul class="navigation clearfix">
                                    <!--Keep This Empty / Menu will come through Javascript-->
                                </ul>
                            </div>
                        </nav><!-- Main Menu End-->

                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                    </div>
                </div>
            </div>
        </div><!-- End Sticky Menu -->
    </header>
    <!--End Main Header -->

