var newDate='';getLangDate();function dateFilter(date){if(date<10){return"0"+date;}
return date;}
function getLangDate(){var dateObj=new Date();var year=dateObj.getFullYear();var month=dateObj.getMonth()+1;var date=dateObj.getDate();var day=dateObj.getDay();var weeks=["<font style=color:Fuchsia>周日</font>","<font style=color:Gray>周一</font>","<font style=color:DeepSkyBlue>周二</font>","<font style=color:Orange>周三</font>","<font style=color:DarkRed>周四</font>","<font style=color:Gold>周五</font>","<font style=color:Lime>周六</font>"];var week=weeks[day];var hour=dateObj.getHours();var minute=dateObj.getMinutes();var second=dateObj.getSeconds();var timeValue=""+((hour>=12)?(hour>=18)?"<font style=color:#eaaf08>夜晚</font>":"<font style=color:#31dbec>下午</font>":"<font style=color:#d7c3fc>上午</font>");newDate='<font style=color:#C40000>'+dateFilter(year)+'</font>年'+'<font style=color:#C40000>'+dateFilter(month)+'</font>月'+'<font style=color:#C40000>'+dateFilter(date)+'</font>日';shizhong="<font style=color:#C40000> "+dateFilter(hour)+"</font>:<font style=color:#C40000>"+dateFilter(minute)+"</font>:<font style=color:#C40000>"+dateFilter(second)+'</font>';document.getElementById("nowTime").innerHTML=newDate+"　"+week+" "+timeValue+shizhong;setTimeout(getLangDate,1000);}