<input type="hidden" id="hiddenExamNo" value="exam_20"></input>
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
                    <h2 class="h2 text-primary ">ทำการแสดงคำว่า five จากข้อความที่กำหนดให้ </h2>
                </div>
                <div class="col-12 pt-10">
                    <div class="form-group row">
                        <div class="col-5">
                            <textarea class="form-control" rows="7" id="txtListWord" value="" ></textarea>
                        </div>
                        <div class="col-2">
                            <button class="form-control btn btn-success" onclick=getFive()> = </button>
                        </div>
                        <div class="col-">
                            <input class="form-control" type="text" id="txtResult" placeholder="ผลลัพธ์" value="" readonly />
                        </div>
                        <script>
                            var listWord = "Lorem Ipsum is simply dummy text of the printing and \
                                            typesetting industry. Lorem Ipsum has been the industry's \
                                            standard dummy text ever since the 1500s, when an unknown \
                                            printer took a galley of type and scrambled it to make a \
                                            type specimen book. It has survived not only five centuries, \
                                            but also the leap into electronic typesetting, \
                                            remaining essentially unchanged. ";
                            document.getElementById('txtListWord').value = listWord;
                        </script>
                    
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
<div class="col-5">
    <textarea class="form-control" rows="7" id="txtListWord" value="" ></textarea>
</div>
<div class="col-2">
    <button class="form-control btn btn-success" onclick=getFive()> = </button>
</div>
<div class="col-">
    <input class="form-control" type="text" id="txtResult" placeholder="ตำแหน่งของ book" value="" readonly />
</div>
<script>
    var listWord = "Lorem Ipsum is simply dummy text of the printing and \
                    typesetting industry. Lorem Ipsum has been the industry's \
                    standard dummy text ever since the 1500s, when an unknown \
                    printer took a galley of type and scrambled it to make a \
                    type specimen book. It has survived not only five centuries, \
                    but also the leap into electronic typesetting, \
                    remaining essentially unchanged. ";
    document.getElementById('txtListWord').value = listWord;
</script>
                    </xmp>
                    </div>
                </div>
            </div>
            <!--end::Body-->
        </div>
        <?php include('pages/codingSpace.php'); ?>
    </div>