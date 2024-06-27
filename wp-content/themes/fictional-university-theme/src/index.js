import "../css/style.scss";

// Our modules / classes
import MobileMenu from "./modules/MobileMenu";
import HeroSlider from "./modules/HeroSlider";
import GoogleMap from "./modules/GoogleMap";
// import Search from "./modules/Search"; jquery
import Search from "./modules/JsSearch";
// import MyNotes from "./modules/MyNotes"; jquery
import JsMyNotes from "./modules/JsMyNotes";
import Like from "./modules/Like";

// Instantiate a new object using our modules/classes
const mobileMenu = new MobileMenu();
const heroSlider = new HeroSlider();
const googleMap = new GoogleMap();
const search = new Search();
// const myNotes = new MyNotes();
const myNotes = new JsMyNotes();
const like = new Like();
