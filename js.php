function saveOrder () {
  if (localStorage && !localStorage.getItem('SELFOrder')) {
    localStorage.setItem('SELFOrder','<?=$orderstring?>');
  }
}
function resetOrder () {
  if (localStorage && localStorage.getItem('SELFOrder')) {
    let SELForder = localStorage.getItem('SELFOrder').split(',');
    for (let k = 1; k < 25; k++) {
      document.querySelector('li:nth-child('+k+')').style.cssText = 'order: ' + SELForder[k-1];
    }
  }
}
function setOpenDays () {
  if (localStorage) {
    for (let k = 1; k < 25; k++) {
      if (localStorage.getItem('SELFday'+k)) {
        document.querySelector('li:nth-child('+k+') > a').classList.add('open');
      }
    }
  }
}
function saveTheDoor (event) {
  let elem = event.target,
      link = elem.closest('a'),
      listitem = link.parentElement,
      list = listitem.parentElement,
      day = Array.prototype.indexOf.call(list.children, listitem) + 1;
  
  if (link.classList.length == 0) {
    link.classList.add('open');
    if (localStorage) {
      localStorage.setItem('SELFday'+day,'open');
    }
  }
}

document.addEventListener('DOMContentLoaded', saveOrder);
document.addEventListener('DOMContentLoaded', resetOrder);
document.addEventListener('DOMContentLoaded', setOpenDays);
document.addEventListener('DOMContentLoaded', function () {
  let calendar = document.querySelector('ol');
  calendar.addEventListener('click', saveTheDoor);
});