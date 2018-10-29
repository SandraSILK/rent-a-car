const dateFrom = document.getElementById('js-date-from');
const dateTo = document.getElementById('js-date-to');
const today = new Date().toISOString().split('T')[0];

dateTo.readOnly  = true;

dateFrom.onclick = function() {
	dateFrom.setAttribute('min', today);
	dateTo.readOnly  = false;
};

dateTo.onclick = function() {
	var newDate = dateFrom.value;
	dateTo.setAttribute('min', newDate);
}


