// Cart functionality
let cartCount = 0;
const cartCountElement = document.getElementById('cartCount');

// Add to cart functionality
document.querySelectorAll('.add-to-cart').forEach(button => {
    button.addEventListener('click', handleAddToCart);
});

function handleAddToCart(event) {
    const button = event.target;
    const productCard = button.closest('.product-card');
    const productId = productCard.dataset.productId;
    
    // Animate button
    button.textContent = 'Added!';
    button.style.backgroundColor = '#28a745';
    
    // Update cart count
    cartCount++;
    cartCountElement.textContent = cartCount;
    
    // Store in localStorage
    const cart = JSON.parse(localStorage.getItem('cart') || '[]');
    cart.push(productId);
    localStorage.setItem('cart', JSON.stringify(cart));
    
    // Reset button after 1 second
    setTimeout(() => {
        button.textContent = 'Add to Cart';
        button.style.backgroundColor = '#007bff';
    }, 1000);
}

// Search functionality
const searchInput = document.querySelector('.search-container input');
searchInput.addEventListener('input', debounce(handleSearch, 300));

function handleSearch(event) {
    const searchTerm = event.target.value.toLowerCase();
    // Implement search logic here
    console.log('Searching for:', searchTerm);
}

// Hero section parallax effect
window.addEventListener('scroll', () => {
    const hero = document.querySelector('.hero');
    const scrolled = window.pageYOffset;
    hero.style.backgroundPositionY = `${scrolled * 0.5}px`;
});

// Utility functions
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Initialize cart from localStorage
document.addEventListener('DOMContentLoaded', () => {
    const cart = JSON.parse(localStorage.getItem('cart') || '[]');
    cartCount = cart.length;
    cartCountElement.textContent = cartCount;
});