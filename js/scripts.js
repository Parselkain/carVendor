(function ($) {

  // ================== ADD BODY CLASS WHEN SCROLLED ================== \\
  var nx_scroll_position = 0;
  $(document).scroll(function () {
    nx_scroll_position = $(this).scrollTop();
    if (nx_scroll_position > 100) {
      $("body").addClass('is-scrolled');
    } else {
      $("body").removeClass('is-scrolled');
    }
  });

  // =================================================================== \\  


  // ================== ADD LOGIN POPUP CLASS ================== \\
  $(".login-popup")
    .mouseenter(function () {
      $(this).addClass('popup-visible');
    });
  $(".main-content")
    .mouseenter(function () {
      $('.login-popup').removeClass('popup-visible');
    });
  // =================================================================== \\  


  // ================== SCRIPT FOR CUSTOM SELECT LIST OPTION - HERO BANNER ================== \\

  var x, i, j, selElmnt, a, b, c;
  /*look for any elements with the class "custom-select":*/
  x = document.getElementsByClassName("custom-select");
  for (i = 0; i < x.length; i++) {
    selElmnt = x[i].getElementsByTagName("select")[0];
    /*for each element, create a new DIV that will act as the selected item:*/
    a = document.createElement("DIV");
    a.setAttribute("class", "select-selected");
    a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
    x[i].appendChild(a);
    /*for each element, create a new DIV that will contain the option list:*/
    b = document.createElement("DIV");
    b.setAttribute("class", "select-items select-hide");
    for (j = 1; j < selElmnt.length; j++) {
      /*for each option in the original select element,
      create a new DIV that will act as an option item:*/
      c = document.createElement("DIV");
      c.innerHTML = selElmnt.options[j].innerHTML;
      c.addEventListener("click", function (e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
      });
      b.appendChild(c);
    }
    x[i].appendChild(b);
    a.addEventListener("click", function (e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
  }
  function closeAllSelect(elmnt) {
    /*a function that will close all select boxes in the document,
    except the current select box:*/
    var x, y, i, arrNo = [];
    x = document.getElementsByClassName("select-items");
    y = document.getElementsByClassName("select-selected");
    for (i = 0; i < y.length; i++) {
      if (elmnt == y[i]) {
        arrNo.push(i)
      } else {
        y[i].classList.remove("select-arrow-active");
      }
    }
    for (i = 0; i < x.length; i++) {
      if (arrNo.indexOf(i)) {
        x[i].classList.add("select-hide");
      }
    }
  }
  /*if the user clicks anywhere outside the select box,
  then close all select boxes:*/
  document.addEventListener("click", closeAllSelect);


  $(".row-tab-form-hero .select-selected").on("click", function () {
    $(".custom-select").not($(this).parents()).removeClass('ico-rotate');
    $(this).parents('.custom-select').toggleClass('ico-rotate');

  });



  // =================================================================== \\  


  // ================== ADVANCED SEARCH TAB HERO ================== \\

  $(".advanced-search-tab-hero").on("click", function () {
    $(this).find('i').toggleClass('ico-rotate');
    $('.row-tab-form-hero.advanced').toggleClass('hide-row');
    if ($('.row-tab-form-hero.advanced').hasClass('hide-row')) {
      $('.row-tab-form-hero.advanced').addClass('overflow')
    } else {
      setTimeout(function () { $('.row-tab-form-hero.advanced').removeClass('overflow'); }, 500);
    }


  });
  function removeIcoRotate() {
    $('.custom-select').removeClass('ico-rotate');
  }
  document.addEventListener("click", removeIcoRotate);


  // =================================================================== \\

  // ================== HAMBURGER IS-ACTIVE ================== \\

  $(".hamburger.hamburger--spring").on("click", function () {
    $(this).toggleClass('is-active');

  });

  // =================================================================== \\




















}(jQuery));
