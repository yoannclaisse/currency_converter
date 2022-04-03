// JAVASCRIPT ELEMMNTS
const select = document.querySelector("select");
const option = document.querySelector("option");
const title = document.querySelector(".title");
const spanOne = document.querySelector(".spanOne");
const spanTwo = document.querySelector(".spanTwo");
const spanThree = document.querySelector(".spanThree");
const changerValue = document.querySelector('.imageSize')
let valueFrom = document.getElementById("from")
let valueTo = document.getElementById("to")

// VALUE CHANGER
changerValue.addEventListener('click', () =>
{
        const update = valueFrom.value
        valueFrom.value = valueTo.value
        valueTo.value = update
})


// TEXT COLOR
window.setInterval(() =>
{
    console.log('paused span one')
    spanOne.style.animationPlayState = 'paused'
    spanOne.style.backgroundImage = '-webkit-linear-gradient(#ffffff, #ffffff)'
}, 2000)

window.setInterval(() =>
{
    console.log('running span one')
    spanOne.style.animationPlayState = 'running'
    spanOne.style.backgroundImage = '-webkit-linear-gradient(45deg, #2690f3, #482be9)'
}, 4000)

window.setInterval(() =>
{
    console.log('paused span two')
    spanTwo.style.animationPlayState = 'paused'
    spanTwo.style.backgroundImage = '-webkit-linear-gradient(#ffffff, #ffffff)'
}, 5000)

window.setInterval(() =>
{
    console.log('running span two')
    spanTwo.style.animationPlayState = 'running'
    spanTwo.style.backgroundImage = '-webkit-linear-gradient(45deg, #f3267b, #fe3a3a)'
}, 13500)

window.setInterval(() =>
{
    console.log('paused span two')
    spanThree.style.animationPlayState = 'paused'
    spanThree.style.backgroundImage = '-webkit-linear-gradient(#ffffff, #ffffff)'
}, 3000)

window.setInterval(() =>
{
    console.log('running span two')
    spanThree.style.animationPlayState = 'running'
    spanThree.style.backgroundImage = '-webkit-linear-gradient(45deg, #2690f3, #fe3a3a)'
}, 10000)

