@extends('users.template')
@section('content')
<div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                TẢI LÊN TÀI LIỆU CỦA BẠN
                            </h3>
                        </div>
                        <div class="panel-body">
                            
    <script type="text/javascript" src="../../Scripts/jquery-2.1.1.js"></script>
    <script type="text/javascript" src="../../Scripts/bootstrap.js"></script>
    <script type="text/javascript">
        function CloseRulePopup() {
            $('.modalUpload').hide();
        }
        function CallfinishInformationPopUpAfterSaveData() {
            document.getElementById('callfinishInformationPopUp').click();
        }
        function VisibleBenefitShowInformationShowList() {
            $('.modalUpload').hide();
            $('#ContentPlaceHolder1_dvBenefit').hide();
            $('#ContentPlaceHolder1_dvInformation').show();
        }
        function fileExistInSystem() {
            alert('File bạn upload đã tồn tại trong hệ thống');
            $('#ContentPlaceHolder1_dvBenefit').hide();
            $('#ContentPlaceHolder1_dvInformation').show();
        }

        function checkfilesize(source, arguments) {
            arguments.IsValid = false;
            var uploadedFile = document.getElementById("ContentPlaceHolder1_fuDocumentNew");
            var size = uploadedFile.files[0].size;
            if (size > 1048576 * 30) {
                arguments.IsValid = false;
            }
            else {
                arguments.IsValid = true;
            }
        }
    </script>
    

    <div id="ContentPlaceHolder1_dvInformation" >
	
        <div>
            <div>
                <div class="form-horizontal">
                    <div class="form-group">
                        <div class="col-xs-3">
                            Tên tài liệu 
                        </div>
                        <div class="col-xs-7">
                            <input name="ctl00$ContentPlaceHolder1$txtTitleNew" type="text" id="ContentPlaceHolder1_txtTitleNew" class="form-control" PlaceHolder="Tên tài liệu" />
                        </div>
                        <div class="col-xs-2">
                            <span id="ContentPlaceHolder1_RequiredFieldValidator2" style="color:Red;display:none;">(Chưa nhập)</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-3">
                            Mô tả 
                        </div>
                        <div class="col-xs-7">
                            <textarea name="ctl00$ContentPlaceHolder1$txtDescNew" rows="5" cols="20" id="ContentPlaceHolder1_txtDescNew" class="form-control" PlaceHolder="Mô tả phải hơn 100 ký tự">
