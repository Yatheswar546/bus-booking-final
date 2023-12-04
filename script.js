
var dropdownBtn = document.getElementById("dropdownBtn");
var dropdownContent = document.getElementById("dropdownContent");
dropdownBtn.addEventListener("click", function () {
    console.log("Hello");
    dropdownContent.classList.toggle("active");
});

// Close the dropdown if the user clicks outside of it
window.addEventListener("click", function (event) {
    if (!event.target.matches("#dropdownBtn")) {
        var dropdown = document.getElementById("dropdownContent");
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

// const minuses = document.querySelectorAll('.minus');

// minuses.forEach(minus => {
//     minus.addEventListener('click', () =>{
//         minus.classList.toggle("active");
//     });
// });


//////////////////// BOOKING SECTION ///////////////////////////
// let seats = document.querySelector(".all-seats");
// for (var i = 0; i < 59; i++) {
//     let randint = Math.floor(Math.random() * 2)
//     let booked = randint === 1 ? "booked" : "";
//     seats.insertAdjacentHTML("beforeend", '<input type="checkbox" name="tickets" id="s' + (i + 2) + '"><label for="s' + (i+2) +'" class="seat' + booked + '"></label>');
// }


let seatsContainer = document.querySelector(".all-seats");

// const rows = 4;
// const seatsPerRow = 10;

// for (let row = 0; row < rows; row++) {
//     for (let seat = 0; seat < seatsPerRow; seat++) {
//         let isBooked = Math.random() < 0.5; // Adjust the probability as needed
//         let bookedClass = isBooked ? "booked" : "";

//         seatsContainer.insertAdjacentHTML("beforeend", '<input type="checkbox" name="tickets" id="s' + (row * seatsPerRow + seat + 1) + '"><label for="s' + (row * seatsPerRow + seat + 1) + '" class="seat ' + bookedClass + '"></label>');
//     }

//     if (row < rows - 1) {
//         // Insert the repetition gap after each row except the last one
//         seatsContainer.insertAdjacentHTML("beforeend", '<div class="repetition-gap"></div>');
//     }
// }

for (let i = 0; i < 39; i++) {
    let isBooked = Math.random() < 0.5; // Adjust the probability as needed
    let bookedClass = isBooked ? "booked" : "";
    
    seatsContainer.insertAdjacentHTML("beforeend", '<input type="checkbox" name="tickets" id="s' + (i + 2) + '"><label for="s' + (i + 2) + '" class="seat ' + bookedClass + '"></label>');
}


// for (let repeat = 0; repeat < 2; repeat++) {
//     for (let i = 0; i < 59; i++) {
//         let isBooked = Math.random() < 0.5; // Adjust the probability as needed
//         let bookedClass = isBooked ? "booked" : "";

//         seatsContainer.insertAdjacentHTML("beforeend", '<input type="checkbox" name="tickets" id="s' + (i + 2) + '"><label for="s' + (i + 2) + '" class="seat ' + bookedClass + '"></label>');
//     }
// }

