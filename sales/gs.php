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
                $query ="select * from db where brand='gs25' AND sales!=0 order by tag";
                $result = $connect->query($query);
                $total = mysqli_num_rows($result);

        ?>
        <h1 align=center>GS25 할인 제품 정보 모음</h1>
        <table align = center>
        <thead align = "center">
        <tr>
        <td width = "200" align = "center">상호명</td>
        <td width = "200" align = "center">카테고리</td>
        <td width = "300" align = "center">제품명</td>
        <td width = "300" align = "center">기존가격</td>
        <td width = "150" align = "center" style ="font-weight:bold;" >세일가</td>
        <td width = "150" align = "center">제품특성</td>
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
                  <td width = "100" align = "center"><?php echo $rows['tag']?></td>
                  <td width = "10" align = "center"><?php echo $rows['name']?></td>
                  <td width = "10" align = "center"><?php echo $rows['price']?></td>
                  <td width = "10" align = "center" style ="font-weight:bold; color:red;" ><?php echo $rows['sales']?></td>
                  <td width = "10" align = "center"><?php echo $rows['property']?></td>


                </tr>
        <?php
                $total--;
                }
        ?>
        </tbody>
        </table>

  
</body>
</html>
