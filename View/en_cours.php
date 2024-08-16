<?php
include 'header.php';
?>
<div class="content mx-3 mt-5 container">
    <div class="row">
        <div class="col-4 ">
        <form action="../Controller/produitController.php" method="post" class="rounded border border-3 pt-4 pb-5 px-4 border-opacity-25 border-dark-subtle ">
            <h3 class="text-center pb-4">Nouvelle livraison:</h3>
            <?php echo isset($_GET['to_change'])?'<input name="id" type="text" hidden value="'.$_GET['id'].'">':'' ?>
            <div class="form-group">
                <label class="fw-bold" for="categ">label:</label>
                <input value="<?php echo isset($_GET['to_change'])?$_GET['cat']:'' ?>" type="text" autocomplete="off" class="form-control my-3" id="categ" placeholder="" name="designation" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block " name="<?php echo isset($_GET['to_change'])?'modifier':'ajouter' ?>"><?php echo isset($_GET['to_change'])?'Modifier':'Ajouter' ?></button>
        </form>
        </div>

        <div class="col-8 ">
        <table class="table table-bordered">
            <thead>
                <tr class="d-flex">
                    <th class="col-2">Date de dépot</th>
                    <th class="col-3">Expéditeur</th>
                    <th class="col-2">Livreur</th>
                    <th class="col-3">Destination</th>
                    <th class="col-2">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="d-flex">
                    <td class="col-2">20/09/2021</td>
                    <td class="col-3">Mark</td>
                    <td class="col-2">Otto</td>
                    <td class="col-3">@mdo</td>
                    <td class="col-2"> <div class="d-grid gap-2">
                        <button
                            type="button"
                            name=""
                            id=""
                            class="btn btn-primary"
                        >
                            Livré
                        </button>
                    </div>
                    </td>
                </tr>
                <tr class="d-flex">
                    <td class="col-2">20/09/2021</td>
                    <td class="col-3">Mark</td>
                    <td class="col-2">Otto</td>
                    <td class="col-3">@mdo</td>
                    <td class="col-2"> <div class="d-grid gap-2">
                        <button
                            type="button"
                            name=""
                            id=""
                            class="btn btn-primary"
                        >
                            Livré
                        </button>
                    </div>
                    </td>
                </tr>
                <tr class="d-flex">
                    <td class="col-2">20/09/2021</td>
                    <td class="col-3">Mark</td>
                    <td class="col-2">Otto</td>
                    <td class="col-3">@mdo</td>
                    <td class="col-2"> <div class="d-grid gap-2">
                        <button
                            type="button"
                            name=""
                            id=""
                            class="btn btn-primary"
                        >
                            Livré
                        </button>
                    </div>
                    </td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>