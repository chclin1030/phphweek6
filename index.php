<html>
<head>
    <title>墾丁三日遊</title>
    <link rel="icon" href="/img/sunny.png" type="image/x-icon" />
</head>
<body>
    <?php
        echo "<body bgcolor='#faf0e6'>"
    ?>

    <h1 align="center">墾丁三日遊</h1>

        <ol>
            <h2><li>行程</li></h2>
            <ul>
                <h3><li>第一天</li></h3>
                    <font size="4">墾丁公園＞姊妹沙灘</font><br>
                    <a href="https://www.ktnp.gov.tw/"><img src="https://www.ktnp.gov.tw/images/banner-map.png" width="25%"></a>
                    <a href="https://www.4sistersvilla.com/tw/index.html"><img src="https://webbox.imgix.net/images/ypfxtauayulfiaxy/38b6222b-8955-441b-98c1-f4868bf4b352.jpg?auto=format,compress&fit=crop&crop=entropy&w=1536" width="30%"></a>
                <h3><li>第二天</li></h3>
                    <font size="4">水蛙窟大草原＞龍磐公園＞悠活</font><br>
                    <a href="https://www.ktnp.gov.tw/Ecology_Detail.aspx?n=8A33013523400F35&dsn=CA60F31A88AF3736"><img src="https://cmeyy.com/wp-content/uploads/2021/09/1631601085-4694c3498f6eef897eab7f340590802c.jpg" width="30%"></a>
                    <a href="https://www.ktnp.gov.tw/News_Content2.aspx?n=28AB1D16ECF7E63C&sms=C88B5251F308CE96&s=C1E50972440D43B2"><img src="https://ws.ktnp.gov.tw/001/Upload/245/relpic/6730/78591/4acfa60e-29ec-48f5-adf3-6a620fa3b750.jpg" width="30%"></a>
                    <a href="https://www.yoho.com.tw/zh-tw"><img src="https://www.mirrormedia.com.tw/assets/images/20190325114016-e271002f42aa99ed2fc394a2acf3da44-mobile.jpg" width="27%"></a>
                <h3><li>第三天</li></h3>
                    <font size="4">阿信巧克力農場>海洋生物博物館>回家</font><br>
                    <a href="https://www.taiwanchoco.com.tw/zh-tw"><img src="https://bunnyann.com/wp-content/uploads/20200318123632_69.jpg" width="30%"></a>
                    <a href="https://www.nmmba.gov.tw/"><img src="https://i0.wp.com/peachnote.cc/wp-content/uploads/2018/05/9b0359a3eec9de8997dacdc5c9b0a5df.jpg?resize=1170%2C780&ssl=1" width="30%"></a>
            </ul>
        
            <h2><li>基本資料填寫</li></h2>

                <form action="rinfo.php"  method="post"> 
                    <p>姓名:</p>
                    <p><input type="text" name="uname" placeholder="name" ></p>
                    <p>Email:</p>
                    <p><input type="mail" name="umail" placeholder="12345@gmail.com" ></p> 
                    <p>電話:</p>
                    <p><input type="text" name="utel" placeholder="0912345678" ></p>
                    <p>性別:</p>
                    <p><input type="radio" name="ugender" value="1">男<input type="radio" name="ugender" value="0">女<input type="radio" name="ugender" value="2">雙性</p>
                    <p>食物偏好:</p>
                    <p><input type="checkbox" name="ufood[]" value="葷食">葷食<input type="checkbox" name="ufood[]" value="素食">素食<input type="checkbox" name="ufood[]" value="不吃海鮮">不吃海鮮</p>
                    <p>T恤尺寸:</p>
                    <select name="usize">
                    <option value="1">S</option>
                    <option value="2">M</option>
                    <option value="3">L</option>
                    <option value="4">XL</option>
                    <option value="5">2L</option>
                    </select>
                    <p>生日:</p>
                    <p><input type="date" name="ubir" ></p>
                    <p>票要幾張?</p>
                    <p><input type="number" name="ticket" ></p>

                    <br><input type="submit">
                </form>

                <p><h2>T恤尺寸對照表</h2></p>
                <table border="1">
                <tr><th>尺寸</th><th>肩寬</th><th>胸寬</th><th>衣長</th><th>袖長</th></tr>
                <tr><td>S</td><td>43</td><td>48</td><td>62</td><td>19</td></tr>
                <tr><td>M</td><td>45</td><td>50</td><td>65</td><td>20</td></tr>
                <tr><td>L</td><td>48</td><td>53</td><td>67</td><td>22</td></tr> 
                <tr><td>XL</td><td>51</td><td>56</td><td>70</td><td>23</td></tr>
                <tr><td>2L</td><td>53</td><td>58</td><td>72</td><td>24</td></tr>
                </table>
        </ol>           

        <p><input type="button" value="登出系統" onclick="location.href='/final/login.php'"></p>
</body>
</html>