<input type="hidden" id="hiddenExamNo" value="exam_2"></input>
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
                <h2 class="h2 text-primary ">Alert ข้อความ Hello JavaScript</h2>
            </div>

            <div class="col-12 pt-10">
                <input class="form-control" type="text" id="txtHello" value="<?=$_SESSION['u_fullName'];?>" />
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
                <div class="col-6">
                    <xmp><input class="form-control" type="text" id="txtHello" value="<?=$_SESSION['u_fullName'];?>" /></xmp>
                </div>
            </div>
            <!--end::Body-->
        </div>
        <?php include('pages/codingSpace.php'); ?>
    </div>