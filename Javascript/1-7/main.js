class Taiyaki {
  constructor(name, menu) {
    this.name = name;
    this.menu = menu;
  }

  inside() {
    console.log(`中身は${this.menu}です`);
  }
}
let anko = new Taiyaki("anko", "あんこ");
let cream = new Taiyaki("cream", "クリーム");
anko.inside();
cream.inside();
