<?php include 'header.php' ?>

<div id="content">
    <div id="main">
        <img src="images/VBS/logo-workshopofwonders-cropped.jpg" width="185" height="146" style="float: right;">

        <h3>Vacation Bible School Registration</h3>

        <p>Invite your children, grandchildren, and friends to Workshop of Wonders this summer at Vacation Bible School!
            In Workshop of Wonders, kids from ages three through 6th Grade will experience
            the love of Jesus through Bible stories, games, fun crafts, music, discovery time, and dinner.<br><span
                class="bold">Monday August 18<sup>th</sup> - Thursday August 21<sup>st</sup></span><br><span
                class="bold">6:00pm - 8:00pm daily</span></p>

        <h3 style="color:#C9A68F; margin-top: 10px;">Registration Deadline: August 13<sup>th</sup></h3>

        <form id="register" name="register" action="sendmail.php" method="post" onSubmit="return checkme();">
            <fieldset>
                <ul>
                    <li>
                        <label><span class="bold">Required fields*</span></label>
                    </li>
                    <li>
                        <label for="pname">Parent's Full Name*</label>
                        <input type="text" name="pname" id="pname"/>
                    </li>
                    <li>
                        <label for="address" class="lbl">Full Mailing Address*</label>
                        <textarea name="address" id="address" cols="30" rows="5"></textarea>
                    </li>
                    <li>
                        <label for="phone">Phone Number* (999-999-9999)</label>
                        <input type="text" name="phone" id="phone" maxlength="12"/>
                    </li>
                    <li>
                        <label for="ephone">Emergency Contact Number*</label>
                        <input type="text" name="ephone" id="ephone" maxlength="12"/>
                    </li>
                    <li>
                        <label for="email">Email*</label>
                        <input type="text" name="email" id="email"/>
                    </li>
                    <li>
                        <label for="cname1">Child's Full Name*</label>
                        <input type="text" name="cname1" id="cname1"/>
                    </li>
                    <li>
                        <label for="age1">Child's Age*</label>
                        <input type="text" name="age1" id="age1"/>
                    </li>
                    <li>
                        <label for="cname2">Second Child's Full Name</label>
                        <input type="text" name="cname2" id="cname2"/>
                    </li>
                    <li>
                        <label for="age2">Second Child's Age</label>
                        <input type="text" name="age2" id="age2"/>
                    </li>
                    <li>
                        <label for="cname3">Third Child's Full Name</label>
                        <input type="text" name="cname3" id="cname3"/>
                    </li>
                    <li>
                        <label for="age3">Third Child's Age</label>
                        <input type="text" name="age3" id="age3"/>
                    </li>
                    <li>
                        <label for="cname3">Fourth Child's Full Name</label>
                        <input type="text" name="cname3" id="cname3"/>
                    </li>
                    <li>
                        <label for="age3">Fourth Child's Age</label>
                        <input type="text" name="age3" id="age3"/>
                    </li>
                    <li>
                        <label for="cname3">Fifth Child's Full Name</label>
                        <input type="text" name="cname3" id="cname3"/>
                    </li>
                    <li>
                        <label for="age3">Fifth Child's Age</label>
                        <input type="text" name="age3" id="age3"/>
                    </li>
                    <li>
                        <label for="cname3">Sixth Child's Full Name</label>
                        <input type="text" name="cname3" id="cname3"/>
                    </li>
                    <li>
                        <label for="age3">Sixth Child's Age</label>
                        <input type="text" name="age3" id="age3"/>
                    </li>
                    <li>
                        <label for="needs" class="lbl">List any Special Needs or Allergies</label>
                        <textarea name="needs" id="needs" cols="30" rows="10"></textarea>
                    </li>
                    <li><label>How did you hear about our VBS?*</label><br>
                        <select name="hear_about_VBS" id="hear_about_VBS" data-theme="a">
                            <option value="none">
                                Choose One
                            </option>
                            <option value="friend_or_family">
                                Friend or Family
                            </option>
                            <option value="poster">
                                Poster
                            </option>
                            <option value="flyer">
                                Flyer
                            </option>
                            <option value="website">
                                Website
                            </option>
                            <option value="other">
                                Other
                            </option>
                        </select>
                    </li>
                    <li><label>I would like information on the following:</label><br>
                        <select name="information" id="information" data-theme="a">
                            <option value="none">
                                Choose One
                            </option>
                            <option value="membership">
                                Church Membership
                            </option>
                            <option value="elementary_school">
                                Elementary School
                            </option>
                            <option value="pre_kindergarten">
                                Pre-Kindergarten
                            </option>
                            <option value="sunday_school">
                                Sunday School
                            </option>
                        </select>
                    </li>
                    <li>
                        <label for="submit">&nbsp;</label>
                        <button type="submit" id="submit">Submit</button>
                    </li>
                </ul>
            </fieldset>
        </form>
    </div>
    <!--end main-->
    <div id="sidebar">
        <div id="worship">
            <h4>Sunday Worship</h4>
            <ul>
                <li>9:00am Sunday School <br>(Grades 6-12 / Adult)</li>
                <li>10:00am Worship Service</li>
                <li>11:00am Coffee Hour</li>
            </ul>
        </div>
        <!-- /worship -->
        <div id="findus">
            <h4>Find Us</h4>

            <p>5399 Geneva Ave. North<br>
                Oakdale, MN 55128</p>

            <p>651.773.9397</p>

            <div class="map">
                <iframe id="gmap" width="225" height="175" frameborder="0" scrolling="no" marginheight="0"
                        marginwidth="0"
                        src="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=5399+Geneva+Avenue+North+Oakdale,+Minnesota+55128&amp;aq=&amp;sll=44.934383,-93.112741&amp;sspn=0.067201,0.169086&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=5399+Geneva+Ave+N,+Oakdale,+Minnesota+55128&amp;z=14&amp;ll=45.026986,-92.983909&amp;output=embed"></iframe>
                <p>
                    <a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=5399+Geneva+Avenue+North+Oakdale,+Minnesota+55128&amp;aq=&amp;sll=44.934383,-93.112741&amp;sspn=0.067201,0.169086&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=5399+Geneva+Ave+N,+Oakdale,+Minnesota+55128&amp;z=14&amp;ll=45.026986,-92.983909"
                       target="_blank">View Larger Map</a></p>
            </div>
            <!--end map-->
        </div>
        <!-- /findus -->
    </div>
    <!--end sidebar-->
</div> <!-- /content -->
<div id="footer">
    <h4>Contact Us</h4>

<?php include 'footer.php' ?>

