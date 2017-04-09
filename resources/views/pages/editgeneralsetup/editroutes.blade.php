

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

                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="detail">
                                <div class="container" style="padding:5px;width:100%">

                                    <div class="table-responsive">
                                        <form action="{{ route ('routes.update', $routes->id) }} " method="POST">
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
                                                                    <input class="form-control" name="region" type="hidden">


                                                                <td align="right">&nbsp;</td>
                                                                <td align="right">Region</td>
                                                                <td align="center">:</td>
                                                                <td width="55%"><SELECT name="region" value="{{$routes->region}}"
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
                                                               name="name" value="{{$routes->sr_name}}"
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
                                                                        <SELECT name="level" value="{{$routes->sr_level}}" class="form-control">
                                                                            <OPTION VALUE="">Level 1</OPTION>
                                                                            <OPTION VALUE="P">Level 2</OPTION>
                                                                            <OPTION VALUE="A">Level 3</OPTION>
                                                                        </SELECT>
                                                                    </div>
                                                                </td>
                                                                <td width="02%">&nbsp;</td>
                                                                <td align="right">No of Days</td>
                                                                <td width="02%" align="center">:</td>
                                                                <td width="20%"><input name="noDays"
                                                                                       value="{{$routes->no_days}}"
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
                                                               value="{{$routes->season}}" required></td>
                                                </tr>

                                                <tr height="40">
                                                    <td align="right">Total Distance</td>
                                                    <td width="02%" align="center">:</td>
                                                    <td width="88%">
                                                        <table width="100%">
                                                            <tr>
                                                                <td width="25%"><input name="total_distance"
                                                                                       class="form-control"
                                                                                       value="{{$routes->total_distance}}"
                                                                                       placeholder="Total Distance"
                                                                                       id="TOTAL_DISTANCE"></td>
                                                                <td width="02%">&nbsp;</td>
                                                                <td align="right">Highest Point</td>
                                                                <td width="02%" align="center">:</td>
                                                                <td width="02%" align="center">&nbsp;</td>
                                                                <td width="30%"><input name="highest_point"
                                                                                       class="form-control"
                                                                                       value="{{$routes->highest_point}}"
                                                                                       placeholder="Highest Point "
                                                                                       id="HIGHEST_POINT"></td>
                                                                <td width="02%">&nbsp;</td>
                                                                <td width="20%"><SELECT name="unit"
                                                                                        value="{{$routes->unit}}"
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

                                                                    <input name="start_latitude" value="{{$routes->start_latitude}}" class="form-control"
                                                                           placeholder="latitude " id="LAT">

                                                                </td>
                                                                <td width="02%">&nbsp;</td>
                                                                <td align="right">Long</td>
                                                                <td align="center">:</td>
                                                                <td width="02%">&nbsp;</td>
                                                                <td width="30%">

                                                                    <input name="start_longitude" value="{{$routes->start_longitude}}" class="form-control"
                                                                           placeholder="Longitude " id="LON">

                                                                </td>
                                                                <td width="02%">&nbsp;</td>
                                                                <td align="right">Alt</td>
                                                                <td align="center">:</td>
                                                                <td width="02%">&nbsp;</td>
                                                                <td width="30%">

                                                                    <input name="start_altitude" value="{{$routes->start_altitude}}" class="form-control"
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

                                                                    <input name="end_latitude" value="{{$routes->end_latitude}}" class="form-control"
                                                                           placeholder="latitude " id="LAT">

                                                                </td>
                                                                <td width="02%">&nbsp;</td>
                                                                <td align="right">Long</td>
                                                                <td align="center">:</td>
                                                                <td width="02%">&nbsp;</td>
                                                                <td width="30%">

                                                                    <input name="end_longitude" class="form-control"
                                                                           value="{{$routes->end_longitude}}"
                                                                           placeholder="Longitude " id="LON">

                                                                </td>
                                                                <td width="02%">&nbsp;</td>
                                                                <td align="right">Alt</td>
                                                                <td align="center">:</td>
                                                                <td width="02%">&nbsp;</td>
                                                                <td width="30%">

                                                                    <input name="end_altitude" class="form-control"
                                                                           value="{{$routes->end_altitude}}"
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
                                                               name="speciality" value="{{$routes->speciality}}" placeholder="Speciality"
                                                               value="" required></td>
                                                </tr>

                                                <tr height="40">
                                                    <td width="28%" align="right">Resources</td>
                                                    <td width="02%" align="center">:</td>
                                                    <td><input type="text" class="form-control" id="RESOURCES"
                                                               name="resources" value="{{$routes->resources}}" placeholder="Resources"
                                                               value="" required></td>
                                                </tr>


                                                <tr height="40">
                                                    <td align="right" valign="top">Remarks</td>
                                                    <td align="center" valign="top">:</td>
                                                    <td><textarea class="form-control" rows="1" id="REMARKS"
                                                                  placeholder="Enter Remarks" value="{{$routes->remarks}}"
                                                                  name="remarks">
                                                        </textarea></td>
                                                </tr>


                                                <tr height="40">
                                                    <td align="right">&nbsp;</td>
                                                    <td align="center">&nbsp;</td>
                                                    <td>

                                                        <table class="table">
                                                            <tr>
                                                                <input type="submit" value="save" class="btn btn-primary pull-right">

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
