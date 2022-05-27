 //Clone the hidden element and shows it
 $('.addLanguageRow').click(function(){
    $('.dynamic-element').first().clone().appendTo('.dynamic-language-rows').show();
    attach_delete();
    
    //Adjust form height according to its content
    //This function is imported from the script.js file
    setFormHeight();
});


//Attach functionality to delete buttons
function attach_delete(){
    $('.delete').off();
    $('.delete').click(function(){
        console.log("click");
        $(this).closest('.form-group').remove();
    });

    
}