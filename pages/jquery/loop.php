<input type="hidden" id="hiddenExamNo" value="exam_27"></input>
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
                    <h2 class="h2 text-primary ">หาผลรวมของ<u>เลขคี่</u>ของช่วงตัวเลข เช่น 1 2 3 4 = 4 </h2>
                </div>
                <div class="col-12 pt-10">
                    <div class="form-group row">
                        <div class="col-3">
                            <input class="form-control" type="number" min="0" max="100" id="txtStartNumber" value="" placeholder="เลขเริ่มต้น" />
                        </div>
                        <div class="col-1" align="center">
                            <p class="form-control text-danger" id="txtOfString"> to </p>
                        </div>
                        <div class="col-3">
                            <input class="form-control" type="number" min="0" max="100" id="txtEndNumber" value="" placeholder="เลขสิ้นสุด" />
                        </div>
                        <div class="col-2">
                            <button class="form-control btn btn-success" onclick=sumOdd()> = </button>
                        </div>
                        <div class="col-2">
                            <input class="form-control" type="text" id="txtResult" placeholder="ผลรวม" value="" readonly />
                        </div>
                    
                    </div>
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
                    <div class="col-12"  style="color:aliceblue;font-size: 22px;" >
                    <xmp>
<div class="col-3">
    <input class="form-control" type="number" min="0" max="100" id="txtStartNumber" value="" placeholder="เลขเริ่มต้น" />
</div>
<div class="col-1" align="center">
    <p class="form-control text-danger" id="txtOfString"> to </p>
</div>
<div class="col-3">
    <input class="form-control" type="number" min="0" max="100" id="txtEndNumber" value="" placeholder="เลขสิ้นสุด" />
</div>
<div class="col-2">
    <button class="form-control btn btn-success" onclick=sumOdd()> = </button>
</div>
<div class="col-2">
    <input class="form-control" type="text" id="txtResult" placeholder="ผลรวม" value="" readonly />
</div>
                    </xmp>
                </div>
                </div>
            </div>
            <!--end::Body-->
        </div>
        <?php include('pages/codingSpace.php'); ?>
    </div>