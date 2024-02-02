<?php
    //include_once "../../controller/role.php";
    include_once "../base.php";
?>
    <h1 class="text-center mt-5 mb-5">Créer une Agence</h1>

    <h3 class="text-center" id="message"></h3>


    <form id="formProfessional" class="mx-auto col-6" >

    <label for="name">Nom de Agence</label>
    <input class="form-control" type="text" name="name">

    <label for="mail">Email</label>
    <input class="form-control" type="text" name="mail">

    <label for="psw">Mot de passe</label>
    <input class="form-control" type="password" name="psw" >

    <input class="form-control mt-3 btn btn-secondary" type="submit" value="Ajouter">

    </form>
</body>
</html>
<script>
    const formpro = document.getElementById('formProfessional')

    formpro.addEventListener("submit", function(e){
        e.preventDefault();

        const formData = new FormData(e.target);

        const data = {
            method: "POST",
            body: formData,
        } 

        fetch("controller/admin/ajax_create_ctrl_professional.php", data)
            .then(response => response.json())
            .then(data =>{
                console.log(data)
                
            })
        })
</script>