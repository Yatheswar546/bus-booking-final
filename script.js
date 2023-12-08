///////////////// DROPDOWNS IN NAVBAR ///////////////////////////// 
var HelpdropdownBtn = document.getElementById("HelpdropdownBtn");
var HelpdropdownContent = document.getElementById("HelpdropdownContent");
HelpdropdownBtn.addEventListener("click", function () {
    // console.log("Hello");
    HelpdropdownContent.classList.toggle("active");
});

var AccountdropdownBtn = document.getElementById("AccountdropdownBtn");
var AccountdropdownContent = document.getElementById("AccountdropdownContent");
AccountdropdownBtn.addEventListener("click", function () {
    // console.log("Hello");
    AccountdropdownContent.classList.toggle("active");
});

// Close the dropdown if the user clicks outside of it
window.addEventListener("click", function (event) {
    if (!event.target.matches("#AccountdropdownBtn")) {
        var dropdown = document.getElementById("AccountdropdownContent");
        if (dropdown.classList.contains("show")) {
            dropdown.classList.remove("show");
        }
    }
});


/////////////////////// FAQs //////////////////////////////
const faqs = document.querySelectorAll('.questions');

faqs.forEach(faq => {
    faq.addEventListener('click', () => {
        faq.classList.toggle("active");
    });
});


//////////////////// BOOKING SECTION No. Of Seats, Seats Selector & Fare ///////////////////////////

let selectedSeats = [];

function updateCountAndPrice() {
    let countElement = document.getElementById("count");
    countElement.textContent = "Count: " + selectedSeats.length;

    // Update total price based on the number of selected seats
    let totalPrice = selectedSeats.length * 50; // Assuming $50 per seat
    let priceElement = document.getElementById("price");
    priceElement.textContent = "Total Price: $" + totalPrice;

    // Update the hidden input field with the calculated price
    let total_price_input = document.getElementById("total_price");
    total_price_input.value = totalPrice;
}

let seatsContainer = document.querySelector(".all-seats");

// Generate checkboxes
for (let i = 0; i < 39; i++) {
    let isBooked = Math.random() < 0.5; // Adjust the probability as needed
    let bookedClass = isBooked ? "booked" : "";

    seatsContainer.insertAdjacentHTML("beforeend", '<input type="checkbox" name="tickets" id="s' + (i + 2) + '"><label for="s' + (i + 2) + '" class="seat ' + bookedClass + '"></label>');
}

// Add event listener for checkbox changes
seatsContainer.addEventListener("change", function (event) {
    if (event.target.type === "checkbox" && event.target.name === "tickets") {
        let selectedSeatId = event.target.id;

        // Toggle the selected seat in the array
        let index = selectedSeats.indexOf(selectedSeatId);
        if (index === -1) {
            selectedSeats.push(selectedSeatId);
        } else {
            selectedSeats.splice(index, 1);
        }

        // Update count and total price
        updateCountAndPrice();
    }
});


////////////////// BOOKING PAGE POPUP ///////////////////
function cancelPayment(){
    alert('Your ticket is Cancelled!');
    location.reload(); 
}


function Payment(){
    alert('Your Payment is Successful !!!');
    return true;
}