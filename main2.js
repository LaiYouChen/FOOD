$(document).ready(function(){
    
    $("#formbtn1").click(function(){
        getdata1();
    });

    $("#formbtn-tree").click(function(){
        $(".table-data-tree").each(function () {
            $(this).html("");
        });
        gettree();
    });

});

function getdata1(){
    $("#foodList1").text("");
    var str = $("#select1").val();
    var a = 1;
    $.ajax({
        type:'GET',
        url:'food.json',
        dataType:'json',
        success:function(data){
            if(str == "全部展開"){
                $.each(data,function(index,item){
                        $("#foodList1").append('<div class="col-sm-6"><div class="card mb-3 mx-auto" style="max-width: 540px"><div class="row g-0" style="cursor:pointer" onclick="test(' + item.編號 + ')"><div class="col-md-4" id="foodimg"><img src="' + item.圖片位置 + '" class="img-fluid rounded-start"></div><div class="col-md-8"><div class="card-body"><div id="store_name" onclick="test()">' + item.店名 + '</div><p class="card-text" id="time">' + item.營業時間 + '</p></div></div></div></div></div>');
                });
            }else{
                $.each(data,function(index,item){
                    if(item.種類==str){
                        $("#foodList1").append('<div class="col-sm-6"><div class="card mb-3 mx-auto" style="max-width: 540px"><div class="row g-0" style="cursor:pointer" onclick="test(' + item.編號 + ')"><div class="col-md-4" id="foodimg"><img src="' + item.圖片位置 + '" class="img-fluid rounded-start"></div><div class="col-md-8"><div class="card-body"><div id="store_name">' + item.店名 + '</div><p class="card-text" id="time">' + item.營業時間 + '</p></div></div></div></div></div>');
                    }
                });
            }
        }   
    });
}

function getdata3(){
    $.ajax({
        type:'GET',
        url:'food.json',
        dataType:'json',
        success:function(data){
            if(url.indexOf("#") == item.編號){
                $.each(data,function(index,item){
                    console.log(item.店名);
                });
            }
        }
    });
}

function test(name){
    console.log('(:(、):)');
    window.location.replace("./foodarticle.php#" + name);
    getdata3();
}

$(document).ready(function(){
    $.ajax({
        type:'GET',
        url:'food.json',
        dataType:'json',
        success:function(data){
            $.each(data,function(index,item){
                if(location.href.split('#')[1] == item.編號){
                    $('#title').text(item.店名);
                    $('#address').text("店家地址：" + item.地址);
                    $('#tel').text("電話：" + item.電話);
                    $('#time').text("營業時間：" + item.營業時間);
                    $('#content').text("店家介紹："+item.店家內容);
                    for(var i = 1; i<=5; i++){
                        var ee = item.圖片位置2 + i + ".jpg";
                        if(i == 1){
                            $('#carousel').append('<div class="carousel-item active"><img src=" ' + ee + '  " class="rounded mx-auto d-block w-30" alt="..."></div>')
                        }else{
                            $('#carousel').append('<div class="carousel-item"><img src=" ' + ee + '  " class="rounded mx-auto d-block w-30" alt="..."></div>')
                        }   
                    }
                }
            });       
        }   
    });
});

// function saveStorage(id){
//     var data = document.getElementById(id).value;
//     var time = new Date().getTime();
//     localStorage.setItem(time,data);
//     console.log("留言已經被保存");
//     loadStorage("msg");
// }
// function loadStorage(id){
//     var result = '<table border="1">';
//     for(var i=0;i<localStorage.length;i++)
//     {
//         var key = localStorage.key(i);
//         var value = localStorage.getItem(key);
//         var date = new Date();
//         date.setTime(key);
//         var datestr = date.toGMTString();
//         result += '<tr><td>'+'這是第'+i+'條留言</td><td>'+value+'</td><td>'+datestr+'</td></tr>';
//     }
//     result += '</table>';
//     var target = document.getElementById(id);
//     target.innerHTML = result;
// }
// function clearStorage(id){
//     localStorage.clear();
//     alert("留言已經被成功刪除");
//     loadStorage('msg');
// }
 
