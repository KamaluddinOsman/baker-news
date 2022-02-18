<div class="entry-comments">
    <div class="title-wrap title-wrap--line">
        <h3 class="section-title">التعليقات 5</h3>
    </div>
    <ul class="comment-list">
        @if ( isset($comments) )
            @foreach($comments as $comment)
                <li class="comment">
                    <div class="comment-body">
                        <div class="comment-text">
                            <h6 class="comment-author">{{$comment->name}}</h6>
                            <div class="comment-metadata">
                                <a href="#" class="comment-date">{{$comment->created_at}}</a>
                            </div>
                            <p>{{$comment->comment}}</p>
                            <a href="{{route('replies',$comment->id)}}" class="comment-reply">رد</a>
                        </div>
                    </div>
                </li>
            @endforeach
            @else
            
        @endif
    </ul>
</div>