<?php include 'header.php'; ?>
        
<div id="content">

    <div id="main">


    </div> <!--end main-->
	<div id="sidebar">
        
          <div id="worship">         
              <h4>Sunday Worship</h4> 
              <ul>
                  <li>9:15am Sunday School <br>(Grades 6-12 / Adult)</li>
                  <li>10:00am Worship Service</li>
                  <li>11:00am Coffee Hour</li>
			  </ul>             
          </div> <!-- /worship -->
                      
          <div id="findus">       
                <h4>Find Us</h4>
                <p>5399 Geneva Ave. North<br>
				Oakdale, MN 55128</p>
                <p>651.773.9397</p>
                <div class="map">
                <iframe id="gmap" width="225" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=5399+Geneva+Avenue+North+Oakdale,+Minnesota+55128&amp;aq=&amp;sll=44.934383,-93.112741&amp;sspn=0.067201,0.169086&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=5399+Geneva+Ave+N,+Oakdale,+Minnesota+55128&amp;z=14&amp;ll=45.026986,-92.983909&amp;output=embed"></iframe>
                <p><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=5399+Geneva+Avenue+North+Oakdale,+Minnesota+55128&amp;aq=&amp;sll=44.934383,-93.112741&amp;sspn=0.067201,0.169086&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=5399+Geneva+Ave+N,+Oakdale,+Minnesota+55128&amp;z=14&amp;ll=45.026986,-92.983909" target="_blank"><span>View Larger Map</span></a></p>  
               </div> <!--end map-->
			   </div> <!-- /findus -->
               
         <div id="posts">
         	 <h4>Recent Posts</h4>
         	<ul>
            	<li><a href="#">"Title of Recent Post" <span>(1.12.14)</span></a></li>
                <li><a href="#">"Title of Another Post" <span>(1.15.14)</span></a></li>
                <li><a href="#">"Title of Another Recent Post" <span>(1.17.14)</span></a></li>
                <li><a href="#">"Title of Another Post" <span>(1.20.14)</span></a></li>
                <li><a href="#">"Another Post with a Longer Title" <span>(1.24.14)</span></a></li>
            </ul>
         </div>
               
    </div> <!--end sidebar-->
    	
</div> <!-- /content -->  

<script>
// Retrieves more recent "message" post from database and displays it

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
RetrieveLastPost();

</script>

<?php include 'footer.php'; ?>