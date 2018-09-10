
<?php if ($_SESSION['role']=="vendor"): ?>
    <ul class="nav" id="side-menu">
        <li class="nav-heading "> <span>Main Navigation&nbsp;&nbsp;&nbsp;&nbsp;------</span></li>
        <li><a href="<?php echo base_url() ?>admin/job_dashboard" class="fa fa-icon"><i class="fa fa-file-text-o"></i> My Jobs</a></li>
        <li><a href="<?php echo base_url('admin/activity_analytics_vendor/'.$_SESSION['id']) ?>" class="fa fa-icon"><i class="fa fa-newspaper-o" style="color: #212eaf;"></i>Activity Analytics</a></li>
        <li><a href="<?php echo base_url('admin/analytics_report/'.$_SESSION['id']) ?>"  class="fa fa-icon"><i class="fa fa-file-text-o"></i> Analytics Report</a></li>
    
<?php endif ?>

    <?php if ($_SESSION['role']=="Analysis"): ?>
        <ul class="nav" id="side-menu">
            <li class="nav-heading "> <span>Main Navigation&nbsp;&nbsp;&nbsp;&nbsp;------</span></li>
            <li><a href="<?php echo base_url() ?>admin/" class="material-ripple"><i class="material-icons">home</i> Dashboard</a></li>
            <li>
                <a href="#" class="material-ripple"><i class="material-icons">group_work</i>  Reporting <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php echo base_url()?>admin/case_report">All Case</a></li>
                    <li><a href="<?php echo base_url()?>admin/subject_report">All Subject</a></li>
                    <li><a href="<?php echo base_url()?>admin/activity_report">All Activity</a></li>
                    <li><a href="<?php echo base_url()?>admin/profit_loss_report">Profit & Loss Report</a></li>
                    <li><a href="<?php echo base_url()?>admin/monthly_assessment">Monthly Assessment</a></li>
                    <li><a href="<?php echo base_url()?>admin/monthly_bills">Monthly Assessment Bills</a></li>
                    <li><a href="<?php echo base_url()?>admin/cash_date">Date Wise Cash Out</a></li>
                    <li><a href="<?php echo base_url()?>admin/payorder_date">Date Wise Payorder</a></li>
                    <li><a href="<?php echo base_url()?>admin/cash_client">Client Wise Cash Out</a></li>
                    <li><a href="<?php echo base_url()?>admin/cash_service">Service Wise Cash Out</a></li>
                    <li><a href="<?php echo base_url('admin/case_invoice') ?>">Case Invoice</a></li>
                    <li><a href="<?php echo base_url('admin/sales_invoice') ?>">Sales Invoice</a></li>
                    <li><a href="<?php echo base_url('admin/case_vendor_invoice') ?>">Case Vendor Invoice</a></li>
                    <li><a href="<?php echo base_url('admin/vendor_payment_invoice') ?>">Vendor Payment Invoice</a></li>
                    <li><a href="<?php echo base_url('admin/courier_invoice') ?>">Courier Invoice</a></li>
                    <li><a href="<?php echo base_url('admin/profit_lose_invoice') ?>">Profit and Lose Invoice</a></li>
                    <li><a href="<?php echo base_url('admin/office_fee') ?>">Office Fee Analysis</a></li>
                    <li><a href="<?php echo base_url('admin/master_amount') ?>">Master Receivable</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="material-ripple"><i class="material-icons">group_work</i>  Analytics <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php echo base_url('admin/case_analytics') ?>">Client Case Analytics</a></li>
                    <li><a href="<?php echo base_url('admin/case_analytics_team') ?>">Team Case Analytics</a></li>
                    <li><a href="<?php echo base_url('admin/activity_analytics_team') ?>">Team Activity Analytics</a></li>
                    <li><a href="<?php echo base_url('admin/activity_analytics_vendor') ?>">Vendor Activity Analytics</a></li>
                    <li><a href="<?php echo base_url('admin/fund_request_analytics') ?>">Fund Request Analytics</a></li>
                </ul>
            </li>
            <li>
                
                <a href="#" class="material-ripple"><img src="<?php echo base_url() ?>admin_assets/icon/organogram.png">  Oprations<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="#">Employee Work Load<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo base_url('admin/panding_cases') ?>">Pending Tasks</a></li>
                            <li><a href="<?php echo base_url('admin/completed_case') ?>">Completed</a></li>
                            <li><a href="<?php echo base_url('admin/due_cases') ?>">Over Due Tasks</a></li>
                            <li><a href="<?php echo base_url('admin/hold_case') ?>">Hold Cases</a></li>
                            <li><a href="<?php echo base_url('admin/cancelled_case') ?>">Cancelled Cases</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </li>
            <li>
                <a href="<?php echo base_url() ?>admin/cases" class="material-ripple"><i class="material-icons">group_work</i>  Cases Transition </a>
            </li>
        </ul>
    <?php endif ?>
   <?php if ($_SESSION['role']=="Ceo"): ?>
       <ul class="nav" id="side-menu">
                        <li class="nav-heading "> <span>Main Navigation&nbsp;&nbsp;&nbsp;&nbsp;------</span></li>
                        <li><a href="<?php echo base_url() ?>admin/" class="material-ripple"><i class="material-icons">home</i> Dashboard</a></li>
    
                        <li>
                            <a href="<?php echo base_url() ?>admin/" class="material-ripple"><i class="material-icons">group_work</i>  HR <span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url() ?>admin/ceo_employees">Employees</a></li>
                                <li><a href="<?php echo base_url() ?>admin/complated_review">Performance Evolution</a></li>
                                <li><a href="<?php echo base_url() ?>admin/view_ceo_leaves">Leaves Status</a></li>
                                <li><a href="<?php echo base_url() ?>admin/attendance">Attendance</a></li>
                                <li><a href="#">Organogram <span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li><a href="<?php echo base_url() ?>admin/departments_organogram">Department</a></li>
                                        <li><a href="<?php echo base_url() ?>admin/employees_organogram">Employee</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li> 
                        <li>
                            <a href="<?php echo base_url() ?>admin/" class="material-ripple"><i class="material-icons">group_work</i>  Accounts <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url()?>admin/case_report">All Case</a></li>
                                <li><a href="<?php echo base_url()?>admin/subject_report">All Subject</a></li>
                                <li><a href="<?php echo base_url()?>admin/activity_report">All Activity</a></li>
                                <li><a href="<?php echo base_url()?>admin/profit_loss_report">Profit & Loss Report</a></li>
                                <li><a href="<?php echo base_url()?>admin/monthly_assessment">Monthly Assessment</a></li>
                                <li><a href="<?php echo base_url()?>admin/monthly_bills">Monthly Assessment Bills</a></li>
                                <li><a href="<?php echo base_url()?>admin/cash_date">Date Wise Cash Out</a></li>
                                <li><a href="<?php echo base_url()?>admin/payorder_date">Date Wise Payorder</a></li>
                                <li><a href="<?php echo base_url()?>admin/cash_client">Client Wise Cash Out</a></li>
                                <li><a href="<?php echo base_url()?>admin/cash_service">Service Wise Cash Out</a></li>
                                <li><a href="<?php echo base_url('admin/case_invoice') ?>">Case Invoice</a></li>
                                <li><a href="<?php echo base_url('admin/sales_invoice') ?>">Sales Invoice</a></li>
                                <li><a href="<?php echo base_url('admin/case_vendor_invoice') ?>">Case Vendor Invoice</a></li>
                                <li><a href="<?php echo base_url('admin/vendor_payment_invoice') ?>">Vendor Payment Invoice</a></li>
                                <li><a href="<?php echo base_url('admin/courier_invoice') ?>">Courier Invoice</a></li>
                                <li><a href="<?php echo base_url('admin/profit_lose_invoice') ?>">Profit and Lose Invoice</a></li>
                                <li><a href="<?php echo base_url('admin/office_fee') ?>">Office Fee Analysis</a></li>
                                <li><a href="<?php echo base_url('admin/master_amount') ?>">Master Receivable</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="material-ripple" href="<?php echo base_url('admin/view_payrole') ?>"><img src="<?php echo base_url() ?>admin_assets/icon/reporting_hierarcy.png">  Payrole</a>
                            
                        </li>
                        <li>
                             <a href="#" class="material-ripple"><i class="material-icons">home</i>HR Request Forms<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url()?>admin/complaint_form_request">Complaint Form Request</a></li>
                                <li><a href="<?php echo base_url()?>admin/visiting_card_request">Visiting Card Request</a></li>
                                <li><a href="<?php echo base_url()?>admin/loan_application_request">Loan Application Request</a></li>
                                <li><a href="<?php echo base_url()?>admin/salary_advance_request">Salary Advance Request</a></li>
                                <li><a href="<?php echo base_url()?>admin/expense_form_request_admin">Expance Request</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="material-ripple"><img src="<?php echo base_url() ?>admin_assets/icon/organogram.png">  Oprations<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="#">Employee Work Load<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li><a href="<?php echo base_url('admin/panding_cases') ?>">Pending Tasks</a></li>
                                        <li><a href="<?php echo base_url('admin/completed_case') ?>">Completed</a></li>
                                        <li><a href="<?php echo base_url('admin/due_cases') ?>">Over Due Tasks</a></li>
                                        <li><a href="<?php echo base_url('admin/hold_case') ?>">Hold Cases</a></li>
                                        <li><a href="<?php echo base_url('admin/cancelled_case') ?>">Cancelled Cases</a></li>
                                    </ul>
                                </li>
                                
                            </ul>
                        </li>
                         <li>
                            <a href="<?php echo base_url() ?>admin/hr_calender" class="material-ripple"><i class="material-icons">group_work</i>  Traning & Development</a>

                        </li>
                         <li>
                            <a href="#" class="material-ripple"><i class="material-icons">group_work</i>  Task Manager</a>

                        </li>
                        <li>
                            <a href="#" class="material-ripple"><i class="material-icons">group_work</i>  Pricing Detailes </a>

                        </li>
                        
                        <li><a href="<?php echo base_url() ?>admin/change_admin_password" class="fa fa-view"><i class="fa fa-file-text-o"></i>Change Password</a></li>


                    </ul>
   <?php endif ?>
   <?php if ($_SESSION['role']=="Hr"): ?>
       <ul class="nav" id="side-menu">
                        <li class="nav-heading "> <span>Main Navigation&nbsp;&nbsp;&nbsp;&nbsp;------</span></li>
                        <li><a href="<?php echo base_url() ?>admin/dashboard" class="material-ripple"><i class="material-icons">home</i> Dashboard</a></li>

                        <li>
                            <a href="<?php echo base_url() ?>admin/employee_management" class="material-ripple"><i class="material-icons">group_work</i>  Employee Management</a>

                        </li>
                        <li>
                            <a href="#" class="material-ripple"><img src="<?php echo base_url() ?>admin_assets/icon/organogram.png">  Organogram<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url() ?>admin/departments_organogram">Departments Organogram</a></li>
                                <li><a href="<?php echo base_url() ?>admin/employees_organogram">Employees Organogram</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>admin/departments" class="material-ripple"><i class="material-icons">home</i>  Departments</a>
    
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>admin/employees" class="material-ripple"><i class="material-icons">group_work</i>  Employees</a>
    
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>admin/activity_calender" class="material-ripple"><img src="<?php echo base_url() ?>admin_assets/img/schedule.png" width="24" >  Birthday & Anniversary</a>
    
                        </li>
                        <li><a class="material-ripple" href="<?php echo base_url() ?>admin/attendance"><img src="<?php echo base_url() ?>admin_assets/icon/performance_review.png"> Attendance</a></li>
                        <!--<li>-->
                        <!--    <a href="#" class="material-ripple"><img src="<?php echo base_url() ?>admin_assets/icon/reporting_hierarcy.png">  Reporting Hierarchy</a>-->

                        <!--</li>-->
                        <li>
                            <a href="#" class="material-ripple"><img src="<?php echo base_url() ?>admin_assets/icon/performance_review.png">  Performance Review<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url() ?>admin/performance_evolution">Performance Evolution</a></li>
                                <li><a href="<?php echo base_url() ?>admin/complated_review">Complated Review</a></li>
                            </ul>

                        </li>
                        <li>
                            <a href="#" class="material-ripple"><img src="<?php echo base_url() ?>admin_assets/icon/performance_review.png">  Memo<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <?php if ($_SESSION['role'] == "Hr"): ?>
                                <li><a href="<?php echo base_url() ?>admin/create_memo">Create Memo</a></li>
                                    
                                <?php endif ?>

                                <li><a href="<?php echo base_url() ?>admin/view_memo">View Memo</a></li>
                            </ul>

                        </li>
                        <li>
                            <a href="#" class="material-ripple"><img src="<?php echo base_url() ?>admin_assets/icon/performance_review.png">  Task Manager<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url()?>admin/task_manager_form">Task Add</a></li>
                                <!-- <li><a href="<?php echo base_url()?>admin/task_notification_view">View Task </a></li> -->
                            </ul>

                        </li>
                        <li>
                            <a href="#" class="material-ripple"><img src="<?php echo base_url() ?>admin_assets/icon/training_development.png">  Training & Development<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url() ?>admin/add_training_hr">Create Training</a></li>
                                <li><a href="<?php echo base_url() ?>admin/view_training_hr">View Training</a></li>
                                <li><a href="<?php echo base_url() ?>admin/hr_calender">Training Calendar</a></li>
                                <li><a href="#">Course Management<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url() ?>admin/create_course">Create Course</a></li>
                                <li><a href="<?php echo base_url() ?>admin/view_course">View Course</a></li>
                                <li><a href="<?php echo base_url() ?>admin/complete_course">Completed Courses</a></li>
                                <li><a href="<?php echo base_url() ?>admin/create_chapter">Create Chapter</a></li>
                                <li><a href="<?php echo base_url() ?>admin/create_section">Create Section</a></li>
                                <li><a href="<?php echo base_url() ?>admin/upload_content">Upload Content</a></li>
                            </ul></li>
                            <li><a href="<?php echo base_url() ?>admin/training_lab">Training Library</a></li>
                               
                            </ul>

                        </li>
                        <li>
                        <a href="#" class="material-ripple"><i class="material-icons">announcement</i>  Memo/News</a>
                        
                        </li>
                        <li>
                        <a href="<?php echo base_url('admin/document_forms') ?>" class="material-ripple"><i class="material-icons">mode_edit</i>  Documents & Forms</a>
                        
                        </li>
                        <li>
                            <a href="#" class="material-ripple"><img src="<?php echo base_url() ?>admin_assets/icon/recruitment.png">  Recruitment<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <!-- usama code start -->
                                <li><a href="<?php echo base_url() ?>admin/recruitment">Recruitment Form</a></li>
                                <!-- usama code end -->
                                <!--<li><a href="#">Recruitment Planner</a></li>-->
                                <li><a href="<?php echo base_url() ?>admin/all_cv">Resume Bank</a></li>
                                <li><a href="<?php echo base_url() ?>admin/recruitment_parser">Resume Parser</a></li>
                                <!--<li><a href="#">Online Submission</a></li>-->
                                <!--<li><a href="#">IN-House Submission</a></li>-->
                                <!--<li><a href="#">Internal Recruitment</a></li>-->
                                <li><a href="<?php echo base_url() ?>admin/interview_step_1">Interview Manager</a></li>
                                <!--<li><a href="#">Requisition</a></li>-->
                                <!--<li><a href="#">Testing Services</a></li>-->


                            </ul>

                        </li>
                        <li>
                            <a href="#" class="material-ripple"><i class="material-icons">mode_edit</i>HR Requets Forms<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url()?>admin/complaint_form_request">Complaint Form Request</a></li>
                                <li><a href="<?php echo base_url()?>admin/leave_application_request_hr">Leave Application Form</a></li>
                                <li><a href="<?php echo base_url()?>admin/load_application_finance">Loan Application Request</a></li>
                                <li><a href="<?php echo base_url()?>admin/salary_advance_finance">Salary Advance Request</a></li>
                            </ul>
                         </li>
                        <!--<li>-->
                        <!--    <a href="#" class="material-ripple"><i class="material-icons">monetization_on</i>  Compensation</a>-->

                        <!--</li>-->
                        
                        <li>
                            <a href="#" class="material-ripple"><img src="<?php echo base_url() ?>admin_assets/icon/leaves_management.png">  Leaves Management<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url()?>admin/leave_application_request_hr">Leave Application Form</a></li>
                                <li><a href="<?php echo base_url('admin/leaves_management')?>">Leaves Management</a></li>
                                <li><a href="<?php echo base_url('admin/view_leaves')?>">View Leaves</a></li>
                            </ul>
                        </li>
                    


                    </ul>
   <?php endif ?>
