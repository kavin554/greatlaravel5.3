<BODY>
@include('layouts.app')
<div class="container-fluid">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">

                    <div class="container" style="padding:5px;width:100%">


                        <div class="table-responsive">
                            <form action="{{ route ('synopsis.update',$synopsis->id) }} " method="POST">
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
                                                        <input class="form-control" id="id" name="id"
                                                               type="hidden" value="{{$synopsis->id}}>


                                                    <td align="right">&nbsp;</td>

                                                    </td>




                                                </tr>
                                                </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>



                                    <tr height="1">
                                        <td align="right">&nbsp;</td>
                                        <td align="center">&nbsp;</td>
                                        <td><b>NWP</b></td>
                                    </tr>

                                    <tr height="40">
                                        <td align="right">a</td>
                                        <td width="02%" align="center">:</td>
                                        <td width="88%">
                                            <table width="100%">
                                                <tr>
                                                    <td width="30%">

                                                        <input class="form-control"
                                                               placeholder="a "
                                                               id="a" name="nwp_a" value="{{$synopsis->nwp_a}}">

                                                    </td>
                                                    <td width="02%">&nbsp;</td>
                                                    <td align="right">b</td>
                                                    <td align="center">:</td>
                                                    <td width="02%">&nbsp;</td>
                                                    <td width="30%">

                                                        <input name="nwp_b" class="form-control"
                                                               placeholder="b " id="b"  value="{{$synopsis->nwp_b}}">

                                                    </td>
                                                    <td width="02%">&nbsp;</td>
                                                    <td align="right">c</td>
                                                    <td align="center">:</td>
                                                    <td width="02%">&nbsp;</td>
                                                    <td width="30%">

                                                        <input name="nwp_c" class="form-control"
                                                               placeholder="c " id="c"  value="{{$synopsis->nwp_c}}">

                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>

                                    <tr height="40">
                                        <td align="right">Note</td>
                                        <td width="02%" align="center">:</td>
                                        <td width="88%">
                                            <input name="nwp_note"
                                                   class="form-control"
                                                   placeholder="Note "
                                                   id="nwp_note"  value="{{$synopsis->nwp_note}}">

                                        </td>
                                    </tr>

                                    <tr height="40">
                                        <td align="right" valign="top">cc</td>
                                        <td align="center" valign="top">:</td>
                                        <td><input class="form-control" rows="3" id="cc"
                                                   placeholder="Enter cc"
                                                   name="cc"  value="{{$synopsis->cc}}">
                                        </td>
                                    </tr>


                                    <tr height="40">
                                        <td align="right">hhk</td>
                                        <td width="02%" align="center">:</td>
                                        <td width="88%">
                                            <table width="100%">
                                                <tr>
                                                    <td width="40%">

                                                        <input name="hhk"
                                                               class="form-control"
                                                               placeholder="hhk "
                                                               id="hhk"  value="{{$synopsis->hhk}}">

                                                    </td>
                                                    <td width="02%">&nbsp;</td>
                                                    <td align="right">hha</td>
                                                    <td align="center">:</td>
                                                    <td width="02%">&nbsp;</td>
                                                    <td width="40%">

                                                        <input name="hha" class="form-control"
                                                               placeholder="hha " id="hha"  value="{{$synopsis->hha}}">

                                                    </td>

                                                </tr>
                                            </table>
                                        </td>
                                    </tr>

                                    <tr height="40">
                                        <td align="right">Imp 1</td>
                                        <td width="02%" align="center">:</td>
                                        <td width="88%">
                                            <table width="100%">
                                                <tr>
                                                    <td width="40%">

                                                        <input name="imp_1"
                                                               class="form-control"
                                                               placeholder="Imp 1 " id="imp1"  value="{{$synopsis->imp_1}}">

                                                    </td>
                                                    <td width="02%">&nbsp;</td>

                                                    <td width="40%">

                                                        <input name="imp_2"
                                                               class="form-control"
                                                               placeholder="Imp 2 "
                                                               id="imp_2"  value="{{$synopsis->imp_2}}">

                                                    </td>

                                                </tr>
                                            </table>
                                        </td>
                                    </tr>

                                    <tr height="40">
                                        <td align="right">Note</td>
                                        <td width="02%" align="center">:</td>
                                        <td width="88%">
                                            <input name="note"
                                                   class="form-control"
                                                   placeholder="Note "
                                                   id="note"  value="{{$synopsis->note}}">

                                        </td>
                                    </tr>


                                    <tr height="40">
                                        <td align="right"> Data of Entry</td>
                                        <td width="02%" align="center">:</td>
                                        <td width="88%">
                                            <table width="100%">
                                                <tr>
                                                    <td width="40%">

                                                        <input name="entry_data"
                                                               class="form-control"
                                                               placeholder="Entry Date"
                                                               id="entry_data"  value="{{$synopsis->entry_data}}">

                                                    </td>
                                                    <td width="02%">&nbsp;</td>
                                                    <td align="right"> &nbsp;</td>
                                                    <td align="center">&nbsp;</td>
                                                    <td width="02%">&nbsp;</td>
                                                    <td width="40%">&nbsp;</td>

                                                </tr>
                                            </table>
                                        </td>
                                    </tr>

                                    <tr height="40">
                                        <td align="right" valign="top">Remarks</td>
                                        <td align="center" valign="top">:</td>
                                        <td><input class="form-control" rows="3" id="REMARKS"
                                                   placeholder="Enter Remarks"
                                                   name="remarks"  value="{{$synopsis->remarks}}">
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
