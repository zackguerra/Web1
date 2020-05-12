let wrongText = "The sky is skyblue";
let skyBlueRegex = /skyblue/;
let result = wrongText.replace(skyBlueRegex, "blue");
console.log(result);

// replace two words changing the position $1-first $2-second

let result1 = "HTML DEV".replace(/(\w+)\s(\w+)/, "$2 $1");
console.log(result1);