<!-- Include Bootstrap CSS in your HTML -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<form action="index.php?ctl=reservation&action=ajoutReservation" method="post" class="container mt-4">
    <div class="form-group row">
        <label for="nom_produit" class="col-sm-2 col-form-label">Nom Produit</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nom_produit" name="nom_produit" value="<?php echo $data['NomProduit']; ?>"readonly>
        </div>
    </div>

    <br>

    <div class="form-group row">
        <label for="tarif" class="col-sm-2 col-form-label">Tarif</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="tarif" name="tarif" value="<?php echo $data['Tarif']; ?>"readonly>
        </div>
    </div>

    <br>

    <div class="form-group row">
        <label for="quantite" class="col-sm-2 col-form-label">Quantite</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="quantite" name="quantite" value="<?php echo $data['Quantite']; ?>">
        </div>
    </div>

    <br>

    <!-- Hidden inputs for ID and code -->
    <input type="hidden" name="produit_id" value="<?php echo $data['Produit_ID']; ?>">
    <input type="hidden" name="code_produit" value="<?php echo $data['CodeProduit']; ?>">

    <br>

    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
            <button type="submit" class="btn btn-primary">Ajouter au Pannier</button>
        </div>
    </div>
</form>

<!-- Include Bootstrap JS in your HTML (optional) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>