<div class='bg-contat col-sm-10 col-xl-5 mx-auto'>
    <div class=' info-contact'>
        <form id="" method="post" class="contact-form from-right" action="{{route('message.store')}}"
            enctype="multipart/form-data" novalidate>
            @csrf
            <fieldset>
                <div class="blocFormContact from-right2 animated">
                    <div class="col-lg-12 ">
                        <div class="form-group input-group ">
                            <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                            <input type="text" name="nom" class="form-control" placeholder="Nom / Prénom"
                                autocomplete="off">

                        </div>
                        <div class="form-group input-group ">
                            <span class="input-group-addon"><i class="fa fa-at" aria-hidden="true"></i></span>
                            <input type="text" name="email" class="form-control" placeholder="E-mail"
                                autocomplete="off">

                        </div>
                        <div class="form-group input-group ">
                            <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                            <input type="text" name="numero" class="form-control" placeholder="Téléphone"
                                autocomplete="off">
                        </div>
                        <div class="form-group input-group">
                            <textarea class="form-control" cols="30" rows="10" name="message"
                                placeholder="Message"></textarea>

                        </div>
                        <div class="submit">
                            <div class=" col-sm-1 col-md-1 col-lg-1">
                                <button class=" btn " type="submit">ENVOYER</button>
                            </div>

                        </div>

                    </div>

                </div>
            </fieldset>

        </form>
        <?php
    if (isset($_POST['message'])) {
        $position_arobase = strpos($_POST['email'], '@');
        if ($position_arobase === false)
            echo '<p>Votre email doit comporter un arobase.</p>';
        else {
            $retour = mail('lezartsduweb@gamil.com', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['email'], 'Nom: '.$_POST['nom'], 'Numeros: '.$_POST['numero']);
            if($retour)
                echo '<p>Votre message a été envoyé.</p>';
            else
                echo '<p>Erreur.</p>';
        }
    }
    ?>
    </div>
</div>