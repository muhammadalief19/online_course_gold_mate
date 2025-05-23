/*! For license information please see app.js.LICENSE.txt */
(() => {
    var e,
        t = {
            465: (e, t, n) => {
                "use strict";
                var i = n(508);
                n.n(i)().replace(), n(44), n(797);
            },
            44: (e, t, n) => {
                "use strict";
                n.r(t), n.d(t, { setTheme: () => a, toggleDarkTheme: () => l });
                var i = "theme",
                    o = /\btheme-[a-z0-9]+\b/g,
                    r = document.getElementById("toggle-dark");
                function l() {
                    a(
                        document.body.classList.contains("theme-dark")
                            ? "theme-light"
                            : "theme-dark"
                    );
                }
                function a(e) {
                    var t =
                        arguments.length > 1 &&
                        void 0 !== arguments[1] &&
                        arguments[1];
                    (document.body.className = document.body.className.replace(
                        o,
                        ""
                    )),
                        document.body.classList.add(e),
                        r && (r.checked = "theme-dark" == e),
                        t || localStorage.setItem(i, e);
                }
                function s() {
                    var e = localStorage.getItem(i);
                    if (e) return a(e);
                    if (window.matchMedia) {
                        var t = window.matchMedia(
                            "(prefers-color-scheme: dark)"
                        );
                        return (
                            t.addEventListener("change", function (e) {
                                return a(
                                    e.matches ? "theme-dark" : "theme-light",
                                    !0
                                );
                            }),
                            a(t.matches ? "theme-dark" : "theme-light", !0)
                        );
                    }
                }
                r &&
                    r.addEventListener("input", function (e) {
                        a(e.target.checked ? "theme-dark" : "theme-light");
                    }),
                    "loading" === document.readyState
                        ? window.addEventListener("DOMContentLoaded", s)
                        : s();
            },
            750: () => {
                function e(e, t) {
                    if (!(e instanceof t))
                        throw new TypeError(
                            "Cannot call a class as a function"
                        );
                }
                function t(e, t) {
                    for (var n = 0; n < t.length; n++) {
                        var i = t[n];
                        (i.enumerable = i.enumerable || !1),
                            (i.configurable = !0),
                            "value" in i && (i.writable = !0),
                            Object.defineProperty(e, i.key, i);
                    }
                }
                function n(e, t, n, i) {
                    void 0 === t && (t = 400),
                        void 0 === i && (i = !1),
                        (e.style.overflow = "hidden"),
                        i && (e.style.display = "block");
                    var o,
                        r = window.getComputedStyle(e),
                        l = parseFloat(r.getPropertyValue("height")),
                        a = parseFloat(r.getPropertyValue("padding-top")),
                        s = parseFloat(r.getPropertyValue("padding-bottom")),
                        c = parseFloat(r.getPropertyValue("margin-top")),
                        p = parseFloat(r.getPropertyValue("margin-bottom")),
                        d = l / t,
                        h = a / t,
                        u = s / t,
                        y = c / t,
                        f = p / t;
                    window.requestAnimationFrame(function r(x) {
                        void 0 === o && (o = x);
                        var m = x - o;
                        i
                            ? ((e.style.height = d * m + "px"),
                              (e.style.paddingTop = h * m + "px"),
                              (e.style.paddingBottom = u * m + "px"),
                              (e.style.marginTop = y * m + "px"),
                              (e.style.marginBottom = f * m + "px"))
                            : ((e.style.height = l - d * m + "px"),
                              (e.style.paddingTop = a - h * m + "px"),
                              (e.style.paddingBottom = s - u * m + "px"),
                              (e.style.marginTop = c - y * m + "px"),
                              (e.style.marginBottom = p - f * m + "px")),
                            m >= t
                                ? ((e.style.height = ""),
                                  (e.style.paddingTop = ""),
                                  (e.style.paddingBottom = ""),
                                  (e.style.marginTop = ""),
                                  (e.style.marginBottom = ""),
                                  (e.style.overflow = ""),
                                  i || (e.style.display = "none"),
                                  "function" == typeof n && n())
                                : window.requestAnimationFrame(r);
                    });
                }
                var i = (function () {
                        function i(t) {
                            var n =
                                arguments.length > 1 && void 0 !== arguments[1]
                                    ? arguments[1]
                                    : {};
                            e(this, i),
                                (this.sidebarEL =
                                    t instanceof HTMLElement
                                        ? t
                                        : document.querySelector(t)),
                                (this.options = n),
                                this.init();
                        }
                        var o, r, l;
                        return (
                            (o = i),
                            (r = [
                                {
                                    key: "init",
                                    value: function () {
                                        var e = this;
                                        document
                                            .querySelectorAll(".burger-btn")
                                            .forEach(function (t) {
                                                return t.addEventListener(
                                                    "click",
                                                    e.toggle.bind(e)
                                                );
                                            }),
                                            document
                                                .querySelectorAll(
                                                    ".sidebar-hide"
                                                )
                                                .forEach(function (t) {
                                                    return t.addEventListener(
                                                        "click",
                                                        e.toggle.bind(e)
                                                    );
                                                }),
                                            window.addEventListener(
                                                "resize",
                                                this.onResize.bind(this)
                                            );
                                        for (
                                            var t = document.querySelectorAll(
                                                    ".sidebar-item.has-sub"
                                                ),
                                                i = function () {
                                                    var i = t[o];
                                                    t[o]
                                                        .querySelector(
                                                            ".sidebar-link"
                                                        )
                                                        .addEventListener(
                                                            "click",
                                                            function (t) {
                                                                t.preventDefault();
                                                                var o,
                                                                    r,
                                                                    l,
                                                                    a =
                                                                        i.querySelector(
                                                                            ".submenu"
                                                                        );
                                                                a.classList.contains(
                                                                    "active"
                                                                ) &&
                                                                    (a.style.display =
                                                                        "block"),
                                                                    "none" ==
                                                                    a.style
                                                                        .display
                                                                        ? a.classList.add(
                                                                              "active"
                                                                          )
                                                                        : a.classList.remove(
                                                                              "active"
                                                                          ),
                                                                    (r = 300),
                                                                    (l =
                                                                        function () {
                                                                            return e.forceElementVisibility(
                                                                                i
                                                                            );
                                                                        }),
                                                                    0 ===
                                                                    (o = a)
                                                                        .clientHeight
                                                                        ? n(
                                                                              o,
                                                                              r,
                                                                              l,
                                                                              !0
                                                                          )
                                                                        : n(
                                                                              o,
                                                                              r,
                                                                              l
                                                                          );
                                                            }
                                                        );
                                                },
                                                o = 0;
                                            o < t.length;
                                            o++
                                        )
                                            i();
                                        if (
                                            "function" ==
                                            typeof PerfectScrollbar
                                        ) {
                                            var r =
                                                document.querySelector(
                                                    ".sidebar-wrapper"
                                                );
                                            new PerfectScrollbar(r, {
                                                wheelPropagation: !1,
                                            });
                                        }
                                        setTimeout(function () {
                                            var e;
                                            return null ===
                                                (e = document.querySelector(
                                                    ".sidebar-item.active"
                                                )) || void 0 === e
                                                ? void 0
                                                : e.scrollIntoView(!1);
                                        }, 100),
                                            this.onFirstLoad();
                                    },
                                },
                                {
                                    key: "onFirstLoad",
                                    value: function () {
                                        window.innerWidth < 1200 &&
                                            this.sidebarEL.classList.remove(
                                                "active"
                                            );
                                    },
                                },
                                {
                                    key: "onResize",
                                    value: function () {
                                        window.innerWidth < 1200
                                            ? this.sidebarEL.classList.remove(
                                                  "active"
                                              )
                                            : this.sidebarEL.classList.add(
                                                  "active"
                                              ),
                                            this.deleteBackdrop(),
                                            this.toggleOverflowBody(!0);
                                    },
                                },
                                {
                                    key: "toggle",
                                    value: function () {
                                        this.sidebarEL.classList.contains(
                                            "active"
                                        )
                                            ? this.hide()
                                            : this.show();
                                    },
                                },
                                {
                                    key: "show",
                                    value: function () {
                                        this.sidebarEL.classList.add("active"),
                                            this.createBackdrop(),
                                            this.toggleOverflowBody();
                                    },
                                },
                                {
                                    key: "hide",
                                    value: function () {
                                        this.sidebarEL.classList.remove(
                                            "active"
                                        ),
                                            this.deleteBackdrop(),
                                            this.toggleOverflowBody();
                                    },
                                },
                                {
                                    key: "createBackdrop",
                                    value: function () {
                                        if (!(window.innerWidth > 1200)) {
                                            this.deleteBackdrop();
                                            var e =
                                                document.createElement("div");
                                            e.classList.add("sidebar-backdrop"),
                                                e.addEventListener(
                                                    "click",
                                                    this.hide.bind(this)
                                                ),
                                                document.body.appendChild(e);
                                        }
                                    },
                                },
                                {
                                    key: "deleteBackdrop",
                                    value: function () {
                                        var e =
                                            document.querySelector(
                                                ".sidebar-backdrop"
                                            );
                                        e && e.remove();
                                    },
                                },
                                {
                                    key: "toggleOverflowBody",
                                    value: function (e) {
                                        var t =
                                                this.sidebarEL.classList.contains(
                                                    "active"
                                                ),
                                            n = document.querySelector("body");
                                        n.style.overflowY =
                                            void 0 === e
                                                ? t
                                                    ? "hidden"
                                                    : "auto"
                                                : e
                                                ? "auto"
                                                : "hidden";
                                    },
                                },
                                {
                                    key: "isElementInViewport",
                                    value: function (e) {
                                        var t = e.getBoundingClientRect();
                                        return (
                                            t.top >= 0 &&
                                            t.left >= 0 &&
                                            t.bottom <=
                                                (window.innerHeight ||
                                                    document.documentElement
                                                        .clientHeight) &&
                                            t.right <=
                                                (window.innerWidth ||
                                                    document.documentElement
                                                        .clientWidth)
                                        );
                                    },
                                },
                                {
                                    key: "forceElementVisibility",
                                    value: function (e) {
                                        this.isElementInViewport(e) ||
                                            e.scrollIntoView(!1);
                                    },
                                },
                            ]) && t(o.prototype, r),
                            l && t(o, l),
                            Object.defineProperty(o, "prototype", {
                                writable: !1,
                            }),
                            i
                        );
                    })(),
                    o = document.getElementById("sidebar");
                o && (window.sidebar = new i(o));
            },
            797: (e, t, n) => {
                "use strict";
                n.r(t),
                    n.d(t, { Sidebar: () => i }),
                    (window.PerfectScrollbar = n(225));
                var i = n(750);
            },
            508: function (e) {
                var t;
                "undefined" != typeof self && self,
                    (t = function () {
                        return (function (e) {
                            var t = {};
                            function n(i) {
                                if (t[i]) return t[i].exports;
                                var o = (t[i] = { i, l: !1, exports: {} });
                                return (
                                    e[i].call(o.exports, o, o.exports, n),
                                    (o.l = !0),
                                    o.exports
                                );
                            }
                            return (
                                (n.m = e),
                                (n.c = t),
                                (n.d = function (e, t, i) {
                                    n.o(e, t) ||
                                        Object.defineProperty(e, t, {
                                            configurable: !1,
                                            enumerable: !0,
                                            get: i,
                                        });
                                }),
                                (n.r = function (e) {
                                    Object.defineProperty(e, "__esModule", {
                                        value: !0,
                                    });
                                }),
                                (n.n = function (e) {
                                    var t =
                                        e && e.__esModule
                                            ? function () {
                                                  return e.default;
                                              }
                                            : function () {
                                                  return e;
                                              };
                                    return n.d(t, "a", t), t;
                                }),
                                (n.o = function (e, t) {
                                    return Object.prototype.hasOwnProperty.call(
                                        e,
                                        t
                                    );
                                }),
                                (n.p = ""),
                                n((n.s = 0))
                            );
                        })({
                            "./dist/icons.json": function (e) {
                                e.exports = {
                                    activity:
                                        '<polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>',
                                    airplay:
                                        '<path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon>',
                                    "alert-circle":
                                        '<circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line>',
                                    "alert-octagon":
                                        '<polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line>',
                                    "alert-triangle":
                                        '<path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line>',
                                    "align-center":
                                        '<line x1="18" y1="10" x2="6" y2="10"></line><line x1="21" y1="6" x2="3" y2="6"></line><line x1="21" y1="14" x2="3" y2="14"></line><line x1="18" y1="18" x2="6" y2="18"></line>',
                                    "align-justify":
                                        '<line x1="21" y1="10" x2="3" y2="10"></line><line x1="21" y1="6" x2="3" y2="6"></line><line x1="21" y1="14" x2="3" y2="14"></line><line x1="21" y1="18" x2="3" y2="18"></line>',
                                    "align-left":
                                        '<line x1="17" y1="10" x2="3" y2="10"></line><line x1="21" y1="6" x2="3" y2="6"></line><line x1="21" y1="14" x2="3" y2="14"></line><line x1="17" y1="18" x2="3" y2="18"></line>',
                                    "align-right":
                                        '<line x1="21" y1="10" x2="7" y2="10"></line><line x1="21" y1="6" x2="3" y2="6"></line><line x1="21" y1="14" x2="3" y2="14"></line><line x1="21" y1="18" x2="7" y2="18"></line>',
                                    anchor: '<circle cx="12" cy="5" r="3"></circle><line x1="12" y1="22" x2="12" y2="8"></line><path d="M5 12H2a10 10 0 0 0 20 0h-3"></path>',
                                    aperture:
                                        '<circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line>',
                                    archive:
                                        '<polyline points="21 8 21 21 3 21 3 8"></polyline><rect x="1" y="3" width="22" height="5"></rect><line x1="10" y1="12" x2="14" y2="12"></line>',
                                    "arrow-down-circle":
                                        '<circle cx="12" cy="12" r="10"></circle><polyline points="8 12 12 16 16 12"></polyline><line x1="12" y1="8" x2="12" y2="16"></line>',
                                    "arrow-down-left":
                                        '<line x1="17" y1="7" x2="7" y2="17"></line><polyline points="17 17 7 17 7 7"></polyline>',
                                    "arrow-down-right":
                                        '<line x1="7" y1="7" x2="17" y2="17"></line><polyline points="17 7 17 17 7 17"></polyline>',
                                    "arrow-down":
                                        '<line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline>',
                                    "arrow-left-circle":
                                        '<circle cx="12" cy="12" r="10"></circle><polyline points="12 8 8 12 12 16"></polyline><line x1="16" y1="12" x2="8" y2="12"></line>',
                                    "arrow-left":
                                        '<line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline>',
                                    "arrow-right-circle":
                                        '<circle cx="12" cy="12" r="10"></circle><polyline points="12 16 16 12 12 8"></polyline><line x1="8" y1="12" x2="16" y2="12"></line>',
                                    "arrow-right":
                                        '<line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline>',
                                    "arrow-up-circle":
                                        '<circle cx="12" cy="12" r="10"></circle><polyline points="16 12 12 8 8 12"></polyline><line x1="12" y1="16" x2="12" y2="8"></line>',
                                    "arrow-up-left":
                                        '<line x1="17" y1="17" x2="7" y2="7"></line><polyline points="7 17 7 7 17 7"></polyline>',
                                    "arrow-up-right":
                                        '<line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline>',
                                    "arrow-up":
                                        '<line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline>',
                                    "at-sign":
                                        '<circle cx="12" cy="12" r="4"></circle><path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>',
                                    award: '<circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline>',
                                    "bar-chart-2":
                                        '<line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line>',
                                    "bar-chart":
                                        '<line x1="12" y1="20" x2="12" y2="10"></line><line x1="18" y1="20" x2="18" y2="4"></line><line x1="6" y1="20" x2="6" y2="16"></line>',
                                    "battery-charging":
                                        '<path d="M5 18H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h3.19M15 6h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-3.19"></path><line x1="23" y1="13" x2="23" y2="11"></line><polyline points="11 6 7 12 13 12 9 18"></polyline>',
                                    battery:
                                        '<rect x="1" y="6" width="18" height="12" rx="2" ry="2"></rect><line x1="23" y1="13" x2="23" y2="11"></line>',
                                    "bell-off":
                                        '<path d="M13.73 21a2 2 0 0 1-3.46 0"></path><path d="M18.63 13A17.89 17.89 0 0 1 18 8"></path><path d="M6.26 6.26A5.86 5.86 0 0 0 6 8c0 7-3 9-3 9h14"></path><path d="M18 8a6 6 0 0 0-9.33-5"></path><line x1="1" y1="1" x2="23" y2="23"></line>',
                                    bell: '<path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path>',
                                    bluetooth:
                                        '<polyline points="6.5 6.5 17.5 17.5 12 23 12 1 17.5 6.5 6.5 17.5"></polyline>',
                                    bold: '<path d="M6 4h8a4 4 0 0 1 4 4 4 4 0 0 1-4 4H6z"></path><path d="M6 12h9a4 4 0 0 1 4 4 4 4 0 0 1-4 4H6z"></path>',
                                    "book-open":
                                        '<path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>',
                                    book: '<path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>',
                                    bookmark:
                                        '<path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>',
                                    box: '<path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line>',
                                    briefcase:
                                        '<rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>',
                                    calendar:
                                        '<rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line>',
                                    "camera-off":
                                        '<line x1="1" y1="1" x2="23" y2="23"></line><path d="M21 21H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h3m3-3h6l2 3h4a2 2 0 0 1 2 2v9.34m-7.72-2.06a4 4 0 1 1-5.56-5.56"></path>',
                                    camera: '<path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle>',
                                    cast: '<path d="M2 16.1A5 5 0 0 1 5.9 20M2 12.05A9 9 0 0 1 9.95 20M2 8V6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-6"></path><line x1="2" y1="20" x2="2.01" y2="20"></line>',
                                    "check-circle":
                                        '<path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline>',
                                    "check-square":
                                        '<polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>',
                                    check: '<polyline points="20 6 9 17 4 12"></polyline>',
                                    "chevron-down":
                                        '<polyline points="6 9 12 15 18 9"></polyline>',
                                    "chevron-left":
                                        '<polyline points="15 18 9 12 15 6"></polyline>',
                                    "chevron-right":
                                        '<polyline points="9 18 15 12 9 6"></polyline>',
                                    "chevron-up":
                                        '<polyline points="18 15 12 9 6 15"></polyline>',
                                    "chevrons-down":
                                        '<polyline points="7 13 12 18 17 13"></polyline><polyline points="7 6 12 11 17 6"></polyline>',
                                    "chevrons-left":
                                        '<polyline points="11 17 6 12 11 7"></polyline><polyline points="18 17 13 12 18 7"></polyline>',
                                    "chevrons-right":
                                        '<polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline>',
                                    "chevrons-up":
                                        '<polyline points="17 11 12 6 7 11"></polyline><polyline points="17 18 12 13 7 18"></polyline>',
                                    chrome: '<circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="4"></circle><line x1="21.17" y1="8" x2="12" y2="8"></line><line x1="3.95" y1="6.06" x2="8.54" y2="14"></line><line x1="10.88" y1="21.94" x2="15.46" y2="14"></line>',
                                    circle: '<circle cx="12" cy="12" r="10"></circle>',
                                    clipboard:
                                        '<path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>',
                                    clock: '<circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline>',
                                    "cloud-drizzle":
                                        '<line x1="8" y1="19" x2="8" y2="21"></line><line x1="8" y1="13" x2="8" y2="15"></line><line x1="16" y1="19" x2="16" y2="21"></line><line x1="16" y1="13" x2="16" y2="15"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="12" y1="15" x2="12" y2="17"></line><path d="M20 16.58A5 5 0 0 0 18 7h-1.26A8 8 0 1 0 4 15.25"></path>',
                                    "cloud-lightning":
                                        '<path d="M19 16.9A5 5 0 0 0 18 7h-1.26a8 8 0 1 0-11.62 9"></path><polyline points="13 11 9 17 15 17 11 23"></polyline>',
                                    "cloud-off":
                                        '<path d="M22.61 16.95A5 5 0 0 0 18 10h-1.26a8 8 0 0 0-7.05-6M5 5a8 8 0 0 0 4 15h9a5 5 0 0 0 1.7-.3"></path><line x1="1" y1="1" x2="23" y2="23"></line>',
                                    "cloud-rain":
                                        '<line x1="16" y1="13" x2="16" y2="21"></line><line x1="8" y1="13" x2="8" y2="21"></line><line x1="12" y1="15" x2="12" y2="23"></line><path d="M20 16.58A5 5 0 0 0 18 7h-1.26A8 8 0 1 0 4 15.25"></path>',
                                    "cloud-snow":
                                        '<path d="M20 17.58A5 5 0 0 0 18 8h-1.26A8 8 0 1 0 4 16.25"></path><line x1="8" y1="16" x2="8.01" y2="16"></line><line x1="8" y1="20" x2="8.01" y2="20"></line><line x1="12" y1="18" x2="12.01" y2="18"></line><line x1="12" y1="22" x2="12.01" y2="22"></line><line x1="16" y1="16" x2="16.01" y2="16"></line><line x1="16" y1="20" x2="16.01" y2="20"></line>',
                                    cloud: '<path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z"></path>',
                                    code: '<polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline>',
                                    codepen:
                                        '<polygon points="12 2 22 8.5 22 15.5 12 22 2 15.5 2 8.5 12 2"></polygon><line x1="12" y1="22" x2="12" y2="15.5"></line><polyline points="22 8.5 12 15.5 2 8.5"></polyline><polyline points="2 15.5 12 8.5 22 15.5"></polyline><line x1="12" y1="2" x2="12" y2="8.5"></line>',
                                    codesandbox:
                                        '<path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="7.5 4.21 12 6.81 16.5 4.21"></polyline><polyline points="7.5 19.79 7.5 14.6 3 12"></polyline><polyline points="21 12 16.5 14.6 16.5 19.79"></polyline><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line>',
                                    coffee: '<path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line>',
                                    columns:
                                        '<path d="M12 3h7a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-7m0-18H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7m0-18v18"></path>',
                                    command:
                                        '<path d="M18 3a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3H6a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3V6a3 3 0 0 0-3-3 3 3 0 0 0-3 3 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 3 3 0 0 0-3-3z"></path>',
                                    compass:
                                        '<circle cx="12" cy="12" r="10"></circle><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon>',
                                    copy: '<rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>',
                                    "corner-down-left":
                                        '<polyline points="9 10 4 15 9 20"></polyline><path d="M20 4v7a4 4 0 0 1-4 4H4"></path>',
                                    "corner-down-right":
                                        '<polyline points="15 10 20 15 15 20"></polyline><path d="M4 4v7a4 4 0 0 0 4 4h12"></path>',
                                    "corner-left-down":
                                        '<polyline points="14 15 9 20 4 15"></polyline><path d="M20 4h-7a4 4 0 0 0-4 4v12"></path>',
                                    "corner-left-up":
                                        '<polyline points="14 9 9 4 4 9"></polyline><path d="M20 20h-7a4 4 0 0 1-4-4V4"></path>',
                                    "corner-right-down":
                                        '<polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>',
                                    "corner-right-up":
                                        '<polyline points="10 9 15 4 20 9"></polyline><path d="M4 20h7a4 4 0 0 0 4-4V4"></path>',
                                    "corner-up-left":
                                        '<polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path>',
                                    "corner-up-right":
                                        '<polyline points="15 14 20 9 15 4"></polyline><path d="M4 20v-7a4 4 0 0 1 4-4h12"></path>',
                                    cpu: '<rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line>',
                                    "credit-card":
                                        '<rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line>',
                                    crop: '<path d="M6.13 1L6 16a2 2 0 0 0 2 2h15"></path><path d="M1 6.13L16 6a2 2 0 0 1 2 2v15"></path>',
                                    crosshair:
                                        '<circle cx="12" cy="12" r="10"></circle><line x1="22" y1="12" x2="18" y2="12"></line><line x1="6" y1="12" x2="2" y2="12"></line><line x1="12" y1="6" x2="12" y2="2"></line><line x1="12" y1="22" x2="12" y2="18"></line>',
                                    database:
                                        '<ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>',
                                    delete: '<path d="M21 4H8l-7 8 7 8h13a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z"></path><line x1="18" y1="9" x2="12" y2="15"></line><line x1="12" y1="9" x2="18" y2="15"></line>',
                                    disc: '<circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="3"></circle>',
                                    "divide-circle":
                                        '<line x1="8" y1="12" x2="16" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line><line x1="12" y1="8" x2="12" y2="8"></line><circle cx="12" cy="12" r="10"></circle>',
                                    "divide-square":
                                        '<rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="8" y1="12" x2="16" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line><line x1="12" y1="8" x2="12" y2="8"></line>',
                                    divide: '<circle cx="12" cy="6" r="2"></circle><line x1="5" y1="12" x2="19" y2="12"></line><circle cx="12" cy="18" r="2"></circle>',
                                    "dollar-sign":
                                        '<line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>',
                                    "download-cloud":
                                        '<polyline points="8 17 12 21 16 17"></polyline><line x1="12" y1="12" x2="12" y2="21"></line><path d="M20.88 18.09A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.29"></path>',
                                    download:
                                        '<path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line>',
                                    dribbble:
                                        '<circle cx="12" cy="12" r="10"></circle><path d="M8.56 2.75c4.37 6.03 6.02 9.42 8.03 17.72m2.54-15.38c-3.72 4.35-8.94 5.66-16.88 5.85m19.5 1.9c-3.5-.93-6.63-.82-8.94 0-2.58.92-5.01 2.86-7.44 6.32"></path>',
                                    droplet:
                                        '<path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path>',
                                    "edit-2":
                                        '<path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>',
                                    "edit-3":
                                        '<path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>',
                                    edit: '<path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>',
                                    "external-link":
                                        '<path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line>',
                                    "eye-off":
                                        '<path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path><line x1="1" y1="1" x2="23" y2="23"></line>',
                                    eye: '<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle>',
                                    facebook:
                                        '<path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>',
                                    "fast-forward":
                                        '<polygon points="13 19 22 12 13 5 13 19"></polygon><polygon points="2 19 11 12 2 5 2 19"></polygon>',
                                    feather:
                                        '<path d="M20.24 12.24a6 6 0 0 0-8.49-8.49L5 10.5V19h8.5z"></path><line x1="16" y1="8" x2="2" y2="22"></line><line x1="17.5" y1="15" x2="9" y2="15"></line>',
                                    figma: '<path d="M5 5.5A3.5 3.5 0 0 1 8.5 2H12v7H8.5A3.5 3.5 0 0 1 5 5.5z"></path><path d="M12 2h3.5a3.5 3.5 0 1 1 0 7H12V2z"></path><path d="M12 12.5a3.5 3.5 0 1 1 7 0 3.5 3.5 0 1 1-7 0z"></path><path d="M5 19.5A3.5 3.5 0 0 1 8.5 16H12v3.5a3.5 3.5 0 1 1-7 0z"></path><path d="M5 12.5A3.5 3.5 0 0 1 8.5 9H12v7H8.5A3.5 3.5 0 0 1 5 12.5z"></path>',
                                    "file-minus":
                                        '<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="9" y1="15" x2="15" y2="15"></line>',
                                    "file-plus":
                                        '<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="12" y1="18" x2="12" y2="12"></line><line x1="9" y1="15" x2="15" y2="15"></line>',
                                    "file-text":
                                        '<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline>',
                                    file: '<path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline>',
                                    film: '<rect x="2" y="2" width="20" height="20" rx="2.18" ry="2.18"></rect><line x1="7" y1="2" x2="7" y2="22"></line><line x1="17" y1="2" x2="17" y2="22"></line><line x1="2" y1="12" x2="22" y2="12"></line><line x1="2" y1="7" x2="7" y2="7"></line><line x1="2" y1="17" x2="7" y2="17"></line><line x1="17" y1="17" x2="22" y2="17"></line><line x1="17" y1="7" x2="22" y2="7"></line>',
                                    filter: '<polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>',
                                    flag: '<path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path><line x1="4" y1="22" x2="4" y2="15"></line>',
                                    "folder-minus":
                                        '<path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path><line x1="9" y1="14" x2="15" y2="14"></line>',
                                    "folder-plus":
                                        '<path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path><line x1="12" y1="11" x2="12" y2="17"></line><line x1="9" y1="14" x2="15" y2="14"></line>',
                                    folder: '<path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path>',
                                    framer: '<path d="M5 16V9h14V2H5l14 14h-7m-7 0l7 7v-7m-7 0h7"></path>',
                                    frown: '<circle cx="12" cy="12" r="10"></circle><path d="M16 16s-1.5-2-4-2-4 2-4 2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line>',
                                    gift: '<polyline points="20 12 20 22 4 22 4 12"></polyline><rect x="2" y="7" width="20" height="5"></rect><line x1="12" y1="22" x2="12" y2="7"></line><path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path><path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path>',
                                    "git-branch":
                                        '<line x1="6" y1="3" x2="6" y2="15"></line><circle cx="18" cy="6" r="3"></circle><circle cx="6" cy="18" r="3"></circle><path d="M18 9a9 9 0 0 1-9 9"></path>',
                                    "git-commit":
                                        '<circle cx="12" cy="12" r="4"></circle><line x1="1.05" y1="12" x2="7" y2="12"></line><line x1="17.01" y1="12" x2="22.96" y2="12"></line>',
                                    "git-merge":
                                        '<circle cx="18" cy="18" r="3"></circle><circle cx="6" cy="6" r="3"></circle><path d="M6 21V9a9 9 0 0 0 9 9"></path>',
                                    "git-pull-request":
                                        '<circle cx="18" cy="18" r="3"></circle><circle cx="6" cy="6" r="3"></circle><path d="M13 6h3a2 2 0 0 1 2 2v7"></path><line x1="6" y1="9" x2="6" y2="21"></line>',
                                    github: '<path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>',
                                    gitlab: '<path d="M22.65 14.39L12 22.13 1.35 14.39a.84.84 0 0 1-.3-.94l1.22-3.78 2.44-7.51A.42.42 0 0 1 4.82 2a.43.43 0 0 1 .58 0 .42.42 0 0 1 .11.18l2.44 7.49h8.1l2.44-7.51A.42.42 0 0 1 18.6 2a.43.43 0 0 1 .58 0 .42.42 0 0 1 .11.18l2.44 7.51L23 13.45a.84.84 0 0 1-.35.94z"></path>',
                                    globe: '<circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>',
                                    grid: '<rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect>',
                                    "hard-drive":
                                        '<line x1="22" y1="12" x2="2" y2="12"></line><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path><line x1="6" y1="16" x2="6.01" y2="16"></line><line x1="10" y1="16" x2="10.01" y2="16"></line>',
                                    hash: '<line x1="4" y1="9" x2="20" y2="9"></line><line x1="4" y1="15" x2="20" y2="15"></line><line x1="10" y1="3" x2="8" y2="21"></line><line x1="16" y1="3" x2="14" y2="21"></line>',
                                    headphones:
                                        '<path d="M3 18v-6a9 9 0 0 1 18 0v6"></path><path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"></path>',
                                    heart: '<path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>',
                                    "help-circle":
                                        '<circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line>',
                                    hexagon:
                                        '<path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>',
                                    home: '<path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline>',
                                    image: '<rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline>',
                                    inbox: '<polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path>',
                                    info: '<circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line>',
                                    instagram:
                                        '<rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>',
                                    italic: '<line x1="19" y1="4" x2="10" y2="4"></line><line x1="14" y1="20" x2="5" y2="20"></line><line x1="15" y1="4" x2="9" y2="20"></line>',
                                    key: '<path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"></path>',
                                    layers: '<polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline>',
                                    layout: '<rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line>',
                                    "life-buoy":
                                        '<circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="4"></circle><line x1="4.93" y1="4.93" x2="9.17" y2="9.17"></line><line x1="14.83" y1="14.83" x2="19.07" y2="19.07"></line><line x1="14.83" y1="9.17" x2="19.07" y2="4.93"></line><line x1="14.83" y1="9.17" x2="18.36" y2="5.64"></line><line x1="4.93" y1="19.07" x2="9.17" y2="14.83"></line>',
                                    "link-2":
                                        '<path d="M15 7h3a5 5 0 0 1 5 5 5 5 0 0 1-5 5h-3m-6 0H6a5 5 0 0 1-5-5 5 5 0 0 1 5-5h3"></path><line x1="8" y1="12" x2="16" y2="12"></line>',
                                    link: '<path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>',
                                    linkedin:
                                        '<path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle>',
                                    list: '<line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line>',
                                    loader: '<line x1="12" y1="2" x2="12" y2="6"></line><line x1="12" y1="18" x2="12" y2="22"></line><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line><line x1="2" y1="12" x2="6" y2="12"></line><line x1="18" y1="12" x2="22" y2="12"></line><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line>',
                                    lock: '<rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path>',
                                    "log-in":
                                        '<path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path><polyline points="10 17 15 12 10 7"></polyline><line x1="15" y1="12" x2="3" y2="12"></line>',
                                    "log-out":
                                        '<path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line>',
                                    mail: '<path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline>',
                                    "map-pin":
                                        '<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle>',
                                    map: '<polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon><line x1="8" y1="2" x2="8" y2="18"></line><line x1="16" y1="6" x2="16" y2="22"></line>',
                                    "maximize-2":
                                        '<polyline points="15 3 21 3 21 9"></polyline><polyline points="9 21 3 21 3 15"></polyline><line x1="21" y1="3" x2="14" y2="10"></line><line x1="3" y1="21" x2="10" y2="14"></line>',
                                    maximize:
                                        '<path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path>',
                                    meh: '<circle cx="12" cy="12" r="10"></circle><line x1="8" y1="15" x2="16" y2="15"></line><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line>',
                                    menu: '<line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line>',
                                    "message-circle":
                                        '<path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>',
                                    "message-square":
                                        '<path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>',
                                    "mic-off":
                                        '<line x1="1" y1="1" x2="23" y2="23"></line><path d="M9 9v3a3 3 0 0 0 5.12 2.12M15 9.34V4a3 3 0 0 0-5.94-.6"></path><path d="M17 16.95A7 7 0 0 1 5 12v-2m14 0v2a7 7 0 0 1-.11 1.23"></path><line x1="12" y1="19" x2="12" y2="23"></line><line x1="8" y1="23" x2="16" y2="23"></line>',
                                    mic: '<path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"></path><path d="M19 10v2a7 7 0 0 1-14 0v-2"></path><line x1="12" y1="19" x2="12" y2="23"></line><line x1="8" y1="23" x2="16" y2="23"></line>',
                                    "minimize-2":
                                        '<polyline points="4 14 10 14 10 20"></polyline><polyline points="20 10 14 10 14 4"></polyline><line x1="14" y1="10" x2="21" y2="3"></line><line x1="3" y1="21" x2="10" y2="14"></line>',
                                    minimize:
                                        '<path d="M8 3v3a2 2 0 0 1-2 2H3m18 0h-3a2 2 0 0 1-2-2V3m0 18v-3a2 2 0 0 1 2-2h3M3 16h3a2 2 0 0 1 2 2v3"></path>',
                                    "minus-circle":
                                        '<circle cx="12" cy="12" r="10"></circle><line x1="8" y1="12" x2="16" y2="12"></line>',
                                    "minus-square":
                                        '<rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="8" y1="12" x2="16" y2="12"></line>',
                                    minus: '<line x1="5" y1="12" x2="19" y2="12"></line>',
                                    monitor:
                                        '<rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line>',
                                    moon: '<path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>',
                                    "more-horizontal":
                                        '<circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle>',
                                    "more-vertical":
                                        '<circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle>',
                                    "mouse-pointer":
                                        '<path d="M3 3l7.07 16.97 2.51-7.39 7.39-2.51L3 3z"></path><path d="M13 13l6 6"></path>',
                                    move: '<polyline points="5 9 2 12 5 15"></polyline><polyline points="9 5 12 2 15 5"></polyline><polyline points="15 19 12 22 9 19"></polyline><polyline points="19 9 22 12 19 15"></polyline><line x1="2" y1="12" x2="22" y2="12"></line><line x1="12" y1="2" x2="12" y2="22"></line>',
                                    music: '<path d="M9 18V5l12-2v13"></path><circle cx="6" cy="18" r="3"></circle><circle cx="18" cy="16" r="3"></circle>',
                                    "navigation-2":
                                        '<polygon points="12 2 19 21 12 17 5 21 12 2"></polygon>',
                                    navigation:
                                        '<polygon points="3 11 22 2 13 21 11 13 3 11"></polygon>',
                                    octagon:
                                        '<polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>',
                                    package:
                                        '<line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line>',
                                    paperclip:
                                        '<path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"></path>',
                                    "pause-circle":
                                        '<circle cx="12" cy="12" r="10"></circle><line x1="10" y1="15" x2="10" y2="9"></line><line x1="14" y1="15" x2="14" y2="9"></line>',
                                    pause: '<rect x="6" y="4" width="4" height="16"></rect><rect x="14" y="4" width="4" height="16"></rect>',
                                    "pen-tool":
                                        '<path d="M12 19l7-7 3 3-7 7-3-3z"></path><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path><path d="M2 2l7.586 7.586"></path><circle cx="11" cy="11" r="2"></circle>',
                                    percent:
                                        '<line x1="19" y1="5" x2="5" y2="19"></line><circle cx="6.5" cy="6.5" r="2.5"></circle><circle cx="17.5" cy="17.5" r="2.5"></circle>',
                                    "phone-call":
                                        '<path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>',
                                    "phone-forwarded":
                                        '<polyline points="19 1 23 5 19 9"></polyline><line x1="15" y1="5" x2="23" y2="5"></line><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>',
                                    "phone-incoming":
                                        '<polyline points="16 2 16 8 22 8"></polyline><line x1="23" y1="1" x2="16" y2="8"></line><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>',
                                    "phone-missed":
                                        '<line x1="23" y1="1" x2="17" y2="7"></line><line x1="17" y1="1" x2="23" y2="7"></line><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>',
                                    "phone-off":
                                        '<path d="M10.68 13.31a16 16 0 0 0 3.41 2.6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7 2 2 0 0 1 1.72 2v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.42 19.42 0 0 1-3.33-2.67m-2.67-3.34a19.79 19.79 0 0 1-3.07-8.63A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91"></path><line x1="23" y1="1" x2="1" y2="23"></line>',
                                    "phone-outgoing":
                                        '<polyline points="23 7 23 1 17 1"></polyline><line x1="16" y1="8" x2="23" y2="1"></line><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>',
                                    phone: '<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>',
                                    "pie-chart":
                                        '<path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path>',
                                    "play-circle":
                                        '<circle cx="12" cy="12" r="10"></circle><polygon points="10 8 16 12 10 16 10 8"></polygon>',
                                    play: '<polygon points="5 3 19 12 5 21 5 3"></polygon>',
                                    "plus-circle":
                                        '<circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line>',
                                    "plus-square":
                                        '<rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line>',
                                    plus: '<line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line>',
                                    pocket: '<path d="M4 3h16a2 2 0 0 1 2 2v6a10 10 0 0 1-10 10A10 10 0 0 1 2 11V5a2 2 0 0 1 2-2z"></path><polyline points="8 10 12 14 16 10"></polyline>',
                                    power: '<path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path><line x1="12" y1="2" x2="12" y2="12"></line>',
                                    printer:
                                        '<polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect>',
                                    radio: '<circle cx="12" cy="12" r="2"></circle><path d="M16.24 7.76a6 6 0 0 1 0 8.49m-8.48-.01a6 6 0 0 1 0-8.49m11.31-2.82a10 10 0 0 1 0 14.14m-14.14 0a10 10 0 0 1 0-14.14"></path>',
                                    "refresh-ccw":
                                        '<polyline points="1 4 1 10 7 10"></polyline><polyline points="23 20 23 14 17 14"></polyline><path d="M20.49 9A9 9 0 0 0 5.64 5.64L1 10m22 4l-4.64 4.36A9 9 0 0 1 3.51 15"></path>',
                                    "refresh-cw":
                                        '<polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path>',
                                    repeat: '<polyline points="17 1 21 5 17 9"></polyline><path d="M3 11V9a4 4 0 0 1 4-4h14"></path><polyline points="7 23 3 19 7 15"></polyline><path d="M21 13v2a4 4 0 0 1-4 4H3"></path>',
                                    rewind: '<polygon points="11 19 2 12 11 5 11 19"></polygon><polygon points="22 19 13 12 22 5 22 19"></polygon>',
                                    "rotate-ccw":
                                        '<polyline points="1 4 1 10 7 10"></polyline><path d="M3.51 15a9 9 0 1 0 2.13-9.36L1 10"></path>',
                                    "rotate-cw":
                                        '<polyline points="23 4 23 10 17 10"></polyline><path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"></path>',
                                    rss: '<path d="M4 11a9 9 0 0 1 9 9"></path><path d="M4 4a16 16 0 0 1 16 16"></path><circle cx="5" cy="19" r="1"></circle>',
                                    save: '<path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline>',
                                    scissors:
                                        '<circle cx="6" cy="6" r="3"></circle><circle cx="6" cy="18" r="3"></circle><line x1="20" y1="4" x2="8.12" y2="15.88"></line><line x1="14.47" y1="14.48" x2="20" y2="20"></line><line x1="8.12" y1="8.12" x2="12" y2="12"></line>',
                                    search: '<circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line>',
                                    send: '<line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>',
                                    server: '<rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6.01" y2="6"></line><line x1="6" y1="18" x2="6.01" y2="18"></line>',
                                    settings:
                                        '<circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>',
                                    "share-2":
                                        '<circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>',
                                    share: '<path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line>',
                                    "shield-off":
                                        '<path d="M19.69 14a6.9 6.9 0 0 0 .31-2V5l-8-3-3.16 1.18"></path><path d="M4.73 4.73L4 5v7c0 6 8 10 8 10a20.29 20.29 0 0 0 5.62-4.38"></path><line x1="1" y1="1" x2="23" y2="23"></line>',
                                    shield: '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>',
                                    "shopping-bag":
                                        '<path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path>',
                                    "shopping-cart":
                                        '<circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>',
                                    shuffle:
                                        '<polyline points="16 3 21 3 21 8"></polyline><line x1="4" y1="20" x2="21" y2="3"></line><polyline points="21 16 21 21 16 21"></polyline><line x1="15" y1="15" x2="21" y2="21"></line><line x1="4" y1="4" x2="9" y2="9"></line>',
                                    sidebar:
                                        '<rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="9" y1="3" x2="9" y2="21"></line>',
                                    "skip-back":
                                        '<polygon points="19 20 9 12 19 4 19 20"></polygon><line x1="5" y1="19" x2="5" y2="5"></line>',
                                    "skip-forward":
                                        '<polygon points="5 4 15 12 5 20 5 4"></polygon><line x1="19" y1="5" x2="19" y2="19"></line>',
                                    slack: '<path d="M14.5 10c-.83 0-1.5-.67-1.5-1.5v-5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5v5c0 .83-.67 1.5-1.5 1.5z"></path><path d="M20.5 10H19V8.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"></path><path d="M9.5 14c.83 0 1.5.67 1.5 1.5v5c0 .83-.67 1.5-1.5 1.5S8 21.33 8 20.5v-5c0-.83.67-1.5 1.5-1.5z"></path><path d="M3.5 14H5v1.5c0 .83-.67 1.5-1.5 1.5S2 16.33 2 15.5 2.67 14 3.5 14z"></path><path d="M14 14.5c0-.83.67-1.5 1.5-1.5h5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5h-5c-.83 0-1.5-.67-1.5-1.5z"></path><path d="M15.5 19H14v1.5c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5z"></path><path d="M10 9.5C10 8.67 9.33 8 8.5 8h-5C2.67 8 2 8.67 2 9.5S2.67 11 3.5 11h5c.83 0 1.5-.67 1.5-1.5z"></path><path d="M8.5 5H10V3.5C10 2.67 9.33 2 8.5 2S7 2.67 7 3.5 7.67 5 8.5 5z"></path>',
                                    slash: '<circle cx="12" cy="12" r="10"></circle><line x1="4.93" y1="4.93" x2="19.07" y2="19.07"></line>',
                                    sliders:
                                        '<line x1="4" y1="21" x2="4" y2="14"></line><line x1="4" y1="10" x2="4" y2="3"></line><line x1="12" y1="21" x2="12" y2="12"></line><line x1="12" y1="8" x2="12" y2="3"></line><line x1="20" y1="21" x2="20" y2="16"></line><line x1="20" y1="12" x2="20" y2="3"></line><line x1="1" y1="14" x2="7" y2="14"></line><line x1="9" y1="8" x2="15" y2="8"></line><line x1="17" y1="16" x2="23" y2="16"></line>',
                                    smartphone:
                                        '<rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line>',
                                    smile: '<circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line>',
                                    speaker:
                                        '<rect x="4" y="2" width="16" height="20" rx="2" ry="2"></rect><circle cx="12" cy="14" r="4"></circle><line x1="12" y1="6" x2="12.01" y2="6"></line>',
                                    square: '<rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>',
                                    star: '<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>',
                                    "stop-circle":
                                        '<circle cx="12" cy="12" r="10"></circle><rect x="9" y="9" width="6" height="6"></rect>',
                                    sun: '<circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>',
                                    sunrise:
                                        '<path d="M17 18a5 5 0 0 0-10 0"></path><line x1="12" y1="2" x2="12" y2="9"></line><line x1="4.22" y1="10.22" x2="5.64" y2="11.64"></line><line x1="1" y1="18" x2="3" y2="18"></line><line x1="21" y1="18" x2="23" y2="18"></line><line x1="18.36" y1="11.64" x2="19.78" y2="10.22"></line><line x1="23" y1="22" x2="1" y2="22"></line><polyline points="8 6 12 2 16 6"></polyline>',
                                    sunset: '<path d="M17 18a5 5 0 0 0-10 0"></path><line x1="12" y1="9" x2="12" y2="2"></line><line x1="4.22" y1="10.22" x2="5.64" y2="11.64"></line><line x1="1" y1="18" x2="3" y2="18"></line><line x1="21" y1="18" x2="23" y2="18"></line><line x1="18.36" y1="11.64" x2="19.78" y2="10.22"></line><line x1="23" y1="22" x2="1" y2="22"></line><polyline points="16 5 12 9 8 5"></polyline>',
                                    table: '<path d="M9 3H5a2 2 0 0 0-2 2v4m6-6h10a2 2 0 0 1 2 2v4M9 3v18m0 0h10a2 2 0 0 0 2-2V9M9 21H5a2 2 0 0 1-2-2V9m0 0h18"></path>',
                                    tablet: '<rect x="4" y="2" width="16" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line>',
                                    tag: '<path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7.01" y2="7"></line>',
                                    target: '<circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle>',
                                    terminal:
                                        '<polyline points="4 17 10 11 4 5"></polyline><line x1="12" y1="19" x2="20" y2="19"></line>',
                                    thermometer:
                                        '<path d="M14 14.76V3.5a2.5 2.5 0 0 0-5 0v11.26a4.5 4.5 0 1 0 5 0z"></path>',
                                    "thumbs-down":
                                        '<path d="M10 15v4a3 3 0 0 0 3 3l4-9V2H5.72a2 2 0 0 0-2 1.7l-1.38 9a2 2 0 0 0 2 2.3zm7-13h2.67A2.31 2.31 0 0 1 22 4v7a2.31 2.31 0 0 1-2.33 2H17"></path>',
                                    "thumbs-up":
                                        '<path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path>',
                                    "toggle-left":
                                        '<rect x="1" y="5" width="22" height="14" rx="7" ry="7"></rect><circle cx="8" cy="12" r="3"></circle>',
                                    "toggle-right":
                                        '<rect x="1" y="5" width="22" height="14" rx="7" ry="7"></rect><circle cx="16" cy="12" r="3"></circle>',
                                    tool: '<path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>',
                                    "trash-2":
                                        '<polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line>',
                                    trash: '<polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>',
                                    trello: '<rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><rect x="7" y="7" width="3" height="9"></rect><rect x="14" y="7" width="3" height="5"></rect>',
                                    "trending-down":
                                        '<polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline><polyline points="17 18 23 18 23 12"></polyline>',
                                    "trending-up":
                                        '<polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline>',
                                    triangle:
                                        '<path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>',
                                    truck: '<rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle>',
                                    tv: '<rect x="2" y="7" width="20" height="15" rx="2" ry="2"></rect><polyline points="17 2 12 7 7 2"></polyline>',
                                    twitch: '<path d="M21 2H3v16h5v4l4-4h5l4-4V2zm-10 9V7m5 4V7"></path>',
                                    twitter:
                                        '<path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>',
                                    type: '<polyline points="4 7 4 4 20 4 20 7"></polyline><line x1="9" y1="20" x2="15" y2="20"></line><line x1="12" y1="4" x2="12" y2="20"></line>',
                                    umbrella:
                                        '<path d="M23 12a11.05 11.05 0 0 0-22 0zm-5 7a3 3 0 0 1-6 0v-7"></path>',
                                    underline:
                                        '<path d="M6 3v7a6 6 0 0 0 6 6 6 6 0 0 0 6-6V3"></path><line x1="4" y1="21" x2="20" y2="21"></line>',
                                    unlock: '<rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 9.9-1"></path>',
                                    "upload-cloud":
                                        '<polyline points="16 16 12 12 8 16"></polyline><line x1="12" y1="12" x2="12" y2="21"></line><path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"></path><polyline points="16 16 12 12 8 16"></polyline>',
                                    upload: '<path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="17 8 12 3 7 8"></polyline><line x1="12" y1="3" x2="12" y2="15"></line>',
                                    "user-check":
                                        '<path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline>',
                                    "user-minus":
                                        '<path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="23" y1="11" x2="17" y2="11"></line>',
                                    "user-plus":
                                        '<path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line>',
                                    "user-x":
                                        '<path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="18" y1="8" x2="23" y2="13"></line><line x1="23" y1="8" x2="18" y2="13"></line>',
                                    user: '<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle>',
                                    users: '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path>',
                                    "video-off":
                                        '<path d="M16 16v1a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h2m5.66 0H14a2 2 0 0 1 2 2v3.34l1 1L23 7v10"></path><line x1="1" y1="1" x2="23" y2="23"></line>',
                                    video: '<polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect>',
                                    voicemail:
                                        '<circle cx="5.5" cy="11.5" r="4.5"></circle><circle cx="18.5" cy="11.5" r="4.5"></circle><line x1="5.5" y1="16" x2="18.5" y2="16"></line>',
                                    "volume-1":
                                        '<polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon><path d="M15.54 8.46a5 5 0 0 1 0 7.07"></path>',
                                    "volume-2":
                                        '<polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon><path d="M19.07 4.93a10 10 0 0 1 0 14.14M15.54 8.46a5 5 0 0 1 0 7.07"></path>',
                                    "volume-x":
                                        '<polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon><line x1="23" y1="9" x2="17" y2="15"></line><line x1="17" y1="9" x2="23" y2="15"></line>',
                                    volume: '<polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon>',
                                    watch: '<circle cx="12" cy="12" r="7"></circle><polyline points="12 9 12 12 13.5 13.5"></polyline><path d="M16.51 17.35l-.35 3.83a2 2 0 0 1-2 1.82H9.83a2 2 0 0 1-2-1.82l-.35-3.83m.01-10.7l.35-3.83A2 2 0 0 1 9.83 1h4.35a2 2 0 0 1 2 1.82l.35 3.83"></path>',
                                    "wifi-off":
                                        '<line x1="1" y1="1" x2="23" y2="23"></line><path d="M16.72 11.06A10.94 10.94 0 0 1 19 12.55"></path><path d="M5 12.55a10.94 10.94 0 0 1 5.17-2.39"></path><path d="M10.71 5.05A16 16 0 0 1 22.58 9"></path><path d="M1.42 9a15.91 15.91 0 0 1 4.7-2.88"></path><path d="M8.53 16.11a6 6 0 0 1 6.95 0"></path><line x1="12" y1="20" x2="12.01" y2="20"></line>',
                                    wifi: '<path d="M5 12.55a11 11 0 0 1 14.08 0"></path><path d="M1.42 9a16 16 0 0 1 21.16 0"></path><path d="M8.53 16.11a6 6 0 0 1 6.95 0"></path><line x1="12" y1="20" x2="12.01" y2="20"></line>',
                                    wind: '<path d="M9.59 4.59A2 2 0 1 1 11 8H2m10.59 11.41A2 2 0 1 0 14 16H2m15.73-8.27A2.5 2.5 0 1 1 19.5 12H2"></path>',
                                    "x-circle":
                                        '<circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line>',
                                    "x-octagon":
                                        '<polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line>',
                                    "x-square":
                                        '<rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="9" y1="9" x2="15" y2="15"></line><line x1="15" y1="9" x2="9" y2="15"></line>',
                                    x: '<line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line>',
                                    youtube:
                                        '<path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon>',
                                    "zap-off":
                                        '<polyline points="12.41 6.75 13 2 10.57 4.92"></polyline><polyline points="18.57 12.91 21 10 15.66 10"></polyline><polyline points="8 8 3 14 12 14 11 22 16 16"></polyline><line x1="1" y1="1" x2="23" y2="23"></line>',
                                    zap: '<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>',
                                    "zoom-in":
                                        '<circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line>',
                                    "zoom-out":
                                        '<circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="8" y1="11" x2="14" y2="11"></line>',
                                };
                            },
                            "./node_modules/classnames/dedupe.js": function (
                                e,
                                t,
                                n
                            ) {
                                var i;
                                !(function () {
                                    "use strict";
                                    var n = (function () {
                                        function e() {}
                                        function t(e, t) {
                                            for (
                                                var n = t.length, i = 0;
                                                i < n;
                                                ++i
                                            )
                                                o(e, t[i]);
                                        }
                                        e.prototype = Object.create(null);
                                        var n = {}.hasOwnProperty,
                                            i = /\s+/;
                                        function o(e, o) {
                                            if (o) {
                                                var r = typeof o;
                                                "string" === r
                                                    ? (function (e, t) {
                                                          for (
                                                              var n =
                                                                      t.split(
                                                                          i
                                                                      ),
                                                                  o = n.length,
                                                                  r = 0;
                                                              r < o;
                                                              ++r
                                                          )
                                                              e[n[r]] = !0;
                                                      })(e, o)
                                                    : Array.isArray(o)
                                                    ? t(e, o)
                                                    : "object" === r
                                                    ? (function (e, t) {
                                                          for (var i in t)
                                                              n.call(t, i) &&
                                                                  (e[i] =
                                                                      !!t[i]);
                                                      })(e, o)
                                                    : "number" === r &&
                                                      (function (e, t) {
                                                          e[t] = !0;
                                                      })(e, o);
                                            }
                                        }
                                        return function () {
                                            for (
                                                var n = arguments.length,
                                                    i = Array(n),
                                                    o = 0;
                                                o < n;
                                                o++
                                            )
                                                i[o] = arguments[o];
                                            var r = new e();
                                            t(r, i);
                                            var l = [];
                                            for (var a in r) r[a] && l.push(a);
                                            return l.join(" ");
                                        };
                                    })();
                                    void 0 !== e && e.exports
                                        ? (e.exports = n)
                                        : void 0 ===
                                              (i = function () {
                                                  return n;
                                              }.apply(t, [])) ||
                                          (e.exports = i);
                                })();
                            },
                            "./node_modules/core-js/es/array/from.js":
                                function (e, t, n) {
                                    n(
                                        "./node_modules/core-js/modules/es.string.iterator.js"
                                    ),
                                        n(
                                            "./node_modules/core-js/modules/es.array.from.js"
                                        );
                                    var i = n(
                                        "./node_modules/core-js/internals/path.js"
                                    );
                                    e.exports = i.Array.from;
                                },
                            "./node_modules/core-js/internals/a-function.js":
                                function (e, t) {
                                    e.exports = function (e) {
                                        if ("function" != typeof e)
                                            throw TypeError(
                                                String(e) + " is not a function"
                                            );
                                        return e;
                                    };
                                },
                            "./node_modules/core-js/internals/an-object.js":
                                function (e, t, n) {
                                    var i = n(
                                        "./node_modules/core-js/internals/is-object.js"
                                    );
                                    e.exports = function (e) {
                                        if (!i(e))
                                            throw TypeError(
                                                String(e) + " is not an object"
                                            );
                                        return e;
                                    };
                                },
                            "./node_modules/core-js/internals/array-from.js":
                                function (e, t, n) {
                                    "use strict";
                                    var i = n(
                                            "./node_modules/core-js/internals/bind-context.js"
                                        ),
                                        o = n(
                                            "./node_modules/core-js/internals/to-object.js"
                                        ),
                                        r = n(
                                            "./node_modules/core-js/internals/call-with-safe-iteration-closing.js"
                                        ),
                                        l = n(
                                            "./node_modules/core-js/internals/is-array-iterator-method.js"
                                        ),
                                        a = n(
                                            "./node_modules/core-js/internals/to-length.js"
                                        ),
                                        s = n(
                                            "./node_modules/core-js/internals/create-property.js"
                                        ),
                                        c = n(
                                            "./node_modules/core-js/internals/get-iterator-method.js"
                                        );
                                    e.exports = function (e) {
                                        var t,
                                            n,
                                            p,
                                            d,
                                            h = o(e),
                                            u =
                                                "function" == typeof this
                                                    ? this
                                                    : Array,
                                            y = arguments.length,
                                            f = y > 1 ? arguments[1] : void 0,
                                            x = void 0 !== f,
                                            m = 0,
                                            g = c(h);
                                        if (
                                            (x &&
                                                (f = i(
                                                    f,
                                                    y > 2
                                                        ? arguments[2]
                                                        : void 0,
                                                    2
                                                )),
                                            null == g || (u == Array && l(g)))
                                        )
                                            for (
                                                n = new u((t = a(h.length)));
                                                t > m;
                                                m++
                                            )
                                                s(n, m, x ? f(h[m], m) : h[m]);
                                        else
                                            for (
                                                d = g.call(h), n = new u();
                                                !(p = d.next()).done;
                                                m++
                                            )
                                                s(
                                                    n,
                                                    m,
                                                    x
                                                        ? r(
                                                              d,
                                                              f,
                                                              [p.value, m],
                                                              !0
                                                          )
                                                        : p.value
                                                );
                                        return (n.length = m), n;
                                    };
                                },
                            "./node_modules/core-js/internals/array-includes.js":
                                function (e, t, n) {
                                    var i = n(
                                            "./node_modules/core-js/internals/to-indexed-object.js"
                                        ),
                                        o = n(
                                            "./node_modules/core-js/internals/to-length.js"
                                        ),
                                        r = n(
                                            "./node_modules/core-js/internals/to-absolute-index.js"
                                        );
                                    e.exports = function (e) {
                                        return function (t, n, l) {
                                            var a,
                                                s = i(t),
                                                c = o(s.length),
                                                p = r(l, c);
                                            if (e && n != n) {
                                                for (; c > p; )
                                                    if ((a = s[p++]) != a)
                                                        return !0;
                                            } else
                                                for (; c > p; p++)
                                                    if (
                                                        (e || p in s) &&
                                                        s[p] === n
                                                    )
                                                        return e || p || 0;
                                            return !e && -1;
                                        };
                                    };
                                },
                            "./node_modules/core-js/internals/bind-context.js":
                                function (e, t, n) {
                                    var i = n(
                                        "./node_modules/core-js/internals/a-function.js"
                                    );
                                    e.exports = function (e, t, n) {
                                        if ((i(e), void 0 === t)) return e;
                                        switch (n) {
                                            case 0:
                                                return function () {
                                                    return e.call(t);
                                                };
                                            case 1:
                                                return function (n) {
                                                    return e.call(t, n);
                                                };
                                            case 2:
                                                return function (n, i) {
                                                    return e.call(t, n, i);
                                                };
                                            case 3:
                                                return function (n, i, o) {
                                                    return e.call(t, n, i, o);
                                                };
                                        }
                                        return function () {
                                            return e.apply(t, arguments);
                                        };
                                    };
                                },
                            "./node_modules/core-js/internals/call-with-safe-iteration-closing.js":
                                function (e, t, n) {
                                    var i = n(
                                        "./node_modules/core-js/internals/an-object.js"
                                    );
                                    e.exports = function (e, t, n, o) {
                                        try {
                                            return o ? t(i(n)[0], n[1]) : t(n);
                                        } catch (t) {
                                            var r = e.return;
                                            throw (
                                                (void 0 !== r && i(r.call(e)),
                                                t)
                                            );
                                        }
                                    };
                                },
                            "./node_modules/core-js/internals/check-correctness-of-iteration.js":
                                function (e, t, n) {
                                    var i = n(
                                            "./node_modules/core-js/internals/well-known-symbol.js"
                                        )("iterator"),
                                        o = !1;
                                    try {
                                        var r = 0,
                                            l = {
                                                next: function () {
                                                    return { done: !!r++ };
                                                },
                                                return: function () {
                                                    o = !0;
                                                },
                                            };
                                        (l[i] = function () {
                                            return this;
                                        }),
                                            Array.from(l, function () {
                                                throw 2;
                                            });
                                    } catch (e) {}
                                    e.exports = function (e, t) {
                                        if (!t && !o) return !1;
                                        var n = !1;
                                        try {
                                            var r = {};
                                            (r[i] = function () {
                                                return {
                                                    next: function () {
                                                        return {
                                                            done: (n = !0),
                                                        };
                                                    },
                                                };
                                            }),
                                                e(r);
                                        } catch (e) {}
                                        return n;
                                    };
                                },
                            "./node_modules/core-js/internals/classof-raw.js":
                                function (e, t) {
                                    var n = {}.toString;
                                    e.exports = function (e) {
                                        return n.call(e).slice(8, -1);
                                    };
                                },
                            "./node_modules/core-js/internals/classof.js":
                                function (e, t, n) {
                                    var i = n(
                                            "./node_modules/core-js/internals/classof-raw.js"
                                        ),
                                        o = n(
                                            "./node_modules/core-js/internals/well-known-symbol.js"
                                        )("toStringTag"),
                                        r =
                                            "Arguments" ==
                                            i(
                                                (function () {
                                                    return arguments;
                                                })()
                                            );
                                    e.exports = function (e) {
                                        var t, n, l;
                                        return void 0 === e
                                            ? "Undefined"
                                            : null === e
                                            ? "Null"
                                            : "string" ==
                                              typeof (n = (function (e, t) {
                                                  try {
                                                      return e[t];
                                                  } catch (e) {}
                                              })((t = Object(e)), o))
                                            ? n
                                            : r
                                            ? i(t)
                                            : "Object" == (l = i(t)) &&
                                              "function" == typeof t.callee
                                            ? "Arguments"
                                            : l;
                                    };
                                },
                            "./node_modules/core-js/internals/copy-constructor-properties.js":
                                function (e, t, n) {
                                    var i = n(
                                            "./node_modules/core-js/internals/has.js"
                                        ),
                                        o = n(
                                            "./node_modules/core-js/internals/own-keys.js"
                                        ),
                                        r = n(
                                            "./node_modules/core-js/internals/object-get-own-property-descriptor.js"
                                        ),
                                        l = n(
                                            "./node_modules/core-js/internals/object-define-property.js"
                                        );
                                    e.exports = function (e, t) {
                                        for (
                                            var n = o(t),
                                                a = l.f,
                                                s = r.f,
                                                c = 0;
                                            c < n.length;
                                            c++
                                        ) {
                                            var p = n[c];
                                            i(e, p) || a(e, p, s(t, p));
                                        }
                                    };
                                },
                            "./node_modules/core-js/internals/correct-prototype-getter.js":
                                function (e, t, n) {
                                    var i = n(
                                        "./node_modules/core-js/internals/fails.js"
                                    );
                                    e.exports = !i(function () {
                                        function e() {}
                                        return (
                                            (e.prototype.constructor = null),
                                            Object.getPrototypeOf(new e()) !==
                                                e.prototype
                                        );
                                    });
                                },
                            "./node_modules/core-js/internals/create-iterator-constructor.js":
                                function (e, t, n) {
                                    "use strict";
                                    var i = n(
                                            "./node_modules/core-js/internals/iterators-core.js"
                                        ).IteratorPrototype,
                                        o = n(
                                            "./node_modules/core-js/internals/object-create.js"
                                        ),
                                        r = n(
                                            "./node_modules/core-js/internals/create-property-descriptor.js"
                                        ),
                                        l = n(
                                            "./node_modules/core-js/internals/set-to-string-tag.js"
                                        ),
                                        a = n(
                                            "./node_modules/core-js/internals/iterators.js"
                                        ),
                                        s = function () {
                                            return this;
                                        };
                                    e.exports = function (e, t, n) {
                                        var c = t + " Iterator";
                                        return (
                                            (e.prototype = o(i, {
                                                next: r(1, n),
                                            })),
                                            l(e, c, !1, !0),
                                            (a[c] = s),
                                            e
                                        );
                                    };
                                },
                            "./node_modules/core-js/internals/create-property-descriptor.js":
                                function (e, t) {
                                    e.exports = function (e, t) {
                                        return {
                                            enumerable: !(1 & e),
                                            configurable: !(2 & e),
                                            writable: !(4 & e),
                                            value: t,
                                        };
                                    };
                                },
                            "./node_modules/core-js/internals/create-property.js":
                                function (e, t, n) {
                                    "use strict";
                                    var i = n(
                                            "./node_modules/core-js/internals/to-primitive.js"
                                        ),
                                        o = n(
                                            "./node_modules/core-js/internals/object-define-property.js"
                                        ),
                                        r = n(
                                            "./node_modules/core-js/internals/create-property-descriptor.js"
                                        );
                                    e.exports = function (e, t, n) {
                                        var l = i(t);
                                        l in e
                                            ? o.f(e, l, r(0, n))
                                            : (e[l] = n);
                                    };
                                },
                            "./node_modules/core-js/internals/define-iterator.js":
                                function (e, t, n) {
                                    "use strict";
                                    var i = n(
                                            "./node_modules/core-js/internals/export.js"
                                        ),
                                        o = n(
                                            "./node_modules/core-js/internals/create-iterator-constructor.js"
                                        ),
                                        r = n(
                                            "./node_modules/core-js/internals/object-get-prototype-of.js"
                                        ),
                                        l = n(
                                            "./node_modules/core-js/internals/object-set-prototype-of.js"
                                        ),
                                        a = n(
                                            "./node_modules/core-js/internals/set-to-string-tag.js"
                                        ),
                                        s = n(
                                            "./node_modules/core-js/internals/hide.js"
                                        ),
                                        c = n(
                                            "./node_modules/core-js/internals/redefine.js"
                                        ),
                                        p = n(
                                            "./node_modules/core-js/internals/well-known-symbol.js"
                                        ),
                                        d = n(
                                            "./node_modules/core-js/internals/is-pure.js"
                                        ),
                                        h = n(
                                            "./node_modules/core-js/internals/iterators.js"
                                        ),
                                        u = n(
                                            "./node_modules/core-js/internals/iterators-core.js"
                                        ),
                                        y = u.IteratorPrototype,
                                        f = u.BUGGY_SAFARI_ITERATORS,
                                        x = p("iterator"),
                                        m = "keys",
                                        g = "values",
                                        v = "entries",
                                        j = function () {
                                            return this;
                                        };
                                    e.exports = function (e, t, n, p, u, b, w) {
                                        o(n, t, p);
                                        var _,
                                            M,
                                            k,
                                            A = function (e) {
                                                if (e === u && O) return O;
                                                if (!f && e in S) return S[e];
                                                switch (e) {
                                                    case m:
                                                    case g:
                                                    case v:
                                                        return function () {
                                                            return new n(
                                                                this,
                                                                e
                                                            );
                                                        };
                                                }
                                                return function () {
                                                    return new n(this);
                                                };
                                            },
                                            L = t + " Iterator",
                                            H = !1,
                                            S = e.prototype,
                                            z =
                                                S[x] ||
                                                S["@@iterator"] ||
                                                (u && S[u]),
                                            O = (!f && z) || A(u),
                                            Y =
                                                ("Array" == t && S.entries) ||
                                                z;
                                        if (
                                            (Y &&
                                                ((_ = r(Y.call(new e()))),
                                                y !== Object.prototype &&
                                                    _.next &&
                                                    (d ||
                                                        r(_) === y ||
                                                        (l
                                                            ? l(_, y)
                                                            : "function" !=
                                                                  typeof _[x] &&
                                                              s(_, x, j)),
                                                    a(_, L, !0, !0),
                                                    d && (h[L] = j))),
                                            u == g &&
                                                z &&
                                                z.name !== g &&
                                                ((H = !0),
                                                (O = function () {
                                                    return z.call(this);
                                                })),
                                            (d && !w) ||
                                                S[x] === O ||
                                                s(S, x, O),
                                            (h[t] = O),
                                            u)
                                        )
                                            if (
                                                ((M = {
                                                    values: A(g),
                                                    keys: b ? O : A(m),
                                                    entries: A(v),
                                                }),
                                                w)
                                            )
                                                for (k in M)
                                                    (f || H || !(k in S)) &&
                                                        c(S, k, M[k]);
                                            else
                                                i(
                                                    {
                                                        target: t,
                                                        proto: !0,
                                                        forced: f || H,
                                                    },
                                                    M
                                                );
                                        return M;
                                    };
                                },
                            "./node_modules/core-js/internals/descriptors.js":
                                function (e, t, n) {
                                    var i = n(
                                        "./node_modules/core-js/internals/fails.js"
                                    );
                                    e.exports = !i(function () {
                                        return (
                                            7 !=
                                            Object.defineProperty({}, "a", {
                                                get: function () {
                                                    return 7;
                                                },
                                            }).a
                                        );
                                    });
                                },
                            "./node_modules/core-js/internals/document-create-element.js":
                                function (e, t, n) {
                                    var i = n(
                                            "./node_modules/core-js/internals/global.js"
                                        ),
                                        o = n(
                                            "./node_modules/core-js/internals/is-object.js"
                                        ),
                                        r = i.document,
                                        l = o(r) && o(r.createElement);
                                    e.exports = function (e) {
                                        return l ? r.createElement(e) : {};
                                    };
                                },
                            "./node_modules/core-js/internals/enum-bug-keys.js":
                                function (e, t) {
                                    e.exports = [
                                        "constructor",
                                        "hasOwnProperty",
                                        "isPrototypeOf",
                                        "propertyIsEnumerable",
                                        "toLocaleString",
                                        "toString",
                                        "valueOf",
                                    ];
                                },
                            "./node_modules/core-js/internals/export.js":
                                function (e, t, n) {
                                    var i = n(
                                            "./node_modules/core-js/internals/global.js"
                                        ),
                                        o = n(
                                            "./node_modules/core-js/internals/object-get-own-property-descriptor.js"
                                        ).f,
                                        r = n(
                                            "./node_modules/core-js/internals/hide.js"
                                        ),
                                        l = n(
                                            "./node_modules/core-js/internals/redefine.js"
                                        ),
                                        a = n(
                                            "./node_modules/core-js/internals/set-global.js"
                                        ),
                                        s = n(
                                            "./node_modules/core-js/internals/copy-constructor-properties.js"
                                        ),
                                        c = n(
                                            "./node_modules/core-js/internals/is-forced.js"
                                        );
                                    e.exports = function (e, t) {
                                        var n,
                                            p,
                                            d,
                                            h,
                                            u,
                                            y = e.target,
                                            f = e.global,
                                            x = e.stat;
                                        if (
                                            (n = f
                                                ? i
                                                : x
                                                ? i[y] || a(y, {})
                                                : (i[y] || {}).prototype)
                                        )
                                            for (p in t) {
                                                if (
                                                    ((h = t[p]),
                                                    (d = e.noTargetGet
                                                        ? (u = o(n, p)) &&
                                                          u.value
                                                        : n[p]),
                                                    !c(
                                                        f
                                                            ? p
                                                            : y +
                                                                  (x
                                                                      ? "."
                                                                      : "#") +
                                                                  p,
                                                        e.forced
                                                    ) && void 0 !== d)
                                                ) {
                                                    if (typeof h == typeof d)
                                                        continue;
                                                    s(h, d);
                                                }
                                                (e.sham || (d && d.sham)) &&
                                                    r(h, "sham", !0),
                                                    l(n, p, h, e);
                                            }
                                    };
                                },
                            "./node_modules/core-js/internals/fails.js":
                                function (e, t) {
                                    e.exports = function (e) {
                                        try {
                                            return !!e();
                                        } catch (e) {
                                            return !0;
                                        }
                                    };
                                },
                            "./node_modules/core-js/internals/function-to-string.js":
                                function (e, t, n) {
                                    var i = n(
                                        "./node_modules/core-js/internals/shared.js"
                                    );
                                    e.exports = i(
                                        "native-function-to-string",
                                        Function.toString
                                    );
                                },
                            "./node_modules/core-js/internals/get-iterator-method.js":
                                function (e, t, n) {
                                    var i = n(
                                            "./node_modules/core-js/internals/classof.js"
                                        ),
                                        o = n(
                                            "./node_modules/core-js/internals/iterators.js"
                                        ),
                                        r = n(
                                            "./node_modules/core-js/internals/well-known-symbol.js"
                                        )("iterator");
                                    e.exports = function (e) {
                                        if (null != e)
                                            return (
                                                e[r] ||
                                                e["@@iterator"] ||
                                                o[i(e)]
                                            );
                                    };
                                },
                            "./node_modules/core-js/internals/global.js":
                                function (e, t, n) {
                                    (function (t) {
                                        var n = "object",
                                            i = function (e) {
                                                return e && e.Math == Math && e;
                                            };
                                        e.exports =
                                            i(
                                                typeof globalThis == n &&
                                                    globalThis
                                            ) ||
                                            i(typeof window == n && window) ||
                                            i(typeof self == n && self) ||
                                            i(typeof t == n && t) ||
                                            Function("return this")();
                                    }).call(
                                        this,
                                        n(
                                            "./node_modules/webpack/buildin/global.js"
                                        )
                                    );
                                },
                            "./node_modules/core-js/internals/has.js":
                                function (e, t) {
                                    var n = {}.hasOwnProperty;
                                    e.exports = function (e, t) {
                                        return n.call(e, t);
                                    };
                                },
                            "./node_modules/core-js/internals/hidden-keys.js":
                                function (e, t) {
                                    e.exports = {};
                                },
                            "./node_modules/core-js/internals/hide.js":
                                function (e, t, n) {
                                    var i = n(
                                            "./node_modules/core-js/internals/descriptors.js"
                                        ),
                                        o = n(
                                            "./node_modules/core-js/internals/object-define-property.js"
                                        ),
                                        r = n(
                                            "./node_modules/core-js/internals/create-property-descriptor.js"
                                        );
                                    e.exports = i
                                        ? function (e, t, n) {
                                              return o.f(e, t, r(1, n));
                                          }
                                        : function (e, t, n) {
                                              return (e[t] = n), e;
                                          };
                                },
                            "./node_modules/core-js/internals/html.js":
                                function (e, t, n) {
                                    var i = n(
                                        "./node_modules/core-js/internals/global.js"
                                    ).document;
                                    e.exports = i && i.documentElement;
                                },
                            "./node_modules/core-js/internals/ie8-dom-define.js":
                                function (e, t, n) {
                                    var i = n(
                                            "./node_modules/core-js/internals/descriptors.js"
                                        ),
                                        o = n(
                                            "./node_modules/core-js/internals/fails.js"
                                        ),
                                        r = n(
                                            "./node_modules/core-js/internals/document-create-element.js"
                                        );
                                    e.exports =
                                        !i &&
                                        !o(function () {
                                            return (
                                                7 !=
                                                Object.defineProperty(
                                                    r("div"),
                                                    "a",
                                                    {
                                                        get: function () {
                                                            return 7;
                                                        },
                                                    }
                                                ).a
                                            );
                                        });
                                },
                            "./node_modules/core-js/internals/indexed-object.js":
                                function (e, t, n) {
                                    var i = n(
                                            "./node_modules/core-js/internals/fails.js"
                                        ),
                                        o = n(
                                            "./node_modules/core-js/internals/classof-raw.js"
                                        ),
                                        r = "".split;
                                    e.exports = i(function () {
                                        return !Object(
                                            "z"
                                        ).propertyIsEnumerable(0);
                                    })
                                        ? function (e) {
                                              return "String" == o(e)
                                                  ? r.call(e, "")
                                                  : Object(e);
                                          }
                                        : Object;
                                },
                            "./node_modules/core-js/internals/internal-state.js":
                                function (e, t, n) {
                                    var i,
                                        o,
                                        r,
                                        l = n(
                                            "./node_modules/core-js/internals/native-weak-map.js"
                                        ),
                                        a = n(
                                            "./node_modules/core-js/internals/global.js"
                                        ),
                                        s = n(
                                            "./node_modules/core-js/internals/is-object.js"
                                        ),
                                        c = n(
                                            "./node_modules/core-js/internals/hide.js"
                                        ),
                                        p = n(
                                            "./node_modules/core-js/internals/has.js"
                                        ),
                                        d = n(
                                            "./node_modules/core-js/internals/shared-key.js"
                                        ),
                                        h = n(
                                            "./node_modules/core-js/internals/hidden-keys.js"
                                        ),
                                        u = a.WeakMap;
                                    if (l) {
                                        var y = new u(),
                                            f = y.get,
                                            x = y.has,
                                            m = y.set;
                                        (i = function (e, t) {
                                            return m.call(y, e, t), t;
                                        }),
                                            (o = function (e) {
                                                return f.call(y, e) || {};
                                            }),
                                            (r = function (e) {
                                                return x.call(y, e);
                                            });
                                    } else {
                                        var g = d("state");
                                        (h[g] = !0),
                                            (i = function (e, t) {
                                                return c(e, g, t), t;
                                            }),
                                            (o = function (e) {
                                                return p(e, g) ? e[g] : {};
                                            }),
                                            (r = function (e) {
                                                return p(e, g);
                                            });
                                    }
                                    e.exports = {
                                        set: i,
                                        get: o,
                                        has: r,
                                        enforce: function (e) {
                                            return r(e) ? o(e) : i(e, {});
                                        },
                                        getterFor: function (e) {
                                            return function (t) {
                                                var n;
                                                if (
                                                    !s(t) ||
                                                    (n = o(t)).type !== e
                                                )
                                                    throw TypeError(
                                                        "Incompatible receiver, " +
                                                            e +
                                                            " required"
                                                    );
                                                return n;
                                            };
                                        },
                                    };
                                },
                            "./node_modules/core-js/internals/is-array-iterator-method.js":
                                function (e, t, n) {
                                    var i = n(
                                            "./node_modules/core-js/internals/well-known-symbol.js"
                                        ),
                                        o = n(
                                            "./node_modules/core-js/internals/iterators.js"
                                        ),
                                        r = i("iterator"),
                                        l = Array.prototype;
                                    e.exports = function (e) {
                                        return (
                                            void 0 !== e &&
                                            (o.Array === e || l[r] === e)
                                        );
                                    };
                                },
                            "./node_modules/core-js/internals/is-forced.js":
                                function (e, t, n) {
                                    var i = n(
                                            "./node_modules/core-js/internals/fails.js"
                                        ),
                                        o = /#|\.prototype\./,
                                        r = function (e, t) {
                                            var n = a[l(e)];
                                            return (
                                                n == c ||
                                                (n != s &&
                                                    ("function" == typeof t
                                                        ? i(t)
                                                        : !!t))
                                            );
                                        },
                                        l = (r.normalize = function (e) {
                                            return String(e)
                                                .replace(o, ".")
                                                .toLowerCase();
                                        }),
                                        a = (r.data = {}),
                                        s = (r.NATIVE = "N"),
                                        c = (r.POLYFILL = "P");
                                    e.exports = r;
                                },
                            "./node_modules/core-js/internals/is-object.js":
                                function (e, t) {
                                    e.exports = function (e) {
                                        return "object" == typeof e
                                            ? null !== e
                                            : "function" == typeof e;
                                    };
                                },
                            "./node_modules/core-js/internals/is-pure.js":
                                function (e, t) {
                                    e.exports = !1;
                                },
                            "./node_modules/core-js/internals/iterators-core.js":
                                function (e, t, n) {
                                    "use strict";
                                    var i,
                                        o,
                                        r,
                                        l = n(
                                            "./node_modules/core-js/internals/object-get-prototype-of.js"
                                        ),
                                        a = n(
                                            "./node_modules/core-js/internals/hide.js"
                                        ),
                                        s = n(
                                            "./node_modules/core-js/internals/has.js"
                                        ),
                                        c = n(
                                            "./node_modules/core-js/internals/well-known-symbol.js"
                                        ),
                                        p = n(
                                            "./node_modules/core-js/internals/is-pure.js"
                                        ),
                                        d = c("iterator"),
                                        h = !1;
                                    [].keys &&
                                        ("next" in (r = [].keys())
                                            ? (o = l(l(r))) !==
                                                  Object.prototype && (i = o)
                                            : (h = !0)),
                                        null == i && (i = {}),
                                        p ||
                                            s(i, d) ||
                                            a(i, d, function () {
                                                return this;
                                            }),
                                        (e.exports = {
                                            IteratorPrototype: i,
                                            BUGGY_SAFARI_ITERATORS: h,
                                        });
                                },
                            "./node_modules/core-js/internals/iterators.js":
                                function (e, t) {
                                    e.exports = {};
                                },
                            "./node_modules/core-js/internals/native-symbol.js":
                                function (e, t, n) {
                                    var i = n(
                                        "./node_modules/core-js/internals/fails.js"
                                    );
                                    e.exports =
                                        !!Object.getOwnPropertySymbols &&
                                        !i(function () {
                                            return !String(Symbol());
                                        });
                                },
                            "./node_modules/core-js/internals/native-weak-map.js":
                                function (e, t, n) {
                                    var i = n(
                                            "./node_modules/core-js/internals/global.js"
                                        ),
                                        o = n(
                                            "./node_modules/core-js/internals/function-to-string.js"
                                        ),
                                        r = i.WeakMap;
                                    e.exports =
                                        "function" == typeof r &&
                                        /native code/.test(o.call(r));
                                },
                            "./node_modules/core-js/internals/object-create.js":
                                function (e, t, n) {
                                    var i = n(
                                            "./node_modules/core-js/internals/an-object.js"
                                        ),
                                        o = n(
                                            "./node_modules/core-js/internals/object-define-properties.js"
                                        ),
                                        r = n(
                                            "./node_modules/core-js/internals/enum-bug-keys.js"
                                        ),
                                        l = n(
                                            "./node_modules/core-js/internals/hidden-keys.js"
                                        ),
                                        a = n(
                                            "./node_modules/core-js/internals/html.js"
                                        ),
                                        s = n(
                                            "./node_modules/core-js/internals/document-create-element.js"
                                        ),
                                        c = n(
                                            "./node_modules/core-js/internals/shared-key.js"
                                        )("IE_PROTO"),
                                        p = function () {},
                                        d = function () {
                                            var e,
                                                t = s("iframe"),
                                                n = r.length;
                                            for (
                                                t.style.display = "none",
                                                    a.appendChild(t),
                                                    t.src =
                                                        String("javascript:"),
                                                    (e =
                                                        t.contentWindow
                                                            .document).open(),
                                                    e.write(
                                                        "<script>document.F=Object</script>"
                                                    ),
                                                    e.close(),
                                                    d = e.F;
                                                n--;

                                            )
                                                delete d.prototype[r[n]];
                                            return d();
                                        };
                                    (e.exports =
                                        Object.create ||
                                        function (e, t) {
                                            var n;
                                            return (
                                                null !== e
                                                    ? ((p.prototype = i(e)),
                                                      (n = new p()),
                                                      (p.prototype = null),
                                                      (n[c] = e))
                                                    : (n = d()),
                                                void 0 === t ? n : o(n, t)
                                            );
                                        }),
                                        (l[c] = !0);
                                },
                            "./node_modules/core-js/internals/object-define-properties.js":
                                function (e, t, n) {
                                    var i = n(
                                            "./node_modules/core-js/internals/descriptors.js"
                                        ),
                                        o = n(
                                            "./node_modules/core-js/internals/object-define-property.js"
                                        ),
                                        r = n(
                                            "./node_modules/core-js/internals/an-object.js"
                                        ),
                                        l = n(
                                            "./node_modules/core-js/internals/object-keys.js"
                                        );
                                    e.exports = i
                                        ? Object.defineProperties
                                        : function (e, t) {
                                              r(e);
                                              for (
                                                  var n,
                                                      i = l(t),
                                                      a = i.length,
                                                      s = 0;
                                                  a > s;

                                              )
                                                  o.f(e, (n = i[s++]), t[n]);
                                              return e;
                                          };
                                },
                            "./node_modules/core-js/internals/object-define-property.js":
                                function (e, t, n) {
                                    var i = n(
                                            "./node_modules/core-js/internals/descriptors.js"
                                        ),
                                        o = n(
                                            "./node_modules/core-js/internals/ie8-dom-define.js"
                                        ),
                                        r = n(
                                            "./node_modules/core-js/internals/an-object.js"
                                        ),
                                        l = n(
                                            "./node_modules/core-js/internals/to-primitive.js"
                                        ),
                                        a = Object.defineProperty;
                                    t.f = i
                                        ? a
                                        : function (e, t, n) {
                                              if (
                                                  (r(e),
                                                  (t = l(t, !0)),
                                                  r(n),
                                                  o)
                                              )
                                                  try {
                                                      return a(e, t, n);
                                                  } catch (e) {}
                                              if ("get" in n || "set" in n)
                                                  throw TypeError(
                                                      "Accessors not supported"
                                                  );
                                              return (
                                                  "value" in n &&
                                                      (e[t] = n.value),
                                                  e
                                              );
                                          };
                                },
                            "./node_modules/core-js/internals/object-get-own-property-descriptor.js":
                                function (e, t, n) {
                                    var i = n(
                                            "./node_modules/core-js/internals/descriptors.js"
                                        ),
                                        o = n(
                                            "./node_modules/core-js/internals/object-property-is-enumerable.js"
                                        ),
                                        r = n(
                                            "./node_modules/core-js/internals/create-property-descriptor.js"
                                        ),
                                        l = n(
                                            "./node_modules/core-js/internals/to-indexed-object.js"
                                        ),
                                        a = n(
                                            "./node_modules/core-js/internals/to-primitive.js"
                                        ),
                                        s = n(
                                            "./node_modules/core-js/internals/has.js"
                                        ),
                                        c = n(
                                            "./node_modules/core-js/internals/ie8-dom-define.js"
                                        ),
                                        p = Object.getOwnPropertyDescriptor;
                                    t.f = i
                                        ? p
                                        : function (e, t) {
                                              if (
                                                  ((e = l(e)),
                                                  (t = a(t, !0)),
                                                  c)
                                              )
                                                  try {
                                                      return p(e, t);
                                                  } catch (e) {}
                                              if (s(e, t))
                                                  return r(
                                                      !o.f.call(e, t),
                                                      e[t]
                                                  );
                                          };
                                },
                            "./node_modules/core-js/internals/object-get-own-property-names.js":
                                function (e, t, n) {
                                    var i = n(
                                            "./node_modules/core-js/internals/object-keys-internal.js"
                                        ),
                                        o = n(
                                            "./node_modules/core-js/internals/enum-bug-keys.js"
                                        ).concat("length", "prototype");
                                    t.f =
                                        Object.getOwnPropertyNames ||
                                        function (e) {
                                            return i(e, o);
                                        };
                                },
                            "./node_modules/core-js/internals/object-get-own-property-symbols.js":
                                function (e, t) {
                                    t.f = Object.getOwnPropertySymbols;
                                },
                            "./node_modules/core-js/internals/object-get-prototype-of.js":
                                function (e, t, n) {
                                    var i = n(
                                            "./node_modules/core-js/internals/has.js"
                                        ),
                                        o = n(
                                            "./node_modules/core-js/internals/to-object.js"
                                        ),
                                        r = n(
                                            "./node_modules/core-js/internals/shared-key.js"
                                        ),
                                        l = n(
                                            "./node_modules/core-js/internals/correct-prototype-getter.js"
                                        ),
                                        a = r("IE_PROTO"),
                                        s = Object.prototype;
                                    e.exports = l
                                        ? Object.getPrototypeOf
                                        : function (e) {
                                              return (
                                                  (e = o(e)),
                                                  i(e, a)
                                                      ? e[a]
                                                      : "function" ==
                                                            typeof e.constructor &&
                                                        e instanceof
                                                            e.constructor
                                                      ? e.constructor.prototype
                                                      : e instanceof Object
                                                      ? s
                                                      : null
                                              );
                                          };
                                },
                            "./node_modules/core-js/internals/object-keys-internal.js":
                                function (e, t, n) {
                                    var i = n(
                                            "./node_modules/core-js/internals/has.js"
                                        ),
                                        o = n(
                                            "./node_modules/core-js/internals/to-indexed-object.js"
                                        ),
                                        r = n(
                                            "./node_modules/core-js/internals/array-includes.js"
                                        ),
                                        l = n(
                                            "./node_modules/core-js/internals/hidden-keys.js"
                                        ),
                                        a = r(!1);
                                    e.exports = function (e, t) {
                                        var n,
                                            r = o(e),
                                            s = 0,
                                            c = [];
                                        for (n in r)
                                            !i(l, n) && i(r, n) && c.push(n);
                                        for (; t.length > s; )
                                            i(r, (n = t[s++])) &&
                                                (~a(c, n) || c.push(n));
                                        return c;
                                    };
                                },
                            "./node_modules/core-js/internals/object-keys.js":
                                function (e, t, n) {
                                    var i = n(
                                            "./node_modules/core-js/internals/object-keys-internal.js"
                                        ),
                                        o = n(
                                            "./node_modules/core-js/internals/enum-bug-keys.js"
                                        );
                                    e.exports =
                                        Object.keys ||
                                        function (e) {
                                            return i(e, o);
                                        };
                                },
                            "./node_modules/core-js/internals/object-property-is-enumerable.js":
                                function (e, t, n) {
                                    "use strict";
                                    var i = {}.propertyIsEnumerable,
                                        o = Object.getOwnPropertyDescriptor,
                                        r = o && !i.call({ 1: 2 }, 1);
                                    t.f = r
                                        ? function (e) {
                                              var t = o(this, e);
                                              return !!t && t.enumerable;
                                          }
                                        : i;
                                },
                            "./node_modules/core-js/internals/object-set-prototype-of.js":
                                function (e, t, n) {
                                    var i = n(
                                        "./node_modules/core-js/internals/validate-set-prototype-of-arguments.js"
                                    );
                                    e.exports =
                                        Object.setPrototypeOf ||
                                        ("__proto__" in {}
                                            ? (function () {
                                                  var e,
                                                      t = !1,
                                                      n = {};
                                                  try {
                                                      (e =
                                                          Object.getOwnPropertyDescriptor(
                                                              Object.prototype,
                                                              "__proto__"
                                                          ).set).call(n, []),
                                                          (t =
                                                              n instanceof
                                                              Array);
                                                  } catch (e) {}
                                                  return function (n, o) {
                                                      return (
                                                          i(n, o),
                                                          t
                                                              ? e.call(n, o)
                                                              : (n.__proto__ =
                                                                    o),
                                                          n
                                                      );
                                                  };
                                              })()
                                            : void 0);
                                },
                            "./node_modules/core-js/internals/own-keys.js":
                                function (e, t, n) {
                                    var i = n(
                                            "./node_modules/core-js/internals/global.js"
                                        ),
                                        o = n(
                                            "./node_modules/core-js/internals/object-get-own-property-names.js"
                                        ),
                                        r = n(
                                            "./node_modules/core-js/internals/object-get-own-property-symbols.js"
                                        ),
                                        l = n(
                                            "./node_modules/core-js/internals/an-object.js"
                                        ),
                                        a = i.Reflect;
                                    e.exports =
                                        (a && a.ownKeys) ||
                                        function (e) {
                                            var t = o.f(l(e)),
                                                n = r.f;
                                            return n ? t.concat(n(e)) : t;
                                        };
                                },
                            "./node_modules/core-js/internals/path.js":
                                function (e, t, n) {
                                    e.exports = n(
                                        "./node_modules/core-js/internals/global.js"
                                    );
                                },
                            "./node_modules/core-js/internals/redefine.js":
                                function (e, t, n) {
                                    var i = n(
                                            "./node_modules/core-js/internals/global.js"
                                        ),
                                        o = n(
                                            "./node_modules/core-js/internals/shared.js"
                                        ),
                                        r = n(
                                            "./node_modules/core-js/internals/hide.js"
                                        ),
                                        l = n(
                                            "./node_modules/core-js/internals/has.js"
                                        ),
                                        a = n(
                                            "./node_modules/core-js/internals/set-global.js"
                                        ),
                                        s = n(
                                            "./node_modules/core-js/internals/function-to-string.js"
                                        ),
                                        c = n(
                                            "./node_modules/core-js/internals/internal-state.js"
                                        ),
                                        p = c.get,
                                        d = c.enforce,
                                        h = String(s).split("toString");
                                    o("inspectSource", function (e) {
                                        return s.call(e);
                                    }),
                                        (e.exports = function (e, t, n, o) {
                                            var s = !!o && !!o.unsafe,
                                                c = !!o && !!o.enumerable,
                                                p = !!o && !!o.noTargetGet;
                                            "function" == typeof n &&
                                                ("string" != typeof t ||
                                                    l(n, "name") ||
                                                    r(n, "name", t),
                                                (d(n).source = h.join(
                                                    "string" == typeof t
                                                        ? t
                                                        : ""
                                                ))),
                                                e !== i
                                                    ? (s
                                                          ? !p &&
                                                            e[t] &&
                                                            (c = !0)
                                                          : delete e[t],
                                                      c
                                                          ? (e[t] = n)
                                                          : r(e, t, n))
                                                    : c
                                                    ? (e[t] = n)
                                                    : a(t, n);
                                        })(
                                            Function.prototype,
                                            "toString",
                                            function () {
                                                return (
                                                    ("function" ==
                                                        typeof this &&
                                                        p(this).source) ||
                                                    s.call(this)
                                                );
                                            }
                                        );
                                },
                            "./node_modules/core-js/internals/require-object-coercible.js":
                                function (e, t) {
                                    e.exports = function (e) {
                                        if (null == e)
                                            throw TypeError(
                                                "Can't call method on " + e
                                            );
                                        return e;
                                    };
                                },
                            "./node_modules/core-js/internals/set-global.js":
                                function (e, t, n) {
                                    var i = n(
                                            "./node_modules/core-js/internals/global.js"
                                        ),
                                        o = n(
                                            "./node_modules/core-js/internals/hide.js"
                                        );
                                    e.exports = function (e, t) {
                                        try {
                                            o(i, e, t);
                                        } catch (n) {
                                            i[e] = t;
                                        }
                                        return t;
                                    };
                                },
                            "./node_modules/core-js/internals/set-to-string-tag.js":
                                function (e, t, n) {
                                    var i = n(
                                            "./node_modules/core-js/internals/object-define-property.js"
                                        ).f,
                                        o = n(
                                            "./node_modules/core-js/internals/has.js"
                                        ),
                                        r = n(
                                            "./node_modules/core-js/internals/well-known-symbol.js"
                                        )("toStringTag");
                                    e.exports = function (e, t, n) {
                                        e &&
                                            !o((e = n ? e : e.prototype), r) &&
                                            i(e, r, {
                                                configurable: !0,
                                                value: t,
                                            });
                                    };
                                },
                            "./node_modules/core-js/internals/shared-key.js":
                                function (e, t, n) {
                                    var i = n(
                                            "./node_modules/core-js/internals/shared.js"
                                        ),
                                        o = n(
                                            "./node_modules/core-js/internals/uid.js"
                                        ),
                                        r = i("keys");
                                    e.exports = function (e) {
                                        return r[e] || (r[e] = o(e));
                                    };
                                },
                            "./node_modules/core-js/internals/shared.js":
                                function (e, t, n) {
                                    var i = n(
                                            "./node_modules/core-js/internals/global.js"
                                        ),
                                        o = n(
                                            "./node_modules/core-js/internals/set-global.js"
                                        ),
                                        r = n(
                                            "./node_modules/core-js/internals/is-pure.js"
                                        ),
                                        l = "__core-js_shared__",
                                        a = i[l] || o(l, {});
                                    (e.exports = function (e, t) {
                                        return (
                                            a[e] ||
                                            (a[e] = void 0 !== t ? t : {})
                                        );
                                    })("versions", []).push({
                                        version: "3.1.3",
                                        mode: r ? "pure" : "global",
                                        copyright:
                                            "© 2019 Denis Pushkarev (zloirock.ru)",
                                    });
                                },
                            "./node_modules/core-js/internals/string-at.js":
                                function (e, t, n) {
                                    var i = n(
                                            "./node_modules/core-js/internals/to-integer.js"
                                        ),
                                        o = n(
                                            "./node_modules/core-js/internals/require-object-coercible.js"
                                        );
                                    e.exports = function (e, t, n) {
                                        var r,
                                            l,
                                            a = String(o(e)),
                                            s = i(t),
                                            c = a.length;
                                        return s < 0 || s >= c
                                            ? n
                                                ? ""
                                                : void 0
                                            : (r = a.charCodeAt(s)) < 55296 ||
                                              r > 56319 ||
                                              s + 1 === c ||
                                              (l = a.charCodeAt(s + 1)) <
                                                  56320 ||
                                              l > 57343
                                            ? n
                                                ? a.charAt(s)
                                                : r
                                            : n
                                            ? a.slice(s, s + 2)
                                            : l -
                                              56320 +
                                              ((r - 55296) << 10) +
                                              65536;
                                    };
                                },
                            "./node_modules/core-js/internals/to-absolute-index.js":
                                function (e, t, n) {
                                    var i = n(
                                            "./node_modules/core-js/internals/to-integer.js"
                                        ),
                                        o = Math.max,
                                        r = Math.min;
                                    e.exports = function (e, t) {
                                        var n = i(e);
                                        return n < 0 ? o(n + t, 0) : r(n, t);
                                    };
                                },
                            "./node_modules/core-js/internals/to-indexed-object.js":
                                function (e, t, n) {
                                    var i = n(
                                            "./node_modules/core-js/internals/indexed-object.js"
                                        ),
                                        o = n(
                                            "./node_modules/core-js/internals/require-object-coercible.js"
                                        );
                                    e.exports = function (e) {
                                        return i(o(e));
                                    };
                                },
                            "./node_modules/core-js/internals/to-integer.js":
                                function (e, t) {
                                    var n = Math.ceil,
                                        i = Math.floor;
                                    e.exports = function (e) {
                                        return isNaN((e = +e))
                                            ? 0
                                            : (e > 0 ? i : n)(e);
                                    };
                                },
                            "./node_modules/core-js/internals/to-length.js":
                                function (e, t, n) {
                                    var i = n(
                                            "./node_modules/core-js/internals/to-integer.js"
                                        ),
                                        o = Math.min;
                                    e.exports = function (e) {
                                        return e > 0
                                            ? o(i(e), 9007199254740991)
                                            : 0;
                                    };
                                },
                            "./node_modules/core-js/internals/to-object.js":
                                function (e, t, n) {
                                    var i = n(
                                        "./node_modules/core-js/internals/require-object-coercible.js"
                                    );
                                    e.exports = function (e) {
                                        return Object(i(e));
                                    };
                                },
                            "./node_modules/core-js/internals/to-primitive.js":
                                function (e, t, n) {
                                    var i = n(
                                        "./node_modules/core-js/internals/is-object.js"
                                    );
                                    e.exports = function (e, t) {
                                        if (!i(e)) return e;
                                        var n, o;
                                        if (
                                            t &&
                                            "function" ==
                                                typeof (n = e.toString) &&
                                            !i((o = n.call(e)))
                                        )
                                            return o;
                                        if (
                                            "function" ==
                                                typeof (n = e.valueOf) &&
                                            !i((o = n.call(e)))
                                        )
                                            return o;
                                        if (
                                            !t &&
                                            "function" ==
                                                typeof (n = e.toString) &&
                                            !i((o = n.call(e)))
                                        )
                                            return o;
                                        throw TypeError(
                                            "Can't convert object to primitive value"
                                        );
                                    };
                                },
                            "./node_modules/core-js/internals/uid.js":
                                function (e, t) {
                                    var n = 0,
                                        i = Math.random();
                                    e.exports = function (e) {
                                        return "Symbol(".concat(
                                            void 0 === e ? "" : e,
                                            ")_",
                                            (++n + i).toString(36)
                                        );
                                    };
                                },
                            "./node_modules/core-js/internals/validate-set-prototype-of-arguments.js":
                                function (e, t, n) {
                                    var i = n(
                                            "./node_modules/core-js/internals/is-object.js"
                                        ),
                                        o = n(
                                            "./node_modules/core-js/internals/an-object.js"
                                        );
                                    e.exports = function (e, t) {
                                        if ((o(e), !i(t) && null !== t))
                                            throw TypeError(
                                                "Can't set " +
                                                    String(t) +
                                                    " as a prototype"
                                            );
                                    };
                                },
                            "./node_modules/core-js/internals/well-known-symbol.js":
                                function (e, t, n) {
                                    var i = n(
                                            "./node_modules/core-js/internals/global.js"
                                        ),
                                        o = n(
                                            "./node_modules/core-js/internals/shared.js"
                                        ),
                                        r = n(
                                            "./node_modules/core-js/internals/uid.js"
                                        ),
                                        l = n(
                                            "./node_modules/core-js/internals/native-symbol.js"
                                        ),
                                        a = i.Symbol,
                                        s = o("wks");
                                    e.exports = function (e) {
                                        return (
                                            s[e] ||
                                            (s[e] =
                                                (l && a[e]) ||
                                                (l ? a : r)("Symbol." + e))
                                        );
                                    };
                                },
                            "./node_modules/core-js/modules/es.array.from.js":
                                function (e, t, n) {
                                    var i = n(
                                            "./node_modules/core-js/internals/export.js"
                                        ),
                                        o = n(
                                            "./node_modules/core-js/internals/array-from.js"
                                        );
                                    i(
                                        {
                                            target: "Array",
                                            stat: !0,
                                            forced: !n(
                                                "./node_modules/core-js/internals/check-correctness-of-iteration.js"
                                            )(function (e) {
                                                Array.from(e);
                                            }),
                                        },
                                        { from: o }
                                    );
                                },
                            "./node_modules/core-js/modules/es.string.iterator.js":
                                function (e, t, n) {
                                    "use strict";
                                    var i = n(
                                            "./node_modules/core-js/internals/string-at.js"
                                        ),
                                        o = n(
                                            "./node_modules/core-js/internals/internal-state.js"
                                        ),
                                        r = n(
                                            "./node_modules/core-js/internals/define-iterator.js"
                                        ),
                                        l = "String Iterator",
                                        a = o.set,
                                        s = o.getterFor(l);
                                    r(
                                        String,
                                        "String",
                                        function (e) {
                                            a(this, {
                                                type: l,
                                                string: String(e),
                                                index: 0,
                                            });
                                        },
                                        function () {
                                            var e,
                                                t = s(this),
                                                n = t.string,
                                                o = t.index;
                                            return o >= n.length
                                                ? { value: void 0, done: !0 }
                                                : ((e = i(n, o, !0)),
                                                  (t.index += e.length),
                                                  { value: e, done: !1 });
                                        }
                                    );
                                },
                            "./node_modules/webpack/buildin/global.js":
                                function (e, t) {
                                    var n;
                                    n = (function () {
                                        return this;
                                    })();
                                    try {
                                        n =
                                            n ||
                                            Function("return this")() ||
                                            (0, eval)("this");
                                    } catch (e) {
                                        "object" == typeof window &&
                                            (n = window);
                                    }
                                    e.exports = n;
                                },
                            "./src/default-attrs.json": function (e) {
                                e.exports = {
                                    xmlns: "http://www.w3.org/2000/svg",
                                    width: 24,
                                    height: 24,
                                    viewBox: "0 0 24 24",
                                    fill: "none",
                                    stroke: "currentColor",
                                    "stroke-width": 2,
                                    "stroke-linecap": "round",
                                    "stroke-linejoin": "round",
                                };
                            },
                            "./src/icon.js": function (e, t, n) {
                                "use strict";
                                Object.defineProperty(t, "__esModule", {
                                    value: !0,
                                });
                                var i =
                                        Object.assign ||
                                        function (e) {
                                            for (
                                                var t = 1;
                                                t < arguments.length;
                                                t++
                                            ) {
                                                var n = arguments[t];
                                                for (var i in n)
                                                    Object.prototype.hasOwnProperty.call(
                                                        n,
                                                        i
                                                    ) && (e[i] = n[i]);
                                            }
                                            return e;
                                        },
                                    o = (function () {
                                        function e(e, t) {
                                            for (var n = 0; n < t.length; n++) {
                                                var i = t[n];
                                                (i.enumerable =
                                                    i.enumerable || !1),
                                                    (i.configurable = !0),
                                                    "value" in i &&
                                                        (i.writable = !0),
                                                    Object.defineProperty(
                                                        e,
                                                        i.key,
                                                        i
                                                    );
                                            }
                                        }
                                        return function (t, n, i) {
                                            return (
                                                n && e(t.prototype, n),
                                                i && e(t, i),
                                                t
                                            );
                                        };
                                    })(),
                                    r = a(
                                        n("./node_modules/classnames/dedupe.js")
                                    ),
                                    l = a(n("./src/default-attrs.json"));
                                function a(e) {
                                    return e && e.__esModule
                                        ? e
                                        : { default: e };
                                }
                                function s(e, t) {
                                    if (!(e instanceof t))
                                        throw new TypeError(
                                            "Cannot call a class as a function"
                                        );
                                }
                                var c = (function () {
                                    function e(t, n) {
                                        var o =
                                            arguments.length > 2 &&
                                            void 0 !== arguments[2]
                                                ? arguments[2]
                                                : [];
                                        s(this, e),
                                            (this.name = t),
                                            (this.contents = n),
                                            (this.tags = o),
                                            (this.attrs = i({}, l.default, {
                                                class: "feather feather-" + t,
                                            }));
                                    }
                                    return (
                                        o(e, [
                                            {
                                                key: "toSvg",
                                                value: function () {
                                                    var e =
                                                            arguments.length >
                                                                0 &&
                                                            void 0 !==
                                                                arguments[0]
                                                                ? arguments[0]
                                                                : {},
                                                        t = i(
                                                            {},
                                                            this.attrs,
                                                            e,
                                                            {
                                                                class: (0,
                                                                r.default)(
                                                                    this.attrs
                                                                        .class,
                                                                    e.class
                                                                ),
                                                            }
                                                        );
                                                    return (
                                                        "<svg " +
                                                        p(t) +
                                                        ">" +
                                                        this.contents +
                                                        "</svg>"
                                                    );
                                                },
                                            },
                                            {
                                                key: "toString",
                                                value: function () {
                                                    return this.contents;
                                                },
                                            },
                                        ]),
                                        e
                                    );
                                })();
                                function p(e) {
                                    return Object.keys(e)
                                        .map(function (t) {
                                            return t + '="' + e[t] + '"';
                                        })
                                        .join(" ");
                                }
                                t.default = c;
                            },
                            "./src/icons.js": function (e, t, n) {
                                "use strict";
                                Object.defineProperty(t, "__esModule", {
                                    value: !0,
                                });
                                var i = l(n("./src/icon.js")),
                                    o = l(n("./dist/icons.json")),
                                    r = l(n("./src/tags.json"));
                                function l(e) {
                                    return e && e.__esModule
                                        ? e
                                        : { default: e };
                                }
                                t.default = Object.keys(o.default)
                                    .map(function (e) {
                                        return new i.default(
                                            e,
                                            o.default[e],
                                            r.default[e]
                                        );
                                    })
                                    .reduce(function (e, t) {
                                        return (e[t.name] = t), e;
                                    }, {});
                            },
                            "./src/index.js": function (e, t, n) {
                                "use strict";
                                var i = l(n("./src/icons.js")),
                                    o = l(n("./src/to-svg.js")),
                                    r = l(n("./src/replace.js"));
                                function l(e) {
                                    return e && e.__esModule
                                        ? e
                                        : { default: e };
                                }
                                e.exports = {
                                    icons: i.default,
                                    toSvg: o.default,
                                    replace: r.default,
                                };
                            },
                            "./src/replace.js": function (e, t, n) {
                                "use strict";
                                Object.defineProperty(t, "__esModule", {
                                    value: !0,
                                });
                                var i =
                                        Object.assign ||
                                        function (e) {
                                            for (
                                                var t = 1;
                                                t < arguments.length;
                                                t++
                                            ) {
                                                var n = arguments[t];
                                                for (var i in n)
                                                    Object.prototype.hasOwnProperty.call(
                                                        n,
                                                        i
                                                    ) && (e[i] = n[i]);
                                            }
                                            return e;
                                        },
                                    o = l(
                                        n("./node_modules/classnames/dedupe.js")
                                    ),
                                    r = l(n("./src/icons.js"));
                                function l(e) {
                                    return e && e.__esModule
                                        ? e
                                        : { default: e };
                                }
                                function a(e) {
                                    var t =
                                            arguments.length > 1 &&
                                            void 0 !== arguments[1]
                                                ? arguments[1]
                                                : {},
                                        n = s(e),
                                        l = n["data-feather"];
                                    delete n["data-feather"];
                                    var a = r.default[l].toSvg(
                                            i({}, t, n, {
                                                class: (0, o.default)(
                                                    t.class,
                                                    n.class
                                                ),
                                            })
                                        ),
                                        c = new DOMParser().parseFromString(
                                            a,
                                            "image/svg+xml"
                                        ),
                                        p = c.querySelector("svg");
                                    e.parentNode.replaceChild(p, e);
                                }
                                function s(e) {
                                    return Array.from(e.attributes).reduce(
                                        function (e, t) {
                                            return (e[t.name] = t.value), e;
                                        },
                                        {}
                                    );
                                }
                                t.default = function () {
                                    var e =
                                        arguments.length > 0 &&
                                        void 0 !== arguments[0]
                                            ? arguments[0]
                                            : {};
                                    if ("undefined" == typeof document)
                                        throw new Error(
                                            "`feather.replace()` only works in a browser environment."
                                        );
                                    var t =
                                        document.querySelectorAll(
                                            "[data-feather]"
                                        );
                                    Array.from(t).forEach(function (t) {
                                        return a(t, e);
                                    });
                                };
                            },
                            "./src/tags.json": function (e) {
                                e.exports = {
                                    activity: [
                                        "pulse",
                                        "health",
                                        "action",
                                        "motion",
                                    ],
                                    airplay: ["stream", "cast", "mirroring"],
                                    "alert-circle": [
                                        "warning",
                                        "alert",
                                        "danger",
                                    ],
                                    "alert-octagon": [
                                        "warning",
                                        "alert",
                                        "danger",
                                    ],
                                    "alert-triangle": [
                                        "warning",
                                        "alert",
                                        "danger",
                                    ],
                                    "align-center": [
                                        "text alignment",
                                        "center",
                                    ],
                                    "align-justify": [
                                        "text alignment",
                                        "justified",
                                    ],
                                    "align-left": ["text alignment", "left"],
                                    "align-right": ["text alignment", "right"],
                                    anchor: [],
                                    archive: ["index", "box"],
                                    "at-sign": [
                                        "mention",
                                        "at",
                                        "email",
                                        "message",
                                    ],
                                    award: ["achievement", "badge"],
                                    aperture: ["camera", "photo"],
                                    "bar-chart": [
                                        "statistics",
                                        "diagram",
                                        "graph",
                                    ],
                                    "bar-chart-2": [
                                        "statistics",
                                        "diagram",
                                        "graph",
                                    ],
                                    battery: ["power", "electricity"],
                                    "battery-charging": [
                                        "power",
                                        "electricity",
                                    ],
                                    bell: ["alarm", "notification", "sound"],
                                    "bell-off": [
                                        "alarm",
                                        "notification",
                                        "silent",
                                    ],
                                    bluetooth: ["wireless"],
                                    "book-open": ["read", "library"],
                                    book: [
                                        "read",
                                        "dictionary",
                                        "booklet",
                                        "magazine",
                                        "library",
                                    ],
                                    bookmark: ["read", "clip", "marker", "tag"],
                                    box: ["cube"],
                                    briefcase: [
                                        "work",
                                        "bag",
                                        "baggage",
                                        "folder",
                                    ],
                                    calendar: ["date"],
                                    camera: ["photo"],
                                    cast: ["chromecast", "airplay"],
                                    "chevron-down": ["expand"],
                                    "chevron-up": ["collapse"],
                                    circle: ["off", "zero", "record"],
                                    clipboard: ["copy"],
                                    clock: ["time", "watch", "alarm"],
                                    "cloud-drizzle": ["weather", "shower"],
                                    "cloud-lightning": ["weather", "bolt"],
                                    "cloud-rain": ["weather"],
                                    "cloud-snow": ["weather", "blizzard"],
                                    cloud: ["weather"],
                                    codepen: ["logo"],
                                    codesandbox: ["logo"],
                                    code: ["source", "programming"],
                                    coffee: [
                                        "drink",
                                        "cup",
                                        "mug",
                                        "tea",
                                        "cafe",
                                        "hot",
                                        "beverage",
                                    ],
                                    columns: ["layout"],
                                    command: [
                                        "keyboard",
                                        "cmd",
                                        "terminal",
                                        "prompt",
                                    ],
                                    compass: [
                                        "navigation",
                                        "safari",
                                        "travel",
                                        "direction",
                                    ],
                                    copy: ["clone", "duplicate"],
                                    "corner-down-left": ["arrow", "return"],
                                    "corner-down-right": ["arrow"],
                                    "corner-left-down": ["arrow"],
                                    "corner-left-up": ["arrow"],
                                    "corner-right-down": ["arrow"],
                                    "corner-right-up": ["arrow"],
                                    "corner-up-left": ["arrow"],
                                    "corner-up-right": ["arrow"],
                                    cpu: ["processor", "technology"],
                                    "credit-card": [
                                        "purchase",
                                        "payment",
                                        "cc",
                                    ],
                                    crop: ["photo", "image"],
                                    crosshair: ["aim", "target"],
                                    database: ["storage", "memory"],
                                    delete: ["remove"],
                                    disc: ["album", "cd", "dvd", "music"],
                                    "dollar-sign": [
                                        "currency",
                                        "money",
                                        "payment",
                                    ],
                                    droplet: ["water"],
                                    edit: ["pencil", "change"],
                                    "edit-2": ["pencil", "change"],
                                    "edit-3": ["pencil", "change"],
                                    eye: ["view", "watch"],
                                    "eye-off": [
                                        "view",
                                        "watch",
                                        "hide",
                                        "hidden",
                                    ],
                                    "external-link": ["outbound"],
                                    facebook: ["logo", "social"],
                                    "fast-forward": ["music"],
                                    figma: ["logo", "design", "tool"],
                                    "file-minus": ["delete", "remove", "erase"],
                                    "file-plus": ["add", "create", "new"],
                                    "file-text": ["data", "txt", "pdf"],
                                    film: ["movie", "video"],
                                    filter: ["funnel", "hopper"],
                                    flag: ["report"],
                                    "folder-minus": ["directory"],
                                    "folder-plus": ["directory"],
                                    folder: ["directory"],
                                    framer: ["logo", "design", "tool"],
                                    frown: [
                                        "emoji",
                                        "face",
                                        "bad",
                                        "sad",
                                        "emotion",
                                    ],
                                    gift: [
                                        "present",
                                        "box",
                                        "birthday",
                                        "party",
                                    ],
                                    "git-branch": ["code", "version control"],
                                    "git-commit": ["code", "version control"],
                                    "git-merge": ["code", "version control"],
                                    "git-pull-request": [
                                        "code",
                                        "version control",
                                    ],
                                    github: ["logo", "version control"],
                                    gitlab: ["logo", "version control"],
                                    globe: [
                                        "world",
                                        "browser",
                                        "language",
                                        "translate",
                                    ],
                                    "hard-drive": [
                                        "computer",
                                        "server",
                                        "memory",
                                        "data",
                                    ],
                                    hash: ["hashtag", "number", "pound"],
                                    headphones: ["music", "audio", "sound"],
                                    heart: ["like", "love", "emotion"],
                                    "help-circle": ["question mark"],
                                    hexagon: ["shape", "node.js", "logo"],
                                    home: ["house", "living"],
                                    image: ["picture"],
                                    inbox: ["email"],
                                    instagram: ["logo", "camera"],
                                    key: [
                                        "password",
                                        "login",
                                        "authentication",
                                        "secure",
                                    ],
                                    layers: ["stack"],
                                    layout: ["window", "webpage"],
                                    "life-bouy": [
                                        "help",
                                        "life ring",
                                        "support",
                                    ],
                                    link: ["chain", "url"],
                                    "link-2": ["chain", "url"],
                                    linkedin: ["logo", "social media"],
                                    list: ["options"],
                                    lock: ["security", "password", "secure"],
                                    "log-in": ["sign in", "arrow", "enter"],
                                    "log-out": ["sign out", "arrow", "exit"],
                                    mail: ["email", "message"],
                                    "map-pin": [
                                        "location",
                                        "navigation",
                                        "travel",
                                        "marker",
                                    ],
                                    map: ["location", "navigation", "travel"],
                                    maximize: ["fullscreen"],
                                    "maximize-2": [
                                        "fullscreen",
                                        "arrows",
                                        "expand",
                                    ],
                                    meh: [
                                        "emoji",
                                        "face",
                                        "neutral",
                                        "emotion",
                                    ],
                                    menu: ["bars", "navigation", "hamburger"],
                                    "message-circle": ["comment", "chat"],
                                    "message-square": ["comment", "chat"],
                                    "mic-off": ["record", "sound", "mute"],
                                    mic: ["record", "sound", "listen"],
                                    minimize: ["exit fullscreen", "close"],
                                    "minimize-2": [
                                        "exit fullscreen",
                                        "arrows",
                                        "close",
                                    ],
                                    minus: ["subtract"],
                                    monitor: ["tv", "screen", "display"],
                                    moon: ["dark", "night"],
                                    "more-horizontal": ["ellipsis"],
                                    "more-vertical": ["ellipsis"],
                                    "mouse-pointer": ["arrow", "cursor"],
                                    move: ["arrows"],
                                    music: ["note"],
                                    navigation: ["location", "travel"],
                                    "navigation-2": ["location", "travel"],
                                    octagon: ["stop"],
                                    package: ["box", "container"],
                                    paperclip: ["attachment"],
                                    pause: ["music", "stop"],
                                    "pause-circle": ["music", "audio", "stop"],
                                    "pen-tool": ["vector", "drawing"],
                                    percent: ["discount"],
                                    "phone-call": ["ring"],
                                    "phone-forwarded": ["call"],
                                    "phone-incoming": ["call"],
                                    "phone-missed": ["call"],
                                    "phone-off": ["call", "mute"],
                                    "phone-outgoing": ["call"],
                                    phone: ["call"],
                                    play: ["music", "start"],
                                    "pie-chart": ["statistics", "diagram"],
                                    "play-circle": ["music", "start"],
                                    plus: ["add", "new"],
                                    "plus-circle": ["add", "new"],
                                    "plus-square": ["add", "new"],
                                    pocket: ["logo", "save"],
                                    power: ["on", "off"],
                                    printer: ["fax", "office", "device"],
                                    radio: ["signal"],
                                    "refresh-cw": ["synchronise", "arrows"],
                                    "refresh-ccw": ["arrows"],
                                    repeat: ["loop", "arrows"],
                                    rewind: ["music"],
                                    "rotate-ccw": ["arrow"],
                                    "rotate-cw": ["arrow"],
                                    rss: ["feed", "subscribe"],
                                    save: ["floppy disk"],
                                    scissors: ["cut"],
                                    search: [
                                        "find",
                                        "magnifier",
                                        "magnifying glass",
                                    ],
                                    send: [
                                        "message",
                                        "mail",
                                        "email",
                                        "paper airplane",
                                        "paper aeroplane",
                                    ],
                                    settings: [
                                        "cog",
                                        "edit",
                                        "gear",
                                        "preferences",
                                    ],
                                    "share-2": ["network", "connections"],
                                    shield: ["security", "secure"],
                                    "shield-off": ["security", "insecure"],
                                    "shopping-bag": [
                                        "ecommerce",
                                        "cart",
                                        "purchase",
                                        "store",
                                    ],
                                    "shopping-cart": [
                                        "ecommerce",
                                        "cart",
                                        "purchase",
                                        "store",
                                    ],
                                    shuffle: ["music"],
                                    "skip-back": ["music"],
                                    "skip-forward": ["music"],
                                    slack: ["logo"],
                                    slash: ["ban", "no"],
                                    sliders: ["settings", "controls"],
                                    smartphone: ["cellphone", "device"],
                                    smile: [
                                        "emoji",
                                        "face",
                                        "happy",
                                        "good",
                                        "emotion",
                                    ],
                                    speaker: ["audio", "music"],
                                    star: ["bookmark", "favorite", "like"],
                                    "stop-circle": ["media", "music"],
                                    sun: ["brightness", "weather", "light"],
                                    sunrise: [
                                        "weather",
                                        "time",
                                        "morning",
                                        "day",
                                    ],
                                    sunset: [
                                        "weather",
                                        "time",
                                        "evening",
                                        "night",
                                    ],
                                    tablet: ["device"],
                                    tag: ["label"],
                                    target: ["logo", "bullseye"],
                                    terminal: [
                                        "code",
                                        "command line",
                                        "prompt",
                                    ],
                                    thermometer: [
                                        "temperature",
                                        "celsius",
                                        "fahrenheit",
                                        "weather",
                                    ],
                                    "thumbs-down": [
                                        "dislike",
                                        "bad",
                                        "emotion",
                                    ],
                                    "thumbs-up": ["like", "good", "emotion"],
                                    "toggle-left": ["on", "off", "switch"],
                                    "toggle-right": ["on", "off", "switch"],
                                    tool: ["settings", "spanner"],
                                    trash: [
                                        "garbage",
                                        "delete",
                                        "remove",
                                        "bin",
                                    ],
                                    "trash-2": [
                                        "garbage",
                                        "delete",
                                        "remove",
                                        "bin",
                                    ],
                                    triangle: ["delta"],
                                    truck: [
                                        "delivery",
                                        "van",
                                        "shipping",
                                        "transport",
                                        "lorry",
                                    ],
                                    tv: ["television", "stream"],
                                    twitch: ["logo"],
                                    twitter: ["logo", "social"],
                                    type: ["text"],
                                    umbrella: ["rain", "weather"],
                                    unlock: ["security"],
                                    "user-check": ["followed", "subscribed"],
                                    "user-minus": [
                                        "delete",
                                        "remove",
                                        "unfollow",
                                        "unsubscribe",
                                    ],
                                    "user-plus": [
                                        "new",
                                        "add",
                                        "create",
                                        "follow",
                                        "subscribe",
                                    ],
                                    "user-x": [
                                        "delete",
                                        "remove",
                                        "unfollow",
                                        "unsubscribe",
                                        "unavailable",
                                    ],
                                    user: ["person", "account"],
                                    users: ["group"],
                                    "video-off": ["camera", "movie", "film"],
                                    video: ["camera", "movie", "film"],
                                    voicemail: ["phone"],
                                    volume: ["music", "sound", "mute"],
                                    "volume-1": ["music", "sound"],
                                    "volume-2": ["music", "sound"],
                                    "volume-x": ["music", "sound", "mute"],
                                    watch: ["clock", "time"],
                                    "wifi-off": ["disabled"],
                                    wifi: ["connection", "signal", "wireless"],
                                    wind: ["weather", "air"],
                                    "x-circle": [
                                        "cancel",
                                        "close",
                                        "delete",
                                        "remove",
                                        "times",
                                        "clear",
                                    ],
                                    "x-octagon": [
                                        "delete",
                                        "stop",
                                        "alert",
                                        "warning",
                                        "times",
                                        "clear",
                                    ],
                                    "x-square": [
                                        "cancel",
                                        "close",
                                        "delete",
                                        "remove",
                                        "times",
                                        "clear",
                                    ],
                                    x: [
                                        "cancel",
                                        "close",
                                        "delete",
                                        "remove",
                                        "times",
                                        "clear",
                                    ],
                                    youtube: ["logo", "video", "play"],
                                    "zap-off": ["flash", "camera", "lightning"],
                                    zap: ["flash", "camera", "lightning"],
                                    "zoom-in": ["magnifying glass"],
                                    "zoom-out": ["magnifying glass"],
                                };
                            },
                            "./src/to-svg.js": function (e, t, n) {
                                "use strict";
                                Object.defineProperty(t, "__esModule", {
                                    value: !0,
                                });
                                var i,
                                    o = n("./src/icons.js"),
                                    r =
                                        (i = o) && i.__esModule
                                            ? i
                                            : { default: i };
                                t.default = function (e) {
                                    var t =
                                        arguments.length > 1 &&
                                        void 0 !== arguments[1]
                                            ? arguments[1]
                                            : {};
                                    if (
                                        (console.warn(
                                            "feather.toSvg() is deprecated. Please use feather.icons[name].toSvg() instead."
                                        ),
                                        !e)
                                    )
                                        throw new Error(
                                            "The required `key` (icon name) parameter is missing."
                                        );
                                    if (!r.default[e])
                                        throw new Error(
                                            "No icon matching '" +
                                                e +
                                                "'. See the complete list of icons at https://feathericons.com"
                                        );
                                    return r.default[e].toSvg(t);
                                };
                            },
                            0: function (e, t, n) {
                                n("./node_modules/core-js/es/array/from.js"),
                                    (e.exports = n("./src/index.js"));
                            },
                        });
                    }),
                    (e.exports = t());
            },
            596: () => {},
            944: () => {},
            362: () => {},
            308: () => {},
            774: () => {},
            650: () => {},
            453: () => {},
            758: () => {},
            155: () => {},
            498: () => {},
            829: () => {},
            967: () => {},
            154: () => {},
            242: () => {},
            225: function (e) {
                e.exports = (function () {
                    "use strict";
                    var e = Math.abs,
                        t = Math.floor;
                    function n(e) {
                        return getComputedStyle(e);
                    }
                    function i(e, t) {
                        for (var n in t) {
                            var i = t[n];
                            "number" == typeof i && (i += "px"),
                                (e.style[n] = i);
                        }
                        return e;
                    }
                    function o(e) {
                        var t = document.createElement("div");
                        return (t.className = e), t;
                    }
                    function r(e, t) {
                        if (!b)
                            throw new Error(
                                "No element matching method supported"
                            );
                        return b.call(e, t);
                    }
                    function l(e) {
                        e.remove
                            ? e.remove()
                            : e.parentNode && e.parentNode.removeChild(e);
                    }
                    function a(e, t) {
                        return Array.prototype.filter.call(
                            e.children,
                            function (e) {
                                return r(e, t);
                            }
                        );
                    }
                    function s(e, t) {
                        var n = e.element.classList,
                            i = w.state.scrolling(t);
                        n.contains(i) ? clearTimeout(_[t]) : n.add(i);
                    }
                    function c(e, t) {
                        _[t] = setTimeout(function () {
                            return (
                                e.isAlive &&
                                e.element.classList.remove(w.state.scrolling(t))
                            );
                        }, e.settings.scrollingThreshold);
                    }
                    function p(e, t) {
                        s(e, t), c(e, t);
                    }
                    function d(e) {
                        if ("function" == typeof window.CustomEvent)
                            return new CustomEvent(e);
                        var t = document.createEvent("CustomEvent");
                        return t.initCustomEvent(e, !1, !1, void 0), t;
                    }
                    function h(e, t, n, i, o) {
                        var r;
                        if (
                            (void 0 === i && (i = !0),
                            void 0 === o && (o = !1),
                            "top" === t)
                        )
                            r = [
                                "contentHeight",
                                "containerHeight",
                                "scrollTop",
                                "y",
                                "up",
                                "down",
                            ];
                        else {
                            if ("left" !== t)
                                throw new Error(
                                    "A proper axis should be provided"
                                );
                            r = [
                                "contentWidth",
                                "containerWidth",
                                "scrollLeft",
                                "x",
                                "left",
                                "right",
                            ];
                        }
                        u(e, n, r, i, o);
                    }
                    function u(e, t, n, i, o) {
                        var r = n[0],
                            l = n[1],
                            a = n[2],
                            s = n[3],
                            c = n[4],
                            h = n[5];
                        void 0 === i && (i = !0), void 0 === o && (o = !1);
                        var u = e.element;
                        (e.reach[s] = null),
                            1 > u[a] && (e.reach[s] = "start"),
                            u[a] > e[r] - e[l] - 1 && (e.reach[s] = "end"),
                            t &&
                                (u.dispatchEvent(d("ps-scroll-" + s)),
                                0 > t
                                    ? u.dispatchEvent(d("ps-scroll-" + c))
                                    : 0 < t &&
                                      u.dispatchEvent(d("ps-scroll-" + h)),
                                i && p(e, s)),
                            e.reach[s] &&
                                (t || o) &&
                                u.dispatchEvent(
                                    d("ps-" + s + "-reach-" + e.reach[s])
                                );
                    }
                    function y(e) {
                        return parseInt(e, 10) || 0;
                    }
                    function f(e) {
                        return (
                            r(e, "input,[contenteditable]") ||
                            r(e, "select,[contenteditable]") ||
                            r(e, "textarea,[contenteditable]") ||
                            r(e, "button,[contenteditable]")
                        );
                    }
                    function x(e) {
                        var t = n(e);
                        return (
                            y(t.width) +
                            y(t.paddingLeft) +
                            y(t.paddingRight) +
                            y(t.borderLeftWidth) +
                            y(t.borderRightWidth)
                        );
                    }
                    function m(e) {
                        var n = Math.round,
                            i = e.element,
                            o = t(i.scrollTop),
                            r = i.getBoundingClientRect();
                        (e.containerWidth = n(r.width)),
                            (e.containerHeight = n(r.height)),
                            (e.contentWidth = i.scrollWidth),
                            (e.contentHeight = i.scrollHeight),
                            i.contains(e.scrollbarXRail) ||
                                (a(i, w.element.rail("x")).forEach(function (
                                    e
                                ) {
                                    return l(e);
                                }),
                                i.appendChild(e.scrollbarXRail)),
                            i.contains(e.scrollbarYRail) ||
                                (a(i, w.element.rail("y")).forEach(function (
                                    e
                                ) {
                                    return l(e);
                                }),
                                i.appendChild(e.scrollbarYRail)),
                            !e.settings.suppressScrollX &&
                            e.containerWidth + e.settings.scrollXMarginOffset <
                                e.contentWidth
                                ? ((e.scrollbarXActive = !0),
                                  (e.railXWidth =
                                      e.containerWidth - e.railXMarginWidth),
                                  (e.railXRatio =
                                      e.containerWidth / e.railXWidth),
                                  (e.scrollbarXWidth = g(
                                      e,
                                      y(
                                          (e.railXWidth * e.containerWidth) /
                                              e.contentWidth
                                      )
                                  )),
                                  (e.scrollbarXLeft = y(
                                      ((e.negativeScrollAdjustment +
                                          i.scrollLeft) *
                                          (e.railXWidth - e.scrollbarXWidth)) /
                                          (e.contentWidth - e.containerWidth)
                                  )))
                                : (e.scrollbarXActive = !1),
                            !e.settings.suppressScrollY &&
                            e.containerHeight + e.settings.scrollYMarginOffset <
                                e.contentHeight
                                ? ((e.scrollbarYActive = !0),
                                  (e.railYHeight =
                                      e.containerHeight - e.railYMarginHeight),
                                  (e.railYRatio =
                                      e.containerHeight / e.railYHeight),
                                  (e.scrollbarYHeight = g(
                                      e,
                                      y(
                                          (e.railYHeight * e.containerHeight) /
                                              e.contentHeight
                                      )
                                  )),
                                  (e.scrollbarYTop = y(
                                      (o *
                                          (e.railYHeight -
                                              e.scrollbarYHeight)) /
                                          (e.contentHeight - e.containerHeight)
                                  )))
                                : (e.scrollbarYActive = !1),
                            e.scrollbarXLeft >=
                                e.railXWidth - e.scrollbarXWidth &&
                                (e.scrollbarXLeft =
                                    e.railXWidth - e.scrollbarXWidth),
                            e.scrollbarYTop >=
                                e.railYHeight - e.scrollbarYHeight &&
                                (e.scrollbarYTop =
                                    e.railYHeight - e.scrollbarYHeight),
                            v(i, e),
                            e.scrollbarXActive
                                ? i.classList.add(w.state.active("x"))
                                : (i.classList.remove(w.state.active("x")),
                                  (e.scrollbarXWidth = 0),
                                  (e.scrollbarXLeft = 0),
                                  (i.scrollLeft =
                                      !0 === e.isRtl ? e.contentWidth : 0)),
                            e.scrollbarYActive
                                ? i.classList.add(w.state.active("y"))
                                : (i.classList.remove(w.state.active("y")),
                                  (e.scrollbarYHeight = 0),
                                  (e.scrollbarYTop = 0),
                                  (i.scrollTop = 0));
                    }
                    function g(e, t) {
                        var n = Math.min,
                            i = Math.max;
                        return (
                            e.settings.minScrollbarLength &&
                                (t = i(t, e.settings.minScrollbarLength)),
                            e.settings.maxScrollbarLength &&
                                (t = n(t, e.settings.maxScrollbarLength)),
                            t
                        );
                    }
                    function v(e, n) {
                        var o = { width: n.railXWidth },
                            r = t(e.scrollTop);
                        (o.left = n.isRtl
                            ? n.negativeScrollAdjustment +
                              e.scrollLeft +
                              n.containerWidth -
                              n.contentWidth
                            : e.scrollLeft),
                            n.isScrollbarXUsingBottom
                                ? (o.bottom = n.scrollbarXBottom - r)
                                : (o.top = n.scrollbarXTop + r),
                            i(n.scrollbarXRail, o);
                        var l = { top: r, height: n.railYHeight };
                        n.isScrollbarYUsingRight
                            ? n.isRtl
                                ? (l.right =
                                      n.contentWidth -
                                      (n.negativeScrollAdjustment +
                                          e.scrollLeft) -
                                      n.scrollbarYRight -
                                      n.scrollbarYOuterWidth -
                                      9)
                                : (l.right = n.scrollbarYRight - e.scrollLeft)
                            : n.isRtl
                            ? (l.left =
                                  n.negativeScrollAdjustment +
                                  e.scrollLeft +
                                  2 * n.containerWidth -
                                  n.contentWidth -
                                  n.scrollbarYLeft -
                                  n.scrollbarYOuterWidth)
                            : (l.left = n.scrollbarYLeft + e.scrollLeft),
                            i(n.scrollbarYRail, l),
                            i(n.scrollbarX, {
                                left: n.scrollbarXLeft,
                                width: n.scrollbarXWidth - n.railBorderXWidth,
                            }),
                            i(n.scrollbarY, {
                                top: n.scrollbarYTop,
                                height: n.scrollbarYHeight - n.railBorderYWidth,
                            });
                    }
                    function j(e, t) {
                        function n(t) {
                            t.touches &&
                                t.touches[0] &&
                                (t[a] = t.touches[0].pageY),
                                (x[u] = g + j * (t[a] - v)),
                                s(e, y),
                                m(e),
                                t.stopPropagation(),
                                t.type.startsWith("touch") &&
                                    1 < t.changedTouches.length &&
                                    t.preventDefault();
                        }
                        function i() {
                            c(e, y),
                                e[f].classList.remove(w.state.clicking),
                                e.event.unbind(e.ownerDocument, "mousemove", n);
                        }
                        function o(t, o) {
                            (g = x[u]),
                                o && t.touches && (t[a] = t.touches[0].pageY),
                                (v = t[a]),
                                (j = (e[l] - e[r]) / (e[p] - e[h])),
                                o
                                    ? e.event.bind(
                                          e.ownerDocument,
                                          "touchmove",
                                          n
                                      )
                                    : (e.event.bind(
                                          e.ownerDocument,
                                          "mousemove",
                                          n
                                      ),
                                      e.event.once(
                                          e.ownerDocument,
                                          "mouseup",
                                          i
                                      ),
                                      t.preventDefault()),
                                e[f].classList.add(w.state.clicking),
                                t.stopPropagation();
                        }
                        var r = t[0],
                            l = t[1],
                            a = t[2],
                            p = t[3],
                            d = t[4],
                            h = t[5],
                            u = t[6],
                            y = t[7],
                            f = t[8],
                            x = e.element,
                            g = null,
                            v = null,
                            j = null;
                        e.event.bind(e[d], "mousedown", function (e) {
                            o(e);
                        }),
                            e.event.bind(e[d], "touchstart", function (e) {
                                o(e, !0);
                            });
                    }
                    var b =
                            "undefined" != typeof Element &&
                            (Element.prototype.matches ||
                                Element.prototype.webkitMatchesSelector ||
                                Element.prototype.mozMatchesSelector ||
                                Element.prototype.msMatchesSelector),
                        w = {
                            main: "ps",
                            rtl: "ps__rtl",
                            element: {
                                thumb: function (e) {
                                    return "ps__thumb-" + e;
                                },
                                rail: function (e) {
                                    return "ps__rail-" + e;
                                },
                                consuming: "ps__child--consume",
                            },
                            state: {
                                focus: "ps--focus",
                                clicking: "ps--clicking",
                                active: function (e) {
                                    return "ps--active-" + e;
                                },
                                scrolling: function (e) {
                                    return "ps--scrolling-" + e;
                                },
                            },
                        },
                        _ = { x: null, y: null },
                        M = function (e) {
                            (this.element = e), (this.handlers = {});
                        },
                        k = { isEmpty: { configurable: !0 } };
                    (M.prototype.bind = function (e, t) {
                        void 0 === this.handlers[e] && (this.handlers[e] = []),
                            this.handlers[e].push(t),
                            this.element.addEventListener(e, t, !1);
                    }),
                        (M.prototype.unbind = function (e, t) {
                            var n = this;
                            this.handlers[e] = this.handlers[e].filter(
                                function (i) {
                                    return (
                                        !(!t || i === t) ||
                                        (n.element.removeEventListener(
                                            e,
                                            i,
                                            !1
                                        ),
                                        !1)
                                    );
                                }
                            );
                        }),
                        (M.prototype.unbindAll = function () {
                            for (var e in this.handlers) this.unbind(e);
                        }),
                        (k.isEmpty.get = function () {
                            var e = this;
                            return Object.keys(this.handlers).every(function (
                                t
                            ) {
                                return 0 === e.handlers[t].length;
                            });
                        }),
                        Object.defineProperties(M.prototype, k);
                    var A = function () {
                        this.eventElements = [];
                    };
                    (A.prototype.eventElement = function (e) {
                        var t = this.eventElements.filter(function (t) {
                            return t.element === e;
                        })[0];
                        return (
                            t || ((t = new M(e)), this.eventElements.push(t)), t
                        );
                    }),
                        (A.prototype.bind = function (e, t, n) {
                            this.eventElement(e).bind(t, n);
                        }),
                        (A.prototype.unbind = function (e, t, n) {
                            var i = this.eventElement(e);
                            i.unbind(t, n),
                                i.isEmpty &&
                                    this.eventElements.splice(
                                        this.eventElements.indexOf(i),
                                        1
                                    );
                        }),
                        (A.prototype.unbindAll = function () {
                            this.eventElements.forEach(function (e) {
                                return e.unbindAll();
                            }),
                                (this.eventElements = []);
                        }),
                        (A.prototype.once = function (e, t, n) {
                            var i = this.eventElement(e),
                                o = function (e) {
                                    i.unbind(t, o), n(e);
                                };
                            i.bind(t, o);
                        });
                    var L = {
                            isWebKit:
                                "undefined" != typeof document &&
                                "WebkitAppearance" in
                                    document.documentElement.style,
                            supportsTouch:
                                "undefined" != typeof window &&
                                ("ontouchstart" in window ||
                                    ("maxTouchPoints" in window.navigator &&
                                        0 < window.navigator.maxTouchPoints) ||
                                    (window.DocumentTouch &&
                                        document instanceof
                                            window.DocumentTouch)),
                            supportsIePointer:
                                "undefined" != typeof navigator &&
                                navigator.msMaxTouchPoints,
                            isChrome:
                                "undefined" != typeof navigator &&
                                /Chrome/i.test(
                                    navigator && navigator.userAgent
                                ),
                        },
                        H = function () {
                            return {
                                handlers: [
                                    "click-rail",
                                    "drag-thumb",
                                    "keyboard",
                                    "wheel",
                                    "touch",
                                ],
                                maxScrollbarLength: null,
                                minScrollbarLength: null,
                                scrollingThreshold: 1e3,
                                scrollXMarginOffset: 0,
                                scrollYMarginOffset: 0,
                                suppressScrollX: !1,
                                suppressScrollY: !1,
                                swipeEasing: !0,
                                useBothWheelAxes: !1,
                                wheelPropagation: !0,
                                wheelSpeed: 1,
                            };
                        },
                        S = {
                            "click-rail": function (e) {
                                e.element,
                                    e.event.bind(
                                        e.scrollbarY,
                                        "mousedown",
                                        function (e) {
                                            return e.stopPropagation();
                                        }
                                    ),
                                    e.event.bind(
                                        e.scrollbarYRail,
                                        "mousedown",
                                        function (t) {
                                            var n =
                                                t.pageY -
                                                    window.pageYOffset -
                                                    e.scrollbarYRail.getBoundingClientRect()
                                                        .top >
                                                e.scrollbarYTop
                                                    ? 1
                                                    : -1;
                                            (e.element.scrollTop +=
                                                n * e.containerHeight),
                                                m(e),
                                                t.stopPropagation();
                                        }
                                    ),
                                    e.event.bind(
                                        e.scrollbarX,
                                        "mousedown",
                                        function (e) {
                                            return e.stopPropagation();
                                        }
                                    ),
                                    e.event.bind(
                                        e.scrollbarXRail,
                                        "mousedown",
                                        function (t) {
                                            var n =
                                                t.pageX -
                                                    window.pageXOffset -
                                                    e.scrollbarXRail.getBoundingClientRect()
                                                        .left >
                                                e.scrollbarXLeft
                                                    ? 1
                                                    : -1;
                                            (e.element.scrollLeft +=
                                                n * e.containerWidth),
                                                m(e),
                                                t.stopPropagation();
                                        }
                                    );
                            },
                            "drag-thumb": function (e) {
                                j(e, [
                                    "containerWidth",
                                    "contentWidth",
                                    "pageX",
                                    "railXWidth",
                                    "scrollbarX",
                                    "scrollbarXWidth",
                                    "scrollLeft",
                                    "x",
                                    "scrollbarXRail",
                                ]),
                                    j(e, [
                                        "containerHeight",
                                        "contentHeight",
                                        "pageY",
                                        "railYHeight",
                                        "scrollbarY",
                                        "scrollbarYHeight",
                                        "scrollTop",
                                        "y",
                                        "scrollbarYRail",
                                    ]);
                            },
                            keyboard: function (e) {
                                function n(n, o) {
                                    var r = t(i.scrollTop);
                                    if (0 === n) {
                                        if (!e.scrollbarYActive) return !1;
                                        if (
                                            (0 === r && 0 < o) ||
                                            (r >=
                                                e.contentHeight -
                                                    e.containerHeight &&
                                                0 > o)
                                        )
                                            return !e.settings.wheelPropagation;
                                    }
                                    var l = i.scrollLeft;
                                    if (0 === o) {
                                        if (!e.scrollbarXActive) return !1;
                                        if (
                                            (0 === l && 0 > n) ||
                                            (l >=
                                                e.contentWidth -
                                                    e.containerWidth &&
                                                0 < n)
                                        )
                                            return !e.settings.wheelPropagation;
                                    }
                                    return !0;
                                }
                                var i = e.element,
                                    o = function () {
                                        return r(i, ":hover");
                                    },
                                    l = function () {
                                        return (
                                            r(e.scrollbarX, ":focus") ||
                                            r(e.scrollbarY, ":focus")
                                        );
                                    };
                                e.event.bind(
                                    e.ownerDocument,
                                    "keydown",
                                    function (t) {
                                        if (
                                            !(
                                                (t.isDefaultPrevented &&
                                                    t.isDefaultPrevented()) ||
                                                t.defaultPrevented
                                            ) &&
                                            (o() || l())
                                        ) {
                                            var r = document.activeElement
                                                ? document.activeElement
                                                : e.ownerDocument.activeElement;
                                            if (r) {
                                                if ("IFRAME" === r.tagName)
                                                    r =
                                                        r.contentDocument
                                                            .activeElement;
                                                else
                                                    for (; r.shadowRoot; )
                                                        r =
                                                            r.shadowRoot
                                                                .activeElement;
                                                if (f(r)) return;
                                            }
                                            var a = 0,
                                                s = 0;
                                            switch (t.which) {
                                                case 37:
                                                    a = t.metaKey
                                                        ? -e.contentWidth
                                                        : t.altKey
                                                        ? -e.containerWidth
                                                        : -30;
                                                    break;
                                                case 38:
                                                    s = t.metaKey
                                                        ? e.contentHeight
                                                        : t.altKey
                                                        ? e.containerHeight
                                                        : 30;
                                                    break;
                                                case 39:
                                                    a = t.metaKey
                                                        ? e.contentWidth
                                                        : t.altKey
                                                        ? e.containerWidth
                                                        : 30;
                                                    break;
                                                case 40:
                                                    s = t.metaKey
                                                        ? -e.contentHeight
                                                        : t.altKey
                                                        ? -e.containerHeight
                                                        : -30;
                                                    break;
                                                case 32:
                                                    s = t.shiftKey
                                                        ? e.containerHeight
                                                        : -e.containerHeight;
                                                    break;
                                                case 33:
                                                    s = e.containerHeight;
                                                    break;
                                                case 34:
                                                    s = -e.containerHeight;
                                                    break;
                                                case 36:
                                                    s = e.contentHeight;
                                                    break;
                                                case 35:
                                                    s = -e.contentHeight;
                                                    break;
                                                default:
                                                    return;
                                            }
                                            (e.settings.suppressScrollX &&
                                                0 !== a) ||
                                                (e.settings.suppressScrollY &&
                                                    0 !== s) ||
                                                ((i.scrollTop -= s),
                                                (i.scrollLeft += a),
                                                m(e),
                                                n(a, s) && t.preventDefault());
                                        }
                                    }
                                );
                            },
                            wheel: function (i) {
                                function o(n, o) {
                                    var r = t(s.scrollTop),
                                        l = 0 === s.scrollTop,
                                        a =
                                            r + s.offsetHeight ===
                                            s.scrollHeight,
                                        c = 0 === s.scrollLeft,
                                        p =
                                            s.scrollLeft + s.offsetWidth ===
                                            s.scrollWidth;
                                    return (
                                        !(e(o) > e(n) ? l || a : c || p) ||
                                        !i.settings.wheelPropagation
                                    );
                                }
                                function r(e) {
                                    var t = e.deltaX,
                                        n = -1 * e.deltaY;
                                    return (
                                        (void 0 === t || void 0 === n) &&
                                            ((t = (-1 * e.wheelDeltaX) / 6),
                                            (n = e.wheelDeltaY / 6)),
                                        e.deltaMode &&
                                            1 === e.deltaMode &&
                                            ((t *= 10), (n *= 10)),
                                        t != t &&
                                            n != n &&
                                            ((t = 0), (n = e.wheelDelta)),
                                        e.shiftKey ? [-n, -t] : [t, n]
                                    );
                                }
                                function l(e, t, i) {
                                    if (
                                        !L.isWebKit &&
                                        s.querySelector("select:focus")
                                    )
                                        return !0;
                                    if (!s.contains(e)) return !1;
                                    for (var o = e; o && o !== s; ) {
                                        if (
                                            o.classList.contains(
                                                w.element.consuming
                                            )
                                        )
                                            return !0;
                                        var r = n(o);
                                        if (
                                            i &&
                                            r.overflowY.match(/(scroll|auto)/)
                                        ) {
                                            var l =
                                                o.scrollHeight - o.clientHeight;
                                            if (
                                                0 < l &&
                                                ((0 < o.scrollTop && 0 > i) ||
                                                    (o.scrollTop < l && 0 < i))
                                            )
                                                return !0;
                                        }
                                        if (
                                            t &&
                                            r.overflowX.match(/(scroll|auto)/)
                                        ) {
                                            var a =
                                                o.scrollWidth - o.clientWidth;
                                            if (
                                                0 < a &&
                                                ((0 < o.scrollLeft && 0 > t) ||
                                                    (o.scrollLeft < a && 0 < t))
                                            )
                                                return !0;
                                        }
                                        o = o.parentNode;
                                    }
                                    return !1;
                                }
                                function a(e) {
                                    var t = r(e),
                                        n = t[0],
                                        a = t[1];
                                    if (!l(e.target, n, a)) {
                                        var c = !1;
                                        i.settings.useBothWheelAxes
                                            ? i.scrollbarYActive &&
                                              !i.scrollbarXActive
                                                ? (a
                                                      ? (s.scrollTop -=
                                                            a *
                                                            i.settings
                                                                .wheelSpeed)
                                                      : (s.scrollTop +=
                                                            n *
                                                            i.settings
                                                                .wheelSpeed),
                                                  (c = !0))
                                                : i.scrollbarXActive &&
                                                  !i.scrollbarYActive &&
                                                  (n
                                                      ? (s.scrollLeft +=
                                                            n *
                                                            i.settings
                                                                .wheelSpeed)
                                                      : (s.scrollLeft -=
                                                            a *
                                                            i.settings
                                                                .wheelSpeed),
                                                  (c = !0))
                                            : ((s.scrollTop -=
                                                  a * i.settings.wheelSpeed),
                                              (s.scrollLeft +=
                                                  n * i.settings.wheelSpeed)),
                                            m(i),
                                            (c = c || o(n, a)) &&
                                                !e.ctrlKey &&
                                                (e.stopPropagation(),
                                                e.preventDefault());
                                    }
                                }
                                var s = i.element;
                                void 0 === window.onwheel
                                    ? void 0 !== window.onmousewheel &&
                                      i.event.bind(s, "mousewheel", a)
                                    : i.event.bind(s, "wheel", a);
                            },
                            touch: function (i) {
                                function o(n, o) {
                                    var r = t(h.scrollTop),
                                        l = h.scrollLeft,
                                        a = e(n),
                                        s = e(o);
                                    if (s > a) {
                                        if (
                                            (0 > o &&
                                                r ===
                                                    i.contentHeight -
                                                        i.containerHeight) ||
                                            (0 < o && 0 === r)
                                        )
                                            return (
                                                0 === window.scrollY &&
                                                0 < o &&
                                                L.isChrome
                                            );
                                    } else if (
                                        a > s &&
                                        ((0 > n &&
                                            l ===
                                                i.contentWidth -
                                                    i.containerWidth) ||
                                            (0 < n && 0 === l))
                                    )
                                        return !0;
                                    return !0;
                                }
                                function r(e, t) {
                                    (h.scrollTop -= t),
                                        (h.scrollLeft -= e),
                                        m(i);
                                }
                                function l(e) {
                                    return e.targetTouches
                                        ? e.targetTouches[0]
                                        : e;
                                }
                                function a(e) {
                                    return !(
                                        (e.pointerType &&
                                            "pen" === e.pointerType &&
                                            0 === e.buttons) ||
                                        ((!e.targetTouches ||
                                            1 !== e.targetTouches.length) &&
                                            (!e.pointerType ||
                                                "mouse" === e.pointerType ||
                                                e.pointerType ===
                                                    e.MSPOINTER_TYPE_MOUSE))
                                    );
                                }
                                function s(e) {
                                    if (a(e)) {
                                        var t = l(e);
                                        (u.pageX = t.pageX),
                                            (u.pageY = t.pageY),
                                            (y = new Date().getTime()),
                                            null !== x && clearInterval(x);
                                    }
                                }
                                function c(e, t, i) {
                                    if (!h.contains(e)) return !1;
                                    for (var o = e; o && o !== h; ) {
                                        if (
                                            o.classList.contains(
                                                w.element.consuming
                                            )
                                        )
                                            return !0;
                                        var r = n(o);
                                        if (
                                            i &&
                                            r.overflowY.match(/(scroll|auto)/)
                                        ) {
                                            var l =
                                                o.scrollHeight - o.clientHeight;
                                            if (
                                                0 < l &&
                                                ((0 < o.scrollTop && 0 > i) ||
                                                    (o.scrollTop < l && 0 < i))
                                            )
                                                return !0;
                                        }
                                        if (
                                            t &&
                                            r.overflowX.match(/(scroll|auto)/)
                                        ) {
                                            var a =
                                                o.scrollWidth - o.clientWidth;
                                            if (
                                                0 < a &&
                                                ((0 < o.scrollLeft && 0 > t) ||
                                                    (o.scrollLeft < a && 0 < t))
                                            )
                                                return !0;
                                        }
                                        o = o.parentNode;
                                    }
                                    return !1;
                                }
                                function p(e) {
                                    if (a(e)) {
                                        var t = l(e),
                                            n = {
                                                pageX: t.pageX,
                                                pageY: t.pageY,
                                            },
                                            i = n.pageX - u.pageX,
                                            s = n.pageY - u.pageY;
                                        if (c(e.target, i, s)) return;
                                        r(i, s), (u = n);
                                        var p = new Date().getTime(),
                                            d = p - y;
                                        0 < d &&
                                            ((f.x = i / d),
                                            (f.y = s / d),
                                            (y = p)),
                                            o(i, s) && e.preventDefault();
                                    }
                                }
                                function d() {
                                    i.settings.swipeEasing &&
                                        (clearInterval(x),
                                        (x = setInterval(function () {
                                            return i.isInitialized
                                                ? void clearInterval(x)
                                                : f.x || f.y
                                                ? 0.01 > e(f.x) && 0.01 > e(f.y)
                                                    ? void clearInterval(x)
                                                    : i.element
                                                    ? (r(30 * f.x, 30 * f.y),
                                                      (f.x *= 0.8),
                                                      void (f.y *= 0.8))
                                                    : void clearInterval(x)
                                                : void clearInterval(x);
                                        }, 10)));
                                }
                                if (L.supportsTouch || L.supportsIePointer) {
                                    var h = i.element,
                                        u = {},
                                        y = 0,
                                        f = {},
                                        x = null;
                                    L.supportsTouch
                                        ? (i.event.bind(h, "touchstart", s),
                                          i.event.bind(h, "touchmove", p),
                                          i.event.bind(h, "touchend", d))
                                        : L.supportsIePointer &&
                                          (window.PointerEvent
                                              ? (i.event.bind(
                                                    h,
                                                    "pointerdown",
                                                    s
                                                ),
                                                i.event.bind(
                                                    h,
                                                    "pointermove",
                                                    p
                                                ),
                                                i.event.bind(h, "pointerup", d))
                                              : window.MSPointerEvent &&
                                                (i.event.bind(
                                                    h,
                                                    "MSPointerDown",
                                                    s
                                                ),
                                                i.event.bind(
                                                    h,
                                                    "MSPointerMove",
                                                    p
                                                ),
                                                i.event.bind(
                                                    h,
                                                    "MSPointerUp",
                                                    d
                                                )));
                                }
                            },
                        },
                        z = function (e, r) {
                            var l = this;
                            if (
                                (void 0 === r && (r = {}),
                                "string" == typeof e &&
                                    (e = document.querySelector(e)),
                                !e || !e.nodeName)
                            )
                                throw new Error(
                                    "no element is specified to initialize PerfectScrollbar"
                                );
                            for (var a in ((this.element = e),
                            e.classList.add(w.main),
                            (this.settings = H()),
                            r))
                                this.settings[a] = r[a];
                            (this.containerWidth = null),
                                (this.containerHeight = null),
                                (this.contentWidth = null),
                                (this.contentHeight = null);
                            var s = function () {
                                    return e.classList.add(w.state.focus);
                                },
                                c = function () {
                                    return e.classList.remove(w.state.focus);
                                };
                            (this.isRtl = "rtl" === n(e).direction),
                                !0 === this.isRtl && e.classList.add(w.rtl),
                                (this.isNegativeScroll = (function () {
                                    var t = e.scrollLeft,
                                        n = null;
                                    return (
                                        (e.scrollLeft = -1),
                                        (n = 0 > e.scrollLeft),
                                        (e.scrollLeft = t),
                                        n
                                    );
                                })()),
                                (this.negativeScrollAdjustment = this
                                    .isNegativeScroll
                                    ? e.scrollWidth - e.clientWidth
                                    : 0),
                                (this.event = new A()),
                                (this.ownerDocument =
                                    e.ownerDocument || document),
                                (this.scrollbarXRail = o(w.element.rail("x"))),
                                e.appendChild(this.scrollbarXRail),
                                (this.scrollbarX = o(w.element.thumb("x"))),
                                this.scrollbarXRail.appendChild(
                                    this.scrollbarX
                                ),
                                this.scrollbarX.setAttribute("tabindex", 0),
                                this.event.bind(this.scrollbarX, "focus", s),
                                this.event.bind(this.scrollbarX, "blur", c),
                                (this.scrollbarXActive = null),
                                (this.scrollbarXWidth = null),
                                (this.scrollbarXLeft = null);
                            var p = n(this.scrollbarXRail);
                            (this.scrollbarXBottom = parseInt(p.bottom, 10)),
                                isNaN(this.scrollbarXBottom)
                                    ? ((this.isScrollbarXUsingBottom = !1),
                                      (this.scrollbarXTop = y(p.top)))
                                    : (this.isScrollbarXUsingBottom = !0),
                                (this.railBorderXWidth =
                                    y(p.borderLeftWidth) +
                                    y(p.borderRightWidth)),
                                i(this.scrollbarXRail, { display: "block" }),
                                (this.railXMarginWidth =
                                    y(p.marginLeft) + y(p.marginRight)),
                                i(this.scrollbarXRail, { display: "" }),
                                (this.railXWidth = null),
                                (this.railXRatio = null),
                                (this.scrollbarYRail = o(w.element.rail("y"))),
                                e.appendChild(this.scrollbarYRail),
                                (this.scrollbarY = o(w.element.thumb("y"))),
                                this.scrollbarYRail.appendChild(
                                    this.scrollbarY
                                ),
                                this.scrollbarY.setAttribute("tabindex", 0),
                                this.event.bind(this.scrollbarY, "focus", s),
                                this.event.bind(this.scrollbarY, "blur", c),
                                (this.scrollbarYActive = null),
                                (this.scrollbarYHeight = null),
                                (this.scrollbarYTop = null);
                            var d = n(this.scrollbarYRail);
                            (this.scrollbarYRight = parseInt(d.right, 10)),
                                isNaN(this.scrollbarYRight)
                                    ? ((this.isScrollbarYUsingRight = !1),
                                      (this.scrollbarYLeft = y(d.left)))
                                    : (this.isScrollbarYUsingRight = !0),
                                (this.scrollbarYOuterWidth = this.isRtl
                                    ? x(this.scrollbarY)
                                    : null),
                                (this.railBorderYWidth =
                                    y(d.borderTopWidth) +
                                    y(d.borderBottomWidth)),
                                i(this.scrollbarYRail, { display: "block" }),
                                (this.railYMarginHeight =
                                    y(d.marginTop) + y(d.marginBottom)),
                                i(this.scrollbarYRail, { display: "" }),
                                (this.railYHeight = null),
                                (this.railYRatio = null),
                                (this.reach = {
                                    x:
                                        0 >= e.scrollLeft
                                            ? "start"
                                            : e.scrollLeft >=
                                              this.contentWidth -
                                                  this.containerWidth
                                            ? "end"
                                            : null,
                                    y:
                                        0 >= e.scrollTop
                                            ? "start"
                                            : e.scrollTop >=
                                              this.contentHeight -
                                                  this.containerHeight
                                            ? "end"
                                            : null,
                                }),
                                (this.isAlive = !0),
                                this.settings.handlers.forEach(function (e) {
                                    return S[e](l);
                                }),
                                (this.lastScrollTop = t(e.scrollTop)),
                                (this.lastScrollLeft = e.scrollLeft),
                                this.event.bind(
                                    this.element,
                                    "scroll",
                                    function (e) {
                                        return l.onScroll(e);
                                    }
                                ),
                                m(this);
                        };
                    return (
                        (z.prototype.update = function () {
                            this.isAlive &&
                                ((this.negativeScrollAdjustment = this
                                    .isNegativeScroll
                                    ? this.element.scrollWidth -
                                      this.element.clientWidth
                                    : 0),
                                i(this.scrollbarXRail, { display: "block" }),
                                i(this.scrollbarYRail, { display: "block" }),
                                (this.railXMarginWidth =
                                    y(n(this.scrollbarXRail).marginLeft) +
                                    y(n(this.scrollbarXRail).marginRight)),
                                (this.railYMarginHeight =
                                    y(n(this.scrollbarYRail).marginTop) +
                                    y(n(this.scrollbarYRail).marginBottom)),
                                i(this.scrollbarXRail, { display: "none" }),
                                i(this.scrollbarYRail, { display: "none" }),
                                m(this),
                                h(this, "top", 0, !1, !0),
                                h(this, "left", 0, !1, !0),
                                i(this.scrollbarXRail, { display: "" }),
                                i(this.scrollbarYRail, { display: "" }));
                        }),
                        (z.prototype.onScroll = function () {
                            this.isAlive &&
                                (m(this),
                                h(
                                    this,
                                    "top",
                                    this.element.scrollTop - this.lastScrollTop
                                ),
                                h(
                                    this,
                                    "left",
                                    this.element.scrollLeft -
                                        this.lastScrollLeft
                                ),
                                (this.lastScrollTop = t(
                                    this.element.scrollTop
                                )),
                                (this.lastScrollLeft =
                                    this.element.scrollLeft));
                        }),
                        (z.prototype.destroy = function () {
                            this.isAlive &&
                                (this.event.unbindAll(),
                                l(this.scrollbarX),
                                l(this.scrollbarY),
                                l(this.scrollbarXRail),
                                l(this.scrollbarYRail),
                                this.removePsClasses(),
                                (this.element = null),
                                (this.scrollbarX = null),
                                (this.scrollbarY = null),
                                (this.scrollbarXRail = null),
                                (this.scrollbarYRail = null),
                                (this.isAlive = !1));
                        }),
                        (z.prototype.removePsClasses = function () {
                            this.element.className = this.element.className
                                .split(" ")
                                .filter(function (e) {
                                    return !e.match(/^ps([-_].+|)$/);
                                })
                                .join(" ");
                        }),
                        z
                    );
                })();
            },
        },
        n = {};
    function i(e) {
        var o = n[e];
        if (void 0 !== o) return o.exports;
        var r = (n[e] = { exports: {} });
        return t[e].call(r.exports, r, r.exports, i), r.exports;
    }
    (i.m = t),
        (e = []),
        (i.O = (t, n, o, r) => {
            if (!n) {
                var l = 1 / 0;
                for (p = 0; p < e.length; p++) {
                    for (var [n, o, r] = e[p], a = !0, s = 0; s < n.length; s++)
                        (!1 & r || l >= r) &&
                        Object.keys(i.O).every((e) => i.O[e](n[s]))
                            ? n.splice(s--, 1)
                            : ((a = !1), r < l && (l = r));
                    if (a) {
                        e.splice(p--, 1);
                        var c = o();
                        void 0 !== c && (t = c);
                    }
                }
                return t;
            }
            r = r || 0;
            for (var p = e.length; p > 0 && e[p - 1][2] > r; p--)
                e[p] = e[p - 1];
            e[p] = [n, o, r];
        }),
        (i.n = (e) => {
            var t = e && e.__esModule ? () => e.default : () => e;
            return i.d(t, { a: t }), t;
        }),
        (i.d = (e, t) => {
            for (var n in t)
                i.o(t, n) &&
                    !i.o(e, n) &&
                    Object.defineProperty(e, n, { enumerable: !0, get: t[n] });
        }),
        (i.o = (e, t) => Object.prototype.hasOwnProperty.call(e, t)),
        (i.r = (e) => {
            "undefined" != typeof Symbol &&
                Symbol.toStringTag &&
                Object.defineProperty(e, Symbol.toStringTag, {
                    value: "Module",
                }),
                Object.defineProperty(e, "__esModule", { value: !0 });
        }),
        (() => {
            var e = {
                449: 0,
                254: 0,
                752: 0,
                751: 0,
                825: 0,
                37: 0,
                438: 0,
                962: 0,
                770: 0,
                376: 0,
                575: 0,
                997: 0,
                44: 0,
                348: 0,
                12: 0,
                739: 0,
            };
            i.O.j = (t) => 0 === e[t];
            var t = (t, n) => {
                    var o,
                        r,
                        [l, a, s] = n,
                        c = 0;
                    if (l.some((t) => 0 !== e[t])) {
                        for (o in a) i.o(a, o) && (i.m[o] = a[o]);
                        if (s) var p = s(i);
                    }
                    for (t && t(n); c < l.length; c++)
                        (r = l[c]), i.o(e, r) && e[r] && e[r][0](), (e[r] = 0);
                    return i.O(p);
                },
                n = (self.webpackChunkmazer = self.webpackChunkmazer || []);
            n.forEach(t.bind(null, 0)), (n.push = t.bind(null, n.push.bind(n)));
        })(),
        i.O(
            void 0,
            [752, 751, 825, 37, 438, 962, 770, 376, 575, 997, 44, 348, 12, 739],
            () => i(465)
        ),
        i.O(
            void 0,
            [752, 751, 825, 37, 438, 962, 770, 376, 575, 997, 44, 348, 12, 739],
            () => i(498)
        ),
        i.O(
            void 0,
            [752, 751, 825, 37, 438, 962, 770, 376, 575, 997, 44, 348, 12, 739],
            () => i(829)
        ),
        i.O(
            void 0,
            [752, 751, 825, 37, 438, 962, 770, 376, 575, 997, 44, 348, 12, 739],
            () => i(967)
        ),
        i.O(
            void 0,
            [752, 751, 825, 37, 438, 962, 770, 376, 575, 997, 44, 348, 12, 739],
            () => i(154)
        ),
        i.O(
            void 0,
            [752, 751, 825, 37, 438, 962, 770, 376, 575, 997, 44, 348, 12, 739],
            () => i(242)
        ),
        i.O(
            void 0,
            [752, 751, 825, 37, 438, 962, 770, 376, 575, 997, 44, 348, 12, 739],
            () => i(596)
        ),
        i.O(
            void 0,
            [752, 751, 825, 37, 438, 962, 770, 376, 575, 997, 44, 348, 12, 739],
            () => i(944)
        ),
        i.O(
            void 0,
            [752, 751, 825, 37, 438, 962, 770, 376, 575, 997, 44, 348, 12, 739],
            () => i(362)
        ),
        i.O(
            void 0,
            [752, 751, 825, 37, 438, 962, 770, 376, 575, 997, 44, 348, 12, 739],
            () => i(308)
        ),
        i.O(
            void 0,
            [752, 751, 825, 37, 438, 962, 770, 376, 575, 997, 44, 348, 12, 739],
            () => i(774)
        ),
        i.O(
            void 0,
            [752, 751, 825, 37, 438, 962, 770, 376, 575, 997, 44, 348, 12, 739],
            () => i(650)
        ),
        i.O(
            void 0,
            [752, 751, 825, 37, 438, 962, 770, 376, 575, 997, 44, 348, 12, 739],
            () => i(453)
        ),
        i.O(
            void 0,
            [752, 751, 825, 37, 438, 962, 770, 376, 575, 997, 44, 348, 12, 739],
            () => i(758)
        );
    var o = i.O(
        void 0,
        [752, 751, 825, 37, 438, 962, 770, 376, 575, 997, 44, 348, 12, 739],
        () => i(155)
    );
    o = i.O(o);
})();
