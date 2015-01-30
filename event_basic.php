<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Event Basic</title>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

    <style>

    </style>

</head>
<body onload="myFunction()">
<section>
    <h3>Paragraph</h3>
        <p>
            jQuery makes it straightforward to set up event-driven responses on page elements. These events are often triggered by the end user's interaction with the page, such as when text is entered into a form element or the mouse pointer is moved. In some cases, such as the page load and unload events, the browser itself will trigger the event.
        </p>
</section>
<form method="post" action="#">
    <label>Your Name</label>
    <input type="text" name="name">
    <br><br>
    <button type="button" id="click1">Click Me</button>
    <br><br>
    <button type="button" id="click2">Mouse Over Action</button>
    <br><br>
    <button type="button" id="click3">Mouse Out Action</button>
    <br><br>
    <button type="button" id="click4">Click Me</button>
    <br><br>
    <button type="button" id="click5">Click Me</button>
    <br><br>
    <button type="button" id="click6">Click Me</button>

</form>


<script>
    $( document ).ready(function() {
        alert("Page is loaded. Now we want to go for sleep. We are not going for work anymore");
    });

    $(document).ready(function() {
        $("#click1").click(function () {
            alert("The button was clicked.");
        });

        $("#click2").mouseenter(function () {
            alert("You are on the Mouse !!!");
        });

        $("#click3").mouseleave(function () {
            alert("Bye! You now leave Button!");
        });

        $( "#click4" ).dblclick(function() {
            alert( "Handler for .dblclick() called." );
        });

        $( "#click5" ).mousedown(function() {
            alert( "Handler for .mousedown() called." );
        });

        $( "#click6" ).mouseover(function() {
            alert( "Handler for .mouseover() called." );
        });

    });

</script>
</body>
</html>
