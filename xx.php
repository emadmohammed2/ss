<?php
class emadS {  
    public $emadS;
    public function MYemadS(){
        $this->emadS = 'asd';
        $this->emadS = str_replace("a","A",$this->emadS);
        $this->emadS = str_replace("s","S",$this->emadS);
        $this->emadS = str_replace("d","D",$this->emadS);
        return $this->emadS;
    }
}
$class_emadS = new emadS();
$emadS = $class_emadS -> MYemadS();

echo $emadS;
?>
