const navbarShowBtn = document.querySelector('.navbar-show-btn');
const navbarCollapseDiv = document.querySelector('.navbar-collapse');
const navbarHideBtn = document.querySelector('.navbar-hide-btn');

navbarShowBtn.addEventListener('click', function(){
    navbarCollapseDiv.classList.add('navbar-show');
});
navbarHideBtn.addEventListener('click', function(){
    navbarCollapseDiv.classList.remove('navbar-show');
});

// changing search icon image on window resize
window.addEventListener('resize', changeSearchIcon);
function changeSearchIcon(){
    let winSize = window.matchMedia("(min-width: 1200px)");
    if(winSize.matches){
        document.querySelector('.search-icon img').src = "silver.png";
    } else {
        document.querySelector('.search-icon img').src = "plus.png";
    }
}
changeSearchIcon();

// stop animations and transitions
let resizeTimer;
window.addEventListener('resize', () =>{
    document.body.classList.add('resize-animation-stopper');
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
        document.body.classList.remove('resize-animation-stopper');
    }, 400);
});
function makePayment() {
    // Replace with your own API credentials
    const consumerKey = 'YOUR_CONSUMER_KEY';
    const consumerSecret = 'YOUR_CONSUMER_SECRET';

    // Initialize the M-PESA JavaScript SDK
    const mpesa = new Mpesa({
      consumerKey,
      consumerSecret,
    });

    // Set payment details
    const paymentData = {
      amount: '100', // Replace with the actual payment amount
      phoneNumber: '254712345678', // Replace with the customer's phone number
      accountReference: 'ORDER123', // Replace with a unique order reference
      transactionDesc: 'Payment for Order', // Replace with a description of the transaction
    };

    // Make the payment request
    mpesa
      .lipaNaMpesaOnline(paymentData)
      .then(response => {
        console.log(response);
        // Handle the response from the payment request
        // You can redirect the user to a success page or perform any other necessary actions
      })
      .catch(error => {
        console.error(error);
        // Handle the error from the payment request
        // You can display an error message to the user or perform any other necessary actions
      });
  }