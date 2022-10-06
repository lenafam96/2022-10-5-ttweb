<?php
$arrInput = $_POST["mang-input"] ?? "";
$number = $_POST["number"] ?? "";
$result = "";
$arrDisplay = "";
if (isset($arrInput) && isset($number)) {
    $arr = explode(",", $arrInput);
    $arrDisplay = join(",  ", $arr);
    $key = array_search($number, $arr);
    $result = $key?"Tìm thấy $number tại vị trí thứ $key của mảng":"Không tìm thấy $number trong mảng";
}

?>
<form action="?action=bai1" method="post">
    <table class="bai1">
        <thead>
            <tr>
                <th colspan="2" class="bai1">TÌM KIẾM</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="title">Nhập mảng:</td>
                <td class="input"><input type="text" name="mang-input" id="mang-input" required value="<?php echo $arrInput ?>"></td>
            </tr>
            <tr>
                <td class="title">Nhập số cần tìm:</td>
                <td class="input"><input type="number" name="number" id="mnumberang" required value="<?php echo $number ?>"></td>
            </tr>
            <tr>
                <td colspan="2" class="bai1">
                    <button type="submit" name="sbm">Tìm kiếm</button>
                </td>
            </tr>
            <tr>
                <td class="title">Mảng:</td>
                <td class="input"><input type="text" name="mang" id="mang" disabled value="<?php echo $arrDisplay ?>"></td>
            </tr>
            <tr>
                <td class="title">Kết quả tìm kiếm:</td>
                <td class="input"><input type="text" name="ketqua" id="ketqua" disabled value="<?php echo $result ?>"></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2">
                    <span>(Các phần tử trong mảng sẽ cách nhau bằng dấu ",")</span>
                </td>
            </tr>
        </tfoot>
    </table>
    <a href="index.php">Trang chủ</a>
</form>