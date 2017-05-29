$(function() {

    $("#sparkline").sparkline('html', {
        type: 'line',
        width: '500',
        height: '200',
        chartRangeMin: 0,
        chartRangeMax: 10,
        lineColor: '#0000ff',
        fillColor: false,
        lineWidth: 2,
        spotColor: '#bb00ef',
        minSpotColor: '#ef0000',
        maxSpotColor: '#19ff00',
        highlightSpotColor: '#b600ff',
        highlightLineColor: '#f02020 ',
        normalRangeColor: '#cecece'});

    $("#sparkline").sparkline([7,5,10], {
        type: 'line',
        composite: true,
        width: 'auto',
        height: '200',
        chartRangeMin: 0,
        chartRangeMax: 10,
        lineColor: '#00ff00',
        fillColor: false,
        lineWidth: 2,
        spotColor: '#bb00ef',
        minSpotColor: '#ef0000',
        maxSpotColor: '#19ff00',
        highlightSpotColor: '#b600ff',
        highlightLineColor: '#f02020 ',
        normalRangeColor: '#cecece'});
});