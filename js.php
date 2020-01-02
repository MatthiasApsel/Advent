'use strict';

function init () {
  if (localStorage) { 
    // read opened doors
    for (let k = 1; k < 25; k++) {
      if (localStorage.getItem('SELFday'+k)) {
        document.querySelector('li:nth-child('+k+') > a').classList.add('open');
      }
    }
  }

  const calendar = document.querySelector('ol');
  calendar.addEventListener('click', saveTheDoor);
}

function saveTheDoor (event) {
  const elem = event.target,
      link = elem.closest('a'),
      listitem = link.parentElement,
      day = Array.prototype.indexOf.call(calendar.children, listitem) + 1;
  
  if (link.classList.length == 0) {
    link.classList.add('open');
    if (localStorage) {
      localStorage.setItem('SELFday'+day,'open');
    }
  }
}

document.addEventListener('DOMContentLoaded', init);