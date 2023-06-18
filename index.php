<!DOCTYPE html PUBLIC>

<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <link href="css\cc_style.css" rel="stylesheet" type="text/css" >
    <meta charset="UTF-8" />
    <title>Sezar shifri</title>
</head>

<body>

<div id="header">
    <h2><u>Sezar shifri</u></h2>
</div>

<div id="wrapper">
    <form id="encryptForm" action="shifrlash.php" method="post">
        <table border="0" cellpadding="5" cellspacing="0">
            <tr>
                <td><h3>Ochiq manit:</h3></td>
                <td><textarea name="matn" id="plaintext" cols="50" rows="10" placeholder="Matnni kiriting"></textarea></td>
            </tr>
            <tr>
                <td><h3>Kalitni kirting:</h3></td>
                <td><input type="text" name="kalit" id="key" placeholder="Key here" style="width:4em" /></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="ok"  value="Encrypt" class="button" />
                    <input type="submit" name="dekode" value="Decrypt" class="button"/>
                </td>
                <td></td>
            </tr>
        </table>
    </form>
</div>

<!--    <script type="text/javascript">-->
<!--    -->
<!--        function runEncrypt(isDecrypt){-->
<!--            var shift = document.getElementById("key").value;-->
<!--            var plaintext = document.getElementById("plaintext").value;-->
<!--    -->
<!--            if(plaintext.length==0){-->
<!--                alert("Plaintext/Ciphertext field cannot be empty!");-->
<!--                return;-->
<!--            }-->
<!--            var key = parseInt(shift, 10);-->
<!--            if(key < 0 || key >= 26){-->
<!--                alert("Shift is out of range(Range is from 0-26)");-->
<!--                return;-->
<!--            }-->
<!--            if(!/^-?\d+$/.test(shift)){-->
<!--                alert("Shift is not an integer (Key must be an Integer!)");-->
<!--                return;-->
<!--            }-->
<!--    -->
<!--            if (isDecrypt)-->
<!--                key = (26 - key) % 26;-->
<!--            var plaintext = document.getElementById("plaintext");-->
<!--            plaintext.value = caesarShift(plaintext.value, key);-->
<!--    -->
<!--        }-->
<!--    -->
<!--    -->
<!--    -->
<!--        function caesarShift(text, shift) {-->
<!--            var ciphertext = "";-->
<!--    -->
<!--            for (var i = 0; i < text.length; i++){-->
<!--                var ch = text.charCodeAt(i);-->
<!--    -->
<!--                if(65 <= ch && ch <=  90) {-->
<!--                    ciphertext += String.fromCharCode((ch - 65 + shift) % 26 + 65); // for Uppercase Unicode-->
<!--                }-->
<!--                else if(97 <= ch && ch <= 122){-->
<!--                    ciphertext += String.fromCharCode((ch - 97 + shift) % 26 + 97);  // for Lowercase Unicode-->
<!--                }-->
<!--                else{-->
<!--                    ciphertext += text.charAt(i);-->
<!--                }-->
<!--            }-->
<!--            return ciphertext;-->
<!--        }-->
<!--    -->
<!--    </script>-->

</body>

</html>