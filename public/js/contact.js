$(document).ready(() => {
    console.log('contact.js ready!');

    // functions;
    $.fn.ajaxConfig = () => {
        $.ajaxSetup({
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
           }
        });
    }

    $.fn.storeMessage = (message) => {
        let msg = {};
        for (let [key, value] of message) msg[key] = value;

        $.ajax({
            url: 'contact',
            type: 'POST',
            data: msg,
            dataType: 'json',
            success: (status) => {
                let text = "<strong>Success!</strong> Your message has been sent";
                let show_status = 'success';
                
                if (!status) {
                    msg = "<strong>Error!</strong> Your message hasn't been sent";
                    show_status = 'danger';
                }

                $('#status').prepend(
                    `<div class="alert alert-${show_status} alert-dismissible fade show" role="alert">
                        ${text}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>`
                );

                $(`.alert-${show_status}`).css('display', 'block');
                setTimeout(() => {
                    $(`.alert-${show_status}`).fadeOut('slow');
                }, 6000);
            },
            error: (err) => {
                console.log(err);
            }
        });

    }

    $.fn.showStatus = (message) => { $('#status').empty();

        $.each(message, (i, msg) => {
            $('#status').prepend(
                `<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Warning!</strong> ${msg}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>`
            );
        });
        $('.alert-warning').css('display', 'block');
        setTimeout(() => {
            $('.alert-warning').fadeOut('slow');
        }, 6000);

    }





    // run functions
    $.fn.ajaxConfig();

    $('#contactSubmit').on('click', (e) => { e.preventDefault();
        let form = $('#contactForm')[0];
        let data = new FormData(form);

        // data sanitization / filter
        let msg = [];
        for (let [key, value] of data) {
            if (value == '' || value.length < 3) {
                msg.push('please write your ' + key);
            }
        }

        if (msg.length > 0) {
            $.fn.showStatus(msg);
        } else {
            $.fn.storeMessage(data);
        }

    });


});