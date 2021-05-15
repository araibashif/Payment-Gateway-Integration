<!DOCTYPE html>
<html>
<head><title>Data Base</title>
    </head>
    <script type="text/javascript"> 
         
    </script>
    <style type="text/css">
     html { 
          background: url(image/jj-ying-7JX0-bfiuxQ-unsplash.jpg) no-repeat center center fixed; 
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;

        }  
        table{
             
            font-size: 28px;
           padding: 10px;
           width: 80%;
         text-align: center;
          
        color:#0A253C;;
        }
        
    #topper a{
        float: right;
        color:#373737;
        text-decoration: none;
        background:red;
        }</style>
    <body>
        <div id="topper"><a href="admin.html">Back</a></div>
         
        <table>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Email</th>
            </tr>
            <?php
    
   $conn = mysqli_connect('localhost','root','','test');
            if($conn->connect_error){
                die("connection failed:" );
            }
            $sql="SELECT id,  firstName, lastname, gender, email from registration";
            $result= $conn->query($sql);
            
            if($result-> num_rows > 0){
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row["id"]."</td><td>".$row["firstName"]."</td><td>". $row["lastname"]."</td><td>". $row["gender"]."</td><td>".$row["email"]."</td></tr>" ;
                }
                echo "</table>";
            }
            else 
            {
                echo "No data";
            }
            $conn-> close();
    ?>
        </table>
         
    </body>
</html>