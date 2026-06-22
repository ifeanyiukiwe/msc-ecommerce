let allProducts = [];

/* LOAD PRODUCTS FROM DATABASE */
fetch("get_products.php")
  .then((res) => res.json())
  .then((products) => {
    allProducts = products;
    // displayProducts(products);
  });

/*  SEARCH BUTTON CLICK */
function searchProduct() {
  const value = document
    .getElementById("searchInput")
    .value.toLowerCase()
    .trim();

  /* prevent empty search */
  if (value === "") {
    document.querySelector(".product-container").innerHTML =
      "<h3 class='search-message'>Please enter a product name</h3>";
    return;
  }

  const result = allProducts.filter(
    (product) =>
      product.name.toLowerCase().includes(value) ||
      product.description.toLowerCase().includes(value),
  );

  displayProducts(result);
}

/* DISPLAY PRODUCTS*/
function displayProducts(products) {
  const container = document.querySelector(".product-container");

  if (products.length === 0) {
    container.innerHTML = "<h3 class='no-result'>No products found...</h3>";
    return;
  }

  //   container.innerHTML = products
  //     .map(
  //       (product) => `

  // <div class="product-card">

  //     <div class="product-img">
  //         <img src="images/${product.image}"
  //         alt="${product.name}">
  //     </div>

  //     <div class="product-info">
  //         <h3>${product.name}</h3>
  //         <p>${product.description}</p>

  //         <div class="product-bottom">
  //             <span class="price">£${product.price}</span>

  //             <button class="cart-btn">
  //                 <i class="fa-solid fa-shopping-cart"></i>
  //             </button>
  //         </div>
  //     </div>

  // </div>

  // `,
  //     )
  //     .join("");

  container.innerHTML = products
    .map(
      (product) => `

<div class="product-card">

    <div class="product-img">
        <img src="images/${product.image}">
    </div>

    <div class="product-info">

        <h3>${product.name}</h3>

        <p>${product.description}</p>

        <div class="product-bottom">

            <span class="price">
                £${product.price}
            </span>

            <button
              class="cart-btn"
              onclick="addToCart(${product.id})">

              <i class="fa-solid fa-cart-shopping"></i>

            </button>

        </div>

    </div>

</div>

`,
    )
    .join("");
}
