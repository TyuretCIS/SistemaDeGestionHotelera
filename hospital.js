// This function is called when the page loads
window.onload = function() {
    // Get the number of records
    var records = document.getElementById("records");
  
    // Set the pagination buttons
    for (var i = 1; i <= records.rows.length; i++) {
      var button = document.createElement("a");
      button.href = "?page=" + i;
      button.textContent = i;
      records.appendChild(button);
    }
    
  };