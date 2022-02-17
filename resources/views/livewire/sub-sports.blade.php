<ul class="post-list-small post-list-small--dividers post-list-small--arrows mb-24">
    @if (isset($sports))
        @foreach($sports as $sport)
            <li class="post-list-small__item">
                <article class="post-list-small__entry">
                    <div class="post-list-small__body">
                        <h3 class="post-list-small__entry-title">
                            <a href="{{route('single-post',$sport->id)}}">{{$sport->title}}</a>
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
                            <a href="">Sport 1</a>
                        </h3>
                    </div>
                </article>
            </li>
            <li class="post-list-small__item">
                <article class="post-list-small__entry">
                    <div class="post-list-small__body">
                        <h3 class="post-list-small__entry-title">
                            <a href="">Sport 2</a>
                        </h3>
                    </div>
                </article>
            </li>
            <li class="post-list-small__item">
                <article class="post-list-small__entry">
                    <div class="post-list-small__body">
                        <h3 class="post-list-small__entry-title">
                            <a href="">Sport 3</a>
                        </h3>
                    </div>
                </article>
            </li>
            <li class="post-list-small__item">
                <article class="post-list-small__entry">
                    <div class="post-list-small__body">
                        <h3 class="post-list-small__entry-title">
                            <a href="">Sport 4</a>
                        </h3>
                    </div>
                </article>
            </li>
            <li class="post-list-small__item">
                <article class="post-list-small__entry">
                    <div class="post-list-small__body">
                        <h3 class="post-list-small__entry-title">
                            <a href="">Sport 5</a>
                        </h3>
                    </div>
                </article>
            </li>
    @endif
</ul>