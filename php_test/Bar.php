
<?php
include('Foo.php');

class Bar extends Foo
{
    public function printItem()
    {
    	$stuff = 1;
        echo $this->example;   
        //
        echo $stuff;     
        echo $cenas;
    }
}


$bar = new Bar();
$bar->printItem();
?>
