/** Composante ScrollTop de TimTools */
export default class ScrollTop {
  /**
   * Méthode constructeur
   * @param {HTMLElement} element - Élément HTML sur lequel la composante est instanciée
   */
  constructor(element) {
    this.element = element;
    this.init();
  }

  /**
   * Méthode d'initialisation
   */
  init() {
    console.log('Nouvelle instance de la composante -> ScrollTop');

    this.scrollButton = document.querySelector('#IconeScroll');
    this.scrollButton.addEventListener('click', this.scrollId.bind(this));
  }

  scrollStep() {
    if (window.pageYOffset === 0) {
      clearInterval(intervalId);
    }
    window.scroll(0, window.pageYOffset - 50);
  }

  scrollId(evt) {
    var cible = evt.currentTarget.getAttribute('class');

    window.scroll({
      top: destination,
      left: 0,
      behavior: 'smooth',
    });
  }

  scrollToTop() {
    this.intervalId = setInterval(this.scrollStep.bind(this), 16.66);
  }
}
