<?php
try{
    define("HOSTNAME","localhost");

    define("DBNAME","hotel");
    
    define("USER","root");
    
    define("PASS","");

    $conn = new PDO("mysql:host=".HOSTNAME.";dbname=".DBNAME.";",USER,PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    // if($conn == true){
    //     echo "Database ";
    // }else{
    //     echo "error";
    // }

}catch(PDOException $e){
    echo "Database Connection failed : ". $e->getMessage();
}
    
?>