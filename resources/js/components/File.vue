<template>
    <div class="header_style_1 w-100">
        <span class="set-font fl-left view-data color-b-700 f-13">زمان ورود : {{data}}</span>
        <span class="set-font fl-right view-domain color-b-700 f-13">{{names.domain}}</span>
    </div>
</template>

<script>
export default {
    name: "file",
    props:[
        'names',
        'data',
    ]
}
</script>
