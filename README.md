<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" >
	<title>Web Application Project - Find My Roommate</title>
	<link rel="stylesheet" type="text/css" href="CSS/body.css" >
	<link rel="stylesheet" type="text/css" href="CSS/index.css" >
	<base target="_blank">
</head>
<body>
	<h2>Welcome to Isabella and Duo's Web Project - 
		<a href="https://workflowy.com/shared/c66b6f07-35e6-3fe1-4724-1f6dcb026c41/">
			COMP 426 Fall 2012
		</a>
	</h2>
	
	<div id="board">
		<h2>Project Name: 
			<span style="font-style:italic;color:darkblue;">Find My Roommate</span>
		</h2>

		<ul>
			<li>Team Member
				<ul>
					<li>Haoyang(Isabella) Huang
						<ul>
							<li>PID: 715099441</li>
							<li>Email: <a href="mailto:haoyangh@live.unc.edu">haoyangh@live.unc.edu</a>
							</li>
						</ul>
					</li>
					<li>Duo Zhao
						<ul>
							<li>PID: 720090360</li>
							<li>Email: <a href="mailto:duozhao@live.unc.edu">duozhao@live.unc.edu</a>
							</li>
						</ul>
					</li>
				</ul>
			</li>

			<li>Page Description:
				<ul>
					<li>Entry Pages (entrance.php)
						<ul>
							<li><a href="entrance.php?entry=login">Log In </a> (Link: entrance.php?entry=login)
								<br>&nbsp;&nbsp;&nbsp;&nbsp; The entry page for a user to log into the web, and a new session starts</li>
							<li><a href="entrance.php?entry=register">Sign Up </a> (Link: entrance.php?entry=register)
								<br>&nbsp;&nbsp;&nbsp;&nbsp; The entry page for a user to sign up an account. If registered successfully, log in is automatically.</li>
						</ul>
					</li>
					<li>Gallery Pages (gallery.php || Log in is required before access)
						<ul>
							<li><a href="gallery.php?request=account">Account Management</a> (Link: gallery.php?request=account)
									<br>&nbsp;&nbsp;&nbsp;&nbsp; Page for a user to update username, password or delete an account</li>
							<li><a href="gallery.php?request=profile">Profile Information </a> (Link: gallery.php?request=profile)
									<br>&nbsp;&nbsp;&nbsp;&nbsp; Page for a user to update the profile information, such as names, contact, living habits.</li>
							<li><a href="gallery.php?request=dormCart">Dorm Selection </a>  ( gallery.php?request=profile)
									<br>&nbsp;&nbsp;&nbsp;&nbsp; Page for a user to make a dorm selection.</li>
							<li><a href="gallery.php?request=main">Search Your Roommate</a> ( gallery.php?request=main)
									<br>&nbsp;&nbsp;&nbsp;&nbsp; Page for a user to search roommates according to his/her options.</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>Extra Credit (work beyond A7):
				<ul>
					<li>More functionality (A user's perspective):
						<ul>
							<li>Dynamic Username Checking:
								<ul>
									<li>On the registration page: the username
										existence checking is implemented dynamically, that is when a
										keyup event occurs, an ajax call is made to the server to
										check the username availability in a real-time fashion.</li>
									<li>The code is resued for a user to update
										his/her username on the account update page.</li>
								</ul>
							<li>Database/default Information preloading:
								<ul>
									<li>On the profile page, when an user first registered,
										the input fields are filled with a default template values.
										When a user attemps to update his/her profile information,
										upon the profile page loading, an ajax call is made to the
										server to fetch his/her last registered information, and the
										form is populated with them.</li>
									<li>On the dormCart page, the cart of dorms is first checked
										with the previous selections of a user.</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>More clean code (A developer's perspective)
						<ul>
							<li>Modularity/Reusability/Code sharing: The code is
								refactored to increase the modularity. There are only two php
								files in the main directory- entrance.php and gallery.php. All
								the correponding pages/forms are loaded via PHP scripts from the
								formSnippet folder. Several php scripts are in charge of the
								page generation from a combination of banner, menu and body
								form. The frequent-referenced code modules are put in the common
								folder. The CSS, JavaScripts are shared in a natural way. For
								instance, the username/password checker is used for both
								registration page and accout upate page. The display of
								banner/banner/body are extracted into seperate CSS files.</li>
							<li>Scalability: The User class is refactored to put all
								fields into a profile[] array instead of stand alone fields, and
								the keys are made consistent across database, php objects and
								client forms. For the synchronization between client and
								database, foreach loop statement is used to information
								exchange. The advantage is that if we add additional attributes
								into the database, the synchronization method will be unchanged.
								There will never inforamtion missing within the interface during
								scale up.</li>
							<li>Security: As small number as possible are the files
								exposed to the user. Only the entrance.php and gallery.php are
								accessible directly. The Service scripts and ORM files are put a
								separate folder - PHPScripts.</li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</body>
</html>
