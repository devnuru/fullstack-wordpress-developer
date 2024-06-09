import $ from "jquery";

class Search {
  // 1. describe and create/initiate our object
  constructor() {
    this.openButton = $(".js-search-trigger");
    this.closeButton = $(".search-overlay__close");
    this.searchOverlay = $(".search-overlay");
    this.events();
    this.isOverlayOpen = false;
  }

  // 2. events

  events() {
    this.openButton.on("click", this.openOverlay.bind(this));
    this.closeButton.on("click", this.closeOverlay.bind(this));
    $(document).on("keyup", this.keyPressDispatcher.bind(this));
  }

  // 3. methods (function, action....)

  keyPressDispatcher(e) {
    // console.log(e.keyCode);

    if (e.keyCode == 83 && !this.isOverlayOpen) {
      this.openOverlay();
    }

    if (e.keyCode == 27 && this.isOverlayOpen) {
      this.closeOverlay();
    }
  }

  openOverlay() {
    this.searchOverlay.addClass("search-overlay--active");
    $("body").addClass("body-no-scroll");

    console.log("Our open method ran!");

    this.isOverlayOpen = true;
  }

  closeOverlay() {
    this.searchOverlay.removeClass("search-overlay--active");
    $("body").removeClass("body-no-scroll");

    console.log("Our close method ran!");
    this.isOverlayOpen = false;
  }
}

export default Search;

// class Search {
//   //1. describe and create/initiate our boject
//   constructor() {
//     this.openButtons = document.querySelectorAll(".js-search-trigger");
//     this.closeButton = document.querySelector(
//       ".search-overlay .search-overlay__close"
//     );
//     this.searchOverlay = document.querySelector(".search-overlay");
//     this.events();
//   }

//   //2. Add Event Handlers
//   events() {
//     this.openButtons.forEach((btn) => {
//       btn.addEventListener("click", () => this.openOverlay());
//     });
//     this.closeButton.addEventListener("click", () => this.closeOverlay());
//   }

//   //3. Event Handler Methods
//   openOverlay() {
//     console.log("Open clicked");
//     this.searchOverlay.classList.add("search-overlay--active");
//   }

//   closeOverlay() {
//     console.log("Close clicked");
//     this.searchOverlay.classList.remove("search-overlay--active");
//   }
// }
// export default Search;

//Taylor

// const openButton = document.querySelector('.js-search-trigger');
// const closeButton = document.querySelector('.search-overlay__close');
// const searchOverlay = document.querySelector('.search-overlay');
// let isOverlayOpen = false;

// document.addEventListener('keydown', (e) => {
//   if (e.key === 's' && !isOverlayOpen) {
//     searchOverlay.classList.add('search-overlay--active');
//     document.body.classList.add('body-no-scroll');
//     isOverlayOpen = true;
//   }
// });

// document.addEventListener('keyup', (e) => {
//   if (e.key === 'Escape' && isOverlayOpen) {
//     searchOverlay.classList.remove('search-overlay--active');
//     document.body.classList.remove('body-no-scroll');
//     isOverlayOpen = false;
//   }
// });

// openButton.addEventListener('click', () => {
//   searchOverlay.classList.add('search-overlay--active');
//   document.body.classList.add('body-no-scroll');
// });
// closeButton.addEventListener('click', () => {
//   searchOverlay.classList.remove('search-overlay--active');
//   document.body.classList.remove('body-no-scroll');
// });

// export default Search;
