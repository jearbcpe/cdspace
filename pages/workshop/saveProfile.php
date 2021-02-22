<input type="hidden" id="hiddenExamNo" value="exam_24"></input>
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
                    <h2 class="h2 text-primary ">Alert ข้อมูลแต่ละฟิล์ดเป็น JSON ที่เป็น String </h2>
                </div>
                <div class="col-12 pt-10">
                <div class="row">
                        <div class="form-group col-3">
                            <label style="font-size:15px;">คำนำหน้า</label>
                          
                            <select class="form-control text-secondary" id="sePreName" style="background-image: none;">
                                    <option value="0">คำนำหน้า</option>
                                    <option value="1">นาย</option>
                                    <option value="2">นาง</option>
                                    <option value="3">นางสาว</option>
                                </select>
          
                            <div class="valid-feedback">ข้อมูลถูกต้อง</div>
                            <div class="invalid-feedback">กรุณาเลือกคำนำหน้า</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label style="font-size:15px;">ชื่อ</label>
                           
                                <input class="form-control" type="text" id="txtFirstName" placeholder="ชื่อ" value="" >
                                <div class="valid-feedback">ข้อมูลถูกต้อง</div>
                                <div class="invalid-feedback">ข้อมูลไม่ถูกต้อง</div>
                           
                        </div>
                        <div class="form-group col-6">
                            <label style="font-size:15px;">นามสกุล</label>
                                <input class="form-control" type="text" id="txtLastName" placeholder="นามสกุล" value="" >
                                <div class="valid-feedback">ข้อมูลถูกต้อง</div>
                                <div class="invalid-feedback">ข้อมูลไม่ถูกต้อง</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label style="font-size:15px;">อายุ</label>
                            <input class="form-control" type="number" id="txtAge" placeholder="อายุ" value="0" >
                            <div class="valid-feedback">ข้อมูลถูกต้อง</div>
                            <div class="invalid-feedback">ข้อมูลไม่ถูกต้อง</div>
                        </div>
                        <div class="form-group col-6">
                            <label style="font-size:15px;">อีเมล</label>
                           
                            <input class="form-control" type="text" id="txtEmail" placeholder="อีเมล" value="" >
                            <div class="valid-feedback">ข้อมูลถูกต้อง</div>
                            <div class="invalid-feedback">ข้อมูลไม่ถูกต้อง</div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-2">
                            <button class="form-control btn btn-success" onclick="saveProfile()"> ตรวจสอบ </button>
                        </div>
                    </div>
                    <script>
                         var emailRegex = /\S+@\S+\.\S+/;
                    </script>
                </div>

            </div>
            <!--end::Body-->
        </div>
        <div class="card card-custom card-shadowless gutter-b">
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
                    <div class="col-12" style="color:aliceblue;font-size: 22px;">
                        <xmp>
<div class="row">
<div class="form-group col-3">
    <label style="font-size:15px;">คำนำหน้า</label>
    
    <select class="form-control text-secondary" id="sePreName" style="background-image: none;">
            <option value="0">คำนำหน้า</option>
            <option value="1">นาย</option>
            <option value="2">นาง</option>
            <option value="3">นางสาว</option>
        </select>

    <div class="valid-feedback">ข้อมูลถูกต้อง</div>
    <div class="invalid-feedback">กรุณาเลือกคำนำหน้า</div>
</div>
</div>
<div class="row">
<div class="form-group col-6">
    <label style="font-size:15px;">ชื่อ</label>
    
        <input class="form-control" type="text" id="txtFirstName" placeholder="ชื่อ" value="" >
        <div class="valid-feedback">ข้อมูลถูกต้อง</div>
        <div class="invalid-feedback">ข้อมูลไม่ถูกต้อง</div>
    
</div>
<div class="form-group col-6">
    <label style="font-size:15px;">นามสกุล</label>
        <input class="form-control" type="text" id="txtLastName" placeholder="นามสกุล" value="" >
        <div class="valid-feedback">ข้อมูลถูกต้อง</div>
        <div class="invalid-feedback">ข้อมูลไม่ถูกต้อง</div>
</div>
</div>
<div class="row">
<div class="form-group col-6">
    <label style="font-size:15px;">อายุ</label>
    <input class="form-control" type="number" id="txtAge" placeholder="อายุ" value="0" >
    <div class="valid-feedback">ข้อมูลถูกต้อง</div>
    <div class="invalid-feedback">ข้อมูลไม่ถูกต้อง</div>
</div>
<div class="form-group col-6">
    <label style="font-size:15px;">อีเมล</label>
    
    <input class="form-control" type="text" id="txtEmail" placeholder="อีเมล" value="" >
    <div class="valid-feedback">ข้อมูลถูกต้อง</div>
    <div class="invalid-feedback">ข้อมูลไม่ถูกต้อง</div>
</div>
</div>
<div class="form-group row">
<div class="col-2">
    <button class="form-control btn btn-success" onclick="saveProfile()"> ตรวจสอบ </button>
</div>
</div>
<script>
    var emailRegex = /\S+@\S+\.\S+/;
</script>
                        </xmp>
                    </div>
                </div>
            </div>
            <!--end::Body-->
        </div>
        <?php include('pages/codingSpace.php'); ?>
    </div>