<?php if ($_SESSION['role']=="Sales"): ?>

        <ul class="nav" id="side-menu">
                                <li class="nav-heading "> <span>Main Navigation&nbsp;&nbsp;&nbsp;&nbsp;------</span></li>
                                <li><a href="<?php echo base_url() ?>admin/dashboard" class="material-ripple"><i class="material-icons">home</i> Dashboard</a></li>
                                <li><a href="<?php echo base_url() ?>admin/view_chart" class="material-ripple"><i class="material-icons">home</i>Charts</a></li>
                                <li><a href="<?php echo base_url() ?>admin/calender" class="material-ripple"><i class="material-icons">home</i> Activity Calender</a></li>


                                <li>
                                     <a href="#" class="material-ripple"><i class="material-icons">home</i>Leads<span class="fa arrow"></span></a>
                                     <ul class="nav nav-second-level">
                                        <li><a href="<?php echo base_url() ?>admin/create_lead">Create Leads</a></li>
                                        <li><a href="<?php echo base_url()?>admin/view_lead">View Leads</a></li>
                                        </ul>
                                 </li>

                                 <li>
                                     <a href="#" class="material-ripple"><i class="material-icons">home</i>RFQ<span class="fa arrow"></span></a>
                                     <ul class="nav nav-second-level">
                                        <li><a href="<?php echo base_url() ?>admin/create_rfq">Create RFQ</a></li>
                                        <li><a href="<?php echo base_url()?>admin/view_rfq">View RFQ</a></li>
                                        </ul>

                                 </li>
                                  <li>
                                     <a href="#" class="material-ripple"><i class="material-icons">home</i>Customer<span class="fa arrow"></span></a>
                                     <ul class="nav nav-second-level">
                                        <li><a href="<?php echo base_url() ?>admin/view_customer">View Customer</a></li>
                                        <li><a href="#">Create Customer</a></li>
                                        </ul>

                                 </li>
                                 <!-- <li><a href="<?php echo base_url()?>admin/view_customer"><i class="material-icons">home</i>View Customer</a></li> -->

                                <li>
                                     <a href="#" class="material-ripple"><i class="material-icons">home</i>Resource Management<span class="fa arrow"></span></a>
                                     <ul class="nav nav-second-level">
                                        <li><a href="#">Role Assignment</a></li>
                                        <li><a href="#">Target KPI Allocation</a></li>
                                        <li><a href="#">Sales Activity Tracking</a></li>
                                        <li><a href="#">Visit/Job Description</a></li>
                                        </ul>
                                 </li>
                                 <li>
                                     <a href="#" class="material-ripple"><i class="material-icons">home</i>Performance Management<span class="fa arrow"></span></a>
                                     <ul class="nav nav-second-level">
                                        <li><a href="#">Target Vs. Actual</a></li>
                                        <li><a href="#">Sales Activity Overview</a></li>
                                        <li><a href="#">Business Segment Performance</a></li>
                                        <li><a href="#">Historic Sales View</a></li>
                                        </ul>
                                 </li>
                                  <li>
                                     <a href="#" class="material-ripple"><i class="material-icons">home</i>Analytics<span class="fa arrow"></span></a>
                                     <ul class="nav nav-second-level">
                                        <li><a href="<?php echo base_url('admin/case_analytics') ?>">Case Analytics</a></li>
                                        <li><a href="<?php echo base_url('admin/fund_request_analytics') ?>">Fund Request Analytics</a></li>
                                        <li><a href="#">Real Time analysis</a></li>
                                        <li><a href="#">Reports Module</a></li>
                                        <li><a href="#">Graphical Analysis</a></li>
                                        </ul>
                                 </li>

                                 <li>
                                     <a href="#" class="material-ripple"><i class="material-icons">home</i>Profile<span class="fa arrow"></span></a>
                                     <ul class="nav nav-second-level">
                                        <li><a href="<?php echo base_url('admin/view_single_leaves/'.$_SESSION['id']) ?>">Leave Balance</a></li>
                                        </ul>
                                        <ul class="nav nav-second-level">
                                        <li><a href="#">My Qualification</a></li>
                                        </ul>
                                        <ul class="nav nav-second-level">
                                        <li><a href="<?php echo base_url('admin/my_payslips/'.$_SESSION['id']) ?>">My Payslips</a></li>
                                        </ul>
                                 </li>
         <li>
                             <a href="#" class="material-ripple"><i class="material-icons">home</i>Company Information<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li><a href="#">Memo/News</a></li>
                                </ul>
                                <ul class="nav nav-second-level">
                                <li><a href="#">Company Profile</a></li>
                                </ul>
                                <ul class="nav nav-second-level">
                                <li><a href="#">Product Profiles</a></li>
                                </ul>
                                <ul class="nav nav-second-level">
                                <li><a href="#">Management Structure</a></li>
                                </ul>
                         </li>


