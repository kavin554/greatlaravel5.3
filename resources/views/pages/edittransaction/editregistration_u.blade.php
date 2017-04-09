<BODY>
@include('layouts.app')
<div class="container-fluid">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">

                    <div class="container" style="padding:5px;width:100%">


                        <div class="table-responsive">
                            <form action="{{ route ('registration.update',$user_registration->id) }} " method="POST">
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
                                                        <input class="form-control"
                                                               type="QRCode" id="QRCode" value="" size="20" value="{{$user_registration->id}}">


                                                    <td align="right">&nbsp;</td>

                                                    </td>

                                                    <td align="right">Country</td>
                                                    <td align="center">:</td>
                                                    <td width="40%">
                                                        <SELECT
                                                                class="form-control" name="country_name" value="{{$user_registration->country_name}}">
                                                            <OPTION VALUE="Nepal">Nepal</OPTION>
                                                            <OPTION VALUE="China">China</OPTION>
                                                            <OPTION VALUE="Srilanka">Srilanka</OPTION>
                                                            <OPTION VALUE="Bhutan">Bhutan</OPTION>
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
                                                   name="user_name" value="{{$user_registration->user_name}}"
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

                                                        <input class="form-control"
                                                               placeholder="Street "
                                                               id="STREET" name="street"  value="{{$user_registration->street}}">

                                                    </td>
                                                    <td width="02%">&nbsp;</td>
                                                    <td align="right">City</td>
                                                    <td align="center">:</td>
                                                    <td width="02%">&nbsp;</td>
                                                    <td width="30%">

                                                        <input name="city" class="form-control"
                                                               placeholder="City " id="CITY"  value="{{$user_registration->city}}">

                                                    </td>
                                                    <td width="02%">&nbsp;</td>
                                                    <td align="right">State</td>
                                                    <td align="center">:</td>
                                                    <td width="02%">&nbsp;</td>
                                                    <td width="30%">

                                                        <input name="state" class="form-control"
                                                               placeholder="State " id="STATE"  value="{{$user_registration->state}}">

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
                                                               id="MOBILE"  value="{{$user_registration->mobile_no}}" >

                                                    </td>
                                                    <td width="02%">&nbsp;</td>
                                                    <td align="right">Home</td>
                                                    <td align="center">:</td>
                                                    <td width="02%">&nbsp;</td>
                                                    <td width="40%">

                                                        <input name="home_no" class="form-control"
                                                               placeholder="Home " id="HOME"  value="{{$user_registration->home_no}}" >

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
                                                               placeholder="Email " id="EMAIL1"  value="{{$user_registration->email_1}}" >

                                                    </td>
                                                    <td width="02%">&nbsp;</td>

                                                    <td width="40%">

                                                        <input name="email_2"
                                                               class="form-control"
                                                               placeholder="Alt Email "
                                                               id="EMAIL2"  value="{{$user_registration->email_2}}" >

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
                                                               id="PP_NO"  value="{{$user_registration->passport_no}}">

                                                    </td>
                                                    <td width="02%">&nbsp;</td>
                                                    <td align="right">Type</td>
                                                    <td align="center">:</td>
                                                    <td width="02%">&nbsp;</td>
                                                    <td width="40%">

                                                        <SELECT name="STATUS"
                                                                class="form-control" name="type"  value="{{$user_registration->type}}">
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
                                                               id="ISSUE_DATE" value="{{$user_registration->issue_date}}">

                                                    </td>
                                                    <td width="02%">&nbsp;</td>
                                                    <td align="right">Expire Date</td>
                                                    <td align="center">:</td>
                                                    <td width="02%">&nbsp;</td>
                                                    <td width="40%">

                                                        <input name="expiry_date"
                                                               class="form-control"
                                                               placeholder="Expire Date"
                                                               id="EXPIRE_DATE"  value="{{$user_registration->expiry_date}}">

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
                                                      name="remarks"  value="{{$user_registration->remarks}}">
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
            </div>
        </div>


    </div>
</div>
</BODY>
