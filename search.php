<?php include("components/nav.php"); ?>
<link rel="stylesheet" href="/css/style.css">

<div class="search-page">

    <div class="search-box">

        <h2>Find Products</h2>

        <div class="search-input-group">
            <input
                type="text"
                id="searchInput"
                placeholder="Search for Games, consoles, accessories..."
            >

            <button onclick="searchProduct()">
                <i class="fa-solid fa-search"></i>
            </button>
        </div>

    </div>

</div>

<div class="product-container">
    <h3 class="search-message">
        Search for products to begin 
    </h3>
</div>

<?php include("components/footer.php"); ?>


<script src="/js/cart-function.js"></script>
<script src="/js/cart-counter.js"></script>
<script src="js/search.js"></script>