<?php

    
    
 /*      isset() ;  // 检查是否存在 
       
       
       unset() ;  // 清除变量
       
       
       empty() ;  // 判断是否为空   有返回值
       
       * 
       * */


//  unset() ;  // 清除变量
    $a = 1  ; 
   
    
   
    unset($a) ;
    

    $b =  $a + 1 ; 
    
    
    echo  $b  ; 
    
    
//    empty() ;  // 判断是否为空   有返回值
    
$c = 1  ; 
echo  var_dump(empty($c) );   //结果为false 证明不为空， 结果是true 证明是 空的 
    
    



?>