<?php ?>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['bar']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Data', 'Count'],
            <?php
            $elements = ['글', '카테고리', '회원', '댓글'];
            $element_data = [$post_count, $category_count, $user_count, $comment_count];
            for ($i = 0; $i < 4; $i++) {
                echo "['{$elements[$i]}'" . "," . "{$element_data[$i]}],";
            }
            ?>
        ]);

        var options = {
            chart: {
                title: 'Company Performance',
                subtitle: 'Sales, Expenses, and Profit: 2014-2017',
            }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, options);
    }
</script>