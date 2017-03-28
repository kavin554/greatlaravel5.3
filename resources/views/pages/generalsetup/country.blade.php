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
                                                                      data-toggle="tab"> Country Detail Form </a></li>
                            <li role="presentation"><a href="#list" aria-controls="home" role="tab"
                                                       data-toggle="tab"> Country Detail List </a></li>

                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="detail">
                                <div class="container" style="padding:5px;width:100%">


                                    <div class="table-responsive">
                                    <form action="{{ route ('country.store') }} " method="POST">
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

                                                            <td align="right">Country Tel Code</td>
                                                            <td width="02%" align="center">:</td>
                                                            <td width="30%">
                                                                <input type="text" class="form-control"
                                                                       id="COUNTRY_TEL_CODE"
                                                                       name="country_tel_code"
                                                                       value=""
                                                                       placeholder="Country Tel Code "
                                                                       required>
                                                            </td>


                                                        </tr>
                                                        </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>

                                            <tr height="40">
                                                <td align="right">Country Name
                                                </td>
                                                <td align="center">:</td>
                                                <td><input type="text" class="form-control" id="COUNTRY_NAME"
                                                           name="country_name"
                                                           value=""
                                                           placeholder="Enter Name "
                                                           required></td>
                                            </tr>


                                            <tr height="40">
                                                <td align="right">Continent</td>
                                                <td align="center">:</td>

                                                <td><input type="text" class="form-control"
                                                           id="CONTINENT" name="continent"
                                                           value=""
                                                           placeholder="Enter Continent "
                                                           required></td>

                                            </tr>

                                            <tr height="40">
                                                <td align="right">Currency Name</td>
                                                <td width="02%" align="center">:</td>
                                                <td width="88%">
                                                    <table width="100%">
                                                        <tr>
                                                            <td width="70%">
                                                                <div class="input-append date">
                                                                    <input type="text" class="form-control"
                                                                           id="CURRENCY_NAME"
                                                                           name="currency_name"
                                                                           value=""
                                                                           placeholder="Currency Name"
                                                                           required>
                                                                </div>
                                                            </td>
                                                            <td width="02%">&nbsp;</td>
                                                            <td align="right">Symbol</td>
                                                            <td width="02%" align="center">:</td>
                                                            <td width="20%"><input type="text"
                                                                                   class="form-control"
                                                                                   id="SYMBOL"
                                                                                   name="symbol"
                                                                                   value=""
                                                                                   placeholder="Symbol"
                                                                                   required>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>

                                            <tr height="40">
                                                <td align="right">Flag Image</td>
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
                                                            <td><input type="file" name="IMAGE_PATH"
                                                                       id="flag"></td>
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


                                <div class="list-group">
                                    <div class="panel panel-default">
                                        <div class="panel-body">

                                            <div class="list-group">
                                                <table width="100%" class="table table-striped" border="0">
                                                    <thead>
                                                    <tr>
                                                        <th>Country Code</th>
                                                        <th>Tel Code</th>
                                                        <th>Name</th>
                                                        <th>Continent</th>
                                                        <th>Currency</th>
                                                        <th>Symbol</th>
                                                        <th>Flag</th>
                                                        <th>Remarks</th>
                                                        <th>Action</th>
                                                    </tr>




                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    foreach ($countrys as $country){?>
                                                    <tr>
                                                        <td><?php echo $country->id ?></td>
                                                        <td><?php echo $country->country_tel_code ?></td>
                                                        <td><?php echo $country->country_name ?></td>
                                                        <td><?php echo $country->continent ?></td>
                                                        <td><?php echo $country->currency_name ?></td>
                                                        <td><?php echo $country->symbol ?></td>
                                                        <td><?php echo $country->flag ?></td>
                                                        <td><?php echo $country->remarks ?></td>
                                                        <td>
                                                            <form class="" method="POST"
                                                                  action="{{ route('country.destroy', $country->id) }}">
                                                                <input type="hidden" name="_token"
                                                                       value="{{csrf_token()}}">
                                                                <input type="hidden" name="_method" value="delete"/>
                                                                <a href="{{route('country.edit', $country->id)}}"
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
                        <th width="95%">Country List</th>
                        <th width="05%">&nbsp;</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php
                    foreach ($countrys as $country){?>
                    <tr>
                        <td><?php echo $country->country_name ?></td>
                        <td>
                            <form class="" method="POST"
                                  action="{{ route('country.destroy', $country->id) }}">
                                <input type="hidden" name="_token"
                                       value="{{csrf_token()}}">
                                <a href="{{route('country.edit', $country->id)}}"
                                   class="btn btn-primary">Edit</a>
                            </form>
                        </td>
                    </tr>
                    <?php } ?>

                </table>
            </div>
        </div>
    </div>


</div>
</div>
</BODY>
