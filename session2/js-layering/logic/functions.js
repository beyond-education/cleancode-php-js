export function mixFruitsAndNumbers(fruits, numbers) {
    const fruitsAndNumbers = [];
    for(let index = 0; index < fruits.length; index++) {
        const fruit = fruits[index];
        const number = numbers[index];
        const mix = `${number}x ${fruit}`;
        fruitsAndNumbers.push(mix);
    }
    return fruitsAndNumbers;
}