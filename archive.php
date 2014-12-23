<?php
/**
 * 文章归档
 *
 *
 * @package custom
 */
?>

<?php $this->need('header.php'); ?>
<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('css/archive.css'); ?>"/>
<div class="am-g">
<div class="am-u-md-12">
<div id="archives">         
    <div id="archives-content">   
       	 <?php  

           
            $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);   
            $year=0; $mon=0; $i=0; $j=0;   
            $all = array();   
            $output = '';   
            while($archives->next()):   
                $year_tmp = date('Y',$archives->created);   
                $mon_tmp = date('n',$archives->created);
                $y=$year; $m=$mon;   
                if ($mon != $mon_tmp && $mon > 0) $output .= '</div></div>';   
                if ($year != $year_tmp) {   
                    $year = $year_tmp;   
                    $all[$year] = array();   
                }   
  
                if ($mon != $mon_tmp) {   
                    $mon = $mon_tmp;   
                    array_push($all[$year], $mon);   
                    $output .= "<div class='archive-title' id='arti-$year-$mon'><h3>$year-$mon</h3><div class='archives archives-$mon' data-date='$year-$mon'>";   
                }   
                $output .= '<div class="brick"><a href="'.$archives->permalink .'"><span class="time">'.date('m-d',$archives->created).'</span>'.$archives->title .'<em>('. $archives->commentsNum.')</em></a></div>';   
            endwhile;   
            $output .= '</div></div>';   
            echo $output;   
  
            $html = "";   
            $year_now = date("Y");   
            foreach($all as $key => $value){   
                $html .= "<li class='year' id='year-$key'><a href='#' class='year-toogle' id='yeto-$key'>$key</a><ul class='monthall'>";   
                for($i=12; $i>0; $i--){   
                    if($key == $year_now && $i > $value[0]) continue;   
                    $html .= in_array($i, $value) ? ("<li class='month monthed' id='mont-$key-$i'>$i</li>") : ("<li class='month'>$i</li>");   
                }   
                $html .= "</ul></li>";   
            }   
        ?>  
    </div>         
</div>
</div>
<script>jQuery(document).ready(function($) {   
    var old_top = $("#archives").offset().top,   
        _year = parseInt($(".year:first").attr("id").replace("year-", ""));   
    $(".year:first, .year .month:first").addClass("selected");   
    $(".month.monthed").click(function() {   
        var _this = $(this),   
            _id = "#" + _this.attr("id").replace("mont", "arti");   
        if (!_this.hasClass("selected")) {   
            var _stop = $(_id).offset().top - 10,   
                _selected = $(".month.monthed.selected");   
            _selected.removeClass("selected");   
            _this.addClass("selected");   
            $("body, html").scrollTop(_stop)   
        }   
    });   
    $(".year-toogle").click(function(e) {   
        e.preventDefault();   
        var _this = $(this),   
            _thisp = _this.parent();   
        if (!_thisp.hasClass("selected")) {   
            var _selected = $(".year.selected"),   
                _month = _thisp.children("ul").children("li").eq(0);   
            _selected.removeClass("selected");   
            _thisp.addClass("selected");   
            _month.click()   
        }   
    });   
    $(window).scroll(function() {   
        var _this = $(this),   
            _top = _this.scrollTop();   
        if (_top >= old_top + 10) {   
            $(".archive-nav").css({   
                top: 10   
            })   
        } else {   
            $(".archive-nav").css({   
                top: old_top + 10 - _top   
            })   
        }   
        $(".archive-title").each(function() {   
            var _this = $(this),   
                _ooid = _this.attr("id"),   
                _newyear = parseInt(_ooid.replace(/arti-(\d*)-\d*/, "$1")),   
                _offtop = _this.offset().top - 40,   
                _oph = _offtop + _this.height();   
            if (_top >= _offtop && _top < _oph) {   
                if (_newyear != _year) {   
                    $("#year-" + _year).removeClass("selected");   
                    $("#year-" + _newyear).addClass("selected");   
                    _year = _newyear   
                }   
                var _id = _id = "#" + _ooid.replace("arti", "mont"),   
                    _selected = $(".month.monthed.selected");   
                _selected.removeClass("selected");   
                $(_id).addClass("selected")   
            }   
        })   
    })   
});  </script>
<?php $this->need('sidebar-left.php'); ?>
<?php $this->need('sidebar-right.php'); ?>
<?php $this->need('footer.php'); ?>