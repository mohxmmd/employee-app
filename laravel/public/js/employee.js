document.addEventListener('DOMContentLoaded', function() {
    const filterButton = document.getElementById('filterButton');
    const dropdownMenu = document.getElementById('dropdownMenu');
    const employeeTableBody = document.getElementById('employeeTableBody');
    const employeeCount = document.getElementById('employeeCount');
    const allRows = Array.from(employeeTableBody.getElementsByTagName('tr'));

    filterButton.addEventListener('click', function() {
        dropdownMenu.classList.toggle('show');
    });

    document.addEventListener('click', function(event) {
        if (!filterButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.remove('show');
        }
    });

    document.querySelectorAll('.dropdown-item').forEach(item => {
        item.addEventListener('click', function() {
            const filter = this.getAttribute('data-filter');
            applyFilter(filter);
            dropdownMenu.classList.remove('show');
        });
    });

    function applyFilter(filter) {
        let visibleRows = [];

        if (filter === 'all') {
            visibleRows = allRows;
        } else if (filter === '5+ Years Active') {
            visibleRows = allRows.filter(row => {
                const isActive = row.getAttribute('data-active') === 'true';
                const years = parseInt(row.getAttribute('data-years'));
                return isActive && years > 5;
            });
        }

        allRows.forEach(row => row.style.display = 'none');

        visibleRows.forEach(row => row.style.display = '');

        employeeCount.textContent = `Total Employees: ${visibleRows.length}`;
    }
});
