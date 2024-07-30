<?php ?>
<footer class="main-footer footer-style-one">
		<div class="bg footer-bg-1"></div>
		<!-- Widgets Section -->
		<div class="widgets-section">
			<div class="auto-container">
				<div class="row">
					<!-- Footer COlumn -->
					<div class="footer-column col-xl-3 col-lg-12 col-md-12">
						<div class="footer-widget about-widget">
							<div class="widget-content">
								<div class="logo"><a href="#"> <img src="assets/images/menu/<?php echo $logo?>" alt=""></a></div>
                            </div>
						</div>
					</div>

					<!-- Footer COlumn -->
					<div class="footer-column col-xl-6 col-lg-8 col-md-12 mb-0">
						<div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="footer-widget links-widget">
									<div class="widget-content">
                                        <ul class="list-style-two light">
                                            <li><i class="fa fa-phone"></i> <a href="tel:+503 <?php echo $telefono ?>">+503 <?php echo $telefono ?></a></li>
                                            <li><i class="fa fa-envelope"></i> <a href="mailto:<?php echo $correo ?>"><?php echo $correo ?></a></li>
                                        </ul>
                                        <ul class="social-icon-two">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        </ul>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<!--  Footer Bottom -->
		<div class="footer-bottom">
			<div class="auto-container">
				<div class="inner-container">
					<div class="copyright-text">© <a href="?page=inicio">Grupo Universal</a> All Rights Reserved</div>

					<ul class="footer-nav">
						<li><a href="#">Trams & Condition</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!--End Main Footer -->

</div><!-- End Page Wrapper -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.fancybox.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/mixitup.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/script.js"></script>
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+50375397024", // WhatsApp number
            call_to_action: "Envíanos un mensaje", // Call to action
            button_color: "#FF6550", // Color of button
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = 'https:', host = "getbutton.io", url = proto + '//static.' + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();

</script>

</body>
</html>

