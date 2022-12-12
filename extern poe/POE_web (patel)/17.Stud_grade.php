<!DOCTYPE html>
<html lang="en">
<head>
    <title>Grade</title>
    <style>
        
       body  {
       /* box-sizing:border-box;*/
        border-style:solid;
        width:20%;
        height:50%;
        padding:20px;
        margin-left:35%;
        margin-top:20%;
        background:powderblue;
        text-align:center;
        margin:10;
        font-size:20px;
        font-family:verdana;
        }
    </style> 
</head>
<body>

<?php
//namespace App;

class Student
{
    private $Roll_no;
    private $name,$result,$grade;
    private $course1, $course2, $course3, $course4, $course5;

    public function __construct(int $Roll_no,string $name)
    {
        $this->Roll_no = $Roll_no;
        $this->name = $name;
    }
    
    public function getName()
    {
        echo  $this->name;
        echo'<br>';
    }

    public function getRoll_no()
    {
        echo $this->Roll_no;
        echo'<br>';
    }

    public function getMarks(int $course1,int $course2,int $course3,int $course4,int $course5)
    {
        $this->course1 = $course1;
        $this->course2 = $course2;
        $this->course3 = $course3;
        $this->course4 = $course4;
        $this->course5 = $course5;
    }

    public function totalScore()
    {
        echo $this->total =$this->course1 + $this->course2 + $this->course3 + $this->course4 + $this->course5;
        echo'<br>';
    }

    public function avgScore()
    {
        echo $this->avg = $this->total/5;
        echo'<br>';
    }

    public function grade()
    {
        if($this->avg > 70 && $this->avg <= 100)
        {
        echo 'Grade= A';
        echo'<br>';
        }
        elseif($this->avg > 60 && $this->avg <= 69.9)
        {
        echo 'grade = B';
        echo'<br>';
        }
        elseif($this->avg > 50 && $this->avg <= 59.9)
        {
        echo 'grade = C';
        echo'<br>';
        }

       elseif($this->avg > 40 && $this->avg <= 49.9)
       {
        echo 'grade = D';
        echo'<br>';
       }


       elseif($this->avg > 0 && $this->avg <= 39.9)
       {
        echo 'grade = F';
        echo'<br>';

       }
        else
        { 
        echo'Error';
        echo'<br>';
        }
    }

}
$obj= new Student(1,'T1');
$obj->getName();
#echo $name;
$obj->getRoll_no();
#echo $roll;
$obj->getMarks(80,90,99,70,70);
$obj->totalScore();
#echo $sum;
$obj->avgScore();
#echo $avg;
$obj->grade();
?>

</body>
</html>

