<?php ?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['bar']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['데이터', '건'],
            ['글', <?php echo $post_count; ?>],
            ['카테고리', <?php echo $category_count; ?>],
            ['회원', <?php echo $user_count; ?>],
            ['댓글', <?php echo $comment_count; ?>]
        ]);

        var options = {
            chart: {
                title: '게시판 현황',
            }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
    }
</script>