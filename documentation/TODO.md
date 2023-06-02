# To Do

+ Docuumentation
	+ codestyle
		+ variable declaration
		+ variable naming
		+ function declaration
	+ REDAME
		+ Summary
		+ How to use
		+ Env files documentation
	+ DB
		+ Documentation with SQL code to generate database
		+ Optional code to generate fixtures to test the app
			+ Create fixtures
			+ Delete fixtures and clean ID incrementation in DB

+ Deleting an existing task
	+ button to delete a task
	+ controller to delete task
		+ confirmation
		+ soft delete
		+ return back to main page

+ DB structure
	+ Add a soft delete date

+ DB connection
	+ Check for .env.local in readEnv.php
		+ if it exists use it for environnemental variables
		+ else use .env
			+ if .env doesn't exist, warn.

+ Displaying Task
	+ Do not show soft deleted tasks

+ Adding a new task
	+ CSS
	+ Add a function to check if exist and ask user if he wants to add it or the corrresponding one is already matching
		+ compare names and description to evaluate similarities
		+ ask user
			+ insert in db if user is ok
			+ else ditch

+ Edit Task
	+ view with gathered informations from the existing
		+ can be a reuse of the page to add a task
	+ model to update with the new content

+ Code Structure
	+ Make sure that the code works even if projects isn't in server root folder

+ Deploying
	+ Install the project on a server

+ Visuals
	+ Logo
	+ Work on design