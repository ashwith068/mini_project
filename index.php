<?php 
session_start();
include('inc/header.php');
?>
<title>@ ASTRA</title>
<script src="js/rating.js"></script>
<link rel="stylesheet" href="css/style.css">
<?php include('inc/container.php');?>
<div class="container">		
	<h2>@ ASTRA MEDICAL COMMUNICATIONS</h2>
 <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" id="searchInput">
    <button class="btn btn-outline-success my-2 my-sm-0" type="button" id="searchButton">Search</button>
  </form>












	<?php
	include 'inc/menu.php';
	include 'class/Rating.php';

	$rating = new Rating();
	$itemList = $rating->getItemList();
	foreach($itemList as $item){
		$average = $rating->getRatingAverage($item["id"]);
	?>	
	<div class="row">
		<div class="col-sm-2" style="width:150px">
			<img class="product_image" src="image/<?php echo $item["image"]; ?>" style="width:100px;height:200px;padding-top:10px;">
		</div>
		<div class="col-sm-4">
		<h4 style="margin-top:10px;"><?php echo $item["name"]; ?></h4>

		<div><span class="average"><?php printf('%.1f', $average); ?> <small>/ 5</small></span> <span class="rating-reviews"><a href="show_rating.php?item_id=<?php echo $item["id"]; ?>">Rating & Reviews</a></span></div>
		<?php echo $item["description"]; ?>		
		</div>	
<div class="col-sm-3">
				<button type="button" id="rateProduct" class="<span class="rating-reviews"><a href="show_rating.php?item_id=<?php echo $item["id"]; ?>">Rating & Reviews</a></span></button>
			</div>		

	</div>
	<?php } ?>	


<?php include('inc/footer.php');?>

<!-- Add the following script after your existing script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  const searchButton = document.getElementById('searchButton');
  const searchInput = document.getElementById('searchInput');
  const notFoundMessage = document.createElement('div');
  notFoundMessage.classList.add('not-found-message');
  notFoundMessage.textContent = 'Not found.';
  searchInput.parentNode.insertBefore(notFoundMessage, searchInput.nextSibling);

  // Function to perform the search
  function performSearch() {
    const searchTerm = searchInput.value.toLowerCase();
    const productRows = document.querySelectorAll('.row');
    let found = false;

    productRows.forEach(function(row) {
      const productName = row.querySelector('.col-sm-4 h4').textContent.toLowerCase();
      if (productName.includes(searchTerm)) {
        row.style.display = 'block';
        found = true;
      } else {
        row.style.display = 'none';
      }
    });

    if (!found) {
      // Show popup for not found
      alert('Product not found.');
      // Redirect to index.php
      window.location.href = 'index.php';
    } else {
      notFoundMessage.style.display = 'none';
    }
  }

  searchButton.addEventListener('click', function() {
    performSearch();
    return false; // Prevent form submission
  });

  searchInput.addEventListener('keydown', function(event) {
    if (event.key === 'Enter') {
      performSearch();
      event.preventDefault(); // Prevent default "Enter" behavior (e.g., form submission)
    }
  });
});
</script>
