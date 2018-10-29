<?php
/**
*
*/
class admin_model extends CI_Model
{

   public function getStudentsWhereLike($field, $search)
   {
    $query = $this->db->like($field, $search)->orderBy('registered_at')->get('students');
    return $query->result();
   }
    public function all_rows($table)
	{
		return $this->db->get($table)->result_array();
	}
	public function get_row($table,$where)
	{
		return $this->db->get_where($table,$where)->row_array();
	}
	public function login($data)
	{
		return $this->db->get_where('login',$data)->row_array();
	}
	public function insert($table,$data)
	{
		$this->db->insert($table,$data);
		return $this->db->insert_id();
	}
	public function raw_query($query,$fetch)
	{
        if ($fetch==1) {
		return $this->db->query($query)->result_array();
        }
        return $this->db->query($raw_query);

	}


	public function view_requests_nr()
	{
		return $this->db->query("select lead.*,clients.*,login.login_name,login.login_id from lead inner join clients on(lead.clientID=clients.clientID) inner join login on(login.login_id=lead.employeeID) where lead.is_paid=0")->result_array();
	}

	public function insert_recruitment($table,$data)
	{
		$this->db->insert($table,$data);
		return $this->db->insert_id();
	}

	public function update($table,$data,$where)
	{
		$this->db->update($table,$data,$where);
		return $this->db->affected_rows();
	}


	public function requests($data)
	{
		return $this->db->get_where('lead',$data)->result_array();
	}

	public function edit_request($data)
	{
		return $this->db->query("select lead.*,clients.*,login.login_name,login.login_id from lead inner join clients on(lead.clientID=clients.clientID) inner join login on(login.login_id=lead.employeeID) where lead.leadID='".$data['leadID']."'")->row_array();
	}

	public function edit_rfq($data)
	{
		return $this->db->query("select rfq.*,clients.*,login.login_name,login.login_id from rfq inner join clients on(rfq.clientID=clients.clientID) inner join login on(login.login_id=rfq.employeeID) where rfq.rfqID='".$data['rfqID']."'")->row_array();
	}

	public function insert_request($data)
	{
		return $this->db->insert('lead',$data);
	}

	public function insert_rfq($data)
	{
		return $this->db->insert('rfq',$data);
	}

	public function view_requests()
	{
		return $this->db->query("select lead.*,clients.*,login.login_name,login.login_id from lead inner join clients on(lead.clientID=clients.clientID) inner join login on(login.login_id=lead.employeeID)")->result_array();
	}
	public function view_customers_requests($data)
	{
		return $this->db->query("select lead.*,clients.*,login.login_name,login.login_id from lead inner join clients on(lead.clientID=clients.clientID) inner join login on(login.login_id=lead.employeeID) where clients.clientID='".$data."'")->result_array();
	}
	public function view_rfq()
	{
		return $this->db->query("select rfq.*,clients.*,login.login_name,login.login_id from rfq inner join clients on(rfq.clientID=clients.clientID) inner join login on(login.login_id=rfq.employeeID)")->result_array();
	}

	public function view_employee()
	{
		return $this->db->get('login')->result_array();
	}

/* public function view_recruitment($data)
{
	return this->db->get_where('recruitment')->result_array();
}
*/	public function insert_quote($data)
	{
		return $this->db->insert('conversation',$data);
	}
	public function insert_employee($data)
	{
		return $this->db->insert('login',$data);
	}
	public function replies($data)
	{
		// return $this->db->get_where('conversation',$data)->result_array();
	   return $this->db->query(
	   	'select login.*,conversation.* from login inner join conversation on(conversation.employeeID=login.login_id) where conversation.requestID='.$data .' order by conversation.conversationID DESC')->result_array();
	}

	public function change_status($data,$where)
	{
		return $this->db->update('lead',$data,$where);
	}

	// start working umer
		public function get_case($where)
	{
		return $this->db->query("SELECT client.*, case_request.*,count(client_chat.id) as chat from case_request INNER JOIN client ON case_request.client_id = client.client_id left join client_chat on client_chat.case_id = case_request.id and is_view = 0 and type = 'client' where case_request.client_id='".$where."' and case_request.case_status!=0 group by case_request.id order by case_request.id DESC")->result_array();
	}
	public function get_modify_case($where)
	{
		return $this->db->query("SELECT client.*, case_request.* from case_request INNER JOIN client ON case_request.client_id = client.client_id where case_request.client_id='".$where."'")->result_array();
	}
	public function get_scope($where)
	{
		return $this->db->query("SELECT * FROM assign_client_services where client_id ='".$where."'")->result_array();
	}
	// end working umer

	/* usama code start */
	public function insert_data($table,$data)
	{
		$this->db->insert($table,$data);
		return $this->db->insert_id();
	}
	public function select_where($table,$where)
	{
		return $this->db->get_where($table,$where)->result_array();
	}

	public function select_where_row($table,$where)
	{
		return $this->db->get_where($table,$where)->row_array();
	}

	public function update_data($table,$data,$where)
	{
		return $this->db->update($table,$data,$where);
	}

	/*public function select_cv($start_date,$end_date)
	{
		$this->db->select('*');
		$this->db->from('recruitment');
		$this->db->where('create_date >=', $start_date);
		$this->db->where('create_date <=', $end_date);
		$data = $this->db->get()->result_array();
		return $data;
	}*/

	public function select_cv($where)
	{
		//print_r($where);die;
		$data = $this->db->query('SELECT r.* FROM recruitment r LEFT JOIN recruitment_experiences re on r.id = re.recruitment_id LEFT JOIN recruitment_qualifications rq on r.id = rq.recruitment_id WHERE '.implode(' AND ', $where).' GROUP BY r.id')->result_array();
		return $data;
	}

	public function select_cv_ids($ids)
	{
		//print_r($ids);die;
		$data = $this->db->query('SELECT * FROM recruitment WHERE id IN ('. implode(',', $ids) .')')->result_array();
		//$data = $this->db->get()->result_array();
		return $data;
	}

	public function get_data($table)
	{
		return $this->db->get($table)->result_array();
	}

	public function get_interviews($id=null)
	{
		// $this->db->select('r.*,i.*,i.id as iid,i.type,i.date,i.time');
		// $this->db->from('recruitment r');
		// $this->db->join('interviews i', 'r.id = i.recruitment_id');
		// $this->db->group_by('r.id');
  //       $this->db->order_by('i.id', 'desc');
		if ($id != null) {
			$where = 'where i.interviewer = '.$id;
		}
		else{
			$where = '';
		}
		return $this->db->query('SELECT i.*, r.*,  i.id AS iid, count(c.id) as cid, count(p.id) as pid, count(ia.id) as total_interview FROM recruitment r INNER JOIN interviews i ON i.id = (SELECT i.id FROM interviews i WHERE i.recruitment_id = r.id ORDER BY id DESC LIMIT 1) left join pre_interview p on p.interview_id = i.id left join call_interview c on c.interview_id = i.id left join interviews ia on ia.recruitment_id = r.id '.$where.' group by r.id')->result_array();
	}

	public function get_interviews_byid()
	{
		$this->db->select('r.*, count(ci.id) AS cid, count(pi.id) AS pid');
		$this->db->from('recruitment r');
		$this->db->join('interviews i', 'r.id = i.recruitment_id');
		$this->db->join('call_interview ci', 'ci.interview_id = i.id', 'left');
		$this->db->join('pre_interview pi', 'pi.interview_id = i.id', 'left');
		$this->db->group_by('r.id');
        $this->db->order_by('r.id', 'desc');
		return $this->db->get()->result_array();
	}

	public function delete_data($table,$where)
	{
		$this->db->delete($table,$where); 

	}

	public function call_interview($id)
	{
		$this->db->select('ci.*');
		$this->db->from('interviews i');
		$this->db->join('call_interview ci', 'ci.interview_id = i.id');
		$this->db->where('i.type != ', 'in per');
		$this->db->where('i.recruitment_id', $id);
		return $this->db->get()->result_array();
	}

	public function per_interview($id)
	{
		$this->db->select('ci.*');
		$this->db->from('interviews i');
		$this->db->join('pre_interview ci', 'ci.interview_id = i.id');
		$this->db->where('i.type ', 'in per');
		$this->db->where('i.recruitment_id', $id);
		return $this->db->get()->result_array();
	}

