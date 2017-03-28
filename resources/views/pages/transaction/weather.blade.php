<BODY>
@include('layouts.app')
@include('layouts.map')
<div class="container-fluid">
    <div class="row">

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">

                    <div>

                        <ul class="nav nav-tabs" role="tablist">

                            <li role="presentation" class="active"><a href="#detail" aria-controls="home" role="tab"
                                                                      data-toggle="tab"> Weather Map </a></li>
                            <li role="presentation"><a href="#list" aria-controls="home" role="tab"
                                                       data-toggle="tab"> Daily Weather List </a></li>

                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="detail">
                                <div class="container" style="padding:5px;width:100%">

                                    <div id="map"></div>
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
                                                            <th>No</th>
                                                            <th>Station</th>
                                                            <th>Date</th>
                                                            <th>Time</th>
                                                            <th>Rain</th>
                                                            <th>Humidity</th>
                                                            <th>Sunshine</th>
                                                            <th>Wind</th>
                                                            <th>&nbsp;</th>
                                                            <th>&nbsp;</th>

                                                        </tr>

                                                        <tbody>
                                                        <tr>
                                                            <td width="5%">
                                                                3
                                                            </td>
                                                            <td width="20%">
                                                                <input name="STATION" class="form-control" placeholder="Station"
                                                                       id="dp_time">

                                                            </td>
                                                            <td width="15%">
                                                                <input name="DATE" class="form-control" placeholder="Date"
                                                                       id="EMAIL">

                                                            </td>
                                                            <td width="10%">
                                                                <input name="TIME" class="form-control" placeholder="Time"
                                                                       id="EMAIL">

                                                            </td>
                                                            <td width="10%">
                                                                <input name="RAIN" class="form-control" placeholder="Rain"
                                                                       id="EMAIL">

                                                            </td>
                                                            <td width="10%">
                                                                <input name="HUMIDITY" class="form-control"
                                                                       placeholder="Humidity" id="EMAIL">

                                                            </td>
                                                            <td width="10%">
                                                                <input name="SUNSHINE" class="form-control"
                                                                       placeholder="Sunshine" id="EMAIL">

                                                            </td>
                                                            <td width="10%">
                                                                <input name="WIND" class="form-control" placeholder="Wind"
                                                                       id="EMAIL">


                                                            <td>
                                                                <button type="submit" class="btn btn-success">Submit</button>
                                                            </td>
                                                            <td align="center">&nbsp;</td>
                                                        </tr>
                                                        <tr>
                                                            <td>01</td>
                                                            <td>Janakpur</td>
                                                            <td>2061/01/32</td>
                                                            <td>3:21</td>
                                                            <td>23</td>
                                                            <td>45</td>
                                                            <td>43</td>
                                                            <td>32</td>


                                                        </tr>
                                                        <tr>
                                                            <td>02</td>
                                                            <td>Palpa</td>
                                                            <td>2061/04/32</td>
                                                            <td>5:21</td>
                                                            <td>53</td>
                                                            <td>65</td>
                                                            <td>83</td>
                                                            <td>22</td>

                                                        </tr>
                                                        </tbody>


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




    </div>
</div>
</BODY>
