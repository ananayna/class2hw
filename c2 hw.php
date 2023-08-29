<?php 

// sum function                                   // 1st function

function sum($number1,$number2){
    $result = $number1 + $number2;

    echo "the sum is $result";
    echo "<br>";   
}

sum(20,30);
sum(50,90);
echo "<br>";   

//minus function                                 //2nd function

function minus($number1,$number2){
    $result = $number1 - $number2;

    echo "the subtraction is $result";
    echo "<br>";   
}

minus(30,20);
minus(90,50);
echo "<br>";   

//multiplication function                           //3rd function

function multiplication($number1,$number2){
    $result = $number1 * $number2;

    echo "the multiplication is $result";
    echo "<br>";   
}

multiplication(20,30);
multiplication(50,90);
echo "<br>";   

//divitionn function                               //4th function

function division($number1,$number2){
    $result = $number1 / $number2;

    echo "the quotien is $result";
    echo "<br>";   
}

division(20,30);
division(50,90);
echo "<br>"; 

//percent function                                  //5th function

function percent($number1,$number2){
    $result = $number1 % $number2;

    echo "the percent is $result";
    echo "<br>";   
}

percent(20,5);
percent(50,6);
echo "<br>";   

//power function                                      //6th function 

function power($number1,$number2){
    $result = $number1 ** $number2;

    echo "the result is $result";
    echo "<br>";   
}

power(20,2);
power(50,3);
echo "<br>"; 

//capital function                                        //7th function

function capital($name1){

    printf ("first name %s", strtoupper ($name1));
    echo "<br>";   
}

capital("ananayna");
capital("razia");
echo "<br>";   

//small function                                        //8th function       

function small($name1){

    printf ("first name %s", strtolower ($name1));
    echo "<br>";   
}

small("Debi");
small("Sultana");
echo "<br>";  

//root function                                         //9th function 

function root($number1){
    $result = sqrt($number1);

    echo "the root is $result";
    echo "<br>";   
}

root(255);
root(25);
echo "<br>"; 

//maximum function                                     //10th function 

function maxi($number1,$number2,$number3){
    $vel = max($number1,$number2,$number3);

    echo "the maximum is $vel";
    echo "<br>";   
}

maxi(20,2,9);
maxi(50,3,70);
echo "<br>"; 

//manimum function                                     //11th function 

function mini($number1,$number2,$number3){
    $vel = min($number1,$number2,$number3);

    echo "the minimum is $vel";
    echo "<br>";   
}

mini(20,2,9);
mini(50,3,70);
echo "<br>";