const tableBody = document.getElementById('table-body');
const rowLimitSelect = document.getElementById('row-limit');
const tableFooter = document.querySelector('table-footer');
const paragraph = document.getElementById('show-range'); // Assuming you have a paragraph with this ID

const totalRows = tableBody.querySelectorAll('tr').length;

paragraph.textContent = `Showing 1 to ${totalRows} of ${totalRows}`;

function searchRows(searchTerm) {
  const searchTermLower = searchTerm.toLowerCase(); // Make search case-insensitive
  
  // Loop through rows and filter based on search term
  for (let i = 0; i < tableRows.length; i++) {
    const row = tableRows[i];
    const rowText = row.textContent.toLowerCase(); // Make row text case-insensitive
    
    if (rowText.includes(searchTermLower)) {
      row.style.display = ''; // Show row if it matches the search term
    } else {
      row.style.display = 'none'; // Hide row if it doesn't match
    }
  }
}

rowLimitSelect.addEventListener('change', function() {
  const selectedLimit = this.value;
  const tableRows = tableBody.querySelectorAll('tr');
  const totalRows = tableRows.length; // Assuming total rows are available

  // Set initial styles for all rows
  for (let i = 0; i < tableRows.length; i++) {
    tableRows[i].style.display = ''; // Initially show all rows
  }

  if (selectedLimit === 'All') {
    // Show all rows and update text
    paragraph.textContent = `Showing 1 to ${totalRows} of ${totalRows}`;
    return;
  }

  // Extract range from selected value (e.g., '1-10', '11-20')
  const rangeParts = selectedLimit.split('-');
  const startIndex = parseInt(rangeParts[0], 10) - 1; // Adjust for zero-based indexing
  const endIndex = parseInt(rangeParts[1], 10);

  // Show rows within the adjusted range and hide others
  for (let i = 0; i < tableRows.length; i++) {
    if (i >= startIndex && i < endIndex) {
      tableRows[i].style.display = ''; // Show rows within adjusted range
    } else {
      tableRows[i].style.display = 'none'; // Hide other rows
    }
  }

  // Update paragraph text based on selected range and total rows
  paragraph.textContent = `Showing ${startIndex + 1} to ${endIndex} of ${totalRows}`;

  // Ensure the table footer is always visible
  tableFooter.style.display = '';
});