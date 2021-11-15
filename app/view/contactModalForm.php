
<?php ob_start(); ?>
<div class="modal_form">
<a href="javascript:history.go(-1)" id="clode_modal_btn" class="modal_close">&times;</a>
	<form id="contactForm" action="" class="contact-form" method="POST">
	    <fieldset>
		<h2>Vos coordonnées</h2>
				<hr>
			<div class="gridForm">
				<div class="inputCheck">
					<div class="userProfile">
						<div class="form-group input-group">
							<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" name="nomDevis" class="form-control" placeholder="Nom / Prénom" autocomplete="off"> 
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
										<input type="text" name="compagnyName" class="form-control" placeholder="Société / Association :" autocomplete="off"> 
									</div>
								</div>
							</div>
						</div>
					</div>			
				</div>
				<div class="userContact">
					<div class="form-group input-group">
						<span class="input-group-addon"><i class="fa fa-at" aria-hidden="true"></i></span>
						<input type="email" name="emailDevis" class="form-control" placeholder="E-mail" autocomplete="off"> 
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
						<input type="text" name="telDevis" class="form-control" placeholder="Téléphone" autocomplete="off"> 
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon"><i class="fa fa-link" aria-hidden="true"></i></span>
						<input type="text" name="urlDevis" class="form-control" placeholder="Adresse site internet (si existant)" autocomplete="off"> 
					</div>
				</div>
			</div>
				<div class="rgpd_security_checking">
						<label class="rgpd_check">En soumettant ce formulaire, j'accepte que les informations 
							saisies soient exploitées dans le cadre d'une demande de devis et de la relation 
							commerciale pouvant en découler.
						<input type="checkbox" checked="checked">
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
							<select name="typeProjetDevis" class="jcf-reset-appearance">
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
					<textarea class="projectDescText" rows="7" name="descDevis" placeholder="Description de votre projet... Merci de détailler le plus possible votre besoin."></textarea>	
				</div>
					<div class="form-group sendBtns">
						<div>
							<button class="btn btn-f-info sendFormBtn" id="idBtnDevis" name="btnDevis">
							<i class="fa fa-paper-plane" aria-hidden="true"></i>&nbsp;&nbsp;Envoyer ma demande de devis/contact
							</button>
						</div>
						<div class="form-group input-group captchaSecure">
							<span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
							<div class="g-recaptcha" data-sitekey="6LfNJTcdAAAAAG56njwYXkIbybIkLKlIlN5XFQ7F"></div>
						</div>
					</div>				            
				</div>
		</fieldset>			
	</form>
</div>
<?php $contactModalForm= ob_get_clean(); ?>