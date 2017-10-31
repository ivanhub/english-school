osQuest5 PHP/XML based Quiz software (and associated Text to XML module)  
    Copyright (C) 2009 - Jon-Michael C. Brook (osquest@c-d-r.net) & Johnny Lang
      http://osquest5.cippguide.org
    Based on osQuest4 (http://www.quest4.org/osquest4/) by Jay Banks

    See license.txt for full details

----
Feb 27, 2009

The documentation's still a bit thin, but here goes:

RELEASE NOTES:

There's a decent amount of error checking that's been added for the incoming Trandumper files  (http://dumps.sacns.net/222%20braindumps/Trandumper/Readme.htm), catching things such as:
	- Capitalization changes for answer choices (a,B,c) and on fill in the blank (augusta = Augusta)
	- Spacing on the answers
	- Renumbering in instances where multiple tests are appended together and uploaded
See the simpletest.txt file for examples.

There is a maximum file upload size.  It may be found by running the maxpostsizetest.php file.  Look for post_max_size.  A typical size is 8MB.

----

USER GUIDE:

The index.php entry provides four choices at the top of the screen.

Home:
Choose the xml file for the information you would like to learn
Choose a mode - 
	test - does not display the answers or explanations until after the exam is finished
	learning - displays the correct answer and the explanation after each question
	flash - flashcards displaying the question, answer and explanation


Upload a file:
Browse for a trandumper file on the local computer.  Only supports Trandumper 1.0 format ~ Question, A through E followed by '.' for answers, and explaination.  Uploads file to the ./tests directory by default, although this may be customized in the upload_file.php.
The password is currently hard coded to 'french'


text2xml:
Type in the filename for the test that was just uploaded to the tests directory and click submit.  This will convert the Trandumper.txt file into an XML encoded test file for use within the system.


Logout:
