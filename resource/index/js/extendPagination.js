function callBackPagination(a,b) {
        var totalCount = a,limit = b;//总数据条数；每页显示数量
        $('#callBackPager').extendPagination({
            totalCount: totalCount,
            limit: limit
        });
    }
(function ($) {
    $.fn.extendPagination = function (options) {
        var defaults = {
            //pageId:'',
            totalCount: '',
            showPage: '10',
            limit: '6',
            callback: function () {
                return false;
            }
        };
        $.extend(defaults, options || {});
        if (defaults.totalCount == '') {
            //alert('总数不能为空!');
            $(this).empty();
            return false;
        } else if (Number(defaults.totalCount) <= 0) {
            //alert('总数要大于0!');
            $(this).empty();
            return false;
        }
        if (defaults.showPage == '') {
            defaults.showPage = '10';
        } else if (Number(defaults.showPage) <= 0)defaults.showPage = '10';
        if (defaults.limit == '') {
            defaults.limit = '6';
        } else if (Number(defaults.limit) <= 0)defaults.limit = '6';
        var totalCount = Number(defaults.totalCount), showPage = Number(defaults.showPage),
            limit = Number(defaults.limit), totalPage = Math.ceil(totalCount / limit);
        if (totalPage > 0) {
            var html = [];
            html.push(' <ul class="pagination">');
            html.push(' <li class="first"><a href="#">首页</a></li>');
            html.push(' <li class="previous"><a href="#">&laquo;</a></li>');
            html.push('<li class="disabled hidden"><a href="#">...</a></li>');
            if (totalPage <= showPage) {
                for (var i = 1; i <= totalPage; i++) {
                    if (i == 1) html.push(' <li class="active"><a href="#">' + i + '</a></li>');
                    else html.push(' <li><a href="#">' + i + '</a></li>');
                }
            } else {
                for (var j = 1; j <= showPage; j++) {
                    if (j == 1) html.push(' <li class="active"><a href="#">' + j + '</a></li>');
                    else html.push(' <li><a href="#">' + j + '</a></li>');
                }
            }
            html.push('<li class="disabled hidden"><a href="#">...</a></li>');
            html.push('<li class="next"><a href="#">&raquo;</a></li>');
            html.push(' <li class="end"><a href="#">尾页</a></li></ul>');
            $(this).html(html.join(''));
            if (totalPage > showPage) $(this).find('ul.pagination li.next').prev().removeClass('hidden');

            var pageObj = $(this).find('ul.pagination'), preObj = pageObj.find('li.previous'),
                currentObj = pageObj.find('li').not('.previous,.disabled,.next'),
                nextObj = pageObj.find('li.next'),
                firstObj=pageObj.find('li.first');//首页
                endObj=pageObj.find('li.end');//尾页

            function loopPageElement(minPage, maxPage) {
                var tempObj = preObj.next();
                for (var i = minPage; i <= maxPage; i++) {
                    if (minPage == 1 && (preObj.next().attr('class').indexOf('hidden')) < 0)
                        preObj.next().addClass('hidden');
                    else if (minPage > 1 && (preObj.next().attr('class').indexOf('hidden')) > 0)
                        preObj.next().removeClass('hidden');
                    if (maxPage == totalPage && (nextObj.prev().attr('class').indexOf('hidden')) < 0)
                        nextObj.prev().addClass('hidden');
                    else if (maxPage < totalPage && (nextObj.prev().attr('class').indexOf('hidden')) > 0)
                        nextObj.prev().removeClass('hidden');
                    var obj = tempObj.next().find('a');
                    if (!isNaN(obj.html()))obj.html(i);
                    tempObj = tempObj.next();
                }
            }

            function callBack(curr) {
                defaults.callback(curr, defaults.limit, totalCount);
            }          
            firstObj.click(function(event){
            	event.preventDefault();   	
            	var activeObj = pageObj.find('li[class="active"]'), activePage = Number(activeObj.find('a').html());
            		var maxPage=showPage,minPage=1;            		
            		loopPageElement(minPage,maxPage);	
            	$.each(currentObj, function (index, thiz){
                    if ($(thiz).find('a').html() == minPage) {
                    	activeObj.removeClass('active');
                        $(thiz).addClass('active');
                        document.getElementById("page").value=minPage;
                        callBack(minPage);             
                        //alert(minPage);//调试
                    }
                    
               });
            	//alert("aaaaaa");调试
            });
            endObj.click(function(event){
            	event.preventDefault();   	
            	var activeObj = pageObj.find('li[class="active"]'), activePage = Number(activeObj.find('a').html());
            		var maxPage=totalPage,minPage=maxPage-showPage+1;            		
            		loopPageElement(minPage,maxPage);	
            	$.each(currentObj, function (index, thiz){
                    if ($(thiz).find('a').html() == maxPage) {
                    	activeObj.removeClass('active');
                        $(thiz).addClass('active');
                        document.getElementById("page").value=maxPage;
                        callBack(maxPage);             
                        //alert(minPage);//调试
                    }
               });
            	//alert("aaaaaa");调试
            });
            
            currentObj.click(function (event) {
                event.preventDefault();
                var currPage = Number($(this).find('a').html()), activeObj = pageObj.find('li[class="active"]'),
                    activePage = Number(activeObj.find('a').html());
                    //alert(currPage);//调试                    
                if (currPage == activePage) return false;
                if ((totalPage > showPage && currPage > 1) ) {
                    var maxPage = currPage, minPage = 1;
                    //alert(minPage);//调试
                    if (($(this).prev().attr('class'))
                        && ($(this).prev().attr('class').indexOf('disabled')) >= 0) {
                        minPage = currPage - 1;
                        maxPage = minPage + showPage - 1;
                        //alert(maxPage);//调试
                        loopPageElement(minPage, maxPage);
                    } else if (($(this).next().attr('class'))
                        && ($(this).next().attr('class').indexOf('disabled')) >= 0) {
                        if (totalPage - currPage >= 1) maxPage = currPage + 1;
                        else  maxPage = totalPage;
                        if (maxPage - showPage > 0) minPage = (maxPage - showPage) + 1;
                        //alert(minPage);//调试
                        loopPageElement(minPage, maxPage)
                    }                  
                }
                
                $.each(currentObj, function (index, thiz) {
                    if ($(thiz).find('a').html() == currPage) {
                    	activeObj.removeClass('active');
                        $(thiz).addClass('active');
                        callBack(currPage);
                        document.getElementById("page").value=currPage;
                        //alert(currPage);//调试
                    }
                });
            });
            preObj.click(function (event) {
                event.preventDefault();
                var activeObj = pageObj.find('li[class="active"]'), activePage = Number(activeObj.find('a').html());
                //alert(activePage-1);//调试             
                if (activePage <= 1) return false;
                if (totalPage > showPage) {
                    var maxPage = activePage, minPage = 1;                  
                    if ((activeObj.prev().prev().attr('class'))
                        && (activeObj.prev().prev().attr('class').indexOf('disabled')) >= 0) {
                        minPage = activePage - 1;
                        if (minPage > 1) minPage = minPage - 1;
                        maxPage = minPage + showPage - 1;
                        loopPageElement(minPage, maxPage);
                    }
                }
                $.each(currentObj, function (index, thiz) {
                    if ($(thiz).find('a').html() == (activePage - 1)) {
                        activeObj.removeClass('active');
                        $(thiz).addClass('active');
                        document.getElementById("page").value=activePage-1;
                        callBack(activePage - 1);
                    }
                });
            });
            nextObj.click(function (event) {
                event.preventDefault();
                var activeObj = pageObj.find('li[class="active"]'), activePage = Number(activeObj.find('a').html());
                //alert(activePage+1);//调试
                if (activePage >= totalPage) return false;
                if (totalPage > showPage) {
                    var maxPage = activePage, minPage = 1;                  
                    if ((activeObj.next().next().attr('class'))
                        && (activeObj.next().next().attr('class').indexOf('disabled')) >= 0) {
                        maxPage = activePage + 2;
                        if (maxPage > totalPage) maxPage = totalPage;
                        minPage = maxPage - showPage + 1;
                        loopPageElement(minPage, maxPage);
                    }
                }
                $.each(currentObj, function (index, thiz) {
                    if ($(thiz).find('a').html() == (activePage + 1)) {
                        activeObj.removeClass('active');
                        $(thiz).addClass('active');
                        document.getElementById("page").value=activePage+1;
                        callBack(activePage + 1);
                    }
                });
            });
        }
    };
})(jQuery);