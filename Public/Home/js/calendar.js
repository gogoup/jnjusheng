(function(){
    console.log('calendar is runing...');
    var is_calendar = null;
    var day = [6,0,1,2,3,4,5];
    var Calendar = function(config){
        this.init(config);
    }
    Calendar.prototype.init = function(config){
        this.date = config.date || new Date();
        this.box = config.id;
        this.class = config.class || '';
        this.Dom = "<div class='calendar'> \
						<div class='calendar-header'> \
							<span class='cale-left'><</span><span class='cale-right'>></span>\
							<input type='text' class='year'>年<input type='text' class='month'>月\
							<span class='cale-que'>取消</span><span class='cale-com'>确定</span>\
						</div>\
						<div class='cale-nav float-clear'>\
							<span>星期一</span>\
							<span>星期二</span>\
							<span>星期三</span>\
							<span>星期四</span>\
							<span>星期五</span>\
							<span class="+this.class+">星期六</span>\
							<span class="+this.class+">星期日</span>\
						</div>\
						<div class='calendar-ri'></div>\
					</div>";
        this.callback = config.callback;
        this.show();
    }
    Calendar.prototype.show = function(){
        var date = new Date(this.date);//获取当前时间对象
        var year = date.getFullYear();//获取年
        var month = date.getMonth()+1;//获取月
        var d = date.getDate();//获取天
        var days = [31,28+is_leap(date.getFullYear()),31,30,31,30,31,31,30,31,30,31];//天数列表
        var newDate = new Date(year+','+month+','+1);//获取新的日期对象
        var kun = day[newDate.getDay()];//获取星期几
        var tian = days[newDate.getMonth()];//获取多少天数
        if(is_calendar)return;
        $(this.box).css({position:'relative'}).append(this.Dom);
        is_calendar = this;
        $('.calendar').css({position:'absolute',left:0,top:$(this.box).height()})
        var spanKun = str_repeat('<span></span>',kun,tian,this.class);
        $('.year').val(year);
        $('.month').val(month);
        $('.calendar-ri').append(spanKun).children('span').eq(d+kun-1).addClass('active');
        var _this = this;
        $('.cale-left').on('click',function(){
            if(month==1){
                year--;
                month=13;
            }
            _this.upDate(year,--month);
        })
        $('.cale-right').on('click',function(){
            if(month==12){
                year++;
                month=0;
            }
            _this.upDate(year,++month);
        })
        $('.calendar input').on('input',function(){
            var year = $('.year').val();
            var month = $('.month').val();
            if(!year.match(/^\d+$/)|| !month.match(/^\d+$/)){
                $('.calendar-ri').html('<h3>你输入的是火星时间吧</h3>');
                return;
            }
            _this.upDate(year,month);
        })
        $('.calendar-ri span').on('click',function(){
            if($(this).text()==='')return;
            $(this).addClass('active').siblings().removeClass('active');
        })
        $('.cale-que').on('click',function(e){
            e.stopPropagation();
            _this.hide();
            _this.callback&&_this.callback('取消');
        })
        $('.cale-com').on('click',function(e){
            e.stopPropagation();
            var y = $('.year').val();
            var m = $('.month').val();
            var d = $('.calendar-ri .active').text();
            _this.hide();
            if(!y.match(/^\d+$/)|| !m.match(/^\d+$/)){
                _this.callback&&_this.callback(y);
                return;
            }
            _this.callback&&_this.callback(y,m,d);
        })
    }
    Calendar.prototype.hide = function(){
        $('.calendar').remove();
        is_calendar=null;
    }
    Calendar.prototype.upDate = function(year,month){
        $('.calendar-ri').html('');
        var days = [31,28+is_leap(year),31,30,31,30,31,31,30,31,30,31];
        var newDate = new Date(year+','+month+','+1);
        var kun = day[newDate.getDay()];
        var tian = days[newDate.getMonth()];
        var spanKun = str_repeat('<span></span>',kun,tian,this.class);
        $('.year').val(year);
        $('.month').val(month);
        $('.calendar-ri').append(spanKun).children('span').eq(kun).addClass('active');
        $('.calendar-ri span').on('click',function(){
            if($(this).text()==='')return;
            $(this).addClass('active').siblings().removeClass('active');
        })
    }
    var golbal = this || (0, eval)('this');
    golbal.Calendar = Calendar;
    // 判断是否为闰年
    function is_leap(year){
        return (year%100==0?res=(year%400==0?1:0):res=(year%4==0?1:0));
    }
    //根据天数判断星期几判断
    function xinqi(n,i){
        return (n+i)%7
    }
    // 重复生成字符串
    function str_repeat(str,n,t,c){
        var strs='';
        var m = 7-(n+t)%7;
        for(var i=0;i<n+t+m;i++){
            if(i<n){
                strs+=str;
            }else if(i<n+t){
                strs+='<span class='+((c&&((xinqi(n,i-n+1)==0)||(xinqi(n,i-n+1)==6)))?c:"")+'>'+(i-n+1)+'</span>';
            }else if(i<n+t+m){
                strs+=str;
            }

        }
        return strs;
    }
})()