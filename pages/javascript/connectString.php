<input type="hidden" id="hiddenExamNo" value="exam_7"></input>
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
                    <h2 class="h2 text-primary ">แสดงข้อความ Ministry of Justice หลังจากกดปุ่ม =</h2>
                </div>
                <div class="col-12 pt-10">
                    <div class="form-group row">
                        <div class="col-2">
                            <input class="form-control" type="text" id="txtFirst" value="" />
                        </div>
                        <div class="col-1" align="center">
                            <input class="form-control" id="txtOfString" value=" of " readonly> </input>
                        </div>
                        <div class="col-2">
                            <input class="form-control" type="text" id="txtSecond" value="" />
                        </div>
                        <div class="col-2">
                            <button class="form-control btn btn-success" onclick=calNumber()> = </button>
                        </div>
                        <div class="col-4">
                            <h3 class="display-4" id="txtResult">?</p>
                        </div>
                    </div>
                </div>

            </div>
            <!--end::Body-->
        </div>
        <div class="card card-custom card-shadowless gutter-b">
            <!--begin::Body-->
            <div class="card-body">
                <h3 class="card-title align-items-start flex-column">

                    <div class="col-12">

                        <span class="card-label font-weight-bolder text-dark">HTML</span>
                    </div>
                </h3>
                <div class="col-12">
                    <xmp>
<div class="col-2">
    <input class="form-control" type="text" id="txtFirst" value="" />
</div>
<div class="col-1" align="center">
    <input class="form-control" id="txtOfString" value=" of " readonly> </input>
</div>
<div class="col-2">
    <input class="form-control" type="text" id="txtSecond" value="" />
</div>
<div class="col-2">
    <button class="form-control btn btn-success" onclick=calNumber()> = </button>
</div>
<div class="col-4">
    <h3 class="display-4" id="txtResult">?</p>
</div>
                    </xmp>
                </div>
            </div>
            <!--end::Body-->
        </div>
        <?php include('pages/codingSpace.php'); ?>
    </div>