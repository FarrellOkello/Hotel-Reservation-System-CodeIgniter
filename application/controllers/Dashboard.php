<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {
    public  function __construct(){
        parent::__construct();
         $this->load->helper(array('form', 'url'));       
    }

                //THE HEAD OF ALL THE CODE STARTS HERE//
/////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////

    public function index()
	{
        $this->load->model('queries'); 
        $records = $this->queries->getPost();       
        $this->load->view('dashboard',['records'=>$records]);
    }

    public function contact()
	{       
        $this->load->view('contact');
    }
    
    ////SIGN IN CODE FOR THE OTHER USERS
    ///////////////////
    public function signin()
	{      
        $this->load->view('login');        
    }
    public function login(){        
        $this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run()){
			$this->load->model('queries');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$user = $this->queries->login($email,$password);		
			if($user){
				$session_data = array(
					'userid'=> $user->user_id,
                    'username'=> $user->username,
                    'password'=> $user->password,
					'email'=> $user->email,
					'mobile'=> $user->mobile,
					'user_role_id'=> $user->user_role_id,
				); 
				$this->session->set_userdata($session_data);
				return redirect('dashboard');
			}else{                
				$this->load->view('login');
			}
		 }else {
            echo 'wrong password or username!';
		 	$this->load->view('login');
		 }
    }
    
    ///////////////////USER REGISTRATION CODE 
    /////////////////////////////////
    //////////////////////
    public function signup()
	{     
        $this->load->view('signup');        
    }
    public function register(){
        $this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('mobile','Mobile','required');
		if($this->form_validation->run()){
			$this->load->model('queries');
			$data = $this->input->post();
			unset($data['submit']);			
			if($this->queries->register($data)){
                $this->session->set_flashdata('response','Registered successfully!');
                return redirect('dashboard');
			}else{
				$this->session->set_flashdata('response','Registeration failed!');
			}			
		} else{
			echo validation_errors();
		}
    }



///ADMIN LOGIN IS HERE 
//////////////
///////////////////////////////////
    public function adminSignin()
	{           
        $this->load->view('adminlogin');        
    }
    public function adminLogin(){
        $this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run()){
			$this->load->model('queries');
			$email = $this->input->post('email');
            $password = $this->input->post('password');
          //  $userRole = $this->input->post('userole');
			$user = $this->queries->adminlogin($email,$password);
			if($user){
				$session_data = array(
					'userid'=> $user->user_id,
                    'username'=> $user->username,
                    'password'=> $user->password,
					'email'=> $user->email,
					'mobile'=> $user->mobile,
					'user_role_id'=> $user->user_role_id,
				); 
				$this->session->set_userdata($session_data);
				return redirect('dashboard/admin');
			}else{     
                echo "Wrong password or username!" ;          
				$this->load->view('adminlogin');
			}
		 }else {
            echo 'wrong password or username!';
		 	$this->load->view('adminlogin');
		 }
    }
    public function adminSignup()
	{     
        $this->load->view('signup');        
    }
    public function adminRegister(){
        $this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('mobile','Mobile','required');
		if($this->form_validation->run()){
			$this->load->model('queries');
			$data = $this->input->post();
			unset($data['submit']);			
			if($this->queries->register($data)){
                $this->session->set_flashdata('response','Registered successfully!');
                return redirect('dashboard/admin');
			}else{
				$this->session->set_flashdata('response','Registeration failed!');
			}
			return redirect('welcome');
		} else{
			echo validation_errors();
		}
    }

  ///////PROPERTY OWNERS SIGNIN //
  /////
  ///////////////////////////////////////////\
