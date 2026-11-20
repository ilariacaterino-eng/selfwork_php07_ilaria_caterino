<?php
require('index.php');
// do{
//     $userPassword = readline("inserisci la psw: "); 
// }while(!globalCheck($userPassword));
$valida = false;
    for($i = 1; $i <= 3; $i++){
        $userPassword = readline("inserisci la psw: ");
            if(globalCheck($userPassword)){
                $valida = true;
                break;
            }else{
                $tentativiRimasti = 3 - $i;
            if($tentativiRimasti > 0 ){
                echo "ti restano ancora ". $tentativiRimasti. " tentativi \n";
                }
            }
        };    
if(!$valida){
echo "tentativi esauriti \n";
}
