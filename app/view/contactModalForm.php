
<?php ob_start(); ?>
<div class="modal_form">
	<form id="contactForm" action="" class="contact-form">
	    <fieldset>
			<div class="col-xs-12 col-md-6 col-lg-6">
				<h5>Vos coordonnées</h5>
				<hr>
	            <div class="form-group input-group">
	            	<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
	                <input type="text" name="nomDevis" class="form-control" placeholder="Nom / Prénom" autocomplete="off"> 
	                <span class="input-group-addon">*</span>
	            </div>
	            <div class="form-group input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 noPM">
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 noPM">
						<div class="i-checks">
    						<div class="iradio_minimal-grey checked" style="position: relative;"><input type="radio" id="idRadioP" name="typeUserDevis" value="1" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div> <i></i> 
							<label id="idRadioP_label" for="idRadioP" class="bold">Particulier</label>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 noPM">
						<div class="i-checks">
							<div class="iradio_minimal-grey" style="position: relative;"><input type="radio" id="idRadioA" name="typeUserDevis" value="2" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div> <i></i> 
							<label id="idRadioA_label" for="idRadioA">Association</label>
						</div>
					</div>								
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 noPM">
						<div class="i-checks">
							<div class="iradio_minimal-grey" style="position: relative;"><input type="radio" id="idRadioS" name="typeUserDevis" value="3" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div> <i></i> 
							<label id="idRadioS_label" for="idRadioS">Société</label>
						</div>
					</div>
	            </div>
	            <div id="blocEnseigne" class="form-group input-group" style="display: none;" wfd-invisible="true">
	                <input type="text" name="enseigneDevis" class="form-control" autocomplete="off"> 
	                <span class="input-group-addon">*</span>
	            </div>
	            <div class="form-group input-group">
	            	<span class="input-group-addon"><i class="fa fa-at" aria-hidden="true"></i></span>
	                <input type="email" name="emailDevis" class="form-control" placeholder="E-mail" autocomplete="off"> 
	                <span class="input-group-addon">*</span>
	            </div>
	            <div class="form-group input-group">
	            	<span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
	                <input type="text" name="telDevis" class="form-control" placeholder="Téléphone" autocomplete="off"> 
	            </div>
	            <div class="form-group input-group">
	            	<span class="input-group-addon"><i class="fa fa-link" aria-hidden="true"></i></span>
	                <input type="text" name="urlDevis" class="form-control" placeholder="Adresse site internet (si existant)" autocomplete="off"> 
	            </div>
	    		<div class="i-checks">
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 noPM">
						<div class="icheckbox_minimal-grey" style="position: relative;"><input type="checkbox" id="idChkRGPDDevis" name="chkRGPDDevis" value="1" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div> <i></i> 
					</div>
					<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11 noPM">
						<label class="label_rgpd" for="idChkRGPDDevis">En soumettant ce formulaire, j'accepte que les informations saisies soient exploitées dans le cadre de la demande de devis et de la relation commerciale qui peut en découler.</label>
					</div>
				</div>
				<div class="form-group input-group">
	            	<span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
	                <input type="text" name="captchaDevis" class="form-control" placeholder="5 + 4 = ?" autocomplete="off"> 
	                <span class="input-group-addon">*</span>
	            </div>							
				<div class="msgFormDevis">
		            <p class="alert alert-info">
		            	<i class="fa fa-info-circle" aria-hidden="true"></i>
		            	<b>Demande de devis gratuit.</b> Réponse moyenne sous 72h.<br> 
		            	Merci de détailler au maximum votre projet pour une réponse précise.
		            </p>								
				</div>
	        </div>
		        <div class="col-xs-12 col-md-6 col-lg-6">
				<h5>Votre projet</h5>
				<hr>				        					        	
	            <div class="form-group input-group select-input-group">
	                <span class="jcf-select jcf-unselectable"><select name="typeProjetDevis" style="position: absolute; height: 100%; width: 100%;" class="jcf-reset-appearance">
	                	<option value="" selected="" disabled="">Type de projet</option>
	                	<option value="Site vitrine standard">Site vitrine [Standard]</option>
	                	<option value="Site vitrine personnalisé">Site vitrine [Personnalisé]</option>
	                	<option value="Plateforme e-commerce">Plateforme e-commerce</option>
	                	<option value="Application mobile">Application mobile</option>
	                	<option value="Conception graphique">Conception graphique</option>
	                	<option value="Développement spécifique">Développement spécifique</option>
	                	<option value="Autre">Autre</option>
	                </select><span class="jcf-select-text"><span class="">Type de projet</span></span><span class="jcf-select-opener"></span></span>
	                <span class="input-group-addon noBorder">*</span>
	            </div>
	            <div class="form-group input-group">
	            	<textarea class="form-control" cols="30" rows="10" name="descDevis" placeholder="Description de votre projet... Merci de détailler le plus possible votre besoin afin de faciliter nos futurs échanges."></textarea>
	                <span class="input-group-addon">*</span>
	           </div>
	            <div class="form-group text-right">
					<button class="btn btn-f-info" id="idBtnDevis" name="btnDevis">
						<i class="fa fa-paper-plane" aria-hidden="true"></i>&nbsp;&nbsp;Envoyer ma demande de devis
					</button>
				</div>				            
			</div>
		</fieldset>			
	</form>
    <a href="#" class="modal_close">&times;</a>
</div>
<?php $contactModalForm= ob_get_clean(); ?>