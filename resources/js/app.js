import './bootstrap';

import Alpine from 'alpinejs';

import * as bootstrap from 'bootstrap';

window.Alpine = Alpine;

Alpine.start();

let parentguardian = document.getElementsByName("parentguardian");
if (parentguardian) {
    parentguardian.forEach(item => {
        item.addEventListener("change", toggleSingleParent);
    });
}
function toggleSingleParent(ev) {
    if (ev.target.value == 'parent') {
        document.getElementById("singleparent").classList.remove('d-none');
    } else if (ev.target.value == 'guardian') {
        document.getElementById("singleparent").classList.add('d-none');
    }
    clearSingleParent();
    clearSingleWho();
    //console.log(ev.target.value)
}


let singleparent = document.getElementsByName("singleparent");
if (singleparent) {
    singleparent.forEach(item => {
        item.addEventListener("change", toggleSingleWho);
    });
}

function toggleSingleWho(ev) {
    if (ev.target.value == 'Yes') {
        document.getElementById("singlewho").classList.remove('d-none');
    } else if (ev.target.value == 'No') {
        document.getElementById("singlewho").classList.add('d-none');
    }
    clearSingleWho();
}

function clearSingleParent() {
    let singleparent = document.getElementsByName("singleparent");
    if (singleparent) {
        singleparent.forEach(item => {
            if (item.checked) {
                item.checked = false;
                document.getElementById("singleparent").classList.add('d-none');
            }
        });

    }
}

function clearSingleWho() {
    let singlewho = document.getElementsByName("singlewho");
    if (singlewho) {
        singlewho.forEach(item => {
            if (item.checked) {
                item.checked = false;
                document.getElementById("singlewho").classList.add('d-none');
            }
        });

    }
}

autoShow();
function autoShow() {
    let parentguardian = document.getElementsByName("parentguardian");
    if (parentguardian) {
        parentguardian.forEach(item => {
            if (item.checked) {
                if (item.value == 'parent') {
                    document.getElementById("singleparent").classList.remove('d-none')
                }
            }
        });
    }
    let singleparent = document.getElementsByName("singleparent");
    if (singleparent) {
        singleparent.forEach(item => {
            if (item.checked) {
                if (item.value == 'Yes') {
                    document.getElementById("singlewho").classList.remove('d-none')
                }
            }
        });

    }
}


let sidebarElm = document.getElementById("sidebar-toggle");
if (sidebarElm) { sidebarElm.onclick = function () { toggleSidebar() }; }

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

