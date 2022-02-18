<div class="row">
    @if ( isset($sports) )
        @foreach($sports as $sport)
            <div class="col-lg-6">
                <article class="entry thumb thumb--size-2">
                    <div class="entry__img-holder thumb__img-holder" style="background-image: url('images/{{$sport->image}}');">
                        <div class="bottom-gradient"></div>
                        <div class="thumb-text-holder thumb-text-holder--1">
                            <h2 class="thumb-entry-title">
                                <a href="{{ route('single-post', ['id' => $sport->id]) }}">{{$sport->title}}</a>
                            </h2>
                            <ul class="entry__meta">
                                <li class="entry__meta-author">
                                    <a href="#">{{$sport->author}}</a>
                                </li>
                                <li class="entry__meta-date">
                                    {{$sport->created_at}}
                                </li>
                            </ul>
                        </div>
                        <a href="{{ route('single-post', ['id' => $sport->id]) }}" class="thumb-url"></a>
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