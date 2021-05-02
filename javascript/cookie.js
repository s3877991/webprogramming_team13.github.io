const cookieConsent = document.querySelector(".cookie-consent");
const cookieBtn = document.querySelector(".cookie-btn");

cookieBtn.addEventListener("click", () => {
    cookieConsent.classList.remove("active");
    sessionStorage.setItem("cookieBannerDisplay", "true");
});

setTimeout( ()=> {
    if(!sessionStorage.getItem("cookieBannerDisplay")) {
        cookieConsent.classList.add("active");
    }
}, 800);