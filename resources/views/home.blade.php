@extends('layouts.main', ['title' => 'باكر نيوز - الرئيسية'])

@section('content')

    <div class="container">
        @livewire('breaking-news')
    </div>

    <div class="container">
        @livewire('ad-space-one')
    </div>
    <div class="container">
        <section class="section mb-0 mt-5">
            <div class="title-wrap title-wrap--line title-wrap--pr">
                <h3 class="section-title">الاخبار الهامة</h3>
            </div>
            @livewire('important-news')
        </section>
    </div>
    <div class="main-container container pt-24" id="main-container">
        <div class="row">
            <div class="col-lg-8 blog__content">
                <section class="section tab-post mb-16">
                    <div class="title-wrap title-wrap--line" style="margin-bottom: 14px; padding-top: 25px;">
                        <h3 class="section-title">اخبار</h3>
                    </div>
                    @livewire('news')
                </section>
            </div>
            <aside class="col-lg-4 sidebar sidebar--right">
                <div class="title-wrap title-wrap--line" style="margin-bottom: 14px; padding-top: 25px;">
                    <h3 class="section-title">راي</h3>
                </div>

                @livewire('opinion')

                @livewire('socials-media')

            </aside>
        </div>
        
        @livewire('ad-space-two')
        <section class="section mb-0 text-right">
            <div class="row">
                <div class="col-md-6">
                    <div class="title-wrap title-wrap--line">
                        <h3 class="section-title">اقتصاد</h3>
                    </div>
                    @livewire('economie')
                </div>
                <div class="col-md-6">
                    <div class="title-wrap title-wrap--line">
                        <h3 class="section-title">رياضة</h3>
                    </div>
                    @livewire('sports')
                </div>
                <div class="col-md-6">
                    <div class="title-wrap title-wrap--line">
                        <h3 class="section-title">حوادث ومنوعات</h3>
                    </div>
                    @livewire('events-and-mix')
                </div>
                <div class="col-md-6">
                    <div class="title-wrap title-wrap--line">
                        <h3 class="section-title">تويتبوك</h3>
                    </div>

                    @livewire('tweetbook')

                </div>
            </div>
        </section>
    </div>
@endsection