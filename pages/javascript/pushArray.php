<input type="hidden" id="hiddenExamNo" value="exam_23"></input>
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <div class="card card-custom card-shadowless gutter-b">
            <!--begin::Header-->
            <!--
            <div class="card-header border-0 py-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label font-weight-bolder text-dark">JavaScript</span>
                   <span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
                </h3>
            </div>
-->
            <!--end::Header-->

            <!--begin::Body-->
            <div class="card-body">
                <div class="col-12">
                    <h2 class="h2 text-primary ">กดปุ่ม Push เพื่อเพิ่มข้อมูล / กดปุ่ม Pop เพื่อลบข้อมูลตัวสุดท้าย </h2>
                </div>
                <div class="col-12 pt-10">
                    <div class="form-group row">
                        <div class="col-3">
                            <input class="form-control" type="text" id="txtStrArray" value="" />
                        </div>
                        <div class="col-3">
                            <input class="form-control" type="text" id="txtNewStr" value="" />
                        </div>
                        <div class="col-2">
                            <button class="form-control btn btn-success" onclick=pushMember()> Push </button>
                        </div>
                        <div class="col-2">
                            <button class="form-control btn btn-danger" onclick=popMember()> POP </button>
                        </div>
                      
                    </div>
                    <script>
                        var arrStr = ['orange','green','blue','red'];
                        document.getElementById('txtStrArray').value = arrStr.toString();
                    </script>

                </div>

            </div>
            <!--end::Body-->
        </div>
        <div class="card card-custom card-shadowless gutter-b" >
    <!--begin::Body-->
    <div class="card card-custom bg-primary">
                <div class="card-header border-0">
                    <div class="card-title">
                        <span class="card-icon">
                            <i class="flaticon2-chat-1 text-white"></i>
                        </span>
                        <h3 class="card-label text-white">HTML</h3>
                    </div>
                  
                </div>
                <div class="separator separator-solid separator-white opacity-20"></div>
                <div class="col-12">
                    <div class="col-12"  style="color:aliceblue;font-size: 20px;" >
                    <xmp>
<div class="col-3">
        <input class="form-control" type="text" id="txtStrArray" value="" />
    </div>
    <div class="col-3">
        <input class="form-control" type="text" id="txtNewStr" value="" />
    </div>
    <div class="col-2">
        <button class="form-control btn btn-success" onclick=pushMember()> Push </button>
    </div>
    <div class="col-2">
        <button class="form-control btn btn-danger" onclick=popMember()> POP </button>
    </div>
    
</div>
<script>
    var arrStr = ["orange","green","blue","red"];
    document.getElementById('txtStrArray').value = arrStr.toString();
</script>
                    </xmp>
                </div>
                </div>
            </div>
            <!--end::Body-->
        </div>
        <?php include('pages/codingSpace.php'); ?>
    </div>