	public function call_interview1($id)
	{
		$this->db->select('ci.*,e.employee_name');
		$this->db->from('interviews i');
		$this->db->join('call_interview ci', 'ci.interview_id = i.id');
		$this->db->join('employee_itgs e', 'ci.employee_id = e.id', 'left');
		$this->db->where('i.type != ', 'in per');
		$this->db->where('i.recruitment_id', $id);
		return $this->db->get()->result_array();
	}

	public function per_interview1($id)
	{
		$this->db->select('ci.*,e.employee_name');
		$this->db->from('interviews i');
		$this->db->join('pre_interview ci', 'ci.interview_id = i.id');
		$this->db->join('employee_itgs e', 'ci.employee_id = e.id', 'left');
		$this->db->where('i.type ', 'in per');
		$this->db->where('i.recruitment_id', $id);
		return $this->db->get()->result_array();
	}

	public function view_emp_detail($id)
	{
		$this->db->select('*,e.id')
				 ->from('employee e')
				 ->join('employee_address ea', 'ea.employee_id=e.id')
				 ->join('employee_detail ed', 'ed.employee_id=e.id')
				 ->join('employee_other eo', 'eo.employee_id=e.id')
				 ->where('e.id', $id);
		return $this->db->get()->result_array();
	}

	public function get_department()
	{
		$this->db->select('d.*,dp.name as parent_name')
				 ->from('departments d')
				 ->join('departments dp', 'd.parent_id=dp.id', 'left');
		return $this->db->get()->result_array();
	}
	public function get_department_id($id)
	{
		$this->db->select('d.*,dp.name as parent_name')
				 ->from('departments d')
				 ->join('departments dp', 'd.parent_id=dp.id', 'left')
				 ->where('d.id', $id);
		return $this->db->get()->row_array();
	}

	public function case_reports($id)
	{
		$this->db->select('*')
				 ->from('create_report_activity cr')
				 ->join('case_request c', 'cr.case_id = c.id')
				 ->join("subject_case s", 'cr.subject_id = s.id')
				 ->join("scope_of_work sw", 'cr.activity_id = sw.id')
				 ->where('cr.case_id', $id);
		return $this->db->get()->result_array();
	}

	public function case_subjects($case_id)
	{
		$this->db->select('s.*,ct.team_lead_id')
				 ->from('subject_case s')
				 ->join('case_team ct', 'ct.subject_id = s.id', 'left')
				 ->where('s.case_id', $case_id);
		return $this->db->get()->result_array();
	}

	public function cash_report($start_date=null,$end_date=null)
	{
		$this->db->select('f.*,SUM(f.official_fee) as official_fee, SUM(f.vendor_changes) as vendor_changes, SUM(f.easy_paisa_charges) as easy_paisa_charges, SUM(f.mobi_cash_charges) as mobi_cash_charges, SUM(f.bank_commission) as bank_commission, SUM(f.postage_courier) as postage_courier, SUM(f.other_charges) as other_charges')
				 ->from('fund_request_activity f')
				 ->where('f.is_approved', '1')
				 ->where('f.mode_of_payment', 'Cash');
		if ($start_date != null) {
			$this->db->where('f.date_time >=', $start_date);
		}
		if ($end_date != null) {
			$this->db->where('f.date_time <=', $end_date);
		}
		$this->db->group_by('f.date_time');
		return $this->db->get()->result_array();
	}

	public function jv_report($start_date=null,$end_date=null)
	{
		$this->db->select('f.*,SUM(f.charges) as charges, DATE(f.created_at) as created_at')
				 ->from('case_fund_request f')
				 ->where('f.is_approve', '1');
				 //->where('f.mode_of_payment', 'Cash');
		if ($start_date != null) {
			$this->db->where('DATE(f.created_at) >=', $start_date);
		}
		if ($end_date != null) {
			$this->db->where('DATE(f.created_at) <=', $end_date);
		}
		$this->db->group_by('DATE(f.created_at)');
		return $this->db->get()->result_array();
	}

	public function cash_client_report($start_date=null,$end_date=null)
	{
		$this->db->select('f.*,SUM(f.official_fee) as official_fee, SUM(f.vendor_changes) as vendor_changes, SUM(f.easy_paisa_charges) as easy_paisa_charges, SUM(f.mobi_cash_charges) as mobi_cash_charges, SUM(f.bank_commission) as bank_commission, SUM(f.postage_courier) as postage_courier, SUM(f.other_charges) as other_charges,count(c.id) as ids, cl.client_name')
				 ->from('fund_request_activity f')
				 ->join('case_request c', 'c.id = f.case_id')
				 ->join('client cl', 'cl.client_id = c.client_id')
				 ->where('f.is_approved', '1')
				 ->where('f.mode_of_payment', 'Cash');
		if ($start_date != null) {
			$this->db->where('f.date_time >=', $start_date);
		}
		if ($end_date != null) {
			$this->db->where('f.date_time <=', $end_date);
		}
		$this->db->group_by('cl.client_id');
		return $this->db->get()->result_array();
	}

	public function cash_service_report($start_date=null,$end_date=null)
	{
		$this->db->select('f.*,SUM(f.official_fee) as official_fee, SUM(f.vendor_changes) as vendor_changes, SUM(f.easy_paisa_charges) as easy_paisa_charges, SUM(f.mobi_cash_charges) as mobi_cash_charges, SUM(f.bank_commission) as bank_commission, SUM(f.postage_courier) as postage_courier, SUM(f.other_charges) as other_charges, s.scope_name, count(f.activity_id) as ids')
				 ->from('fund_request_activity f')
				 ->join('scope_of_work s', 's.id = f.activity_id')
				 ->where('f.is_approved', '1')
				 ->where('f.mode_of_payment', 'Cash');
		if ($start_date != null) {
			$this->db->where('f.date_time >=', $start_date);
		}
		if ($end_date != null) {
			$this->db->where('f.date_time <=', $end_date);
		}
		$this->db->group_by('f.activity_id');
		return $this->db->get()->result_array();
	}

	public function payorder_report($start_date=null,$end_date=null)
	{
		$this->db->select('f.*,SUM(f.official_fee) as official_fee, SUM(f.vendor_changes) as vendor_changes, SUM(f.easy_paisa_charges) as easy_paisa_charges, SUM(f.mobi_cash_charges) as mobi_cash_charges, SUM(f.bank_commission) as bank_commission, SUM(f.postage_courier) as postage_courier, SUM(f.other_charges) as other_charges')
				 ->from('fund_request_activity f')
				 ->where('f.is_approved', '1')
				 ->where('f.mode_of_payment', 'Payorder');
		if ($start_date != null) {
			$this->db->where('f.date_time >=', $start_date);
		}
		if ($end_date != null) {
			$this->db->where('f.date_time <=', $end_date);
		}
		$this->db->group_by('f.date_time');
		return $this->db->get()->result_array();
	}

	public function select_leave($id)
	{
		$this->db->select('l.*,e.employee_name,sum(ed.sick_leave + ed.casual_leave + ed.annual_leave) as total_leaves, ed.sick_leave,ed.casual_leave,ed.annual_leave')
				 ->from('leave_applications l')
				 ->join('employee_itgs e', 'e.employee_id = l.employee_id')
				 ->join('employee_detail ed', 'e.employee_id = ed.employee_code', 'left')
				 ->where('e.employee_id', $id)
				 ->group_by('l.id');
		return $this->db->get()->result_array();
	}

	public function select_leave_head($role,$department)
	{
		$this->db->select('l.*,e.employee_name')
				 ->from('leave_applications l')
				 ->join('employee_itgs e', 'e.employee_id = l.employee_id')
				 ->join('employee_itgs ep', 'ep.department = e.department', 'left')
				 ->where('ep.role', $role)
				 ->where('ep.department', $department);
		return $this->db->get()->result_array();
	}

	public function select_leave_hr()
	{
		$this->db->select('l.*,e.employee_name,sum(ed.sick_leave + ed.casual_leave + ed.annual_leave) as leaves')
				 ->from('leave_applications l')
				 ->join('employee_itgs e', 'e.employee_id = l.employee_id')
				 ->join('employee_itgs ep', 'ep.department = e.department', 'left')
				 ->join('employee_detail ed', 'e.employee_id = ed.employee_code', 'left')
				 ->where('l.is_approve >=', '2')
				 ->group_by('l.id');
		return $this->db->get()->result_array();
	}

