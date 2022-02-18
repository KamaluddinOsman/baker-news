<section class="section related-posts mt-40 mb-0" style="direction: ltr;">
    <div class="title-wrap title-wrap--line title-wrap--pr">
        <h3 class="section-title">مقالات ذات صلة</h3>
    </div>
    <div id="owl-posts-3-items" class="owl-carousel owl-theme owl-carousel--arrows-outside">
        @if ( isset($relatedNews) )
            @foreach ($relatedNews as $news)
                <article class="entry thumb thumb--size-1">
                    <div class="entry__img-holder thumb__img-holder" style="background-image: url({{ asset('images/').'/'.$news->image }})">
                        <div class="bottom-gradient"></div>
                        <div class="thumb-text-holder">
                            <h2 class="thumb-entry-title">
                                <a href="{{ route('single-post', ['id' => $news->id]) }}">{{ $news->title }}</a>
                            </h2>
                        </div>
                        <a href="{{ route('single-post', ['id' => $news->id]) }}" class="thumb-url"></a>
                    </div>
                </article>
            @endforeach
            @else
                <article class="entry thumb thumb--size-1">
                    <div class="entry__img-holder thumb__img-holder" style="background-image: url({{ asset('images/slide1.jpg') }})">
                        <div class="bottom-gradient"></div>
                        <div class="thumb-text-holder">
                            <h2 class="thumb-entry-title">
                                <a href="/single-post">عضو بالمجلس السيادي يكشف حقيقة حذف فقرة العزل السياسي من قانون “التفكيك”</a>
                            </h2>
                        </div>
                        <a href="/single-post" class="thumb-url"></a>
                    </div>
                </article>
                <article class="entry thumb thumb--size-1">
                    <div class="entry__img-holder thumb__img-holder" style="background-image: url({{ asset('images/slide2.jpg') }})">
                        <div class="bottom-gradient"></div>
                        <div class="thumb-text-holder">
                            <h2 class="thumb-entry-title">
                                <a href="/single-post">حمدوك يغادر إلى أمريكا في زيارة رسمية لستة أيام</a>
                            </h2>
                        </div>
                        <a href="/single-post" class="thumb-url"></a>
                    </div>
                </article>
                <article class="entry thumb thumb--size-1">
                    <div class="entry__img-holder thumb__img-holder" style="background-image: url({{ asset('images/slide3.jpg')}})">
                        <div class="bottom-gradient"></div>
                        <div class="thumb-text-holder">
                            <h2 class="thumb-entry-title">
                                <a href="/single-post">غندور: الصفوف تمايزت وسنعارض الحكومة حتى تستقيم أو يسترد الشعب ثورته</a>
                            </h2>
                        </div>
                        <a href="/single-post" class="thumb-url"></a>
                    </div>
                </article>
                <article class="entry thumb thumb--size-1">
                    <div class="entry__img-holder thumb__img-holder" style="background-image: url({{ asset('images/slide4.jpg') }})">
                        <div class="bottom-gradient"></div>
                        <div class="thumb-text-holder">
                            <h2 class="thumb-entry-title">
                                <a href="/single-post">السلطات تحل منظمة مثيرة للجدل تعمل تحتها زيرو فساد</a>
                            </h2>
                        </div>
                        <a href="/single-post" class="thumb-url"></a>
                    </div>
                </article>
                <article class="entry thumb thumb--size-1">
                    <div class="entry__img-holder thumb__img-holder" style="background-image: url({{ asset('images/slide5.jpg') }})">
                        <div class="bottom-gradient"></div>
                        <div class="thumb-text-holder">
                            <h2 class="thumb-entry-title">
                                <a href="/single-post">صحيفة سودانية: “كرتي” نزيلاً بسجن شالا ونقل عدد اخر من معتقلي نظام الرئيس المخلوع</a>
                            </h2>
                        </div>
                        <a href="/single-post" class="thumb-url"></a>
                    </div>
                </article>
        @endif
        
    </div>
</section>