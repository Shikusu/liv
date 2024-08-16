<?php
include 'header.php';
include '../Model/produitModel.php';

$list_row=5;

if (!isset($_GET['number'])) {
    $first=0;
}else{
    $first=($_GET['number']-1)*$list_row;
}
?>
<div class="content mx-5 container">
    <div class="row mt-5">
        <div class="col-6">
        <form action="../Controller/produitController.php" method="post" class="rounded border border-3 pt-4 pb-5 px-4 border-opacity-25 border-dark-subtle ">
            <h3 class="text-center pb-4"><?php echo isset($_GET['to_change'])?'Mise à jour de catégorie:':'Nouvelle catégorie :' ?></h3>
            <?php echo isset($_GET['to_change'])?'<input name="id" type="text" hidden value="'.$_GET['id'].'">':'' ?>
            <div class="form-group">
                <label class="fw-bold" for="categ">Catégorie du produit:</label>
                <input value="<?php echo isset($_GET['to_change'])?$_GET['cat']:'' ?>" type="text" autocomplete="off" class="form-control my-3" id="categ" placeholder="Entrez la désignation de la catégorie" name="designation" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block " name="<?php echo isset($_GET['to_change'])?'modifier':'ajouter' ?>"><?php echo isset($_GET['to_change'])?'Modifier':'Ajouter' ?></button>
        </form>
        <div class="mt-3 pt-4 border border-2 border-success rounded-3 px-3">
            <h3 class="text-center">Catégories les plus fréquents:</h3>
            <div class="container-fluid">

            <table id="productSizes" class="table">
                <thead>
                    <tr class="d-flex">
                        <th class="col-6">Catégorie</th>
                        <th class="col-6">Fréquence de Livraison</th>
                    </tr>
                </thead>
                <tbody>

                    <tr class="d-flex">
                        <td class="col-8">Eléctronique</td>
                        <td class="col-4">69</td>
                    </tr>
                    <tr class="d-flex">
                        <td class="col-8">Artisanale</td>
                        <td class="col-4">420</td>
                    </tr>
                    <tr class="d-flex">
                        <td class="col-8">Autre</td>
                        <td class="col-4">9</td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div> 
        </div>
        <div class="col-6">
        <table id="productSizes" class="table">
                <thead class="thead-dark">
                    <tr class="d-flex">
                        <th class="col-2 text-center">Code</th>
                        <th class="col-6 text-center">Catégorie</th>
                        <th class="col-4 text-center">Actions</th>
                    </tr>
                </thead>
                <?php 
                $produit=new Produit();
                $result=$produit->get_categories($first, $list_row);
                if ($result->num_rows > 0) {
        ?>
                <tbody>
                <?php while ($row = $result->fetch_assoc()) {
                        
                    echo'<tr class="d-flex">';
                    echo'<td class="col-2 text-center">'.$row['ID_CATEGORIE'].'</td>';
                    echo'<td class="col-6">'.$row['Categorie'].'</td>';
                    echo'<td class="col-2"><a href="../Controller/produitController.php?edit=a&code='.$row['ID_CATEGORIE'].'"><img src="../public/images/icons/pencil-square.svg" alt="Modifier"></a></td>';
                    echo'<td class="col-2"><a href="../Controller/produitController.php?delete=a&code='.$row['ID_CATEGORIE'].'"><img src="../public/images/icons/trash.svg" alt="Supprimer"></a></td>';
                    echo'</tr>'; 
                }
            }    
                ?>


                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                <ul class="pagination">
                
                <?php 
                
                
                if ($first>0) {
                    $prev=((($first/5)+1))-1;
                    $next=((($first/5)+1))+1;
                    echo"<li class='page-item'><a class='page-link text-dark' href='?number=$prev'>Précédent</a></li>";
                }else{
                    $next=2;
                }
                $list_val=$produit->enum_Categorie();
                $dupe=$list_val;
                $list_number=1;
                while ($dupe>0) {
                    if (!isset($_GET['number'])) {
                        if ($list_number == 1) {
                            $active=$list_number;
                            echo "<li class='page-item active'><a class='page-link' href='?number=$list_number'>$list_number</a></li>";
                        } else {
                            echo "<li class='page-item'><a class='page-link text-dark' href='?number=$list_number'>$list_number</a></li>";
                        }
                    } else {
                        if ($list_number == $_GET['number']) {
                            $active=$list_number;
                            echo "<li class='page-item active'><a class='page-link' href='?number=$list_number'>$list_number</a></li>";
                        } else {
                            echo "<li class='page-item'><a class='page-link text-dark' href='?number=$list_number'>$list_number</a></li>";
                        }
                    }
                    
                    $list_number++;
                    $dupe-=$list_row;
            }
            if (!($active==($list_number-1) )) {
                echo"<li class='page-item'><a class='page-link text-dark' href='?number=$next'>Suivant</a></li>";
            }

            ?>
                </ul>
            </div>
        </div>
    </div>


</div>
<?php
include 'footer.php';
?>