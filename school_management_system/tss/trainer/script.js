// JavaScript to manage the cart and animations
let cart = JSON.parse(localStorage.getItem('cart')) || [];
let totalPrice = 0;

function addToCart(productId) {
  let product = null;

  // Define products (in a real app, this would come from a database or API)
  if (productId === 1) {
    product = { id: 1, name: 'Product 1', price: 20.00 };
  } else if (productId === 2) {
    product = { id: 2, name: 'Product 2', price: 35.00 };
  }

  // Add the product to the cart
  cart.push(product);
  localStorage.setItem('cart', JSON.stringify(cart));

  // Update the cart link count
  updateCartCount();
}

function updateCartCount() {
  const cartCount = cart.length;
  document.querySelector('.cart-link a').textContent = `Cart (${cartCount})`;
}

function loadCart() {
  const cartList = document.getElementById('cart-list');
  cartList.innerHTML = '';

  // Update the cart UI
  cart.forEach((product, index) => {
    const li = document.createElement('li');
    li.innerHTML = `${product.name} - $${product.price.toFixed(2)}`;
    cart
