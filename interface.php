<?php
interface DB // interface
{
  public function insert($table,$data);
   
  public function selectAll($table);


  public function update($table,$data,$id);

  public function delet($table);
} 

 class mysql implements  DB
 {
        private $host = 'localhost'; //HOST NAME.
        private $db_name = 'ecomm'; //Database Name
        private $db_username = 'root'; //Database Username
        private $db_password = ''; //Database Password
        public  $connection;
  
  public function __construct()

   {
    try {
        $this->connection = new PDO('mysql:host='. $this->host .';dbname='.$this->db_name, $this->db_username, $this->db_password);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

       } catch (PDOException $e) {
      echo 'Connection failed: ' . $e->getMessage();
       }

   }
   public function __sleep() // datatstore ;
   {
    $this->connection=null;
    return [
      'host',
      'dbname',
      'db_username',
      'db_password'
    ]
   }
   public function __wakeup() // data read;
   {
    $this->connection;
   }
   public function insert($table,$data)
   {
   }
   public function selectAll($table)
   {
   }
   public function update($table,$data,$id)
   {
   }
   public function delet($table)
   {
   }
}
 $mysql=new mysql();
 $serializedb=serialize($mysql); // datastore;
 $unserializedb=unserialize($serializedb); // data read;

?>