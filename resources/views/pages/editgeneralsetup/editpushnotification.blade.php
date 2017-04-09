

<BODY>
@include('layouts.app')
<div class="container-fluid">
    <div class="row">

        <div class="col-md-9 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">

                    <div>

                        <ul class="nav nav-tabs" role="tablist">

                            <li role="presentation" class="active"><a href="#detail" aria-controls="home" role="tab"
                                                                      data-toggle="tab"> Push Notification Detail Form </a></li>


                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="detail">
                                <div class="container" style="padding:5px;width:100%">

                                    <div class="table-responsive">
                                        <form action="{{ route ('PushNotification.update', $push_notification->id) }} " method="post">
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
                                                                    <input class="form-control" type="hidden">


                                                                <td align="right">&nbsp;</td>

                                                                </td>




                                                            </tr>
                                                            </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>

                                                {{--<tr height="40">--}}
                                                {{--<td width="28%" align="right">Push Notification ID</td>--}}
                                                {{--<td width="02%" align="center">:</td>--}}
                                                {{--<td><input type="text" class="form-control" id="NAME"--}}
                                                {{--name="id" value=""--}}
                                                {{--placeholder="Push Description " value=""--}}
                                                {{--required></td>--}}
                                                {{--</tr>--}}

                                                <tr height="40">
                                                    <td align="right">Push Notification Name
                                                    </td>
                                                    <td align="center">:</td>
                                                    <td><input type="text" class="form-control"
                                                               name="name" value="{{$push_notification->pn_title}}"
                                                               placeholder="Enter Name "
                                                               required ></td>
                                                </tr>


                                                <tr height="40">
                                                    <td width="28%" align="right">Push Description</td>
                                                    <td width="02%" align="center">:</td>
                                                    <td><input type="text" class="form-control"
                                                               name="desc"
                                                               placeholder="Push Description " value="{{$push_notification->pn_desc}}"
                                                               required></td>
                                                </tr>

                                                <tr height="40">
                                                    <td width="28%" align="right">Push Notification Date</td>
                                                    <td width="02%" align="center">:</td>
                                                    <td><input type="text" class="form-control"
                                                               name="pnDate" placeholder="Push Notification Date " value="{{$push_notification->pn_date}}"
                                                               required></td>
                                                </tr>


                                                <tr height="40">
                                                    <td align="right">IMEI Number</td>
                                                    <td width="02%" align="center">:</td>
                                                    <td width="88%">
                                                        <table width="100%">
                                                            <tr>
                                                                <td><input type="text" class="form-control"
                                                                           name="imei" placeholder="IMEI number " value="{{$push_notification->imei_number}}"
                                                                           required></td>

                                                                <td width="02%">&nbsp;</td>
                                                                <td align="right">Mobile No.</td>
                                                                <td align="center">:</td>
                                                                <td width="02%">&nbsp;</td>
                                                                <td width="50%">
                                                                    <input type="number" name="mobile" class="form-control"
                                                                           placeholder="mobile number " id="LON" value="{{$push_notification->mobile_number}}">
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>

                                                <tr height="40">
                                                    <td align="right">Lat</td>
                                                    <td width="02%" align="center">:</td>
                                                    <td width="88%">
                                                        <table width="100%">
                                                            <tr>
                                                                <td width="30%">

                                                                    <input name="lat" class="form-control"
                                                                           placeholder="latitude " value="{{$push_notification->latitude}}" id="LAT">

                                                                </td>
                                                                <td width="02%"></td></td>
                                                                <td align="right">Lon</td>
                                                                <td align="center">:</td>
                                                                <td width="02%">&nbsp;</td>
                                                                <td width="30%">
                                                                    <input name="lon" class="form-control"
                                                                           placeholder="Longitude " value="{{$push_notification->longitude}}" id="LON">

                                                                </td>
                                                                <td width="02%">&nbsp;</td>
                                                                <td align="right">Alt</td>
                                                                <td align="center">:</td>
                                                                <td width="02%">&nbsp;</td>
                                                                <td width="30%">
                                                                    <input name="alt" class="form-control"
                                                                           placeholder="Altitude " value="{{$push_notification->altitude}}" id="ALT">

                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>

                                                <tr height="40">
                                                    <td width="28%" align="right">Image</td>
                                                    <td width="02%" align="center">:</td>
                                                    <td><input type="text" class="form-control"
                                                               name="image" value="{{$push_notification->image_path}}"
                                                               placeholder="Image Path"
                                                               required></td>
                                                </tr>




                                                <tr height="40">
                                                    <td align="right" valign="top">Remarks</td>
                                                    <td align="center" valign="top">:</td>
                                                    <td><textarea class="form-control" rows="1" id="REMARKS" name="remarks"
                                                                  placeholder="Enter Remarks" value="{{$push_notification->remarks}}"
                                                                  >
                                                        </textarea></td>
                                                </tr>


                                                <tr height="40">
                                                    <td align="right">&nbsp;</td>
                                                    <td align="center">&nbsp;</td>
                                                    <td>

                                                        <table class="table">
                                                            <tr>
                                                                {{--<td width="50%">--}}


                                                                {{--<input type="hidden" name="operation"--}}
                                                                {{--value="submit">--}}
                                                                {{--<button type="submit"--}}
                                                                {{--class="btn btn-success">--}}
                                                                {{--<b>Submit</b>--}}
                                                                {{--</button>--}}
                                                                {{--</form>--}}

                                                                {{--</td>--}}


                                                                <td width="25%" align="left">

                                                                    <input type="submit" class="btn btn-primary pull-right" value="save">




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
        </div>




    </div>
</div>
</BODY>
