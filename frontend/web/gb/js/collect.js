/**
 * Created by xq on 16-5-25.
 */
function collect(){

    var url = new urlGet();
    var aGet = url.uGet();

    this.roomId = aGet['id'];

    $('.collect').click(function () {
        $('.collect-icon').style.color = ($('.collect-icon').style.color=='red')?null:'red';

        alert(roomId);
    });

}

collect.prototype.addCollection = function() {
    alert( this.roomId);
};

function urlGet(){
    this.keyvalue = [];
}

urlGet.prototype.uGet = function(){
    var aQuery = window.location.href.split("?");//取得Get参数
    var aGET = new Array();
    if(aQuery.length > 1)
    {
        var aBuf = aQuery[1].split("&");
        for(var i=0, iLoop = aBuf.length; i<iLoop; i++)
        {
            var aTmp = aBuf[i].split("=");//分离key与Value
            aGET[aTmp[0]] = aTmp[1];
        }
    }
    return aGET;
};