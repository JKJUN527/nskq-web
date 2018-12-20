@extends('layout.admin')
@section('title', '产品列表')

@section('custom-style')
    <style>
        ul.mdl-menu,
        li.mdl-menu__item {
            padding: 0;
        }

        li.mdl-menu__item a {
            cursor: pointer;
            display: block;
            padding: 0 16px;
        }

        i.material-icons {
            cursor: pointer;
        }
        .hot {
            color: #F44336;
        }
    </style>
@endsection

@section('sidebar')
    @include('components.adminAside', ['title' => 'products', 'subtitle'=>'', 'username' => $data['username']])
@endsection

@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        产品列表
                    </h2>
                    <div class="mdl-card__menu">

                        <button id="demo-menu-lower-right" class="mdl-button mdl-js-button mdl-button--icon">
                            <i class="material-icons">more_vert</i>
                        </button>

                        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                            for="demo-menu-lower-right">
                            <li class="mdl-menu__item">
                                <a data-toggle="modal" data-target="#addRegionModal1">添加新产品</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="body table-responsive">
                    <table class="table table-striped" id="cu-admin-table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>产品图片</th>
                            <th>类型</th>
                            <th>产品名称</th>
                            <th>型号</th>
                            <th>产品介绍</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($data['products'] as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td><image src="{{$product->image}}" style="height: 37px;width:50px;"></image></td>
                                <td>{{$product->typename}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->model}}</td>
                                <td>{{$product->main_introduce}}</td>
                                <td>
                                    <i class="material-icons delete" data-content="{{$product->id}}">delete</i>
                                    <i class="material-icons set-hot @if($product->is_urgency == 1) hot @endif"
                                       data-content="{{$product->id}}">whatshot</i>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6">暂无产品</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                    <nav>
                        {!! $data['products']->render() !!}
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Dialogs ====================================================================================================================== -->
    <!-- Default Size -->
    <div class="modal fade" id="addRegionModal1" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="defaultModalLabel">添加产品</h4>
                </div>
                <form role="form" method="post" id="add_region_province_form">
                    <div class="modal-body">

                        <label for="name">产品名称</label>
                        <div class="input-group">
                            <div class="form-line">
                                <input type="text" id="name" name="name" class="form-control"
                                       placeholder="中文名称">
                            </div>
                            <label id="name-error" class="error" for="name"></label>
                        </div>
                        <label for="model">规格</label>
                        <div class="input-group">
                            <div class="form-line">
                                <input type="text" id="model" name="model" class="form-control"
                                       placeholder="规格">
                            </div>
                            <label id="model-error" class="error" for="model"></label>
                        </div>

                        <label for="introduce">产品介绍</label>
                        <div class="input-group">
                            <div class="form-line">
                                <textarea rows="3" class="form-control no-resize" id="introduce" name="introduce"
                                          placeholder="产品介绍..." required></textarea>
                            </div>
                            <label id="introduce-error" class="error" for="introduce"></label>
                        </div>

                        <label for="parent-place">产品类别</label>
                        <div class="form-group">
                            {{--如果想要添加动态查找，向select中添加属性：data-live-search="true"--}}
                            <select class="form-control show-tick selectpicker" data-live-search="true"
                                    id="parent-place" name="parent-place" data-live-search="true">
                                <option value="0">请选择产品分类</option>
                                @forelse($data['region'] as $region)
                                    <option value="{{$region->id}}">{{$region->name}}</option>
                                @endforeach
                            </select>
                            <label id="name-error" class="error" for="parent-place"></label>
                        </div>
                        <label for="parent-place">产品图片</label>
                        <div class="input-group">
                            <div class="form-line">
                                <input type="file" id="picture-big" name="picture-big" class="form-control"
                                       onchange='showBigPreview(this)'/>
                            </div>
                            <div class="help-info" for="picture-big">.jpg 或 .png格式，390×290 像素</div>
                            <label id="picture-big-error" class="error" for="picture-big"></label>
                        </div>

                        <div id="preview-holder-big" class="preview-holder">
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">取消</button>
                        <button type="submit" class="btn btn-primary waves-effect">添加</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('custom-script')
    <script type="text/javascript">
        function showBigPreview(element) {
            var isCorrect = true;

            var file = element.files[0];
            var anyWindow = window.URL || window.webkitURL;
            var objectUrl = anyWindow.createObjectURL(file);
            window.URL.revokeObjectURL(file);

            var bigImagePath = $("input[name='picture-big']").val();
            if (!/.(jpg|jpeg|png|JPG|JPEG|PNG)$/.test(bigImagePath)) {
                isCorrect = false;
                $("#picture-big").val("");
                swal({
                    title: "错误",
                    type: "error",
                    text: "图片格式错误，支持：.jpg .jpeg .png类型。请选择正确格式的图片后再试！",
                    cancelButtonText: "关闭",
                    showCancelButton: true,
                    showConfirmButton: false
                });
            } else if (file.size > 5 * 1024 * 1024) {
                isCorrect = false;
                $("#picture-big").val("");
                swal({
                    title: "错误",
                    type: "error",
                    text: "图片文件最大支持：5MB",
                    cancelButtonText: "关闭",
                    showCancelButton: true,
                    showConfirmButton: false
                });
            } else {
                var reader = new FileReader();
                reader.onload = function (e) {
                    var data = e.target.result;
                    //加载图片获取图片真实宽度和高度
                    var image = new Image();
                    image.onload = function () {
                        var width = image.width;
                        var height = image.height;
                        console.log(width + "//" + height);

                        if (width < 390  || height < 290) {
                            isCorrect = false;
                            $("#picture-big").val("");
                            swal({
                                title: "错误",
                                type: "error",
                                text: "当前选择图片分辨率为: " + width + "px * " + height + "px \n大图片广告分辨率应为 390像素 * 290像素",
                                cancelButtonText: "关闭",
                                showCancelButton: true,
                                showConfirmButton: false
                            });
                        } else if (isCorrect) {
                            $("#preview-holder-big").html("<div class='image-preview'>" +
                                "<img src='" + objectUrl + "' width='390' height='290'>" +
                                "<i class='material-icons delete-image' onclick='deleteBigImage(this)'>close</i></div>");
                        }
                    };
                    image.src = data;
                };
                reader.readAsDataURL(file);
            }
        }

        function deleteBigImage(element) {

            var imageHolder = element.parentNode;

            swal({
                title: "确认",
                text: "确认删除图片吗",
                type: "info",
                confirmButtonText: "确认",
                cancelButtonText: "取消",
                showCancelButton: true,
                closeOnConfirm: false
            }, function () {
                swal("图片已删除");
                $("#picture-big").val(null);
                imageHolder.remove();
            });
        }

        $("#add_region_province_form").submit(function (event) {
            event.preventDefault();

            var name = $("#name");
            var model = $("#model");
            var introduce = $("#introduce");
            var parent_id = $("select[name='parent-place']");
            var file = $("#picture-big");

            if (parent_id.val() == 0) {
                setError(parent_id, 'parent-place', '不能为空');
                return;
            } else {
                removeError(parent_id, 'parent-place');
            }
            if (name.val() === '') {
                setError(name, 'name', '不能为空');
                return;
            } else {
                removeError(name, 'name');
            }
            var testContent = introduce.val().replace(/\r\n/g, '');
            testContent = testContent.replace(/\n/g, '');
            testContent = testContent.replace(/\s/g, '');

            if (testContent === '') {
                setError(introduce, 'introduce', '不能为空');
                return;
            } else {
                removeError(introduce, 'introduce');
            }

            // introduce "\r\n" 或者 "\n" 换成 <br>
            // '\s'空格替换成"&nbsp;"
            // 这样可以保持内容的编辑格式
            var Content = introduce.val().replace(/\r\n/g, '<br>');
            Content = Content.replace(/\n/g, '<br>');
            Content = Content.replace(/\s/g, '&nbsp;');

            var formData = new FormData();
            if (file.prop("files")[0] === undefined) {
                console.log("file is empty");
                setError(file, 'picture-big', "请上传产品图片390像素 * 290像素");
                return;
            } else {
                removeError(file, 'picture-big');
                formData.append('picture', file.prop("files")[0]);
            }
            formData.append("name", name.val());
            formData.append("model", model.val());
            formData.append("introduce", Content);
            formData.append("type", parent_id.val());

            $.ajax({
                url: "/admin/products/add",
                type: "post",
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data: formData,
                success: function (data) {
                    $("#addRegionModal").modal('toggle');
                    var result = JSON.parse(data);

                    checkResult(result.status, "添加成功", result.msg, null);

                    setTimeout(function () {
                        location.reload();
                    }, 1200);
                }
            })
        });

        $(".delete").click(function () {
            var element = $(this);

            swal({
                type: "warning",
                title: "确认",
                text: "确定删除该产品吗？",
                confirmButtonText: "删除",
                cancelButtonText: "取消",
                showCancelButton: true,
                closeOnConfirm: true
            }, function () {
                $.ajax({
                    url: "/admin/products/delete?rid=" + element.attr("data-content"),
                    type: "get",
                    success: function (data) {
                        checkResult(data['status'], '操作成功', data['msg'], null);
                        setTimeout(function () {
                            location.reload();
                        }, 1200);
                    }
                })
            });
        });
        $(".set-hot").click(function () {
            var element = $(this);
            var setUrgency = element.hasClass("hot") ? 0 : 1;
            var text = "";
            if(setUrgency == 0)
                text = "确定取消该优势产品吗?";
            else
                text= "确定设置该产品为优势产品吗?";

            swal({
                type: "warning",
                title: "确认",
                text: text,
                confirmButtonText: "确定",
                cancelButtonText: "取消",
                showCancelButton: true,
                closeOnConfirm: true
            }, function () {
                $.ajax({
                    url: "/admin/products/urgency?rid=" + element.attr("data-content")+ "&urgency=" + setUrgency,
                    type: "get",
                    success: function (data) {
                        checkResult(data['status'], '操作成功', data['msg'], null);
                        setTimeout(function () {
                            location.reload();
                        }, 1200);
                    }
                })
            });

        })
    </script>
@show
