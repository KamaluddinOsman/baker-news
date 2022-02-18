@extends('layouts.main', ['title' => $post->title])

@section('content')
    <div class="container">
        <ul class="breadcrumbs">
            <li class="breadcrumbs__item">
                <a href="#" class="breadcrumbs__url">الرئيسية</a>
                <i class="ui-arrow-left"></i>
            </li>
            <li class="breadcrumbs__item breadcrumbs__item--current">
                اخبار
            </li>
        </ul>
    </div>
    <div class="main-container container" id="main-container">
        <div class="row">
            <div class="col-lg-12 blog__content mb-72">
                <div class="content-box">
                       <article class="entry mb-0">
                            <div class="single-post__entry-header entry__header">
                                <h1 class="single-post__entry-title">
                                    {{$post->title}}
                                </h1>
                                <div class="entry__meta-holder">
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <a href="#">{{$post->auther}}</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            -
                                        </li>
                                        <li class="entry__meta-date">
                                            {{$post->created_at}}
                                        </li>
                                    </ul>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-views">
                                            <i class="ui-eye"></i>
                                            <span>1356</span>
                                        </li>
                                        <li class="entry__meta-comments">
                                            <a href="#">
                                                <i class="ui-chat-empty"></i>13
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div> <!-- end entry header -->
                            <div class="entry__img-holder">
                                <img src="{{asset('images/'.$post->image)}}" alt="" class="entry__img">
                            </div>
                            <div class="entry__article-wrap">
                                <!-- Share -->
                                <div class="entry__share">
                                    <div class="sticky-col">
                                        <div class="socials socials--rounded socials--large">
                                            <a class="social social-facebook" href="#" title="facebook" target="_blank" aria-label="facebook">
                                                <i class="ui-facebook"></i>
                                            </a>
                                            <a class="social social-twitter" href="#" title="twitter" target="_blank" aria-label="twitter">
                                                <i class="ui-twitter"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div> <!-- share -->
                                <div class="entry__article">
                                    <p>{{$post->body}}</p>
                                </div>
                            </div>
                            
                            @livewire('news-navigation', ['type_id' => $post->type_id])

                            @livewire('related', ['type_id' => $post->type_id])
                        </article>
                        <!-- Comments -->
                        @livewire('comments')
                        <!-- end comments -->

                    <!-- Comment Form -->
                    <div id="respond" class="comment-respond">
                        <div class="title-wrap">
                            <h5 class="comment-respond__title section-title">اترك تعليق</h5>
                        </div>
                        @livewire('comments-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
