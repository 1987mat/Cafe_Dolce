class Mobile {
  constructor() {
    this.hamburger = document.querySelector('.hamburger');
    this.mobileNav = document.querySelector('.main-navigation');
    this.events();
  }

  events() {
    this.hamburger.addEventListener('click', this.handleClick.bind(this));
  }

  handleClick() {
    this.hamburger.classList.toggle('clicked');
    this.mobileNav.classList.toggle('show');
    document.documentElement.classList.toggle('no-scroll');
  }
}

export default Mobile;
