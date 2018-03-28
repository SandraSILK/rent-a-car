
setInterval(calcDays, 300);

function calcDays() {
	const dateFromVal = document.getElementById('js-date-from').value;
	const dateToVal = document.getElementById('js-date-to').value;

	// const fromAr = dateFromVal.split("-");
	// const fromVal = fromAr.push(fromAr.shift());

	// const toAr = dateToVal.split("-");
	// const toVal = toAr.push(toAr.shift());

	// const fromStr = fromAr.toString();
	// const toStr = toAr.toString();

	// var dateFrom = fromStr.replace(/,/g, '/');
	// var dateTo = toStr.replace(/,/g, '/');

	// var dateFrom = dateFromVal.replace(/-/g, '/');
	// var dateTo = dateToVal.replace(/-/g, '/');

	const from = new Date(dateFromVal);
	const to = new Date(dateToVal);

	const timeDiff = Math.abs(to.getTime() - from.getTime() );	
	const diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));

	calcPrice(diffDays);

};

function calcPrice(diffDays) {
	const priceCal = document.getElementById('js-calculate-price');
	const priceBasic = document.getElementById('js-basic-price').value;

	if (diffDays < 1) {
		diffDays = 1;
	}

	const price = diffDays * priceBasic;
	
	priceCal.setAttribute('value', price);
}
