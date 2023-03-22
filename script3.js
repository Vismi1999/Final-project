function validate()
{
    var checkin=document.getElementById('checkin').ariaValueMax.trim();
var checkout=document.getElementById('checkout').ariaValueMax.trim();
var today = new Date(checkin);
        var thisMonth = new Date(today.getFullYear(), today.getMonth() + 1, 0);
        var inputDate = new Date(checkout);


if(date=="")
        {
            document.getElementById('date_error').style.display="block";
            document.getElementById('date_error').innerHTML="**please select a date**";
            return false;
        }
        else
        {
            if (inputDate < today) 
            {
                document.getElementById('date_error').style.display="block";
                document.getElementById('date_error').innerHTML="**Selected date should not be less than checkin**";
                return false;
            } 
            
            else 
            {
                document.getElementById('date_error').style.display="none";
                return true;
            }
        }
    }