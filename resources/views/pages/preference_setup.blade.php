<BODY>
@include('layouts.app')
@include('layouts.map')
<div class="container-fluid">
    <div class="row">


        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-body">


                    <div role="tabpanel">

                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#detail" aria-controls="home" role="tab"
                                                                      data-toggle="tab">Preference Setup Form </a></li>
                            <li role="presentation"><a href="#list" aria-controls="home" role="tab" data-toggle="tab">Preference
                                    Setup List</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="detail">

                                <form role="form" method="post" action="preference_setup.php">

                                    <div class="container" style="padding:5px;width:100%">

                                        <div class="table-responsive">

                                            <table width="98%">

                                                <tr height="40">
                                                    <td width="28%" align="right">Country</td>
                                                    <td width="02%" align="center">:</td>
                                                    <td width="88%">
                                                        <table width="100%">
                                                            <tr>
                                                                <td width="30%">
                                                                    <div class="input-append date">
                                                                        <input name="COUNTYR_CODE" class="form-control"
                                                                               placeholder="Country Code"
                                                                               id="COUNTYR_CODE">
                                                                    </div>
                                                                </td>
                                                                <td width="02%">&nbsp;</td>
                                                                <td width="70%"><input name="COUNTYR_NAME"
                                                                                       class="form-control"
                                                                                       placeholder="Country Name"
                                                                                       id="COUNTYR_NAME"></td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>

                                                <tr height="40">
                                                    <td align="right">Location</td>
                                                    <td align="center">:</td>
                                                    <td><input type="text" class="form-control" id="LOCATION"
                                                               name="LOCATION" value="" placeholder="Enter Location"
                                                               value="" required></td>
                                                </tr>

                                                <tr height="40">
                                                    <td align="right">Lat</td>
                                                    <td width="02%" align="center">:</td>
                                                    <td width="88%">
                                                        <table width="100%">
                                                            <tr>
                                                                <td width="30%">

                                                                    <input name="LAT" class="form-control"
                                                                           placeholder="latitude " id="LAT">

                                                                </td>
                                                                <td width="02%">&nbsp;</td>
                                                                <td align="right">Lon</td>
                                                                <td align="center">:</td>
                                                                <td width="02%">&nbsp;</td>
                                                                <td width="30%">
                                                                    <input name="LON" class="form-control"
                                                                           placeholder="Longitude " id="LON">

                                                                </td>
                                                                <td width="02%">&nbsp;</td>
                                                                <td align="right">Alt</td>
                                                                <td align="center">:</td>
                                                                <td width="02%">&nbsp;</td>
                                                                <td width="30%">
                                                                    <input name="ALT" class="form-control"
                                                                           placeholder="Altitude " id="ALT">

                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>

                                                <tr height="40">
                                                    <td align="right">Contact Person</td>
                                                    <td width="02%" align="center">:</td>
                                                    <td width="88%">
                                                        <table width="100%">
                                                            <tr>
                                                                <td width="30%">
                                                                    <div class="input-append date">
                                                                        <input name="FIRST_NAME" class="form-control"
                                                                               placeholder="First Name" id="FIRST_NAME">
                                                                    </div>
                                                                </td>
                                                                <td width="02%">&nbsp;</td>
                                                                <td width="30%"><input name="MIDDLE_NAME"
                                                                                       class="form-control"
                                                                                       placeholder="Middle Name"
                                                                                       id="MIDDLE_NAME"></td>
                                                                <td width="02%">&nbsp;</td>
                                                                <td width="40%"><input name="LAST_NAME"
                                                                                       class="form-control"
                                                                                       placeholder="Last Name"
                                                                                       id="LAST_NAME"></td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>

                                                <tr height="40">
                                                    <td align="right">Position</td>
                                                    <td align="center">:</td>
                                                    <td><input type="text" class="form-control" id="POSITION"
                                                               name="POSITION" value="" placeholder="Enter Position"
                                                               value="" required></td>
                                                </tr>

                                                <tr height="40">
                                                    <td align="right">Emergency Contact</td>
                                                    <td width="02%" align="center">:</td>
                                                    <td width="88%">
                                                        <table width="100%">
                                                            <tr>
                                                                <td width="50%">
                                                                    <div class="input-append date">
                                                                        <input name="CONTACT1" class="form-control"
                                                                               placeholder="Contact No" id="CONTACT1">
                                                                    </div>
                                                                </td>
                                                                <td width="02%">&nbsp;</td>
                                                                <td width="50%"><input name="CONTACT2"
                                                                                       class="form-control"
                                                                                       placeholder="Contact No "
                                                                                       id="CONTACT2"></td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>

                                                <tr height="40">
                                                    <td align="right">Place Name</td>
                                                    <td align="center">:</td>
                                                    <td><input type="text" class="form-control" id="PLACE_NAME"
                                                               name="PLACE_NAME" value="" placeholder="Enter Place Name"
                                                               value="" required></td>
                                                </tr>

                                                <tr height="40">
                                                    <td align="right">Type</td>
                                                    <td align="center">:</td>
                                                    <td><SELECT name="STATUS" class="form-control">
                                                            <OPTION VALUE="">Embassy</OPTION>
                                                            <OPTION VALUE="P">Consultancy</OPTION>
                                                            <OPTION VALUE="A">Representative</OPTION>
                                                        </SELECT>
                                                    </td>
                                                </tr>

                                                <tr height="40">
                                                    <td align="right">Email</td>
                                                    <td align="center">:</td>
                                                    <td><input type="text" class="form-control" id="EMAIL" name="EMAIL"
                                                               value="" placeholder="Enter Email" value="" required>
                                                    </td>
                                                </tr>


                                                <tr height="50">
                                                    <td align="right" valign="top">Remarks</td>
                                                    <td align="center" valign="top">:</td>
                                                    <td><textarea class="form-control" rows="1" id="REMARKS"
                                                                  name="REMARKS"></textarea></td>
                                                </tr>
                                            </table>

                                            <table class="table">
                                                <tr height="40">
                                                    <td width="50%">
                                                        <input type="hidden" name="operation" value="submit">
                                                        <button type="submit" class="btn btn-primary"><b>Save</b>
                                                        </button>
                                </form>
                                </td>
                                <td width="25%" align="right">
                                    <form role="form" method="post" action="definition.php">
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                                <td width="25%" align="left">
                                    <form role="form" method="post" action="definition.php">
                                        <button type="submit" class="btn btn-default">Cancel</button>
                                    </form>
                                </td>
                                </tr>
                                </table>

                            </div>
                        </div>


                    </div>

                    <div role="tabpanel" class="tab-pane" id="list">
                        <div class="container" style="padding:5px;width:100%">
                            <div class="panel panel-default">
                                <div class="panel-body">


                                    <div class="list-group">

                                        <div class="list-group">
                                            <table width="100%" class="table table-striped" border="0">
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Nationality</th>
                                                    <th>Contact</th>
                                                    <th>Email</th>
                                                    <th>&nbsp;</th>
                                                    <th>&nbsp;</th>
                                                </tr>
                                                </thead>
                                                <tr>
                                                    <td width="5%">3</td>
                                                    <td width="30%">
                                                        <input name="NAME" class="form-control" placeholder="Name"
                                                               id="dp_time">

                                                    </td>
                                                    <td width="20%">
                                                        <SELECT name="NATIONALITY" class="form-control">
                                                            <OPTION VALUE="">Nepal</OPTION>
                                                            <OPTION VALUE="P">China</OPTION>
                                                            <OPTION VALUE="P">Srilanka</OPTION>
                                                            <OPTION VALUE="P">Bhutan</OPTION>
                                                        </SELECT>
                                                    </td>
                                                    <td width="20%">
                                                        <input name="Contact" class="form-control" placeholder="Contact"
                                                               id="PP_NUMBER">

                                                    </td>
                                                    <td width="25%">
                                                        <input name="EMAIL" class="form-control" placeholder="Email"
                                                               id="EMAIL">

                                                    </td>

                                                    <td width="5%">
                                                        <button type="submit" class="btn btn-success">Save</button>
                                                    </td>
                                                    <td align="center">&nbsp;</td>
                                                </tr>
                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Tim Cook</td>
                                                    <td>Japan</td>
                                                    <td>98787767</td>
                                                    <td>appleball@gmail.com</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Hitlar Khuresi</td>
                                                    <td>Pakistan</td>
                                                    <td>98766556</td>
                                                    <td>hitkhuresi@yahoo.com</td>
                                                </tr>
                                                </tbody>
                                            </table>


                                        </div>
                                        <!-- /.panel-body -->
                                    </div>


                                </div>
                                <!-- /.panel-body -->


                                <!-- /.panel-body -->

                            </div>


                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    </thead></table></div>

<div class="col-lg-3">
    <div class="panel panel-default">

        <!-- /.panel-heading -->


        <div valign="center"><img src="../../GHT/image/nepalflag.jpg" style="width:50%;height:25%;"></div>
    </div>

    <div class="panel panel-default">
        <!-- /.panel-heading -->
        <div id="wrapper">
            <div id="map"></div>
        </div>
    </div>


</div>
<!-- /.col-lg-9 -->
<!-- /.panel .chat-panel -->
</div>
<!-- /.col-lg-4 -->
</div>
<!-- /.row -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->


</div>


</div>
</div>


</BODY>
</HTML>