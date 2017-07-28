

jQuery(document).ready(function ($) {

  $('form input[type="submit"]').addClass('btn btn-primary btn-raised');  

  $('#block-views-exp-festivais-page-1 h2').prependTo('.views-exposed-form');

  $('#edit-title').attr('placeholder','Nome do Festival');
  $('#edit-field-cidade-tid').attr('placeholder','Pesquisa por Cidade');
  $('#edit-field-estado-value option:first-child').html('Pesquisa por Região');
  $('input[name="field_date_value[value][date]"]').attr('placeholder','Pesquisa por Data');

  $('#edit-field-date-value-value-datepicker-popup-0').css('width','100%');



});



