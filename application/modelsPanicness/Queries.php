<?php 
class Queries Extends CI_Model {
    function __construct() {
        $this->tableName = 'files';
    }
    
    public function register($data){
        return $this->db->insert('users',$data);

    }
    public function login($email, $password){
        $query = $this->db->where(['email'=>$email,'password'=>$password])
                      ->get('users');
        if($query->num_rows() > 0) {
            return $query->row();
        }
    }
    public function adminlogin($email, $password){
        $query = $this->db->where(['email'=>$email,'password'=>$password,'user_role_id'=>1])
                      ->get('users');
        if($query->num_rows() > 0) {
            return $query->row();
        }
    }
    public function pOlogin($email, $password){
        $query = $this->db->where(['email'=>$email,'password'=>$password,'active'=>1])
                      ->get('users');
        if($query->num_rows() > 0) {
            return $query->row();
        }
    }
    public function insertProperty($data){
        return $this->db->insert('property',$data); 
    }
    public function bookhotel($data){
        return $this->db->insert('roombooking',$data); 
    }

    
    //admin publish property hehehehe
    //////===================///
    public function admininsertProperty($data){
        return $this->db->insert('ApprovedProperty',$data); 
    }
//admininsertReservation(
    public function admininsertReservation($data){
        return $this->db->insert('reservations',$data); 
    }
    public function getPost(){
        $this->db->select('*');
        $this->db->from('ApprovedProperty');
        $this->db->order_by("Publish_id","DESC");
        $query = $this->db->get();
        return $query->result();
    }
    //admin get posts/
    ///=================////
    public function admingetPost(){
        $this->db->select('*');
        $this->db->from('roombooking');
        $this->db->order_by("book_id","DESC");
        $query = $this->db->get();
        return $query->result();
    }
    public function admingetPostedproperty(){
        $this->db->select('*');
        $this->db->from('property');
        $this->db->order_by("Property_id","DESC");
        $query = $this->db->get(); 
        return $query->result();
    }
    public function admingetApprovedproperty(){
        $this->db->select('*');
        $this->db->from('ApprovedProperty');
        $this->db->order_by("Publish_id","DESC");
        $query = $this->db->get(); 
        return $query->result();
    }
    
    public function admingetPostedapprovedproperty(){
        $this->db->select('*');
        $this->db->from('ApprovedProperty');
        $this->db->order_by("Publish_id","DESC");
        $query = $this->db->get(); 
        return $query->result();
    }
    
    public function getPropertyPost($propertyOwnerid){
        $this->db->select('*');
        $this->db->where(['propertyOwnerid'=>$propertyOwnerid]);
        $this->db->from('property');
        $this->db->order_by("Property_id","DESC");
        $query = $this->db->get();
        return $query->result();
    }
    public function getReservation($propertyOwnerid){ //$propertyOwnerid
        $this->db->select('*');
        $this->db->where(['propertyOwnerid'=>$propertyOwnerid]);
        $this->db->from('roombooking');
        // $this->db->order_by("Property_id","DESC");
        $query = $this->db->get();
        return $query->result();
    }
//getRecieviedReservation($propertyOwnerid)
    public function getRecieviedReservation($propertyOwnerid){ 
        $this->db->select('*');
        $this->db->where(['propertyOwnerid'=>$propertyOwnerid]);
        $this->db->from('reservations');
        // $this->db->order_by("Property_id","DESC");
        $query = $this->db->get();
        return $query->result();
    }
    public function getSinglePost($postid){
        $query = $this->db->where(['Property_id'=>$postid])
               ->get('property');
        if($query->num_rows() > 0){
            return $query->row();
        }
    }
    public function getSingleReservation($postid){
        $query = $this->db->where(['book_id'=>$postid])
               ->get('roombooking');
        if($query->num_rows() > 0){
            return $query->row();
        }
    }
    public function POgetSingleReservation($postid){
        $query = $this->db->where(['book_id'=>$postid])
               ->get('reservations');
        if($query->num_rows() > 0){
            return $query->row();
        }
    }
    // public function getSingleRoom($postid){
    //     $query = $this->db->where(['room_id'=>$postid])
    //            ->get('rooms');
    //     if($query->num_rows() > 0){
    //         return $query->row();
    //     }
    // }
    public function getSingleHotelPost($postid){
        $query = $this->db->where(['Property_id'=>$postid])
               ->get('property');
        if($query->num_rows() > 0){
            return $query->row();
        }
    }
    public function getSingleRoom($postid){
        $query = $this->db->where(['room_id'=>$postid])
               ->get('rooms');
        if($query->num_rows() > 0){
           return $query->row();
        }
    }
    public function getrooms($postid){
        $this->db->select('*');
        $this->db->where(['hotel_id'=>$postid]);
        $this->db->from('rooms');
        $this->db->order_by("room_id","DESC");
        $query = $this->db->get();
        return $query->result();
    }
 public function getphotos($postid){
        $this->db->select('*');
        $this->db->where(['photo_id'=>$postid]);
        $this->db->from('photos');
        $this->db->order_by("photo_id","DESC");
        $query = $this->db->get();
        return $query->result();
    }
    public function get_search() {
        $match = $this->input->post('search');
        // $matchcheckin = $this->input->post('checkin');
        // $matchcheckout = $this->input->post('checkout');
        $this->db->like('propertyName',$match);
            $this->db->or_like('propertyLocation',$match);
        // $this->db->not_like('checkin', $matchcheckin); 
        // $this->db->not_like('checkout',$matchcheckout);        
        $query = $this->db->get('ApprovedProperty');
        return $query->result();
      }

