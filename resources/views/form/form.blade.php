<div class='bg-contat col-sm-10 col-xl-5 mx-auto'>
    <div class=' info-contact'>
        <form id="" method="post" class="contact-form from-right" action="{{route('message.store')}}"
            enctype="multipart/form-data" novalidate>
            @csrf
            <fieldset>
                <div class="col-lg-12 "></div>
                <div class="blocFormContact">
                    <div class="col-lg-12 ">
                        <div class="form-group input-group from-right">
                            <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                            <input type="text" name="nom" class="form-control" placeholder="Nom / Prénom"
                                autocomplete="off">

                        </div>
                        <div class="form-group input-group from-right">
                            <span class="input-group-addon"><i class="fa fa-at" aria-hidden="true"></i></span>
                            <input type="text" name="email" class="form-control" placeholder="E-mail"
                                autocomplete="off">

                        </div>
                        <div class="form-group input-group from-right">
                            <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                            <input type="text" name="numero" class="form-control" placeholder="Téléphone"
                                autocomplete="off">
                        </div>
                        <div class="form-group input-group from-right">
                            <textarea class="form-control" cols="30" rows="8" name="message"
                                placeholder="Message"></textarea>

                        </div>
                        <div class="submit">
                            <div class=" col-sm-1 col-md-1 col-lg-1 from-right">
                                <button class=" btn " type="submit">ENVOYER</button>
                            </div>

                        </div>

                    </div>

                </div>
            </fieldset>

        </form>
    </div>
</div>