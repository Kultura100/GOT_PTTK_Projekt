const labels = [];
const dataas = [];
$('input[name=imieinazwisko]').each(function() {
    labels.push($(this).val());
});
$('input[name=wynik]').each(function() {
    dataas.push($(this).val());
});
const data = {
    labels: labels,
    datasets: [{
        data: dataas,
        backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(255, 205, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(201, 203, 207, 0.2)'
        ],
        borderColor: [
            'rgb(255, 99, 132)',
            'rgb(255, 159, 64)',
            'rgb(255, 205, 86)',
            'rgb(75, 192, 192)',
            'rgb(54, 162, 235)',
            'rgb(153, 102, 255)',
            'rgb(201, 203, 207)'
        ],
        borderWidth: 1
    }]
};

const config = {
    type: 'bar',
    data: data,
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        },
        plugins: {
            legend: {
                display: false
            }
        },
    },
};

const myChart = new Chart(
    document.getElementById('myChart'),
    config
);

$("#dropdownMenuButton").click(function() {
    if ($(".dropdown.rozwijanemenu").hasClass("show")) {
        $(".dropdown.rozwijanemenu").removeClass("show");
        $(".dropdown-menu.rozwijanemenu").removeClass("show");
    } else {
        $(".dropdown.rozwijanemenu").addClass("show");
        $(".dropdown-menu.rozwijanemenu").addClass("show");
    }
    // $("#drukowanko").click(function() {
    //     $(".wykresowa").print();
    // });
});
$('#drukowanko').click(function() {
    printJS({ printable: ($('#myChart')[0]).toDataURL(), type: 'image', imageStyle: 'width:100%' });
    $(".dropdown-menu.rozwijanemenu").removeClass("show");
});