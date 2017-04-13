

<BODY>
@include('layouts.app')
<div class="container-fluid">
    <div class="row">

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">

                    <div>

                        <ul class="nav nav-tabs" role="tablist">

                            <li role="presentation" class="active"><a href="#detail" aria-controls="home" role="tab"
                                                                      data-toggle="tab"> Route Detail Form </a></li>
                            <li role="presentation"><a href="#list" aria-controls="home" role="tab"
                                                       data-toggle="tab"> Route Detail List </a></li>

                            <li role="presentation"><a href="#itetaries" aria-controls="home" role="tab"
                                                       data-toggle="tab"> Route Iteneraries</a></li>
                            <li role="presentation"><a href="#stops" aria-controls="home" role="tab"
                                                       data-toggle="tab"> Stops Setup</a></li>

                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="detail">
                                <div class="container" style="padding:5px;width:100%">

                                    <div class="table-responsive">
                                        <form action="{{ route ('routes.store') }} " method="POST">
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
                                                                <input class="form-control" name="region" type="hidden">


                                                            <td align="right">&nbsp;</td>
                                                            <td align="right">Region</td>
                                                            <td align="center">:</td>
                                                            <td width="55%"><SELECT name="region"
                                                                                    class="form-control">
                                                                    <OPTION VALUE="Far Western Development Region">
                                                                        Far Western Development Region
                                                                    </OPTION>
                                                                    <OPTION VALUE="Mid Western Development Region">
                                                                        Mid Western Development Region
                                                                    </OPTION>
                                                                    <OPTION VALUE="Western Development Region">
                                                                        Western Development Region
                                                                    </OPTION>
                                                                    <OPTION VALUE="Central Development Region">
                                                                        Central Development Region
                                                                    </OPTION>
                                                                    <OPTION VALUE="Eastern Development Region">
                                                                        Eastern Development Region
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
                                                           name="name" value=""
                                                           placeholder="Enter Name "
                                                           required ></td>
                                            </tr>

                                            <tr height="40">
                                                <td align="right">Level</td>
                                                <td width="02%" align="center">:</td>
                                                <td width="88%">
                                                    <table width="100%">
                                                        <tr>
                                                            <td width="40%">
                                                                <div class="input-append date">
                                                                    <SELECT name="level" class="form-control">
                                                                        <OPTION VALUE="Level 1">Level 1</OPTION>
                                                                        <OPTION VALUE="Level 2">Level 2</OPTION>
                                                                        <OPTION VALUE="Level 3">Level 3</OPTION>
                                                                    </SELECT>
                                                                </div>
                                                            </td>
                                                            <td width="02%">&nbsp;</td>
                                                            <td align="right">No of Days</td>
                                                            <td width="02%" align="center">:</td>
                                                            <td width="20%"><input name="noDays"
                                                                                   class="form-control"
                                                                                   placeholder="No of Days "
                                                                                   id="no_days"></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>

                                            <tr height="40">
                                                <td width="28%" align="right">Season</td>
                                                <td width="02%" align="center">:</td>
                                                <td><input type="text" class="form-control" id="SEASON"
                                                           name="season" value="" placeholder="Season"
                                                           value="" required></td>
                                            </tr>

                                            <tr height="40">
                                                <td align="right">Total Distance</td>
                                                <td width="02%" align="center">:</td>
                                                <td width="88%">
                                                    <table width="100%">
                                                        <tr>
                                                            <td width="25%"><input name="total_distance"
                                                                                   class="form-control"
                                                                                   placeholder="Total Distance"
                                                                                   id="TOTAL_DISTANCE"></td>
                                                            <td width="02%">&nbsp;</td>
                                                            <td align="right">Highest Point</td>
                                                            <td width="02%" align="center">:</td>
                                                            <td width="02%" align="center">&nbsp;</td>
                                                            <td width="30%"><input name="highest_point"
                                                                                   class="form-control"
                                                                                   placeholder="Highest Point "
                                                                                   id="HIGHEST_POINT"></td>
                                                            <td width="02%">&nbsp;</td>
                                                            <td width="20%"><SELECT name="unit"
                                                                                    class="form-control">
                                                                    <OPTION VALUE="Feet">Feet</OPTION>
                                                                    <OPTION VALUE="Meter">Meter</OPTION>

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

                                                                <input name="start_latitude" class="form-control"
                                                                       placeholder="latitude " id="LAT">

                                                            </td>
                                                            <td width="02%">&nbsp;</td>
                                                            <td align="right">Long</td>
                                                            <td align="center">:</td>
                                                            <td width="02%">&nbsp;</td>
                                                            <td width="30%">

                                                                <input name="start_longitude" class="form-control"
                                                                       placeholder="Longitude " id="LON">

                                                            </td>
                                                            <td width="02%">&nbsp;</td>
                                                            <td align="right">Alt</td>
                                                            <td align="center">:</td>
                                                            <td width="02%">&nbsp;</td>
                                                            <td width="30%">

                                                                <input name="start_altitude" class="form-control"
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

                                                                <input name="end_latitude" class="form-control"
                                                                       placeholder="latitude " id="LAT">

                                                            </td>
                                                            <td width="02%">&nbsp;</td>
                                                            <td align="right">Long</td>
                                                            <td align="center">:</td>
                                                            <td width="02%">&nbsp;</td>
                                                            <td width="30%">

                                                                <input name="end_longitude" class="form-control"
                                                                       placeholder="Longitude " id="LON">

                                                            </td>
                                                            <td width="02%">&nbsp;</td>
                                                            <td align="right">Alt</td>
                                                            <td align="center">:</td>
                                                            <td width="02%">&nbsp;</td>
                                                            <td width="30%">

                                                                <input name="end_altitude" class="form-control"
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
                                                           name="speciality" value="" placeholder="Speciality"
                                                           value="" required></td>
                                            </tr>

                                            <tr height="40">
                                                <td width="28%" align="right">Resources</td>
                                                <td width="02%" align="center">:</td>
                                                <td><input type="text" class="form-control" id="RESOURCES"
                                                           name="resources" value="" placeholder="Resources"
                                                           value="" required></td>
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
                                                            <input type="submit" value="Save" class="btn btn-primary pull-right">

                                                        </tr>
                                                    </table>


                                                </td>
                                            </tr>

                                        </table>
                                        </form>


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
                                                    <form action="{{ route('iteneraries.store') }}" method="post" >
                                                        {{ csrf_field() }}
                                                    <table width="100%" class="table table-striped" border="0">

                                                        <thead>
                                                        <tr>
                                                            <th>Day</th>
                                                            <th>Route Name </th>
                                                            <th>Start</th>
                                                            <th>End</th>
                                                            <th>Duration</th>
                                                            <th>Description</th>
                                                            <th>Remarks</th>
                                                            <th>Action</th>


                                                        </tr>

                                                        <tr>
                                                            <td width="5%">
                                                                <input name="day" class="form-control"
                                                                       placeholder="Day"
                                                                       id="day">
                                                            </td>
                                                            <td width="15%">
                                                                <SELECT class="form-control" name="sr_id">
                                                                    <?php foreach  ($Routes as $routes) { ?>
                                                                    <OPTION value="{{ $routes->id }}" name="sr_id"><?php echo $routes->sr_name ?>
                                                                    </OPTION>
                                                                    <?php } ?>

                                                                </SELECT>
                                                            </td>

                                                            <td width="15%">
                                                                <input name="start_date" class="form-control"
                                                                       placeholder="Start"
                                                                       id="start">
                                                            </td>
                                                            <td width="15%">
                                                                <input name="end_date" class="form-control" placeholder="End"
                                                                       id="end_date">

                                                            </td>
                                                            <td width="15%">
                                                                <input name="duration" class="form-control"
                                                                       placeholder="Duration"
                                                                       id="DURATION">

                                                            </td>
                                                            <td width="20%">
                                                                <input name="desc" class="form-control" placeholder="Description"
                                                                       id="Description">
                                                            </td>
                                                            <td width="15%">
                                                                <input name="remarks" class="form-control"
                                                                       placeholder="Remarks" id="Remarks">
                                                            </td>

                                                            <td width="10%">
                                                                <input type="submit" value="save" class="btn btn-success">
                                                            </td>



                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php foreach($routeiteneraries as $route_iteneraries) {?>
                                                        <tr>
                                                            <td><?php echo $route_iteneraries->day  ?></td>
                                                            <td><?php echo $route_iteneraries->sr_id  ?></td>
                                                            <td><?php echo $route_iteneraries->start  ?></td>
                                                            <td><?php echo $route_iteneraries->end  ?></td>
                                                            <td><?php echo $route_iteneraries->duration_hour ?></td>
                                                            <td><?php echo $route_iteneraries->desc  ?></td>
                                                            <td><?php echo $route_iteneraries->remarks  ?></td>
                                                            <td>
                                                                <form class="" method="POST"
                                                                      action="{{ route('iteneraries.destroy', $route_iteneraries->id) }}">
                                                                    <input type="hidden" name="_token"
                                                                           value="{{csrf_token()}}">
                                                                    <input type="hidden" name="_method" value="delete"/>
                                                                    <a href="{{ route('iteneraries.edit', $route_iteneraries->id) }}"
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
                                                    </form>
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
                                                        <form method="post" action="{{ route('stops.store') }}">
                                                            {{ csrf_field() }}
                                                        <table width="100%" class="table table-striped" border="0">

                                                            <thead>
                                                            <tr>
                                                                <th>Day</th>
                                                                <th>Route Name</th>
                                                                <th>Location Name</th>
                                                                <th>No of Stops</th>
                                                                <th>Latitude</th>
                                                                <th>Longitude</th>
                                                                <th>Altitude</th>
                                                                <th>Remarks</th>
                                                                <th>Action&nbsp;</th>
                                                                <th>&nbsp;</th>

                                                            </tr>

                                                            <tr>
                                                                <td width="5%">
                                                                    <input name="days" class="form-control"
                                                                           placeholder="No of days" id="dp_date">
                                                                </td>
                                                                <td width="15%">
                                                                    <SELECT class="form-control" name="sr_id"
                                                                            value="">
                                                                        <?php foreach  ($Routes as $routes) { ?>
                                                                        <OPTION VALUE="{{ $routes->id }}" name="sr_id"><?php echo $routes->sr_name ?>
                                                                        </OPTION>
                                                                        <?php } ?>

                                                                    </SELECT>
                                                                </td>

                                                                <td width="15%">
                                                                    <SELECT class="form-control" name="sl_id"
                                                                            value="">
                                                                        <?php foreach  ($location as $setup_location) { ?>
                                                                        <OPTION VALUE="{{ $setup_location->id }}" name="sl_id"><?php echo $setup_location->name ?>
                                                                        </OPTION>
                                                                        <?php } ?>

                                                                    </SELECT>
                                                                </td>
                                                                <td width="15%">
                                                                    <input name="stops" class="form-control"
                                                                           placeholder="No. of stops" id="stops">
                                                                </td>
                                                                <td width="15%">
                                                                    <input name="latitude" class="form-control"
                                                                           placeholder="latitude"
                                                                           id="latitude">

                                                                </td>
                                                                <td width="15%">
                                                                    <input name="longitude" class="form-control"
                                                                           placeholder="Longitude" id="longitude">

                                                                </td>
                                                                <td width="20%">
                                                                    <input name="altitude" class="form-control"
                                                                           placeholder="Altitude"
                                                                           id="altitude">
                                                                </td>
                                                                <td width="15%">
                                                                    <input name="remarks" class="form-control"
                                                                           placeholder="Remarks" id="remarks">
                                                                </td>

                                                                <td width="10%">
                                                                    <input type="submit" value="save" class="btn btn-success">                                                               </input>
                                                                </td>


                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach($Stops as $stops) { ?>
                                                                <tr>

                                                                    <td><?php echo $stops->days ?></td>
                                                                    <td><?php echo $stops->sr_id ?></td>
                                                                    <td><?php echo $stops->sl_id ?></td>
                                                                    <td><?php echo $stops->Stop_no ?></td>
                                                                    <td><?php echo $stops->latitude ?></td>
                                                                    <td><?php echo $stops->longitude ?></td>
                                                                    <td><?php echo $stops->altitude ?></td>
                                                                    <td><?php echo $stops->remarks ?></td>
                                                                    <td>
                                                                        <form class="" method="POST"
                                                                              action="{{ route('stops.destroy', $stops->id) }}">
                                                                            <input type="hidden" name="_token"
                                                                                   value="{{csrf_token()}}">
                                                                            <input type="hidden" name="_method" value="delete"/>
                                                                            <a href="{{route('stops.edit', $stops->id)}}"
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
                                                        </form>
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
                                                            <th>Region</th>
                                                            <th>Route Name</th>
                                                            <th>No. Of Days</th>
                                                            <th>Season</th>
                                                            <th>Total Distance</th>
                                                            <th>Start Latitude</th>
                                                            <th>Start longitude&nbsp;</th>
                                                            <th>Start Altitude&nbsp;</th>
                                                            <th>End Latitude</th>
                                                            <th>End longitude&nbsp;</th>
                                                            <th>Ends Altitude&nbsp;</th>
                                                            <th>Action </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                            foreach ($Routes as $routes){
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $routes->id ?></td>
                                                            <td><?php echo $routes->region ?></td>
                                                            <td><?php echo $routes->sr_name ?></td>
                                                            <td><?php echo $routes->no_days ?></td>
                                                            <td><?php echo $routes->season ?></td>
                                                            <td><?php echo $routes->total_distance ?></td>
                                                            <td><?php echo $routes->start_latitude ?></td>
                                                            <td><?php echo $routes->start_longitude ?></td>
                                                            <td><?php echo $routes->start_altitude ?></td>
                                                            <td><?php echo $routes->end_latitude ?></td>
                                                            <td><?php echo $routes->end_longitude ?></td>
                                                            <td><?php echo $routes->end_altitude ?></td>
                                                            <td>
                                                                <form class="" method="POST"
                                                                      action="{{ route('routes.destroy', $routes->id) }}">
                                                                    <input type="hidden" name="_token"
                                                                           value="{{csrf_token()}}">
                                                                    <input type="hidden" name="_method" value="delete"/>
                                                                    <a href="{{route('routes.edit', $routes->id)}}"
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


    </div>
</div>
</BODY>
