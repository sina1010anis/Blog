@extends('front.index')

@section('index_page')
    <div class="group-view-all-panel">
        @include('message.msg_view')
        @include('admin.inc.menu')
        <div class="view-setup fl-right">
        <span class="w-100 fl-right  view-setup-admin-panel"
              style="border-left: 2px solid rgba(222,222,222,0.5);box-sizing: border-box;width: 100%!important;">
            <span class="w-100 fl-left">
                <h3 align="center" class="set-font color-b-600">View All Comment</h3>
                <span class="line fl-left"></span>
                <br>
                @foreach($comments as $comment)
                    <div class="w-100 view-item-category-panel-admin" @if($comment->status == 0) style="border: 3px solid #ff2828!important;"  @endif>
                        <div class="option-comment-panel-admin">
                            <i @click="set_message_reply_panel_admin('{{$comment->id}}')" class="fas fa-reply pointer color-b-500 item-option-comment-panel-admin"></i>
                            <a href="{{route('admin.delete.comment' , ['dom' => $name_domain->domain , 'id' => $comment->id])}}">
                                <i class="fas fa-trash-alt pointer color-b-500 item-option-comment-panel-admin"></i>
                            </a>
                            @if($comment->status == 1)
                                <a href="{{route('admin.edit_status_comment' , ['dom' => $name_domain->domain , 'id' => $comment->id])}}">
                                    <i style="color: #1ecb1e" class="fas fa-check pointer item-option-comment-panel-admin"></i>
                                </a>
                            @else
                                <a href="{{route('admin.edit_status_comment' , ['dom' => $name_domain->domain , 'id' => $comment->id])}}">
                                    <i style="color: #ff2424" class="fas fa-times pointer item-option-comment-panel-admin"></i>
                                </a>
                            @endif
                        </div>
                        <p class="set-font color-b-700 f-13" align="right">{{$comment->name . ' ' . $comment->sur_name}}</p>
                        <p class="set-font color-b-700 f-13" align="right">{{$comment->email . ' ' . $comment->websit}}</p>
                        <div class="line"></div>
                        <p class="set-font color-b-700 f-13" align="right">{{$comment->title}}</p>
                        <br>
                        <p class="set-font color-b-700 f-13" align="right">{{$comment->body}}</p>
                        <br>
                        <p class="set-font color-b-700 f-13" align="right">Like : {{$comment->like}}</p>
                        <div class="line"></div>
                        @foreach($comment->reply_comment as $reply)
                            <div class="w-100 view-item-category-panel-admin" style="background-color: #ffdddd">
                                <div class="option-comment-panel-admin">
                                    <a href="{{route('admin.delete.replyComment' , ['dom' => $name_domain->domain , 'id' => $reply->id])}}">
                                        <i class="fas fa-trash-alt pointer color-b-500 item-option-comment-panel-admin"></i>
                                    </a>
                                </div>
                                <p class="set-font color-b-700 f-13" align="right">{{$reply->name}}</p>
                                <div class="line"></div>
                                <p class="set-font color-b-700 f-13" align="right">{{$reply->title}}</p>
                                <br>
                                <p class="set-font color-b-700 f-13" align="right">{{$reply->body}}</p>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </span>
        </span>
        </div>
    </div>
    @include('admin.inc.formReply')
@endsection

