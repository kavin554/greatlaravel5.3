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
                                                                      data-toggle="tab"> Disperseb Map </a></li>
                            <li role="presentation"><a href="#list" aria-controls="home" role="tab"
                                                       data-toggle="tab"> Disperseb Notification/Alert Detail List </a></li>

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
                                                            <th>User</th>
                                                            <th>Route</th>
                                                            <th>Location</th>
                                                            <th>Detail</th>
                                                            <th>&nbsp;</th>
                                                            <th>&nbsp;</th>

                                                        </tr>

                                                        <tr>
                                                            <td>Ram Khadka</td>
                                                            <td>Janakpur</td>
                                                            <td>Kalaiya</td>
                                                            <td>Hot Place</td>
                                                            <td align="center">&nbsp;</td>
                                                            <td width="5%">
                                                                <button type="submit" class="btn btn-success">Disperse</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hari Shrestha</td>
                                                            <td>Palpa</td>
                                                            <td>Janakpur</td>
                                                            <td>Hot Place</td>
                                                            <td align="center">&nbsp;</td>
                                                            <td width="5%">
                                                                <button type="submit" class="btn btn-success">Disperse</button>
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




    </div>
</div>
</BODY>
