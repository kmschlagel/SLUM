<?php include 'header.php'; ?>
<script type='text/javascript' src='scripts/jquery-dateFormat.js'></script>

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
          <!-- List populated by ListMessages() in message.js -->
          </ul>
         </div>
               
    </div> <!--end sidebar-->
    	
</div> <!-- /content -->  

<script type="text/javascript" src="admin/scripts/message.js"></script>

<?php include 'footer.php'; ?>