"use strict";

const iconCart = document.querySelector('#iconCart');
const cart = document.querySelector('#cart');
const cartBlock = document.querySelector('.cart__content');

iconCart.addEventListener('click', showCart);

function showCart(){
    cart.style.display = "block";
    setTimeout(() => {
        cart.classList.add('cart-show');
        cartBlock.style.transform = "translateX(0)"
    },0);
}