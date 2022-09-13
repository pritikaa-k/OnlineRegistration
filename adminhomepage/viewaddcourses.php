<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>View and Add Courses</title>

    <style>
      .container1 table{
        background-color: white;
        border-collapse: collapse;
        width: 100%;
        border-radius: 5px;
      }

       .container1 th, td {
           text-align: left;
           padding: 8px;
       }

       .container1 tr:nth-child(odd) {
           background-color: #f0ecec;
           border-radius: 5px;
       }

       .container1, container2{
         width: 80%;
         background-color: white;
         border-radius: 3px;
         padding: 20px;
       }

       .container2 table {
         padding: 20px;
         background-color: white;
         width: 50%;
         height: 50%;
         border-radius: 5px;
         margin: 30px;
       }


       input {
         font: inherit;
         padding: 8px 16px 8px 16px;
         width: 90%;
         background-color: #f0ecec;
         border-style: none;
         border-radius: 3px
       }

       input[type="submit"] {
           display: inline-block;
           margin-bottom: 0;
           text-align: center;
           vertical-align: middle;
           cursor: pointer;
           border: none;
           padding: 8px 16px;
           font-size: 16px;
           line-height: 1.58;
           border-radius: 50px;
           color: #fff;
           background-color: #b454eb;
       }
    </style>

  </head>

  <body background="back.jpg">
    <center>
      <br>
        <h2>View courses</h2>

      <div class="container1">
       <table>
         <tr>
           <th>Course code</th>
           <th>Course name</th>
           <th>L</th>
           <th>T</th>
           <th>P</th>
           <th>J</th>
           <th>Total credits</th>
         </tr>
         <tr>
           <td>CSE1003</td>
           <td>Foundations of Python</td>
           <td>3</td>
           <td>0</td>
           <td>0</td>
           <td>1</td>
           <td>4</td>
         </tr>
         <tr>
           <td>CSE1002</td>
           <td>Foundations of Java</td>
           <td>2</td>
           <td>1</td>
           <td>0</td>
           <td>1</td>
           <td>4</td>
         </tr>
         <tr>
           <td>CSE4001</td>
           <td>Data structures and Algorithms</td>
           <td>2</td>
           <td>1</td>
           <td>0</td>
           <td>0</td>
           <td>3</td>
         </tr><tr>
           <td>CSE4002</td>
           <td>Design and analysis of algorithms</td>
           <td>3</td>
           <td>0</td>
           <td>0</td>
           <td>1</td>
           <td>4</td>
         </tr>
       </table>
      </div>

      <br><br>

      <div class="container2">
        <h2>Add courses</h2>
        <form class="form1" action="viewaddcourses.php" method="post">
          <table>
            <tr>
              <td><label for="">Course code</label></td>
            </tr>
            <tr>
              <td><input type="text" name="coursecode" id="coursecode"></td>
            </tr>

            <tr>
              <td><label for="">Course name</label></td>
            </tr>
            <tr>
              <td><input type="text" name="coursename" value="" name="coursename"></td>
            </tr>
            <tr>
              <td><label for="">L</label></td>
            </tr>
            <tr>
              <td><input type="text" name="L" value="" id="L"></td>
            </tr>
            <tr>
              <td><label for="">T</label></td>
            </tr>
            <tr>
              <td><input type="text" name="T" value="" id="T"></td>
            </tr>
            <tr>
              <td><label for="">P</label></td>
            </tr>
            <tr>
              <td><input type="text" name="P" value="" id="P"></td>
            </tr>
            <tr>
              <td><label for="">J</label></td>
            </tr>
            <tr>
              <td><input type="text" name="J" value="" id="J"></td>
            </tr>
            <tr>
              <td><label for="">Total credits</label></td>
            </tr>
            <tr>
              <td><input type="text" name="totalcredits" value="" id="totalcredits"></td>
            </tr>
            <tr>
              <td><input type="submit" name="" value="Submit"></td>
            </tr>

          </table>
        </form>
      </div>

    </center>

    <?php
      $coursecode = $_POST['coursecode'];
      $coursename = $_POST['coursename'];
      $L = $_POST['L'];
      $T = $_POST['T'];
      $P = $_POST['P'];
      $J = $_POST['J'];
      $totalcredits = $_POST['totalcredits'];

      //Database Connection
      $conn = new mysqli('localhost','root','','test');
      if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
      }else{
        $stmt = $conn->prepare("insert into addcourses(coursecode,coursename,L,T,P,J,totalcredits) values(?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssi",$coursecode,$coursename,$L,$T,$P,$J,$totalcredits);
        $stmt->execute();
        echo Registration Successful;
        $stmt->close();
        $conn->close();
      }
     ?>



  </body>
</html>
