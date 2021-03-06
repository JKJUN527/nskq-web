<!-- Side Bar-->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li
                        @if($title === 'dashboard')
                        class="active"
                        @endif
                >
                    <a href="/admin/dashboard">
                        <i class="material-icons">home</i>
                        <span>网站信息</span>
                    </a>
                </li>

                <li
                        @if($title === 'admin')
                        class="active"
                        @endif
                >
                    <a href="/admin/admin">
                        <i class="material-icons">verified_user</i>
                        <span>管理员</span>
                    </a>
                </li>
                <li
                        @if($title === 'region')
                        class="active"
                        @endif
                >
                    <a href="/admin/region">
                        <i class="material-icons">work</i>
                        <span>产品分类</span>
                    </a>
                </li>
                <li
                        @if($title === 'products')
                        class="active"
                        @endif
                >
                    <a href="/admin/products">
                        <i class="material-icons">business</i>
                        <span>产品列表</span>
                    </a>
                </li>
                {{--<li--}}
                        {{--@if($title === 'news')--}}
                        {{--class="active"--}}
                        {{--@endif--}}
                {{-->--}}
                    {{--<a href="javascript:void(0);" class="menu-toggle">--}}
                        {{--<i class="material-icons">subject</i>--}}
                        {{--<span>新闻</span>--}}
                    {{--</a>--}}
                    {{--<ul class="ml-menu">--}}
                        {{--<li--}}
                                {{--@if($subtitle === 'newsList')--}}
                                {{--class="active"--}}
                                {{--@endif--}}
                        {{-->--}}
                            {{--<a href="/admin/news">新闻列表</a>--}}
                        {{--</li>--}}
                        {{--<li--}}
                                {{--@if($subtitle === 'addNews')--}}
                                {{--class="active"--}}
                                {{--@endif--}}
                        {{-->--}}
                            {{--<a href="/admin/addNews">发布新闻</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

                <li
                        @if($title === 'culture')
                        class="active"
                        @endif
                >
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">subject</i>
                        <span>公司文化</span>
                    </a>
                    <ul class="ml-menu">
                        <li
                                @if($subtitle === 'list')
                                class="active"
                                @endif
                        >
                            <a href="/admin/culturelist">文化照片列表</a>
                        </li>
                        <li
                                @if($subtitle === 'add')
                                class="active"
                                @endif
                        >
                            <a href="/admin/addculture">新增文化照片</a>
                        </li>
                    </ul>
                </li>
                <li
                        @if($title === 'ad')
                        class="active"
                        @endif
                >
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">business_center</i>
                        <span>轮播图</span>
                    </a>
                    <ul class="ml-menu">
                        <li
                                @if($subtitle === 'adList')
                                class="active"
                                @endif
                        >
                            <a href="/admin/ads">展示照片列表</a>
                        </li>
                        <li
                                @if($subtitle === 'addAds')
                                class="active"
                                @endif
                        >
                            <a href="/admin/addAds">新增展示照片</a>
                        </li>
                    </ul>
                </li>
                <li
                        @if($title === 'message')
                        class="active"
                        @endif
                >
                    <a href="/admin/message">
                        <i class="material-icons">message</i>
                        <span>留言板</span>
                    </a>
                </li>

                <li class="header"></li>

                <li>
                    <a>
                        <i class="material-icons">person</i>
                        <span>欢迎 {{$username or 'xxx admin'}}</span>
                    </a>
                </li>

                <li>
                    <a id="cu-logout" href="/admin/logout">
                        <i class="material-icons">exit_to_app</i>
                        <span>退出</span>
                    </a>
                </li>

                <li>
                    <a href="javascript:void(0);">&copy; 2017-2018|four2nine - dashboard</a>
                </li>
            </ul>
        </div>

    </aside>
    <!-- #END# Left Sidebar -->
</section>
<!-- #END# Side Bar-->
