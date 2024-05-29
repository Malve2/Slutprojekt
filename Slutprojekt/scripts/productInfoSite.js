var bigImages = document.getElementsByClassName("bigImage");
var smallImages = document.getElementsByClassName("smallImage");



//classlist contain
smallImages[0].addEventListener("click", toggleImage0);
smallImages[1].addEventListener("click", toggleImage1);
smallImages[2].addEventListener("click", toggleImage2);
smallImages[3].addEventListener("click", toggleImage3);
smallImages[4].addEventListener("click", toggleImage4);

function toggleImage0()
{
    if(bigImages[0].classList.contains("hidden") == true)
        {
            bigImages[0].classList.replace("hidden", "active");
        }
        
    for(var i = 1; i < bigImages.length; i++)
        {
            bigImages[i].classList.replace("active", "hidden");
        }
}
function toggleImage1()
{
    if(bigImages[1].classList.contains("hidden") == true)
        {
            bigImages[1].classList.replace("hidden", "active");
        }
        
    for(var i = 0; i < bigImages.length; i++)
        {
            if(i == 1)
                {
                    continue;
                }
            bigImages[i].classList.replace("active", "hidden");
        }
}
function toggleImage2()
{
    if(bigImages[2].classList.contains("hidden") == true)
        {
            bigImages[2].classList.replace("hidden", "active");
        }
        
    for(var i = 0; i < bigImages.length; i++)
        {
            if(i == 2)
                {
                    continue;
                }
            bigImages[i].classList.replace("active", "hidden");
        }
}
function toggleImage3()
{
    if(bigImages[3].classList.contains("hidden") == true)
        {
            bigImages[3].classList.replace("hidden", "active");
        }
        
    for(var i = 0; i < bigImages.length; i++)
        {
            if(i == 3)
                {
                    continue;
                }
            bigImages[i].classList.replace("active", "hidden");
        }
}
function toggleImage4()
{
    if(bigImages[4].classList.contains("hidden") == true)
        {
            bigImages[4].classList.replace("hidden", "active");
        }
        
    for(var i = 0; i < bigImages.length; i++)
        {
            if(i == 4)
                {
                    continue;
                }
            bigImages[i].classList.replace("active", "hidden");
        }
}
