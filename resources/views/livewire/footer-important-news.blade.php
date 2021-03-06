<ul class="post-list-small">
    @if ( isset($importants) )
        @foreach($importants as $important)
            <li class="post-list-small__item">
                <article class="post-list-small__entry clearfix">
                    <div class="post-list-small__img-holder">
                        <div class="thumb-container thumb-100">
                            <a href="{{ route('single-post', ['id' => $important->id]) }}">
                                <img data-src="{{ asset('images').'/'. $important->image }}" src="{{ asset('images/').'/'. $important->image }}" alt="" class="post-list-small__img--rounded lazyload">
                            </a>
                        </div>
                    </div>
                    <div class="post-list-small__body">
                        <h3 class="post-list-small__entry-title">
                            <a href="{{ route('single-post', ['id' => $important->id]) }}">{{ $important->title }}</a>
                        </h3>
                        <ul class="entry__meta">
                            <li class="entry__meta-author">
                                <a href="#">{{ $important->author }}</a>
                            </li>
                            <li class="entry__meta-date">
                                -
                            </li>
                            <li class="entry__meta-date">
                                {{ $important->created_at }}
                            </li>
                        </ul>
                    </div>
                </article>
            </li>
        @endforeach
        @else
            <li class="post-list-small__item">
                <article class="post-list-small__entry clearfix">
                    <div class="post-list-small__img-holder">
                        <div class="thumb-container thumb-100">
                            <a href="#">
                                <img data-src="{{asset('img/content/post_small/post_small_1.jpg')}}" src="{{asset('images/best2.jpg')}}" alt="" class="post-list-small__img--rounded lazyload">
                            </a>
                        </div>
                    </div>
                    <div class="post-list-small__body">
                        <h3 class="post-list-small__entry-title">
                            <a href="#">?????????????? ??? ???????? ??????????</a>
                        </h3>
                        <ul class="entry__meta">
                            <li class="entry__meta-author">
                                <a href="#">?????? ?????????? ??????????</a>
                            </li>
                            <li class="entry__meta-date">
                                -
                            </li>
                            <li class="entry__meta-date">
                                1 ???????????? 2019
                            </li>
                        </ul>
                    </div>
                </article>
            </li>
            <li class="post-list-small__item">
                <article class="post-list-small__entry clearfix">
                    <div class="post-list-small__img-holder">
                        <div class="thumb-container thumb-100">
                            <a href="#">
                                <img data-src="{{asset('images/best1.jpg')}}" src="{{asset('images/best1.jpg')}}" alt="" class="post-list-small__img--rounded lazyload">
                            </a>
                        </div>
                    </div>
                    <div class="post-list-small__body">
                        <h3 class="post-list-small__entry-title">
                            <a href="#">?????????? ???????? ?????????????? ???????????? ???? ?????? ???203??? ???????? ?????? ????????????????</a>
                        </h3>
                        <ul class="entry__meta">
                            <li class="entry__meta-author">
                                <a href="#">?????? ?????????? ??????????</a>
                            </li>
                            <li class="entry__meta-date">
                                -
                            </li>
                            <li class="entry__meta-date">
                                1 ???????????? 2019
                            </li>
                        </ul>
                    </div>
                </article>
            </li>
    @endif
</ul>