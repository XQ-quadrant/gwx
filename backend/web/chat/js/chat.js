/**
 * Created by xq on 16-8-9.
 */


//get_user();
if (typeof console == "undefined") {    this.console = { log: function (msg) {  } };}
WEB_SOCKET_SWF_LOCATION = "/chat/swf/WebSocketMain.swf";
WEB_SOCKET_DEBUG = true;
//var ws, name, client_list={},user_data;
//var ws, name, client_list={},user_data;


// 连接服务端
function begin_chat() {
    // 创建websocket
    //ws = new WebSocket("ws://"+document.domain+":7272");
    // 当socket连接打开时，输入用户名
    //ws.onopen = onopen;
    // 当有消息时根据消息类型显示不同信息
    ws.onmessage = onmessage;
    ws.onclose = function() {
     console.log("连接关闭，定时重连");
     begin_chat();
     };
     ws.onerror = function() {
     console.log("出现错误");
     };
}

// 连接建立时发送登录信息
function onopen()
{
    if(!name)
    {
        show_prompt();
    }
    // 登录
    var login_data = '{"type":"login","client_userid":"'+userid+'","room_id":"1"}';
    console.log("websocket握手成功，发送登录数据:"+login_data);
    ws.send(login_data);
}
function get_user(){
    $.get('/rest/user/view?id=1',function(data,status){
        //alert(data['username']);
        name = data['username'];
        user_data =data;
        //console.log(status);
    })
}

// 服务端发来消息时
function onmessage(e)
{
    console.log(e.data);
    var data = eval("("+e.data+")");
    switch(data['type']){
        // 服务端ping客户端
        case 'ping':
            ws.send('{"type":"pong"}');
            break;
        // 登录 更新用户列表
        case 'login':
            //{"type":"login","client_id":xxx,"client_userid":"xxx","client_list":"[...]","time":"xxx"}
            say(data['client_id'], data['client_userid'],  data['client_userid']+' 加入了聊天室', data['time']);
            if(data['client_list'])
            {
                client_list = data['client_list'];
            }
            else
            {
                client_list[data['client_id']] = data['client_userid'];
            }
            flush_client_list();
            console.log(data['client_userid']+"登录成功");
            break;
        // 发言
        case 'say':
            //{"type":"say","from_client_id":xxx,"to_client_id":"all/client_id","content":"xxx","time":"xxx"}
            say(data['from_client_id'], data['from_client_userid'], data['content'], data['time']);
            break;
        // 用户退出 更新用户列表
        case 'logout':
            //{"type":"logout","client_id":xxx,"time":"xxx"}
            say(data['from_client_id'], data['from_client_userid'], data['from_client_userid']+' 退出了', data['time']);
            delete client_list[data['from_client_id']];
            flush_client_list();
    }
}

// 输入姓名
function show_prompt(){
    name = prompt('输入你的名字：', '');
    if(!name || name=='null'){
        name = '游客';
    }
}

// 提交对话
function onSubmit() {

    var input = document.getElementById("textarea");
    var to_client_id = $("#client_list option:selected").val();
    var to_client_userid = $("#client_list option:selected").text();
    ws.send('{"type":"say","to_client_id":"'+to_client_id+'","to_client_userid":"'+to_client_userid+'","content":"'+input.value.replace(/"/g, '\\"').replace(/\n/g,'\\n').replace(/\r/g, '\\r')+'"}');
    input.value = "";
    input.focus();
}

// 刷新用户列表框
function flush_client_list(){
    var userlist_window = $("#userlist");
    var client_list_slelect = $("#client_list");
    userlist_window.empty();
    client_list_slelect.empty();
    userlist_window.append('<h4>在线用户</h4><ul>');
    client_list_slelect.append('<option value="all" id="cli_all">所有人</option>');
    for(var p in client_list){
        userlist_window.append('<li id="'+p+'">'+client_list[p]+'</li>');
        client_list_slelect.append('<option value="'+p+'">'+client_list[p]+'</option>');
    }
    $("#client_list").val(select_client_id);
    userlist_window.append('</ul>');
}

// 发言
function say(from_client_id, from_client_userid, content, time){
    /* $("#dialog").append('<div class="speech_item">' +
     '<img src="http://lorempixel.com/38/38/?'+from_client_id+'" class="user_icon" /> '
     +from_client_userid+' <br> '+time+'<div style="clear:both;"></div>' +
     '<p class="triangle-isosceles top">'+content+'</p> </div>');*/
    $("#dialog").append(' <div class="direct-chat-msg right"> <div class="direct-chat-info clearfix"> <span class="direct-chat-name pull-right">'
        +from_client_userid+'</span> <span class="direct-chat-timestamp pull-right">'
        +time+'</span> </div> <img class="direct-chat-img" src="/adminlte/dist/img/user3-128x128.jpg" alt="message user image"> <div class="direct-chat-text">'
        +content+'</div></div>');


}

$(function(){
    select_client_id = 'all';
    $("#client_list").change(function(){
        select_client_id = $("#client_list option:selected").attr("value");
    });
});
