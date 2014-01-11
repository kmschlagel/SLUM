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
  })
};

// Populate recent posts list in sidebar.
//function listRecent(recent) {
  //var postList = $('#recentPosts');
  //postList.empty();
  //for (x in recent) {
    //// Name post "Untitled" if no title present.
    //if (recent[x].title == "") {
      //title = recent[x].datetime;
    //}
    //else {
      //title = recent[x].title;
    //}
    //postList.append("<li><div class='list_link' value='" + recent[x].id +
      //"'><a href='#'><div id='post_type'>" + recent[x].type + "</div>" +
      //title + "</a></div><div id='post_delete' value='" +
      //recent[x].id + "'>X</div></li>");
  //}
//};
//listRecent(recent_list);














RetrieveLastPost();