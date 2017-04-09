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
                                                       data-toggle="tab"> Disperseb Notification/Alert Detail List </a>
                            </li>

                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="detail">
                                <div class="container" style="padding:5px;width:100%">

                                    <div id="map"></div>
                                </div>
                            </div>


                            <div role="tabpanel" class="tab-pane" id="list">
                                <div class="container" style="padding:5px;width:100%">
                                    <div class="col-md-6">

                                        <div class="list-group">
                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                    <div class="panel-heading"><b>

                                                            <label>Disperse Alert Notification</label>

                                                        </b></div>

                                                    <div class="list-group">

                                                        <table width="100%" class="table table-striped" border="0">
                                                            <thead>
                                                            <tr>
                                                                <th>User</th>
                                                                <th>Route</th>
                                                                <th>Location</th>
                                                                <th>Detail</th>
                                                                <th>Remarks</th>
                                                                <th>&nbsp;</th>

                                                            </tr>

                                                            </thead>
                                                            <tbody>
                                                            <?php
                                                            foreach ($AlertNotification as $alert_notification){?>
                                                            <tr>
                                                                <td><?php echo $alert_notification->id ?></td>
                                                                <td><?php echo $alert_notification->an_title ?></td>
                                                                <td><?php echo $alert_notification->an_desc ?></td>
                                                                <td><?php echo $alert_notification->image_path ?></td>
                                                                <td><?php echo $alert_notification->remarks ?></td>
                                                                <td>
                                                                    <input type="submit" value="Disperse"
                                                                           class="btn btn-primary pull-right">
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

                                    <div class="col-md-6">

                                        <div class="list-group">
                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                    <div class="panel-heading"><b>

                                                            <label>Disperse Push Notification</label>

                                                        </b></div>

                                                    <div class="list-group">

                                                        <table width="100%" class="table table-striped" border="0">
                                                            <thead>
                                                            <tr>
                                                                <th>User</th>
                                                                <th>Route</th>
                                                                <th>Location</th>
                                                                <th>Detail</th>
                                                                <th>Remarks</th>
                                                                <th>&nbsp;</th>

                                                            </tr>

                                                            </thead>
                                                            <tbody>
                                                            <?php
                                                            foreach ($PushNotification as $push_notification){?>
                                                            <tr>
                                                                <td><?php echo $push_notification->id ?></td>
                                                                <td><?php echo $push_notification->pn_title ?></td>
                                                                <td><?php echo $push_notification->pn_desc ?></td>
                                                                <td><?php echo $push_notification->image_path ?></td>
                                                                <td><?php echo $push_notification->remarks ?></td>
                                                                <td>
                                                                    <input type="submit" value="Disperse"
                                                                           class="btn btn-primary pull-right">
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
</div>
</BODY>
