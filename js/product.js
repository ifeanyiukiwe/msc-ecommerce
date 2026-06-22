fetch("get_products.php")
  .then((response) => response.json())
  .then((products) => {
    const isHome = window.location.pathname.includes("home");

    if (isHome) {
      displayProducts(products.slice(0, 4));
    } else {
      displayProducts(products);
    }
  });

/*To add products to cart */

function addToCart(productId) {
  fetch("add_to_cart.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
    body: `product_id=${productId}`,
  })
    .then((res) => res.text())
    .then((data) => {
      if (data === "login_required") {
        alert("Please login first");
        window.location = "login.php";
        return;
      }
      updateCartCount();
      // alert("Product added to cart ");
    });
}

function displayProducts(products) {
  const container = document.querySelector(".product-container");

  if (!container) return;

  container.innerHTML = products
    .map(
      (product) => `

<div class="product-card">

   <div class="product-img">
      <img src="images/${product.image}"
           alt="${product.name}">
   </div>

   <div class="product-info">

      <h3>${product.name}</h3>
      <p>${product.description}</p>

      
      <div class="rating">
         <i class="fa-solid fa-star"></i>
         <i class="fa-solid fa-star"></i>
         <i class="fa-solid fa-star"></i>
         <i class="fa-solid fa-star"></i>
         <i class="fa-solid fa-star-half-stroke"></i>
      </div>

      <div class="product-bottom">

         <span class="price">
            £${product.price}
         </span>

        
         <button class="cart-btn"
            onclick="addToCart(${product.id})">

            <i class="fa-solid fa-shopping-cart"></i>

         </button>

      </div>

   </div>

</div>

`,
    )
    .join("");
}

// function displayProducts(products) {
//   const container = document.querySelector(".product-container");

//   if (!container) return;

//   container.innerHTML = products
//     .map(
//       (product) => `

// <div class="product-card">

//    <div class="product-img">
//       <img src="images/${product.image}"
//            alt="${product.name}">
//    </div>

//    <div class="product-info">
//       <h3>${product.name}</h3>
//       <p>${product.description}</p>

//       <div class="product-bottom">
//          <span class="price">
//             £${product.price}
//          </span>
//       </div>
//    </div>

// </div>

// `,
//     )
//     .join("");
// }
