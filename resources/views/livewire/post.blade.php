<div class="row card-row">
    @if( isset($posts) )
        @foreach($posts as $post)
            <div class="col-md-6">
                <article class="entry card">
                    <div class="entry__img-holder card__img-holder">
                        <a href="{{ route('single-post', ['id' => $post->id]) }}">
                            <div class="thumb-container thumb-70">
                                <img data-src="{{asset('images/'.$post->image) }}" src="{{asset('images/'.$post->image)}}" class="entry__img lazyload" alt="" />
                            </div>
                        </a>
                    </div>
                    <div class="entry__body card__body">
                        <div class="entry__header">
                            <h2 class="entry__title">
                                <a href="{{ route('single-post', ['id' => $post->id]) }}">{{$post->title}}</a>
                            </h2>
                            <ul class="entry__meta">
                                <li class="entry__meta-author">
                                    <a href="{{ route('single-post', ['id' => $post->id]) }}">{{$post->auther}}</a>
                                </li>
                                <li class="entry__meta-date">
                                    -
                                </li>
                                <li class="entry__meta-date">
                                    {{$post->created_at}}
                                </li>
                            </ul>
                        </div>
                        <div class="entry__excerpt">

                            {{ \Illuminate\Support\Str::limit($post->body, 150, $end = '...') }}
                            <span class="read-more-show hide_content"><i class="fa fa-angle-down"><a href="{{ route('single-post', ['id' => $post->id]) }}">Read more</a></i></span>
                        </div>
                    </div>
                </article>
            </div>
        @endforeach
    @else
        <div class="col-md-6">
            <article class="entry card">
                <div class="entry__img-holder card__img-holder">
                    <a href="#">
                        <div class="thumb-container thumb-70">
                            <img data-src="{{asset('images/news1.jpg') }}" src="{{asset('images/news1.jpg')}}" class="entry__img lazyload" alt="" />
                        </div>
                    </a>
                </div>
                <div class="entry__body card__body">
                    <div class="entry__header">
                        <h2 class="entry__title">
                            <a href="#">News 1</a>
                        </h2>
                        <ul class="entry__meta">
                            <li class="entry__meta-author">
                                <a href="#">Admin</a>
                            </li>
                            <li class="entry__meta-date">
                                -
                            </li>
                            <li class="entry__meta-date">
                                {{ now() }}
                            </li>
                        </ul>
                    </div>
                    <div class="entry__excerpt">

                        {{-- {{ \Illuminate\Support\Str::limit($post->body, 150, $end = '...') }} --}}
                        <span class="read-more-show hide_content">
                            <i class="fa fa-angle-down">
                                <a href="#">Read more</a>
                            </i>
                        </span>
                    </div>
                </div>
            </article>
        </div>
        <div class="col-md-6">
            <article class="entry card">
                <div class="entry__img-holder card__img-holder">
                    <a href="#">
                        <div class="thumb-container thumb-70">
                            <img data-src="{{asset('images/news2.jpg') }}" src="{{asset('images/news2.jpg')}}" class="entry__img lazyload" alt="" />
                        </div>
                    </a>
                </div>
                <div class="entry__body card__body">
                    <div class="entry__header">
                        <h2 class="entry__title">
                            <a href="#">News 2</a>
                        </h2>
                        <ul class="entry__meta">
                            <li class="entry__meta-author">
                                <a href="#">Admin</a>
                            </li>
                            <li class="entry__meta-date">
                                -
                            </li>
                            <li class="entry__meta-date">
                                {{ now() }}
                            </li>
                        </ul>
                    </div>
                    <div class="entry__excerpt">

                        {{-- {{ \Illuminate\Support\Str::limit($post->body, 150, $end = '...') }} --}}
                        <span class="read-more-show hide_content">
                            <i class="fa fa-angle-down">
                                <a href="#">Read more</a>
                            </i>
                        </span>
                    </div>
                </div>
            </article>
        </div>
        <div class="col-md-6">
            <article class="entry card">
                <div class="entry__img-holder card__img-holder">
                    <a href="#">
                        <div class="thumb-container thumb-70">
                            <img data-src="{{asset('images/news3.jpg') }}" src="{{asset('images/news3.jpg')}}" class="entry__img lazyload" alt="" />
                        </div>
                    </a>
                </div>
                <div class="entry__body card__body">
                    <div class="entry__header">
                        <h2 class="entry__title">
                            <a href="#">News 3</a>
                        </h2>
                        <ul class="entry__meta">
                            <li class="entry__meta-author">
                                <a href="#">Admin</a>
                            </li>
                            <li class="entry__meta-date">
                                -
                            </li>
                            <li class="entry__meta-date">
                                {{ now() }}
                            </li>
                        </ul>
                    </div>
                    <div class="entry__excerpt">

                        {{-- {{ \Illuminate\Support\Str::limit($post->body, 150, $end = '...') }} --}}
                        <span class="read-more-show hide_content">
                            <i class="fa fa-angle-down">
                                <a href="#">Read more</a>
                            </i>
                        </span>
                    </div>
                </div>
            </article>
        </div>
        <div class="col-md-6">
            <article class="entry card">
                <div class="entry__img-holder card__img-holder">
                    <a href="#">
                        <div class="thumb-container thumb-70">
                            <img data-src="{{asset('images/news4.jpg') }}" src="{{asset('images/news4.jpg')}}" class="entry__img lazyload" alt="" />
                        </div>
                    </a>
                </div>
                <div class="entry__body card__body">
                    <div class="entry__header">
                        <h2 class="entry__title">
                            <a href="#">News 4</a>
                        </h2>
                        <ul class="entry__meta">
                            <li class="entry__meta-author">
                                <a href="#">Admin</a>
                            </li>
                            <li class="entry__meta-date">
                                -
                            </li>
                            <li class="entry__meta-date">
                                {{ now() }}
                            </li>
                        </ul>
                    </div>
                    <div class="entry__excerpt">

                        {{-- {{ \Illuminate\Support\Str::limit($post->body, 150, $end = '...') }} --}}
                        <span class="read-more-show hide_content">
                            <i class="fa fa-angle-down">
                                <a href="#">Read more</a>
                            </i>
                        </span>
                    </div>
                </div>
            </article>
        </div>
    @endif
</div>


<!-- Pagination -->
<nav class="pagination">
    <span class="pagination__page pagination__page--current">1</span>
    <a href="#" class="pagination__page">2</a>
    <a href="#" class="pagination__page">3</a>
    <a href="#" class="pagination__page">4</a>
    <a href="#" class="pagination__page pagination__icon pagination__page--next"><i class="ui-arrow-left"></i></a>
</nav>