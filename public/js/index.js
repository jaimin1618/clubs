$(() => { // console.log('index.js ready!');

    // functions;
    $.fn.ajaxConfig = () => {
        $.ajaxSetup({
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
           }
        });
    }

    $.fn.renderClub = ({id, clubName, logo}) => {
        $('.allClubs').append(
            `
                <div class="card col-mg-4" data-key="${id}">
                    <img src="/images/logo/${logo}" class="card-img-top" alt="${clubName}">
                    <div class="card-body">
                        <h5 class="card-title">${clubName}</h5>
                        <a href="/clubs/${id}" class="btn btn-info" data-key="${id}">View more</a>
                    </div>
                </div>
            `
        );
    }

    $.fn.allClubs = () => {
        $.ajax({
            url: `clubs`,
            type: 'GET',
            dataType: 'json',
            success: (data) => { // console.log(data);
                if (data.length > 0) {
                    $.each(data, (i, item) => {
                        $.fn.renderClub(item);
                    });
                } else {
                    $('#dataNotFound').css('display', 'block');
                }
            },
            error: (err) => {
                $('#dataNotFound').css('display', 'block');
            }
        });
    }

    // run functions
    $.fn.ajaxConfig();
    $.fn.allClubs();
    
    $(document).on('click', '.btn-info', (e) => {
        let id = $(e.target).data('key');
        console.log(id);

        window.location.href = '/clubs/' + id;
    });

}); // DOMLoaded