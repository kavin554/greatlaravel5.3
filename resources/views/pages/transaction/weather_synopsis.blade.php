
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
                                                                      data-toggle="tab"> Weather Synopsis Form </a></li>
                            <li role="presentation"><a href="#list" aria-controls="home" role="tab"
                                                       data-toggle="tab"> Weather Synopsis List </a></li>



                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="detail">
                                <div class="container" style="padding:5px;width:100%">
                                    <div id="page-wrapper">
                                        <div class="row">

                                            <div class="col-md-9">
                                                <div class="panel panel-default">

                                                    <div class="table-responsive">
                                                        <form action="{{ route ('synopsis.store') }} " method="POST">
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
                                                                                           id="a" name="nwp_a">

                                                                                </td>
                                                                                <td width="02%">&nbsp;</td>
                                                                                <td align="right">b</td>
                                                                                <td align="center">:</td>
                                                                                <td width="02%">&nbsp;</td>
                                                                                <td width="30%">

                                                                                    <input name="nwp_b" class="form-control"
                                                                                           placeholder="b " id="b">

                                                                                </td>
                                                                                <td width="02%">&nbsp;</td>
                                                                                <td align="right">c</td>
                                                                                <td align="center">:</td>
                                                                                <td width="02%">&nbsp;</td>
                                                                                <td width="30%">

                                                                                    <input name="nwp_c" class="form-control"
                                                                                           placeholder="c " id="c">

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
                                                                               id="nwp_note">

                                                                    </td>
                                                                </tr>

                                                                <tr height="40">
                                                                    <td align="right" valign="top">cc</td>
                                                                    <td align="center" valign="top">:</td>
                                                                    <td><input class="form-control" rows="3" id="cc"
                                                                               placeholder="Enter cc"
                                                                               name="cc">
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
                                                                                           id="hhk">

                                                                                </td>
                                                                                <td width="02%">&nbsp;</td>
                                                                                <td align="right">hha</td>
                                                                                <td align="center">:</td>
                                                                                <td width="02%">&nbsp;</td>
                                                                                <td width="40%">

                                                                                    <input name="hha" class="form-control"
                                                                                           placeholder="hha " id="hha">

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
                                                                                           placeholder="Imp 1 " id="imp1">

                                                                                </td>
                                                                                <td width="02%">&nbsp;</td>

                                                                                <td width="40%">

                                                                                    <input name="imp_2"
                                                                                           class="form-control"
                                                                                           placeholder="Imp 2 "
                                                                                           id="imp_2">

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
                                                                               id="note">

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
                                                                                           id="entry_data">

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
                                                                                  name="remarks">
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
                                                            <th>Id</th>
                                                            <th>NWP a</th>
                                                            <th>NWP b</th>
                                                            <th>NWP c</th>
                                                            <th>cc</th>
                                                            <th>hhk</th>
                                                            <th>hha</th>
                                                            <th>Imp 1</th>
                                                            <th>Imp 2</th>
                                                            <th>Entry Date</th>
                                                            <th>Remarks</th>
                                                            <th>&nbsp;</th>
                                                        </tr>
                                                        </thead>

                                                        <tbody>
                                                        <?php
                                                        foreach ($synopsis as $synopsis){?>
                                                        <tr>
                                                            <td><?php echo $synopsis->id ?></td>
                                                            <td><?php echo $synopsis->nwp_a ?></td>
                                                            <td><?php echo $synopsis->nwp_b ?></td>
                                                            <td><?php echo $synopsis->nwp_c ?></td>
                                                            <td><?php echo $synopsis->cc ?></td>
                                                            <td><?php echo $synopsis->hhk ?></td>
                                                            <td><?php echo $synopsis->hha ?></td>
                                                            <td><?php echo $synopsis->imp_1 ?></td>
                                                            <td><?php echo $synopsis->imp_2?></td>
                                                            <td><?php echo $synopsis->entry_data ?></td>
                                                            <td><?php echo $synopsis->remarks ?></td>

                                                            <td>
                                                                <form class="" method="POST"
                                                                      action="{{ route('synopsis.destroy', $synopsis->id) }}">
                                                                    <input type="hidden" name="_token"
                                                                           value="{{csrf_token()}}">
                                                                    <input type="hidden" name="_method" value="delete"/>
                                                                    <a href="{{route('synopsis.edit', $synopsis->id)}}"
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
