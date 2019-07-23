/**
 *
 * convert a weight or mass to grams.
 *
 * @param mass The weight or mass to be converted
 * @param units the abbreviation for the inits specified in the mass
 * @return the converted mass in grams
 **/

// function convertToGrams(mass, units) {
// 	convertedValue = 0;
//
// 	if (units === 'g'){
// 		return mass;
// 	} else if (units === 'lbs') {
// 		return mass * 453.592
// 	} else if (units === 'oz') {
// 		return mass * 28.35;
// 	} else if (units === 'kg') {
// 		return mass * 1000;
// 	} else if (units === 'mg'){
// 		return mass/1000
// 	}
//
// 	return convertedValue;
// }
// console.log(convertToGrams(10,lbs));

/**
 * Adds the unique positive factors of a number
 *
 * @param number The number to be factored
 * @return the sum of the factors
 **/

function sumUniquePositiveFactors(number) {
	let sum = 0;

	for (i=1; i<=number; i++) {
		if(number % i === 0) {
			sum = sum = i;
		}
	}
	return sum;
}

