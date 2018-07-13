
            <div class="content-wrapper">
                <div class="container">
                    <!-- main content -->
                    <div class="content">
                        <!-- Content Header (Page header) -->
                        <div class="content-header">
                            <div class="header-icon">
                                <i class="pe-7s-note2"></i>
                            </div>
                            <div class="header-title">
                                <h1>Basic Form</h1>
                                <small>Tabs styles and versions</small>
                                <ol class="breadcrumb">
                                    <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="#">Forms</a></li>
                                    <li class="active">Basic Form</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->

                                <form method="post" action="<?php echo base_url() ?>admin/insert_employee" enctype="multipart/form-data">

                        <div class="row">
                            
                            
                            <div class="col-sm-12">
                                <div class="panel panel-bd">
                                    
                                    <div class="panel-body">
                                         <div class="panel-group" id="accordion">
    <div class="panel panel-default panel panel-bd">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Personal Information</a>
        </h4><a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><span class="pull-right"><i class="fa fa-arrow-down" aria-hidden="true"></i></span></a>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
        <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">First Name
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="first_name" value="" id="example-text-input" placeholder="enter your first name">
            </div>
            <label for="example-text-input" class="col-sm-2 col-form-label">Last Name
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" name="last_name" placeholder="enter your last name">
            </div>
        </div>
        
        <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Father's Name
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" name="father_name" placeholder="enter your father's name">
            </div>
            <label for="example-text-input" class="col-sm-2 col-form-label">Gender
                                        <span class="required">*</span></label>
            <div class="col-sm-4 maxl">
                <label class="radio inline"> 
                      <input type="radio" name="gender" value="male" checked>
                      <span> Male </span> 
                   </label>
                  <label class="radio inline"> 
                      <input type="radio" name="gender" value="female">
                      <span>Female </span> 
                  </label>
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Date Of Birth
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" name="date_of_birth" type="Date" value="" id="example-text-input">
            </div>
            <label for="example-text-input" class="col-sm-2 col-form-label">CNIC
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" name="cnic" placeholder="enter your cnic">
            </div>
        </div>
       
        <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Image
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" name="image" type="File" value="" id="example-text-input" >
            </div>
        </div>
        
    <div class="panel-title">
        <h4>Contact Information</h4>
        <hr>
    </div>
    <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Email
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="email" value="" id="example-text-input" name="email" placeholder="enter your email">
            </div>
            <label for="example-text-input" class="col-sm-2 col-form-label">Cell Number
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" name="cell_number" placeholder="enter your mobile number">
            </div>
    </div>
    <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Landline
                                        </label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" name="landline" placeholder="enter your landline number">
            </div>
            <label for="example-text-input" class="col-sm-2 col-form-label">Residence Address
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" name="residence_address" placeholder="enter your mobile number">
            </div>
    </div>
    <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Permanent Address
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" name="permanent_address" placeholder="enter your permanent address here">
            </div>
            <label for="example-text-input" class="col-sm-2 col-form-label">Departmental Details
                                       </label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" name="departmental_details" placeholder="enter your permanent address here">
            </div>
    </div>
     <div class="panel-title">
        <h4>Departmental Details</h4>
        <hr>
    </div>
    <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Employee Code
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" name="employee_code" placeholder="enter your permanent address here">
            </div>
            <label for="example-text-input" class="col-sm-2 col-form-label">Username
                                      <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" name="user_name" placeholder="enter your permanent address here">
            </div>
    </div>
    <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Password
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="password" value="" id="example-text-input" name="password" placeholder="*******">
            </div>
            <label for="example-text-input" class="col-sm-2 col-form-label">Designation
                                      <span class="required">*</span></label>
            <div class="col-sm-4">
                <select class="form-control" type="select" value="" id="example-text-input" name="designation" placeholder="">
                <option value="">Please Select</option>
