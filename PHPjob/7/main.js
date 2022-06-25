let numbers = [2, 5, 12, 13, 15, 18, 22];
//ここに答えを実装してください。↓↓↓
function isEven() {
  for (let i = 0; i < numbers.length; i++) {
    if(numbers[i] % 2 === 0){
      let num = numbers[i];
      console.log(num + 'は偶数です');
    }
}
}

isEven()

class Car{

  constructor(gass, num) {
    this.gass = gass;
    this.num = num;
}
  getNumGas(){
      console.log(`ガソリンは${this.gass}です。ナンバーは${this.num}です`);
    }
}

let test1 = new Car(20.5,1234);
test1.getNumGas();

let test2 = new Car(10,5678);
test2.getNumGas();