	public function get_employee_with_leaves()
	{
		$this->db->select('e.*,sum(ed.sick_leave + ed.casual_leave + ed.annual_leave) as total_leaves')
				 ->from('employee_itgs e')
				 ->join('employee_detail ed', 'e.employee_id = ed.employee_code', 'left')
				 ->group_by('e.id');
		return $this->db->get()->result_array();
	}

	public function select_leave_finance()
	{
		$this->db->select('l.*,e.employee_name')
				 ->from('leave_applications l')
				 ->join('employee_itgs e', 'e.employee_id = l.employee_id')
				 ->where('l.is_approve >=', '5')
				 ->group_by('l.id');
		return $this->db->get()->result_array();
	}

	public function all_visiting_card($id=null)
	{
		$this->db->select('v.*,e.employee_name')
				 ->from('visiting_card_forms v')
				 ->join('employee_itgs e', 'e.employee_id = v.employee_id');
		if ($id != null) {
			$this->db->where('v.employee_id', $id);
		}
		$this->db->group_by('v.id');
		return $this->db->get()->result_array();
	}

	public function all_loan_application($id=null,$status=null)
	{
		$this->db->select('l.*,e.employee_name')
				 ->from('loan_applications l')
				 ->join('employee_itgs e', 'e.employee_id = l.employee_id');
		if ($id != null) {
			$this->db->where('l.employee_id', $id);
		}
		if ($status != null) {
			$this->db->where('l.is_approve', $status);
		}
		$this->db->group_by('l.id');
		return $this->db->get()->result_array();
	}

	public function all_salary_advance($id=null,$status=null)
	{
		$this->db->select('l.*,e.employee_name')
				 ->from('salary_advance_forms l')
				 ->join('employee_itgs e', 'e.employee_id = l.employee_id');
		if ($id != null) {
			$this->db->where('l.employee_id', $id);
		}
		if ($status != null) {
			$this->db->where('l.is_approve', $status);
		}
		$this->db->group_by('l.id');
		return $this->db->get()->result_array();
	}

	public function all_expance_form($id=null,$status=null)
	{
		$this->db->select('l.*,e.employee_name')
				 ->from('expense_forms l')
				 ->join('employee_itgs e', 'e.employee_id = l.employee_id');
		if ($id != null) {
			$this->db->where('l.employee_id', $id);
		}
		if ($status != null) {
			$this->db->where('l.is_approve', $status);
		}
		$this->db->group_by('l.id');
		return $this->db->get()->result_array();
	}

	public function select_expance_head($role,$department)
	{
		$this->db->select('l.*,e.employee_name')
				 ->from('expense_forms l')
				 ->join('employee_itgs e', 'e.employee_id = l.employee_id')
				 ->join('employee_itgs ep', 'ep.department = e.department')
				 ->where('ep.role', $role)
				 ->where('ep.department', $department);
		return $this->db->get()->result_array();
	}

	public function select_expance_admin()
	{
		$this->db->select('l.*,e.employee_name')
				 ->from('expense_forms l')
				 ->join('employee_itgs e', 'e.employee_id = l.employee_id')
				 ->where('l.is_approve >=', '1')
				 ->where('l.is_approve !=', '2')
				 ->group_by('l.id');
		return $this->db->get()->result_array();
	}

	public function all_complant_form($id=null,$status=null)
	{
		$this->db->select('l.*,e.employee_name')
				 ->from('complaint_forms l')
				 ->join('employee_itgs e', 'e.employee_id = l.employee_id');
		if ($id != null) {
			$this->db->where('l.employee_id', $id);
		}
		if ($status != null) {
			$this->db->where('l.send', $status);
		}
		$this->db->group_by('l.id');
		return $this->db->get()->result_array();
	}

	public function get_employee_email($id)
	{
		$this->db->select('e.login_name,e.id')
				 ->from('client c')
				 ->join('employee_itgs e', 'e.id = c.employee_id')
				 ->where('c.client_id', $id);
		return $this->db->get()->result_array();
	}

	public function get_client_email($id)
	{
		$this->db->select('e.login_name,c.email,c.notification_email')
				 ->from('case_request cr')
				 ->join('client c', 'c.client_id = cr.client_id')
				 ->join('employee_itgs e', 'e.id = c.employee_id')
				 ->where('cr.id', $id);
		return $this->db->get()->result_array();
	}

	public function get_latters()
	{
		$this->db->select('o.*,r.first_name,count(e.id) as eid')
				 ->from('offer_latter o')
				 ->join('recruitment r', 'r.id = o.recruitment_id')
				 ->join('employee e', 'e.recruitment_id = o.recruitment_id', 'left')
				 ->group_by('o.id');
		return $this->db->get()->result_array();
	}

	public function get_employee_all()
	{
		$this->db->select('e.*,count(a.id) as aid,ed.employee_code, count(ej.id) as job_kpi,ed.job_type,a.id as appoint_id')
				 ->from('employee e')
				 ->join('employee_detail ed', 'ed.employee_id = e.id','left')
				 ->join('appointments a', 'a.recruitment_id = e.id','left')
				 ->join('employee_job_kpi ej', 'ej.employee_id = ed.employee_code','left')
				 ->where('active', '0')
				 ->group_by('e.id');
		return $this->db->get()->result_array();
	}

	public function get_employee_app($id)
	{
		$this->db->select('e.full_name,ed.*,d.name')
				 ->from('employee e')
				 ->join('employee_detail ed', 'ed.employee_id = e.id')
				 ->join('departments d', 'd.id = ed.employee_department', 'left')
				 ->where('e.id', $id);
		return $this->db->get()->row_array();
	}

	public function view_courses()
	{
		$this->db->select('c.*,e.employee_name')
				 ->from('courses c')
				 ->join('employee_itgs e', 'e.id = c.teacher_id', 'left')
				 ->where('c.status', '0');
		return $this->db->get()->result_array();
	}

	public function complete_courses()
	{
		$this->db->select('c.*,e.employee_name')
				 ->from('courses c')
				 ->join('employee_itgs e', 'e.id = c.teacher_id', 'left')
				 ->where('c.status', '1');
		return $this->db->get()->result_array();
	}

	public function case_rep($id)
	{
		$this->db->select('*')
				 ->from('case_aplicant ca')
				 ->join('case_request c', 'ca.case_id = c.id')
				 ->join("subject_case s", 'ca.assigned_subject_id = s.id')
				 ->where('ca.case_id', $id);
		return $this->db->get()->result_array();
	}

	public function get_image($id)
	{
		//$id = implode(',', $id);
		$this->db->select('*')
				 ->from('subject_dummy_attechment')
				 ->where_in('id', $id);
		return $this->db->get()->result_array();
	}

	public function get_image_link($id)
	{
		//$id = implode(',', $id);
		$this->db->select('file')
				 ->from('subject_dummy_attechment')
				 ->where_in('id', $id);
		return $this->db->get()->result_array();
	}

	public function get_activity_image($id)
	{
		//$id = implode(',', $id);
		$this->db->select('*')
				 ->from('activity_dummy_attechment')
				 ->where_in('id', $id);
		return $this->db->get()->result_array();
	}

	public function background_report($id)
	{
		$this->db->select('ca.*,s.subject_name as subject')
				 ->from('case_aplicant ca')
				 ->join('case_request c', 'c.id = ca.case_id')
				 ->join('subject_case s', 's.id = ca.assigned_subject_id')
				 ->where('ca.case_id', $id);
		return $this->db->get()->result_array();
	}

	public function education_report($id)
	{
		$this->db->select('e.*, a.member_id,s.scope_name')
				 ->from('education_check e')
				 ->join('assign_activity_to_user a', 'a.id = e.assign_activity_id')
				 ->join('scope_of_work s','a.activity_id = s.id')
				 ->where('a.case_id', $id);
		return $this->db->get()->result_array();
	}

	public function nadra_report($id)
	{
		$this->db->select('e.*, a.member_id,s.scope_name')
				 ->from('nadra_verification e')
				 ->join('assign_activity_to_user a', 'a.id = e.assign_activity_id')
				 ->join('scope_of_work s','a.activity_id = s.id')
				 ->where('a.case_id', $id);
		return $this->db->get()->result_array();
	}

	public function fbr_report($id)
	{
		$this->db->select('e.*, a.member_id,s.scope_name')
				 ->from('fbr_record e')
				 ->join('assign_activity_to_user a', 'a.id = e.assign_activity_id')
				 ->join('scope_of_work s','a.activity_id = s.id')
				 ->where('a.case_id', $id);
		return $this->db->get()->result_array();
	}

