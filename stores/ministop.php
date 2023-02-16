<!DOCTYPE html>

<html>
<head>
  <button type="button" onclick="location.href='http://localhost/dbpj/index.php'">뒤로가기</button>

        <meta charset = 'utf-8'>

</head>

<style>
        table{
                border-top: 1px solid #444444;
                border-collapse: collapse;
        }
        tr{
                border-bottom: 1px solid #444444;
                padding: 10px;
        }
        td{
                border-bottom: 1px solid #efefef;
                padding: 10px;
        }
        table .even{
                background: #efefef;
        }
        .text{
                text-align:center;
                padding-top:20px;
                color:#000000
        }
        .text:hover{
                text-decoration: underline;
        }
        a:link {color : #57A0EE; text-decoration:none;}
        a:hover { text-decoration : underline;}
</style>
<body align=center>
<?php
                $connect = mysqli_connect('localhost', 'root', 'rlaehddnd0422@', 'PROJECT') or die ("connect fail");
                $query ="select * from db where brand='ministop' order by tag";
                $result = $connect->query($query);
                $total = mysqli_num_rows($result);

        ?>


        <body>

          <?php
          $serverName="localhost";
          $username="root";
          $password="rlaehddnd0422@";
          try{
          $con=new PDO("mysql:host=$serverName; dbname=PROJECT", $username, $password);
          $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          }
          catch(PDOException $e)
          {
              echo "PDO 연결 실패" . $e->getMessage();
          } ?>


          <div id="search_box">
            <body align=center>

                  <h2>Search</h2>
                  <form method="POST">
                    <input type="text" name="search" placeholder="     찾으시는 상품을 입력하세요." padding=10px style="width:1000px; border: solid 2px; border-radius: 8px;">
                    <input type="submit" name="submit" value="검색">
                </form>
            </body>

            <?php

            if(isset($_POST["submit"])){
                $str=$_POST["search"];

                //데이터베이스에 쿼리 명령문을 보낸다
                $sth=$con->prepare("SELECT * FROM db WHERE name like '%$str%' and brand='ministop'");

                //sth에 검색한 데이터를 데이터베이스에서 매칭해서 가져온다.
                $sth->setFetchMode(PDO:: FETCH_OBJ);
                $sth->execute();
                $total = $sth->rowcount();
                ?>

                          <br></br>
              <span style="font-weight: bold; font-size: 1.3em; line-height: 1.0em; color: green;" >
                총 검색 결과 수 : <?php echo $total ?>

                          <br></br>
              </span>



                <table align=center>
                  <thead>

                    <tr style ="font-weight:bold;"	>
                        <td width = "300" align = "center">상호명</td>
                        <td width = "300" align = "center">카테고리</td>
                        <td width = "500" align = "center">제품명</td>
                        <td width = "100" align = "center">가격</td>
                    </tr>
                  </thead>



                <tbody>
                <?php
                while($row=$sth->fetch())
                {
                    if($total%2==0){
                ?>
                    <tr class = "even">
                    <?php   }
                    else{
                  ?>
                      <tr>
                    <?php } ?>

                            <td width = "50" align = "center" style ="font-weight:bold;"><?php echo $row->brand; ?></td>
                            <td width = "50" align = "center"><?php echo $row->tag; ?></td>
                            <td width = "200" align = "center"><?php echo $row->name; ?></td>
                            <td width = "100" align = "center"><?php echo $row->price; ?></td>



            <?php
              $total--;
                }

                    /*
                    else{
                        echo "Name does not exist";
                    }*/
            }

            ?>
          </tbody>


          </table>

        </div>



        </body>
<body>
<?php
                $connect = mysqli_connect('localhost', 'root', 'rlaehddnd0422@', 'PROJECT') or die ("connect fail");
                $query ="select * from db where brand='ministop' order by tag";
                $result = $connect->query($query);
                $total = mysqli_num_rows($result);

        ?>
        <h1 align=center>미니스톱 제품 정보 모음</h1>
        <table align = center>
        <thead align = "center">
        <tr style ="font-weight:bold;">
        <td width = "300" align = "center">상호명</td>
        <td width = "300" align = "center">카테고리</td>
        <td width = "500" align = "center">제품명</td>
        <td width = "100" align = "center">가격(세일적용)</td>
        </tr>
        </thead>

        <tbody>
        <?php
                while($rows = mysqli_fetch_assoc($result)){ //DB에 저장된 데이터 수 (열 기준)
                        if($total%2==0){
        ?>                      <tr class = "even">
                        <?php   }
                        else{
        ?>                      <tr>
                        <?php } ?>
                <td width = "10" align = "center">
                <?php echo $rows['brand']?></td>
                  <td width = "50" align = "center"><?php echo $rows['tag']?></td>
                <td width = "200" align = "center"><?php echo $rows['name']?></td>

                <td width = "50" align = "center"><?php
                if($rows['sales']==0) echo $rows['price'];
                else echo $rows['sales']?></td>

                </tr>
        <?php
                $total--;
                }
        ?>
        </tbody>
        </table>


</body>
</html>
