function updateCartCount() {
  fetch("cart_count.php")
    .then((res) => res.text())
    .then((count) => {
      const cartCount = document.getElementById("cart-count");

      if (cartCount) {
        cartCount.innerText = count;
      }
    });
}

updateCartCount();
