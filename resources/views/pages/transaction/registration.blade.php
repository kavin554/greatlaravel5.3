
<BODY>
@include('layouts.qr')
@include('layouts.image')
@include('layouts.app')
<div class="container-fluid">
    <div class="row">

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">

                    <div>

                        <ul class="nav nav-tabs" role="tablist">

                            <li role="presentation" class="active"><a href="#detail" aria-controls="home" role="tab"
                                                                      data-toggle="tab"> User Detail Form </a></li>
                            <li role="presentation"><a href="#list" aria-controls="home" role="tab"
                                                       data-toggle="tab"> User Detail List </a></li>
                            <li role="presentation"><a href="#contact" aria-controls="home" role="tab"
                                                       data-toggle="tab"> Emergency Contact</a></li>


                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="detail">
                                <div class="container" style="padding:5px;width:100%">
                                    <div id="page-wrapper">
                                        <div class="row">

                                            <div class="col-md-9">
                                                <div class="panel panel-default">

                                                    <div class="table-responsive">
                                                        <form action="{{ route ('registration.store') }} " method="POST" enctype="multipart/form-data">
                                                            {{ csrf_field() }}
                                                        <table width="98%">
                                                            <div class="panel panel-default">



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
                                                                                <input class="form-control"
                                                                                       type="QRCode" id="QRCode" value="" size="20">


                                                                            <td align="right">&nbsp;</td>

                                                                            </td>

                                                                            <td width="02%">&nbsp;</td>
                                                                            <td align="right">Country name</td>
                                                                            <td align="center">:</td>
                                                                            <td width="40%">
                                                                                <SELECT class="form-control" name="country_id"
                                                                                        value="">
                                                                                    <?php foreach  ($country as $country) { ?>
                                                                                    <OPTION VALUE="{{ $country->id }}" name="country_id"><?php echo $country->country_name ?>
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
                                                                <td align="right">User Name
                                                                </td>
                                                                <td align="center">:</td>
                                                                <td><input type="text" class="form-control" id="NAME"
                                                                           name="user_name" value=""
                                                                           placeholder="Enter Name "
                                                                           required></td>
                                                            </tr>
                                                                <tr height="40">
                                                                    <td align="right">User Image</td>
                                                                    <td align="center">:</td>
                                                                    <td>
                                                                        <table width="100%">
                                                                            <tr>
                                                                                <td width="15%">

                                                                                    <img src="" height="150" alt="Image preview...">

                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td height="40%">
                                                                            <tr>
                                                                                <td><input type="file" name="image" accept="image/"
                                                                                           id="image" onchange="previewFile()" required></td>
                                                                            </tr>
                                                                            </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>

                                                            <tr height="1">
                                                                <td align="right">&nbsp;</td>
                                                                <td align="center">&nbsp;</td>
                                                                <td><b>Address</b></td>
                                                            </tr>

                                                            <tr height="40">
                                                                <td align="right">Street</td>
                                                                <td width="02%" align="center">:</td>
                                                                <td width="88%">
                                                                    <table width="100%">
                                                                        <tr>
                                                                            <td width="30%">

                                                                                <input class="form-control"
                                                                                       placeholder="Street "
                                                                                       id="STREET" name="street">

                                                                            </td>
                                                                            <td width="02%">&nbsp;</td>
                                                                            <td align="right">City</td>
                                                                            <td align="center">:</td>
                                                                            <td width="02%">&nbsp;</td>
                                                                            <td width="30%">

                                                                                <input name="city" class="form-control"
                                                                                       placeholder="City " id="CITY">

                                                                            </td>
                                                                            <td width="02%">&nbsp;</td>
                                                                            <td align="right">State</td>
                                                                            <td align="center">:</td>
                                                                            <td width="02%">&nbsp;</td>
                                                                            <td width="30%">

                                                                                <input name="state" class="form-control"
                                                                                       placeholder="State " id="STATE">

                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr height="1">
                                                                <td align="right">&nbsp;</td>
                                                                <td align="center">&nbsp;</td>
                                                                <td><b>Contact</b></td>
                                                            </tr>

                                                            <tr height="40">
                                                                <td align="right">Mobile</td>
                                                                <td width="02%" align="center">:</td>
                                                                <td width="88%">
                                                                    <table width="100%">
                                                                        <tr>
                                                                            <td width="40%">

                                                                                <input name="mobile_no"
                                                                                       class="form-control"
                                                                                       placeholder="Mobile "
                                                                                       id="MOBILE">

                                                                            </td>
                                                                            <td width="02%">&nbsp;</td>
                                                                            <td align="right">Home</td>
                                                                            <td align="center">:</td>
                                                                            <td width="02%">&nbsp;</td>
                                                                            <td width="40%">

                                                                                <input name="home_no" class="form-control"
                                                                                       placeholder="Home " id="HOME">

                                                                            </td>

                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>

                                                            <tr height="40">
                                                                <td align="right">Email</td>
                                                                <td width="02%" align="center">:</td>
                                                                <td width="88%">
                                                                    <table width="100%">
                                                                        <tr>
                                                                            <td width="40%">

                                                                                <input name="email_1"
                                                                                       class="form-control"
                                                                                       placeholder="Email " id="EMAIL1">

                                                                            </td>
                                                                            <td width="02%">&nbsp;</td>

                                                                            <td width="40%">

                                                                                <input name="email_2"
                                                                                       class="form-control"
                                                                                       placeholder="Alt Email "
                                                                                       id="EMAIL2">

                                                                            </td>

                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>

                                                            <tr height="1">
                                                                <td align="right">&nbsp;</td>
                                                                <td align="center">&nbsp;</td>
                                                                <td><b>Passport</b></td>
                                                            </tr>

                                                            <tr height="40">
                                                                <td align="right">PP Number</td>
                                                                <td width="02%" align="center">:</td>
                                                                <td width="88%">
                                                                    <table width="100%">
                                                                        <tr>
                                                                            <td width="40%">

                                                                                <input name="passport_no" class="form-control"
                                                                                       placeholder="PP Number "
                                                                                       id="PP_NO">

                                                                            </td>
                                                                            <td width="02%">&nbsp;</td>
                                                                            <td align="right">Type</td>
                                                                            <td align="center">:</td>
                                                                            <td width="02%">&nbsp;</td>
                                                                            <td width="40%">

                                                                                <SELECT name="STATUS"
                                                                                        class="form-control" name="type">
                                                                                    <OPTION VALUE="">General</OPTION>
                                                                                    <OPTION VALUE="P">Diploment</OPTION>

                                                                                </SELECT>

                                                                            </td>

                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>

                                                            <tr height="40">
                                                                <td align="right">Issue Date</td>
                                                                <td width="02%" align="center">:</td>
                                                                <td width="88%">
                                                                    <table width="100%">
                                                                        <tr>
                                                                            <td width="40%">

                                                                                <input name="issue_date"
                                                                                       class="form-control"
                                                                                       placeholder="Issue Date"
                                                                                       id="ISSUE_DATE">

                                                                            </td>
                                                                            <td width="02%">&nbsp;</td>
                                                                            <td align="right">Expire Date</td>
                                                                            <td align="center">:</td>
                                                                            <td width="02%">&nbsp;</td>
                                                                            <td width="40%">

                                                                                <input name="expiry_date"
                                                                                       class="form-control"
                                                                                       placeholder="Expire Date"
                                                                                       id="EXPIRE_DATE">

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


                                            <div class="col-md-2">


                                                    <!-- /.panel-heading -->



                                                    <div><img id='qrImage' style='display:inline;'
                                                              src='https://chart.googleapis.com/chart?cht=qr&choe=UTF-8&chs=200x200&chl=http%3A%2F%2Fofficetricks.com'/>
                                                        <input  type="button" value="Make QR Code" onclick="javascript:generateQRCode();">
                                                        </div>
                                                </div>



                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="contact">
                                <div class="container" style="padding:5px;width:100%">
                                    <table width="100%" class="table table-striped" border="0">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Home No</th>
                                            <th>Mobile No</th>
                                            <th>Email</th>
                                            <th>Email</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <?php
                                        foreach ($user_registrations as $user_registration){?>
                                        <tr>
                                            <td><?php echo $user_registration->id ?></td>
                                            <td><?php echo $user_registration->user_name ?></td>
                                            <td><?php echo $user_registration->home_no ?></td>
                                            <td><?php echo $user_registration->mobile_no ?></td>
                                            <td><?php echo $user_registration->email_1?></td>
                                            <td><?php echo $user_registration->email_2 ?></td>

                                            <td>
                                                <form class="" method="POST"
                                                      action="{{ route('registration.destroy', $user_registration->id) }}">
                                                    <input type="hidden" name="_token"
                                                           value="{{csrf_token()}}">
                                                    <input type="hidden" name="_method" value="delete"/>
                                                    <a href="{{route('registration.edit', $user_registration->id)}}"
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


                            <div role="tabpanel" class="tab-pane" id="list">
                                <div class="container" style="padding:5px;width:100%">
                                    <div class="panel panel-default">
                                    </div>

                                    <div class="list-group">
                                        <div class="panel panel-default">
                                            <div class="panel-body">

                                                <div class="list-group">
                                                    <table width="100%" class="table table-striped"
                                                           border="0">
                                                        <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Name</th>
                                                            <th>Country</th>
                                                            <th>Mobile No</th>
                                                            <th>Email</th>
                                                            <th>Passport</th>
                                                            <th>Issue Date</th>
                                                            <th>Expiry Date</th>
                                                            <th>Image</th>
                                                            <th>&nbsp;</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        foreach ($user_registrations as $user_registration){?>
                                                        <tr>
                                                            <td><?php echo $user_registration->id ?></td>
                                                            <td><?php echo $user_registration->user_name ?></td>
                                                            <td><?php echo $user_registration->country_id ?></td>
                                                            <td><?php echo $user_registration->mobile_no ?></td>
                                                            <td><?php echo $user_registration->email_1?></td>
                                                            <td><?php echo $user_registration->passport_no ?></td>
                                                            <td><?php echo $user_registration->issue_date ?></td>
                                                            <td><?php echo $user_registration->expiry_date ?></td>
                                                            <td><img src="{{ asset('img/image/')}}/{{ $user_registration->image }}"></td>
                                                            <td>
                                                                <form class="" method="POST"
                                                                      action="{{ route('registration.destroy', $user_registration->id) }}">
                                                                    <input type="hidden" name="_token"
                                                                           value="{{csrf_token()}}">
                                                                    <input type="hidden" name="_method" value="delete"/>
                                                                    <a href="{{route('registration.edit', $user_registration->id)}}"
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
