<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trang chủ</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .tknc {
            padding: 10px;
            text-align: center;
        }

        .tk {
            font-family: Nunito;
            color: #344E41;
            font-family: Nunito;
            text-align: center;
            margin-bottom: 10px;
        }

        .tknc form {
            font-family: Nunito;
            color: #344E41;
            text-align: center;
        }

        .tx {
            height: 27px;
            margin-bottom: 10px;
            margin-right: 10px;
            width: 200px;
            display: inline-block;
        }

        .bt {
            background-color: #A7DCA5;
            color: #344E41;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="tknc" id="tk">
        <h5 class="tk">TÌM KIẾM NHANH</h5>
        <form method="GET" action="xulitkncvl.php">
            <fieldset>
                <input class="tx" type="text" id="s" name="sn" value="" placeholder="Tên sách"/>
                <input class="tx" type="text" id="s" name="s" value="" placeholder="Tác giả"/>
                <input class="tx" type="text" id="s" name="se" value="" placeholder="Năm xuất bản"/>
                <input style="background-color: #A7DCA5; color: #344E41;" class="bt" type="submit" id="x" value="Tìm kiếm"/>
            </fieldset>
        </form>
    </div>
</body>
</html>