<option value="6">Admin </option>
<option value="7">IT</option>
<option value="8">HR</option>
<option value="9">Chrome Plating</option>
<option value="10">Finance</option>
<option value="11">Girls/Chrome Assembly</option>
<option value="12">Girls Assembly</option>
<option value="13">R &amp; D</option>
<option value="14">Electrical &amp; Utility</option>
<option value="15">Planning &amp; Material Control</option>
<option value="16">Quality Assurance</option>
<option value="17">Molding</option>
<option value="18">TG</option>
<option value="19">Paint Shop</option>
<option value="20">Operations</option>
<option value="21">TG/EPP</option>
<option value="22">Health Care Packaging</option>
<option value="23">PPMC</option>
<option value="24">Log. &amp; Personnel</option>
<option value="25">Admin &amp; Security</option>
<option value="26">Security</option>
<option value="27">Commercial</option>
<option value="28">Product Development</option>
<option value="29">PD</option>
<option value="30">QA</option>
<option value="31">HSE</option>
<option value="32">Mold Maintainance</option>
<option value="33">Electrical</option>
<option value="34">Research &amp; Development</option>
<option value="35">Maintainance</option>
<option value="36">Marketing</option>
<option value="37">General Store</option>
<option value="38">P.E</option>
<option value="39">MPD</option>
<option value="40">Workshop</option>
<option value="41">Tank Cover</option>
<option value="42">RIC</option>
<option value="43">Eng-Store</option>
<option value="44">Assembly Girls</option>
<option value="45">Electronics</option>
<option value="46">MIS</option>
<option value="47">Q/A</option>
<option value="48">Assembly Boys</option>
<option value="49">Plastic Welding</option>
<option value="50">Koito</option>
<option value="51">Accounts</option>
<option value="52">Elect</option>
<option value="53">Auto Store</option>
<option value="54">P.D</option>
<option value="55">Plant</option>
<option value="56">Production</option>
<option value="57">D.M Chrome Technology</option>
<option value="58">CEO</option>
<option value="59">Director</option>
<option value="60">General Manager</option>
<option value="61">Senior Manager</option>
<option value="62">Assistant Manager</option>
<option value="63">Admin Officer</option>
<option value="64">Security Officer</option>
<option value="65">CFO</option>
<option value="66">Manager Finance</option>
<option value="68">Manager Tax &amp; Corporate</option>
<option value="69">Deputy manager</option>
<option value="70">Manager Sales</option>
<option value="71">Manager Executive</option>
<option value="72">M.T.O</option>
<option value="73">Mechanical Engineer(Officer)</option>
<option value="74">Trainee Engineer</option>
<option value="75">GM Technical</option>
<option value="76">Manager</option>
<option value="77">Engineer</option>
<option value="78">Officer</option>
<option value="79">Store Officer</option>
<option value="80">Manager EPP</option>
<option value="81">A.M Chrome Plating</option>
<option value="82">Lab Engineer</option>
<option value="83">QC Inspector</option>
<option value="84">Production Engineer</option>
<option value="85">Officer Chrome Lab</option>
<option value="86">Manager Coating</option>
<option value="87">Machines Maintenance</option>
<option value="88">Maintenance of AGVS &amp; CCTVS</option>
<option value="89">HCP Engineer</option>
<option value="90">Sr. Manager Budget &amp; Costing</option>
<option value="91">Head of Plant Operations</option>
<option value="92">AM Dispatch</option>
</select>
            </div>
    </div>
    <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Grade
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" name="grade_depart" placeholder="enter your grade">
            </div>
            <label for="example-text-input" class="col-sm-2 col-form-label">Location
                                      <span class="required">*</span></label>
            <div class="col-sm-4">
                <select class="form-control" type="text" value="" id="example-text-input" name="location" placeholder="enter your permanent address here">
                <option value="hub">Hub</option>
                <option value="pqa">PQA</option>
                                        </select>
            </div>
    </div>
  
    <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Department
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <select class="form-control" type="text" value="" id="example-text-input" name="department" placeholder="enter your grade">
                <option value="">Please Select</option>
