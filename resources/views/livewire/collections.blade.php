<div class="row">
    @if (isset($collections))
        @foreach($collections as $collection)
            <div class="col-lg-6">
                <article class="entry thumb thumb--size-2">
                    <div class="entry__img-holder thumb__img-holder" style="background-image: url('images/{{$collection->image}}');">
                        <div class="bottom-gradient"></div>
                        <div class="thumb-text-holder thumb-text-holder--1">
                            <h2 class="thumb-entry-title">
                                <a href="{{route('single-post',$collection->id)}}">{{$collection->title}}</a>
                            </h2>
                            <ul class="entry__meta">
                                <li class="entry__meta-author">
                                    <a href="#">{{$collection->auther}}</a>
                                </li>
                                <li class="entry__meta-date">
                                    {{$collection->created_at}}
                                </li>
                            </ul>
                        </div>
                        <a href="{{route('single-post',$collection->id)}}" class="thumb-url"></a>
                    </div>
                </article>
            </div>
        @endforeach
        @else
            <div class="col-lg-6">
                <article class="entry thumb thumb--size-2">
                    <div class="entry__img-holder thumb__img-holder" style="background-image: url('images/blog1.jpg');">
                        <div class="bottom-gradient"></div>
                        <div class="thumb-text-holder thumb-text-holder--1">
                            <h2 class="thumb-entry-title">
                                <a href="#">Events And Mix 1</a>
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
            <div class="col-lg-6">
                <article class="entry thumb thumb--size-2">
                    <div class="entry__img-holder thumb__img-holder" style="background-image: url('images/blog2.jpg');">
                        <div class="bottom-gradient"></div>
                        <div class="thumb-text-holder thumb-text-holder--1">
                            <h2 class="thumb-entry-title">
                                <a href="#">Events And Mix 2</a>
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
</div>