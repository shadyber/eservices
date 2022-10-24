@extends('layouts.app')
@section('title','Contact Us')
@section('content')

    <section class="full-screen fw-main-row fixed-height" style="background-image: url('/images/01.jpg');height:450px;">
        <div class="fw-container centered-container tac">
            <div class="container tac">


            </div>
        </div>
    </section>

     <section class="fw-main-row pt40 pb30">
        <div class="fw-container">
            <h2 class="heading-decor">{{__('Contacts')}}</h2>
            <div class="fw-row pt10">
                <div class="fw-col-xs-12 fw-col-sm-4 contact-col">
                    <div class="icon icon-font icon-placeholder-1"></div>
                    <p>ress,<br>{{__('Country')}}</p>
                </div>
                <div class="fw-col-xs-12 fw-col-sm-4 contact-col">
                    <div class="icon icon-font icon-telephone-1"></div>
                    <p><a href="tel:"> </a><br><a href="tel:"> </a></p>
                </div>
                <div class="fw-col-xs-12 fw-col-sm-4 contact-col">
                    <div class="icon icon-font icon-envelope"></div>
                    <p><a href="mailto:support@promo-themes.com">support@teleaddis.com</a></p>
                </div>
            </div>
        </div>
    </section>

@endsection
