let numbers = [2, 5, 12, 13, 15, 18, 22];
for (let i = 0; i < numbers.length; i++) {
  // console.log(numbers[i]);
  let $numbers = numbers[i];
  isEven($numbers[i]);
}
function isEven(num) {
  if(numbers[i] % 2 === 0){
    console.log(num + "は偶数です");
  }
}
// isEven();
