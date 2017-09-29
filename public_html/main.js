

// first
// last
// participant_type
// shirt_size
// diet_restrictions
// participant_id
// emergency_contact_name
// signed_in



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

      if (a.Last == b.Last) {
        return a.First < b.First ? -1: 1;
      }

      return a.Last < b.Last ? -1: 1;
    };

    function signinDancer(d) {
            $("#last-checked").text("Last checkin pending. Please wait...")
                                         .removeClass("check-success check-error").addClass("check-waiting");
      /*
      $.post('request1.php', {participant_id: d.participant_id}, function(d) {
        d.signed_in = "1";
      }).success(function(d) { 
            $("#last-checked").text("Last checkin succeeded!")
                                         .removeClass("check-waiting check-error").addClass("check-success");
      }).error(function(d){
            $("#last-checked").text("Error: Last checkin failed! Please retry.")
                                         .removeClass("check-waiting check-success").addClass("check-error");
      });*/
     $.ajax({
         url: "request1.php", 
         dataType: "json",
         type: 'POST', 
         data: {participant_id: d.participant_id, name: d.First + " " +d.Last}, 
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
      
      $.post('request1.php', {participant_id: d.participant_id}, function() {
        d.signed_in = "0";
      });
    };


    /* View */

    function setupProfile(d) {
      
     if (d.signed_in == "1") {
        $profile.addClass('si');
      }
console.log(d);
      $profile.find('#name').html(d.First + ' ' + d.Last);
      //$profile.find('#email').html(d.email);
      $profile.find('#shirt_size').html(d.shirt_size);
      $profile.find('#level').html(d.participant_type);
      $profile.find('#id').html(d.participant_id);
      $profile.find('#diet').html(d.diet_restrictions);
      $profile.find('#contact').html(d.emergency_contact_name);
       if(d.signed_in == "1"){
           $profile.find('#message').text(d.First + " has already checked in!").removeClass("check-error").addClass("check-success");
        }
      $profile.removeClass('loading');
//if(d.waiver_signed == "0"){
//alert(d.First + " " + d.last + " did NOT sign a waiver at registration!");
//}
//if(d.unpaid == "1"){
//alert(d.First + " " + d.last + " is listed as UNPAID!");
//}
    };

    function back() {

      // Clear the profile
      $profile.removeClass('si so').addClass('loading').hide();
      $shadow.hide();

      $profile.find('#name').empty();
      //$profile.find('#email').empty();
      $profile.find('#shirt_size').empty();
      $profile.find('#level').empty();
      $profile.find('#message').empty();
       $profile.find('#id').empty();

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
$.getJSON('request1.php?get_all', function(data) {

  // Setup dataset
  var dancers = new Bloodhound({
    datumTokenizer: function(d) { return [d.Last, d.First] },
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    local: data,
    limit: 10,
    sorter: dancerSort
  });
  dancers.initialize();
   
  // Setup typeahead
  $type.typeahead(null, {
    name: 'dancers',
    displayKey: 'id',
    autoselect: true,
    source: dancers.ttAdapter(),
    templates: {
      suggestion: function(d) {
        var html = d.signed_in != '0' ? '<div class="suggest-signedin">': '<div>';

        html += //'<p class="dancer-email">' + d.id + '</p>' +
        '<p class="dancer-name">' + d.First + ' ' + d.Last + '</p>' +
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
    $.getJSON('request1.php?participant_id=' + d.participant_id, function(newD) {
      setupProfile(d);

      // Enable buttons and keys
      enableButtonsAndKeys(d);
    }).error(function() { $("#message").text("ERROR fetching dancer data! Try again.").removeClass("check-success").addClass("check-error"); })
  });

});