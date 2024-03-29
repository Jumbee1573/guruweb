"use strict";

$(document).ready(function () {
  var isFlagCourse = true;
  $(".fade").fadeOut(0);
  $(".book__menu_main").on("click", "a", function (event) {
    // event.preventDefault(); 
    var id = $(this).attr('href'),
        top = $(id).offset().top - 50;
    $('body,html').animate({
      scrollTop: top
    }, 1200);
  });
  $(".header__menu-mobile, .header__menu").on("click", "a", function (event) {
    // event.preventDefault(); 
    var id = $(this).attr('href'),
        top = $(id).offset().top;
    $('body,html').animate({
      scrollTop: top
    }, 1200);
  });
  $(".course__button").click(function () {
    if (isFlagCourse) {
      $(".fade").fadeIn('linear');
      $(".course__button").text('Скрыть');
      isFlagCourse = false;
    } else {
      $(".fade").fadeOut('linear');
      $(".course__button").text('Показать еще...');
      isFlagCourse = true;
    }
  });
  $(window).scroll(function () {
    if ($(window).scrollTop() > 150) {
      $('.top__button').addClass('show');
    } else {
      $('.top__button').removeClass('show');
    }
  });
  $('.top__button').on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({
      scrollTop: 0
    }, '300');
  });
  $(window).scroll(function () {
    $("a").each(function () {
      var window_top = $(window).scrollTop();
      var h2 = $(this).offset().top;
      var item = $(this).attr('href');

      if (window_top > h2 - 120) {
        $('#book__visible_false').find('a').removeClass('active');
        $('#book__visible_false').find('a[href="' + item + '"]').addClass('active');
      } else {
        $('#book__visible_false').find('a[href="' + item + '"]').removeClass('active');
      }

      ;
    });
  });
  $('#testDiactive').on('click', function () {
    this.innerText = "Тесты активированы!";
    $('#testDiactive').addClass('primary');
    $.ajax({
      type: "POST",
      url: "/php/statusTest.php",
      dataType: "text",
      data: "status=1"
    });
    $(this).attr("id", "testActive");
    location.reload();
  });
  $('#testActive').on('click', function () {
    this.innerText = "Тесты диактивированы!";
    $('#testActive').removeClass('primary');
    $.ajax({
      type: "POST",
      url: "/php/statusTest.php",
      dataType: "text",
      data: "status=0"
    });
    $(this).attr("id", "testDiactive");
    location.reload();
  });
  $('.test-checking').on('click', function () {
    var name = document.querySelector('.test-name').innerText;
    var result = document.querySelector('.test-result').innerText;
    $.ajax({
      type: "POST",
      url: "/php/test-checking.php",
      dataType: "text",
      data: {
        name: name,
        result: result
      }
    });
  });
});