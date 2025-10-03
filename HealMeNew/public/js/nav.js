/* Menu Toggle */
function toggleMenu() {
  const sidebar = document.getElementById("sidebar");
  if (sidebar.style.width === "250px") {
    sidebar.style.width = "0"; // nutup
  } else {
    sidebar.style.width = "250px"; // buka
  }
}
