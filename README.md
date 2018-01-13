# Get-Post-Group-Routing-in-Laravel-5.5.28
basic Group routing using laravel php framework

# Description About How to use code in your Local machine

- Put view folder into your laravel/resources/
- Put web.php into laravel/routes/
- Put css file into laravel/public


## Every single unique line of code commented in the files

Start Laravel Services and Put this url in browser http://127.0.0.1:8000

Home page is contain Navigation menu and and some other menu for GET Route and Form for POST route.

Every page is contain link to homepage using via get route.

When it use route in the link. For this have to defined route for that link in route/web.php file where all route define.

POST route recieve request object from the form. Containing all the input values from the form.
and return all the values to page on which you want to process that data.
POST route use session token for avoiding cross site scripting for secuirity reasons.

Grouping routes are use one time group route. and put all the route in one group to show same prefix word in the url.
prefix word will show in the url. look like prefix *pages* http://127.0.0.1:8000/pages/


Run your code and try to understand.
