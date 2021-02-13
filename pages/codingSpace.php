<div class="card card-custom card-shadowless gutter-b">
    <div class="card-header border-0 py-5">
        <h3 class="card-title align-items-start flex-column">
            <div class="col-12">
                <span class="card-label font-weight-bolder text-dark">Coding space</span>
            </div>
           
            <!--<span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>-->
        </h3>
        <div class="card-toolbar">
                <button type="button" onclick="saveCode();" class="btn btn-text-success btn-hover-light-success font-weight-bold mr-2">Save</button>
                <button type="button" onclick="loadCode();" class="btn btn-text-warning btn-hover-light-warning font-weight-bold mr-2">Load</button>          
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
                    <div class="form-group row">
                       </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function run() {
        var el = document.getElementById('txtCode');
        var scriptText = el.value;
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

    function saveCode(){
        alert("Save");
    }

    function loadCode(){
        alert("Load");
    }
</script>