// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';
import './styles/index.css';


import $ from 'jquery';


global.$ = global.jQuery = $;



import 'bootstrap';
import 'datatables.net-dt';

$(document).ready(function(){
    $('#datatable').DataTable();
});

// start the Stimulus application
import './bootstrap';