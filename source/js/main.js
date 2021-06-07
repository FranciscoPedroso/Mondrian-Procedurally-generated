import './js-modules/jquery-global.js';
import {favicon} from './js-modules/favicon.js';

$(document).ready(function() {
  favicon();

  setTimeout(function(){
    $('body').addClass('go-anim');
  }, 1500);

  setTimeout(function(){
    $('body').addClass('debug-webkit');
  }, 4000);

  setTimeout(function(){
    $('body').removeClass('debug-webkit');
  }, 4500);
});