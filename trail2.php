<div class="container">		
  <h2>@ ASTRA MEDICAL COMMUNICATIONS</h2>
  <!-- Add the search form and button -->
  <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" id="searchInput">
    <button class="btn btn-outline-success my-2 my-sm-0" type="button" id="searchButton">Search</button>
  </form>

  <!-- Rest of your content -->
  <?php
  include 'inc/menu.php';
  include 'class/Rating.php';
  $rating = new Rating();
  $itemList = $rating->getItemList();
  foreach($itemList as $item){
    $average = $rating->getRatingAverage($item["id"]);
  ?>	
  <div class="row">
    <!-- Your existing content -->
  </div>
  <?php } ?>	
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
  const searchButton = document.getElementById('searchButton');
  const searchInput = document.getElementById('searchInput');

  searchButton.addEventListener('click', function() {
    const searchTerm = searchInput.value.toLowerCase();
    const productNames = document.querySelectorAll('.col-sm-4 h4');
    const productRows = document.querySelectorAll('.row');

    productRows.forEach(function(row) {
      const productName = row.querySelector('.col-sm-4 h4').textContent.toLowerCase();
      if (productName.includes(searchTerm)) {
        row.style.display = 'block';
      } else {
        row.style.display = 'none';
      }
    });
  });
});
</script>

