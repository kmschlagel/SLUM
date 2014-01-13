// Load the most current post on page load
function RetrieveLastPost() {
  var dataString = 'action=retrieve_post_by_type&post_type=message';

  $.ajax({
    type: "POST",
    url: "admin/index.php",
    data: dataString,
    dataType: 'json',
    success: function(data) {
      $("#main").html("<div id='message' value=" + data.id + ">" + data.content
                      + "</div");
    }
  });
};

// Retrieve message from sidebar and load at left.
function RetrieveMessage(ID) {

  var dataString = 'action=retrieve_message&message_id=' + ID;
  $.ajax({
    type: "POST",
    url: "admin/index.php",
    data: dataString,
    dataType: 'json',
    success: function(data) {
      $("#main").html("<div id='message' value=" + data.id + ">" + data.content
                    + "</div");
    }
  });
}

// Populate recent posts list in sidebar.
function ListMessages() {
  var dataString = 'action=retrieve_message_list';

  $.ajax({
    type: "POST",
    url: "admin/index.php",
    data: dataString,
    dataType: 'json',
    success: function(data) {
      for (message in data) {
        // This date formatting requires the dateFormat jquery library,
        // which is linked to at the top of message.php
        var date = $.format.date(data[message].datetime, "MMMM dd, yyyy")
        $("#posts ul").append("<li id=" + data[message].id + ">" +
                              data[message].title + "<br>"
                              + date + "</li>");
      }
      //Assign click-event handler after creation of list:
      $('#posts li').click(function() {
        var id = $(this).attr('id');
        RetrieveMessage(id);
      });
    }
  });
}

// Prev/Next navigation
$('#control-buttons li').click(function() {
  var current_message = $('#message').attr('value');
  var direction = $(this).attr('id');
  var current = $("#" + current_message).get(0);
  if (direction == 'next') {
    // Check if next post exits
    if (current.nextSibling) {
      next = current.nextSibling.id;
      RetrieveMessage(next);
      // Go to top of page
      $('html, body').animate({scrollTop: 0 }, 310);
    } else {
      alert('There are no more posts.');
    }
  }
  else if (direction == 'prev') {
    test = current.previousSibling;
    // Check if previous post exists
    if (current.previousSibling.id) {
      var prev = current.previousSibling.id;
      RetrieveMessage(prev);
      // Go to top of page
      $('html, body').animate({scrollTop: 0 }, 310);
    } else {
      alert('This is the newest message.');
    }
  }
});

// Load most current post on page load.
RetrieveLastPost();

// List messages on page load.
ListMessages();