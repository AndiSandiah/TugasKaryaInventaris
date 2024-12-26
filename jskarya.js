// Wait for the DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
    // Get the button by its ID
    const showRadioBtn = document.getElementById('showRadioBtn');
  
    // Get the radio button container by its class
    const radioOptions = document.querySelector('.pilihandata');
  
    // Initially hide the radio options
    radioOptions.style.display = 'none';
  
    // Add an event listener to the button to toggle the visibility of the radio options
    showRadioBtn.addEventListener('click', function() {
      // Toggle the display of the radio options
      if (radioOptions.style.display === 'none' || radioOptions.style.display === '') {
        radioOptions.style.display = 'block'; // Show the radio buttons
      } else {
        radioOptions.style.display = 'none';  // Hide the radio buttons if they are already visible
      }
    });
  });
  