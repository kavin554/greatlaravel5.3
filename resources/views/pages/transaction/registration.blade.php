
<script>
    function generateQRCode(){
        this.qrImage.style.display ='none';
        this.qrImage.src="https://chart.googleapis.com/chart?cht=qr&choe=UTF-8&chs=150x150&chl="
            +encodeURIComponent(QRCode.value.trim());
        this.qrImage.style.display ='inline';
    }
</script>
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
                                                                                <input class="form-control"
                                                                                       type="QRCode" id="QRCode" value="" size="20">


                                                                            <td align="right">&nbsp;</td>

                                                                            </td>

                                                                            <td align="right">Type</td>
                                                                            <td align="center">:</td>
                                                                            <td width="40%">
                                                                                <SELECT name="STATUS"
                                                                                        class="form-control">
                                                                                    <OPTION VALUE="">Nepal</OPTION>
                                                                                    <OPTION VALUE="P">China</OPTION>
                                                                                    <OPTION VALUE="P">Srilanka</OPTION>
                                                                                    <OPTION VALUE="P">Bhutan</OPTION>
                                                                                </SELECT></td>


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
                                                                           name="NAME" value=""
                                                                           placeholder="Enter Name "
                                                                           required></td>
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

                                                                                <input name="STREET"
                                                                                       class="form-control"
                                                                                       placeholder="Street "
                                                                                       id="STREET">

                                                                            </td>
                                                                            <td width="02%">&nbsp;</td>
                                                                            <td align="right">City</td>
                                                                            <td align="center">:</td>
                                                                            <td width="02%">&nbsp;</td>
                                                                            <td width="30%">

                                                                                <input name="CITY" class="form-control"
                                                                                       placeholder="City " id="CITY">

                                                                            </td>
                                                                            <td width="02%">&nbsp;</td>
                                                                            <td align="right">State</td>
                                                                            <td align="center">:</td>
                                                                            <td width="02%">&nbsp;</td>
                                                                            <td width="30%">

                                                                                <input name="STATE" class="form-control"
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

                                                                                <input name="MOBILE"
                                                                                       class="form-control"
                                                                                       placeholder="Mobile "
                                                                                       id="MOBILE">

                                                                            </td>
                                                                            <td width="02%">&nbsp;</td>
                                                                            <td align="right">Home</td>
                                                                            <td align="center">:</td>
                                                                            <td width="02%">&nbsp;</td>
                                                                            <td width="40%">

                                                                                <input name="HOME" class="form-control"
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

                                                                                <input name="EMAIL1"
                                                                                       class="form-control"
                                                                                       placeholder="Email " id="EMAIL1">

                                                                            </td>
                                                                            <td width="02%">&nbsp;</td>

                                                                            <td width="40%">

                                                                                <input name="EMAIL2"
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

                                                                                <input name="PP_NO" class="form-control"
                                                                                       placeholder="PP Number "
                                                                                       id="PP_NO">

                                                                            </td>
                                                                            <td width="02%">&nbsp;</td>
                                                                            <td align="right">Type</td>
                                                                            <td align="center">:</td>
                                                                            <td width="02%">&nbsp;</td>
                                                                            <td width="40%">

                                                                                <SELECT name="STATUS"
                                                                                        class="form-control">
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

                                                                                <input name="ISSUE_DATE"
                                                                                       class="form-control"
                                                                                       placeholder="Issue Date"
                                                                                       id="ISSUE_DATE">

                                                                            </td>
                                                                            <td width="02%">&nbsp;</td>
                                                                            <td align="right">Expire Date</td>
                                                                            <td align="center">:</td>
                                                                            <td width="02%">&nbsp;</td>
                                                                            <td width="40%">

                                                                                <input name="EXPIRE_DATE"
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
                                                                              name="REMARKS">
                                                        </textarea></td>
                                                            </tr>


                                                            <tr height="40">
                                                                <td align="right">&nbsp;</td>
                                                                <td align="center">&nbsp;</td>
                                                                <td>

                                                                    <table class="table">
                                                                        <tr>
                                                                            <td width="50%">


                                                                                <input type="hidden" name="operation"
                                                                                       value="submit">
                                                                                <button type="submit"
                                                                                        class="btn btn-success">
                                                                                    <b>Submit</b>
                                                                                </button>
                                                                                </form>

                                                                            </td>


                                                                            <td width="25%" align="left">

                                                                                <form role="form" method="post"
                                                                                      action="general_setup.php">
                                                                                    <button type="submit"
                                                                                            class="btn btn-default">
                                                                                        Cancel
                                                                                    </button>
                                                                                </form>


                                                                            </td>

                                                                        </tr>
                                                                    </table>


                                                                </td>
                                                            </tr>

                                                        </table>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-2">

                                                <div class="panel panel-default">

                                                    <!-- /.panel-heading -->
                                                    <input type="button" value="Make QR Code" onclick="javascript:generateQRCode();">
                                                    <br>


                                                    <div><img id='qrImage' style='display:inline;'
                                                              src='https://chart.googleapis.com/chart?cht=qr&choe=UTF-8&chs=200x200&chl=http%3A%2F%2Fofficetricks.com'/></div>
                                                </div>

                                                <div class="panel panel-default">

                                                    <!-- /.panel-heading -->


                                                    <div><img src="../../GHT/image/pp.jpg" style="width:100%;height:30%;"></div>
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
                                            <th>Email</th>
                                            <th>Country</th>
                                            <th>&nbsp;</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                        </thead>
                                        <tbody>


                                        <tr>
                                            <th width="10%">
                                                <input name="ID" class="form-control" placeholder="No"
                                                       id="dp_date">
                                                </SELECT>
                                            </th>
                                            <th width="30%">
                                                <input name="NAME" class="form-control"
                                                       placeholder="Name" id="dp_time">

                                            </th>
                                            <th width="30%">
                                                <input name="EMAIL" class="form-control"
                                                       placeholder="Email" id="EMAIL">

                                            </th>
                                            <th width="20%">
                                                <SELECT name="COUNTRY" class="form-control">
                                                    <OPTION VALUE="">Nepal</OPTION>
                                                    <OPTION VALUE="P">China</OPTION>
                                                    <OPTION VALUE="P">Srilanka</OPTION>
                                                    <OPTION VALUE="P">Bhutan</OPTION>
                                                </SELECT>
                                            </th>
                                            <td>
                                                <button type="submit" class="btn btn-success">Submit
                                                </button>
                                            </td>
                                            <td align="center">&nbsp;</td>
                                        </tr>


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
                                                            <th>ID</th>
                                                            <th>Name</th>
                                                            <th>Nationality</th>
                                                            <th>PP Number</th>
                                                            <th>Email</th>
                                                            <th>Status</th>
                                                            <th>&nbsp;</th>
                                                            <th>&nbsp;</th>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%">3</td>
                                                            <td width="30%">
                                                                <input name="NAME" class="form-control"
                                                                       placeholder="Name"
                                                                       id="dp_time">

                                                            </td>
                                                            <td width="15%">
                                                                <SELECT name="NATIONALITY"
                                                                        class="form-control">
                                                                    <OPTION VALUE="">Nepal</OPTION>
                                                                    <OPTION VALUE="P">China</OPTION>
                                                                    <OPTION VALUE="P">Srilanka</OPTION>
                                                                    <OPTION VALUE="P">Bhutan</OPTION>
                                                                </SELECT>
                                                            </td>
                                                            <td width="15%">
                                                                <input name="PP_NUMBER"
                                                                       class="form-control"
                                                                       placeholder="PP No"
                                                                       id="PP_NUMBER">

                                                            </td>
                                                            <td width="25%">
                                                                <input name="EMAIL" class="form-control"
                                                                       placeholder="Email"
                                                                       id="EMAIL">

                                                            </td>
                                                            <td width="5%">
                                                                <label class="switch">
                                                                    <input type="checkbox">
                                                                    <div class="slider round"></div>
                                                                </label>
                                                            </td>
                                                            <td width="5%">
                                                                <button type="submit"
                                                                        class="btn btn-success">Save
                                                                </button>
                                                            </td>
                                                            <td align="center">&nbsp;</td>
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
