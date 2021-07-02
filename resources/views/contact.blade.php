@extends('master')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <p>Želite kampanju na digitalnim medijima?</p>

            <p>Želite da imate stvarno dobre rezultate u prodaji, a ne samo lajkove? </p>

            <p><b><u>Kontaktirajte me!</u></b></p>
            
            <p>Adresa je: srdjan1408@gmail.com</p>

            <p>Ili putem kontakt forme...</p>

            <form name="sentMessage" id="contactForm" novalidate>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Ime...</label>
                        <input type="text" class="form-control" placeholder="Ime..." id="ime" required data-validation-required-message="Molimo unesite vaše ime.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Email Adresa...</label>
                        <input type="email" class="form-control" placeholder="Email Adresa..." id="email" required data-validation-required-message="Molimo unesite vašu email adresu.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Poruka...</label>
                        <textarea rows="5" class="form-control" placeholder="Poruka..." id="poruka" required data-validation-required-message="Molimo unesite vašu poruku."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="row">
                    <div class="form-group col-xs-12">
                        <button type="submit" class="btn btn-default">Pošalji Poruku</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<hr>
@endsection
@section('title', "Kontakt")
@section('naslov', "Kontakt")
@section('podnaslov', "Imate li pitanja? Ja imam odgovore...(valjda).")
