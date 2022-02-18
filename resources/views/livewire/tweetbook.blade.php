<div class="row">
    <div class="col-lg-6">
        @if (isset($tweets_books))
            @foreach($tweets_books as $tweet_book)
                <article class="entry thumb thumb--size-2">
                    <div class="entry__img-holder thumb__img-holder" style="background-image: url('images/{{$tweet_book->image}}');">
                        <div class="bottom-gradient"></div>
                        <div class="thumb-text-holder thumb-text-holder--1">
                            <h2 class="thumb-entry-title">
                                <a href="{{ route('single-post', ['id' => $tweet_book->id]) }}">{{$tweet_book->title}}</a>
                            </h2>
                            <ul class="entry__meta">
                                <li class="entry__meta-author">
                                    <a href="#">{{$tweet_book->author}}</a>
                                </li>
                                <li class="entry__meta-date">
                                    {{$tweet_book->created_at}}
                                </li>
                            </ul>
                        </div>
                        <a href="{{ route('single-post', ['id' => $tweet_book->id]) }}" class="thumb-url"></a>
                    </div>
                </article>
            @endforeach
            @else
                <article class="entry thumb thumb--size-2">
                    <div class="entry__img-holder thumb__img-holder" style="background-image: url('images/blog3.jpg');">
                        <div class="bottom-gradient"></div>
                        <div class="thumb-text-holder thumb-text-holder--1">
                            <h2 class="thumb-entry-title">
                                <a href="#">Tweetbook 1</a>
                            </h2>
                            <ul class="entry__meta">
                                <li class="entry__meta-author">
                                    <a href="#">Admin</a>
                                </li>
                                <li class="entry__meta-date">
                                    {{ now() }}
                                </li>
                            </ul>
                        </div>
                        <a href="#" class="thumb-url"></a>
                    </div>
                </article>
        @endif
    </div>

    @livewire('sub-tweetbook')

</div>