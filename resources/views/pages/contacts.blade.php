@extends('layouts.app')

@section('title', 'Contact')

@section('content')

    @include('partials.header')

    <!-- Breadcrumb area Start -->
    <div class="breadcrumb-area pt-65 pb-70 bg-img">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h3>Contact us</h3>
                <ol class="breadcrumb breadcrumb-list">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Contact us</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- Breadcrumb area End -->

    <!-- Contact Form Area Start -->
    <section class="register-area white-bg ptb-80">
        <div class="container">
            <h3 class="login-header text-center mb-40">Contact us</h3>

            <div class="row">
                <!-- Contact Form -->
                <div class="col-xl-12">
                    <div class="register-contact clearfix">
                        <form
                            id="contact-form"
                            class="contact-form"
                            action="{{ route('contact.send') }}"
                            method="POST"
                        >
                            @csrf
                            <input type="hidden" name="page" id="page" value="contact">
                            <input type="hidden" name="subject">

                            <div class="address-wrapper row">
                                <div class="col-md-6">
                                    <div class="address-fname mb-20">
                                        <input
                                            class="form-control"
                                            type="text"
                                            name="name"
                                            placeholder="Name"
                                            required
                                        >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="address-phone mb-20">
                                        <input
                                            class="form-control"
                                            type="text"
                                            name="phone"
                                            placeholder="Phone"
                                            required
                                        >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="address-email mb-20">
                                        <input
                                            class="form-control"
                                            type="email"
                                            name="email"
                                            placeholder="Email"
                                            required
                                        >
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="address-textarea mb-20">
                                        <textarea
                                            name="message"
                                            class="form-control"
                                            placeholder="Write your message..."
                                            rows="5"
                                            required
                                        ></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="footer-content mail-content clearfix">
                                <div class="send-email float-md-right">
                                    <input value="Отправить" class="return-customer-btn" type="submit">
                                </div>
                            </div>

                            <p class="form-message"></p>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- Contact Form Area End -->

    @include('partials.footer')

@endsection
