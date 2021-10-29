$(() => { // console.log('club.js ready!');

    let url = window.location.href;
    let list = url.split('/');
    let id = parseInt(list[list.length - 1], 10);

    $.fn.renderPageData = (data) => {

        $('.jumbotron .display-4').html(data.clubName);
        $('#desc').replaceWith(data.description);
        $('#web-link').attr('href', data.website);
        let images = data.images.split(', ');

        $.each(images, (i, img) => {
            let active = (i == 0 ? 'active' : '');
            
            $('#carouselExampleIndicators #caro-indicators').append(
                `<li class="${active}" data-target="#carouselExampleIndicators" data-slide-to="${i}"></li>`
            );
            $('#carouselExampleIndicators #caro-inner').append(
                `<div class="carousel-item ${active}">
                    <img class="d-block w-100" style="height:30rem;" src="/images/logo/${img}" alt="">
                </div>`
            );

        });

    }

    $.ajax({
        url: `/get_club/${id}`,
        type: 'GET',
        dataType: 'json',
        success: (data) => {
            if (data.status == true) {
                $.fn.renderPageData(data.data);
            } else {
                window.location.href = '/404';                
            }
        }
    });
    
    $('.carousel').carousel({
        interval: 2000,
    });

});