<center>
<?php
 
 // 1. Buat 1 parent class yang berisikan 2 method
 class cookWithMe{
     function cooking1(){
         echo "TOP LIST RAMADHAN MEAL <br><br>" ;
     }
 
     function cooking2(){
         echo "TOP RATING RAMADHAN MEAL <br><br>" ;
     }
 }
 
 $baseParent = new cookWithMe();
 $baseParent->cooking1();
 
 
 // 2. Buat 1 abstract class yang berisikan 2 abstract method.
 abstract class cookWithMe_abstrak {
     abstract function childOne($name);
     abstract function childTwo($name);
 }
 
 // 3. Buat 1 child class yang mengextend abstract class yang telah dibuat.
 
 class anak extends cookWithMe_abstrak{
     public function childOne($name){
         echo "TAKJIL : " . $name ;
     }
 
     public function childTwo($name){
         echo "MINUMAN: " . $name ;
     }
 }
 
 $class = new anak();
  $class->childOne("
     <br> 1. CILOK
     <br> 2. TEMPE MENDOAN
     <br> 3. OTE - OTE BAKWAN
     <br>
     <br>
  ");
 
  $class->childTwo("
     <br> 1. ES CAMPUR
     <br> 2. ES KOPYOR
     <br> 3. ES BUAH
     <br>
  ");
 
  echo "<br>";
  $baseParent->cooking2();
 // 4. Buat trait untuk masing-masing abstract method yang telah dibuattadi.
 trait trait_parentClass{
     public function childOne($name){
         echo "1.ES CAMPUR : " . $name;
     }
 
     public function childTwo($name){
         echo " 2.TEMPE MENDOAN  : " . $name ;
     }
 
     public function childThree($name){
         echo "3.ES BUAH : " . $name ;
     }
 }
 
 class anak1{
     use trait_parentClass;
 }
 
 class anak2{
     use trait_parentClass;
 }
 class anak3{
     use trait_parentClass;
 }
 
 $class1 = new anak1();
 $class1->childOne("9.6 <br>");
 
 
 $class2 = new anak2();
 $class2->childTwo("9.2 <br>");
 
 
 $class2 = new anak3();
 $class2->childThree("9.0 <br>");
 
 ?>
    </center>