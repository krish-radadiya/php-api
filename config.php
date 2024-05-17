<?php

class config{
   public  $HOSTNAME = "127.0.0.1";
   public  $USERNAME = "root";
   public  $PASSWORD = "";
   public  $DATABASENAME = "spire";

   private $school = "school";
   private $student = "student";
   PRIVATE $employee = "employee";
  public  $connect;

    public function connect(){
        $this->connect = mysqli_connect($this->HOSTNAME,$this->USERNAME,$this->PASSWORD,$this->DATABASENAME);
        return $this->connect;
     }

     public function insertStudent($name,$age,$course){

        $this->connect();
        $query = "INSERT INTO $this->student(name,age,course) values('$name', $age, '$course');";
    
        $res = mysqli_query($this->connect, $query);
    
        return $res;
    }
    public function insertEmployee($name,$age){

        $this->connect();
        $query = "INSERT INTO $this->employee(name,age) values('$name', $age);";

    
        $res = mysqli_query($this->connect, $query);
    
        return $res;
    }
    public function insertSchool($name,$city,$std,$num){

        $this->connect();

        $query = "INSERT INTO $this->school(name,city,std,num) values('$name', '$city',$std,$num);";

        $res = mysqli_query($this->connect, $query);
    
        return $res;
    }

}

?>