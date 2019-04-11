
<div class="has-sidebar-left">
    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark pt-2 pb-2 pl-4 pr-2">
                <div class="search-bar">
                    <input class="transparent s-24 text-white b-0 font-weight-lighter w-128 height-50" type="text"
                           placeholder="start typing...">
                </div>
                <a href="#" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-expanded="false"
                   aria-label="Toggle navigation" class="paper-nav-toggle paper-nav-white active "><i></i></a>
            </div>
        </div>
    </div>
    <div class="sticky">
        <div class="navbar navbar-expand navbar-dark d-flex justify-content-between bd-navbar blue accent-3">
            <div class="relative">
                <a href="#" data-toggle="offcanvas" class="paper-nav-toggle pp-nav-toggle">
                    <i></i>
                </a>
            </div>
            <!--Top Menu Start -->
            <div class="navbar-custom-menu p-t-10">
                <ul class="nav navbar-nav">
                    <li class="dropdown custom-dropdown user user-menu">
                        <a href="#" class="nav-link" data-toggle="dropdown">
                            <img src="{{ asset('img/dummy/u2.png') }}" class="user-image" alt="User Image">
                            <i class="fa fa-chevron-down"></i>
                        </a>
                        <div class="dropdown-menu p-1" style="width: 150px;">
                            <a href="{{ route('admin.logout') }}" class="list-group-item list-group-item-action"><i
                                        class="mr-2 icon-exit_to_app text-red"></i>Log Out</a>
                            <a href="{{ route('admin.change-password') }}" class="list-group-item list-group-item-action"><i
                                        class="mr-2 icon-security text-yellow"></i>Change Password</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>