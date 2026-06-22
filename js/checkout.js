loadCheckout();

function loadCheckout() {
  fetch("get_cart.php")
    .then((res) => res.json())
    .then((items) => displayCheckout(items));
}

function displayCheckout(items) {
  const container = document.querySelector(".checkout-container");

  if (!container) return;

  if (items.length === 0) {
    container.innerHTML = "<h2>Your cart is empty</h2>";
    return;
  }

  let total = 0;

  container.innerHTML =
    items
      .map((item) => {
        total += item.price * item.quantity;

        return `

<div class="checkout-card">

  <div class="checkout-img">
    <img src="images/${item.image}" 
         alt="${item.name}">
  </div>

  <div class="checkout-info">

    <h3>${item.name}</h3>

    <div class="rating">
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star-half-stroke"></i>
    </div>

    <div class="checkout-bottom">
      <span class="price">
        £${item.price}
      </span>

      <span class="qty">
        Qty: ${item.quantity}
      </span>
    </div>

  </div>

</div>

`;
      })
      .join("") +
    `
<div class="checkout-total">

<h2>Total: £${total.toFixed(2)}</h2>

<button class="place-order-btn"
onclick="placeOrder()">
Place Order
</button>

</div>
`;
}

function placeOrder() {
  fetch("place_order.php", {
    method: "POST",
  })
    .then((res) => res.text())
    .then((data) => {
      alert(data);
      window.location = "home.php";
    });
}
