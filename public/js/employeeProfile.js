function rotate(id) {
    jQuery(function ($) {
        var arrow = document.getElementById('arrow' + id);
        if (arrow.classList.contains('fa-angle-down')) {
            arrow.classList.add('fa-angle-up');
            arrow.classList.remove('fa-angle-down');
        } else {
            arrow.classList.add('fa-angle-down');
            arrow.classList.remove('fa-angle-up')
        }
    })
}

function headerRotate(id) {
    jQuery(function ($) {
        for (var i = 1; i < 4; i++) {
            if (id !== i) {
                document.getElementById('header-arrow' + i).classList.remove('fa-angle-up');
                document.getElementById('header-arrow' + i).classList.add('fa-angle-down');
            }
        }
        var arrow = document.getElementById('header-arrow' + id);
        if (arrow.classList.contains('fa-angle-down')) {
            arrow.classList.add('fa-angle-up');
            arrow.classList.remove('fa-angle-down');
        } else {
            arrow.classList.add('fa-angle-down');
            arrow.classList.remove('fa-angle-up')
        }
    })
}

function changeArrow(id) {
    var arrow = document.getElementById(id);
    if (arrow.classList.contains('fa-angle-down')) {
        arrow.classList.add('fa-angle-up');
        arrow.classList.remove('fa-angle-down');
    } else {
        arrow.classList.add('fa-angle-down');
        arrow.classList.remove('fa-angle-up')
    }
}

function showAboutMeData(id) {
    var element = document.getElementById('about-me-card-content-' + id);
    for (var i = 0; i < 3; i++) {
        if (id !== i) {
            document.getElementById('about-me-card-content-' + i).classList.remove('about-me-card-block');
            document.getElementById('about-me-card-content-' + i).classList.add('about-me-card-none');
            document.getElementById('button-about-me-' + i).classList.remove('button-active');
        }
    }
    if (element.classList.contains('about-me-card-none')) {
        element.classList.add('about-me-card-block');
        element.classList.remove('about-me-card-none');
        document.getElementById('button-about-me-' + id).classList.add('button-active');
    } else {
        element.classList.add('about-me-card-none');
        element.classList.remove('about-me-card-block');
        document.getElementById('button-about-me-' + id).classList.remove('button-active');
    }

}