<option value="14"> Advisor  </option>
<option value="15"> CEO</option>
<option value="16"> Business Affairs</option>
<option value="17"> Technical</option>
<option value="18"> R&amp;D</option>
<option value="19"> Technology</option>
<option value="20"> Operation</option>
<option value="21"> Mold Shop</option>
<option value="22"> Prod Devlp Auto</option>
<option value="23"> QA-PQA</option>
<option value="24"> QA-Hub</option>
<option value="25"> QA-HCP</option>
<option value="26"> QA-ABM</option>
<option value="27"> PPMC(A)</option>
<option value="28"> Plant Operation</option>
<option value="29"> Plant Production</option>
<option value="30"> Production Auto-PQA</option>
<option value="31"> Production Engineering/Maintenance</option>
<option value="32"> Utilities PQA</option>
<option value="33"> HCP Production</option>
<option value="34"> Auto Purchases</option>
<option value="35"> Admin</option>
<option value="36"> Finance</option>
<option value="37"> Cost Accounting &amp; Business Proposal</option>
<option value="38"> HR</option>
<option value="39"> Marketing</option>
<option value="40"> I.T</option>
<option value="41"> Imports</option>
<option value="42"> Test Admin</option>
<option value="43"> QA</option>
<option value="44"> Paintshop</option>
<option value="45"> Molding</option>
<option value="46"> Koito</option>
<option value="47"> Girls Assembly</option>
<option value="48"> MPD</option>
<option value="49"> Boys Assembly</option>
<option value="51"> Maintainence</option>
<option value="52"> PMC</option>
</select>
            </div>
             <label for="example-text-input" class="col-sm-2 col-form-label">Joining Date
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="Date" value="" id="example-text-input" name="joining_date" placeholder="">
            </div>
    </div>
    <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Is Admin
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <select class="form-control" type="text" value="" id="example-text-input" name="is_admin" placeholder="enter your grade">
                <option value="">Please Select</option>
                <option value="1">Yes</option>
                <option value="0">No</option>
</select>
            </div>
             <label for="example-text-input" class="col-sm-2 col-form-label">Basic
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="number" value="" id="example-text-input" name="basic" placeholder="">
            </div>
    </div>
    <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">HR
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="number" value="" id="example-text-input" name="hr" placeholder="">
            </div>
             <label for="example-text-input" class="col-sm-2 col-form-label">Utilities
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="number" value="" id="example-text-input" name="utilities" placeholder="">
            </div>
    </div>
    <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Medical
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="number" value="" id="example-text-input" name="medical" placeholder="">
            </div>
             <label for="example-text-input" class="col-sm-2 col-form-label">Conveyance
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="number" value="" id="example-text-input" name="conveyance" placeholder="">
            </div>
    </div>
    <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Cash Gross (Comp 3)
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="number" value="" id="example-text-input" name="cash_gross" placeholder="">
            </div>
             <label for="example-text-input" class="col-sm-2 col-form-label">PF
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="number" value="" id="example-text-input" name="pf" placeholder="">
            </div>
    </div>
    <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Bonus
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="number" value="" id="example-text-input" name="bonus" placeholder="">
            </div>
             <label for="example-text-input" class="col-sm-2 col-form-label">EL
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="number" value="" id="example-text-input" name="el" placeholder="">
            </div>
    </div>
    <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Total Gross (Comp 5)
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="number" value="" id="example-text-input" name="total_gross" placeholder="">
            </div>
            
    </div>

    

</div>
      </div>
    </div>
    <div class="panel panel-default panel panel-bd">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Qualification Details</a>
        </h4><a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><span class="pull-right"><i class="fa fa-arrow-down" aria-hidden="true"></i></span></a>
      </div>
      <div id="collapse2" class="panel-collapse collapse after-add-more">
     
        <div class="panel-body">
            <div class="form-group row">
                <span class="pull-right">
                <div class="col-sm-12 change">
                <a class="btn btn-success add-more pull-right">+ Add More</a>
                </div></span>
            </div>
            <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Enter new Qualification
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" name="new_qualification[]" placeholder="">
            </div>
             <label for="example-text-input" class="col-sm-2 col-form-label">Degree/Qualification Tittle
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" name="qualification_title[]" placeholder="">
            </div>
            </div>
            <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Start Date
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="Date" value="" id="example-text-input" name="start_date[]" placeholder="">
            </div>
             <label for="example-text-input" class="col-sm-2 col-form-label">End Date
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="Date" value="" id="example-text-input" name="end_date[]" placeholder="">
            </div>
            </div>
            <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Grade/CGPA
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" name="grade[]" placeholder="">
            </div>
             <label for="example-text-input" class="col-sm-2 col-form-label">Institution
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" name="institution[]" placeholder="">
            </div>
            </div>
            <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Award Year
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" name="award_year[]" placeholder="">
            </div>
             <label for="example-text-input" class="col-sm-2 col-form-label">Field of Study
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" name="field_of_study[]" placeholder="">
            </div>
            </div>


        </div>
      </div>
    </div>
    
    <div class="panel panel-default panel panel-bd">
      <div class="panel-heading" id="click_advance">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Job Description</a>
        </h4><a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><span class="pull-right"><i class="fa fa-arrow-down" aria-hidden="true"></i></span></a>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body ">
          <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Add Job Description
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" name="add_job_description" placeholder="">
            </div>
             <!-- <label for="example-text-input" class="col-sm-2 col-form-label">Fetch job Description
                                        <span class="required">*</span></label>
                         <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" name="" placeholder="">
                         </div> -->
            </div>  
        </div>
      </div>
    </div>
     <div class="panel panel-default panel panel-bd">
      <div class="panel-heading" id="click_advance">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Evalution KPI</a>
        </h4><a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><span class="pull-right"><i class="fa fa-arrow-down" aria-hidden="true"></i></span></a>
      </div>
      <div id="collapse4" class="panel-collapse collapse after-add-kpi">
        <div class="panel-body">
        <div class="form-group row">
                <span class="pull-right">
                <div class="col-sm-12 delet">
                <a class="btn btn-success add-kpi pull-right">+ Add More</a>
                </div></span>
            </div>
          <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Add Job KPI
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" name="add_job_kpi[]" placeholder="">
            </div>
             <label for="example-text-input" class="col-sm-2 col-form-label">Assign Weightage
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" name="assign_weightage[]" placeholder="">
            </div>
            </div>  
            <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">
                                        </label>

            </div> 
        </div>
      </div>
         <div class="col-sm-12">
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
            </div>
    </div>

  </div> 

