function redirectToCheckout() {
    var cartDataInput = document.createElement('input');
    cartDataInput.type = 'hidden';
    cartDataInput.name = 'cart_data';
    cartDataInput.value = JSON.stringify(cart);
    document.getElementById('form').appendChild(cartDataInput);
    document.getElementById('form').submit();
}

function addToCart(name, price, quantityInputId, PizzaId) {
    var quantity = parseInt(document.getElementById(quantityInputId).value);
    var pizza = {
        PizzaId: PizzaId,
        name: name,
        price: price,
        quantity: quantity,
        totalPrice: price * quantity,
        size: "Medium",
        wishlist: "No"
    };

    showModal(pizza);
}


   var cart = [];

function toggleSidePanel() {
    var sidePanel = document.getElementById('side-panel');
    sidePanel.classList.toggle('open');
}

function showModal(pizza) {

    var modal = document.getElementById('modal');
    modal.style.display = "block";

    document.getElementById('pizza-name').textContent = pizza.name;
    document.getElementById('pizza-price').textContent = "$" + pizza.price.toFixed(2);

    var closeBtn = document.getElementsByClassName("close")[0];
    closeBtn.onclick = function() {
        modal.style.display = "none";
    }

    var addToCartBtn = document.getElementById('add-to-cart-modal');
    addToCartBtn.onclick = function() {
        pizza.size = document.getElementById('pizza-size').value;
        pizza.wishlist = document.getElementById('special-instructions').value;
        cart.push(pizza);
        updateCartDisplay();
        modal.style.display = "none";
    }
}

function updateCartCountDisplay(totalItems) {
    var cartCountElement = document.querySelector('.cart-count');
    cartCountElement.textContent = totalItems;
}

function getCartFromLocalStorage() {
    var cartData = localStorage.getItem('cart');
    console.log(cartData);
    return cartData ? JSON.parse(cartData) : [];
}

var cartData = getCartFromLocalStorage();

for (var i = 0; i < cartData.length; i++) {
    var pizzaItem = cartData[i];
    console.log("PizzaId: " + pizzaItem.PizzaId);
    console.log("Name: " + pizzaItem.name);
    console.log("Price: " + pizzaItem.price);
    console.log("Quantity: " + pizzaItem.quantity);
    console.log("Total Price: " + pizzaItem.totalPrice);
    console.log("Size: " + pizzaItem.size);
    console.log("Wishlist: " + pizzaItem.wishlist);
}

function saveCartToLocalStorage(cart) {
    localStorage.setItem('cart', JSON.stringify(cart));
}

document.addEventListener('DOMContentLoaded', function() {
    cart = getCartFromLocalStorage();
    updateCartDisplay();
});

function updateCartDisplay() {
    var cartItemsDiv = document.getElementById('cart-items');
    cartItemsDiv.innerHTML = '';
    var totalItems = 0;
    var totalPrice = 0;
    cart.forEach(function(item, index) {
        totalItems += item.quantity;
        totalPrice += item.totalPrice;
        var itemDiv = document.createElement('div');
        itemDiv.classList.add('cart-item');
        itemDiv.innerHTML = `
            <p>Name: ${item.name}</p>
            <p>Quantity: ${item.quantity}</p>
            <p>Price: $${item.price}</p>
            <p>Wishlist: ${item.wishlist}</p>
            <button class="cart-button" onclick="removeFromCart(${index})">Remove</button>
            <button class="cart-button" onclick="changeQuantity(${index}, -1)">-</button>
            <button class="cart-button" onclick="changeQuantity(${index}, 1)">+</button>
        `;
        cartItemsDiv.appendChild(itemDiv);
    });
    document.getElementById('total-price').textContent= "$" + totalPrice.toFixed(2);
    updateCartCountDisplay(totalItems);

    saveCartToLocalStorage(cart);
}

function removeFromCart(index) {
    cart.splice(index, 1);
    updateCartDisplay();

    saveCartToLocalStorage(cart);
}

function changeQuantity(index, change) {
    if (cart[index]) {
        cart[index].quantity += change;
        if (cart[index].quantity < 1) {
            cart[index].quantity = 1;
        }
        cart[index].totalPrice = cart[index].quantity * cart[index].price;
        updateCartDisplay();
    }
    saveCartToLocalStorage(cart);
}

document.addEventListener('DOMContentLoaded', (event) => {
document.getElementById('form').addEventListener('submit', function(event) {
    // Get the cart data from local storage
    var cartData = getCartFromLocalStorage();

    // Set the value of the hidden input field to the cart data
    document.getElementById('cartData').value = JSON.stringify(cartData);
});
});

document.addEventListener('DOMContentLoaded', function() {
    var completePurchaseButton = document.querySelector('.order-button');
    if (completePurchaseButton) {
        completePurchaseButton.addEventListener('click', function() {
            localStorage.clear();
        });
    }
});
