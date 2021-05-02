const cookieConsent = document.querySelector(".cookie-consent");
const cookieBtn = document.querySelector(".cookie-btn");

cookieBtn.addEventListener("click", () => {
    cookieConsent.classList.remove("active");
    localStorage.setItem("cookieBannerDisplay", "true");
});

setTimeout( ()=> {
    if(!localStorage.getItem("cookieBannerDisplay")) {
        cookieConsent.classList.add("active");
    }
}, 800);