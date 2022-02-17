<div id="owl-posts" class="owl-carousel owl-theme owl-carousel--arrows-outside" style="direction: ltr;">
    @if ( isset($importants) )
        @foreach($importants as $important)
            <article class="entry thumb thumb--size-2">
                <div class="entry__img-holder thumb__img-holder" style="background-image: url('images/{{$important->image}}')">
                    <div class="bottom-gradient"></div>
                    <div class="thumb-text-holder">
                        <h2 class="thumb-entry-title">
                            <a href="{{route('single-post',$important->id)}}">{{$important->title}}</a>
                        </h2>
                    </div>
                    <a href="{{route('single-post',$important->id)}}" class="thumb-url"></a>
                </div>
            </article>
        @endforeach
        @else
            <article class="entry thumb thumb--size-2">
                <div class="entry__img-holder thumb__img-holder" style="background-image: url('images/news1.jpg')">
                    <div class="bottom-gradient"></div>
                    <div class="thumb-text-holder">
                        <h2 class="thumb-entry-title">
                            <a href="#">Article 1</a>
                        </h2>
                    </div>
                    <a href="#" class="thumb-url"></a>
                </div>
            </article>
            <article class="entry thumb thumb--size-2">
                <div class="entry__img-holder thumb__img-holder" style="background-image: url('images/news2.jpg')">
                    <div class="bottom-gradient"></div>
                    <div class="thumb-text-holder">
                        <h2 class="thumb-entry-title">
                            <a href="#">Article 2</a>
                        </h2>
                    </div>
                    <a href="#" class="thumb-url"></a>
                </div>
            </article>
            <article class="entry thumb thumb--size-2">
                <div class="entry__img-holder thumb__img-holder" style="background-image: url('images/news3.jpg')">
                    <div class="bottom-gradient"></div>
                    <div class="thumb-text-holder">
                        <h2 class="thumb-entry-title">
                            <a href="#">Article 3</a>
                        </h2>
                    </div>
                    <a href="#" class="thumb-url"></a>
                </div>
            </article>
            <article class="entry thumb thumb--size-2">
                <div class="entry__img-holder thumb__img-holder" style="background-image: url('images/news4.jpg')">
                    <div class="bottom-gradient"></div>
                    <div class="thumb-text-holder">
                        <h2 class="thumb-entry-title">
                            <a href="#">Article 4</a>
                        </h2>
                    </div>
                    <a href="#" class="thumb-url"></a>
                </div>
            </article>
    @endif
</div>