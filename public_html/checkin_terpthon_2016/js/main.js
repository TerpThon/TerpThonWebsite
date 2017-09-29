
// email
// first
// last
// signed_in
// shirt_size
// team_name
// participant_id
// health

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

    function signinDancer(d) {
            $("#last-checked").text("Last checkin pending. Please wait...")
                                         .removeClass("check-success check-error").addClass("check-waiting");
      /*
      $.post('request.php', {signup_time: d.signup_time}, function(d) {
        d.signed_in = "1";
      }).success(function(d) { 
            $("#last-checked").text("Last checkin succeeded!")
                                         .removeClass("check-waiting check-error").addClass("check-success");
      }).error(function(d){
            $("#last-checked").text("Error: Last checkin failed! Please retry.")
                                         .removeClass("check-waiting check-success").addClass("check-error");
      });*/
     $.ajax({
         url: "request.php", 
         dataType: "json",
         type: 'POST', 
         data: {participant_id: d.participant_id, name: d.first + " " +d.last, requestType: "signin"}, 
         success: function(json){ 
            d.signed_in = "1";
            $("#last-checked").text(json.name + " was successfully checked in!")
                                         .removeClass("check-waiting check-error").addClass("check-success");
         },
         error: function(json){ 
            $("#last-checked").text("ERROR: last checkin attempt failed. Please retry.")
                                         .removeClass("check-waiting check-success").addClass("check-error");
         },
      });
    };

    function signoutDancer(d) {
            $("#last-checked").text("Last checkin pending. Please wait...")
                                         .removeClass("check-success check-error").addClass("check-waiting");
      /*
      $.post('request.php', {signup_time: d.signup_time}, function(d) {
        d.signed_in = "1";
      }).success(function(d) { 
            $("#last-checked").text("Last checkin succeeded!")
                                         .removeClass("check-waiting check-error").addClass("check-success");
      }).error(function(d){
            $("#last-checked").text("Error: Last checkin failed! Please retry.")
                                         .removeClass("check-waiting check-success").addClass("check-error");
      });*/
     $.ajax({
         url: "request.php", 
         dataType: "json",
         type: 'POST', 
         data: {participant_id: d.participant_id, name: d.first + " " +d.last, requestType: "signout"}, 
         success: function(json){ 
            d.signed_in = "0";
            $("#last-checked").text(json.name + " was successfully checked out!")
                                         .removeClass("check-waiting check-error").addClass("check-success");
         },
         error: function(json){ 
            $("#last-checked").text("ERROR: last checkout attempt failed. Please retry.")
                                         .removeClass("check-waiting check-success").addClass("check-error");
         },
      });
    };
/*
    function signoutDancer(d) {
      
      $.post('request.php', {participant_id: d.participant_id}, function() {
        d.signed_in = "0";
      });
    };
*/

    /* View */

    function setupProfile(d) {
      
     if (d.signed_in == "1") {
        $profile.addClass('si');
      }
      $profile.find('#name').html(d.first + ' ' + d.last);
      $profile.find('#email').html(d.email);
      $profile.find('#amount_raised').html(d.amount_raised);
      $profile.find('#team').html(d.team_name);
      $profile.find('#shirt_size').html(d.shirt_size);
      $profile.find('#health').html(d.health);
      if (d.amount_raised < 120) {
            $profile.find("#amount_raised").css("color","red");
      } else if (d.amount_raised < 240) {
            $profile.find("#amount_raised").css("color","yellow");
            $profile.find("#amount_raised").html(d.amount_raised + " (Regular)");
      } else if (d.amount_raised < 500) {
            $profile.find("#amount_raised").css("color","yellow");
            $profile.find("#amount_raised").html(d.amount_raised + " (Miracle Maker)");
      } else if (d.amount_raised < 750) {
            $profile.find("#amount_raised").css("color","blue");
            $profile.find("#amount_raised").html(d.amount_raised + " (500 Club)");
      } else if (d.amount_raised < 1000) {
            $profile.find("#amount_raised").css("color","magenta");
            $profile.find("#amount_raised").html(d.amount_raised + " (Champions Club)");
      } else if (d.amount_raised < 2400) {
            $profile.find("#amount_raised").css("color","magenta");
            $profile.find("#amount_raised").html(d.amount_raised + " (Comma Club)");
      } else {
            $profile.find("#amount_raised").css("color","black");
            $profile.find("#amount_raised").html(d.amount_raised + " (Mega Miracle Maker)");
      }
       if(d.signed_in == "1"){
           $profile.find('#message').text(d.first + " has already checked in!").removeClass("check-error").addClass("check-success");
        }
      $profile.removeClass('loading');
    };

    function back() {

      // Clear the profile
      $profile.removeClass('si so').addClass('loading').hide();
      $shadow.hide();

      $profile.find('#name').empty();
      $profile.find('#email').empty();
      $profile.find('#amount_raised').empty();
      $profile.find('#team').empty();
      $profile.find('#shirt_size').empty();
      $profile.find('#health').empty();
      $profile.find('#message').empty();

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
/*
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
        }
      });
*/
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
                    d.signed_in == "1") { // x key
          
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
      d.signed_in = newD[0].signed_in; // Prevents problematic double signin when using multiple computers
      setupProfile(d);

      // Enable buttons and keys
      enableButtonsAndKeys(d);
    }).error(function() { $("#message").text("ERROR fetching dancer data! Try again.").removeClass("check-success").addClass("check-error"); })
  });

});
(function poll() {
    $.ajax({
        url: "count.php",
        type: "GET",
        success: function(data) {
            $("#counterSpan").text(data);
        },
        complete: setTimeout(function() {
                                                 poll()
                                            }, 5000),
        timeout: 2000
    })
})();