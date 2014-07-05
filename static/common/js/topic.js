$(document).ready(function(){        //DOM的onload事件处理函数    
  $("#comment-submit").click(function(){          //当按钮button被点击时的处理函数
  if(check_content()){
  postdata(); 
    //button被点击时执行postdata函数
   $("#reply_content").val('');//提交清空内容
  }    
  });
});
function postdata(){                             //提交数据函数
var comment=htmldecode($("#reply_content").val());
  $.ajax({                                                 //调用jquery的ajax方法   
    type: "POST",                                     //设置ajax方法提交数据的形式    
    url: baseurl+"index.php/comment/add_comment",     //把数据提交到ok.php 
    data: "comment="+comment+"&fid="+$("#fid").val()+"&is_top="+$("#is_top").val()+"&username="+$("#username").val()+"&avatar="+$("#avatar").val()+"&layer="+$("#layer").val(),    //输入框writer中的值作为提交的数据  
    dataType: 'json',  
    success: function(msg){                 //提交成功后的回调，msg变量是ok.php输出的内容。
    var html="<div id='r_"+msg.layer+"' class='inner'><table cellpadding='0' cellspacing='0' border='0' width='100%'><tr><td width='48' valign='top' align='center'><img src='"+msg.avatar+"'  class='avatar' border='0' align='default' /></td><td width='10' valign='top'></td><td width='auto' valign='top' align='left'><div class='fr'><div id='thank_area_"+msg.layer+"' class='thank_area'><a href='#;' onclick='if (confirm('确认要不再显示来自 @"+msg.username+" 的这条回复？')) { ignoreReply("+msg.layer+", '35230'); }' class='thank' style='color: #ccc;'>隐藏</a> &nbsp; &nbsp; &nbsp; <a href='#;' onclick='thankReply("+msg.layer+", 'raxrenrxtcmbbteawhqiidxbyiiyavyl');' class='thank'>感谢回复者</a></div> &nbsp; <a href='#;' onclick='replyOne('"+msg.username+"');'><img src='//cdn.v2ex.com/static/img/reply.png' align='absmiddle' border='0' alt='Reply' /></a> &nbsp;&nbsp; <span class='no'>"+msg.layer+"</span></div><div class='sep3'></div><strong><a href='"+msg.username+"' class='dark'>"+msg.username+"</a></strong>&nbsp; &nbsp;<span class='fade small'>"+msg.replytime+"</span> <div class='sep5'></div><div class='reply_content'>"+msg.content+"</div></td></tr></table></div>";
    $('#clist').append(html);
    $('#comments').html(msg.layer);//改变回复数
      //alert("数据提交成功");                     //如果有必要，可以把msg变量的值显示到某个DIV元素中    
    }
  });
}

//快速回复ctrl+enter
    $(document).keypress(function(e){
        var active_id = document.activeElement.id;  
        if((e.ctrlKey && e.which == 13 || e.which == 10) && (active_id == "topic_content" || active_id == "reply_content")) {
            e.preventDefault();
          //  $("#new_topic").submit();
            $("input[type=submit]").click();
        }
    });

// send a thank to reply
function thankReply(replyId) {
    $('#thank_area_' + replyId).addClass("thanked").html("感谢已发送");
    $.post('/thank/add/' + replyId , function() {
     
        $('#thank_area_' + replyId).addClass("thanked").html("感谢已发送");

    });
}
// send a thank to topic
function thankTopic(topic) {
    
    $.post('/thank/topic/' + topic , function() {
     
        $('#thank_topic').html("感谢已发送");


    });
}


function replyOne(username){
    replyContent = $("#reply_content");
  oldContent = replyContent.val();
  prefix = "@" + username + " ";
  newContent = ''
  if(oldContent.length > 0){
      if (oldContent != prefix) {
          newContent = oldContent + "\n" + prefix;
      }
  } else {
      newContent = prefix
  }
  replyContent.focus();
  replyContent.val(newContent);
  moveEnd(replyContent);
}
function check_content(){
if($("#reply_content").val().length < 4){
alert("对不起，回复内容不能少于4个字符！")
$("#reply_content").focus();
return false;
} else{
  return true;
}
}

function removeHTMLTag(str) {
            str = str.replace(/<\/?[^>]*>/g,''); //去除HTML tag
            str = str.replace(/[ | ]*\n/g,'\n'); //去除行尾空白
            str = str.replace(/\n[\s| | ]*\r/g,'\n'); //去除多余空行
            str=str.replace(/ /ig,'');//去掉 
            return str;
    }

function htmldecode(str){
    str= str.replace(/&lt;/g, "<");
    str= str.replace(/&gt;/g, ">");
    str= str.replace(/&nbsp;/g, " ");
    //str= str.replace(/'/g, "\'");
    str= str.replace(/&quot;/g, "\"");
    str= str.replace(/<br>/g, "\n");
    str= str.replace(/&raquo;/g, "");
    str= str.replace(/&amp;/g, "");
    
  return str;
}
function hideReply(replyId) {
   $('#hide_area_' + replyId).html('<img src="http://ifacemash.duapp.com/images/load.gif"'+ "class=\"loading"+ replyId +'\" />');
    $.post('/thank/hate/' + replyId , function() {
     $('#thank_area_' + replyId).addClass("thanked").html("");
     var hidehtml = "<article><div class='cell hoverable reply' id='comment_988'><div class='thank_area'><a href='#;' onclick='hidedReply("+replyId+"); class='thank'>已折叠&nbsp;&nbsp;</a></div>";
      $('#comment_' + replyId).hide();
        $('#article' + replyId).append(hidehtml);

    });
}
function hidedReply(replyId) {
   $('#hide_area_' + replyId).html('<img src="http://ifacemash.duapp.com/images/load.gif"'+ "class=\"loading"+ replyId +'\" />');
    $.post('/thank/hated/' + replyId , function() {
     
        $("#tab"+replyId).show();
         $('#hide_area_' + replyId).hide();

    });
}
function showPubHide(replyId) {
    $("#tab"+replyId).show();
    $('#hide_area_' + replyId).hide();
   
}