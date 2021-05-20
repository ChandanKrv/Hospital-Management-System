var options = {
    series: [{
        name: 'Male',
        data: [3, 2, 5, 4, 5, 5, 5, 6, 5, 6, 6, 6]
    }, {
        name: 'Female',
        data: [2, 4, 5, 7, 8, 10, 9, 8, 10, 9, 11, 9]
    }, {
        name: 'Children',
        data: [4, 2, 2, 3, 4, 3, 2, 4, 4, 5, 5, 4]
    }],
    chart: {
        type: 'bar',
        height: 350,
        toolbar: {
            show: false,
        },
    },
    grid: {
        borderColor: '#e9ecef',
    },
    plotOptions: {
        bar: {
            horizontal: false,
            columnWidth: '40%',
            endingShape: 'rounded'
        },
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        show: true,
        width: 2,
        colors: ['transparent']
    },
    colors: ['#396cf0', '#53c797', '#f1b561'],
    xaxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    },
    yaxis: {
        title: {
            text: 'Patients',

            style: {
                colors: ['#8492a6'],
                fontSize: '13px',
                fontFamily: 'Inter, sans-serif',
                fontWeight: 500,
            },
        },
    },
    fill: {
        opacity: 1,
    },
    tooltip: {
        y: {
            formatter: function (val) {
                return val + " Patients"
            }
        }
    }
};

var chart = new ApexCharts(document.querySelector("#dashboard"), options);
chart.render();


//department
var options = {
    series: [55, 65, 75, 85],
    chart: {
        height: 370,
        type: 'radialBar',
    },    
    colors: ['#396cf0', '#53c797', '#f1b561', '#f0735a'],
    plotOptions: {
        radialBar: {
            hollow: {
                // size: '70%',
            },
            dataLabels: {
                name: {
                    fontSize: '22px',
                },
                value: {
                    fontSize: '16px',
                    formatter: function (val) {
                        return val + ' ' + 'Patients'
                    }
                },
                total: {
                    show: true,
                    label: 'Total',
                    formatter: function (w) {
                        return 8 + ' ' + 'Patients'
                    }
                }
            }
        }
    },
    stroke: {
        lineCap: 'round',
    },
    labels: ['Cardilogram', 'Gynecology', 'Dental Care', 'Neurology'],
};

var chart = new ApexCharts(document.querySelector("#department"), options);
chart.render();
