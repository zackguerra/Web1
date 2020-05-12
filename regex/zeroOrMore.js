let longWord = "Aaaaaaaaaaaaaaaaaaaaaaaargh!";

// zero or more occurrence, we use * 

let longRegex = /Aa*/;
let result = longWord.match(longRegex);

let result1 = longWord.replace(longRegex, "");

console.log(result);
console.log(result1);

