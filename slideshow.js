
var images =["codmap1.jpg","codmap.jpg","codmap1.jpg","gtamap1.jpg"];
var caption=["caption"];

var imageNumber=0;
var imageLenght=images.length-1;

function changeImage(x)
//after end of array restart
{
    imageNumber += x;
    
    if (imageNumber>imageLenght){
        imageNumber=0;
    }
    if (imageNumber<0)
    {
        imageNumber=imageLenght;
    }
    
    document.getElementById("slideshow").src = images[imageNumber];
    document.getElementById("caption").innerHTML=caption[imageNumber];
    
    return false;
}
    
    
    
