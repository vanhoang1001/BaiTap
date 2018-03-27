<html lang="en">
    <head>
        <title>THUC DON</title>
    </head>
    
    <body>
        <form action="bai4_kq.php" method="post" role="form">
            <legend>THUC DON </legend>
            
            <div class="form-group">
                <label for="monkhaivi">Mon khai vi:</label>
                <select name="monkhaivi[]" id="monkhaivi" multiple size="4">
                    <option value="goingosen">goi ngo sen</option>
                    <option value="slatcangu">salat ca ngu</option>
                    <option value="botronrauthom">bo tron rau thom</option>
                    <option value="thitnguoi">thit nguoi</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="monchinh">Mon chinh:</label>
                <select name="monchinh[]" id="monchinh" multiple size="6">
                    <option value="boham">bo ham</option>
                    <option value="cachemsotca">ca chem sot ca</option>
                    <option value="tomrangmuoi">tom rang muoi</option>
                    <option value="cuasotme">cua sot me</option>
                    <option value="comchien">com chien</option>
                    <option value="canhbapthao">canh bap thao</option>
                </select>
            </div>
            
            
            <div class="form-group">
                <label for="montrangmieng">Mon trang mieng:</label>
                    <select name="montrangmieng[]" id="montrangmieng" multiple size="3">
			<option value="chehatsen">che hat sen</option>
			<option value="banhflan">banh flan</option>
			<option value="raucau">rau cau</option>
                    </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </body>
</html>

