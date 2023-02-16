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
<body>
<?php
                $connect = mysqli_connect('localhost', 'root', 'rlaehddnd0422@', 'project') or die ("connect fail");
                $query ="select * from db where brand='ministop'AND property='new' order by tag";
                $result = $connect->query($query);
                $total = mysqli_num_rows($result);

        ?>
        <h1 align=center>MINISTOP 신상 제품 정보 모음</h1>
        <table align = center>
        <thead align = "center">
        <tr>
          <td width = "300" align = "center"style = "font-weight:bold;">속성</td>
          <td width = "200" align = "center" style = "font-weight:bold;">브랜드명</td>
          <td width = "200" align = "center"style = "font-weight:bold;">분류</td>
          <td width = "500" align = "center"style = "font-weight:bold;">제품명</td>
          <td width = "150" align = "center"style = "font-weight:bold;">가격(세일적용)</td>
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
                  <td width = "10" align = "center" style = "font-weight:bold; color:red;">
                  <?php echo $rows['property']?></td>
                  <td width = "10" align = "center">
                  <?php echo $rows['brand']?></td>
            <td width = "100" align = "center"><?php echo $rows['tag']?></td>
          <td width = "10" align = "center"><?php echo $rows['name']?></td>

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
