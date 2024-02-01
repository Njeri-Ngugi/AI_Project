
function showLakes(lakeType) {
    if (lakeType === 'mild-lake-row') {
        const mild_lakes = document.getElementById('mild-lake-row')
        mild_lakes.style.display = 'block'
        const mod_lakes = document.getElementById('moderate-lake-row')
        mod_lakes.style.display = 'none'
        const sev_lakes = document.getElementById('severe-lake-row')
        sev_lakes.style.display = 'none'
        console.log("mild");
    }
    else if (lakeType == 'moderate-lake-row') {
        const mild_lakes = document.getElementById('mild-lake-row')
        mild_lakes.style.display = 'none'
        const mod_lakes = document.getElementById('moderate-lake-row')
        mod_lakes.style.display = 'block'
        const sev_lakes = document.getElementById('severe-lake-row')
        sev_lakes.style.display = 'none'
        console.log("moderate");
    }
    else if (lakeType == 'severe-lake-row') {
        const mild_lakes = document.getElementById('mild-lake-row')
        mild_lakes.style.display = 'none'
        const mod_lakes = document.getElementById('moderate-lake-row')
        mod_lakes.style.display = 'none'
        const sev_lakes = document.getElementById('severe-lake-row')
        sev_lakes.style.display = 'block'
        console.log("severe");
    }
    else if (lakeType == '') {
        const mild_lakes = document.getElementById('mild-lake-row')
        mild_lakes.style.display = 'none'
        const mod_lakes = document.getElementById('moderate-lake-row')
        mod_lakes.style.display = 'none'
        const sev_lakes = document.getElementById('severe-lake-row')
        sev_lakes.style.display = 'none' 
        console.log("None")
    }
    else {
        console.log("No button clicked")
    }
    // const allRows = document.querySelectorAll('.mild-lake-row, .moderate-lake-row, .severe-lake-row');
    // allRows.forEach(row => row.style.style.display = 'none');

    // const selectedRows = document.querySelectorAll(`.${lakeType}-lake-row`);
    // selectedRows.forEach(row => row.style.style.display = 'table-row');
}


function searchLakes() {
    const searchTerm = document.getElementById('lakeSearch').value.toLowerCase();

    // Filter lakes based on the search term
    const filteredLakes = lakesData.filter(lake => lake.Label_2015.toLowerCase().includes(searchTerm));

    // Display the filtered lakes
    displayLakes(filteredLakes);
}

function sortLakes() {
    const sortValue = document.getElementById('sortSelect').value;

    // Sort lakes based on the rate of decline
    const sortedLakes = lakesData.slice().sort((a, b) => {
        return sortValue === 'asc' ? a.Percentage_Decrease - b.Percentage_Decrease : b.Percentage_Decrease - a.Percentage_Decrease;
    });

    // Display the sorted lakes
    displayLakes(sortedLakes);
}

// ... (Rest of your JavaScript code) ...
