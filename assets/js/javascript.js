let isSubMenuOpen = false;
let ul1OriginalContents = null;

function toggleSubMenu() {
  const ul1 = document.querySelector("#ul-1");
  const ul2 = document.getElementById("ul-2");

  if (!isSubMenuOpen) {
    // Salvar o conteúdo original da ul-1 e mover os itens para a ul-2 no submenu
    ul1OriginalContents = Array.from(ul1.children);
    ul1OriginalContents.forEach(function (item) {
      ul2.appendChild(item);
    });
    isSubMenuOpen = true;
  } else {
    // Reverter para o estado original da ul-1
    ul1OriginalContents.forEach(function (item) {
      ul1.appendChild(item);
    });
    isSubMenuOpen = false;
  }
}