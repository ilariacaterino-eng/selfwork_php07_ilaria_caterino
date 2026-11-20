<?php
// 1 la password deve essere almeno di 8 caratteri
// 2 deve contenere una tellera maiuscola
// 3 deve contenere almeno un numero
// deve contenere almeno un carattere speciale

// $userPassword = readline("inserisci la psw: ");


// check lunghezza
// dichiarando la variabile d'appoggio come true potremmo avere un errore che non mi fa avere un return e quindi la stampa di un falso positivo
$lenght = false;
function lenghtCheck($password){
    if(strlen($password) >= 8){
        return true; 
    }
    echo "La password deve contenere 8 caratteri \n";
    return false;
};
// $lenght = lenghtCheck($userPassword);


   
// prima di usare is_numeric usiamo il ciclo for
// check numeri
$number = false;
function numberCheck($password){
    for($i = 0; $i < strlen($password); $i++){
        if(is_numeric($password[$i])){
            return true;
        }
    }
    echo "La password deve contenere almeno un numero \n";
    return false;
};
// $number = numberCheck($userPassword);


// check maiuscole
$maiusc = false;
function maiuscCkech($password){
    for($i = 0; $i < strlen($password); $i++){
        if(ctype_upper($password[$i])){
            return true;
        }
    }
    echo "la password deve contenere almeno una lettera maiuscola \n";
    return false; 
};
// $maiusc = maiuscCkech($userPassword);

// function globalCheck($password){
//     $lenght = lenghtCheck($password);
//     $number = numberCheck($password);
//     $maiusc = maiuscCkech($password);

//     if($lenght == true && $number == true && $maiusc == true){
//         echo "Password valida \n";
//     }else{
//         echo "Password non valida \n";
//     };
// }
$special = false;
function checkSpecial($password){
    $specialChars = ['!', '@','?','#','$', '&'];
    for($i = 0; $i < strlen($password); $i ++){
        if(in_array($password[$i], $specialChars)){
            return true;
        }
    }
    echo "La password deve contenere almeno un carattere speciale \n";
    return false;
};

function globalCheck($string){
    if(lenghtCheck($string) && numberCheck($string) && maiuscCkech($string) && checkSpecial($string)){
        echo "Password valida \n";
        return true;
    }else{
        echo "password non valida \n";
        return false;
    }
};



