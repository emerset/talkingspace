# talkingspace
Udemy PHP MySQL Project 4

\config
  > config.php    // Hold DB parameters
  
\core
  > ini.php       // Store autoloader, include files we need to incluce, start our session

\libraries        // Classes
  > Database.php  // Database class using PDO, prepared statements
  > Template.php  // Includes files
  > Topic.php     // 
  > User.php      // 
  > Validator.php // Validate form input
  
\helpers              // Standalone Helper Functions
  > db_helper.php     // DB operations that we just want to run on the fly
  > format_helper.php // Date formats etc.
  > system_helper.php // Redirect, confirm login

\images         // Hold site images, user avatars
  \avatars
  
\templates      // views folder
  \css
  \includes
      > header.php
      > footer.php
  > frontpage.php   // posts that show on the home page
  > topics/php      // list of topics page
  > topic.php       // page that just has one topic
  > register.php    // reg form
  > create.php      // create topic form
  
> index.php
> create.php    // model view controller view
> topic.php
> topics.php
> login.php     // functionaliaty file
> logout.php    // functionalisty file
> register.php  
