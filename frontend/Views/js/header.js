window.onscroll = () => {
  const nav = document.querySelector('.navbar-fixed');
	
	if(this.scrollY <= 10){
		nav.classList.remove('scrolled'); 
	}	
	else{
		nav.classList.add('scrolled');
	}
		
};