<?php endif ?>
<?php if ($_SESSION['role']=="Ess"): ?>

<ul class="nav" id="side-menu">

                        <li><a href="<?php echo base_url() ?>admin/dashboard" class="material-ripple"><i class="material-icons">home</i> Dashboard</a></li>
                       <!-- <li><a href="<?php echo base_url() ?>admin/view_chart" class="material-ripple"><i class="material-icons">home</i>Charts</a></li> -->
                        <li><a href="<?php echo base_url() ?>admin/calender" class="material-ripple"><i class="material-icons">home</i> Activity Calender</a></li>


                        <li>
                             <a href="#" class="material-ripple"><i class="material-icons">home</i>Leads<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url() ?>admin/create_lead">Create Leads</a></li>
                                <li><a href="<?php echo base_url()?>admin/view_lead">View Leads</a></li>
                                </ul>
                         </li>
                         <li>
                             <a href="#" class="material-ripple"><i class="material-icons">home</i>Charts<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url()?>admin/view_chart">Lead Charts</a></li>
                                <li><a href="<?php echo base_url()?>admin/pay_chart">Payment Charts</a></li>
                                </ul>
                         </li>
                         <li>
                             <a href="#" class="material-ripple"><i class="material-icons">home</i>HR Forms<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url()?>admin/leave_application_list">Leave Application Form</a></li>
                                <li><a href="<?php echo base_url()?>admin/resignation_form">Resignation Application Form</a></li>
                                <li><a href="<?php echo base_url()?>admin/visiting_card_list">Visiting Card Form</a></li>
                                <li><a href="<?php echo base_url()?>admin/complaint_form_list">Complaint Form</a></li>
                                <li><a href="<?php echo base_url()?>admin/expense_form_list">Expense Form</a></li>
                                <li><a href="<?php echo base_url()?>admin/salary_advance_list">Salary Advance Form</a></li>
                                <li><a href="<?php echo base_url()?>admin/loan_application_list">Loan Application</a></li>
                                </ul>
                         </li>

                         <li>
                             <a href="#" class="material-ripple"><i class="material-icons">home</i>RFQ<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url() ?>admin/create_rfq">Create RFQ</a></li>
                                <li><a href="<?php echo base_url()?>admin/view_rfq">View RFQ</a></li>
                                </ul>

                         </li>
                          <li>
                             <a href="#" class="material-ripple"><i class="material-icons">home</i>Customer<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url() ?>admin/view_customer">View Customer</a></li>
                                <li><a href="#">Create Customer</a></li>
                                </ul>

                         </li>
                         <!-- <li><a href="<?php echo base_url()?>admin/view_customer"><i class="material-icons">home</i>View Customer</a></li> -->

                        <li>
                             <a href="#" class="material-ripple"><i class="material-icons">home</i>Resource Management<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li><a href="#">Role Assignment</a></li>
                                <li><a href="#">Target KPI Allocation</a></li>
                                <li><a href="#">Sales Activity Tracking</a></li>
                                <li><a href="#">Visit/Job Description</a></li>
                                </ul>
                         </li>
                         <li>
                             <a href="#" class="material-ripple"><i class="material-icons">home</i>Performance Management<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li><a href="#">Target Vs. Actual</a></li>
                                <li><a href="#">Sales Activity Overview</a></li>
                                <li><a href="#">Business Segment Performance</a></li>
                                <li><a href="#">Historic Sales View</a></li>
                                </ul>
                         </li>
                          <li>
                             <a href="#" class="material-ripple"><i class="material-icons">home</i>Analytics<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url('admin/case_analytics') ?>">Case Analytics</a></li>
                                <li><a href="<?php echo base_url('admin/fund_request_analytics') ?>">Fund Request Analytics</a></li>
                                <li><a href="#">Real Time analysis</a></li>
                                <li><a href="#">Reports Module</a></li>
                                <li><a href="#">Graphical Analysis</a></li>
                                </ul>
                         </li>

                         <li>
                             <a href="#" class="material-ripple"><i class="material-icons">home</i>Profile<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url('admin/view_single_leaves/'.$_SESSION['id']) ?>">Leave Balance</a></li>
                                </ul>
                                <ul class="nav nav-second-level">
                                <li><a href="#">My Qualification</a></li>
                                </ul>
                                <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url('admin/my_payslips/'.$_SESSION['id']) ?>">My Payslips</a></li>
                                </ul>
                         </li>
 <li>
                             <a href="#" class="material-ripple"><i class="material-icons">home</i>Company Information<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li><a href="#">Memo/News</a></li>
                                </ul>
                                <ul class="nav nav-second-level">
                                <li><a href="#">Company Profile</a></li>
                                </ul>
                                <ul class="nav nav-second-level">
                                <li><a href="#">Product Profiles</a></li>
                                </ul>
                                <ul class="nav nav-second-level">
                                <li><a href="#">Management Structure</a></li>
                                </ul>
                         </li>


