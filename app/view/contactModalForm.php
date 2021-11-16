
<?php require_once('./back/captchaConf.php'); ?>
<script src="https://www.google.com/recaptcha/api.js"></script>

<?php ob_start(); ?>
<div class="modal_form">
<a href="javascript:history.go(-1)" id="clode_modal_btn" class="modal_close">&times;</a>
	<form id="contactForm" class="contact-form" method="POST" action="././back/traitement.php">
	    <fieldset>
		<h2>Vos coordonnées</h2>
				<hr>
			<div class="gridForm">
				<div class="inputCheck">
					<div class="userProfile">
						<div class="form-group input-group">
							<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
							<input id="userName" type="text" name="userName" class="form-control" placeholder="Nom / Prénom" autocomplete="off" required> 
						</div>
						<div class="userOption">
								<div class="i-checks">
									<span class="iradio_minimal-grey"><input type="radio" id="idRadioA" name="typeUserDevis" value="2">
									<label id="idRadioA_label" for="idRadioA">Association</label>
								</div>
							</div>								
							<div class="userOption">
								<div class="i-checks">
									<span class="iradio_minimal-grey"><input type="radio" id="idRadioS" name="typeUserDevis" value="3">
									<label id="idRadioS_label" for="idRadioS">Société</label>		
								</div>
							</div>
						<div class="form-group input-group">
							<div class="userOption">
								<div class="i-checks">
									<span class="iradio_minimal-grey"><input type="radio" id="idRadioP" name="typeUserDevis" value="1" checked="checked">
									<label id="idRadioP_label" for="idRadioP" class="bold">Particulier</label>
									<div id="blocCompagny" class="form-group input-group">
										<span class="input-group-addon"><i class="fas fa-building"></i></span>
										<input id="compagny" type="text" name="compagny" class="form-control" placeholder="Société / Association :" autocomplete="off"> 
									</div>
								</div>
							</div>
						</div>
					</div>			
				</div>
				<div class="userContact">
					<div class="form-group input-group">
						<span class="input-group-addon"><i class="fa fa-at" aria-hidden="true"></i></span>
						<input type="email" name="email" id="email" class="form-control" placeholder="E-mail" autocomplete="off" required> 
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
						<input id="phone" type="text" name="phone" class="form-control" placeholder="Téléphone" autocomplete="off"> 
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon"><i class="fa fa-link" aria-hidden="true"></i></span>
						<input id="userUrl" type="text" name="userUrl" class="form-control" placeholder="Adresse site internet (si existant)" autocomplete="off"> 
					</div>
				</div>
			</div>
				<div class="rgpd_security_checking">
						<label class="rgpd_check">En soumettant ce formulaire, j'accepte que les informations 
							saisies soient exploitées dans le cadre d'une demande de devis et de la relation 
							commerciale pouvant en découler.
						<input type="checkbox" checked="" required>
						<span class="checkmark"></span>
						</label>							
					<div class="msgFormDevis">
						<p class="alert alert-info">
							<i class="fa fa-info-circle" aria-hidden="true"></i>
							<b>Demande de devis gratuit.</b> Réponse moyenne sous 72h.
						</p>								
					</div>
				</div>
				<div class="projectCheck">
					<hr>				        					        	
					<div class="form-group input-group select-input-group">
						<span class="jcf-select jcf-unselectable">
							<span class="jcf-select-text">
								<span class="">Type de projet : </span>
							</span>
							<select id="subject" name="subject" class="jcf-reset-appearance" required>
							<option value="" selected="" disabled=""> Type de projet</option>
							<option value="Site vitrine standard">Site vitrine [Standard]</option>
							<option value="Site vitrine personnalisé">Site vitrine [Personnalisé]</option>
							<option value="Plateforme e-commerce">Plateforme e-commerce</option>
							<option value="Application mobile">Application mobile</option>
							<option value="Conception graphique">Conception graphique</option>
							<option value="Développement spécifique">Développement spécifique</option>
							<option value="Autre">Autre</option>
							</select>
						</span>
					</div>
					<div class="form-group input-group projectDescription">
					<textarea id="message" rows="7" name="message" placeholder="Description de votre projet... Merci de détailler le plus possible votre besoin."></textarea>	
					</div>
					<!--<div type="hidden" class="g-recaptcha" data-sitekey="6Leq4zcdAAAAAPa_leI_3gkj94kVyvbXdZ-a265l" data-callback="submitForm"></div>
					<button class="btn btn-f-info sendFormBtn" id="idBtnDevis" name="btnDevis">
							<i class="fa fa-paper-plane" aria-hidden="true"></i>&nbsp;&nbsp;Envoyer ma demande de devis/contact
					</button>-->
                    <button class="g-recaptcha" 
						data-sitekey="<?php echo $reCAPTCHA_site_key ?>"
						data-callback='onSubmit' 
						data-action='submit'>Submit</button>
			    	<div>
					<!--<button class="g-recaptcha" 
					type= "submit"
					form= "contactForm" 
				
					onclick= 'formSubmitBtn(event)'
						data-sitekey="<?php echo $reCAPTCHA_site_key ?>"
						data-action='submit'>Submit</button>
			    	<div>-->
					
		</fieldset>			
	</form>
	<!--<script>
	/**
     * Handles form submissions for Google recaptcha v3.
     * Allows for HTML5 form validation to complete before processing.
     */
    function formSubmitBtn($event) {
        /**
         * Checks the validity of the form.
         * Return if invalid; HTML5 validation errors should display.
         */
        if (!$event.target.form.checkValidity()) {
			alert("Remplissez les champs");
            return;
			
        }
        /**
         * Form is client-side valid; taking over the remainder of processing.
         */
        $event.preventDefault();
        grecaptcha.ready(function() {
            grecaptcha.execute($reCAPTCHA_site_key, { action: 'submit' }).then(function(token) {
                /**
                 * Adds the token g-recaptcha-response token to our hidden form element.
                 * ** Notice ** we our referencing the specific form's input element by name here (do not use IDs).
                 */
                $event.target.form.elements['g-recaptcha-response'].value = token;
                /**
                 * Use the form API directly to submit the form.
                 */
                $event.target.form.submit();
            });
        });
    }
	</script>-->
	<script>
   		function onSubmit(token) {
     	document.getElementById("contactForm").submit();
   		}	
 	</script>
</div>
<?php $contactModalForm= ob_get_clean(); ?>