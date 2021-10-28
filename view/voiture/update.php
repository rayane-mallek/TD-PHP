<form method="post" action='index.php?action=updated'>
    <fieldset>
        <legend>Mon formulaire :</legend>
            <input type='hidden' name='action' value='updated'> 
            <p>
                <label for="immat_id">Immatriculation</label> :
                <input type="text" placeholder="256AB34" name="immatriculation" id="immat_id" value="<?= htmlentities($_GET['immatriculation'])?>" readonly/>
            </p>
            <p>
                <label for="marq_id">Marque</label> :
                <input type="text" placeholder="Infinity" name="marque" id="marq_id" value="<?= htmlentities($v->getMarque())?>" required/>
            </p>
            <p>
                <label for="coul_id">Couleur</label> :
                <input type="text" placeholder="rouge" name="couleur" id="coul_id" value="<?= htmlentities($v->getCouleur())?>" required/>
            </p>
            <p>
                <input type="submit" value="Envoyer" />
            </p>
    </fieldset>
</form>


