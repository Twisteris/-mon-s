<?php
$id = $_GET['M_ID'];
$result = $db->get_record($id);
$data = mysqli_fetch_assoc($result);
?>
<div class="row">
    <div class="col">
        
           
                <?php
                $db->display_message();
                $db->display_message();
                ?>
                <table class="table table-dark table-hover mt-4 text-center">
                <thead>
                    <tr>
                        <td style=""> Imone </td>
                        <td style=""> ID </td>
                        <td style=""> Adresas </td>
                        <td style=""> Telefonas </td>
                        <td style=""> Vadovas </td>
                        <td style=""> PVM </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $data['Imone'] ?></td>
                        <td><?php echo $data['ID'] ?></td>
                        <td><?php echo $data['Adresas'] ?></td>
                        <td><?php echo $data['Telefonas'] ?></td>
                        <td><?php echo $data['Vadovas'] ?></td>
                        <td><?php echo $data['PVM'] ?></td>
                    </tr>
                </tbody>
                </table>
            
        
    </div>
</div>