@extends('layout.master')
@section('title', '诺斯凯其-上海官网|联系我们')

@section('header-nav')
    @include('components.headerNav')
@endsection

@section('custom-style')
    <style>
        .contact-info{
            text-align: center;
        }
    </style>
@endsection
@section('content')
    <!--======= HOME MAIN SLIDER =========-->
    <section class="sub-bnr" data-stellar-background-ratio="0.5" >
        <div class="position-center-center">
            <div class="container">
                <h3>联系我们</h3>
                <hr>
                <ol class="breadcrumb">
                    <li><a href="/">主页</a></li>
                    <li class="active">联系我们</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- Content -->
    <div id="content">

        <!-- COnatct Us -->
        <section class="contact-page padding-top-50">
            <div class="container col-lg-4">

                <!-- COnatct Info -->
                <div class="contact-info margin-bottom-50">
                    <ul class="row">

                        <!-- Email -->
                        <li class="col-md-12">
                            <div class="media-left">
                                <div class="icon"> <i class="fa fa-envelope"></i> </div>
                            </div>
                            <div class="media-body">
                                <h6>邮箱</h6>
                                <p>{{$data['webinfo']->email}}</p>
                            </div>
                        </li>
                        <!-- Phone -->
                        <li class="col-md-12">
                            <div class="media-left">
                                <div class="icon"> <i class="fa fa-phone"></i> </div>
                            </div>
                            <div class="media-body">
                                <h6>电话传真</h6>
                                <p>{{$data['webinfo']->tel}}<br>
                                    {{$data['webinfo']->fax}}</p>
                            </div>
                        </li>
                        <!-- Address -->
                        <li class="col-md-12">
                            <div class="media-left">
                                <div class="icon"> <i class="fa fa-map-marker"></i> </div>
                            </div>
                            <div class="media-body">
                                <h6>地址</h6>
                                <p>{{$data['webinfo']->address}}</p>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="row contact-form-sec col-lg-8">
                <!-- Contact From -->

                <div class="col-lg-12">
                    <div class="contact-form padding-50 padding-right-75">

                        <!-- FORM -->
                        <form role="form" id="contact_form" class="contact-form">
                            <ul class="row">
                                <li class="col-sm-6">
                                    <label>*您的姓名
                                        <input type="text" class="form-control" name="name" id="name" required placeholder="">
                                    </label>
                                </li>
                                <li class="col-sm-6">
                                    <label>*您的邮箱
                                        <input type="text" class="form-control" name="email" id="email" required placeholder="">
                                    </label>
                                </li>
                                <li class="col-sm-12">
                                    <label>您的电话
                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="">
                                    </label>
                                </li>
                                <li class="col-sm-12">
                                    <label>*留言
                                        <textarea class="form-control" name="message" id="message" rows="5" required placeholder=""></textarea>
                                    </label>
                                </li>
                                <li class="col-sm-12 text-center no-margin">
                                    <button type="submit" value="submit" class="btn" id="btn_submit">提交给我们</button>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>

            </div>

        </section>
    </div>
@endsection
@section('footer')
    @include('components.myfooter',['webinfo'=>$data['webinfo']])
@endsection
@section('custom-script')
    <script>
        $('#btn_submit').click(function (e) {
            e.preventDefault();
            var email = $('input[id=email]').val();
            var phone = $('input[id=phone]').val();
            var name = $('input[id=name]').val();
            var message = $('#message').val();
            if(name == ''||email == ''||message == ""){
                alert('姓名、邮箱、留言不能为空');
                return;
            }
            var formData = new FormData();
            formData.append("email", email);
            formData.append("phone", phone);
            formData.append("name", name);
            formData.append("message", message);

            $.ajax({
                url: "/message/add",
                type: "post",
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data: formData,
                success: function (data) {
                    $("#addRegionModal").modal('toggle');
                    var result = JSON.parse(data);
                    if(result.status = 200)
                        alert(result.msg);
                    else
                        alert('留言失败')
                }
            })
        })
    </script>
@endsection