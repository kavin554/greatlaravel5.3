

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
                                                                      data-toggle="tab"> Route Detail Form </a></li>
                            <li role="presentation"><a href="#list" aria-controls="home" role="tab"
                                                       data-toggle="tab"> Route Detail List </a></li>
                            <li role="presentation"><a href="#maker" aria-controls="home" role="tab"
                                                       data-toggle="tab">Route Maker</a></li>
                            <li role="presentation"><a href="#itetaries" aria-controls="home" role="tab"
                                                       data-toggle="tab"> Route Itetaries</a></li>
                            <li role="presentation"><a href="#stops" aria-controls="home" role="tab"
                                                       data-toggle="tab"> Stops Setup</a></li>

                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="detail">
                                <div class="container" style="padding:5px;width:100%">

                                    <div class="table-responsive">
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
                                                            <td align="right">Region</td>
                                                            <td align="center">:</td>
                                                            <td width="55%"><SELECT name="STATUS"
                                                                                    class="form-control">
                                                                    <OPTION VALUE="">Far Western Development
                                                                        Region
                                                                    </OPTION>
                                                                    <OPTION VALUE="">Mid Western Development
                                                                        Region
                                                                    </OPTION>
                                                                    <OPTION VALUE="">Western Development
                                                                        Region
                                                                    </OPTION>
                                                                    <OPTION VALUE="">Central Development
                                                                        Region
                                                                    </OPTION>
                                                                    <OPTION VALUE="">Eastern Development
                                                                        Region
                                                                    </OPTION>
                                                                    OPTION>
                                                                </SELECT></td>

                                                            </td>





                                                        </tr>
                                                        </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>

                                            <tr height="40">
                                                <td align="right">Route Name
                                                </td>
                                                <td align="center">:</td>
                                                <td><input type="text" class="form-control" id="NAME"
                                                           name="NAME" value=""
                                                           placeholder="Enter Name "
                                                           required ></td>
                                            </tr>


                                            <tr height="40">
                                                <td width="28%" align="right">Code</td>
                                                <td width="02%" align="center">:</td>
                                                <td width="88%">
                                                    <table width="100%">
                                                        <tr>
                                                            <td width="30%">
                                                                <div class="input-append date">
                                                                    <input name="CODE" class="form-control"
                                                                           placeholder="Code" id="CODE">
                                                                </div>
                                                            </td>
                                                            <td width="02%">&nbsp;</td>
                                                            <td align="right">Region</td>
                                                            <td align="center">:</td>
                                                            <td width="55%"><SELECT name="STATUS"
                                                                                    class="form-control">
                                                                    <OPTION VALUE="">Far Western Development
                                                                        Region
                                                                    </OPTION>
                                                                    <OPTION VALUE="">Mid Western Development
                                                                        Region
                                                                    </OPTION>
                                                                    <OPTION VALUE="">Western Development
                                                                        Region
                                                                    </OPTION>
                                                                    <OPTION VALUE="">Central Development
                                                                        Region
                                                                    </OPTION>
                                                                    <OPTION VALUE="">Eastern Development
                                                                        Region
                                                                    </OPTION>
                                                                    OPTION>
                                                                </SELECT></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>


                                            <tr height="40">
                                                <td align="right">Level</td>
                                                <td width="02%" align="center">:</td>
                                                <td width="88%">
                                                    <table width="100%">
                                                        <tr>
                                                            <td width="40%">
                                                                <div class="input-append date">
                                                                    <SELECT name="STATUS" class="form-control">
                                                                        <OPTION VALUE="">Level 1</OPTION>
                                                                        <OPTION VALUE="P">Level 2</OPTION>
                                                                        <OPTION VALUE="A">Level 3</OPTION>
                                                                    </SELECT>
                                                                </div>
                                                            </td>
                                                            <td width="02%">&nbsp;</td>
                                                            <td align="right">No of Days</td>
                                                            <td width="02%" align="center">:</td>
                                                            <td width="20%"><input name="NO_DAYS"
                                                                                   class="form-control"
                                                                                   placeholder="No of Days "
                                                                                   id="NO_DAYS"></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>

                                            <tr height="40">
                                                <td align="right">Total Distance</td>
                                                <td width="02%" align="center">:</td>
                                                <td width="88%">
                                                    <table width="100%">
                                                        <tr>
                                                            <td width="25%"><input name="TOTAL_DISTANCE"
                                                                                   class="form-control"
                                                                                   placeholder="Total Distance"
                                                                                   id="TOTAL_DISTANCE"></td>
                                                            <td width="02%">&nbsp;</td>
                                                            <td align="right">Highest Point</td>
                                                            <td width="02%" align="center">:</td>
                                                            <td width="02%" align="center">&nbsp;</td>
                                                            <td width="30%"><input name="HIGHEST_POINT"
                                                                                   class="form-control"
                                                                                   placeholder="Highest Point "
                                                                                   id="HIGHEST_POINT"></td>
                                                            <td width="02%">&nbsp;</td>
                                                            <td width="20%"><SELECT name="STATUS"
                                                                                    class="form-control">
                                                                    <OPTION VALUE="">Feet</OPTION>
                                                                    <OPTION VALUE="P">Meter</OPTION>

                                                                </SELECT></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>

                                            <tr height="2">
                                                <td align="right">&nbsp;</td>
                                                <td align="center">&nbsp;</td>
                                                <td><b>Starting Point</b></td>
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
                                                            <td align="right">Long</td>
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

                                            <tr height="2">
                                                <td align="right">&nbsp;</td>
                                                <td align="center">&nbsp;</td>
                                                <td><b>Ending Point</b></td>
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
                                                            <td align="right">Long</td>
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
                                                <td width="28%" align="right">Speciality</td>
                                                <td width="02%" align="center">:</td>
                                                <td><input type="text" class="form-control" id="SPECIALITY"
                                                           name="SPECIALITY" value="" placeholder="Speciality"
                                                           value="" required></td>
                                            </tr>

                                            <tr height="40">
                                                <td width="28%" align="right">Resources</td>
                                                <td width="02%" align="center">:</td>
                                                <td><input type="text" class="form-control" id="RESOURCES"
                                                           name="RESOURCES" value="" placeholder="Resources"
                                                           value="" required></td>
                                            </tr>


                                            <tr height="40">
                                                <td align="right" valign="top">Remarks</td>
                                                <td align="center" valign="top">:</td>
                                                <td><textarea class="form-control" rows="1" id="REMARKS"
                                                              placeholder="Enter Remarks"
                                                              name="REMARKS">
                                                        </textarea></td>
                                            </tr>


                                            <tr height="40">
                                                <td align="right">&nbsp;</td>
                                                <td align="center">&nbsp;</td>
                                                <td>

                                                    <table class="table">
                                                        <tr>
                                                            <td width="50%">


                                                                <input type="hidden" name="operation"
                                                                       value="submit">
                                                                <button type="submit"
                                                                        class="btn btn-success">
                                                                    <b>Submit</b>
                                                                </button>
                                                                </form>

                                                            </td>





                                                            <td width="25%" align="left">

                                                                <form role="form" method="post"
                                                                      action="general_setup.php">
                                                                    <button type="submit" class="btn btn-default">
                                                                        Cancel
                                                                    </button>
                                                                </form>


                                                            </td>

                                                        </tr>
                                                    </table>


                                                </td>
                                            </tr>

                                        </table>


                                    </div>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="maker">
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
                                                            <th>Route</th>
                                                            <th>Date</th>
                                                            <th>Time</th>
                                                            <th>Place</th>
                                                            <th>Country</th>
                                                            <th>&nbsp;</th>
                                                            <th>&nbsp;</th>
                                                        </tr>

                                                        <tr>
                                                            <td width="30%">
                                                                <SELECT name="STATUS" class="form-control">
                                                                    <OPTION VALUE="">Kathmandu to Pokhara</OPTION>
                                                                    <OPTION VALUE="P">Beni to Tatopani</OPTION>
                                                                    <OPTION VALUE="A">Jomsom to Muktinath</OPTION>
                                                                </SELECT>
                                                            </td>
                                                            <td>
                                                                <input name="DATE" class="form-control" placeholder="Date"
                                                                       id="dp_date">
                                                            </td>
                                                            <td>
                                                                <input name="TIME" class="form-control" placeholder="Time"
                                                                       id="dp_time">

                                                            </td>
                                                            <td width="20%">
                                                                <SELECT name="STATUS" class="form-control">
                                                                    <OPTION VALUE="">Kathmandu</OPTION>
                                                                    <OPTION VALUE="P">Pokhara</OPTION>
                                                                    <OPTION VALUE="A">Jomsom</OPTION>
                                                                    <OPTION VALUE="A">Bara</OPTION>
                                                                    <OPTION VALUE="A">Muktinath</OPTION>
                                                                    <OPTION VALUE="A">Chitwan</OPTION>
                                                                    <OPTION VALUE="A">Putan</OPTION>
                                                                </SELECT>
                                                            </td>
                                                            <td width="15%">
                                                                <SELECT name="STATUS" class="form-control">
                                                                    <OPTION VALUE="">Nepal</OPTION>
                                                                    <OPTION VALUE="P">Pakistan</OPTION>
                                                                    <OPTION VALUE="A">Srilanka</OPTION>
                                                                </SELECT>

                                                            </td>
                                                            <td>
                                                                <button type="submit" class="btn btn-success">Submit</button>
                                                            </td>
                                                        </tr>

                                                        </thead>
                                                        <tbody>

                                                        <tr>
                                                            <td>Kathmandu to Pokhara</td>
                                                            <td>2016-06-12</td>
                                                            <td>6:40</td>
                                                            <td>Pokhara</td>
                                                            <td>Nepal</td>

                                                        </tr>
                                                        <tr>
                                                            <td>Beni to Tatopani</td>
                                                            <td>2016-03-19</td>
                                                            <td>5:30</td>
                                                            <td>Beni</td>
                                                            <td>Nepal</td>

                                                        </tr>
                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="itetaries">
                                <div class="container" style="padding:5px;width:100%">
                                    <div class="panel panel-default">

                                        <!-- /.list-group -->
                                        <div class="panel-body">
                                            <div class="list-group">
                                                <div class="list-group">
                                                    <table width="100%" class="table table-striped" border="0">

                                                        <thead>
                                                        <tr>
                                                            <th>Day</th>
                                                            <th>Start</th>
                                                            <th>End</th>
                                                            <th>Duration</th>
                                                            <th>Remarks</th>
                                                            <th>Highest Alt</th>
                                                            <th>&nbsp;</th>
                                                            <th>&nbsp;</th>

                                                        </tr>

                                                        <tr>
                                                            <td width="5%">
                                                                3
                                                            </td>
                                                            <td width="15%">
                                                                <input name="START_DATE" class="form-control"
                                                                       placeholder="Start"
                                                                       id="dp_date">
                                                            </td>
                                                            <td width="15%">
                                                                <input name="END_DATE" class="form-control" placeholder="End"
                                                                       id="dp_time">

                                                            </td>
                                                            <td width="15%">
                                                                <input name="DURATION" class="form-control"
                                                                       placeholder="Duration"
                                                                       id="DURATION">

                                                            </td>
                                                            <td width="20%">
                                                                <input name="REMARKS" class="form-control" placeholder="Remarks"
                                                                       id="REMARKS">
                                                            </td>
                                                            <td width="15%">
                                                                <input name="HIGHEST_ALT" class="form-control"
                                                                       placeholder="Highest Alt" id="HIGHEST_ALT">

                                                            </td width="10%">
                                                            <td>
                                                                <button type="submit" class="btn btn-success">Submit</button>
                                                            </td>


                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>01</td>
                                                            <td>2016-06-12</td>
                                                            <td>2016-03-19</td>
                                                            <td>6:40</td>
                                                            <td>Pokhara</td>
                                                            <td>343</td>

                                                        </tr>
                                                        <tr>
                                                            <td>02</td>
                                                            <td>2016-03-19</td>
                                                            <td>2016-06-12</td>
                                                            <td>5:30</td>
                                                            <td>Beni</td>
                                                            <td>433</td>

                                                        </tr>
                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.panel-body -->

                                        <!-- /.panel -->

                                    </div>


                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="stops">
                                <div class="container" style="padding:5px;width:100%">
                                    <div class="panel panel-default">
                                        <div class="panel-body">


                                            <div class="panel-body">
                                                <div class="list-group">
                                                    <div class="list-group">
                                                        <table width="100%" class="table table-striped" border="0">

                                                            <thead>
                                                            <tr>
                                                                <th>Day</th>
                                                                <th>Start</th>
                                                                <th>End</th>
                                                                <th>Duration</th>
                                                                <th>Remarks</th>
                                                                <th>Highest Alt</th>
                                                                <th>&nbsp;</th>
                                                                <th>&nbsp;</th>

                                                            </tr>

                                                            <tr>
                                                                <td width="5%">
                                                                    3
                                                                </td>
                                                                <td width="15%">
                                                                    <input name="START_DATE" class="form-control"
                                                                           placeholder="Start" id="dp_date">
                                                                </td>
                                                                <td width="15%">
                                                                    <input name="END_DATE" class="form-control"
                                                                           placeholder="End"
                                                                           id="dp_time">

                                                                </td>
                                                                <td width="15%">
                                                                    <input name="DURATION" class="form-control"
                                                                           placeholder="Duration" id="DURATION">

                                                                </td>
                                                                <td width="20%">
                                                                    <input name="REMARKS" class="form-control"
                                                                           placeholder="Remarks"
                                                                           id="REMARKS">
                                                                </td>
                                                                <td width="15%">
                                                                    <input name="HIGHEST_ALT" class="form-control"
                                                                           placeholder="Highest Alt" id="HIGHEST_ALT">

                                                                </td width="10%">
                                                                <td>
                                                                    <button type="submit" class="btn btn-success">Submit
                                                                    </button>
                                                                </td>


                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td>01</td>
                                                                <td>2016-06-12</td>
                                                                <td>2016-03-19</td>
                                                                <td>6:40</td>
                                                                <td>Pokhara</td>
                                                                <td>343</td>

                                                            </tr>
                                                            <tr>
                                                                <td>02</td>
                                                                <td>2016-03-19</td>
                                                                <td>2016-06-12</td>
                                                                <td>5:30</td>
                                                                <td>Beni</td>
                                                                <td>433</td>

                                                            </tr>
                                                            </tbody>
                                                        </table>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.panel-body -->

                                            <!-- /.panel -->

                                        </div>


                                    </div>
                                </div>
                                <!-- /.panel-body -->
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
                                                            <th>Type</th>
                                                            <th>Name</th>
                                                            <th>Lat</th>
                                                            <th>Long</th>
                                                            <th>Alt</th>
                                                            <th>Status</th>
                                                            <th>&nbsp;</th>
                                                            <th>&nbsp;</th>
                                                        </tr>

                                                        <tr>
                                                            <td width="10%"><input name="DATE" class="form-control" placeholder="Id"
                                                                                   id="dp_date">

                                                            </td>
                                                            <td width="15%">
                                                                <SELECT name="STATUS" class="form-control">
                                                                    <OPTION VALUE="">Active</OPTION>
                                                                    <OPTION VALUE="P">Inactive</OPTION>
                                                                </SELECT>
                                                            </td>
                                                            <td width="30%">
                                                                <input name="DATE" class="form-control" placeholder="Name"
                                                                       id="dp_date">
                                                            </td>
                                                            <td width="10%">
                                                                <input name="TIME" class="form-control" placeholder="Time"
                                                                       id="dp_time">

                                                            </td>
                                                            <td width="10%">
                                                                <input name="TIME" class="form-control" placeholder="Time"
                                                                       id="dp_time">
                                                            </td>
                                                            <td width="10%">
                                                                <input name="TIME" class="form-control" placeholder="Time"
                                                                       id="dp_time">

                                                            </td>
                                                            <td width="10%">
                                                                <input name="TIME" class="form-control" placeholder="Status"
                                                                       id="dp_time">

                                                            </td>
                                                            <td>
                                                                <button type="submit" class="btn btn-success">Submit</button>
                                                            </td>
                                                        </tr>


                                                        </thead>
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
                    <table width="100%" border="0">
                        <tr>
                            <td width="40%">&nbsp;</td>

                            <td width="60%" align="center">
                                <button type="submit" class="btn btn-success"> Add
                                    New Route
                                </button>
                                </a>
                            </td>
                        </tr>
                    </table>

                    <table width="100%" class="table table-striped" border="0">
                        <thead>
                        <tr style="width:100%">
                            <th width="95%">Route List</th>
                            <th width="05%">&nbsp;</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>


    </div>
</div>
</BODY>
