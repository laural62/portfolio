<section id="section_contact" class="min-vh-100" >
                <div class="text-white text-center">
                    <h2>Me Contacter ?</h2>
                    <p>Il suffit de remplir ce questionnaire !</p>
                </div>

                <form id="formportfolio" class="d-flex justify-content-center align-items-center flex-column gap-3" action="traitement.php" method="post">
                    <div class="row container col-md-10">
                        <div class="col">
                            <label for="nom" class="text-white">Nom *</label>
                            <input type="text" class="form-control" required name="nom" id="nom" placeholder="Saisissez votre nom...">
                        </div>
                        <div class="col">
                            <label for="prenom" class="text-white">Prénom</label>
                            <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Saisissez votre prénom...">
                        </div>
                    </div>
                    <div class="row container col-md-10">
                        <div class="col">
                            <label for="telephone" class="text-white">Téléphone</label>
                            <input type="tel" class="form-control" name="telephone" id="telephone" placeholder="Saisissez votre téléphone...">
                        </div>
                        <div class="col">
                            <label for="email" class="text-white">Email *</label>
                            <input type="Email" class="form-control" required name="email" id="email" placeholder="Saisissez votre email...">
                        </div>
                    </div>
                    <div class="row container col-md-10">
                        <div class="container">
                            <label for="message" class="text-white">Message *</label>
                            <textarea type="text" name="message" required id="message" placeholder="Saisissez votre message..." class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row container col-md-10">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkChecked">
                            <label class="form-check-label text-white" for="checkChecked">
                                En cochant cette case, vous acceptez les conditions generales d'utilisation et la politique de confidentialité.
                            </label>
                            <br>
                            <i class="text-white">*Tous les champs marqués par ce symbole sont obligatoire.</i>
                        </div>
                    </div>
                    <p class="text-white"><?php echo $_GET["msg"];?></p>

                    <div>
                        <input type="submit" class="btn-envoi p-2 g-recaptcha" 
                            data-sitekey="6Le0OmYrAAAAAHdNAXQLDfOqtJHrWTLgL5GZHRfp" 
                            data-callback='onSubmit' 
                            data-action='submit' value="Envoyer">
                    </div>
                </form>
</section>