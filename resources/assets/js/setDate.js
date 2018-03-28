const dateFrom = document.getElementById('js-date-from');
const dateTo = document.getElementById('js-date-to');
const today = new Date().toISOString().split('T')[0];

dateFrom.setAttribute('min', today);
dateTo.disabled = true;

dateFrom.onclick = function() { setMinDate() };	

function setMinDate() {
	dateTo.disabled = false;
	var minDate = dateFrom.value;
	dateTo.setAttribute('min', minDate);
}