//////////////////////////////////
public function propertyOSignin()
	{           
        $this->load->view('propertyOlogin');        
    }
    public function propertyOLogin(){
                 $this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run()){
			$this->load->model('queries');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$user = $this->queries->pOlogin($email,$password);
			if($user){
				$session_data = array(
					'userid'=> $user->user_id,
                                        'username'=> $user->username,
                                        'password'=> $user->password,
					'email'=> $user->email,
					'mobile'=> $user->mobile,
					'user_role_id'=> $user->user_role_id,
				); 
                $this->session->set_userdata($session_data);
                // $this->session->set_flashdata('response','Registered successfully!');
               // echo 'wrong password or username!';
				return redirect('dashboard/propertyOwner');
			}else{ 
                // $this->session->set_flashdata('response','Registeration failed!');  
                echo 'wrong password or username!';             
				$this->load->view('PropertyOLogin');
			}
		 }else {
            // $this->session->set_flashdata('response','wrong password or username!');
            echo 'wrong password or username!';
		 	$this->load->view('PropertyOLogin');
		 }
    }
    public function propertyOsignup()
	{     
        $this->load->view('propertyosignup');        
    }
    public function propertyOregister(){
        $this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('mobile','Mobile','required');
		if($this->form_validation->run()){
			$this->load->model('queries');
			$data = $this->input->post();
			unset($data['submit']);			
			if($this->queries->register($data)){
                $this->session->set_flashdata('response','Registered successfully!');
                return redirect('dashboard/propertyOwner');
			}else{
				$this->session->set_flashdata('response','Registeration failed!');
			}
			return redirect('propertyosignup');
		} else{
			echo validation_errors();
        }
      
    }
    public function hoteldetail($postid){
            $this->load->model('queries');
            $hotel = $this->queries->getSingleHotelPost($postid);
            $room = $this->queries->getrooms($postid); 
            $this->load->view('hoteldetail',['hotel'=> $hotel,'room'=>$room]);
       }


    public function bookhotel($postid){
        $this->load->model('queries');
        $hotel = $this->queries->getSingleHotelPost($postid);
        $rooms = $this->queries->getrooms($postid);                   
        $this->load->view('bookhotel',['hotel'=>$hotel,'rooms'=>$rooms]);   
        
}
public function orderroom($postid){
    $this->load->model('queries');
    $hotels = $this->queries->getSingleHotelPost($postid);
    $rooms = $this->queries->getSingleRoom($postid);                   
    $this->load->view('orderroom',['hotels'=>$hotels,'rooms'=>$rooms]);   
    
}
public function submitbooking(){
    // $this->form_validation->set_rules('roomName','roomName','required');
    // $this->form_validation->set_rules('roomType','roomType','required');
    // $this->form_validation->set_rules('customerName','customerName','required');
    // $this->form_validation->set_rules('mobile','Mobile','required');
    // if($this->form_validation->run()){
        $this->load->model('queries');
        $data = $this->input->post();
        unset($data['submit']);			
        if($this->queries->bookhotel($data)){
            $this->session->set_flashdata('response','You have successfully booked !');
            return redirect('dashboard');
        }else{
            $this->session->set_flashdata('response','There was a problem somewhere kindly try again!');
        }			
    // } else{
    //     echo validation_errors();
    // }
}

    ///PROPERTY REGISTRATION
    //////////////////////////////////
    ///////////////////////////////////
    ////////////////////////////
    public function registerProperty()
	{      
        $userid = $this->session->userdata('userid');
        if(!$userid){
            echo 'Our dear client kindly signin or signup if you donot have an account thankyou!';
            $this->load->view('propertyOsignup');
        }else{
        $this->load->view('registerproperty');  
        }              
    }

    public function regProperty(){
        $config = ['upload_path' => './uploads',
                'allowed_types'=>'gif|jpg|png|jpeg',
            ];
        $this->load->library('upload',$config);        
        $this->form_validation->set_rules('propertyName','propertyName','required');
        $this->form_validation->set_rules('hotel_grade','Hotel_grade','required');
        $this->form_validation->set_error_delimiters('<div class="text danger">','</div>');
        if($this->form_validation->run() && $this->upload->do_upload() ){
            $data = $this->input->post();
            $info = $this->upload->data();
            $image_path = base_url("uploads/".$info['raw_name'].$info['file_ext']);
            $data['img'] = $image_path;
            unset($data['submit']);            
            $this->load->model('queries');            
            if($this->queries->insertProperty($data)){
                $this->session->set_flashdata('response','Property registered successfully');
                // echo 'You property has been register successfully';
                $this->load->view('registerRoom');
            }
            else{
                $this->session->set_flashdata('response','Registration failed');
            }            
            return redirect('dashboard/propertyOwner'); 
                       
        }else{
            $this->load->view('test');
        }   

    }

    ///=========================RoomListing=======================/// 
    public function registerRoom($postid)
	{      
        $userid = $this->session->userdata('userid');
        if(!$userid){
            echo 'Our dear client kindly signin or 
            signup if you donot have an account thankyou!';
        $this->load->view('propertyOsignup');
        }else{
        $property_id = $postid; 
        $this->load->model('queries');
        $hotel = $this->queries->getSingleHotelPost($postid); 
        // $propertyName = $propertyName;
        $this->load->view('registerRoom',['hotel_id'=>$property_id,'hotel'=>$hotel]);    
        }              
    }

    public function regRoom(){
        $config = ['upload_path' => './uploads','allowed_types'=>'gif|jpg|png|jpeg',  ]; 
        $this->load->library('upload',$config);        
        // $this->form_validation->set_rules('roomType','roomType','required');
        // $this->form_validation->set_rules('no_of_rooms','no_of_rooms','required');
        // $this->form_validation->set_error_delimiters('<div class="text danger">','</div>');
        // if($this->form_validation->run() &&  ){
            $this->upload->do_upload();
            $data = $this->input->post();          
            $info = $this->upload->data();
            $image_path = base_url("uploads/".$info['raw_name'].$info['file_ext']);
            $data['Rimg'] = $image_path;
            unset($data['submit']);            
            $this->load->model('queries');  
            $this->queries->insertRoom($data);          
            // if($this->queries->insertRoom($data)){
            //     $this->session->set_flashdata('response','Property registered successfully');
            // }
            // else{
            //     $this->session->set_flashdata('response','Registration failed');
            // }            
            return redirect('dashboard/propertyOwner');            
        // }else{
        //     $this->load->view('test');
        // }   

    }
    public function editRoom($postid){
        $this->load->model('queries');
        $posts = $this->queries->getSingleRoom($postid); 
        $property_id = $postid;            
        $this->load->view('editRoom',['posts'=> $posts,'hotel_id'=>$property_id]); 
    }
    
    public function updateRoom(){
            // $config = ['upload_path' => './uploads','allowed_types'=>'gif|jpg|png|jpeg',];
            // $this->load->library('upload',$config);        
        //    $this->form_validation->set_rules('propertyName','Post Title','required');
        //    $this->form_validation->set_rules('hotel_grade','Post Description','required');
        //    $this->form_validation->set_error_delimiters('<div class="text danger">','</div>');            
                        $this->form_validation->run();
                        $data = $this->input->post();
                        // if(!$this->upload->do_upload()){
                        //     // $image_path= $posts->img;
                        // }else{
                        //     $info = $this->upload->data();
                        // $image_path = base_url("uploads/".$info['raw_name'].$info['file_ext']);
                        // $data['img'] = $image_path;    
                        // }             
                        $id= $this->input->post('room_id');                        
                        unset($data['submit']);            
                        $this->load->model('queries'); 
                        $this->queries->updateRoom($data,$id) ;                                                          
                        if(!$this->queries->updateRoom($data,$id)){
                            $this->session->set_flashdata('response','Room details update failed');                               
                        }
                        else{
                            $this->session->set_flashdata('response','Rooms details updated successfully');                                
                        }
                        return redirect('dashboard/propertyOwner');
                        
                    // }else{
                    //     echo 'Sorry there was a small problem working on it';
                    //     $this->load->view('dashboard/editPost');
                    // }            
    }
    public function deleteRoom($postid){
        $this->load->model('queries');
        $posts = $this->queries->deleteRoom($postid);
        return redirect('dashboard/propertyOwner');
    }
    public function unpublish($postid){
        $this->load->model('queries');
        $posts = $this->queries->unpublish($postid);
        echo "You have successfully unpublished a property";
        return redirect('dashboard/admin');
    }
    

    //admin regproperty
    ///=================//
    public function adminregProperty(){
        // $config = ['upload_path' => './uploads',
        //         'allowed_types'=>'gif|jpg|png|jpeg',
        //     ];
        // $this->load->library('upload',$config);        
        // $this->form_validation->set_rules('propertyName','propertyName','required');
        // $this->form_validation->set_rules('hotel_grade','Hotel_grade','required');
        // $this->form_validation->set_error_delimiters('<div class="text danger">','</div>');
        // if($this->form_validation->run() && $this->upload->do_upload() ){ //
            $data = $this->input->post();            
            // $info = $this->upload->data();
            // $this->upload->do_upload();
            // $image_path = base_url("uploads/".$info['raw_name'].$info['file_ext']);
            // $data['img'] = $image_path;
            unset($data['submit']);            
            $this->load->model('queries');            
            if($this->queries->admininsertProperty($data)){
                $this->session->set_flashdata('response','published  successfully');
            }
            else{
                $this->session->set_flashdata('response','publish failed');
            }            
            return redirect('dashboard/admin');            
        // }else{
        //     echo "you are out of the loop";
        //     // $this->load->view('dashboard/admin');
        //     // return redirect('dashboard/admin');
        // }  
    }

    //////PROPERTY OWNER DASHBOARD
    ///////////////////////////
    ////////////////////////////////////
    public function propertyOwner()
	{
        $userid = $this->session->userdata('userid');
            if(!$userid){
                return redirect('dashboard/propertyOSignin');
            }else{
        $this->load->model('queries'); 
        $propertyOwnerid = $this->session->userdata('userid');
        $Precords = $this->queries->getPropertyPost($propertyOwnerid);       
        $this->load->view('propertyOwner',['Precords'=>$Precords]); 
        }       
    }
    public function post($postid){            
        $this->load->model('queries');
        $posts = $this->queries->getSinglePost($postid);
        // $this->load->model('queries');
        // $hotel = $this->queries->getSingleHotelPost($postid);
        $rooms = $this->queries->getrooms($postid);  
        $this->load->view('post',['posts'=> $posts,'rooms'=>$rooms]);
    }
    ////DELETING A PROPERTY OR ANYTHING DELETABLE 
    ///////////////////////////////////////////
    ////WE JUST DELETE FROM HERE
    public function deletePost($postid){
        $this->load->model('queries');
        $posts = $this->queries->deletePost($postid);
        return redirect('dashboard/propertyOwner');
    }
    ///editing a property////
    ///////////////////////
    ////////////////////////
    public function editpost($postid){
        $this->load->model('queries');
        $posts = $this->queries->getSinglePost($postid);            
        $this->load->view('editPost',['posts'=> $posts]); 
    }
    
    public function update(){
            $config = ['upload_path' => './uploads','allowed_types'=>'gif|jpg|png|jpeg',];
            $this->load->library('upload',$config);        
        //    $this->form_validation->set_rules('propertyName','Post Title','required');
        //    $this->form_validation->set_rules('hotel_grade','Post Description','required');
        //    $this->form_validation->set_error_delimiters('<div class="text danger">','</div>');            
                        $this->form_validation->run();
                        $data = $this->input->post();
                        if(!$this->upload->do_upload()){
                            //$image_path= $posts->img;
                        }else{
                            $info = $this->upload->data();
                        $image_path = base_url("uploads/".$info['raw_name'].$info['file_ext']);
                        $data['img'] = $image_path;    
                        }             
                        $id= $this->input->post('Property_id');                        
                        unset($data['submit']);            
                        $this->load->model('queries');                                                            
                        if(!$this->queries->updateproperty($data,$id)){
                            $this->session->set_flashdata('response','Post update failed');  
                           return redirect('dashboard/propertyOwner');                             
                        }
                        else{
                          return redirect('dashboard/propertyOwner');
                            //$this->session->set_flashdata('response','Post updated successfully');                                
                        }
                        
                        
                    // }else{
                    //     echo 'Sorry there was a small problem working on it';
                    //     $this->load->view('dashboard/editPost');
                    // }            
    }
    
    ///LOGOUT FOR A FEW SESSIONS
    ////////////////////////////////
    //////////////////////////
    public function logout(){
        session_destroy();
        return redirect('dashboard');
    }
    public function adminlogout(){
        session_destroy();
        return redirect('dashboard/adminSignin');
    }
    public function Pologout(){
        session_destroy();
        return redirect('dashboard/propertyOwner');
    }
    public function dashboardlogout(){
        session_destroy();
        return redirect('dashboard');
    }
    public function admin(){   
        $userid = $this->session->userdata('userid');
        $userole = $this->session->userdata('user_role_id');  //!$userid &&
        if($userole != 1){
            return redirect('dashboard/adminSignin');
        }else{     
        $this->load->model('queries'); 
        $propertyOwnerid = $this->session->userdata('userid');
        $Precords = $this->queries->admingetPost(); 
        $records = $this->queries-> admingetPostedproperty(); 
       // $Brecords = $this->queries-> admingetPostedapprovedproperty(); ,'Brecords'=>$Brecords  
        $this->load->view('admin',['Precords'=>$Precords,'records'=>$records]); 
        }       
    }
    public function adminpost($postid){            
        $this->load->model('queries');
        $posts = $this->queries->getSinglePost($postid);
        $this->load->view('adminpost',['posts'=> $posts]);
    }


    // }

       public function search()
            {
            $this->load->model('queries');
            $data['query'] = $this->queries->get_search();
            $this->load->view('hotelsearch2', $data);
            }
        public function checkavailability()
        {
        $this->load->model('queries');


        //the flashdata thingie 
        if($this->queries->get_search2()){
            $this->session->set_flashdata('response','These dates are available for booking kindly go ahead and book!');
            return redirect('dashboard');
        }else{
            $this->session->set_flashdata('response','These dates are already taken kindly check other dates or check other properties thankyou!');
            return redirect('dashboard');
        }	
              //the flashdata thingie 

        // if($this->queries->get_search2()){
        //     echo "These dates are available for booking kindly go ahead and book";
        // $this->load->view('dashboard');
        // }else{
        //     echo "These dates are already taken kindly check other dates or check other properties thankyou";
        //     $this->load->view('dashboard'); 
        // }
    }
        public function reservation()
            {
            $this->load->model('queries');
            $userid = $this->session->userdata('userid');
            if(!$userid){
                return redirect('dashboard/propertyOSignin');
            }else{
           $this->load->model('queries'); 
        $propertyOwnerid = $this->session->userdata('userid');
        $posts = $this->queries->getReservation($propertyOwnerid);       
        $this->load->view('reservations',['posts'=>$posts]); 
            // $this->load->view('reservations', $data);
            }
        //     public function rates()
        //     {
        //     // $this->load->model('queries');
        //     // $data['query'] = $this->queries->get_search();
        //     $this->load->view('rates');
        //     }
        //     public function invoices()
        //     {
        //     // $this->load->model('queries');
        //     // $data['query'] = $this->queries->get_search();
        //     $this->load->view('invoices', $data);
        //     }
        //     public function mail()
        //     {
        //     // $this->load->model('queries');
        //     // $data['query'] = $this->queries->get_search();
        //     $this->load->view('mail', $data);
        //     }
        //     public function accountsettings()
        //     {
        //     // $this->load->model('queries');
        //     // $data['query'] = $this->queries->get_search(); //, $data
        //     $this->load->view('accountsettings');
        //     }
        //     public function bee(){
        //         $this->load->view('shyet');
        //     }
        }
        public function viewReservation($postid){
            $this->load->model('queries');
            $posts = $this->queries->getSingleReservation($postid);
            // $this->load->model('queries');
            // $hotel = $this->queries->getSingleHotelPost($postid);
            // $rooms = $this->queries->getrooms($postid);  
            // $this->load->view('post',['posts'=> $posts,'rooms'=>$rooms]);
            $this->load->view('viewReservation',['posts'=> $posts]);
        }
        }
?>
