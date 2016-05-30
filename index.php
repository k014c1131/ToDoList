<!DOCTYPE HTML>
<html>
    <head>
        <title>ToDoList</title>
    </head>
    <body>

        <?php
        if(isset($_GET['ToDoname'])){
          $ToDoname = $_GET['ToDoname'];

          $ToDoname = htmlspecialchars($ToDoname,ENT_QUOTES);
        }

        $dsn = 'mysql:dbname=todolist;host=localhost;charset=utf8';
        $user = 'root';
        $password = 'root';
        try {
          $dsn = new PDO($dsn,$user,$password,array(PDO::ATTR_ERRMODE => false));
          print('接続に成功しました。<br>');

          $dbh->query('SET NAMES utf8');
	
	if(isset($_GET['add'])){
	}else if(isset($_GET['delete'])){
	}

          $sql = 'insert into shouhin (id, name) values (?, ?)';
          $stmt = $dbh->prepare($sql);
          $flag = $stmt->execute(array(6, '扇風機'));

          if ($flag){
            print('データの追加に成功しました<br>');
          }

        } catch (Exception $e) {

        }




        ?>
        <form  action="index.php" method="get">
          <input type="text" name="ToDoname" style="float:left">
          <input type="submit" name="add" value="add" style="float:left">

          <?php
          $dsn ='mysql:dbname=todolist;host=localhost;charset=utf8';
          $user='root';
          $password ='root';
          try {
            $dsn= new PDO($dsn,$user,$password,array(PDO::ATTR_ERRMODE => false));
            print('接続に成功しました。<br>');

            $dbh->query('SET NAMES utf8');

            $sql = 'select item from tableList';
            foreach ($dbh->query($sql) as $row) {
              print($row['item']);
              print('<input type="submit" name="delete" value="add" style="float:left"><br>');
            }
          } catch (Exception $ex) {

          } ?>
            </form>
          </body>



           ?>
        </form>

     </body>
</html>
