let num1 = 10;
let num2 = 4;
let result;

// 足し算
result = num1 + num2;
console.log(result);

// 引き算
result = num1 - num2;
console.log(result);

// 掛け算
result = num1 * num2;
console.log(result);

// 割り算
result = num1 / num2;
console.log(result);

// 乗算
result = num1 % num2;
console.log(result);

console.log("Hello" + "World");

let lastName = "田中";
let firstName = "一郎";
let fullName = lastName + firstName;

console.log(fullName);

let x = 10;
x++;
console.log(x);

let y = 10;
y--;
console.log(y);

console.log(10 === 10); //true        「両辺が等しい」という条件 → 正しいのでtrue
console.log(10 === 5); //false        「両辺が等しい」という条件 → 正しくないのでfalse
console.log(10 !== 5); //true        「10と5は等しくない」という条件 → 正しいので true
console.log(10 > 20); //false        「10と20を比べて、10の方が大きい」という条件 → 正しくないのでfalse
console.log(10 <= 10); //true        「左辺の10は右辺の10という値以上か」という条件 → 正しいのでtrue

console.log("10" === 10); //false
console.log("10" == 10); //true

let score = 0;
if (score >= 70) {
  console.log("合格");
} else if (score === 0) {
  console.log("0点はまずいです…");
} else {
  console.log("不合格");
}

// let a = 15;
// if (a >= 10 && a <= 20) {
//   console.log(a);
// }

let a = 10;
let b = 15;
if (a % 2 === 0) {
  console.log(a);
}

if (b % 2 !== 0) {
  console.log(b);
}
