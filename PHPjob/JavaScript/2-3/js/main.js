// //box要素とbtn要素を取得
// let box = document.getElementById('box');
// let btn = document.getElementById('btn');
// //ボタンがクリックされたら
// btn.onclick = function() {
//     box.style.backgroundColor = 'red';
// };
// //ボタンがクリックされたら
// btn.onclick = function() {
//     alert('ボタンが押されました');
// };

let box = document.getElementById('box');
let btn = document.getElementById('btn');
//ボタンが押されたら、背景色を赤にする
btn.addEventListener('click', function() {
    box.style.backgroundColor = 'red';
}, false);
//ボタンが押されたら、アラートを出す
btn.addEventListener('click', function() {
    alert('ボタンが押されました');
}, false);