// Check that input field is not empty.
function required()
{
    var empt = document.forms["form2"]["cat_name"].value;
    if (empt == "")
    {
        alert("Please input a Value");
        return false;
    }
    else 
    {
        alert('Code has accepted : you can try another');
        return true; 
    }
}