$('#chrome').onstart(function() {
  $('#chrome .chromesearchbar').focus(function() {
    $('#chrome .app-name').addClass('fullwidth');
  });
  $('#chrome .chromesearchbar').blur(function() {
    $('#chrome .app-name').removeClass('fullwidth');
  });
  $(this).keypress(function(e) {
    // Enter button is pressed, set iframe url
    if (e.which == 13) {
      var url = $('#chrome .chromesearchbar').val();
      $('#chrome .chromeframe').attr('src', url);
    }
  });
});
$('#chrome').ondestroy(function() {
  // Define stuff on destroy
});

setInterval(function() {console.log($(window).scrollTop());}, 1);
