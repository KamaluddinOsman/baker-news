<aside class="widget widget-popular-posts">
    <ul class="post-list-small">
        @if (isset($openions))
            @foreach($openions as $openion)
                <li class="post-list-small__item">
                    <article class="post-list-small__entry clearfix">
                        <div class="post-list-small__img-holder">
                            <div class="thumb-container thumb-100">
                                <a href="{{route('single-post',$openion->id)}}">
                                    <img data-src="images/{{$openion->image}}" src="images/{{$openion->image}}" alt="" class="post-list-small__img--rounded lazyload">
                                </a>
                            </div>
                        </div>
                        <div class="post-list-small__body">
                            <h3 class="post-list-small__entry-title">
                                <a href="{{route('single-post',$openion->id)}}">{{$openion->title}}</a>
                            </h3>
                            <ul class="entry__meta">
                                <li class="entry__meta-author">
                                    <a href="#">{{$openion->auther}}</a>
                                </li>
                                <li class="entry__meta-date">
                                    -
                                </li>
                                <li class="entry__meta-date">
                                    {{$openion->created_at}}
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
                                    <img data-src="images/slide1.jpg" src="images/slide1.jpg" alt="" class="post-list-small__img--rounded lazyload">
                                </a>
                            </div>
                        </div>
                        <div class="post-list-small__body">
                            <h3 class="post-list-small__entry-title">
                                <a href="#">Opinion 1</a>
                            </h3>
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
                    </article>
                </li>
                <li class="post-list-small__item">
                    <article class="post-list-small__entry clearfix">
                        <div class="post-list-small__img-holder">
                            <div class="thumb-container thumb-100">
                                <a href="#">
                                    <img data-src="images/slide2.jpg" src="images/slide2.jpg" alt="" class="post-list-small__img--rounded lazyload">
                                </a>
                            </div>
                        </div>
                        <div class="post-list-small__body">
                            <h3 class="post-list-small__entry-title">
                                <a href="#">Opinion 2</a>
                            </h3>
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
                    </article>
                </li>
                <li class="post-list-small__item">
                    <article class="post-list-small__entry clearfix">
                        <div class="post-list-small__img-holder">
                            <div class="thumb-container thumb-100">
                                <a href="#">
                                    <img data-src="images/slide3.jpg" src="images/slide3.jpg" alt="" class="post-list-small__img--rounded lazyload">
                                </a>
                            </div>
                        </div>
                        <div class="post-list-small__body">
                            <h3 class="post-list-small__entry-title">
                                <a href="#">Opinion 3</a>
                            </h3>
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
                    </article>
                </li>

        @endif
    </ul>
</aside>