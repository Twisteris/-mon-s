<?php
if (isset($_POST['search'])) {
    $result = $db->search($_POST['search']);
} else {
    $result = $db->view_record();
}
?>
<div class="row">
    <div class="col">
        <div class="mt-4">
            <form action="<?= route('view') ?>" method="post">
                <div class="input-group">
                    <input class="form-control" name="search" type="text">
                    <input class="btn btn-dark " type="submit" value="Ieškoti">
                </div>

            </form>
        </div>


        <?php
        $db->display_message();
        $db->display_message();
        ?>
        <table class="table table-dark table-hover mt-4">
            <thead>
                <tr>
                    <td style="width: 10%">Įmonė</td>
                    <td style="width: 10%">ID</td>
                    <td style="width: 10%">Telefonas</td>
                    <td style="width: 10%" colspan="2">Keisti</td>
                </tr>
            </thead>
            <tbody class="">
                <?php
                while ($data = mysqli_fetch_assoc($result)) {?>
                    <td><a class="link-light" href="<?= route('more') ?>&M_ID=<?= $data['ID'] ?>"> <?= $data['Imone'] ?></a></td>
                    <td><?= $data['ID'] ?></td>
                    <td><?= $data['Telefonas'] ?></td>
                    <td><a href="<?= route('edit') ?>&U_ID=<?= $data['ID'] ?>" class="btn btn btn-secondary w-100">Keisti</a></td>
                    <td class="text-center"> <a href="<?= route('del') ?>&D_ID=<?= $data['ID'] ?>" class="btn btn-danger w-50">Trinti</a></td>
                   
                    </tr>
                <?php }?>
            </tbody>
        </table>


    </div>
</div>