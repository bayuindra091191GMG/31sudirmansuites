
<div id="app">
    <aside class="main-sidebar fixed offcanvas shadow">
        <section class="sidebar">
            <div class="w-80px mt-3 mb-3 ml-3">
                <img src="{{ asset('img/basic/logo.png') }}" alt="">
            </div>
            <div class="relative">
                <a data-toggle="collapse" href="#userSettingsCollapse" role="button" aria-expanded="false"
                   aria-controls="userSettingsCollapse" class="btn-fab btn-fab-sm fab-right fab-top btn-primary shadow1 ">
                </a>
                <div class="user-panel p-3 light mb-2">
                    <div>
                        <div class="float-left image">
                            <img class="user_avatar" src="{{ asset('img/dummy/u2.png') }}" alt="User Image">
                        </div>
                        <div class="float-left info">
                            <h6 class="font-weight-light mt-2 mb-1">Administrator</h6>
                            <a href="#"><i class="fa fa-user-circle"></i> Online</a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
{{--                    <div class="collapse multi-collapse" id="userSettingsCollapse">--}}
{{--                        <div class="list-group mt-3 shadow">--}}
{{--                            <a href="#" class="list-group-item list-group-item-action ">--}}
{{--                                <i class="mr-2 icon-umbrella text-blue"></i>Profile--}}
{{--                            </a>--}}
{{--                            <a href="#" class="list-group-item list-group-item-action">--}}
{{--                                <i class="mr-2 icon-cogs text-yellow"></i>Settings--}}
{{--                            </a>--}}
{{--                            <a href="#" class="list-group-item list-group-item-action">--}}
{{--                                <i class="mr-2 icon-security text-purple"></i>Change Password--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
            <ul class="sidebar-menu">
                <li class="treeview">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="icon icon-dashboard2 purple-text s-18"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="{{ route('admin.contact-messages.index') }}">
                        <i class="icon icon-newspaper yellow-text s-18"></i> <span>Contact Message</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="{{ route('admin.subscribes.index') }}">
                        <i class="icon icon-person blue-text-text s-18"></i> <span>Subscriber</span>
                    </a>
                </li>
                <li class="treeview"><a href="#">
                        <i class="icon icon-newspaper green-text-text s-18"></i> <span>Artikel</span> <i
                                class="icon icon-angle-left s-18 pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ route('admin.blog.index') }}"><i class="icon icon-list"></i>Daftar Artikel</a>
                        </li>
                        <li><a href="{{ route('admin.blog.create') }}"><i class="icon icon-plus"></i>Buat Artikel Baru</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </section>
    </aside>
</div>