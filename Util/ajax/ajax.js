$(document ).ready(function(){
    $('#selectCateg').on('change', function () {
        var idCateg = $('#selectCateg option:selected').val();
        $('#idCategHidden').val(idCateg);
        if(idCateg != 0){
            $.ajax({
                url: "Controleur/c_listeCategorie.php",
                type: "post",
                data : `idCateg=${idCateg}&a=modifier`,
                success: function(data){
                    console.log(data);
                    var parsedData = JSON.parse(data);
                    var nomCateg = parsedData.nom_categorie;
                    console.log(nomCateg);
                    $('#modifCategorie').val(nomCateg);
                }
            });
        }
    });
<<<<<<< HEAD
});
=======
});
>>>>>>> origin/createProduct
