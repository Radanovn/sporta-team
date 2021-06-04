$.fn.datepicker.language['en'] = {
    days: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
    daysMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
    daysShort: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
    months: ['January','February','March','April','May','June', 'July','August','September','October','November','December'],
    monthsShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    today: 'Today',
    clear: 'Clear',
    dateFormat: 'mm/dd/yyyy',
    timeFormat: 'hh:ii aa',
    firstDay: 0
};

$(document).ready(function() {
    $('#filter-datepicker').datepicker({
        language: 'en',
        navTitles: {
            days: 'MM yyyy'
        },
        prevHtml: '<svg xmlns="http://www.w3.org/2000/svg" width="11" height="18" viewBox="0 0 11 18" fill="none"><g opacity="0.35"><path d="M9.54974 17.0485L1.69141 9.17153L9.54974 1.29456" stroke="#1D2128" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/></g></svg>',
        nextHtml: '<svg xmlns="http://www.w3.org/2000/svg" width="11" height="18" viewBox="0 0 11 18" fill="none"><g opacity="0.35"><path d="M1.28906 1.29456L9.1474 9.17153L1.28906 17.0485" stroke="#1D2128" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>\</g></svg>',
        range: true
    });
});