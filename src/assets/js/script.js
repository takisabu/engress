// ドロワー
jQuery('#js-hamburger').click(function(){
  if(jQuery(this).attr('aria-expanded') == 'false') {
    jQuery(this).attr('aria-expanded', true);
  } else {
    jQuery(this).attr('aria-expanded', false);
  }
  jQuery('#js-header').toggleClass('is-drawer-active');
});


// QA button
jQuery('.js-qa-btn,.js-qa-q').click(function(){
  jQuery(this).parent().toggleClass('is-opened');
  jQuery(this).siblings('.p-qa__a').slideDown();
});


// ScrollHint
new ScrollHint('.js-scrollable', {
  scrollHintIconAppendClass: 'scroll-hint-icon-white',
  i18n: {
    scrollable: 'スクロールできます'
  }
});