<?php endif ?>
<?php if ($_SESSION['role']=="Finance"): ?>

<ul class="nav" id="side-menu">
                        <li class="nav-heading "> <span>Main Navigation&nbsp;&nbsp;&nbsp;&nbsp;------</span></li>
                        <li><a href="<?php echo base_url() ?>admin/dashboard" class="material-ripple"><i class="material-icons">home</i> Dashboard</a></li>
                        <li>
                             <a href="#" class="material-ripple"><i class="material-icons">home</i>Leads<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">

                                <li><a href="<?php echo base_url()?>admin/view_lead">View Leads</a></li>
                                </ul>
                         </li>

                         <li>
                             <a href="#" class="material-ripple"><i class="material-icons">home</i>RFQ<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url() ?>admin/create_rfq">Create RFQ</a></li>
                                <li><a href="<?php echo base_url()?>admin/view_rfq">View RFQ</a></li>
                                </ul>

                         </li>
                          <li>
                             <a href="#" class="material-ripple"><i class="material-icons">home</i>Payment<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url() ?>admin/add_payment">Create</a></li>
                                </ul>
                         </li>
                        <li>
                             <a href="#" class="material-ripple"><i class="material-icons">home</i>Invoice<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url()?>admin/f_process_invoice">Process</a></li>
                                </ul>
                         </li>
                <?php endif ?>
            <?php if ($_SESSION['role']=="Supervisor"): ?>
                    <ul class="nav" id="side-menu">
                        <li class="nav-heading "> <span>Main Navigation&nbsp;&nbsp;&nbsp;&nbsp;------</span></li>
                        <li><a href="<?php echo base_url() ?>admin/dashboard" class="material-ripple"><i class="material-icons">home</i> Dashboard</a></li>
                        <li>
                             <a href="#" class="material-ripple"><i class="material-icons">home</i>Leads<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">

                                <li><a href="<?php echo base_url()?>admin/view_lead">View Leads</a></li>
                                </ul>
                         </li>

                         <li>
                             <a href="#" class="material-ripple"><i class="material-icons">home</i>RFQ<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">

                                <li><a href="<?php echo base_url()?>admin/view_rfq">View RFQ</a></li>
                                </ul>

                         </li>


                    <?php endif ?>

                    <?php if ($_SESSION['client_id']): ?>

