
<?php

		


	$ecommerce = ControllerEcommerce::ctrGetCommerce();

	
	
?>

<!--fourth Container -->
<div class="container-fluid" style="background:#efebe9">
	<!--Section: Contact-->
	<section id="contact">

			<div class="container py-5">
				
					    <!--Section heading-->
					    <h2 class="h2-responsive font-weight-bold text-center my-4 colorTitle">Contactenos</h2>
					    <!--Section description-->
					    <p class="text-center w-responsive mx-auto mb-5">¿Tiene usted alguna pregunta? Por favor no dude en contactarnos directamente. Nuestro equipo se comunicará con usted para ayudarle.</p>

					    <div class="row">

					        <!--Grid column-->
					        <div class="col-md-9 mb-md-0 mb-5">
					            <form id="contact-form" name="contact-form" action="mail.php" method="POST" class="grey-text">

					                <!--Grid row-->
					                <div class="row">

					                    <!--Grid column-->
					                    <div class="col-md-6">
					                        <div class="md-form mb-0">
					                        	<i class="fas fa-user prefix"></i>
					                            <input type="text" id="name" name="name" class="form-control">
					                            <label for="name" class="">Tu nombre</label>
					                        </div>
					                    </div>
					                    <!--Grid column-->

					                    <!--Grid column-->
					                    <div class="col-md-6">
					                        <div class="md-form mb-0">
					                        	<i class="fas fa-envelope prefix"></i>
					                            <input type="text" id="email" name="email" class="form-control">
					                            <label for="email" class="">Tu correo</label>
					                        </div>
					                    </div>
					                    <!--Grid column-->

					                </div>
					                <!--Grid row-->

					                <!--Grid row-->
					                <div class="row">
					                    <div class="col-md-12">
					                        <div class="md-form mb-0">
					                        	<i class="fas fa-tag prefix"></i>
					                            <input type="text" id="subject" name="subject" class="form-control">
					                            <label for="subject" class="">Asunto</label>
					                        </div>
					                    </div>
					                </div>
					                <!--Grid row-->

					                <!--Grid row-->
					                <div class="row">

					                    <!--Grid column-->
					                    <div class="col-md-12">

					                        <div class="md-form">
					                        	<i class="fas fa-pencil-alt prefix"></i>
					                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
					                            <label for="message">Tu mensaje</label>
					                        </div>

					                    </div>
					                </div>
					                <!--Grid row-->

					            </form>

					            <div class="text-center text-md-left">
					                <a class="btn btn-primary btn-rounded" type="submit" onclick="validateForm();">Enviar</a>
					            </div>
					            <div class="status" id="status"></div>

					            <div id="alertEmail" class="alert alert-warning alerta-msj fade show hidden="hidden">
								  <button type="button" class="close alert-close" >&times;</button>
								  <div class="status" id="result"></div>
								</div>
					        </div>
					        <!--Grid column-->

					        <!--Grid column-->
					        <div class="col-md-3 text-center grey-text">
					            <ul class="list-unstyled mb-0">
					                <li><i class="fas fa-map-marker-alt fa-2x"></i>
					                    <p><?php echo $ecommerce["address"]; ?></p>
					                </li>

					                <li><i class="fas fa-phone mt-4 fa-2x"></i>
					                    <p><?php echo $ecommerce["phone_contact"]; ?></p>
					                </li>

					                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
					                    <p><?php echo $ecommerce["email_contact"]; ?></p>
					                </li>

					                <li><i class="fas fa-building mt-4 fa-2x"></i>
					                    <p><?php echo $ecommerce["business_hours"]; ?></p>
					                </li>
					            </ul>
					        </div>
					        <!--Grid column-->

					    </div>

	</section>
	<!--Section: Contact-->
</div>
<!--fourth Container -->