// Function to check if an element is in the viewport
function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// Function to add the animate class when the element is in the viewport
function animateOnScroll() {
    const aboutMeContent = document.querySelector('.about-me-content');
    if (isInViewport(aboutMeContent)) {
        aboutMeContent.classList.add('animate');
    }
}

// Add a scroll event listener to trigger the animation
window.addEventListener('scroll', animateOnScroll);