	public function regulatory_report($id)
	{
		$this->db->select('e.*, a.member_id,s.scope_name')
				 ->from('regulatory_checks e')
				 ->join('assign_activity_to_user a', 'a.id = e.assign_activity_id')
				 ->join('scope_of_work s','a.activity_id = s.id')
				 ->where('a.case_id', $id);
		return $this->db->get()->result_array();
	}

	public function litigation_report($id)
	{
		$this->db->select('e.*, a.member_id,s.scope_name')
				 ->from('litigation_checks e')
				 ->join('assign_activity_to_user a', 'a.id = e.assign_activity_id')
				 ->join('scope_of_work s','a.activity_id = s.id')
				 ->where('a.case_id', $id);
		return $this->db->get()->result_array();
	}

	public function crimnal_report($id)
	{
		$this->db->select('e.*, a.member_id,s.scope_name')
				 ->from('crimnal_check e')
				 ->join('assign_activity_to_user a', 'a.id = e.assign_activity_id')
				 ->join('scope_of_work s','a.activity_id = s.id')
				 ->where('a.case_id', $id);
		return $this->db->get()->result_array();
	}

	public function past_report($id)
	{
		$this->db->select('e.*, a.member_id,s.scope_name')
				 ->from('past_employment e')
				 ->join('assign_activity_to_user a', 'a.id = e.assign_activity_id')
				 ->join('scope_of_work s','a.activity_id = s.id')
				 ->where('a.case_id', $id);
		return $this->db->get()->result_array();
	}

	public function customized_report($id)
	{
		$this->db->select('e.*, a.member_id,s.scope_name')
				 ->from('customized_report e')
				 ->join('assign_activity_to_user a', 'a.id = e.assign_activity_id')
				 ->join('scope_of_work s','a.activity_id = s.id')
				 ->where('a.case_id', $id);
		return $this->db->get()->result_array();
	}

	public function vendor_report($id)
	{
		$this->db->select('e.*,a.activity_id,s.scope_name')
				 ->from('vendor_report e')
				 ->join('assign_vendor_request a', 'a.id = e.assign_vendor_id')
				 ->join('scope_of_work s','a.activity_id = s.id')
				 ->where('a.case_id', $id);
		return $this->db->get()->result_array();
	}

	public function get_case_fund($status = null)
	{
		$this->db->select('c.*, e.employee_name, v.employee_name as vendor, cr.client_reference, cr.reference_code,cr.id as case_id,sw.scope_name,s.subject_name, ss.name as sub_category');
		$this->db->from('case_fund_request c');
		$this->db->join('case_request cr', 'cr.id = c.case_id');
		$this->db->join('employee_itgs e', 'e.id = c.employee_id');
		$this->db->join('employee_itgs v', 'v.id = c.vendor_id');
		$this->db->join('subject_case s', 's.id = c.subject_id','left');
		$this->db->join('scope_of_work sw', 'sw.id = c.activity_id','left');
		$this->db->join('sub_scope ss', 'ss.id = c.sub_scope_id','left');
		if ($status != null) {
			$this->db->where('is_approve', $status);
		}
		return $this->db->get()->result_array();
	}

	public function get_request_employee()
	{
		$this->db->select('e.*,count(ei.id) as eid')
				 ->from('employee e')
				 ->join('employee_itgs ei', 'ei.request_id = e.id', 'left')
				 ->group_by('e.id')
				 ->having("eid = 0", null, false);
		return $this->db->get()->result_array();
	}

	public function get_employee_id($id)
	{
		$this->db->select('ed.*,e.full_name,d.name as department')
				 ->from('employee e')
				 ->join('employee_detail ed', 'ed.employee_id = e.id')
				 ->join('departments d', 'd.id = ed.employee_department')
				 ->where('e.id', $id);
		return $this->db->get()->row_array();		 
	}

	public function get_case_analytics($first,$last,$id=null)
	{
		$this->db->select('case_status, DATE(created_at) as created_at, id');
		$this->db->from('case_request');
		$this->db->where('created_at >=', DATE($first));
		$this->db->where('created_at <=', DATE($last));
		$this->db->where('case_status !=', '0');
		if ($id != null) {
			$this->db->where('client_id', $id);
		}
		$this->db->order_by('DATE(created_at)');
		//$this->db->group_by(array("DATE(created_at)", "case_status"));
		return $this->db->get()->result_array();
	}

	public function get_case_team_analytics($first,$last,$id=null)
	{
		$this->db->select('cr.case_status, DATE(cr.created_at) as created_at, cr.id, cr.case_due_date, cre.date_time');
		$this->db->from('case_request cr');
		$this->db->join('case_report cre', 'cr.id = cre.case_id', 'left');
		$this->db->where('cr.created_at >=', DATE($first));
		$this->db->where('cr.created_at <=', DATE($last));
		$this->db->where('cr.case_status !=', '0');
		if ($id != null) {
			$this->db->join('client c', 'c.client_id = cr.client_id', 'left');
			$this->db->join('case_team ct', 'ct.case_id = cr.id', 'left');
			$this->db->where('(c.employee_id = '.$id.' or ct.team_lead_id = '.$id.')');
			//$this->db->or_where('ct.team_lead_id', $id);
		}
		$this->db->order_by('DATE(cr.created_at)');
		$this->db->group_by('cr.id');
		return $this->db->get()->result_array();
	}

	public function get_vendor_analytics($first,$last,$id=null)
	{
		$this->db->select('cr.case_status, DATE(a.date_time) as created_at, cr.id, a.is_report, a.report_time');
		$this->db->from('assign_vendor_request a');
		$this->db->join('case_request cr', 'cr.id = a.case_id');
		$this->db->where('a.date_time >=', DATE($first));
		$this->db->where('a.date_time <=', DATE($last));
		$this->db->where('cr.case_status !=', '0');
		if ($id != null && $id != 'null') {
			$this->db->where('a.vendor_id', $id);
		}
		$this->db->order_by('DATE(a.date_time)');
		$this->db->group_by('a.id');
		return $this->db->get()->result_array();
	}

	public function get_team_analytics($first,$last,$id=null)
	{
		$this->db->select('cr.case_status, DATE(a.date_time) as created_at, cr.id, a.is_report, a.report_time, a.activity_id');
		$this->db->from('assign_activity_to_user a');
		$this->db->join('case_request cr', 'cr.id = a.case_id');
		$this->db->where('a.date_time >=', DATE($first));
		$this->db->where('a.date_time <=', DATE($last));
		$this->db->where('cr.case_status !=', '0');
		if ($id != null && $id != 'null') {
			$this->db->where('a.member_id', $id);
		}
		$this->db->order_by('DATE(a.date_time)');
		$this->db->group_by('a.id');
		return $this->db->get()->result_array();
	}

	public function get_fund_analytics($first,$last,$id=null)
	{
		$this->db->select('s.scope_name, sum(f.official_fee+f.vendor_changes+f.easy_paisa_charges+f.mobi_cash_charges+f.bank_commission+f.postage_courier+f.other_charges) as total');
		$this->db->from('fund_request_activity f');
		$this->db->join('scope_of_work s', 's.id = f.activity_id');
		$this->db->where('f.date_time >=', DATE($first));
		$this->db->where('f.date_time <=', DATE($last));
		$this->db->group_by('f.activity_id');
		return $this->db->get()->result_array();
	}

	public function get_employee_salary($first,$last)
	{
		$this->db->select('ed.*, e.employee_name, DATE(e.created_at) as join_date,e.employee_id, e.id, group_concat(s.salary separator ",") as increment')
				 ->from('employee_itgs e')
				 ->join('employee_detail ed', 'e.employee_id = ed.employee_code', 'left')
				 ->join('salary_increment s', 's.employee_id = e.employee_id and DATE(s.created_at) <= DATE("'.$last.'")', 'left')
				 ->group_by('e.id');
		return $this->db->get()->result_array();	 
	}

	public function get_single_employee_salary($id)
	{
		$this->db->select('ed.*, e.employee_name, DATE(e.created_at) as join_date,e.employee_id, e.id,s.amount as paid_salary, s.date')
				 ->from('employee_itgs e')
				 ->join('employee_detail ed', 'e.employee_id = ed.employee_code', 'left')
				 ->join('salary s', 's.employee_id = e.id');
		$this->db->where('e.id', $id);
		//$this->db->group_by('e.id');
		return $this->db->get()->result_array();	 
	}

