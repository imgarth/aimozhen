﻿
      <div id="footer" style="text-align: center; font-size: 12px; color:#C0C0C0">
        <p>&copy; <a href="http://animetaste.org/" target="_blank">ANIMETASTE.org</a> | Bootstrap | <a href="/about" target="_blank">About US</a> |  <a href="http://weibo.com/animetaste" class="sina">新浪</a>
						<a href="http://site.douban.com/108892/" class="douban">豆瓣</a>
						<a href="http://animetaste.diandian.com/" class="diandian">点点</a> | <a href="http://www.miibeian.gov.cn" target="_blank">沪ICP备13003160号</a></p>
        <p>&nbsp;</p>
</div>

    </div> <!-- /下方 -->
    <a id="issue" href="/page/issue/">   
  <span>用户<br />反馈</span> 
</a>

    <!-- javascript
    ================================================== -->
    <script src="/media/js/bootstrap.js"></script>
    <script src="/media/js/amz.js"></script>
    <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=652974" ></script>
	<script type="text/javascript" id="bdshell_js"></script>
	<script type="text/javascript">
	var bds_config = {'wbUid':3163946864};
	document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
	</script>

<div id="login" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" style="color: #FFFFFF" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">登录</h3>
  </div>
    <div class="modal-body">
    <form action="/login.php" method="POST">
        <div class="modal-body">
            用户名：<input type="text" name="username" /> <br />
            　密码：<input type="password" name="password" /> <br />
            <input type="submit" value="登录" class="btn btn-red"/>
        </div>
    </form>
    </div>
</div>
<div id="share" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" style="color: #FFFFFF" aria-hidden="true" data-dismiss="modal">×</button>
    <h3 id="ModalLabel">分享动画</h3>
  </div>    <div class="modal-body">
    <form action="/ajax/post.php" id="post" method="POST" >
        <div class="modal-body">
                <div class="control-group" id="urlgroup">
            <input type="text" name="url" id="url" class="input-block-level share-video" placeholder="请输入你想要分享的视频页面地址"/>
            <span class="help-inline" id="urlInfo"></span>
			<div style="font-size: 14px; color: #919191; margin: 10px 0 20px 0;"><strong>支持优酷，土豆，56，新浪博客等视频网站<br /><?=$sitename?>的氛围和你息息相关，希望你能给我们带来更多精彩的分享</strong></div>
        		</div>
 			 <input id="send" type="submit" value="发布" class="btn btn-red"/>

        </div>
    </form>
    <script src="/include/validation/post.js"></script>
</div></div>  


</body>
</html>