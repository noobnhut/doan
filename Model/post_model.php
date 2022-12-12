<?php 
include "../Util/db.php";
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

   function getUser()
   {
    return $this->getTable($this->table_user);
   }
   
   function detail($id)
   {
    $sql="select * from user_post where id=? ";
		$arr= array($id);
		$data= parent::selectQuery($sql, $arr);
		if (Count($data)>0)
			return $data[0];
		return 0;
   }

   function filter($title, $user_id='all')
	 {
		$sql="select * from user_post where 1 ";
		$arr= array();
		if ($title !='')
		{
			$sql .=" and book_title like ? ";
			$arr[]="%$title%";
		}
		if ($user_id !='all')
		{
			$sql .=" and user_id= ? ";
			$arr[]=$user_id;
		}
		
		return parent::selectQuery($sql, $arr);
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