import Navbar from './modules/NavBarScroll';
import MobileMenu from './modules/MobileMenu';
import ContactForm from './modules/ContactForm';
import { fadeInOnScroll } from './modules/fadeInOnScroll';

const navbar = new Navbar();
const mobileMenu = new MobileMenu();
const contactForm = new ContactForm();
fadeInOnScroll();