<ul class="nav" id="side-menu">

                        <li><a href="<?php echo base_url() ?>admin/client_index" class="fa fa-icon"><i class="fa fa-home"></i> &nbsp;Home</a></li>
                        <li><a href="<?php echo base_url() ?>admin/new_case_request" class="fa fa-icon"><i class="fa fa-file-text-o"></i> &nbsp;Create Case</a></li>
                        <li><a href="<?php echo base_url() ?>admin/case_dashboard" class="material-ripple"><i class="material-icons">dashboard</i> Case Dashboard</a></li>
                        <li><a href="<?php echo base_url() ?>admin/panding_case" class="material-ripple"><i class="material-icons">dashboard</i> Pending Case</a></li>
                        <li><a href="#" class="fa fa-icon"><i class="fa fa-calculator" style="color: red"></i> Price Calculator</a></li>
                        <li><a href="<?php echo base_url() ?>admin/case_analytics/<?php echo $_SESSION['client_id'] ?>" class="fa fa-icon"><i class="fa fa-newspaper-o" style="color: #212eaf;"></i>Case Analysis</a></li>
                        <li><a href="<?php echo base_url() ?>admin/client_detail_case/<?php echo $_SESSION['client_id'] ?>" class="fa fa-icon"><i class="fa fa-newspaper-o" style="color: #212eaf;"></i>Invoice</a></li>
                        <li><a href="<?php echo base_url() ?>admin/view_report_submission" class="fa fa-icon"><i class="fa fa-file-o" style="color: #212eaf;"></i>View Reports</a></li>
                        <li><a href="<?php echo base_url() ?>admin/feed_back" class="fa fa-icon"><i class="fa fa-comments"></i>&nbsp;General Feedback</a></li>
                          <li><a href="<?php echo base_url() ?>admin/cancel_request" class="material-ripple"><i class="material-icons" style="color: red;">cancel</i> Cancel Requests</a></li>



                        <!--
                          <li>
                             <a href="#" class="material-ripple"><i class="material-icons">home</i>Customer<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url() ?>admin/view_customer">View Customer</a></li>
                                <li><a href="#">Create Customer</a></li>
                                </ul>

                         </li> -->



<?php endif ?>
 <?php if ($_SESSION['client_id'] &&  ($_SESSION['is_parent']== "1")) : ?>

<ul class="nav" id="side-menu">


                         <li>
                            <a href="<?php echo base_url() ?>admin/view_sub_client1" class="fa fa-icon"><i class="fa fa-check"></i>View Sub Clients</a>
                        </li>



                        <!--
                          <li>
                             <a href="#" class="material-ripple"><i class="material-icons">home</i>Customer<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url() ?>admin/view_customer">View Customer</a></li>
                                <li><a href="#">Create Customer</a></li>
                                </ul>

                         </li> -->



<?php endif ?>
<?php if ($_SESSION['role']== "TL" || $_SESSION['role']== "CM" || $_SESSION['role']== "manager" || $_SESSION['role']== "TM"): ?>

<ul class="nav" id="side-menu">

                        <li><a href="<?php echo base_url() ?>admin/employee_dashboard" class="fa fa-icon"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="<?php echo base_url() ?>admin/screening_operation" class="fa fa-icon"><i class="fa fa-file-text-o"></i> ITGS Operations</a></li>
                        <li><a href="<?php echo base_url() ?>admin/view_report_submission" class="fa fa-icon"><i class="fa fa-file-o" style="color: #212eaf;"></i>View Reports</a></li>
                        <li><a href="<?php echo base_url() ?>admin/job_dashboard" class="fa fa-icon"><i class="fa fa-file-text-o"></i> My Jobs</a></li>
                        <li><a href="#" class="fa fa-icon"><i class="fa fa-pencil"></i> Human Resource</a></li>
                        <li><a href="#" class="material-ripple"><i class="material-icons">dashboard</i> Information Technology</a></li>
                        <li><a href="#" class="fa fa-icon"><i class="fa fa-calculator" style="color: red"></i> Meeting Manager</a></li>

<li><a href="<?php echo base_url() ?>admin/case_analytics_team/<?php echo $_SESSION['id'] ?>" class="fa fa-icon"><i class="fa fa-newspaper-o" style="color: #212eaf;"></i>Case Analysis</a></li>
<li><a href="<?php echo base_url('admin/interview_calender') ?>" class="fa fa-icon"><i class="fa fa-pencil"></i> Inteview Calendar</a></li>
<?php if ($_SESSION['role']=='CM'): ?>
                        <li><a href="<?php echo base_url() ?>admin/view_teamlead" class="fa fa-icon"><i class="fa fa-calculator" style="color: red"></i> View Teamlead</a></li>

                        <li>
                            <a href="#" class="material-ripple"><img src="<?php echo base_url() ?>admin_assets/icon/performance_review.png">  Performance Review<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url() ?>admin/performance_evolution">Performance Evolution</a></li>
                                <li><a href="<?php echo base_url() ?>admin/complated_review">Complated Review</a></li>
                            </ul>

                        </li>

<?php endif ?>
                        <li><a href="<?php echo base_url()?>admin/cancel_request_employee" class="material-ripple"><i class="material-icons" style="color: red">cancel</i> Cancel Request</a></li>

                        <li><a href="#" class="fa fa-icon"><i class="fa fa-comments"></i>General Feedback</a></li>

<hr>

                       <!-- <li><a href="<?php echo base_url() ?>admin/view_chart" class="material-ripple"><i class="material-icons">home</i>Charts</a></li> -->
                        <li><a href="<?php echo base_url() ?>admin/calender" class="material-ripple"><img src="<?php echo base_url() ?>admin_assets/icon/activity_calender.png" style="height:24px;"> Activity Calender</a></li>





                         <li>
                             <a href="#" class="material-ripple"><i class="material-icons">mode_edit</i>HR Forms<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url()?>admin/leave_application_list">Leave Application Form</a></li>
                                <li><a href="<?php echo base_url()?>admin/resignation_form">Resignation Application Form</a></li>
                                <li><a href="<?php echo base_url()?>admin/visiting_card_list">Visiting Card Form</a></li>
                                <li><a href="<?php echo base_url()?>admin/complaint_form_list">Complaint Form</a></li>
                                <li><a href="<?php echo base_url()?>admin/expense_form_list">Expense Form</a></li>
                                <li><a href="<?php echo base_url()?>admin/salary_advance_list">Salary Advance Form</a></li>
                                <li><a href="<?php echo base_url()?>admin/loan_application_list">Loan Application</a></li>
                                </ul>
                         </li>
