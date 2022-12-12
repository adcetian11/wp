/*Write HTML,JavaScript page to evaluate expression given by user in the textbox.
e.g. 4+4=8	
Implement four operators+,-,*,/, if user enters operator other than these display error message.    */
function add()
{	 
    var var1 = parseInt(document.getElementById('screen1').value)
    var var2 = parseInt(document.getElementById('screen2').value)
    var result = var1+ var2;	
    document.getElementById('screen3').value = result	
}
function sub()
{		 
    var var1 = parseInt(document.getElementById('screen1').value)
    var var2 = parseInt(document.getElementById('screen2').value)
    var result = var1- var2;
    document.getElementById('screen3').value = result	
}
function mul()
{	 
    var var1 = parseInt(document.getElementById('screen1').value)
    var var2 = parseInt(document.getElementById('screen2').value)
    var result = var1*var2;
    document.getElementById('screen3').value = result	
}
function div()
{		 
    var var1 = parseInt(document.getElementById('screen1').value)
    var var2 = parseInt(document.getElementById('screen2').value)
    var result = var1/ var2;
    document.getElementById('screen3').value = result	
}
function erro()
{		 
    document.getElementById('screen3').value = "error"	
}