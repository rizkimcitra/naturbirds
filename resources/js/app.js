require("./bootstrap");

const getOne = (element = "") => document.querySelector(element);
const getAll = (element = "") => document.querySelectorAll(element);

const state = {
    drawerIsOpen: false,
    videoIsOpen: false,
};

/** @type {HTMLButtonElement} */
const DRAWER_BUTTON = getOne("#drawer-btn");
/** @type {HTMLButtonElement} */
const DRAWER_BUTTON_CLOSE = getOne("#drawer-btn-close");

/**@type {HTMLDivElement} */
const VIDEO = getOne("#video");

/**@type {HTMLButtonElement} */
const VIDEO_BUTTON = getOne("#show-video");

const DRAWER = getOne("#drawer");

/**@type {HTMLIFrameElement} */
const iframe = getOne("#iframe");

const handleDrawer = () => {
    state.drawerIsOpen = !state.drawerIsOpen;
    if (state.drawerIsOpen) {
        DRAWER.classList.remove("opacity-0", "translate-x-96");
    } else {
        DRAWER.classList.add("opacity-0", "translate-x-96");
    }
};

const handleVideo = () => {
    if (!state.videoIsOpen) {
        document.documentElement.classList.toggle("overflow-y-hidden");
    }

    if (!state.videoIsOpen && iframe.src) {
        const src = iframe.src;
        iframe.src = src;
    }

    VIDEO.classList.toggle("hidden");
    VIDEO.classList.toggle("flex");

    setTimeout(() => {
        VIDEO.classList.toggle("scale-0");
    }, 200);
};

DRAWER_BUTTON?.addEventListener("click", handleDrawer);

DRAWER_BUTTON_CLOSE?.addEventListener("click", handleDrawer);

VIDEO_BUTTON?.addEventListener("click", handleVideo);

VIDEO.addEventListener("click", handleVideo);
