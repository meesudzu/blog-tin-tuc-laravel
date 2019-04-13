@extends('layout.index')

@section('style')

<link rel="stylesheet" type="text/css" href="{{ asset('user_assets') }}/styles/contact.css">
<link rel="stylesheet" type="text/css" href="{{ asset('user_assets') }}/styles/contact_responsive.css">

@endsection

@section('container')

<!-- Login/Register -->

<!-- Contact -->

<div class="contact">
    <div class="container">
        <div class="row">

            <!-- Contact Content -->
            <div class="col-lg-4 contact_col">
                <div class="contact_content">
                    <div class="contact_title">Get in Touch</div>
                    <div class="contact_text">
                        <p> Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero.Lorem ipsum dolor sit amet, consectetur adipiscin.</p>
                    </div>
                    <div class="contact_info">
                        <ul>
                            <li class="d-flex flex-row align-items-center justify-content-start">
                                <div class="contact_info_box d-flex flex-column align-items-center justify-content-center">
                                    <div class="contact_info_icon"><img src="images/icon_9.svg" alt=""></div>
                                </div>
                                <div class="contact_info_content">1481 Creekside Lane Avila Beach, CA 931</div>
                            </li>
                            <li class="d-flex flex-row align-items-center justify-content-start">
                                <div class="contact_info_box d-flex flex-column align-items-center justify-content-center">
                                    <div class="contact_info_icon"><img src="images/icon_10.svg" alt=""></div>
                                </div>
                                <div class="contact_info_content">+53 345 7953 32453</div>
                            </li>
                            <li class="d-flex flex-row align-items-center justify-content-start">
                                <div class="contact_info_box d-flex flex-column align-items-center justify-content-center">
                                    <div class="contact_info_icon"><img src="images/icon_11.svg" alt=""></div>
                                </div>
                                <div class="contact_info_content">yourmail@gmail.com</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-8 contact_col">
                <div class="contact_form_container">
                    <div class="contact_title">Send us a message</div>
                    <form action="#" id="contact_form" class="contact_form" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="contact_input" placeholder="Name" required="required">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="contact_input" placeholder="E-mail" required="required">
                            </div>
                        </div>
                        <input type="email" class="contact_input" placeholder="E-mail" required="required">
                        <textarea class="contact_input contact_textarea" placeholder="Message" required="required"></textarea>
                        <button class="contact_button trans_200">submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection
