document.addEventListener('DOMContentLoaded', function() {

    // Écouter les événements de changement pour les filtres
    var priceFilter = document.getElementById('price-filter');

    var starFilters = document.querySelectorAll('#stars-filter input[type="checkbox"]');

  
    priceFilter.addEventListener('change', filterCards);
    starFilters.forEach(function(checkbox) {
      checkbox.addEventListener('change', handleStarFilter);
    });
  
    // Fonction de filtrage des cards
    function filterCards() {
      console.log(priceFilter)
      console.log(starFilters)
      var selectedPrice = priceFilter.value;
      var selectedStars = Array.from(starFilters)
        .filter(function(checkbox) {
          return checkbox.checked;
        })
        .map(function(checkbox) {
          return parseInt(checkbox.value);
        });
  
      var cards = document.querySelectorAll('.card-restaurant-hotel');
  
      cards.forEach(function(card) {
        var cardPrice = card.querySelector('.card-price').textContent.trim();
        var cardStars = (card.querySelector('.card-stars').textContent.match(/★/g) || []).length;
        console.log(cardStars);
  
        // Vérifier si le card passe les critères de filtre
        var pricePass = selectedPrice === '' || cardPrice === selectedPrice;
        console.log(selectedPrice);
        console.log(cardPrice);
        console.log(pricePass);
        var starsPass = selectedStars.length === 0 || selectedStars.length === cardStars;

  
        // Afficher ou masquer le card en fonction des résultats du filtre
        if (pricePass && starsPass) {
          card.style.display = 'block';
        } else {
          card.style.display = 'none';
        }
      });
    }
  
    // Gérer le filtre des étoiles
    function handleStarFilter() {

      var checkedStar = parseInt(this.value);
      console.log(checkedStar);
  
      // Activer les étoiles inférieures et désactiver les étoiles supérieures
      starFilters.forEach(function(checkbox) {
        var starValue = parseInt(checkbox.value);
  
        if (starValue <= checkedStar) {
          checkbox.checked = true;
        } else {
          checkbox.checked = false;
        }
      });
  
      // Actualiser les filtres
      filterCards();
    }
  });
  