	public function get_employee_leave($first,$last,$id)
	{
		$this->db->select('sum(l.total_days) as days')
				 ->from('employee_itgs e')
				 ->join('employee_detail ed', 'e.employee_id = ed.employee_code', 'left')
				 ->join('leave_applications l', 'l.employee_id = e.employee_id', 'left')
				 ->where('l.start_date >=', DATE($first))
				 ->where('l.start_date <=', DATE($last))
				 ->where('e.employee_id', $id)
				 ->where('l.is_approve', '4')
				 ->group_by('e.id');
		return $this->db->get()->result_array();	 
	}

	public function get_employee_leave_all($first,$last,$id)
	{
		// $this->db->select('sum(l.total_days) as days')
		// 		 ->from('employee_itgs e')
		// 		 ->join('leave_applications l', 'l.employee_id = e.employee_id', 'left')
		// 		 ->where('l.start_date >=', DATE($first))
		// 		 ->where('l.start_date <=', DATE($last))
		// 		 ->where('e.employee_id', $id)
		// 		 ->where('l.is_approve', '4')
		// 		 ->or_where('l.is_approve', '7')
		// 		 ->group_by('e.id');
		// return $this->db->get()->result_array();	 
		return $this->db->query("SELECT sum(l.total_days) as days FROM employee_itgs e LEFT JOIN leave_applications l ON l.employee_id = e.employee_id WHERE l.start_date >= DATE('".$first."') AND l.start_date <= DATE('".$last."') AND e.employee_id = '".$id."' AND (l.is_approve = '4' OR l.is_approve = '7') GROUP BY e.id")->result_array();
	}

	public function get_employee_current($first,$last,$id)
	{
		$this->db->select('sum(l.total_days) as days, l.nature_of_leave')
				 ->from('employee_itgs e')
				 ->join('leave_applications l', 'l.employee_id = e.employee_id', 'left')
				 ->where('l.start_date >=', DATE($first))
				 ->where('l.start_date <=', DATE($last))
				 ->where('e.employee_id', $id)
				 ->where('l.is_approve', '4')
				 ->group_by('l.nature_of_leave');
		return $this->db->get()->result_array();	 
	}

	public function single_employee_leave($first,$last,$id)
	{
		$this->db->select('sum(l.total_days) as days')
				 ->from('employee_itgs e')
				 ->join('leave_applications l', 'l.employee_id = e.employee_id', 'left')
				 ->where('l.start_date >=', DATE($first))
				 ->where('l.start_date <=', DATE($last))
				 ->where('e.employee_id', $id);
		return $this->db->get()->result_array();	 
	}

	public function single_employee_current($first,$last,$id=null)
	{
		$this->db->select('l.*,e.employee_name,e.employee_id')
				 ->from('employee_itgs e')
				 ->join('leave_applications l', 'l.employee_id = e.employee_id')
				 ->where('l.start_date >=', DATE($first))
				 ->where('l.start_date <=', DATE($last));
		if ($id != null) {
			$this->db->where('e.id', $id);
		}
		$this->db->group_by('l.id');
		return $this->db->get()->result_array();	 
	}

	public function get_employee_deduction($first,$last,$id)
	{
		$this->db->select('sum(l.total_days) as days')
				 ->from('employee_itgs e')
				 ->join('leave_applications l', 'l.employee_id = e.employee_id', 'left')
				 ->where('l.start_date >=', DATE($first))
				 ->where('l.start_date <=', DATE($last))
				 ->where('e.employee_id', $id)
				 ->where('l.is_approve', '7')
				 ->group_by('e.id');
		return $this->db->get()->result_array();	 
	}

	public function get_cm($id)
	{
		$this->db->select('c.employee_id')
				 ->from('client c')
				 ->join('case_request cr', 'cr.client_id = c.client_id')
				 ->where('cr.id', $id);
		return $this->db->get()->result_array();	 
	}

	public function select_kpi($name)
	{
		$this->db->select('*')
				 ->from('job_kpi')
				 ->like('name', $name);
		return $this->db->get()->result_array();	 
	}

	public function get_performance_review($start,$end,$id,$creator)
	{
		$this->db->select('e.*')
				 ->from('employee_itgs e')
				 ->join('performance_reviews p', 'p.employee_id = e.id', 'left')
				 ->where('p.created_at >=', DATE($start))
				 ->where('p.created_at <=', DATE($end))
				 ->where('e.id', $id)
				 ->where('p.creater_id', $creator)
				 ->group_by('e.id');
		return $this->db->get()->result_array();	 
	}

	public function get_reviews($id = null)
	{
		$this->db->select('e.*,p.date, p.id,e.id as eid')
				 ->from('employee_itgs e')
				 ->join('performance_reviews p', 'p.employee_id = e.id')
				 ->group_by(array('e.id', "MONTH('p.date')"));
		if ($id != null) {
			$this->db->where('p.creater_id', $id);
		}
		return $this->db->get()->result_array();
	}

	public function case_complete_invoice()
	{
		return $this->db->query('select s.sid as total_subject, sa.said as total_activity, c.reference_code, cf.case_amount as case_amount, fa.fund_amount as fund_amount, cl.client_name from case_request c join client cl on cl.client_id = c.client_id left join (select COUNT(s.id) as sid, s.case_id from subject_case s group by s.case_id) as s on s.case_id = c.id left join (select COUNT(sa.id) as said, sa.case_id from subject_activities sa group by sa.case_id) as sa on sa.case_id = c.id left join (select SUM(cf.charges) as case_amount, cf.case_id from case_fund_request cf group by cf.case_id) as cf on cf.case_id = c.id left join (select SUM(official_fee+vendor_changes+easy_paisa_charges+mobi_cash_charges+bank_commission+postage_courier+other_charges) as fund_amount, fa.case_id from fund_request_activity fa where is_approved = 1 and is_issue = 1 group by fa.case_id) as fa on fa.case_id = c.id where c.case_status = 5 group by c.id')->result_array();
		// $this->db->select('count(s.id) as total_subject, count(sa.id) as total_activity, c.reference_code')
		// 		 ->from('case_request c')
		// 		 ->join('subject_case s', 's.case_id = c.id')
		// 		 ->join('subject_activities sa', 'sa.case_id = c.id')
		// 		 ->where('c.case_status', '5')
		// 		 ->group_by('c.id');
		// return $this->db->get()->result_array();

	}

	public function case_complete_vendor_invoice()
	{
		return $this->db->query('select s.sid as total_subject, sa.said as total_activity, c.reference_code, cf.case_amount as case_amount from case_request c left join (select COUNT(s.id) as sid, s.case_id from subject_case s group by s.case_id) as s on s.case_id = c.id left join (select COUNT(sa.id) as said, sa.case_id from subject_activities sa group by sa.case_id) as sa on sa.case_id = c.id join (select SUM(cf.charges) as case_amount, cf.case_id from case_fund_request cf group by cf.case_id) as cf on cf.case_id = c.id where c.case_status = 5 group by c.id')->result_array();
	}

	public function get_review($id,$creator=null)
	{
		$this->db->select('REPLACE(pk.type, "_", " ") as type,sum(pk.value) as total,count(pk.id) as item, concat( sum(pk.value) * 100 / (count(pk.id) * 5)) as per')
				 ->from('performance_reviews p')
				 ->join('performance_reviews_key pk', 'p.id = pk.review_id')
				 ->where('p.id', $id)
				 ->group_by(array('pk.type','p.employee_id', 'MONTH("p.date")'))
				 ->order_by('pk.id');
		if ($creator!=null) {
			$this->db->where('p.creater_id', $creator);
		}
		return $this->db->get()->result_array();
	}

	public function get_review_year($id,$start,$end,$creator=null)
	{
		$this->db->select('REPLACE(pk.type, "_", " ") as type,sum(pk.value) as total,count(pk.id) as item, concat( sum(pk.value) * 100 / (count(pk.id) * 5)) as per')
				 ->from('performance_reviews p')
				 ->join('performance_reviews_key pk', 'p.id = pk.review_id')
				 ->where('p.employee_id', $id)
				 ->where('p.created_at >= ', $start)
				 ->where('p.created_at <= ', $end)
				 ->group_by(array('pk.type','p.employee_id'))
				 ->order_by('pk.id');
		if ($creator!=null) {
			$this->db->where('p.creater_id', $creator);
		}
		return $this->db->get()->result_array();
	}

