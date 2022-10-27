class Navbar {
  constructor() {
    this.header = document.querySelector('.site-header');
    this.events();
    this.hasScrolled;
    this.lastScrollTop = 0;
    this.navbarHeight = this.header.getBoundingClientRect().height;
  }

  events() {
    window.addEventListener('scroll', () => {
      if (window.innerWidth >= 992) {
        this.hasScrolled = true;

        setInterval(() => {
          if (this.hasScrolled) {
            this.scroll();
            this.hasScrolled = false;
          }
        }, 150);
      }
    });
  }

  scroll() {
    let prev = window.pageYOffset;

    // Scroll Down
    if (prev > this.lastScrollTop && prev > this.navbarHeight) {
      this.header.classList.add('hide');

      // Scroll Up
    } else {
      this.header.classList.remove('hide');
    }

    this.lastScrollTop = prev;
  }
}

export default Navbar;
