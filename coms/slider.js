/**
 * Created by Alex_Green on 09.08.2016.
 */
function createSliderControls() {
    var sliders = document.getElementsByClassName('slider');

    var slider = sliders[0];
    var items = slider.firstElementChild;
    var numOfItems = items.children.length;
    var controls = slider.lastElementChild;
    var button = document.createElement('button');
    var control = document.createElement('button');
    control.className = "control";
    for (var i = numOfItems;i-->0;) {
        controls.appendChild(control.cloneNode(true));
    }
}

function setupItems() {
    var sliders = document.getElementsByClassName('slider');
    var slider = sliders[0];
    var items = slider.firstElementChild;

    for (var i= items.childElementCount;i-->0;) {
        var item = items.children[i];
        item.style.left = (i * 100).toString() + '%';
    }
}

function setOnClickHandlers() {
    var sliders = document.getElementsByClassName('slider');

    var slider = sliders[0];
    var items = slider.firstElementChild;
    var numOfItems = items.children.length;
    var controls = slider.lastElementChild;
    var controlsChildren = controls.children;
    for (var i = numOfItems;i-->0;) {
        var control = controlsChildren[i];
        control.onclick = onControlClicked;
        control.id = i.toString();
    }
}

function onControlClicked(e) {

    isSliderFirstTouched = false;

    var target = e.target || e.srcElement;
    var controlId = target.id;

    var sliders = document.getElementsByClassName('slider');
    var slider = sliders[0];
    var items = slider.firstElementChild;

    var controlIdInt = parseInt(controlId);

    var difference = controlIdInt - oldControlId;

    for (var i = items.childElementCount;i-->0;) {
        items.children[i].style.left = (parseInt(items.children[i].style.left) - (100*difference)).toString() + '%';
        console.log(items.children[i].style.left);
    }

    oldControlId = controlIdInt;
}

function showFirstElement() {
    var sliders = document.getElementsByClassName('slider');
    var slider = sliders[0];
    var items = slider.firstElementChild;
    var item = items.firstElementChild;

    var controls = document.getElementsByClassName('control');
    var control = controls[0];
    control.classList.remove('control');
    control.classList.add('controlActive');
}

var oldControlId = 0;

var isSliderFirstTouched = true;

window.onload = function SliderCore() {
    setupItems();
    createSliderControls();
    setOnClickHandlers();
    // showFirstElement();
};