	public function get_client_report($id)
	{
		$this->db->select('c.client_reference,c.reference_code,s.subject_name,sp.scope_name,c.created_at,a.due_date,cr.date_time,as.price,c.case_status,c.hold_date,c.unhold_date')
				 ->from('subject_activities a')
				 ->join('scope_of_work sp', 'sp.id = a.activity_id')
				 ->join('subject_case s', 'a.subject_id = s.id')
				 ->join('case_request c', 'c.id = a.case_id')
				 ->join('client cl', 'cl.client_id = c.client_id')
				 ->join('case_report cr', 'cr.case_id = c.id', 'left')
				 ->join('assign_client_services as', 'as.client_id = c.client_id AND a.activity_id = as.scope_id')
				 ->group_by('a.id')
				 ->where('cl.client_id', $id);
		return $this->db->get()->result_array();
	}

	public function get_cm_report($id)
	{
		$this->db->select('c.client_reference,c.reference_code,s.subject_name,sp.scope_name,c.created_at,a.due_date,cr.date_time,as.price,c.case_status,c.hold_date,c.unhold_date,au.is_report,au.report_time')
				 ->from('subject_activities a')
				 ->join('scope_of_work sp', 'sp.id = a.activity_id')
				 ->join('assign_activity_to_user au', 'au.activity_id = a.activity_id')
				 ->join('subject_case s', 'a.subject_id = s.id')
				 ->join('case_request c', 'c.id = a.case_id')
				 ->join('client cl', 'cl.client_id = c.client_id')
				 ->join('case_report cr', 'cr.case_id = c.id', 'left')
				 ->join('assign_client_services as', 'as.client_id = c.client_id AND a.activity_id = as.scope_id')
				 ->group_by('a.id')
				 ->where('cl.employee_id', $id);
		return $this->db->get()->result_array();
	}

	public function get_account_report($id)
	{
		$this->db->select('c.client_reference,c.reference_code,s.subject_name,sp.scope_name,c.created_at,a.due_date,cr.date_time,as.price,c.case_status,c.hold_date,c.unhold_date,au.is_report,au.report_time,c.id as case_id,a.id as activity_id,s.id as subject_id,cl.client_type')
				 ->from('subject_activities a')
				 ->join('scope_of_work sp', 'sp.id = a.activity_id')
				 ->join('assign_activity_to_user au', 'au.activity_id = a.activity_id')
				 ->join('subject_case s', 'a.subject_id = s.id')
				 ->join('case_request c', 'c.id = a.case_id')
				 ->join('client cl', 'cl.client_id = c.client_id')
				 ->join('case_report cr', 'cr.case_id = c.id', 'left')
				 ->join('assign_client_services as', 'as.client_id = c.client_id AND a.activity_id = as.scope_id')
				 ->group_by('a.id')
				 ->where('cl.client_id', $id);
		return $this->db->get()->result_array();
	}

	public function get_tm_report($id)
	{
		$this->db->select('c.client_reference,c.reference_code,s.subject_name,sp.scope_name,au.date_time,au.due_date,cr.date_time,au.is_report,au.is_report,au.report_time')
				 ->from('subject_activities a')
				 ->join('assign_activity_to_user au', 'au.activity_id = a.activity_id')
				 ->join('scope_of_work sp', 'sp.id = a.activity_id')
				 ->join('subject_case s', 'a.subject_id = s.id')
				 ->join('case_request c', 'c.id = a.case_id')
				 ->join('client cl', 'cl.client_id = c.client_id')
				 ->join('case_report cr', 'cr.case_id = c.id', 'left')
				 ->join('assign_client_services as', 'as.client_id = c.client_id AND a.activity_id = as.scope_id')
				 ->group_by('a.id')
				 ->where('au.member_id', $id);
		return $this->db->get()->result_array();
	}

	public function get_ven_report($id)
	{
		$this->db->select('a.*, c.reference_code,s.subject_name,sw.scope_name,cf.charges,c.id as case_id,s.id as subject_id,sa.id activity_id,cl.client_type')
				 ->from('assign_vendor_request a')
				 ->join('scope_of_work sw', 'sw.id = a.activity_id')
				 ->join('subject_activities sa', 'sa.id = a.activity_id','left')
				 ->join('subject_case s', 'a.subject_id = s.id')
				 ->join('case_request c', 'c.id = a.case_id')
				 ->join('client cl', 'cl.client_id = c.client_id')
				 ->join('case_fund_request cf', 'cf.case_id = a.case_id and cf.vendor_id = a.vendor_id', 'left')
				 ->where('a.vendor_id', $id);
		return $this->db->get()->result_array();
	}

	public function get_subject_activities($id,$case_id)
	{
		$this->db->select('au.*,sp.scope_name, count(cf.id) as total_fund, count(av.id) as t_ven, count(au.id) as as_id, GROUP_CONCAT(av.is_report SEPARATOR ",") as ven_report, GROUP_CONCAT(au.is_report SEPARATOR ",") as user_report')
				 ->from('subject_activities a')
				 ->join('scope_of_work sp', 'sp.id = a.activity_id')
				 ->join('assign_activity_to_user au', 'au.activity_id = a.activity_id and au.case_id = a.case_id and au.subject_id = a.subject_id', 'left')
				 ->join('fund_request_activity cf', 'cf.case_id = a.case_id and cf.activity_id = a.activity_id and cf.subject_id = a.subject_id', 'left')
				 ->join('assign_vendor_request av', 'av.case_id = a.case_id and av.activity_id = a.activity_id and av.subject_id = a.subject_id', 'left')
				 ->where('a.subject_id', $id)
				 ->group_by('a.id');
		return $this->db->get()->result_array();
	}

	public function get_cases_by_id($panding_array)
	{
		$this->db->select('c.*,cl.employee_id')
               ->from('case_request c')
               ->join('client cl', 'cl.client_id = c.client_id')
               ->where_in('c.id', $panding_array);
        return $this->db->get()->result_array();
	}

	public function get_subject_by_id($case_id)
	{
		$this->db->select('s.*, c.team_lead_id')
				 ->from('subject_case s')
				 ->join('case_team c', 'c.subject_id = s.id', 'left')
				 ->where('s.case_id', $case_id);
		return $this->db->get()->result_array();
	}

	public function get_status($id)
	{
		$this->db->select('c.*, e.employee_name')
				 ->from('case_status c')
				 ->join('employee_itgs e', 'e.id = c.user_id')
				 ->where('c.case_id', $id);
		return $this->db->get()->result_array();		 
	}

	public function get_data_per_employee()
	{
		$this->db->select('*')
			 	 ->from('employee_itgs')
			 	 ->where('role !=', 'TL')
			 	 ->where('role !=', 'TM')
			 	 ->where('role !=', 'vendor');
		return $this->db->get()->result_array();
	}

	public function get_data_per_emp_cm()
	{
		$this->db->select('*')
			 	 ->from('employee_itgs')
			 	 ->where('(role != "TL" or role != "TM")')
			 	 ->where('department', $_SESSION['department']);
		return $this->db->get()->result_array();
	}

	public function get_sales_invoice($start,$end,$id)
	{
		$this->db->select('c.reference_code,s.subject_name,sw.scope_name,c.id as case_id,s.id as subject_id,sa.id as activity_id,cl.client_type,cl.client_id,cl.client_name')
				 ->from('case_request c')
				 ->join('client cl', 'cl.client_id = c.client_id')
				 ->join('subject_case s', 's.case_id = c.id')
				 ->join('subject_activities sa', 'sa.case_id = c.id and sa.subject_id = s.id')
				 ->join('scope_of_work sw', 'sa.activity_id = sw.id')
				 ->join('assign_client_services as', 'sa.activity_id = as.scope_id')
				 ->where('c.is_paid','0')
				 ->where('c.case_status','5')
				 ->where('c.created_at >=', date($start))
				 // ->where('c.created_at <=', date($end))
				 ->where('c.client_id', $id)
				 ->group_by(array("sa.id", "s.id", "c.id"));
		return $this->db->get()->result_array();
	}

