

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student Login</title>
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
        <style>
            body {
                background-image: url(scen.jfif);
                background-position: center;
                background-size: cover;
                margin-top: 40px;
            }
    
            .reg {
                width: 700px;
                background-color: rgba(0, 0, 1, 0.733);
                margin: auto;
                color: white;
                padding: 10px 0px 10px 0px;
                text-align: center;
                border-radius: 15px 15px 0px 0px;
            }
            .container{
            background-color: rgba(0, 0, 1, 0.685);
            width: 700px;
            padding-top: 35px;
            padding-bottom: 35px;
            margin: auto;
            border-radius: 0px 0px 15px 15px;
        }
            tr,td,input{
                padding: 5px;
                font-size: large;
            }
            input[type="submit"]{
                background-color: rgb(31, 177, 79);
                color: white;
                padding: 10px 15px;
                border: none;
                cursor: pointer;
                border-radius: 4px 4px 4px 4px;
            }
    
            input[type="reset"]{
                background-color: rgb(207, 40, 40);
                color: white;
                padding: 10px 15px;
                border: none;
                cursor: pointer;
                border-radius: 4px 4px 4px 4px;
            }
    
            input[type="submit"]:hover{
                background-color: green;
            }
    
            input[type="reset"]:hover{
                background-color: darkred;
            }
            form{
                /* padding: 10px; */
                color: white;
            }
            .edit{
                padding-left: 195px;
            }
			
			a{
				color: white;
				padding:5px;
			}
        </style>
    </head>
    
    <body>
        <div class="reg">
            <h1>Student login</h1>
        </div>
        
        <div class="container">
            <div class="row">
                
                <div class="col-md-9 edit">
    
                    <form action="student_validation.php" method="post">
                        <Table>
                            <div class="alert alert-warning" id="error" style="display: none;"></div>
                            <tr>
                            <div class="form-group">
                                <td>Login</td><td><input type="number" class="form-control" id="sic" name="sic" placeholder="enter sic"></td> 
                            </div>
                            </tr>
                            <tr>
                                <div class="form-group">
                                    <td>Password</td><td><input type="password" class="form-control" id="password" name="password" placeholder="enter password"></td> 
                                </div>
                                </tr>
                            <tr>
                            <div class="form-group text-right">
                                <td><input type="submit" class="btn btn-primary"></td>
                                <td> <input type="reset" value="Cancel"></td>
                            </div>
                            </tr>
                        </Table> 
                        <div class="form-group" id="success">New User?<a href="studentform.html">Register</a></div>
                </div>
                </form>
            </div>
        </div>
    
        <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
            crossorigin="anonymous"></script>
        <script src="./regform.js"></script> -->
    </body>
</html>