CRM.$('document').ready(function () {
  Mousetrap.bind('alt+/', function () {
    CRM.$('#quick-actions-wrapper').toggleClass('hidden');
    CRM.$('#quick-actions #search-box input').focus();
  });
});

