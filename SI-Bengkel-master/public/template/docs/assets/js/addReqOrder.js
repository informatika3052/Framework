
// ADD TOTAL REQ ORDER
const part1 = document.querySelector('.part1');
const part2 = document.querySelector('.part2');
const part3 = document.querySelector('.part3');
const perPcs1 = document.querySelector('.perPcs1');
const perPcs2 = document.querySelector('.perPcs2');
const perPcs3 = document.querySelector('.perPcs3');
const qty1 = document.querySelector('.qty1');
const qty2 = document.querySelector('.qty2');
const qty3 = document.querySelector('.qty3');
const total1 = document.querySelector('.total1');
const total2 = document.querySelector('.total2');
const total3 = document.querySelector('.total3');
const akumulasi_total = document.querySelector('.akumulasi_total');

console.log(perPcs3);
perPcs1.addEventListener('keyup', function () {
    total1.value = parseInt(qty1.value) * parseInt(perPcs1.value);
});
perPcs2.addEventListener('keyup', function () {
    total2.value = parseInt(qty2.value) * parseInt(perPcs2.value);
});
perPcs3.addEventListener('keyup', function () {
    total3.value = parseInt(qty3.value) * parseInt(perPcs3.value);
});
perPcs3.addEventListener('keyup', function () {
    console.log(akumulasi_total.value = parseInt(total1.value) + parseInt(total2.value) + parseInt(total3.value));
});