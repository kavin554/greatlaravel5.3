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
                                                                      data-toggle="tab"> Embassy Detail Form </a></li>
                            <li role="presentation"><a href="#list" aria-controls="home" role="tab"
                                                       data-toggle="tab"> Embassy Detail List </a></li>

                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="detail">
                                <div class="container" style="padding:5px;width:100%">

                                    <div class="table-responsive">
                                        <form action="{{ route ('embassy.store') }} " method="POST">
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
                                                    <td width="28%" align="right"> Location</td>
                                                    <td width="02%" align="center">:</td>
                                                    <td width="88%">
                                                        <table width="100%">
                                                            <tr>
                                                                <td width="40%">
                                                                    <input type="text" class="form-control" id="NAME"
                                                                           name="location" value=""
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
                                                               value=""
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
                                                                           value=""
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
                                                                                       value=""
                                                                                       placeholder="Mobile No "
                                                                                       required>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>


                                                <tr height="40">
                                                    <td align="right" valign="top">Remarks</td>
                                                    <td align="center" valign="top">:</td>
                                                    <td><input type="text"
                                                               class="form-control" id="REMARKS"
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


                                                                    <input type="submit" value="save"
                                                                           class="btn btn-primary pull-right">
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
                                                            <th>Location</th>
                                                            <th>Contact Person</th>
                                                            <th>Position</th>
                                                            <th>Mobile No</th>
                                                            <th>&nbsp;</th>
                                                            <th>&nbsp;</th>
                                                        </tr>

                                                        {{--<tr>--}}
                                                        {{--<td width="20%">--}}
                                                        {{--<SELECT name="STATUS" class="form-control">--}}
                                                        {{--<OPTION VALUE="">Kathmandu to Pokhara</OPTION>--}}
                                                        {{--<OPTION VALUE="P">Beni to Tatopani</OPTION>--}}
                                                        {{--<OPTION VALUE="A">Jomsom to Muktinath</OPTION>--}}
                                                        {{--</SELECT>--}}
                                                        {{--</td>--}}
                                                        {{--<td>--}}
                                                        {{--<input name="DATE" class="form-control"--}}
                                                        {{--placeholder="Date"--}}
                                                        {{--id="dp_date">--}}
                                                        {{--</td>--}}
                                                        {{--<td>--}}
                                                        {{--<input name="TIME" class="form-control"--}}
                                                        {{--placeholder="Time"--}}
                                                        {{--id="dp_time">--}}

                                                        {{--</td>--}}
                                                        {{--<td width="20%">--}}
                                                        {{--<SELECT name="STATUS" class="form-control">--}}
                                                        {{--<OPTION VALUE="">Kathmandu</OPTION>--}}
                                                        {{--<OPTION VALUE="P">Pokhara</OPTION>--}}
                                                        {{--<OPTION VALUE="A">Jomsom</OPTION>--}}
                                                        {{--<OPTION VALUE="A">Bara</OPTION>--}}
                                                        {{--<OPTION VALUE="A">Muktinath</OPTION>--}}
                                                        {{--<OPTION VALUE="A">Chitwan</OPTION>--}}
                                                        {{--<OPTION VALUE="A">Putan</OPTION>--}}
                                                        {{--</SELECT>--}}
                                                        {{--</td>--}}
                                                        {{--<td width="15%">--}}
                                                        {{--<SELECT name="STATUS" class="form-control">--}}
                                                        {{--<OPTION VALUE="">Nepal</OPTION>--}}
                                                        {{--<OPTION VALUE="P">Pakistan</OPTION>--}}
                                                        {{--<OPTION VALUE="A">Srilanka</OPTION>--}}
                                                        {{--</SELECT>--}}

                                                        {{--</td>--}}
                                                        {{--<td>--}}
                                                        {{--<button type="submit" class="btn btn-success">Submit--}}
                                                        {{--</button>--}}
                                                        {{--</td>--}}
                                                        {{--</tr>--}}


                                                        </thead>

                                                        <tbody>
                                                        <?php
                                                        foreach ($Embassy as $embassy){?>
                                                        <tr>
                                                            <td><?php echo $embassy->id ?></td>
                                                            <td><?php echo $embassy->location ?></td>
                                                            <td><?php echo $embassy->contact_person ?></td>
                                                            <td><?php echo $embassy->position ?></td>
                                                            <td><?php echo $embassy->mobile_no ?></td>

                                                            <td>
                                                                <form class="" method="POST"
                                                                      action="{{ route('embassy.destroy', $embassy->id) }}">
                                                                    <input type="hidden" name="_token"
                                                                           value="{{csrf_token()}}">
                                                                    <input type="hidden" name="_method" value="delete"/>
                                                                    <a href="{{route('embassy.edit', $embassy->id)}}"
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
                    <table width="100%" border="0">
                        <tr>
                            <td width="40%">&nbsp;</td>


                        </tr>
                    </table>

                    <table width="100%" class="table table-striped" border="0">
                        <thead>
                        <tr style="width:100%">
                            <th width="95%">Embassy List</th>
                            <th width="05%">&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($Embassy as $embassy){?>
                        <tr>
                            <td><?php echo $embassy->location ?></td>
                            <td>
                                <form class="" method="POST"
                                      action="{{ route('embassy.destroy', $embassy->id) }}">
                                    <input type="hidden" name="_token"
                                           value="{{csrf_token()}}">
                                    <a href="{{route('embassy.edit', $embassy->id)}}"
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