<li>
                             <a href="#" class="material-ripple"><i class="material-icons">mode_edit</i>HR Requets Forms<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url()?>admin/leave_application_request">Leave Application Form</a></li>
                                <li><a href="<?php echo base_url()?>admin/expense_form_request">Expance Request</a></li>
                                <li><a href="<?php echo base_url()?>admin/complaint_form_request">Complaint Form Request</a></li>
                                </ul>
                         </li>
                         <!--<li>-->
                         <!--    <a href="#" class="material-ripple"><i class="material-icons">home</i>RFQ<span class="fa arrow"></span></a>-->
                         <!--    <ul class="nav nav-second-level">-->
                         <!--       <li><a href="<?php echo base_url() ?>admin/create_rfq">Create RFQ</a></li>-->
                         <!--       <li><a href="<?php echo base_url()?>admin/view_rfq">View RFQ</a></li>-->
                         <!--       </ul>-->

                         <!--</li>-->
                          <li>
                             <a href="#" class="material-ripple"><img src="<?php echo base_url() ?>admin_assets/icon/customer.png" style="height:24px;">&nbsp;Customer<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url() ?>admin/view_customer">View Customer</a></li>
                                <li><a href="#">Create Customer</a></li>
                                </ul>

                         </li>
                         <!-- <li><a href="<?php echo base_url()?>admin/view_customer"><i class="material-icons">home</i>View Customer</a></li> -->

                        <!--<li>-->
                        <!--     <a href="#" class="material-ripple"><i class="material-icons">home</i>Resource Management<span class="fa arrow"></span></a>-->
                        <!--     <ul class="nav nav-second-level">-->
                        <!--        <li><a href="#">Role Assignment</a></li>-->
                        <!--        <li><a href="#">Target KPI Allocation</a></li>-->
                        <!--        <li><a href="#">Sales Activity Tracking</a></li>-->
                        <!--        <li><a href="#">Visit/Job Description</a></li>-->
                        <!--        </ul>-->
                        <!-- </li>-->
                         <!--<li>-->
                         <!--    <a href="#" class="material-ripple"><i class="material-icons">home</i>Performance Management<span class="fa arrow"></span></a>-->
                         <!--    <ul class="nav nav-second-level">-->
                         <!--       <li><a href="#">Target Vs. Actual</a></li>-->
                         <!--       <li><a href="#">Sales Activity Overview</a></li>-->
                         <!--       <li><a href="#">Business Segment Performance</a></li>-->
                         <!--       <li><a href="#">Historic Sales View</a></li>-->
                         <!--       </ul>-->
                         <!--</li>-->
                          <li>
                             <a href="#" class="material-ripple"><img src="<?php echo base_url() ?>admin_assets/icon/Analytics.png" style="height:24px;">&nbsp;Analytics<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url('admin/case_analytics') ?>">Case Analytics</a></li>
                                <li><a href="<?php echo base_url('admin/fund_request_analytics') ?>">Fund Request Analytics</a></li>
                                <li><a href="#">Real Time analysis</a></li>
                                <li><a href="#">Reports Module</a></li>
                                <li><a href="#">Graphical Analysis</a></li>
                                </ul>
                         </li>

                         <li>
                             <a href="#" class="material-ripple"><i class="material-icons">person</i>Profile<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url('admin/view_single_leaves/'.$_SESSION['id']) ?>">Leave Balance</a></li>
                                </ul>
                                <ul class="nav nav-second-level">
                                <li><a href="#">My Qualification</a></li>
                                </ul>
                                <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url('admin/my_payslips/'.$_SESSION['id']) ?>">My Payslips</a></li>
                                </ul>
                         </li>
                         <li>
                             <a href="#" class="material-ripple"><img src="<?php echo base_url() ?>admin_assets/icon/company_information.png" style="height:24px;">&nbsp;Company Information<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li><a href="#">Memo/News</a></li>
                                </ul>
                                <ul class="nav nav-second-level">
                                <li><a href="#">Company Profile</a></li>
                                </ul>
                                <ul class="nav nav-second-level">
                                <li><a href="#">Product Profiles</a></li>
                                </ul>
                                <ul class="nav nav-second-level">
                                <li><a href="#">Management Structure</a></li>
                                </ul>
                         </li>
                         <li>
                             <a href="#" class="material-ripple"><img src="<?php echo base_url() ?>admin_assets/icon/training_development.png">Training & Development<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url() ?>admin/view_training_hr">Training Requisition</a></li>
                                </ul>
                                <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url() ?>admin/hr_calender">Training Calendar</a></li>
                                </ul>
                                <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url() ?>admin/training_lab">Training Library</a></li>
                                </ul>
                         </li>

                        <!--
                          <li>
                             <a href="#" class="material-ripple"><i class="material-icons">home</i>Customer<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url() ?>admin/view_customer">View Customer</a></li>
                                <li><a href="#">Create Customer</a></li>
                                </ul>

                         </li> -->



<?php endif ?>
<?php if ($_SESSION['role']== "PM"): ?>
<ul class="nav" id="side-menu">
    <li><a href="<?php echo base_url() ?>admin/employee_dashboard" class="fa fa-icon"><i class="fa fa-home"></i> Home</a></li>
    
    <li><a href="<?php echo base_url() ?>admin/screening_operation" class="fa fa-icon"><i class="fa fa-file-text-o"></i> ITGS Operations</a></li>

<?php endif ?>


<?php if ($_SESSION['role']== "Admin"): ?>

