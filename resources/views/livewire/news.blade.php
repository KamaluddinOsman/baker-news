<div class="tabs__content tabs__content-trigger tab-post__tabs-content">
    <div class="tabs__content-pane tabs__content-pane--active">
        <div class="row card-row">
            @if (isset($posts))
                @foreach($posts as $post)
                    <div class="col-6">
                        <article class="entry card">
                            <div class="entry__img-holder card__img-holder">
                                <a href="{{ route('single-post', ['id' => $post->id]) }}">
                                    <div class="thumb-container thumb-70">
                                        <img data-src="{{ asset('images/'.$post->image) }}" src="{{ asset('images/'.$post->image) }}" class="entry__img lazyload" alt="" />
                                    </div>
                                </a>
                            </div>
                            <div class="entry__body card__body text-right">
                                <div class="entry__header">
                                    <h2 class="entry__title">
                                        <a href="{{ route('single-post', ['id' => $post->id]) }}">{{$post->title}}</a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <a href="#">{{$post->author}}</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            -
                                        </li>
                                        <li class="entry__meta-date">
                                            {{$post->created_at}}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                    </div>
                @endforeach
                @else
                    <div class="col-6">
                        <article class="entry card">
                            <div class="entry__img-holder card__img-holder">
                                <a href="#">
                                    <div class="thumb-container thumb-70">
                                        <img data-src="{{ asset('images/news1.jpg') }}" src="{{ asset('images/news1.jpg') }}" class="entry__img lazyload" alt="" />
                                    </div>
                                </a>
                            </div>
                            <div class="entry__body card__body text-right">
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
                            </div>
                        </article>
                    </div>
                    <div class="col-6">
                        <article class="entry card">
                            <div class="entry__img-holder card__img-holder">
                                <a href="#">
                                    <div class="thumb-container thumb-70">
                                        <img data-src="{{ asset('images/news2.jpg') }}" src="{{ asset('images/news2.jpg') }}" class="entry__img lazyload" alt="" />
                                    </div>
                                </a>
                            </div>
                            <div class="entry__body card__body text-right">
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
                            </div>
                        </article>
                    </div>
                    <div class="col-6">
                        <article class="entry card">
                            <div class="entry__img-holder card__img-holder">
                                <a href="#">
                                    <div class="thumb-container thumb-70">
                                        <img data-src="{{ asset('images/news3.jpg') }}" src="{{ asset('images/news3.jpg') }}" class="entry__img lazyload" alt="" />
                                    </div>
                                </a>
                            </div>
                            <div class="entry__body card__body text-right">
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
                            </div>
                        </article>
                    </div>
                    <div class="col-6">
                        <article class="entry card">
                            <div class="entry__img-holder card__img-holder">
                                <a href="#">
                                    <div class="thumb-container thumb-70">
                                        <img data-src="{{ asset('images/news4.jpg') }}" src="{{ asset('images/news4.jpg') }}" class="entry__img lazyload" alt="" />
                                    </div>
                                </a>
                            </div>
                            <div class="entry__body card__body text-right">
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
                            </div>
                        </article>
                    </div>
                    
            @endif
        </div>
    </div>
</div>