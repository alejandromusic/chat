<?php 
  require_once("../include/helpers.php");
  render('header', array('title' => 'Prototype'));
  
  render('headerPage', array('idPage' => 'home', 'titleHeader' => 'Home', 
                            'linkto' => 'menu', 'buttonName' => 'Explore'));
  render('content', array('text'=>'<div id="mapWin" style="width:100%;height:613px;">
                                   <div id="mapholder"></div>
		                           </div>'));
  
  render('headerPage', array('idPage' => 'menu', 'titleHeader' => 'Main Menu', 
                           'linkto' => 'home', 'buttonName' => 'Back'));  
  render('ulist', array(
                    ['My Location','home'],
                    ['Departments', 'dept'],
                    ['Student Services', 'student'],
                    ['Buildings', 'buildings']
                    )); 
                    
  render('headerPage', array('idPage' => 'dept', 'titleHeader' => 'Departments', 
                          'linkto' => 'menu', 'buttonName' => 'Back'));
  render('ulistfunction', array(
                    ['admin', 'Administration of Justice', 'aspen'],
                    ['behavior', 'Behavioral and Social Sciences', 'aspen'],
                    ['business', 'Business, CIS, CAOT', 'cedar'],
                    ['community', 'Community and Economic Dev', 'aspen'],
                    ['cdm', 'Construction, Design, and Manufacturing', 'sequoia'],
                    ['cosmetology', 'Cosmetology', 'magnolia'],
                    ['culinary', 'Culinary Arts', 'sage'],
                    ['design', 'Design and Media Arts', 'cypress'],
                    ['english', 'English', 'aspen'],
                    ['electronics', 'Electronics and Computer Tech', 'cedar'],
                    ['labor', 'Labor Studies', 'mariposa'],
                    ['learning', 'Learning Skills/ESL/ASL', 'mariposa'],
                    ['library', 'Library Science', 'mariposa'],
                    ['language', 'Language Arts', 'aspen'],
                    ['mathematics', 'Mathematics', 'aspen'],
                    ['noncredit', 'Noncredit Continuing Ed', 'mariposa'],
                    ['nursing', 'Nursing and Allied Health', 'magnolia'],
                    ['physical', 'Physical Education/Health', 'laurel'],
                    ['science', 'Science', 'cedar'],
                    ['transportation', 'Transportation Technology', 'oak'],
                    ));
  render('headerPage', array('idPage' => 'student', 'titleHeader' => 'Student Services', 
                        'linkto' => 'menu', 'buttonName' => 'Back'));
  render('ulistfunction', array(
                    ['academic', 'Academic Affairs', 'aspen'],
                    ['admissions', 'Admissions and Records', 'aspen'],
                    ['businessO', 'Business Office', 'cedar'],
                    ['calworks', 'CalWorks/GAIN', 'aspen'],
                    ['career', 'Career Center', 'sequoia'],
                    ['compliance', 'Compliance Office', 'magnolia'],
                    ['counseling', 'Counseling', 'aspen'],
                  ));
  render('footer') ?>

