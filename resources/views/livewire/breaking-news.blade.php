<div class="trending-now">
    <span class="trending-now__label">
    <i class="ui-flash"></i>
    <span class="trending-now__text d-lg-inline-block d-none">الاخبار العاجلة</span>
    </span>
    <div class="newsticker">
        <ul class="newsticker__list">
            @if ( isset($breaking_news) )
                @foreach($breaking_news as $news)
                    <li class="newsticker__item">
                        <a href="{{ route('single-post', ['id' => $news->id]) }}" class="newsticker__item-url">{{$news->title}}</a>
                    </li>
                @endforeach
                @else
                    <li class="newsticker__item">
                        <a href="#" class="newsticker__item-url">breaking news 1</a>
                    </li>
                    <li class="newsticker__item">
                        <a href="#" class="newsticker__item-url">breaking news 2</a>
                    </li>
                    <li class="newsticker__item">
                        <a href="#" class="newsticker__item-url">breaking news 3</a>
                    </li>
            @endif
        </ul>
    </div>
    <div class="newsticker-buttons">
            <button class="newsticker-button newsticker-button--prev" id="newsticker-button--prev" aria-label="next article"><i class="ui-arrow-left"></i></button>
            <button class="newsticker-button newsticker-button--next" id="newsticker-button--next" aria-label="previous article"><i class="ui-arrow-right"></i></button>
    </div>
</div>