</textarea>
                        </div>
                        <div class="col-xs-2">
                            <span id="ContentPlaceHolder1_RequiredFieldValidator3" style="color:Red;display:none;">(Chưa nhập)</span>
                        </div>
                    </div>
                    <div id="ContentPlaceHolder1_upUploadBook">
		
                            <div class="form-group">
                                <div class="col-xs-3">
                                    Lĩnh vực/ Khoa
                                </div>
                                <div class="col-xs-7">
                                    <select name="ctl00$ContentPlaceHolder1$ddlCatNew" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$ContentPlaceHolder1$ddlCatNew\&#39;,\&#39;\&#39;)&#39;, 0)" id="ContentPlaceHolder1_ddlCatNew" class="form-control">
			<option selected="selected" value="0">--Chọn lĩnh vực--</option>
			<option value="9bc0cb57-d4f9-4644-a957-023fb8bab662">Kinh Doanh Marketing</option>
			<option value="f290d1ca-125c-45e1-9826-0d4e75f06cff">Kinh Tế - Quản L&#253;</option>
			<option value="807f5abb-2be0-4924-94d6-1d626df48455">Biểu mẫu - Văn bản</option>
			<option value="9db72093-ca12-4143-8b42-26c01ab9620a">T&#224;i Ch&#237;nh - Ng&#226;n H&#224;ng</option>
			<option value="4c128851-4b3b-4131-9e6d-32f3cd221a43">C&#244;ng Nghệ Th&#244;ng Tin</option>
			<option value="6bf30a1f-bf73-4f3c-a941-44e1004c9201">Tiếng Anh - Ngoại Ngữ</option>
			<option value="7bc027e7-c2bd-489a-8964-58da1adedf43">Kỹ Thuật - C&#244;ng Nghệ</option>
			<option value="9d8fbea6-5b71-4e29-a688-63944f6f5c00">Khoa Học Tự Nhi&#234;n</option>
			<option value="73419c79-a88e-42b1-96bb-6ce62c32c996">Khoa Học X&#227; Hội</option>
			<option value="487c7697-fe2f-40e0-b14b-7e7fb2853b4f">Văn Ho&#225; - Nghệ Thuật</option>
			<option value="f9eda478-b8f6-4076-abf6-87f6689b6f93">Y Tế - Sức Khoẻ</option>
			<option value="d24c1adf-e1c0-49de-a431-9a70d3f9e04b">Văn Bản Luật</option>
			<option value="9cf61b49-84c8-451a-8646-bc57da5dba63">Kỹ Năng Mềm</option>
			<option value="583455e2-dd5b-4e7b-beba-ce4df3bf8fe6">N&#244;ng - L&#226;m - Ngư</option>
			<option value="aa988061-a2d8-4520-81ce-df99ad867691">Luận Văn - B&#225;o C&#225;o</option>
			<option value="1fb25944-4021-4645-b3d9-530f7a3ebd0a">Giải Tr&#237; - Thư Gi&#227;n</option>
			<option value="0081c134-9cf7-40e1-bbc0-b970c5839660">&#212;n thi ĐH-CĐ</option>
			<option value="6f58d7ec-5ed5-42a4-9fe7-6156b55b396f">T&#224;i Liệu Phổ Th&#244;ng</option>
			<option value="c20cf228-fb29-49d9-9012-4d623db6db10">Đề thi - Kiểm tra</option>
			<option value="57180325-5db3-4233-812d-fe71773cc128">B&#224;i Giảng Điện Tử</option>
			<option value="8d6e54c4-a29a-4ed0-b053-b62ececae894">Gi&#225;o &#193;n Điện Tử</option>

		</select>
                                </div>
                                <div class="col-xs-7">
                                    <span id="ContentPlaceHolder1_reqFavoriteColor" style="color:Red;display:none;">(Chưa nhập)</span>
                                </div>
                            </div>
                            
                        
	</div>
                    <div class="form-group">
                        <div class="col-xs-3">
                            Từ khóa 
                        </div>
                        <div class="col-xs-7">
                            <input name="ctl00$ContentPlaceHolder1$txtTagsNew" type="text" id="ContentPlaceHolder1_txtTagsNew" class="form-control" PlaceHolder="Từ khóa" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-3">
                            Chọn file
                        </div>
                        <div class="col-xs-7">
                            <input type="file" name="ctl00$ContentPlaceHolder1$fuDocumentNew" id="ContentPlaceHolder1_fuDocumentNew" />
                            <span id="ContentPlaceHolder1_NewPasswordCustomValidator" title="FileSize should not exceed 5kb" style="color:Red;display:none;">*</span>
                            <span id="ContentPlaceHolder1_ctl02" style="color:Red;display:none;">Bạn phải đăng tải tài liệu có đuôi mở rộng như sau: doc, docx, pdf, pps, ppt, pptx</span>
                        </div>
                        <div class="col-xs-2">
                            <span id="ContentPlaceHolder1_RequiredFieldValidator4" style="color:Red;display:none;">(Chưa nhập)</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-3">
                        </div>
                        <div class="col-xs-7">
                            <span style="color: #0080FF">(Là file hỗ trợ của tài liệu, chỉ chấp nhận định dạng pdf, doc, ppt, pptx, docx. Hãy chắc chắn file đưa lên an toàn.
Ví dụ nhập tên file: Quản trị SQL Server 2012 R2)
                            </span>
                        </div>
                        <div class="col-xs-2">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-3">
                        </div>
                        <div class="col-xs-7">
                            <input type="submit" name="ctl00$ContentPlaceHolder1$btnSaveNewData" value="Hoàn thành" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ContentPlaceHolder1$btnSaveNewData&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="ContentPlaceHolder1_btnSaveNewData" class="btn btn-default btn-primary pull-right" style="width: 100px" />
                        </div>
                        <div class="col-xs-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</div>

    <a data-toggle="modal" data-target=".finishInformationPopUp" href="#" id="callfinishInformationPopUp" style="display: none">callfinishInformationPopUp
    </a>

    <div class="modal fade finishInformationPopUp" tabindex="-1" role="dialog" data-backdrop="static"
        data-keyboard="false" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h5>Thông báo</h5>
                </div>
                <div class="modal-body">
                    Tài liệu tải lên của bạn đã thành công. Chúng tôi sẽ kiểm duyệt nội dung tài liệu của bạn
                        và chấp nhận đăng tải lên hệ thống nếu là tài liệu hợp lý theo các điều khoản thuộc quy
                        định kiểm duyệt của thư viện số.
                </div>
                <div class="modal-footer">
                    <input type="submit" name="ctl00$ContentPlaceHolder1$btnNewOtherUploadDocument" value="Tải tài liệu khác" id="ContentPlaceHolder1_btnNewOtherUploadDocument" class="btn btn-default btn-primary" style="width: 150px" />
                    <input type="submit" name="ctl00$ContentPlaceHolder1$btnFinish" value="Kết thúc" id="ContentPlaceHolder1_btnFinish" class="btn btn-default btn-danger" style="width: 100px" />
                </div>
            </div>
        </div>
    </div>

    

                        </div>
                    </div>
                </div>
            </div>

@endsection