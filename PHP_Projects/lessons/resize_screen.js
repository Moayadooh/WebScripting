<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>JavaScript Window Resize Event</title>
</head>
<body>
    <div id="result"></div>
 
    <script>        
    // Defining event listener function
    function displayWindowSize(){
        // Get width and height of the window excluding scrollbars
        var w = document.documentElement.clientWidth;
        var h = document.documentElement.clientHeight;
        
        // Display result inside a div element
        document.getElementById("result").innerHTML = "Width: " + w + ", " + "Height: " + h;
		//document.write("hello");
    }
     
    // Attaching the event listener function to window's resize event
    window.addEventListener("resize", displayWindowSize);
    
    // Calling the function for the first time
    displayWindowSize();
    </script>
    <p><strong>Note:</strong> Please resize the browser window to see how it works.</p>
</body>
</html> 