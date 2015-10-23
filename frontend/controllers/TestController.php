<?php

namespace frontend\controllers;

class TestController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionTest1() {
     //   return $this->render('test1');
       
        $a = 5;
        $b = 5;
        $num=$a+$b;
       
        $val = ['sum'=> $num,'a'=>$a,'b'=>$b];
        return $this->render('test1',$val);
        

        // echo "21 TEST";    
    }
    
      public function actionTest2($name =NULL,$lname=NULL) {
   
         $data = "NAME IS".$name." ".$lname;
         return $this->render('test2',['name'=>$data]);
       //   echo "Your Names is ..".$name;
       // return $this->render('test2',$val);
        

       
    }

}
