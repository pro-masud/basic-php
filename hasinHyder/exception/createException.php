<?php

use NetworkException as GlobalNetworkException;

class MyException extends Exception{};
class NetworkException extends Exception{};

function testExpecption(){
    throw new NetworkException();
}

try{
    testExpecption();
}catch(MyException $e){
    echo "MyException Execption";
}catch(NetworkException $e){
    echo "NetworkException Execption";
}finally{
    echo "\nAll Data clear";
}