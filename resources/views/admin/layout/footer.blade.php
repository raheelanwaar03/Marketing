<div class="body-bg">
    <svg class="img-fluid top-0" viewBox="0 0 1920 1080" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_121_2)">
            <g opacity="0.14" filter="url(#filter0_f_121_2)">
                <circle cx="1840.5" cy="600.5" r="225.5" fill="var(--accent-color)" />
            </g>
            <g opacity="0.1" filter="url(#filter1_f_121_2)">
                <circle cx="222.5" cy="118.5" r="327.5" fill="var(--primary-color)" />
            </g>
        </g>
        <defs>
            <filter id="filter0_f_121_2" x="1265" y="25" width="1151" height="1151"
                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                <feGaussianBlur stdDeviation="175" result="effect1_foregroundBlur_121_2" />
            </filter>
            <filter id="filter1_f_121_2" x="-455" y="-559" width="1355" height="1355"
                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                <feGaussianBlur stdDeviation="175" result="effect1_foregroundBlur_121_2" />
            </filter>
            <clipPath id="clip0_121_2">
                <rect width="1920" height="1080" fill="white" />
            </clipPath>
        </defs>
    </svg>
    <svg width="260" height="350" viewBox="0 0 260 350" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path opacity="0.3" fill="var(--theme-color5)"
            d="M129.099 290.457H162.14H162.171L145.635 311.735L129.099 290.457Z" />
        <path opacity="0.5" fill="var(--theme-color6)"
            d="M288.197 279.48L260.585 314.994L233.004 279.48H288.197Z" />
        <path opacity="0.7" fill="var(--theme-color6)"
            d="M233.004 350.478H177.812L205.393 314.994L233.004 350.478Z" />
        <path opacity="0.4" fill="var(--theme-color5)"
            d="M233.004 350.478L260.585 314.994L288.197 350.478H233.004Z" />
        <path opacity="1" fill="var(--accent-color)"
            d="M260.585 172.998L233.004 137.484H288.197L260.585 172.998Z" />
        <path opacity=".8" fill="var(--primary-color)"
            d="M197.68 305.062L205.393 314.994H150.201L177.781 279.48L197.68 305.062Z" />
        <path opacity="1" fill="var(--theme-color5)"
            d="M225.479 269.583L233.192 279.514H178L205.581 244L225.479 269.583Z" />
        <path opacity="1" fill="var(--accent-color)"
            d="M233.004 279.48L205.393 243.996H260.585L233.004 279.48Z" />
        <path opacity="1" fill="var(--primary-color)"
            d="M232.611 350.484L205 315H260.192L232.611 350.484Z" />
        <path opacity="0.5" fill="var(--theme-color5)"
            d="M202.524 203.07L212.087 190.74L221.682 203.07H202.524Z" />
        <path opacity="1" fill="var(--primary-color)"
            d="M218.412 129.551L233.467 110.179L248.522 129.551H218.412Z" />
        <path opacity="0.3" fill="var(--theme-color6)"
            d="M233.004 208.482H288.197L260.585 243.996L233.004 208.482Z" />
        <path opacity="1" fill="var(--primary-color)"
            d="M260.616 172.998L288.197 208.482H233.004L260.616 172.998Z" />
        <path opacity="0.6" fill="var(--accent-color)"
            d="M185.494 289.411L177.781 279.48H232.974L205.393 314.994L185.494 289.411Z" />
        <path opacity="1" fill="var(--accent-color)"
            d="M224.489 204.577L241.056 225.885H207.923L224.489 204.577Z" />
    </svg>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
<script src="{{ asset('assets/assets/js/theme.js') }}"></script>
<script src="{{ asset('assets/assets/bundles/apexcharts.bundle.js') }}"></script>
<script src="{{ asset('assets/assets/bundles/bootstrapdatepicker.bundle.js') }}"></script>
<script src="{{ asset('assets/assets/vendor/peity/jquery.peity.min.js') }}"></script>

@yield('editor')

