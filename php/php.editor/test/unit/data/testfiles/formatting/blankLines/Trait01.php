<?php
trait BaseTrait {
   public function test() {
       echo "BaseTrait::test() called\n";
   }

   // Some comment
   public function moreTesting() {
       echo "BaseTrait::moreTesting() called\n";
   }
}
trait ChildTrait {
    private $field1;
    var $field2;
    public function method1() {
    }
}






trait ChildTrait2 {





    public $field2 = 22;
}

?>
