<?php
namespace App; 

class example{

    private $foo;
    private $foo1;

    public function __construct(Foo $foo,FooUno $uno){
     $this->foo = $foo;
     $this->foo1 = $uno;
    }

}

?>