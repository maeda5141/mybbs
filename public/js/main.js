(function(){

'use strict';

var remove = document.querySelector('.remove-thread');
if (!remove) {
  return;
}
remove.addEventListener('click', function (e) {
  e.preventDefault;
  var threadId = this.dataset.id;
  if (confirm('削除しますか？')) {
    
    document.getElementById(threadId).submit();
  }
});

})();