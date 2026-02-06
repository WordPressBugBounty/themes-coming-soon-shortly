/* ===============================================
  OPEN CLOSE Menu
============================================= */

function coming_soon_shortly_open_menu() {
  jQuery('button.menu-toggle').addClass('close-panal');
  setTimeout(function(){
    jQuery('nav#main-menu').show();
  }, 100);

  return false;
}

jQuery( "button.menu-toggle").on("click", coming_soon_shortly_open_menu);

function coming_soon_shortly_close_menu() {
  jQuery('button.close-menu').removeClass('close-panal');
  jQuery('nav#main-menu').hide();
}

jQuery( "button.close-menu").on("click", coming_soon_shortly_close_menu);

/* ===============================================
  TRAP TAB FOCUS ON MODAL MENU
============================================= */

jQuery('button.close-menu').on('keydown', function (e) {

  if (jQuery("this:focus") && !!e.shiftKey && e.keyCode === 9) {
  } else if (jQuery("this:focus") && (e.which === 9)) {
    e.preventDefault();
    jQuery(this).blur();
    jQuery('.nav-menu li a:first').focus()
  }
});

jQuery('.nav-menu li a:first').on('keydown', function (event) {
  if (jQuery("this:focus") && !!event.shiftKey && event.keyCode === 9) {
    event.preventDefault();
    jQuery(this).blur();
    jQuery('button.close-menu').focus()
  }
});

jQuery(document).ready(function() {
  window.addEventListener('load', (event) => {
      jQuery(".loader").delay(2000).fadeOut("slow");
    });
})

/* ===============================================
  Scroll Top //
============================================= */

jQuery(window).scroll(function () {
  if (jQuery(this).scrollTop() > 100) {
      jQuery('.scroll-up').fadeIn();
  } else {
      jQuery('.scroll-up').fadeOut();
  }
});

jQuery('a[href="#tobottom"]').click(function () {
  jQuery('html, body').animate({scrollTop: 0}, 'slow');
  return false;
});
 /* ===============================================
  Custom Cursor
============================================= */

const coming_soon_shortly_customCursor = {
  init: function () {
    this.coming_soon_shortly_customCursor();
  },
  isVariableDefined: function (el) {
    return typeof el !== "undefined" && el !== null;
  },
  select: function (selectors) {
    return document.querySelector(selectors);
  },
  selectAll: function (selectors) {
    return document.querySelectorAll(selectors);
  },
  coming_soon_shortly_customCursor: function () {
    const coming_soon_shortly_cursorDot = this.select(".cursor-point");
    const coming_soon_shortly_cursorOutline = this.select(".cursor-point-outline");
    if (this.isVariableDefined(coming_soon_shortly_cursorDot) && this.isVariableDefined(coming_soon_shortly_cursorOutline)) {
      const cursor = {
        delay: 8,
        _x: 0,
        _y: 0,
        endX: window.innerWidth / 2,
        endY: window.innerHeight / 2,
        cursorVisible: true,
        cursorEnlarged: false,
        $dot: coming_soon_shortly_cursorDot,
        $outline: coming_soon_shortly_cursorOutline,

        init: function () {
          this.dotSize = this.$dot.offsetWidth;
          this.outlineSize = this.$outline.offsetWidth;
          this.setupEventListeners();
          this.animateDotOutline();
        },

        updateCursor: function (e) {
          this.cursorVisible = true;
          this.toggleCursorVisibility();
          this.endX = e.clientX;
          this.endY = e.clientY;
          this.$dot.style.top = `${this.endY}px`;
          this.$dot.style.left = `${this.endX}px`;
        },

        setupEventListeners: function () {
          window.addEventListener("load", () => {
            this.cursorEnlarged = false;
            this.toggleCursorSize();
          });

          coming_soon_shortly_customCursor.selectAll("a, button").forEach((el) => {
            el.addEventListener("mouseover", () => {
              this.cursorEnlarged = true;
              this.toggleCursorSize();
            });
            el.addEventListener("mouseout", () => {
              this.cursorEnlarged = false;
              this.toggleCursorSize();
            });
          });

          document.addEventListener("mousedown", () => {
            this.cursorEnlarged = true;
            this.toggleCursorSize();
          });
          document.addEventListener("mouseup", () => {
            this.cursorEnlarged = false;
            this.toggleCursorSize();
          });

          document.addEventListener("mousemove", (e) => {
            this.updateCursor(e);
          });

          document.addEventListener("mouseenter", () => {
            this.cursorVisible = true;
            this.toggleCursorVisibility();
            this.$dot.style.opacity = 1;
            this.$outline.style.opacity = 1;
          });

          document.addEventListener("mouseleave", () => {
            this.cursorVisible = false;
            this.toggleCursorVisibility();
            this.$dot.style.opacity = 0;
            this.$outline.style.opacity = 0;
          });
        },

        animateDotOutline: function () {
          this._x += (this.endX - this._x) / this.delay;
          this._y += (this.endY - this._y) / this.delay;
          this.$outline.style.top = `${this._y}px`;
          this.$outline.style.left = `${this._x}px`;

          requestAnimationFrame(this.animateDotOutline.bind(this));
        },

        toggleCursorSize: function () {
          if (this.cursorEnlarged) {
            this.$dot.style.transform = "translate(-50%, -50%) scale(0.75)";
            this.$outline.style.transform = "translate(-50%, -50%) scale(1.6)";
          } else {
            this.$dot.style.transform = "translate(-50%, -50%) scale(1)";
            this.$outline.style.transform = "translate(-50%, -50%) scale(1)";
          }
        },

        toggleCursorVisibility: function () {
          if (this.cursorVisible) {
            this.$dot.style.opacity = 1;
            this.$outline.style.opacity = 1;
          } else {
            this.$dot.style.opacity = 0;
            this.$outline.style.opacity = 0;
          }
        },
      };
      cursor.init();
    }
  },
};
coming_soon_shortly_customCursor.init(); 

