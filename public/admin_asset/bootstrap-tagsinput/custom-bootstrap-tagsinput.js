$(function() {
  $('input, select').on('change', function(event) {
    var $element = $(event.target),
      $container = $element.closest('.tags-editor');

    if (!$element.data('tagsinput'))
      return;

    var val = $element.val();
    if (val === null)
      val = "null";
    $('code', $('pre.val', $container)).html( ($.isArray(val) ? JSON.stringify(val) : "\"" + val.replace('"', '\\"') + "\"") );
    $('code', $('pre.items', $container)).html(JSON.stringify($element.tagsinput('items')));
    $('#list-tag').attr('value', val);
  }).trigger('change');
});