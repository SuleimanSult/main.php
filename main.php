<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
  <?php
  class cow {
      public $name;
      public $milk;
      
    public function __construct()
    {
        $this->id = substr(md5(rand()), 0, 3); // getting random id with length of 3 symbols
        $this->milk = mt_rand(8, 12);
    }
  }
  class chik {
      public $name;
      public $eggs;
      
    public function __construct()
    {
        $this->id = substr(md5(rand()), 0, 3); // getting random id with length of 3 symbols
        $this->eggs = mt_rand(0, 1);
    }
  }
  
  class farmCountOnDay {
      
      public $cows = 10;
      public $chiks = 20;
  
      public $allEggs;
      public $allMilk;
    public function __construct(){
          
    }
    public function getAll ()
    { 
    for ($i = 0; $i<=7; $i++) {
        
     
        for ($i = 0; $i < $this->chiks; $i++) {
            $allCountEggs = new chik;
            $this->allEggs += $allCountEggs->eggs;
    } 
    echo 'Яиц собрано' .$this->allEggs .'<br>'; }
    for ($i = 0; $i<=7; $i++) {

    
        for ($i = 0;$i < $this->cows; $i++) {
            $allCountMilk = new cow;
            $this->allMilk += $allCountMilk->milk;
        } 
       echo 'Молока надоено' .$this->allMilk .'<br>' ; 

}
    }
  }

$co = new farmCountOnDay();
$co -> cows += 1 ;
$co -> chiks += 5 ;
echo  $co->getAll();
  ?>
    </body>
</html>
 