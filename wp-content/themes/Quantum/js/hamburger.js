{
  const hamburger = document.querySelector('#hamburger')
  const menu = document.querySelector('#menu')
  const html = document.querySelector('html')

  const hamburgerToggle = () => {
    hamburger.classList.toggle('is-active')
    menu.classList.toggle('header__line_thin--active')
    html.classList.toggle('menu-on')
  }

  hamburger.addEventListener('click', hamburgerToggle)

  document.addEventListener('keydown', press => {
    if (press.keyCode === 27) {
      hamburger.classList.remove('is-active')
      menu.classList.remove('header__line_thin--active')
    }
  })
}
