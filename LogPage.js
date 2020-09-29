var credits={

	"maanas_chowdary":"123",
};

function show() {
	
	document.getElementById("sub_window").style.display = "block";
}

function hide() {
	
	document.getElementById("sub_window").style.display = "none";
}


function test() {
	
	var user=document.myform.username.value;
	var pass=document.myform.password.value;
	var ka=document.myform.credits.value;
	var sub=document.course.subject.value;

	if(ka=="")
	{
		alert("Please select the login type!");
		return null;
	}
	else if(ka!="")
	{

		var temp=credits[user];

		if(pass===temp)
		{
			
			var op=document.myform.credits.value;
			var mor=Number(op);

			var dum=document.course.subject.value;
			var sur=Number(dum);

			if(mor==1)
			{
				window.location.assign("DSassign.php");
			}
			else if(mor==2)
			{
				if(dum=="")
				{
					alert("Please choose a subject!");
					return null;
				}
				else if(sur==1)
				{
					window.location.assign("DSupload.php");
				}
				else if(sur==2)
				{
					window.location.assign("WTupload.php");
				}
				else if(sur==3)
				{
					window.location.assign("OOADupload.php");
				}
				else if(sur==4)
				{
					window.location.assign("PPLupload.php");
				}
				else if(sur==5)
				{
					window.location.assign("ISupload.php");
				}
				else if(sur==6)
				{
					window.location.assign("CDupload.php");
				}
									
			}
		}
		else
		{
			alert("Incorrect Username/Password!! ");
			document.myform.password.value="";
		}

	}

	
}

