<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="/assets/css/cart.css" />

    <style>
      body {
        margin: 0;
        padding: 0;
        font-family: "Arial", sans-serif;
        background-color: #f5f5f5;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
      }

      .cart-container {
        width: 80%;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        padding: 20px;
      }

      .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid #ddd;
        padding-bottom: 10px;
        margin-bottom: 20px;
      }

      .heading {
        font-size: 24px;
        color: #333;
      }

      .action {
        font-size: 16px;
        color: #e44c4c;
        cursor: pointer;
        text-decoration: underline;
      }

      .cart-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid #ddd;
        padding: 10px 0;
      }

      .item-details {
        display: flex;
        align-items: center;
        flex-grow: 1;
      }

      .item-details img {
        width: 100px;
        height: auto;
        margin-right: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 100px;
      }

      .item-info {
        color: #333;
      }

      .item-title {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 5px;
      }

      .item-subtitle {
        font-size: 16px;
        color: #666;
      }

      .item-actions {
        display: flex;
        align-items: center;
        justify-content: flex-end;
      }

      .quantity {
        margin-right: 20px;
      }

      .quantity input,
      .quantity button {
        width: 40px;
        padding: 5px;
        border: 1px solid #ddd;
        border-radius: 4px;
        text-align: center;
        line-height: 20px;
      }

      .quantity button:hover {
        background-color: #ccc;
      }

      .price {
        font-size: 20px;
        font-weight: bold;
        color: #333;
        min-width: 80px;
      }

      .total {
        margin-top: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      .subtotal {
        font-size: 24px;
        color: #333;
      }

      .checkout-btn {
        padding: 10px 20px;
        background-color: #4caf50;
        border: none;
        color: white;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
      }

      .alert {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 20px;
        background-color: #4caf50;
        color: white;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      }
    </style>
  </head>
  <body>
    <div class="cart-container">
      <div class="header">
        <h2 class="heading">Shopping Cart</h2>
        <h4 class="action">Remove all</h4>
      </div>
      <div class="cart-item">
        <div class="item-details">
          <img src="/assets/image/tradisional.jpeg" alt="Apple Juice" />
          <div class="item-info">
            <h3 class="item-title">Molen</h3>
            <p class="item-subtitle">Rp.3000</p>
          </div>
        </div>
        <div class="item-actions">
          <div class="quantity">
            <button>-</button>
            <input type="number" value="1" />
            <button>+</button>
          </div>
          <div class="price">Rp.20.000</div>
          <div class="remove-action">
            <h4 class="action">Remove</h4>
          </div>
        </div>
      </div>
      <div class="cart-item">
        <div class="item-details">
          <img src="/assets/image/tart.jpeg" alt="Orange Juice" />
          <div class="item-info">
            <h3 class="item-title">Tart</h3>
            <p class="item-subtitle">Rp. 10.000</p>
          </div>
        </div>
        <div class="item-actions">
          <div class="quantity">
            <button>-</button>
            <input type="number" value="1" />
            <button>+</button>
          </div>
          <div class="price">Rp.25.000</div>
          <div class="remove-action">
            <h4 class="action">Remove</h4>
          </div>
        </div>
      </div>
      <div class="cart-item">
        <div class="item-details">
          <img src="/assets/image/donut.jpeg" alt="Grape Juice" />
          <div class="item-info">
            <h3 class="item-title">Donat</h3>
            <p class="item-subtitle">Rp.5000</p>
          </div>
        </div>
        <div class="item-actions">
          <div class="quantity">
            <button>-</button>
            <input type="number" min="1" max="99" />
            <button>+</button>
          </div>
          <div class="price">Rp.15.000</div>
          <div class="remove-action">
            <h4 class="action">Remove</h4>
          </div>
        </div>
      </div>
      <div class="total">
        <div class="subtotal">Subtotal: Rp.70.000</div>
        <button class="checkout-btn">Checkout</button>
      </div>
    </div>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const cartItems = document.querySelectorAll(".cart-item");

        cartItems.forEach(function (item) {
          const quantityInput = item.querySelector('input[type="number"]');
          const plusBtn = item.querySelector("button:nth-of-type(2)");
          const minusBtn = item.querySelector("button:nth-of-type(1)");

          plusBtn.addEventListener("click", function () {
            let currentValue = parseInt(quantityInput.value);
            quantityInput.value = currentValue + 1;
            // updatePrice(item);
          });

          minusBtn.addEventListener("click", function () {
            let currentValue = parseInt(quantityInput.value);
            if (currentValue > 1) {
              quantityInput.value = currentValue - 1;
              // updatePrice(item);
            } else if (currentValue >= 99) {
              quantityInput.value = 99;
            }
          });

          quantityInput.addEventListener("input", function () {
            let currentValue = parseInt(quantityInput.value);
            if (currentValue < 1) {
              quantityInput.value = 1;
            }
            // updatePrice(item);
          });
        });

        // function updatePrice(item) {
        //     const quantityInput = item.querySelector('input[type="number"]');
        //     const priceElement = item.querySelector('.price');
        //     const pricePerUnit = parseFloat(priceElement.dataset.price);
        //     const quantity = parseInt(quantityInput.value);
        //     const totalPrice = pricePerUnit * quantity;
        //     priceElement.textContent = '$' + totalPrice.toFixed(2);
        // }
      });
    </script>
  </body>
</html>