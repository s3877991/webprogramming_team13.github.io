// Assigment 2: JAVASCRIPT ASSIGNMENT - TASK #3: Display modal boxes

/* Original JS code sourced and adapted for educational purposes:
https://www.w3schools.com/howto/howto_css_cards.asp */

// Activate the cards to trigger modal boxes
let cards = document.getElementsByClassName("card");

// Acivate the modal boxes
let bios = document.getElementsByClassName("bio");

// Activate the close button
let closes = document.getElementsByClassName("close");

// There are 4 member cards which display 4 modal boxes with their bios
// Because these cards and modal boxes do the same behaviour, Duy will set a loop to make code cleaner and more efficient
for (let index = 0; index < 4; index++) {

    // Display modal box
    cards[index].onclick = function() {
        bios[index].style.display = "block";
    };

    // Close modal box
    // If user click on close button
    closes[index].onclick = function() {
        bios[index].style.display = "none";
    };

    // If user click anywhere outside the modal
    bios[index].onclick = function() {
        bios[index].style.display = "none";
    };

}