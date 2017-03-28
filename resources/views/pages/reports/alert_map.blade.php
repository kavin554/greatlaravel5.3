<BODY>
@include('layouts.app')
@include('layouts.map')
<div class="container-fluid">
    <div class="row">

        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-body">

                    <div>


                        <div class="container" style="padding:5px;width:100%">
                            <div id="wrapper">


                                <div id="map"></div>
                                <div class="panel panel-default">
                                    <div class="panel-body">

                                        <div class="list-group">
                                            <table width="100%" class="table table-striped" border="0">
                                                <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Name</th>
                                                    <th>Type</th>
                                                </tr>

                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>flood</td>
                                                    <td>Warning</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Accident</td>
                                                    <td>Alert</td>
                                                </tr>
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

        <div class="col-md-3">
            <div class="panel panel-default">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <b>Search Option </b>
                </div>
                <div class="pull-right">
                    <div class="panel-body">
                        <label> Date within</label>
                        <table width="100%">
                            <tr>
                                <td width="50%">
                                    <div class="input-append date" >
                                        <input name="FROM_DATE"  class="form-control" placeholder="From Date" id="dp_from_date" style="text-align:center" >
                                    </div>
                                </td>
                                <td width="02%">&nbsp;</td>
                                <td width="50%"><input name="TO_DATE" class="form-control" placeholder="To Date" id="dp_to_date" style="text-align:center" ></td>
                            </tr>
                        </table>
                        <br>

                        <label> Route</label>
                        <table width="100%">
                            <SELECT name="STATUS" class="form-control">
                                <OPTION VALUE="">Kathmandu to Pokhara</OPTION>
                                <OPTION VALUE="P">Beni to Tatopani</OPTION>
                                <OPTION VALUE="A">Jomsom to Muktinath</OPTION>
                            </SELECT>
                        </table>
                        <br>

                        <label> Place</label>
                        <table width="100%">
                            <SELECT name="STATUS" class="form-control">
                                <OPTION VALUE="">Kathmandu</OPTION>
                                <OPTION VALUE="P">Pokhara</OPTION>
                                <OPTION VALUE="A">Jomsom</OPTION>
                                <OPTION VALUE="A">Bara</OPTION>
                                <OPTION VALUE="A">Muktinath</OPTION>
                                <OPTION VALUE="A">Chitwan</OPTION>
                                <OPTION VALUE="A">Putan</OPTION>
                            </SELECT>
                        </table>
                        <br>

                        <label> Type</label>
                        <table width="100%">
                            <SELECT name="STATUS" class="form-control">
                                <OPTION VALUE="">Information</OPTION>
                                <OPTION VALUE="P">Warning</OPTION>
                                <OPTION VALUE="A">Alert</OPTION>

                            </SELECT>
                        </table>
                        <br>
                        <label> Country</label>
                        <table width="100%">
                            <SELECT name="STATUS" class="form-control">
                                <OPTION VALUE="">Nepal</OPTION>
                                <OPTION VALUE="P">Pakistan</OPTION>
                                <OPTION VALUE="A">Srilanka</OPTION>
                            </SELECT>
                        </table>
                        <br>
                        <label> Name </label>
                        <table width="100%">
                            <tr>
                                <td >
                                    <input name="NAME" class="form-control" placeholder="Name" id="NAME" style="text-align:" ></td>
                            </tr>
                        </table>
                        <br>
                    </div>

                </div>
            </div>

            <div class="panel-body" style="text-align:right">
                <input type="hidden" name="o" value="">
                <input type="hidden" name="search" value="SEARCH">
                <button type="submit" class="btn btn-primary">Search </button>
            </div>
        </div>
    </div>
</BODY>