<ul class="nav" id="side-menu">

                         <li>
                             <a href="#" class="material-ripple"><i class="material-icons">account_circle</i>Client Creation<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url() ?>admin/client_creation_form" class="material-ripple"><i class="material-icons">perm_identity</i> Client Creation</a></li>
                                <li><a href="<?php echo base_url() ?>admin/client_creation_form1" class="material-ripple"><i class="material-icons">supervisor_account</i>Sub Client Creation</a></li>
                              </ul>

                         </li>
                         <li>
                             <a href="#" class="material-ripple"><i class="material-icons">visibility</i>View Client<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url() ?>admin/view_client_mod" class="material-ripple"><i class="material-icons">person_pin</i>View Client</a></li>
                                <li><a href="<?php echo base_url() ?>admin/view_sub_client" class="material-ripple"><i class="material-icons">streetview</i>View Sub Client</a></li>
                              </ul>

                         </li>
                        <li>
                            <a href="#" class="material-ripple"><img src="<?php echo base_url() ?>admin_assets/icon/performance_review.png">  Performance Review<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url() ?>admin/performance_evolution">Performance Evolution</a></li>
                                <li><a href="<?php echo base_url() ?>admin/complated_review">Complated Review</a></li>
                            </ul>

                        </li>
                         <li>
                             <a href="#" class="material-ripple"><i class="material-icons">home</i>HR Request Forms<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url()?>admin/complaint_form_request">Complaint Form Request</a></li>
                                <li><a href="<?php echo base_url()?>admin/visiting_card_request">Visiting Card Request</a></li>
                                <li><a href="<?php echo base_url()?>admin/loan_application_request">Loan Application Request</a></li>
                                <li><a href="<?php echo base_url()?>admin/salary_advance_request">Salary Advance Request</a></li>
                                <li><a href="<?php echo base_url()?>admin/expense_form_request_admin">Expance Request</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo base_url() ?>admin/admin_creation" class="fa fa-icon"><i class="fa fa-file-text-o"></i> Employee Creation</a></li>
                        <li><a href="<?php echo base_url() ?>admin/vendor_creation" class="fa fa-icon"><i class="fa fa-file-text-o"></i> Vendor Creation</a></li>
                       <li><a href="<?php echo base_url() ?>admin/view_vendor_modal" class="fa fa-view"><i class="fa fa-file-text-o"></i>View Vendor</a></li>
                       <li><a href="<?php echo base_url() ?>admin/view_employee_modal" class="fa fa-view"><i class="fa fa-file-text-o"></i>View Employee</a></li>

                       <li><a href="<?php echo base_url() ?>admin/view_employee_request" class="fa fa-view"><i class="fa fa-file-text-o"></i>Employee Creation Request</a></li>
                       <li><a href="<?php echo base_url() ?>admin/change_admin_password" class="fa fa-view"><i class="fa fa-file-text-o"></i>Change Password</a></li>





<?php endif ?>
<?php if ($_SESSION['role']== "TM" || $_SESSION['role']== "IT Executive" || $_SESSION['role']== "Manager Finance" || $_SESSION['role']== "Internal Auditor"): ?>

<ul class="nav" id="side-menu">

                        <li><a href="<?php echo base_url() ?>admin/employee_dashboard" class="fa fa-icon"><i class="fa fa-home"></i> Home</a></li>
                        <?php if ($_SESSION['role']== "Internal Auditor") {?>
                        <li><a href="<?php echo base_url() ?>admin/job_dashboard" class="fa fa-icon"><i class="fa fa-file-text-o"></i> Internal Fund Request</a></li>
                        <?php } else{ ?>
                        <li><a href="<?php echo base_url() ?>admin/job_dashboard" class="fa fa-icon"><i class="fa fa-file-text-o"></i> Internal Fund Request</a></li>
                        <?php } ?>
                        <?php if ($_SESSION['role']== "TM" ) {?>
                        <li><a href="<?php echo base_url() ?>admin/fund_request" class="fa fa-icon"><i class="fa fa-file-text-o"></i> Fund Request</a></li>
                        <li><a href="<?php echo base_url('admin/activity_analytics_team/'.$_SESSION['id']) ?>" class="fa fa-icon"><i class="fa fa-newspaper-o" style="color: #212eaf;"></i>Activity Analytics</a></li>
                        <li><a href="<?php echo base_url('admin/interview_calender') ?>" class="fa fa-icon"><i class="fa fa-pencil"></i> Inteview Calendar</a></li>
                        <?php } ?>
<?php if ($_SESSION['role']== "Manager Finance") {?>
<li><a href="<?php echo base_url() ?>admin/case_fund_request" class="fa fa-icon"><i class="fa fa-file-text-o"></i> External Fund Request</a></li>

<?php } ?>
<?php if ($_SESSION['role']== "Internal Auditor") {?>
<li><a href="<?php echo base_url() ?>admin/case_fund_request" class="fa fa-icon"><i class="fa fa-file-text-o"></i>External Fund Request</a></li>
<?php } ?>
                        <li><a href="#" class="fa fa-icon"><i class="fa fa-calculator" style="color: red"></i>Meeting Manager</a></li>


                        <li><a href="#" class="fa fa-icon"><i class="fa fa-comments"></i>General Feedback</a></li>

