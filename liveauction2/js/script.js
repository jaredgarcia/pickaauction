var roundNum = 1;
var b1 = b2 = b3 = b4 = b5 = b6 = 5000050;

ReadyTimer();

function Auction1Timer(){
    var m = new Date();
    m.setMinutes(m.getMinutes() + 5);

    var deadline = m.getTime(); 

    var x = setInterval(function() { 

    var now = new Date().getTime(); 
    var t = deadline - now; 
    var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)); 
    var seconds = Math.floor((t % (1000 * 60)) / 1000);
    document.getElementById("A1_minute").innerHTML = minutes;  
    document.getElementById("A1_second").innerHTML = seconds;
    R1BidDummy();
    if (t < 0) { 
            clearInterval(x); 
            document.getElementById("A1_minute").innerHTML = '0';  
            document.getElementById("A1_second").innerHTML = '0'; 
            ReadyTimer();
        } 
    }, 1000);
}

function ReadyTimer(){

    var m = new Date();
    m.setSeconds(m.getSeconds() + 5);

    var deadline = m.getTime(); 

    var x = setInterval(function() { 

    var now = new Date().getTime(); 
    var t = deadline - now;  
    var seconds = Math.floor((t % (1000 * 60)) / 1000);
      
    document.getElementById("msg").innerHTML = "Round "+roundNum+" starts in "+seconds+"...";  
    if (t < 0) { 
            clearInterval(x); 
            document.getElementById("msg").innerHTML = "";
            document.getElementById("label2").innerHTML = "Round " + roundNum;
            roundNum+=1;
            Auction1Timer();
        } 
    }, 1000);
}

function R1BidDummy(){
    var bider = Math.floor(Math.random() * 6);
    var bidChance = Math.floor(Math.random() * 10);

    if (bidChance <= 4){
        switch(bider){
            case 0:
                b1 += 10000;
                document.getElementById("bid_1").innerHTML = b1;
                break;
            case 1:
                b2 += 10000;
                document.getElementById("bid_2").innerHTML = b2;
                break;
            case 2:
                b3 += 10000;
                document.getElementById("bid_3").innerHTML = b3;
                break;
            case 3:
                b4 += 10000;
                document.getElementById("bid_4").innerHTML = b4;
                break;
            case 4:
                b5 += 10000;
                document.getElementById("bid_5").innerHTML = b5;
                break;
            case 5:
                b6 += 10000;
                document.getElementById("bid_6").innerHTML = b6;
                break;
        }
    }
}