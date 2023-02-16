// 問1
let numbers = [2, 5, 12, 13, 15, 18, 22];
for (let i = 0; i < numbers.length; i++) {
  // console.log(numbers[i]);
  isEven(numbers[i]);
}
function isEven(num) {
  if (num % 2 === 0) {
    console.log(num + "は偶数です");
  }
}

// 問２
class car {
  constructor(gas, num) {
    this.gas = gas;
    this.num = num;
  }
  getNumGas() {
    console.log(`ガソリンは${this.gas}です。ナンバーは${this.num}です`);
  }
}
let toyota = new car("ハイオク", 1234);
toyota.getNumGas();
