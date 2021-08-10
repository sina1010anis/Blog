<div class="select-center group-input-reply-panel-admin">
    <i @click="cls_comment_reply" style="color: #ff2424" class="fas fa-times pointer item-option-comment-panel-admin f-13"></i>
    <h2 class="set-font color-b-600" align="center">Reply Comment</h2>
    <div class="line"></div>
        <div class="group-input-login">
            <input v-model="name_comment_reply" dir="rtl" value="{{old('name')}}" type="text" name="name" placeholder="Name..." class="f-12 set-font input-login">
            <ul>
                @error('name')
                <li class="set-font f-12">{{$message}}</li>
                @enderror
            </ul>
        </div>
        <div class="group-input-login">
            <textarea v-model="text_comment_reply" dir="rtl" type="text" name="body" placeholder="Text..." class="f-12 set-font input-login text-area-reply-comment">{{old('body')}}</textarea>
            <ul>
                @error('name')
                <li class="set-font f-12">{{$message}}</li>
                @enderror
            </ul>
        </div>
        <div class="obj-center">
            <button @click="set_comment_reply_admin" class="btn-new-blog set-font f-12" dir="rtl">SAVE ◄ </button>
        </div>
</div>
