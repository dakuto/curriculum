function createJuice(fruits){
    console.log(`${fruits}を受け取りました。ジュースにして返します`);
    return fruits + "ジュース";
}
// createJuice('みかん');
let orangeJuice = createJuice('みかん');
console.log(`${orangeJuice}が届きました。`);