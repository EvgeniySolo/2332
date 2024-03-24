const toggleBtn = document.querySelector(".toggle_btn");
const toggleBtnIcon = document.querySelector(".toggle_btn i");
const dropDownMenu = document.querySelector(".dropdown_menu");

toggleBtn.onclick = function () {
  dropDownMenu.classList.toggle("open");
  const isOpen = dropDownMenu.classList.contains('open')

  toggleBtnIcon.classList = isOpen
  ? 'fa-solid fa-xmark'
  : 'fa-solid fa-bars'
}


function setCursorPosition(pos, e) {
  if (e.setSelectionRange) e.setSelectionRange(pos, pos);
  else if (e.createTextRange) {
    var range = e.createTextRange();
    range.collapse(true);
    range.moveEnd("character", pos);
    range.moveStart("character", pos);
    range.select()
  }
}

function mask(e) {
  //console.log('mask',e);
  var matrix = this.placeholder,// .defaultValue
      i = 0,
      def = matrix.replace(/\D/g, ""),
      val = this.value.replace(/\D/g, "");
  def.length >= val.length && (val = def);
  matrix = matrix.replace(/[_\d]/g, function(a) {
    return val.charAt(i++) || "_"
  });
  this.value = matrix;
  i = matrix.lastIndexOf(val.substr(-1));
  i < matrix.length && matrix != this.placeholder ? i++ : i = matrix.indexOf("_");
  setCursorPosition(i, this)
}
window.addEventListener("DOMContentLoaded", function() {
  var input = document.querySelector("#online_phone");
  input.addEventListener("input", mask, false);
  setCursorPosition(3, input);
  document.getElementById("online_phone").style.color = '#8b8b8b';
  
});