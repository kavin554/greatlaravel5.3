

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
                                                                      data-toggle="tab"> Place Type Detail Form </a></li>
                            <li role="presentation"><a href="#list" aria-controls="home" role="tab"
                                                       data-toggle="tab"> Place Type Detail List </a></li>

                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="detail">
                                <div class="container" style="padding:5px;width:100%">

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
                                                                <input class="form-control" type="hidden">


                                                            <td align="right">&nbsp;</td>

                                                            </td>




                                                        </tr>
                                                        </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right"> Place Type Name
                                                </td>
                                                <td align="center">:</td>
                                                <td><input type="text" class="form-control" id="NAME"
                                                            name="NAME" value=""
                                                            placeholder="Enter Name "
                                                            required >
                                                </td>
                                            </tr>



                                            <tr height="40">
                                                <td align="right">Icon</td>
                                                <td align="center">:</td>
                                                <td>
                                                    <table width="100%">
                                                        <tr>
                                                            <td width="15%">

                                                                <img src="../../GHT/image/logo.png"
                                                                     style="width:200px;height:120px;">

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td height="40%">
                                                        <tr>
                                                            <td><input type="file" name="IMAGE_PATH"
                                                                       id="IMAGE_PATH"></td>
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
                                                                    <button type="submit" class="btn btn-default">
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
                                                            <th>Name</th>
                                                            <th>Icon</th>
                                                            <th>Status</th>
                                                            <th>&nbsp;</th>
                                                            <th>&nbsp;</th>
                                                        </tr>

                                                        <tr>
                                                            <td width="13%">
                                                                <input name="CODE" class="form-control" placeholder="Code"
                                                                       id="CODE">
                                                            </td>
                                                            <td>
                                                                <input name="NAME" class="form-control" placeholder="Name"
                                                                       id="NAME">
                                                            </td>
                                                            <td width="20%">
                                                                <input type="file" name="IMAGE_PATH" id="IMAGE_PATH">

                                                            </td>
                                                            <td width="20%">
                                                                <label class="switch">
                                                                    <input type="checkbox">
                                                                    <div class="slider round"></div>
                                                                </label>
                                                            </td>
                                                            <td width="5%">
                                                                <button type="submit" class="btn btn-success">Save</button>
                                                            </td>
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

        <div class="col-md-3">

            <div class="panel panel-default">
                <div class="panel-body">
                    <table width="100%" border="0">
                        <tr>
                            <td width="40%">&nbsp;</td>

                            <td width="60%" align="center">
                                <button type="submit" class="btn btn-success"> Add
                                    New Place Type
                                </button>
                                </a>
                            </td>
                        </tr>
                    </table>

                    <table width="100%" class="table table-striped" border="0">
                        <thead>
                        <tr style="width:100%">
                            <th width="95%">Place Type List</th>
                            <th width="05%">&nbsp;</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>


    </div>
</div>
</BODY>
