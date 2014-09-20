    
	    <ul data-role="listview" data-theme="c">
            <?
            foreach ($data as list($id, $name, $building)) {
            echo "<li id='$id' onclick='findMap(this, $building)'><a href='#home'>$name</a></li>
                  ";
            }
            ?>
    
        </ul>
    </div><!--end content-->
</div><!-- end page -->
