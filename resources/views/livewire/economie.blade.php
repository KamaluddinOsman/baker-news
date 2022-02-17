<div class="row">
    <div class="col-lg-6">
        @if (isset($new_economics))
            @foreach($new_economics as $new_economic)
                <article class="entry thumb thumb--size-2">
                    <div class="entry__img-holder thumb__img-holder" style="background-image: url('images/{{$new_economic->image}}')">
                        <div class="bottom-gradient"></div>
                        <div class="thumb-text-holder thumb-text-holder--1">
                            <h2 class="thumb-entry-title">
                                <a href="#">{{$new_economic->title}}</a>
                            </h2>
                            <ul class="entry__meta">
                                <li class="entry__meta-author">
                                    <a href="#">{{$new_economic->author}}</a>
                                </li>
                                <li class="entry__meta-date">
                                    {{$new_economic->created_at}}
                                </li>
                            </ul>
                        </div>
                        <a href="#" class="thumb-url"></a>
                    </div>
                </article>
            @endforeach
            @else
            <article class="entry thumb thumb--size-2">
                <div class="entry__img-holder thumb__img-holder" style="background-image: url('images/news1.jpg')">
                    <div class="bottom-gradient"></div>
                    <div class="thumb-text-holder thumb-text-holder--1">
                        <h2 class="thumb-entry-title">
                            <a href="#">Economie 1</a>
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

    @livewire('sub-economie')

</div>