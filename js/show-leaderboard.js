const tableBody = document.getElementById('table-body');
const rowLimitSelect = document.getElementById('row-limit');
const tableFooter = document.querySelector('table-footer');
const paragraph = document.getElementById('show-range');

const totalRows = tableBody.querySelectorAll('tr').length;

paragraph.textContent = `Showing 1 to ${totalRows} of ${totalRows}`;

rowLimitSelect.addEventListener('change', function() {
  const selectedLimit = this.value;
  const tableRows = tableBody.querySelectorAll('tr');
  const totalRows = tableRows.length; 

  for (let i = 0; i < tableRows.length; i++) {
    tableRows[i].style.display = '';
  }

  if (selectedLimit === 'All') {
    paragraph.textContent = `Showing 1 to ${totalRows} of ${totalRows}`;
    return;
  }

  const rangeParts = selectedLimit.split('-');
  const startIndex = parseInt(rangeParts[0], 10) - 1;
  const endIndex = parseInt(rangeParts[1], 10);

  for (let i = 0; i < tableRows.length; i++) {
    if (i >= startIndex && i < endIndex) {
      tableRows[i].style.display = '';
    } else {
      tableRows[i].style.display = 'none';
    }
  }

  paragraph.textContent = `Showing ${startIndex + 1} to ${endIndex} of ${totalRows}`;

  tableFooter.style.display = '';
});