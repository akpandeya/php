function anagrams(stringA, stringB) {
    /*First, we remove any non-alphabet character using regex and convert       
    convert the strings to lowercase. */
    stringA = stringA.replace(/[^\w]/g, '').toLowerCase()
    stringB = stringB.replace(/[^\w]/g, '').toLowerCase()

    return sortString(stringA) === sortString(stringB)
}

/*This function sorts the strings*/ 
function sortString(string) {
    return string.split('').sort().join('');
}

const word1 = "Listen";
const word2 = "Sient";

if (anagrams(word1, word2)) {
    console.log("Yes these are anagrams")
}
else {
    console.log("No, these are not anagrams")
}