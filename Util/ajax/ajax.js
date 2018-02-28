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

});

$(document ).ready(function(){
    // bind change event to select
    $('#selectNbLigne').on('change', function () {
        var url = "index.php?c=accueil&a=listeClients&selectNbLigne="+$(this).val()+"";
        if (url) { // require a URL
            window.location = url; // redirect
        }
        return false;
    });
});
