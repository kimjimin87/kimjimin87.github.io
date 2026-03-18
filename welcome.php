<?php
// 1. 현재 연도와 월 설정 (기본값)
$year = isset($_GET['year']) ? $_GET['year'] : date('Y');
$month = isset($_GET['month']) ? $_GET['month'] : date('m');

// 2. 해당 월의 총 일수와 1일의 요일 계산
$days_in_month = cal_days_in_month(CAL_GREGORIAN, $month, $year);
$first_day = mktime(0, 0, 0, $month, 1, $year);
$day_of_week = date('w', $first_day); // 0(일) ~ 6(토)

// 3. 달력 출력
echo "<h2>$year 년 $month 월</h2>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>일</th><th>월</th><th>화</th><th>수</th><th>목</th><th>금</th><th>토</th></tr><tr>";

// 1일 전까지 빈 칸 채우기
for ($i = 0; $i < $day_of_week; $i++) {
    echo "<td></td>";
}

// 1일부터 마지막 일까지 출력
for ($day = 1; $day <= $days_in_month; $day++) {
    echo "<td>$day</td>";
    $day_of_week++;
    if ($day_of_week % 7 == 0) {
        echo "</tr><tr>"; // 토요일이면 줄 바꿈
    }
}
echo "</tr></table>";
?>