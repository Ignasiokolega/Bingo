# Bingo! <br>
I know this project have some files, so I decide to say what is going on in them. <br>
<br> 

Before I start, I want to apologize for my English, because I still learning it. <br>
<br> <hr>

<!--WHAT NOT EXPLAINED-->

Here, I won't explain HTML, style.css, and connect.php. <br>
<br> <hr>

<!--bingo.php-->

bingo.php is core of program, after you login, you can do operations. <br> 
You can learn what is you're email (if you somehow forgot) <br>
You can also add sentence to your character. <br>
If you have 25 or more sentence for your character, you can write name of your character, and you gain ready bingo. <br>
You, and for example your friends can have characters with same name, but you gain only yours results. <br>
You can also logout. <br>
<br> <hr>

<!--helper.php-->

helper.php (I hadn't got any idea what name should be here) is, how name help to know, helper to create bingo. <br>
After you send with POST your character name, it uses it with "$_SESSION['username']" to find your character and send to bingo informations. <br>
<br> <hr>

<!--index.php-->

index.php is just login page. You write down informations like password and username, and if they are true, you are sended to bingo.php . If you're already logged, you are also sended to bingo.php. <br> 
<br> <hr>

<!--log_in.php-->

log_in.php is not login page. Instead, this is ""page"" that check if exist the account with informations from index.php . <br>
<br> <hr>

<!--logout.php-->

logout.php have small, but important rule. In bingo.php , you can logout. But if logout.php didn't exist, that button would be useless. <br>
You may know ask: What it do then? It delete "$_SESSION" array. <br>
<br> <hr>

<!--new_bingo_sentence.php-->

new_bingo_sentence.php, after getting information from bingo.php, gets from database information for bingo, and sends it back to bingo.php. Nothing more to explain here. <br>
<br> <hr>

<!--sign_up.php-->

sign_up.php is just registration page. <br>
It have some needs, like not to short username, but that's trivial. 
<br> <br> <hr>

<!--welcome_page.php-->

welcome_page.php - After you register, you are on this page. You can login for the first time, but you propably won't see that page (after registration) ever again. <br>
<br> <hr>

# SPECIAL THANKS:

I really want to thank my brother, that really help me and his code is dominating here. His Project was named "Palace" but, because I was making bingo, I have change that name. Here is link to his code:

https://github.com/kingfisher843/palace
<br> <hr>
Trivia:<br>

Version of php i'em using is 8.2.6. <br>
I'em using Mariadb, not MySQL. <br>
"Terms" of use are google home page. <br>
<hr>

If there is somethink you don't understand, don't afraid to ask me.

