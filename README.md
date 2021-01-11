# Website-Manager
It contains A Management Software which manages the contains of Website easily without the knowledge of back-end.  

Preinstallations-1)XAMPP software

Steps -->
      
      1)Install XAMPP on your system(preferably UBUNTU)


      2)Copy the NIT-CSE Folder in htdocs folder in Xampp.
      
        To find htdocs folder, computer--->opt--->lampp--->htdocs
        
        (you have to paste NIT-CSE Folder inside htdocs folder)
      3)Open Terminal on ubuntu and give following series of command
      ->cd /opt/lampp
      ->sudo ./manager-linux-x64.run
      
      Then enter your password
      
      4)Xampp software will be launched.
      5)On the top, click Manage Server
      6)On below there is a tab "start all" , click that tab.(you will see all three--mysql, apache server,ProFTPD start running)
      7)Minimize the Xampp software.
      8)Open browser.
      9)Type the URL localhost/phpmyadmin/
        You will see phpMyAdmin page --->Showing that everything goes correct till now.
      10)On the Top there is a tab "Databases", Click on it.
      11)Again You can find a Tab "import", click on it.
      12)A new page open where you can find "Browse", click on it to browse and select "nandy.sql" file provided.
      13)Now after selection scroll down and click "go".
      14)Also Create 'imup' Folder in htdocs & change the permission of others as 'create and delete'.
      15)Now you are ready to view the site---"NITK-CSE"
         To view,a)Open a new tab in the browser
                 b)Type url http://localhost/NITK-CSE/
                 c)Now you can navigate through the sites

<h1>Technology Used </h1>
<h4>                 a)PHP----------For basic code  </h4>  
 <h4>                  b)Javascript---Some Interactive Features   </h4>  
 <h4>                  c)CSS----------For styling the web page   </h4>  
 <h4>                  d)sql----------For database query   </h4>  
 <h4>                  e)HTML---------For Body elements on web page   </h4>  
                 
               
<h4>  software used----XAMPP(Provides tools--Apache server and Mysql database) </h4>  


<h1>Tools </h1>

<h4>  a)Apache Server  </h4>  

<h4>  b)Mysql database   </h4>  


<h1>CONTROL FLOW DESCRIPTION      </h1>

     -----------------------------------------------------------------------------------------------------------------------
     |  FRONT END                                                                                                          |
     |   index.php<--->program.php<---->course.php<---->achievements.php<--->research.php<-->events.php<--->people.php     |
     |       |              |               |                    |                     |          |             |          |
     |       |              |               |                    |                     |          |             |          |
     |       |              |               |                    |                     |          |             |          |
     |       |              ------------------->         <-----------------------------------------------------------------|
     |       --->styles.css,Style1.css,view.css,css/style.css,css/style1.css,css1/style.css<-------------------------------|
     |                                                                                                                     |
     ----------------------------------------------------------------------------------------------------------------------
                                                      ^^^
                                                      |||
                                                      |||
                                                      |||
                                                      |||
                                                      |||
                                                      VVV
     
     -----------------------------------------------------------------------------------------------------------------------
     |                                                                                                                     |
     |       --->styles.css,Style1.css,view.css,css/style.css,css/style1.css,css1/style.css<-----------                    |
     |       |                   |                  |                            |                     |                   |
     |       |                   |                  |                            |                     |                   |
     |       ------------->insert.php<---------->update.php<----------------->delete.php<---------------                   |
     |                                                |                                                                    |
     |                                                |                                                                    |
     |                                                |                                                                    |
     |                                         database("nandy.sql")                                                       |
     |  BackEnd                                                                                                            |
     ----------------------------------------------------------------------------------------------------------------------              
                                                                              
                                                      
                    #In the developed web pages, one can navigate from any html page to any 
                    other html page directly through navigation bar on the top.  
                    
     # For login---There are two type of login
                   a)admin login------can change and update entire site and datbase.
                   b)faculty login----can view and update their profile over the site.
                   
                   c)Login and password for admin in table--"Admin"
                   sample--username=Admin
                           password=12345
                     
                     login and password for faculty in table--"h_faculty"
                     sample---username=Annappa
                              pssword=1234
                    



![Methodology](/image/20.jpg)
