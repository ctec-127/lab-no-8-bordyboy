function clipboard(value){
    var finalValue = document.getElementById('finalValue');
    finalValue.select();
    if(value == 'copy'){
        document.execCommand('copy');
    }
}