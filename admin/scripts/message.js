// Load the most current post on page load
function RetrieveLastPost() {
  var dataString = 'action=retrieve_post_by_type&post_type=message';

  $.ajax({
    type: "POST",
    url: "admin/index.php",
    data: dataString,
    dataType: 'json',
    success: function(data) {
      $("#main").html(data.content);
    }
  });
};

// Retrieve message from sidebar and load at left.
function RetrieveMessage() {
  $("#posts li").click(function() {
    var id = $(this).attr('value');
    var dataString = 'action=retrieve_message&message_id=' + id;

    $.ajax({
      type: "POST",
      url: "admin/index.php",
      data: dataString,
      dataType: 'json',
      success: function(data) {
        $("#main").html(data.content);
      }
    });
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
        $("#posts ul").append("<li value=" + data[message].id + ">" + data[message].title + "<br>"
                              + date + "</li>");
      }
      RetrieveMessage();
    }
  });
}

// Load most current post on page load.
RetrieveLastPost();

// List messages on page load.
ListMessages();