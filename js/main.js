//USER DEFINED JS
const POP_UP = "popup_id";

$( document ).ready(function() 
{
    imagepopUp();
});

function imagepopUp()
{
    var thumbnails = document.getElementsByClassName("rounded figure-img img-fluid");
    if (thumbnails !== null)
    {
        for (var i = 0; i < thumbnails.length; i++)
        {
            var thumbnail = thumbnails[i];
            thumbnail.addEventListener("click", popUp);
        }
    }
    else
    {
        console.log("No thumbnail images found!");
    }
}

function popUp(e)
{
    var popup = document.getElementById(POP_UP);
    
    if (popup === null)
    {
        popup = document.createElement("span");
        popup.id = POP_UP;
        popup.setAttribute("class", "image_popup");
        
        var thumbnail = e.target;
        var small_image = thumbnail.src;
        var big_image = small_image.replace("_small", "_large");
        
        popup.innerHTML = '<img src=' + big_image + '>';
        thumbnail.insertAdjacentElement("afterend", popup);
    }
    else
    {
        $("#" + POP_UP).remove();
    }
}