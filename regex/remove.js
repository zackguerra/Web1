let hello = "       Hello, World        ";

// caret sign means start
let weRegex = /^\s+|\s+$/g;

let result = hello.replace(weRegex, "");

console.log(result);