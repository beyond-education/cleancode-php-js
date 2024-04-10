import {mixFruitsAndNumbers} from './logic/functions.js'
import {fruits, numbers} from './data/constants.js'

const fruitsAndNumbers = mixFruitsAndNumbers(fruits, numbers);
console.log(fruitsAndNumbers);