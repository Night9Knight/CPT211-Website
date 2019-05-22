<script src="https://code.jquery.com/jquery-3.4.0.js" integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo=" crossorigin="anonymous"></script>
<script type="text/javascript">
  $(window).scroll(function() {
    var scroll_position = $(window).scrollTop();
    $('section').css({	//styling of image as section is css external file
      'background-position-x': -scroll_position + 'px',	//parallax effect formula
    })
  })
  </script>