<BODY>
@include('layouts.app')
<div class="container-fluid">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">

                    <div class="container" style="padding:5px;width:100%">


                        <div class="table-responsive">
                            <form action="{{ route ('embassy.update',$embassy->id) }} " method="POST">
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
                                                    <input type="text" class="form-control" id="id" name="id" value="{{$embassy->id}}"
                                                           type="hidden" readonly>
                                                    <td align="right">&nbsp;</td>

                                                    </td>


                                                </tr>
                                                </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>

                                     <tr height="40">
                                                    <td width="28%" align="right"> Location</td>
                                                    <td width="02%" align="center">:</td>
                                                    <td width="88%">
                                                        <table width="100%">
                                                            <tr>
                                                                <td width="40%">
                                                                    <input type="text" class="form-control" id="NAME"
                                                                           name="location" value="{{$embassy->location}}"
                                                                           placeholder="Location">

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
                                                        </table>
                                                    </td>
                                                </tr>



                                    

                                    <tr height="40">
                                        <td width="28%" align="right">Contact Person</td>
                                        <td width="02%" align="center">:</td>
                                        <td><input type="text" class="form-control" id="CONTACT_PERSON"
                                                   name="contact_person"
                                                   value="{{$embassy->contact_person}}"
                                                   placeholder="Contact Person "
                                                   required></td>
                                    </tr>

                                    <tr height="40">
                                        <td width="28%" align="right"> Position</td>
                                        <td width="02%" align="center">:</td>
                                        <td width="88%">
                                            <table width="100%">
                                                <tr>
                                                    <td width="40%">
                                                        <input type="text" class="form-control"
                                                               id="POSITION" name="position"
                                                               value="{{$embassy->position}}"
                                                               placeholder="Position "
                                                               required>

                                                    </td>
                                                    <td width="02%">&nbsp;</td>
                                                    <td align="right">Mobile No</td>
                                                    <td align="center">:</td>
                                                    <td width="40%"><input type="text"
                                                                           class="form-control"
                                                                           id="MOBILE_NO"
                                                                           name="mobile_no"
                                                                           value="{{$embassy->position}}"
                                                                           placeholder="mobile_no"
                                                                           required>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>


                                    <tr height="40">
                                        <td align="right" valign="top">Remarks</td>
                                        <td align="center" valign="top">:</td>
                                        <td><input type="text"
                                                   class="form-control"
                                                   id="remarks"
                                                   name="remarks"
                                                   value="{{$embassy->remarks}}"
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
