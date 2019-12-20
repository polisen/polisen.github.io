var tada = parent.$sound('/c/files/sounds/tada.mp3');

$.fn.teletype = function(opts) {
  var $this = this,
    defaults = {
      animDelay: 50
    },
    settings = $.extend(defaults, opts);

  $.each(settings.text.split(''), function(i, letter) {
    setTimeout(function() {
      $this.html($this.html() + letter);

      if (i == 33) {

        someNumber = Math.floor((Math.random() * 23) + 1);
        src = "img/" + someNumber + ".jpg";
        $('#myThis').attr("src", src);

      };

      if (i == 35) {
        tada.play();
      };

    }, settings.animDelay * i);
  });
};

$(function() {
  $('.topText').teletype({
    animDelay: 100,
    text: "IT'S DANGEROUS TO GO ALONE! TAKE THIS."
  });
});
