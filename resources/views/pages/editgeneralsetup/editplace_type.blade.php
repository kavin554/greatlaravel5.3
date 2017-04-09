<BODY>
@include('layouts.app')
<div class="container-fluid">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">

                    <div class="container" style="padding:5px;width:100%">


                        <div class="table-responsive">
                            <form action="{{ route ('place.update',$place_type->id) }} " method="POST">
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
                                                        <input type="text" class="form-control" id="id" name="id" value="{{$place_type->id}}"
                                                               type="hidden" readonly>


                                                    <td align="right">&nbsp;</td>

                                                    </td>




                                                </tr>
                                                </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right"> Place Type Name
                                        </td>
                                        <td align="center">:</td>
                                        <td><input type="text" class="form-control" id="NAME"
                                                   name="name" value="{{$place_type->name}}"
                                                   placeholder="Enter Name "
                                                   required >
                                        </td>
                                    </tr>



                                    <tr height="40">
                                        <td align="right">Icon</td>
                                        <td align="center">:</td>
                                        <td>
                                            <table width="100%">
                                                <tr>
                                                    <td width="15%">

                                                        <img src="../../GHT/image/logo.png"
                                                             style="width:200px;height:120px;">

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="40%">
                                                <tr>
                                                    <td><input type="file" name="IMAGE_PATH"
                                                               id="image"></td>
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
                                                   value="{{$place_type->remarks}}"
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
