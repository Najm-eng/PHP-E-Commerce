# PHP-E-Commerce
The project is cisc 3140 Town Market. It is an online market that provides some
products to sell mostly watches and shoes. The project contains a home page contact me
and an Exchange currency page. It has login and signup pages as well.
Goal of your project
The purpose of my project is to simulate some online shops that sell products or provide
services. I have done in other classes a login system using php and sql and I always want
to do a complete website with a login system and a shopping cart. Finally I did it.This
project provides to consumers access to the home page where he/she can find the product
i’m selling, and to a page call Exchange rate that provides a free service to members, but
not to the guests where they can change currency value from and to USD since i have the
product priced in US dollars and and to sign up page where guests can create their
accounts and become members, and To contact me page where guests and members can
directly send me messages.
How pages interact within themselves
First of all i have created a header php file and foot php file that i have included in every
page (login, sign in,gusts home page, members home page, shopping cart page and
thanks page ) and it provides the navigation bar links like (home,Exchange rate,contact
me,login and cart shows only to members)
A. Pages interact differently based on who is the users
● There are two different type of users
1. Guest users
- The guest users will have access to the guest home page
where they can view the products, offers and have an access
to only contact me page and log in page.
- Guest can access sign up page from like provide in login
page
- guests won’t be able to add to cart or to make a purchase
unless he/she sign up
- Guests won’t be able to access the service page (only
members) if a guest clicks on the service link a message will
pop up saying sign up to guarantee access and it will
automatically take to the signup page.
- Guest can creates an account in sign up page by entering the
following (name, emaili ,username,password,repeat
password) and then signin.inc.php will check if the username
or the email are taken or not and then will check if everything
entered properly and the data will be stored in database. If
there is any issue a message will pop out that says what the
issue is.
2. Member users
-The member users will have access to the member home
page where they can view the products, and add them to the
cart.
- Member users will have access to the cart by clicking on the
logo of the cart where it is located in the navigation bar next
to the log out link.
-Members can go ahead and purchase the product by clicking
on buy in the shopping cart page(cart.php) and then they will
be taken into the order confirmation page.
-Confirmation page (thanks.php) in this page a member can
view their order number and the arriving day and on
countdown to show a countdown timer that shows how long
more time for arrival moment.
- Members have access to service page (exchange rate) where
the member can check the currency value from and to USD
- when members logout they will be taken into the guest
home page.
● Members and guests have an access to Contact me page, it is a page that has a
form to fill up inorder to send a message to the owner and when the member or
guest click on send, a message will pop up saying that the message has been sent
