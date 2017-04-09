

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
                                                                      data-toggle="tab"> Place Type Detail Form </a></li>
                            <li role="presentation"><a href="#list" aria-controls="home" role="tab"
                                                       data-toggle="tab"> Place Type Detail List </a></li>

                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="detail">
                                <div class="container" style="padding:5px;width:100%">

                                    <div class="table-responsive">
                                        <form action="{{ route ('place.store') }} " method="POST">
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
                                            <tr>
                                                <td align="right"> Place Type Name
                                                </td>
                                                <td align="center">:</td>
                                                <td><input type="text" class="form-control" id="NAME"
                                                            name="name" value=""
                                                            placeholder="Enter Name "
                                                            required >
                                                </td>
                                            </tr>



                                            <tr height="40">
                                                <td align="right">Icon</td>
                                                <td align="center">:</td>
                                                <td>
                                                    <table width="100%">
                                                        <tr>
                                                            <td width="15%">

                                                                <img src="../../GHT/image/logo.png"
                                                                     style="width:200px;height:120px;">

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td height="40%">
                                                        <tr>
                                                            <td><input type="file" name="IMAGE_PATH"
                                                                       id="image"></td>
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
                                                            <th>Code</th>
                                                            <th>Name</th>
                                                            <th>Image</th>
                                                            <th>Status</th>
                                                            <th>Remarks</th>
                                                            <th>&nbsp;</th>
                                                        </tr>




                                                        </thead>

                                                        <tbody>
                                                        <?php
                                                        foreach ($place_types as $place_type){?>
                                                        <tr>
                                                            <td><?php echo $place_type->id ?></td>
                                                            <td><?php echo $place_type->name ?></td>
                                                            <td><?php echo $place_type->status ?></td>
                                                            <td><?php echo $place_type->image ?></td>
                                                            <td><?php echo $place_type->remarks ?></td>
                                                            <td>
                                                                <form class="" method="POST"
                                                                      action="{{ route('place.destroy', $place_type->id) }}">
                                                                    <input type="hidden" name="_token"
                                                                           value="{{csrf_token()}}">
                                                                    <input type="hidden" name="_method" value="delete"/>
                                                                    <a href="{{route('place.edit', $place_type->id)}}"
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
                            <th width="95%">Place Type List</th>
                            <th width="05%">&nbsp;</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php
                        foreach ($place_types as $place_type){?>
                        <tr>
                            <td><?php echo $place_type->name ?></td>

                            <td>
                                <form class="" method="POST"
                                      action="{{ route('place.destroy', $place_type->id) }}">
                                    <input type="hidden" name="_token"
                                           value="{{csrf_token()}}">
                                    <input type="hidden" name="_method" value="delete"/>
                                    <a href="{{route('place.edit', $place_type->id)}}"
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
