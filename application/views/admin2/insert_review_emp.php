<style type="text/css">
    .mouse {
        cursor: pointer;
    }
    
    * {
        margin: 0;
        padding: 0;
    }
    
    .title {
        position: absolute;
        top: 0px;
        left: 0px;
        width: 130px;
        height: 570px;
        background: #a7cede url(title.png) no-repeat top left;
    }
    
    a.back {
        background: transparent url(back.png) no-repeat 0px 0px;
        position: absolute;
        width: 150px;
        height: 27px;
        outline: none;
        top: 2px;
        right: 0px;
    }
    
    .b:hover {
        transform: scale(1.1);
    }
    
    .b {
        height: 97px;
    }
    
    .md-modal {
        border: 7px solid;
        border-color: #f7f9fa;
        border-radius: 12px;
    }
    .hight_width{
    font-size: 42px;
    background-color: #fff;
    border-radius: 50%;
    color: green;
    position: absolute;
     display: none; 
    }
</style>
<link rel="stylesheet" href="<?php echo base_url() ?>admin_assets/css/style.css" type="text/css" media="screen" />

<div class=control-sidebar-bg></div>
<div id=page-wrapper>
    <div class=content>
        <div class=content-header>
            <div class=header-icon>
                <i class=pe-7s-tools></i>
            </div>
            <div class=header-title>
                <h1>Performance Evaluation Form</h1>
                <small></small>
                <ol class=breadcrumb>
                    <li><a href=index.html><i class=pe-7s-home></i> Home</a></li>
                    <li class=active>Performance Evaluation</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd ">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Employee Detail</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel-body">
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="">Employee's ID</label>
                                                <input type="text" class="form-control" name="employee_id" value="<?php echo $employee['employee_id'] ?>" id="" placeholder="itgs-002" readonly="">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="">Employee's Full Name</label>
                                                <input type="text" class="form-control" id="" value="<?php echo $employee['employee_name'] ?>" placeholder="Umer" readonly="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="">Department</label>
                                                <input type="text" class="form-control" value="<?php echo $employee['department'] ?>" placeholder="Department" readonly="">
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label for="">Designation</label>
                                                <input type="text" class="form-control" value="<?php echo $employee['designation'] ?>" placeholder="Designation" readonly="">
                                            </div>
                                        </div>
                                        

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="">
                    <div class="">
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <div class="column">
                                    <div class="md-modal md-effect-1" id="modal-1">
                                        <div class="md-content  modal-content">
                                            <h3>Productivity</h3>
                                            <div class="n-modal-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped ">
                                                        <thead>
                                                            <tr>
                                                                <th></th>
                                                                <th>5</th>
                                                                <th>4</th>
                                                                <th>3</th>
                                                                <th>2</th>
                                                                <th>1</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Works accurately according to set objective</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" id="inlineRadio1" class="productivity" name="Works accurately according to set objective" value="5">
                                                                        <label for="inlineRadio1"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" id="inlineRadio2" class="productivity" name="Works accurately according to set objective" value="4">
                                                                        <label for="inlineRadio2"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" id="inlineRadio3" class="productivity" name="Works accurately according to set objective" value="3">
                                                                        <label for="inlineRadio3"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" id="inlineRadio4" class="productivity" name="Works accurately according to set objective" value="3">
                                                                        <label for="inlineRadio4"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" id="inlineRadio5" class="productivity" name="Works accurately according to set objective" value="01">
                                                                        <label for="inlineRadio5"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Meets deadlines</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" id="inlineRadio6" class="productivity" name="Meets deadlines" value="5">
                                                                        <label for="inlineRadio6"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" id="inlineRadio7" class="productivity" name="Meets deadlines" value="4">
                                                                        <label for="inlineRadio7"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" id="inlineRadio8" class="productivity" name="Meets deadlines" value="3">
                                                                        <label for="inlineRadio8"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" id="inlineRadio9" class="productivity" name="Meets deadlines" value="2">
                                                                        <label for="inlineRadio9"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" id="inlineRadio10" class="productivity" name="Meets deadlines" value="01">
                                                                        <label for="inlineRadio10"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Handles the assigned tasks rapidly </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="productivity" name="Handles the assigned tasks rapidly" id="inlineRadio11" value="5">
                                                                        <label for="inlineRadio11"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="productivity" name="Handles the assigned tasks rapidly" id="inlineRadio12" value="4">
                                                                        <label for="inlineRadio12"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="productivity" name="Handles the assigned tasks rapidly" id="inlineRadio13" value="3">
                                                                        <label for="inlineRadio13"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="productivity" name="Handles the assigned tasks rapidly" id="inlineRadio14" value="2">
                                                                        <label for="inlineRadio14"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="productivity" name="Handles the assigned tasks rapidly" id="inlineRadio15" value="01">
                                                                        <label for="inlineRadio15"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Looks for efficiencies</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="productivity" name="Looks for efficiencies" id="inlineRadio16" value="5">
                                                                        <label for="inlineRadio16"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="productivity" name="Looks for efficiencies" id="inlineRadio17" value="4">
                                                                        <label for="inlineRadio17"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="productivity" name="Looks for efficiencies" id="inlineRadio18" value="3">
                                                                        <label for="inlineRadio18"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="productivity" name="Looks for efficiencies" id="inlineRadio19" value="2">
                                                                        <label for="inlineRadio19"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="productivity" name="Looks for efficiencies" id="inlineRadio20" value="01">
                                                                        <label for="inlineRadio20"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Goes extra mile to complete the tasks </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="productivity" name="Goes extra mile to complete the tasks" id="inlineRadio21" value="5">
                                                                        <label for="inlineRadio21"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="productivity" name="Goes extra mile to complete the tasks" id="inlineRadio22" value="4">
                                                                        <label for="inlineRadio22"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="productivity" name="Goes extra mile to complete the tasks" id="inlineRadio23" value="3">
                                                                        <label for="inlineRadio23"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="productivity" name="Goes extra mile to complete the tasks" id="inlineRadio24" value="2">
                                                                        <label for="inlineRadio24"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="productivity" name="Goes extra mile to complete the tasks" id="inlineRadio25" value="01">
                                                                        <label for="inlineRadio25"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Shows good judgments/decisions </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="productivity" name="Shows good judgments/decisions" id="inlineRadio394" value="5">
                                                                        <label for="inlineRadio394"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="productivity" name="Shows good judgments/decisions" id="inlineRadio395" value="4">
                                                                        <label for="inlineRadio395"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="productivity" name="Shows good judgments/decisions" id="inlineRadio396" value="3">
                                                                        <label for="inlineRadio396"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="productivity" name="Shows good judgments/decisions" id="inlineRadio397" value="3">
                                                                        <label for="inlineRadio397"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="productivity" name="Shows good judgments/decisions" id="inlineRadio398" value="01">
                                                                        <label for="inlineRadio398"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                            <div class="panel-footer">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <p><strong>5</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p><strong>4</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p><strong>3</strong> = Goes above & beyond </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <p><strong>2</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p><strong>1</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <button class="btn btn-success md-close pull-right">Close me!</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 2 -->
                                    <div class="md-modal md-effect-1" id="modal-2">
                                        <div class="md-content">
                                            <h3>Communication</h3>
                                            <div class="n-modal-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped ">
                                                        <thead>
                                                            <tr>
                                                                <th></th>
                                                                <th>5</th>
                                                                <th>4</th>
                                                                <th>3</th>
                                                                <th>2</th>
                                                                <th>1</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Understands received information</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="communication" name="Understands received information" id="inlineRadio26" value="5">
                                                                        <label for="inlineRadio26"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="communication" name="Understands received information" id="inlineRadio27" value="4">
                                                                        <label for="inlineRadio27"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="communication" name="Understands received information" id="inlineRadio28" value="3">
                                                                        <label for="inlineRadio28"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="communication" name="Understands received information" id="inlineRadio29" value="2">
                                                                        <label for="inlineRadio29"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="communication" name="Understands received information" id="inlineRadio399" value="01">
                                                                        <label for="inlineRadio399"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Verbal communications</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="communication" name="Verbal communications" id="inlineRadio30" value="5">
                                                                        <label for="inlineRadio30"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="communication" name="Verbal communications" id="inlineRadio31" value="4">
                                                                        <label for="inlineRadio31"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="communication" name="Verbal communications" id="inlineRadio32" value="3">
                                                                        <label for="inlineRadio32"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="communication" name="Verbal communications" id="inlineRadio33" value="2">
                                                                        <label for="inlineRadio33"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="communication" name="Verbal communications" id="inlineRadio34" value="01">
                                                                        <label for="inlineRadio34"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Written communications such as report writing, documents, emails & analysis etc.</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="communication" name="Written communications such as report writing, documents, emails & analysis etc" id="inlineRadio35" value="5">
                                                                        <label for="inlineRadio35"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="communication" name="Written communications such as report writing, documents, emails & analysis etc" id="inlineRadio36" value="4">
                                                                        <label for="inlineRadio36"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="communication" name="Written communications such as report writing, documents, emails & analysis etc" id="inlineRadio37" value="3">
                                                                        <label for="inlineRadio37"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="communication" name="Written communications such as report writing, documents, emails & analysis etc" id="inlineRadio38" value="2">
                                                                        <label for="inlineRadio38"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="communication" name="Written communications such as report writing, documents, emails & analysis etc" id="inlineRadio39" value="01">
                                                                        <label for="inlineRadio39"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Communicates effectively with colleagues</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="communication" name="Communicates effectively with colleagues" id="inlineRadio40" value="5">
                                                                        <label for="inlineRadio40"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="communication" name="Communicates effectively with colleagues" id="inlineRadio41" value="4">
                                                                        <label for="inlineRadio41"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="communication" name="Communicates effectively with colleagues" id="inlineRadio42" value="3">
                                                                        <label for="inlineRadio42"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="communication" name="Communicates effectively with colleagues" id="inlineRadio43" value="2">
                                                                        <label for="inlineRadio43"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="communication" name="Communicates effectively with colleagues" id="inlineRadio44" value="01">
                                                                        <label for="inlineRadio44"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Communicates effectively with managers</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="communication" name="Communicates effectively with managers" id="inlineRadio45" value="5">
                                                                        <label for="inlineRadio45"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="communication" name="Communicates effectively with managers" id="inlineRadio46" value="4">
                                                                        <label for="inlineRadio46"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="communication" name="Communicates effectively with managers" id="inlineRadio47" value="3">
                                                                        <label for="inlineRadio47"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="communication" name="Communicates effectively with managers" id="inlineRadio48" value="2">
                                                                        <label for="inlineRadio48"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="communication" name="Communicates effectively with managers" id="inlineRadio49" value="01">
                                                                        <label for="inlineRadio49"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Demonstrates respect for people and their differences</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="communication" name="Demonstrates respect for people and their differences" id="inlineRadio50" value="5">
                                                                        <label for="inlineRadio50"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="communication" name="Demonstrates respect for people and their differences" id="inlineRadio51" value="4">
                                                                        <label for="inlineRadio51"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="communication" name="Demonstrates respect for people and their differences" id="inlineRadio52" value="3">
                                                                        <label for="inlineRadio52"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="communication" name="Demonstrates respect for people and their differences" id="inlineRadio53" value="2">
                                                                        <label for="inlineRadio53"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="communication" name="Demonstrates respect for people and their differences" id="inlineRadio54" value="01">
                                                                        <label for="inlineRadio54"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Listens to and considers ideas from others, even when different from own.</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="communication" name="Listens to and considers ideas from others, even when different from own" id="inlineRadio55" value="5">
                                                                        <label for="inlineRadio55"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="communication" name="Listens to and considers ideas from others, even when different from own" id="inlineRadio56" value="4">
                                                                        <label for="inlineRadio56"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="communication" name="Listens to and considers ideas from others, even when different from own" id="inlineRadio57" value="3">
                                                                        <label for="inlineRadio57"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="communication" name="Listens to and considers ideas from others, even when different from own" id="inlineRadio58" value="2">
                                                                        <label for="inlineRadio58"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="communication" name="Listens to and considers ideas from others, even when different from own" id="inlineRadio59" value="01">
                                                                        <label for="inlineRadio59"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Help other (Colleagues)</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="communication" name="Help other (Colleagues)" id="inlineRadio60" value="5">
                                                                        <label for="inlineRadio60"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="communication" name="Help other (Colleagues)" id="inlineRadio61" value="4">
                                                                        <label for="inlineRadio61"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="communication" name="Help other (Colleagues)" id="inlineRadio62" value="3">
                                                                        <label for="inlineRadio62"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="communication" name="Help other (Colleagues)" id="inlineRadio63" value="2">
                                                                        <label for="inlineRadio63"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="communication" name="Help other (Colleagues)" id="inlineRadio64" value="01">
                                                                        <label for="inlineRadio64"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                            <div class="panel-footer">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <p><strong>5</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p><strong>4</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p><strong>3</strong> = Goes above & beyond </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <p><strong>2</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p><strong>1</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <button class="btn btn-success md-close pull-right">Close me!</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 3 -->
                                    <div class="md-modal md-effect-1" id="modal-3">
                                        <div class="md-content">
                                            <h3>Quality of Work </h3>
                                            <div class="n-modal-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped ">
                                                        <thead>
                                                            <tr>
                                                                <th></th>
                                                                <th>5</th>
                                                                <th>4</th>
                                                                <th>3</th>
                                                                <th>2</th>
                                                                <th>1</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Shows dedication and commitment towards work</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Quality_of_Work" name="Shows dedication and commitment towards work" id="inlineRadio65" value="5">
                                                                        <label for="inlineRadio65"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Quality_of_Work" name="Shows dedication and commitment towards work" id="inlineRadio66" value="4">
                                                                        <label for="inlineRadio66"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Quality_of_Work" name="Shows dedication and commitment towards work" id="inlineRadio67" value="3">
                                                                        <label for="inlineRadio67"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Quality_of_Work" name="Shows dedication and commitment towards work" id="inlineRadio68" value="2">
                                                                        <label for="inlineRadio68"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Quality_of_Work" name="Shows dedication and commitment towards work" id="inlineRadio69" value="01">
                                                                        <label for="inlineRadio69"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Finds realistic solutions</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Quality_of_Work" name="Finds realistic solutions" id="inlineRadio70" value="5">
                                                                        <label for="inlineRadio70"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Quality_of_Work" name="Finds realistic solutions" id="inlineRadio71" value="4">
                                                                        <label for="inlineRadio71"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Quality_of_Work" name="Finds realistic solutions" id="inlineRadio72" value="3">
                                                                        <label for="inlineRadio72"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Quality_of_Work" name="Finds realistic solutions" id="inlineRadio73" value="2">
                                                                        <label for="inlineRadio73"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Quality_of_Work" name="Finds realistic solutions" id="inlineRadio74" value="01">
                                                                        <label for="inlineRadio74"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Acts decisively; meets problems head-on </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Quality_of_Work" name="Acts decisively; meets problems head-on" id="inlineRadio75" value="5">
                                                                        <label for="inlineRadio75"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Quality_of_Work" name="Acts decisively; meets problems head-on" id="inlineRadio76" value="4">
                                                                        <label for="inlineRadio76"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Quality_of_Work" name="Acts decisively; meets problems head-on" id="inlineRadio77" value="3">
                                                                        <label for="inlineRadio77"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Quality_of_Work" name="Acts decisively; meets problems head-on" id="inlineRadio78" value="2">
                                                                        <label for="inlineRadio78"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Quality_of_Work" name="Acts decisively; meets problems head-on" id="inlineRadio79" value="01">
                                                                        <label for="inlineRadio79"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Possess enough knowledge of his/her</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Quality_of_Work" name="Possess enough knowledge of his/her" id="inlineRadio80" value="5">
                                                                        <label for="inlineRadio80"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Quality_of_Work" name="Possess enough knowledge of his/her" id="inlineRadio81" value="4">
                                                                        <label for="inlineRadio81"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Quality_of_Work" name="Possess enough knowledge of his/her" id="inlineRadio82" value="3">
                                                                        <label for="inlineRadio82"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Quality_of_Work" name="Possess enough knowledge of his/her" id="inlineRadio83" value="2">
                                                                        <label for="inlineRadio83"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Quality_of_Work" name="Possess enough knowledge of his/her" id="inlineRadio84" value="01">
                                                                        <label for="inlineRadio84"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Resolves conflicts</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Quality_of_Work" name="Resolves conflicts" id="inlineRadio85" value="5">
                                                                        <label for="inlineRadio85"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Quality_of_Work" name="Resolves conflicts" id="inlineRadio86" value="4">
                                                                        <label for="inlineRadio86"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Quality_of_Work" name="Resolves conflicts" id="inlineRadio87" value="3">
                                                                        <label for="inlineRadio87"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Quality_of_Work" name="Resolves conflicts" id="inlineRadio88" value="2">
                                                                        <label for="inlineRadio88"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Quality_of_Work" name="Resolves conflicts" id="inlineRadio89" value="01">
                                                                        <label for="inlineRadio89"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                            <div class="panel-footer">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <p><strong>5</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p><strong>4</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p><strong>3</strong> = Goes above & beyond </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <p><strong>2</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p><strong>1</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <button class="btn btn-success md-close pull-right">Close me!</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 4 -->
                                    <div class="md-modal md-effect-1" id="modal-4">
                                        <div class="md-content">
                                            <h3>Personal Development</h3>
                                            <div class="n-modal-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped ">
                                                        <thead>
                                                            <tr>
                                                                <th></th>
                                                                <th>5</th>
                                                                <th>4</th>
                                                                <th>3</th>
                                                                <th>2</th>
                                                                <th>1</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Even-tempered under pressure</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Personal_Development" name="Even-tempered under pressure" id="inlineRadio90" value="5">
                                                                        <label for="inlineRadio90"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Personal_Development" name="Even-tempered under pressure" id="inlineRadio91" value="4">
                                                                        <label for="inlineRadio91"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Personal_Development" name="Even-tempered under pressure" id="inlineRadio92" value="3">
                                                                        <label for="inlineRadio92"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Personal_Development" name="Even-tempered under pressure" id="inlineRadio93" value="2">
                                                                        <label for="inlineRadio93"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Personal_Development" name="Even-tempered under pressure" id="inlineRadio94" value="01">
                                                                        <label for="inlineRadio94"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Sets high standards for self & achieves them </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Personal_Development" name="Sets high standards for self & achieves them" id="inlineRadio95" value="5">
                                                                        <label for="inlineRadio95"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Personal_Development" name="Sets high standards for self & achieves them" id="inlineRadio96" value="4">
                                                                        <label for="inlineRadio96"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Personal_Development" name="Sets high standards for self & achieves them" id="inlineRadio97" value="3">
                                                                        <label for="inlineRadio97"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Personal_Development" name="Sets high standards for self & achieves them" id="inlineRadio98" value="2">
                                                                        <label for="inlineRadio98"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Personal_Development" name="Sets high standards for self & achieves them" id="inlineRadio99" value="01">
                                                                        <label for="inlineRadio99"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                            <div class="panel-footer">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <p><strong>5</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p><strong>4</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p><strong>3</strong> = Goes above & beyond </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <p><strong>2</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p><strong>1</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <button class="btn btn-success md-close pull-right">Close me!</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 5 -->
                                    <div class="md-modal md-effect-1" id="modal-5">
                                        <div class="md-content">
                                            <h3>Relationships</h3>
                                            <div class="n-modal-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped ">
                                                        <thead>
                                                            <tr>
                                                                <th></th>
                                                                <th>5</th>
                                                                <th>4</th>
                                                                <th>3</th>
                                                                <th>2</th>
                                                                <th>1</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Proactively keeps clients informed with both formal and informal communications.</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Relationships" name="Proactively keeps clients informed with both formal and informal communications" id="inlineRadio100" value="5">
                                                                        <label for="inlineRadio100"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Relationships" name="Proactively keeps clients informed with both formal and informal communications" id="inlineRadio102" value="4">
                                                                        <label for="inlineRadio102"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Relationships" name="Proactively keeps clients informed with both formal and informal communications" id="inlineRadio103" value="3">
                                                                        <label for="inlineRadio103"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Relationships" name="Proactively keeps clients informed with both formal and informal communications" id="inlineRadio104" value="2">
                                                                        <label for="inlineRadio104"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Relationships" name="Proactively keeps clients informed with both formal and informal communications" id="inlineRadio105" value="01">
                                                                        <label for="inlineRadio105"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Sets aside personal biases and wants</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Relationships" name="Sets aside personal biases and wants" id="inlineRadio106" value="5">
                                                                        <label for="inlineRadio106"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Relationships" name="Sets aside personal biases and wants" id="inlineRadio107" value="4">
                                                                        <label for="inlineRadio107"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Relationships" name="Sets aside personal biases and wants" id="inlineRadio108" value="3">
                                                                        <label for="inlineRadio108"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Relationships" name="Sets aside personal biases and wants" id="inlineRadio109" value="2">
                                                                        <label for="inlineRadio109"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Relationships" name="Sets aside personal biases and wants" id="inlineRadio110" value="01">
                                                                        <label for="inlineRadio110"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Gives good, practical advice</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Relationships" name="Gives good, practical advice" id="inlineRadio116" value="5">
                                                                        <label for="inlineRadio116"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Relationships" name="Gives good, practical advice" id="inlineRadio117" value="4">
                                                                        <label for="inlineRadio117"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Relationships" name="Gives good, practical advice" id="inlineRadio118" value="3">
                                                                        <label for="inlineRadio118"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Relationships" name="Gives good, practical advice" id="inlineRadio119" value="2">
                                                                        <label for="inlineRadio119"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Relationships" name="Gives good, practical advice" id="inlineRadio120" value="01">
                                                                        <label for="inlineRadio120"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Fosters loyalty in employees</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Relationships" name="Fosters loyalty in employees" id="inlineRadio121" value="5">
                                                                        <label for="inlineRadio121"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Relationships" name="Fosters loyalty in employees" id="inlineRadio122" value="4">
                                                                        <label for="inlineRadio122"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Relationships" name="Fosters loyalty in employees" id="inlineRadio123" value="3">
                                                                        <label for="inlineRadio123"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Relationships" name="Fosters loyalty in employees" id="inlineRadio124" value="2">
                                                                        <label for="inlineRadio124"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Relationships" name="Fosters loyalty in employees" id="inlineRadio125" value="01">
                                                                        <label for="inlineRadio125"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                            <div class="panel-footer">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <p><strong>5</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p><strong>4</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p><strong>3</strong> = Goes above & beyond </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <p><strong>2</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p><strong>1</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <button class="btn btn-success md-close pull-right">Close me!</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 6 -->
                                    <div class="md-modal md-effect-1" id="modal-6">
                                        <div class="md-content">
                                            <h3>Organizing and Planning</h3>
                                            <div class="n-modal-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped ">
                                                        <thead>
                                                            <tr>
                                                                <th></th>
                                                                <th>5</th>
                                                                <th>4</th>
                                                                <th>3</th>
                                                                <th>2</th>
                                                                <th>1</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Prioritizes tasks</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Organizing_and_Planning" name="Prioritizes tasks" id="inlineRadio126" value="5">
                                                                        <label for="inlineRadio126"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Organizing_and_Planning" name="Prioritizes tasks" id="inlineRadio127" value="4">
                                                                        <label for="inlineRadio127"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Organizing_and_Planning" name="Prioritizes tasks" id="inlineRadio128" value="3">
                                                                        <label for="inlineRadio128"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Organizing_and_Planning" name="Prioritizes tasks" id="inlineRadio129" value="2">
                                                                        <label for="inlineRadio129"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Organizing_and_Planning" name="Prioritizes tasks" id="inlineRadio130" value="01">
                                                                        <label for="inlineRadio130"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Responds quickly and well to problems</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Organizing_and_Planning" name="Responds quickly and well to problems" id="inlineRadio131" value="5">
                                                                        <label for="inlineRadio131"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Organizing_and_Planning" name="Responds quickly and well to problems" id="inlineRadio132" value="4">
                                                                        <label for="inlineRadio132"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Organizing_and_Planning" name="Responds quickly and well to problems" id="inlineRadio133" value="3">
                                                                        <label for="inlineRadio133"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Organizing_and_Planning" name="Responds quickly and well to problems" id="inlineRadio134" value="2">
                                                                        <label for="inlineRadio134"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Organizing_and_Planning" name="Responds quickly and well to problems" id="inlineRadio135" value="01">
                                                                        <label for="inlineRadio135"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Uses time effectively and stays focused to ensure work is completed </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Organizing_and_Planning" name="Uses time effectively and stays focused to ensure work is completed" id="inlineRadio136" value="5">
                                                                        <label for="inlineRadio136"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Organizing_and_Planning" name="Uses time effectively and stays focused to ensure work is completed" id="inlineRadio137" value="4">
                                                                        <label for="inlineRadio137"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Organizing_and_Planning" name="Uses time effectively and stays focused to ensure work is completed" id="inlineRadio138" value="3">
                                                                        <label for="inlineRadio138"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Organizing_and_Planning" name="Uses time effectively and stays focused to ensure work is completed" id="inlineRadio139" value="2">
                                                                        <label for="inlineRadio139"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Organizing_and_Planning" name="Uses time effectively and stays focused to ensure work is completed" id="inlineRadio140" value="01">
                                                                        <label for="inlineRadio140"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Meets commitment and deadlines consistently</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Organizing_and_Planning" name="Meets commitment and deadlines consistently" id="inlineRadio141" value="5">
                                                                        <label for="inlineRadio141"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Organizing_and_Planning" name="Meets commitment and deadlines consistently" id="inlineRadio142" value="4">
                                                                        <label for="inlineRadio142"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Organizing_and_Planning" name="Meets commitment and deadlines consistently" id="inlineRadio143" value="3">
                                                                        <label for="inlineRadio143"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Organizing_and_Planning" name="Meets commitment and deadlines consistently" id="inlineRadio144" value="2">
                                                                        <label for="inlineRadio144"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Organizing_and_Planning" name="Meets commitment and deadlines consistently" id="inlineRadio145" value="01">
                                                                        <label for="inlineRadio145"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                            <div class="panel-footer">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <p><strong>5</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p><strong>4</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p><strong>3</strong> = Goes above & beyond </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <p><strong>2</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p><strong>1</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <button class="btn btn-success md-close pull-right">Close me!</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 7 -->
                                    <div class="md-modal md-effect-1" id="modal-7">
                                        <div class="md-content">
                                            <h3>Punctuality</h3>
                                            <div class="n-modal-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped ">
                                                        <thead>
                                                            <tr>
                                                                <th></th>
                                                                <th>5</th>
                                                                <th>4</th>
                                                                <th>3</th>
                                                                <th>2</th>
                                                                <th>1</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Consistent time in as per the expectations</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="punctuality" name="Consistent time in as per the expectations" id="inlineRadio146" value="5">
                                                                        <label for="inlineRadio146"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="punctuality" name="Consistent time in as per the expectations" id="inlineRadio147" value="4">
                                                                        <label for="inlineRadio147"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="punctuality" name="Consistent time in as per the expectations" id="inlineRadio148" value="3">
                                                                        <label for="inlineRadio148"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="punctuality" name="Consistent time in as per the expectations" id="inlineRadio149" value="2">
                                                                        <label for="inlineRadio149"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="punctuality" name="Consistent time in as per the expectations" id="inlineRadio150" value="01">
                                                                        <label for="inlineRadio150"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Follows prescribed work break/meal periods</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="punctuality" name="Follows prescribed work break meal periods" id="inlineRadio151" value="5">
                                                                        <label for="inlineRadio151"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="punctuality" name="Follows prescribed work break meal periods" id="inlineRadio152" value="4">
                                                                        <label for="inlineRadio152"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="punctuality" name="Follows prescribed work break meal periods" id="inlineRadio400" value="3">
                                                                        <label for="inlineRadio400"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="punctuality" name="Follows prescribed work break meal periods" id="inlineRadio153" value="2">
                                                                        <label for="inlineRadio153"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="punctuality" name="Follows prescribed work break meal periods" id="inlineRadio154" value="01">
                                                                        <label for="inlineRadio154"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Takes proper approval for leaves </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="punctuality" name="Takes proper approval for leaves" id="inlineRadio155" value="5">
                                                                        <label for="inlineRadio155"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="punctuality" name="Takes proper approval for leaves" id="inlineRadio156" value="4">
                                                                        <label for="inlineRadio156"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="punctuality" name="Takes proper approval for leaves" id="inlineRadio157" value="3">
                                                                        <label for="inlineRadio157"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="punctuality" name="Takes proper approval for leaves" id="inlineRadio158" value="2">
                                                                        <label for="inlineRadio158"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="punctuality" name="Takes proper approval for leaves" id="inlineRadio159" value="01">
                                                                        <label for="inlineRadio159"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Overall attendance record</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="punctuality" name="Overall attendance record" id="inlineRadio160" value="5">
                                                                        <label for="inlineRadio160"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="punctuality" name="Overall attendance record" id="inlineRadio161" value="4">
                                                                        <label for="inlineRadio161"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="punctuality" name="Overall attendance record" id="inlineRadio162" value="3">
                                                                        <label for="inlineRadio162"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="punctuality" name="Overall attendance record" id="inlineRadio163" value="2">
                                                                        <label for="inlineRadio163"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="punctuality" name="Overall attendance record" id="inlineRadio164" value="01">
                                                                        <label for="inlineRadio164"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                            <div class="panel-footer">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <p><strong>5</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p><strong>4</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p><strong>3</strong> = Goes above & beyond </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <p><strong>2</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p><strong>1</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <button class="btn btn-success md-close pull-right">Close me!</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 8 -->
                                    <div class="md-modal md-effect-1" id="modal-8">
                                        <div class="md-content">
                                            <h3>General Proficiency</h3>
                                            <div class="n-modal-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped ">
                                                        <thead>
                                                            <tr>
                                                                <th></th>
                                                                <th>5</th>
                                                                <th>4</th>
                                                                <th>3</th>
                                                                <th>2</th>
                                                                <th>1</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Adherence to company policies and process</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="General_Proficiency" name="Adherence to company policies and process" id="inlineRadio165" value="5">
                                                                        <label for="inlineRadio165"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="General_Proficiency" name="Adherence to company policies and process" id="inlineRadio166" value="4">
                                                                        <label for="inlineRadio166"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="General_Proficiency" name="Adherence to company policies and process" id="inlineRadio167" value="3">
                                                                        <label for="inlineRadio167"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="General_Proficiency" name="Adherence to company policies and process" id="inlineRadio168" value="2">
                                                                        <label for="inlineRadio168"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="General_Proficiency" name="Adherence to company policies and process" id="inlineRadio169" value="01">
                                                                        <label for="inlineRadio169"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Ability to handle conflicts</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="General_Proficiency" name="Ability to handle conflicts" id="inlineRadio170" value="5">
                                                                        <label for="inlineRadio170"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="General_Proficiency" name="Ability to handle conflicts" id="inlineRadio171" value="4">
                                                                        <label for="inlineRadio171"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="General_Proficiency" name="Ability to handle conflicts" id="inlineRadio172" value="3">
                                                                        <label for="inlineRadio172"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="General_Proficiency" name="Ability to handle conflicts" id="inlineRadio173" value="2">
                                                                        <label for="inlineRadio173"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="General_Proficiency" name="Ability to handle conflicts" id="inlineRadio174" value="01">
                                                                        <label for="inlineRadio174"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Copes effectively and develops effective approaches to deal with pressure or stress </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="General_Proficiency" name="Copes effectively and develops effective approaches to deal with pressure or stress" id="inlineRadio175" value="5">
                                                                        <label for="inlineRadio175"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="General_Proficiency" name="Copes effectively and develops effective approaches to deal with pressure or stress" id="inlineRadio176" value="4">
                                                                        <label for="inlineRadio176"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="General_Proficiency" name="Copes effectively and develops effective approaches to deal with pressure or stress" id="inlineRadio177" value="3">
                                                                        <label for="inlineRadio177"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="General_Proficiency" name="Copes effectively and develops effective approaches to deal with pressure or stress" id="inlineRadio178" value="2">
                                                                        <label for="inlineRadio178"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="General_Proficiency" name="Copes effectively and develops effective approaches to deal with pressure or stress" id="inlineRadio179" value="01">
                                                                        <label for="inlineRadio179"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Presents a positive disposition and maintain constructive interpersonal relationships when under stress</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="General_Proficiency" name="Presents a positive disposition and maintain constructive interpersonal relationships when under stress" id="inlineRadio180" value="5">
                                                                        <label for="inlineRadio180"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="General_Proficiency" name="Presents a positive disposition and maintain constructive interpersonal relationships when under stress" id="inlineRadio181" value="4">
                                                                        <label for="inlineRadio181"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="General_Proficiency" name="Presents a positive disposition and maintain constructive interpersonal relationships when under stress" id="inlineRadio182" value="3">
                                                                        <label for="inlineRadio182"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="General_Proficiency" name="Presents a positive disposition and maintain constructive interpersonal relationships when under stress" id="inlineRadio183" value="2">
                                                                        <label for="inlineRadio183"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="General_Proficiency" name="Presents a positive disposition and maintain constructive interpersonal relationships when under stress" id="inlineRadio184" value="01">
                                                                        <label for="inlineRadio184"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Monitors own performance</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="General_Proficiency" name="Monitors own performance" id="inlineRadio185" value="5">
                                                                        <label for="inlineRadio185"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="General_Proficiency" name="Monitors own performance" id="inlineRadio186" value="4">
                                                                        <label for="inlineRadio186"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="General_Proficiency" name="Monitors own performance" id="inlineRadio187" value="3">
                                                                        <label for="inlineRadio187"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="General_Proficiency" name="Monitors own performance" id="inlineRadio188" value="2">
                                                                        <label for="inlineRadio188"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="General_Proficiency" name="Monitors own performance" id="inlineRadio189" value="01">
                                                                        <label for="inlineRadio189"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Demonstrates expertise in skill and </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="General_Proficiency" name="Demonstrates expertise in skill and" id="inlineRadio190" value="5">
                                                                        <label for="inlineRadio190"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="General_Proficiency" name="Demonstrates expertise in skill and" id="inlineRadio191" value="4">
                                                                        <label for="inlineRadio191"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="General_Proficiency" name="Demonstrates expertise in skill and" id="inlineRadio192" value="3">
                                                                        <label for="inlineRadio192"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="General_Proficiency" name="Demonstrates expertise in skill and" id="inlineRadio193" value="2">
                                                                        <label for="inlineRadio193"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="General_Proficiency" name="Demonstrates expertise in skill and" id="inlineRadio194" value="01">
                                                                        <label for="inlineRadio194"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">knowledge within areas relevant to one’s own function or work group. </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="General_Proficiency" name="knowledge within areas relevant to one’s own function or work group" id="inlineRadio195" value="5">
                                                                        <label for="inlineRadio195"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="General_Proficiency" name="knowledge within areas relevant to one’s own function or work group" id="inlineRadio196" value="4">
                                                                        <label for="inlineRadio196"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="General_Proficiency" name="knowledge within areas relevant to one’s own function or work group" id="inlineRadio197" value="3">
                                                                        <label for="inlineRadio197"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="General_Proficiency" name="knowledge within areas relevant to one’s own function or work group" id="inlineRadio198" value="2">
                                                                        <label for="inlineRadio198"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="General_Proficiency" name="knowledge within areas relevant to one’s own function or work group" id="inlineRadio199" value="01">
                                                                        <label for="inlineRadio199"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Develops and contributes to best practices in discipline or specialty area for the work group. </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="General_Proficiency" name="Develops and contributes to best practices in discipline or specialty area for the work group" id="inlineRadio200" value="5">
                                                                        <label for="inlineRadio200"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="General_Proficiency" name="Develops and contributes to best practices in discipline or specialty area for the work group" id="inlineRadio201" value="4">
                                                                        <label for="inlineRadio201"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="General_Proficiency" name="Develops and contributes to best practices in discipline or specialty area for the work group" id="inlineRadio202" value="3">
                                                                        <label for="inlineRadio202"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="General_Proficiency" name="Develops and contributes to best practices in discipline or specialty area for the work group" id="inlineRadio203" value="2">
                                                                        <label for="inlineRadio203"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="General_Proficiency" name="Develops and contributes to best practices in discipline or specialty area for the work group" id="inlineRadio204" value="01">
                                                                        <label for="inlineRadio204"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Serves as a resource for others regarding major developments in discipline or specialty area, and facilitates sharing of methods and knowledge. </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="General_Proficiency" name="Serves as a resource for others regarding major developments in discipline or specialty area, and facilitates sharing of methods and knowledge" id="inlineRadio205" value="5">
                                                                        <label for="inlineRadio205"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="General_Proficiency" name="Serves as a resource for others regarding major developments in discipline or specialty area, and facilitates sharing of methods and knowledge" id="inlineRadio206" value="4">
                                                                        <label for="inlineRadio206"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="General_Proficiency" name="Serves as a resource for others regarding major developments in discipline or specialty area, and facilitates sharing of methods and knowledge" id="inlineRadio207" value="3">
                                                                        <label for="inlineRadio207"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="General_Proficiency" name="Serves as a resource for others regarding major developments in discipline or specialty area, and facilitates sharing of methods and knowledge" id="inlineRadio208" value="2">
                                                                        <label for="inlineRadio208"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="General_Proficiency" name="Serves as a resource for others regarding major developments in discipline or specialty area, and facilitates sharing of methods and knowledge" id="inlineRadio209" value="01">
                                                                        <label for="inlineRadio209"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                            <div class="panel-footer">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <p><strong>5</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p><strong>4</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p><strong>3</strong> = Goes above & beyond </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <p><strong>2</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p><strong>1</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <button class="btn btn-success md-close pull-right">Close me!</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 9 -->
                                    <div class="md-modal md-effect-1" id="modal-9">
                                        <div class="md-content">
                                            <h3>Team Work</h3>
                                            <div class="n-modal-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped ">
                                                        <thead>
                                                            <tr>
                                                                <th></th>
                                                                <th>5</th>
                                                                <th>4</th>
                                                                <th>3</th>
                                                                <th>2</th>
                                                                <th>1</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Exhibits openness to other’s view</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Team_Work" name="Exhibits openness to other’s view" id="inlineRadio210" value="5">
                                                                        <label for="inlineRadio210"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Team_Work" name="Exhibits openness to other’s view" id="inlineRadio211" value="4">
                                                                        <label for="inlineRadio211"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Team_Work" name="Exhibits openness to other’s view" id="inlineRadio212" value="3">
                                                                        <label for="inlineRadio212"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Team_Work" name="Exhibits openness to other’s view" id="inlineRadio213" value="2">
                                                                        <label for="inlineRadio213"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Team_Work" name="Exhibits openness to other’s view" id="inlineRadio214" value="01">
                                                                        <label for="inlineRadio214"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Works cooperatively for maintaining effective relationship</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Team_Work" name="Works cooperatively for maintaining effective relationship" id="inlineRadio215" value="5">
                                                                        <label for="inlineRadio215"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Team_Work" name="Works cooperatively for maintaining effective relationship" id="inlineRadio215" value="4">
                                                                        <label for="inlineRadio215"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Team_Work" name="Works cooperatively for maintaining effective relationship" id="inlineRadio216" value="3">
                                                                        <label for="inlineRadio216"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Team_Work" name="Works cooperatively for maintaining effective relationship" id="inlineRadio217" value="2">
                                                                        <label for="inlineRadio217"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Team_Work" name="Works cooperatively for maintaining effective relationship" id="inlineRadio218" value="01">
                                                                        <label for="inlineRadio218"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Consistently, in all cases, treats everyone, with dignity, respect and fairness; is very easy to approach and helpful. </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Team_Work" name="Consistently, in all cases, treats everyone, with dignity, respect and fairness; is very easy to approach and helpful" id="inlineRadio219" value="5">
                                                                        <label for="inlineRadio219"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Team_Work" name="Consistently, in all cases, treats everyone, with dignity, respect and fairness; is very easy to approach and helpful" id="inlineRadio220" value="4">
                                                                        <label for="inlineRadio220"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Team_Work" name="Consistently, in all cases, treats everyone, with dignity, respect and fairness; is very easy to approach and helpful" id="inlineRadio221" value="3">
                                                                        <label for="inlineRadio221"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Team_Work" name="Consistently, in all cases, treats everyone, with dignity, respect and fairness; is very easy to approach and helpful" id="inlineRadio222" value="2">
                                                                        <label for="inlineRadio222"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Team_Work" name="Consistently, in all cases, treats everyone, with dignity, respect and fairness; is very easy to approach and helpful" id="inlineRadio223" value="01">
                                                                        <label for="inlineRadio223"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Encourages teamwork among direct reports; facilitates resolution of team conflicts; promotes respect among all team members.</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Team_Work" name="Encourages teamwork among direct reports; facilitates resolution of team conflicts; promotes respect among all team members" id="inlineRadio224" value="5">
                                                                        <label for="inlineRadio224"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Team_Work" name="Encourages teamwork among direct reports; facilitates resolution of team conflicts; promotes respect among all team members" id="inlineRadio225" value="4">
                                                                        <label for="inlineRadio225"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Team_Work" name="Encourages teamwork among direct reports; facilitates resolution of team conflicts; promotes respect among all team members" id="inlineRadio226" value="3">
                                                                        <label for="inlineRadio226"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Team_Work" name="Encourages teamwork among direct reports; facilitates resolution of team conflicts; promotes respect among all team members" id="inlineRadio227" value="2">
                                                                        <label for="inlineRadio227"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Team_Work" name="Encourages teamwork among direct reports; facilitates resolution of team conflicts; promotes respect among all team members" id="inlineRadio228" value="01">
                                                                        <label for="inlineRadio228"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Listens to and carefully considers ideas from others, even when different from own; ensures all sides are heard before reaching a conclusion.</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Team_Work" name="Listens to and carefully considers ideas from others, even when different from own; ensures all sides are heard before reaching a conclusion" id="inlineRadio229" value="5">
                                                                        <label for="inlineRadio229"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Team_Work" name="Listens to and carefully considers ideas from others, even when different from own; ensures all sides are heard before reaching a conclusion" id="inlineRadio230" value="4">
                                                                        <label for="inlineRadio230"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Team_Work" name="Listens to and carefully considers ideas from others, even when different from own; ensures all sides are heard before reaching a conclusion" id="inlineRadio231" value="3">
                                                                        <label for="inlineRadio231"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Team_Work" name="Listens to and carefully considers ideas from others, even when different from own; ensures all sides are heard before reaching a conclusion" id="inlineRadio232" value="2">
                                                                        <label for="inlineRadio232"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Team_Work" name="Listens to and carefully considers ideas from others, even when different from own; ensures all sides are heard before reaching a conclusion" id="inlineRadio233" value="01">
                                                                        <label for="inlineRadio233"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Make his/her team follow company’s policies & procedures</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Team_Work" name="Make his/her team follow company’s policies & procedures" id="inlineRadio234" value="5">
                                                                        <label for="inlineRadio234"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Team_Work" name="Make his/her team follow company’s policies & procedures" id="inlineRadio235" value="4">
                                                                        <label for="inlineRadio235"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Team_Work" name="Make his/her team follow company’s policies & procedures" id="inlineRadio236" value="3">
                                                                        <label for="inlineRadio236"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Team_Work" name="Make his/her team follow company’s policies & procedures" id="inlineRadio237" value="2">
                                                                        <label for="inlineRadio237"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Team_Work" name="Make his/her team follow company’s policies & procedures" id="inlineRadio238" value="01">
                                                                        <label for="inlineRadio238"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                            <div class="panel-footer">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <p><strong>5</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p><strong>4</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p><strong>3</strong> = Goes above & beyond </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <p><strong>2</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p><strong>1</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <button class="btn btn-success md-close pull-right">Close me!</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 10 -->
                                    <div class="md-modal md-effect-1" id="modal-10">
                                        <div class="md-content">
                                            <h3>Initiative & Judgment</h3>
                                            <div class="n-modal-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped ">
                                                        <thead>
                                                            <tr>
                                                                <th></th>
                                                                <th>5</th>
                                                                <th>4</th>
                                                                <th>3</th>
                                                                <th>2</th>
                                                                <th>1</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Takes independent action based on sound judgment</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Initiative_&_Judgment" name="Takes independent action based on sound judgment" id="inlineRadio239" value="5">
                                                                        <label for="inlineRadio239"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Initiative_&_Judgment" name="Takes independent action based on sound judgment" id="inlineRadio240" value="4">
                                                                        <label for="inlineRadio240"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Initiative_&_Judgment" name="Takes independent action based on sound judgment" id="inlineRadio241" value="3">
                                                                        <label for="inlineRadio241"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Initiative_&_Judgment" name="Takes independent action based on sound judgment" id="inlineRadio242" value="2">
                                                                        <label for="inlineRadio242"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Initiative_&_Judgment" name="Takes independent action based on sound judgment" id="inlineRadio243" value="01">
                                                                        <label for="inlineRadio243"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Demonstrates effective and timely decision making skills</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Initiative_&_Judgment" name="Demonstrates effective and timely decision making skills" id="inlineRadio244" value="5">
                                                                        <label for="inlineRadio244"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Initiative_&_Judgment" name="Demonstrates effective and timely decision making skills" id="inlineRadio245" value="4">
                                                                        <label for="inlineRadio245"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Initiative_&_Judgment" name="Demonstrates effective and timely decision making skills" id="inlineRadio246" value="3">
                                                                        <label for="inlineRadio246"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Initiative_&_Judgment" name="Demonstrates effective and timely decision making skills" id="inlineRadio247" value="2">
                                                                        <label for="inlineRadio247"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Initiative_&_Judgment" name="Demonstrates effective and timely decision making skills" id="inlineRadio248" value="01">
                                                                        <label for="inlineRadio248"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Volunteers readily </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Initiative_&_Judgment" name="Volunteers readily" id="inlineRadio249" value="5">
                                                                        <label for="inlineRadio249"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Initiative_&_Judgment" name="Volunteers readily" id="inlineRadio250" value="4">
                                                                        <label for="inlineRadio250"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Initiative_&_Judgment" name="Volunteers readily" id="inlineRadio251" value="3">
                                                                        <label for="inlineRadio251"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Initiative_&_Judgment" name="Volunteers readily" id="inlineRadio252" value="2">
                                                                        <label for="inlineRadio252"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Initiative_&_Judgment" name="Volunteers readily" id="inlineRadio253" value="01">
                                                                        <label for="inlineRadio253"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Actively seeks out ways on own to improve outcomes, processes or measurements </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Initiative_&_Judgment" name="Actively seeks out ways on own to improve outcomes, processes or measurements" id="inlineRadio254" value="5">
                                                                        <label for="inlineRadio254"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Initiative_&_Judgment" name="Actively seeks out ways on own to improve outcomes, processes or measurements" id="inlineRadio255" value="4">
                                                                        <label for="inlineRadio255"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Initiative_&_Judgment" name="Actively seeks out ways on own to improve outcomes, processes or measurements" id="inlineRadio256" value="3">
                                                                        <label for="inlineRadio256"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Initiative_&_Judgment" name="Actively seeks out ways on own to improve outcomes, processes or measurements" id="inlineRadio257" value="2">
                                                                        <label for="inlineRadio257"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Initiative_&_Judgment" name="Actively seeks out ways on own to improve outcomes, processes or measurements" id="inlineRadio258" value="01">
                                                                        <label for="inlineRadio258"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Takes responsibility and provides leadership on projects or initiatives </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Initiative_&_Judgment" name="Takes responsibility and provides leadership on projects or initiatives" id="inlineRadio259" value="5">
                                                                        <label for="inlineRadio259"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Initiative_&_Judgment" name="Takes responsibility and provides leadership on projects or initiatives" id="inlineRadio260" value="4">
                                                                        <label for="inlineRadio260"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Initiative_&_Judgment" name="Takes responsibility and provides leadership on projects or initiatives" id="inlineRadio261" value="3">
                                                                        <label for="inlineRadio261"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Initiative_&_Judgment" name="Takes responsibility and provides leadership on projects or initiatives" id="inlineRadio262" value="2">
                                                                        <label for="inlineRadio262"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Initiative_&_Judgment" name="Takes responsibility and provides leadership on projects or initiatives" id="inlineRadio263" value="01">
                                                                        <label for="inlineRadio263"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Enthusiastically seeks and accepts additional responsibilities, both in the context of the job and outside immediate job responsibilities </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Initiative_&_Judgment" name="Enthusiastically seeks and accepts additional responsibilities, both in the context of the job and outside immediate job responsibilities" id="inlineRadio264" value="5">
                                                                        <label for="inlineRadio264"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Initiative_&_Judgment" name="Enthusiastically seeks and accepts additional responsibilities, both in the context of the job and outside immediate job responsibilities" id="inlineRadio265" value="4">
                                                                        <label for="inlineRadio265"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Initiative_&_Judgment" name="Enthusiastically seeks and accepts additional responsibilities, both in the context of the job and outside immediate job responsibilities" id="inlineRadio266" value="3">
                                                                        <label for="inlineRadio266"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Initiative_&_Judgment" name="Enthusiastically seeks and accepts additional responsibilities, both in the context of the job and outside immediate job responsibilities" id="inlineRadio267" value="2">
                                                                        <label for="inlineRadio267"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Initiative_&_Judgment" name="Enthusiastically seeks and accepts additional responsibilities, both in the context of the job and outside immediate job responsibilities" id="inlineRadio268" value="01">
                                                                        <label for="inlineRadio268"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Encourages staff to identify and address process improvements, participate in projects and on committees when appropriate. </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Initiative_&_Judgment" name="Encourages staff to identify and address process improvements, participate in projects and on committees when appropriate" id="inlineRadio269" value="5">
                                                                        <label for="inlineRadio269"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Initiative_&_Judgment" name="Encourages staff to identify and address process improvements, participate in projects and on committees when appropriate" id="inlineRadio270" value="4">
                                                                        <label for="inlineRadio270"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Initiative_&_Judgment" name="Encourages staff to identify and address process improvements, participate in projects and on committees when appropriate" id="inlineRadio271" value="3">
                                                                        <label for="inlineRadio271"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Initiative_&_Judgment" name="Encourages staff to identify and address process improvements, participate in projects and on committees when appropriate" id="inlineRadio272" value="2">
                                                                        <label for="inlineRadio272"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Initiative_&_Judgment" name="Encourages staff to identify and address process improvements, participate in projects and on committees when appropriate" id="inlineRadio273" value="01">
                                                                        <label for="inlineRadio273"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                            <div class="panel-footer">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <p><strong>5</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p><strong>4</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p><strong>3</strong> = Goes above & beyond </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <p><strong>2</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p><strong>1</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <button class="btn btn-success md-close pull-right">Close me!</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 11 -->
                                    <div class="md-modal md-effect-1" id="modal-11">
                                        <div class="md-content">
                                            <h3>Adaptability & Dependability</h3>
                                            <div class="n-modal-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped ">
                                                        <thead>
                                                            <tr>
                                                                <th></th>
                                                                <th>5</th>
                                                                <th>4</th>
                                                                <th>3</th>
                                                                <th>2</th>
                                                                <th>1</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Adapts to changes in the work environment</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Adaptability_&_Dependability" name="Adapts to changes in the work environment" id="inlineRadio274" value="5">
                                                                        <label for="inlineRadio274"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Adaptability_&_Dependability" name="Adapts to changes in the work environment" id="inlineRadio275" value="4">
                                                                        <label for="inlineRadio275"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Adaptability_&_Dependability" name="Adapts to changes in the work environment" id="inlineRadio276" value="3">
                                                                        <label for="inlineRadio276"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Adaptability_&_Dependability" name="Adapts to changes in the work environment" id="inlineRadio277" value="2">
                                                                        <label for="inlineRadio277"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Adaptability_&_Dependability" name="Adapts to changes in the work environment" id="inlineRadio278" value="01">
                                                                        <label for="inlineRadio278"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Performs well under pressure</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Adaptability_&_Dependability" name="Performs well under pressure" id="inlineRadio279" value="5">
                                                                        <label for="inlineRadio279"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Adaptability_&_Dependability" name="Performs well under pressure" id="inlineRadio280" value="4">
                                                                        <label for="inlineRadio280"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Adaptability_&_Dependability" name="Performs well under pressure" id="inlineRadio281" value="3">
                                                                        <label for="inlineRadio281"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Adaptability_&_Dependability" name="Performs well under pressure" id="inlineRadio282" value="2">
                                                                        <label for="inlineRadio282"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Adaptability_&_Dependability" name="Performs well under pressure" id="inlineRadio283" value="01">
                                                                        <label for="inlineRadio283"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Manages competing demands & follow instructions as per management direction. </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Adaptability_&_Dependability" name="Manages competing demands & follow instructions as per management direction" id="inlineRadio284" value="5">
                                                                        <label for="inlineRadio284"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Adaptability_&_Dependability" name="Manages competing demands & follow instructions as per management direction" id="inlineRadio285" value="4">
                                                                        <label for="inlineRadio285"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Adaptability_&_Dependability" name="Manages competing demands & follow instructions as per management direction" id="inlineRadio286" value="3">
                                                                        <label for="inlineRadio286"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Adaptability_&_Dependability" name="Manages competing demands & follow instructions as per management direction" id="inlineRadio287" value="2">
                                                                        <label for="inlineRadio287"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Adaptability_&_Dependability" name="Manages competing demands & follow instructions as per management direction" id="inlineRadio288" value="01">
                                                                        <label for="inlineRadio288"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                            <div class="panel-footer">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <p><strong>5</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p><strong>4</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p><strong>3</strong> = Goes above & beyond </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <p><strong>2</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p><strong>1</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <button class="btn btn-success md-close pull-right">Close me!</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 12 -->
                                    <div class="md-modal md-effect-1" id="modal-12">
                                        <div class="md-content">
                                            <h3>Leadership</h3>
                                            <div class="n-modal-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped ">
                                                        <thead>
                                                            <tr>
                                                                <th></th>
                                                                <th>5</th>
                                                                <th>4</th>
                                                                <th>3</th>
                                                                <th>2</th>
                                                                <th>1</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Behaves and expresses oneself in an open and honest manner; is consistent in all cases with what he/she says and does; appropriately handles difficult situations.</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Leadership" name="Behaves and expresses oneself in an open and honest manner; is consistent in all cases with what he/she says and does; appropriately handles difficult situations" id="inlineRadio289" value="5">
                                                                        <label for="inlineRadio289"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Leadership" name="Behaves and expresses oneself in an open and honest manner; is consistent in all cases with what he/she says and does; appropriately handles difficult situations" id="inlineRadio290" value="4">
                                                                        <label for="inlineRadio290"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Leadership" name="Behaves and expresses oneself in an open and honest manner; is consistent in all cases with what he/she says and does; appropriately handles difficult situations" id="inlineRadio291" value="3">
                                                                        <label for="inlineRadio291"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Leadership" name="Behaves and expresses oneself in an open and honest manner; is consistent in all cases with what he/she says and does; appropriately handles difficult situations" id="inlineRadio292" value="2">
                                                                        <label for="inlineRadio292"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Leadership" name="Behaves and expresses oneself in an open and honest manner; is consistent in all cases with what he/she says and does; appropriately handles difficult situations" id="inlineRadio293" value="01">
                                                                        <label for="inlineRadio293"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Consistently, in all cases, shares information that is accurate and complete; handles sensitive information appropriately</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Leadership" name="Consistently, in all cases, shares information that is accurate and complete; handles sensitive information appropriately" id="inlineRadio294" value="5">
                                                                        <label for="inlineRadio294"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Leadership" name="Consistently, in all cases, shares information that is accurate and complete; handles sensitive information appropriately" id="inlineRadio295" value="4">
                                                                        <label for="inlineRadio295"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Leadership" name="Consistently, in all cases, shares information that is accurate and complete; handles sensitive information appropriately" id="inlineRadio296" value="3">
                                                                        <label for="inlineRadio296"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Leadership" name="Consistently, in all cases, shares information that is accurate and complete; handles sensitive information appropriately" id="inlineRadio297" value="2">
                                                                        <label for="inlineRadio297"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Leadership" name="Consistently, in all cases, shares information that is accurate and complete; handles sensitive information appropriately" id="inlineRadio298" value="01">
                                                                        <label for="inlineRadio298"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Follows through on all assignments and commitments, completing them in a timely and reliable manner; consistently, in all cases, makes others aware of task/assignment status. </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Leadership" name="Follows through on all assignments and commitments, completing them in a timely and reliable manner; consistently, in all cases, makes others aware of task/assignment status" id="inlineRadio299" value="5">
                                                                        <label for="inlineRadio299"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Leadership" name="Follows through on all assignments and commitments, completing them in a timely and reliable manner; consistently, in all cases, makes others aware of task/assignment status" id="inlineRadio300" value="4">
                                                                        <label for="inlineRadio300"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Leadership" name="Follows through on all assignments and commitments, completing them in a timely and reliable manner; consistently, in all cases, makes others aware of task/assignment status" id="inlineRadio301" value="3">
                                                                        <label for="inlineRadio301"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Leadership" name="Follows through on all assignments and commitments, completing them in a timely and reliable manner; consistently, in all cases, makes others aware of task/assignment status" id="inlineRadio302" value="2">
                                                                        <label for="inlineRadio302"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Leadership" name="Follows through on all assignments and commitments, completing them in a timely and reliable manner; consistently, in all cases, makes others aware of task/assignment status" id="inlineRadio303" value="01">
                                                                        <label for="inlineRadio303"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Delegates clearly </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Leadership" name="Delegates clearly" id="inlineRadio304" value="5">
                                                                        <label for="inlineRadio304"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Leadership" name="Delegates clearly" id="inlineRadio305" value="4">
                                                                        <label for="inlineRadio305"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Leadership" name="Delegates clearly" id="inlineRadio306" value="3">
                                                                        <label for="inlineRadio306"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Leadership" name="Delegates clearly" id="inlineRadio307" value="2">
                                                                        <label for="inlineRadio307"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Leadership" name="Delegates clearly" id="inlineRadio308" value="01">
                                                                        <label for="inlineRadio308"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Sets challenging goals </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Leadership" name="Sets challenging goals" id="inlineRadio309" value="5">
                                                                        <label for="inlineRadio309"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Leadership" name="Sets challenging goals" id="inlineRadio310" value="4">
                                                                        <label for="inlineRadio310"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Leadership" name="Sets challenging goals" id="inlineRadio311" value="3">
                                                                        <label for="inlineRadio311"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Leadership" name="Sets challenging goals" id="inlineRadio312" value="2">
                                                                        <label for="inlineRadio312"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Leadership" name="Sets challenging goals" id="inlineRadio313" value="01">
                                                                        <label for="inlineRadio313"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Develops new strategies </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Leadership" name="Develops new strategies" id="inlineRadio314" value="5">
                                                                        <label for="inlineRadio314"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Leadership" name="Develops new strategies" id="inlineRadio315" value="4">
                                                                        <label for="inlineRadio315"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Leadership" name="Develops new strategies" id="inlineRadio316" value="3">
                                                                        <label for="inlineRadio316"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Leadership" name="Develops new strategies" id="inlineRadio317" value="2">
                                                                        <label for="inlineRadio317"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Leadership" name="Develops new strategies" id="inlineRadio318" value="01">
                                                                        <label for="inlineRadio318"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Demonstrates commitment to ITGS’s goals, initiatives, policies and procedures through communication and actions. </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Leadership" name="Demonstrates commitment to ITGS’s goals, initiatives, policies and procedures through communication and actions" id="inlineRadio319" value="5">
                                                                        <label for="inlineRadio319"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Leadership" name="Demonstrates commitment to ITGS’s goals, initiatives, policies and procedures through communication and actions" id="inlineRadio320" value="4">
                                                                        <label for="inlineRadio320"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Leadership" name="Demonstrates commitment to ITGS’s goals, initiatives, policies and procedures through communication and actions" id="inlineRadio321" value="3">
                                                                        <label for="inlineRadio321"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Leadership" name="Demonstrates commitment to ITGS’s goals, initiatives, policies and procedures through communication and actions" id="inlineRadio322" value="2">
                                                                        <label for="inlineRadio322"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Leadership" name="Demonstrates commitment to ITGS’s goals, initiatives, policies and procedures through communication and actions" id="inlineRadio323" value="01">
                                                                        <label for="inlineRadio323"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                            <div class="panel-footer">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <p><strong>5</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p><strong>4</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p><strong>3</strong> = Goes above & beyond </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <p><strong>2</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p><strong>1</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <button class="btn btn-success md-close pull-right">Close me!</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 13 -->
                                    <div class="md-modal md-effect-1" id="modal-13">
                                        <div class="md-content">
                                            <h3>Problem Solving</h3>
                                            <div class="n-modal-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped ">
                                                        <thead>
                                                            <tr>
                                                                <th></th>
                                                                <th>5</th>
                                                                <th>4</th>
                                                                <th>3</th>
                                                                <th>2</th>
                                                                <th>1</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Breaks down problems into fundamental parts. Identifies root causes and addresses problems in ways that lead to innovative solutions</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Problem_Solving" name="Breaks down problems into fundamental parts. Identifies root causes and addresses problems in ways that lead to innovative solutions" id="inlineRadio324" value="5">
                                                                        <label for="inlineRadio324"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Problem_Solving" name="Breaks down problems into fundamental parts. Identifies root causes and addresses problems in ways that lead to innovative solutions" id="inlineRadio325" value="4">
                                                                        <label for="inlineRadio325"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Problem_Solving" name="Breaks down problems into fundamental parts. Identifies root causes and addresses problems in ways that lead to innovative solutions" id="inlineRadio326" value="2">
                                                                        <label for="inlineRadio326"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Problem_Solving" name="Breaks down problems into fundamental parts. Identifies root causes and addresses problems in ways that lead to innovative solutions" id="inlineRadio327" value="2">
                                                                        <label for="inlineRadio327"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Problem_Solving" name="Breaks down problems into fundamental parts. Identifies root causes and addresses problems in ways that lead to innovative solutions" id="inlineRadio328" value="01">
                                                                        <label for="inlineRadio328"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Consistently, in all cases, makes informed decisions based on available and hard to find information. Utilizes information that is relevant, current and clear.</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Problem_Solving" name="Consistently, in all cases, makes informed decisions based on available and hard to find information. Utilizes information that is relevant, current and clear" id="inlineRadio329" value="5">
                                                                        <label for="inlineRadio329"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Problem_Solving" name="Consistently, in all cases, makes informed decisions based on available and hard to find information. Utilizes information that is relevant, current and clear" id="inlineRadio340" value="4">
                                                                        <label for="inlineRadio340"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Problem_Solving" name="Consistently, in all cases, makes informed decisions based on available and hard to find information. Utilizes information that is relevant, current and clear" id="inlineRadio341" value="3">
                                                                        <label for="inlineRadio341"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Problem_Solving" name="Consistently, in all cases, makes informed decisions based on available and hard to find information. Utilizes information that is relevant, current and clear" id="inlineRadio342" value="2">
                                                                        <label for="inlineRadio342"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Problem_Solving" name="Consistently, in all cases, makes informed decisions based on available and hard to find information. Utilizes information that is relevant, current and clear" id="inlineRadio343" value="01">
                                                                        <label for="inlineRadio343"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Recognizes typical as well as complex and unusual issues, and actions needed to advance the decision making process. Recommends possible solutions. Follows up to ensure resolution </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Problem_Solving" name="Recognizes typical as well as complex and unusual issues, and actions needed to advance the decision making process. Recommends possible solutions. Follows up to ensure resolution" id="inlineRadio344" value="5">
                                                                        <label for="inlineRadio344"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Problem_Solving" name="Recognizes typical as well as complex and unusual issues, and actions needed to advance the decision making process. Recommends possible solutions. Follows up to ensure resolution" id="inlineRadio345" value="4">
                                                                        <label for="inlineRadio345"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Problem_Solving" name="Recognizes typical as well as complex and unusual issues, and actions needed to advance the decision making process. Recommends possible solutions. Follows up to ensure resolution" id="inlineRadio346" value="3">
                                                                        <label for="inlineRadio346"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Problem_Solving" name="Recognizes typical as well as complex and unusual issues, and actions needed to advance the decision making process. Recommends possible solutions. Follows up to ensure resolution" id="inlineRadio347" value="2">
                                                                        <label for="inlineRadio347"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Problem_Solving" name="Recognizes typical as well as complex and unusual issues, and actions needed to advance the decision making process. Recommends possible solutions. Follows up to ensure resolution" id="inlineRadio348" value="01">
                                                                        <label for="inlineRadio348"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Creates new ideas and processes despite initial ambiguity of the situation; modifies approach to achieve results in changing situations. </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Problem_Solving" name="Creates new ideas and processes despite initial ambiguity of the situation; modifies approach to achieve results in changing situations" id="inlineRadio349" value="5">
                                                                        <label for="inlineRadio349"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Problem_Solving" name="Creates new ideas and processes despite initial ambiguity of the situation; modifies approach to achieve results in changing situations" id="inlineRadio350" value="4">
                                                                        <label for="inlineRadio350"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Problem_Solving" name="Creates new ideas and processes despite initial ambiguity of the situation; modifies approach to achieve results in changing situations" id="inlineRadio351" value="3">
                                                                        <label for="inlineRadio351"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Problem_Solving" name="Creates new ideas and processes despite initial ambiguity of the situation; modifies approach to achieve results in changing situations" id="inlineRadio352" value="2">
                                                                        <label for="inlineRadio352"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Problem_Solving" name="Creates new ideas and processes despite initial ambiguity of the situation; modifies approach to achieve results in changing situations" id="inlineRadio353" value="01">
                                                                        <label for="inlineRadio353"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Assists employees in diagnosing problems and recognizing issues. Takes time to help </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Problem_Solving" name="Assists employees in diagnosing problems and recognizing issues. Takes time to help" id="inlineRadio354" value="5">
                                                                        <label for="inlineRadio354"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Problem_Solving" name="Assists employees in diagnosing problems and recognizing issues. Takes time to help" id="inlineRadio355" value="4">
                                                                        <label for="inlineRadio355"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Problem_Solving" name="Assists employees in diagnosing problems and recognizing issues. Takes time to help" id="inlineRadio356" value="3">
                                                                        <label for="inlineRadio356"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Problem_Solving" name="Assists employees in diagnosing problems and recognizing issues. Takes time to help" id="inlineRadio357" value="2">
                                                                        <label for="inlineRadio357"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Problem_Solving" name="Assists employees in diagnosing problems and recognizing issues. Takes time to help" id="inlineRadio358" value="01">
                                                                        <label for="inlineRadio358"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Employees identify critical connections, consequences and alternatives. Recognizes successful adaptations. </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Problem_Solving" name="Employees identify critical connections, consequences and alternatives. Recognizes successful adaptations" id="inlineRadio359" value="5">
                                                                        <label for="inlineRadio359"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Problem_Solving" name="Employees identify critical connections, consequences and alternatives. Recognizes successful adaptations" id="inlineRadio360" value="4">
                                                                        <label for="inlineRadio360"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Problem_Solving" name="Employees identify critical connections, consequences and alternatives. Recognizes successful adaptations" id="inlineRadio361" value="3">
                                                                        <label for="inlineRadio361"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Problem_Solving" name="Employees identify critical connections, consequences and alternatives. Recognizes successful adaptations" id="inlineRadio362" value="2">
                                                                        <label for="inlineRadio362"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Problem_Solving" name="Employees identify critical connections, consequences and alternatives. Recognizes successful adaptations" id="inlineRadio363" value="01">
                                                                        <label for="inlineRadio363"></label>
                                                                    </div>
                                                                </td>
                                                                
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                            <div class="panel-footer">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <p><strong>5</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p><strong>4</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p><strong>3</strong> = Goes above & beyond </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <p><strong>2</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p><strong>1</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <button class="btn btn-success md-close pull-right">Close me!</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 14 -->
                                    <div class="md-modal md-effect-1" id="modal-14">
                                        <div class="md-content">
                                            <h3>Delivering Results </h3>
                                            <div class="n-modal-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped ">
                                                        <thead>
                                                            <tr>
                                                                <th></th>
                                                                <th>5</th>
                                                                <th>4</th>
                                                                <th>3</th>
                                                                <th>2</th>
                                                                <th>1</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Achieves excellence in all tasks and goals.</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Delivering_Results" name="Achieves excellence in all tasks and goals" id="inlineRadio364" value="5">
                                                                        <label for="inlineRadio364"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Delivering_Results" name="Achieves excellence in all tasks and goals" id="inlineRadio365" value="4">
                                                                        <label for="inlineRadio365"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Delivering_Results" name="Achieves excellence in all tasks and goals" id="inlineRadio366" value="3">
                                                                        <label for="inlineRadio366"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Delivering_Results" name="Achieves excellence in all tasks and goals" id="inlineRadio367" value="2">
                                                                        <label for="inlineRadio367"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Delivering_Results" name="Achieves excellence in all tasks and goals" id="inlineRadio368" value="01">
                                                                        <label for="inlineRadio368"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Maintains focus and perseveres, even in the face of obstacles.</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Delivering_Results" name="Maintains focus and perseveres, even in the face of obstacles" id="inlineRadio369" value="5">
                                                                        <label for="inlineRadio369"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Delivering_Results" name="Maintains focus and perseveres, even in the face of obstacles" id="inlineRadio370" value="4">
                                                                        <label for="inlineRadio370"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Delivering_Results" name="Maintains focus and perseveres, even in the face of obstacles" id="inlineRadio371" value="3">
                                                                        <label for="inlineRadio371"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Delivering_Results" name="Maintains focus and perseveres, even in the face of obstacles" id="inlineRadio372" value="2">
                                                                        <label for="inlineRadio372"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Delivering_Results" name="Maintains focus and perseveres, even in the face of obstacles" id="inlineRadio373" value="01">
                                                                        <label for="inlineRadio373"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Uses time efficiently; adapts plans when changes occur. Prioritizes tasks based on importance. Delegates appropriately</td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Delivering_Results" name="Uses time efficiently; adapts plans when changes occur. Prioritizes tasks based on importance. Delegates appropriately" id="inlineRadio374" value="5">
                                                                        <label for="inlineRadio374"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Delivering_Results" name="Uses time efficiently; adapts plans when changes occur. Prioritizes tasks based on importance. Delegates appropriately" id="inlineRadio375" value="4">
                                                                        <label for="inlineRadio375"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Delivering_Results" name="Uses time efficiently; adapts plans when changes occur. Prioritizes tasks based on importance. Delegates appropriately" id="inlineRadio376" value="3">
                                                                        <label for="inlineRadio376"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Delivering_Results" name="Uses time efficiently; adapts plans when changes occur. Prioritizes tasks based on importance. Delegates appropriately" id="inlineRadio377" value="2">
                                                                        <label for="inlineRadio377"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Delivering_Results" name="Uses time efficiently; adapts plans when changes occur. Prioritizes tasks based on importance. Delegates appropriately" id="inlineRadio378" value="01">
                                                                        <label for="inlineRadio378"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Actively pursues professional development and growth for self and team. </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Delivering_Results" name="Actively pursues professional development and growth for self and team" id="inlineRadio379" value="5">
                                                                        <label for="inlineRadio379"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Delivering_Results" name="Actively pursues professional development and growth for self and team" id="inlineRadio380" value="4">
                                                                        <label for="inlineRadio380"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Delivering_Results" name="Actively pursues professional development and growth for self and team" id="inlineRadio381" value="3">
                                                                        <label for="inlineRadio381"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Delivering_Results" name="Actively pursues professional development and growth for self and team" id="inlineRadio382" value="2">
                                                                        <label for="inlineRadio382"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Delivering_Results" name="Actively pursues professional development and growth for self and team" id="inlineRadio383" value="01">
                                                                        <label for="inlineRadio383"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Is receptive to and implements suggestions for improvement. Solicits feedback. Actively identifies ways to improve. </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Delivering_Results" name="Is receptive to and implements suggestions for improvement. Solicits feedback. Actively identifies ways to improve" id="inlineRadio384" value="5">
                                                                        <label for="inlineRadio384"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Delivering_Results" name="Is receptive to and implements suggestions for improvement. Solicits feedback. Actively identifies ways to improve" id="inlineRadio385" value="4">
                                                                        <label for="inlineRadio385"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Delivering_Results" name="Is receptive to and implements suggestions for improvement. Solicits feedback. Actively identifies ways to improve" id="inlineRadio386" value="3">
                                                                        <label for="inlineRadio386"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Delivering_Results" name="Is receptive to and implements suggestions for improvement. Solicits feedback. Actively identifies ways to improve" id="inlineRadio387" value="2">
                                                                        <label for="inlineRadio387"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Delivering_Results" name="Is receptive to and implements suggestions for improvement. Solicits feedback. Actively identifies ways to improve" id="inlineRadio388" value="01">
                                                                        <label for="inlineRadio388"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="width: 296px; font-size: 13px; font-weight: 500; color: black;">Holds direct reports accountable for producing quality, timely results; helps others maintain focus and overcome obstacles. Provides performance feedback that facilitates development. </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Delivering_Results" name="Holds direct reports accountable for producing quality, timely results; helps others maintain focus and overcome obstacles. Provides performance feedback that facilitates development" id="inlineRadio389" value="5">
                                                                        <label for="inlineRadio389"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Delivering_Results" name="Holds direct reports accountable for producing quality, timely results; helps others maintain focus and overcome obstacles. Provides performance feedback that facilitates development" id="inlineRadio390" value="4">
                                                                        <label for="inlineRadio390"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Delivering_Results" name="Holds direct reports accountable for producing quality, timely results; helps others maintain focus and overcome obstacles. Provides performance feedback that facilitates development" id="inlineRadio391" value="3">
                                                                        <label for="inlineRadio391"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Delivering_Results" name="Holds direct reports accountable for producing quality, timely results; helps others maintain focus and overcome obstacles. Provides performance feedback that facilitates development" id="inlineRadio392" value="2">
                                                                        <label for="inlineRadio392"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" class="Delivering_Results" name="Holds direct reports accountable for producing quality, timely results; helps others maintain focus and overcome obstacles. Provides performance feedback that facilitates development" id="inlineRadio393" value="01">
                                                                        <label for="inlineRadio393"></label>
                                                                    </div>
                                                                </td>
                                                                
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                            <div class="panel-footer">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <p><strong>5</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p><strong>4</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p><strong>3</strong> = Goes above & beyond </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <p><strong>2</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p><strong>1</strong> = Goes above & beyond </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <button class="btn btn-success md-close pull-right">Close me!</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- the overlay element -->
                                    <div class="md-overlay"></div>
                                </div>
                            </div>
                        </div>

                        <div id="content" style="position: relative;">

                            <div class="wrapper">
                                <div id="images" class="images" style="margin-left: -600px;">
                                    <img id="image_about" src="<?php echo base_url() ?>admin_assets/images/3.png" alt="" width="402" height="402" style="display:block; top: 88px;left: 280px;" />
                                    <img id="image_portfolio" src="<?php echo base_url() ?>admin_assets/images/2.png" alt="" width="402" height="402" style="top: 88px; left: 280px;" />
                                    <img id="image_contact" src="<?php echo base_url() ?>admin_assets/images/3.png" alt="" width="402" height="402" style="top: 88px; left: 280px;" />
                                </div>
                                <div class="circleBig">

                                </div>
                            </div>
                            <!-- 1 -->
                            <div id="circle_communication" class="circle" style="opacity: 1; top: 289.613px; left: 624.921px;">
                                <div class="description">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
                                        <div class=" md-trigger mouse" data-modal="modal-1">
                                           
                                            <i class="fa fa-check hight_width" aria-hidden="true"  style="margin-top: -117px;margin-left: 80px;"></i>
                                            <img class="b" src="<?php echo base_url() ?>admin_assets/images/production.png" style="margin-top: -142px;margin-left: 13px;">
                                                         
                                            <div class="small">
                                                
                               
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 2 -->
                            <div id="circle_communication" class="circle" style="opacity: 1; top: 300.613px; left: 659.921px;">
                                <div class="description">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
                                        <div class=" md-trigger mouse" data-modal="modal-2">
                                             <i class="fa fa-check hight_width" aria-hidden="true"  style=" margin-top: -108px;margin-left: 153px;"></i>
                                            <img class="b" src="<?php echo base_url() ?>admin_assets/images/communication.png" style="margin-top: -131px; margin-left: 80px;">
                                            <div class="small"></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 3 -->
                            <div id="circle_communication" class="circle" style="opacity: 1; top: 300.613px; left: 659.921px;">
                                <div class="description">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
                                        <div class=" md-trigger mouse" data-modal="modal-3">
                                             <i class="fa fa-check hight_width" aria-hidden="true"  style="    margin-top: -46px; margin-left: 240px;"></i>
                                            <img class="b" src="<?php echo base_url() ?>admin_assets/images/quality_work.png" style="margin-top: -46px; margin-left: 168px;">
                                            <div class="small"></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 4 -->
                            <div id="circle_communication" class="circle" style="opacity: 1; top: 300.613px; left: 659.921px;">
                                <div class="description">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
                                        <div class=" md-trigger mouse" data-modal="modal-4">
                                             <i class="fa fa-check hight_width" aria-hidden="true"  style=" margin-top: 33px;margin-left: 296px;"></i>
                                            <img class="b" src="<?php echo base_url() ?>admin_assets/images/persnl_dev.png" style="margin-top: 39px;margin-left: 226px;">
                                            <div class="small"></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 5 -->
                            <div id="circle_communication" class="circle" style="opacity: 1; top: 300.613px; left: 659.921px;">
                                <div class="description">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
                                        <div class=" md-trigger mouse" data-modal="modal-5">
                                            <i class="fa fa-check hight_width" aria-hidden="true"  style="    margin-top: 140px;margin-left: 320px;"></i>
                                            <img class="b" src="<?php echo base_url() ?>admin_assets/images/relation_ship.png" style="margin-top: 139px; margin-left: 248px;">
                                            <div class="small"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 6 -->
                            <div id="circle_communication" class="circle" style="opacity: 1; top: 300.613px;left: 659.921px;">
                                <div class="description">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
                                        <div class=" md-trigger mouse" data-modal="modal-6">
                                            <i class="fa fa-check hight_width" aria-hidden="true"  style="    margin-top: 236px;margin-left: 304px;"></i>
                                            <img class="b" src="<?php echo base_url() ?>admin_assets/images/organization_planning.png" style="margin-top: 241px; margin-left: 228px;">
                                            <div class="small"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 7 -->
                            <div id="circle_communication" class="circle" style="opacity: 1; top: 300.613px; left: 659.921px;">
                                <div class="description">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
                                        <div class=" md-trigger mouse" data-modal="modal-7">
                                            <i class="fa fa-check hight_width" aria-hidden="true"  style="        margin-top: 339px;margin-left: 251px;"></i>
                                            <img class="b" src="<?php echo base_url() ?>admin_assets/images/punctuality.png" style="margin-top: 326px; margin-left: 171px;">
                                            <div class="small"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 8 -->
                            <div id="circle_communication" class="circle" style="opacity: 1; top: 300.613px; left: 659.921px;">
                                <div class="description">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
                                        <div class=" md-trigger mouse" data-modal="modal-8">
                                            <i class="fa fa-check hight_width" aria-hidden="true"  style="            margin-top: 362px;margin-left: 129px;"></i>
                                            <img class="b" src="<?php echo base_url() ?>admin_assets/images/proficiency.png" style="margin-top: 382px; margin-left: 85px;">
                                            <div class="small"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 9 -->
                            <div id="circle_communication" class="circle" style="opacity: 1; top: 300.613px; left: 659.921px; z-index: 999">
                                <div class="description">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
                                        <div class=" md-trigger mouse" data-modal="modal-9">
                                             <i class="fa fa-check hight_width" aria-hidden="true"  style=" color:black;margin-top: 379px;margin-left: 26px;"></i>
                                            <img class="b" src="<?php echo base_url() ?>admin_assets/images/team_work.png" style="margin-top: 400px; margin-left: -31px;">
                                            <div class="small"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 10 -->
                            <div id="circle_communication" class="circle" style="opacity: 1; top: 300.613px; left: 659.921px;">
                                <div class="description">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
                                        <div class=" md-trigger mouse" data-modal="modal-10">
                                            <i class="fa fa-check hight_width" aria-hidden="true"  style="    margin-top: 380px;margin-left: -154px;"></i>
                                            <img class="b" src="<?php echo base_url() ?>admin_assets/images/initiative.png" style="margin-top: 379px; margin-left: -228px;">
                                            <div class="small"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 11 -->
                            <div id="circle_communication" class="circle" style="opacity: 1; top: 300.613px; left: 659.921px;">
                                <div class="description">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
                                        <div class=" md-trigger mouse" data-modal="modal-11">
                                            <i class="fa fa-check hight_width" aria-hidden="true"  style="    margin-top: 295px;margin-left: -358px; color: yellow;"></i>
                                            <img class="b" src="<?php echo base_url() ?>admin_assets/images/adaptiblity.png" style="margin-top: 320px; margin-left: -397px;">
                                            <div class="small"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 12 -->
                            <div id="circle_communication" class="circle" style="opacity: 1; top: 300.613px; left: 659.921px;">
                                <div class="description">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
                                        <div class=" md-trigger mouse" data-modal="modal-12">
                                             <i class="fa fa-check hight_width" aria-hidden="true"  style="     margin-top: 214px;margin-left: -455px;"></i>
                                            <img class="b" src="<?php echo base_url() ?>admin_assets/images/leadership.png" style="margin-top: 232px; margin-left: -506px;">
                                            <div class="small"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 13 -->
                            <div id="circle_communication" class="circle" style="opacity: 1; top: 300.613px; left: 659.921px;">
                                <div class="description">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
                                        <div class=" md-trigger mouse" data-modal="modal-13">
                                            <i class="fa fa-check hight_width" aria-hidden="true"  style="     margin-top: 124px;margin-left: -475px;"></i>
                                            <img class="b" src="<?php echo base_url() ?>admin_assets/images/problem_solving.png" style="margin-top: 128px; margin-left: -542px;">
                                            <div class="small"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 14 -->
                            <div id="circle_communication" class="circle" style="opacity: 1; top: 300.613px; left: 659.921px;">
                                <div class="description">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
                                        <div class=" md-trigger mouse" data-modal="modal-14">
                                            <i class="fa fa-check hight_width" aria-hidden="true"  style="         margin-top: 27px;
    margin-left: -402px;"></i>
                                            <img class="b" src="<?php echo base_url() ?>admin_assets/images/delivering_result.png" style="margin-top: 27px; margin-left: -491px;">
                                            <div class="small"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 15 -->
                            <div id="circle_communication" class="circle" style="opacity: 1;z-index: 999;position:absolute;margin:  0 !important;left:  222px;">
                                <div class="description">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
                                        <div class=" md-trigger mouse" data-modal="">
                                            
                                            <!-- <img class="b" onclick="create_review()" src="<?php echo base_url() ?>admin_assets/images/delivering_result.png" > -->
                                            <button style="height: 100px; width: 100px; border-radius: 50%; " type="button" class="b btn btn-info pull-right" onclick="create_review()">Submit</button>

                                            <div class="small"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 14 -->
                            <!-- <div id="circle_communication" class="circle" style="opacity: 1;  top: 30px; left: 65px;">
                                <div class="description">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
                                        <div class=" md-trigger mouse" data-modal="modal-15">
                                            <img class="b" src="<?php echo base_url() ?>admin_assets/images/problem_solving.png" style="margin-top: margin-left: -491px;">
                                            <div class="small"></div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- <button type="button" class="btn btn-info pull-right" onclick="create_review()">Submit</button> -->

        <div style="height: 620px;"></div>
    </div>
    <!-- /.main content -->
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- START CORE PLUGINS -->
<script type="text/javascript">
    
    function get_value(id) {
        values = []
        $('input[type="radio"]').each(function() {
            if($(this).attr('name')) {
                if($(this).is(':checked')) {
                    var val = $(this).attr('value')
                    if (val == '01') {
                        val = '1'
                    }
                    values.push({'review_id': id, 'type': $(this).attr('class'), 'value_key': $(this).attr('name'), 'value': val});
                }
            }
        })
        var formData = {rows:values}; 
        $.ajax({
            url : "<?php echo base_url('admin/create_review_key') ?>",
            type: "POST",
            data : formData,
            success: function(data, textStatus, jqXHR)
            {
                window.location.href = '<?php echo base_url('admin/performance_evolution') ?>'
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
    }
    function create_review() {
        var total = $.find('input[type="radio"]').length
        total = total / 5;
        var check = $.find('input[type="radio"]:checked').length
        if(check == total){
            var creater_id = <?php echo $_SESSION['login_id'] ?>;
            var date = '<?php echo date('Y-'.$month.'-d') ?>';
            var employee_id = '<?php echo $id ?>';
            var formData = {creater_id:creater_id,date:date,employee_id:employee_id}; 
            $.ajax({
                url : "<?php echo base_url('admin/create_review') ?>",
                type: "POST",
                data : formData,
                success: function(data, textStatus, jqXHR)
                {
                    get_value(data)
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
             
                }
            });
        }
    }
</script>
<script type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url() ?>admin_assets/jquery.path.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('input[type="radio"]').change(function() {
            $('.md-modal').each(function() {
                var id = $(this).attr('id')
                //alert(id)
                var total = $('#'+id).find('input[type="radio"]').length
                total = total / 5;
                var check = $('#'+id).find('input[type="radio"]:checked').length
                if(check != total){
                    $('[data-modal="'+id+'"] .hight_width').hide()
                }
                else{
                   
                    $('[data-modal="'+id+'"] .hight_width').show()
                }
            })
        })
        
    })
</script>