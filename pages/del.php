<?php 
    if(isset($_GET['D_ID']))
    {
        global $db;
        $ID = $_GET['D_ID'];

        if($db->Delete_Record($ID))
        {
            
            $db->set_messsage('<div class="alert alert-danger">  Istrinta </div>');
            //echo "test";
            header("location:?route=view");
        }
        else
        {
            $db->set_messsage('<div class="alert alert-danger">  Something Wrong to Delete the Record </div>'); 
        }
    }
?>