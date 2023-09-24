var photo = {
    //沙鹿
    "1"  : "./題目照片/1.jpg",
    "2"  : "./題目照片/2.jpg",
    "3"  : "./題目照片/3.jpg",
    "4"  : "./題目照片/4.jpg",
    //梧棲
    "5"  : "./題目照片/5.jpg",
    "6"  : "./題目照片/6.jpg",
    "7"   : "./題目照片/7.jpg",
    "8"   : "./題目照片/8.jpg",
    //龍井
    "9"   : "./題目照片/9.jpg",
    "10"  : "./題目照片/10.jpg",
    "11"  : "./題目照片/11.jpg",
    "12"  : "./題目照片/12.jpg",
    //--------------
    "13"  : "./題目照片/梧棲5.jpg",
    "14"  : "./題目照片/清水1.jpg",
    "15"  : "./題目照片/龍井5.jpg",
    "16"   : "./題目照片/龍井6.jpg",
    "17"   : "./題目照片/龍井7.jpg",
    "18"   : "./題目照片/龍井8.jpg",
    }  
    //顯示題目
    function replace() {
        if (exam.isEnded()) {
            scores();
        } 
        else {
            var element = document.getElementById("problem");// 顯示問題字串
                element.innerHTML = exam.getProblemIndex().text;
            
            var select = exam.getProblemIndex().select;//索引為照片編號 
            for (var i = 0; i < select.length; i++) {
                var element = document.getElementById("select" + i);
                element.innerHTML = photo[select[i]]? '<img src="'+photo[select[i]]+'"/>':select[i];
                surmise("btn" + i, select[i]);
            }
            
              showQNumber();
        }
    };
    
    function surmise(id, surmise) {//載入猜測圖片以及資料
        var button = document.getElementById(id);
        button.onclick = function() {
        exam.surmise(surmise);
        replace();
    }
    };
    
    function showQNumber() {//第幾題
        var currentProblemNumber = exam.problemIndex + 1;
        var element = document.getElementById("qNumber");
        element.innerHTML = "第" + currentProblemNumber +"題" ;
    };
    
    function scores() {//成績畫面
        var gameOverHTML = "<h1>成績結算</h1>";
        gameOverHTML += "<h2 id='score'> 你的分數: " + exam.score + "</h2>";
        var element = document.getElementById("exam");
        element.innerHTML = gameOverHTML;
        $("#exam").append('<button type="button"  , id = btn5> 重新開始 </button>');
        document.getElementById("btn5").onclick = function () {
            location.href = "./game.html";
        }; 
    };
    
    // 創造題目資料庫
    var problems = [
        new problem("下列何者位於沙鹿？", ["1", "5", "9", "13"], "1"),//1
        new problem("下列何者位於沙鹿？", ["6", "2","10", "14"], "2"),//2
        new problem("下列何者位於沙鹿？", ["7", "3", "11", "15"], "3"),//2
        new problem("下列何者位於沙鹿？", ["8", "12", "16","4" ], "4"),//4
    
        new problem("下列何者位於梧棲？", ["1", "9", "5", "14"], "5"),//3
        new problem("下列何者位於梧棲？", ["6", "2", "10", "15"], "6"),//1
        new problem("下列何者位於梧棲？", ["3", "7", "11", "16"], "7"),//2
        new problem("下列何者位於梧棲？", ["4", "12", "17","8"], "8"),//4
    
        new problem("下列何者位於龍井？", ["1", "9", "5","15"], "9"),//2
        new problem("下列何者位於龍井？", ["2", "6", "10","16"], "10"),//3
        new problem("下列何者位於龍井？", ["3", "7", "11","17"], "11"),//3
        new problem("下列何者位於龍井？", ["4", "8", "18","12"], "12"),//4
    
    ];
    
    
    function problem(text, select, answer) {
        this.text = text;
        this.select = select;
        this.answer = answer;
    }
    
    problem.prototype.rightAnswer = function(select) {
        return this.answer === select;
    }
    
    
    function exam(problems) {
        this.score = 0;
        this.problems = problems;
        this.problemIndex = 0;
    }
    
    exam.prototype.getProblemIndex = function() {
        return this.problems[this.problemIndex];
    }
    
    exam.prototype.surmise = function(answer) {
        if (this.getProblemIndex().rightAnswer(answer)) {
        this.score++;
    }
        this.problemIndex++;
    }
    
    exam.prototype.isEnded = function() {
        return this.problemIndex === this.problems.length;
    }
    
    
    var exam = new exam(problems);//產生題目
    
    replace();