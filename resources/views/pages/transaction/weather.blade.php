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
                                                            <th>Remarks</th>
                                                            <th>&nbsp;</th>

                                                        </tr>
                                                        </thead>

                                                        <tbody>
                                                        <?php
                                                        foreach ($weather as $weather_data){?>
                                                        <tr>
                                                            <td><?php echo $weather_data->id ?></td>
                                                            <td><?php echo $weather_data->pl_id ?></td>
                                                            <td><?php echo $weather_data->date ?></td>
                                                            <td><?php echo $weather_data->time ?></td>
                                                            <td><?php echo $weather_data->rain ?></td>
                                                            <td><?php echo $weather_data->humidity ?></td>
                                                            <td><?php echo $weather_data->sunshine ?></td>
                                                            <td><?php echo $weather_data->wind ?></td>
                                                            <td><?php echo $weather_data->remarks ?></td>

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
