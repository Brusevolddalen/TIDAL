function openNav() {

  $("#mySidenav").css({
    width: "250px"
  });
  $(".toggler").css({
    display: "none"
  });
  checkSize();

  function checkSize() {
    if ($(".social-icons").css("order") == "1") {
      // your code here
      $("#mySidenav").css({
        width: "100vw"
      });
      $(".sidenav").css({
        textAlign: "center"
      });
      $(".sidenav li:last-child").css({
        paddingTop: "8em",
        paddingBottom: "8em",
        paddingLeft: "2em"
      });

    } else {
      $("#mySidenav").css({
        width: "250px"
      });
      $(".sidenav li:last-child").css({
        paddingTop: "3em",
        paddingBottom: "3em"
      });
    }



  }
}

function closeNav() {

  $("#mySidenav").css({
    width: "0"
  });
  $(".toggler").css({
    display: "unset"
  });

}
