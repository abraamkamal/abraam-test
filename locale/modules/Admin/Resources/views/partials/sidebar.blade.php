
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
   
                        <li class="nav-item @if(Request::route()->getName() == 'admin.home.get') start active open @endif">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Dashboard</span>
                                <span class="arrow @if (Request::route()->getName() == 'admin.home.get') open @endif"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item @if(Request::route()->getName() == 'admin.home.get') start active open @endif">
                                    <a href="{{ route('admin.home.get') }}" class="nav-link ">
                                        <i class="icon-bar-chart"></i>
                                        <span class="title">Dashboard</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <?php
                            $post_types_sidebar = [
                                    ['type' => 'slider', 'icon' => 'fa-image'],
                                   

                                  
                            ];
                        ?>

                        @foreach($post_types_sidebar as $post_type)
                        <li class="nav-item  @if(\Request::get('post_type') == $post_type['type']) start active open @endif">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa {{ $post_type['icon'] }}"></i>
                                <span class="title">{{ ucfirst($post_type['type']) }}</span>
                                <span class="arrow @if(\Request::get('post_type') == $post_type['type']) open @endif"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  @if(Request::route()->getName() == 'admin.posts.get' && \Request::get('post_type') == $post_type['type']) start active open @endif">
                                    <a href="{{ route('admin.posts.get','post_type=' . $post_type['type']  ) }}" class="nav-link ">
                                        <span class="title">All {{ ucfirst($post_type['type']) }}s</span>
                                    </a>
                                </li>
                                <li class="nav-item  @if(Request::route()->getName() == 'admin.posts.add.get' && \Request::get('post_type') == $post_type['type']) start active open @endif">
                                    <a href="{{ route('admin.posts.add.get', 'post_type=' . $post_type['type']  ) }}" class="nav-link ">
                                        <span class="title">Add New {{ ucfirst($post_type['type']) }}</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endforeach











                       

                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                