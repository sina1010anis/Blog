<div id="sidebar-menu" class="fl-left">
    <ul id="nav" class="panel panel-default nav">
        <li class="panel panel-heading">
            <h2 class="set-font color-b-700" align="center">PANEL ADMIN </h2>
            <h4 class="set-font color-b-500" align="center">Domain : {{$name_domain->domain}}</h4>
        </li>
        <li class="panel panel-heading">
            <a class="set-font color-b-400 f-11" href="{{route('admin.index' , ['dom' => $name_domain->domain])}}">Setup Blog</a>
        </li>
        <li class="panel panel-heading">
            <a class="set-font color-b-400 f-11" href="{{route('admin.menu' , ['dom' => $name_domain->domain])}}">Setup Menus</a>
        </li>
        <li class="panel panel-heading">
            <a class="set-font color-b-400 f-11" href="{{route('admin.setupItem' , ['dom' => $name_domain->domain])}}">Setup Items</a>
        </li>
        <li class="panel panel-heading">
            <a class="set-font color-b-400 f-11" href="{{route('admin.category' , ['dom' => $name_domain->domain])}}">Setup Category</a>
        </li>
        <li class="panel panel-heading">
            <a class="set-font color-b-400 f-11" href="{{route('admin.itemCategory' , ['dom' => $name_domain->domain])}}">Setup Item Category</a>
        </li>
        <li class="panel panel-heading">
            <a class="set-font color-b-400 f-11" href="{{route('admin.comment' , ['dom' => $name_domain->domain])}}">Setup Comments</a>
        </li>
        <li class="panel panel-heading">
            <a class="set-font color-b-400 f-11" href="{{route('logoutUser')}}">Exit</a>
        </li>
    </ul>
</div>
