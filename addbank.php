
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">

    <title>Bank</title>
</head>
<body>
   <div class="container">
       <div class="title">Add details</div>
       <br>
       <form action="add.php" method="POST" id="validation">
            <div class="form">
                <div class="input-box">
                    <label>Bank Name</label>
                    <input type="text" class="input" id="name" name="name" required >
                </div>
                <br>
                <div class="input-box">
                    <label>Branch</label>
                    <input type="text" class="input" id="branch" name="branch" required >
                </div>
                <br>
                <div class="input-box">
                    <label>Branch Code</label>
                    <input type="int" class="input" id="code" name="code" required>
                </div>
                <br>
                <div class="input-box">
                    <label>Account number</label>
                    <input type="int" class="input" id="acc_no" name="acc_no" required>
                </div>
                <br>
                <div>
                    <button class="btn" type="submit" name="add">Save</button> <br>
                </div>
            </div>

       </form>
   </div> 
</body>

</html>