	public function fund_invoice_data($id)
	{
		$this->db->select('f.*,c.reference_code,s.subject_name,sw.scope_name,fa.*,e.employee_name')
				 ->from('fund_approve f')
				 ->join('fund_request_activity fa', 'fa.id = f.fund_id')
				 ->join('assign_activity_to_user as', 'as.activity_id = fa.activity_id and as.case_id = fa.case_id','left')
				 ->join('employee_itgs e', 'as.member_id = e.id','left')
				 ->join('scope_of_work sw', 'fa.activity_id = sw.id','left')
				 ->join('subject_case s', 'fa.subject_id = s.id','left')
				 ->join('case_request c', 'fa.case_id = c.id','left')
				 ->where('fa.id', $id);
		return $this->db->get()->row_array();
	}

	public function fund_case_invoice_data($id)
	{
		$this->db->select('f.*,c.reference_code,s.subject_name,sw.scope_name,fa.*,e.employee_name')
				 ->from('fund_case_approve f')
				 ->join('case_fund_request fa', 'fa.id = f.fund_id')
				 ->join('assign_vendor_request as', 'as.activity_id = fa.activity_id and as.case_id = fa.case_id','left')
				 ->join('employee_itgs e', 'as.vendor_id = e.id','left')
				 ->join('scope_of_work sw', 'as.activity_id = sw.id','left')
				 ->join('subject_case s', 'as.subject_id = s.id','left')
				 ->join('case_request c', 'fa.case_id = c.id','left')
				 ->where('fa.id', $id);
		return $this->db->get()->row_array();
	}

	public function get_vendor_payments($id,$start,$end)
	{
		$this->db->select('c.reference_code,c.id as case_id,cl.client_name,s.subject_name,sw.scope_name,cf.charges,e.employee_name,e.vendor_type,c.client_id,(CASE f.type WHEN 1 THEN slip WHEN 2 THEN chaque WHEN 3 THEN payorder END) as voucher')
				 ->from('fund_case_approve f')
				 ->join('case_fund_request cf', 'f.fund_id = cf.id')
				 ->join('case_request c', 'c.id = cf.case_id')
				 ->join('client cl', 'c.client_id = cl.client_id')
				 ->join('subject_case s', 's.case_id = c.id')
				 ->join('subject_activities sa', 'sa.case_id = c.id and sa.subject_id = s.id')
				 ->join('scope_of_work sw', 'sa.activity_id = sw.id')
				 ->join('employee_itgs e', 'e.id = cf.vendor_id')
				 // ->where('cf.created_at >=', DATE($start))
				 // ->where('cf.created_at <=', DATE($end))
				 ->where('cf.vendor_id', $id)
				 ->group_by('f.id');
		return $this->db->get()->result_array();
	}

	public function fund_courier_data($start,$end)
	{
		$this->db->select('f.*,c.reference_code,s.subject_name,sw.scope_name,fa.*')
				 ->from('fund_approve f')
				 ->join('fund_request_activity fa', 'fa.id = f.fund_id')
				 ->join('scope_of_work sw', 'fa.activity_id = sw.id')
				 ->join('subject_case s', 'fa.subject_id = s.id')
				 ->join('case_request c', 'fa.case_id = c.id')
				 ->where('fa.date_time >=', DATE($start))
				 ->where('fa.date_time <=', DATE($end));
		return $this->db->get()->result_array();
	}

	public function get_profit_invoice($start,$end,$id=null,$service_id=null)
	{
		$this->db->select('c.case_date,cr.date_time as complete, (CASE f.type WHEN 1 THEN slip WHEN 2 THEN chaque WHEN 3 THEN payorder END) as voucher, (CASE f.type WHEN 1 THEN "C.V.P" WHEN 2 THEN "B.V.P" WHEN 3 THEN "B.V.P" END) as types, c.reference_code,s.subject_name,sw.scope_name,fa.*,ac.price')
				 ->from('case_request c')
				 ->join('subject_case s', 's.case_id = c.id')
				 ->join('subject_activities sa', 'sa.case_id = c.id and sa.subject_id = s.id')
				 ->join('scope_of_work sw', 'sa.activity_id = sw.id')
				 ->join('assign_client_services ac', 'sa.activity_id = ac.scope_id')
				 ->join('fund_request_activity fa', 'fa.activity_id = sa.activity_id')
				 ->join('case_report cr', 'cr.case_id = c.id')
				 ->join('fund_approve f', 'fa.id = f.fund_id')
				 ->where('c.case_status','5')
				 ->where('c.created_at >=', DATE($start))
				 ->where('c.created_at <=', DATE($end))
				 ->group_by(array("sw.id", "s.id", "c.id"));
		if ($id!=null && $id != 'null') {
			$this->db->where('c.client_id', $id);
		}
		if ($service_id!=null && $service_id != 'null') {
			$this->db->where('sw.id', $service_id);
		}
		return $this->db->get()->result_array();
	}

	public function get_amounts($start,$end)
	{
		$this->db->select('cl.client_name, sum(ac.price) as amount, cl.client_id as id')
				 ->from('case_request c')
				 ->join('client cl', 'cl.client_id = c.client_id')
				 //->join('subject_case s', 's.case_id = c.id')
				 ->join('subject_activities sa', 'sa.case_id = c.id')
				 ->join('assign_client_services ac', 'sa.activity_id = ac.scope_id and ac.client_id = cl.client_id')
				 ->where('c.case_status','5')
				 ->where('c.created_at >=', DATE($start))
				 ->where('c.created_at <=', DATE($end))
				 ->group_by('cl.client_id');
		return $this->db->get()->result_array();
	}

	public function get_vendor_amounts($start,$end)
	{
		$this->db->select('sum(fc.amount) as amount, em.employee_name')
				 ->from('fund_case_approve fc')
				 ->join('case_fund_request cf', 'cf.id = fc.fund_id')
				 ->join('employee_itgs em', 'em.id = cf.vendor_id')
				 //->join('subject_case s', 's.case_id = c.id')
				 // ->join('subject_activities sa', 'sa.case_id = c.id')
				 // ->join('assign_client_services ac', 'sa.activity_id = ac.scope_id and ac.client_id = cl.client_id')
				 ->where('fc.is_paid','0')
				 ->where('fc.date >=', DATE($start))
				 ->where('fc.date <=', DATE($end))
				 ->group_by('cf.vendor_id');
		return $this->db->get()->result_array();
	}

	public function get_int_status($id)
	{
		$this->db->select('i.*, (CASE i.type WHEN "call interview" THEN count(c.id) WHEN "in per" THEN count(p.id) END) as con')
				 ->from('interviews i')
				 ->join('call_interview c', 'c.interview_id = i.id', 'left')
				 ->join('pre_interview p', 'p.interview_id = i.id', 'left')
				 ->group_by('i.id')
				 ->order_by('i.id', 'desc')
				 ->where('i.recruitment_id', $id)
				 ->limit('1');
		return $this->db->get()->result_array();	 
	}

	public function select_leave_all($id)
	{
		$this->db->select('l.*')
				 ->from('leave_applications l')
				 ->join('employee_itgs e', 'e.employee_id = l.employee_id')
				 ->where('e.employee_id', $id)
				 ->where('(l.is_approve = "7" or l.is_approve = "4")');
		return $this->db->get()->result_array();
	}

	public function get_review_emp($id)
	{
		$this->db->select('REPLACE(pk.type, "_", " ") as type,sum(pk.value) as total,count(pk.id) as item, concat( sum(pk.value) * 100 / (count(pk.id) * 5)) as per')
				 ->from('performance_reviews p')
				 ->join('performance_reviews_key pk', 'p.id = pk.review_id')
				 ->where('p.employee_id', $id)
				 ->group_by(array('pk.type','p.employee_id'))
				 ->order_by('pk.id');
		return $this->db->get()->result_array();
	}

	public function get_emp_by_case($id)
	{
		$this->db->select('e.id')
				 ->from('case_request cr')
				 ->join('client c', 'cr.client_id = c.client_id')
				 ->join('employee_itgs e', 'e.id = c.employee_id')
				 ->where('cr.id', $id);
		return $this->db->get()->result_array();
	}

