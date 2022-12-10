
<?php  

  include "../Util/db.php";
  class user_model extends db
    {
      private $id;
      private $name;
      private $name_acc;
      private $password;
      private $country;
    
      function __construct($id ='',$name='',$name_acc='',$password='',$country='')
      {
        $id = $this->id;
        $name=$this->name;
        $name_acc=$this->name_acc;
        $password=$this->password;
        $country=$this->country;
      }

      function get_id()
      {
        return $this->id;
      }
      function get_name()
      {
        return $this->name;
      }
      function get_name_acc()
      {
        return $this->name_acc;
      }
      function get_password()
      {
        return $this->password;
      }
      function get_country()
      {
        return $this->country;
      }

      function getData()
      {
          return $this->getTable('user_profile');
      }
          
  }

?>