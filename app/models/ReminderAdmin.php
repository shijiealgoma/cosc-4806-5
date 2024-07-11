<?php


class ReminderAdmin{

  public function __construct(){
    // $this->db = db_connect();
  }

  
   public function get_all_reminders(){
     $db = db_connect();
     $statement = $db->prepare("select * from reminders;");
     $statement->execute();
     $rows = $statement->fetchAll(PDO::FETCH_ASSOC);



     return $rows;
   }

  //update reminder
  public function update_reminder($id, $reminder){
    // echo "update reminder";
    // echo "id: " . $id . " reminder: " . $reminder; 
    
    try {
      $db = db_connect();
      $statement = $db->prepare("update reminders set subject = :reminder where id = :id;");
      $statement->bindValue(':reminder', $reminder);
      $statement->bindValue(':id', $id);
      $status = $statement->execute();
      return $status;
    } catch (PDOException $e) {
      error_log("Error updating reminder: " . $e->getMessage());
      return false;
    }
  }

  //get reminder by id
  public function get_reminder_by_id($id){
    try {
      $db = db_connect();
      $statement = $db->prepare("select * from reminders where id = :id;");
      $statement->bindValue(':id', $id);
      $statement->execute();
      $rows = $statement->fetch(PDO::FETCH_ASSOC);
      
      return $rows;
    } catch (PDOException $e) {
      error_log("Error getting reminder by id: " . $e->getMessage());
      return false;
    }
  }

  //create reminder
  public function create_reminder($id, $subject){
    try {
      $db = db_connect();
      $statement = $db->prepare("insert into reminders (user_id, subject) values (:id, :subject);");
      $statement->bindValue(':id', $id);
      $statement->bindValue(':subject', $subject);
      $status = $statement->execute();
      return $status;
    } catch (PDOException $e) {
      error_log("Error creating reminder: " . $e->getMessage());
      return false;
    }
    
  }

  //delete reminder
  public function delete_reminder($id){
    try {
      $db = db_connect();
      $statement = $db->prepare("delete from reminders where id = :id;");
      $statement->bindValue(':id', $id);
      $status = $statement->execute();
      return $status;
    } catch (PDOException $e) {
      error_log("Error deleting reminder: " . $e->getMessage());
      return false;
    }
    
  }

  //get who has the most reminders
  public function get_most_reminders(){
    try {
      $db = db_connect();
      $statement = $db->prepare("select user_id, count(user_id) as count from reminders group by user_id order by count desc limit 1;");
      $statement->execute();
      $rows = $statement->fetch(PDO::FETCH_ASSOC);
      
      return $rows;
    } catch (PDOException $e) {
      error_log("Error getting most reminders: " . $e->getMessage());
      return false;
    }
    
  }

  //get how many total logins by username
  public function get_total_logins(){
    //return total logins for each username
    try{
      
    } catch (PDOException $e) {
        error_log("Error getting total logins: " . $e->getMessage());
        return false;
      }
      
  }

  //get who has the most reminders
  public function get_most_reminders(){
    try {
      $db = db_connect();
      $statement = $db->prepare("select user_id, count(user_id) as count from reminders group by user_id order by count desc limit 1;");
      $statement->execute();
      $rows = $statement->fetch(PDO::FETCH_ASSOC);
      
      return $rows;
    } catch (PDOException $e) {
      error_log("Error getting most reminders: " . $e->getMessage());
      return false;
    }
    
  }
  
    
  
}