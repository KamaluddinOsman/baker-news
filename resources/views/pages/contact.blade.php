@extends('layouts.main', ['title' => 'باكر نيوز - تواصل معنا'])

@section('content')
    <div class="container">
        <ul class="breadcrumbs">
            <li class="breadcrumbs__item">
                <a href="/" class="breadcrumbs__url">الرئيسية</a>
                <i class="ui-arrow-left"></i>
            </li>
            <li class="breadcrumbs__item breadcrumbs__item--current">
                تواصل معنا
            </li>
        </ul>
    </div>
    <div class="main-container container" id="main-container">
        <div class="blog__content mb-72">
            <h1 class="page-title">تواصل معنا</h1>
            <div class="row justify-content-center">
                <div class="col-lg-8 m-auto">
                    <form class="contact-form mt-30 mb-30" method="post" action="{{route('contact')}}">
                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="contact-name">
                                    <label for="name">الاسم</label>
                                    <input name="name" id="name" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-email">
                                    <label for="email">البريدك الالكتروني</label>
                                    <input name="email" id="email" type="email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="contact-subject">
                                    <label for="address">العنوان</label>
                                    <input name="address" id="address" type="text">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="contact-content">
                                    <label for="content">الرسالة</label>
                                    <textarea id="content" name="content" rows="7" required="required"></textarea>
                                </div>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-lg btn-color btn-button" value="ارسال الرسالة">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
