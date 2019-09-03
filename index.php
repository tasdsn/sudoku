<!DOCTYPE html>
<html lang="ja">
<head>
<title>ナンプレ</title>
<meta charset="utf-8">
</head>
<body>
<h1>ナンプレ</h1>
<form action="" method="post">
<table border="1">
<?php for ($a = 1; $a < 10; $a++): ?>
<tr>
  <?php for ($o = 1; $o < 10; $o++): ?>
  <td class="<?php echo $o . '-' . $a; ?> <?php echo 'col' . $o; ?> <?php echo 'row' . $a; ?>" style="width:20px; height:20px;">
  </td>
  <?php endfor; ?>
</tr>
<?php endfor; ?>
<tr>
<input class="button" type="button" value="処理を開始">
</tr>
</table>
</form>
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous">
</script>
<script>
  $('.button').on('click', function() {
    $('.1-2').text(6); $('.1-4').text(9); $('.1-6').text(8); $('.2-2').text(9);
    $('.2-5').text(7); $('.2-8').text(4); $('.3-1').text(7); $('.3-5').text(2);
    $('.4-2').text(4); $('.4-3').text(2); $('.4-4').text(6); $('.4-8').text(1);
    $('.4-9').text(3); $('.5-4').text(2); $('.5-7').text(6); $('.5-9').text(5);
    $('.6-3').text(1); $('.6-7').text(9); $('.6-9').text(4); $('.7-5').text(4);
    $('.7-9').text(6); $('.8-1').text(9); $('.8-2').text(3); $('.8-7').text(8);
    $('.9-1').text(5); $('.9-2').text(2); $('.9-3').text(6); $('.9-5').text(9);
    $('.9-7').text(4); $('.9-9').text(7);

    var list_row = [];
    var array_row = [];
    for (var i = 1; i < 10; i++) {
        $('.row' + i).each(function(index, value) {
            list_row.push($(value).text());
        });
        array_row.push($(list_row));
        list_row = [];
    }

    var list_col = [];
    var array_col = [];
    for (var i = 1; i < 10; i++) {
        $('.col' + i).each(function(index, value) {
            list_col.push($(value).text());
        });
        array_col.push($(list_col));
        list_col = [];
    }
    console.log(array_col[3]);
    //1~9が入った配列を用意
    num_list = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    $.each(array_row, function(index, value) {
        $.inArray(value, arraycol)
    });
ii  });
</script>
</body>
</html>