webpackJsonp([2],{0:function(t,e,r){t.exports=r("sV/x")},"89Mp":function(t,e){$(function(){$(".button-collapse").sideNav(),$(".scrollspy").scrollSpy(),$(".parallax").parallax()}),setTimeout(function(){var t=$("nav");t.length&&$(".toc-wrapper").pushpin({top:t.height()})},100),window.closeToast=function(){$(document).on("click","#toast-container .toast",function(){$(this).fadeOut(function(){$(this).remove()})})},window.handleErrors=function(t){500===t.status?swal({title:"Internal Server Error",text:"Please try again later. If problem persists, please send an email to "+$('meta[name="admin-email"]').attr("content"),type:"error",confirmButtonColor:"#4db6ac"}):422===t.status?swal({title:"Submission Error",text:"Please correct before trying again. <br><br>"+errorsJSONToHTML(t),type:"error",html:!0,confirmButtonColor:"#4db6ac"}):swal({title:"Oops!",text:"Something went wrong. If problem persists, please send an email to "+$('meta[name="admin-email"]').attr("content"),type:"error",confirmButtonColor:"#4db6ac"})},window.errorsJSONToHTML=function(t){var e="";for(error in t.responseJSON)e+='<div class="sa-error-container show"> <div class="icon">!</div> <p>'+t.responseJSON[error]+"</p></div>";return e}},WRGp:function(t,e,r){window.$=window.jQuery=r("7t+N"),window.Vue=r("I3G/");var o=$('meta[name="csrf-token"]');o&&$.ajaxSetup({headers:{"X-CSRF-TOKEN":o.attr("content")}}),r("0lrd"),r("z3Aj")},"sV/x":function(t,e,r){r("WRGp"),r("89Mp")}},[0]);