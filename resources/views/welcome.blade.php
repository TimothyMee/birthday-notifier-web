<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CERTIport is a Certificate-Portal which is aimed at putting an end to the issue forgery of institution certification">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="/assets/favicon.png">
    <!-- Site Title  -->
    <title>Birthday-notifier</title>
    @extends('layouts.form_styles')
</head>
<body>

<div class="bg-container-contact100" style="background-image: url(/assets/form_assets/images/bg-03.jpg);"></div>

<div class="container-contact100">
    <div class="wrap-contact100">
        <div class="contact100-form-title" style="background-image: url(/assets/form_assets/images/bg-04.jpeg);">
            <span>Add Birthday</span>
        </div>

        <form class="contact100-form validate-form" action="#" method="post">
            {{csrf_field()}}
            <div class="wrap-input100 validate-input">
                <input id="name" class="input100" type="text" name="name" placeholder="Full Name" style="padding-left:50px;">
                <span class="focus-input100"></span>
                <label class="label-input100" for="name">
                    <span class="lnr lnr-user m-b-2"></span>
                </label>
            </div>

            <div class="wrap-input100 validate-input">
                <input id="phone" class="input100" type="text" name="phone" placeholder="Eg. +1 800 000000">
                <span class="focus-input100"></span>
                <label class="label-input100" for="phone">
                    <span class="lnr lnr-smartphone m-b-2"></span>
                </label>
            </div>

            <div class="wrap-input100 validate-input">
                <select name="friend-type" id="type" class="input100">
                    <option value="0" selected disabled>Friend Type</option>
                    <option value="">Siblings</option>
                    <option value="">Colleague</option>
                    <option value="">General Friends</option>
                    <option value="">Closer Friends</option>
                    <option value="">Class mates</option>
                    <option value="">Old friends</option>
                    <option value="">Married friends</option>
                </select>
                <span class="focus-input100"></span>
                <label class="label-input100" for="type">
                    <span class="lnr lnr-user m-b-2"></span>
                </label>
            </div>

            <div class="wrap-input100 validate-input">
                <textarea id="message" class="input100" name="message" placeholder="Custom message... if any.."></textarea>
                <span class="focus-input100"></span>
                <label class="label-input100 rs1" for="message">
                    <span class="lnr lnr-bubble"></span>
                </label>
            </div>

            <div class="container-contact100-form-btn">
                <button class="contact100-form-btn">
                    Add
                </button>

                <a href="#" style="color: red; margin-left:10%; margin-top:2%;">
                    return home
                </a>
            </div>


        </form>
    </div>
</div>



@extends('layouts.form_scripts')

<!-- Global site tag (gtag.js) - Google Analytics -->
{{--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>--}}
</body>
</html>