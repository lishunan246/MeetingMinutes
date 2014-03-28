
<!DOCTYPE html>
<html>
  <head>
    <title>百度菁英俱乐部</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://sshz.wicp.net/~cMc_SARS/Vim_Project/css/main.css">
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdn.bootcss.com/jqueryui/1.10.4/css/jquery-ui.css">
    <link rel="stylesheet" href="http://sshz.wicp.net/~cMc_SARS/Vim_Project/css/flat-ui.css"">
    <link rel="stylesheet" href="http://sshz.wicp.net/~cMc_SARS/Vim_Project/css/button.css"">
    <link rel="stylesheet" href="http://cdn.bootcss.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <link rel="shortcut icon" href="favicon.png">
    <style type="text/css">
        .titline {
            width: 100%;
            height: 135px;
            padding-top: 52px;
        }
        
        .titline h2{
            width:100%;
            height:39px;
            overflow:hidden;
            text-indent:-9999px;
            font-size:0;
            line-height:0
        }


        .forFeature p{
            text-align:center
        }

        .forFeature p a{
            color:#2e7ebc
        }

        .forFeature p span{
            color:#ccc;
            padding:0 5px
        }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
        <script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <nav id="main-nav"> 
        <ul class="clearfix">
            <li class="home"><a style="cursor: pointer" id="back">Vim</a></li>
            <!--<li><img src="favicon.png" width="40" height="42" style="margin-top:12px"></li>-->
            <li class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
            <li class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
            <li class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
            <li class="selected"><a style="cursor: pointer" id="vhome"><font style="color:#cc3300;font-size:16px">Join us!</font></a></li>
            <li class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
            <li class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
            <li><a href="http://10.202.67.33/2048/" target="_blank"><font style="font-size:16px">2048</font></a></li>
            <li class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
            <li class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
            <li><a href="http://10.202.67.33/2048-AI/" target="_blank"><font style="font-size:16px">2048-AI</font></a></li>
            <li class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
            <li class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
            <li><a href="http://10.202.67.33/2048-Infinity/" target="_blank"><font style="font-size:16px">2048-Infinity</font></a></li>
            <li class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;li>
            <li class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
            <li><a href="http://10.202.67.33/Flappy-2048/" target="_blank"><font style="font-size:16px">Flappy-2048</font></a></li>
        </ul>
        <div class="clear"></div> 
    </nav>

    <header>
        <hgroup>
          <h1><font style="color:#2e7ebc">Baidu Club</font></h1>
          <h2>百度菁英俱乐部 Vim 大讲堂！</h2>
          <h3>欢迎您的参与！</h3>
        </hgroup>
    </header>

    <div id="features" class="container titline forFeature wtf" style="margin:0 0 20px 0">
        <img style="margin:0 0 10px 0" src="images/xx.png" width="100%" class="visible-lg">
        <img style="margin:0 0 10px 0" src="images/x.png" width="100%" class="hidden-lg">
        <p id="main">
            <a style="cursor: pointer" data-toggle="modal" data-target="#viewLecture">讲座介绍</a>
            <span>|</span>
            <a style="cursor: pointer" data-toggle="modal" data-target="#viewSpeaker">主讲人介绍</a>
        </p>
    </div>    <div class="container">
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title"><font style="font-family:STHeiti">请填写您的信息</font> ^_^</h3>
        </div>

        <div class="panel-body">
          <form action="http://sshz.wicp.net/~cMc_SARS/Vim_Project/index.php/form/authenticate" method="post" role="form" id="valid_form" enctype="multipart/form-data">
            <div class="row">
              <div class="form-group has-success col-lg-10">
                <label class="control-label login-field-icon fui-user" for="ID"><font style="font-family:Helvetica"> Your name please</font></label>
                <input type="text" class="form-control" name="name" id="ID" placeholder="Enter your name">
              </div>
              <div class="col-lg-2">
                <p class="help-block  visible-lg" style="color:#CCCCCC;font-size:14pt;">Click me</p>
                <a class="glow btn button button-pill button-flat-action" data-toggle="modal" data-target="#idinfo">Info</a>
              </div>
            </div>
            <br />
  
            <div class="row">
              <div class="form-group has-error col-lg-10">
                <label class="control-label login-field-icon fui-lock" for="Password"><font style="font-family:Helvetica"> Password</font></label>
                <input type="password" class="form-control" id="Password" placeholder="We don't need password ^_^" disabled="">
              </div>
              <div class="col-lg-2">
                <p class="help-block visible-lg" style="color:#CCCCCC;font-size:14pt;">Click me</p>
                <a class="glow btn button button-pill button-flat-caution" data-toggle="modal" data-target="#pwinfo">Info</a>
              </div>
            </div>
            <br />

            <div class="row">
              <div class="form-group has-info col-lg-10">
                <label class="control-label login-field-icon fui-chat" for="InputFile"><font style="font-family:Helvetica"> Phone</font></label>
                <input type="text" class="form-control" name="phone" id="Phone" placeholder="Enter your phone number">
              </div>
              <div class="col-lg-2">
                <p class="help-block visible-lg" style="color:#CCCCCC;font-size:14pt;">Click me</p>
                <a class="glow btn button button-pill button-flat" data-toggle="modal" data-target="#fileinfo">Info</a>
              </div>
            </div>
            <br />

            <div class="row">
              <div class="form-group has-warning col-lg-10">
                <label class="control-label login-field-icon fui-new" for="Message"><font style="font-family:Helvetica"> Say something...</font></label>
                <textarea id="Message" class="form-control" rows="3" placeholder="Text input" name="message"></textarea>
              </div>
              <div class="col-lg-2">
                <p class="help-block visible-lg" style="color:#CCCCCC;font-size:14pt;"><br />Click me</p>
                <a class="glow btn button button-pill button-flat-highlight" data-toggle="modal" data-target="#wishinfo">Info</a>
              </div>
            </div>
            <br />
            <div class="row">
            <div class="form-group col-lg-4">
              <label class="control-label login-field-icon fui-check" for="InputFile"><font style="font-family:Helvetica"> Verification code</font></label>
              <input type="text" class="form-control" id="Veri" placeholder="Enter the numbers">
            </div>
            <div class="visible-lg" ><br /></div>
            <div class="visible-lg col-lg-2" style="margin:1.3%">
              <div class="captcha" style="cursor: pointer">
                <img src="http://sshz.wicp.net/~cMc_SARS/Vim_Project//captcha/1395632882.0983.jpg" width="100" height="30" style="border:0;" alt=" " />              </div>
            </div>
            <div class="hidden-lg col-lg-2">
              <div class="captcha" style="cursor: pointer">
                <img src="http://sshz.wicp.net/~cMc_SARS/Vim_Project//captcha/1395632882.0983.jpg" width="100" height="30" style="border:0;" alt=" " />              </div>
            </div>
          </div>
          <br />
          </form>
          <a id="sub" class="btn glow btn-info button-rounded button button-flat-action" data-toggle="modal">Submit</a>
        </div>
      </div>

      <!-- 纯逗比 
      <div class="panel panel-success">
        <div class="panel-heading">
          <h3 class="panel-title">提交在这里 ^_^</h3>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="form-group col-lg-4">
              <label class="control-label login-field-icon fui-check" for="InputFile"> Verification code</label>
              <input type="text" class="form-control" id="veri" placeholder="Enter the numbers">
            </div>
            <br />
            <div id="captcha_images" class="col-lg-2" style="margin:1.3%">
              <img src="http://sshz.wicp.net/~cMc_SARS/Vim_Project//captcha/1395632882.0983.jpg" width="100" height="30" style="border:0;" alt=" " />            </div>
          </div>
          <br />
          <br />
          <a id="sub" class="btn glow btn-info button-rounded button button-flat-action" data-toggle="modal">Submit</a>
        </div>
      </div>
      -->

      <div class="panel panel-success">
        <div class="panel-heading">
          <h3 class="panel-title"><font style="font-family:STHeiti">搜索看这里</font> ^_^</h3>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="form-group has-success col-lg-10">
              <label class="control-label login-field-icon fui-search" for="Search"><font style="font-family:Helvetica"> Enter your ID for searching and deleting</font></label>
              <input id="Search" type="text" class="form-control" name="pass" placeholder="Enter your ID">
            </div>
            <div class="col-lg-2">
              <p class="help-block  visible-lg" style="color:#CCCCCC;font-size:14pt;">Click me</p>
              <a class="glow btn button button-pill button-flat-action" data-toggle="modal" data-target="#searchinfo">Go</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
            <p class="pull-right"><a class="btn" id="back1">Back to top</a></p>
            <p>Copyright © 2014 ZJU <a style="cursor: pointer" id="back2">Baidu Club</a></p>
    </div>

    <!-- Name Modal -->
    <div class="modal fade" id="idinfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="fade in modal-content">
           <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Name</h4>
          </div>
          <div class="modal-body">
            <strong>
              ——请在这里输入你的 <font style="color:red">名字</font> 谢谢 ^_^<br /><br />
            </strong>  
              ——务必输入<font style="color:#660033"><strong>真实姓名</strong></font>，否则无法提交！<br /><br />
              ——还要注意<font style="color:#660033"><strong>姓名和手机</strong></font>都是<font style="color:#660033"><strong>不允许</strong></font>重复注册的哦~
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <!-- Password Modal -->
    <div class="modal fade" id="pwinfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Password</h4>
          </div>
          <div class="modal-body">
              ——我们不需要密码啦~<br /><br />
              ——不过<font style="color:red">其他信息要认真填写哦~</font> 
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Phone Modal -->
    <div class="modal fade" id="fileinfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Phone number</h4>
          </div>
          <div class="modal-body">
            <strong>
              ——<font style="color:#FFCC00">请输入您的真实号码</font><br /><br />
              ——注意要长号哦~<br /><br />
              ——在讲座结束会有<font style="color:#CC0000">$抽奖$</font>环节哦 <font style="color:#CC0000">神秘大奖</font>等着你~~
            </strong>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Text Modal -->
    <div class="modal fade" id="wishinfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Suggestion</h4>
          </div>
          <div class="modal-body">
            <strong>
              ——您对本次讲座有什么<font style="color:#FF6666">建议</font> 或是希望在本次讲座中学到什么<br /><br />
              ——<font style="color:green">请在这里告诉我们吧~~~</font>
            </strong>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Submit Modal -->
    <div class="modal fade" id="subinfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Confirm?</h4>
          </div>
          <div class="modal-body">
            <p id="sub_message"></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button id="confirm" type="button" class="btn btn-primary" data-dismiss="modal">Confirm</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Lecture Modal -->
    <div class="modal fade" id="viewLecture" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">What is <font style="color:#006633"><strong>Vim</strong></font>?</h4>
          </div>
          <div class="modal-body">
          <!--
              <font style="color:#006633;font-size:25px"><strong>English</strong></font>
              <br />
              <font style="color:#006633"><strong>&nbsp;&nbsp;&nbsp;Vim</strong></font> is a text editor that is upwards compatible to <font style="color:#006633"><strong>Vi</strong></font>
              <br />
              <font style="color:#006633"><strong>&nbsp;&nbsp;&nbsp;It</strong></font> can be used to edit all kinds of plain text.
              <br />
              <font style="color:#006633"><strong>&nbsp;&nbsp;&nbsp;It</strong></font> is especially useful for editing programs.
              </div>
          <div class="modal-body">
              <font style="color:#990033;font-size:25px"><strong>中文</strong></font>
              <br />
              <font style="color:#990033"><strong>&nbsp;&nbsp;&nbsp;Vim</strong></font> 是一个文本编辑器，向上兼容于<font style="color:#990033"><strong>Vi</strong></font>
              <br />
              <font style="color:#990033"><strong>&nbsp;&nbsp;&nbsp;它</strong></font> 可以用来编辑各种纯文本
              <br />
              <font style="color:#990033"><strong>&nbsp;&nbsp;&nbsp;它</strong></font> 特别适合用来写程序
          </div>
          <div class="modal-body">
              <font style="color:#330099;font-size:25px"><strong>한국어</strong></font>
              <br />
              <font style="color:#330099"><strong>&nbsp;&nbsp;&nbsp;Vim</strong></font> 한 텍스트 편집기, 위로 호환) <font style="color:#330099"><strong>Vi</strong></font>
              <br />
              <font style="color:#330099"><strong>&nbsp;&nbsp;&nbsp;그것은</strong></font> 돼 각종 일반 텍스트 편집하기
              <br />
              <font style="color:#330099"><strong>&nbsp;&nbsp;&nbsp;그것은</strong></font> 특히 잘 쓰는 데 프로그램
            -->
              <br />
              <font style="color:#006633"><strong>&nbsp;&nbsp;&nbsp;Vim</strong></font> is a text editor that is upwards compatible to <font style="color:#006633"><strong>Vi</strong></font>
              <br />
              <font style="color:#990033"><strong>&nbsp;&nbsp;&nbsp;Vim</strong></font> 是一个文本编辑器，向上兼容于<font style="color:#990033"><strong>Vi</strong></font>
              <br />
              <font style="color:#330099"><strong>&nbsp;&nbsp;&nbsp;Vim</strong></font> 한 텍스트 편집기, 위로 호환) <font style="color:#330099"><strong>Vi</strong></font>
              <br />
              <br />
              <font style="color:#006633"><strong>&nbsp;&nbsp;&nbsp;It</strong></font> can be used to edit all kinds of plain text.
              <br />
              <font style="color:#990033"><strong>&nbsp;&nbsp;&nbsp;它</strong></font> 可以用来编辑各种纯文本
              <br />
              <font style="color:#330099"><strong>&nbsp;&nbsp;&nbsp;그것은</strong></font> 돼 각종 일반 텍스트 편집하기
              <br />
              <br />
              <font style="color:#006633"><strong>&nbsp;&nbsp;&nbsp;It</strong></font> is especially useful for editing programs.
              <br />
              <font style="color:#990033"><strong>&nbsp;&nbsp;&nbsp;它</strong></font> 特别适合用来写程序
              <br />
              <font style="color:#330099"><strong>&nbsp;&nbsp;&nbsp;그것은</strong></font> 특히 잘 쓰는 데 프로그램
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Speaker Modal -->
    <div class="modal fade" id="viewSpeaker" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">主讲人资料</h4>
          </div>
          <div class="modal-body">
              <font style="color:#FF6666"><strong>Amrzs</strong></font>
              （1994~？），江苏淮安金湖人，就读于浙江大学，先后在百度俱乐部担任技术部部长职务，广受部员们的喜爱的社友们的好评<br /><br />
              曾于女生节拿着一捧鲜花在蓝田门口徘徊<br /><br />
              他虽然么有什么远大的志向，但是他相信，只要做好每一天就会有很大的收获<br /><br />
              于是忽在大家都在放松娱乐的寒暑假，在别人以为能喘口气的双休日，甚至是在室友们误以为是睡觉的大好时机的时候，他不忘拿出自己的电脑，研究手头上的代码和资料，【不到电脑没电誓不罢休】

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Search Modal -->
    <div class="modal fade" id="searchinfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Sorry</h4>
          </div>
          <div class="modal-body">
            <strong>
              <font style="color:#FF6666">抱歉，我只是个摆设。。</font><br /><br />
              纠结了一下想想还是不要这个功能吧= =
            </strong>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    
    <div id="errorx1" class="modal fade in" style="display: none;">
      <div class="ui-widget-overlay"></div>
      <div class="modal-dialog" style="width:350px;margin:23% auto;">
        <div class="ui-widget">
          <div class="ui-state-error ui-corner-all"> 
            <p id="textx1" style="display: none;font-size: 13px;font-weight: normal;line-height: 18px;margin:7px 15px;">
              <span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>
              <strong>Error:</strong> You must enter your real name!
              </p>
          </div>
        </div>
      </div>
    </div>

    <div id="errorx2" class="modal fade in" style="display: none;">
      <div class="ui-widget-overlay"></div>
      <div class="modal-dialog" style="width:400px;margin:23% auto;">
        <div class="ui-widget">
          <div class="ui-state-error ui-corner-all"> 
            <p id="textx2" style="display: none;font-size: 13px;font-weight: normal;line-height: 18px;margin:7px 15px;">
              <span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>
              <strong>Error:</strong> You must enter the correct phone numbers!
              </p>
          </div>
        </div>
      </div>
    </div>

    <div id="errorx3" class="modal fade in" style="display: none;">
      <div class="ui-widget-overlay"></div>
      <div class="modal-dialog" style="width:300px;margin:23% auto;">
        <div class="ui-widget">
          <div class="ui-state-error ui-corner-all"> 
            <p id="textx3" style="display: none;font-size: 13px;font-weight: normal;line-height: 18px;margin:7px 15px;">
              <span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>
              <strong>Error:</strong> Verification code is wrong!
              </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="http://cdn.bootcss.com/jquery/2.1.0/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="http://cdn.bootcss.com/jquery-scrollTo/1.4.11/jquery.scrollTo.min.js"></script>
    <script src="http://cdn.bootcss.com/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script src="js/myScript.js"></script>
    <script>
      $(document).ready(function(){
        $("#sub").click(function(){
          $.post("http://sshz.wicp.net/~cMc_SARS/Vim_Project/index.php/check",
          {
            auth: $("#Veri").val()
          },
          function(data)
          {
            var bool = data;
          if ($("input#ID").val().length>4||$("input#ID").val().length<2) {
            //$("body").css("overflow","hidden");
            $("#errorx1").fadeIn("fast");
            $("#textx1").fadeIn("fast");
          } else if ($("input#Phone").val().length!=11) {
            $("#errorx2").fadeIn("fast");
            $("#textx2").fadeIn("fast");
          } else if (bool==0) {
            $("#errorx3").fadeIn("fast");
            $("#textx3").fadeIn("fast");
          } else {
            $("#sub").attr("data-target","#subinfo");
            var sub_name = $("input#ID").val();
            var sub_phone = $("input#Phone").val();
            $("#sub_message").html("&nbsp&nbsp&nbspName: <font style='color:red'><strong>&nbsp&nbsp"+sub_name+"</strong></font><br /><br />&nbsp&nbsp&nbspPhone: <font style='color:red'><strong>&nbsp&nbsp"+sub_phone+"</strong></font><br />");
          }
          },'text');
        });

        $("#errorx1").click(function(){
          if ($("#errorx1").css("display")=="block") {
            //$("body").css("overflow","auto");
            $("#errorx1").fadeOut("fast");
            $("#textx1").fadeOut("fast");
            $("input#ID").focus();
            $.scrollTo("#main",1000);
          }
        });
        $("#errorx2").click(function(){
          if ($("#errorx2").css("display")=="block") {
            //$("body").css("overflow","auto");
            $("#errorx2").fadeOut("fast");
            $("#textx2").fadeOut("fast");
            $("input#Phone").focus();
            $.scrollTo("#Password",1000);
          }
        });
        $("#errorx3").click(function(){
          if ($("#errorx3").css("display")=="block") {
            //$("body").css("overflow","auto");
            $("#errorx3").fadeOut("fast");
            $("#textx3").fadeOut("fast");
            $("input#Veri").focus();
            $.scrollTo("#Message",1000);
            var data = $('.username').val();
              $.ajax({
                url:"./index.php/captcha",
                success: function(html) {
                  $('.captcha img').replaceWith(html);
                }
              });
            return false;
          }
        });

        $("#confirm").click(function(){
             $("#valid_form").submit();
        });
        $("#back").click(function(){
          $.scrollTo(0,1000);
        });
        $("#back1").click(function(){
          $.scrollTo(0,1000);
        });
        $("#back2").click(function(){
          $.scrollTo(0,1000);
        });
        $("#vhome").click(function(){
          $("input#ID").focus();
          $.scrollTo("#main",2000);
        });
      });
    </script>
  </body>
</html>
