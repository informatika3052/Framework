
var alertList = document.querySelectorAll('.alert')
alertList.forEach(function (alert) {
    new bootstrap.Alert(alert)
});


// Total SPK

const price = document.querySelectorAll('.price');
const price1 = document.querySelector('#price1');
const price2 = document.querySelector('#price2');
const total = document.querySelector('#total');
// console.log(price);

price2.addEventListener('keyup', function () {
    totall = parseInt(price1.value) + parseInt(price2.value);
    total.value = totall.toString();
});
// price.forEach((pricee) => {
//     pricee.addEventListener('keyup', function (e) {
//         e.preventDefault();
//         // if (price1) {
//         //     price1.innerHTML = e.target.value;
//         //     price2.innerHTML = '';
//         // }
//         // price2.innerHTML = e.target.value;
//         totall = parseInt(price1.value) + parseInt(price2.value);
//         total.value = totall.toString();
//     });

// })


