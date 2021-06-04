// import styles
import '@/assets/sass/main.scss';
//import global libs
import dl from 'lib/js/devLogger';

const addJquery = false;



if (addJquery) {
    const jQuery =  require("jquery");
    window.$ = jQuery;
}

import 'bootstrap/dist/js/bootstrap.bundle.min';
import "jquery-nice-select";
import 'air-datepicker/dist/js/datepicker.min';
// set libs to global scope
window.dl = dl;

// import global constants
import {isDev} from "lib/js/devLogger";
// set global constants
Object.defineProperty(window, 'isDev', { value: isDev });
// require main js file
require("js/index");
require("js/form-validation");
require("js/datepicker");
require("js/calendar-filters");
require("js/gallery");
