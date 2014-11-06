<h1>Login</h1>
 
<form role="form" method="post">
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-default" value="Login">Login</button>
</form>

<div>
    or <a href="register.php">Register for an account</a>
</div>


<h1>Description</h1>
<p>This page may serve as a recollection of my work.<br/>
They follow the standard of the MVC paradigm of modern industry
    If features:</p>
    <ul>
        <li><a href="index.html"> Social Network:</a><br/> 
        <p>Similar to facebook but customized. It
        can be used a a means of internal communication within a
        company.</p>
        <p>To check it out, just register a fake account and you are in!
        I used php for the logic, php for storing data, ajax to 
        call information without refreshing the page.</p></li>

        <li><a href="map.php">Map</a>
        <p>It shows your GPS location in a map and it allows you to find
        the location of every building, department, and office on 
        the LATTC campus.</p>
        <p>To create it, I used Javascript, jQuery Mobile, Google Maps API,
        and ajax to retrieve college news dinamycally.</p></li>

        <li><a href="edplan.php">Ed Planner</a>
        <p>It allows a student to select a major and track his or her progress.
        The system calculates how many units has the student taken, how many
        more does s/he needs in order to graduate, and it shows the classes 
        needed for every major.</p>
        <p>This was done using Javascript, php, and mysql.</p></li>

        <li><a href="webgl.php">WebGL</a>
        <p>This is what I am currently developing. The context of the project 
        is explained in cgi.php. It consists in developing 3D models of
        pieces and machines and allow users to manipulate them either by
        using a mouse or Leap Motion.</p>
        <p>For this project I am using WebGL, openGL, three.js</p></li>

        <li><a href="orientation/">Tutorials</a>
        <p>This just shows information for newbies on how to connect to 
        the college Wi-Fi, how to use the college email system, Moodle,
        and e-portfolios</p>
        <p>I used CSS3 and Javascript</p></li>
    </ul>
