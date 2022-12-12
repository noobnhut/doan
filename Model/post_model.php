<?php 
require("../Util/db.php");

include "../function.php";
class post_model extends db
{
   private $table_name="user_post";
   private $table_user="user_profile";

   private $id;
   private $user_id;
   private $written_text;
   private $title;
   private $img_location;
   private $link_video;

   function __construct($id='',$user_id='',$written_text='',$title='',$img_location='',$link_video='')
   {
    $this->id=$id;
    $this->user_id=$user_id;
    $this->written_text=$written_text;
    $this->title=$title;
    $this->img_location=$img_location;
    $this->link_video=$link_video;

   }

   function getPost()
   {
    return $this->getTable($this->table_name);
   }

   function detailUser($id)
   {
    $sql="select * from $this->table_user where id=? ";
		$arr= array($id);
		$data= parent::selectQuery($sql, $arr);
		if (Count($data)>0)
			return $data[0];
		return 0;
   }
   function getPostByIdUser($user_id)
   {
    $sql="select * from $this->table_name where user_id=? ";
    $arr= array($user_id);
		return $this->selectQuery($sql,$arr);
   }
   function getUser()
   {
    return $this->getTable($this->table_user);
   }
   
   function detail($id)
   {
    $sql="select * from $this->table_name where id=? ";
		$arr= array($id);
		$data= parent::selectQuery($sql, $arr);
		if (Count($data)>0)
			return $data[0];
		return 0;
   }
  

    function delete($id)
	{
		$row = $this->detail($id);
		$sql="delete from user_post where id= ?";
		$this->updateQuery($sql, array($id));
	}

    function insert()
   {
    $data = [
     $this->id,
     $this->user_id,
     $this ->title,
     $this->written_text,
      $this->img_location,
     $this->link_video
    
    ];
    $sql = "INSERT INTO `user_post` (`id`, `user_id`, `title`, `written_text`, `img_location`, `link_video`)  VALUES (?,?,?,?,?,?);";
    $this->updateQuery($sql,$data);
   }

  
}
?>