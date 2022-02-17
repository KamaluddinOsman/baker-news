<div class="col-lg-6">
    <ul class="post-list-small post-list-small--dividers post-list-small--arrows mb-24">
        @if (isset($economics))
            @foreach($economics as $economic)
                <li class="post-list-small__item">
                    <article class="post-list-small__entry">
                        <div class="post-list-small__body">
                            <h3 class="post-list-small__entry-title">
                                <a href="#">{{$economic->title}}</a>
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
                                <a href="#">Economic 1</a>
                            </h3>
                        </div>
                    </article>
                </li>
                <li class="post-list-small__item">
                    <article class="post-list-small__entry">
                        <div class="post-list-small__body">
                            <h3 class="post-list-small__entry-title">
                                <a href="#">Economic 2</a>
                            </h3>
                        </div>
                    </article>
                </li>
                <li class="post-list-small__item">
                    <article class="post-list-small__entry">
                        <div class="post-list-small__body">
                            <h3 class="post-list-small__entry-title">
                                <a href="#">Economic 3</a>
                            </h3>
                        </div>
                    </article>
                </li>
                <li class="post-list-small__item">
                    <article class="post-list-small__entry">
                        <div class="post-list-small__body">
                            <h3 class="post-list-small__entry-title">
                                <a href="#">Economic 4</a>
                            </h3>
                        </div>
                    </article>
                </li>
                <li class="post-list-small__item">
                    <article class="post-list-small__entry">
                        <div class="post-list-small__body">
                            <h3 class="post-list-small__entry-title">
                                <a href="#">Economic 5</a>
                            </h3>
                        </div>
                    </article>
                </li>
        @endif
    </ul>
</div>