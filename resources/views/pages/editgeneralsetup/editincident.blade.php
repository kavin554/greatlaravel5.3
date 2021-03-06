<script>
    function previewFile(){
        var preview = document.querySelector('img'); //selects the query named img
        var file    = document.querySelector('input[type=file]').files[0]; //sames as here
        var reader  = new FileReader();

        reader.onloadend = function () {
            preview.src = reader.result;
        }

        if (file) {
            reader.readAsDataURL(file); //reads the data as a URL
        } else {
            preview.src = "";
        }
    }

    previewFile();  //calls the function named previewFile()
</script>
<BODY>
@include('layouts.app')
<div class="container-fluid">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">

                    <div class="container" style="padding:5px;width:100%">


                        <div class="table-responsive">
                            <form action="{{ route ('incident.update',$incident_type->id) }} " method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="_method" value="PATCH">
                                {{ csrf_field() }}

                                <table width="98%">

                                    <tr height="40">
                                        <td width="28%"
                                            align="right">
                                            Code
                                        </td>
                                        <td width="02%" align="center">:</td>
                                        <td>
                                            <table width="100%">
                                                <tr>
                                                    <td width="30%">
                                                        <input class="form-control" id="id" name="id"
                                                               type="hidden">

                                                    <td align="right">&nbsp;</td>

                                                    </td>




                                                </tr>
                                                </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>

                                    <tr height="40">
                                        <td align="right">Incident Type Name
                                        </td>
                                        <td align="center">:</td>
                                        <td><input type="text" class="form-control" id="name"
                                                   name="incident_name" value="{{$incident_type->incident_name}}"
                                                   placeholder="Enter Name "
                                                   required ></td>
                                    </tr>


                                    <tr height="40">
                                        <td align="right">Incident Type</td>
                                        <td width="02%" align="center">:</td>
                                        <td width="88%">
                                            <table width="100%">
                                                <tr>
                                                    <td width="40%">
                                                        <div class="input-append date">
                                                            <SELECT name="type"
                                                                    class="form-control" value="{{$incident_type->type}}">
                                                                <OPTION VALUE="Information">Information
                                                                </OPTION>
                                                                <OPTION VALUE="Warning">Warning</OPTION>
                                                                <OPTION VALUE="Alert">Alert</OPTION>
                                                            </SELECT>
                                                        </div>
                                                    </td>
                                                    <td width="02%">&nbsp;</td>
                                                    <td align="right">&nbsp; </td>
                                                    <td width="02%" align="center">&nbsp;</td>
                                                    <td width="20%">&nbsp;</td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>

                                    <tr height="40">
                                        <td align="right"> Image</td>
                                        <td align="center">:</td>
                                        <td>
                                            <table width="100%">
                                                <tr>
                                                    <td width="15%">

                                                        <img src="" height="200" alt="Image preview..." value="{{ asset('img/incident/')}}/{{ $incident_type->image }}">

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="40%">
                                                <tr>
                                                    <td><input type="file" name="incident" accept="image/"
                                                                           id="incident" onchange="previewFile()" value="{{ $incident_type->flag }}"></td>
                                                </tr>
                                                </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>


                                    <tr height="40">
                                        <td align="right" valign="top">Remarks</td>
                                        <td align="center" valign="top">:</td>
                                        <td><input type="text"
                                                   class="form-control"
                                                   id="remarks"
                                                   name="remarks"
                                                   value="{{$incident_type->remarks}}"
                                                   placeholder="Remarks"
                                                   required>
                                        </td>
                                    </tr>


                                    <tr height="40">
                                        <td align="right">&nbsp;</td>
                                        <td align="center">&nbsp;</td>
                                        <td>

                                            <table class="table">
                                                <tr>
                                                    <td width="50%">


                                                        <input type="submit" value="save" class="btn btn-primary pull-right">
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </form>


                        </div>
                    </div>


                </div>
            </div>
        </div>




    </div>
</div>
</BODY>