<hr>



                         
                     
                         
                         <li>
                             <a href="#" class="material-ripple"><i class="material-icons">home</i>HR Forms<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url()?>admin/leave_application_list">Leave Application Form</a></li>
                                <li><a href="<?php echo base_url()?>admin/resignation_form">Resignation Application Form</a></li>
                                <li><a href="<?php echo base_url()?>admin/visiting_card_list">Visiting Card Form</a></li>
                                <li><a href="<?php echo base_url()?>admin/complaint_form_list">Complaint Form</a></li>
                                <li><a href="<?php echo base_url()?>admin/expense_form_list">Expense Form</a></li>
                                <li><a href="<?php echo base_url()?>admin/salary_advance_list">Salary Advance Form</a></li>
                                <li><a href="<?php echo base_url()?>admin/loan_application_list">Loan Application</a></li>
                                </ul>
                         </li>
                         <?php if($_SESSION['role']=="CM"){

            ?>

            <?php } ?>
                         <?php if($_SESSION['role']=="Manager Finance"){
            ?>
            <li>
                <a href="<?php echo base_url() ?>admin/cases" class="material-ripple"><i class="material-icons">group_work</i>  Cases Transition </a>
            </li>
                          <li>
                             <a href="#" class="material-ripple"><i class="material-icons">home</i>HR Requets Forms<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url()?>admin/leave_application_finance">Leave Application Request</a></li>
                                <li><a href="<?php echo base_url()?>admin/load_application_finance">Loan Application Request</a></li>
                                <li><a href="<?php echo base_url()?>admin/salary_advance_finance">Salary Advance Request</a></li>
                            </ul>
                         </li>
                         <!-- baqar work -->
                         <li>
                             <a href="#" class="material-ripple"><i class="material-icons">home</i>
                                 Financial Reports<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url()?>admin/case_report">All Case Master Analysis</a></li>
                                <!-- <li><a href="<?php echo base_url()?>admin/subject_report">All Subject</a></li>
                                <li><a href="<?php echo base_url()?>admin/activity_report">All Activity</a></li> -->
                                <li><a href="<?php echo base_url()?>admin/profit_loss_report">Profit & Loss Report</a></li>
                                <!-- <li><a href="<?php echo base_url()?>admin/monthly_assessment">Monthly Assessment</a></li>
                                <li><a href="<?php echo base_url()?>admin/monthly_bills">Monthly Assessment Bills</a></li> -->
                                <li><a href="<?php echo base_url()?>admin/cash_date">Date Wise Cash Out</a></li>
                                <li><a href="<?php echo base_url()?>admin/payorder_date">Date Wise Payorder</a></li>
                                <!-- <li><a href="<?php echo base_url()?>admin/cash_client">Client Wise Cash Out</a></li>
                                <li><a href="<?php echo base_url()?>admin/cash_service">Service Wise Cash Out</a></li> -->
                                </ul>
                         </li>
                         <!-- baqar work end-->

                          <!-- <li>
                             <a href="#" class="material-ripple"><i class="material-icons">home</i>Reporting<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url()?>admin/case_report">All Case</a></li>
                                <li><a href="<?php echo base_url()?>admin/subject_report">All Subject</a></li>
                                <li><a href="<?php echo base_url()?>admin/activity_report">All Activity</a></li>
                                <li><a href="<?php echo base_url()?>admin/profit_loss_report">Profit & Loss Report</a></li>
                                <li><a href="<?php echo base_url()?>admin/monthly_assessment">Monthly Assessment</a></li>
                                <li><a href="<?php echo base_url()?>admin/monthly_bills">Monthly Assessment Bills</a></li>
                                <li><a href="<?php echo base_url()?>admin/cash_date">Date Wise Cash Out</a></li>
                                <li><a href="<?php echo base_url()?>admin/payorder_date">Date Wise Payorder</a></li>
                                <li><a href="<?php echo base_url()?>admin/cash_client">Client Wise Cash Out</a></li>
                                <li><a href="<?php echo base_url()?>admin/cash_service">Service Wise Cash Out</a></li>
                                </ul>
                         </li> -->
                         <!-- baqar Commt -->
                        <!--  <li>
                            <a href="#" class="material-ripple"><i class="material-icons">home</i>  Case Invoice<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url('admin/case_invoice') ?>">Case Invoice</a></li>
                                <li><a href="<?php echo base_url('admin/sales_invoice') ?>">Sales Invoice</a></li>
                            </ul>
                        </li> -->
                        <li>
                            <a href="#" class="material-ripple"><i class="material-icons">home</i>  Vendor Analysis<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url('admin/case_vendor_invoice') ?>">Case Vendor Invoice</a></li>
                                <li><a href="<?php echo base_url('admin/vendor_payment_invoice') ?>">Vendor Payment Invoice</a></li>
                                <li><a href="<?php echo base_url('admin/vendor_invoice_view') ?>">Vendor Invoice History</a></li>
                            </ul>
                        </li>
                        <!-- baqar commt -->
                        <li>
                            <a href="#" class="material-ripple"><i class="material-icons">home</i>  Customer Analysis<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                               <li><a href="<?php echo base_url('admin/master_amount') ?>">Master Receivable</a></li>
                               <li><a href="<?php echo base_url('admin/case_invoice') ?>">Case Invoice</a></li>
                               <li><a href="<?php echo base_url('admin/sales_invoice') ?>">Customer Sales Invoice</a>
                               </li>
                               <li><a href="<?php echo base_url('admin/client_invoice_view') ?>">Client Invoice History</a>
                               </li>
                            </ul>
                        </li>
                        <!-- <li>
                            <a href="#" class="material-ripple"><i class="material-icons">home</i>  Invoices<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url('admin/courier_invoice') ?>">Courier Invoice</a></li>
                                <li><a href="<?php echo base_url('admin/profit_lose_invoice') ?>">Profit and Lose Invoice</a></li>
                                <li><a href="<?php echo base_url('admin/office_fee') ?>">Office Fee Analysis</a></li>
                                <li><a href="<?php echo base_url('admin/master_amount') ?>">Master Receivable</a></li>
                            </ul>
                        </li> -->
                         <li>
                            <a class="material-ripple" href="#"><img src="<?php echo base_url() ?>admin_assets/icon/reporting_hierarcy.png">  Payrole<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url('admin/payrole') ?>">Payrole</a></li>
                                <li><a href="<?php echo base_url('admin/view_payrole') ?>">View Payrole</a></li>
                            </ul>
                        </li>
                        <?php } ?>

                          <li>
                             <a href="#" class="material-ripple"><i class="material-icons">home</i>Customer<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url() ?>admin/view_customer">View Customer</a></li>
                                <li><a href="#">Create Customer</a></li>
                                </ul>

                         </li>

                          <li>
                             <a href="#" class="material-ripple"><i class="material-icons">home</i>Analytics<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url('admin/case_analytics') ?>">Case Analytics</a></li>
                                <li><a href="<?php echo base_url('admin/fund_request_analytics') ?>">Fund Request Analytics</a></li>
                                <li><a href="#">Real Time analysis</a></li>
                                <li><a href="#">Reports Module</a></li>
                                <li><a href="#">Graphical Analysis</a></li>
                                </ul>
                         </li>

                         <li>
                             <a href="#" class="material-ripple"><i class="material-icons">home</i>Profile<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url('admin/view_single_leaves/'.$_SESSION['id']) ?>">Leave Balance</a></li>
                                </ul>
                                <ul class="nav nav-second-level">
                                <li><a href="#">My Qualification</a></li>
                                </ul>
                                <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url('admin/my_payslips/'.$_SESSION['id']) ?>">My Payslips</a></li>
                                </ul>
                         </li>
 <li>
                             <a href="#" class="material-ripple"><i class="material-icons">home</i>Company Information<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li><a href="#">Memo/News</a></li>
                                </ul>
                                <ul class="nav nav-second-level">
                                <li><a href="#">Company Profile</a></li>
                                </ul>
                                <ul class="nav nav-second-level">
                                <li><a href="#">Product Profiles</a></li>
                                </ul>
                                <ul class="nav nav-second-level">
                                <li><a href="#">Management Structure</a></li>
                                </ul>
                         </li>
                         <li>
                             <a href="#" class="material-ripple"><i class="material-icons">home</i>Training & Development<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url() ?>admin/view_training_hr">Training Requisition</a></li>
                                </ul>
                                <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url() ?>admin/hr_calender">Training Calendar</a></li>
                                </ul>
                                <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url() ?>admin/training_lab">Training Library</a></li>
                                </ul>
                         </li>
                         <li><a href="#" class="fa fa-icon"><i class="fa fa-comments"></i>Check In/Out Work</a></li>
                         <li><a href="<?php echo base_url('admin/discussion_board') ?>" class="fa fa-icon"><i class="fa fa-comments"></i>Discussion Board</a></li>



<?php endif ?>
                    <?php if ($_SESSION['role']!="Hr"): ?>
                         <li <?php if ($_SESSION['client_id']) echo 'style="display: none"';?> >
                            <a class="material-ripple" href="#"><img src="<?php echo base_url() ?>admin_assets/icon/reporting_hierarcy.png"> Task Mannager<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url()?>admin/task_manager_form">Task Add</a></li>
                                <li><a href="<?php echo base_url()?>admin/task_notification_view">View Task </a></li>
                            </ul>
                        </li>
                        <li <?php if ($_SESSION['client_id']) echo 'style="display: none"';?>>
                            <a class="material-ripple" href="#"><img src="<?php echo base_url() ?>admin_assets/icon/reporting_hierarcy.png"> Memo<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                             
                             <?php if ($_SESSION['role'] == "Hr"): ?>
                                <li><a href="<?php echo base_url() ?>admin/create_memo">Create Memo</a></li>
                                    
                                <?php endif ?>
                            
                                <li><a href="<?php echo base_url()?>admin/view_memo">View Memo </a></li>
                            </ul>
                        </li>
                    <?php endif; ?>