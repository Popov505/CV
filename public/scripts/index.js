/* Portfolio : Carrousel - START */

window.addEventListener("load", function() {

  let previousButton = document.getElementById('previous_button');
  let nextButton = document.getElementById('next_button');

  let slides = document.querySelectorAll('.slide');


  let elementNumber = slides.length;
  let activeKey = 0;
  let nextKey = 0;

  displayCarousel(activeKey, elementNumber, slides);

  previousButton.addEventListener('click', ()=> {
    nextKey =  (activeKey - 1);
    if (nextKey >= 0) 
    {
      activeKey = (activeKey - 1);
    } else
    {
      activeKey = (elementNumber - 1);
    }
    displayCarousel(activeKey, elementNumber, slides);
  });

  nextButton.addEventListener('click', ()=> {
    nextKey =  (activeKey + 1);
    if (nextKey < (elementNumber)) 
    {
      activeKey = (activeKey + 1);
    } else
    {
      activeKey = 0;
    }
    displayCarousel(activeKey, elementNumber, slides);
  });


  function displayCarousel(activeKey, elementNumber, slides) {
    for (let i = 0; i < elementNumber; i++) {
      if (i == activeKey) {
        slides[i].classList.add('active');
      }
      else
      {
        slides[i].classList.remove('active');
      }
    };
  }

});

/* Portfolio : Carrousel - END */