<?php

if (! isset($_GET["Start"])  ||  $_GET["Start"] != "1")
{
    echo "lisastaudinger.com <br> Under construction";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lisa Staudinger</title>
    <link rel="shortcut icon" type="image/x-icon" href="http://lisastaudinger.com/favicon.ico">
    
    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Eczar:400,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>

    <!-- Stylesheets, Links -->
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="paper-full.min.js"></script>
    <script type="text/paperscript" src="paper2.js" canvas="myCanvas"></script>
    <script type="text/javascript" src="jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="script.js"></script>

    
    
</head>
    
<body>
    
    
    <canvas id="myCanvas" resize> </canvas>
    

<div id="container">
    <div id="website">
        
        
<!--  GREETING      -->
        
        <div id="hello">
            <h1> Hi, I am <br> Lisa Staudinger.</h1>
        </div>
        
<!--  INTRO TEXT      -->
        
        <div id="about">
            <p>I am an Information / Visual Designer from <!--Austria--> <img  class="svg" src="pics/map_austria.svg" title="Austria" style="vertical-align:baseline">, currently living and studying in <!--Finland--> <img class="svg" src="pics/map_finland.svg" title="Finland" style="vertical-align:top">.</p> <p>This is some of my work.</p>
        </div>
        
        
<!--   PROJECT LIST / LINKS     -->
        
        <div id="projectList">
            <ul>
                
                
                <!-- PROJECT LINK               -->
                <li class="projectLink" id="ebola">
                    <p><b>Ebola in the News ↦ </b>Infographic investigating the development of online coverage on the Ebola Virus Disease (EVD) across international media. </p>
                </li>
                
                    <!-- PROJECT DESCRIPTION: PUT HERE TEXT, IMAGES. DON'T FORGET TO CHANGE THE ID!                   -->
                
                    <li  class="hide" id="project_ebola">
                        <p><b>Ebola in the News ↦ </b></p>
                        <p>Infographic investigating the development of
                        online coverage on the Ebola Virus Disease (EVD) across international media, comparing it to the actual death toll in the affected countries. </p>
                        <p> Designed as part of the Information Design
                        course led by Juuso Koponen, Jonatan Hildén
                        and Tommi Kovala.</p>
                        <p><a href="http://informaatiomuotoilu.fi/2015/02/conflict-student-works-from-our-course-in-aalto-2014/" target="_blank">Description of the course on Informaatiomuotoilu.fi</a></p>
                        
                        <img src='pics/placeholder.jpg'>
                        
                    </li>
                
                <li class="projectLink" id="navigator">
                    <p><b>Aalto Campus Wayfinding ↦ </b> Tri-lingual outdoor wayfinding system for the Aalto University Campus in Otaniemi, Finland. </p>
                </li>
                
                    <li  class="hide" id="project_navigator">
                        <p><b>Aalto Campus Wayfinding ↦ </b></p>
                        <p>Tri-lingual outdoor wayfinding system for the
                        Aalto University Campus in Otaniemi, Finland.<br>
                        Starting from research and analysis of the
                        campus environment and buildings, we
                        created the over-all information structure
                        and content for the university’s outdoor
                        wayfinding system. Ultimately, this led to the
                        production of directional signage, information
                        boards and printed maps.<br>
                        Various matters had to be considered in the
                        design process, ranging from Aalto University’s
                        design and language guideline prerequisites,
                        diverging demands from different stakeholders,
                        heritage conservation requirements, to the
                            harsh finnish climate conditions.</p>
                        
                        <p>Designed in colloboration with Anne Pasanen,
                        with technical construction by Anne Lehtonen
                        from ISS.</p>
                        
                        <img src='pics/placeholder2.jpg'>
                        <img src='pics/placeholder2.jpg'>
                        <img src='pics/placeholder2.jpg'>
                        <img src='pics/placeholder2.jpg'>
                        
                        
                    </li>
                
                <li class="projectLink" id="process">
                    <p><b>From Corn to Chip ↦ </b> Process visualization showing the industrial production of tortilla chips. </p>
                </li>
                    
                    <li  class="hide" id="project_process">
                        <p><b>From Corn to Chip ↦ </b></p>
                        <p>Process visualization depicting the industrial
                        production of tortilla chips. Based on Science
                        Channel’s tv show “How It’s Made”.
                        Designed as part of the Visualizing Process workshop led by Jacek Mrowczyk.</p>
                       
                        <img src='pics/placeholder2.jpg'>
                        
                    </li>
                
                <li class="projectLink" id="icons">
                    <p><b>The Noun Project Pictograms ↦ </b> Assortment of autumn themed pictograms for The Noun Project. </p> 
                </li>
                
                    <li  class="hide" id="project_icons">
                        <p><b>The Noun Project Pictograms ↦ </b></p>
                        <p>Assortment of autumn themed pictograms
                            for The Noun Project.</p>
                        <p><a href="https://thenounproject.com/TheGreenChicken/collection/autumn" target="_blank">The Noun Project Site</a></p>
                        
                        <img src='pics/placeholder2.jpg'>
                        
                    </li>
                
                <li class="projectLink" id="skane">
                    <p><b>Skåne typeface ↦ </b> ... </p>
                </li>
                
                    <li  class="hide" id="project_skane">
                        <p><b>Skåne typeface ↦ </b></p>
                        <p>A modern sans-serif typeface with two different
                        weights suitable for all graphic design jobs,
                        being both legible at small sizes as well as
                        decorative at display sizes. Its straight and
                        open forms make it a no-nonsense text face
                        which radiates a certain kind of cheerfulness
                        upon closer examination.</p>
                        <p>Designed as part of the Type and Typography
                        course led by Giovanni deFaccio.</p>
                        
                        <img src='pics/placeholder2.jpg'>
                        <img src='pics/placeholder.jpg'>
                        <img src='pics/placeholder2.jpg'>
                        
                    </li>
                
                <li class="projectLink" id="magazine">
                    <p><b>Sham On You ↦ </b> Illustrations and editorial design for a magazine about the hidden practices in the food industries.</p>
                </li>
                
                    <li  class="hide" id="project_magazine">
                        <p><b>Sham On You ↦ </b></p>
                        <p>Illustrations and editorial design for magazine
                        spreads about the hidden practices in professional
                            food photography.</p>
                        <p>Designed as part of the Publication Design II
                        course led by Aidan Swanton.</p>
                        
                        <img src='pics/placeholder.jpg'>
                        <img src='pics/placeholder2.jpg'>
                        <img src='pics/placeholder2.jpg'>
                        
                    </li>
                


            </ul>
        
        </div>
        
        

        
        
<!-- CONTACT LINK       -->
        
        <div id="contact">
            <h1> <a href="mailto:lisa.staudinger@aalto.fi"> Let's get in touch. ✍</a></h1>
        </div>
            
    
    
    </div>
</div>

        
        
<!--  PROJECT DESCRIPTION IN DETAIL      -->
    <div class="overlay">
        <div id="openProjects">
            <div id="close"><p>×</p></div>
            <div class='project'></div>
        </div>
    </div>


    
        
</body>

</html>