
<div class="card card-custom card-shadowless gutter-b" id="divJSCode">
            <!--begin::Body-->
            <div class="card-body">
                <h3 class="card-title align-items-start flex-column">

                    <div class="col-12">

                        <span class="card-label font-weight-bolder text-dark">JavaScript</span>
                    </div>
                </h3>
                <div class="col-6">
                    <p id="pJSCode"></p>
                </div>
            </div>
            <!--end::Body-->
        </div>
<div class="card card-custom card-shadowless gutter-b">
    <div class="card-header border-0 py-5">
        <h3 class="card-title align-items-start flex-column">
            <div class="col-12">
                <span class="card-label font-weight-bolder text-dark">Coding space</span>
            </div>

            <!--<span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>-->
        </h3>
        <div class="card-toolbar">
            <button id="btnSaveCode" type="button" onclick="saveCode()" class="btn btn-hover-bg-success btn-text-success btn-hover-text-white border-0 font-weight-bold mr-2">Save</button>
            <button id="btnLoadCode" type="button" onclick="loadCode()" class="btn btn-hover-bg-warning btn-text-warning btn-hover-text-white border-0 font-weight-bold mr-2">Load</button>
        </div>
    </div>
    <div class="card-body">
        <div class="card card-custom card-shadowless gutter-b">
            <div class="col-12">
                <div class="col-12">
                    <div class="form-group row">
                        <textarea class="form-control" rows="5" id="txtCode"></textarea>
                    </div>
                    <div class="form-group row">
                        <button type="button" onclick="run();" class="btn btn-lg btn-outline-success mr-2">Run</button>
                        <button type="button" onclick="clearCode();" class="btn btn-lg btn-outline-danger mr-2">Clear</button>
                    </div>

                </div>


            </div>
            <div class="col-12">
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

<script>
    loadCode();
    $("#divJSCode").hide();
    $("#divShowSuccess").hide();

    function run() {
       
        var el = document.getElementById('txtCode');
        var scriptText = el.value;
        if($.trim(scriptText) != "")
            $("#divJSCode").show();
        $("#pJSCode").html('<xmp>'+scriptText+'</xmp>');
        var oldScript = document.getElementById('scriptContainer');
        var newScript;

        if (oldScript) {
            oldScript.parentNode.removeChild(oldScript);
        }

        newScript = document.createElement('script');
        newScript.id = 'scriptContainer';
        newScript.text = el.value;
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
                    $("#divShowSuccess").show().delay(1000).fadeOut();
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
                    $("textarea#txtCode").val(codeContent);
                    $('#btnLoadCode').prop('disabled', false);
                    if($.trim($("#txtCode").val())=='')
                        $('#btnSaveCode').prop('disabled', true);
                    else
                        $('#btnSaveCode').prop('disabled', false);
                } else if (rs['status'] == "fail") {
                    $('#btnLoadCode').prop('disabled', true);
                    if($.trim($("#txtCode").val())=='')
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
</script>