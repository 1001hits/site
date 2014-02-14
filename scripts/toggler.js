var toggler = document.getElementById('moreDetails');
toggler.onclick = function() {
    var section = document.getElementById('productDetailsSection');
    if(section.style.display == 'none')
    {
        section.style.display = 'block';
    } else {
        section.style.display = 'none';
    }
};