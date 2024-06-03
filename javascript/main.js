'use strict';

// DOM variables of resetBtn and form
const resetBtn = document.querySelector('#resetBtn');
const form = document.querySelector('#form');

// Add a click event listener for the button to reset the form
resetBtn.addEventListener('click', (event) => {
  event.preventDefault();
  event.stopPropagation();
  form.reset();
});
