<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<canvas id="stats"></canvas>

<script>
new Chart(document.getElementById('stats'), {
    type: 'bar',
    data: {
        labels: ['Active', 'Blocked', 'Online'],
        datasets: [{
            label: 'Users',
            data: [<?= $active ?>, <?= $blocked ?>, <?= $online ?>]
        }]
    }
});
</script>
