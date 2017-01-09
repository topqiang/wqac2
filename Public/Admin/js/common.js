$(document).ready(function(){
    //删除
    $('.delete-delete').click(function(){
        if(confirm('确认要执行删除操吗？')){
            window.location.href = $(this).next('input').val();
        }
    });
    
    //批量删除
    $('.delete-batch').click(function(){
        if(confirm('确认要执行批量删除操作吗？')){
            $('.batch-form').submit();
        }
    });

    //自定义页号跳转
    $('#go').click(function(){
        var p = $('#p').val();
        var url = $(this).next('input').val();
        var page_num = $('#page_num').val();
        if(page_num == ''){
            alert('请输入页号');return;
        }else{
            if(url.indexOf('/p/') == -1){
                url = url+'/p/'+page_num;
                window.location.href = url;
            }else{
                url = url.replace('/p/'+p,'/p/'+page_num);
                window.location.href = url;
            }
        }
    });

    //tab切换
    $('#tabs li').click(function(){
        $(this).addClass('active').siblings().removeClass('active');
        $('#tabs-content .ul').eq($('#tabs li').index(this)).show().siblings().hide();
    });

    //是否显示操作
    $('.is-show-operate').click(function(){
        var arr = $(this).next('input').val().split('||');
        ajaxIsShow(arr[0],arr[1],arr[2],this);
    });

    //浮动图片显示
    $('.pop').mouseover(function(){
        var top = 0, left = 0, obj = this;
        while (obj) {
            top = top + obj.offsetTop;
            left = left + obj.offsetLeft;
            obj = obj.offsetParent
        }
        $(this).next('.img-position').css('left',left+$(this).width()+20);
        $(this).next('.img-position').css('top',top-140);
        $(this).next('.img-position').fadeIn(300);
    });
    $('.pop').mouseout(function(){
        $(this).next('.img-position').fadeOut(300);
    });

    //排序只能添加数字
    $('.only-num').keyup(function(){
        this.value=this.value.replace(/[^\d]/g,'');
    });

    //输入框高亮
    $('form .text-input').focus(function(){
        $(this).css({"border":"1px solid #495B79"});
    });
    $('form .text-input').blur(function(){
        $(this).css({"border":"1px solid #495B79"});
    });

    //全选
    $('.check-all').click(function(){
        $(this).parent().parent().parent().parent().find("input[type='checkbox']").attr('checked', $(this).is(':checked'));
        if($(this).is(':checked') == true){
            $('.tbody tr').addClass("alt-row-select");
        }else{
            $('.tbody tr').removeClass("alt-row-select");
        }
    });

    //选中行改变背景色
    $("input[type='checkbox']").click(function(){
        if($(this).is(':checked') == true){
            $(this).parent().parent().addClass("alt-row-select");
        }else{
            $(this).parent().parent().removeClass("alt-row-select");
        }
    });

/**************************  左边菜单下拉效果  ***********************/

    //隐藏所有菜单
    $("#left-menu li ul").hide();
    //默认选中的菜单  子菜单下拉出现
    $("#left-menu li a.active").parent().find("ul").slideToggle("fast");

    //点击顶菜单 子菜单下拉出现  未选中菜单隐藏
    $("#left-menu li a.nav-top-item").click(function(){
        //选中顶菜单标记为选中状态  未选中移除选中状态
        $(this).parent().siblings().find("a").removeClass('active');
        $(this).addClass('active');
        //上拉 下拉效果
        $(this).parent().siblings().find("ul").slideUp("fast");
        $(this).next().slideToggle("fast");
        return false;
    });
    //子菜单选中状态改变
    $("#left-menu li ul li a").click(function(){
        $(this).parent().siblings().find("a").removeClass('active');
        $(this).addClass('active');
     });
    //没有子菜单的顶菜单 点击效果
    $("#left-menu li a.no-submenu").click(function(){
        window.open(this.href,"main");
        return false;
    });

});

