var total_id = document.getElementById("total");

// get all values in a column and assign them to an array
var firstCells = document.querySelectorAll("td:nth-child(2)");
var cellValues = [];
firstCells.forEach(function (singleCell) {
	cellValues.push(singleCell.innerText);
});

console.log(firstCells);
// calculate sum of the array
var sum = cellValues.reduce(function (a, b) {
	return parseInt(a) + parseInt(b);
}, 0);

console.log(sum);

total.innerHTML = "$" + sum;
