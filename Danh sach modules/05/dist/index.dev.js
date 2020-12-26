"use strict";

var slides = document.querySelector('.slides');
var slide = Array.from(document.querySelectorAll('.slide'));
var slidegr = document.querySelector('.slidesgr');
var num_page;

function makeslide(numberonetime) {
  var percenwidth_slide = 100 / numberonetime;
  num_page = Math.ceil(slide.length / numberonetime);
  slide.forEach(function (el, index) {
    el.style.width = slidegr.offsetWidth / 100 * percenwidth_slide + 'px';
  }); // slidegr.offsetWidth / 100 * percenwidth_slide;

  slides.style.width = slidegr.offsetWidth / 100 * percenwidth_slide * slide.length + 'px';
}

makeslide(4);
var curpage = 1;

function showslide(pagenumber) {
  slides.style.marginLeft = -(slidegr.offsetWidth * (pagenumber - 1)) + 'px';
}

showslide(1);

function changeslide(n) {
  curpage = curpage + n;
  if (curpage < 1) curpage = num_page;
  if (curpage > num_page) curpage = 1;
  showslide(curpage);
}