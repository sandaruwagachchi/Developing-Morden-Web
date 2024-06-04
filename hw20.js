function doValidate()
{
    if(document.myForm.username.value=="")
        {
            alert("Please provide your username!")
            return false;
        }
    if(document.myForm.useremail.value=="")
        {
            alert("Please Provide your useremail!")
            return false;
         }
         return true;
}