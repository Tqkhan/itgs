<?php
error_reporting(0);

/**
*
*/
class Admin extends CI_Controller
{
	public function index()
	{
		if ($this->session->userdata('login_id')) {
			redirect(base_url().'admin/dashboard');
		}
		$this->load->view('admin/login_client');
	}
	public function sme_login()
	{
		if ($this->session->userdata('login_id')) {
			redirect(base_url().'admin/dashboard');
		}
		$this->load->view('admin/login');
	}


  public function is_login($value='')
  {
   if ($this->session->userdata('login_id')) {
   }
   elseif ($this->session->userdata('id')) {
   }
   elseif ($this->session->userdata('client_id')) {
   }
   else{
     redirect(base_url().'admin/');
   }
  }


	public function client_creation_form()
	 {
	 	$data['title']="Client Creation";
    $this->db->select('*')
             ->from('employee_itgs')
             ->where('role', 'CM')
             ->or_where('role', 'TL');
    $data['employees']=$this->db->get()->result_array();
	 	$data['countries']=$this->db->get('country')->result_array();
	 	$data['scopes']=$this->db->get('scope_of_work')->result_array();
	 	$data['services']=$this->db->get('client_services')->result_array();

	  $this->load->view('admin2/header',$data);
	  $this->load->view('admin2/client_creation_form');
	  $this->load->view('admin2/footer');

	 }
	 public function client_creation_form1()
   {

    $data['clients']= $this->db->query("SELECT * FROM `client` WHERE `sub_account` = 1 AND `is_parent` = 1 ")->result_array();
    $data['title']="Client Creation";
    $data['employees']=$this->db->get('employee_itgs')->result_array();
    $data['countries']=$this->db->get('country')->result_array();
    $data['scopes']=$this->db->get('scope_of_work')->result_array();
    $data['services']=$this->db->get('client_services')->result_array();

    $this->load->view('admin2/header',$data);
    $this->load->view('admin2/client_creation_form1');
    $this->load->view('admin2/footer');

   }
    public function test_attands()
	 {

    
	  $this->load->view('admin2/header',$data);
	  $this->load->view('admin2/test_attands');
	  $this->load->view('admin2/footer');

	 }
   public function client_index()
   {
   	if (!$_SESSION['client_id']) {
   		redirect(base_url().'admin/client_login_view');
   	}
  $this->load->view('admin2/header');
  $this->load->view('admin2/client_index');
  $this->load->view('admin2/footer');

   }

   public function new_case_request()
   {

   	if (!$_SESSION['client_id']) {
   		redirect(base_url().'admin/client_login_view');
   	}
    $data['countries']=$this->db->get('country')->result_array();

   		 	$data['services']=$this->db->query("select scope_of_work.scope_name,assign_client_services.* from scope_of_work inner join assign_client_services on(assign_client_services.scope_id=scope_of_work.id) where assign_client_services.client_id='".$_SESSION['client_id']."'")->result_array();


  $this->load->view('admin2/header',$data);
  $this->load->view('admin2/new_case_request');
  $this->load->view('admin2/footer');
   }



   // start working umer
   public function job_dashboard()
 {
  //error_reporting('-1');
//  	$where = $_SESSION['client_id'];
//   $data['cases']=$this->admin_model->get_case($where);
  // $data['cases']=$this->db->get('case_request')->result_array();
  $data['title']="Job Dashboard";
  if($_SESSION['role']=="Internal Auditor"){
  $data['jobs']=$this->db->query('select fund_request_activity.*,case_request.client_reference,case_request.reference_code,case_request.reference_code,scope_of_work.scope_name, employee_itgs.employee_name from fund_request_activity left JOIN case_request on(case_request.id=fund_request_activity.case_id) left join scope_of_work on (scope_of_work.id=fund_request_activity.activity_id) left join employee_itgs on employee_itgs.id = fund_request_activity.employe_id order by fund_request_activity.id desc')->result_array();
  }else if($_SESSION['role']=="Manager Finance"){
  $data['jobs']=$this->db->query('select fund_request_activity.*,case_request.client_reference,case_request.reference_code,scope_of_work.scope_name, count(fund_approve.id) as fid, employee_itgs.employee_name from fund_request_activity left JOIN case_request on(case_request.id=fund_request_activity.case_id) left join scope_of_work on (scope_of_work.id=fund_request_activity.activity_id) left join fund_approve on fund_approve.fund_id = fund_request_activity.id left join employee_itgs on employee_itgs.id = fund_request_activity.employe_id where fund_request_activity.is_approved = 1 GROUP BY fund_request_activity.id')->result_array();
  }else if($_SESSION['role']=="vendor"){

 $data['jobs']=$this->db->query('SELECT client.client_type,case_request.client_reference,case_request.reference_code,subject_case.subject_name,assign_vendor_request.*,scope_of_work.scope_name,case_request.id, assign_vendor_request.date_time, assign_vendor_request.is_report, assign_vendor_request.id as van_id, assign_vendor_request.file as file, sub_scope.name as sub_category from assign_vendor_request 
  inner JOIN case_request on(case_request.id=assign_vendor_request.case_id) inner JOIN subject_case on (subject_case.id=assign_vendor_request.subject_id) 
  inner JOIN client on(case_request.client_id=client.client_id) 
  inner join scope_of_work on (scope_of_work.id=assign_vendor_request.activity_id) 
  left join sub_scope on sub_scope.id = assign_vendor_request.sub_scope_id where assign_vendor_request.is_assigned = 1 and assign_vendor_request.vendor_id='.$_SESSION['id'])->result_array();
  }
  else{

    $data['jobs']=$this->db->query('SELECT client.client_type,case_request.client_reference,case_request.reference_code,subject_case.subject_name,assign_activity_to_user.*,scope_of_work.scope_name,scope_of_work.type,case_request.id,assign_activity_to_user.id as asid, count(fund_request_activity.id) as total_fund from assign_activity_to_user 

      inner JOIN case_request on(case_request.id=assign_activity_to_user.case_id) 
       INNER JOIN client on(case_request.client_id=client.client_id) 
      inner JOIN subject_case on (subject_case.id=assign_activity_to_user.subject_id) inner join scope_of_work on (scope_of_work.id=assign_activity_to_user.activity_id) left join fund_request_activity on fund_request_activity.activity_id = assign_activity_to_user.activity_id and fund_request_activity.case_id = assign_activity_to_user.case_id where assign_activity_to_user.member_id='.$_SESSION['id'].' GROUP BY assign_activity_to_user.id order by assign_activity_to_user.id desc')->result_array();


      
  }
   
  $this->load->view('admin2/header', $data);
  $this->load->view('admin2/job_dashboard');
  $this->load->view('admin2/footer');

 }
   public function profit_loss_view($case_id)
 {

  $data['title']="Job Dashboard";

  if($_SESSION['role']=="Manager Finance"){
  $data['jobs']=$this->db->query('select fund_request_activity.*,case_request.client_reference,case_request.reference_code,case_request.client_id,scope_of_work.scope_name, SUM(fund_request_activity.official_fee) as official_fee, SUM(fund_request_activity.vendor_changes) as vendor_changes, SUM(fund_request_activity.easy_paisa_charges) as easy_paisa_charges, SUM(fund_request_activity.mobi_cash_charges) as mobi_cash_charges, SUM(fund_request_activity.bank_commission) as bank_commission, SUM(fund_request_activity.postage_courier) as postage_courier, SUM(fund_request_activity.other_charges) as other_charges from fund_request_activity inner JOIN case_request on(case_request.id=fund_request_activity.case_id) inner join scope_of_work on (scope_of_work.id=fund_request_activity.activity_id) where fund_request_activity.case_id='.$case_id.' GROUP BY fund_request_activity.activity_id')->result_array();
  }

  $this->load->view('admin2/header', $data);
  $this->load->view('admin2/profit_loss_view');
  $this->load->view('admin2/footer');

 }

   // start working umer
   public function report_finance()
 {
  $data['title']="Finance Report";

  $data['cases']=$this->db->get('case_request')->result_array();
  $this->load->view('admin2/header', $data);
  $this->load->view('admin2/report_finance');
  $this->load->view('admin2/footer');

 }
    public function view_emp()
	{
    $data['cvs'] = $this->admin_model->select_where('recruitment',array('status' => '1'));
    for ($i=0; $i < sizeof($data['cvs']); $i++) { 
      $data['cvs'][$i]['interview'] = $this->admin_model->get_int_status($data['cvs'][$i]['id']);
    }
 
    $data['employees'] = $this->admin_model->get_data('employee_itgs');
		$this->load->view('admin2/header');
		$this->load->view('admin2/view_emp', $data);
		$this->load->view('admin2/footer');

	}
   public function all_cv()
	{
    if ($this->input->post('start_date') != null && $this->input->post('start_date') != '') {
      $old_date = $this->input->post('start_date');
      $old_date_timestamp = strtotime($old_date);
      $start_date = date('Y-m-d', $old_date_timestamp);
      $old_date = $this->input->post('end_date');
      $old_date_timestamp = strtotime($old_date);
      $end_date = date('Y-m-d', $old_date_timestamp);
      $data['cvs'] = $this->admin_model->select_cv($start_date,$end_date);
    }
    else{
      $data['cvs'] = $this->admin_model->all_rows('recruitment');
    }
 		$this->load->view('admin2/header');
		$this->load->view('admin2/all_cv', $data);
		$this->load->view('admin2/footer');

	}
	public function interview_step_1()
	{
    if ($_SESSION['role'] == 'Hr') {
      $data['cvs'] = $this->admin_model->get_interviews();
    }
    else{
      $data['cvs'] = $this->admin_model->get_interviews($_SESSION['id']);
    }
    for ($i=0; $i < sizeof($data['cvs']); $i++) { 
      $data['cvs'][$i]['interview'] = $this->admin_model->get_int_status($data['cvs'][$i]['id']);
    }
		$this->load->view('admin2/header');
		$this->load->view('admin2/interview_step_1', $data);
		$this->load->view('admin2/footer');

	}
	public function interview_step_2()
	{
    $data['cvs'] = $this->admin_model->get_interviews_byid();
    $data['employees'] = $this->admin_model->get_data('employee_itgs');
		$this->load->view('admin2/header');
		$this->load->view('admin2/interview_step_2', $data);
		$this->load->view('admin2/footer');

	}
    public function admin_creation($id = null)
   {
    if ($id != null) {
      $data['employee'] = $this->admin_model->get_employee_id($id);
    }
    $data['employees']=$this->admin_model->get_data('employee_itgs');
  $this->load->view('admin2/header');
  $this->load->view('admin2/admin_creation',$data);
  $this->load->view('admin2/footer');

   }
   public function admin_dashboard()
   {
    
        if ($_SESSION['id']) {
           $user_id=$_SESSION['id'];
        }if ($_SESSION['login_id']) {
           $user_id=$_SESSION['login_id'];
        }
          
          
            $data['memos']=$this->db->query("select e1.employee_name as assigned_by,e1.id as user_id, memo.*,memo_user.userID as assigned_to, GROUP_CONCAT(e2.employee_name separator ',') as employe_user from memo inner join employee_itgs e1 on (memo.user_id=e1.id) inner join memo_user on (memo_user.memoID=memo.id)
            inner join employee_itgs e2 on(memo_user.userID = e2.id) where memo.user_id=".$user_id ." or memo_user.userID=".$user_id." group by memo.id")->result_array();
      
        

    $this->is_login();
  $this->load->view('admin2/header');
  $this->load->view('admin2/admin_dashboard',$data);
  $this->load->view('admin2/footer');

   }
   public function admin_dashboard1()
   {

  $this->load->view('admin2/header');
  $this->load->view('admin2/admin_dashboard1');
  $this->load->view('admin2/footer');

   }
public function insert_modal_value()
 {


$case_id=$_POST['case_id'];
   $data_modal = array(
    'case_id'=>$this->input->post('case_id_cancel'),
    'client_id'=>$this->input->post('client_id'),
    'itgs_reference'=>$this->input->post('itgs_reference'),
    'client_ref'=>$this->input->post('client_ref'),
    'reason'=>implode(",",$this->input->post('reason[]')),
    'other_specification'=>$this->input->post('other_specify'),
    'suggestion'=>$this->input->post('suggestion'),
    'cancel_time' => date('Y-m-d H:i:s')

  );
   $this->db->insert("modal_form1", $data_modal);
   $emails['data'] = array(
      'client_reference'=>$this->input->post('client_ref'),
      'reference_code'=>$this->input->post('itgs_reference'),
      'case_id'=>$this->input->post('case_id_cancel')
    );
    $message = $this->load->view('emails/case_cancel',$emails);
    $message = $message->output->final_output;
    $employee = $this->admin_model->get_employee_email($_SESSION['client_id']);
  
    $this->sendmail('verify@itgsgroup.com',$employee[0]['login_name'],'Visiting Cancel Case Request',$message);
      redirect(base_url().'admin/new_case_request?case_id='.$case_id);

   redirect(base_url().'admin/case_dashboard');
 }
 public function cancel_request()
 {
  $data['requests']=$this->db->query("select case_request.case_status,modal_form1.* from modal_form1 inner join case_request on (case_request.id=modal_form1.case_id) where modal_form1.client_id='".$_SESSION['client_id']."'")->result_array();
  $this->load->view('admin2/header',$data);
  $this->load->view('admin2/cancel_request');
  $this->load->view('admin2/footer');
 }
 public function cancel_request_employee()
 {
  $data['requests']=$this->db->query("select client.*,modal_form1.*, case_request.* from client inner join modal_form1 on (client.client_id = modal_form1.client_id) INNER JOIN case_request ON (case_request.id = modal_form1.case_id) where client.employee_id='".$_SESSION['id']."' ")->result_array();
  $this->load->view('admin2/header',$data);
  $this->load->view('admin2/cancel_request_employee');
  $this->load->view('admin2/footer');
 }
 public function view_report_submission($case_id='')
 {
  if ($_SESSION['client_id']){
    if($case_id!=''){
    $data['requests']=$this->db->query("select case_request.client_id,case_request.client_reference,case_request.reference_code,case_report.* from case_request inner join client on client.client_id = case_request.client_id left join case_team on case_team.case_id = case_request.id inner join case_report on (case_request.id = case_report.case_id) where case_request.client_id ='".$_SESSION['client_id']."' and case_report.case_id='".$case_id."' GROUP BY case_report.id")->result_array();
    //print_r($this->db->last_query());die;
    }else{
    $data['requests']=$this->db->query("select case_request.client_id,case_request.client_reference,case_request.reference_code,case_report.* from case_request inner join client on client.client_id = case_request.client_id  left join case_team on case_team.case_id = case_request.id inner join case_report on (case_request.id = case_report.case_id) where case_request.client_id ='".$_SESSION['client_id']."' GROUP BY case_report.id")->result_array();
    }
  }
  else {
    if($case_id!=''){
    $data['requests']=$this->db->query("select case_request.client_id,case_request.client_reference,case_request.reference_code,case_report.* from case_request inner join client on client.client_id = case_request.client_id left join case_team on case_team.case_id = case_request.id inner join case_report on (case_request.id = case_report.case_id) where client.employee_id ='".$_SESSION['id']."' and case_report.case_id='".$case_id."' GROUP BY case_report.id")->result_array();
    //print_r($this->db->last_query());die;
    }else{
    $data['requests']=$this->db->query("select case_request.client_id,case_request.client_reference,case_request.reference_code,case_report.* from case_request inner join client on client.client_id = case_request.client_id  left join case_team on case_team.case_id = case_request.id inner join case_report on (case_request.id = case_report.case_id) where client.employee_id ='".$_SESSION['id']."' GROUP BY case_report.id")->result_array();
    }
  }
  $this->load->view('admin2/header',$data);
  $this->load->view('admin2/view_report_submission');
  $this->load->view('admin2/footer');
 }

 public function view_employee_modal()
   {
   	$data['employees']=$this->db->get('employee_itgs')->result_array();
   $this->load->view('admin2/header',$data);
  $this->load->view('admin2/view_employee_modal');
  $this->load->view('admin2/footer');
   }

   public function emp_delete($id)
   {
     $this->admin_model->delete_data('employee_itgs',array('id'=>$id));
     redirect('view_employee_modal');
   }

   public function view_vendor_modal()
   {
    $data['employees']=$this->admin_model->select_where('employee_itgs',array('role' => 'vendor'));
   $this->load->view('admin2/header',$data);
  $this->load->view('admin2/view_vendor_modal');
  $this->load->view('admin2/footer');
   }

   public function view_client_mod()
   {
   	$data['clients']=$this->db->get('client')->result_array();
    $this->load->view('admin2/header',$data);
    $this->load->view('admin2/view_client_mod');
    $this->load->view('admin2/footer');
   }
   public function view_sub_client()
   {
   	$data['clients']=$this->db->query("SELECT C.*, parent.client_name as parents FROM `client` AS C JOIN client AS parent ON parent.client_id = C.parent_id WHERE C.parent_id != 0 ")->result_array();
    $this->load->view('admin2/header',$data);
    $this->load->view('admin2/view_sub_client');
    $this->load->view('admin2/footer');
   }
   public function view_sub_client1()
   {
   	$data['clients']=$this->db->query("SELECT C.*, parent.client_name as parents FROM `client` AS C JOIN client AS parent ON parent.client_id = C.parent_id WHERE C.parent_id != 0 AND parent.client_id ='".$_SESSION['client_id']."' ")->result_array();
    $this->load->view('admin2/header',$data);
    $this->load->view('admin2/view_sub_client1');
    $this->load->view('admin2/footer');
   }


 public function insert_report(){

     $data['case_id']=$_POST['case_id_report'];
     $data['remarks']=$_POST['remarks'];
     $data['employee_id']=$_POST['employee_id'];
     $u_id = $_POST['c_id'];
      $u_type = 'client';
      $url = 'view_report_submission';
     $data['date_time']=date("d-m-Y h:i:s a");
     $ids = explode(',', $_POST['file_id']);
      $file_links = $this->admin_model->get_image_link($ids);
      $links = array();
      for ($p=0; $p < sizeof($file_links); $p++) { 
        $links[] = $file_links[$p]['file'];
      }
      $data['attachment']=implode(',', $links);
     

     if($this->db->insert('case_report',$data)){
      $notification = array(
        'user_id'=>$u_id,
        'user_type'=>$u_type,
        'title' => 'New Report Submission',
        'message'=>date('Y-m-d'),
        'url'=>'admin/'.$url
      );
      $this->admin_model->insert_data("notifications",$notification);
      $case_detail = $this->admin_model->select_where('case_request',array('id'=>$this->input->post('case_id_report')));
      $emails['data'] = array(
        'client_reference'=>$case_detail[0]['client_reference'],
        'reference_code'=>$case_detail[0]['reference_code'],
        'case_id'=>$this->input->post('case_id_report')
      );
      $message = $this->load->view('emails/case_report',$emails);
      $message = $message->output->final_output;
      $employee = $this->admin_model->get_client_email($_POST['case_id_report']);
      $this->sendmail($employee[0]['login_name'],$employee[0]['email'],'Visiting Case Submit Report',$message,$employee[0]['notification_email']);

        $this->db->update('case_request',['case_status'=>5],['id'=>$_POST['case_id_report']]);
        $client = $this->admin_model->select_where('case_request', array('id'=>$_POST['case_id_report']));
        $u_id = $client[0]['client_id'];
        $notification = array(
          'user_id'=>$u_id,
          'user_type'=>'client',
          'title' => 'Case Complete',
          'message'=>date('Y-m-d'),
          'url'=>'admin/form1/'.$_POST['case_id_report']
        );
        $this->admin_model->insert_data("notifications",$notification);
        if ($_SESSION['role'] == 'vendor') {
          redirect('admin/job_dashboard/');
        }
        else{
          redirect('admin/screening_operation/');
        }
      
     }else{
        if ($_SESSION['role'] == 'vendor') {
          redirect('admin/job_dashboard/');
        }
        else{
          redirect('admin/screening_operation/');
        }
        
     }

 }








public function step2($case_id)
 {
   $data['client_details']=$this->db->query("select case_request.*,client.client_name,client.service_id,client.email,client.client_type,client.country_id,client.status,country.country_name,country.country_code from client inner join case_request on (case_request.client_id=client.client_id) INNER JOIN country ON (country.id=client.country_id) where case_request.id='".$case_id."'")->row_array();
   $data['subjects']=$this->db->get_where("subject_case",['case_id'=>$case_id])->result_array();
   $data['services']=$this->db->query("select scope_of_work.scope_name,assign_client_services.* from scope_of_work inner join assign_client_services on(assign_client_services.scope_id=scope_of_work.id) where assign_client_services.client_id='".$_SESSION['client_id']."'")->result_array();

  $this->load->view('admin2/header',$data);
  $this->load->view('admin2/step2');
  $this->load->view('admin2/footer');

 }
   public function form1($case_id)
 {
   $data['client_details']=$this->db->query("select case_request.*,client.client_name,client.service_id,client.email,client.client_type,client.country_id,client.status,country.country_name,country.country_code from client inner join case_request on (case_request.client_id=client.client_id) INNER JOIN country ON (country.id=client.country_id) where case_request.id='".$case_id."'")->row_array();
   $data['subjects']=$this->db->get_where("subject_case",['case_id'=>$case_id])->result_array();

  $this->load->view('admin2/header',$data);
  $this->load->view('admin2/form1');
  $this->load->view('admin2/footer');

 }

   public function fund_request_view($case_id,$request_id)
 {
   $data['client_details']=$this->db->query("select case_request.*,client.client_name,client.service_id,client.email,client.client_type,client.country_id,client.status,country.country_name,country.country_code from client inner join case_request on (case_request.client_id=client.client_id) INNER JOIN country ON (country.id=client.country_id) where case_request.id='".$case_id."'")->row_array();
   $data['subjects']=$this->db->get_where("subject_case",['case_id'=>$case_id])->result_array();

   $data['funds']=$this->db->query('select fund_request_activity.*,case_request.client_reference,case_request.reference_code,scope_of_work.scope_name,subject_case.subject_name from fund_request_activity inner JOIN case_request on(case_request.id=fund_request_activity.case_id) inner join scope_of_work on (scope_of_work.id=fund_request_activity.activity_id) inner join subject_case on (subject_case.id=fund_request_activity.subject_id) where fund_request_activity.case_id='.$case_id)->result_array();

  $this->load->view('admin2/header',$data);
  $this->load->view('admin2/fund_request_view');
  $this->load->view('admin2/footer');

 }


 public function fund_request_update(){

     $this->db->update('fund_request_activity',['is_approved'=>$_GET['status']],['id'=>$_GET['request_id'],'case_id'=>$_GET['case_id']]);
     if($this->db->affected_rows()>0){
         redirect(base_url().'admin/job_dashboard');
     }else{
         redirect(base_url().'admin/job_dashboard');

     }

 }

   public function edit_case_request($case_id)
 {
   $data['client_details']=$this->db->query("select case_request.*,client.*,country.country_name,country.country_code from client inner join case_request on (case_request.client_id=client.client_id) INNER JOIN country ON (country.id=client.country_id) where case_request.id='".$case_id."'")->row_array();
   $data['subjects']=$this->db->get_where("subject_case",['case_id'=>$case_id])->result_array();
$data['services']=$this->db->query("select scope_of_work.scope_name,assign_client_services.* from scope_of_work inner join assign_client_services on(assign_client_services.scope_id=scope_of_work.id) where assign_client_services.client_id='".$_SESSION['client_id']."'")->result_array();
  $this->load->view('admin2/header',$data);
  $this->load->view('admin2/edit_case_request');
  $this->load->view('admin2/footer');

 }
 public function case_dashboard()
 {
 	$where = $_SESSION['client_id'];
  $data['cases']=$this->admin_model->get_case($where);
  // $data['cases']=$this->db->get('case_request')->result_array();
  //echo '<pre>';print_r($data);die;
  $this->load->view('admin2/header');
  $this->load->view('admin2/case_dashboard', $data);
  $this->load->view('admin2/footer');

 }

 public function panding_case()
 {
  $where = $_SESSION['client_id'];
  $data['cases']=$this->admin_model->select_where('case_request',array('client_id'=>$where,'case_status'=>0));
 
  $this->load->view('admin2/header');
  $this->load->view('admin2/panding_case', $data);
  $this->load->view('admin2/footer');

 }

 public function case_dashboard1($client_id)
 {
  

  $data['cases'] = $this->db->query("SELECT client.*, case_request.* from case_request INNER JOIN client ON case_request.client_id = client.client_id where case_request.client_id='".$client_id."' and case_request.case_status!=0 order by case_request.id DESC")->result_array();

  $this->load->view('admin2/header');
  $this->load->view('admin2/case_dashboard1', $data);
  $this->load->view('admin2/footer');
}

 public function screening_operation()
 {
 	$where = $_SESSION['client_id'];
  if (empty($this->input->post())) {
   
     if($_SESSION['role']=="PM"){

      if($_GET['reference_code']){
    $data['cases']=$this->db->query("SELECT client.*, case_request.*,count(client_chat.id) as chat from case_request INNER JOIN client ON case_request.client_id = client.client_id  left join client_chat on client_chat.case_id = case_request.id and is_view = 0 and type = 'employee' left join case_team on case_team.case_id = case_request.id where case_request.reference_code='".$_GET['reference_code']."' GROUP BY case_request.id ")->result_array();
      }else{


 $data['cases']=$this->db->query("SELECT client.*, case_request.*,count(client_chat.id) as chat from case_request INNER JOIN client ON case_request.client_id = client.client_id  left join client_chat on client_chat.case_id = case_request.id and is_view = 0 and type = 'employee' left join case_team on case_team.case_id = case_request.id where case_request.price_assigned=0 GROUP BY case_request.id ")->result_array();
     }
     }
     else{
    $data['cases']=$this->db->query("SELECT client.*, case_request.*,count(client_chat.id) as chat from case_request INNER JOIN client ON case_request.client_id = client.client_id  left join client_chat on client_chat.case_id = case_request.id and is_view = 0 and type = 'employee' left join case_team on case_team.case_id = case_request.id where (client.employee_id='".$_SESSION['id']."' OR case_team.team_lead_id='".$_SESSION['id']."') and case_request.case_status!=0 GROUP BY case_request.id ")->result_array();
  }
  }
  else{
    $where = array(); 
    $status = $this->input->post('status');
    if ($status) {
      $where[] = "case_request.case_status = '".$status."'";
    }
    $start_date = $this->input->post('start_date');
    if ($start_date) {
      $start_date = date('Y-m-d', strtotime($start_date));
      $where[] = "case_request.created_at >= '".$start_date."'";
    }
    $end_date = $this->input->post('end_date');
    if ($end_date) {
      $end_date = date('Y-m-d', strtotime($end_date));
      $where[] = "case_request.created_at <= '".$end_date."'";
    }
    
    if ($where) {
      $where = 'AND '.implode(' AND ', $where);
    }
    else{
      $where = '';
    }
  
    $data['cases']=$this->db->query("SELECT client.*, case_request.*,count(client_chat.id) as chat from case_request INNER JOIN client ON case_request.client_id = client.client_id left join client_chat on client_chat.case_id = case_request.id and is_view = 0 and type = 'employee' left join case_team on case_team.case_id = case_request.id where (client.employee_id='".$_SESSION['id']."' OR case_team.team_lead_id='".$_SESSION['id']."') and case_request.case_status!=0 ".$where." GROUP BY case_request.id ")->result_array();
  }
  $data['members']=$this->db->query("SELECT * FROM `employee_itgs` WHERE `role` = 'vendor'")->result_array();
  $this->load->view('admin2/header');
  $this->load->view('admin2/screening_operation', $data);
  $this->load->view('admin2/footer');

 }



 public function view_teamlead()
 {
  $data['team_lead']=$this->db->get_where('employee_itgs',['role'=>'TM','department'=>$_SESSION['department']])->result_array();

  $this->load->view('admin2/header');
  $this->load->view('admin2/view_teamlead', $data);
  $this->load->view('admin2/footer');

 }

 public function assign_case_to_tl($teamleadID)
 {

$data['cases']=$this->db->query("SELECT client.*, case_request.* from case_request INNER JOIN client ON case_request.client_id = client.client_id where client.service_id like '%$_SESSION[department]%' ")->result_array();



  $this->load->view('admin2/header');
  $this->load->view('admin2/assign_case_to_tl', $data);
  $this->load->view('admin2/footer');

 }


 public function cancel_case($case_id){

     $this->db->update('case_request',['case_status'=>$_GET['approve']],['id'=>$case_id]);
     if($this->db->affected_rows()>0){
        redirect(base_url().'admin/screening_operation');
     }else{
         redirect(base_url().'admin/form1/'.$case_id);

     }

 }
 public function feed_back()
 {

  $this->load->view('admin2/header');
  $this->load->view('admin2/feed_back');
  $this->load->view('admin2/footer');

 }
 public function view_case($case_id)
 {
  $data['subjects']=$this->db->query('select subject_case.*, scope_of_work.scope_name,assign_client_services.price, subject_activities.due_date, case_request.case_date from subject_case INNER JOIN subject_activities ON (subject_case.id=subject_activities.subject_id) INNER JOIN scope_of_work ON (scope_of_work.id=subject_activities.activity_id) INNER JOIN assign_client_services ON (assign_client_services.scope_id=scope_of_work.id) INNER JOIN case_request ON (case_request.id = subject_case.case_id) WHERE subject_case.case_id = '.$case_id.' GROUP BY subject_case.id')->result_array();
  $this->load->view('admin2/header',$data);
  $this->load->view('admin2/view_case');
  $this->load->view('admin2/footer');

 }
 public function view_case1($client_id)
 {
$data['clients']=$this->db->query('select * from client where parent_id='.$_SESSION['client_id'].'')->result_array();
  $this->load->view('admin2/header',$data);
  $this->load->view('admin2/view_case1');
  $this->load->view('admin2/footer');

 }
 public function modify_cases()
 {

  $where = $_SESSION['client_id'];
  $data['m_cases']=$this->admin_model->get_modify_case($where);
  $this->load->view('admin2/header');
  $this->load->view('admin2/modify_cases', $data);
  $this->load->view('admin2/footer');

 }
public function price_calculator()
 {
 	$data['scopes']=$this->db->get('scope_of_work')->result_array();
  $this->load->view('admin2/header');
  $this->load->view('admin2/price_calculator',$data);
  $this->load->view('admin2/footer');

 }
 public function calu()
 {
 	$data['scopes']=$this->db->get('scope_of_work')->result_array();
  $this->load->view('admin2/header');
  $this->load->view('admin2/calu',$data);
  $this->load->view('admin2/footer');

 }
 // end working umer
	public function check_login()
	{
		$data=array(
            'login'=>$this->input->post('login'),
            'pass'=>$this->input->post('pass'),
			);
       if($user=$this->admin_model->login($data)){
            $this->session->set_userdata($user);
            redirect(base_url().'admin/dashboard');
       }else{
          $errors['error']="Invalid Credentials";
       }
		$this->load->view('admin/login',$errors);
	}
	public function edit_profile()
	{
		$data['profile']=$this->db->get_where('login',['login_id'=>$_SESSION['login_id']])->row_array();
		$this->load->view('admin/header');
		$this->load->view('admin/edit_profile',$data);
		$this->load->view('admin/footer');
 	}
	public function view_reports()
	{

		$data['total_request']=$this->db->get('lead')->num_rows();
		$data['total_rfq']=$this->db->get('rfq')->num_rows();
		$data['total_customer']=$this->db->get_where('clients',['is_client'=>1])->num_rows();
		$_SESSION['page']="view_reports";
		$this->load->view("admin/header");
		$this->load->view("admin/view_reports",$data);
		$this->load->view("admin/footer");
	}
public function view_chart()
{
	$_SESSION['page']="view_chart";
		$this->load->view("admin2/header");
		$this->load->view("admin2/view_chart");
		$this->load->view("admin2/footer");
}


    public function approve_case($case_id)
    {
    	$this->db->update("case_request",['case_status'=>1],['id'=>$case_id]);
    	if($this->db->affected_rows()>0){
           redirect(base_url().'admin/case_dashboard/');
    	}else{
           redirect(base_url().'admin/case_dashboard/');
    	}
    }
	public function view_recruitment()
	{

		$query="SELECT recruitment.*,recruitment_past_experience.*,recruitment_qualification.* from recruitment
		 inner join recruitment_past_experience on (recruitment.recruitmentID=recruitment_past_experience.recruitmentID)
		 inner join recruitment_qualification on (recruitment.recruitmentID=recruitment_qualification.recruitmentID)
		  ORDER By recruitment.recruitmentID DESC";
		$data['recruitments']=$this->admin_model->raw_query($query,1);
		$_SESSION['page']="view_reports";
		$this->load->view("admin/header");
		$this->load->view("admin/view_recruitment",$data);
		// $this->load->view("admin/footer");
	}
	public function create_reference()
	{
		$_SESSION['page']="view_reports";
		$this->load->view("admin2/header");
		$this->load->view("admin2/create_reference");
		$this->load->view("admin2/footer");
	}
	public function view_lead_report()
	{
		$_SESSION['page']="view_reports";
		$this->load->view("admin/header");
		$this->load->view("admin/view_lead_reports");
		$this->load->view("admin/footer");
	}

	public function view_rfq_report()
	{


		$_SESSION['page']="view_reports";
		$this->load->view("admin/header");
		$this->load->view("admin/view_rfq_reports");
		$this->load->view("admin/footer");
	}

	public function dashboard()
	{
 if ($id) {
            $data['memos']=$this->db->query("select e1.employee_name as assigned_by,e1.id as user_id,e2.employee_name as assigned_to,memo.* from memo inner join employee_itgs e1 on (memo.user_id=e1.id) left join employee_itgs e2 on (memo.departmentID=e2.id) where memo.id =".$id)->result_array();
          }else{
            $data['memos']=$this->db->query("select e1.employee_name as assigned_by,e1.id as user_id,e2.employee_name as assigned_to,memo.* from memo inner join employee_itgs e1 on (memo.user_id=e1.id) left join employee_itgs e2 on (memo.departmentID=e2.id)")->result_array();
          }
	$_SESSION['page']="create_employee";
		$this->is_login();
         $this->load->view('admin2/header');
         $this->load->view('admin2/index',$data);

         $this->load->view('admin2/footer');
	}

	public function destroy()
	{
		$this->session->sess_destroy();
	    redirect(base_url().'admin/');

	}

	public function create_lead()
	{
		$_SESSION['page']="create_lead";
		$this->is_login();
		$data['clients']=$this->db->get_where('clients',['employeeID'=>$_SESSION['login_id']])->result_array();
        $this->load->view('admin2/header');
        $this->load->view('admin2/create_lead',$data);
        $this->load->view('admin2/footer');

	}
	public function create_rfq()
	{
		$data['clients']=$this->db->get_where('clients',['employeeID'=>$_SESSION['login_id']])->result_array();
		$_SESSION['page']="create_rfq";
		$this->is_login();
        $this->load->view('admin2/header');
        $this->load->view('admin2/create_rfq',$data);
        $this->load->view('admin2/footer');

	}
	public function create_employee()
	{

		$_SESSION['page']="create_employee";
		$this->is_login();
        $this->load->view('admin2/header');
        $this->load->view('admin2/create_employee');
        $this->load->view('admin2/footer');

	}
	public function employee_management()
	{

		$data['title']="Employee Management";
		$this->is_login();
        $this->load->view('admin2/header',$data);
        $this->load->view('admin2/employee_management');
        $this->load->view('admin2/footer');

	}
	public function create_recruitment()
	{

		$_SESSION['page']="create_recruitment";
		$this->is_login();
        $this->load->view('admin/header');
        $this->load->view('admin/recruitment');
        // $this->load->view('admin/footer');

	}
	/*hr*/

	public function view_course()
	{
		$this->is_login();
		$_SESSION['page']="view_course";

		$data['courses']=$this->admin_model->view_courses();
		$this->load->view('admin2/header');
		$this->load->view('admin2/view_course',$data);
		$this->load->view('admin2/footer');

	}
	public function training_lab()
	{
		$this->is_login();
		$_SESSION['page']="training_lab";

		$data['courses']=$this->admin_model->get_data('courses');
    $data['chapters']=$this->admin_model->get_data('chapter');
    $data['sections']=$this->admin_model->get_data('section');
    $data['course_contents']=$this->admin_model->get_data('course_content');
		$this->load->view('admin2/header');
		$this->load->view('admin2/training_lab',$data);
		$this->load->view('admin2/footer');

	}
	public function add_assignment()
	{
		$this->is_login();
		$_SESSION['page']="add_assignment";

		/*$data['records']=$this->admin_model->view_requests();*/
		$this->load->view('admin2/header');
		$this->load->view('admin2/add_assignment',$data);
		$this->load->view('admin2/footer');

	}
	public function hr_calender()
	{
		$this->is_login();
		$_SESSION['page']="hr_calender";

		$data['records']=$this->admin_model->get_data('training');
		$this->load->view('admin2/header');
		$this->load->view('admin2/hr_calender',$data);
		$this->load->view('admin2/footer');

	}

  public function interview_calender()
  {
    $id = $this->session->userdata('id');
    $data['records']=$this->admin_model->select_where('interviews', array('interviewer'=>$id));
    //echo '<pre>';print_r($data);die;
    $this->load->view('admin2/header');
    $this->load->view('admin2/interview_calender',$data);
    $this->load->view('admin2/footer');
  }

	public function create_course()
	{
		$this->is_login();
		$_SESSION['page']="create_course";
		$data['records']=$this->admin_model->get_data('employee_itgs');
		$this->load->view('admin2/header');
		$this->load->view('admin2/create_course',$data);
		$this->load->view('admin2/footer');

	}	/**/

	/*hr form for itgs*/
   public function create_emp($id= null)
   {
    $data['departments']=$this->admin_model->get_data('departments');
    $data['employees']=$this->admin_model->get_data('employee_itgs');
    if ($id != null) {
      $data['id'] = $id;
    }
    $data['ceo'] = $this->admin_model->select_where('login',array('role'=>'Ceo'));
    $this->load->view('admin2/header');
    $this->load->view('admin2/create_emp', $data);
    $this->load->view('admin2/footer');

   }
   public function loan_application()
   {
    $data['employee'] = $this->admin_model->select_where('employee_itgs',array('id' => $this->session->userdata('id')));
    
  $this->load->view('admin2/header');
  $this->load->view('admin2/loan_application', $data);
  $this->load->view('admin2/footer');

   } 
   public function salary_advance_form()
   {
    $data['employee'] = $this->admin_model->select_where('employee_itgs',array('id' => $this->session->userdata('id')));
    
  $this->load->view('admin2/header');
  $this->load->view('admin2/salary_advance_form', $data);
  $this->load->view('admin2/footer');

   }
   public function expense_form()
   {
    $data['employee'] = $this->admin_model->select_where('employee_itgs',array('id' => $this->session->userdata('id')));
    
  $this->load->view('admin2/header');
  $this->load->view('admin2/expense_form', $data);
  $this->load->view('admin2/footer');

   }
   public function complaint_form()
   {
    $data['employee'] = $this->admin_model->select_where('employee_itgs',array('id' => $this->session->userdata('id')));
    
  $this->load->view('admin2/header');
  $this->load->view('admin2/complaint_form', $data);
  $this->load->view('admin2/footer');

   }
   public function leave_application()
   {
    $data['employee'] = $this->admin_model->select_where('employee_itgs',array('id' => $this->session->userdata('id')));
    $status = $this->admin_model->select_where('employee_detail',array('employee_code' => $data['employee'][0]['employee_id']));
    if (!empty($satus)) {
      $data['employee'][0]['status'] = $status[0]['job_type']; 
    }
    else{
      $data['employee'][0]['status'] = ''; 
    }
    //print_r($data);die;
  $this->load->view('admin2/header');
  $this->load->view('admin2/leave_application', $data);
  $this->load->view('admin2/footer');

   }

   public function resignation_form()
   {
    if ($this->input->post()) {
      $data = $this->input->post();
      $id = $this->admin_model->insert('resignation',$data);
      if ($id) {
        redirect('admin/employee_dashboard');
      }
    }
    $data['employee'] = $this->admin_model->select_where('employee_itgs',array('id' => $this->session->userdata('id')));
    $status = $this->admin_model->select_where('employee_detail',array('employee_code' => $data['employee'][0]['employee_id']));
    if (!empty($satus)) {
      $data['employee'][0]['status'] = $status[0]['job_type']; 
    }
    else{
      $data['employee'][0]['status'] = ''; 
    }
    //print_r($data);die;
  $this->load->view('admin2/header');
  $this->load->view('admin2/resignation_form', $data);
  $this->load->view('admin2/footer');

   }

   public function visiting_card_form()
   {
    $data['employee'] = $this->admin_model->select_where('employee_itgs',array('id' => $this->session->userdata('id')));
    
    $this->load->view('admin2/header');
    $this->load->view('admin2/visiting_card_form', $data);
    $this->load->view('admin2/footer');
  }
   /*end hr form for itgs*/
	public function create_test()
	{
		$this->is_login();
		$_SESSION['page']="create_test";

		/*$data['records']=$this->admin_model->view_requests();*/
		$this->load->view('admin2/header');
		$this->load->view('admin2/create_test',$data);
		$this->load->view('admin2/footer');

	}

	public function recruitment()
	{
		$this->is_login();
		$_SESSION['page']="recruitment";

		// $data['skills']=$this->admin_model->all_rows('skills');
  //   $data['intrests']=$this->admin_model->all_rows('intrests');
		$this->load->view('admin2/header');
		$this->load->view('admin2/recruitment',$data);
		$this->load->view('admin2/footer');

	}



	public function add_survey()
	{
		$this->is_login();
		$_SESSION['page']="add_survey";

		/*$data['records']=$this->admin_model->view_requests();*/
		$this->load->view('admin2/header');
		$this->load->view('admin2/add_survey',$data);
		$this->load->view('admin2/footer');

	}
	public function view_survey()
	{
		$this->is_login();
		$_SESSION['page']="view_survey";

		/*$data['records']=$this->admin_model->view_requests();*/
		$this->load->view('admin2/header');
		$this->load->view('admin2/view_survey',$data);
		$this->load->view('admin2/footer');

	}
	public function create_job_form()
	{

		$_SESSION['page']="create_job_form";
		$this->is_login();
        $this->load->view('admin2/header');
        $this->load->view('admin2/create_job_form');
        $this->load->view('admin2/footer');

	}
//for edit
	public function edit_recruitment($recruitmentID)
	{
		$this->is_login();
		$where=array('recruitmentID'=>$recruitmentID);
		$data['recruitment']=$this->admin_model->get_row("recruitment",$where);
		$data['recruitment_qualification']=$this->admin_model->get_row("recruitment_qualification",$where);
		$data['recruitment_past_experience']=$this->admin_model->get_row("recruitment_past_experience",$where);

		$this->load->view('admin/header',$data);
		$this->load->view('admin/show_recruitment');
	}
public function show_recruitment($recruitmentID)
{

	 $this->is_login();
		$where=array('recruitmentID'=>$recruitmentID);
		$data['recruitment']=$this->admin_model->get_row("recruitment",$where);
		$data['recruitment_qualification']=$this->admin_model->get_row("recruitment_qualification",$where);
		$data['recruitment_past_experience']=$this->admin_model->get_row("recruitment_past_experience",$where);
// echo "<pre>";
// print_r($data['recruitment']);
// die();
		$this->load->view('admin/header',$data);
	$this->load->view('admin/show_recruitment');
}
	public function insert_employee_admin()
	{
	    $data=$_POST;
	    if($this->db->insert("employee_itgs",$data)){
	        redirect(base_url().'admin/admin_dashboard');
	    }else{
	    redirect(base_url().'admin/admin_dashboard');

	    }
	}

	public function insert_employee()
	{

		// die(print_r($_POST));

		  $data_personal_information=array(
             'first_name'=>$this->input->post('first_name'),
             'last_name'=>$this->input->post('last_name'),
             'father_name'=>$this->input->post('father_name'),
             'gender'=>$this->input->post('gender'),
             'date_of_birth'=>$this->input->post('date_of_birth'),
             'cnic'=>$this->input->post('cnic'),
             'image'=>$this->input->post('image')

		  	);


		    $config['upload_path']       = './uploads/profile/';
                 $config['allowed_types']        = 'jpg|png|gif';

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('image'))
                {
                        $error = array('upload_error' => $this->upload->display_errors());
                        echo "<pre>";
                        print_r($error);
                }
                else
                {

                	$file=$this->upload->data();
	               $data_personal_information['image']=$file['file_name'];

			  $userID=$this->admin_model->insert("employee_personal_information",$data_personal_information);
		  if($userID){





 $data_contact_information=array(
		  	'userID'=>$userID,
		  	'email'=>$this->input->post('email'),
		  	'cell_number'=>$this->input->post('cell_number'),
		  	'landline'=>$this->input->post('landline'),
		  	'residence_address'=>$this->input->post('residence_address'),
		  	'permanent_address'=>$this->input->post('permanent_address'),
		  	'departmental_details'=>$this->input->post('departmental_details')

		  	);

 $this->admin_model->insert("employee_contact_information",$data_contact_information);

		  $data_departmental_details=array(
  'userID'=>$userID,
  'employee_code'=>$this->input->post('employee_code'),
  'user_name'=>$this->input->post('user_name'),
  'password'=>$this->input->post('password'),
  'designation'=>$this->input->post('designation'),
  'grade'=>$this->input->post('grade_depart'),
  'location'=>$this->input->post('location'),
  'department'=>$this->input->post('department'),
  'joining_date'=>$this->input->post('joining_date'),
  'is_admin'=>$this->input->post('is_admin'),
  'basic'=>$this->input->post('basic'),
  'hr'=>$this->input->post('hr'),
  'utilities'=>$this->input->post('utilities'),
  'medical'=>$this->input->post('medical'),
  'conveyance'=>$this->input->post('conveyance'),
  'cash_gross'=>$this->input->post('cash_gross'),
  'pf'=>$this->input->post('pf'),
  'bonus'=>$this->input->post('bonus'),
  'el'=>$this->input->post('el'),
  'total_gross'=>$this->input->post('total_gross')
		  	);

 $this->admin_model->insert("employee_departmental_details",$data_departmental_details);

		  $new_qualification=implode(",",$this->input->post('new_qualification[]'));
		  $qualification_title=implode(",",$this->input->post('qualification_title[]'));
		  $start_date=implode(",",$this->input->post('start_date[]'));
		  $end_date=implode(",",$this->input->post('end_date[]'));
		  $grade=implode(",",$this->input->post('grade[]'));
		  $institution=implode(",",$this->input->post('institution[]'));
		  $award_year=implode(",",$this->input->post('award_year[]'));
		  $field_of_study=implode(",",$this->input->post('field_of_study[]'));

		  $data_qualification_detail=array(

					 'userID'=>$userID,
					  'new_qualification'=>$new_qualification,
					  'qualification_title'=>$qualification_title,
					  'start_date'=>$start_date,
					  'end_date'=>$end_date,
					  'grade'=>$grade,
					  'institution'=>$institution,
					  'award_year'=>$award_year,
					  'field_of_study'=>$field_of_study,
		  	);

 $this->admin_model->insert("employee_qualification_detail",$data_qualification_detail);

		  $data_job_description=array(
          'userID'=>$userID,
          'add_job_description'=>$this->input->post('add_job_description')
          );


 $this->admin_model->insert("employee_job_description",$data_job_description);

		   $add_job_kpi=implode(",",$this->input->post('add_job_kpi[]'));
		  $assign_weightage=implode(",",$this->input->post('assign_weightage[]'));

		  $data_evaluation_kpi=array(
           'userID'=>$userID,
           'add_job_kpi'=>$add_job_kpi,
           'assign_weightage'=>$assign_weightage
		  	);


 $this->admin_model->insert("employee_evaluation_kpi",$data_evaluation_kpi);



echo "done";


	          }





		  }
   }


   public function insert_recruitment()
   {


		    $config['upload_path']       = './uploads/recruitment/';
                 $config['allowed_types']        = 'jpg|png|gif';

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('file'))
                {
                        $error = array('upload_error' => $this->upload->display_errors());
                        echo "<pre>";
                        print_r($error);
                }
                else
                {

                	$file=$this->upload->data();


				   	$data_recruitment=array(
            		   		'first_name'=>$this->input->post('first_name'),
				             'father_name'=>$this->input->post('father_name'),
				             'phone_number'=>$this->input->post('phone_number'),
				             'file'=>$file['file_name'],
				             'position_name'=>$this->input->post('position_name'),
				             'other'=>$this->input->post('other'),
				             'jobcode'=>$this->input->post('jobcode'),
				             'current_salary_inword'=>$this->input->post('current_salary_inword'),
				             'current_salary_innumbers'=>$this->input->post('current_salary_innumbers'),
				             'expected_salary_inword'=>$this->input->post('expected_salary_inword'),
				             'expected_salary_innumber'=>$this->input->post('expected_salary_innumber')
				   		);



                	$recruitmentID=$this->admin_model->insert_recruitment("recruitment",$data_recruitment);


		if($recruitmentID){

		  $new_qualification=implode(",",$this->input->post('new_qualification[]'));
		  $qualification_title=implode(",",$this->input->post('qualification_title[]'));
		  $start_date=implode(",",$this->input->post('start_date[]'));
		  $end_date=implode(",",$this->input->post('end_date[]'));
		  $grade=implode(",",$this->input->post('grade[]'));
		  $institution=implode(",",$this->input->post('institution[]'));
		  $award_year=implode(",",$this->input->post('award_year[]'));
		  $field_of_study=implode(",",$this->input->post('field_of_study[]'));


		  $data_recruitment_qualification=array(

					  'recruitmentID'=>$recruitmentID,
					  'new_qualification'=>$new_qualification,
					  'qualification_title'=>$qualification_title,
					  'start_date'=>$start_date,
					  'end_date'=>$end_date,
					  'grade'=>$grade,
					  'institution'=>$institution,
					  'award_year'=>$award_year,
					  'field_of_study'=>$field_of_study,
		  	);

$this->admin_model->insert_recruitment("recruitment_qualification",$data_recruitment_qualification);

   	$data_recruitment_past_experience=array(
			 'recruitmentID'=>$recruitmentID,
             'experience_period'=>$this->input->post('experience_period'),
             'company_name'=>$this->input->post('company_name'),
             'joining_date'=>$this->input->post('joining_date'),
             'other'=>$this->input->post('other'),
   		);

   	$this->admin_model->insert_recruitment("recruitment_past_experience",$data_recruitment_past_experience);
}
				$this->load->view('admin/header');
        $this->load->view('admin/view_recruitment');


                }






   }



	public function update_employee()
	{

		   $config['upload_path']       = './uploads/profile/';
                $config['allowed_types']        = 'jpg|png|gif';

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('profile_img'))
                {
		$data=$_POST;

                }
                else
                {

                	$file=$this->upload->data();

		$data=$_POST;
		$data['profile_img']=$file['file_name'];
				}
		$where=array('login_id'=>$_SESSION['login_id']);
		 if ($this->db->update('login',$data,$where)) {
         $this->session->set_userdata($data);

         redirect(base_url().'admin/dashboard');

       }else{

         redirect(base_url().'admin/dashboard');
       }

   }

   public function update_rfq()
	{
		$this->is_login();

               $config['upload_path']       = './uploads/';
                $config['allowed_types']        = 'pdf|doc|docx';

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('file'))
                {
                        $error = array('upload_error' => $this->upload->display_errors());
                        echo "<pre>";
                        print_r($error);
                }
                else
                {

                	$file=$this->upload->data();
                	$data=array('file'=>$file['file_name']);
                	$where=array('rfqID'=>$_POST['rfqID']);
                	$this->db->update('rfq',$data,$where);


        if ($this->db->affected_rows()>0) {
         redirect(base_url().'admin/view_rfq');

       }else{

          $errors['error']="Error in updating";

       }

                	}

    }
	public function insert_request()
	{
		$this->is_login();

               $config['upload_path']       = './uploads/';
                $config['allowed_types']        = 'pdf|doc|docx';

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('file'))
                {
                      $array_json=array('status'=>false,'message' => $this->upload->display_errors());
                }
                else
                {

                	$file=$this->upload->data();

                 if ($_POST['clientID']=="") {
                	$client_data= $data=array(
    'employeeID'=>$_SESSION['login_id'],
    'client_name'=>$this->input->post('client_name'),
    'client_email'=>$this->input->post('client_email'),
    'company_name'=>$this->input->post('company_name'),
    'client_phone'=>$this->input->post('client_phone'),
    'no_of_employees'=>$this->input->post('no_of_employees'),
    'client_address'=>$this->input->post('client_address'),
                     );
                    $this->db->insert('clients',$client_data);
                     $clientID=$this->db->insert_id();

                 }else{
                $clientID=$_POST['clientID'];
                 }


         $data=array(
    'employeeID'=>$this->input->post('employeeID'),
    'clientID'=>$clientID,
    'remarks'=>$this->input->post('remarks'),
    'req_date'=>$this->input->post('req_date'),
    'order_type'=>$this->input->post('order_type'),
    'month'=>date("F"),
    'year'=>date("Y"),
    'day'=>date("d"),
    'qty'=>$this->input->post('qty'),
    'description'=>$this->input->post('description'),
    'order_notes'=>$this->input->post('order_notes'),
    'file'=>$file['file_name'],
    'status'=>'pending',
    'updated_at'=>date("d-m-Y h:i:s a"),
    'created_at'=>date("d-m-Y h:i:s a"),
         	);

       if ($this->admin_model->insert_request($data)) {
          /*$array_json=array('status'=>true);*/
          /*$this->load->view('admin2/view_lead');*/

         $array_json=array('status'=>true);


       }else{

          $array_json=array('status'=>false,'message'=>'Error in Inserting Lead');

       }

                }

     echo json_encode($array_json);

	}


	public function insert_rfq()
	{
		$this->is_login();

            if ($_POST['clientID']=="") {
                	$client_data= $data=array(
    'employeeID'=>$_SESSION['login_id'],
    'client_name'=>$this->input->post('client_name'),
    'client_email'=>$this->input->post('client_email'),
    'company_name'=>$this->input->post('company_name'),
    'client_phone'=>$this->input->post('client_phone'),
    'no_of_employees'=>$this->input->post('no_of_employees'),
    'client_address'=>$this->input->post('client_address'),
                     );
                    $this->db->insert('clients',$client_data);
                     $clientID=$this->db->insert_id();

                 }else{
                $clientID=$_POST['clientID'];
                 }

         $data=array(
    'employeeID'=>$_SESSION['login_id'],
    'clientID'=>$clientID,
    'remarks'=>$this->input->post('remarks'),
    'req_date'=>$this->input->post('req_date'),
    'order_type'=>$this->input->post('order_type'),
    'qty'=>$this->input->post('qty'),
    'description'=>$this->input->post('description'),
    'order_notes'=>$this->input->post('order_notes'),
    'file'=>$file['file_name'],
    'status'=>'pending',
    'updated_at'=>date("d-m-Y h:i:s a"),
    'created_at'=>date("d-m-Y h:i:s a"),
         	);

       if ($this->admin_model->insert_rfq($data)) {

         redirect(base_url().'admin/view_rfq');

       }else{

          $errors['error']="Error in inserting";

       }

	}

	public function view_lead()
	{
		$this->is_login();
		$_SESSION['page']="view_lead";

		$data['records']=$this->admin_model->view_requests();
		$this->load->view('admin2/header');
		$this->load->view('admin2/view_lead',$data);
		$this->load->view('admin2/footer');
	}

	public function get_meetings()
	{
		$events = array();
		$rows=$this->db->query("select sales_create_meeting.clientID,sales_create_meeting.meetingID as id,sales_create_meeting.title,assign_meeting_sales.end_date,assign_meeting_sales.meeting_date as start ,sales_create_meeting.meeting_time from sales_create_meeting inner join assign_meeting_sales on (assign_meeting_sales.meetingID=sales_create_meeting.meetingID)
			where sales_create_meeting.clientID='".$_SESSION['login_id']."' or  assign_meeting_sales.userID  like ('%,$_SESSION[login_id],%') OR assign_meeting_sales.userID like ('%$_SESSION[login_id],%') OR assign_meeting_sales.userID like ('%,$_SESSION[login_id]%') OR assign_meeting_sales.userID='".$_SESSION['login_id']."'")->result_array();

     foreach($rows as $fetch ) {
      $e = array();
      $e['id'] = $fetch['id'];
      $e['clientID'] = $fetch['clientID'];
      $e['title'] = $fetch['title'];
      $e['start'] = $fetch['start']."T".$fetch['meeting_time'];
      $e['time'] = $fetch['meeting_time'];
      $e['end'] = $fetch['enddate'];
    //  $allday = ($fetch['allDay'] == "true") ? true : false;

      array_push($events, $e);
     }
    echo json_encode($events);
	}


	public function get_notification()
	{
		$events = array();
    $data['notification']= array();
		// $data['notification']=$this->db->query("select sales_create_meeting.meetingID,sales_create_meeting.userID,login.login_name,sales_create_meeting.title,assign_meeting_sales.end_date,assign_meeting_sales.meeting_date as start ,sales_create_meeting.meeting_time from sales_create_meeting inner join assign_meeting_sales on (assign_meeting_sales.meetingID=sales_create_meeting.meetingID) inner join login on(login.login_id=sales_create_meeting.clientID)
		// 	where  assign_meeting_sales.userID  like ('%,$_SESSION[login_id],%') OR assign_meeting_sales.userID like ('%$_SESSION[login_id],%') OR assign_meeting_sales.userID like ('%,$_SESSION[login_id]%') OR assign_meeting_sales.userID='".$_SESSION['login_id']."' AND assign_meeting_sales.is_checked =0")->result_array();
    if ($this->session->userdata('id')) {
      $id = $this->session->userdata('id');
      $type = 'employee';
    }
    elseif ($this->session->userdata('login_id')){
      $id = $this->session->userdata('login_id');
      $type = 'login';
    }
    elseif ($this->session->userdata('client_id')){
      $id = $this->session->userdata('client_id');
      $type = 'client';
    }else{
      $type='all';
    }

    // $this->db->select('*')
    //          ->from('notifications')
    //          ->where('user_id', $id)
    //          ->or_where(['usser_id'=>0,'user_type'=>'Memo'])
    //          // // ->where('user_type', $type)
    //          ->where('view', '0')
    //          ->order_by('id', 'desc');
    $data['not'] = $this->db->query("select * from notifications where user_id='".$id."' or (user_id='0' and user_type='Memo') and view='0' order by id DESC")->result_array();
   
   
	 $this->load->view('admin2/get_notification',$data);

	}
  public function view_notification($id)
  {
    $this->admin_model->update('notifications',array('view'=>'1'),array('id'=>$id != NULL ? $id : "all"));
  }

	public function count_notification()
	{
		$events = array();
    $data['notification']= array();
		// $data['notification']=$this->db->query("select sales_create_meeting.meetingID,sales_create_meeting.userID,login.login_name,sales_create_meeting.title,assign_meeting_sales.end_date,assign_meeting_sales.meeting_date as start ,sales_create_meeting.meeting_time from sales_create_meeting inner join assign_meeting_sales on (assign_meeting_sales.meetingID=sales_create_meeting.meetingID) inner join login on(login.login_id=sales_create_meeting.clientID)
		// 	where  assign_meeting_sales.userID  like ('%,$_SESSION[login_id],%') OR assign_meeting_sales.userID like ('%$_SESSION[login_id],%') OR assign_meeting_sales.userID like ('%,$_SESSION[login_id]%') OR assign_meeting_sales.userID='".$_SESSION['login_id']."' AND assign_meeting_sales.is_checked =0")->result_array();
    if ($this->session->userdata('id')) {
      $id = $this->session->userdata('id');
      $type = 'employee';
    }
    elseif ($this->session->userdata('login_id')){
      $id = $this->session->userdata('login_id');
      $type = 'login';
    }
    elseif ($this->session->userdata('client_id')){
      $id = $this->session->userdata('client_id');
      $type = 'client';
    }
    $data['not'] = $this->db->query("select * from notifications where user_id='".$id."' or (user_id='0' and user_type='Memo') and view='0' order by id DESC")->result_array();
    //$data['not'] = $this->admin_model->select_where('notifications',array('user_id' => $id, 'view' => '0'));
         echo count($data['notification']) + count($data['not']);

	}


	public function get_event_update()
	{
		$data=$this->db->get_where("sales_create_meeting",['meetingID'=>$_POST['meetingID']])->row_array();
		echo json_encode($data);
	}



	public function update_event()
	{
		$meeting_date=explode("T", $_POST['meeting_date']);
		// die(print_r($meeting_date));

		$data=[
		       'meeting_date'=>$meeting_date[0],
		       'end_date'=>$_POST['end']
		      ];
		$where=['meetingID'=>$_POST['meetingID']];
		$this->db->update("assign_meeting_sales",$data,$where);
		      print_r($this->db->affected_rows());
	}


		public function edit_meeting($meetingID)
	{
		$this->is_login();
		$_SESSION['page']="calender";
		$data['title']="Calender";

		$data['users']=$this->db->query("select login_id,login_name from login where role ='Sales' and login_id!='".$_SESSION['login_id']."'")->result_array();
		$data['meeting']=$this->db->query("select * from sales_create_meeting where meetingID='".$meetingID."'")->row_array();


		$this->load->view('admin2/header',$data);
		$this->load->view('admin2/edit_meeting');
		$this->load->view('admin2/footer');

	}

		public function view_meeting($meetingID)
	{
		$this->is_login();
		$_SESSION['page']="calender";
		$data['title']="Calender";

		$data['users']=$this->db->query("select login_id,login_name from login where role ='Sales' and login_id!='".$_SESSION['login_id']."'")->result_array();
		$data['meeting']=$this->db->query("select * from sales_create_meeting where meetingID='".$meetingID."'")->row_array();


		$this->load->view('admin2/header',$data);
		$this->load->view('admin2/view_meeting');
		$this->load->view('admin2/footer');

	}


		public function new_meeting()
	{
// 		$this->is_login();
		$_SESSION['page']="calender";
		$data['title']="Calender";

		$data['users']=$this->db->query("select login_id,login_name from login where role ='Sales' and login_id!='".$_SESSION['login_id']."'")->result_array();



		$this->load->view('admin2/header',$data);
		$this->load->view('admin2/create_meeting');
		$this->load->view('admin2/footer');

	}



// 	public function create_meeting()
// {

// /*$clientID=$this->admin_model->insert("sales_create_meeting",$sales_create_meeting);*/

// $sales_create_meeting=array(
//     'clientID'=>$_SESSION['login_id'],
//     'userID'=>implode(",",$_POST['userID']),
//     'title'=>$this->input->post('title'),
//     'meeting_date'=>$this->input->post('meeting_date'),
//    'meeting_time'=>$this->input->post('meeting_time'),
//     'venue'=>$this->input->post('venue'),
//     'meeting_participant'=>$this->input->post('meeting_participant'),
//     'tag_other_employee'=>$this->input->post('tag_other_employee'),
//     'lat'=>$this->input->post('lat'),
//     'lon'=>$this->input->post('lon'),
//          	);
//        if ($this->admin_model->insert("sales_create_meeting",$sales_create_meeting)) {
//               redirect(base_url().'admin/calender');
//        }
//        else
//        {
//               redirect(base_url().'admin/calender');
//        }
//        echo json_encode($array_json);
// }


	public function update_meeting_all()
{

/*$clientID=$this->admin_model->insert("sales_create_meeting",$sales_create_meeting);*/

$where=['meetingID'=>$_POST['meetingID']];
$sales_create_meeting=array(
    'clientID'=>$_SESSION['login_id'],
    'userID'=>implode(",",$_POST['userID']),
    'title'=>$this->input->post('title'),
    'meeting_date'=>$this->input->post('meeting_date'),
    'meeting_time'=>$this->input->post('meeting_time'),
    'venue'=>$this->input->post('venue'),
    'notes'=>$this->input->post('notes'),
    'tag_other_employee'=>$this->input->post('tag_other_employee'),
    'lat'=>$this->input->post('lat'),
    'lon'=>$this->input->post('lon'),
         	);
       if ($this->admin_model->update("sales_create_meeting",$sales_create_meeting,$where)) {
              redirect(base_url().'admin/calender');
       }
       else
       {
              redirect(base_url().'admin/calender');
       }
}






	public function delete_event()
	{
		$where=['meetingID'=>$_POST['meetingID']];
		$this->db->delete("assign_meeting_sales",$where);
		      echo "Successfully Deleted";
	}
	public function delete_event_permanent()
	{
		$where=['meetingID'=>$_POST['meetingID']];
		$this->db->delete("sales_create_meeting",$where);
		       echo "Successfully Deleted";
		// print_r($where);
	}


		public function calender()
	{
// 		$this->is_login();
		$_SESSION['page']="calender";
		$data['title']="Calender";

		$data['assigned']=$this->db->query("select DISTINCT meetingID from assign_meeting_sales ")->result_array();
		$data['users']=$this->db->query("select login_id,login_name from login where role ='Sales' and login_id!='".$_SESSION['login_id']."'")->result_array();

if (isset($_SESSION['login_id']) && $_SESSION['login_id'] != null) {
  $id = $_SESSION['login_id'];
}
else{
  $id = $_SESSION['client_id'];
}

		$data['meetings']=$this->db->query("select * from sales_create_meeting where clientID='".$id."'")->result_array();

		/*$data['records']=$this->admin_model->view_requests();*/
		$this->load->view('admin2/header',$data);
		$this->load->view('admin2/calender');
		$this->load->view('admin2/footer');

	}

	public function assign_meeting()
	{

		$get_userID=$this->db->get_where("sales_create_meeting",['meetingID'=>$_POST['meetingID']])->row_array();

		$data=[
			'meetingID'=>$_POST['meetingID'],
			'meeting_date'=>$_POST['meeting_date'],
			'userID'=>$get_userID['userID'],
			'end_date'=>$_POST['end'],
		];
		if ($this->admin_model->insert("assign_meeting_sales",$data)) {
			$array_json=['status'=>true,'message'=>'Successfully Added'];
		}else{
			$array_json=['status'=>false,'message'=>'Error in Adding'];
		}
		echo json_encode($array_json);


	}


	public function create_meeting()
{

/*$clientID=$this->admin_model->insert("sales_create_meeting",$sales_create_meeting);*/
if (isset($_SESSION['id']) && $_SESSION['id'] != null) {
  $id = $_SESSION['id'];
}
else{
  $id = $_SESSION['client_id'];
}
$sales_create_meeting=array(
    'clientID'=>$id,
    'userID'=>implode(",",$_POST['userID']),
    'title'=>$this->input->post('title'),
    'meeting_date'=>$this->input->post('meeting_date'),
   'meeting_time'=>$this->input->post('meeting_time'),
    'venue'=>$this->input->post('venue'),
    'notes'=>$this->input->post('notes'),
    'tag_other_employee'=>$this->input->post('tag_other_employee'),
    'lat'=>$this->input->post('lat'),
    'lon'=>$this->input->post('lon'),
         	);
       if ($this->admin_model->insert("sales_create_meeting",$sales_create_meeting)) {
              redirect(base_url().'admin/calender');
       }
       else
       {
              redirect(base_url().'admin/calender');
       }
       echo json_encode($array_json);
}



	/*public function view_recruitment()
	{
		$this->login();
		$_SESSION['page']="view_recruitment";

		$data['records']=$this->admin_model->view_recruitment();
		$this->load->view('admin/header');
		$this->load->view('admin/footer');
	}*/

	public function view_customer_lead($clientID)
	{
		$this->is_login();
		$_SESSION['page']="view_customer";

		$data['customer']=$this->db->get_where('clients',['clientID'=>$clientID])->row_array();
		$data['records']=$this->admin_model->view_customers_requests($clientID);
		$this->load->view('admin2/header');
		$this->load->view('admin2/view_customer_lead',$data);
		$this->load->view('admin2/footer');

	}

	public function view_rfq()
	{
		$this->is_login();
		$_SESSION['page']="view_rfq";

		$data['records']=$this->admin_model->view_rfq();
		$this->load->view('admin2/header');
		$this->load->view('admin2/view_rfq',$data);
		$this->load->view('admin2/footer');

	}

	public function view_report()
	{
		$this->is_login();

		$data['records']=$this->admin_model->view_requests();
		$this->load->view('admin/header');
		$this->load->view('admin/view_reports',$data);
		$this->load->view('admin/footer');

	}

	public function add_payment()
	{
		$this->is_login();
		$_SESSION['page']="create_payment";

		$data['records']=$this->admin_model->view_requests_nr();
		$this->load->view('admin2/header');
		$this->load->view('admin2/add_payment',$data);
		$this->load->view('admin2/footer');

	}


	public function view_employee()
	{
		$this->is_login();
		$_SESSION['page']="view_employee";

		$data['records']=$this->admin_model->view_employee();
    $data['employees'] = $this->admin_model->get_employee_all();
    $data['record'] = $this->admin_model->get_emp_count();
		$this->load->view('admin2/header');
		$this->load->view('admin2/view_employee',$data);
		$this->load->view('admin2/footer');

	}

  public function resignation()
  {
    $this->is_login();
    $_SESSION['page']="Resignation";

    $data['records']=$this->admin_model->get_resignation();
    //echo '<pre>';print_r($data);die;
    $this->load->view('admin2/header');
    $this->load->view('admin2/resignation',$data);
    $this->load->view('admin2/footer');

  }

  public function approve_resignation($id,$employee_id)
  {
    $this->admin_model->update_data('resignation',array('status' => '1'),array('id' => $id));
    $employee = $this->admin_model->select_where_row('employee_itgs',array('employee_id'=>$employee_id));
    $notification = array(
      'user_id'=>$employee['id'],
      'user_type'=>'employee',
      'title' => 'Resignation Approved',
      'message'=>date('Y-m-d'),
      'url'=>'#'
    );
    $this->admin_model->insert_data("notifications",$notification);
    redirect('admin/resignation');
  }


	public function edit_request($requestID)
	{
		$this->is_login();

		$where=array(
			'leadID'=>$requestID
			);

		$data['records']=$this->admin_model->edit_request($where);
		$this->load->view('admin/header');
		$this->load->view('admin/view_quot',$data);
		$this->load->view('admin/footer');

	}
	public function add_payment_form($requestID)
	{
		$this->is_login();

		$where=array(
			'leadID'=>$requestID
			);
		$data['records']=$this->admin_model->edit_request($where);
		$this->load->view('admin2/header');
		$this->load->view('admin2/add_payment_form',$data);
		$this->load->view('admin2/footer');

	}
	public function create_quote($requestID)
	{
		$this->is_login();

		$where=array(
			'leadID'=>$requestID
			);


		$data['records']=$this->admin_model->edit_request($where);

		$where_sales=array(
			'employeeID'=>$data['records']['sale_per']
			);

		$data['replies']=$this->admin_model->replies($requestID);
	    $data['requests']=$this->admin_model->requests($where_sales);

		$this->load->view('admin2/header');
		$this->load->view('admin2/create_quote',$data);
		$this->load->view('admin2/footer');

	}

	public function edit_rfq($requestID)
	{
		$this->is_login();

		$where=array(
			'rfqID'=>$requestID
			);


		$data['records']=$this->admin_model->edit_rfq($where);

		$where_sales=array(
			'employeeID'=>$data['records']['sale_per']
			);


		$this->load->view('admin2/header');
		$this->load->view('admin2/edit_rfq',$data);
		$this->load->view('admin2/footer');

	}


	public function create_invoice($requestID)
	{
		// $this->is_login();

		$where=array(
			'leadID'=>$requestID
			);


		$data['records']=$this->admin_model->edit_request($where);



		$this->load->view('admin/invoice',$data);

	}



	public function print_invoice($requestID)
	{


include( getcwd()."\\mpdf60\\mpdf.php");
$mpdf=new mPDF('UTF-8','A4','','',15,10,16,10,10,11);//A4 page in portrait for landscape add -L.


$html = file_get_contents(base_url().'admin/create_invoice/'.$requestID);


// send the captured HTML from the output buffer to the mPDF class for processing
$mpdf->WriteHTML($html);
//$mpdf->SetProtection(array(), 'user', 'password'); uncomment to protect your pdf page with password.
$mpdf->Output();

	}



	public function insert_quote()
	{

		$requestID=$this->input->post('requestID');


		  $config['upload_path']       = './uploads/';
                $config['allowed_types']        = 'pdf|doc|docx';

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('file'))
                {


		$data=array(
		 'employeeID'=>$this->input->post('employeeID'),
            'requestID'=>$requestID,
            'message'=>$this->input->post('message'),
            'date_time'=>date("d-m-Y h:s:i a"),
			);

                }
                else
                {

                	$file=$this->upload->data();

		$data=array(
			 'employeeID'=>$this->input->post('employeeID'),
            'requestID'=>$requestID,
            'message'=>$this->input->post('message'),
            'files'=>$file['file_name'],
            'date_time'=>date("d-m-Y h:s:i a"),

			);

                }



          if ($this->admin_model->insert_quote($data)) {

          	redirect(base_url().'admin/create_quote/'.$requestID);

          }else{
          	redirect(base_url().'admin/create_quote/'.$requestID);

          }

	}


	public function change_status($requestID,$status,$clientID='')
	{
		$data=array(
           'status'=>(string)$status
			);
		$where=array(
          'leadID'=>$requestID
			);

		if($this->admin_model->change_status($data,$where)){
			if($status=="approved"){
$this->db->update('clients',array('is_client'=>1),array('clientID'=>$clientID));
			}
         redirect(base_url().'admin/create_quote/'.$requestID);
		}else{
         redirect(base_url().'admin/create_quote/'.$requestID);

		}
	}

	public function f_process_invoice()
	{
		$_SESSION['page']="view_invoice";
		$data['records']=$this->db->query("select lead.*,clients.*,login.login_name,login.login_id from lead inner join clients on(lead.clientID=clients.clientID) inner join login on(login.login_id=lead.employeeID) where lead.invoice_approve=1")->result_array();

		$this->load->view('admin2/header');
		$this->load->view('admin2/process_invoice',$data);
		$this->load->view('admin2/footer');
	}

	public function change_process($leadID) {
	if($this->db->update('lead',array('invoice_approve'=>2),array('leadID'=>$leadID))){
     echo "<script>
alert('Approved');
window.location.href='".base_url()."admin/f_process_invoice/'
     </script>";
		}
	}


	public function process_invoice($leadID) {
	$this->db->update('lead',array('invoice_approve'=>1),array('leadID'=>$leadID));
	if($this->db->affected_rows()>0){
     echo "<script>
alert('Approved');
window.location.href='".base_url()."admin/view_lead/'
     </script>";
		}
	}


	public function update_payment() {

		$data=array(
'payment_type'=>$_POST['payment_option'],
'amount'=>$_POST['amount'],
'cheque_no'=>$_POST['cheque_no'],
'rec_date'=>$_POST['rec_date'],
'discount'=>$_POST['discount'],
'is_paid'=>1,
			);
	if($this->db->update('lead',$data,array('leadID'=>$_POST['leadID']))){
     echo "<script>
alert('Payment Recieved');
window.location.href='".base_url()."admin/add_payment/'
     </script>";
		}
	}


	public function view_customer()
	{

		$_SESSION['page']="view_customer";


		$data['customers']=$this->db->get_where('client',array('status'=>1,'employee_id'=>$_SESSION['id']))->result_array();
		$this->load->view('admin2/header');
		$this->load->view('admin2/view_customers',$data);
		$this->load->view('admin2/footer');
	}


	public function view_customer_report()
	{

		$_SESSION['page']="view_reports";


		$data['customers']=$this->db->get_where('clients',array('is_client'=>1))->result_array();
		$this->load->view('admin/header');
		$this->load->view('admin/view_customer_report',$data);
		$this->load->view('admin/footer');
	}


	public function check_client()
	{
		$company_name=$_POST['company_name'];
		$company=$this->db->get_where('clients',['company_name'=>$company_name])->row_array();
		if($company){
           echo "1";
		}
	}


	public function delete($table,$column,$ID)
	{
		if($table=="rfq"){
            $jump="view_rfq";
		}else{
			$jump="view_lead";
		}
		$this->db->delete($table,[$column=>$ID]);
		if($this->db->affected_rows()>0){
           redirect(base_url().'admin/'.$jump);
		}else{
			redirect(base_url().'admin'.$jump);
		}
	}


	public function add_employee_hr()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/create_employee_hr');
		$this->load->view('admin/footer');

	}
	public function create_appointment()
	{
		$this->load->view('admin2/header');
		$this->load->view('admin2/create_appointment');
		$this->load->view('admin2/footer');

	}
	public function add_training_hr()
	{
    $data['departments'] = $this->admin_model->get_data('departments');
		$this->load->view('admin2/header');
		$this->load->view('admin2/create_training_hr', $data);
		$this->load->view('admin2/footer');

	}
	public function manage_training_hr()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/manage_training_hr');
		$this->load->view('admin/footer');

	}
	public function add_recruitment_hr()
	{
		$this->load->view('admin2/header');
		$this->load->view('admin2/add_recruitment_hr');
		$this->load->view('admin2/footer');

	}
	public function add_organogram_hr()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/add_organogram_hr');
		$this->load->view('admin/footer');

	}
	public function add_rephier_hr()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/add_rephier_hr');
		$this->load->view('admin/footer');

	}


	public function client_creation_insert()
	{
		$count_scope=count($_POST['scope_id']);
		$scope=$_POST['scope_id'];
		$price=$_POST['price'];
		$avg_tat=$_POST['avg_tat'];


		$country=explode("-",$_POST['country_id']);
		$reference_code="ITGS-".$_POST['client_type']."-".$_POST['abbreviation']."-".$country[1]."-".date("Y");
		$data_client = array(
    'client_name'=>$this->input->post('client_name'),
    'reference_code'=>$reference_code,
    'service_id'=>implode(",",$this->input->post('service_id[]')),
    'client_type'=>$this->input->post('client_type'),
    'abbreviation'=>$this->input->post('abbreviation'),
    'country_id'=>$country[0],
    'address'=>$this->input->post('address'),
    'client_contact'=>$this->input->post('client_contact'),
    'email'=>$this->input->post('email'),
    'notification_email'=>implode(",",$this->input->post('notification_email[]')),
    'website'=>$this->input->post('website'),
    'employee_id'=>$this->input->post('employee_id'),
    'reg_date'=>$this->input->post('reg_date'),
    'reg_num'=>$this->input->post('reg_num'),
    'tax_num'=>$this->input->post('tax_num'),
    'status'=>$this->input->post('status'),
    'contract_start_date'=>$this->input->post('contract_start_date'),
    'contract_end_date'=>$this->input->post('contract_end_date'),
    'sub_account'=>$this->input->post('sub_account'),
    'login_name'=>$this->input->post('login_name'),
    'password'=>$this->input->post('password'),
    'is_parent'=>$this->input->post('is_parent')

		);
		$this->db->insert("client", $data_client);
		$client_id=$this->db->insert_id();
		// echo $client_id;
	    for ($i=0; $i < $count_scope ; $i++) {
	    	   $array_scope=array(
	    	   	'client_id'=>$client_id,
	    	   	'scope_id'=>$scope[$i],
			    	// 'price'=>$price[$i],
			    	'avg_tat'=>$avg_tat[$i],
	    	   );
	    	    $this->db->insert('assign_client_services',$array_scope);
	    	}
	    	redirect('admin/admin_dashboard');
	}
	public function client_creation_insert1()
	{
		$count_scope=count($_POST['scope_id']);
		$scope=$_POST['scope_id'];
		$price=$_POST['price'];
		$avg_tat=$_POST['avg_tat'];
		$parent_id=$_POST['parent_id'];



		$country=explode("-",$_POST['country_id']);
		$reference_code="ITGS-".$_POST['client_type']."-".$_POST['abbreviation']."-".$country[1]."-".date("Y");
		$data_client = array(
    'client_name'=>$this->input->post('client_name'),
    'reference_code'=>$reference_code,
    'service_id'=>implode(",",$this->input->post('service_id[]')),
    'client_type'=>$this->input->post('client_type'),
    'abbreviation'=>$this->input->post('abbreviation'),
    'country_id'=>$country[0],
    'address'=>$this->input->post('address'),
    'client_contact'=>$this->input->post('client_contact'),
    'email'=>$this->input->post('email'),
    'notification_email'=>implode(",",$this->input->post('notification_email[]')),
    'website'=>$this->input->post('website'),
    'employee_id'=>$this->input->post('employee_id'),
    'reg_date'=>$this->input->post('reg_date'),
    'reg_num'=>$this->input->post('reg_num'),
    'tax_num'=>$this->input->post('tax_num'),
    'status'=>$this->input->post('status'),
    'contract_start_date'=>$this->input->post('contract_start_date'),
    'contract_end_date'=>$this->input->post('contract_end_date'),
    'login_name'=>$this->input->post('login_name'),
    'password'=>$this->input->post('password'),
    'is_parent'=>'0',
    'parent_id'=>$parent_id
		);
		$this->db->insert("client", $data_client);
		$client_id=$this->db->insert_id();
		// echo $client_id;
	    for ($i=0; $i < $count_scope ; $i++) {
	    	   $array_scope=array(
	    	   	'client_id'=>$client_id,
	    	   	'scope_id'=>$scope[$i],
				'price'=>$price[$i],
				'avg_tat'=>$avg_tat[$i],
	    	   );
	    	    $this->db->insert('assign_client_services',$array_scope);
	    	}
	    	redirect(base_url().'admin/client_creation_form1');
	}

	public function client_login()
	{
		$data=array(
			'login_name'=>$_POST['login_name'],
			'password'=>$_POST['password']
		);
		//print_r($data);die;
		if($client=$this->db->get_where('client',$data)->row_array()){
		    //print_r($client);die;
			$this->session->set_userdata($client);
           redirect(base_url().'admin/client_index');
		}else{
      $data['error']="Invalid Credentials";
           $this->load->view('admin/login_client',$data);

		}

	}

	public function client_login_view()
	{
		$this->load->view('admin/login_client');


	}
	public function employee_login_view()
	{
		$this->load->view('admin/login_employee');


	}

	public function employee_login()
	{
		$data=array(
			'login_name'=>$_POST['login_name'],
			'password'=>$_POST['password']
		);
    $client= $this->db->query('select * from employee_itgs where (login_name = "'.$data['login_name'].'" OR username = "'.$data['login_name'].'") AND password = "'.$data['password'].'" ')->row_array();
		if($client){
      $employee_id = $client['employee_id'];
      $date = date('Y-m-d');
      $resignation = $this->admin_model->select_where_row('resignation',array('employee_id'=>$employee_id,'requested_date <'=>$date,'status'=>1));
      if ($resignation) {
        redirect(base_url().'admin/client_login_view');
      }
			$this->session->set_userdata($client);
           redirect(base_url().'admin/employee_dashboard');
		}else{
      $data['error']="Invalid Credentials";
           $this->load->view('admin/login_client',$data);

		}
	}


	public function assign_team($case_id)
	{
		$data['client_details']=$this->db->query("select case_request.*,client.*,country.country_name,country.country_code from client inner join case_request on (case_request.client_id=client.client_id) INNER JOIN country ON (country.id=client.country_id) where case_request.id='".$case_id."'")->row_array();
   $data['subjects']=$this->db->get_where("subject_case",['case_id'=>$case_id])->result_array();
   

   $data['members']=$this->db->query("SELECT * FROM `employee_itgs` WHERE `role` = 'TL'")->result_array();
   $data['members1']=$this->db->query("SELECT * FROM `employee_itgs` WHERE `role` = 'TM'")->result_array();

		$this->load->view('admin2/header',$data);
		$this->load->view('admin2/form2');
		$this->load->view('admin2/footer');
	}


	public function employee_dashboard()
	{
    
     if ($_SESSION['id']) {
           $user_id=$_SESSION['id'];
           $where="where memo_user.userID=".$user_id;
        }if ($_SESSION['login_id']) {
           $user_id=$_SESSION['login_id'];
           $where="where memo.user_id=".$user_id;

        }

          
            $data['memos']=$this->db->query("select memo.*,login.login_name as assigned_by from memo inner JOIN login on (login.login_id=memo.user_id) left join memo_user on (memo_user.memoID=memo.id) ".$where."  or memo.departmentID='all' GROUP BY memo.id")->result_array();
      

		$this->load->view('admin2/header');
		$this->load->view('admin2/employee_dashboard',$data);
		$this->load->view('admin2/footer');
	}

		public function insert_case()
	{



    $all_files = $_FILES;


  error_reporting(0);
    $count_subject=count($_POST['subject_name']);
    $subject_name = $_POST['subject_name'];
    $subject_type = $_POST['subject_type'];
    $subject_detail = $_POST['other_details'];
    $subject_attachement = $_FILES['subject_attachement'];


    $subject_attachement_ids = $_POST['subject_files_id'];

    $subject_attachement_ids = $subject_attachement_ids[0];
    $subject_attachement_ids = explode(',,', $subject_attachement_ids);

    $data_case = array(
  'client_reference'=>$this->input->post('client_reference'),
    'client_id'=>$_SESSION['client_id'],
    'reference_code'=>$this->input->post('reference_code'),
    'case_date'=>$this->input->post('case_date'),
    'due_date_type'=>$this->input->post('due_date_type'),
    'case_due_date'=>$this->input->post('case_due_date'),
    'case_status'=>0
      );
    $this->db->insert('case_request', $data_case);
    $case_id= $this->db->insert_id();

     $activity_id=$_POST['scope_id'];
             $due_date=$_POST['due_date'];

          $activity_attachement = $_FILES['activity_attachement'];

             $count_activity=count($activity_id);
      
    for ($i=0; $i < $count_subject; $i++) {
$ids = explode(',', $subject_attachement_ids[$i]);
$file_links = $this->admin_model->get_image_link($ids);

$links = array();
for ($p=0; $p < sizeof($file_links); $p++) { 
  $links[] = $file_links[$p]['file'];
}

      $data_subject=array(
        'case_id'=>$case_id,
        'subject_name'=>$subject_name[$i],
        'subject_type'=>$subject_type[$i],
        'other_details'=>$subject_detail[$i],
        'subject_attachement'=>implode(',', $links),
      );


      $this->db->insert('subject_case',$data_subject);
            $subject_id=$this->db->insert_id();


   $scope_id=$_POST['scope_id'][$i];
   $due_dates=$due_date[$i];
   $act_file_id = $this->input->post('act_file_id');
   $act_file_id = $act_file_id[$i];
  


      $file_name=$_FILES['activity_attachment'][$i]['name'];
      $file_tmp=$_FILES['activity_attachment'][$i]['tmp_name'];




      
    for($j=0;$j<count($scope_id);$j++){
     
      $acts = $act_file_id[$scope_id[$j]][0];
     
      $ids = explode(',', $acts);
     
$file_links = $this->admin_model->get_activity_image($ids);


$links = array();
for ($p=0; $p < sizeof($file_links); $p++) { 
  $links[] = $file_links[$p]['file'];
}

    $data=array(
  'activity_id'=>$scope_id[$j],
    'subject_id'=>$subject_id,
    'case_id'=>$case_id,
    'client_id'=>$_SESSION['client_id'],
    'due_date'=>$due_dates[$j],
    'activity_attachement'=>implode(',', $links),
    'activity_status'=>1,
        );
          $this->db->insert("subject_activities",$data);

    }


    }
    $emails['data'] = array(
      'client_reference'=>$this->input->post('client_reference'),
      'reference_code'=>$this->input->post('reference_code'),
      'case_id'=>$case_id
    );
    $message = $this->load->view('emails/new_case',$emails);
    $message = $message->output->final_output;
    $employee = $this->admin_model->get_employee_email($_SESSION['client_id']);
    $notification = array(
      'user_id'=>$employee[0]['id'],
      'user_type'=>'employee',
      'title' => 'New Case Request',
      'message'=>date('Y-m-d'),
      'url'=>'admin/form1/'.$case_id
    );
    $this->admin_model->insert_data("notifications",$notification);
    $notification = array(
      'user_id'=>$_SESSION['client_id'],
      'user_type'=>'client',
      'title' => 'New Case Request',
      'message'=>date('Y-m-d'),
      'url'=>'admin/form1/'.$case_id
    );
    $this->admin_model->insert_data("notifications",$notification);
   
    $this->sendmail('verify@itgsgroup.com',$employee[0]['login_name'],'Visiting Case Request',$message);
    $employee = $this->admin_model->get_client_email($case_id);
    $this->sendmail('verify@itgsgroup.com',$employee[0]['email'],'Visiting Case Request',$message,$employee[0]['notification_email']);
      redirect(base_url().'admin/new_case_request?case_id='.$case_id);

	}

public function update_case($status = null)
	{ 

		$case_id= $_POST['case_id'];
		error_reporting(0);
		$count_subject=count($_POST['subject_name']);
		$subject_name = $_POST['subject_name'];
		$subject_type = $_POST['subject_type'];
		$subject_detail = $_POST['other_details'];
    $subject_attachement_ids = $_POST['subject_files_id'];
    $subject_attachement_ids = $subject_attachement_ids[0];
    $subject_attachement_ids = explode(',,', $subject_attachement_ids);
		$data_case = array(
	    'client_reference'=>$this->input->post('client_reference'),
      'client_id'=>$_SESSION['client_id'],
      'case_date'=>$this->input->post('case_date'),
      'due_date_type'=>$this->input->post('due_date_type'),
      'case_due_date'=>$this->input->post('case_due_date'),
		);
		$this->db->update('case_request', $data_case,['id'=>$case_id]);
    $due_date=$_POST['due_date'];
   

    $this->db->select('id')
             ->from('subject_case')
             ->where('case_id', $case_id);
    $sub_current = $this->db->get()->result_array();
    $sub_delete = array();


		for ($i=0; $i < $count_subject; $i++) {
      $activity_id=$_POST['scope_id'][$i];
      $count_activity=count($activity_id);
      $due_dates=$due_date[$i];
      $act_file_id = $this->input->post('act_file_id');
      $act_file_id = $act_file_id[$i];
      $ids = explode(',', $subject_attachement_ids[$i]);
      $file_links = $this->admin_model->get_image_link($ids);
      $links = array();
      for ($p=0; $p < sizeof($file_links); $p++) { 
        $links[] = $file_links[$p]['file'];
      }
      $subject_id=$_POST['subject_id'][$i];
      if (!empty($subject_id)) {
        $key = array_search($subject_id, array_column($sub_current, 'id'));
        if (array_key_exists($key,$case)) {

          $sub_delete[] = $key;
        }
    		$data_subject=array(
    			'case_id'=>$case_id,
    			'subject_name'=>$subject_name[$i],
    			'subject_type'=>$subject_type[$i],
    			'other_details'=>$subject_detail[$i],
    			'subject_attachement'=>implode(',', $links),
    		);
        $this->db->update('subject_case',$data_subject,['id'=>$subject_id]);
        $sub_activity = $this->admin_model->select_where('subject_activities',array('subject_id'=>$subject_id));
        for ($j=0; $j < $count_activity ; $j++) {
          $acts = $act_file_id[$activity_id[$j]][0];
          $ids = explode(',', $acts);
          $file_links = $this->admin_model->get_activity_image($ids);
          $links = array();
          for ($p=0; $p < sizeof($file_links); $p++) { 
            $links[] = $file_links[$p]['file'];
          }
          $subject_activity=$_POST['a_id'][$subject_id];
          $subject_activity = array_filter($subject_activity);
          if ($subject_activity[$j] && !empty($subject_activity[$j])) {
            $data_activity=array (
              'activity_id'=>$activity_id[$j],
              'subject_id'=>$subject_id,
              'case_id'=>$case_id,
              'client_id'=>$_SESSION['client_id'],
              'due_date'=>$due_dates[$j],
              'activity_attachement'=>implode(',', $links),
              'activity_status'=>1,
            );
            $this->db->update('subject_activities',$data_activity,['id'=>$subject_activity[$j]]);
          }
          else{
            $data=array(
              'activity_id'=>$activity_id[$j],
              'subject_id'=>$subject_id,
              'case_id'=>$case_id,
              'client_id'=>$_SESSION['client_id'],
              'due_date'=>$due_dates[$j],
              'activity_attachement'=>implode(',', $links),
              'activity_status'=>1,
            );
            $this->db->insert("subject_activities",$data);
          }
        }
      }
      else{ 
        $data_subject=array(
          'case_id'=>$case_id,
          'subject_name'=>$subject_name[$i],
          'subject_type'=>$subject_type[$i],
          'other_details'=>$subject_detail[$i],
          'subject_attachement'=>implode(',', $links),
        );
        $this->db->insert('subject_case',$data_subject);
        $subject_id=$this->db->insert_id();
        for ($j=0; $j < $count_activity ; $j++) {
          $acts = $act_file_id[$activity_id[$j]][0];
          $ids = explode(',', $acts);
          $file_links = $this->admin_model->get_activity_image($ids);
          $links = array();
          for ($p=0; $p < sizeof($file_links); $p++) { 
            $links[] = $file_links[$p]['file'];
          }
          $data=array(
            'activity_id'=>$activity_id[$j],
            'subject_id'=>$subject_id,
            'case_id'=>$case_id,
            'client_id'=>$_SESSION['client_id'],
            'due_date'=>$due_dates[$j],
            'activity_attachement'=>implode(',', $links),
            'activity_status'=>1,
          );
          $this->db->insert("subject_activities",$data);
        }
      }
		}
    if (sizeof($sub_delete) >= 1) {
      for ($i=0; $i < sizeof($sub_delete); $i++) { 
        unset($sub_current[$sub_delete[$i]]);
      }
    }
    // $sub_current = array_values($sub_current);
    // if (sizeof($sub_current) >= 1) {
    //   for ($i=0; $i < sizeof($sub_current); $i++) { 
    //     $this->admin_model->delete_data('subject_case',array('id' => $sub_current[$i]['id']));
    //     $this->admin_model->delete_data('subject_activities',array('subject_id' => $sub_current[$i]['id']));
    //   }
    // }
    $emails['data'] = array(
      'client_reference'=>$this->input->post('client_reference'),
      'reference_code'=>$this->input->post('reference_code'),
      'case_id'=>$case_id
    );
    $message = $this->load->view('emails/new_case',$emails);
    $message = $message->output->final_output;
    $employee = $this->admin_model->get_employee_email($_SESSION['client_id']);
    $notification = array(
      'user_id'=>$employee[0]['id'],
      'user_type'=>'employee',
      'title' => 'Update Case Request',
      'message'=>date('Y-m-d'),
      'url'=>'admin/form1/'.$case_id
    );
    $this->admin_model->insert_data("notifications",$notification);
    $notification = array(
      'user_id'=>$_SESSION['client_id'],
      'user_type'=>'client',
      'title' => 'Update Case Request',
      'message'=>date('Y-m-d'),
      'url'=>'admin/form1/'.$case_id
    );
    $this->admin_model->insert_data("notifications",$notification);

    $this->sendmail('verify@itgsgroup.com',$employee[0]['login_name'],'Visiting Case Request',$message);
    $employee = $this->admin_model->get_client_email($case_id);
    $this->sendmail('verify@itgsgroup.com',$employee[0]['email'],'Visiting Case Request',$message,$employee[0]['notification_email']);
    if ($status != null) {
      redirect(base_url().'admin/new_case_request?case_id='.$case_id);
    }
    else{
      redirect(base_url().'admin/form1/'.$case_id);
    }
	}


	public function add_client_chat()
	{

		$data=$_POST;

    $u_id = $data['employee_id'];
    $u_type = $data['employee_type'];
    unset($data['employee_id']);
    unset($data['employee_type']);
    if ($u_type == 'employee') {
      $url = 'screening_operation';
    }
    elseif ($u_type == 'client') {
      $url = 'case_dashboard';
    }
    
		         $config['upload_path']       = './uploads/chat_attachment/';
                 $config['allowed_types'] = 'pdf|doc|docx|jpg|png|rtf|txt|xlsx|xls|pptx|jpeg|7z|rar|dot';
  $config['max_size'] = '60000';
  $config['max_width'] = '10024';
  $config['max_height'] = '7068';

                $this->load->library('upload', $config);

        if (  $this->upload->do_upload('attachement'))
        {
			$data['attachement']=$this->upload->data('file_name');
			$data['is_attachement']=1;
		}else{
			$data['is_attachement']=0;
		}
    if ($_SESSION['client_id']) {
      $data['type'] = 'employee';
    }
    else{
      $data['type'] = 'client';
    }

		$this->db->insert("client_chat",$data);
		if($this->db->insert_id()){
             echo "Sent";
      $notification = array(
        'user_id'=>$u_id,
        'user_type'=>$u_type,
        'title' => 'New Message',
        'message'=>date('Y-m-d'),
        'url'=>'admin/'.$url
      );
      $this->db->insert("notifications",$notification);
		}else{
			echo "Error";
		}
	}


	public function load_client_chat()
	{
    $case_id = $_POST['case_id'];
    if ($_SESSION['client_id']) {
      $type = 'client';
    }
    else{
      $type = 'employee';
    }
    $this->admin_model->update_data('client_chat',array('is_view'=>1),array('case_id'=>$case_id,'type'=>$type));
	    $where = array(
	        'case_id'=>$_POST['case_id']
	        );
		$chat=$this->db->get_where('client_chat',$where)->result_array();
		foreach ($chat as $key ) {
      if ($key['sender_id'] == $_SESSION['employee_name'] || $key['sender_id'] == $_SESSION['client_name']) {
        $r = 'right';

      }
      else{
        $r = '';
      }
			?>

						<li class="<?php echo $r ?> clearfix ">
							<div class=chat-avatar>
								<img src="<?php echo base_url() ?>admin_assets/assets/dist/img/avatar4.png" alt=male>
								<i><?php echo $key['chat_date_time']; ?></i>
							</div>
							<div class=conversation-text>
								<div class=ctext-wrap>
									<i><?php echo $key['sender_id'] ?></i>
									<p><?php echo $key['message'] ?></p>
									<?php if ($key['attachement']): ?>
				                 <a href="<?php echo base_url() ?>uploads/chat_attachment/<?php echo $key['attachement'] ?>" target="_blank"><?php echo $key['attachement'] ?></a>

									<?php endif ?>
								</div>
							</div>
						</li>
			<?php
		}

	}


  public function put_onhold($case_id)
  {

    $this->db->update('case_request',['case_status'=>8,'hold_date' => date("Y-m-d")],['id'=>$case_id]);
    $client = $this->admin_model->select_where('case_request', array('id'=>$case_id));
    $u_id = $client[0]['client_id'];
    $notification = array(
      'user_id'=>$u_id,
      'user_type'=>'client',
      'title' => 'Case onhold',
      'message'=>date('Y-m-d'),
      'url'=>'admin/form1/'.$case_id
    );
    $this->admin_model->insert_data("notifications",$notification);
    redirect(base_url().'admin/form1/'.$case_id);
  }

  public function put_unhold($case_id)
  {

    $this->db->update('case_request',['case_status'=>7,'unhold_date' => date("Y-m-d")],['id'=>$case_id]);
    $client = $this->admin_model->select_where('case_request', array('id'=>$case_id));
    $u_id = $client[0]['client_id'];
    $notification = array(
      'user_id'=>$u_id,
      'user_type'=>'client',
      'title' => 'Case unhold',
      'message'=>date('Y-m-d'),
      'url'=>'admin/form1/'.$case_id
    );
    $this->admin_model->insert_data("notifications",$notification);
    redirect(base_url().'admin/form1/'.$case_id);
  }


	public function insert_team()
	{
    //print_r($_POST);die;
    //error_reporting('-1');
    if (!empty($_POST['subject_id'])) {
      $subject = $_POST['subject_id'];
      if (isset($_POST['team_member'])) {
         $count=count($_POST['team_member']);
       } 
         else{
          $count=0;
         }
         if ($_POST['team_lead'] != '' && $_POST['team_lead'] != null) {
           $lead = $_POST['team_lead'];
         }
         else{
          $lead = $_SESSION['id'];
         }
      for ($i=0; $i < sizeof($subject); $i++) {

         $tl = $this->admin_model->select_where('case_team',array('case_id'=>$_POST['case_id'],'subject_id'=>$subject[$i],'team_lead_id'=>$lead,));
         if (empty($tl)) {
           $data=array(
                'case_id'=>$_POST['case_id'],
                'subject_id'=>$subject[$i],
                'team_lead_id'=>$lead,
            );
            $this->db->insert('case_team',$data);
              $case_team_id=$this->db->insert_id();
         }
         else{
          $case_team_id=$tl[0]['id'];
         }
         if ($count >= 1) {
           for ($a=0; $a <$count ; $a++) {

            $data_member=array(
                'subject_id'=>$subject[$i],
                'case_team_id'=>$case_team_id,
                'team_member_id'=>$_POST['team_member'][$a],
            );
            $this->db->insert('case_team_members',$data_member);

            }
            
         }
         $this->db->update("subject_case",['is_assigned'=>1],['id'=>$_POST['subject_id'][$i]]);
  }
      $update_status=$this->db->update('case_request',['case_status'=>7],['id'=>$_POST['case_id']]);
      $client = $this->admin_model->select_where('case_request', array('id'=>$_POST['case_id']));
      $u_id = $client[0]['client_id'];
      $notification = array(
        'user_id'=>$u_id,
        'user_type'=>'client',
        'title' => 'Case in progress',
        'message'=>date('Y-m-d'),
        'url'=>'admin/form1/'.$_POST['case_id']
      );
      $this->admin_model->insert_data("notifications",$notification);
      redirect(base_url().'admin/full_case_summary/'.$_POST['case_id']);
    }
    else{
      redirect(base_url().'admin/assign_team/'.$_POST['case_id']);
    }
       	
	}


	public function full_case_summary($case_id)
	{
		$data['case']=$this->db->get_where('case_request',['id'=>$case_id])->row_array();
		$data['subjects']=$this->db->get_where('subject_case',['case_id'=>$case_id])->result_array();


	// echo "<pre>";
	// print_r($data);
	$this->load->view("admin2/header",$data);
	$this->load->view("admin2/full_case_summary");
	$this->load->view("admin2/footer");


	}


  public function insert_team_lead_only($case_id,$team_lead)
  {
     $data=array(
              'case_id'=>$case_id,
              'subject_id'=>0,
              'team_lead_id'=>$team_lead,
          );
          $this->db->insert('case_team',$data);
      if($this->db->insert_id()){
        echo "<script>
alert('Successfully Assigned TeamLead');
window.location.href='".base_url()."admin/view_teamlead';
        </script>";
      }else{

        echo "<script>
alert('Error in Assigning Team Lead');
window.location.href='".base_url()."admin/view_teamlead';
        </script>";
      }
  }


	public function view_full_summary(){

	    $subject_id=$_POST['subject_id'];
	    $activities=$this->db->query("select subject_activities.*,scope_of_work.scope_name from subject_activities inner join scope_of_work on (scope_of_work.id=subject_activities.activity_id) where subject_activities.subject_id=".$subject_id)->result_array();

		$teams=$this->db->query("select subject_case.subject_name,case_team.*,employee_itgs.employee_name as team_lead from case_team inner join subject_case on (subject_case.id=case_team.subject_id) inner join employee_itgs on (case_team.team_lead_id=employee_itgs.id) where case_team.subject_id=".$subject_id)->row_array();

		$team_members=$this->db->query("select employee_itgs.employee_name as team_member,case_team_members.team_member_id from employee_itgs inner join case_team_members on (case_team_members.team_member_id=employee_itgs.id) where case_team_members.subject_id=".$subject_id)->result_array();

		?>

		 <div class="col-sm-6">
                            <div class="panel panel-bd">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Subject Activity Details </h4>
                                    </div>
                                </div>
                                <div class="panel-body">

                                    <div class="table-responsive">
                                        <table id="" class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Scope Name</th>
                                                    <th>Due Date</th>
                                                    <th>Attachement</th>
                                                </tr>
                                            </thead>
                                           <tbody>
                                                   <?php foreach ($activities as $key): ?>
                                             <tr>
                                                <td><?php echo $key['scope_name']; ?> </td>
                                                <td><?php echo $key['due_date']; ?> </td>
                                                <td><?php echo $key['activity_attachement']; ?> </td>
                                            </tr>
                                        <?php endforeach ?>
                                           </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="panel panel-bd">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Case Team Detail</h4>
                                    </div>
                                </div>
                                <div class="panel-body">

                                    <div class="table-responsive">
                                        <table id="" class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Subject Name</th>
                                                    <th>Team Lead</th>
                                                    <th>Team Member</th>
                                                    <?php
                                                      if ($teams['team_lead_id'] == $_SESSION['id']) {
                                                    ?>
                                                    <th>Assign Activity</th>
                                                    <?php } ?>

                                                </tr>
                                            </thead>
                                           <tbody>
                                                   <?php foreach ($team_members as $key): ?>
                                             <tr>
                                                <td><?php echo $teams['subject_name']; ?> </td>
                                                <td><?php echo $teams['team_lead']; ?> </td>
                                                <td><?php echo $key['team_member']; ?> </td>
                                                <?php
                                                      if ($teams['team_lead_id'] == $_SESSION['id']) {
                                                    ?>
                                                <td>
                                                    <a class="btn btn-primary" data-toggle="modal" href='#assign_activity' onclick="assign_activity_user(<?php echo $key['team_member_id'] ?>,<?php echo $subject_id ?>)">Assign Activity</a>
                                                     </td>
                                                <?php } ?>

                                            </tr>
                                        <?php endforeach ?>
                                           </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

		<?php

	}


	public function get_subject_activities(){
	    $subject_id=$_POST['subject_id'];

	    $activities=$this->db->query("select subject_activities.*,scope_of_work.scope_name from subject_activities inner join scope_of_work on (scope_of_work.id=subject_activities.activity_id) where subject_activities.subject_id=".$subject_id)->result_array();

	    $select_assigned_activities=$this->db->get_where('assign_activity_to_user',['subject_id'=>$subject_id])->result_array();

	    $activityy=[];
	    $subjects=[];
	    if($select_assigned_activities){
	    foreach($select_assigned_activities as $assigned){
	        $activityy[]=$assigned['activity_id'];
	        $subjects[]=$assigned['subject_id'];
	    }

	    }
	    foreach($activities as $activity){
	        if(in_array($activity['activity_id'],$activityy) && in_array($activity['subject_id'],$subjects)){
	        ?>
	        <fieldset style="border:2px red solid;">
	            <legend>This Activity is already Assigned</legend>

	       <input type="checkbox" disabled="" name="activity_id[]" value="<?php echo $activity['activity_id'] ?>"> <?php echo $activity['scope_name'] ?> - Due Date : <?php echo $activity['due_date'] ?>
	          <br> New Due Date <input type="date" disabled="" name="due_date[]" size="6">
	          <br>
	          <br>
	        </fieldset>
	          <?php
	          }else{
	              ?>
	                 <div><input type="checkbox" name="activity_id[]" value="<?php echo $activity['activity_id'] ?>"> <?php echo $activity['scope_name'] ?> - Due Date : <?php echo $activity['due_date'] ?>
	          <br> New Due Date <input type="date" name="due_date[]" size="6"><br><input type="file" multiple="" class="subject_file" name="activity_file[]">
            <input type="hidden" name="file_id[]">
                          
                            <ul>
                              <br><br>
                              <table class="table table-responsive" style="display: none">
                                <thead>
                                  <tr>
                                    <th style="border: 1px solid #ccc;">S.no</th>
                                    <th style="border: 1px solid #ccc;">Uploaded File</th>

                                    <th style="border: 1px solid #ccc;">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                </tbody>
                              </table>
                            </ul>
                          </div>
	<?php
	          }
	     ?>
	        <br>
	        <br>
	        <?php
	    }

	}


	public function assign_team_member(){


	    $activity_id=$_POST['activity_id'];
	    $due_date=$_POST['due_date'];
      $file_id = $_POST['file_id'];
      // $subject_attachement = $_FILES['activity_file'];
      // //$activity_file=$_POST['activity_file'];
      // $file = [];
      // $config['upload_path'] = './uploads/activity_files';
      // $config['allowed_types'] = 'pdf|doc|docs|jpg';
      // $config['max_size'] = '10000';
      // $config['max_width'] = '1024';
      // $config['max_height'] = '768';
      // $this->load->library('upload', $config);
      // $files = $_FILES;
      // $cpt = count($_FILES['activity_file']['name']);
      // for($i=0; $i<$cpt; $i++)
      // {           
      //     $_FILES['activity_file']['name']= $files['activity_file']['name'][$i];
      //     $_FILES['activity_file']['type']= $files['activity_file']['type'][$i];
      //     $_FILES['activity_file']['tmp_name']= $files['activity_file']['tmp_name'][$i];
      //     $_FILES['activity_file']['error']= $files['activity_file']['error'][$i];
      //     $_FILES['activity_file']['size']= $files['activity_file']['size'][$i];    

      //     //$this->upload->initialize($this->set_upload_options());
      //     // $this->upload->do_upload('files[]');
      //     if (!$this->upload->do_upload('activity_file'))
      //     {  
      //       $file[] = [];
      //     }
      //     else{
      //       $file[] = array('image' => '/uploads/activity_files/'.$this->upload->data('file_name'));
      //     }
      // }
//print_r($file);die;
	    for($i=0;$i<count($activity_id);$i++){

	        $data=array(
	'case_id'=>$_POST['case_id'],
	'subject_id'=>$_POST['subject_id'],
	'member_id'=>$_POST['team_member_id'],
    'activity_id'=>$activity_id[$i],
    'due_date'=>$due_date[$i],
    //'file'=>$file[$i]['image']
	            );
          $ids = explode(',', $file_id[$i]);
      $file_links = $this->admin_model->get_image_link($ids);
      $links = array();
      for ($p=0; $p < sizeof($file_links); $p++) { 
        $links[] = '/uploads/attachment/'.$file_links[$p]['file'];
      }
      //print_r($links);die;
      $data['file']=implode(',', $links);


$this->db->insert('assign_activity_to_user',$data);

	    }
      redirect('admin/full_case_summary/'.$_POST['case_id']);
	    //echo $_POST['case_id'];

	}

	public function case_summary($subject_id,$case_id)
	{
		$data['case']=$this->db->get_where('case_request',['id'=>$case_id])->row_array();
		$data['subjects']=$this->db->get_where('subject_case',['case_id'=>$case_id])->result_array();

		$data['activities']=$this->db->query("select subject_activities.*,scope_of_work.scope_name from subject_activities inner join scope_of_work on (scope_of_work.id=subject_activities.activity_id) where subject_activities.subject_id=".$subject_id)->result_array();

		$data['teams']=$this->db->query("select subject_case.subject_name,case_team.*,employee_itgs.employee_name as team_lead from case_team inner join subject_case on (subject_case.id=case_team.subject_id) inner join employee_itgs on (case_team.team_lead_id=employee_itgs.id) where case_team.subject_id=".$subject_id)->row_array();

		$data['team_members']=$this->db->query("select employee_itgs.employee_name as team_member,case_team_members.team_member_id from employee_itgs inner join case_team_members on (case_team_members.team_member_id=employee_itgs.id) where case_team_members.subject_id=".$subject_id)->result_array();
	// echo "<pre>";
	// print_r($data);
	$this->load->view("admin2/header",$data);
	$this->load->view("admin2/case_summary");
	$this->load->view("admin2/footer");


	}


	public function case_summary_demo($subject_id,$case_id)
	{
		$data['case']=$this->db->get_where('case_request',['id'=>$case_id])->row_array();
		$data['subjects']=$this->db->get_where('subject_case',['case_id'=>$case_id])->result_array();
		$data['activities']=$this->db->query("select subject_activities.*,scope_of_work.scope_name from subject_activities inner join scope_of_work on (scope_of_work.id=subject_activities.activity_id) where subject_activities.subject_id=".$subject_id)->result_array();

		$data['teams']=$this->db->query("select subject_case.subject_name,case_team.*,employee_itgs.employee_name as team_lead from case_team inner join subject_case on (subject_case.id=case_team.subject_id) inner join employee_itgs on (case_team.team_lead_id=employee_itgs.id) where case_team.subject_id=".$subject_id)->row_array();
		$data['team_members']=$this->db->query("select employee_itgs.employee_name as team_member,case_team_members.team_member_id from employee_itgs inner join case_team_members on (case_team_members.team_member_id=employee_itgs.id) where case_team_members.subject_id=".$subject_id)->result_array();
	echo "<pre>";
	print_r($data);
	}


	public function insert_subject_activity(){

	    $file_name=$_FILES['activity_attachment']['name'];
	    $file_tmp=$_FILES['activity_attachment']['tmp_name'];

	    $activity_id=$_POST['scope_id'];

	    for($i=0;$i<count($activity_id);$i++){

	       $name=$file_name[$i+1];
	       $tmp_name=$file_tmp[$i+1];
	       $db_name="";

	       print_r($name[0]);
	      if($name[0]){

	       for($j=0;$j<count($name);$j++){
          move_uploaded_file($tmp_name[$j],"./uploads/activity_attachment/".$name[$j]);
	           $db_name.=$name[$j].",";
	       }
	      }else{
	       $db_name="";

	      }



	  $data=array(
	'activity_id'=>$activity_id[$i],
    'subject_id'=>$_POST['subject_id'],
    'case_id'=>$_POST['case_id'],
    'client_id'=>$_SESSION['client_id'],
    'due_date'=>$_POST['due_date'][$i],
    'activity_attachement'=>$db_name,
    'activity_status'=>1,
	      );
	        $this->db->insert("subject_activities",$data);
	    }
	   echo "done";
	}


	public function create_report_request(){
	    $data=array(
	'case_id'=>$this->input->post('report_case_id'),
    'subject_id'=>$this->input->post('report_subject_id'),
    'activity_id'=>$this->input->post('report_activity_id'),
    'aplicant_name'=>$this->input->post('aplicant_name'),
    'father_name'=>$this->input->post('father_name'),
    'cnic'=>$this->input->post('cnic'),
    'address'=>$this->input->post('address'),
    'contact_detail'=>$this->input->post('contact_detail')
	        );

	        if($this->db->insert('create_report_activity',$data)){

	            echo "<script>alert('Report Creation Report Has been Inserted');
	            window.location.href='".base_url()."admin/job_dashboard'</script>";
	        }else{
	             echo "<script>alert('Error in Inserting Report');
	            window.location.href='".base_url()."admin/job_dashboard'</script>";
	        }



	}
	public function assign_vendor_request(){



        //  die(print_r($_POST));
	       $data=array(







    'case_id'=>$this->input->post('vendor_case_id'),
    'subject_id'=>$this->input->post('vendor_subject_id'),
    'activity_id'=>$this->input->post('vendor_activity_id'),
    'vendor_id'=>$this->input->post('vendor_id'),
    'date_time'=>$this->input->post('date_time'),
    'type_of_service'=>$this->input->post('type_of_service'),
    'remarks'=>$this->input->post('remarks'),

    );
         if ($this->input->post('sub_category')) {
           $data['sub_scope_id'] = $this->input->post('sub_category');
         }
         $last = $_POST['last_assign'];

	    // if(move_uploaded_file($_FILES['file']['tmp_name'],'./uploads/vendor_request/'.$_FILES['file']['name'])){
	    //     $data['file']=$_FILES['file']['name'];

	    // }else{
	    //     $data['file']="";
	    // }
$ids = explode(',', $_POST['file_id']);
  $file_links = $this->admin_model->get_image_link($ids);
  $links = array();
  for ($p=0; $p < sizeof($file_links); $p++) { 
    $links[] = $file_links[$p]['file'];
  }
  $data['file']=implode(',', $links);


            if($this->db->insert('assign_vendor_request',$data)){
$data =array(
        'case_id'=>$this->input->post('vendor_case_id'),
        'charges'=>$this->input->post('charges'),
        'employee_id' => $_SESSION['id'],
        'vendor_id' => $this->input->post('vendor_id'),
        'remarks'=>$this->input->post('remarks'),
        'subject_id'=>$this->input->post('vendor_subject_id'),
        'activity_id'=>$this->input->post('vendor_activity_id'),
      );
  $data['attachment']=implode(',', $links);
  if ($this->input->post('sub_category')) {
           $data['sub_scope_id'] = $this->input->post('sub_category');
         }
  if ($last) {
        $last_row = $this->admin_model->select_where_row('assign_vendor_request',array('case_id'=>$this->input->post('vendor_case_id'),'subject_id'=>$this->input->post('vendor_subject_id'),'activity_id'=>$this->input->post('vendor_activity_id'),'vendor_id'=>$last));
      $this->admin_model->delete_data('assign_vendor_request',array('id'=>$last_row['id']));
      $last_row['old_id'] = $last_row['id'];
      unset($last_row['id']);
      $this->db->insert('cancel_vendor_request',$last_row);
      $this->admin_model->delete_data('case_fund_request',array('case_id'=>$this->input->post('vendor_case_id'),'subject_id'=>$this->input->post('vendor_subject_id'),'activity_id'=>$this->input->post('vendor_activity_id'),'vendor_id'=>$last));
    }
      $this->db->insert('case_fund_request',$data);
	            echo "<script>alert('Vendor Request Has been Inserted');
	            window.location.href='".base_url()."admin/job_dashboard'</script>";
	        }else{
	             echo "<script>alert('Error in Inserting Vendor Request');
	            window.location.href='".base_url()."admin/job_dashboard'</script>";
	        }



	}
	public function insert_fund_request(){
//error_reporting('-1');


      $url='https://www.xe.com/currencyconverter/convert/?Amount='.$data['price'].'&From=PKR&To=USD';


$page = file_get_contents($url);
$doc = new DOMDocument();
@$doc->loadHTML($page);
$divs = $doc->getElementsByTagName('span');
foreach($divs as $div) {
 
    if ($div->getAttribute('class') === 'uccResultAmount') {
         $data['current_PKR_to_USD']= $div->nodeValue;
    }
    if ($div->getAttribute('class') === 'uccInverseResultUnit') {
         $conversion_rate= $div->nodeValue;
    }
}
        $filter_conversion=explode('=', $conversion_rate);
        $further_filter=explode(' ',$filter_conversion[1]);

        if($get_conversion['conversion_rate']<=0){
         $usd=$further_filter[1];
        }
        // echo 120/$usd;
        // die();

     $data=array(
    'case_id'=>$this->input->post('fund_case_id'),
    'subject_id'=>$this->input->post('fund_subject_id'),
    'activity_id'=>$this->input->post('fund_activity_id'),
    'date_time'=>$this->input->post('date_time'),
    'type_of_service'=>$this->input->post('type_of_service'),
    'name_of_ia'=>$this->input->post('name_of_ia'),
    'degree_type'=>$this->input->post('degree_type'),
    'mode_of_payment'=>$this->input->post('mode_of_payment'),
    'official_fee'=>$this->input->post('official_fee'),
    'vendor_changes'=>$this->input->post('vendor_changes'),
    'easy_paisa_charges'=>$this->input->post('easy_paisa_charges'),
    'mobi_cash_charges'=>$this->input->post('mobi_cash_charges'),
    'bank_commission'=>$this->input->post('bank_commission'),
    'postage_courier'=>$this->input->post('postage_courier'),
    'other_charges'=>$this->input->post('other_charges'),
    'mode_of_payment'=>$this->input->post('mode_of_payment'),
    'is_int'=>$this->input->post('is_int'),
    'total_cost'=>$this->input->post('total_cost'),
    'employe_id'=>$_SESSION['id'],

         );

$ids = explode(',', $this->input->post('file_id'));
    $file_links = $this->admin_model->get_image_link($ids);
    $links = array();
    for ($p=0; $p < sizeof($file_links); $p++) { 
      $links[] = $file_links[$p]['file'];
    }
    $data['file']=implode(',', $links);

            if($this->db->insert('fund_request_activity',$data)){
              $employee = $this->admin_model->select_where('employee_itgs',array('id'=>$_SESSION['id']));
              $employee = $employee[0];
              $message = '<table border="1">';
              $message .='<tbody>';
              $message .='<tr>';
              $message .= '<td><strong>Employee Name</strong></td>';
              $message .= '<td>'.$employee['employee_name'].'</td>';
              $message .='</tr>';
              $message .='<tr>';
              $message .= '<td><strong>ITGS Caes Ref No</strong></td>';
              $message .= '<td>'.$this->input->post('client_reference').'</td>';
              $message .='</tr>';
              $message .='<tr>';
              $message .= '<td><strong>Name Of Subject</strong></td>';
              $message .= '<td>'.$this->input->post('name_of_subject').'</td>';
              $message .='</tr>';
              $message .='<tr>';
              $message .= '<td><strong>Type of Service</strong></td>';
              $message .= '<td>'.$this->input->post('type_of_service').'</td>';
              $message .='</tr>';
              $message .='<tr>';
              $message .= '<td><strong>Name Of IA</strong></td>';
              $message .= '<td>'.$this->input->post('name_of_ia').'</td>';
              $message .='</tr>';
               $message .='<tr>';
              $message .= '<td><strong>Total</strong></td>';
              $total = $this->input->post('official_fee') + $this->input->post('vendor_changes') + $this->input->post('easy_paisa_charges') + $this->input->post('mobi_cash_charges') + $this->input->post('bank_commission') + $this->input->post('postage_courier') + $this->input->post('other_charges');
              $message .= '<td>'.$total.'</td>';
              $message .='</tr>';
              $message .='<tr>';
              $message .= '<td><strong>View</strong></td>';
              $message .= '<td>Clieck Here To Detail <a href="'.base_url().'admin/fund_request_view/'.$this->input->post('fund_case_id').'/'.$this->db->insert_id().'">View Request</a></td>';
              $message .='</tr>';
              $message .='</tbody>';
              $message .='</table>';
$employee = $this->admin_model->select_where('employee_itgs',array('role'=>'Internal Auditor'));
for ($i=0; $i < sizeof($employee); $i++) { 
  $this->sendmail('verify@itgsgroup.com',$employee[$i]['login_name'],'Activity Fund Request',$message);
}

	            echo "<script>alert('Fund Request Has been Inserted');
	            window.location.href='".base_url()."admin/job_dashboard'</script>";
	        }else{
	             echo "<script>alert('Error in Inserting Fund Request');
	            window.location.href='".base_url()."admin/job_dashboard'</script>";
	        }

	}


public function insert_fund_request_case(){

     $data=array(
    'case_id'=>$this->input->post('fund_case_id'),
    'date_time'=>$this->input->post('date_time'),
    'mode_of_payment'=>$this->input->post('mode_of_payment'),
    'official_fee'=>$this->input->post('official_fee'),
    'vendor_changes'=>$this->input->post('vendor_changes'),
    'easy_paisa_charges'=>$this->input->post('easy_paisa_charges'),
    'mobi_cash_charges'=>$this->input->post('mobi_cash_charges'),
    'bank_commission'=>$this->input->post('bank_commission'),
    'postage_courier'=>$this->input->post('postage_courier'),
    'other_charges'=>$this->input->post('other_charges'),
    'total_cost'=>$this->input->post('total_cost'),
    'employe_id'=>$_SESSION['id'],

         );



            if($this->db->insert('fund_request_activity',$data)){

              echo "<script>alert('Fund Request Has been Inserted');
              window.location.href='".base_url()."admin/screening_operation'</script>";
          }else{
               echo "<script>alert('Error in Inserting Fund Request');
              window.location.href='".base_url()."admin/screening_operation'</script>";
          }

  }



  /* usama code start */
  public function add_recruitment()
    {
      //echo '<pre>';print_r($this->input->post());die;
      $data = array(
        'first_name' => $this->input->post('first_name'),
        'father_name' => $this->input->post('father_name'),
        'email' => $this->input->post('email'),
        'cnic' => $this->input->post('cnic'),
        'phone' => $this->input->post('phone'),
        'position_name' => $this->input->post('position_name'),
        'intrests' => $this->input->post('intrests'),
        'skills' => $this->input->post('skills'),
        //'other' => $this->input->post('other_r'),
        'job_code' => $this->input->post('job_code'),
        'current_salary_word' => $this->input->post('current_salary_word'),
        'current_salary_number' => $this->input->post('current_salary_number'),
        'expected_salary_word' => $this->input->post('expected_salary_word'),
        'expected_salary_number' => $this->input->post('expected_salary_number')
        //'create_date' => date('m/d/y')
      );

      $config['upload_path'] = './uploads/cv';

      $config['allowed_types'] = 'pdf|doc|word|docs';

      $config['max_size'] = '10000';

      $config['max_width'] = '1024';

      $config['max_height'] = '768';
      if (!empty($_FILES)) {
        $this->load->library('upload', $config);
        if($this->upload->do_upload('file'))
        {
          //$data = array('upload_data' => $this->upload->data());
          $data += array('file' => '/uploads/cv/'.$this->upload->data('file_name') );
        }
        else
        {
          $error = array('error' => $this->upload->display_errors());
        }
      }
      $id = $this->admin_model->insert_data("recruitment",$data);
      if ($id) {
        $qualification = $this->input->post('qualification[]');
        $title = $this->input->post('title[]');
        $start_date = $this->input->post('start_date[]');
        $end_date = $this->input->post('end_date[]');
        $grade_cgpa = $this->input->post('grade_cgpa[]');
        $institution = $this->input->post('institution[]');
        //$award_year = $this->input->post('award_year[]');
        $field_of_study = $this->input->post('field_of_study[]');
        for ($i=0; $i < sizeof($qualification); $i++) { 
          $data = array(
            'recruitment_id' => $id, 
            'qualification' => $qualification[$i], 
            'title' => $title[$i], 
            'start_date' => $start_date[$i], 
            'end_date' => $end_date[$i], 
            'grade_cgpa' => $grade_cgpa[$i], 
            'institution' => $institution[$i], 
            //'award_year' => $award_year[$i], 
            'field_of_study' => $field_of_study[$i]
          );
          $this->admin_model->insert_data("recruitment_qualifications",$data);
        }
        $experience_period = $this->input->post('experience_period[]');
        $company_name = $this->input->post('company_name[]');
        $joining_date = $this->input->post('joining_date[]');
        $other = $this->input->post('other[]');
        for ($i=0; $i < sizeof($experience_period); $i++) { 
          $data = array(
            'recruitment_id' => $id, 
            'experience_period' => $experience_period[$i], 
            'company_name' => $company_name[$i], 
            'joining_date' => $joining_date[$i], 
            'other' => $other[$i]
          );
          $this->admin_model->insert_data("recruitment_experiences",$data);
        }
        redirect('admin/all_cv');
      }
    }  

    public function recruitment_parser()
    {
      //print_r($this->input->post());die;
      //$ids = $this->input->post('id[]');
      if (!empty($this->input->post())) {
        $where = array();
        if (!empty($this->input->post('start_date'))) {
          $old_date = $this->input->post('start_date');             
          $old_date_timestamp = strtotime($old_date);
          $start_date = date('Y-m-d', $old_date_timestamp);
          array_push($where, 'create_date >= "'. $start_date.'"'); 
        }
        if (!empty($this->input->post('end_date'))) {
          $old_date = $this->input->post('end_date');              
          $old_date_timestamp = strtotime($old_date);
          $end_date = date('Y-m-d', $old_date_timestamp);
          array_push($where, 'create_date <= "'. $end_date.'"'); 
        }  
        if (!empty($this->input->post('qualification'))) {
          $qualification = $this->input->post('qualification'); 
          array_push($where, 'qualification = "'. $qualification.'"'); 
        }
        if (!empty($this->input->post('title'))) {
          $title = $this->input->post('title'); 
          array_push($where, 'title = "'. $title.'"'); 
        }
        if (!empty($this->input->post('grade_cgpa'))) {
          $grade_cgpa = $this->input->post('grade_cgpa');
          array_push($where, 'grade_cgpa = "'. $grade_cgpa.'"'); 
        } 
        if (!empty($this->input->post('institution'))) {
          $institution = $this->input->post('institution'); 
          array_push($where, 'institution = "'. $institution.'"'); 
        }
        if (!empty($this->input->post('award_year'))) {
          $award_year = $this->input->post('award_year');
          array_push($where, 'award_year = "'. $award_year.'"'); 
        } 
        if (!empty($this->input->post('field_of_study'))) {
          $field_of_study = $this->input->post('field_of_study');
          array_push($where, 'field_of_study = "'. $field_of_study.'"'); 
        }
        if (!empty($this->input->post('experience'))) { 
          $experience_period = $this->input->post('experience');
          array_push($where, 'experience_period = "'. $experience_period.'"'); 
        } 
        if (!empty($this->input->post('company_name'))) {
          $company_name = $this->input->post('company_name');
          array_push($where, 'company_name = "'. $company_name.'"'); 
        } 
        if (!empty($this->input->post('salary_start'))) {
          $salary_start = $this->input->post('salary_start');
          array_push($where, 'expected_salary_number >= "'. $salary_start.'"'); 
        } 
        if (!empty($this->input->post('salary_end'))) {
          $salary_end = $this->input->post('salary_end');  
          array_push($where, 'expected_salary_number <= "'. $salary_end.'"'); 
        } 

        if (!empty($this->input->post('code'))) {
          $code = $this->input->post('code');
          array_push($where, 'job_code = "'. $code.'"'); 
        } 
        if (!empty($this->input->post('position'))) {
          $position = $this->input->post('position');  
          array_push($where, 'position_name = "'. $position.'"'); 
        } 

        if (!empty($this->input->post('skills'))) {
          $skills = $this->input->post('skills');
          //echo $skills;die;
          array_push($where, 'skills LIKE "%'. $skills.'%"'); 
        } 
        if (!empty($this->input->post('intrests'))) {
          $intrests = $this->input->post('intrests');  
          array_push($where, 'intrests LIKE  "%'. $intrests.'%"'); 
        } 

        array_push($where, 'status = "0"'); 
        $data['cvs'] = $this->admin_model->select_cv($where);
        $data['fileds'] = $this->input->post();
      }
      else{
        $data['cvs'] = $this->admin_model->select_where('recruitment',array('status' => '0'));
      }
      //$data['cvs'] = $this->admin_model->select_cv_ids($ids);
      //print_r($this->db->last_query());
      //echo '<pre>';print_r($data);die;
      $this->load->view('admin2/header');
      $this->load->view('admin2/all_cv_sort', $data);
      $this->load->view('admin2/footer');

    }

    public function update_recruitment()
    {
      $ids = $this->input->post('id[]');
      for ($i=0; $i < sizeof($ids); $i++) { 
        $this->admin_model->update_data('recruitment',array('status' => '1'),array('id' => $ids[$i]));
      }
      redirect('admin/view_emp');
    }

    public function delete_recruitment($id)
    {
      $this->admin_model->update_data('recruitment',array('status' => '0'),array('id' => $id));
      redirect('admin/view_emp');
    }

    public function add_interview()
    {
      //print_r( $this->input->post());die;
      $type = $this->input->post('pay_back');
      $rid = $this->input->post('rid');
      if ($type == 'call_now') {
        $itype = 'call now';
        $date = $this->input->post('cn_date');
        $time = $this->input->post('cn_time');
        $venue = '0';
        $interviewer = '0';
      }elseif ($type == 'in_per') {
        $itype = 'in per';
        $date = $this->input->post('ip_date');
        $time = $this->input->post('ip_time');
        $venue = $this->input->post('ip_venue');
        $interviewer = $this->input->post('ip_interviewer');
      }else {
        $itype = 'call interview';
        $date = $this->input->post('ci_date');
        $time = $this->input->post('ci_time');
        $venue = '';
        $interviewer = $this->input->post('ci_interviewer');
      }
      $data = array(
        'recruitment_id' => $rid,
        'type' => $itype,
        'date' => $date,
        'time' => $time,
        'venue' => $venue,
        'interviewer' => $interviewer
      );
      $id = $this->admin_model->insert_data("interviews",$data);
      $data = array(
        'user_id' => $interviewer,
        'user_type' => 'employee',
        'title' => 'Add New Interview',
        'message' => $date,
        'url' => 'admin/interview_step_1'
      );
      $id = $this->admin_model->insert_data("notifications",$data);
      redirect('admin/view_emp');
    }

    public function add_new_interview()
    {
      //print_r( $this->input->post());die;
      $type = $this->input->post('pay_back');
      $rid = $this->input->post('rid');
      if ($type == 'call_now') {
        $itype = 'call now';
        $date = $this->input->post('cn_date');
        $time = $this->input->post('cn_time');
        $venue = '0';
        $interviewer = '0';
      }elseif ($type == 'in_per') {
        $itype = 'in per';
        $date = $this->input->post('ip_date');
        $time = $this->input->post('ip_time');
        $venue = $this->input->post('ip_venue');
        $interviewer = $this->input->post('ip_interviewer');
      }else {
        $itype = 'call interview';
        $date = $this->input->post('ci_date');
        $time = $this->input->post('ci_time');
        $venue = '';
        $interviewer = $this->input->post('ci_interviewer');
      }
      $data = array(
        'recruitment_id' => $rid,
        'type' => $itype,
        'date' => $date,
        'time' => $time,
        'venue' => $venue,
        'interviewer' => $interviewer
      );
      $id = $this->admin_model->insert_data("interviews",$data);
      $data = array(
        'user_id' => $interviewer,
        'user_type' => 'employee',
        'title' => 'Add New Interview',
        'message' => $date,
        'url' => 'admin/interview_step_1'
      );
      $id = $this->admin_model->insert_data("notifications",$data);
      redirect('admin/interview_step_2');
    }

    public function delete_interview($id)
    {
      $this->admin_model->delete_data('interviews',array('id' => $id));
      redirect('admin/interview_step_1');
    }

    public function add_emp()
    {
      $data = array(
        'full_name' => $this->input->post('full_name'),
        'recruitment_id' => $this->input->post('recruitment_id'),
        'surename' => $this->input->post('surename'),
        'aka' => $this->input->post('aka'),
        'privious_legal_name' => $this->input->post('privious_legal_name'),
        'gender' => $this->input->post('gender'),
        'mother_name' => $this->input->post('mother_name'),
        'father_name' => $this->input->post('father_name'),
        'dob' => $this->input->post('dob'),
        'pob' => $this->input->post('pob'),
        'relationship_status' => $this->input->post('relationship_status'),
        'national_identification_number' => $this->input->post('national_identification_number'),
        'passport_name' => $this->input->post('passport_name'),
        'country_of_passport_issuance' => $this->input->post('country_of_passport_issuance'),
        'ntn' => $this->input->post('ntn'),
        'social_security_number' => $this->input->post('social_security_number'),
        'country_of_citizenship' => $this->input->post('country_of_citizenship'),
        'mobile' => $this->input->post('mobile'),
        'ptcl' => $this->input->post('ptcl'),
        'emergency_contact_name' => $this->input->post('emergency_contact_name'),
        'emergency_contact_number' => $this->input->post('emergency_contact_number'),
        'emergency_contact_address' => $this->input->post('emergency_contact_address'),
        'army_service' => $this->input->post('army_service'),
        'army_des_date' => $this->input->post('army_des_date')
      );
      $config['upload_path'] = './uploads/profile_photo';
      $config['allowed_types'] = 'png|gif|jpg|jpeg';
      $config['max_size'] = '10000';
      $config['max_width'] = '1024';
      $config['max_height'] = '768';
      //die(print_r($_FILES));
      if (!empty($_FILES)) {
        $this->load->library('upload', $config);
        if($this->upload->do_upload('profile_photo'))
        {
          $data += array('image' => '/uploads/profile_photo/'.$this->upload->data('file_name') );
        }
        else
        {
          $error = array('error' => $this->upload->display_errors());
          //print_r($this->upload->display_errors());die;
        }
      }
      $id = $this->admin_model->insert_data("employee",$data);
      if ($id) {
        $data = array(
          'employee_id'=>$id,
          'current_address' => $this->input->post('current_address'),
          'current_city' => $this->input->post('current_city'),
          'current_postal_code' => $this->input->post('current_postal_code'),
          'current_date_residence_start' => $this->input->post('current_date_residence_start'),
          'current_date_residence_end' => $this->input->post('current_date_residence_end'),
          'current_state' => $this->input->post('current_state'),
          'current_country' => $this->input->post('current_country')
        );
        $this->admin_model->insert_data("employee_address",$data);
        $data = array(
          'employee_id'=>$id,
          'employee_code' => $this->input->post('employee_code'),
          'designation' => $this->input->post('designation'),
          'employee_department' => $this->input->post('employee_department'),
          'employee_report' => $this->input->post('employee_report'),
          'salary' => $this->input->post('salary'),
          'house_rent' => $this->input->post('house_rent'),
          'medical' => $this->input->post('medical'),
          'conveyance' => $this->input->post('conveyance'),
          'utility' => $this->input->post('utility'),
          'role' => $this->input->post('role'),
          'job_shift' => $this->input->post('job_shift'),
          'job_type' => $this->input->post('job_type'),
          'sick_leave' => $this->input->post('sick_leave'),
          'casual_leave' => $this->input->post('casual_leave'),
          'annual_leave' => $this->input->post('annual_leave'),
        );
        $this->admin_model->insert_data("employee_detail",$data);
        $school_type = $this->input->post('school_type[]');
        $name_of_school = $this->input->post('name_of_school[]');
        $school_location = $this->input->post('school_location[]');
        $in_progress = $this->input->post('in_progress[]');
        $school_year_completed = $this->input->post('school_year_completed[]');
        $school_dgree = $this->input->post('school_dgree[]');
        for ($i=0; $i < sizeof($school_type); $i++) { 
          $data = array(
            'employee_id'=>$id,
            'school_type' => $school_type[$i],
            'name_of_school' => $name_of_school[$i],
            'school_location' => $school_location[$i],
            'school_year_completed' => $school_year_completed[$i],
            'school_dgree' => $school_dgree[$i],
            'in_progress' => $in_progress[$i],
          );
          $this->admin_model->insert_data("employee_educations",$data);
        }
        $name_of_employer = $this->input->post('name_of_employer[]');
        $employer_designation = $this->input->post('employer_designation[]');
        $employer_supervisor = $this->input->post('employer_supervisor[]');
        $employer_department = $this->input->post('employer_department[]');
        $employer_duration_start = $this->input->post('employer_duration_start[]');
        $employer_duration_end = $this->input->post('employer_duration_end[]');
        $employer_code = $this->input->post('employer_code[]');
        $nature_of_employment = $this->input->post('nature_of_employment[]');
        $reason_for_leaving = $this->input->post('reason_for_leaving[]');
        if ($this->input->post('employment_history') == '1') {
          for ($i=0; $i < sizeof($name_of_employer); $i++) {
            $data = array(
              'employee_id'=>$id,
              'name_of_employer' => $name_of_employer[$i],
              'employer_designation' => $employer_designation[$i],
              'employer_supervisor' => $employer_supervisor[$i],
              'employer_department' => $employer_department[$i],
              'employer_duration_start' => $employer_duration_start[$i],
              'employer_duration_end' => $employer_duration_end[$i],
              'employer_code' => $employer_code[$i],
              'nature_of_employment' => $nature_of_employment[$i],
              'reason_for_leaving' => $reason_for_leaving[$i]
            );
            $this->admin_model->insert_data("employee_employment_history",$data);
          }
        }
        $data = array(
          'employee_id'=>$id,
          'means_of_transport' => $this->input->post('means_of_transport'),
          'driver_licence_number' => $this->input->post('driver_licence_number'),
          'expiration_date' => $this->input->post('expiration_date'),
          'state_of_issue' => $this->input->post('state_of_issue'),
          'crime' => $this->input->post('crime'),
          'other_detail' => $this->input->post('other_detail'),
        );
        $this->admin_model->insert_data("employee_other",$data);
        $previous_address = $this->input->post('previous_address[]');
        $previous_city = $this->input->post('previous_city[]');
        $privious_code = $this->input->post('privious_code[]');
        $priviou_date_residence_start = $this->input->post('priviou_date_residence_start[]');
        $priviou_date_residence_end = $this->input->post('priviou_date_residence_end[]');
        $privious_state = $this->input->post('privious_state[]');
        $privious_country = $this->input->post('privious_country[]');
        $privious_citizen = $this->input->post('privious_citizen[]');
        for ($i=0; $i < sizeof($previous_address); $i++) {
          $data = array(
            'employee_id'=>$id,
            'previous_address' => $previous_address[$i],
            'previous_city' => $previous_city[$i],
            'privious_code' => $privious_code[$i],
            'priviou_date_residence_start' => $priviou_date_residence_start[$i],
            'priviou_date_residence_end' => $priviou_date_residence_end[$i],
            'privious_state' => $privious_state[$i],
            'privious_country' => $privious_country[$i],
            'privious_citizen' => $privious_citizen.''.$i
          );
          $this->admin_model->insert_data("employee_previous_address",$data);
        }
        $ref_name = $this->input->post('ref_name[]');
        $ref_designation = $this->input->post('ref_designation[]');
        $ref_company = $this->input->post('ref_company[]');
        $ref_phone = $this->input->post('ref_phone[]');
        $ref_email = $this->input->post('ref_email[]');
        $ref_address = $this->input->post('ref_address[]');
        if ($this->input->post('reference_history') == '1') {
          for ($i=0; $i < sizeof($ref_name); $i++) {
            $data = array(
              'employee_id'=>$id,
              'ref_name' => $ref_name[$i],
              'ref_designation' => $ref_designation[$i],
              'ref_company' => $ref_company[$i],
              'ref_phone' => $ref_phone[$i],
              'ref_email' => $ref_email[$i],
              'ref_address' => $ref_address[$i]
            );
            $this->admin_model->insert_data("employee_reference",$data);
          }
        }
        redirect('admin/view_employee');
      }
    }

    public function add_call_interview()
    {
      $data = $this->input->post();
      $this->admin_model->insert_data("call_interview",$data);
      redirect('admin/interview_step_1');
    }

    public function add_pre_interview()
    {
      $data = $this->input->post();
      $this->admin_model->insert_data("pre_interview",$data);
      redirect('admin/interview_step_1');
    }

    public function recruitment_detail($id)
   {
      $data['recruitment'] = $this->admin_model->select_where('recruitment',array('id' => $id));
      $data['recruitment_experiences'] = $this->admin_model->select_where('recruitment_experiences',array('recruitment_id' => $id));
      $data['recruitment_qualifications'] = $this->admin_model->select_where('recruitment_qualifications',array('recruitment_id' => $id));
      $data['call_interview'] = $this->admin_model->call_interview($id);
      $data['per_interview'] = $this->admin_model->per_interview($id);
      $this->load->view('admin2/header');
      $this->load->view('admin2/recruitment_detail', $data);
      $this->load->view('admin2/footer'); 

   }

   public function recruitment_score($id)
   {
      $data['recruitment'] = $this->admin_model->select_where('recruitment',array('id' => $id));
      $data['recruitment_experiences'] = $this->admin_model->select_where('recruitment_experiences',array('recruitment_id' => $id));
      $data['recruitment_qualifications'] = $this->admin_model->select_where('recruitment_qualifications',array('recruitment_id' => $id));
      $data['call_interview'] = $this->admin_model->call_interview1($id);
      $data['per_interview'] = $this->admin_model->per_interview1($id);
      $data['id'] = $id;
      $this->load->view('admin2/header');
      $this->load->view('admin2/recruitment_score', $data);
      $this->load->view('admin2/footer'); 

   }

   public function employee_detail($id)
   {
      $data['employee'] = $this->admin_model->view_emp_detail($id);
      $data['employee_educations'] = $this->admin_model->select_where('employee_educations',array('employee_id' => $id));
      $data['employee_employment_history'] = $this->admin_model->select_where('employee_employment_history',array('employee_id' => $id));
      $data['employee_previous_address'] = $this->admin_model->select_where('employee_previous_address',array('employee_id' => $id));
      $data['employee_reference'] = $this->admin_model->select_where('employee_reference',array('employee_id' => $id));
      $this->load->view('admin2/header');
      $this->load->view('admin2/employee_detail', $data);
      $this->load->view('admin2/footer'); 
   }

   public function view_appointment()
   {
      $data['appointments'] = $this->admin_model->get_data('appointments');
      $this->load->view('admin2/header');
      $this->load->view('admin2/view_appointment', $data);
      $this->load->view('admin2/footer'); 
   }

   public function add_appointment($id = null)
   {
      $data = [];
      if ($id != null) {
        $data['id'] = $id;
        $data['list'] = $this->admin_model->get_employee_app($id);
      }
      $this->load->view('admin2/header');
      $this->load->view('admin2/add_appointment', $data);
      $this->load->view('admin2/footer'); 
   }

   public function insert_appointment()
   {
      $data = $this->input->post();
      $id = $this->admin_model->insert_data("appointments",$data);
      redirect('admin/appointment_latter/'.$id);
   }

   public function convertNumberToWord($num = false)
{
    $num = str_replace(array(',', ' '), '' , trim($num));
    if(! $num) {
        return false;
    }
    $num = (int) $num;
    $words = array();
    $list1 = array('', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten', 'eleven',
        'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen'
    );
    $list2 = array('', 'ten', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety', 'hundred');
    $list3 = array('', 'thousand', 'million', 'billion', 'trillion', 'quadrillion', 'quintillion', 'sextillion', 'septillion',
        'octillion', 'nonillion', 'decillion', 'undecillion', 'duodecillion', 'tredecillion', 'quattuordecillion',
        'quindecillion', 'sexdecillion', 'septendecillion', 'octodecillion', 'novemdecillion', 'vigintillion'
    );
    $num_length = strlen($num);
    $levels = (int) (($num_length + 2) / 3);
    $max_length = $levels * 3;
    $num = substr('00' . $num, -$max_length);
    $num_levels = str_split($num, 3);
    for ($i = 0; $i < count($num_levels); $i++) {
        $levels--;
        $hundreds = (int) ($num_levels[$i] / 100);
        $hundreds = ($hundreds ? ' ' . $list1[$hundreds] . ' hundred' . ' ' : '');
        $tens = (int) ($num_levels[$i] % 100);
        $singles = '';
        if ( $tens < 20 ) {
            $tens = ($tens ? ' ' . $list1[$tens] . ' ' : '' );
        } else {
            $tens = (int)($tens / 10);
            $tens = ' ' . $list2[$tens] . ' ';
            $singles = (int) ($num_levels[$i] % 10);
            $singles = ' ' . $list1[$singles] . ' ';
        }
        $words[] = $hundreds . $tens . $singles . ( ( $levels && ( int ) ( $num_levels[$i] ) ) ? ' ' . $list3[$levels] . ' ' : '' );
    } //end for loop
    $commas = count($words);
    if ($commas > 1) {
        $commas = $commas - 1;
    }
    return implode(' ', $words);
}

public function get_word($num)
{
  echo $this->convertNumberToWord($num);
}

   public function appointment_latter($id)
   {
      $data['appointment'] = $this->admin_model->select_where('appointments',array('id' => $id));
      $data['in_word'] = $this->convertNumberToWord($data['appointment'][0]['basic_salary']);
      $this->load->view('admin2/header');
      $this->load->view('admin2/appointment_latter', $data);
      $this->load->view('admin2/footer'); 
   }

   public function employee_disable($id)
   {
      $id = $this->admin_model->update('employee',array('active' => '1'),array('id' => $id));
      redirect('admin/view_employee');
   }

   public function employee_enable($id)
   {
      $id = $this->admin_model->update('employee',array('active' => '0'),array('id' => $id));
      redirect('admin/view_employee');
   }


   public function past_employee()
   {
      $this->is_login();
      $_SESSION['page']="view_employee";

      $data['records']=$this->admin_model->view_employee();
      $data['employees'] = $this->admin_model->select_where('employee',array('active'=>'1'));
      $this->load->view('admin2/header');
      $this->load->view('admin2/past_employee',$data);
      $this->load->view('admin2/footer');
   }

   public function employee_edit($id)
   {
      $_SESSION['page']="edit_employee";
      $this->is_login();
      $data['employee'] = $this->admin_model->view_emp_detail($id);
      $data['employee_educations'] = $this->admin_model->select_where('employee_educations',array('employee_id' => $id));
      $data['employee_employment_history'] = $this->admin_model->select_where('employee_employment_history',array('employee_id' => $id));
      $data['employee_previous_address'] = $this->admin_model->select_where('employee_previous_address',array('employee_id' => $id));
      $data['employee_reference'] = $this->admin_model->select_where('employee_reference',array('employee_id' => $id));
      $data['departments']=$this->admin_model->get_data('departments');
      $data['employees']=$this->admin_model->get_data('employee_itgs');
      //print_r($data);die;
      $this->load->view('admin2/header');
      $this->load->view('admin2/edit_emp', $data);
      $this->load->view('admin2/footer');
   }

   public function edit_emp()
   {
      $employee_id = $this->input->post('e_id');
      $data = array(
        'full_name' => $this->input->post('full_name'),
        'surename' => $this->input->post('surename'),
        'aka' => $this->input->post('aka'),
        'privious_legal_name' => $this->input->post('privious_legal_name'),
        'gender' => $this->input->post('gender'),
        'mother_name' => $this->input->post('mother_name'),
        'father_name' => $this->input->post('father_name'),
        'dob' => $this->input->post('dob'),
        'pob' => $this->input->post('pob'),
        'relationship_status' => $this->input->post('relationship_status'),
        'national_identification_number' => $this->input->post('national_identification_number'),
        'passport_name' => $this->input->post('passport_name'),
        'country_of_passport_issuance' => $this->input->post('country_of_passport_issuance'),
        'ntn' => $this->input->post('ntn'),
        'social_security_number' => $this->input->post('social_security_number'),
        'country_of_citizenship' => $this->input->post('country_of_citizenship'),
        'mobile' => $this->input->post('mobile'),
        'ptcl' => $this->input->post('ptcl'),
        'emergency_contact_name' => $this->input->post('emergency_contact_name'),
        'emergency_contact_number' => $this->input->post('emergency_contact_number'),
        'emergency_contact_address' => $this->input->post('emergency_contact_address'),
        'army_service' => $this->input->post('army_service'),
        'army_des_date' => $this->input->post('army_des_date')
      );
      $config['upload_path'] = './uploads/profile_photo';
      $config['allowed_types'] = 'png|gif|jpg|jpeg';
      $config['max_size'] = '10000';
      $config['max_width'] = '1024';
      $config['max_height'] = '768';
      if (!empty($_FILES)) {
        $this->load->library('upload', $config);
        if($this->upload->do_upload('profile_photo'))
        {
          $data += array('image' => '/uploads/profile_photo/'.$this->upload->data('file_name') );
        }
        else
        {
          $error = array('error' => $this->upload->display_errors());
        }
      }
      $id = $this->admin_model->update("employee",$data,array('id' => $employee_id));
      $data = array(
        'current_address' => $this->input->post('current_address'),
        'current_city' => $this->input->post('current_city'),
        'current_postal_code' => $this->input->post('current_postal_code'),
        'current_date_residence_start' => $this->input->post('current_date_residence_start'),
        'current_date_residence_end' => $this->input->post('current_date_residence_end'),
        'current_state' => $this->input->post('current_state'),
        'current_country' => $this->input->post('current_country')
      );
      $this->admin_model->update("employee_address",$data,array('employee_id' => $employee_id));
      $data = array(
        'employee_code' => $this->input->post('employee_code'),
        'designation' => $this->input->post('designation'),
        'employee_department' => $this->input->post('employee_department'),
        'employee_report' => $this->input->post('employee_report'),
        'salary' => $this->input->post('salary'),
        'house_rent' => $this->input->post('house_rent'),
        'medical' => $this->input->post('medical'),
        'conveyance' => $this->input->post('conveyance'),
        'utility' => $this->input->post('utility'),
        'role' => $this->input->post('role'),
        'job_shift' => $this->input->post('job_shift'),
        'job_type' => $this->input->post('job_type'),
        'sick_leave' => $this->input->post('sick_leave'),
        'casual_leave' => $this->input->post('casual_leave'),
        'annual_leave' => $this->input->post('annual_leave'),
      );
      $this->admin_model->update("employee_detail",$data,array('employee_id' => $employee_id));
      $education_id = $this->input->post('education_id[]');
      $school_type = $this->input->post('school_type[]');
      $name_of_school = $this->input->post('name_of_school[]');
      $school_location = $this->input->post('school_location[]');
      $school_year_completed = $this->input->post('school_year_completed[]');
      $school_dgree = $this->input->post('school_dgree[]');
      $education = $this->admin_model->select_where('employee_educations',array('employee_id' => $employee_id));
      $edu_delete = [];
      for ($i=0; $i < sizeof($school_type); $i++) { 
        $data = array(
          'school_type' => $school_type[$i],
          'name_of_school' => $name_of_school[$i],
          'school_location' => $school_location[$i],
          'school_year_completed' => $school_year_completed[$i],
          'school_dgree' => $school_dgree[$i],
          'in_progress' => $in_progress[$i],
        );
        $key = array_search($education_id[$i], array_column($education, 'id'));
        if ($key >= 0) {
          $edu_delete[] = $key;
          $this->admin_model->update("employee_educations",$data,array('employee_id' => $employee_id, 'id' => $education[$key]['id']));
        }
        else{
          $data += array('employee_id' => $employee_id);
          $this->admin_model->insert_data("employee_educations",$data);
        }
      }
      if (sizeof($edu_delete) >= 1) {
        for ($i=0; $i < sizeof($edu_delete); $i++) { 
          unset($education[$edu_delete[$i]]);
        }
      }
      if (sizeof($education) >= 1) {
        for ($i=0; $i < sizeof($education); $i++) { 
          $this->admin_model->delete_data('employee_educations',array('id' => $education[$i]['id']));
        }
      }
      $history_id = $this->input->post('history_id[]');
      $name_of_employer = $this->input->post('name_of_employer[]');
      $employer_designation = $this->input->post('employer_designation[]');
      $employer_supervisor = $this->input->post('employer_supervisor[]');
      $employer_department = $this->input->post('employer_department[]');
      $employer_duration_start = $this->input->post('employer_duration_start[]');
      $employer_duration_end = $this->input->post('employer_duration_end[]');
      $employer_code = $this->input->post('employer_code[]');
      $nature_of_employment = $this->input->post('nature_of_employment[]');
      $reason_for_leaving = $this->input->post('reason_for_leaving[]');
      $history = $this->admin_model->select_where('employee_employment_history',array('employee_id' => $employee_id));
      $his_delete = [];
      for ($i=0; $i < sizeof($name_of_employer); $i++) {
        $data = array(
          'name_of_employer' => $name_of_employer[$i],
          'employer_designation' => $employer_designation[$i],
          'employer_supervisor' => $employer_supervisor[$i],
          'employer_department' => $employer_department[$i],
          'employer_duration_start' => $employer_duration_start[$i],
          'employer_duration_end' => $employer_duration_end[$i],
          'employer_code' => $employer_code[$i],
          'nature_of_employment' => $nature_of_employment[$i],
          'reason_for_leaving' => $reason_for_leaving[$i]
        );
        $key = array_search($history_id[$i], array_column($history, 'id'));
        if ($key >= 0) {
          $his_delete[] = $key;
          $this->admin_model->update("employee_employment_history",$data,array('employee_id' => $employee_id, 'id' => $history[$key]['id']));
        }
        else{
          $data += array('employee_id' => $employee_id);
          $this->admin_model->insert_data("employee_employment_history",$data);
        }
      }
      if (sizeof($his_delete) >= 1) {
        for ($i=0; $i < sizeof($his_delete); $i++) { 
          unset($history[$his_delete[$i]]);
        }
      }
      if (sizeof($history) >= 1) {
        for ($i=0; $i < sizeof($history); $i++) { 
          $this->admin_model->delete_data('employee_employment_history',array('id' => $history[$i]['id']));
        }
      }
      $data = array(
        'means_of_transport' => $this->input->post('means_of_transport'),
        'driver_licence_number' => $this->input->post('driver_licence_number'),
        'expiration_date' => $this->input->post('expiration_date'),
        'state_of_issue' => $this->input->post('state_of_issue'),
        'crime' => $this->input->post('crime'),
        'other_detail' => $this->input->post('other_detail'),
      );
      $this->admin_model->update("employee_other",$data,array('employee_id' => $employee_id));
      $previous_id = $this->input->post('previous_address_id[]');
      $previous_address = $this->input->post('previous_address[]');
      $previous_city = $this->input->post('previous_city[]');
      $privious_code = $this->input->post('privious_code[]');
      $priviou_date_residence_start = $this->input->post('priviou_date_residence_start[]');
      $priviou_date_residence_end = $this->input->post('priviou_date_residence_end[]');
      $privious_state = $this->input->post('privious_state[]');
      $privious_country = $this->input->post('privious_country[]');
      $privious_citizen = $this->input->post('privious_citizen[]');
      $previous = $this->admin_model->select_where('employee_previous_address',array('employee_id' => $employee_id));
      $pre_delete = [];
      for ($i=0; $i < sizeof($previous_address); $i++) {
        $data = array(
          'previous_address' => $previous_address[$i],
          'previous_city' => $previous_city[$i],
          'privious_code' => $privious_code[$i],
          'priviou_date_residence_start' => $priviou_date_residence_start[$i],
          'priviou_date_residence_end' => $priviou_date_residence_end[$i],
          'privious_state' => $privious_state[$i],
          'privious_country' => $privious_country[$i],
          'privious_citizen' => $privious_citizen.''.$i
        );
        $key = array_search($previous_id[$i], array_column($previous, 'id'));
        if ($key >= 0) {
          $pre_delete[] = $key;
          $this->admin_model->update("employee_previous_address",$data,array('employee_id' => $employee_id, 'id' => $previous[$key]['id']));
        }
        else{
          $data += array('employee_id' => $employee_id);
          $this->admin_model->insert_data("employee_previous_address",$data);
        }
      }
      if (sizeof($pre_delete) >= 1) {
        for ($i=0; $i < sizeof($pre_delete); $i++) { 
          unset($previous[$pre_delete[$i]]);
        }
      }
      if (sizeof($previous) >= 1) {
        for ($i=0; $i < sizeof($previous); $i++) { 
          $this->admin_model->delete_data('employee_previous_address',array('id' => $previous[$i]['id']));
        }
      }
      $reference_id = $this->input->post('reference_id[]');
      $ref_name = $this->input->post('ref_name[]');
      $ref_designation = $this->input->post('ref_designation[]');
      $ref_company = $this->input->post('ref_company[]');
      $ref_phone = $this->input->post('ref_phone[]');
      $ref_email = $this->input->post('ref_email[]');
      $ref_address = $this->input->post('ref_address[]');
      $reference = $this->admin_model->select_where('employee_reference',array('employee_id' => $employee_id));
      $ref_delete = [];
      for ($i=0; $i < sizeof($ref_name); $i++) {
        $data = array(
          'ref_name' => $ref_name[$i],
          'ref_designation' => $ref_designation[$i],
          'ref_company' => $ref_company[$i],
          'ref_phone' => $ref_phone[$i],
          'ref_email' => $ref_email[$i],
          'ref_address' => $ref_address[$i]
        );
        $key = array_search($reference_id[$i], array_column($reference, 'id'));
        if ($key >= 0) {
          $ref_delete[] = $key;
          $this->admin_model->update("employee_reference",$data,array('employee_id' => $employee_id, 'id' => $reference[$key]['id']));
        }
        else{
          $data += array('employee_id' => $employee_id);
          $this->admin_model->insert_data("employee_reference",$data);
        }
      }
      if (sizeof($ref_delete) >= 1) {
        for ($i=0; $i < sizeof($ref_delete); $i++) { 
          unset($reference[$ref_delete[$i]]);
        }
      }
      if (sizeof($reference) >= 1) {
        for ($i=0; $i < sizeof($reference); $i++) { 
          $this->admin_model->delete_data('employee_educations',array('id' => $reference[$i]['id']));
        }
      }
      redirect('admin/view_employee');
   }

   public function add_leave()
   {
      $data = $this->input->post();
      if ($_SESSION['role'] != 'TM' || $_SESSION['role'] != 'TL') {
        $data += array('is_approve'=>'2');
      }
      if ($data['nature_of_leave'] == 'Half Day') {
        $data['end_date'] = $data['start_date'];
        $data['total_days'] = 0.33;
      }
      $this->admin_model->insert_data("leave_applications",$data);
      redirect('admin/employee_dashboard');
   }

   public function add_visiting_card()
   {
      $data = $this->input->post();
      $this->admin_model->insert_data("visiting_card_forms",$data);
      $admins = $this->admin_model->select_where('login',array('role' =>'Admin'));
      for ($i=0; $i < sizeof($admins); $i++) { 
        $this->sendmail('verify@itgsgroup.com',$admins[$i]['login_name'],'Visiting Card Request','Clieck Here To Detail <a href="'.base_url().'admin/visiting_card_request">View Request</a>');
      }
      redirect('admin/employee_dashboard');
   }

   public function add_complaint()
   {
      $data = $this->input->post();
      $this->admin_model->insert_data("complaint_forms",$data);
      redirect('admin/complaint_form_list');
   }

   public function add_expense()
   {
      $data = $this->input->post();
      $this->admin_model->insert_data("expense_forms",$data);
      redirect('admin/employee_dashboard');
   }

   public function add_salary_advance()
   {
      $data = $this->input->post();
      $this->admin_model->insert_data("salary_advance_forms",$data);
      redirect('admin/employee_dashboard');
   }

   public function add_loan()
   {
      $data = $this->input->post();
      $this->admin_model->insert_data("loan_applications",$data);
      redirect('admin/employee_dashboard');
   }

   public function case_report()
   {
     $data['jobs']=$this->db->query('
      select fund_request_activity.*,case_request.client_reference,case_request.client_id,case_request.reference_code,case_request.created_at as date_of_receiving,case_request.case_status,scope_of_work.scope_name,aatu.hold_date,aatu.unhold_date,case_request.id as case_id,aatu.subject_id,aatu.activity_id,  
      s.subject_name,client.client_type
       from 
      fund_request_activity inner JOIN case_request on(case_request.id=fund_request_activity.case_id)
     inner join assign_activity_to_user aatu on (case_request.id=aatu.case_id  )
     inner join client on (case_request.client_id=client.client_id )
      inner join scope_of_work on (scope_of_work.id=fund_request_activity.activity_id)
       inner join subject_case s on (s.case_id=case_request.id)
       GROUP BY fund_request_activity.case_id')->result_array();
     //echo '<pre>';print_r($data);die;

    $this->load->view('admin2/header', $data);
    $this->load->view('admin2/case_report');
    $this->load->view('admin2/footer');
   }

   public function subject_report($id = null)
   {
     if ($id != null) {
      $data['jobs']=$this->db->query('select fund_request_activity.*,case_request.client_reference,case_request.client_id,case_request.reference_code,case_request.case_status,scope_of_work.scope_name,client.client_type
        ,subject_case.subject_name from fund_request_activity inner JOIN subject_case on (subject_case.id=fund_request_activity.subject_id) inner JOIN case_request on(case_request.id=fund_request_activity.case_id) inner join scope_of_work on (scope_of_work.id=fund_request_activity.activity_id)
        inner join client on(case_request.client_id=client.client_id)
         WHERE fund_request_activity.case_id = "'.$id.'" GROUP BY fund_request_activity.subject_id')->result_array();
    }
    else{
     $data['jobs']=$this->db->query('select fund_request_activity.*,case_request.client_reference,case_request.client_id,case_request.case_status,case_request.reference_code,scope_of_work.scope_name,client.client_type,
      subject_case.subject_name from fund_request_activity inner JOIN case_request on(case_request.id=fund_request_activity.case_id) inner JOIN subject_case on (subject_case.id=fund_request_activity.subject_id) 

        inner join client on(case_request.client_id=client.client_id)

      inner join scope_of_work on (scope_of_work.id=fund_request_activity.activity_id) GROUP BY fund_request_activity.subject_id')->result_array();
    }
    $this->load->view('admin2/header', $data);
    $this->load->view('admin2/subject_report');
    $this->load->view('admin2/footer');
   }

   public function activity_report($id = null)
   {
     if ($id != null) {
      $data['jobs']=$this->db->query('select fund_request_activity.*,case_request.client_reference,case_request.client_id,case_request.reference_code,scope_of_work.scope_name, case_request.case_status,client.client_type,
       subject_case.subject_name from fund_request_activity inner JOIN case_request on(case_request.id=fund_request_activity.case_id) inner JOIN subject_case on (subject_case.id=fund_request_activity.subject_id) 
       inner join client on (client.client_id = case_request.client_id)
       inner join scope_of_work on (scope_of_work.id=fund_request_activity.activity_id) WHERE fund_request_activity.subject_id = "'.$id.'" ')->result_array();
    }
    else{
     $data['jobs']=$this->db->query('select fund_request_activity.*,case_request.client_reference,case_request.client_id,case_request.reference_code,scope_of_work.scope_name, case_request.case_status,subject_case.subject_name,client.client_type from fund_request_activity inner JOIN case_request on(case_request.id=fund_request_activity.case_id) 
       inner join client on (client.client_id = case_request.client_id)
      inner JOIN subject_case on (subject_case.id=fund_request_activity.subject_id) inner join scope_of_work on (scope_of_work.id=fund_request_activity.activity_id) GROUP BY fund_request_activity.subject_id,fund_request_activity.activity_id')->result_array();
    }
    $this->load->view('admin2/header', $data);
    $this->load->view('admin2/activity_report');
    $this->load->view('admin2/footer');
   }


   public function profit_loss_report($id)
   {
      $data['cases'] = $this->admin_model->get_data('case_request');
      if ($id) {
      $data['jobs']=$this->db->query('select fund_request_activity.*,case_request.client_reference,case_request.client_id,case_request.reference_code,scope_of_work.scope_name, client.client_type
        ,subject_case.subject_name from fund_request_activity inner JOIN case_request on(case_request.id=fund_request_activity.case_id) 
        inner join client on (client.client_id=case_request.client_id)
        inner JOIN subject_case on (subject_case.id=fund_request_activity.subject_id) inner join scope_of_work on (scope_of_work.id=fund_request_activity.activity_id) WHERE fund_request_activity.case_id = "'.$id.'" GROUP BY fund_request_activity.subject_id,fund_request_activity.activity_id')->result_array();
    }
    else{
     $data['jobs']=$this->db->query('select fund_request_activity.*,case_request.client_reference,case_request.client_id,case_request.reference_code,scope_of_work.scope_name,client.client_type,subject_case.subject_name from fund_request_activity inner JOIN case_request on(case_request.id=fund_request_activity.case_id) 
      inner join client on (client.client_id=case_request.client_id) 
      inner JOIN subject_case on (subject_case.id=fund_request_activity.subject_id) inner join scope_of_work on (scope_of_work.id=fund_request_activity.activity_id) GROUP BY fund_request_activity.subject_id,fund_request_activity.activity_id')->result_array();
    }
    $data['id'] = $id;
    //echo '<pre>';print_r($data['cases']);die;
    $this->load->view('admin2/header', $data);
    $this->load->view('admin2/profit_loss_report');
    $this->load->view('admin2/footer');
   }


   public function monthly_assessment()
   {
    $data['jobs']=$this->db->query('select fund_request_activity.*,case_request.client_reference,case_request.hold_date,case_request.unhold_date,case_request.case_date,case_request.client_id,case_request.reference_code,scope_of_work.scope_name,subject_case.subject_name, case_report.date_time from fund_request_activity inner JOIN case_request on(case_request.id=fund_request_activity.case_id) inner JOIN subject_case on (subject_case.id=fund_request_activity.subject_id) inner join scope_of_work on (scope_of_work.id=fund_request_activity.activity_id) left join case_report on case_report.case_id = case_request.id

      ')->result_array();
    $this->load->view('admin2/header', $data);
    $this->load->view('admin2/monthly_assessment');
    $this->load->view('admin2/footer');
   }

   public function departments()
   {
    $data['departments']=$this->admin_model->get_department();
    $this->load->view('admin2/header');
    $this->load->view('admin2/departments',$data);
    $this->load->view('admin2/footer');
   }
   public function add_department()
   {
    $data['departments']=$this->admin_model->get_data('departments');
     $this->load->view('admin2/header');
    $this->load->view('admin2/add_department',$data);
    $this->load->view('admin2/footer');
   }

   public function create_department()
   {
     $data = $this->input->post();
      $this->admin_model->insert_data("departments",$data);
      redirect('admin/departments');
   }

   public function department_delete($id)
   {
      $this->admin_model->delete_data("departments",array('id' => $id));
      redirect('admin/departments');
   }

   public function department_edit($id)
   {
    $data['detail']=$this->admin_model->get_department_id($id);
    $data['departments']=$this->admin_model->get_data('departments');
    $this->load->view('admin2/header');
    $this->load->view('admin2/edit_department',$data);
    $this->load->view('admin2/footer');
   }

   public function update_department()
   {
     $id = $this->input->post('id');
     $name = $this->input->post('name');
     $parent_id = $this->input->post('parent_id');
     $this->admin_model->update("departments",array('name'=>$name,'parent_id'=>$parent_id),array('id' => $id));
     redirect('admin/departments');
   }

   public function departments_organogram()
   {
     $data['departments']=$this->admin_model->get_data('departments');
     $data['main_departments']=$this->admin_model->select_where('departments',array('parent_id'=>'0'));
     $this->load->view('admin2/header');
    $this->load->view('admin2/departments_organogram',$data);
    $this->load->view('admin2/footer');
   }

   public function employees_organogram()
   {
     $data['employees']=$this->admin_model->get_data('employee_itgs');
     $this->load->view('admin2/header');
    $this->load->view('admin2/employees_organogram',$data);
    $this->load->view('admin2/footer');
   }

   public function deparment_employee($id)
   {
    $departments=$this->admin_model->select_where_row('departments',array('id'=>$id));
     $data['employees']=$this->admin_model->select_where('employee_itgs',array('department'=>$departments['name']));
    //echo '<pre>';print_r($data);die; 
     $this->load->view('admin2/header');
    $this->load->view('admin2/deparment_employee',$data);
    $this->load->view('admin2/footer');
   }

   public function emp_org($id)
   {
     $data['employee']=$this->admin_model->select_where_row('employee_itgs', array('id'=>$id));
     $data['employees']=$this->admin_model->select_where('employee_itgs', array('report_to'=>$id));
     $this->load->view('admin2/header');
    $this->load->view('admin2/emp_org',$data);
    $this->load->view('admin2/footer');
   }

   public function view_report_tm($id)
   {
      $data['reports']=$this->admin_model->case_reports($id);
      $this->load->view('admin2/header');
      $this->load->view('admin2/view_report_tm',$data);
      $this->load->view('admin2/footer');
   }

   public function view_report_case($id)
   {
      $data['back'] = $this->admin_model->background_report($id);
      $data['education'] = $this->admin_model->education_report($id);
      for ($i=0; $i < sizeof($data['education']); $i++) { 
        $children = $this->admin_model->select_where('education_check_key',array('education_id'=>$data['education'][$i]['id']));
        if (!empty($children)) {
          $data['education'][$i]['keys'] = $children;
        }
        else{
          $data['education'][$i]['keys'] = '';
        }
      }
      $data['nadra'] = $this->admin_model->nadra_report($id);
      $data['fbr'] = $this->admin_model->fbr_report($id);
      $data['regulatory'] = $this->admin_model->regulatory_report($id);
      $data['litigation'] = $this->admin_model->litigation_report($id);
      $data['crimnal'] = $this->admin_model->crimnal_report($id);
      $data['past'] = $this->admin_model->past_report($id);
      for ($i=0; $i < sizeof($data['past']); $i++) { 
        $children = $this->admin_model->select_where('past_employment_key',array('past_id'=>$data['past'][$i]['id']));
        if (!empty($children)) {
          $data['past'][$i]['keys'] = $children;
        }
        else{
          $data['past'][$i]['keys'] = '';
        }
      }
      $data['customized'] = $this->admin_model->customized_report($id);
      $data['vendor'] = $this->admin_model->vendor_report($id);
      $data['team_lead'] = $this->admin_model->select_where('case_team',array('case_id'=>$id));
      $data['tl_report'] = $this->admin_model->select_where('tl_report',array('case_id'=>$id));
      $data['case_id'] = $id;
      $data['cm_id'] = $this->admin_model->get_cm($id);
      //echo $_SESSION['id'];die;
      //echo '<pre>';print_r($data);die;
      $this->load->view('admin2/header');
      $this->load->view('admin2/view_report_case',$data);
      $this->load->view('admin2/footer');
   }

   public function edit_team($case_id)
  {
    $data['client_details']=$this->db->query("select case_request.*,client.*,country.country_name,country.country_code from client inner join case_request on (case_request.client_id=client.client_id) INNER JOIN country ON (country.id=client.country_id) where case_request.id='".$case_id."'")->row_array();
  $data['subjects']=$this->admin_model->case_subjects($case_id);
   //$data['subjects']=$this->db->get_where("subject_case",['case_id'=>$case_id])->result_array();
   /*$data['members']=$this->db->query("SELECT * FROM `employee_itgs` WHERE `role` = 'TL' OR `role` = 'CM'")->result_array();
   $data['members1']=$this->db->query("SELECT * FROM `employee_itgs` WHERE `role` = 'TL' OR `role` = 'CM' OR `role` = 'TM'")->result_array();*/
   $data['members']=$this->db->query("SELECT * FROM `employee_itgs` WHERE `role` = 'TL'")->result_array();
   $data['members1']=$this->db->query("SELECT * FROM `employee_itgs` WHERE `role` = 'TM'")->result_array();
   //print_r($data);die;
    $this->load->view('admin2/header',$data);
    $this->load->view('admin2/edit_team');
    $this->load->view('admin2/footer');
  }

  public function update_team()
  {
    if (!empty($_POST['subject_id'])) {
      $subject = $_POST['subject_id'];
      if (isset($_POST['team_member'])) {
         $count=count($_POST['team_member']);
       } 
         else{
          $count=0;
         }
         if ($_POST['team_lead'] != '' && $_POST['team_lead'] != null) {
           $lead = $_POST['team_lead'];
         }
         else{
          $lead = $_SESSION['id'];
         }
      for ($i=0; $i < sizeof($subject); $i++) {

         $tl = $this->admin_model->select_where('case_team',array('case_id'=>$_POST['case_id'],'subject_id'=>$subject[$i],'team_lead_id'=>$lead,));
         if (empty($tl)) {
           $data=array(
                'case_id'=>$_POST['case_id'],
                'subject_id'=>$subject[$i],
                'team_lead_id'=>$lead,
            );
            $this->db->insert('case_team',$data);
              $case_team_id=$this->db->insert_id();
         }
         else{
          $case_team_id=$tl[0]['id'];
         }
         if ($count >= 1) {
          $this->admin_model->delete_data('case_team_members',array('subject_id'=>$subject[$i],'case_team_id'=>$case_team_id));
           for ($a=0; $a <$count ; $a++) {

            $data_member=array(
                'subject_id'=>$subject[$i],
                'case_team_id'=>$case_team_id,
                'team_member_id'=>$_POST['team_member'][$a],
            );
            $this->db->insert('case_team_members',$data_member);

            }
            $this->db->update("subject_case",['is_assigned'=>1],['id'=>$_POST['subject_id'][$i]]);
         }
  }
      $update_status=$this->db->update('case_request',['case_status'=>7],['id'=>$_POST['case_id']]);
      $client = $this->admin_model->select_where('case_request', array('id'=>$_POST['case_id']));
      $u_id = $client[0]['client_id'];
      $notification = array(
        'user_id'=>$u_id,
        'user_type'=>'client',
        'title' => 'Case in progress',
        'message'=>date('Y-m-d'),
        'url'=>'admin/form1/'.$_POST['case_id']
      );
      $this->admin_model->insert_data("notifications",$notification);
      redirect(base_url().'admin/screening_operation/');
    }
    else{
      redirect(base_url().'admin/edit_team/'.$_POST['case_id']);
    }
  }

  public function vendor_assign()
  {
    //print_r($_POST);die;
    if (!empty($_POST['subject_id'])) {
      $subject = $_POST['subject_id'];
      if ($_POST['team_lead'] != '' && $_POST['team_lead'] != null) {
        $lead = $_POST['team_lead'];
      }
      else{
        $lead = $_SESSION['id'];
      }
      $ids = explode(',', $_POST['file_id']);
      $file_links = $this->admin_model->get_image_link($ids);
      $links = array();
      for ($p=0; $p < sizeof($file_links); $p++) { 
        $links[] = $file_links[$p]['file'];
      }
      $files=implode(',', $links);
     
      for ($i=0; $i < sizeof($subject); $i++) {
        $tl = $this->admin_model->select_where('case_team',array('case_id'=>$_POST['case_id'],'subject_id'=>$subject[$i]));
        if (empty($tl)) {
          $data=array(
            'case_id'=>$_POST['case_id'],
            'subject_id'=>$subject[$i],
            'team_lead_id'=>$lead,
          );
          $this->db->insert('case_team',$data);
          $case_team_id=$this->db->insert_id();
        }
        else{
          $case_team_id=$tl[0]['id'];
        }
        $data_member=array(
          'subject_id'=>$subject[$i],
          'case_team_id'=>$case_team_id,
          'team_member_id'=>$lead,
        );
        $this->db->insert('case_team_members',$data_member);
        $this->db->update("subject_case",['is_assigned'=>1],['id'=>$_POST['subject_id'][$i]]);
        $update_status=$this->db->update('case_request',['case_status'=>7],['id'=>$_POST['case_id']]);
        $client = $this->admin_model->select_where('case_request', array('id'=>$_POST['case_id']));
        $u_id = $client[0]['client_id'];
        $notification = array(
          'user_id'=>$u_id,
          'user_type'=>'client',
          'title' => 'Case in progress',
          'message'=>date('Y-m-d'),
          'url'=>'admin/form1/'.$_POST['case_id']
        );
        $this->admin_model->insert_data("notifications",$notification);
        $activity_id = $this->admin_model->select_where('subject_activities',array('case_id'=>$_POST['case_id'],'subject_id'=>$subject[$i]));
        for($a=0;$a<count($activity_id);$a++){
          $data=array(
            'case_id'=>$_POST['case_id'],
            'subject_id'=>$_POST['subject_id'][$i],
            'vendor_id'=>$lead,
            'activity_id'=>$activity_id[$a]['activity_id'],
            'date_time'=>$activity_id[$a]['due_date'],
            'file'=>$files,
            'remarks'=>$_POST['remarks'],
          );
          //$this->db->insert('assign_activity_to_user',$data);
          $this->db->insert('assign_vendor_request',$data);
        }
      }
      $data =array(
        'case_id'=>$_POST['case_id'],
        'charges'=>$_POST['charges'],
        'employee_id' => $_SESSION['id'],
        'vendor_id' => $lead,
        'attachment'=>$files,
        'remarks'=>$_POST['remarks'],
      );
      $this->db->insert('case_fund_request',$data);
      redirect(base_url().'admin/screening_operation/');
    }
    else{
      redirect(base_url().'admin/screening_operation/');
    }
  }

  public function vendor_creation()
{
  $this->load->view('admin2/header');
    $this->load->view('admin2/vendor_creation');
    $this->load->view('admin2/footer');
}

public function insert_vendor_creation()
{
  $data = $this->input->post();
      $this->admin_model->insert_data("employee_itgs",$data);
      redirect('admin/vendor_creation');
}

  public function cash_date()
  {
    if ($this->input->post('start_date') != null && $this->input->post('start_date') != '') {
      $old_date = $this->input->post('start_date');
      $old_date_timestamp = strtotime($old_date);
      $start_date = date('Y-m-d', $old_date_timestamp);
      $old_date = $this->input->post('end_date');
      $old_date_timestamp = strtotime($old_date);
      $end_date = date('Y-m-d', $old_date_timestamp);
      //print_r($start_date.' '.$end_date);die;
      $data['lists'] = $this->admin_model->cash_report($start_date,$end_date);
    }
    else{
      $data['lists'] = $this->admin_model->cash_report();
    }
    $this->load->view('admin2/header');
    $this->load->view('admin2/cash_date',$data);
    $this->load->view('admin2/footer');
  }

  public function payorder_date()
  {
    if ($this->input->post('start_date') != null && $this->input->post('start_date') != '') {
      $old_date = $this->input->post('start_date');
      $old_date_timestamp = strtotime($old_date);
      $start_date = date('Y-m-d', $old_date_timestamp);
      $old_date = $this->input->post('end_date');
      $old_date_timestamp = strtotime($old_date);
      $end_date = date('Y-m-d', $old_date_timestamp);
      //print_r($start_date.' '.$end_date);die;
      $data['lists'] = $this->admin_model->payorder_report($start_date,$end_date);
    }
    else{
      $data['lists'] = $this->admin_model->payorder_report();
    }
    $this->load->view('admin2/header');
    $this->load->view('admin2/payorder_date',$data);
    $this->load->view('admin2/footer');
  }

  public function cash_client()
  {
    if ($this->input->post('start_date') != null && $this->input->post('start_date') != '') {
      $old_date = $this->input->post('start_date');
      $old_date_timestamp = strtotime($old_date);
      $start_date = date('Y-m-d', $old_date_timestamp);
      $old_date = $this->input->post('end_date');
      $old_date_timestamp = strtotime($old_date);
      $end_date = date('Y-m-d', $old_date_timestamp);
      //print_r($start_date.' '.$end_date);die;
      $data['lists'] = $this->admin_model->cash_client_report($start_date,$end_date);
    }
    else{
      $data['lists'] = $this->admin_model->cash_client_report();
    }
    $this->load->view('admin2/header');
    $this->load->view('admin2/cash_client',$data);
    $this->load->view('admin2/footer');
  }

  public function cash_service()
  {
    if ($this->input->post('start_date') != null && $this->input->post('start_date') != '') {
      $old_date = $this->input->post('start_date');
      $old_date_timestamp = strtotime($old_date);
      $start_date = date('Y-m-d', $old_date_timestamp);
      $old_date = $this->input->post('end_date');
      $old_date_timestamp = strtotime($old_date);
      $end_date = date('Y-m-d', $old_date_timestamp);
      //print_r($start_date.' '.$end_date);die;
      $data['lists'] = $this->admin_model->cash_service_report($start_date,$end_date);
    }
    else{
      $data['lists'] = $this->admin_model->cash_service_report();
    }
    $this->load->view('admin2/header');
    $this->load->view('admin2/cash_service',$data);
    $this->load->view('admin2/footer');
  }
  
  public function testmail(){
      $mail = $this->sendmail('usama.farooq91@outlook.com','brien.dabson@gmail.com','test','itgs test','m.umer150@gmail.com');
      if($mail){
          echo 1;
      }
      else{
          echo 2;
      }
  }

  public function sendmail($from,$to,$subject,$message,$cc=null)
  {
    $this->load->library('email');
    $config = array (
      'mailtype' => 'html',
      'charset'  => 'utf-8',
      'priority' => '3'
    );
    $this->email->initialize($config);
    $this->email->set_newline("\r\n");
    $this->email->from($from, 'ITGS'); // change it to yours
    $this->email->to($to);// change it to yours
    if ($cc != null) {
      $this->email->cc($cc.',shania@itgsgroup.com,sarif@ingenioustribe.com,jshahid@itgsgroup.com');
    }
    else{
      $this->email->cc('shania@itgsgroup.com,sarif@ingenioustribe.com,jshahid@itgsgroup.com');
    }
    $this->email->subject($subject);
    $this->email->message($message);
    if($this->email->send())
    {
      return true;
    }
    else
    {
      return false;
    }
  }

  public function monthly_bills()
   {
    $data['jobs']=$this->db->query('select fund_request_activity.*,case_request.client_reference,case_request.hold_date,case_request.unhold_date,case_request.case_date,case_request.client_id,case_request.reference_code,scope_of_work.scope_name,subject_case.subject_name, case_report.date_time from assign_vendor_request inner join fund_request_activity on assign_vendor_request.activity_id = fund_request_activity.activity_id inner JOIN case_request on(case_request.id=fund_request_activity.case_id) inner JOIN subject_case on (subject_case.id=fund_request_activity.subject_id) inner join scope_of_work on (scope_of_work.id=fund_request_activity.activity_id) left join case_report on case_report.case_id = case_request.id Group by fund_request_activity.id')->result_array();
    $this->load->view('admin2/header', $data);
    $this->load->view('admin2/monthly_bills');
    $this->load->view('admin2/footer');
   }

   public function issue_payment()
   {
    $data = $this->input->post();
    if ($data['type'] == 1) {
      unset($data['chaque']);
      unset($data['payorder']);
    }
    elseif ($data['type'] == 2) {
      unset($data['slip']);
      unset($data['payorder']);
    }
    elseif ($data['type'] == 3) {
      unset($data['chaque']);
      unset($data['slip']);
    }
    $this->admin_model->insert_data("fund_approve",$data);
    $this->db->update('fund_request_activity',['is_issue'=>1],['id'=>$_POST['fund_id']]);
    $fund = $this->admin_model->select_where_row('fund_request_activity',array('id'=>$_POST['fund_id']));
    if ($fund) {
      $user = $this->admin_model->select_where_row('employee_itgs',array('id'=>$fund['employee_id']));
      if ($user) {
        $notification = array(
          'user_id'=>$user['id'],
          'user_type'=>'employee',
          'title' => 'Fund Request Approved',
          'message'=>date('Y-m-d'),
          'url'=>'admin/fund_request/'
        );
        $this->admin_model->insert_data("notifications",$notification);
        //$this->sendmail('verify@itgsgroup.com',$user['login'],'Fund Request Approved','Clieck Here To See <a href="'.base_url().'admin/fund_request/">Request</a>');
      }
      $cm = $this->admin_model->get_emp_by_case($fund['case_id']);
      if ($cm) {
        $notification = array(
          'user_id'=>$cm[0]['id'],
          'user_type'=>'employee',
          'title' => 'Fund Request Approved',
          'message'=>date('Y-m-d'),
          'url'=>'admin/screening_operation'
        );
        $this->admin_model->insert_data("notifications",$notification);
      }
      $tl = $this->admin_model->select_where('case_team',array('case_id'=>$fund['case_id']));
      if ($tl) {
        for ($i=0; $i < sizeof($tl); $i++) { 
          $notification = array(
            'user_id'=>$tl[$i]['team_lead_id'],
            'user_type'=>'employee',
            'title' => 'Fund Request Approved',
            'message'=>date('Y-m-d'),
            'url'=>'admin/screening_operation'
          );
          $this->admin_model->insert_data("notifications",$notification);
        }
      }
    }
    redirect('admin/job_dashboard');
   }

   public function leave_application_list()
   {

      $data['lists'] = $this->admin_model->select_leave($_SESSION['employee_id']);
      $this->load->view('admin2/header');
      $this->load->view('admin2/leave_application_list',$data);
      $this->load->view('admin2/footer');
   }

   public function leave_application_request()
   {
      $data['lists'] = $this->admin_model->select_leave_head($_SESSION['role'],$_SESSION['department']);
      $this->load->view('admin2/header');
      $this->load->view('admin2/leave_application_request',$data);
      $this->load->view('admin2/footer');
   }

   public function leave_application_approve($id)
   {
      $this->admin_model->update("leave_applications",array('is_approve'=>'2'),array('id' => $id));
      redirect('admin/leave_application_request');
   }

   public function leave_application_reject($id)
   {
      $this->admin_model->update("leave_applications",array('is_approve'=>'1'),array('id' => $id));
      redirect('admin/leave_application_request');
   }

   public function leave_application_approve_hr($id)
   {
      $this->admin_model->update("leave_applications",array('is_approve'=>'4'),array('id' => $id));
      redirect('admin/leave_application_request_hr');
   }

   public function leave_application_reject_hr($id)
   {
      $this->admin_model->update("leave_applications",array('is_approve'=>'3'),array('id' => $id));
      redirect('admin/leave_application_request_hr');
   }

   public function leave_application_request_hr()
   {
      $data['lists'] = $this->admin_model->select_leave_hr();
      for ($i=0; $i < sizeof($data['lists']); $i++) {
        $s = $data['lists'][$i]['start_date'];
        $s = explode('-', $s);
        $s = $s[0]; 
        $first = date($s.'-12-31 00:00:01');
        $one = date($s.'-01-01');
        $leaves = $this->admin_model->get_employee_leave($one,$first,$data['lists'][$i]['employee_id']);
        //print($this->db->last_query());die;
        $data['lists'][$i]['balance'] = $leaves[0]['days'];
      }
      //print_r($data);die;
      $this->load->view('admin2/header');
      $this->load->view('admin2/leave_application_request_hr',$data);
      $this->load->view('admin2/footer');
   }

   public function leave_application_send($id)
   {
     $this->admin_model->update("leave_applications",array('is_approve'=>'5'),array('id' => $id));
      redirect('admin/leave_application_request_hr');
   }

   public function leave_application_finance()
   {
      $data['lists'] = $this->admin_model->select_leave_finance();
      $this->load->view('admin2/header');
      $this->load->view('admin2/leave_application_finance',$data);
      $this->load->view('admin2/footer');
   }

   public function leave_application_reject_finance($id)
   {
      $this->admin_model->update("leave_applications",array('is_approve'=>'6'),array('id' => $id));
      redirect('admin/leave_application_finance');
   }

   public function leave_application_approve_finance($id)
   {
      $this->admin_model->update("leave_applications",array('is_approve'=>'7'),array('id' => $id));
      redirect('admin/leave_application_finance');
   }

   public function visiting_card_request()
   {
      $data['lists'] = $this->admin_model->all_visiting_card();
      $this->load->view('admin2/header');
      $this->load->view('admin2/visiting_card_request',$data);
      $this->load->view('admin2/footer');
   }

   public function visiting_card_approve($id)
   {
      $this->admin_model->update("visiting_card_forms",array('issue'=>'1'),array('id' => $id));
      redirect('admin/visiting_card_request');
   }

   public function visiting_card_list()
   {
      $data['lists'] = $this->admin_model->all_visiting_card($_SESSION['employee_id']);
      $this->load->view('admin2/header');
      $this->load->view('admin2/visiting_card_list',$data);
      $this->load->view('admin2/footer');
   }

   public function loan_application_list()
   {
      $data['lists'] = $this->admin_model->all_loan_application($_SESSION['employee_id']);
      $this->load->view('admin2/header');
      $this->load->view('admin2/loan_application_list',$data);
      $this->load->view('admin2/footer');
   }

   public function loan_application_request()
   {
      $data['lists'] = $this->admin_model->all_loan_application();
      $this->load->view('admin2/header');
      $this->load->view('admin2/loan_application_request',$data);
      $this->load->view('admin2/footer');
   }

   public function load_application_approve($id,$update)
   {
      $this->admin_model->update("loan_applications",array('is_approve'=>$update),array('id' => $id));
      redirect('admin/loan_application_request');
   }

   public function Load_application_finance()
   {
      $data['lists'] = $this->admin_model->all_loan_application(null,'1');
      $this->load->view('admin2/header');
      $this->load->view('admin2/loan_application_request',$data);
      $this->load->view('admin2/footer');
   }

   public function salary_advance_list()
   {
      $data['lists'] = $this->admin_model->all_salary_advance($_SESSION['employee_id']);
      $this->load->view('admin2/header');
      $this->load->view('admin2/salary_advance_list',$data);
      $this->load->view('admin2/footer');
   }

   public function salary_advance_request()
   {
      $data['lists'] = $this->admin_model->all_salary_advance();
      $this->load->view('admin2/header');
      $this->load->view('admin2/salary_advance_request',$data);
      $this->load->view('admin2/footer');
   }

   public function salary_advance_approve($id,$update)
   {
      $this->admin_model->update("salary_advance_forms",array('is_approve'=>$update),array('id' => $id));
      redirect('admin/loan_application_request');
   }

   public function salary_advance_finance()
   {
      $data['lists'] = $this->admin_model->all_salary_advance(null,'1');
      $this->load->view('admin2/header');
      $this->load->view('admin2/salary_advance_request',$data);
      $this->load->view('admin2/footer');
   }

   public function expense_form_list()
   {
      $data['lists'] = $this->admin_model->all_expance_form($_SESSION['employee_id']);
      $this->load->view('admin2/header');
      $this->load->view('admin2/expense_form_list',$data);
      $this->load->view('admin2/footer');
   }

   public function expense_form_request()
   {
      $data['lists'] = $this->admin_model->select_expance_head($_SESSION['role'],$_SESSION['department']);
      $this->load->view('admin2/header');
      $this->load->view('admin2/expense_form_request',$data);
      $this->load->view('admin2/footer');
   }

   public function expense_form_approve($id,$update)
   {
      $this->admin_model->update("expense_forms",array('is_approve'=>$update),array('id' => $id));
      redirect('admin/expense_form_request');
   }

   public function expense_form_request_admin()
   {
      $data['lists'] = $this->admin_model->select_expance_admin();
      $this->load->view('admin2/header');
      $this->load->view('admin2/expense_form_request_admin',$data);
      $this->load->view('admin2/footer');
   }

   public function expense_form_approve_admin($id,$update)
   {
      $this->admin_model->update("expense_forms",array('is_approve'=>$update),array('id' => $id));
      redirect('admin/expense_form_request_admin');
   }

   public function complaint_form_list()
   {
      $data['lists'] = $this->admin_model->all_complant_form($_SESSION['employee_id']);
      $data['create'] = 0;
      $this->load->view('admin2/header');
      $this->load->view('admin2/complaint_form_list',$data);
      $this->load->view('admin2/footer');
   }

   public function complaint_form_request()
   {
      $data['lists'] = $this->admin_model->all_complant_form(null,$_SESSION['role']);
      $data['create'] = 1;
      $this->load->view('admin2/header');
      $this->load->view('admin2/complaint_form_list',$data);
      $this->load->view('admin2/footer');
   }

   public function update_complaint_form()
   {
     $this->admin_model->update("complaint_forms",array('response'=>$this->input->post('response')),array('id' => $this->input->post('id')));
    redirect('admin/complaint_form_request');
   }

   public function reject_recruitment($id)
   {
      $this->admin_model->update("recruitment",array('latter'=>'2'),array('id' => $id));
      redirect('admin/recruitment_score/'.$id);
   }

   public function latter_recruitment($id)
   {
      //$this->admin_model->update("recruitment",array('latter'=>'1'),array('id' => $id));
      $data['recruitment'] = $this->admin_model->select_where('recruitment',array('id'=>$id));
      $data['id'] = $id;
      $this->load->view('admin2/header');
      $this->load->view('admin2/latter_recruitment', $data);
      $this->load->view('admin2/footer');
   }

   public function create_offer_latter()
   {
      $data = $this->input->post();
      $this->admin_model->update("recruitment",array('latter'=>'1'),array('id' => $data['recruitment_id']));
      $this->admin_model->insert_data("offer_latter",$data);
      redirect('admin/offer_latters');
   }

   public function offer_latters()
   {
      $data['latters'] = $this->admin_model->get_latters();
      $this->load->view('admin2/header');
      $this->load->view('admin2/offer_latters', $data);
      $this->load->view('admin2/footer'); 
   }

   public function insert_training()
   {
      $data = $this->input->post();
      unset($data['apply']);
      $config['upload_path'] = './uploads/training_material';
      $config['allowed_types'] = 'doc|docs|pdf|xlsx';
      $config['max_size'] = '10000';
      $config['max_width'] = '1024';
      $config['max_height'] = '768';
      if (!empty($_FILES)) {
        $this->load->library('upload', $config);
        if($this->upload->do_upload('training_material'))
        {
          $data += array('training_material' => '/uploads/training_material/'.$this->upload->data('file_name') );
        }
        else
        {
          $error = array('error' => $this->upload->display_errors());
        }
      }
      $id = $this->admin_model->insert_data("training",$data);
      $apply = $this->input->post('apply');
      for ($i=0; $i < sizeof($apply); $i++) { 
        $data = array(
          'training_id' => $id,
          'deparment_id' => $apply[$i]
        );
        $this->admin_model->insert_data("training_department",$data);
      }
      redirect('admin/hr_calender');
   }

   public function view_training_hr()
   {
      $data['trainings'] = $this->admin_model->get_data('training');
      $this->load->view('admin2/header');
      $this->load->view('admin2/view_training_hr', $data);
      $this->load->view('admin2/footer'); 
   }

   public function edit_training_hr($id)
   {
      $data['departments'] = $this->admin_model->get_data('departments');
      $data['training'] = $this->admin_model->select_where('training', array('id'=>$id));
      $data['training_departments'] = $this->admin_model->select_where('training_department', array('training_id'=>$id));
      $this->load->view('admin2/header');
      $this->load->view('admin2/edit_training_hr', $data);
      $this->load->view('admin2/footer');
   }

   public function update_training($value='')
   {
      $data = $this->input->post();
      if (!array_key_exists('graded_trainin', $data)) {
        $data += array('graded_trainin' => '0');
      }
      if (!array_key_exists('completion_certificate', $data)) {
        $data += array('completion_certificate' => '0');
      }
      if (!array_key_exists('training_badge_earned', $data)) {
        $data += array('training_badge_earned' => '0');
      }
      if (!array_key_exists('self_enrollment_allowed', $data)) {
        $data += array('self_enrollment_allowed' => '0');
      }
      if (!array_key_exists('mandatory', $data)) {
        $data += array('mandatory' => '0');
      }
      if (!array_key_exists('publish', $data)) {
        $data += array('publish' => '0');
      }
      unset($data['apply']);
      unset($data['id']);
      $id = $this->input->post('id');
      $config['upload_path'] = './uploads/training_material';
      $config['allowed_types'] = 'doc|docs|pdf|xlsx';
      $config['max_size'] = '10000';
      $config['max_width'] = '1024';
      $config['max_height'] = '768';
      if (!empty($_FILES)) {
        $this->load->library('upload', $config);
        if($this->upload->do_upload('training_material'))
        {
          $data += array('training_material' => '/uploads/training_material/'.$this->upload->data('file_name') );
        }
        else
        {
          $error = array('error' => $this->upload->display_errors());
        }
      }
      $this->admin_model->update_data("training",$data,array('id'=>$id));
      $this->admin_model->delete_data('training_department',array('training_id'=>$id));
      $apply = $this->input->post('apply');
      for ($i=0; $i < sizeof($apply); $i++) { 
        $data = array(
          'training_id' => $id,
          'deparment_id' => $apply[$i]
        );
        $this->admin_model->insert_data("training_department",$data);
      }
      redirect('admin/hr_calender');
   }

   public function training_hr($id)
   {
      $data['departments'] = $this->admin_model->get_data('departments');
      $data['training'] = $this->admin_model->select_where('training', array('id'=>$id));
      $data['training_departments'] = $this->admin_model->select_where('training_department', array('training_id'=>$id));
      $data['id'] = $this->admin_model->select_where('approve_training', array('training_id'=>$id,'employee_id'=>$_SESSION['id']));
      $this->load->view('admin2/header');
      $this->load->view('admin2/training_hr', $data);
      $this->load->view('admin2/footer');
   }

   public function insert_course()
   {
      $data = $this->input->post();
      $this->admin_model->insert_data("courses",$data);
      redirect('admin/view_course');
   }

   public function edit_course($id)
   {
      $this->is_login();
      $_SESSION['page']="edit_course";

      $data['records']=$this->admin_model->get_data('employee_itgs');
      $data['course'] = $this->admin_model->select_where('courses',array('id'=>$id));
      $this->load->view('admin2/header');
      $this->load->view('admin2/edit_course',$data);
      $this->load->view('admin2/footer');
   }

   public function update_course()
   {
      $data = $this->input->post();
      unset($data['id']);
      $id = $this->input->post('id');
      $this->admin_model->update_data("courses",$data,array('id'=>$id));
      redirect('admin/view_course');
   }

   public function com_course($id)
   {
      $this->admin_model->update("courses",array('status'=>'1'),array('id' => $id));
      redirect('admin/view_course/');
   }

   public function complete_course()
  {
    $this->is_login();
    $_SESSION['page']="view_course";

    $data['courses']=$this->admin_model->complete_courses();
    $this->load->view('admin2/header');
    $this->load->view('admin2/complete_course',$data);
    $this->load->view('admin2/footer');

  }

  public function create_chapter()
  {
    $this->is_login();
    $_SESSION['page']="view_course";

    $data['courses']=$this->admin_model->view_courses();
    $this->load->view('admin2/header');
    $this->load->view('admin2/create_chapter',$data);
    $this->load->view('admin2/footer');
  }

  public function insert_chapter()
  {
    $chapter = $this->input->post('chapter[]');
    for ($i=0; $i < sizeof($chapter); $i++) { 
      $data = array('course_id'=>$this->input->post('course_id'), 'chapter'=> $chapter[$i]);
      $this->admin_model->insert_data("chapter",$data);
    }
    redirect('admin/view_course');  
  }

  public function create_section()
  {
    $this->is_login();
    $_SESSION['page']="view_course";
    $data['courses']=$this->admin_model->view_courses();
    $this->load->view('admin2/header');
    $this->load->view('admin2/create_section',$data);
    $this->load->view('admin2/footer');
  }

  public function insert_section()
  {
    $section = $this->input->post('section[]');
    for ($i=0; $i < sizeof($section); $i++) { 
      $data = array('course_id'=>$this->input->post('course_id'), 'chapter_id'=>$this->input->post('chapter_id'), 'section'=> $section[$i]);
      $this->admin_model->insert_data("section",$data);
    }
    redirect('admin/view_course');  
  }

  public function get_chapter($id)
  {
    $data = $this->admin_model->select_where('chapter',array('course_id'=>$id));
    echo json_encode($data);
  }

  public function get_section($id)
  {
    $data = $this->admin_model->select_where('section',array('chapter_id'=>$id));
    echo json_encode($data);
  }

  public function insert_aplicant()
{


 $data_modal = array(
    'case_id'=>$this->input->post('case_id'),
    'reference_number'=>$this->input->post('reference_number'),
    'request_date'=>$this->input->post('request_date'),
    'report_date'=>$this->input->post('report_date'),
    'name'=>$this->input->post('name'),
    'assigned_subject_id'=>$this->input->post('subject_id'),
    'address'=>$this->input->post('address'),
    'father_husband_name' => $this->input->post('father_husband_name'),
    'mother_name' => $this->input->post('mother_name'),
    'date_of_birth' => $this->input->post('date_of_birth'),
    'place_of_birth' => $this->input->post('place_of_birth'),
    'passport_number' => $this->input->post('passport_number'),
    'cnic' => $this->input->post('cnic'),
    'ntn' => $this->input->post('ntn'),

  );

   $this->db->insert("case_aplicant", $data_modal);
   redirect(base_url().'admin/screening_operation');
}

public function edit_report_case($id)
 {
   $data['subjects']=$this->admin_model->case_rep($id);
   

  $this->load->view('admin2/header');
  $this->load->view('admin2/edit_report_case',$data);
  $this->load->view('admin2/footer');

 }
 public function update_report()
{

  $case_id= $_POST['case_id'];
    error_reporting('-1');
    $count_subject=count($_POST['subject_id']);
    $request_date = $this->input->post('request_date');
    $report_date = $this->input->post('report_date');
    $name = $this->input->post('name');
    $address =$this->input->post('address');
    $father_husband_name = $this->input->post('father_husband_name');
    $mother_name = $this->input->post('mother_name');
    $date_of_birth = $this->input->post('date_of_birth');
    $place_of_birth =$this->input->post('place_of_birth');
    $passport_number =$this->input->post('passport_number');
    $cnic = $this->input->post('cnic');
    $ntn = $this->input->post('ntn');

for ($i=0; $i < $count_subject; $i++) {
  $subject_id=$_POST['subject_id'][$i];
  $data_case = array(
    'case_id'=>$case_id,
    'request_date'=>$request_date[$i],
    'report_date'=>$report_date[$i],
    'name'=>$name[$i],
    'address'=>$address[$i],
    'father_husband_name'=>$father_husband_name[$i],
    'mother_name'=>$mother_name[$i],
    'date_of_birth'=>$date_of_birth[$i],
    'place_of_birth'=>$place_of_birth[$i],
    'passport_number'=>$passport_number[$i],
    'cnic'=>$cnic[$i],
    'ntn'=>$ntn[$i]
      );

    $this->db->update('case_aplicant', $data_case,['assigned_subject_id'=>$subject_id,'case_id'=>$case_id]);

}
    redirect(base_url().'admin/screening_operation/');
}

public function admin_login()
  {
    if ($this->session->userdata('login_id')) {
      redirect(base_url().'admin/dashboard');
    }
    $this->load->view('admin2/admin_login');
  }
  
  public function do_admin_login()
  {
    $data=array(
      'login'=>$_POST['login_name'],
      'pass'=>$_POST['password']
    );

    if($client=$this->db->get_where('login',$data)->row_array()){
   

      $this->session->set_userdata($client);
           redirect(base_url().'admin/admin_dashboard');
    }else{
      $data['error']="Invalid Credentials";
           $this->load->view('admin/login_client',$data);

    }

  }

  public function insert_customized_report()
{

  $subject_attachement_ids = $this->input->post('attacment_custamize_id');
  $ids = explode(',', $subject_attachement_ids[0]);
  $file_links = $this->admin_model->get_image_link($ids);
  //print_r($file_links);die;
  $links = array();
  for ($p=0; $p < sizeof($file_links); $p++) { 
    $links[] = $file_links[$p]['file'];
  }
  $data_modal = array(
    'assign_activity_id'=>$this->input->post('s_id'),
    'itgs_reference'=>$this->input->post('itgs_reference'),
    'activity_name'=>$this->input->post('activity_name'),
    'due_date'=>$this->input->post('due_date'),
    'remarks' => $this->input->post('remarks'),
    'contact_detail'=>implode(',', $links)
  );
  $this->admin_model->update_data("assign_activity_to_user",array('is_report' => '1','report_time'=>date('Y-m-d')),array('id'=>$this->input->post('s_id')));

  $this->db->insert("customized_report", $data_modal);
  redirect(base_url().'admin/job_dashboard');
}

public function subject_dummy()
{
  $id = array();
  $data = array('unique_id'=>$this->input->post('id'),'type'=>$this->input->post('type'));
  $all_files = $_FILES;
  $file = [];
  $config['upload_path'] = './uploads/attachment';
  $config['allowed_types'] = 'pdf|doc|docx|jpg|png|rtf|txt|xlsx|xls|pptx|jpeg|7z|rar|dot|zip';
  $config['max_size'] = '60000';
  $config['max_width'] = '10024';
  $config['max_height'] = '7068';
  $this->load->library('upload', $config);
  $this->upload->initialize($config);
  $files = $all_files['file'];
  $cpt = count($all_files['file']['name']);
  //print_r($files);die;
  for($p=0; $p<$cpt; $p++)
  {
    unset($data['file']);
    $_FILES['subject_attachement']['name']= $files['name'][$p];
    $_FILES['subject_attachement']['type']= $files['type'][$p];
    $_FILES['subject_attachement']['tmp_name']= $files['tmp_name'][$p];
    $_FILES['subject_attachement']['error']= $files['error'][$p];
    $_FILES['subject_attachement']['size']= $files['size'][$p];    
    if (!$this->upload->do_upload('subject_attachement')){}
    else{
      $data += array('file'=>$this->upload->data('file_name'));
      $id[] = $this->admin_model->insert_data("subject_dummy_attechment",$data);
    }           
  }
  $js = json_encode($id);
  echo $js;
}
public function get_subject_file()
{
  $id = $this->input->post('id');
  $id = explode(',', $id);
  $data = $this->admin_model->get_image($id);
  echo json_encode($data);
}

public function delete_subject_file($id)
{
  $this->admin_model->delete_data('subject_dummy_attechment',array('id'=>$id));
}

public function activity_dummy()
{
  $id = array();
  $data = array('unique_id'=>$this->input->post('id'),'type'=>$this->input->post('type'),'subject_id'=>$this->input->post('subject_id'));
  $all_files = $_FILES;
  $file = [];
  $config['upload_path'] = './uploads/activity_attachment';
  $config['allowed_types'] = 'pdf|doc|docx|jpg|png|rtf|txt|xlsx|xls|pptx|jpeg|7z|rar|dot|zip';
  $config['max_size'] = '60000';
  $config['max_width'] = '10024';
  $config['max_height'] = '7068';
  $this->load->library('upload', $config);
  $this->upload->initialize($config);
  $files = $all_files['file'];
  $cpt = count($all_files['file']['name']);
  //print_r($files);die;
  for($p=0; $p<$cpt; $p++)
  {
    unset($data['file']);
    $_FILES['subject_attachement']['name']= $files['name'][$p];
    $_FILES['subject_attachement']['type']= $files['type'][$p];
    $_FILES['subject_attachement']['tmp_name']= $files['tmp_name'][$p];
    $_FILES['subject_attachement']['error']= $files['error'][$p];
    $_FILES['subject_attachement']['size']= $files['size'][$p];    
    if (!$this->upload->do_upload('subject_attachement')){}
    else{
      $data += array('file'=>$this->upload->data('file_name'));
      $id[] = $this->admin_model->insert_data("activity_dummy_attechment",$data);
    }           
  }
  $js = json_encode($id);

  echo $js;
}


public function get_activity_file()
{
  $id = $this->input->post('id');
  $id = explode(',', $id);
  $data = $this->admin_model->get_activity_image($id);
  echo json_encode($data);
}

public function delete_act_file($id)
{
  $this->admin_model->delete_data('activity_dummy_attechment',array('id'=>$id));
}

public function insert_nadra()
 {
   $evidence = $_FILES['evidence'];

   $data_modal = array(
    'assign_activity_id'=>$this->input->post('subject_id'),
    'name'=>$this->input->post('name'),
    'father_name'=>$this->input->post('father_name'),
    'mother_name'=>$this->input->post('mother_name'),
    'cnic'=>$this->input->post('cnic'),
    'nationality'=>$this->input->post('nationality'),
    'religion'=>$this->input->post('religion'),
    'present_address'=>$this->input->post('present_address'),
    'permanent_address' => $this->input->post('permanent_address'),
    'date_of_birth' => $this->input->post('date_of_birth'),
    'place_of_birth' => $this->input->post('place_of_birth'),
    'country_stay' => $this->input->post('country_stay'),
  );


    $ids = explode(',', $_POST['file_id']);
  $file_links = $this->admin_model->get_image_link($ids);
  $links = array();
  for ($p=0; $p < sizeof($file_links); $p++) { 
    $links[] = $file_links[$p]['file'];
  }
  $data['evidence']=implode(',', $links);
   /*print_r($data_modal);die;*/
   $this->admin_model->update_data("assign_activity_to_user",array('is_report' => '1','report_time'=>date('Y-m-d')),array('id'=>$this->input->post('subject_id')));
   $this->admin_model->insert_data("nadra_verification", $data_modal);
   redirect(base_url().'admin/job_dashboard');
 }

 public function fbr_records()
{
  $evidence = $_FILES['evidence'];

     $data_modal = array(
    'assign_activity_id'=>$this->input->post('fbr_id'),

    'name'=>$this->input->post('name'),
    'category'=>$this->input->post('category'),
    'cnic'=>$this->input->post('cnic'),
    'ntn' => $this->input->post('ntn'),
    'principle_activity'=>$this->input->post('principle_activity'),

    'business_nature' => $this->input->post('business_nature'),
    'registered_for_income_tax' => $this->input->post('registered_for_income_tax'),
    'income_tax_office' => $this->input->post('income_tax_office'),
      );

    $ids = explode(',', $_POST['file_id']);
  $file_links = $this->admin_model->get_image_link($ids);
  $links = array();
  for ($p=0; $p < sizeof($file_links); $p++) { 
    $links[] = $file_links[$p]['file'];
  }
  $data['evidence']=implode(',', $links);
    $this->admin_model->update_data("assign_activity_to_user",array('is_report' => '1','report_time'=>date('Y-m-d')),array('id'=>$this->input->post('fbr_id')));
     $this->admin_model->insert_data("fbr_record", $data_modal);
   redirect(base_url().'admin/job_dashboard');
}

function regulatory_checks()
{
  $data_modal = array(
    'assign_activity_id'=>$this->input->post('reg_id'),
    'name'=>$this->input->post('name'),
    'result'=>$this->input->post('result'),
  );


  $ids = explode(',', $_POST['file_id']);
  $file_links = $this->admin_model->get_image_link($ids);
  $links = array();
  for ($p=0; $p < sizeof($file_links); $p++) { 
    $links[] = $file_links[$p]['file'];
  }
  $data['evidence']=implode(',', $links);
    $this->admin_model->update_data("assign_activity_to_user",array('is_report' => '1','report_time'=>date('Y-m-d')),array('id'=>$this->input->post('reg_id')));
     $this->admin_model->insert_data("regulatory_checks", $data_modal);
   redirect(base_url().'admin/job_dashboard');

}

public function litigation_check()
{
     $data_modal = array(
    'assign_activity_id'=>$this->input->post('lit_id'),
    'status'=>$this->input->post('status'),
    'type_of_result'=>$this->input->post('type_of_result'),
    'sources'=>$this->input->post('sources'),
    'note' => $this->input->post('note'),
  );
    

     $ids = explode(',', $_POST['file_id']);
  $file_links = $this->admin_model->get_image_link($ids);
  $links = array();
  for ($p=0; $p < sizeof($file_links); $p++) { 
    $links[] = $file_links[$p]['file'];
  }
  $data['evidence']=implode(',', $links);
    $this->admin_model->update_data("assign_activity_to_user",array('is_report' => '1','report_time'=>date('Y-m-d')),array('id'=>$this->input->post('lit_id')));
     $this->admin_model->insert_data("litigation_checks", $data_modal);
   redirect(base_url().'admin/job_dashboard');
}

public function education_verification()
{
  $data_modal = $this->input->post();

  unset($data_modal['key']);
  unset($data_modal['value1']);
  unset($data_modal['value2']);
  unset($data_modal['file_id']);
  $first = $data_modal['1_start_date']. ' to '.$data_modal['1_end_date'];
  $last = $data_modal['2_start_date']. ' to '.$data_modal['2_end_date'];
  unset($data_modal['1_start_date']);
  unset($data_modal['1_end_date']);
  unset($data_modal['2_start_date']);
  unset($data_modal['2_end_date']);
  

  $ids = explode(',', $_POST['file_id']);
  $file_links = $this->admin_model->get_image_link($ids);
  $links = array();
  for ($p=0; $p < sizeof($file_links); $p++) { 
    $links[] = $file_links[$p]['file'];
  }
  $data['evidence']=implode(',', $links);
  $id = $this->admin_model->insert_data("education_check", $data_modal);
  if ($id) {
    $this->admin_model->update_data("assign_activity_to_user",array('is_report' => '1','report_time'=>date('Y-m-d')),array('id'=>$this->input->post('assign_activity_id')));
    $key = $this->input->post('key');
    $value1 = $this->input->post('value1');
    $value2 = $this->input->post('value2');
    for ($i=0; $i < sizeof($key); $i++) { 
      if ($key[$i] != 'Dates attended from / to') {
        $data = array(
          'education_id' => $id,
          'edu_key' => $key[$i],
          'value1' => $value1[$i],
          'value2' => $value2[$i]
        );
      }
      else{
        $data = array(
          'education_id' => $id,
          'edu_key' => $key[$i],
          'value1' => $first,
          'value2' => $last
        );
      }
      $this->admin_model->insert_data("education_check_key", $data);
    }
  }
  redirect(base_url().'admin/job_dashboard');
}

public function crimnal_background()
{
  
     $data_modal = $this->input->post();
     unset($data_modal['file_id']);
     $ids = explode(',', $_POST['file_id']);
  $file_links = $this->admin_model->get_image_link($ids);
  $links = array();
  for ($p=0; $p < sizeof($file_links); $p++) { 
    $links[] = $file_links[$p]['file'];
  }
  $data['evidence']=implode(',', $links);
   

    $this->admin_model->update_data("assign_activity_to_user",array('is_report' => '1','report_time'=>date('Y-m-d')),array('id'=>$this->input->post('assign_activity_id')));
     $this->admin_model->insert_data("crimnal_check", $data_modal);
   redirect(base_url().'admin/job_dashboard');
}

public function past_employment()
{
  $data_modal = $this->input->post();
  unset($data_modal['key']);
  unset($data_modal['value1']);
  unset($data_modal['value2']);
  unset($data_modal['file_id']);
  $ids = explode(',', $_POST['file_id']);
  $file_links = $this->admin_model->get_image_link($ids);
  $links = array();
  for ($p=0; $p < sizeof($file_links); $p++) { 
    $links[] = $file_links[$p]['file'];
  }
  $data['evidence']=implode(',', $links);
  
  $id = $this->admin_model->insert_data("past_employment", $data_modal);
  if ($id) {
    $this->admin_model->update_data("assign_activity_to_user",array('is_report' => '1','report_time'=>date('Y-m-d')),array('id'=>$this->input->post('assign_activity_id')));
    $key = $this->input->post('key');
    $value1 = $this->input->post('value1');
    $value2 = $this->input->post('value2');
    for ($i=0; $i < sizeof($key); $i++) { 
      $data = array(
        'past_id' => $id,
        'past_key' => $key[$i],
        'value1' => $value1[$i],
        'value2' => $value2[$i]
      );
      $this->admin_model->insert_data("past_employment_key", $data);
    }
  }
  redirect(base_url().'admin/job_dashboard');
}

public function insert_report_vendor()
{
  error_reporting('-1');
  $data = $this->input->post();
  unset($data['file_id']);
 

  $ids = explode(',', $_POST['file_id']);
  $file_links = $this->admin_model->get_image_link($ids);
  $links = array();
  for ($p=0; $p < sizeof($file_links); $p++) { 
    $links[] = $file_links[$p]['file'];
  }
  $data['file']=implode(',', $links);
  $this->admin_model->update_data("assign_vendor_request",array('is_report' => '1','report_time'=>date('Y-m-d')),array('id'=>$this->input->post('assign_vendor_id')));
  $this->admin_model->insert_data("vendor_report", $data);
  $vendor = $this->admin_model->select_where_row('assign_vendor_request', array('id'=>$data['assign_vendor_id']));
  if ($vendor) {
    $user = $this->admin_model->select_where_row('assign_activity_to_user',array('case_id'=>$vendor['case_id'],'activity_id'=>$vendor['activity_id']));
    if ($user) {
      $user_detail = $this->admin_model->select_where_row('employee_itgs',array('id'=>$user['member_id']));
      if ($user_detail) {
        $notification = array(
          'user_id'=>$user_detail['id'],
          'user_type'=>'employee',
          'title' => 'Vendor Report Submit',
          'message'=>date('Y-m-d'),
          'url'=>'admin/view_report_case/'.$vendor['case_id']
        );
        $this->admin_model->insert_data("notifications",$notification);


      }
    }
    $cm = $this->admin_model->get_emp_by_case($vendor['case_id']);
    if ($cm) {
      $notification = array(
        'user_id'=>$cm[0]['id'],
        'user_type'=>'employee',
        'title' => 'Vendor Report Submit',
        'message'=>date('Y-m-d'),
        'url'=>'admin/view_report_case/'.$vendor['case_id']
      );
      $this->admin_model->insert_data("notifications",$notification);
    }
    $tl = $this->admin_model->select_where('case_team',array('case_id'=>$vendor['case_id']));
    if ($tl) {
      for ($i=0; $i < sizeof($tl); $i++) { 
        $notification = array(
          'user_id'=>$tl[$i]['id'],
          'user_type'=>'employee',
          'title' => 'Vendor Report Submit',
          'message'=>date('Y-m-d'),
          'url'=>'admin/view_report_case/'.$vendor['case_id']
        );
        $this->admin_model->insert_data("notifications",$notification);
      }
    }
  }

  redirect(base_url().'admin/job_dashboard');
}


public function upload_content()
{
  $data['courses'] = $this->admin_model->select_where('courses', array('status'=>'0'));
  $this->load->view('admin2/header');
  $this->load->view('admin2/upload_content',$data);
  $this->load->view('admin2/footer');
}

public function insert_content()
{
  $all_files = $_FILES;
  $config['upload_path'] = './uploads/course_content';
  $config['allowed_types'] = 'pdf|doc|docx|jpg|png|rtf|txt|xlsx|xls|pptx|jpeg|mp4|avi|flv|wmv|mov|gif';
  $config['max_size'] = '10000';
  $config['max_width'] = '1024';
  $config['max_height'] = '768';
  $this->load->library('upload', $config);
  $this->upload->initialize($config);
  $data = $this->input->post();
  unset($data['question']);
  $type = $this->input->post('type');
  if ($type == 0) {
    $data += array('question' => $this->input->post('question'));
  }
  elseif ($type == 1) {
    if (!empty($_FILES['image'])) {
      $file = [];
      $files = $all_files['image'];
      $cpt = count($all_files['image']['name']);
      for($p=0; $p<$cpt; $p++)
      {
        $_FILES['image']['name']= $files['name'][$p];
        $_FILES['image']['type']= $files['type'][$p];
        $_FILES['image']['tmp_name']= $files['tmp_name'][$p];
        $_FILES['image']['error']= $files['error'][$p];
        $_FILES['image']['size']= $files['size'][$p];    
        if (!$this->upload->do_upload('image'))
        {  
          $file[] = '';
        }
        else{
          $file[] = $this->upload->data('file_name');
        }            
      }
      $data += array('image' => implode(',', $file));
    }
  }
  elseif ($type == 2) {
    if (!empty($_FILES['video'])) {
      $file = [];
      $files = $all_files['video'];
      $cpt = count($all_files['video']['name']);
      for($p=0; $p<$cpt; $p++)
      {
        $_FILES['video']['name']= $files['name'][$p];
        $_FILES['video']['type']= $files['type'][$p];
        $_FILES['video']['tmp_name']= $files['tmp_name'][$p];
        $_FILES['video']['error']= $files['error'][$p];
        $_FILES['video']['size']= $files['size'][$p];    
        if (!$this->upload->do_upload('video'))
        {  
          $file[] = '';
        }
        else{
          $file[] =$this->upload->data('file_name');
        }            
      }
      $data += array('video' => implode(',', $file));
    }
  }
  elseif ($type == 3) {
    if (!empty($_FILES['file'])) {
      $file = [];
      $files = $all_files['file'];
      $cpt = count($all_files['file']['name']);
      for($p=0; $p<$cpt; $p++)
      {
        $_FILES['file']['name']= $files['name'][$p];
        $_FILES['file']['type']= $files['type'][$p];
        $_FILES['file']['tmp_name']= $files['tmp_name'][$p];
        $_FILES['file']['error']= $files['error'][$p];
        $_FILES['file']['size']= $files['size'][$p];    
        if (!$this->upload->do_upload('file'))
        {  
          $file[] = '';
        }
        else{
          $file[] =$this->upload->data('file_name');
        }            
      }
      $data += array('file' => implode(',', $file));
    }
  }
  $this->admin_model->insert_data("course_content", $data);
  redirect('admin/training_lab');
}

public function case_fund_request()
{
  if ($_SESSION['role'] == 'Internal Auditor') {
    $data['fund_requests'] = $this->admin_model->get_case_fund();
  }
  elseif ($_SESSION['role'] == 'Manager Finance') {
    $data['fund_requests'] = $this->admin_model->get_case_fund('1');
  }
  //print_r($data);die;
  $this->load->view('admin2/header');
  $this->load->view('admin2/case_fund_request',$data);
  $this->load->view('admin2/footer');
}

public function update_case_fund(){
   $this->db->update('case_fund_request',['is_approve'=>$_GET['status']],['id'=>$_GET['request_id'],'case_id'=>$_GET['case_id']]);
   if ($_GET['status'] == 2) {
     $this->admin_model->delete_data('assign_vendor_request',array('case_id'=>$_GET['case_id']));
   }
   if($this->db->affected_rows()>0){
       redirect(base_url().'admin/case_fund_request');
   }else{
       redirect(base_url().'admin/case_fund_request');

   }

}

public function issue_case_payment()
   {
    $data = $this->input->post();
    if ($data['type'] == 1) {
      unset($data['chaque']);
      unset($data['payorder']);
    }
    elseif ($data['type'] == 2) {
      unset($data['slip']);
      unset($data['payorder']);
    }
    elseif ($data['type'] == 3) {
      unset($data['chaque']);
      unset($data['slip']);
    }
    $this->admin_model->insert_data("fund_case_approve",$data);
    $this->db->update('case_fund_request',['is_issue'=>1],['id'=>$_POST['fund_id']]);
    $case = $this->admin_model->select_where('case_fund_request',array('id'=>$_POST['fund_id']));
    $case_id = $case[0]['case_id'];
    $this->db->update('assign_vendor_request',['is_assigned'=>1],['case_id'=>$case_id]);
    redirect('admin/case_fund_request');
   }


   public function view_employee_request()
   {

    $data['employees'] = $this->admin_model->get_request_employee();
   $this->load->view('admin2/header',$data);
  $this->load->view('admin2/view_employee_request');
  $this->load->view('admin2/footer');
   }

   public function admin_edit($id)
   {
     $data['employee'] = $this->admin_model->select_where('employee_itgs', array('id'=>$id));
     $data['employee'] = $data['employee'][0];
      $data['employees']=$this->admin_model->get_data('employee_itgs');

   $this->load->view('admin2/header',$data);
  $this->load->view('admin2/edit_employee_request');
  $this->load->view('admin2/footer');
   }

   public function edit_employee_admin()
   {
      $data=$_POST;
      unset($data['id']);
      $this->admin_model->update_data("employee_itgs",$data,array('id'=>$this->input->post('id')));
      redirect('admin/view_employee_modal');
   }

   public function performance_evolution()
   {

      $month = 12;
      if ($month == '3' || $month == '6' || $month == '12' || $month == '9') {

        $start = date('Y-'.$month.'-01');
        $end = date('Y-'.$month.'-t');

        if ($_SESSION['role'] == 'Hr') {
          $data['employees']=$this->admin_model->get_data('employee_itgs');
        }
        elseif ($_SESSION['role'] == 'Admin') {
          $data['employees']=$this->admin_model->get_data_per_employee();
        }
        elseif ($_SESSION['role'] == 'CM') {
          $data['employees']=$this->admin_model->get_data_per_emp_cm();
        }
        else{
          $data['employees']=array();
        }
        $delete = [];
        for ($i=0; $i < sizeof($data['employees']); $i++) { 
          $per = $this->admin_model->get_performance_review($start,$end,$data['employees'][$i]['id'],$_SESSION['login_id']);
          if (!empty($per)) {
            $delete[] = $i;
          }
        }
      }
      for ($i=0; $i < sizeof($delete); $i++) { 
        unset($data['employees'][$delete[$i]]);
      }
      $data['month'] = $month;
      $this->load->view('admin2/header',$data);
      $this->load->view('admin2/performance_evolution');
      $this->load->view('admin2/footer');
   }

   public function complated_review()
   {
      if ($_SESSION['role'] == 'CM') {
        $data['employees']=$this->admin_model->get_reviews($_SESSION['id']);
      }
      else{
        $data['employees']=$this->admin_model->get_reviews();
      }

      $this->load->view('admin2/header',$data);
      $this->load->view('admin2/complated_review');
      $this->load->view('admin2/footer');
   }

   public function case_analytics($id = null,$range=null)
   {
      $first = date('Y-m-01 00:00:01', strtotime("-3 month"));
      $last = date('Y-m-t 23:59:59');
      if ($range!=null) {
        if($range == 'daily'){
          $first = date('Y-m-d 00:00:01');
          $last = date('Y-m-d 23:59:59');
        }
        elseif($range == 'monthly'){
          $first = date('Y-m-d 00:00:01', strtotime("-1 month"));
          $last = date('Y-m-d 23:59:59');
        }
        elseif($range == 'quarterly'){
          $first = date('Y-m-d 00:00:01', strtotime("-3 month"));
          $last = date('Y-m-d 23:59:59');
        }
        elseif($range == 'half-yearly'){
          $first = date('Y-m-d 00:00:01', strtotime("-6 month"));
          $last = date('Y-m-d 23:59:59');
        }
      }
      if ($this->input->post()) {
        $first = date('Y-m-d 00:00:01', strtotime($this->input->post('start')));
        $last = date('Y-m-d 23:59:59', strtotime($this->input->post('end')));
      }
      if ($id != null && $id != 'null') {
        $data['case'] = $this->admin_model->get_case_analytics($first,$last,$id);
      }
      else{
        $data['case'] = $this->admin_model->get_case_analytics($first,$last);
      }
      $case = [];
      $ca = $data['case'];
      for ($i=0; $i < sizeof($ca); $i++) { 
        $key = array_search($ca[$i]['created_at'], array_column($case, 'date'));
        if (array_key_exists($key,$case)) {
          if($ca[$i]['case_status']==1){
            $case[$key]['panding'] = $case[$key]['panding'] + 1;
          }else if($ca[$i]['case_status']==4){
            $case[$key]['cancel'] = $case[$key]['cancel'] + 1;
          }else if($ca[$i]['case_status']==7){
            $case[$key]['progess'] = $case[$key]['progess'] + 1;
          }else if($ca[$i]['case_status']==8){
            $case[$key]['onhold'] = $case[$key]['onhold'] + 1;
          }else if($ca[$i]['case_status']==5){
            $case[$key]['completed'] = $case[$key]['completed'] + 1;
          }
        }
        else{
          $panding = 0;
          $cancel = 0;
          $progess = 0;
          $completed = 0;
          $onhold = 0;
          if($ca[$i]['case_status']==1){
            $panding = $panding + 1;
          }else if($ca[$i]['case_status']==4){
            $cancel = $cancel + 1;
          }else if($ca[$i]['case_status']==7){
            $progess = $progess + 1;
          }else if($ca[$i]['case_status']==8){
            $onhold = $onhold + 1;
          }else if($ca[$i]['case_status']==5){
            $completed = $completed + 1;
          }
          $case[] = array(
            'date'=>$ca[$i]['created_at'],
            'panding'=>$panding,
            'cancel'=>$cancel,
            'progess'=>$progess,
            'completed'=>$completed,
            'onhold'=>$onhold,
          );
        }
      }
      $data['case'] = $case;
      if ($id != null) {
        $data['url'] = base_url('admin/case_analytics/'.$id);
      }else{
        $data['url'] = base_url('admin/case_analytics/null');
      }
      $data['client'] = $this->admin_model->get_data('client');
      $data['form_url'] = base_url('admin/case_analytics/');
      $this->load->view('admin2/header',$data);
      $this->load->view('admin2/case_analytics');
      $this->load->view('admin2/footer');
   }

   public function case_analytics_team($id = null,$range=null)
   {
      $first = date('Y-m-01 00:00:01', strtotime("-3 month"));
      $last = date('Y-m-t 23:59:59');
      if ($range!=null) {
        if($range == 'daily'){
          $first = date('Y-m-d 00:00:01');
          $last = date('Y-m-d 23:59:59');

        }
        elseif($range == 'monthly'){
          $first = date('Y-m-d 00:00:01', strtotime("-1 month"));
          $last = date('Y-m-d 23:59:59');
        }
        elseif($range == 'quarterly'){
          $first = date('Y-m-d 00:00:01', strtotime("-3 month"));
          $last = date('Y-m-d 23:59:59');
        }
        elseif($range == 'half-yearly'){
          $first = date('Y-m-d 00:00:01', strtotime("-6 month"));
          $last = date('Y-m-d 23:59:59');
        }
      }
      if ($this->input->post()) {
        $first = date('Y-m-d 00:00:01', strtotime($this->input->post('start')));
        $last = date('Y-m-d 23:59:59', strtotime($this->input->post('end')));
      }
      if ($id != null && $id != 'null') {
        $data['case'] = $this->admin_model->get_case_team_analytics($first,$last,$id);
      }
      else{
        $data['case'] = $this->admin_model->get_case_team_analytics($first,$last);
      }
      $case = [];
      $panding_array = [];
      $ca = $data['case'];
      $all_status = array(
        'Total no of cases' => 0,
        'Panding' => 0,
        'Completed' => 0,
        'Completed within due date' => 0,
        'Completed after due date' => 0,
        'Cancel' => 0,
      );
      for ($i=0; $i < sizeof($ca); $i++) { 
        $all_status['Total no of cases'] = $all_status['Total no of cases'] + 1;
        if($ca[$i]['case_status']!=8 || $ca[$i]['case_status']!=1){
          if($ca[$i]['case_status']==4){
            $all_status['Cancel'] = $all_status['Cancel'] + 1;
          }
          if($ca[$i]['case_status']==5){
            $all_status['Completed'] = $all_status['Completed'] + 1;
            if (strtotime($ca[$i]['date_time']) > strtotime($ca[$i]['case_due_date'])) {
              $all_status['Completed after due date'] = $all_status['Completed after due date'] + 1;
            }
            else{
              $all_status['Completed within due date'] = $all_status['Completed within due date'] + 1;
            }
          }
          if($ca[$i]['case_status']==7){
            $all_status['Panding'] = $all_status['Panding'] + 1;
            $panding_array[] = $ca[$i]['id'];
          }
        }
        $key = array_search($ca[$i]['created_at'], array_column($case, 'date'));
        if (array_key_exists($key,$case)) {
          if($ca[$i]['case_status']==1){
            $case[$key]['panding'] = $case[$key]['panding'] + 1;
          }else if($ca[$i]['case_status']==4){
            $case[$key]['cancel'] = $case[$key]['cancel'] + 1;
          }else if($ca[$i]['case_status']==7){
            $case[$key]['progess'] = $case[$key]['progess'] + 1;
          }else if($ca[$i]['case_status']==8){
            $case[$key]['onhold'] = $case[$key]['onhold'] + 1;
          }else if($ca[$i]['case_status']==5){
            $case[$key]['completed'] = $case[$key]['completed'] + 1;
          }
        }
        else{
          $panding = 0;
          $cancel = 0;
          $progess = 0;
          $completed = 0;
          $onhold = 0;
          if($ca[$i]['case_status']==1){
            $panding = $panding + 1;
          }else if($ca[$i]['case_status']==4){
            $cancel = $cancel + 1;
          }else if($ca[$i]['case_status']==7){
            $progess = $progess + 1;
          }else if($ca[$i]['case_status']==8){
            $onhold = $onhold + 1;
          }else if($ca[$i]['case_status']==5){
            $completed = $completed + 1;
          }
          $case[] = array(
            'date'=>$ca[$i]['created_at'],
            'panding'=>$panding,
            'cancel'=>$cancel,
            'progess'=>$progess,
            'completed'=>$completed,
            'onhold'=>$onhold,
          );
        }
      }
      $data['case'] = $case;
      $data['status'] = $all_status;
      if ($id != null) {
        $data['url'] = base_url('admin/case_analytics_team/'.$id);
      }else{
        $data['url'] = base_url('admin/case_analytics_team/null');
      }
      $data['employees'] = $this->admin_model->select_where('employee_itgs',array('role !='=>'vendor'));
      $data['form_url'] = base_url('admin/case_analytics_team/');


      if ($panding_array) {
        $result = $this->admin_model->get_cases_by_id($panding_array);


        for ($i=0; $i < sizeof($result); $i++) { 


          $result[$i]['subjects'] = $this->admin_model->get_subject_by_id($result[$i]['id']);
          for ($a=0; $a < sizeof($result[$i]['subjects']); $a++) { 
            $result[$i]['subjects'][$a]['activity'] = $this->admin_model->get_subject_activities($result[$i]['subjects'][$a]['id'],$result[$i]['id']);
          }
        }
        $data['panding'] = $result;
      }
      $this->load->view('admin2/header',$data);
      $this->load->view('admin2/case_analytics');
      $this->load->view('admin2/footer');
   }

   public function activity_analytics_vendor($id=null,$range=null)
   {
      $first = date('Y-m-01 00:00:01', strtotime("-3 month"));
      $last = date('Y-m-t 23:59:59');
      if ($range!=null) {
        if($range == 'daily'){
          $first = date('Y-m-d 00:00:01');
          $last = date('Y-m-d 23:59:59');
        }
        elseif($range == 'monthly'){
          $first = date('Y-m-d 00:00:01', strtotime("-1 month"));
          $last = date('Y-m-d 23:59:59');
        }
        elseif($range == 'quarterly'){
          $first = date('Y-m-d 00:00:01', strtotime("-3 month"));
          $last = date('Y-m-d 23:59:59');
        }
        elseif($range == 'half-yearly'){
          $first = date('Y-m-d 00:00:01', strtotime("-6 month"));
          $last = date('Y-m-d 23:59:59');
        }
      }
      if ($this->input->post()) {
        $first = date('Y-m-d 00:00:01', strtotime($this->input->post('start')));
        $last = date('Y-m-d 23:59:59', strtotime($this->input->post('end')));
      }
      if ($id != null && $id != 'null') {
        $data['case'] = $this->admin_model->get_vendor_analytics($first,$last,$id);
      }
      else{
        $data['case'] = $this->admin_model->get_vendor_analytics($first,$last);
      }



      $case = [];
      $ca = $data['case'];
      $all_status = array(
        'Total no of cases' => 0,
        'Panding' => 0,
        'Completed' => 0,
        'Completed within due date' => 0,
        'Completed after due date' => 0,
        'Cancel' => 0,
      );
      for ($i=0; $i < sizeof($ca); $i++) { 
        if($ca[$i]['case_status']!=8 || $ca[$i]['case_status']!=1){
          $all_status['Total no of cases'] = $all_status['Total no of cases'] + 1;
          if($ca[$i]['case_status']==4){
            $all_status['Cancel'] = $all_status['Cancel'] + 1;
          }
          elseif($ca[$i]['is_report']==1){
            $all_status['Completed'] = $all_status['Completed'] + 1;
            if (strtotime($ca[$i]['report_time']) > strtotime($ca[$i]['created_at'])) {
              $all_status['Completed after due date'] = $all_status['Completed after due date'] + 1;
            }
            else{
              $all_status['Completed within due date'] = $all_status['Completed within due date'] + 1;
            }
          }
          elseif($ca[$i]['is_report']==0){
            $all_status['Panding'] = $all_status['Panding'] + 1;
          }
        }
        $key = array_search($ca[$i]['created_at'], array_column($case, 'date'));
        if (array_key_exists($key,$case)) {
          if($ca[$i]['case_status']==1){
            $case[$key]['panding'] = $case[$key]['panding'] + 1;
          }else if($ca[$i]['case_status']==4){
            $case[$key]['cancel'] = $case[$key]['cancel'] + 1;
          }else if($ca[$i]['case_status']==7){
            $case[$key]['progess'] = $case[$key]['progess'] + 1;
          }else if($ca[$i]['case_status']==8){
            $case[$key]['onhold'] = $case[$key]['onhold'] + 1;
          }else if($ca[$i]['case_status']==5){
            $case[$key]['completed'] = $case[$key]['completed'] + 1;
          }
        }
        else{
          $panding = 0;
          $cancel = 0;
          $progess = 0;
          $completed = 0;
          $onhold = 0;
          if($ca[$i]['case_status']==1){
            $panding = $panding + 1;
          }else if($ca[$i]['case_status']==4){
            $cancel = $cancel + 1;
          }else if($ca[$i]['case_status']==7){
            $progess = $progess + 1;
          }else if($ca[$i]['case_status']==8){
            $onhold = $onhold + 1;
          }else if($ca[$i]['case_status']==5){
            $completed = $completed + 1;
          }
          $case[] = array(
            'date'=>$ca[$i]['created_at'],
            'panding'=>$panding,
            'cancel'=>$cancel,
            'progess'=>$progess,
            'completed'=>$completed,
            'onhold'=>$onhold,
          );
        }
      }
      $data['case'] = $case;
      $data['status'] = $all_status;


      if ($id != null) {
        $data['url'] = base_url('admin/activity_analytics_vendor/'.$id);
      }else{
        $data['url'] = base_url('admin/activity_analytics_vendor/null');
      }
      $data['employees'] = $this->admin_model->select_where('employee_itgs',array('role'=>'vendor'));
      $data['form_url'] = base_url('admin/activity_analytics_vendor/');

      $this->load->view('admin2/header',$data);
      $this->load->view('admin2/case_analytics');
      $this->load->view('admin2/footer');
   }

   public function activity_analytics_team($id = null,$range=null)
   {

      $first = date('Y-m-01 00:00:01', strtotime("-3 month"));
      $last = date('Y-m-t 23:59:59');
      if ($range!=null) {
        if($range == 'daily'){
          $first = date('Y-m-d 00:00:01');
          $last = date('Y-m-d 23:59:59');
        }
        elseif($range == 'monthly'){
          $first = date('Y-m-d 00:00:01', strtotime("-1 month"));
          $last = date('Y-m-d 23:59:59');
        }
        elseif($range == 'quarterly'){
          $first = date('Y-m-d 00:00:01', strtotime("-3 month"));
          $last = date('Y-m-d 23:59:59');
        }
        elseif($range == 'half-yearly'){
          $first = date('Y-m-d 00:00:01', strtotime("-6 month"));
          $last = date('Y-m-d 23:59:59');
        }
      }
      if ($this->input->post()) {
        $first = date('Y-m-d 00:00:01', strtotime($this->input->post('start')));
        $last = date('Y-m-d 23:59:59', strtotime($this->input->post('end')));
      }
      if ($id != null && $id != 'null') {
        $data['case'] = $this->admin_model->get_team_analytics($first,$last,$id);
      }
      else{
        $data['case'] = $this->admin_model->get_team_analytics($first,$last);
      }

      $case = [];
      $ca = $data['case'];
      $all_status = array(
        'Total no of cases' => 0,
        'Panding' => 0,
        'Panding at IA' => 0,
        'Panding at Vendor' => 0,
        'Completed' => 0,
        'Completed within due date' => 0,
        'Completed after due date' => 0,
        'Cancel' => 0,
      );
      for ($i=0; $i < sizeof($ca); $i++) { 
        if($ca[$i]['case_status']!=8 || $ca[$i]['case_status']!=1){
          $all_status['Total no of cases'] = $all_status['Total no of cases'] + 1;
          if($ca[$i]['case_status']==4){
            $all_status['Cancel'] = $all_status['Cancel'] + 1;
          }
          elseif($ca[$i]['is_report']==1){
            $all_status['Completed'] = $all_status['Completed'] + 1;
            if (strtotime($ca[$i]['report_time']) > strtotime($ca[$i]['created_at'])) {
              $all_status['Completed after due date'] = $all_status['Completed after due date'] + 1;
            }
            else{
              $all_status['Completed within due date'] = $all_status['Completed within due date'] + 1;
            }
          }
          elseif($ca[$i]['is_report']==0){
            $all_status['Panding'] = $all_status['Panding'] + 1;
             $vendor = $this->db->query('select id from assign_vendor_request where activity_id ='.$ca[$i]['activity_id'])->result_array();
            $fund = $this->db->query('select id from fund_request_activity where activity_id ='.$ca[$i]['activity_id'])->result_array();
            if (!empty($vendor)) {
              $all_status['Panding at Vendor'] = $all_status['Panding at Vendor'] + 1;
            }
            elseif (!empty($fund)) {
              $all_status['Panding at IA'] = $all_status['Panding at IA'] + 1;
            }
          }
        }
        $key = array_search($ca[$i]['created_at'], array_column($case, 'date'));
        if (array_key_exists($key,$case)) {
          if($ca[$i]['case_status']==1){
            $case[$key]['panding'] = $case[$key]['panding'] + 1;
          }else if($ca[$i]['case_status']==4){
            $case[$key]['cancel'] = $case[$key]['cancel'] + 1;
          }else if($ca[$i]['case_status']==7){
            $case[$key]['progess'] = $case[$key]['progess'] + 1;
          }else if($ca[$i]['case_status']==8){
            $case[$key]['onhold'] = $case[$key]['onhold'] + 1;
          }else if($ca[$i]['case_status']==5){
            $case[$key]['completed'] = $case[$key]['completed'] + 1;
          }
        }
        else{
          $panding = 0;
          $cancel = 0;
          $progess = 0;
          $completed = 0;
          $onhold = 0;
          if($ca[$i]['case_status']==1){
            $panding = $panding + 1;
          }else if($ca[$i]['case_status']==4){
            $cancel = $cancel + 1;
          }else if($ca[$i]['case_status']==7){
            $progess = $progess + 1;
          }else if($ca[$i]['case_status']==8){
            $onhold = $onhold + 1;
          }else if($ca[$i]['case_status']==5){
            $completed = $completed + 1;
          }
          $case[] = array(
            'date'=>$ca[$i]['created_at'],
            'panding'=>$panding,
            'cancel'=>$cancel,
            'progess'=>$progess,
            'completed'=>$completed,
            'onhold'=>$onhold,
          );
        }
      }
      $data['case'] = $case;
      $data['status'] = $all_status;

      if ($id != null) {
        $data['url'] = base_url('admin/activity_analytics_team/'.$id);
      }else{
        $data['url'] = base_url('admin/activity_analytics_team/null');
      }
      $data['employees'] = $this->admin_model->select_where('employee_itgs',array('role !='=>'vendor'));
      $data['form_url'] = base_url('admin/activity_analytics_team/');
      $this->load->view('admin2/header',$data);
      $this->load->view('admin2/case_analytics');
      $this->load->view('admin2/footer');
   }

  public function fund_request_analytics($id=null)
  {
      $first = date('Y-m-01 00:00:01', strtotime("-3 month"));
      $last = date('Y-m-t 23:59:59');
      $data['fund'] = $this->admin_model->get_fund_analytics($first,$last);
      $this->load->view('admin2/header',$data);
      $this->load->view('admin2/fund_request_analytics');
      $this->load->view('admin2/footer');
  }

  public function leaves_management()
  {
    if (!empty($this->input->post('month'))) {
      $month = $this->input->post('month');
      $first = date('Y-'.$month.'-01 00:00:01');
      $last = date('Y-'.$month.'-t 23:59:59');
    }
    else{
      $first = date('Y-m-01 00:00:01', strtotime("-1 month"));
      $last = date('Y-m-t 23:59:59', strtotime("-1 month"));
    }
    $one = date('Y-01-01', strtotime($first));
    $two = date('Y-12-31', strtotime($first));
    $start = date('Y-m-d', strtotime($first)); 
    $total_days = $this->countDays(date('Y', strtotime($first)),date('m', strtotime($first)),array(0,6));
    $this->db->select("id as total,employee_id,clock_in,STR_TO_DATE('091559','%h%i%s') as last,'12:00:01' as end")
             ->from('attendance')
             ->where('date >=',$first)
             ->where('date <=',$last)
             ->where('employee_id !=', '')
             ->having('clock_in > last AND clock_in < end');
    $c = $this->db->get_compiled_select();
    $this->db->select("id as total,employee_id,clock_in,'12:00:00' as last")
             ->from('attendance')
             ->where('date >=',$first)
             ->where('date <=',$last)
             ->where('employee_id !=', '')
             ->having('clock_in > last');
    $h = $this->db->get_compiled_select();
    $this->db->select("id as total,employee_id,clock_out,'03:00:01' as last")
             ->from('attendance')
             ->where('date >=',$first)
             ->where('date <=',$last)
             ->where('employee_id !=', '')
             ->having('clock_out < last');
    $s = $this->db->get_compiled_select();
    $this->db->select("count(id) as total, employee_id")
             ->from('attendance')
             ->group_by('employee_id')
             ->where('date >=',$first)
             ->where('date <=',$last)
             ->where('employee_id !=', '');
    $a = $this->db->get_compiled_select();
    $this->db->select('sum(l.total_days) as days, e.employee_id')
             ->from('employee_itgs e')
             ->join('leave_applications l', 'l.employee_id = e.employee_id', 'left')
             ->where('l.start_date >=', DATE($first))
             ->where('l.start_date <=', DATE($last))
             ->where("(l.is_approve = '4' OR l.is_approve = '7')")
             ->where('l.nature_of_leave','Half Day')
             ->group_by('e.id');
    $e = $this->db->get_compiled_select();
    $this->db->select('sum(l.total_days) as days, e.employee_id')
             ->from('employee_itgs e')
             ->join('leave_applications l', 'l.employee_id = e.employee_id', 'left')
             ->where('l.start_date >=', DATE($one))
             ->where('l.start_date <=', DATE($two))
             ->where("l.is_approve = '4'")
             ->group_by('e.id');
    $al = $this->db->get_compiled_select();
    $this->db->select('sum(l.total_days) as days, e.employee_id')
             ->from('employee_itgs e')
             ->join('leave_applications l', 'l.employee_id = e.employee_id', 'left')
             ->where('l.start_date >=', DATE($first))
             ->where('l.start_date <=', DATE($last))
             ->where("(l.is_approve = '4' OR l.is_approve = '7')")
             ->where('l.nature_of_leave !=','Half Day')
             ->group_by('e.id');
    $ec = $this->db->get_compiled_select();
    $this->db->select('e.employee_name,e.employee_id, concat('.$total_days.' - a.total) as leaves, count(c.total) as late, group_concat(DISTINCT(h.total) separator ",") as hafe, group_concat(DISTINCT(s.total) separator ",") as short, ec.days as approved, eh.days as short_approved,sum(ed.sick_leave + ed.casual_leave + ed.annual_leave) as total_leaves,al.days as old_leaves,count(l.id) as ab')
             ->from('employee_itgs e')
             ->join('employee_detail ed', 'e.employee_id = ed.employee_code', 'left')
             ->join('leave_applications l','l.employee_id = e.employee_id and l.start_date = "'.$start.'" and l.absent = 1','left')
             ->join('('.$a.') a', 'a.employee_id = e.employee_id')
             ->join('('.$c.') c', 'e.employee_id = c.employee_id')
             ->join('('.$h.') h', 'e.employee_id = h.employee_id','left')
             ->join('('.$s.') s', 'e.employee_id = s.employee_id','left')
             ->join('('.$e.') eh', 'e.employee_id = eh.employee_id', 'left')
             ->join('('.$ec.') ec', 'e.employee_id = ec.employee_id', 'left')
             ->join('('.$al.') al', 'e.employee_id = al.employee_id', 'left')
             ->group_by('e.id')
             ->having('ab = 0')
             ->order_by('e.employee_name');
    $data['employees'] = $this->db->get()->result_array();
    $data['first'] = $first;
    $data['last'] = $last;
    //print_r($data);die;
    $this->load->view('admin2/header',$data);
    $this->load->view('admin2/leaves_management');
    $this->load->view('admin2/footer');
  }

  public function insert_absent_leave()
  {
    //echo '<pre>';print_r($this->input->post());die;
    $first = $this->input->post('first');
    $first = date('Y-m-d', strtotime($first));   
    $last = $this->input->post('last');
    $last = date('Y-m-d', strtotime($last));  
    $employee_id = $this->input->post('employee_id');
    $total_absent = $this->input->post('total_absent');
    $type = $this->input->post('type');
    for ($i=0; $i < sizeof($employee_id); $i++) { 
      if (!empty($total_absent[$i]) && !empty($type[$i])) {
        $date = $first;
        $date1 = str_replace('-', '/', $date);
        $days = $total_absent[$i] - 1;
        $end = date('Y-m-d',strtotime($date1 . "+".$days." days"));
        $data = array(
          'employee_id'=>$employee_id[$i],
          'requested_date'=>$first,
          'status'=>'Contractual',
          'nature_of_leave'=>'Other',
          'start_date'=>$first,
          'end_date'=>$end,
          'total_days'=>$total_absent[$i],
          'remarks'=>'',
          'is_approve'=>$type[$i],
          'absent'=>'1'
        );
        $this->admin_model->insert_data("leave_applications",$data);
      }
    }
    redirect('admin/leaves_management');
  }

  public function view_leaves($id=null,$month=null)
  {
    $first = date('Y-01-01');
    $last = date('Y-12-31');
    if (!empty($this->input->post('month'))) {
      $month = $this->input->post('month');
      $one = date('Y-'.$month.'-01 00:00:01');
      $two = date('Y-'.$month.'-t 23:59:59');
    }
    else{
      $one = date('Y-m-01 00:00:01', strtotime("-1 month"));
      $two = date('Y-m-t 23:59:59', strtotime("-1 month"));
    }
    //echo $one;die;
    $employees = $this->admin_model->get_data('employee_itgs');
    for ($i=0; $i < sizeof($employees); $i++) { 
      $this->db->select('sum(ed.sick_leave + ed.casual_leave + ed.annual_leave) as leaves')
               ->from('employee_detail ed')
               ->where('ed.employee_code', $employees[$i]['employee_id']);
      $leaves = $this->db->get()->row_array();
      $employees[$i]['leaves'] = $leaves['leaves'];
      $leaves = $this->admin_model->get_employee_leave($first,$last,$employees[$i]['employee_id']);
      if (!empty($leaves)) {
        $employees[$i]['old_leaves'] = $leaves[0]['days'];
      }
      else{
        $employees[$i]['old_leaves'] = '0';
      }
      $leaves = $this->admin_model->get_employee_leave_all($one,$two,$employees[$i]['employee_id']);
      //print_r($this->db->last_query());die;
      if (!empty($leaves)) {
        $employees[$i]['month_leaves'] = $leaves[0]['days'];
      }
      else{
        $employees[$i]['month_leaves'] = '0';
      }
    }
    $data['employees'] = $employees;
    $data['first'] = $first;
    $data['last'] = $last;
    $data['current'] = $one;
    //echo '<pre>';print_r($data);die;
    $this->load->view('admin2/header',$data);
    $this->load->view('admin2/view_leaves');
    $this->load->view('admin2/footer');
  }

  public function view_single_leaves($id=null,$month=null)
  {
    $first = date('Y-01-01');
    $last = date('Y-12-31');
    if ($id != null) {
      $leaves = $this->admin_model->single_employee_current($first,$last,$id);
    }
    else{
      $leaves = $this->admin_model->single_employee_current($first,$last);
    }
    $leave = $this->admin_model->get_employee_leave($first,$last,$leaves[0]['employee_id']);
    if (!empty($leave)) {
      $data['old_leaves'] = $leave[0]['days'];
    }
    else{
      $data['old_leaves'] = '0';
    }
    $data['employees'] = $leaves;
    $data['first'] = $first;
    $data['last'] = $last;
    $this->load->view('admin2/header',$data);
    $this->load->view('admin2/view_single_leaves');
    $this->load->view('admin2/footer');
  }

  public function payrole()
  {
    if (!empty($this->input->post('month'))) {
      $month = $this->input->post('month');
      $one = date('Y-'.$month.'-01 00:00:01');
      $two = date('Y-'.$month.'-t 23:59:59');
    }
    else{
      $one = date('Y-m-01 00:00:01', strtotime("-1 month"));
      $two = date('Y-m-t 23:59:59', strtotime("-1 month"));
    }
    // $one = date('Y-m-01', strtotime("-1 month"));
    // $two = date('Y-3-t');
    $ids = [];
    $data['employees'] = $this->admin_model->get_employee_salary($one,$two);
    //print_r($this->db->last_query());die;
    for ($i=0; $i < sizeof($data['employees']); $i++) { 
      $leave = $this->admin_model->get_employee_deduction(date('Y-m-d',strtotime($one)),date('Y-m-d',strtotime($two)),$data['employees'][$i]['employee_id']);
      //print_r($this->db->last_query());die;
      $loan = $this->admin_model->select_where('loan_applications',array('employee_id'=>$data['employees'][$i]['employee_id'],'is_approve'=>1));
      $md = explode(' ', $one);
      $md = $md[0];
      $salary = $this->admin_model->select_where('salary', array('employee_id'=>$data['employees'][$i]['id'],'date'=>$md));
      if (!empty($salary)) {
        $ids[] = $i;
      }
      if (!empty($loan)) {
        $date = $loan[0]['loan_application_date'];
        $date1 = str_replace('-', '/', $date);
        $days = $loan[0]['pay_back_period'] - 1;
        $end = date('Y-m-d',strtotime($date1 . "+".$days." month"));
        $start = $date;
        if (strtotime($start) <= strtotime($one) && strtotime($end) >= strtotime($two) || strtotime($end) <= strtotime($two)) {
          $data['employees'][$i]['loan'] = $loan[0]['monthly_deduction'];
        }
        else{
          $data['employees'][$i]['loan'] = 0;
        }
      }
      else{
        $data['employees'][$i]['loan'] = 0;
      }
      if (!empty($leave)) {
        $data['employees'][$i]['days'] = $leave[0]['days'];
      }
      else{
        $data['employees'][$i]['days'] = 0;
      }
    }
    for ($i=0; $i < sizeof($ids); $i++) { 
      unset($data['employees'][$ids[$i]]);
    }
    $data['one'] = $one;
    //echo '<pre>';print_r($data);die;
    $this->load->view('admin2/header',$data);
    $this->load->view('admin2/payrole');
    $this->load->view('admin2/footer');
  }

  public function insert_salary()
  {
    $id = $this->input->post('id');
    $gross = $this->input->post('gross');
    $date = $this->input->post('month');
    $date = explode(' ', $date);
    $date = $date[0];
    $current = date('Y-m-d');
    for ($i=0; $i < sizeof($id); $i++) { 
      $data = array(
        'employee_id' => $id[$i],
        'amount' => $gross[$i],
        'date' => $date,
        'created_date' => $current
      );
      $this->admin_model->insert_data("salary",$data);
    }
    redirect('admin/payrole');
  }

  public function view_payrole()
  {
    if (!empty($this->input->post('month'))) {
      $month = $this->input->post('month');
      $one = date('Y-'.$month.'-01 00:00:01');
      $two = date('Y-'.$month.'-t 23:59:59');
    }
    else{
      $one = date('Y-m-01 00:00:01', strtotime("-1 month"));
      $two = date('Y-m-t 23:59:59', strtotime("-1 month"));
    }
    $ids = [];
    $data['employees'] = $this->admin_model->get_employee_salary();
    for ($i=0; $i < sizeof($data['employees']); $i++) { 
      $leave = $this->admin_model->get_employee_deduction($one,$two,$data['employees'][$i]['employee_id']);
      $loan = $this->admin_model->select_where('loan_applications',array('employee_id'=>$data['employees'][$i]['employee_id'],'is_approve'=>1));
      $md = explode(' ', $one);
      $md = $md[0];
      $salary = $this->admin_model->select_where('salary', array('employee_id'=>$data['employees'][$i]['id'],'date'=>$md));
      if (empty($salary)) {
        $ids[] = $i;
      }
      else{
        $data['employees'][$i]['paid_salary'] = $salary[0]['amount'];
      }
      if (!empty($loan)) {
        $date = $loan[0]['loan_application_date'];
        $date1 = str_replace('-', '/', $date);
        $days = $loan[0]['pay_back_period'] - 1;
        $end = date('Y-m-d',strtotime($date1 . "+".$days." month"));
        $start = $date;
        if (strtotime($start) <= strtotime($one) && strtotime($end) >= strtotime($two) || strtotime($end) <= strtotime($two)) {
          $data['employees'][$i]['loan'] = $loan[0]['monthly_deduction'];
        }
        else{
          $data['employees'][$i]['loan'] = 0;
        }
      }
      else{
        $data['employees'][$i]['loan'] = 0;
      }
      if (!empty($leave)) {
        $data['employees'][$i]['days'] = $leave[0]['days'];
      }
      else{
        $data['employees'][$i]['days'] = 0;
      }
    }
    for ($i=0; $i < sizeof($ids); $i++) { 
      unset($data['employees'][$ids[$i]]);
    }
    $data['one'] = $one;
    $this->load->view('admin2/header',$data);
    $this->load->view('admin2/view_payrole');
    $this->load->view('admin2/footer');
  }

  public function my_payslips($id)
  {
    $data['employees'] = $this->admin_model->get_single_employee_salary($id);
    for ($i=0; $i < sizeof($data['employees']); $i++) { 
      $one = $data['employees'][$i]['date'];
      $two = date('Y-m-t', strtotime($one));
      $leave = $this->admin_model->get_employee_deduction($one,$two,$data['employees'][$i]['employee_id']);
      if (!empty($leave)) {
        $data['employees'][$i]['days'] = $leave[0]['days'];
      }
      else{
        $data['employees'][$i]['days'] = 0;
      }
      $loan = $this->admin_model->select_where('loan_applications',array('employee_id'=>$data['employees'][$i]['employee_id'],'is_approve'=>1));
      if (!empty($loan)) {
        $date = $loan[0]['loan_application_date'];
        $date1 = str_replace('-', '/', $date);
        $days = $loan[0]['pay_back_period'] - 1;
        $end = date('Y-m-d',strtotime($date1 . "+".$days." month"));
        $start = $date;
        if (strtotime($start) <= strtotime($one) && strtotime($end) >= strtotime($two) || strtotime($end) <= strtotime($two)) {
          $data['employees'][$i]['loan'] = $loan[0]['monthly_deduction'];
        }
        else{
          $data['employees'][$i]['loan'] = 0;
        }
      }
      else{
        $data['employees'][$i]['loan'] = 0;
      }
    }
    $this->load->view('admin2/header',$data);
    $this->load->view('admin2/my_payslips');
    $this->load->view('admin2/footer');
  }

  public function itself($id)
  {
    $subject = $this->admin_model->select_where('subject_case', array('case_id'=>$id));
    $lead = $_SESSION['id'];
    for ($i=0; $i < sizeof($subject); $i++) {
      $tl = $this->admin_model->select_where('case_team',array('case_id'=>$id,'subject_id'=>$subject[$i]['id']));
      if (empty($tl)) {
        $data=array(
          'case_id'=>$id,
          'subject_id'=>$subject[$i]['id'],
          'team_lead_id'=>$lead,
        );
        $this->db->insert('case_team',$data);
        $case_team_id=$this->db->insert_id();
      }
      else{
        $case_team_id=$tl[0]['id'];
      }
      $data_member=array(
        'subject_id'=>$subject[$i]['id'],
        'case_team_id'=>$case_team_id,
        'team_member_id'=>$lead,
      );
      $this->db->insert('case_team_members',$data_member);
      $this->db->update("subject_case",['is_assigned'=>1],['id'=>$subject[$i]['id']]);
      $update_status=$this->db->update('case_request',['case_status'=>7],['id'=>$id]);
      $client = $this->admin_model->select_where('case_request', array('id'=>$id));
      $u_id = $client[0]['client_id'];
      $notification = array(
        'user_id'=>$u_id,
        'user_type'=>'client',
        'title' => 'Case in progress',
        'message'=>date('Y-m-d'),
        'url'=>'admin/form1/'.$id
      );
      $this->admin_model->insert_data("notifications",$notification);
      $activity_id = $this->admin_model->select_where('subject_activities',array('case_id'=>$id,'subject_id'=>$subject[$i]['id']));
      for($a=0;$a<count($activity_id);$a++){
        $data=array(
          'case_id'=>$id,
          'subject_id'=>$subject[$i]['id'],
          'member_id'=>$lead,
          'activity_id'=>$activity_id[$a]['activity_id'],
          'due_date'=>$activity_id[$a]['due_date'],
        );
        $this->db->insert('assign_activity_to_user',$data);
      }
    }
    redirect('admin/job_dashboard');
  }

  public function insert_tl_report()
  {
    $data['case_id']=$_POST['case_id_report'];
     $data['remarks']=$_POST['remarks'];
     $data['employee_id']=$_POST['employee_id'];

     $data['date_time']=date("d-m-Y h:i:s a");
     $ids = explode(',', $_POST['file_id']);
      $file_links = $this->admin_model->get_image_link($ids);
      $links = array();
      for ($p=0; $p < sizeof($file_links); $p++) { 
        $links[] = $file_links[$p]['file'];
      }
      $data['attachment']=implode(',', $links);
     // if(move_uploaded_file($_FILES['attachment']['tmp_name'],"./uploads/report/".$_FILES['attachment']['name'])){
     // $data['attachment']=$_FILES['attachment']['name'];
     // }

     if($this->db->insert('tl_report',$data)){
        if ($_SESSION['role'] == 'vendor') {
          redirect('admin/job_dashboard/');
        }
        else{
          redirect('admin/screening_operation/');
        }
         // echo "<script>
         // alert('Report has been Submitted);
         //     window.location.href='".base_url()."admin2/screening_operation/';
         //  </script>";
     }else{
        if ($_SESSION['role'] == 'vendor') {
          redirect('admin/job_dashboard/');
        }
        else{
          redirect('admin/screening_operation/');
        }
          // echo "<script>
          // alert('Report has been Submitted);
          //    window.location.href='".base_url()."admin2/screening_operation/';
          // </script>";
     }
  }

  public function add_training_emp($training_id,$status)
  {
    $data = array(
      'employee_id' => $_SESSION['id'],
      'training_id' => $training_id,
      'status' => $status
    );
    $this->admin_model->insert_data("approve_training",$data);
    redirect('admin/hr_calender/');
  }

  public function review_emp($id,$month)
  {
    $data['id'] = $id;
    $data['month'] = $month;
    $data['employee'] = $this->admin_model->select_where_row('employee_itgs',array('id'=>$id));
    $this->load->view('admin2/header');
    $this->load->view('admin2/insert_review_emp',$data);
    $this->load->view('admin2/footer');
  }

  public function create_review()
  {
    $data = $this->input->post();
    $id = $this->admin_model->insert_data("performance_reviews",$data);
    echo $id;
  }

  public function create_review_key()
  {
    $data = $_POST['rows'];
    $this->db->insert_batch('performance_reviews_key',$data);
  }

  public function get_job_kpi()
  {
    $name = $this->input->post('name');
    $data = $this->admin_model->select_kpi($name);
    echo json_encode($data);
  }

  public function insert_job_kpi()
  {
    $employee_id = $this->input->post('employee_id');
    $kpi = $this->input->post('kpi');
    $kpi_id = $this->input->post('kpi_id');
    $weightage = $this->input->post('weightage');
    for ($i=0; $i < sizeof($kpi); $i++) { 
      if (!empty($kpi_id[$i])) {
        $data = array(
          'employee_id' => $employee_id,
          'kpi_id' => $kpi_id[$i],
          'weightage' => $weightage[$i]
        );
        $id = $this->admin_model->insert_data("employee_job_kpi",$data);
      }
      else{
        $data = array('name'=>$kpi[$i]);
        $id = $this->admin_model->insert_data("job_kpi",$data);
        $data = array(
          'employee_id' => $employee_id,
          'kpi_id' => $id,
          'weightage' => $weightage[$i]
        );
        $id = $this->admin_model->insert_data("employee_job_kpi",$data);
      }
    }
    redirect('admin/view_employee');
  }

  public function case_invoice()
  {
    $data['case'] = $this->admin_model->case_complete_invoice();
    $this->load->view('admin2/header',$data);
    $this->load->view('admin2/case_invoice');
    $this->load->view('admin2/footer');
  }

  public function case_vendor_invoice()
  {
    $data['case'] = $this->admin_model->case_complete_vendor_invoice();
    $this->load->view('admin2/header',$data);
    $this->load->view('admin2/case_vendor_invoice');
    $this->load->view('admin2/footer');
  }

  public function view_review($id,$eid)
  {
    if ($this->input->post()) {
      $add = $this->input->post();
      $add['performance_id'] = $id;
      $ids = $this->admin_model->insert_data('performance_reviews_remarks',$add);
      if ($ids) {
        redirect('admin/view_review/'.$id.'/'.$eid);
      }
    }
    $data['employee'] = $this->admin_model->select_where('employee_itgs', array('id'=>$eid));
    $data['employee'] = $data['employee'][0];
    $data['employee_salary'] = $this->admin_model->select_where('employee_detail', array('employee_code'=>$data['employee']['employee_id']));
    $data['salary_increment'] = $this->admin_model->select_where('salary_increment', array('employee_id'=>$data['employee']['employee_id']));
    $salary = 0;
    if (!empty($data['employee_salary'])) {
      $s = $data['employee_salary'][0];
      $salary = $s['salary'] + $s['house_rent'] + $s['medical'] + $s['conveyance'] + $s['utility'];
    }
    $data['employee_salary'] = $salary;
    $increment = 0;
    if (!empty($data['salary_increment'])) {
      for ($i=0; $i < sizeof($data['salary_increment']); $i++) { 
        $in = $data['salary_increment'][$i];
        $increment = $increment + $in['salary'];
      }
    }
    $data['increment'] = $increment;
    $data['total_salary'] = $salary + $increment;
    if ($_SESSION['role'] == 'CM') {
      $data['reviews'] = $this->admin_model->get_review($id,$_SESSION['id']);
      $data['review_detail'] = $this->admin_model->select_where('performance_reviews', array('id'=>$id,'creater_id'=>$_SESSION['id']));
      //$data['employees']=$this->admin_model->get_reviews($_SESSION['id']);
    }
    else{
      $data['reviews'] = $this->admin_model->get_review($id);
      $data['review_detail'] = $this->admin_model->select_where('performance_reviews', array('id'=>$id));
      //$data['employees']=$this->admin_model->get_reviews();
    }
    $data['review_detail'] = $data['review_detail'][0];
    $data['form'] = 1;
    $data['less'] = $this->admin_model->select_where('review_less', array('review_id'=>$id));
    $data['add'] = $this->admin_model->select_where('review_add', array('review_id'=>$id));
    $data['improvement'] = $this->admin_model->select_where('review_improvement', array('review_id'=>$id));
    $data['traning'] = $this->admin_model->select_where('review_training', array('review_id'=>$id));
    $data['remarks'] = $this->admin_model->select_where('performance_reviews_remarks', array('performance_id'=>$id));
    //$data['reviews'] = $this->admin_model->get_review($id);
    //print_r($this->db->last_query());
    //echo '<pre>';print_r($data);die;
    $this->load->view('admin2/header',$data);
    $this->load->view('admin2/view_review');
    $this->load->view('admin2/footer');
  }

  public function add_traning($id,$eid)
  {
    $data = $this->input->post();
    //print_r($data);die;
    for ($i=0; $i < sizeof($data['title']); $i++) { 
      $insert = array(
        'review_id'=>$data['review_id'],
        'title'=>$data['title'][$i],
      );
      $this->admin_model->insert_data("review_training",$insert);
    }
    redirect('admin/view_review/'.$id.'/'.$eid);
  }

  public function add_improvement($id,$eid)
  {
    $data = $this->input->post();
    //print_r($data);die;
    for ($i=0; $i < sizeof($data['title']); $i++) { 
      $insert = array(
        'review_id'=>$data['review_id'],
        'title'=>$data['title'][$i],
      );
      $this->admin_model->insert_data("review_improvement",$insert);
    }
    redirect('admin/view_review/'.$id.'/'.$eid);
  }

  public function add_less($id,$eid)
  {
    $data = $this->input->post();
    //print_r($data);die;
    for ($i=0; $i < sizeof($data['per']); $i++) { 
      $insert = array(
        'review_id'=>$data['review_id'],
        'remarks'=>$data['remarks'][$i],
        'per'=>$data['per'][$i],
      );
      $this->admin_model->insert_data("review_less",$insert);
    }
    redirect('admin/view_review/'.$id.'/'.$eid);
  }

  public function add_add($id,$eid)
  {
    $data = $this->input->post();
    //print_r($data);die;
    for ($i=0; $i < sizeof($data['per']); $i++) { 
      $insert = array(
        'review_id'=>$data['review_id'],
        'remarks'=>$data['remarks'][$i],
        'per'=>$data['per'][$i],
      );
      $this->admin_model->insert_data("review_add",$insert);
    }
    redirect('admin/view_review/'.$id.'/'.$eid);
  }

  public function update_review($id,$column,$data)
  {
    $id = $this->admin_model->update("performance_reviews",array($column=>$data),array('id'=>$id));
    echo 'done';
  }

  public function year_view_review($id,$eid)
  {
    $data['employee'] = $this->admin_model->select_where('employee_itgs', array('id'=>$eid));
    $data['employee'] = $data['employee'][0];
     $data['employee_salary'] = $this->admin_model->select_where('employee_detail', array('employee_code'=>$data['employee']['employee_id']));
    $data['salary_increment'] = $this->admin_model->select_where('salary_increment', array('employee_id'=>$data['employee']['employee_id']));
    $salary = 0;
    if (!empty($data['employee_salary'])) {
      $s = $data['employee_salary'][0];
      $salary = $s['salary'] + $s['house_rent'] + $s['medical'] + $s['conveyance'] + $s['utility'];
    }
    $data['employee_salary'] = $salary;
    $increment = 0;
    if (!empty($data['salary_increment'])) {
      for ($i=0; $i < sizeof($data['salary_increment']); $i++) { 
        $in = $data['salary_increment'][$i];
        $increment = $increment + $in['salary'];
      }
    }
    $data['increment'] = $increment;
    $data['total_salary'] = $salary + $increment;
    $date = date('Y-m-d');
    $enddate = date('Y-6-t');
    //echo $date.' to '.$enddate;
    if (strtotime($date) > strtotime($enddate)) {
      $start =  date('Y-7-01 00:00:01');
      $end = date('Y-6-t 23:59:59', strtotime('1 year'));
    }
    else{
      $start =  date('Y-7-01 00:00:01', strtotime('-1 year'));
      $end = date('Y-6-t 23:59:59');
    }
    if ($_SESSION['role'] == 'CM') {
      $data['reviews'] = $this->admin_model->get_review_year($eid,$start,$end,$_SESSION['id']);
      $data['review_detail'] = $this->admin_model->select_where('performance_reviews', array('employee_id'=>$eid,'creater_id'=>$_SESSION['id'],'created_at >='=> $start,'created_at <='=> $end));
    }
    else{
      $data['reviews'] = $this->admin_model->get_review_year($eid,$start,$end);
      $data['review_detail'] = $this->admin_model->select_where('performance_reviews', array('employee_id'=>$eid,'created_at >='=> $start,'created_at <='=> $end));
    }
    $r = $data['review_detail'][0];
    $less = 0;
    $add_o = 0;
    for ($i=0; $i < sizeof($data['review_detail']); $i++) { 
      $less = $less + $data['review_detail'][$i]['less'];
      $add_o = $add_o + $data['review_detail'][$i]['add_o'];
    }
    $less = $less / sizeof($data['review_detail']);
    $add_o = $add_o / sizeof($data['review_detail']);
    $r['less'] = round($less);
    $r['add_o'] = round($add_o);
    $data['review_detail'] = $r;
    $data['remarks'] = $this->admin_model->select_where('performance_reviews_remarks', array('performance_id'=>$id));

    $this->db->select('r.*')
         ->from('review_less r')
         ->join('performance_reviews p','p.id = r.review_id')
         ->where('p.created_at >= ', $start)
         ->where('p.created_at <= ', $end)
         ->where('p.employee_id',$eid);
    $data['less'] = $this->db->get()->result_array();
    $this->db->select('r.*')
         ->from('review_add r')
         ->join('performance_reviews p','p.id = r.review_id')
         ->where('p.created_at >= ', $start)
         ->where('p.created_at <= ', $end)
         ->where('p.employee_id',$eid);
    $data['add'] = $this->db->get()->result_array();
    $this->db->select('r.*')
         ->from('review_improvement r')
         ->join('performance_reviews p','p.id = r.review_id')
         ->where('p.created_at >= ', $start)
         ->where('p.created_at <= ', $end)
         ->where('p.employee_id',$eid);
    $data['improvement'] = $this->db->get()->result_array();
    $this->db->select('r.*')
         ->from('review_training r')
         ->join('performance_reviews p','p.id = r.review_id')
         ->where('p.created_at >= ', $start)
         ->where('p.created_at <= ', $end)
         ->where('p.employee_id',$eid);
    $data['traning'] = $this->db->get()->result_array();
    
    //echo '<pre>';print_r($data);die;
    $this->load->view('admin2/header',$data);
    $this->load->view('admin2/view_review');
    $this->load->view('admin2/footer');
  }

  public function discussion_board()
  {
    $data['chat'] = $this->admin_model->all_rows('chat_board');
    $this->load->view('admin2/header',$data);
    $this->load->view('admin2/discussion_board');
    $this->load->view('admin2/footer');
  }

  public function fund_request()
  {
    $data['jobs']=$this->db->query('select fund_request_activity.*,case_request.client_reference,case_request.reference_code,scope_of_work.scope_name, employee_itgs.employee_name from fund_request_activity left JOIN case_request on(case_request.id=fund_request_activity.case_id) left join scope_of_work on (scope_of_work.id=fund_request_activity.activity_id) left join employee_itgs on employee_itgs.id = fund_request_activity.employe_id where fund_request_activity.employe_id = '.$_SESSION['id'])->result_array();
    $this->load->view('admin2/header',$data);
    $this->load->view('admin2/fund_request');
    $this->load->view('admin2/footer');
  }

  public function chat_board()
  {
    $data['message'] = $this->input->post('message');
    if ($this->session->userdata('login_id')) {
      $data['sender_id'] = $this->session->userdata('login_id');
      $data['sender_type'] = 'login';
      $data['sender_name'] = $this->session->userdata('login_name');
    }
    elseif ($this->session->userdata('id')) {
      $data['sender_id'] = $this->session->userdata('id');
      $data['sender_type'] = 'employee';
      $data['sender_name'] = $this->session->userdata('employee_name');
    }
    $id = $this->admin_model->insert_data("chat_board",$data);
  }

  public function edit_vendor($id)
{
  $data['vendor'] = $this->admin_model->select_where('employee_itgs',array('id'=>$id));
  $this->load->view('admin2/header');
    $this->load->view('admin2/edit_vendor',$data);
    $this->load->view('admin2/footer');
}

  public function update_vendor()
  {
    $data = $this->input->post();
    $id = $data['id'];
    unset($data['id']);
    $this->admin_model->update('employee_itgs',$data,array('id'=>$id));
    redirect('admin/view_vendor_modal');
  }

  public function edit_client($id)
{
  $data['client'] = $this->admin_model->select_where('client',array('client_id'=>$id));
  $data['title']="Client Edit";
    $this->db->select('*')
             ->from('employee_itgs')
             ->where('role', 'CM')
             ->or_where('role', 'TL')
             ->or_where('role', 'manager');
    $data['employees']=$this->db->get()->result_array();
    $data['countries']=$this->db->get('country')->result_array();
    $data['scopes']=$this->db->get('scope_of_work')->result_array();
    $data['services']=$this->db->get('client_services')->result_array();
    $data['assign_client_services'] = $this->admin_model->select_where('assign_client_services',array('client_id'=>$id));
  $this->load->view('admin2/header');
    $this->load->view('admin2/edit_client',$data);
    $this->load->view('admin2/footer');
}

  public function client_update()
  {
    $client_id = $_POST['client_id'];
    $count_scope=count($_POST['scope_id']);
    $scope=$_POST['scope_id'];
    $price=$_POST['price'];
    $avg_tat=$_POST['avg_tat'];
    $country=explode("-",$_POST['country_id']);
    $reference_code="ITGS-".$_POST['client_type']."-".$_POST['abbreviation']."-".$country[1]."-".date("Y");
    $data_client = array(
    'client_name'=>$this->input->post('client_name'),
    'reference_code'=>$reference_code,
    'service_id'=>implode(",",$this->input->post('service_id[]')),
    'client_type'=>$this->input->post('client_type'),
    'abbreviation'=>$this->input->post('abbreviation'),
    'country_id'=>$country[0],
    'address'=>$this->input->post('address'),
    'client_contact'=>$this->input->post('client_contact'),
    'email'=>$this->input->post('email'),
    'notification_email'=>implode(",",$this->input->post('notification_email[]')),
    'website'=>$this->input->post('website'),
    'employee_id'=>$this->input->post('employee_id'),
    'reg_date'=>$this->input->post('reg_date'),
    'reg_num'=>$this->input->post('reg_num'),
    'tax_num'=>$this->input->post('tax_num'),
    'status'=>$this->input->post('status'),
    'contract_start_date'=>$this->input->post('contract_start_date'),
    'contract_end_date'=>$this->input->post('contract_end_date'),
    'sub_account'=>$this->input->post('sub_account'),
    'login_name'=>$this->input->post('login_name'),
    'password'=>$this->input->post('password'),
    'is_parent'=>$this->input->post('is_parent')
    );
    $this->admin_model->update("client", $data_client,array('client_id'=>$client_id));
    $this->admin_model->delete_data('assign_client_services',array('client_id'=>$client_id));
    //$client_id=$this->db->insert_id();
    // echo $client_id;
      for ($i=0; $i < $count_scope ; $i++) {
           $array_scope=array(
            'client_id'=>$client_id,
            'scope_id'=>$scope[$i],
        'price'=>$price[$i],
        'avg_tat'=>$avg_tat[$i],
           );
            $this->db->insert('assign_client_services',$array_scope);
        }
        redirect(base_url().'admin/view_client_mod');
  }

  public function edit_sub_client($id)
  {
    $data['clients']= $this->db->query("SELECT * FROM `client` WHERE `sub_account` = 1 AND `is_parent` = 1 ")->result_array();
    $data['title']="Client Creation";
    $data['employees']=$this->db->get('employee_itgs')->result_array();
    $data['countries']=$this->db->get('country')->result_array();
    $data['scopes']=$this->db->get('scope_of_work')->result_array();
    $data['services']=$this->db->get('client_services')->result_array();
    $data['client'] = $this->admin_model->select_where('client',array('client_id'=>$id));
    $data['assign_client_services'] = $this->admin_model->select_where('assign_client_services',array('client_id'=>$id));
    $this->load->view('admin2/header',$data);
    $this->load->view('admin2/edit_sub_client');
    $this->load->view('admin2/footer');
  }

  public function update_sub_client()
  {
    $client_id = $_POST['client_id'];
    $count_scope=count($_POST['scope_id']);
    $scope=$_POST['scope_id'];
    $price=$_POST['price'];
    $avg_tat=$_POST['avg_tat'];
    $parent_id=$_POST['parent_id'];
    $country=explode("-",$_POST['country_id']);
    $reference_code="ITGS-".$_POST['client_type']."-".$_POST['abbreviation']."-".$country[1]."-".date("Y");
    $data_client = array(
    'client_name'=>$this->input->post('client_name'),
    'reference_code'=>$reference_code,
    'service_id'=>implode(",",$this->input->post('service_id[]')),
    'client_type'=>$this->input->post('client_type'),
    'abbreviation'=>$this->input->post('abbreviation'),
    'country_id'=>$country[0],
    'address'=>$this->input->post('address'),
    'client_contact'=>$this->input->post('client_contact'),
    'email'=>$this->input->post('email'),
    'notification_email'=>implode(",",$this->input->post('notification_email[]')),
    'website'=>$this->input->post('website'),
    'employee_id'=>$this->input->post('employee_id'),
    'reg_date'=>$this->input->post('reg_date'),
    'reg_num'=>$this->input->post('reg_num'),
    'tax_num'=>$this->input->post('tax_num'),
    'status'=>$this->input->post('status'),
    'contract_start_date'=>$this->input->post('contract_start_date'),
    'contract_end_date'=>$this->input->post('contract_end_date'),
    'login_name'=>$this->input->post('login_name'),
    'password'=>$this->input->post('password'),
    'is_parent'=>'0',
    'parent_id'=>$parent_id
    );
    $this->admin_model->update("client", $data_client,array('client_id'=>$client_id));
    $this->admin_model->delete_data('assign_client_services',array('client_id'=>$client_id));
      for ($i=0; $i < $count_scope ; $i++) {
           $array_scope=array(
            'client_id'=>$client_id,
            'scope_id'=>$scope[$i],
        'price'=>$price[$i],
        'avg_tat'=>$avg_tat[$i],
           );
            $this->db->insert('assign_client_services',$array_scope);
        }
        redirect(base_url().'admin/view_sub_client');
  }

  public function change_admin_password()
  {
    $this->load->view('admin2/header',$data);
    $this->load->view('admin2/change_admin_password');
    $this->load->view('admin2/footer');
  }

  public function update_admin_password()
  {
    $data = $this->input->post();
    $old = $this->admin_model->select_where('login',array('login_id'=>$_SESSION['login_id'],'pass'=>$data['old']));
    if (empty($old)) {
      $this->session->set_flashdata('old_msg','Old Password not correct');
      redirect('admin/change_admin_password');
    }
    if ($data['new'] != $data['confirm']) {
      $this->session->set_flashdata('confirm_msg','New Password and Confirm Password do not match');
      redirect('admin/change_admin_password');
    }
    $rand = rand();
    $data_insert = array(
      'user_id' => $_SESSION['login_id'],
      'user_type' => 'login',
      'new_password' => $data['new'],
      'code' => $rand
    );
    $id = $this->admin_model->insert_data("change_password_request",$data_insert);
    if ($id) {
      $employee = $this->admin_model->select_where('login',array('login_id'=>$_SESSION['login_id']));
      $this->sendmail('verify@itgsgroup.com',$employee[0]['login'],'Change Password Request','Clieck Here To Update <a href="'.base_url().'admin/submit_password/'.$rand.'">Change Password</a>');
      redirect('admin/admin_dashboard');
    }
    else{
      redirect('admin/change_admin_password');
    }
  }

  public function submit_password($code)
  {
    $pass = $this->admin_model->select_where('change_password_request',array('code'=>$code,'status'=>'0'));
    if (!empty($pass)) {
      $this->admin_model->update_data('change_password_request',array('status'=>'1'),array('code'=>$code,'status'=>'0'));
      $this->admin_model->update_data('login',array('pass'=>$pass[0]['new_password']),array('login_id'=>$pass[0]['user_id']));
      redirect('admin/admin_dashboard');
    }
    else{
      echo 'Your Code Has Been Expired';
    }
    //redirect('admin/admin_dashboard');
  }

  public function export_client_report($type)
  {
    error_reporting('-1');
    $delimiter = ",";
    $filename = "report-" . date('Y-m-d') . ".csv";
    $f = fopen('php://memory', 'w');
    $fields = array('S.no','Client Ref','ITGS Ref','Subject Name','Activity Name','Start Date','Due Date','Case completed Date','Price','Case Status','Case Hold on Insufficency','Insufficency Completed');
    fputcsv($f, $fields, $delimiter);
    $data = $this->admin_model->get_client_report($_SESSION['client_id']);
    $con = 1;
    foreach ($data as $row) {
      if($row['case_status']==1){
      $status = "Pending";
      }else if($row['case_status']==2){
      $status = "In Progress";
      }else if($row['case_status']==3){
      $status = "On Hold";
      }else if($row['case_status']==4){
      $status = "Cancelled";
      }else if($row['case_status']==7){
      $status = "In Progress";
      }else if($row['case_status']==8){
      $status = "OnHold";
      }else if($row['case_status']==5){
      $status = "Completed";
      }
        //$status = ($row['status'] == '1')?'Active':'Inactive';
        $lineData = array($con, $row['client_reference'], $row['reference_code'], $row['subject_name'], $row['scope_name'], $row['created_at'], $row['due_date'], $row['date_time'], $row['price'], $status, $row['hold_date'], $row['unhold_date']);
        fputcsv($f, $lineData, $delimiter);
        $con++;
    }
    fseek($f, 0);
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');
    fpassthru($f);
  }

  public function insert_feed_back()
  {
    $data = $this->input->post();
    if ($this->session->userdata('login_id')) {
      $data['user_id'] = $this->session->userdata('login_id');
      $data['type'] = 'login';
    }
    elseif ($this->session->userdata('id')) {
      $data['user_id'] = $this->session->userdata('id');
      $data['type'] = 'employee';
    }
    elseif ($this->session->userdata('client_id')) {
      $data['user_id'] = $this->session->userdata('client_id');
      $data['type'] = 'client';
    }
    $config['upload_path']       = './uploads/feed_back/';
    $config['allowed_types'] = 'pdf|doc|docx|jpg|png|rtf|txt|xlsx|xls|pptx|jpeg|7z|rar|dot';
    $config['max_size'] = '60000';
    $config['max_width'] = '10024';
    $config['max_height'] = '7068';
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('file')){
      $file=$this->upload->data();
      $data['file'] = $file['file_name'];
    }else{
      //$data['is_attachement']=0;
    }
    $id = $this->admin_model->insert_data("feed_back",$data);
    redirect('admin/feed_back');
  }


  public function export_cm_report($type)
  {
    error_reporting('-1');
    $delimiter = ",";
    $filename = "report-" . date('Y-m-d') . ".csv";
    $f = fopen('php://memory', 'w');
    $fields = array('S.no','Client Ref','ITGS Ref','Subject Name','Activity Name','Start Date','Due Date','Case completed Date','Price','Case Status','Recieved from Assigned Party','Case Hold on Insufficency','Insufficency Completed');
    fputcsv($f, $fields, $delimiter);
    $data = $this->admin_model->get_cm_report($_SESSION['id']);
    $con = 1;
    foreach ($data as $row) {
      if($row['case_status']==1){
      $status = "Pending";
      }else if($row['case_status']==2){
      $status = "In Progress";
      }else if($row['case_status']==3){
      $status = "On Hold";
      }else if($row['case_status']==4){
      $status = "Cancelled";
      }else if($row['case_status']==7){
      $status = "In Progress";
      }else if($row['case_status']==8){
      $status = "OnHold";
      }else if($row['case_status']==5){
      $status = "Completed";
      }
        $report_date = ($row['is_report'] == '1')?date('Y-m-d', strtotime($row['report_time'])):'';
        $lineData = array($con, $row['client_reference'], $row['reference_code'], $row['subject_name'], $row['scope_name'], $row['created_at'], $row['due_date'], $row['date_time'], $row['price'], $status, $report_date, $row['hold_date'], $row['unhold_date']);
        fputcsv($f, $lineData, $delimiter);
        $con++;
    }
    fseek($f, 0);
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');
    fpassthru($f);
  }


  public function export_account_report($id,$type)
  {
    error_reporting('-1');
    $delimiter = ",";
    $filename = "report-" . date('Y-m-d') . ".csv";
    $f = fopen('php://memory', 'w');
    $fields = array('S.no','Client Ref','ITGS Ref','Subject Name','Activity Name','Start Date','Due Date','Case completed Date','Price','Case Status','Recieved from Assigned Party','Case Hold on Insufficency','Insufficency Completed');
    fputcsv($f, $fields, $delimiter);
    $data = $this->admin_model->get_account_report($id);
    $con = 1;
    foreach ($data as $row) {

           $price_data=array(
     'case_id'=>$row['case_id'],
     'subject_id'=>$row['subject_id'],
     'activity_id'=>$row['activity_id']
    );
$activity_price=$this->db->get_where('subject_activities',$price_data)->row_array();

      if($row['case_status']==1){
      $status = "Pending";
      }else if($row['case_status']==2){
      $status = "In Progress";
      }else if($row['case_status']==3){
      $status = "On Hold";
      }else if($row['case_status']==4){
      $status = "Cancelled";
      }else if($row['case_status']==7){
      $status = "In Progress";
      }else if($row['case_status']==8){
      $status = "OnHold";
      }else if($row['case_status']==5){
      $status = "Completed";
      }
        $report_date = ($row['is_report'] == '1')?date('Y-m-d', strtotime($row['report_time'])):'';
        $lineData = array($con, $row['client_reference'], $row['reference_code'], $row['subject_name'], $row['scope_name'], $row['created_at'], $row['due_date'], $row['date_time'], $row['client_type']=="INT" ? $activity_price['price_in_usd']." $" : $activity_price['activity_price']." PKR", $status, $report_date, $row['hold_date'], $row['unhold_date']);
        fputcsv($f, $lineData, $delimiter);
        $con++;
    }
    fseek($f, 0);
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');
    fpassthru($f);
  }

  public function export_tm_report($type)
  {
    error_reporting('-1');
    $delimiter = ",";
    $filename = "report-" . date('Y-m-d') . ".csv";
    $f = fopen('php://memory', 'w');
    $fields = array('S.no','Client Ref','ITGS Ref','Subject Name','Activity Name','Start Date','Due Date','Report Submition Date','Acivity Status','Recieved from Assigned Party');
    fputcsv($f, $fields, $delimiter);
    $data = $this->admin_model->get_tm_report($_SESSION['id']);
    $con = 1;
    foreach ($data as $row) {
        $status = ($row['is_report'] == '1')?'Complete':'Panding';
        $report_date = ($row['is_report'] == '1')?date('Y-m-d', strtotime($row['report_time'])):'';
        $lineData = array($con, $row['client_reference'], $row['reference_code'], $row['subject_name'], $row['scope_name'], $row['date_time'], $row['due_date'], $row['due_date'], $status, $report_date);
        fputcsv($f, $lineData, $delimiter);
        $con++;
    }
    fseek($f, 0);
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');
    fpassthru($f);
  }

  public function insert_status()
  {
    $config['upload_path']          = './uploads/';
    $config['allowed_types']        = 'pdf|doc|docx|jpg|png|rtf|txt|xlsx|xls|pptx|jpeg|7z|rar|dot';
    $config['max_size']             = 1000000000;
    $this->load->library('upload', $config);
    if ( ! $this->upload->do_upload('file'))
    {
      //redirect('admin/attendance');
    }
    else
    {
      $url = $this->upload->data('file_name');
    }
    $data = $this->input->post();
    if ($url) {
      $data['file'] = '/uploads/'.$url;
    }
    
    $data['user_id'] = $_SESSION['id'];
    $u_id = $data['employee_id'];
    $u_type = 'client';
    $url = 'case_status_report/'.$data['case_id'];
    unset($data['employee_id']);
    $id = $this->admin_model->insert_data("case_status",$data);
    if ($id) {
      $notification = array(
        'user_id'=>$u_id,
        'user_type'=>$u_type,
        'title' => 'New Status Update',
        'message'=>date('Y-m-d'),
        'url'=>'admin/'.$url
      );
      $this->admin_model->insert_data("notifications",$notification);
    }
    redirect('admin/screening_operation');
  }

  public function case_status_report($case_id)
  {
    //$data['status'] = $this->admin_model->select_where('case_status',array('case_id'=>$case_id));
    $data['status'] = $this->admin_model->get_status($case_id);
    $data['id'] = $case_id;
    $this->load->view('admin2/header',$data);
    $this->load->view('admin2/case_status_report');
    $this->load->view('admin2/footer');
  }

  public function export_logs($case_id)
  {
    $delimiter = ",";
    $filename = "report-" . date('Y-m-d') . ".csv";
    $f = fopen('php://memory', 'w');
    $fields = array('Remarks','Date','Time','Name');
    fputcsv($f, $fields, $delimiter);
    $data = $this->admin_model->get_status($case_id);
    foreach ($data as $s) {
      $lineData = array($s['remarks'], date('d-m-Y', strtotime($s['created_at'])), date('H:i:s', strtotime($s['created_at'])), $s['employee_name']);
        fputcsv($f, $lineData, $delimiter);
    }
    fseek($f, 0);
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');
    fpassthru($f);
  }

  public function view_case_back($case_id)
  {
    $data['client_details']=$this->db->query("select case_request.*,client.*,country.country_name,country.country_code from client inner join case_request on (case_request.client_id=client.client_id) INNER JOIN country ON (country.id=client.country_id) where case_request.id='".$case_id."'")->row_array();
    $data['subjects']=$this->db->get_where("subject_case",['case_id'=>$case_id])->result_array();
    $data['services']=$this->db->query("select scope_of_work.scope_name,assign_client_services.* from scope_of_work inner join assign_client_services on(assign_client_services.scope_id=scope_of_work.id) where assign_client_services.client_id='".$_SESSION['client_id']."'")->result_array();
    $this->load->view('admin2/header',$data);
    $this->load->view('admin2/view_case_back');
    $this->load->view('admin2/footer');
  }

  public function activity_hold($id)
  {
    $this->admin_model->update('assign_activity_to_user',array('hold_status'=>1, 'hold_date'=>date('Y-m-d')),array('id'=>$id));
    redirect('admin/job_dashboard');
  }

  public function activity_unhold($id)
  {
    $this->admin_model->update('assign_activity_to_user',array('hold_status'=>0, 'unhold_date'=>date('Y-m-d')),array('id'=>$id));
    redirect('admin/job_dashboard');
  }

  public function analytics_report($id)
  {
    $data['reports'] = $this->admin_model->get_ven_report($id);
    // echo "<pre/>"; print_r($data); die();
    $this->load->view('admin2/header',$data);
    $this->load->view('admin2/analytics_report');
    $this->load->view('admin2/footer');
  }

  public function view_emp_org($code)
  {
    $data = $this->admin_model->select_where('employee_detail', array('employee_code'=>$code));
    if (!empty($data)) {
      if ($data[0]['employee_id']) {
        redirect('admin/employee_edit/'.$data[0]['employee_id']);
      }
    }
    else{
      redirect('admin/employees_organogram');
    }
  }

  public function sales_invoice()
  {
    if ($_REQUEST) {
      $start = date('Y-m-01', strtotime('-1 month'));
      $end = date('Y-m-t', strtotime('-1 month'));
      $id = $this->input->get_post('client');
      if ($this->input->get_post('start')) {
        $start = date('Y-m-d', strtotime($this->input->get_post('start')));
      }
      if ($this->input->get_post('end')) {
        $end = date('Y-m-d', strtotime($this->input->get_post('end')));
      }
      $data['id'] = $id;
      $data['start'] = $start;
      $data['end'] = $end;
      $data['cases'] = $this->admin_model->get_sales_invoice($start,$end,$id);
      //print_r($this->db->last_query());die;
      $this->load->view('admin2/header',$data);
      $this->load->view('admin2/sales_invoice');
      $this->load->view('admin2/footer');
    }
    else{
      $data['clients'] = $this->admin_model->get_data('client');
      $this->load->view('admin2/header',$data);
      $this->load->view('admin2/sales_invoice_all');
      $this->load->view('admin2/footer');
    }
  }

  public function fund_invoice($id)
  {
    //error_reporting('-1');
    $data['detail'] = $this->admin_model->fund_invoice_data($id);
    $data['internal'] = $this->admin_model->select_where_row('employee_itgs',array('role'=>'Internal Auditor'));
    $data['finance'] = $this->admin_model->select_where_row('employee_itgs',array('role'=>'Manager Finance'));
    //print_r($this->db->last_query());
    //echo '<pre>';print_r($data);die;
    if ($data['detail']['type'] == 1) {
      $this->load->view('admin2/header',$data);
      $this->load->view('admin2/cash_slip');
      $this->load->view('admin2/footer');
    }
    else{
      $this->load->view('admin2/header',$data);
      $this->load->view('admin2/bank_slip');
      $this->load->view('admin2/footer');
    }
  }

  public function submit_client_invoice()
  {
    
    $case_id=array_unique($_POST['case_id']);

foreach ($case_id as $id) {
    $data['case_id']=$id;
    $data['invoice_no']=$_POST['invoice_no'];
    $data['client_id']=$_POST['client_id'];
    $data['start_date']=$_POST['start'];
    $data['activity_price_total']=$_POST['activity_price_total'];
    $data['activity_tax_total']=$_POST['activity_tax_total'];
    $data['activity_pricetax_total']=$_POST['activity_pricetax_total'];
    $data['end_date']=$_POST['end'];

    $data['date_time']=date('d-m-Y h:i:s a');
    

    $this->db->insert('client_invoice',$data);
    $this->db->insert_id();

}
    redirect(base_url().'admin/client_invoice_view');


  } 

  public function submit_vendor_invoice()
  {
    
    $case_id=array_unique($_POST['case_id']);

foreach ($case_id as $id) {

    $data['case_id']=$id;
    $data['invoice_id']=$_POST['invoice_no'];
    $data['client_id']=$_POST['client_id'];
    $data['vendor_id']=$_POST['vendor_id'];
    $data['voucher_no']=$_POST['voucher_no'];
    $data['vendor_charges']=$_POST['vendor_charges'];
    $data['start_date']=$_POST['start'];
    $data['end_date']=$_POST['end'];

    $data['date_time']=date('d-m-Y h:i:s a');
    

    $this->db->insert('vendor_invoice',$data);
    $invoice=$this->db->insert_id();
    echo $id;
}
    if($invoice){
    redirect(base_url().'admin/vendor_invoice_view');
    }else{

    echo "Done";
    }


  } 

  public function client_invoice_view()
  {
    $sql="SELECT client.*, GROUP_CONCAT(case_request.client_reference separator ',') as client_reference, GROUP_CONCAT(case_request.id separator ',') as caseID,client_invoice.status as paid_status,client_invoice.start_date,client_invoice.invoice_no,client_invoice.end_date,client_invoice.activity_price_total,client_invoice.activity_tax_total,client_invoice.activity_pricetax_total  from client INNER JOIN case_request on case_request.client_id=client.client_id INNER JOIN client_invoice on client_invoice.case_id=case_request.id ORDER BY client_invoice.client_id";
    $data['results']=$this->db->query($sql)->result_array();
    $this->load->view('admin2/header',$data);
    $this->load->view('admin2/client_invoice_view',$data);
    $this->load->view('admin2/footer',$data);
  }

  public function vendor_invoice_view()
  {
     if (!$_POST['v_id']) {
       
    $sql="select vendor_invoice.*,case_request.reference_code,case_request.client_reference,employee_itgs.employee_name,client.client_name,client.client_type from vendor_invoice inner join case_request on (case_request.id=vendor_invoice.case_id) inner join employee_itgs on (employee_itgs.id=vendor_invoice.vendor_id) INNER join client on (client.client_id=vendor_invoice.client_id) ORDER BY vendor_invoice.id DESC";
     }else{
    $sql="select vendor_invoice.*,case_request.reference_code,case_request.client_reference,employee_itgs.employee_name,client.client_name,client.client_type from vendor_invoice inner join case_request on (case_request.id=vendor_invoice.case_id) inner join employee_itgs on (employee_itgs.id=vendor_invoice.vendor_id) INNER join client on (client.client_id=vendor_invoice.client_id) where vendor_invoice.vendor_id='".$_POST['v_id']."' ORDER BY vendor_invoice.id DESC";
      
     }

    $data['results']=$this->db->query($sql)->result_array();
    $this->load->view('admin2/header',$data);
    $this->load->view('admin2/vendor_invoice_view',$data);
    $this->load->view('admin2/footer',$data);
  }

  public function update_client_case_status()
  {
    $caseID=explode(",",$_GET['caseID']);
    $client=$_GET['client'];
    foreach ($caseID as $id) {
       $this->db->update("case_request",['is_paid'=>1],['id'=>$id,'client_id'=>$client]);
       $this->db->update("client_invoice",['status'=>1],['case_id'=>$id,'client_id'=>$client]);
      }
      redirect(base_url().'admin/sales_invoice');  
    }

  public function update_vendor_invoice_status()
  {
    $caseID=$_GET['caseID'];
    $clientID=$_GET['client'];
       $this->db->update("vendor_invoice",['status'=>1],[
        'case_id'=>$caseID,
        'client_id'=>$clientID
      ]);
         
      redirect(base_url().'admin/vendor_invoice_view');  

    }

  public function vendor_payment_invoice()
  {
    if ($this->input->post()) {
      $start = date('Y-m-01', strtotime('-1 month'));
      $end = date('Y-m-t', strtotime('-1 month'));

      $data['start'] = date('Y-m-01', strtotime('-1 month'));
      $data['end'] = date('Y-m-t', strtotime('-1 month'));
      $id = $this->input->post('vendor');
      $data['id'] = $id;
      if ($this->input->post('start')) {
        $start = date('Y-m-d', strtotime($this->input->post('start')));
      }
      if ($this->input->post('end')) {
        $end = date('Y-m-d', strtotime($this->input->post('end')));
      }
      $data['payments'] = $this->admin_model->get_vendor_payments($id,$start,$end);
      $this->load->view('admin2/header',$data);
      $this->load->view('admin2/vendor_payment_slip');
      $this->load->view('admin2/footer');
    }
    else{
      $data['vendors'] = $this->admin_model->select_where('employee_itgs',array('role'=>'vendor'));
      $this->load->view('admin2/header',$data);
      $this->load->view('admin2/vendor_payment_invoice');
      $this->load->view('admin2/footer');
    }
  }

  public function courier_invoice()
  {
    //error_reporting('-1');
    $start = date('Y-m-01', strtotime('-1 month'));
    $end = date('Y-m-t', strtotime('-1 month'));
    $data['charges'] = $this->admin_model->fund_courier_data($start,$end);
    //print_r($data);die;
    $this->load->view('admin2/header',$data);
    $this->load->view('admin2/courier_invoice');
    $this->load->view('admin2/footer');
  }

  public function profit_lose_invoice($id=null,$service_id=null)
  {
    $start = date('Y-m-01', strtotime('-1 month'));
    $end = date('Y-m-t', strtotime('-1 month'));
    $data['cases'] = $this->admin_model->get_profit_invoice($start,$end,$id,$service_id);
    //print_r($this->db->last_query());
    //print_r($data);die;
    $this->load->view('admin2/header',$data);
    $this->load->view('admin2/profit_lose_invoice');
    $this->load->view('admin2/footer');
  }

  public function office_fee()
  {
    $start = date('Y-m-01', strtotime('-1 month'));
    $end = date('Y-m-t', strtotime('-1 month'));
    $data['fees'] = $this->admin_model->fund_courier_data($start,$end);
    //print_r($data);die;
    $this->load->view('admin2/header',$data);
    $this->load->view('admin2/office_fee');
    $this->load->view('admin2/footer');
  }

  public function master_amount()
  {
    $start = date('Y-m-01', strtotime('-1 month'));
    $end = date('Y-m-t', strtotime('-1 month'));
    $data['amounts'] = $this->admin_model->get_amounts($start,$end);
    //print_r($data);die;
    $this->load->view('admin2/header',$data);
    $this->load->view('admin2/master_amount');
    $this->load->view('admin2/footer');
  }

  public function view_case_detail($case_id,$id)
  {
    //error_reporting('-1');
    $data['client_details']=$this->db->query("select case_request.*,client.client_name,client.service_id,client.email,client.client_type,client.country_id,client.status,country.country_name,country.country_code from client inner join case_request on (case_request.client_id=client.client_id) left JOIN country ON (country.id=client.country_id) where case_request.id='".$case_id."'")->row_array();
    //print_r($this->db->last_query());
    $data['subjects']=$this->db->get_where("subject_case",['case_id'=>$case_id])->result_array();
    $data['id'] = $id;
    $this->db->select('e.employee_name')
             ->from('case_fund_request c')
             ->join('employee_itgs e', 'c.vendor_id = e.id')
             ->where('c.case_id', $case_id);
    $data['vendor'] = $this->db->get()->row_array();
    //print_r($data);die;
    $this->load->view('admin2/header');
    $this->load->view('admin2/view_case_detail',$data);
    $this->load->view('admin2/footer');
  }

  public function employees()
  {
    $data['employees'] = $this->admin_model->select_where('employee_itgs', array('role !=' => 'vendor'));

    //echo '<pre>';print_r($data);die;
    $this->load->view('admin2/header');
    $this->load->view('admin2/employees',$data);
    $this->load->view('admin2/footer');
  }

  public function salary_increment()
  {
    $data = $this->input->post();
    //print_r($data);die;
    $id = $this->admin_model->insert_data("salary_increment",$data);
    redirect('admin/employees');
  }

  public function view_emp_details($id)
  {
    $data['employee'] = $this->admin_model->select_where_row('employee_itgs', array('id'=>$id));
    $employee_id = $data['employee']['employee_id'];
    $data['detail'] = $this->admin_model->select_where_row('employee_detail', array('employee_code'=>$employee_id));
    $recruitment_id = $data['detail']['employee_id'];
    $data['salary_increment'] = $this->admin_model->select_where('salary_increment', array('employee_id'=>$employee_id));
    $data['salary'] = $this->admin_model->select_where('salary', array('employee_id'=>$id));
    $data['employee_educations'] = $this->admin_model->select_where('employee_educations', array('employee_id'=>$recruitment_id));
    $data['employee_employment_history'] = $this->admin_model->select_where('employee_employment_history', array('employee_id'=>$recruitment_id));
    $data['leave_applications'] = $this->admin_model->select_leave_all($employee_id);
    $data['performance_review'] = $this->admin_model->get_review_emp($id);
    $this->load->view('admin2/header');
    $this->load->view('admin2/view_emp_details',$data);
    $this->load->view('admin2/footer');
  }

  public function emp_attachments()
  {
    $id = $this->input->post('employee_id');
    $data['agreement'] = $this->input->post('file_id');
    $data['nda'] = $this->input->post('file_id1');
    $data['verification'] = $this->input->post('file_id2');
    $ids = explode(',', $data['agreement']);
    $file_links = $this->admin_model->get_image_link($ids);
    $links = array();
    for ($p=0; $p < sizeof($file_links); $p++) { 
      $links[] = $file_links[$p]['file'];
    }
    $data['agreement']=implode(',', $links);

    $ids = explode(',', $data['nda']);
    $file_links = $this->admin_model->get_image_link($ids);
    $links = array();
    for ($p=0; $p < sizeof($file_links); $p++) { 
      $links[] = $file_links[$p]['file'];
    }
    $data['nda']=implode(',', $links);

    $ids = explode(',', $data['verification']);
    $file_links = $this->admin_model->get_image_link($ids);
    $links = array();
    for ($p=0; $p < sizeof($file_links); $p++) { 
      $links[] = $file_links[$p]['file'];
    }
    $data['verification']=implode(',', $links);

    $this->admin_model->update('employee_itgs',$data,array('id'=>$id));
    redirect('admin/employees');
  }

  public function client_detail_case($id)
  {
    $data['cases'] = $this->admin_model->get_client_cases($id);
    //echo '<pre>';print_r($data);die;
    $this->load->view('admin2/header');
    $this->load->view('admin2/client_detail_case',$data);
    $this->load->view('admin2/footer');
  }

  public function get_assign_vendor($id)
  {
    $this->db->select('a.*, s.subject_name,c.reference_code,cf.charges')
             ->from('assign_vendor_request a')
             ->join('subject_case s', 'a.subject_id = s.id')
             ->join('case_request c', 'a.case_id = c.id')
             ->join('case_fund_request cf', 'cf.case_id = a.case_id and cf.vendor_id = a.vendor_id', 'left')
             ->where('a.id',$id);
    $data = $this->db->get()->row_array();
    //$data = $this->admin_model->select_where_row('assign_vendor_request',array('id',$id));
    echo json_encode($data);
  }

  public function activity_calender()
  {
    $this->db->select('id,full_name as title, dob')
             ->from('employee')
             ->where('dob IS NOT NULL');
    $data['records'] = $this->db->get()->result_array();
    $this->db->select('id,employee_name as title, created_at as dob')
             ->from('employee_itgs')
             ->where('created_at IS NOT NULL')
             ->where('role !=', 'vendor');
    $data['secound'] = $this->db->get()->result_array();
    //echo '<pre>';print_r($data);die;
    $this->load->view('admin2/header');
    $this->load->view('admin2/activity_calender',$data);
    $this->load->view('admin2/footer');
  }

  public function ceo_employees()
  {
    $data['records'] = $this->admin_model->get_emp_count();
    //$data['records']=$this->admin_model->view_employee();
    $data['employees'] = $this->admin_model->get_employee_all();
    //echo '<pre>';print_r($data);die;
    $this->load->view('admin2/header');
    $this->load->view('admin2/ceo_employees',$data);
    $this->load->view('admin2/footer');
  }

  public function view_ceo_leaves($id=null,$month=null)
  {
    $first = date('Y-01-01');
    $last = date('Y-12-31');
    if (!empty($this->input->post('month'))) {
      $start = $this->input->post('start');
      $end = $this->input->post('end');
      $one = date('Y-m-01 00:00:01',strtotime($star));
      $two = date('Y-m-t 23:59:59',strtotime($end));
    }
    else{
      $one = date('Y-m-01 00:00:01', strtotime("-1 month"));
      $two = date('Y-m-t 23:59:59', strtotime("-1 month"));
    }
    $this->db->select('sum(l.total_days) as days, e.employee_id')
             ->from('employee_itgs e')
             ->join('leave_applications l', 'l.employee_id = e.employee_id', 'left')
             ->where('l.start_date >=', DATE($first))
             ->where('l.start_date <=', DATE($last))
             ->where('l.is_approve', '4')
             ->group_by('e.id');
    $e = $this->db->get_compiled_select();
    $this->db->select('sum(l.total_days) as days, e.employee_id')
             ->from('employee_itgs e')
             ->join('leave_applications l', 'l.employee_id = e.employee_id', 'left')
             ->where('l.start_date >=', DATE($one))
             ->where('l.start_date <=', DATE($two))
             ->where("(l.is_approve = '4' OR l.is_approve = '7')")
             ->group_by('e.id');
    $ec = $this->db->get_compiled_select();
    $this->db->select('e.id,e.employee_name,e.employee_id,sum(ed.sick_leave + ed.casual_leave + ed.annual_leave) as leaves,el.days as old_leaves,ec.days as month_leaves')
             ->from('employee_itgs e')
             ->join('employee_detail ed', 'ed.employee_code = e.employee_id', 'left')
             ->join('('.$e.') el', 'e.employee_id = el.employee_id', 'left')
             ->join('('.$ec.') ec', 'e.employee_id = ec.employee_id', 'left')
             ->group_by('e.id');
    $emp = $this->db->get()->result_array();
    $data['employees'] = $emp;
    $data['first'] = $one;
    $data['last'] = $two;
    $this->load->view('admin2/header',$data);
    $this->load->view('admin2/view_ceo_leaves');
    $this->load->view('admin2/footer');
  }
  function countDays($year, $month, $ignore) {
    $count = 0;
    $counter = mktime(0, 0, 0, $month, 1, $year);
    while (date("n", $counter) == $month) {
        if (in_array(date("w", $counter), $ignore) == false) {
            $count++;
        }
        $counter = strtotime("+1 day", $counter);
    }
    return $count;
}

  public function attendance()
  {
    if (!empty($this->input->post('month'))) {
      $month = $this->input->post('month');
      $one = date('Y-'.$month.'-01 00:00:01');
      $two = date('Y-'.$month.'-t 23:59:59');
    }
    else{
      $one = date('Y-m-01 00:00:01', strtotime("-1 month"));
      $two = date('Y-m-t 23:59:59', strtotime("-1 month"));
    }
    $this->db->select('a.*,e.employee_name,e.designation,e.department')
             ->from('attendance a')
             ->join('employee_itgs e','e.employee_id = a.employee_id')
             ->where('a.date >=',$one)
             ->where('a.date <=',$two)
             ->where('a.employee_id !=', '')
             ->group_by('a.id');
    $data['attendance'] = $this->db->get()->result_array();
    $data['current'] = $one;
    $data['last'] = $two;

    $total_days = $this->countDays(date('Y', strtotime($one)),date('m', strtotime($one)),array(0,6));
    $this->db->select("id as total,employee_id,clock_in,STR_TO_DATE('091559','%h%i%s') as last,'12:00:01' as end")
             ->from('attendance')
             ->where('date >=',$one)
             ->where('date <=',$two)
             ->where('employee_id !=', '')
             ->having('clock_in > last AND clock_in < end');
    $c = $this->db->get_compiled_select();
    $this->db->select("id as total,employee_id,clock_in,'12:00:00' as last")
             ->from('attendance')
             ->where('date >=',$one)
             ->where('date <=',$two)
             ->where('employee_id !=', '')
             ->having('clock_in > last');
    $h = $this->db->get_compiled_select();
    $this->db->select("id as total,employee_id,clock_out,'03:00:01' as last")
             ->from('attendance')
             ->where('date >=',$one)
             ->where('date <=',$two)
             ->where('employee_id !=', '')
             ->having('clock_out < last');
    $s = $this->db->get_compiled_select();
    $this->db->select("count(id) as total, employee_id")
             ->from('attendance')
             ->group_by('employee_id')
             ->where('date >=',$one)
             ->where('date <=',$two)
             ->where('employee_id !=', '');
    $a = $this->db->get_compiled_select();
    $this->db->select('sum(l.total_days) as days, e.employee_id')
             ->from('employee_itgs e')
             ->join('leave_applications l', 'l.employee_id = e.employee_id', 'left')
             ->where('l.start_date >=', DATE($one))
             ->where('l.start_date <=', DATE($two))
             ->where("(l.is_approve = '4' OR l.is_approve = '7')")
             ->where('l.nature_of_leave','Half Day')
             ->group_by('e.id');
    $e = $this->db->get_compiled_select();
    $this->db->select('sum(l.total_days) as days, e.employee_id')
             ->from('employee_itgs e')
             ->join('leave_applications l', 'l.employee_id = e.employee_id', 'left')
             ->where('l.start_date >=', DATE($one))
             ->where('l.start_date <=', DATE($two))
             ->where("(l.is_approve = '4' OR l.is_approve = '7')")
             ->where('l.nature_of_leave !=','Half Day')
             ->group_by('e.id');
    $ec = $this->db->get_compiled_select();
    $this->db->select('e.employee_name, concat('.$total_days.' - a.total) as leaves, count(c.total) as late, group_concat(DISTINCT(h.total) separator ",") as hafe, group_concat(DISTINCT(s.total) separator ",") as short, ec.days as approved, eh.days as short_approved')
             ->from('employee_itgs e')
             ->join('('.$a.') a', 'a.employee_id = e.employee_id')
             ->join('('.$c.') c', 'e.employee_id = c.employee_id')
             ->join('('.$h.') h', 'e.employee_id = h.employee_id','left')
             ->join('('.$s.') s', 'e.employee_id = s.employee_id','left')
             ->join('('.$e.') eh', 'e.employee_id = eh.employee_id', 'left')
             ->join('('.$ec.') ec', 'e.employee_id = ec.employee_id', 'left')
             ->group_by('e.id')
             ->order_by('e.employee_name');
    $data['employees'] = $this->db->get()->result_array();
    //print_r($this->db->last_query());
    //echo '<pre>';print_r($data);die;
    $this->load->view('admin2/header',$data);
    $this->load->view('admin2/attendance');
    $this->load->view('admin2/footer');
  }

  public function attendance_upload()
  {
    error_reporting('-1');
    $config['upload_path']          = './uploads/';
    $config['allowed_types']        = 'xls|xlsx';
    $config['max_size']             = 1000000000;
    $this->load->library('upload', $config);
    if ( ! $this->upload->do_upload('csv_name'))
    {
      redirect('admin/attendance');
    }
    else
    {
      $url = $this->upload->data('full_path');
    }
    $this->load->library('excel_reader');
    $this->excel_reader->read($url);
    $worksheet = $this->excel_reader->sheets[0];
    
    $numRows = $worksheet['numRows']; // ex: 14
    $numCols = $worksheet['numCols']; // ex: 4
    $cells = $worksheet['cells']; // the 1st row are usually the field's name
    unset($cells[1]);
    $last_date;
    $last_id;
    $con = 0;
    foreach ($cells as $c) {
      $con++;
      $employee_id = $c[6];
      $d = $c[4];
      $date = date('Y-m-d', strtotime($d));
      $time = date('h:i:s', strtotime($d));
      $data = $this->admin_model->select_where_row('attendance',array('employee_id'=>$employee_id,'date'=>$date));
      if (!$data) {
        $last_id = $employee_id;
        $last_date = $date;
        $attendance = array(
          'employee_id'=>$last_id,
          'date'=>$last_date,
          'clock_in'=>$time,
        );
        $data_response = $this->db->insert('attendance',$attendance);
      }
      else{
        $this->admin_model->update('attendance',array('clock_out'=>$time),array('id'=>$data['id']));
      }
    }
    unlink($url);
    redirect('admin/attendance');
  }

  public function cancelled_case()
  {
    $data['employees'] = $this->admin_model->get_cancelled_cases();
    //echo '<pre>';print_r($data);die;
    $this->load->view('admin2/header',$data);
    $this->load->view('admin2/cancelled_case');
    $this->load->view('admin2/footer');
  }

  public function hold_case()
  {
    $data['employees'] = $this->admin_model->get_hold_cases();
    $data['task'] = $this->admin_model->get_hold_task();
    //echo '<pre>';print_r($data);die;
    $this->load->view('admin2/header',$data);
    $this->load->view('admin2/hold_case');
    $this->load->view('admin2/footer');
  }

  public function completed_case()
  {
    $data['employees'] = $this->admin_model->get_completed_cases();
    $data['task'] = $this->admin_model->get_completed_task();
    //echo '<pre>';print_r($data);die;
    $this->load->view('admin2/header',$data);
    $this->load->view('admin2/completed_case');
    $this->load->view('admin2/footer');
  }

  public function panding_cases()
  {
    $data['employees'] = $this->admin_model->get_panding_cases();
    $data['task'] = $this->admin_model->get_panding_task();
    //echo '<pre>';print_r($data);die;
    $this->load->view('admin2/header',$data);
    $this->load->view('admin2/panding_cases');
    $this->load->view('admin2/footer');
  }

  public function due_cases()
  {
    $data['employees'] = $this->admin_model->get_due_cases();
    $data['task'] = $this->admin_model->get_due_task();
    //echo '<pre>';print_r($data);die;
    $this->load->view('admin2/header',$data);
    $this->load->view('admin2/due_cases');
    $this->load->view('admin2/footer');
  }

  public function document_forms()
  {
    $this->db->select('f.name, group_concat(fa.title separator ":") as titles, group_concat(fa.attechment separator ":") as attechments')
             ->from('forms f')
             ->join('forms_attechments fa', 'fa.forms_id = f.id')
             ->group_by('f.id');
    $data['record'] = $this->db->get()->result_array();
    //echo '<pre>';print_r($data);die;
    $this->load->view('admin2/header',$data);
    $this->load->view('admin2/document_forms');
    $this->load->view('admin2/footer');
  }

  public function create_forms()
  {
    $this->load->view('admin2/header',$data);
    $this->load->view('admin2/create_forms');
    $this->load->view('admin2/footer');
  }

  public function insert_forms()
  {
    $data = $this->input->post();
    $name = $data['name'];
    $title = $data['title'];
    $files_id = $data['files_id'];
    $id = $this->admin_model->insert('forms',array('name'=>$name));
    //$froms = [];
    for ($i=0; $i < sizeof($title); $i++) { 
      $ids = explode(',', $files_id[$i]);
      $file_links = $this->admin_model->get_image_link($ids);
      $links = array();
      for ($p=0; $p < sizeof($file_links); $p++) { 
        $links[] = $file_links[$p]['file'];
      }
      $froms = array(
        'title'=>$title[$i],
        'forms_id'=>$id,
        'attechment'=>implode(',', $links),
      );
      $this->admin_model->insert('forms_attechments',$froms);
    }
    redirect('admin/document_forms');
  }

  public function get_sub_category($scope_id)
  {
    $data = $this->admin_model->select_where('sub_scope',array('scope_id'=>$scope_id));
    echo json_encode($data);
  }


  public function cases()
  {
    error_reporting(1);
    $data['cases'] = $this->admin_model->get_data('case_request');
    $data['case'] = array();
    if ($this->input->post()) {
      $post = $this->input->post();
      $case_id = $post['case'];
      $data['case_id'] = $case_id;
      $start_case = $this->admin_model->case_start($case_id);
      $assign_subject = $this->admin_model->case_assign($case_id);
      $assign_activity = $this->admin_model->activity_assign($case_id);
      $assign_vendor = $this->admin_model->vendor_assign($case_id);
      if ($assign_subject) {
        $data['case_detail'] = array_merge($assign_subject,$start_case);
      }
      else{
        $data['case_detail'] = $start_case;
      }
      if ($assign_activity) {
        $data['case_detail'] = array_merge($assign_activity,$data['case_detail']);
      }
      if ($assign_vendor) {
        $data['case_detail'] = array_merge($assign_vendor,$data['case_detail']);
      }
      function compareOrder($a, $b)
      {
        return strtotime($a['start_date']) - strtotime($b['start_date']);
      }
      usort($data['case_detail'], 'compareOrder');

    }
    $this->load->view('admin2/header',$data);
    $this->load->view('admin2/cases');
    $this->load->view('admin2/footer');

  }

    public function update_activity_price()
    {


  $url='https://www.xe.com/currencyconverter/convert/?Amount=1&From=PKR&To=USD';


      $page = file_get_contents($url);
      $doc = new DOMDocument();
      @$doc->loadHTML($page);
      $divs = $doc->getElementsByTagName('span');
      foreach($divs as $div) {
       
          
          if ($div->getAttribute('class') === 'uccInverseResultUnit') {
               $conversion_rate= $div->nodeValue;
          }
      }


     $filter_conversion=explode('=', $conversion_rate);
     $further_filter=explode(' ',$filter_conversion[1]);

      $data=$_POST;
  
      $where=array(
       'id'=>$data['activity_id'],
       'subject_id'=>$data['subject_id'],
       'case_id'=>$data['case_id'],
      );

     
      $query="Update subject_activities set activity_price='".$data['price']."', is_int='".$data['is_int']."', conversion_rate='".$further_filter[1]."'";
      
      $query.=" where id='".$data['activity_id']."' and subject_id='".$data['subject_id']."' and case_id='".$data['case_id']."'";
      $this->db->query($query);
      if($this->db->affected_rows()>0){
        $array_json=['success'=>1];
      }else{
        $array_json=['success'=>0];
      }
      echo json_encode($array_json);
    }

    public function update_assigned_price()
    {
      $query="Update case_request set price_assigned=1 where id='".$_POST['case_id']."'";
      // die($query);
      $this->db->query($query);
      if($this->db->affected_rows()>0){
        $array_json=['success'=>1];
      }else{
        $array_json=['success'=>0];
      }
      echo json_encode($array_json);
    }
    


  /* usama code end */



  /*aakash code start*/
  public function task_manager_form()
  {
    
    $data['employees'] = $this->admin_model->all_rows('employee_itgs'); 
    $data['departments'] = $this->admin_model->get_data('departments');

    $this->load->view('admin2/header');
    $this->load->view('admin2/task_manager_form',$data);
    $this->load->view('admin2/footer');
  }

  public function task_manager_form_submit()
  {
      $config['upload_path']       = './uploads/task/';
      $config['allowed_types']        = 'jpg|png|gif';
      $config['encrypt_name'] = TRUE;

      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload('file_image'))
      {
        
       $data = array(
          'department' => $this->input->post('department'),
          
          'assign_date' => $this->input->post('assign_date'),
          'due_date' => $this->input->post('due_date'),
          'priority' => $this->input->post('priority'),
          'subject' => $this->input->post('subject'),
          'description' => $this->input->post('description'),
          'user_id' => $_SESSION['id'] !="" ? $_SESSION['id'] : $_SESSION['login_id'],
          'is_loginType' => $_SESSION['id'] !="" ? 1 : 2,
          
        );

        $task_id=$this->admin_model->task_manager_form_insert($data);
                

        $data2 = array(
          'user_id' => $_SESSION['id'] !="" ? $_SESSION['id'] : $_SESSION['login_id'] ,
          'status' => 'Nothing',
          'date_name' => date('d-m-Y h:i:s a'),
        );

        $this->admin_model->task_manager_notification($data2);

        $employees = $this->input->post('employes');  

       // $ids=implode(",",$employees);

       // die($ids);

         foreach ($employees as $emp) {
             $data3 = array(
            'task_id' => $task_id,
            'employee_id' => $emp,
            'assigned_by' => $_SESSION['id'] !="" ? $_SESSION['id'] : $_SESSION['login_id'] 
        );  

        $this->admin_model->insert('task_employee' , $data3);

         }
      }

     else{

        $file_info =  $this->upload->data();
        $img_name = $file_info['file_name']; 
        

       $data = array(
          'department' => $this->input->post('department'),
          
          'assign_date' => $this->input->post('assign_date'),
          'due_date' => $this->input->post('due_date'),
          'priority' => $this->input->post('priority'),
          'subject' => $this->input->post('subject'),
          'description' => $this->input->post('description'),
          'file' =>  $img_name,
          'user_id' => $_SESSION['id'] !="" ? $_SESSION['id'] : $_SESSION['login_id'],
          'is_loginType' => $_SESSION['id'] !="" ? 1 : 2,
          
        );

        $task_id=$this->admin_model->task_manager_form_insert($data);
                

        $data2 = array(
          'user_id' => $_SESSION['id'] !="" ? $_SESSION['id'] : $_SESSION['login_id'] ,
          'status' => 'Nothing',
          'date_name' => date('d-m-Y h:i:s a'),
        );

        $this->admin_model->task_manager_notification($data2);

        $employees = $this->input->post('employes');  

       // $ids=implode(",",$employees);

       // die($ids);

         foreach ($employees as $emp) {
             $data3 = array(
            'task_id' => $task_id,
            'employee_id' => $emp,
            'assigned_by' => $_SESSION['id'] !="" ? $_SESSION['id'] : $_SESSION['login_id'] 
        );  

        $this->admin_model->insert('task_employee' , $data3);

         }

     }  
        redirect(base_url().'admin/task_notification_view');

  }


  public function get_task_notification()
  {

    $events = array();
    $data['notification']= array();


    if ($this->session->userdata('id')) {
      $id = $this->session->userdata('id');
    }

   
    $sql="SELECT task_manager.*,task_employee.employee_id ,  emp1.employee_name as assigned,
        emp2.employee_name as assigned_by , departments.name as departments_id  FROM task_manager 
        INNER JOIN task_employee ON (task_manager.id = task_employee.task_id) 
        INNER JOIN employee_itgs emp1 ON (emp1.id  =  task_employee.employee_id)
        INNER JOIN employee_itgs emp2 ON (emp2.id=task_employee.assigned_by) 
        INNER JOIN departments  ON (task_manager.department = departments.id)
        WHERE task_employee.employee_id=".$_SESSION['id']."";


        $data['task_notifications'] = $this->db->query($sql)->result_array();
    $this->load->view('admin2/get_task_notification',$data);
  }


  public function task_notification_count()
  {
    $events = array();
    $data['notification']= array();
  
    if ($this->session->userdata('id')) {
      $id = $this->session->userdata('id');
    }
   
    $this->db->select('*')
             ->from('task_employee')
             ->where('employee_id', $id)
              ->where('view', '0')
             ->order_by('id', 'desc');

    $data['not'] = $this->db->get()->result_array();
    echo count($data['notification']) + count($data['not']);
  }


  public function task_notification_view()
  {
    
  
   
    if ($_SESSION['login_id']) {
      $user_id=$_SESSION['login_id'];   
    }else if($_SESSION['id']){
      $user_id=$_SESSION['id'];   
    }

    $sql="Select task_manager.*,task_employee.employee_id,departments.name as departments_id
    from task_manager inner join task_employee on (task_manager.id=task_employee.task_id)
    inner join departments on (departments.id=task_manager.department)
    where task_employee.employee_id='".$user_id."' or task_employee.assigned_by='".$user_id."'";

    $data['task_notification_data'] = $this->db->query($sql)->result_array();


    $this->load->view('admin2/header');
    $this->load->view('admin2/task_notification_view' , $data);
    $this->load->view('admin2/footer');
  }

  public function task_manager_form_edit($id)
  {
      // $data['task_form_data']=$this->admin_model->get_row("task_manager",$where);
     $sql="SELECT task_manager.*,task_employee.employee_id ,  emp1.employee_name as assigned,
        emp2.employee_name as assigned_by , departments.name as departments_id  ,  task_employee.id as employes_ids  FROM task_manager 
        INNER JOIN task_employee ON (task_manager.id = task_employee.task_id) 
        INNER JOIN employee_itgs emp1 ON (emp1.id  =  task_employee.employee_id)
        INNER JOIN employee_itgs emp2 ON (emp2.id=task_employee.assigned_by) 
        INNER JOIN departments  ON (task_manager.department = departments.id)

      WHERE task_manager.user_id = '".$_SESSION['id']."'  AND task_employee.task_id  = '".$id."'";


        $data['task_form_data'] = $this->db->query($sql)->row_array();
        $data['employees'] = $this->admin_model->all_rows('employee_itgs');
        $data['departments'] = $this->admin_model->get_data('departments');
        $data['task_employee'] = $this->db->query("select GROUP_CONCAT(employee_id separator ',') as employee_id from task_employee where task_id=".$id)->row_array();

        // print_r($data);

        $this->load->view('admin2/header');
        $this->load->view('admin2/task_manager_form_edit',$data);
        $this->load->view('admin2/footer');
      
  }

  public function task_manager_edit_update($id)
  {

      $employee_id_var = $this->input->post('task_employee_id');
  

      $sql="SELECT tm.id as task_manager_id,tsk_emp.id as tsk_emp_id ,tsk_emp.employee_id , emp1.employee_name as assigned, tm.file  ,  emp2.employee_name as assigned_by , departments.name as departments_id , tsk_emp.id as employes_id,
      tsk_emp.employee_id as emp_id FROM task_manager tm INNER JOIN task_employee tsk_emp ON (tm.id = tsk_emp.task_id) INNER JOIN employee_itgs emp1 ON (emp1.id = tsk_emp.employee_id) INNER JOIN employee_itgs emp2 ON (emp2.id=tsk_emp.assigned_by) INNER JOIN departments ON (tm.department = departments.id)

      WHERE tm.user_id = '".$_SESSION['id']."'  AND tsk_emp.task_id  = '".$id."'";


      $row_data['task_form_data'] = $this->db->query($sql)->row_array();


      $config['upload_path']   = './uploads/task/';
      $config['allowed_types'] = 'jpg|png|gif';
      $config['encrypt_name'] = TRUE;
      
      $this->load->library('upload', $config);

     if ( ! $this->upload->do_upload('file_image'))
      {
       
      $data = array(
          'department' => $this->input->post('department'),
          'assign_date' => $this->input->post('assign_date'),
          'due_date' => $this->input->post('due_date'),
          'priority' => $this->input->post('priority'),
          'subject' => $this->input->post('subject'),
          'description' => $this->input->post('description'),
          'user_id' => $_SESSION['id'],
      );

      } 
     else{


        $img_name2 = $row_data['task_form_data']['file'];
      // print_r($img_name2);

        $file_info =  $this->upload->data();
        
        $img_name = $file_info['file_name'];

        
        if($file_info){

          unlink('./uploads/task/' . $img_name2);
        }

        $data = array(
          'department' => $this->input->post('department'),
          'assign_date' => $this->input->post('assign_date'),
          'due_date' => $this->input->post('due_date'),
          'priority' => $this->input->post('priority'),
          'subject' => $this->input->post('subject'),
          'description' => $this->input->post('description'),
          'file' =>  $img_name,
          'user_id' => $_SESSION['id'],
          
        );
      }  
        
        $where = $this->db->where('id', $id);
    
           $this->admin_model->update( 'task_manager',  $data ,  $where );
       
    $employees = $this->input->post('employes');  


         foreach ($employees as $emp) {

             $data3 = array(
            'task_id' => $id,
            'employee_id' => $emp,
        );  



        $where = $this->db->where('task_id', $id);
    
        $this->admin_model->update( 'task_employee',  $data3 ,  $where );

      }
     
        redirect(base_url().'admin/task_notification_view');
  }


  public function task_notification_destroy($id,$user_id)
  {

      $where = $this->db->where(['task_id'=>$id,'employee_id'=>$user_id]);

       $this->admin_model->delete_data('task_employee',$where);
       
       redirect('admin/task_notification_view');

  }


  public function view_notification_task($id)
  {
    $this->admin_model->update('task_employee',array('view'=>'1'),array('task_id'=>$id , 'employee_id' => $_SESSION['id'] ));
  }  


  public function activity_hold_task($id)
  {
     $this->admin_model->update('task_manager',array('hold_status'=>1, 'hold_date'=>date('Y-m-d')),array('id'=>$id));
       redirect('admin/task_notification_view');
  }

  public function activity_unhold_task($id)
  {
     $this->admin_model->update('task_manager',array('hold_status'=>0, 'unhold_date'=>date('Y-m-d')),array('id'=>$id));
     redirect('admin/task_notification_view');
  }


  public function response_of_task_form()
  {

   $this->load->library('upload');

    $userFile = array(
      'upload_path' => './uploads/task/',
      'allowed_types' => 'jpg|jpeg|gif|png',
      'encrypt_name' => TRUE 
    );

    $this->upload->initialize($userFile);
    
       $id =  $this->input->post('task_manager_id'); 

       $session_id = $this->input->post('session_id');


    if ($this->upload->do_upload('file')) {
      $file = $this->upload->data();
      $options = array(
        'task_id' =>  $id , 
        'employee_id' => $session_id,
        'employee_file' => $file['file_name'] 
      );

      $this->admin_model->insert( 'task_employee_file' ,  $options);
    }

       $data = array(
          'status' => $this->input->post('task_status_response'),
        );

       $condition = array(   
          'task_id' => $id , 
           'employee_id' => $session_id 
          );

        $where = $this->db->where(
          $condition
        );

       $this->admin_model->update( 'task_employee',  $data ,  $where );
       redirect('admin/task_notification_view');
  }



     public function change_user_by_department(){
      $departmentID=$_GET['departmentID'];
      
      $sql ="
        SELECT employee_itgs.* , departments.id , employee_itgs.id FROM departments INNER JOIN employee_detail ON employee_detail.employee_department = departments.id INNER JOIN employee_itgs ON employee_itgs.id = employee_detail.id 
          WHERE departments.id = '".$departmentID."'  AND employee_detail.employee_department  = '".$departmentID."'";

        $users = $this->db->query($sql)->result_array();
       foreach ($users as $user) {
        ?>
        
        <option value="<?php echo $user['id']?>"><?php echo  $user['employee_name']?></option>
        <?php
      }
    }

  public function get_case_reference()
  {
   

    $name=$_POST['name'];
    $result=$this->db->query("SELECT `reference_code`
    FROM `case_request`
    WHERE `reference_code` LIKE '$name%' ")->result_array();
    $names=array();
    foreach($result as $row){
        $names[]=$row['reference_code'];
    }
    echo json_encode($names);
  }






  /*aakash code end*/

    // Memo Controller Code Start
       
        public function create_memo()
        {
  $data['employees'] = $this->admin_model->all_rows('employee_itgs'); 
    $data['departments'] = $this->admin_model->get_data('departments');

    $this->load->view('admin2/header');
    $this->load->view('admin2/create_memo',$data);
    $this->load->view('admin2/footer');          
        }

        public function insert_memo()
        {


        move_uploaded_file($_FILES['file']['tmp_name'], "./uploads/memo/".$_FILES['file']['name']);
        
        if ($_SESSION['login_id']) {
           $user_id=$_SESSION['login_id'];
        }
          $data=array(
    'departmentID'=>$this->input->post('department'),
    'date_time'=>$this->input->post('assign_date'),
    'due_date'=>$this->input->post('due_date'),
    'priority'=>$this->input->post('priority'),
    'subject'=>$this->input->post('subject'),
    'description'=>$this->input->post('description'),
    'title'=>$this->input->post('title'),
    'file'=>$_FILES['file']['name'] ? $_FILES['file']['name'] : '',
    'user_id'=> $user_id
              );

        
      $this->db->insert('memo',$data);

      if($memoID=$this->db->insert_id()){
          

           $url="view_memo/".$memoID;

    if($_POST['employes']){
         for ($i = 0; $i < count($_POST['employes']); $i++) {
    
     
     $memo_user=array(
         'memoID'=>$memoID,
         'userID'=>$_POST['employes'][$i],
         'date_time'=>date('d-m-Y h:i:s a')

     );


     $this->admin_model->insert_data("memo_user",$memo_user);

     $notification = array(
        'user_id'=>$_POST['employes'][$i],
        'user_type'=>'Memo',
        'title' => $_POST['title'],
        'message'=>date('Y-m-d'),
        'url'=>'admin/'.$url
      );
     $this->admin_model->insert_data("notifications",$notification);

           }
    }
    else{
     $notification = array(
        'user_id'=>$this->input->post('department'),
        'user_type'=>'Memo',
        'title' => $_POST['title'],
        'message'=>date('Y-m-d'),
        'url'=>'admin/'.$url
      );
       $this->admin_model->insert_data("notifications",$notification);
    }

      }

      redirect(base_url().'admin/view_memo');

        }

        final public function view_memo($id=null)
        {
          $data['title']="View Memo";

        if ($_SESSION['login_id']) {
           $user_id=$_SESSION['login_id'];
        }
          if ($id) {
            $this->db->update('memo_user',['is_read'=>1],['userID'=>$_SESSION['id'] !="" ? $_SESSION['id'] : $_SESSION['id'] ]);
            $this->db->update('notifications',['view'=>0],['user_id'=>$_SESSION['id'] !="" ? $_SESSION['id'] : $_SESSION['id'] ]);

            $data['memos']=$this->db->query("select memo.*,login.login_name as assigned_by
             from memo inner JOIN login on (login.login_id=memo.user_id) left join memo_user on (memo_user.memoID=memo.id) where memo.id =".$id)->result_array();
          }else{
            $where="";

            if ($_SESSION['id']!="") {
              $where="where memo_user.userID=".$_SESSION['id'];
            }else if($_SESSION['login_id']!=""){
              $where="where memo.user_id=".$_SESSION['login_id'];
            }
            $data['memos']=$this->db->query("select memo.*,login.login_name as assigned_by
             from memo inner JOIN login on (login.login_id=memo.user_id) left join memo_user on (memo_user.memoID=memo.id)  ".$where." or memo.departmentID='all' GROUP BY memo.id ")->result_array();
          }
            $this->load->view('admin2/header',$data);
            $this->load->view('admin2/view_memo');
            $this->load->view('admin2/footer');          
          
        }


        function delete_memo($id)
        {
          $this->db->delete('memo',['id'=>$id]);
          redirect(base_url().'admin/view_memo');
        }

        public function memo_detail($memoID)
        {
            $this->load->view('admin2/header',$data);
            $this->load->view('admin2/view_memo_detail');
            $this->load->view('admin2/footer'); 
        }


        public function get_memo_detail()
        {
          $sql="select memo.*,employee_itgs.employee_name,memo_user.userID,memo_user.is_read from memo 
          inner join memo_user on (memo.id=memo_user.memoID)
          inner join employee_itgs on (employee_itgs.id=memo_user.userID) where memo_user.memoID=".$_POST['memoID'];
          $users=$this->db->query($sql)->result_array();
          foreach ($users as $user) {
            echo '
            <tr>
              <td>'.$user['title'].'</td>
              <td>'.$_POST['assigned_by'].'</td>
              <td>'.$user['employee_name'].'</td>
              <td>'.$user['date_time'].'</td>
              <td>'.$user['priority'].'</td>';
              echo '<td>';
             if ($user['is_read'] == 0) {
                echo "Not Seen";
             }else{
              echo "Seen";
             }
             echo '</td>';
              echo ' </tr>';
          }
          
        }
    // Memo Controller Code End

}
