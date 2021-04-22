<?php
class validator{
    static public function invalid_chars($data, $name){
        if(str_contains($data, "<")){
            echo '<div class="alert alert-danger"> '.$name.' negali buti netinkamu zenklu</div>';
          return true;
      }
      else{
        return false;
      }
    }
    static public function invalid_length($data, $name){
        if(strlen($data) > 15){
            echo '<div class="alert alert-danger"> '.$name.' tekstas per ilgas</div>';
          return true;
      }
      else{
        return false;
      }
    }
}
?>