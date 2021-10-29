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
    this.scrollButton = document.querySelector('#IconeScroll');
    this.scrollButton.addEventListener('click', this.scrollStep.bind(this));
  }

  scrollStep() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }
}
