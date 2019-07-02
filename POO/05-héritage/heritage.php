<?php
class A
{
    public function test1()
    {
        return "test1<hr>";
    }
}
//----------------------------
class B extends A 
{
    public function test2()
    {
        return 'test2<hr>';
    }
}
//------------------------------
class C extends B 
{
    public function test3()
    {
        return "test3<hr>";
    }
}
//-------------------------
$test = new C;

echo '<pre>'; print_r(get_class_methods($test)); '</pre>'; // permet d'afficher les methods issues de la class
echo $test->test1() . '<hr>';
echo $test->test2() . '<hr>';
echo $test->test3() . '<hr>';

// Si la class B herite de A et que la classe C herite de B la classe C herite de tout 





