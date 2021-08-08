@if(session('msg_ok'))
    <span class="view_msg_all set-font">{{session('msg_ok')}}</span>
@endif
@if(session('msg_error'))
    <span class="set-font view_msg_all-error">{{session('msg_error')}}</span>
@endif
<span class="set-font view_msg_all_error" style="opacity: 0"></span>
<span class="view_msg_all set-font" style="opacity: 0"></span>