</div>
                                       
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                        <!-- Checkboxes & Radios -->
                       
                       
                    </div> <!-- /.main content -->
                </div> <!-- /.container -->
            </div> <!-- /.content-wrapper -->
          
        </div> <!-- ./wrapper -->
        <!-- jQuery -->
        <script src="<?php echo base_url() ?>assets/assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
        <!-- jquery-ui -->
        <script src="<?php echo base_url() ?>assets/assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
        <!-- Bootstrap js -->
        <script src="<?php echo base_url() ?>assets/assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- lobipanel js -->
        <script src="<?php echo base_url() ?>assets/assets/plugins/lobipanel/lobipanel.min.js" type="text/javascript"></script>
        <!-- animsition js -->
        <script src="<?php echo base_url() ?>assets/assets/plugins/animsition/js/animsition.min.js" type="text/javascript"></script>
        <!-- bootsnav js -->
        <script src="<?php echo base_url() ?>assets/assets/plugins/bootsnav/js/bootsnav.js" type="text/javascript"></script>
        <!-- SlimScroll js -->
        <script src="<?php echo base_url() ?>assets/assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <!-- FastClick js-->
        <script src="<?php echo base_url() ?>assets/assets/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
        <!-- End Core Plugins
        =====================================================================-->
        <!-- Start Page Lavel Plugins
        =====================================================================-->




        <!-- Start Theme label Script
        =====================================================================-->
        <!-- Dashboard js -->
        <script src="<?php echo base_url() ?>assets/assets/dist/js/dashboard.js" type="text/javascript"></script>
        <!-- End Theme label Script
        =====================================================================-->

    </body>

<script type="text/javascript">
 $(document).ready(function() {
    $("body").on("click",".add-more",function(){
        var html = $(".after-add-more").first().clone();
        //  $(html).find(".change").prepend("<label for=''>&nbsp;</label><br/><a class='btn btn-danger remove'>- Remove</a>");
          $(html).find(".change").html("<a class='btn btn-danger remove'><i class='fa fa-trash-o' aria-hidden='true'></i> </a> "+' <a class="btn btn-success add-more"><strong> + </strong> </a>');
        $(".after-add-more").last().after(html);
    });
    $("body").on("click",".remove",function(){
        $(this).parents(".after-add-more").remove();
    });
});
</script>
<script type="text/javascript">
    $(document).ready(function() {
    $("body").on("click",".add-kpi",function(){
        var html = $(".after-add-kpi").first().clone();
        //  $(html).find(".change").prepend("<label for=''>&nbsp;</label><br/><a class='btn btn-danger remove'>- Remove</a>");
          $(html).find(".delet").html("<a class='btn btn-danger remove'><i class='fa fa-trash-o' aria-hidden='true'></i> </a> "+' <a class="btn btn-success add-kpi"><strong> + </strong> </a>');
        $(".after-add-kpi").last().after(html);
    });
    $("body").on("click",".remove",function(){
        $(this).parents(".after-add-kpi").remove();
    });
});
</script>
</html>