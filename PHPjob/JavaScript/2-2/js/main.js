// let target = document.getElementById('target');
// console.log(target);

// // 「myfunc」という関数を用意。
// function myfunc() {

//   // idが「target」の要素を取得して、変数changeに代入
//   let change = document.getElementById('target');

//   // textContentを使って「こんにちは」で書き変える
//   change.textContent = 'こんにちは!';
// };

// let elems = document.getElementsByTagName('h1');
// //HTMLを上から順番に探した時に、最初に見つかったh1タグが0番目の要素として取得できます。
// console.log(elems[0]);
// console.log(elems[1]);

// // let boxs = document.getElementsByName('box');
// // for (let i = 0; i < boxs.length; i++) {
// //     console.log(boxs[i]);
// // }

// let boxs = document.getElementsByClassName('box');
// //for文を使っても良いのですが、ここでは単純に一つずつ出力しています。
// console.log(boxs[0]);
// console.log(boxs[1]);
// console.log(boxs[2]);

// let box = document.querySelector('.box');
// console.log(box);

// let boxClass = document.querySelectorAll('.box');
// for (let i = 0; i < boxClass.length; i++) {
//     console.log(boxClass[i]);
// }

// let elems = document.querySelectorAll('form > .box');
// for (let i = 0; i < elems.length; i++) {
//     console.log(elems[i]);
// }

let elems = document.querySelectorAll('input[type=radio]');
for (let i = 0; i < elems.length; i++) {
    console.log(elems[i]);
}