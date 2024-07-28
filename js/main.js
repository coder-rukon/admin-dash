(function ($) {

    $('.sidebar_menu a').on('click', function (e) {
        if ($(this).next().is('ul')) {
            e.preventDefault();
            $('.sidebar_menu li').each(element => {
                let items = $('.sidebar_menu li');
                if (!$(this).parent().is(items[element])) {
                    $(items[element]).removeClass('active');
                }
            });
            $(this).parent().toggleClass('active');

        }
    })
    var options = {
        series: [{
            name: 'New User',
            data: [31, 40, 28, 51, 42, 109, 100]
        }, {
            name: 'Old User',
            data: [11, 32, 45, 32, 34, 52, 41]
        }],
        chart: {
            toolbar: {
                show: false,
            },
            height: 350,
            type: 'area'
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth'
        },
        title: {
            text: 'Earnings Graph',
            align: 'left'
        },
        xaxis: {
            categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        },
        tooltip: {

        },
    };
    if (document.getElementById('chart1')) {
        var chart = new ApexCharts(document.querySelector("#chart1"), options);
        chart.render();
    }




    var options = {
        series: [{
            name: 'New User',
            data: [44, 55, 41, 67, 22, 43, 21]
        }, {
            name: 'Old User',
            data: [13, 23, 20, 8, 13, 27, 33]
        }],
        chart: {
            type: 'bar',
            height: 350,
            stacked: true,
            stackType: '100%',
            toolbar: {
                show: false,
            },
        },
        responsive: [{
            breakpoint: 480,
            options: {
                legend: {
                    position: 'bottom',
                    offsetX: -10,
                    offsetY: 0
                }
            }
        }],
        title: {
            text: 'Earnings Graph',
            align: 'left'
        },
        xaxis: {
            categories: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
        },
        fill: {
            opacity: 1
        },
        legend: {
            position: 'right',
            offsetX: 0,
            offsetY: 50
        },
    };
    if (document.getElementById('chart2')) {
        var chart = new ApexCharts(document.querySelector("#chart2"), options);
        chart.render();
    }






    var options = {
        series: [44, 55, 41, 17, 15],
        chart: {
            type: 'donut',
            toolbar: {
                show: false,
            },
        },
        title: {
            text: 'Earnings Graph',
            align: 'left'
        },
        responsive: [{
            breakpoint: 480,
            options: {
                chart: {
                    width: 200
                },
                legend: {
                    position: 'bottom'
                }
            }
        }]
    };
    if (document.getElementById('chart3')) {
        var chart = new ApexCharts(document.querySelector("#chart3"), options);
        chart.render();
    }









    var options = {
        series: [{
            data: [34, 44, 54, 21, 12, 43, 33, 23, 66, 66, 58]
        }],
        chart: {
            type: 'line',
            height: 480,
            toolbar: {
                show: false,
            },
        },
        stroke: {
            curve: 'stepline',
        },
        dataLabels: {
            enabled: false
        },
        title: {
            text: 'Stepline Chart',
            align: 'left'
        },
        markers: {
            hover: {
                sizeOffset: 4
            }
        }
    };
    if (document.getElementById('chart4')) {
        var chart = new ApexCharts(document.querySelector("#chart4"), options);
        chart.render();
    }




    $('.notification_drop_controller').on('click', function (event) {
        $('.notification_dropdown_section').hide()
        $(this).next().show()
    })













    // ############################## Data Table ##############################
    let gridOptions = {
        rowData: [
            { serialNumber: 1, name: "Airi Satou", position: "Accountant", office: "Tokyo", age: 33, startDate: "11/20/2023", salary: 105000 },
            { serialNumber: 2, name: "Angelica Ramos", position: "CEO", office: "London", age: 41, startDate: "12/8/2023", salary: 95000 },
            { serialNumber: 3, name: "Ashton Cox", position: "Technical Author", office: "San Francisco", age: 28, startDate: "12/16/2023", salary: 85000 },
            { serialNumber: 4, name: "Jonner Flew", position: "Software Engineer", office: "London", age: 31, startDate: "12/28/2023", salary: 75000 },
            { serialNumber: 5, name: "Berry Helan", position: "Sales Assistant", office: "New York", age: 28, startDate: "1/19/2023", salary: 95000 },
            { serialNumber: 6, name: "Warren Bufet", position: "HRM", office: "London", age: 30, startDate: "1/25/2016", salary: 100000 },
            { serialNumber: 7, name: "Airi Satou", position: "Accountant", office: "Tokyo", age: 33, startDate: "11/20/2023", salary: 105000 },
            { serialNumber: 8, name: "Angelica Ramos", position: "CEO", office: "London", age: 41, startDate: "12/8/2023", salary: 95000 },
            { serialNumber: 9, name: "Ashton Cox", position: "Technical Author", office: "San Francisco", age: 28, startDate: "12/16/2023", salary: 85000 },
            { serialNumber: 10, name: "Jonner Flew", position: "Software Engineer", office: "London", age: 31, startDate: "12/28/2023", salary: 75000 },
        ],
        defaultColDef: {
            flex: 1
        },
        pagination: true,
        paginationPageSize: 6,
        paginationPageSizeSelector: false,
        columnDefs: [
            {
                field: "serialNumber",
                headerName: "#",
                flex: 0.2
            },
            {
                field: "name"
            },
            {
                field: "position"
            },
            {
                field: "office"
            },
            {
                field: "age"
            },
            {
                field: "startDate"
            },
            {
                field: "salary",
                valueFormatter: p => '$' + p.value.toLocaleString(),
            },
        ]
    };
    let eDiv = document.getElementById('data_table');
    let gridApi = agGrid.createGrid(eDiv, gridOptions);


    // ############################## Divided Table ##############################
    gridOptions = {
        rowData: [
            { serialNumber: 1, employeeName: "Brat Lee", username: "br.lee", position: "CEO", emailAddress: "r.branson@hotmail.com", salary: 56000 },
            { serialNumber: 2, employeeName: "John Waz", username: "johnwaz", position: "Developer", emailAddress: "d.walton@hotmail.com", salary: 26000 },
            { serialNumber: 3, employeeName: "Jeneffer Leo", username: "jeneffer.l", position: "Designer", emailAddress: "james.falid@gmail.com", salary: 28000 },
            { serialNumber: 4, employeeName: "Richard Branson", username: "r.branson", position: "Marketer", emailAddress: "br.lee@hotmail.com", salary: 18000 },
            { serialNumber: 5, employeeName: "Devid Walton", username: "d.walton", position: "HRM", emailAddress: "johnwaz@yahoo.com", salary: 22000 },
            { serialNumber: 6, employeeName: "James Falid", username: "james.falid", position: "Team Manager", emailAddress: "jeneffer.l@gmail.com", salary: 23000 },
            { serialNumber: 7, employeeName: "Brat Lee", username: "br.lee", position: "CEO", emailAddress: "r.branson@hotmail.com", salary: 56000 },
            { serialNumber: 8, employeeName: "John Waz", username: "johnwaz", position: "Developer", emailAddress: "d.walton@hotmail.com", salary: 26000 },
            { serialNumber: 9, employeeName: "Jeneffer Leo", username: "jeneffer.l", position: "Designer", emailAddress: "james.falid@gmail.com", salary: 28000 },
            { serialNumber: 10, employeeName: "Richard Branson", username: "r.branson", position: "Marketer", emailAddress: "br.lee@hotmail.com", salary: 18000 },
        ],
        defaultColDef: {
            flex: 1,
            filter: true
        },
        pagination: true,
        paginationPageSize: 6,
        paginationPageSizeSelector: [6, 12, 18],
        columnDefs: [
            {
                field: "serialNumber",
                headerName: "#",
                flex: 0.2,
                filter: false
            },
            {
                field: "employeeName"
            },
            {
                field: "username"
            },
            {
                field: "position"
            },
            {
                field: "emailAddress",
                cellRenderer: (arg) => {
                    return '<a class="custom_link" href="mailto:' + arg.data.emailAddress + '" target="_blank">' + arg.data.emailAddress + '</a>';
                }
            },
            {
                field: "salary",
                valueFormatter: p => '$' + p.value.toLocaleString(),
            },
        ]
    };
    eDiv = document.getElementById('divided_table');
    gridApi = agGrid.createGrid(eDiv, gridOptions);



    // ############################## Editable Table ##############################
    gridOptions = {
        rowData: [
            { serialNumber: 1, name: "Airi Satou", position: "Accountant", office: "Tokyo", salary: 105000 },
            { serialNumber: 2, name: "Angelica Ramos", position: "CEO", office: "London", salary: 95000 },
            { serialNumber: 3, name: "Ashton Cox", position: "Technical Author", office: "San Francisco", salary: 85000 },
            { serialNumber: 4, name: "Jonner Flew", position: "Software Engineer", office: "London", salary: 75000 },
            { serialNumber: 5, name: "Berry Helan", position: "Sales Assistant", office: "New York", salary: 95000 },
            { serialNumber: 6, name: "Warren Bufet", position: "HRM", office: "London", salary: 100000 },
            { serialNumber: 7, name: "Airi Satou", position: "Accountant", office: "Tokyo", salary: 105000 },
            { serialNumber: 8, name: "Angelica Ramos", position: "CEO", office: "London", salary: 95000 },
            { serialNumber: 9, name: "Ashton Cox", position: "Technical Author", office: "San Francisco", salary: 85000 },
            { serialNumber: 10, name: "Jonner Flew", position: "Software Engineer", office: "London", salary: 75000 },
        ],
        defaultColDef: {
            flex: 1,
            filter: true,
            editable: true
        },
        pagination: true,
        paginationPageSize: 6,
        paginationPageSizeSelector: [6, 12, 18],
        columnDefs: [
            {
                field: "serialNumber",
                headerName: "#",
                flex: 0.2,
                filter: false,
                editable: false
            },
            {
                field: "name"
            },
            {
                field: "position"
            },
            {
                field: "office"
            },
            {
                field: "salary",
                valueFormatter: p => '$' + p.value.toLocaleString(),
            },
        ]
    };
    eDiv = document.getElementById('editable_table');
    gridApi = agGrid.createGrid(eDiv, gridOptions);










    const editor = Jodit.make('#editor', {
        theme: 'dark'
    });


}(jQuery))