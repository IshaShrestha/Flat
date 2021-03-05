
    <div class="container">
        <div class="row">
            <div class="col-md-3 ">
                <div class="sidebar">
                    <ul class="widget widget-menu unstyled">
                        <li class="active"><a href="index.html"><i class="menu-icon icon-dashboard"></i>Dashboard
                            </a></li>
                        <li><a href="activity.html"><i class="menu-icon icon-bullhorn"></i>News Feed </a>
                        </li>
                        <li><a href="message.html"><i class="menu-icon icon-inbox"></i>Inbox <b class="label green pull-right">
                                    11</b> </a></li>
                        <li><a href="task.html"><i class="menu-icon icon-tasks"></i>Tasks <b class="label orange pull-right">
                                    19</b> </a></li>
                    </ul>
                    <!--/.widget-nav-->

                    <ul class="widget widget-menu unstyled" id="dropdown1">

                        <li><a class="collapsed"  data-toggle="collapse" href="#togglePages1" data-target="#togglePages1"><i class="menu-icon icon-cog">
                                </i>
                                </i>CMS </a>
                            <ul id="togglePages1" class="collapse unstyled" data-parent="#dropdown1">
                                <div class="sub-menu1">
                                <li><a href="{{route('page.index')}}"><i class="icon-inbox"></i>Pages </a></li>
                                <li><a href="{{route('page.create')}}"><i class="icon-inbox"></i>create Page </a></li>
                                <li><a href="{{route('library')}}"><i class="icon-inbox"></i>Library </a></li>
                                </div>
                            </ul>
                        </li>
                        <li><a class="collapsed" data-toggle="collapse" href="#togglePages2"><i class="menu-icon icon-cog">
                                </i>
                                </i>News Letter</a>
                            <ul id="togglePages2" class="collapse unstyled" data-parent="#dropdown1">
                                <li><a href=""><i class="icon-inbox"></i>Subscribers </a></li>
                                <li><a href="{{route('template.create')}}"><i class="icon-inbox"></i>Templates</a></li>
                                <li><a href="{{route('newsletter.create')}}"><i class="icon-inbox"></i>Send NewsLetter</a></li>
                            </ul>
                        </li>
                        <li><a class="collapsed" data-toggle="collapse" href="#togglePages4"><i class="menu-icon icon-cog">
                                </i>
                                </i>Blog</a>
                            <ul id="togglePages4" class="collapse unstyled" data-parent="#dropdown1">
                                <li><a href=""><i class="icon-inbox"></i>All Blog</a></li>
                                <li><a href=""><i class="icon-inbox"></i>Post</a></li>
                                <li><a href="{{route('category.index')}}"><i class="icon-inbox"></i>Category</a></li>
                            </ul>
                        </li>

                        <li><a href="{{route('setting.create')}}"><i class="menu-icon icon-bar-chart"></i>Setting </a></li>
                    </ul>
                    <!--/.widget-nav-->
                    <ul class="widget widget-menu unstyled">
                        <li>
                            <a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog"></i>
                                    More Pages </a>
                                <ul id="togglePages" class="collapse unstyled">
                                    <div class="sub-menu">
                                        <li><a href="other-login.html"><i class="icon-inbox"></i>Login </a></li>
                                        <li><a href="other-user-profile.html"><i class="icon-inbox"></i>Profile </a></li>
                                        <li><a href="other-user-listing.html"><i class="icon-inbox"></i>All Users </a></li>
                                    </div>
                                </ul>




                        </li>

                        <li><a href="#"><i class="menu-icon icon-signout"></i>Logout </a></li>
                    </ul>
                </div>
                <!--/.sidebar-->
            </div>

            <div class="col-md-9">
