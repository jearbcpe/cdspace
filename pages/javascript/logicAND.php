<input type="hidden" id="hiddenExamNo" value="exam_16"></input>
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
                    <h2 class="h2 text-primary ">เมื่อกดปุ่มให้แสดงผลลัพธ์ Logic AND ระหว่าง input1 กับ input2   </h2>
                </div>
                <div class="col-12 pt-10">
                    <div class="form-group row">
                        <div class="col-2">
                        <select class="form-control" id="select1">
                            <option value="False">False</option>
                            <option value="True">True</option>
						</select>
                        </div>
                        <div class="col-1" align="center">
                            <p class="form-control text-danger" id="txtOfString"> AND </p>
                        </div>
                        <div class="col-2">
                        <select class="form-control" id="select2">
                            <option value="False">False</option>
                            <option value="True">True</option>
						</select>                        
                        </div>
                        <div class="col-2">
                            <button class="form-control btn btn-success" onclick=takeLogic()> is </button>
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
<select class="form-control" id="select1">
    <option value="False">False</option>
    <option value="True">True</option>
</select>
</div>
<div class="col-1" align="center">
    <p class="form-control text-danger" id="txtOfString"> AND </p>
</div>
<div class="col-2">
<select class="form-control" id="select2">
    <option value="False">False</option>
    <option value="True">True</option>
</select>                        
</div>
<div class="col-2">
    <button class="form-control btn btn-success" onclick=takeLogic()> is </button>
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