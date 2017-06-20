
window.onload=function(){
  var pgurl = window.location.href.substr(window.location.href
    .indexOf("/", 7), window.location.href
      .lastIndexOf("/"));
    console.log(pgurl);
    if(pgurl.lastIndexOf("/")>0){
        pgurl = pgurl.substr(0,pgurl.lastIndexOf("/"));
    };

    console.log(pgurl);

    $("#navbar-collapse-1 ul li a").each(function(){
      if($(this).attr("href") == pgurl || $(this).attr("href") == pgurl+"/")
      $(this).addClass("active");
    });

    $("#footer-nav li a").each(function(){
      if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
      $(this).addClass("active");
    });
  }
