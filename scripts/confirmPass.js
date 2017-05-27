//W3School tutorial
funciton.confirmPass(){
	var pass1=document.form["register"]["password"].value;
	var pass2=document.form["register"]["password2"].value;
	if(pass1!=pass2){
		return false
	}
}