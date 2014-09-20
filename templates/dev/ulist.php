    
	    <ul data-role="listview" data-theme="c">
            <?
            foreach ($data as list($name, $linkto)) {
            echo "<li><a href='#$linkto'>$name</a></li>
                  ";
            }
            ?>
    
        </ul>
    </div><!--end content-->
</div><!-- end page -->
