<?php
 //estrutura do PHP

 //comentario em linha
 //*
 *comentario em linha
 *
 * /
 echo"Olá mundo";
 
 //Tipos de dados
 // tring tioSam;

 /**
  * para declarar uma variavel em php
  *devemos utilizar o sinal de $
  */
  

  $nome = "Calleri"; //String
  $idade = 34; //inteiro
  $altura = 1.87; //double
  $peso = 87.6 //double
  $isVacinada = false; //boolean

  echo"Nome:  $nome<br>\n;
        idade: $idade<br>\n;
        altura: $altura <br>\n;
        peso: $peso <br>\n
        Vacinado(a): $isVacinada"

    
    if($idade) >= 18{
      echo "$nome, é maior de idade e possui $idade anos";
    }else{
      echo "$nome, é menor de idade e possui $idade anos";

    }

    echo"<br>\nLaços<br>\n";
    
    for ($i=1; $i <=100 ; $i++) {
        if($i%2==0){
          echo"$i <br>\n";  
        }
      
    
    
    
    
    }

    


    

  
?>