<div class="card card-custom card-shadowless gutter-b" id="divJSCode">
    <!--begin::Body-->
    <div class="card card-custom bg-success">
        <div class="card-header border-0">
            <div class="card-title">
                <span class="card-icon">
                    <i class="flaticon2-chat-1 text-white"></i>
                </span>
                <h3 class="card-label text-white">JavaScript</h3>
            </div>

        </div>
        <div class="separator separator-solid separator-white opacity-20"></div>
        <div class="col-12">
            <div class="col-12">
                <p style="color:aliceblue;font-size: 22px;" id="pJSCode"></p>
            </div>
        </div>
    </div>
    <!--end::Body-->
</div>
<div class="card card-custom card-shadowless gutter-b" id="divCdSpace">
    <div class="card-header border-0 py-5">
        <h3 class="card-title align-items-start flex-column">
            <div class="col-12">
                <span class="card-label font-weight-bolder text-dark">Coding space</span>
            </div>

            <!--<span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>-->
        </h3>
        <!--
        <div class="card-toolbar">
            <button id="btnSaveCode" type="button" onclick="saveCode()" class="btn btn-hover-bg-success btn-text-success btn-hover-text-white border-0 font-weight-bold mr-2">Save</button>
            <button id="btnLoadCode" type="button" onclick="loadCode()" class="btn btn-hover-bg-warning btn-text-warning btn-hover-text-white border-0 font-weight-bold mr-2">Load</button>
        </div>
        -->
    </div>
    <div class="card-body">
        <div class="card card-custom card-shadowless gutter-b">
            <div class="col-12 ">



                <div class="col-12">

                    <div class="form-group row">
                        <div class="col-11">
                            <textarea class="form-control" rows="40" id="txtCode" style="font-size: 16px;"></textarea>

                        </div>
                        <div class="col-1">
                            <div class="form-group row">
                                <a href="#divCdSpace" id="btnSaveCode" class="btn btn-icon btn-outline-success px-12 py-20" onclick="saveCode()">
                                    <i class="far fa-save icon-2x"></i>
                                </a>
                            </div>
                            <div class="form-group row">
                                <a href="#divCdSpace"  id="btnLoadCode" class="btn btn-icon btn-outline-warning pt-10 px-12 py-20" onclick="loadCode()">
                                    <i class="fas fa-download icon-2x"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <input class="form-control" type="text" value="" id="txtComment" placeholder="Comment">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <button type="button"  onclick="run();" class="btn btn-lg btn-outline-success mr-2">Run</button>
                            <button type="button" onclick="clearCode();" class="btn btn-lg btn-outline-danger mr-2">Clear</button>
                        </div>
                    </div>
                    
                    <div class="form-group " id="divShowSuccess">
                        <div class="alert alert-custom alert-light-success fade show mb-5" role="alert">
                            <div class="alert-text">บันทึกสำเร็จ</div>
                        </div>
                    </div>

                    <div class="form-group " hidden>
                        <div class="alert alert-danger" role="alert">
                            <div class="alert-text">บันทึกไม่สำเร็จ</div>
                        </div>
                    </div>
                </div>



            </div>

        </div>
    </div>
</div>

<script>
    loadCode();

    $("#divJSCode").hide();
    $("#divShowSuccess").hide();

    function run() {

        var el = document.getElementById('txtCode');
        var scriptText = el.value;
        if ($.trim(scriptText) != "")
            $("#divJSCode").show();
        $("#pJSCode").html('<xmp>' + scriptText + '</xmp>');
        var oldScript = document.getElementById('scriptContainer');
        var newScript;

        if (oldScript) {
            oldScript.parentNode.removeChild(oldScript);
        }

        newScript = document.createElement('script');
        newScript.id = 'scriptContainer';
        newScript.text = el.value;
        saveCode();
        document.body.appendChild(newScript);
        document.getElementById('txtCode').focus();
    }

    function clearCode() {
        document.getElementById('txtCode').value = "";
        document.getElementById('txtCode').focus();
    }

    function saveCode() {
        var parm = new Object();
        parm.u_id = "<?= $_SESSION['u_id']; ?>";
        parm.codeContent = btoa($("#txtCode").val());
        parm.examNo = $("#hiddenExamNo").val();
        parm.comment = $("#txtComment").val();
        var myJson = JSON.stringify(parm);

        $.ajax({
            url: 'https://portal.moj.go.th/ws/academy/academy.php/saveCode',
            type: "POST",
            datatype: "application/json",
            data: myJson,
            async: true,
            success: function(data) {
                var rs = $.parseJSON(data);
                if (rs['status'] == "success") {

                    //$('#divShowSuccess').show();
                    $("#divShowSuccess").show().delay(500).fadeOut();
                    $('#btnSaveCode').prop('disabled', true);

                    $('#btnLoadCode').prop('disabled', false);

                    //$('#').removeClass('hidden');
                    //$('#successfulSave').addClass('hidden');

                }
            },
            error: function() {
                console.log("error"); //writeLog
            }
        });
    }

    function loadCode() {
        var parm = new Object();
        parm.u_id = "<?= $_SESSION['u_id']; ?>";
        parm.examNo = $("#hiddenExamNo").val();
        var myJson = JSON.stringify(parm);

        $.ajax({
            url: 'https://portal.moj.go.th/ws/academy/academy.php/loadCode',
            type: "POST",
            datatype: "application/json",
            data: myJson,
            async: true,
            success: function(data) {
                var rs = $.parseJSON(data);

                if (rs['status'] == "success") {
                    var codeContent = atob(rs['codeContent']);
                    var comment = rs['comment'];
                    $("textarea#txtCode").val(codeContent);
                    $("#txtComment").val(comment);
                    $('#btnLoadCode').prop('disabled', false);
                    if ($.trim($("#txtCode").val()) == '')
                        $('#btnSaveCode').prop('disabled', true);
                    else
                        $('#btnSaveCode').prop('disabled', false);

                    run();
                } else if (rs['status'] == "fail") {
                    $('#btnLoadCode').prop('disabled', true);
                    if ($.trim($("#txtCode").val()) == '')
                        $('#btnSaveCode').prop('disabled', true);
                    else
                        $('#btnSaveCode').prop('disabled', false);
                }
            },
            error: function() {
                console.log("error"); //writeLog
            }
        });
    }

    $("#txtCode").keyup(function() {
        if ($.trim($("#txtCode").val()) == '')
            $('#btnSaveCode').prop('disabled', true);
        else
            $('#btnSaveCode').prop('disabled', false);
    });
    $("#txtComment").keyup(function() {
        if ($.trim($("#txtComment").val()) == '')
            $('#btnSaveCode').prop('disabled', true);
        else
            $('#btnSaveCode').prop('disabled', false);
    });
</script>