const items = document.querySelectorAll(".accordion button");

function toggleAccordion() {
  const itemToggle = this.getAttribute('aria-expanded');
  
  for (i = 0; i < items.length; i++) {
    items[i].setAttribute('aria-expanded', 'false');
  }
  
  if (itemToggle == 'false') {
    this.setAttribute('aria-expanded', 'true');
  }
}

items.forEach(item => item.addEventListener('click', toggleAccordion));


// navbar

const toggleButton = document.getElementsByClassName('navbar_toggle')[0];
const navbarLinks = document.getElementsByClassName('navbar_links');
toggleButton.addEventListener('click', function(){
    for(var i=0; i<navbarLinks.length; i++)
    navbarLinks[i].classList.toggle('active');
})