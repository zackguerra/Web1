let sample = "Check what the Regular Expression is";

// This is the rule to seearch some patterns inside String
// finding space shows multiple times, not only once if you use g = general(flag)
let countRegex = /\s/g;

let result = sample.match(countRegex);
console.log(result);