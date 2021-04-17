'use strict';

let active = (id) => {
    let item = document.querySelector(`#${id}`);
    let train = document.querySelector(`#t_${id}`);

    if (item.classList.contains('active')) {
        item.classList.remove('active');
        train.classList.remove('t_active');
    } else {
        item.classList.add('active');
        train.classList.add('t_active');
    }
}
/* 
let stopEvent = (event) => {
    event.stopPropagation();
} */