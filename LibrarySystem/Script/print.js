function PrintElem(elem)
{
    Popup($(elem).html());
}

function Popup(data) 
{
        var mywindow = window.open('', 'my div', 'height=400,width=600');
        mywindow.document.write('<html><head><meta charset="UTF-8"><title>Báo Cáo</title>');
        /*optional stylesheet*/ mywindow.document.write('<link rel="stylesheet" href="../Style/myStyle.css" type="text/css" />');
        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10

        mywindow.print();
        mywindow.close();

        return true;
}
$(document).ready(function(){
    $(".btn1").click(function(){
        $("div#searchdate").hide();
        $("div#searchname").show();
    });
    $(".btn2").click(function(){
        $("div#searchdate").show();
        $("div#searchname").hide();
    });
});
function PrintElem_phat(elem)
{
    Popup_phat($(elem).html());
}

function Popup_phat(data) 
{
        var mywindow = window.open('', 'my div', 'height=400,width=600');
        mywindow.document.write('<html><head><meta charset="UTF-8"><title>Biên lai nộp phạt</title>');
        /*optional stylesheet*/ mywindow.document.write('<link rel="stylesheet" href="../Style/myStyle.css" type="text/css" />');
        mywindow.document.write('</head><body >');
        mywindow.document.write('<h2 Style="text-align:center">Thư viện Đại học Quốc Gia Hà Nội</h2>');
        mywindow.document.write('<h3 Style="text-align:center">Biên lai nộp phạt</h3>');
        mywindow.document.write(data);
        mywindow.document.write('<p Style="text-align:right">Ngày......tháng.........năm........</p> ');
        mywindow.document.write('<pre>Độc giả                                                                    Thủ thư</pre>');
        mywindow.document.write('</body></html>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10

        mywindow.print();
        mywindow.close();

        return true;
}