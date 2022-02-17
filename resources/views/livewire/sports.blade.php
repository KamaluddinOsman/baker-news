<div class="row">
    @if ( isset($new_sports) )
        @foreach($new_sports as $new_sport)
            <div class="col-lg-6">
                <article class="entry thumb thumb--size-2">
                    <div class="entry__img-holder thumb__img-holder" style="background-image: url('images/{{$new_sport->image}}');">
                        <div class="bottom-gradient"></div>
                        <div class="thumb-text-holder thumb-text-holder--1">
                            <h2 class="thumb-entry-title">
                                <a href="#">{{$new_sport->title}}</a>
                            </h2>
                            <ul class="entry__meta">
                                <li class="entry__meta-author">
                                    <a href="#">{{$new_sport->auther}}</a>
                                </li>
                                <li class="entry__meta-date">
                                    {{$new_sport->created_at}}
                                </li>
                            </ul>
                        </div>
                        <a href="#" class="thumb-url"></a>
                    </div>
                </article>
            </div>
        @endforeach
        @else
        <div class="col-lg-6">
            <article class="entry thumb thumb--size-2">
                <div class="entry__img-holder thumb__img-holder" style="background-image: url('images/news2.jpg')">
                    <div class="bottom-gradient"></div>
                    <div class="thumb-text-holder thumb-text-holder--1">
                        <h2 class="thumb-entry-title">
                            <a href="#">Sport 1</a>
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
        </div>
    @endif
    <div class="col-lg-6">
        @livewire('sub-sports')
    </div>
</div>