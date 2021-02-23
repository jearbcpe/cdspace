<input type="hidden" id="hiddenExamNo" value="exam_31"></input>
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
                    <h2 class="h2 text-primary ">แสดงตารางข้อมูล Member จากการเรียกใช้ Service : getListMember</h2>
                </div>
                <div class="col-12 pt-10">
                <div id="divTableResult"></div>

                <script>
                    function createTableFromJSON(jsonData,divName){
                        var tbHTML = 
                        '<table class="table">\
                            <thead>\
                                <tr>\
                                    <th scope="col">#</th>\
                                    <th scope="col">Name</th>\
                                    <th scope="col">Age</th>\
                                    <th scope="col">Email</th>\
                                </tr>\
                            </thead>\
                            <tbody>';

                        for(i=0;i < jsonData.length; i++){
                            var member = jsonData[i];
                            tbHTML +=  '<tr>\
                                    <th scope="row">' + member.memId + '</th>\
                                    <td>' + member.memPreName + member.memFirstName + ' ' + member.memLastName + '</td>\
                                    <td>' + member.memAge +'</td>\
                                    <td>' + member.memEmail + '</td>\
                                    <td>\
                                        <button type="button" class="btn btn-light-success font-weight-bold mr-2 btn-sm" onclick="alert('+member.memId+')">button</button>\
                                    </td>\
                                </tr>';
                        }
                        
                        tbHTML += '</tbody></table>';
                        $("#"+divName).html(tbHTML);
                    }
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

<div id="divTableResult"></div>

<script>
 function createTableFromJSON(jsonData,divName){
    var tbHTML = 
    '<table class="table">\
        <thead>\
            <tr>\
                <th scope="col">#</th>\
                <th scope="col">Name</th>\
                <th scope="col">Age</th>\
                <th scope="col">Email</th>\
            </tr>\
        </thead>\
        <tbody>';

    for(i=0;i < jsonData.length; i++){
        var member = jsonData[i];
        tbHTML +=  '<tr>\
                <th scope="row">' + member.memId + '</th>\
                <td>' + member.memPreName + member.memFirstName + ' ' + member.memLastName + '</td>\
                <td>' + member.memAge +'</td>\
                <td>' + member.memEmail + '</td>\
                <td>\
            <button type="button" class="btn btn-light-success font-weight-bold mr-2 btn-sm" onclick="alert('+
            member.memId+')">button</button>\
                </td>\
            </tr>';
    }
    
    tbHTML += '</tbody></table>';
    $("#"+divName).html(tbHTML);
}
</script>
                        </xmp>
                    </div>
                </div>
            </div>
            <!--end::Body-->
        </div>
        <?php include('pages/codingSpace.php'); ?>
    </div>