/* ===============================================
  Progress Bar
============================================= */
const coming_soon_shortly_progressBar = {
  init: function () {
      let coming_soon_shortly_progressBarDiv = document.getElementById("elemento-progress-bar");

      if (coming_soon_shortly_progressBarDiv) {
          let coming_soon_shortly_body = document.body;
          let coming_soon_shortly_rootElement = document.documentElement;

          window.addEventListener("scroll", function (event) {
              let coming_soon_shortly_winScroll = coming_soon_shortly_body.scrollTop || coming_soon_shortly_rootElement.scrollTop;
              let coming_soon_shortly_height =
              coming_soon_shortly_rootElement.scrollHeight - coming_soon_shortly_rootElement.clientHeight;
              let coming_soon_shortly_scrolled = (coming_soon_shortly_winScroll / coming_soon_shortly_height) * 100;
              coming_soon_shortly_progressBarDiv.style.width = coming_soon_shortly_scrolled + "%";
          });
      }
  },
};
coming_soon_shortly_progressBar.init();

/* ===============================================
   sticky copyright
============================================= */

window.addEventListener('scroll', function() {
  var coming_soon_shortly_footer = document.querySelector('.sticky-copyright');
  if (!coming_soon_shortly_footer) return; 

  var coming_soon_shortly_scrollTop = window.scrollY || document.documentElement.coming_soon_shortly_scrollTop;

  if (coming_soon_shortly_scrollTop >= 100) {
    coming_soon_shortly_footer.classList.add('active-sticky');
  }
});

/* ===============================================
   sticky sidebar
============================================= */

window.addEventListener('scroll', function () {
  var coming_soon_shortly_sidebar = document.querySelector('.sidebar-sticky');
  if (!coming_soon_shortly_sidebar) return;

  var coming_soon_shortly_scrollTop = window.scrollY || document.documentElement.scrollTop;
  var coming_soon_shortly_windowHeight = window.innerHeight;
  var coming_soon_shortly_documentHeight = document.documentElement.scrollHeight;

  var coming_soon_shortly_isBottom = coming_soon_shortly_scrollTop + coming_soon_shortly_windowHeight >= coming_soon_shortly_documentHeight - 100;

  if (coming_soon_shortly_scrollTop >= 100 && !coming_soon_shortly_isBottom) {
    coming_soon_shortly_sidebar.classList.add('sidebar-fixed');
  } else {
    coming_soon_shortly_sidebar.classList.remove('sidebar-fixed');
  }
});