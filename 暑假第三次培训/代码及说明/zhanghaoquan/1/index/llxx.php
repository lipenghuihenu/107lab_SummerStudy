<?php
    header("Content-type:text/html;charset=UTF-8");
    session_start();
    $link = mysqli_connect('localhost','root','123456');
    $select = mysqli_select_db($link,'text');
    mysqli_set_charset($link,'utf8');
    if($link){
        $sql = "select * from main;";
        $top_url = "select title from main where id = '1';";
        $top_result =mysqli_query($link,$top_url);
        $top=mysqli_fetch_row($top_result);
        $result = mysqli_query($link,$sql);
        $rows = array();
        while($row = mysqli_fetch_assoc($result)){
            $rows[]=$row;
        }
        $rows=array_reverse($rows);
        $_SESSION['top']=$top[0];
        
        
        function news($pageNum = 1, $pageSize = 4)
        {
            $array = array();
            $link = mysqli_connect('localhost','root','123456');
            mysqli_set_charset($link,'utf8');
            mysqli_select_db($link,"text");
            $rs = "select * from main limit " . (($pageNum - 1) * $pageSize) . "," . $pageSize;
            $r = mysqli_query($link, $rs);
            while ($obj = mysqli_fetch_object($r)) {
                $array[] = $obj;
            }
            mysqli_close($link,"text");
            /* $array = array_reverse($array); */
            return $array;
        }

        function allNews()
        {
            $link = mysqli_connect('localhost','root','123456');
            mysqli_set_charset($link,'utf8');
            mysqli_select_db($link,"text");
            $rs = "select count(*) num from main";
            $r = mysqli_query($link, $rs);
            $obj = mysqli_fetch_object($r);
            mysqli_close($link,"text");
            return $obj->num;
        }
        @$allNum = allNews();
 
        @$pageSize = 6;
 
        @$pageNum = empty($_GET["pageNum"])?1:$_GET["pageNum"];
 
        @$endPage = ceil($allNum/$pageSize);
 
        @$array = news($pageNum,$pageSize);

    }else{
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>????????????-?????????</title>
    <link rel="stylesheet" href="../css/public.css">
    <link rel="stylesheet" href="../css/more.css">
    <link rel="stylesheet" href="../css/moreleft.css">
    <script src="../js/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="../js/header.js"></script>
    <script type="text/javascript" src="../js/moreleft.js"></script>
    <script>
        $(function () {  
            $('#b1').click(function(){
	        val = $('#p').val();
	        if(!val){
	        	alert('??????????????????');
		    }else{
		        if(val.match(/^\d+$/g)){
		    	    location='llxx.php?pageNum='+val;
		    	}else{
		    	}
		    }
            })
        })
    
    </script>
</head>
<body>
    <header>
        <div class="logo">
            <a name="top"><img src="../images/top-bj2.gif" alt="NO FOUND"></a>
            <div class="headerfunc">
                <p>????????????</p>
                <p><span>|</span></p>
                <p>????????????</p>
            </div>
            <div class="search">
                <div class="searchip">
                    <input type="text" placeholder="????????????????????????">
                </div>
                <div class="searchbt">
                    <button>??????</button>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="menu">
            <ul class="menupart">
                <a href="../index.php"><li>??????</li></a>
                <li><a href="bmjs.html">????????????</a>
                    <ul class="selected">
                        <li><a href="gzzz.html">????????????</a></li>
                        <li><a href="gzzz.html">???????????????</a></li>
                        <li><a href="gzzz.html">????????????</a></li>
                    </ul>
                </li>
                <li><a href="dptt.html">????????????</a>
                    <ul class="selected">
                        <li>????????????????????????</li>
                        <li>???????????????????????????</li>
                        <li>?????????????????????????????????</li>
                        <li>?????????????????????????????????</li>
                        <li>??????????????????????????????</li>
                        <li>?????????????????????????????????</li>
                        <li>??????????????????</li>
                        <li>?????????????????????</li>
                        <li>?????????????????????</li>
                    </ul>
                </li>
                <li><a href="rdzx.html">????????????</a>
                    <ul class="selected">
                        <li>????????????</li>
                    </ul>
                </li>
                <li><a href="jyxc.html">????????????</a>
                    <ul class="selected">
                        <li><a href="jyxc.html">????????????</a></li>
                    </ul>
                </li>
                <li><a href="zcfg.html">????????????</a>
                    <ul class="selected">
                        <li>????????????</li>
                        <li>????????????</li>
                        <li>????????????</li>
                        <li>????????????</li>
                    </ul>
                </li>
                <li><a href="mzzj.html">????????????</a>
                    <ul class="selected">
                        <li>????????????</li>
                        <li>????????????</li>
                    </ul>
                </li>
                <li><a href="xzzq.html">????????????</a>
                    <ul class="selected">
                        <li><a href="zlxz.html">????????????</a></li>
                    </ul>
                </li>
                <li><a href="lxwm.html">????????????</a>
                    <ul class="selected">
                        <li><a href="lyb.html">?????????</a></li>
                        <li>??????</li>
                        <li>????????????</li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="content">
            <div class="left">
                <div class="left1">
                    <li class="title">????????????
                        <li><a href="">????????????</a></li>
                        <li><a href="">????????????</a></li>
                        <li><a href="">????????????</a></li>
                        <li><a href="">????????????</a></li>
                        <li><a href="">????????????</a></li>
                    </li>
                </div>
                <div class="left3">
                    <li class="title">????????????</li>
                    <div class="leftpic">
                        <img src="../images/nature2.jpg" alt="NO FOUND">
                        <img src="../images/nature3.jpg" alt="NO FOUND">
                        <img src="../images/nature4.jpg" alt="NO FOUND">
                    </div> 
                </div>
                <div class="left2">
                    <li class="title">????????????
                        <li><a href="">?????????????????????????????????</a></li>
                        <li><a href="">???????????????????????????</a></li>
                        <li><a href="">?????????????????????</a></li>
                        <li><a href="">????????????</a></li>
                        <li><a href="">"????????????"??????</a></li>
                    </li>
                </div>
            </div>
            <div class="right">
                <div class="righttitle">
                    <img src="../images/icon-index.png" alt="NO FOUND">
                    <p>???????????????</p>
                    <a href="../index.php"><p>?????? </p></a>
                    <p>> ???????????? </p>
                    <p> ></p>
                </div>
                <div class="rightmain">
                    <div class="rightpoint">
                    <?php foreach($array as $key => $v) {
                            echo '<img src="../images/dotted.gif" alt="NO FOUND">';
                        }
                        ?>
                    </div>
                    <div class="righttext">
                    <?php 
                    if($top){
                        echo "<font color='red'>{$top[0]}*</font>";
                        echo "<a href='textqxzd.php'><font size='2px' color='gray'>&nbsp;&nbsp;????????????</font></a>";
                    }
                    ?>    
                    <?php foreach($array as $key => $v) {
                            if($v->id==0){
                                echo "<li><a href='zw01.php' target='_blank' title='???????????????????????????????????????(??????)'>{$v->title}</a></li>";
                            }       
                        }
                    ?>
                    </div>
                    <div class="rightdate">
                    <?php foreach($array as $key => $v) {
                            echo "<li>{$v->time}</li>";
                        }
                    ?>
                    </div>
                    <div class="rightfunc">
                        <p>???<?php
                            echo $allNum;
                        ?>???</p>
                        <p><?php
                            echo "{$pageNum}/{$endPage}";
                        ?></p>
                        <a style="color:black;" href="?pageNum=1" rel="external nofollow" rel="external nofollow" >??????</a>
                        <a style="color:black;" href="?pageNum=<?php echo $pageNum==1?1:($pageNum-1)?>" rel="external nofollow" rel="external nofollow" >??????</a>
                        <a style="color:black;" href="?pageNum=<?php echo $pageNum==$endPage?$endPage:($pageNum+1)?>" rel="external nofollow" rel="external nofollow" >??????</a>
                        <a style="color:black;" href="?pageNum=<?php echo $endPage?>" rel="external nofollow" rel="external nofollow" >??????</a>   
                        <span>?????????&nbsp<input type='text' id='p' class='p' style='width: 30px;height:15px'>???</span>
                        <button class='btn btn-success' id='b1' style="cursor:pointer;">GO</button>
                    </div>
                    <div class="savebtn">
                        <a href="../texttj.php"><input type="button" id="save" value="??????"></a>
                        <a href="textdelete.php"><input type="button" id="delete" value="??????"></a>
                        <a href="textzd.php"><input type="button" id="delete2" value="??????"></a>
                        <a href="textfix.php"><input type="button" id="update" value="??????"></a>
                    </div>
                    <form class="searchText" method="post" action="searchDate.php">
                        ??????: <input type="text" placeholder="????????????(?????????)" name="date">
                        <input type="submit" name="submit">
                    </form>
                    <form class="searchText" method="post" action="searchTitle.php">
                        ??????: <input type="text" placeholder="?????????????????????(?????????)" name="title">
                        <input type="submit" name="submit">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="footer">
            <div class="footertitle"></div>
            <div class="footerp">
                <p>Copyright ?? 2019 ??????????????????????????? ???????????????????????? 107??????????????? ????????????</p>
                <p>??????????????? ?????? ??????.?????????/???????????? ?????????475001/475004 ?????????0371-265666428</p>
            </div>
        </div>
    </footer>
    <div class="function">
        <a href="#top"><img src="../images/dian.png" alt="NO FOUND"></a>
    </div>
</body>
</html>
