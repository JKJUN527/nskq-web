<!--======= FOOTER =========-->
<footer>
    <div class="container">

        <!-- FOOTER -->
        <div class="footer-info">
            <div class="row">

                <!-- keep in touch -->
                <div class="col-md-4 col-xs-12 col-sm-12">
                    <div class="padding-right-50"><a href="#"> <img src="images/logo-nskq.png" class="margin-bottom-30" alt="" ></a>
                        <a href="/about">
                            <p>{{mb_substr($data['webinfo']->describe,0,96,'utf-8')}}...</p>
                        </a>
                    </div>
                </div>

                <!-- Links -->
                <div class="col-md-2 col-xs-6 col-sm-6">
                    <h6>网站链接</h6>
                    <ul class="links">
                        <li><a href="/">主页</a></li>
                        <li><a href="products">产品展示</a></li>
                        <li><a href="about">关于我们</a></li>
                        <li><a href="contact">联系我们</a></li>
                    </ul>
                </div>

                <!-- INSTAGRAM  -->
                <div class="col-md-3 col-xs-6 col-sm-6">
                    <h6>关注微信公众号</h6>
                    <div class="flicker-img">
                        <img src="{{asset('images/wechatcode.jpg')}}" style="width: 11rem;" alt="" >
                    </div>
                </div>

                <!-- keep in touch -->
                <div class="col-md-3 col-xs-12 col-sm-12">
                    <h6>合作意向</h6>
                    <div class="news-letter">
                        <p>请在下方留下你的邮箱，我们将第一时间给你回复！</p>
                        <form class="subscribe index-messages">
                            <input type="email" name="index_email" placeholder="Email address">
                            <button name="submit"><i class="fa fa-envelope"></i></button>
                        </form>
                    </div>
                    <div class="social_icons">
                        <a href="mailto:jkjun0527@foxmail.com" target="_blank" class="linking">技术支持：Four2Nine</a>
                    </div>
                </div>
                <div class="col-md-12 col-xs-12 col-sm-12" style="text-align: center;color: #fff;">沪ICP备18047544号-1 ©2018 诺斯凯其（上海）家用电器有限公司  ALL RIGHTS RESERVED.
                </div>
            </div>
        </div>
    </div>
</footer>