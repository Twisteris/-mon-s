<?php
$db->update();
$id = $_GET['U_ID'];
$result = $db->get_record($id);
$data = mysqli_fetch_assoc($result);
?>

<?php $db->Store_Record(); ?>

<div class="container">

<form action="<?= route('edit') ?>" method="POST">

    <div class="row bg-dark mt-4">

        <input type="hidden" name="ID" value="<?php echo $data['ID']; ?>">

        <div class="col-md my-2">
            <input type="text" name="Imone" placeholder="Įmonės pavadinimas" class="form-control" required value="<?php echo $data['Imone']; ?>">
        </div>
        <div class="col-md my-2">
            <input type="text" name="Adresas" placeholder="Adresas" class="form-control" required value="<?php echo $data['Adresas']; ?>">
        </div>
        <div class="col-md my-2">
            <input type="text" name="Telefonas" placeholder="Telefonas" class="form-control" required value="<?php echo $data['Telefonas']; ?>">
        </div>
        <div class="col-md my-2">
            <input type="text" name="Vadovas" placeholder="Vadybininkas" class="form-control" required value="<?php echo $data['Vadovas']; ?>">
        </div>
        <div class="col-md my-2">
            <input type="text" name="PVM" placeholder="PVM" class="form-control" required value="<?php echo $data['PVM']; ?>">
        </div>
        <div class="col-md my-2 text-center">
            <button class="btn btn-secondary w-75" name="btn_update">Keisti</button>
        </div>

    </div>
</form>

</div>