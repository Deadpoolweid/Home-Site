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
    console.log(controls);
}

function onControlClicked(e) {

    isSliderFirstTouched = false;

    var target = e.target || e.srcElement;
    var parent = target.parentNode;
    var controlId = target.id;

    var sliders = document.getElementsByClassName('slider');
    var slider = sliders[0];
    var items = slider.firstElementChild;

    var controlIdInt = parseInt(controlId);

    if (!isSliderFirstTouched) {
        var oldItem = items.children[oldControlId];
        oldItem.style.display = 'none';
    }

    var item = items.children[controlIdInt];
    item.style.display = 'block';

    oldControlId = controlIdInt;
}

function showFirstElement() {
    var sliders = document.getElementsByClassName('slider');
    var slider = sliders[0];
    var items = slider.firstElementChild;
    var item = items.firstElementChild;
    item.style.display = 'block';
}

var oldControlId = 0;

var isSliderFirstTouched = true;

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

window.onload = function SliderCore() {
    createSliderControls();
    setOnClickHandlers();
    showFirstElement();
};
