<h3>Dynamic and Static Content</h3>
<p>&emsp; Look at the header, now back to me, now back to the header, now back to me. You'll notice that the header is not me,
the header stays the same no matter what buttons you press, while I change based on the buttons you press above me. This is because
I am dynamic content, and the header is static content. That's not to say that I am better than the header, even though I am, just
because I am dynamic content. Static content, like the header up there, has its uses, even if it isn't as interesting as me.</p>

<p>&emsp; Jokes aside, the main obvious difference between Dynamic and Static content is that Static content stays the same
and does not change on its own. Dynamic content is changed by user input or other php statements the developer set up.
This area right here that you are looking at is Dynamic Content, you can tell from the way that selecting a button changes what
you see here. Creating a Dynamic content section for a webpage can seem very complicated at a glance, but once you get used to it 
you'll find its fairly simple as long as you get your syntax correct.</p>

<p>&emsp; The first thing that is needed is obviously a section for the Dynamic content to appear, this can be easily
set up using a div section. Then you should have an If-else that determines whether to display the default content or some
other content based on buttons pressed or whatever other way you have of determining what to show, but you'll probably
be using an "isset($_GET[''])" either way. From there, you'll use a switch or a long series of If-Else statements to determine
what to show in the dymanic section, and you'll use a php include statement to include a php file with the content you want to
display to the user. For example, when you pressed the button that displayed this content to you, the button is a hyperlink that
sent you to this same main page but had an indicator that said "page=site_layout" which told the switch statement which
file to display. That's really the main things you need to understand, the rest is all customized by you and what names you choose.</p>