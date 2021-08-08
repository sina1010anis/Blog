<template>
    <div class="view-setup fl-right">
        <span class="w-50 fl-right  view-setup-admin-panel"
              style="border-left: 2px solid rgba(222,222,222,0.5);box-sizing: border-box">
            <span class="w-100 fl-left">
                <h3 align="center" class="set-font color-b-600">Default Setup</h3>
                <span class="line fl-left"></span>
                            <span class="view-item-panel-admin">
                <a class="set-font color-b-700 w-100" align="center" dir="rtl">Domain : <b>{{ blog.domain }}</b></a>
            </span>
            <span class="view-item-panel-admin">
                <a class="set-font color-b-700 w-100" align="center" dir="rtl">Title : <b>{{ blog.title }}</b></a>
            </span>
                            <span class="view-item-panel-admin">
                <a class="set-font color-b-700 w-100" align="center" dir="rtl">Style : <b>{{blog.style}}</b></a>
            </span>
                <slot name="view_user"/>
            </span>
        </span>
        <span class="w-50 fl-left view-setup-admin-panel">
            <span class="w-100 fl-left">
                <h3 align="center" class="set-font color-b-600">Edit Setup</h3>
                <span class="line fl-left"></span>
                <slot name="form_edit_blog"/>
            </span>
        </span>
    </div>
</template>

<script>
export default {
    name: "panel",
    props: [
        'blog'
    ],
}
</script>

