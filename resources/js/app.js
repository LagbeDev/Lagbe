//import './bootstrap';
import moment from 'moment';
import {MDCRipple} from '@material/ripple';

var time = moment().format('MMMM Do YYYY, h:mm:ss a');
const buttonRipple = new MDCRipple(document.querySelector('.mdc-button'));
let btn = document.getElementById('date-show');
btn.addEventListener('click', function(event) {
    event.preventDefault();
    alert("Clicked on " + time);
});

import {MDCSnackbar} from '@material/snackbar';
const snackbar = new MDCSnackbar(document.querySelector('.mdc-snackbar'));