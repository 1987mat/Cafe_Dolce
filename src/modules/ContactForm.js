class ContactForm {
  constructor() {
    this.form = document.querySelector('.contact-form');
    this.message = document.querySelector('.message');

    if (this.form) {
      this.events();
    }
  }

  events() {
    this.form.addEventListener('submit', (e) => {
      e.preventDefault();
      this.form.reset();
      this.message.innerHTML =
        'Thanks! We will get back to you as soon as possible.';
      setTimeout(() => (this.message.innerHTML = ''), 3000);
    });
  }
}

export default ContactForm;
