
$(document).ready(function(){    
    
    
    
/////FUNCTION THAT REMOVES CONTENT OF OPENPROJECT DIV AND MOVES IT 
    
    var closeProject = function(){
        
        $('.overlay').animate({
                left: '110%'}, 
                'slow', 
                function(){
                     $('.project').empty();
                }
        );
        
        
        
        $('li').removeClass('selected');
        $('#container').removeClass('background')
                    .animate({opacity: '1'}, 'slow');;
        
       
   
    };
    

////// PROJECT MENU FUNCTIONALITY 
    
    $('li').click(function(){
        
        //IF PROJECT IS ALREADY SELECTED, CLOSE IT ON CLICK
        if ($(this).hasClass('selected')) {
            
            closeProject();

        
        //ELSE OPEN NEW PROJECT (AND SELECT THAT)
        } else {
            
            $('li').removeClass('selected');
            
            $(this).addClass('selected');
//            $(this '.checkbox').replaceWith('☒  ');
            
            $('#container').addClass('background')
                        .animate({
                            opacity: '0.2'}, 'slow'
                        );
                  

            
            //GET CONTENT FOR CLICKED ITEM
            var projectID = $(this).attr('id');
            var $project = $('#project_' + projectID);
            var $projectText = $project.html();
            
            
            //PUT CONTENT IN OPENPROJECT DIV
            $('.project').replaceWith("<div class='project'>" + $projectText + "</div>");
            
            
            $('.overlay').animate({
                left: '0px'}, 'slow'
            );
        };
        
    });
    

    

////////    CLOSING BUTTON FOR INDIVIDUAL PROJECTS
    
    $('#close').click(function(){
        
        closeProject();
    
    });
    
 
/// CLOSE PROJECT BY CLICKING OUTSIDE PROJECT 
    
    
    $('.overlay').click(function(event) {
     
        if (!$(event.target).closest('#openProjects').length) {

        closeProject();

      }
    });
    
    
});



