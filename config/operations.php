<?php 

    
    require_once('./config/dbconfig.php');
    require_once('./config/validation.php');
    $db = new dbconfig();

    

    class operations extends dbconfig
    {
        private function query($query){
            global $db;
            return mysqli_query($db->connection,$query);
        }
        public function Store_Record()
        {
            global $db;
            if(isset($_POST['btn_save']))
            {
                $Imone = $db->check($_POST['Imone']);
                $Vadovas = $db->check($_POST['Vadovas']);
                $Adresas = $db->check($_POST['Adresas']);
                $PVM = $db->check($_POST['PVM']);
                $Telefonas = $db->check($_POST['Telefonas']);


                if (validator::invalid_chars($Imone,'Imone')) {
                    return;
                };
                if (validator::invalid_chars($Vadovas,'Vadovas')) {
                    return;
                };
                if (validator::invalid_chars($Adresas,'Adresas')) {
                    return;
                };
                if (validator::invalid_chars($PVM,'PVM')) {
                    return;
                };
                if (validator::invalid_chars($Telefonas,'Telefonas')) {
                    return;
                };

                if (validator::invalid_length($Imone,'Imone')) {
                    return;
                };
                if (validator::invalid_length($Vadovas,'Vadovas')) {
                    return;
                };
                if (validator::invalid_length($Adresas,'Adresas')) {
                    return;
                };
                if (validator::invalid_length($PVM,'PVM')) {
                    return;
                };
                if (validator::invalid_length($Telefonas,'Telefonas')) {
                    return;
                };


                if($this->insert_record($Imone,$Vadovas,$Adresas,$PVM,$Telefonas))
                {
                    echo '<div class="alert alert-success"> Issaugotas </div>';
                }
                else
                {
                    echo '<div class="alert alert-danger"> Failed </div>';
                }
            }
        }
        function insert_record($a,$b,$c,$d,$e)
        {
            $result = $this->query("insert into info (Imone,Vadovas, Adresas,PVM,Telefonas) values('$a','$b','$c','$d','$e')");

            if($result)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        public function view_record()
        {
            return $this->query("select * from info");
        }
        // Get Particular Record
        public function get_record($id)
        {
            return $this->query("select * from info where ID='$id'");
        }
        public function update()
        {
            global $db;

            if(isset($_POST['btn_update']))
            {
                $ID = $_POST['ID'];
                $Imone = $db->check($_POST['Imone']);
                $Vadovas = $db->check($_POST['Vadovas']);
                $Adresas = $db->check($_POST['Adresas']);
                $PVM = $db->check($_POST['PVM']);
                $Telefonas = $db->check($_POST['Telefonas']);

                if($this->update_record($ID,$Imone,$Vadovas,$Adresas,$PVM,$Telefonas ))
                {
                    $this->set_messsage('<div class="alert alert-success"> Modikuota</div>');
                    header("location:?route=view");
                }
                else
                {   
                    $this->set_messsage('<div class="alert alert-success"> Something Wrong : )</div>');
                }

               
            }
        }
        public function update_record($id,$first,$Vadovas,$User,$PVM,$Telefonas)
        {
            $result = $this->query("update info set Imone='$first', Vadovas='$Vadovas', Adresas='$User', PVM='$PVM', Telefonas='$Telefonas' where ID='$id'");
            if($result)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        public function set_messsage($msg)
        {
            if(!empty($msg))
            {
                $_SESSION['Message']=$msg;
            }
            else
            {
                $msg = "";
            }
        }
        // Display Session Message
        public function display_message()
        {
            if(isset($_SESSION['Message']))
            {
                echo $_SESSION['Message'];
                unset($_SESSION['Message']);
            }
        }
        public function Delete_Record($id)
        {
            $result =  $this->query("delete from info where ID='$id'");
            if($result)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        public function search($name){
            return $this->query("select * from info where Imone like '%".$name."%'");
        }
    }
?>