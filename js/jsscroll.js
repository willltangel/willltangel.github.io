//scroll
const prev = document.querySelector('.prev')
const next = document.querySelector('.next')
const slider = document.querySelector('.slider')

const prev2 = document.querySelector('.prev2')
const next2 = document.querySelector('.next2')
const slider2 = document.querySelector('.slider2')


prev.addEventListener('click', () => (
    slider.scrollLeft -= 300
))

next.addEventListener('click', () => (
    slider.scrollLeft += 300
))

prev2.addEventListener('click', () => (
    slider2.scrollLeft -= 300
))

next2.addEventListener('click', () => (
    slider2.scrollLeft += 300
))
