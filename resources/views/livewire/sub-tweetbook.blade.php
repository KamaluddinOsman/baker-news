
<div class="col-lg-6">
    <ul class="post-list-small post-list-small--dividers post-list-small--arrows mb-24">
        @if (isset($tweets_books))
            @foreach($tweets_books as $tweet_book)
                <li class="post-list-small__item">
                    <article class="post-list-small__entry">
                        <div class="post-list-small__body">
                            <h3 class="post-list-small__entry-title">
                                <a href="{{ route('single-post', ['id' => $tweet_book->id]) }}">{{$tweet_book->title}}</a>
                            </h3>
                        </div>
                    </article>
                </li>
            @endforeach
            @else
                <li class="post-list-small__item">
                    <article class="post-list-small__entry">
                        <div class="post-list-small__body">
                            <h3 class="post-list-small__entry-title">
                                <a href="#">Tweetbook 1</a>
                            </h3>
                        </div>
                    </article>
                </li>
                <li class="post-list-small__item">
                    <article class="post-list-small__entry">
                        <div class="post-list-small__body">
                            <h3 class="post-list-small__entry-title">
                                <a href="#">Tweetbook 2</a>
                            </h3>
                        </div>
                    </article>
                </li>
                <li class="post-list-small__item">
                    <article class="post-list-small__entry">
                        <div class="post-list-small__body">
                            <h3 class="post-list-small__entry-title">
                                <a href="#">Tweetbook 3</a>
                            </h3>
                        </div>
                    </article>
                </li>
                <li class="post-list-small__item">
                    <article class="post-list-small__entry">
                        <div class="post-list-small__body">
                            <h3 class="post-list-small__entry-title">
                                <a href="#">Tweetbook 4</a>
                            </h3>
                        </div>
                    </article>
                </li>
                <li class="post-list-small__item">
                    <article class="post-list-small__entry">
                        <div class="post-list-small__body">
                            <h3 class="post-list-small__entry-title">
                                <a href="#">Tweetbook 5</a>
                            </h3>
                        </div>
                    </article>
                </li>
        @endif
    </ul>
</div>