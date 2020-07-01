<!DOCTYPE html>
<meta charset="UTF-8">
<html>
    <head>
        <title>Form Sign Up</title>
    </head>
    <body>
        <h1>Buat Account Baru!</h1>
        <h2>Sign Up Form</h2>
        <form action="/welcome" method="POST">
            @csrf
            <label for="fname" required>First Name:</label><br><br>
            <input type="text" name = "fname" id="fname"><br><br>
            <label for="lname" required>Last Name:</label><br><br>
            <input type="text" name = "lname" id="lname"><br><br>
            
            <label>Gender</label><br><br>
            <input type="radio" name="Gender" value="male" checked>male<br>
            <input type="radio" name="Gender" value="female">female<br>
            <input type="radio" name="Gender" value="etc">other<br><br>

            <!--source abbreviation: https://laendercode.net/en/3-letter-list.html-->
            <label>Nationality</label><br><br>
            <select>
                <optgroup label="Asia">
                    <option value="idn">Indonesia</option>
                    <option value="sgp">Singapore</option>
                    <option value="ind">India</option>
                </optgroup>
                <optgroup label="Europe">
                    <option value="fra">France</option>
                    <option value="ita">Italy</option>
                </optgroup>
                <optgroup label="Africa">
                    <option value="egy">Egypt</option>
                    <option value="zaf">Sputh Africa</option>
                </optgroup>
                <optgroup label="America">
                    <option value="usa">USA</option>
                    <option value="can">Canada</option>
                </optgroup>
                <option value="etc">Other</option>
            </select><br><br>
            
            <!--source abbreviation: https://www.abbreviations.com/acronyms/LANGUAGES3L-->
            <label>Language Spoken:</label><br><br>
            <input type="checkbox" name="Language" value="ind" checked>Bahasa Indonesia<br>
            <input type="checkbox" name="Language" value="eng">English<br>
            <input type="checkbox" name="language" value="etc">Other<br><br>
            
            <label for="biodata">Bio:</label><br><br>
            <textarea cols="30" rows="7" name="biodata" id="biodata"></textarea><br>
            <input type="submit" value="Register">
        </form>
    </body>
</html>