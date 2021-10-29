/** Composante ScrollTop de TimTools */
export default class ScrollTop {
  /**
   * Méthode constructeur
   * @param {HTMLElement} element - Élément HTML sur lequel la composante est instanciée
   */
  constructor(element) {
    this.element = element;
    this.init();

    this.scrollButton = document.querySelector('#IconeScroll');
  }

  init() {
    if (window.pageYOffset === 0) {
      clearInterval(intervalId);
    }
    window.scroll(0, window.pageYOffset - 50);
  }

  /**
   * Méthode d'initialisation
   */
  init() {
    console.log('Nouvelle instance de la composante -> ScrollTop');
  }
}
