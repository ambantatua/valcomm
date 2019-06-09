/*
	* File Name    : scripts.js
	* Author       : Amber Bantatua
	* Date Created : 07 April 2017
	* Version      : 1.0
	* Last Modified: 
	* Description  : External javascript actions 
*/
	
	/*contact */

	//<![CDATA[
		function checkDataContact(theForm) {
		
			var errMsg="";
			if(theForm.firstName.value=="") {
				errMsg=errMsg + "First name cannot be blank. \n";
				}
				
			if(theForm.email.value=="") {
				errMsg=errMsg + "Please enter your email address. \n"
			}
			
			else {
			
			if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(theForm.emailAddress.value))) {
					errMsg=errMsg + "Invalid email address. \n"
				}
			}
			
			if(theForm.enquiry.value=="") {
				errMsg=errMsg + "Please enter your enquiry. \n";
				}
				
	if(errMsg !="") {
				alert(errMsg);
				return false;
				}
				else {
					return true;
				}
		} // end of function
	//]]>
	
//-----------------------------------------------------------------
