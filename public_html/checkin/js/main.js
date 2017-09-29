

// participant_id
// email
// first
// last
// fundraising_amount
// team
// signin_time
// signout_time
// signed_in
// signed_out
// shirt_size

var $type = $('.typeahead'),
    $shadow = $('.shadow'),
    $profile = $('.profile'),
    $signin_btn = $('.signin_btn'),
    $signout_btn = $('.signout_btn'),
    $back_btn = $('.back_btn');


    /* Model */

    function dancerSort(a, b) {
      if (a.signed_in == '0' && b.signed_in != '0') {
        return -1;
      } else if (a.signed_in != '0' && b.signed_in == '0') {
        return 1;
      }

      if (a.last == b.last) {
        return a.first < b.first ? -1: 1;
      }

      return a.last < b.last ? -1: 1;
    };

    function updateDancer(d, dNew) {
      d.signin_time = dNew.signin_time;
      d.signout_time = dNew.signout_time;
      d.signed_in = dNew.signed_in;
      d.signed_out = dNew.signed_out;
    }

    function signinDancer(d) {
      
      $.post('request.php', {participant_id: d.participant_id}, function() {
        d.signed_in = "1";
        d.signin_time = Date().toString();
      });
    };

    function signoutDancer(d) {
      
      $.post('request.php', {participant_id: d.participant_id}, function() {
        d.signed_out = "1";
        d.signout_time = Date().toString();
      });
    };


    /* View */

    function setupProfile(d) {
      
      if (d.signed_out != "0") {
        $profile.addClass('so');
      } else if (d.signed_in != "0") {
        $profile.addClass('si');
      }

      $profile.find('.name').html(d.first + ' ' + d.last);
      $profile.children('.email').html(d.email);
      $profile.children('.team').html(d.team);
      $profile.find('.total').html(d.fundraising_amount);
      $profile.children('.shirt_size').html(d.shirt_size);
      $profile.find('.signin_time').html(d.signin_time);
      $profile.find('.signout_time').html(d.signout_time);

      $profile.removeClass('loading');
    };

    function back() {

      // Clear the profile
      $profile.removeClass('si so').addClass('loading').hide();
      $shadow.hide();

      $profile.find('.name').empty();
      $profile.children('.email').empty();
      $profile.children('.team').empty();
      $profile.find('.total').empty();
      $profile.children('.shirt_size').empty();
      $profile.find('.signin_time').empty();
      $profile.find('.signout_time').empty();

      // Reset the typeahead
      $type.typeahead('val', '');
      $type.focus();
    };


    /* Controller */

    function enableButtonsAndKeys(d) {
      
      $back_btn.on('click', function() {
        disableButtonsAndKeys();
        back();
      });
      $signin_btn.on('click', function() {
        disableButtonsAndKeys();
        signinDancer(d);
        back();
      });
      $signout_btn.on('click', function() {
        disableButtonsAndKeys();
        signoutDancer(d);
        back();
      });

      $(document).on('keypress', function(e) {

        e.preventDefault();

        if (e.which == 98) { // b key
          disableButtonsAndKeys();
          back();
        } else if (e.which == 101 && 
                    d && 
                    d.signed_in == "0") { // e key
          
          disableButtonsAndKeys();
          signinDancer(d);
          back();
        } else if (e.which == 120 &&
                    d &&
                    d.signed_in != "0" &&
                    d.signed_out == "0") { // x key
          
          disableButtonsAndKeys();
          signoutDancer(d);
          back();
        }

      });

    };

    function disableButtonsAndKeys() {
      $back_btn.off('click');
      $signin_btn.off('click');
      $signout_btn.off('click');
      $(document).off('keypress');
    };

//Load current data
$.getJSON('request.php?get_all', function(data) {

  // Setup dataset
  var dancers = new Bloodhound({
    datumTokenizer: function(d) { return [d.last, d.first] },
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    local: data,
    limit: 10,
    sorter: dancerSort
  });
  dancers.initialize();
   
  // Setup typeahead
  $type.typeahead(null, {
    name: 'dancers',
    displayKey: 'email',
    autoselect: true,
    source: dancers.ttAdapter(),
    templates: {
      suggestion: function(d) {
        var html = d.signed_in != '0' ? '<div class="suggest-signedin">': '<div>';

        html += '<p class="dancer-email">' + d.email + '</p>' +
        '<p class="dancer-name">' + d.first + ' ' + d.last + '</p>' +
        '<p class="dancer-team">' + d.team + '</p>' +
        '</div>';

        return html;
      }
    }
  });

  // Give focus to the textbox at load.
  $type.focus();


  // Setup event for when a dancer is selected.
  $type.on('typeahead:selected', function(event, d) {

    // Show the empty profile while loading.
    $shadow.show();
    $profile.show();

    // Get updated dancer info (newD)
    $.getJSON('request.php?participant_id=' + d.participant_id, function(newD) {
      updateDancer(d, newD[0]);
      setupProfile(d);

      // Enable buttons and keys
      enableButtonsAndKeys(d);
    });
  });

});

