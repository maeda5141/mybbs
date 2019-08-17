$(function () {

  if ($('.remove-thread')) {
    $('.remove-thread').on('click', function (e) {
      e.preventDefault;
      var threadId = $(this).data('id');
      if (confirm('削除しますか？')) {
        
        $('#' + threadId).submit();
      }
    });
  }
  
  if ($('#logoutLabel')) {
    $('#logoutLabel').on('click', function (e) {
      e.preventDefault;
      if (confirm('ログアウトしますか？')) {
        
        $('#logout').submit();
      }
    });
  }
});