      public function get_search2() {
        // $match = $this->input->post('search');
        $matchcheckin = $this->input->post('checkin');
        $matchcheckout = $this->input->post('checkout');
        // $this->db->like('roombooking',$match);
        $this->db->not_like('checkin', $matchcheckin); 
        $this->db->not_like('checkout',$matchcheckout);        
        $query = $this->db->get('roombooking');
        return $query->result();
      }

      public function deletePost($postid){
        $query = $this->db->where(['property_id'=>$postid])
               ->delete('property');      
    }
    public function unpublish($postid){ 
        $query = $this->db->where(['Publish_id'=>$postid])
        ->delete('ApprovedProperty');  
    }
    //updatePublished($data,$id)
    public function updatePublished($data,$id){
        $query = $this->db->where("Publish_id",$id)
                        ->update('ApprovedProperty',$data);
            
      
    }
    public function updateproperty($data,$id){
        $query = $this->db->where("Property_id",$id)
                        ->update('property',$data);
            
      
    }
    public function updateRoom($data,$id){
        $query = $this->db->where("room_id",$id)
                        ->update('rooms',$data);
            
      
    }
    public function insertRoom($data){
        return $this->db->insert('rooms',$data);
    }
    public function deleteRoom($postid){
        $query = $this->db->where(['room_id'=>$postid])
               ->delete('rooms');      
    }
//accountsettings
   function fetch_pass($session_id){
          $this->db->select('*');
        $this->db->where(['user_id'=>$session_id]);
        $this->db->from('users');
       // $this->db->order_by("room_id","DESC");
        $query = $this->db->get();
        return $query->result();
   // $fetch_pass=$this->db->query("select * from users where user_id='$session_id'");
    //$res=$fetch_pass->result();
    }
function change_pass($new_pass,$session_id){  
       $data = array(
      'password'=> $new_pass
      );         
     $this->db->where(['user_id'=>$session_id])                 
     ->update('users',$data );
//$update_pass=$this->db->query("UPDATE users set password='$new_pass' where //user_id='$session_id'");
}

//admin actions 
      public function deleteProperty($postid){
        $query = $this->db->where(['property_id'=>$postid])
               ->delete('property');      
    }
//deleteReservation($postid)
    public function deleteReservation($postid){
        $query = $this->db->where(['book_id'=>$postid])
               ->delete('roombooking');      
    }
//getSinglePublished($postid)
    public function getSinglePublished($postid){
        $query = $this->db->where(['Publish_id'=>$postid])
               ->get('ApprovedProperty');
        if($query->num_rows() > 0){
            return $query->row();
        }
    }



//password reset
 public function ForgotPassword($email)
 {
        $this->db->select('email');
        $this->db->from('users'); 
        $this->db->where('email', $email); 
        $query=$this->db->get();
        return $query->row_array();
 }
 public function sendpassword($data)
{
        $email = $data['email'];
        $query1=$this->db->query("SELECT *  from users where email = '".$email."' ");
        $row=$query1->result_array();
        if ($query1->num_rows()>0){       
        $passwordplain = "";
        $passwordplain  = rand(999999999,9999999999);
        $newpass['password'] = $passwordplain; //md5($passwordplain);
        $this->db->where('email', $email);
        $this->db->update('users', $newpass); 
        $to= $email;// 
        $data = "Password reset";
        $msg ="
         Dear client, 
         Thanks for contacting regarding to forgotten password,
         Your reset Password is $passwordplain
         Please Update your password.
         Thanks & Regards 
          Fronthotels. ";             
          $from = "support@fronttours.com";          
          $this->email->from($from);
          $this->email->to($to);
          $this->email->subject($data);
          $this->email->message($msg);
       if($this->email->send()){
        $this->session->set_flashdata('msg','Failed to send password, please try again!');
         } else {
        $this->session->set_flashdata('msg','Password sent to your email!');
        }
         redirect(base_url().'dashboard/login','refresh');        
        }
        else
        {  
        $this->session->set_flashdata('msg','Email not found try again!');
        redirect(base_url().'dashboard/login','refresh');
        }
//ends here 
}
//multiple images
    public function insert($data = array()){
        $insert = $this->db->insert_batch('photos',$data);
        return $insert?true:false;
    }
    public function getRows($postid){
        $this->db->select('*');
        $this->db->where(['property_id'=>$postid]);
        $this->db->from('photos');
        $this->db->order_by("photo_id","DESC");
        $query = $this->db->get();
        return $query->result();
}    
    public function getRows2($room_id){
        $this->db->select('*');
        $this->db->where(['room_id'=>$room_id]);
        $this->db->from('photos');
        $this->db->order_by("photo_id","DESC");
        $query = $this->db->get();
        return $query->result();
}  
}
?>
