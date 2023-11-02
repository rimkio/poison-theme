const PoisionProductTab = () => {
   const __tab_wrap = $('.home-our-product__cat');
   if (!__tab_wrap.length) return;

   $(document).on("click", ".home-our-product__cat-tab__item", function () {
      $(this).parent().find('.home-our-product__cat-tab__item').removeClass('active');
      $(this).addClass('active');
      let ID = $(this).data('id');
      let __tab_content = $(this).parents(__tab_wrap).find('.home-our-product__cat-tabcontent');
      let __tab_content_active = $(this).parents(__tab_wrap).find(`[data-id=${ID}]`);
      __tab_content.removeClass('active');
      __tab_content_active.addClass('active');
      __tab_content.find('.home-our-product__cat-tabcontent__item').removeClass('aos-animate');
      setTimeout(function() {
         __tab_content_active.find('.home-our-product__cat-tabcontent__item').addClass('aos-animate')
      }, 100);
   });
}

PoisionProductTab();