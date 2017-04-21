@extends('users.template')
@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">
            QUẢN LÝ THÔNG TIN CÁ NHÂN
        </h3>
    </div>
    <div class="panel-body">

        <div>


        </div>
        <div class="row">
            <div class="col-md-12">
                <section id="externalLoginsForm">

                </section>
                <form action="{{URL::to('update')}}" method="post" accept-charset="utf-8">
                      {{ csrf_field() }}
                 
            
                <section id="passwordForm">


                    <div class="panel panel-primary">
                        <div class="panel-body">
                            <h6 style="display: none">Bạn đang đăng nhập hệ thống với tài khoản <strong>khoaluan.vn_Email_cuongptpd01198@gmail.com</strong>.</h6>

                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label for="ContentPlaceHolder1_UserName" class="col-md-3 control-label">Họ và tên</label>
                                    <div class="col-md-9">
                                        <input name="ctl00$ContentPlaceHolder1$UserName" type="text" value="Phong Phan" id="ContentPlaceHolder1_UserName" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="ContentPlaceHolder1_Email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input name="ctl00$ContentPlaceHolder1$Email" type="text" value="cuongptpd01198@gmail.com" id="ContentPlaceHolder1_Email" class="form-control" /><span id="ContentPlaceHolder1_regexEmailValid" class="text-danger" style="display:none;">Địa chỉ email không hợp lệ</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="ContentPlaceHolder1_Phone" class="col-md-3 control-label">Số điện thoại</label>
                                    <div class="col-md-9">
                                        <input name="ctl00$ContentPlaceHolder1$Phone" type="text" id="ContentPlaceHolder1_Phone" class="form-control" /><span id="ContentPlaceHolder1_RegularExpressionValidator3" class="text-danger" style="display:none;">Số điện thoại không đúng</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="ContentPlaceHolder1_Address" class="col-md-3 control-label">Địa chỉ</label>
                                    <div class="col-md-9">
                                        <input name="ctl00$ContentPlaceHolder1$Address" type="text" id="ContentPlaceHolder1_Address" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-offset-3 col-md-9">
                                        <input type="submit" name="ctl00$ContentPlaceHolder1$btnUpdateProfile" value="Cập nhật" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ContentPlaceHolder1$btnUpdateProfile&quot;, &quot;&quot;, true, &quot;UpdateProfile&quot;, &quot;&quot;, false, false))" id="ContentPlaceHolder1_btnUpdateProfile" class="btn btn-primary" />
                                    </div>
                                </div>
                            </div>
                            <hr />
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label for="ContentPlaceHolder1_CurrentPassword" id="ContentPlaceHolder1_CurrentPasswordLabel" class="col-md-3 control-label">Mật khẩu hiện tại</label>
                                    <div class="col-md-9">
                                        <input name="ctl00$ContentPlaceHolder1$CurrentPassword" type="password" id="ContentPlaceHolder1_CurrentPassword" class="form-control" /><span id="ContentPlaceHolder1_ctl05" class="text-danger" style="display:none;">Bạn chưa nhập mật khẩu hiện tại.</span><span id="ContentPlaceHolder1_RegularExpressionValidator1" class="text-danger" style="display:none;">Mật khẩu phải gồm 6 ký tự trở lên.</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="ContentPlaceHolder1_NewPassword" id="ContentPlaceHolder1_NewPasswordLabel" class="col-md-3 control-label">Mật khẩu mới</label>
                                    <div class="col-md-9">
                                        <input name="ctl00$ContentPlaceHolder1$NewPassword" type="password" id="ContentPlaceHolder1_NewPassword" class="form-control" /><span id="ContentPlaceHolder1_ctl06" class="text-danger" style="display:none;">Bạn chưa nhập mật khẩu mới.</span><span id="ContentPlaceHolder1_RegularExpressionValidator2" class="text-danger" style="display:none;">Mật khẩu phải gồm 6 ký tự trở lên.</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="ContentPlaceHolder1_ConfirmNewPassword" id="ContentPlaceHolder1_ConfirmNewPasswordLabel" class="col-md-3 control-label">Xác nhận mật khẩu mới</label>
                                    <div class="col-md-9">
                                        <input name="ctl00$ContentPlaceHolder1$ConfirmNewPassword" type="password" id="ContentPlaceHolder1_ConfirmNewPassword" class="form-control" /><span id="ContentPlaceHolder1_ctl07" class="text-danger" style="display:none;">Bạn chưa nhập lại mật khẩu mới.</span><span id="ContentPlaceHolder1_RegularExpressionValidator4" class="text-danger" style="display:none;">Xác nhận mật khẩu phải gồm 6 ký tự trở lên.</span><span id="ContentPlaceHolder1_ctl08" class="text-danger" style="display:none;">Mật khẩu không khớp.</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-offset-3 col-md-9">
                                        <input type="submit" name="ctl00$ContentPlaceHolder1$ctl09" value="Thay đổi mật khẩu" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ContentPlaceHolder1$ctl09&quotquot;, &quot;&quot;, true, &quot;ChangePassword&quot;, &quot;&quot;, false, false))" class="btn btn-primary" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="ContentPlaceHolder1_ctl10" class="text-danger" style="display:none;">

                    </div><div id="ContentPlaceHolder1_ctl11" class="text-danger" style="display:none;">

                </div>
            </section>
                </form>
        </div>
    </div>

</div>
</div>
</div>
</div>


@endsection