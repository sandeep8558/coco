import './bootstrap';

import Alpine from 'alpinejs';

import * as bootstrap from 'bootstrap';

window.Alpine = Alpine;

Alpine.start();

document.getElementById("sidebar-toggle").onclick = function () { toggleSidebar() };

function toggleSidebar() {
    let sidebar = document.getElementById("sidebar");
    let sidebar_content = document.getElementById("sidebar_content");
    let isOpen = sidebar.classList.contains('sidebar-open');

    if (isOpen) {
        sidebar.classList.remove('sidebar-open');
        sidebar_content.classList.remove('sidebar-content-open');
        sidebar.classList.add('sidebar-close');
        sidebar_content.classList.add('sidebar-content-close');
    } else {
        sidebar.classList.remove('sidebar-close');
        sidebar_content.classList.remove('sidebar-content-close');
        sidebar.classList.add('sidebar-open');
        sidebar_content.classList.add('sidebar-content-open');
    }
}