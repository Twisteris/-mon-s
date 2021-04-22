<div class="container">
    <div class="row bg-dark mt-4">


        <?php $db->Store_Record(); ?>

        <form method="POST">
            <div class="row">
                <div class="col-md my-2">
                <input type="text" name="Imone" placeholder="Įmonės pavadinimas" class="form-control" required>
                </div>
                <div class="col-md my-2">
                <input type="text" name="Adresas" placeholder="Adresas" class="form-control" required>
                </div>
                <div class="col-md my-2">
                <input type="text" name="Telefonas" placeholder="Telefonas" class="form-control" required>
                </div>
                <div class="col-md my-2">
                <input type="text" name="Vadovas" placeholder="Vadybininkas" class="form-control" required>
                </div>
                <div class="col-md my-2">
                <input type="text" name="PVM" placeholder="PVM" class="form-control" required>
                </div>
                <div class="col-md my-2 text-center">
                <button class="btn btn-secondary w-75" name="btn_save">Išsaugoti</button>
                </div>
            </div>
        </form>

    </div>

</div>