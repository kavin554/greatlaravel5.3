<BODY>
@include('layouts.app')
<div class="container-fluid">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">

                    <div class="container" style="padding:5px;width:100%">


                        <div class="table-responsive">
                            <form action="{{ route ('location.update',$setup_location->id) }} " method="POST">
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
                                                        <input type="text" class="form-control" id="id" name="id" value="{{$setup_location->id}}"
                                                               type="hidden" readonly>


                                                    <td align="right">&nbsp;</td>

                                                    </td>




                                                </tr>
                                                </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr height="40">
                                        <td align="right">Location Name
                                        </td>
                                        <td align="center">:</td>
                                        <td><input type="text" class="form-control" id="NAME"
                                                   name="name" value="{{$setup_location->name}}"
                                                   placeholder="Enter Name "
                                                   required ></td>
                                    </tr>


                                    <tr height="40">
                                        <td align="right">Lat</td>
                                        <td width="02%" align="center">:</td>
                                        <td width="88%">
                                            <table width="100%">
                                                <tr>
                                                    <td width="30%">
                                                        <input type="text" class="form-control" id="LAT"
                                                               name="latitude" value="{{$setup_location->latitude}}"
                                                               placeholder="latitude"
                                                               required >
                                                    </td>
                                                    <td width="02%">&nbsp;</td>
                                                    <td align="right">Long</td>
                                                    <td align="center">:</td>
                                                    <td width="02%">&nbsp;</td>
                                                    <td width="30%">

                                                        <input type="text" class="form-control" id="LON"
                                                               name="longitude" value="{{$setup_location->longitude}}"
                                                               placeholder="Longitude"
                                                               required >

                                                    </td>
                                                    <td width="02%">&nbsp;</td>
                                                    <td align="right">Alt</td>
                                                    <td align="center">:</td>
                                                    <td width="02%">&nbsp;</td>
                                                    <td width="30%">

                                                        <input type="text" class="form-control" id="ALT"
                                                               name="altitude" value="{{$setup_location->altitude}}"
                                                               placeholder="Altitude"
                                                               required >

                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>

                                    <tr height="40">
                                        <td align="right"> Details</td>
                                        <td align="center">:</td>
                                        <td><input type="text" class="form-control" id="DETAILS"
                                                   name="desc"value="{{$setup_location->desc}}"
                                                   placeholder="Enter Details"
                                                   required>
                                        </td>
                                    </tr>


                                    <tr height="40">
                                        <td align="right" valign="top">Remarks</td>
                                        <td align="center" valign="top">:</td>
                                        <td><input type="text"
                                                   class="form-control"
                                                   id="remarks"
                                                   name="remarks"
                                                   value="{{$setup_location->remarks}}"
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
