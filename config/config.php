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
    public function deleteStudent($id)
    {
        $this->connect();
        $fetch = $this->fetchSingleStudentData($id);
        $result = mysqli_fetch_assoc($fetch);

        if ($result) {
            $query = "DELETE FROM $this->student WHERE id=$id";

            $res = mysqli_query($this->connect, $query); 

            return $res;
        } else {
            return false;
        }
    }

    public function fetchSingleStudentData($id)
    {
        $this->connect();

        $query = "SELECT * FROM $this->student WHERE id=$id;";

        $res = mysqli_query($this->connect, $query);

        return $res;
    }
    public function deleteSchool($id)
    {
        $this->connect();
        $fetch = $this->fetchSingleStudentData($id);
        $result = mysqli_fetch_assoc($fetch);

        if ($result) {
            $query = "DELETE FROM $this->school WHERE id=$id";

            $res = mysqli_query($this->connect, $query); 

            return $res;
        } else {
            return false;
        }
    }

    public function fetchSingleSchoolData($id)
    {
        $this->connect();

        $query = "SELECT * FROM $this->school WHERE id=$id;";

        $res = mysqli_query($this->connect, $query);

        return $res;
    }
    public function deleteEmployee($id)
    {
        $this->connect();
        $fetch = $this->fetchSingleStudentData($id);
        $result = mysqli_fetch_assoc($fetch);

        if ($result) {
            $query = "DELETE FROM $this->employee WHERE id=$id";

            $res = mysqli_query($this->connect, $query); 

            return $res;
        } else {
            return false;
        }
    }

    public function fetchSingleEmployeeData($id)
    {
        $this->connect();

        $query = "SELECT * FROM $this->employee WHERE id=$id;";

        $res = mysqli_query($this->connect, $query);

        return $res;
    }
    public function updateStudent($name, $age, $course, $id)
    {
        $this->connect();

        $fetch = $this->fetchSingleStudentData($id);
        $result = mysqli_fetch_assoc($fetch);

        if ($result) {
            $query = "UPDATE $this->student SET name='$name',age=$age,course = '$course' WHERE id=$id;";

            $res = mysqli_query($this->connect, $query);//  return bool;

            return $res;
        } else {
            return false;
        }
    }
    public function updateSchool($name,$city,$std,$num, $id)
    {
        $this->connect();

        $fetch = $this->fetchSingleschoolData($id);
        $result = mysqli_fetch_assoc($fetch);

        if ($result) {
            $query = "UPDATE $this->school SET name='$name',city='$city',std = $std,num ='$num 'WHERE id=$id;";

            $res = mysqli_query($this->connect, $query);//  return bool;

            return $res;
        } else {
            return false;
        }
    }
    public function updateEmployee($name, $age, $id)
    {
        $this->connect();

        $fetch = $this->fetchSingleemployeeData($id);
        $result = mysqli_fetch_assoc($fetch);

        if ($result) {

            $query = "UPDATE $this->employee SET name='$name',age=$age WHERE id=$id;";

            $res = mysqli_query($this->connect, $query);//  return bool;

            return $res;
        } else {
            return false;
        }
    }
    public function fetchStudent()
    {
        $this->connect();

        $query = "SELECT * FROM $this->student;";

        $res = mysqli_query($this->connect, $query); 

        return $res;
    }
    public function fetchEmployee()
    {
        $this->connect();

        $query = "SELECT * FROM $this->employee;";

        $res = mysqli_query($this->connect, $query); 

        return $res;
    }
    public function fetchSchool()
    {
        $this->connect();

        $query = "SELECT * FROM $this->school;";

        $res = mysqli_query($this->connect, $query); 

        return $res;
    }
}

?>