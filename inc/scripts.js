$(document).ready(function() {
  $('.transcript').click(function(e) {
    e.preventDefault();

    var linkUrl = $(this).attr('href');
    console.log(linkUrl);

    $('body').append('<div class="modal-transcript"><div class="close-modal">X</div><iframe class="modal-transcript" src="' + linkUrl + '" height="80%" width"80%"></iframe></div>"');

    $('.close-modal').click(function() {
        $('div.modal-transcript').remove();
    });

  });
});
