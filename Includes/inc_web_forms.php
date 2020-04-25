<h2>Web Forms and User Input</h2>
<a href="#Alpha">Alphabetizing User Input</a>&emsp;<a href="#img">Image Gallery</a>&emsp;<a href="#process">Add Zodiac Feedback</a>
&emsp;<a href="#view">View Zodiac Feedback</a>
<p>&emsp;Web forms are an easy way to process user input on a website. You first design a form for collecting user input, 
whatever input you may want from the user such as names, dates, comments, and so on, and finish with a submit button.
Then when the user hits submit, the user will either be redirected to another page that will display some information, or be
returned to the same page. In the first instance, the form data can then be collected by Php script and stored or used however
you wish, even being displayed on the second page. In the case of an All-in-one web form, the php script checks if any input 
has been received, usually using "isset()", and then process the data on that same page.</p>
<div> <a id="Alpha"><h3>Alphabetizing User Input</h3></a>
    <p>&emsp;This script takes in user input in a text area, the user is asked to input the names of the zodiac signs in 
    whatever order they want. The script then validates the input to ensure only the names of zodiac signs were entered; if all
    of the input is correct then it alphabetizes the entered names and returns them in that order to the user.</p>
    <a href="AlphabetizeSigns.php">[Test the Script]</a>
    <a href="ShowSourceCode.php?source_file=AlphabetizeSigns.php">[Show the Source Code]</a>
</div>
<div> <a id="img"><h3>Image Gallery</h3></a>
    <p>&emsp;This script displays a thumbnail gallery of some of the images used in the making of this site. The images are
    displayed using an associative array populated with the links and names of each image, and a foreach loop to use the array.</p>
    <a href="ZodiacGallery.php">[Test the Script]</a>
    <a href="ShowSourceCode.php?source_file=ZodiacGallery.php">[Show the Source Code]</a>
</div>
<div> <a id="process"><h3>Add Zodiac Feedback</h3></a>
    <p>&emsp;This script allows you to enter in comments about this website in a form that then adds the information you
        provide to the database associated with feedback.
    </p>
    <a href="zodiac_feedback.html">[Test the Script]</a>
    <a href="ShowSourceCode.php?source_file=process_zodiac_feedback.php">[Show the Source Code]</a>
</div>
<div> <a id="view"><h3>View Zodiac Feedback</h3></a>
    <p>&emsp;This script displays all the public entries in the zodiacfeedback table of our database.</p>
    <a href="view_zodiac_feedback.php">[Test the Script]</a>
    <a href="ShowSourceCode.php?source_file=view_zodiac_feedback.php">[Show the Source Code]</a>
</div>