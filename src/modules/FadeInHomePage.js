class FadeIn {
  constructor() {
    this.title = document.querySelector('.heading-title');
    this.subTitle = document.querySelector('.heading-subtitle');

    if (this.title && this.subTitle) {
      this.events();
    }
  }

  events() {
    this.title.classList.add('slide');
    this.subTitle.classList.add('slide');
  }
}

export default FadeIn;
