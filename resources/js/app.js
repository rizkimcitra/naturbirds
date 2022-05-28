require("./bootstrap");

const getOne = (element = "") => document.querySelector(element);
const getAll = (element = "") => document.querySelectorAll(element);

const state = {
    drawerIsOpen: false,
};

/** @type {HTMLButtonElement} */
const DRAWER_BUTTON = getOne("#drawer-btn");
/** @type {HTMLButtonElement} */
const DRAWER_BUTTON_CLOSE = getOne("#drawer-btn-close");
const DRAWER = getOne("#drawer");

const handleDrawer = () => {
    state.drawerIsOpen = !state.drawerIsOpen;
    if (state.drawerIsOpen) {
        DRAWER.classList.remove("opacity-0", "translate-x-96");
    } else {
        DRAWER.classList.add("opacity-0", "translate-x-96");
    }
};

DRAWER_BUTTON.addEventListener("click", handleDrawer);

DRAWER_BUTTON_CLOSE.addEventListener("click", handleDrawer);