	public function get_client_cases($id)
	{
		$this->db->select('f.case_id,f.subject_id,f.activity_id,sum(fa.amount) as total')
				 ->from('fund_request_activity f')
				 ->join('fund_approve fa', 'fa.fund_id = f.id')
				 ->where('is_issue', '1')
				 ->group_by('f.id');
		$f = $this->db->get_compiled_select();
		$this->db->select('*, count(id) as ids')
				 ->from('assign_activity_to_user')
				 ->where('is_report','1')
				 ->group_by(array('case_id','subject_id','activity_id'));
		$au = $this->db->get_compiled_select();
		$this->db->select('*, count(id) as ids')
				 ->from('assign_vendor_request')
				 ->where('is_report','1')
				 ->group_by(array('case_id','subject_id','activity_id'));
		$av = $this->db->get_compiled_select();
		$this->db->select('cl.client_name, ac.price as amount, c.reference_code, s.subject_name, sw.scope_name, f.total, sa.due_date, au.ids as u_id, av.ids as v_id, au.report_time as user_date, av.report_time as vendor_date, c.hold_date, c.unhold_date, c.case_date,c.id as case_id,s.id as subject_id,sa.id as activity_id, cl.client_id')
				 ->from('case_request c')
				 ->join('subject_case s', 's.case_id = c.id')
				 ->join('client cl', 'cl.client_id = c.client_id')
				 ->join('subject_activities sa', 'sa.case_id = c.id')
				 ->join('scope_of_work sw', 'sa.activity_id = sw.id')
				 ->join('assign_client_services ac', 'sa.activity_id = ac.scope_id and ac.client_id = cl.client_id','inner')
				 ->join('('.$f.') f', 'f.case_id = c.id and f.subject_id = s.id and f.activity_id = sa.activity_id', 'left')
				 ->join('('.$au.') au', 'au.case_id = c.id and au.subject_id = s.id and au.activity_id = sa.activity_id', 'left')
				 ->join('('.$av.') av', 'av.case_id = c.id and av.subject_id = s.id and av.activity_id = sa.activity_id', 'left')
				 //->join('fund_request_activity f', 'f.case_id = c.id and f.subject_id = s.id and f.activity_id = sa.activity_id and is_issue = 1', 'left')
				 //->join('fund_approve fa', 'fa.fund_id = f.id', 'left')
				 ->where('c.case_status','5')
				 ->where('cl.client_id',$id)
				 ->group_by(array('c.id','s.id','sa.activity_id'));
		return $this->db->get()->result_array();
	}

	public function get_resignation()
	{
		$this->db->select('r.*,e.employee_name,e.designation,e.department')
				 ->from('resignation r')
				 ->join('employee_itgs e','e.employee_id = e.employee_id')
				 ->group_by('r.id');
		return $this->db->get()->result_array();
	}

	public function get_emp_count($value='')
	{
		$this->db->select('job_type, count(id) as total')
				 ->from('employee_detail')
				 ->group_by('job_type');
		return $this->db->get()->result_array();
	}

	public function get_cancelled_cases()
	{
		$this->db->select('e.employee_name,e.employee_id,count(cr.id) as total')
				 ->from('case_request cr')
				 ->join('client c','c.client_id = cr.client_id')
				 ->join('employee_itgs e','e.id = c.employee_id')
				 ->where('cr.case_status', '4')
				 ->group_by('e.id');
		return $this->db->get()->result_array();
	}

	public function get_hold_cases()
	{
		$this->db->select('e.employee_name,e.employee_id,count(cr.id) as total')
				 ->from('case_request cr')
				 ->join('client c','c.client_id = cr.client_id')
				 ->join('employee_itgs e','e.id = c.employee_id')
				 ->where('cr.case_status', '8')
				 ->group_by('e.id');
		return $this->db->get()->result_array();
	}

	public function get_hold_task()
	{
		$this->db->select('e.employee_name,e.employee_id,count(cr.id) as total')
				 ->from('assign_activity_to_user cr')
				 ->join('employee_itgs e','e.id = cr.member_id')
				 ->where('cr.hold_status', '1')
				 ->group_by('e.id');
		return $this->db->get()->result_array();
	}

	public function get_completed_cases()
	{
		$this->db->select('e.employee_name,e.employee_id,count(cr.id) as total')
				 ->from('case_request cr')
				 ->join('client c','c.client_id = cr.client_id')
				 ->join('employee_itgs e','e.id = c.employee_id')
				 ->where('cr.case_status', '5')
				 ->group_by('e.id');
		return $this->db->get()->result_array();
	}

	public function get_completed_task()
	{
		$this->db->select('e.employee_name,e.employee_id,count(cr.id) as total')
				 ->from('assign_activity_to_user cr')
				 ->join('employee_itgs e','e.id = cr.member_id')
				 ->where('cr.is_report', '1')
				 ->group_by('e.id');
		return $this->db->get()->result_array();
	}

	public function get_panding_cases()
	{
		$this->db->select('e.employee_name,e.employee_id,count(cr.id) as total')
				 ->from('case_request cr')
				 ->join('client c','c.client_id = cr.client_id')
				 ->join('employee_itgs e','e.id = c.employee_id')
				 ->where('cr.case_status !=', '5')
				 ->where('cr.case_status !=', '4')
				 ->where('cr.case_status !=', '8')
				 ->group_by('e.id');
		return $this->db->get()->result_array();
	}

	public function get_panding_task()
	{
		$this->db->select('e.employee_name,e.employee_id,count(cr.id) as total')
				 ->from('assign_activity_to_user cr')
				 ->join('employee_itgs e','e.id = cr.member_id')
				 ->where('cr.is_report', '0')
				 ->group_by('e.id');
		return $this->db->get()->result_array();
	}

	public function get_due_cases()
	{
		$this->db->select('e.employee_name,e.employee_id,count(cr.id) as total')
				 ->from('case_request cr')
				 ->join('client c','c.client_id = cr.client_id')
				 ->join('employee_itgs e','e.id = c.employee_id')
				 ->where('cr.case_status !=', '5')
				 ->where('cr.case_status !=', '4')
				 ->where('cr.case_status !=', '8')
				 ->where('cr.case_due_date <', date('Y-m-d'))
				 ->group_by('e.id');
		return $this->db->get()->result_array();
	}

	public function get_due_task()
	{
		$this->db->select('e.employee_name,e.employee_id,count(cr.id) as total')
				 ->from('assign_activity_to_user cr')
				 ->join('employee_itgs e','e.id = cr.member_id')
				 ->where('cr.is_report', '0')
				 ->where('cr.due_date <', date('Y-m-d'))
				 ->group_by('e.id');
		return $this->db->get()->result_array();
	}

	public function case_start($case_id)
	{
		$this->db->select('cr.id,employee_name as name, role, cr.created_at as start_date,r.date_time as end_date, cr.reference_code,"Case" as type')
				 ->from('case_request cr')
				 ->join('client c', 'c.client_id = cr.client_id')
				 ->join('employee_itgs e', 'e.id = c.employee_id')
				 ->join('case_report r', 'r.case_id = cr.id', 'left')
				 ->where('cr.id', $case_id)
				 ->group_by('cr.id');
		return $this->db->get()->result_array();
	}


	public function case_assign($case_id)
	{
		$this->db->select('c.id,employee_name as name, role, c.created_at as start_date,r.date_time as end_date, cr.reference_code,"Subject" as type')
				 ->from('case_request cr')
				 ->join('case_team c', 'c.case_id = cr.id')
				 ->join('employee_itgs e', 'e.id = c.team_lead_id')
				 ->join('tl_report r', 'r.case_id = cr.id', 'left')
				 ->where('cr.id', $case_id)
				 ->group_by('c.id');
		return $this->db->get()->result_array();
	}

	public function activity_assign($case_id)
	{
		$this->db->select('c.id,employee_name as name, role, c.date_time as start_date,c.report_time as end_date, cr.reference_code,"Activity" as type')
				 ->from('case_request cr')
				 ->join('assign_activity_to_user c', 'c.case_id = cr.id')
				 ->join('employee_itgs e', 'e.id = c.member_id')
				 ->where('cr.id', $case_id)
				 ->group_by('c.id');
		return $this->db->get()->result_array();
	}

	public function vendor_assign($case_id)
	{
		$this->db->select('c.id,employee_name as name, role, c.created_at as start_date,c.report_time as end_date, cr.reference_code,"Activity" as type')
				 ->from('case_request cr')
				 ->join('assign_vendor_request c', 'c.case_id = cr.id')
				 ->join('employee_itgs e', 'e.id = c.vendor_id')
				 ->where('cr.id', $case_id)
				 ->group_by('c.id');
		return $this->db->get()->result_array();
	}

	/* usama code end */


	/* akash code here */

 public function task_manager_form_insert($data)
 {

  $this->db->insert('task_manager',$data);
  return $this->db->insert_id();
 }

 public function task_manager_notification($data2)
 {

  $this->db->insert('task_notification',$data2);
  return $this->db->insert_id();
 }



 /* akash code here */
}
