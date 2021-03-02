window.onload = ()=> {
    //setting footer
    let windowHeight = window.innerHeight;
    let bodyHeight = document.getElementById('body').scrollHeight;
    let footer = document.getElementById('footer');
    let newHeight = windowHeight - bodyHeight + 'px';
    newHeight = newHeight.replace('-','');

    if (windowHeight > 845){
        footer.style.top = newHeight;
        footer.style.visibility = 'visible';
    }else {
        footer.style.top = newHeight;
        footer.style.visibility = 'visible';
    }
}