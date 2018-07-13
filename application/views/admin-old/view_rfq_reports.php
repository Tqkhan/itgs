
<?php 

if ($_GET['filter']) {
    
    if($_GET['status'] && $_GET['status']!=""){
       $data['rfq.status']=$_GET['status'];
    }
    if($_GET['employeeID'] && $_GET['employeeID']!=""){
       $data['rfq.employeeID']=$_GET['employeeID'];
    }
    if($_GET['date_from'] && $_GET['date_from']!="" && $_GET['date_to'] && $_GET['date_to']!=""){
       $data['rfq.req_date>=']=$_GET['date_from'];
       $data['rfq.req_date<=']=$_GET['date_to'];
    }
   
    $this->db->select('clients.client_address,clients.client_name,clients.client_phone,clients.client_email,rfq.order_type,rfq.status,rfq.rfqID,clients.company_name');
    $this->db->from("rfq");
    $this->db->join('clients','rfq.clientID=clients.clientID');
    $this->db->where($data);
    $records=$this->db->get()->result_array();    

}else{
    $records=$this->admin_model->view_rfq();
}

 ?>

            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>SME- ERP</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a>Leads</a>
                        </li>
                        <li class="active">
                            <strong>View Leads</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>All Leads</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
<div class="row">
    <form action="">
        <div class="form-group col-md-3">
        <label for="">Select Status</label>
          <select name="status" id="" class="select form-control">
              <option value="">Select Status</option>
              <option value="pending">Pending</option>
              <option value="process">Process</option>
              <option value="approved">Approved</option>
              <option value="completed">Completed</option>
          </select>
        </div>
        <div class="form-group col-md-3">
        <?php 
$employees=$this->db->get_where('login',array('role'=>'Sales'))->result_array();

         ?>
        <label for="">Select By Employee</label>
          <select name="employeeID" id="" class="select form-control">
              <option value="">Select Employee</option>
             
             <?php foreach ($employees as $employee): ?>
                 <option value="<?php echo $employee['login_id'] ?>"><?php echo $employee['login_name'] ?></option> 
             <?php endforeach ?>

          </select>


        </div>

        <div class="form-group col-md-3">

     <input type="date" name="date_from" id="">
     <input type="date" name="" id="">
                         <input type="submit" name="filter" class="btn btn-info pull-right" value="Filter">

        </div>



    </form>
</div>
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                                       <thead>
                                            <tr>
                                                <th id="name">Name</th>
                                                <th id="email">Email</th>
                                                <th id="phone">phone</th>
                                                <th id="address">Address</th>
                                                <th id="order">Order Type</th>
                                                <th id="order">Status</th>
                                                <th id="order">Company Name</th>
                                                <th id="order">Payment Status</th>
                                                <th id="order">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php foreach ($records as $key): ?>
                                             <tr>
                                                <td><?php echo $key['client_name']; ?> </td>
                                                <td><?php echo $key['client_email']; ?> </td>
                                                <td><?php echo $key['client_phone']; ?> </td>
                                                <td><?php echo $key['client_address']; ?> </td>
                                                <td><?php echo $key['order_type']; ?> </td>
                                                <td><?php echo $key['status']; ?> </td>
                                                <td><?php echo $key['company_name']; ?> </td>
                                                <td><?php if($key['is_paid']==1){
                                                    echo "Received";
                                                    }else{
                                                        echo "Pending";
                                                        } ?> </td>


                                            </tr>
                                        <?php endforeach ?>
                                           
                                        </tbody>

                    </table>

                    </div>
                </div>
            </div>
            </div>
       
        </div>
     