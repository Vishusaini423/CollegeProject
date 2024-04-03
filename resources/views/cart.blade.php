@extends('layouts.app')
@section('content')
<style>
/* CSS styles for table, tr, and td */
table {
    width: 100%;
    border-collapse: collapse;
}

tr {
    background-color: #f2f2f2;
}

tr:nth-child(even) {
    background-color: #ddd;
}

td {
    padding: 8px;
    border: 1px solid #ccc;
}
</style>

<body>
    <table style="margin-top:150px">
        <tbody id="tbody">
            <!-- This is where the rows will be appended -->
        </tbody>
    </table>

    <script>
    const items = JSON.parse(localStorage.getItem('items')) || [];
    console.log(items);
    document.addEventListener("DOMContentLoaded", function() {
        // JavaScript code to append rows to tbody
        const tbody = document.getElementById('tbody');
        for (let i = 0; i < items.length; i++) { // Corrected 'length' spelling
            const row = document.createElement('tr');
            const cell = document.createElement('td');
            cell.textContent = items[i];
            row.appendChild(cell);
            tbody.appendChild(row);
        }
    });
    </script>
    @endsection