findMyRoomie
============
  
  A web course project in Fall 2012 
  
  Page Description:
  
  Entry Pages (entrance.php)
  ===========
  Log In (Link: entrance.php?entry=login) 
       The entry page for a user to log into the web, and a new session starts
  
  Sign Up (Link: entrance.php?entry=register) 
       The entry page for a user to sign up an account. If registered successfully, log in is automatically.
  
  Gallery Pages (gallery.php || Log in is required before access)
  
  Account Management (Link: gallery.php?request=account) 
       Page for a user to update username, password or delete an account
  
  Profile Information (Link: gallery.php?request=profile) 
       Page for a user to update the profile information, such as names, contact, living habits.
  
  Dorm Selection ( gallery.php?request=profile) 
       Page for a user to make a dorm selection.
  
  Search Your Roommate ( gallery.php?request=main) 
       Page for a user to search roommates according to his/her options.
  
  Extra Credit (work beyond A7):
  
  More functionality (A user's perspective):
    Dynamic Username Checking:
    On the registration page: the username existence checking is implemented dynamically, that is when a keyup event occurs, an ajax call is made to the server to check the username availability in a real-time fashion.
    The code is resued for a user to update his/her username on the account update page.
  
  Database/default Information preloading:
    On the profile page, when an user first registered, the input fields are filled with a default template values. When a user attemps to update his/her profile information, upon the profile page loading, an ajax call is made to the server to fetch his/her last registered information, and the form is populated with them.
    On the dormCart page, the cart of dorms is first checked with the previous selections of a user.
  
  More clean code (A developer's perspective)
    Modularity/Reusability/Code sharing: The code is refactored to increase the modularity. There are only two php files in the main directory- entrance.php and gallery.php. All the correponding pages/forms are loaded via PHP scripts from the formSnippet folder. Several php scripts are in charge of the page generation from a combination of banner, menu and body form. The frequent-referenced code modules are put in the common folder. The CSS, JavaScripts are shared in a natural way. For instance, the username/password checker is used for both registration page and accout upate page. The display of banner/banner/body are extracted into seperate CSS files.
    
    Scalability: The User class is refactored to put all fields into a profile[] array instead of stand alone fields, and the keys are made consistent across database, php objects and client forms. For the synchronization between client and database, foreach loop statement is used to information exchange. The advantage is that if we add additional attributes into the database, the synchronization method will be unchanged. There will never inforamtion missing within the interface during scale up.
    Security: As small number as possible are the files exposed to the user. Only the entrance.php and gallery.php are accessible directly. The Service scripts and ORM files are put a separate folder - PHPScripts.
