<BODY>
@include('layouts.app')
<div class="container-fluid">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">

                                <div class="container" style="padding:5px;width:100%">


                                    <div class="table-responsive">
                                        <form action="{{ route ('country.update',$country->id) }} " method="POST">
                                            <input type="hidden" name="_method" value="PATCH">
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
                                                                    <input type="text" class="form-control" id="id" name="id" value="{{$country->id}}"
                                                                           type="hidden" readonly>


                                                                <td align="right">&nbsp;</td>

                                                                </td>

                                                                <td align="right">Country Tel Code</td>
                                                                <td width="02%" align="center">:</td>
                                                                <td width="30%">
                                                                    <input type="text" class="form-control"
                                                                           id="COUNTRY_TEL_CODE"
                                                                           name="country_tel_code"
                                                                           value="{{$country->country_tel_code}}"
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
                                                               value="{{$country->country_name}}"
                                                               placeholder="Enter Name "
                                                               required></td>
                                                </tr>


                                                <tr height="40">
                                                    <td align="right">Continent</td>
                                                    <td align="center">:</td>

                                                    <td><input type="text" class="form-control"
                                                               id="CONTINENT" name="continent"
                                                               value="{{$country->continent}}"
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
                                                                               value="{{$country->currency_name}}"
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
                                                                                       value="{{$country->symbol}}"
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
                                                                           id="flag" value="{{$country->flag}}"></td>
                                                            </tr>
                                                            </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>


                                                <tr height="40">
                                                    <td align="right" valign="top">Remarks</td>
                                                    <td align="center" valign="top">:</td>
                                                    <td><input type="text"
                                                               class="form-control"
                                                               id="remarks"
                                                               name="remarks"
                                                               value="{{$country->remarks}}"
                                                               placeholder="Remarks"
                                                               required>
                                                        </td>
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
            </div>
        </div>




    </div>
</div>
</BODY>
