<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">

                <li class="menu-title">Action</li>
                <li>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('create.blog') }}">Create Blog</a></li>
                        <li><a href="{{ route('manage.blog') }}">Manage Blogs</a></li>
                    </ul>
                </li>

                <li class="menu-title">Use of Insert Method</li>
                <li>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('random.post') }}">Random Post</a></li>
                    </ul>
                </li>

                <li class="menu-title">Random Section</li>
                <li>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('insert.into.two') }}">Insert into 2</a></li>

                        <li><a href="{{ route('create.blog') }}">Create Form</a></li>

                        <li><a href="{{ route('mange.img.diff')}}">Manage Img Differently</a></li>
                    </ul>
                </li>

                <li class="menu-title">Ajax</li>
                <li>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('ajax.index') }}">AJAX </a></li>
                    </ul>
                </li>
                <li class="menu-title">Main Blog</li>
                <li>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('main_blog.index') }}">Blogs </a></li>
                    </ul>
                </li>


            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
