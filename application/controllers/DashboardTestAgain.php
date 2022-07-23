<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {
    /**
    * @var string: URI of home to redirect to uppon many occasions
    */
   public $base_uri = 'dashboard/';
   /**
    * @var object: global CI instance that contains e.g. the db object
    */
   private $ci;

   /**
    * @brief PM constructor
    *
    * @return void
    */
    public  function __construct(){
               parent::__construct();
                $this->load->helper(array('form', 'url'));  
                $this->ci = & get_instance();
		$this->config->load('form_validation', TRUE);
                $this->config->load('pm', TRUE);         
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->model('Pm_model', 'pm_model');
		$this->load->model('User_model', 'user_model');
	        $this->lang->load('pm', 'english');       
                $this->load->model('users_model');  
               //$this->load->library('uri'); 
                $this->data['users'] = $this->users_model->getAllUsers();
    }

                //THE HEAD OF ALL THE CODE STARTS HERE//
/////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////

    public function index()
	{
       $userid = $this->session->userdata('userid');       //'username'=>$username  
        $username = $this->session->userdata('username');         
        $this->load->model('queries'); 
        $records = $this->queries->getPost();       
        $this->load->view('dashboard',['records'=>$records,'username'=>$username]);
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
                        $this->session->set_flashdata('message','Wrong password or username');        
				$this->load->view('login');
			}
		 }else {
$this->session->set_flashdata('message','It is possible that your account is not yet active please check your email!');
            //echo 'wrong password or username!';
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
            //email verification things  
            $data = [          //$data is a global variable
            'username' => $_POST['username'],
            'mobile' => $_POST['mobile'],
            'email' => $_POST['email'],
            'password' => md5($_POST['password']),
            'code' => md5(rand(0, 1000))];
           //  $this->user_registration_model->insert_record($this->data);
           //  }//ends here
			//$data = $this->input->post();
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
$this->session->set_flashdata('message','Get out of here cause you are not admin');         
              //  echo "Wrong password or username!" ;          
				$this->load->view('adminlogin');
			}
		 }else {
$this->session->set_flashdata('message','Wrong password or username');       
        //    echo 'wrong password or username!';
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
  ///////////////////////////////////////////\
//////////////////////////////////
    public function propertyOsignup()
	{     
        $this->load->view('propertyOsignup');        
    }
    public function propertyOregister(){
       //modifying shit 
        $this->form_validation->set_rules('username','Username','required');
	$this->form_validation->set_rules('email', 'Email', 'valid_email|required');
        $this->form_validation->set_rules('password', 'Password','required|min_length[7]|max_length[30]');
        $this->form_validation->set_rules('confirm_password', 'Confirm 
         Password','required|matches[password]');

        if ($this->form_validation->run() == FALSE) { 
         	$this->load->view('propertyOsignup', $this->data);
		}
		else{
			//get user inputs
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
                        $confirm_password = $this->input->post('confirm_password');
                        $mobile = $this->input->post('mobile');

			//generate simple random code
			$set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$code = substr(str_shuffle($set), 0, 12);

			//insert user to users table and get id  
                        $user['username'] = $username;
			$user['email'] = $email;
			$user['password'] = $password;
                        $user['mobile'] = $mobile;
			$user['code'] = $code;
			$user['active'] = false;
                        $this->load->model('users_model');
			$id = $this->users_model->insert($user);
                
			//set up email
			$config = array(
		  	'protocol' => 'smtp',
		  	'smtp_host' => 'ssl://custsql-ipg08.eigbox.net',
		  	'smtp_port' => 465,
		  	'smtp_user' => 'admin@fronttours.com', // change it to yours
		  	'smtp_pass' => 'farrell', // change it to yours
		  	'mailtype' => 'php',
		  	'charset' => 'iso-8859-1',
		  	'wordwrap' => TRUE
			);
                   //$this->email->initialize($config);
			$message = 	"
					Verification Code
					
							Thank you for Registering
							Your Account:
							Email: ".$email."
							Password: ".$password."
							Please click the link below to activate your account.
							".base_url()."dashboard/activatePO/".$id."/".$code."
						
						";
	 		
		    $this->load->library('email', $config);
		    $this->email->set_newline("\r\n");
		    $this->email->from($config['smtp_user']);
		    $this->email->to($email);
		    $this->email->subject('Signup Verification Email');
		    $this->email->message($message);
		    //sending email
		    if($this->email->send()){
		    	$this->session->set_flashdata('message','Activation code sent to email');
		    }
		    else{
		    	$this->session->set_flashdata('message', $this->email->print_debugger());
	 
		    }

        	 return redirect('dashboard/propertyOsignup');
		}

	}

//modifications

                //$this->form_validation->set_rules('username','Username','required');
		//$this->form_validation->set_rules('email','Email','required');
		//$this->form_validation->set_rules('password','Password','required');
		//$this->form_validation->set_rules('mobile','Mobile','required');
		//if($this->form_validation->run()){
		//	$this->load->model('queries');
		//	$data = $this->input->post();
		//	unset($data['submit']);			
		//	if($this->queries->register($data)){
                //$this->session->set_flashdata('response','Registered successfully!');
                //return redirect('dashboard/propertyOwner');
	//		}else{
	//			$this->session->set_flashdata('response','Registeration failed!');
	//		}
	//		return redirect('propertyosignup');
	//	} else{
	//		echo validation_errors();
        //}
      
    //}
        public function activatePO(){
		$id =  $this->uri->segment(3);
 		$code =  $this->uri->segment(4);
		//fetch user details
                 $this->load->model('users_model');
		$user = $this->users_model->getUser($id);
                //if code matches
		if($user['code'] == $code){
	        //update user active status
	        $data['active'] = true;
		$query = $this->users_model->activate($data, $id);

			if($query){
				$this->session->set_flashdata('message', 'User activated successfully kindly Log in');
                       return redirect('dashboard/propertyOSignin');
			}
			else{
				$this->session->set_flashdata('message', 'Something went wrong in activating 
                             account');
			}
		}
		else{
			$this->session->set_flashdata('message', 'Cannot activate account. Code didnt match');
		}

	return redirect('dashboard/propertyOregister');

	}
    public function hoteldetail($postid){
            $this->load->model('queries');
            $hotel = $this->queries->getSingleHotelPost($postid);
            $room = $this->queries->getrooms($postid); 
            $this->load->view('hoteldetail',['hotel'=> $hotel,'room'=>$room]);
       }


    public function bookhotel($postid){
           //$userid = $this->session->userdata('userid');    
         $username = $this->session->userdata('username');     
        $this->load->model('queries');
        $hotel = $this->queries->getSingleHotelPost($postid);
        $rooms = $this->queries->getrooms($postid); 
         $property_id = $postid;       
        $photos = $this->queries->getphotos($property_id);  
          //$files  = $this->queries->getphotos($property_id);   
        $files = $this->queries->getRows($property_id);                 
        $this->load->view('bookhotel',['files'=>$files,'hotel'=>$hotel,'rooms'=>$rooms,'photos'=>$photos,'username'=>$username ]);   
        
}
public function orderroom($postid){
    $username = $this->session->userdata('username');     
    $this->load->model('queries');
    $hotels = $this->queries->getSingleHotelPost($postid);
    $rooms = $this->queries->getSingleRoom($postid);     
    $room_id = $postid;
    $files = $this->queries->getRows2($room_id);                     
    $this->load->view('orderroom', 
     ['files'=>$files,'hotels'=>$hotels,'rooms'=>$rooms,'username'=>$username]);   
    
}
public function submitbooking(){
         $this->load->model('queries');
         $this->load->library('email');
         $data = $this->input->post();
         $to= "admin@fronttours.com";  //
         $subject = $this->input->post('roomType'); 
         $from = $this->input->post('customer_email');          
          $this->email->from($from);
          $this->email->to($to);
          $this->email->cc('farrell.okello@outlook.com');
          $this->email->subject($subject);
          $this->email->message('A client has booked a room in your hotel please login 
          https://fronttours.com/fronthotels/index.php/dashboard/admin
           here to view your customer thankyou regards.');
          $this->email->send();
        unset($data['submit']);			
        if($this->queries->bookhotel($data)){
            $this->session->set_flashdata('response','You have successfully booked !');
            return redirect('dashboard');
        }else{
            $this->session->set_flashdata('response','There was a problem somewhere kindly try again!');
        }			
}

    ///PROPERTY REGISTRATION
    //////////////////////////////////
    ///////////////////////////////////
    ////////////////////////////
    public function registerProperty()
	{      
        $userid = $this->session->userdata('userid');
        $email = $this->session->userdata('email');
        if(!$userid){
                    $this->session->set_flashdata('message','Our dear client kindly 
                    signin or signup if you donot have an account thankyou!'); 
                    $this->load->view('propertyOsignup');
        }else{
        $this->load->view('registerproperty',['email'=>$email]);  
        }              
    }

    public function regProperty(){
        $config = ['upload_path' => './uploads',
                       'allowed_types'=>'gif|jpg|png|jpeg',
                       'max_size'=>'10',   
                       'max_width'=>'150',
                       'max_height'=>' 121',];
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
                $this->load->view('registerRoom');
            }
            else{
          //$this->upload->display_errors();
          $error = array('error' => $this->upload->display_errors());
            //$this->load->view('test','error'=>$error,);
             $this->upload->display_errors();
               //$error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('response','Registration failed');
            }            
            return redirect('dashboard/propertyOwner'); 
                       
        }else{
       //$this->upload->display_errors();
         $error = $this->upload->display_errors();
         $this->load->view('test',['error'=>$error]);
        }   

    }

    ///=========================RoomListing=======================/// 
    public function registerRoom($postid){      
        $userid = $this->session->userdata('userid');
        if(!$userid){
        echo 'Our dear client kindly signin or signup if you donot have an account thankyou!';
        $this->load->view('propertyOsignup');
        }else{
        $property_id = $postid; 
        $this->load->model('queries');
        $hotel = $this->queries->getSingleHotelPost($postid);      
        $this->load->view('registerRoom',['hotel_id'=>$property_id,'hotel'=>$hotel]);    
        }              
    }

    public function regRoom(){
        $config = ['upload_path' => './uploads',    
                      'allowed_types'=>'gif|jpg|png|jpeg',
                      'max_size'=>'10',   
                      'max_width'=>'150',
                      'max_height'=>' 121',  ]; 
            $this->load->library('upload',$config);     
            $this->upload->do_upload();
            $data = $this->input->post();          
            $info = $this->upload->data();
            $image_path = base_url("uploads/".$info['raw_name'].$info['file_ext']);
            $data['Rimg'] = $image_path;
            unset($data['submit']);            
            $this->load->model('queries');  
            $this->queries->insertRoom($data);        
                  return redirect('dashboard/propertyOwner');           
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
            return redirect('dashboard/managePublished');
            echo "You have successfully unpublished a property";
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
 public function adminSendReservation(){
            $data = $this->input->post();            
            unset($data['submit']);            
            $this->load->model('queries');     
           $this->load->library('email');     
$van = 'Dear partner  
 You have a booking from  ".$posts->customer_name.
"
See below for more details             
 ".
"Property Name:     ".$posts->propertyName
.
"
Room type:  ".$posts->roomType.
"
Number of Rooms:                 ".$posts->no_of_rooms
."
Click here to view 
https://fronttours.com/fronthotels/index.php/dashboard/RecievedReservation")';
           $from= "admin@fronttours.com"; 
           $subject = $this->input->post('roomType'); 
           $to = $this->input->post('roomName');  
           $msg = $this->input->post('msg');  
           $this->email->to($to);
           $this->email->from($from);
           $this->email->subject($subject);           
           $this->email->message($msg);
           $this->email->send();   
            
            if($this->queries->admininsertReservation($data)){
                $this->session->set_flashdata('response','published  successfully');
            }
            else{
                $this->session->set_flashdata('response','publish failed');
            }            
            return redirect('dashboard/admin');     
    }

public function adminDeleteReservation($postid){
        $this->load->model('queries');
        $posts = $this->queries->deleteReservation($postid);
        return redirect('dashboard/admin');
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
public function propertyOSignin()
	{           
        $this->load->view('propertyOlogin');        
    }
    public function propertyOLogin(){
                 $this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run()){
		$this->load->model('queries');
                // $this->load->library('session');
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
                                       'active'=>$user->active,
				); 
                  $this->session->set_userdata($session_data);
                  return redirect('dashboard/propertyOwner');
			}else{ 
                 $this->session->set_flashdata('message','Wrong password or username');                       
				$this->load->view('propertyOlogin');
			}
		 }else if($user->active==FALSE) {
            $this->session->set_flashdata('message','It is possible that your account is not yet active please check your email!');
          //  echo 'wrong password or username!';
		 	$this->load->view('propertyOlogin');
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
 public function RecievedReservation()
            {
            $this->load->model('queries');
            $userid = $this->session->userdata('userid');
            if(!$userid){
                return redirect('dashboard/propertyOSignin');
            }else{
           $this->load->model('queries'); 
        $propertyOwnerid = $this->session->userdata('userid');
        $reservations = $this->queries->getRecieviedReservation($propertyOwnerid);       
        $this->load->view('reservations',['reservations'=>$reservations]); 
            }
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
            $config = ['upload_path' => './uploads',
        'allowed_types'=>'gif|jpg|png|jpeg',
                      'max_size'=>'10',   
                       'max_width'=>'150',
                       'max_height'=>' 121', 
          ];
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
        return redirect('dashboard/propertyOSignin');
    }
    public function dashboardlogout(){
        session_destroy();
        return redirect('dashboard');
    }
///admin stuff should all go here for a beer

    public function admin(){   
        $userid = $this->session->userdata('userid');
        $userole = $this->session->userdata('user_role_id');
        if(!$userid){
            return redirect('dashboard/adminSignin');
        }elseif($userole != 1){    
            session_destroy();
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
          $userid = $this->session->userdata('userid');
        $userole = $this->session->userdata('user_role_id');
        if(!$userid){
            return redirect('dashboard/adminSignin');
        }elseif($userole != 1){    
            session_destroy();
            return redirect('dashboard/adminSignin');
        }else{             
        $this->load->model('queries');
        $posts = $this->queries->getSinglePost($postid);
        $this->load->view('adminpost',['posts'=> $posts]);
}
    }
    public function adminEditProperty($postid){
        $this->load->model('queries');
        $posts = $this->queries->getSinglePost($postid);            
        $this->load->view('adminEditproperty',['posts'=> $posts]); 
    }

public function adminPropertyUpdate(){
            $config = ['upload_path' => './uploads',
              'allowed_types'=>'gif|jpg|png|jpeg',
                      'max_size'=>'10',   
                       'max_width'=>'150',
                       'max_height'=>' 121', 
              ];
            $this->load->library('upload',$config);      
                        $this->form_validation->run();
                        $data = $this->input->post();
                        if(!$this->upload->do_upload()){
                            //$image_path= $posts->img; basic nothing happens here but makes sense still
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
                           return redirect('dashboard/admin');                             
                        }
                        else{
                          return redirect('dashboard/admin');
                            //$this->session->set_flashdata('response','Post updated successfully');                                
                        }                   
           }
//adminUpdatePublished
 public function adminEditpublished($postid){
        $this->load->model('queries');
        $posts = $this->queries->getSinglePublished($postid);            
        $this->load->view('adminEditPublished',['posts'=> $posts]); 
    }

public function adminUpdatePublished(){
            $config = ['upload_path' => './uploads',
              'allowed_types'=>'gif|jpg|png|jpeg',
                      'max_size'=>'10',   
                       'max_width'=>'150',
                       'max_height'=>' 121', 
               ];
            $this->load->library('upload',$config);      
                        $this->form_validation->run();
                        $data = $this->input->post();
                        if(!$this->upload->do_upload()){
                            //$image_path= $posts->img; basic nothing happens here but makes sense still
                        }else{
                            $info = $this->upload->data();
                        $image_path = base_url("uploads/".$info['raw_name'].$info['file_ext']);
                        $data['img'] = $image_path;    
                        }             
                        $id= $this->input->post('Publish_id');                        
                        unset($data['submit']);            
                        $this->load->model('queries');                                                            
                        if(!$this->queries->updatePublished($data,$id)){
                            $this->session->set_flashdata('response','Post update failed');  
                           return redirect('dashboard/managePublished');                             
                        }
                        else{
                          return redirect('dashboard/managePublished');
                            //$this->session->set_flashdata('response','Post updated successfully');                                
                        }                   
           }

        public function adminViewReservation($postid){
 $userid = $this->session->userdata('userid');
        $userole = $this->session->userdata('user_role_id');
        if(!$userid){
            return redirect('dashboard/adminSignin');
        }elseif($userole != 1){    
            session_destroy();
            return redirect('dashboard/adminSignin');
        }else{ 
           $this->load->model('queries');
           $posts = $this->queries->getSingleReservation($postid);
            $this->load->view('adminViewReservation',['posts'=> $posts]);
        }
}
    public function adminDeleteProperty($postid){
        $this->load->model('queries');
        $posts = $this->queries->deleteProperty($postid); 
        return redirect('dashboard/admin');
echo "You have successfully deleted a property with all its attributes";
        
    }
///adminViewProperty
    public function adminViewProperty($postid){            
        $this->load->model('queries');
        $posts = $this->queries->getSinglePost($postid);
        $this->load->view('adminViewProperty',['posts'=> $posts]);
    }
///adminViewPublished
    public function adminViewPublished($postid){            
        $this->load->model('queries');
        $posts = $this->queries->getSinglePost($postid);
        $this->load->view('adminViewPublished',['posts'=> $posts]);
    }
//admin stuff to stop here as proposed

       public function search()
            {
            $this->load->model('queries');
            $data['records'] = $this->queries->get_search();
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
        $reservations = $this->queries->getReservation($propertyOwnerid);       
        $this->load->view('reservations',['reservations'=>$reservations]); 
            }
       }

public function managePublished(){
       $this->load->model('queries');
            $records = $this->queries->admingetApprovedproperty(); 
            $this->load->view('managePublished',['records'=> $records]);
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
       public function initialize($dateformat = "Y.m.d - H:i:s")
	{
		$this->pm_model->initialize($dateformat);
	}
  function mail()
    {        
        $userid = $this->session->userdata('userid');
        if(!$userid){
            return redirect('dashboard/propertyOSignin');
        }else{ 
            $this->messages();           
        }
    }
    function message($msg_id)
	{
		if( ! $msg_id) return;

		// Get message and flag it as read
		$message = $this->pm_model->get_message($msg_id);
		if($message)
		{
			$message = reset($message);
			// Flag message as read
			$this->pm_model->flag_read($msg_id);

			// Get recipients & get usernames instead of user ids for recipients and author
			$message[TF_PM_AUTHOR] = $this->user_model->get_username($message[TF_PM_AUTHOR]);
			$message[PM_RECIPIENTS] = $this->pm_model->get_recipients($message[TF_PM_ID]);
			$i = 0;
			foreach ($message[PM_RECIPIENTS] as $recipient)
			{
				$id = $recipient[TF_PMTO_RECIPIENT];
				$message[PM_RECIPIENTS][$i] = $this->user_model->get_username($id);
				$i++;
			}
			$data['message'] = $message;
		}
		else $data['message'] = array();

		// $this->load->view('menu');
		$this->load->view('details2', $data);
    }
    function messages($type = NULL)
	{
		// Get & pass to view the messages view type (e.g. MSG_SENT)
        $data['type'] =  $type;  // = $this->session->userdata('userid');
        // echo $type;
		$messages = $this->pm_model->get_messages($type);

		if($messages)
		{
			// Get recipients & get usernames instead of user ids
			// for recipients and author & render message body correctly
			$i = 0;
			foreach ($messages as $message)
			{
				$messages[$i][TF_PM_BODY] = $this->render($messages[$i][TF_PM_BODY]);
				$messages[$i][TF_PM_AUTHOR] = $this->user_model->get_username($message[TF_PM_AUTHOR]);
				$messages[$i][PM_RECIPIENTS] = $this->pm_model->get_recipients($messages[$i][TF_PM_ID]);
				$j = 0;
				foreach ($messages[$i][PM_RECIPIENTS] as $recipient)
				{
					$id = $recipient[TF_PMTO_RECIPIENT];
					$messages[$i][PM_RECIPIENTS][$j] = $this->user_model->get_username($id);
					$j++;
				}
				$i++;
			}
			$data['messages'] = $messages;
		}
		else $data['messages'] = array();

		// $this->load->view('menu');
		$this->load->view('list2', $data);
	}

	/**
	 * @brief Send message
	 *
	 * Send a new message to the users given by username,
	 * with the given subject and given text body.
	 * Views loaded: menu, compose.
	 * Data for 'compose' view:
	 * $found_recipients (bool), $suggestions (array|string),
	 * $status (string), $message (associative array|string).
	 * Flashdata for 'compose' view: 'status'.
	 *
	 * @param recipients array|string: array with usernames
	 * @param subject string: message subject
	 * @param body string: message text
	 * @return void
	 */
	function send($recipients = NULL, $subject = NULL, $body = NULL)
	{
		$rules = $this->config->item('pm_form', 'form_validation');
		$this->form_validation->set_rules($rules);

		$data['found_recipients'] = TRUE; // assume we'll find recipients - set to FALSE below otherwise
		$data['suggestions'] = array(); // if recipients not found by exact search, save suggestions here
		$message = array();
		// Set default vals passed via parameters
		$message[PM_RECIPIENTS] = $recipients;
		$message[TF_PM_SUBJECT] = $subject;
		$message[TF_PM_BODY] 	= $body;

		if($this->form_validation->run())
		{
			// Overwrite default vals from params if form validated with vals from POST
			$message[PM_RECIPIENTS] = $this->input->post(PM_RECIPIENTS, TRUE);
			$message[TF_PM_SUBJECT] = $this->input->post(TF_PM_SUBJECT, TRUE);
			$message[TF_PM_BODY] 	= $this->input->post(TF_PM_BODY, TRUE);
			// Lets operate on copies of POST input to preserve orig vals in case of failure
			$recipients = explode(";", $this->input->post(PM_RECIPIENTS, TRUE));
			$subject = $this->input->post(TF_PM_SUBJECT, TRUE);
			$body = $this->input->post(TF_PM_BODY, TRUE);

			$recipient_ids = array();
			// Get user ids of recipients - if not found, get usernames of suggestions
			foreach ($recipients as $recipient)
			{
				$result = $this->user_model->get_userids(trim($recipient));
				array_push($recipient_ids, reset($result));
				// Try non-exact search if none found to have suggestions - in this case $data['suggestions']
				// will contain an array with original strings as keys & arrays with suggestions as values.
				if( ! reset($result))
				{
					$data['found_recipients'] = FALSE;
					$suggestions = $this->user_model->get_userids(trim($recipient), FALSE);
					if($suggestions)
						foreach ($suggestions as $suggestion)
							$data['suggestions'][$recipient] = $this->user_model->get_username($suggestion);
				}
			}

			if($data['found_recipients'])
			{
				if($this->pm_model->send_message($recipient_ids, $subject, $body))
				{
					// On success: redirect to list view of messages
					$this->session->set_flashdata('status', $this->lang->line('msg_sent'));
					redirect($this->base_uri.'messages/'.MSG_NONDELETED);
				}
				else
				{
					$status = $this->lang->line('msg_not_sent');
					$this->session->set_flashdata('status', $status);
					redirect($this->base_uri.'send/'.
							 $message[PM_RECIPIENTS].'/'.
							 $message[TF_PM_SUBJECT].'/'.
							 $message[TF_PM_BODY]);
				}
			}
			else $data['status'] = $this->lang->line('recipients_not_found');
		}

		// Only happens if sending msg unsuccessful above
		if(isset($status))
		{
			$data['status'] = $status;
			$this->session->set_flashdata('status', $status);
		}
		$data['message'] = $message;
		// $this->load->view('menu');
		$this->load->view('compose2', $data);
	}

	/**
	 * @brief Delete message
	 *
	 * Delete a message from inbox or sent-folder (move to trash). If 3rd parameter
	 * "redirect" is TRUE, redirect to the view specified by 2nd parameter "type".
	 * Usually this will be the same view the user deleted the message from.
	 * Views loaded: - (no view loaded since redirect).
	 * Flashdata for view redirected to: 'status'.
	 *
	 * @param msg_id integer: message to delete by msg id.
	 * @param type integer: messages view type to redirect to, e.g. MSG_SENT {@link messages}.
	 * @param redirect bool: indicating whether to redirect to a view after msg deleted.
	 * @return void
	 */
	function delete($msg_id, $type = MSG_NONDELETED, $redirect = TRUE)
	{
		if($msg_id >= 0)
			if($this->pm_model->flag_deleted($msg_id)) $status = $this->lang->line('msg_deleted');
			else $status = $this->lang->line('msg_not_deleted');
		else $status = $this->lang->line('msg_invalid_id');
		$this->session->set_flashdata('status', $status);

		// Redirect to $type (e.g. MSG_NONDELETED) view of messages
		if($redirect) redirect($this->base_uri.'messages/'.$type);
		else $this->session->keep_flashdata('status');
	}

	/**
	 * @brief Restore message
	 *
	 * Restore a message from trash: move to inbox or sent-folder, depending
	 * on where it was deleted from. The method determines which is correct.
	 * If 2nd parameter "redirect" is TRUE, redirect to trash view.
	 * Views loaded: - (no view loaded since redirect).
	 * Flashdata for view redirected to: 'status'.
	 *
	 * @param msg_id integer: message to restore by msg id.
	 * @param redirect bool: indicating whether to redirect to a view after msg deleted.
	 * @return void
	 */
	function restore($msg_id, $redirect = TRUE)
	{
		if($msg_id >= 0)
			if($this->pm_model->flag_undeleted($msg_id)) $status = $this->lang->line('msg_restored');
			else $status = $this->lang->line('msg_not_restored');
		else $status = $this->lang->line('msg_invalid_id');
		$this->session->set_flashdata('status', $status);

		// Redirect to trash bin view of messages
		if($redirect) redirect($this->base_uri.'messages/'.MSG_DELETED);
		else $this->session->keep_flashdata('status');
	}

	/**
	 * @brief Render message text
	 *
	 * Render the message body text.
	 *
	 * @param message_body string: text of the message body to be rendered
	 * @return string
	 */
	function render($message_body)
	{
		$message_body = strip_tags($message_body, '');
		$message_body = stripslashes($message_body);
		$message_body = nl2br($message_body);
		return $message_body;
	}

             public function accountsettings(){
             // $this->load->model('queries');
             // $data['query'] = $this->queries->get_search(); //, $data
             $this->load->view('accountsettings');
             }

        public function change_pass() {
       $old_pass=$this->input->post('old_pass');
       $new_pass=$this->input->post('new_pass');
       $confirm_pass=$this->input->post('confirm_pass');
       $session_id=$this->session->userdata('userid');
       $password = $this->session->userdata('password');  
 //echo  $old_pass."and". $session_id."and".$new_pass."and".$confirm_pass;
   if(($old_pass == $password)&& ($new_pass == $confirm_pass)){
       $this->load->model('queries');     
       $this->queries->change_pass($new_pass,$session_id);   
       $this->session->set_flashdata('message','Password has been changed successfully!');      
       $this->load->view('accountsettings');
       } else{
    $this->session->set_flashdata('message','Either wrong old password or new password didnt match!');    
     $this->load->view('accountsettings');
    }
}

             public function bee(){
           $this->load->library('email');
           $to ='farrell.okello@outlook.com';
          $this->email->to($to);
          $this->email->cc('farrelljimokello@yahoo.com');
          $this->email->bcc('farrell.okello@outlook.com');          
          $this->email->subject('booking again');
          $this->email->message('Partner this client has booked a room in your hotel please login 
          https://fronttours.com/fronthotels/index.php/dashboard/propertyOSignin 
           here to view your customer thankyou regards.');
          if($this->email->send()){
                      echo 'it has been sent!';
    echo $to;
                          }else{ 
                      echo 'it hasnt been sent';
                              }
             }
public function Emailverification(){
$this->load->model('users_model');
      $this->data['users'] = $this->users_model->getAllUsers();
		$this->load->view('register', $this->data);
	}

	public function register2(){
		$this->form_validation->set_rules('email', 'Email', 'valid_email|required');
                $this->form_validation->set_rules('password', 'Password',  
                 'required|min_length[7]|max_length[30]');
               $this->form_validation->set_rules('password_confirm', 'Confirm 
                 Password','required|matches[password]');

        if ($this->form_validation->run() == FALSE) { 
         	$this->load->view('register', $this->data);
		}
		else{
			//get user inputs
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			//generate simple random code
			$set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$code = substr(str_shuffle($set), 0, 12);

			//insert user to users table and get id
			$user['email'] = $email;
			$user['password'] = $password;
			$user['code'] = $code;
			$user['active'] = false;
                        $this->load->model('users_model');
			$id = $this->users_model->insert($user);
                
			//set up email
			$config = array(
		  		'protocol' => 'smtp',
		  		'smtp_host' => 'ssl://custsql-ipg08.eigbox.net',
		  		'smtp_port' => 465,
		  		'smtp_user' => 'admin@fronttours.com', // change it to yours
		  		'smtp_pass' => 'farrell', // change it to yours
		  		'mailtype' => 'html',
		  		'charset' => 'iso-8859-1',
		  		'wordwrap' => TRUE
			);

			$message = 	"
						<html>
						<head>
							<title>Verification Code</title>
						</head>
						<body>
							<h2>Thank you for Registering.</h2>
							<p>Your Account:</p>
							<p>Email: ".$email."</p>
							<p>Password: ".$password."</p>
							<p>Please click the link below to activate your account.</p>
							<h4><a href='".base_url()."dashboard/activate/".$id."/".$code."'>Activate My Account</a></h4>
						</body>
						</html>
						";
	 		
		    $this->load->library('email', $config);
		    $this->email->set_newline("\r\n");
		    $this->email->from($config['smtp_user']);
		    $this->email->to($email);
		    $this->email->subject('Signup Verification Email');
		    $this->email->message($message);

		    //sending email
		    if($this->email->send()){
		    	$this->session->set_flashdata('message','Activation code sent to email');
		    }
		    else{
		    	$this->session->set_flashdata('message', $this->email->print_debugger());
	 
		    }

        	 return redirect('register2');
		}

	}
	public function activate(){
		$id =  $this->uri->segment(3);
 		$code =  $this->uri->segment(4);
                //echo "<pre>";
                //print_r($id);
                //echo "</pre>";
		//fetch user details
                 $this->load->model('users_model');
		$user = $this->users_model->getUser($id);
                //  $test = $user['code'];
              
		//if code matches
		     if($user['code'] == $code){
			//update user active status
			$data['active'] = true;
			$query = $this->users_model->activate($data, $id);

			if($query){
				$this->session->set_flashdata('message', 'User activated successfully');
return redirect('dashboard');
			}
			else{
				$this->session->set_flashdata('message', 'Something went wrong in activating 
                             account');
			}
		}
		else{
			$this->session->set_flashdata('message', 'Cannot activate account. Code didnt match');
		}

	return redirect('dashboard/register2');

	}
 
        public function viewReservation($postid){
            $this->load->model('queries');
            $posts = $this->queries->POgetSingleReservation($postid);
            // $this->load->model('queries');
            // $hotel = $this->queries->getSingleHotelPost($postid);
            // $rooms = $this->queries->getrooms($postid);  
            // $this->load->view('post',['posts'=> $posts,'rooms'=>$rooms]);
            $this->load->view('viewReservation',['posts'=> $posts]);
        }
//forgot password 
  public function forgotPassword(){     
             $this->load->view('forgotPassword');
       }
     public function faggotPassword()
   {
         $email = $this->input->post('email');    
          $this->load->model('queries');  
         $findemail = $this->queries->ForgotPassword($email);  
         if($findemail){
          $this->queries->sendpassword($findemail);        
           }else{
          $this->session->set_flashdata('msg',' Email not found!');
          redirect(base_url().'dashboard/login','refresh');
      }
   }


//add photos
public function addphotos($postid){     
  // Get files data from the database
         $userid = $this->session->userdata('userid');         
           if(!$userid){
                return redirect('dashboard/propertyOSignin');
            }else{

         $this->load->model('queries'); 
         $propertyOwnerid = $this->session->userdata('userid');
         $property_id = $postid;       
         $files = $this->queries->getRows($property_id);
         $hotel = $this->queries->getSingleHotelPost($postid);         
         $this->load->view('addphotos',['files'=>$files,'property_id'=>$property_id,'hotel'=>$hotel]);
       }
}

public function gallery()
   {
    $data = array();
        // If file upload form submitted
        if($this->input->post('fileSubmit') && !empty($_FILES['files']['name'])){
            $filesCount = count($_FILES['files']['name']);
            for($i = 0; $i < $filesCount; $i++){
                $_FILES['file']['name']     = $_FILES['files']['name'][$i];
                $_FILES['file']['type']     = $_FILES['files']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                $_FILES['file']['error']     = $_FILES['files']['error'][$i];
                $_FILES['file']['size']     = $_FILES['files']['size'][$i];
                
                // File upload configuration
                $uploadPath = 'uploads/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                
                // Load and initialize upload library
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                
                // Upload file to server               
                if($this->upload->do_upload('file')){
                    // Uploaded file data
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $uploadData[$i]['uploaded_on'] = date("Y-m-d H:i:s");                     
                   $image_path = base_url("uploads/".$fileData['file_name']);
                    $uploadData[$i]['photo_url'] = $image_path;	
                    $uploadData[$i]['property_id'] = $this->input->post('property_id');     
                   $uploadData[$i]['propertyOwnerid'] = $this->input->post('propertyOwnerid');     
                   $uploadData[$i]['propertyName'] = $this->input->post('propertyName');       
                  $uploadData[$i]['propertyOEmail'] = $this->input->post('propertyOEmail');      
                 }
            }
            
            if(!empty($uploadData)){
                // Insert files data into the database
                     $this->load->model('queries');
		     $data = $this->input->post();    
                     unset($data['submit']);       
                     $insert = $this->queries->insert($uploadData);
                
                // Upload status message
                  $statusMsg = $insert?'Files uploaded successfully.':'Some problem occurred, please try again.';
                   $this->session->set_flashdata('statusMsg',$statusMsg);
            }
        }    
  }

//=====room photos just this guy is the anoying yam======//
public function roomphotos($postid){     
  // Get files data from the database
       $userid = $this->session->userdata('userid');         
        if(!$userid){
                return redirect('dashboard/propertyOSignin');
            }else{
         $this->load->model('queries'); 
         $propertyOwnerid = $this->session->userdata('userid');
         $property_id = $postid;       
         $files = $this->queries->getRows($property_id);
         $hotel = $this->queries->getSingleHotelPost($postid);
         $rooms = $this->queries->getSingleRoom($postid);           
         $this->load->view('roomphoto',['files'=>$files,
                          'property_id'=>$property_id,
                  'hotel'=>$hotel,'rooms'=>$rooms]);
       }
}

public function roomgallery()
   {
    $data = array();
        // If file upload form submitted
        if($this->input->post('fileSubmit') && !empty($_FILES['files']['name'])){
            $filesCount = count($_FILES['files']['name']);
            for($i = 0; $i < $filesCount; $i++){
                $_FILES['file']['name']     = $_FILES['files']['name'][$i];
                $_FILES['file']['type']     = $_FILES['files']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                $_FILES['file']['error']     = $_FILES['files']['error'][$i];
                $_FILES['file']['size']     = $_FILES['files']['size'][$i];
                
                // File upload configuration
                $uploadPath = 'uploads/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                
                // Load and initialize upload library
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                
                // Upload file to server               
                if($this->upload->do_upload('file')){
                    // Uploaded file data
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $uploadData[$i]['uploaded_on'] = date("Y-m-d H:i:s");
                  //  $info = $fileData['file_name'];         
                   $image_path = base_url("uploads/".$fileData['file_name']);
                    $uploadData[$i]['photo_url'] = $image_path;	
                    $uploadData[$i]['room_id'] = $this->input->post('room_id');     	
                    $uploadData[$i]['property_id'] = $this->input->post('property_id');     
                   $uploadData[$i]['propertyOwnerid'] = $this->input->post('propertyOwnerid');     
                   $uploadData[$i]['propertyName'] = $this->input->post('propertyName');       
                  $uploadData[$i]['propertyOEmail'] = $this->input->post('propertyOEmail');      
                 }
            }
            
            if(!empty($uploadData)){
                // Insert files data into the database
                     $this->load->model('queries');
		     $data = $this->input->post();    
                     unset($data['submit']);       
                     $insert = $this->queries->insert($uploadData);
                
                // Upload status message
                  $statusMsg = $insert?'Files uploaded successfully.':'Some problem occurred, please try again.';
                   $this->session->set_flashdata('statusMsg',$statusMsg);
            }
        }    
  }
//=======end of the room photos code just ======//


//contact us function
public function sendContact(){
         //$this->load->model('queries');
         $this->load->library('email');
         $data = $this->input->post('name');
         $to="support@fronttours.com";// 
          $msg = $this->input->post('message');           
         $from = $this->input->post('email');          
          $this->email->from($from);
          $this->email->to($to);
          $this->email->cc('farrelljimokello@yahoo.com');
          $this->email->bcc('farrell.okello@outlook.com'); 
          $this->email->subject($data);
          $this->email->message($msg);
       if($this->email->send()){
        echo" Thank you for contacting us";
        return redirect('dashboard');
       }else{  
 return redirect('dashboard/contact');
                }
}
        }?>
