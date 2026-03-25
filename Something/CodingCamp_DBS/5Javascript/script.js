console.log("Hello World!");

let i = 0;
if (i >= 1){
    console.log("Positive");
}
else if (i == 0){
    console.log("Zero");
}
else{
    console.log("Negative");
}

function hello(name, origin = "Bandung"){
    console.log(name,origin);
}

hello("Rangga Wijaya", "Garut");
hello("Puspa");

for (let a = 1; a <= 10; a++){
    if (a == 5){
        continue;
    }
    if (a == 9){
        break;
    }
    console.log(a);
}

b = [2,3,5,7,11];
console.log(b);
console.log(b[4]);

// This! dude wtf is this?
// This digunakan untuk menggantikan nama objek dengan yang sedang digunakan
const person = {
    name: "RangS",
    favcoding: "Python",
    hello: function(){
        console.log(`HI! I am ${this.name} and my favorite programming language is ${this.favcoding}`)
    } // wtf pake backtick njir
}
person.hello()