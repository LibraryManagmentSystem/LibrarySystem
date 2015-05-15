
// hàm xử lý đưa ra kết quả đọc từ 1 file (ajax_test)
function loadXMLDoc()
{
  var xmlhttp;

  // tạo 1 đối tượng XMLHttpRequest
  /* một đói tượng XMLHttpRequest gồm: 
      1.  onreadystatechange; một hàm lưu trữ đc gọi tự động khi readyState thay đổi
      2.  readyState: trạng thái của đối tượng XML.. , có 5 giá trị: 0->4 
      3.  status: trạng thái: 200, 404
          200: (statustext OK)
          404: (statustext Not found)

  */
  // tạo 1 request tới Server thông qua cú pháp
  /* xmlhttp.open(method, file, async);
    xmlhttp.send(string);
  */
  if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  }
  else
  {// code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function()
  {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
      document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","ajax_test.txt",true);
  xmlhttp.send();
}


// hàm xử lý đưa ra kết quả từ việc đọc file XML (CD.XML trên server)
// xử dụng responseXML để phân tích kết quả trả về từ server
function loadXMLDoc_1()
{
  var xmlhttp;
  var txt,x,i;
  if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  }
  else
  {// code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function()
  {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
      xmlDoc=xmlhttp.responseXML;
      txt="";
      x=xmlDoc.getElementsByTagName("ARTIST");
      for (i=0;i<x.length;i++)
      {
        txt=txt + x[i].childNodes[0].nodeValue + "<br>";
      }
      document.getElementById("myDiv1").innerHTML=txt;
    }
  }
  xmlhttp.open("GET","CD.xml",true);
  xmlhttp.send();
}

// hàm xử lý đưa ra từ gợi ý
// sử dụng file gethint.php trên server
function showHint(str)
{
  if (str.length==0) { 
    document.getElementById("txtHint").innerHTML="";
    return;
  } else {
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
      if (xmlhttp.readyState==4 && xmlhttp.status==200) {
          document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","gethint.php?q="+str,true);
    xmlhttp.send();
  }    
}

// hàm xử lý tìm kiếm người dùng
// tìm kiếm trong file: getuser.php trên server
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint_1").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint_1").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}

//xmlhttp.open("GET","../location/cal_marks.php?q1mrks="+country+"&marks="+m,true);