<script>
    var options1 = {
        chart: {
            type: 'bar',
            width: 100,
            height: 40,
            sparkline: {
                enabled: true
            }
        },
        stroke: {
            width: 2
        },
        plotOptions: {
            bar: {
                columnWidth: '80%'
            }
        },
        colors: ['var(--theme-color2)'],
        series: [{
            data: [47, 45, 74, 14, 56, 74, 14, 11, 7, 39, 82]
        }],
        labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
        xaxis: {
            crosshairs: {
                width: 1
            },
        },
        tooltip: {
            fixed: {
                enabled: false
            },
            x: {
                show: false
            },
            y: {
                title: {
                    formatter: function(seriesName) {
                        return ''
                    }
                }
            },
            marker: {
                show: false
            }
        }
    }
    new ApexCharts(document.querySelector("#apexspark_bar_1"), options1).render();
    var options2 = {
        chart: {
            type: 'bar',
            width: 100,
            height: 40,
            sparkline: {
                enabled: true
            }
        },
        stroke: {
            width: 2
        },
        plotOptions: {
            bar: {
                columnWidth: '80%'
            }
        },
        colors: ['var(--theme-color1)'],
        series: [{
            data: [47, 45, 74, 14, 56, 74, 14, 11, 7, 39, 82]
        }],
        labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
        xaxis: {
            crosshairs: {
                width: 1
            },
        },
        tooltip: {
            fixed: {
                enabled: false
            },
            x: {
                show: false
            },
            y: {
                title: {
                    formatter: function(seriesName) {
                        return ''
                    }
                }
            },
            marker: {
                show: false
            }
        }
    }
    new ApexCharts(document.querySelector("#apexspark_bar_2"), options2).render();
    var options3 = {
        chart: {
            type: 'bar',
            width: 100,
            height: 40,
            sparkline: {
                enabled: true
            }
        },
        stroke: {
            width: 2
        },
        plotOptions: {
            bar: {
                columnWidth: '80%'
            }
        },
        colors: ['var(--theme-color3)'],
        series: [{
            data: [47, 45, 74, 14, 56, 74, 14, 11, 7, 39, 82]
        }],
        labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
        xaxis: {
            crosshairs: {
                width: 1
            },
        },
        tooltip: {
            fixed: {
                enabled: false
            },
            x: {
                show: false
            },
            y: {
                title: {
                    formatter: function(seriesName) {
                        return ''
                    }
                }
            },
            marker: {
                show: false
            }
        }
    }
    new ApexCharts(document.querySelector("#apexspark_bar_3"), options3).render();
    var options4 = {
        chart: {
            type: 'bar',
            width: 100,
            height: 40,
            sparkline: {
                enabled: true
            }
        },
        stroke: {
            width: 2
        },
        plotOptions: {
            bar: {
                columnWidth: '80%'
            }
        },
        colors: ['var(--theme-color4)'],
        series: [{
            data: [47, 45, 74, 14, 56, 74, 14, 11, 7, 39, 82]
        }],
        labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
        xaxis: {
            crosshairs: {
                width: 1
            },
        },
        tooltip: {
            fixed: {
                enabled: false
            },
            x: {
                show: false
            },
            y: {
                title: {
                    formatter: function(seriesName) {
                        return ''
                    }
                }
            },
            marker: {
                show: false
            }
        }
    }
    new ApexCharts(document.querySelector("#apexspark_bar_4"), options4).render();
    var options4 = {
        chart: {
            type: 'bar',
            //width: 100,
            height: 140,
            sparkline: {
                enabled: true
            }
        },
        stroke: {
            width: 2
        },
        plotOptions: {
            bar: {
                columnWidth: '40%'
            }
        },
        colors: ['var(--theme-color5)'],
        series: [{
            data: [47, 45, 74, 14, 56, 74, 14, 11, 7, 39, 82]
        }],
        labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
        xaxis: {
            crosshairs: {
                width: 1
            },
        },
        tooltip: {
            fixed: {
                enabled: false
            },
            x: {
                show: false
            },
            y: {
                title: {
                    formatter: function(seriesName) {
                        return ''
                    }
                }
            },
            marker: {
                show: false
            }
        }
    }
    new ApexCharts(document.querySelector("#apexspark_bar_5"), options4).render();
    var options = {
        chart: {
            type: "area",
            height: 260,
            stacked: true,
            dropShadow: {
                enabled: true,
                enabledSeries: [0],
                top: -2,
                left: 2,
                blur: 5,
                opacity: 0.06
            },
            toolbar: {
                show: false,
            },
        },
        colors: ['var(--primary-color)', 'var(--accent-color)'],
        stroke: {
            curve: "smooth",
            width: 3
        },
        dataLabels: {
            enabled: false
        },
        series: [{
            name: 'Online',
            data: generateDayWiseTimeSeries(0, 18)
        }, {
            name: 'Offline',
            data: generateDayWiseTimeSeries(1, 18)
        }],
        markers: {
            size: 0,
            strokeColor: "#fff",
            strokeWidth: 3,
            strokeOpacity: 1,
            fillOpacity: 1,
            hover: {
                size: 6
            }
        },
        xaxis: {
            type: "datetime",
            axisBorder: {
                show: false
            },
            axisTicks: {
                show: false
            }
        },
        yaxis: {
            labels: {
                offsetX: 14,
                offsetY: -5
            },
            tooltip: {
                enabled: true
            }
        },
        grid: {
            padding: {
                left: -5,
                right: 5
            }
        },
        tooltip: {
            x: {
                format: "dd MMM yyyy"
            },
        },
        legend: {
            position: 'bottom',
            horizontalAlign: 'center'
        },
        fill: {
            type: "solid",
            fillOpacity: 0.4
        }
    };
    var chart = new ApexCharts(document.querySelector("#timeline-chart"), options);
    chart.render();

    function generateDayWiseTimeSeries(s, count) {
        var values = [
            [
                4, 3, 10, 9, 29, 19, 25, 9, 12, 7, 19, 5, 13, 9, 17, 2, 7, 5
            ],
            [
                2, 3, 8, 7, 22, 16, 23, 7, 11, 5, 12, 5, 10, 4, 15, 2, 6, 2
            ]
        ];
        var i = 0;
        var series = [];
        var x = new Date("11 Nov 2012").getTime();
        while (i < count) {
            series.push([x, values[s][i]]);
            x += 86400000;
            i++;
        }
        return series;
    }
    // Order status
    $(document).ready(function() {
        var options = {
            chart: {
                height: 220,
                type: 'donut',
            },
            dataLabels: {
                enabled: false,
            },
            legend: {
                position: 'top',
                horizontalAlign: 'center',
                show: true,
            },
            colors: ['var(--theme-color3)', 'var(--theme-color5)'],
            series: [40, 60],
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
        }
        var chart = new ApexCharts(document.querySelector("#apex-simple-donut"), options);
        chart.render();
    });
    $(document).ready(function() {
        var randomizeArray = function(arg) {
            var array = arg.slice();
            var currentIndex = array.length,
                temporaryValue, randomIndex;
            while (0 !== currentIndex) {
                randomIndex = Math.floor(Math.random() * currentIndex);
                currentIndex -= 1;
                temporaryValue = array[currentIndex];
                array[currentIndex] = array[randomIndex];
                array[randomIndex] = temporaryValue;
            }
            return array;
        }
        // data for the sparklines that appear below header area
        var sparklineData = [47, 45, 54, 38, 56, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54,
            43, 19, 46
        ];
        // topb big chart
        var spark1 = {
            chart: {
                type: 'area',
                height: 100,
                sparkline: {
                    enabled: true
                },
            },
            stroke: {
                width: 2
            },
            series: [{
                data: randomizeArray(sparklineData)
            }],
            colors: ['var(--primary-color)'],
            fill: {
                type: 'gradient',
                gradient: {
                    //shade: 'dark',
                    type: "vertical",
                    shadeIntensity: 0.1,
                    gradientToColors: [
                        'var(--accent-color)'
                    ], // optional, if not defined - uses the shades of same color in series
                    inverseColors: true,
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 100],
                    colorStops: []
                }
            }
        }
        var spark1 = new ApexCharts(document.querySelector("#apexspark1"), spark1);
        spark1.render();
    });
    var options = {
        series: [67],
        chart: {
            height: 260,
            type: "radialBar",
            offsetY: -10
        },
        plotOptions: {
            radialBar: {
                dataLabels: {
                    name: {
                        offsetY: 20,
                        color: "var(--primary-color)",
                        formatter: function() {
                            return ["Posts", "(30 days)"];
                        }
                    },
                    value: {
                        color: "#111",
                        offsetY: -30,
                        fontSize: "18px"
                    }
                }
            }
        },
        labels: ["Median Ratio"]
    };
    var chart = new ApexCharts(document.querySelector("#apex_sales_revenue"), options);
    chart.render();
    $(document).ready(function() {
        var options = {
            chart: {
                height: 350,
                type: 'bar',
            },
            colors: ['var(--theme-color1)', 'var(--theme-color2)', 'var(--theme-color4)'],
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%',
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
            series: [{
                name: 'Net Profit',
                data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
            }, {
                name: 'Revenue',
                data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
            }, {
                name: 'Free Cash Flow',
                data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
            }],
            xaxis: {
                categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
            },
            yaxis: {
                title: {
                    text: '$ (thousands)'
                }
            },
            fill: {
                opacity: 1
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return "$ " + val + " thousands"
                    }
                }
            }
        }
        var chart = new ApexCharts(document.querySelector("#apex-basic-column"), options);
        chart.render();
    });
</script>
</body>

</html>
