
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



// PARTS AUTO FIELD



// document.addEventListener("DOMContentLoaded", function () {
//     const part = document.querySelectorAll('.form-control');
//     part.forEach((a) => {

//         a.addEventListener('change', function (e) {
//             // console.log('okkk');
//             e.preventDefault();
//             // document.querySelector('.modal-body form').setAttribute('action', 'http://localhost/phpmvc/public/mahasiswa/ubah');

//             // console.log(curut);
//             // const id = parseInt(a.attributes['data-bs-id'].value);
//             const id = e.target.value;
//             // console.log(id);

//             (async () => {
//                 const result = await fetch('http://localhost:8080/customer/getUbah', {
//                     method: 'POST', // or 'PUT'
//                     headers: {
//                         'Accept': 'application/json',
//                         'Content-Type': 'application/json'
//                     },
//                     body: JSON.stringify({ id: id, toJSON() { return this.id; } })
//                 });

//                 const content = await result.text();
//                 // console.log(content);
//                 let jueson = JSON.parse(content);
//                 // console.log(jueson);

//                 // const hr_part = document.querySelectorAll('.perPcs');
//                 // hr_part.forEach((hr_child) => {
//                 //     // console.log(hr_child);
//                 //     hr_child.value = jueson.hr_part;
//                 // })
//                 document.querySelector('.perPcs').value = jueson.hr_part;
//             })();

//         });
//     });


// });
