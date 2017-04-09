

<BODY>
@include('layouts.app')
<div class="container-fluid">
    <div class="row">

        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-body">

                    <div>

                        <ul class="nav nav-tabs" role="tablist">

                            <li role="presentation" class="active"><a href="#detail" aria-controls="home" role="tab"
                                                                      data-toggle="tab"> Alert Notification Detail Form </a></li>
                            <li role="presentation"><a href="#list" aria-controls="home" role="tab"
                                                       data-toggle="tab"> Alert Notification Detail List </a></li>

                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="detail">
                                <div class="container" style="padding:5px;width:100%">

                                    <div class="table-responsive">
                                        <form action="{{ route ('AlertNotification.store') }} " method="post">
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
                                                    <td align="right">Alert Notification Name
                                                    </td>
                                                    <td align="center">:</td>
                                                    <td><input type="text" class="form-control"
                                                               name="name" value=""
                                                               placeholder="Enter Name "
                                                               required ></td>
                                                </tr>


                                                <tr height="40">
                                                    <td width="28%" align="right">Alert Description</td>
                                                    <td width="02%" align="center">:</td>
                                                    <td><input type="text" class="form-control"
                                                               name="desc"
                                                               placeholder="Alert Description " value=""
                                                               required></td>
                                                </tr>

                                                <tr height="40">
                                                    <td width="28%" align="right">Alert Notification Date</td>
                                                    <td width="02%" align="center">:</td>
                                                    <td><input type="text" class="form-control"
                                                               name="pnDate"
                                                               placeholder="Alert Notification Date " value=""
                                                               required></td>
                                                </tr>


                                                <tr height="40">
                                                    <td align="right">IMEI Number</td>
                                                    <td width="02%" align="center">:</td>
                                                    <td width="88%">
                                                        <table width="100%">
                                                            <tr>
                                                                <td><input type="text" class="form-control"
                                                                           name="imei"
                                                                           placeholder="IMEI number " value=""
                                                                           required></td>

                                                                <td width="02%">&nbsp;</td>
                                                                <td align="right">Mobile No.</td>
                                                                <td align="center">:</td>
                                                                <td width="02%">&nbsp;</td>
                                                                <td width="50%">
                                                                    <input type="number" name="mobile" class="form-control"
                                                                           placeholder="mobile number " id="LON">
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
                                                                           placeholder="latitude " id="LAT">

                                                                </td>
                                                                <td width="02%"></td></td>
                                                                <td align="right">Lon</td>
                                                                <td align="center">:</td>
                                                                <td width="02%">&nbsp;</td>
                                                                <td width="30%">
                                                                    <input name="lon" class="form-control"
                                                                           placeholder="Longitude " id="LON">

                                                                </td>
                                                                <td width="02%">&nbsp;</td>
                                                                <td align="right">Alt</td>
                                                                <td align="center">:</td>
                                                                <td width="02%">&nbsp;</td>
                                                                <td width="30%">
                                                                    <input name="alt" class="form-control"
                                                                           placeholder="Altitude " id="ALT">

                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>

                                                <tr height="40">
                                                    <td width="28%" align="right">Image</td>
                                                    <td width="02%" align="center">:</td>
                                                    <td><input type="text" class="form-control"
                                                               name="image"
                                                               placeholder="Image Path" value=""
                                                               required></td>
                                                </tr>




                                                <tr height="40">
                                                    <td align="right" valign="top">Remarks</td>
                                                    <td align="center" valign="top">:</td>
                                                    <td><textarea class="form-control" rows="1" id="REMARKS"
                                                                  placeholder="Enter Remarks"
                                                                  name="remarks">
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


                            <div role="tabpanel" class="tab-pane" id="list">
                                <div class="container" style="padding:5px;width:100%">
                                    <div class="panel panel-default">
                                    </div>

                                    <div class="list-group">
                                        <div class="panel panel-default">
                                            <div class="panel-body">

                                                <div class="list-group">
                                                    <table width="100%" class="table table-striped" border="0">
                                                        <thead>
                                                        <tr>
                                                            <th>Id</th>
                                                            <th>Name</th>
                                                            <th>Description</th>
                                                            <th>IMEI NO.</th>
                                                            <th>Mobile No.</th>
                                                            <th>Latitude</th>
                                                            <th>Longitude</th>
                                                            <th>Altitude</th>
                                                            <th>Image</th>
                                                            <th>Action</th>
                                                        </tr>


                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        foreach ($AlertNotification as $alert_notification) {?>
                                                        <tr>
                                                            <td><?php echo $alert_notification->id ?></td>
                                                            <td><?php echo $alert_notification->an_title ?></td>
                                                            <td><?php echo $alert_notification->an_desc ?></td>
                                                            <td><?php echo $alert_notification->an_imei ?></td>
                                                            <td><?php echo $alert_notification->an_mobile_number ?></td>
                                                            <td><?php echo $alert_notification->latitude ?></td>
                                                            <td><?php echo $alert_notification->longitude ?></td>
                                                            <td><?php echo $alert_notification->altitude ?></td>
                                                            <td><?php echo $alert_notification->image_path ?></td>


                                                            <td>
                                                                <form class="" method="POST"
                                                                      action="{{ route('AlertNotification.destroy', $alert_notification->id) }}">
                                                                    <input type="hidden" name="_token"
                                                                           value="{{csrf_token()}}">
                                                                    <input type="hidden" name="_method" value="delete"/>
                                                                    <a href="{{route('AlertNotification.edit', $alert_notification->id)}}"
                                                                       class="btn btn-primary">Edit</a>
                                                                    <input type="submit" class="btn btn-danger"
                                                                           onclick="return confirm('Confirm to Delete');"
                                                                           name="name " value="Delete">
                                                                </form>
                                                            </td>
                                                        </tr>
                                                        <?php } ?>
                                                        </tbody>
                                                    </table>
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
        </div>

        <div class="col-md-3">

            <div class="panel panel-default">
                <div class="panel-body">


                    <table width="100%" class="table table-striped" border="0">
                        <thead>
                        <tr style="width:100%">
                            <th width="95%">Alert Notification List</th>
                            <th width="05%">&nbsp;</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php
                        foreach ($AlertNotification as $alert_notification){?>
                        <tr>
                            <td><?php echo $alert_notification->an_title ?></td>
                            <td>
                                <form class="" method="POST"
                                      action="{{ route('AlertNotification.destroy', $alert_notification->id) }}">
                                    <input type="hidden" name="_token"
                                           value="{{csrf_token()}}">
                                    <a href="{{route('AlertNotification.edit', $alert_notification->id)}}"
                                       class="btn btn-primary">Edit</a>
                                </form>
                            </td>
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
</div>
</BODY>
