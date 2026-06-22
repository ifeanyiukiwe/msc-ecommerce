function addToCart(productId) {
  console.log(productId);

  fetch("add_to_cart.php", {
    method: "POST",

    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },

    body: `product_id=${productId}`,
  })
    .then((res) => res.text())

    .then((data) => {
      console.log(data);

      if (typeof updateCartCount === "function") {
        updateCartCount();
      }

      alert("Product added to cart");
    })

    .catch((err) => console.log(err));
}
