
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
                                                                      data-toggle="tab"> Location Detail Form </a></li>
                            <li role="presentation"><a href="#list" aria-controls="home" role="tab"
                                                       data-toggle="tab"> Location Detail List </a></li>

                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="detail">
                                <div class="container" style="padding:5px;width:100%">

                                    <div class="table-responsive">
                                        <form action="{{ route ('location.store') }} " method="POST">
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
                                                                <input class="form-control" id="id" name="id"
                                                                       type="hidden">

                                                            <td align="right">&nbsp;</td>

                                                            </td>

                                                            <td width="02%">&nbsp;</td>
                                                            <td align="right">Place Name</td>
                                                            <td align="center">:</td>
                                                            <td width="40%">
                                                                <SELECT class="form-control" name="pl_id">
                                                                    <?php foreach  ($place as $place_type) { ?>
                                                                    <OPTION value="{{ $place_type->id }}" name="pl_id"><?php echo $place_type->name ?>
                                                                    </OPTION>
                                                                    <?php } ?>

                                                                </SELECT>

                                                            </td>



                                                        </tr>
                                                        </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>

                                            <tr height="40">
                                                <td align="right">Location Name
                                                </td>
                                                <td align="center">:</td>
                                                <td><input type="text" class="form-control" id="NAME"
                                                           name="name" value=""
                                                           placeholder="Enter Name "
                                                           required ></td>
                                            </tr>


                                            <tr height="40">
                                                <td align="right">Lat</td>
                                                <td width="02%" align="center">:</td>
                                                <td width="88%">
                                                    <table width="100%">
                                                        <tr>
                                                            <td width="30%">
                                                                <input type="text" class="form-control" id="LAT"
                                                                       name="latitude" value=""
                                                                       placeholder="latitude"
                                                                       required >
                                                            </td>
                                                            <td width="02%">&nbsp;</td>
                                                            <td align="right">Long</td>
                                                            <td align="center">:</td>
                                                            <td width="02%">&nbsp;</td>
                                                            <td width="30%">

                                                                <input type="text" class="form-control" id="LON"
                                                                       name="longitude" value=""
                                                                       placeholder="Longitude"
                                                                       required >

                                                            </td>
                                                            <td width="02%">&nbsp;</td>
                                                            <td align="right">Alt</td>
                                                            <td align="center">:</td>
                                                            <td width="02%">&nbsp;</td>
                                                            <td width="30%">

                                                                <input type="text" class="form-control" id="ALT"
                                                                       name="altitude" value=""
                                                                       placeholder="Altitude"
                                                                       required >

                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>

                                            <tr height="40">
                                                <td align="right"> Details</td>
                                                <td align="center">:</td>
                                                <td><input type="text" class="form-control" id="DETAILS"
                                                           name="desc" value=""
                                                           placeholder="Enter Details"
                                                           required>
                                                </td>
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
                                                            <td width="50%">


                                                                <input type="submit" value="save" class="btn btn-primary pull-right">
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
                                                            <th>Lat</th>
                                                            <th>Long</th>
                                                            <th>Alt</th>
                                                            <th>Description</th>
                                                           <th>Remarks</th>
                                                            <th>&nbsp;Action</th>
                                                        </tr>

                                                        </thead>

                                                        <tbody>
                                                        <?php
                                                        foreach ($setup_locations as $setup_location){?>
                                                        <tr>
                                                            <td><?php echo $setup_location->id ?></td>
                                                            <td><?php echo $setup_location->name ?></td>
                                                            <td><?php echo $setup_location->latitude ?></td>
                                                            <td><?php echo $setup_location->longitude ?></td>
                                                            <td><?php echo $setup_location->altitude ?></td>
                                                            <td><?php echo $setup_location->desc ?></td>
                                                            <td><?php echo $setup_location->remarks ?></td>
                                                            <td>
                                                                <form class="" method="POST"
                                                                      action="{{ route('location.destroy', $setup_location->id) }}">
                                                                    <input type="hidden" name="_token"
                                                                           value="{{csrf_token()}}">
                                                                    <input type="hidden" name="_method" value="delete"/>
                                                                    <a href="{{route('location.edit', $setup_location->id)}}"
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
                            <th width="95%">Location List</th>
                            <th width="05%">&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($setup_locations as $setup_location){?>
                        <tr>
                            <td><?php echo $setup_location->name ?></td>

                            <td>
                                <form class="" method="POST"
                                      action="{{ route('location.destroy', $setup_location->id) }}">
                                    <input type="hidden" name="_token"
                                           value="{{csrf_token()}}">
                                    <input type="hidden" name="_method" value="delete"/>
                                    <a href="{{route('location.edit', $setup_location->id)}}"
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
