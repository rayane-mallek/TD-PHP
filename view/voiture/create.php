<form method="post" action='index.php?action=created'>
    <fieldset>
        <legend>Mon formulaire :</legend>
            <p>
                <label for="immat_id">Immatriculation</label> :
                <input type="text" placeholder="256AB34" name="immatriculation" id="immat_id" required/>
            </p>
            <p>
                <label for="marq_id">Marque</label> :
                <input type="text" placeholder="Infinity" name="marque" id="marq_id" required/>
            </p>
            <p>
                <label for="coul_id">Couleur</label> :
                <input type="text" placeholder="rouge" name="couleur" id="coul_id" required/>
            </p>
            <p>
                <input type="submit" value="Envoyer" />
            </p>
    </fieldset>
</form>


