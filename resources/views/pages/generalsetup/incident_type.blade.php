

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
                                                                      data-toggle="tab"> Incident Type Detail Form </a></li>
                            <li role="presentation"><a href="#list" aria-controls="home" role="tab"
                                                       data-toggle="tab"> Incident Type Detail List </a></li>

                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="detail">
                                <div class="container" style="padding:5px;width:100%">

                                    <div class="table-responsive">
                                        <form action="{{ route ('incident.store') }} " method="POST">
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




                                                        </tr>
                                                        </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>

                                            <tr height="40">
                                                <td align="right">Incident Type Name
                                                </td>
                                                <td align="center">:</td>
                                                <td><input type="text" class="form-control" id="name"
                                                           name="incident_name" value=""
                                                           placeholder="Enter Name "
                                                           required ></td>
                                            </tr>


                                            <tr height="40">
                                                <td align="right">Incident Type</td>
                                                <td width="02%" align="center">:</td>
                                                <td width="88%">
                                                    <table width="100%">
                                                        <tr>
                                                            <td width="40%">
                                                                <div class="input-append date">
                                                                    <SELECT name="type"
                                                                            class="form-control">
                                                                        <OPTION VALUE="">Information
                                                                        </OPTION>
                                                                        <OPTION VALUE="P">Warning</OPTION>
                                                                        <OPTION VALUE="A">Alert</OPTION>
                                                                    </SELECT>
                                                                </div>
                                                            </td>
                                                            <td width="02%">&nbsp;</td>
                                                            <td align="right">&nbsp; </td>
                                                            <td width="02%" align="center">&nbsp;</td>
                                                            <td width="20%">&nbsp;</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>

                                            <tr height="40">
                                                <td align="right"> Image</td>
                                                <td align="center">:</td>
                                                <td>
                                                    <table width="100%">
                                                        <tr>
                                                            <td width="15%">

                                                                <img src="../../GHT/image/logo.png"
                                                                     style="width:204px;height:120px;">

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td height="40%">
                                                        <tr>
                                                            <td><input type="file" name="image"
                                                                       id="IMAGE_PATH"></td>
                                                        </tr>
                                                        </td>
                                                        </tr>
                                                    </table>
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
                                                            <th>Type</th>
                                                            <th>Image</th>
                                                            <th>Remarks</th>
                                                            <th>&nbsp;</th>
                                                        </tr>

                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        foreach ($incident_types as $incident_type){?>
                                                        <tr>
                                                            <td><?php echo $incident_type->id ?></td>
                                                            <td><?php echo $incident_type->incident_name ?></td>
                                                            <td><?php echo $incident_type->type ?></td>
                                                            <td><?php echo $incident_type->image ?></td>
                                                            <td><?php echo $incident_type->remarks ?></td>
                                                            <td>
                                                                <form class="" method="POST"
                                                                      action="{{ route('incident.destroy', $incident_type->id) }}">
                                                                    <input type="hidden" name="_token"
                                                                           value="{{csrf_token()}}">
                                                                    <input type="hidden" name="_method" value="delete"/>
                                                                    <a href="{{route('incident.edit', $incident_type->id)}}"
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
                            <th width="95%">Incident Type List</th>
                            <th width="05%">&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($incident_types as $incident_type){?>
                        <tr>
                            <td><?php echo $incident_type->incident_name ?></td>
                            <td>
                                <form class="" method="POST"
                                      action="{{ route('incident.destroy', $incident_type->id) }}">
                                    <input type="hidden" name="_token"
                                           value="{{csrf_token()}}">
                                    <input type="hidden" name="_method" value="delete"/>
                                    <a href="{{route('incident.edit', $incident_type->id)}}"
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
