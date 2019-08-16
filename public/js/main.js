(function(){

'use strict';

var remove = document.querySelector('.remove-thread');
if (remove) {
  remove.addEventListener('click', function (e) {
    e.preventDefault;
    var threadId = this.dataset.id;
    if (confirm('削除しますか？')) {
      
      document.getElementById(threadId).submit();
    }
  });

}

var logout = document.querySelector('#logoutLabel');
console.log('ok');

if (logout) {
  
  logout.addEventListener('click', function (e) {
    e.preventDefault;
    if (confirm('ログアウトしますか？')) {
      
      document.getElementById('logout').submit();
    }
  });
}

})();