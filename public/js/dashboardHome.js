const sideLinks = document.querySelectorAll(
    ".sidebar .side-menu li a:not(.logout)"
);

function setActiveLink() {
    const path = window.location.pathname;
    sideLinks.forEach((link) => {
        const li = link.parentElement;
        if (link.getAttribute("href") === path) {
            li.classList.add("active");
        } else {
            li.classList.remove("active");
        }
    });
}

sideLinks.forEach((item) => {
    const li = item.parentElement;
    item.addEventListener("click", () => {
        sideLinks.forEach((i) => {
            i.parentElement.classList.remove("active");
        });
        li.classList.add("active");
        localStorage.setItem("activeLink", item.getAttribute("href"));
    });
});

// Set active link on page load based on URL
setActiveLink();

// Check localStorage for active link
const activeLink = localStorage.getItem("activeLink");
if (activeLink) {
    sideLinks.forEach((link) => {
        if (link.getAttribute("href") === activeLink) {
            link.parentElement.classList.add("active");
        }
    });
}

const menuBar = document.querySelector(".content nav .bx.bx-menu");
const sideBar = document.querySelector(".sidebar");

menuBar.addEventListener("click", () => {
    sideBar.classList.toggle("close");
});

const searchBtn = document.querySelector(
    ".content nav form .form-input button"
);
const searchBtnIcon = document.querySelector(
    ".content nav form .form-input button .bx"
);
const searchForm = document.querySelector(".content nav form");

searchBtn.addEventListener("click", function (e) {
    if (window.innerWidth < 576) {
        e.preventDefault();
        searchForm.classList.toggle("show");
        if (searchForm.classList.contains("show")) {
            searchBtnIcon.classList.replace("bx-search", "bx-x");
        } else {
            searchBtnIcon.classList.replace("bx-x", "bx-search");
        }
    }
});

window.addEventListener("resize", () => {
    if (window.innerWidth < 768) {
        sideBar.classList.add("close");
    } else {
        sideBar.classList.remove("close");
    }
    if (window.innerWidth > 576) {
        searchBtnIcon.classList.replace("bx-x", "bx-search");
        searchForm.classList.remove("show");
    }
});

const toggler = document.getElementById("theme-toggle");

toggler.addEventListener("change", function () {
    if (this.checked) {
        document.body.classList.add("dark");
    } else {
        document.body.classList.remove("dark");
    }
});
