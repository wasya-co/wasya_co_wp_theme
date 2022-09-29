
document.addEventListener("DOMContentLoaded", function(event) {
  $ = jQuery


  window.onscroll = function() {
    stickyHeader()
  }
  stickyHeader()

})

/*
 * From: https://www.w3schools.com/howto/howto_js_sticky_header.asp
**/
function stickyHeader() {
  // // @TODO: re-add. _vp_ 2022-09-08
  // if ($("body.page-template-page_stuck_header").length > 0) { return; }

  var className = "wco-sticky-header";

  jQuery('.site-header-wrapper').each(function() {
    if (window.pageYOffset > this.offsetTop + 10) { // @TODO: get the pixels right _vp_ 2022-09-27
      this.classList.add(className);
    } else {
      this.classList.remove(className);
    }
  })
}

