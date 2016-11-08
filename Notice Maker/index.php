<form action="" method="POST">
    <input name="title" type="text" /><br>
    <input name="date" type="text" /><br>
    <textarea name="list" style="width:250px;height:150px;"></textarea><br>
    <input type="submit" name="submit" value="Save Data">
</form>

<?php
if(isset($_POST['title']) && isset($_POST['date']) && isset($_POST['list'])) {
    $data = $_POST['date'] . '] <span style="color:#00ef5a">' . $_POST['title'];
    $notice = $_POST['list'];
    $ret = file_put_contents('title.txt', $data);
    $rett = file_put_contents('list.txt', $notice);
    if($ret == false) {
        die('There was an error writing this file');
        $output = shell_exec('python notice.py');
        echo $output;
    }
    else {
        echo "$ret bytes written to file";
        $output = shell_exec('python notice.py');
        echo "<textarea name='list' style='width:250px;height:150px;''>$output</textarea><br>";
    }
}
else {
   die('no post data to process');
}


// $output = shell_exec('python notice.py');
// echo "<pre>$output</pre>";
?>
