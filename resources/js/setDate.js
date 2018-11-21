const dateFrom = document.getElementById('js-date-from');
const dateTo = document.getElementById('js-date-to');
const today = new Date().toISOString().split('T')[0];

dateTo.readOnly  = true;

dateFrom.onchange = function() {
    dateTo.setAttribute('min', dateFrom.value);
}

dateFrom.onclick = function() {
    dateFrom.setAttribute('min', today);
    dateTo.readOnly = false;
}


