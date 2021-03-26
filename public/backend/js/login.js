const forgotPasswordButton = document.getElementById('forgotpassword');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

if(forgotPasswordButton){
forgotPasswordButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
})};
if(signInButton){
signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
})};		