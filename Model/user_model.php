
<?php  

  include "../Util/db.php";
  class user_model extends db
    {
      private $id;
      private $name;
      private $name_acc;
      private $password;
      private $country;
      private $table_name = "user_profile";
      function __construct($id='',$name='',$name_acc='',$password='',$country='')
      {
        $this->id=$id;
        $this->name=$name;
        $this->name_acc=$name_acc;
        $this->password=$password;
        $this->country=$country;
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
          return $this->getTable($this->table_name);
      }
       //  chi tiet 1 dong -> dang array()
    function detail($id)
    {
              $sql="select * from $this->table_name where id=?";
              $arr= array($id);
              $data= parent::selectQuery($sql, $arr);
              if (Count($data)>0)
                  return $data[0];
              return 0;
    }
           
   
    function loginUser($username,$password)
   {
            $sql="select id from $this->table_name  where user_acc = ? and password = ?";
            return  $this->login($sql,$username,$password);
   }
   function registerUser()
   {
    $data = [
     $this->id,
     $this ->name,
     $this->name_acc,
     $this->password,
     $this->country
    ];
    $sql = "INSERT INTO `user_profile` (`id`, `name`, `user_acc`, `password`, `country`) VALUES (?,?,?,?,?);";
    $this->updateQuery($sql,$data);
   }
   
          
  }

?>