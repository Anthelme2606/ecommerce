// Récupérer le formulaire
const addProductForm = document.getElementById('addProductForm');

// Ajouter un écouteur d'événement pour la soumission du formulaire
addProductForm.addEventListener('submit', function(event) {
  // Empêcher la soumission du formulaire par défaut
 // event.preventDefault();

  // Récupérer les champs du formulaire
  const productName = document.getElementById('productName').value;
  const productDescription = document.getElementById('productDescription').value;
  const productPrice = document.getElementById('productPrice').value;
  const productImage = document.getElementById('productImage').files[0];

  // Valider les champs du formulaire
  if (!productName ||!productDescription || !productPrice || !productImage) {
    alert('Veuillez remplir tous les champs');
    return;
  }
/*
  // Créer un objet FormData pour envoyer les données
  const formData = new FormData();
  formData.append('productName', productName);
  formData.append('productDescription', productDescription);
  formData.append('productPrice', productPrice);
  formData.append('productImage', productImage);

  // Envoyer les données au serveur via une requête AJAX
  const xhr = new XMLHttpRequest();
  xhr.open('POST', '/api/add-product');
  xhr.onload = function() {
    if (xhr.status === 200) {
      alert('Produit ajouté avec succès');
      addProductForm.reset();
    } else {
      alert('Erreur lors de l\'ajout du produit');
    }
  };

  xhr.send(formData);
  */
});
