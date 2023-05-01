$(document).ready(function() {
    $("#category-form").submit(function(event) {
     event.preventDefault(); // Empêche le formulaire d'être envoyé
   
     // Récupère les données du formulaire
     var categoryName = $("#category-name").val().trim();
     var categoryDescription = $("#category-description").val().trim();
   
     // Vérifie que les champs sont remplis
     if (categoryName == "" || categoryDescription == "") {
      $(".error-message").text("Veuillez remplir tous les champs.");
      return;
     }
   
     // Envoie les données au serveur
     $.ajax({
      type: "POST",
      url: "ajouter-categorie.php",
      data: {
       categoryName: categoryName,
       categoryDescription: categoryDescription
      },
      success: function(response) {
       // Affiche un message de succès et réinitialise le formulaire
       alert("Catégorie ajoutée avec succès !");
       $("#category-form")[0].reset();
       $(".error-message").text("");
      },
      error: function() {
       alert("Une erreur est survenue. Veuillez réessayer.");
      }
     });
    });
   });