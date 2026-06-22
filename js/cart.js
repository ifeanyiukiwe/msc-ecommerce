document.addEventListener("DOMContentLoaded", fetchCart, updateCartCount());

function fetchCart() {
  fetch("get_cart.php")
    .then((res) => res.json())
    .then((items) => displayCart(items))
    .catch((err) => console.log(err));
}

function updateCartCount() {
  fetch("cart_count.php")
    .then((res) => res.text())
    .then((count) => {
      const cartCount = document.querySelector(".cart-count");

      if (cartCount) {
        cartCount.innerText = count;
      }
    })
    .catch((err) => console.log(err));
}

function cartAction(action, id) {
  fetch("cart_action.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
    body: `action=${action}&id=${id}`,
  })
    .then((res) => res.text())
    .then((data) => {
      console.log(data);
      fetchCart();
      updateCartCount();
    })
    .catch((err) => console.log(err));
}

function displayCart(items) {
  const container = document.querySelector(".cart-container");
  if (!container) return;

  if (items.length === 0) {
    container.innerHTML = "<h2>Cart is empty</h2>";
    return;
  }

  let total = 0;

  container.innerHTML =
    items
      .map((item) => {
        total += item.price * item.quantity;

        return `

<div class="cart-card">

  <div class="cart-img">
    <img src="images/${item.image}" alt="${item.name}">
  </div>

  <div class="cart-info">

    <h3>${item.name}</h3>

    <div class="rating">
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star-half-stroke"></i>
    </div>

    <div class="cart-bottom">

      <span class="price">
        £${item.price}
      </span>

      <div class="qty-control">

        <button onclick="cartAction('decrease', ${item.id})">
          −
        </button>

        <span>${item.quantity}</span>

        <button onclick="cartAction('increase', ${item.id})">
          +
        </button>

      </div>

      <button class="cart-btn"
        onclick="cartAction('delete', ${item.id})">
        <i class="fa-solid fa-trash"></i>
      </button>

    </div>

  </div>

</div>

`;
      })
      .join("") +
    `
<div class="cart-total">
  <h2>Total: £${total.toFixed(2)}</h2>

  <a href="checkout.php" class="checkout-btn">
    Proceed to Checkout
  </a>
</div>
`;
}
