$(() => { // console.log('adminForm.js ready!');
    // functions;
    $.fn.ajaxConfig = () => {
        $.ajaxSetup({
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            }
        });
    }

    $.fn.getClubs = () => {

        let url = '/admin/clubs';
        $.get(url).then(JSON.parse).then((json) => {
            if (json.status) {

                $.each(json.data, (i, opt) => {
                    $('#dropable').append(`<option data-key='${i + 1}'> ${opt.clubName} </option>`);
                });

            } else {
                $('#dropable')
                .empty()
                .append(`<option data-key='0'>There is network problem, try again later</option>`)
                .css('border', '3px solid red');
            }
        });

    }


    // run functions
    $.fn.ajaxConfig();
    $.fn.getClubs();

    $('#eventForm').on('submit', (e) => { e.preventDefault();
        $('#status').empty();
        
        let form = $('#eventForm')[0];
        let data = new FormData(form);

        // sanitization & filtering
        let msg = [];
        // alpha-numeric only
        let regex = /^[a-z\d\-_\s]+$/i  ;
        for (let [key, val] of data) {
            if (key === 'name') {
                if (val.length < 4) {
                    msg.push('Event name must be more that 4 character long');
                } else if (!regex.test(val)) {
                    msg.push('Event name can only contain a-z, A-Z, 0-9 (alpha-numeric), space, -, _ characters');
                }
            } else if (key === 'date') {
                let curr = new Date();
                let given = new Date(val);
                if (given < curr) {
                    msg.push('Enter valid date, you have provided previous(past) date');
                }
            } else if (key === 'image') {
                let l = val.name.split('.');
                let ext = l[l.length - 1];
                if (ext === 'jpg' || ext === 'png' || ext === 'jpeg') {
                    continue;
                } else {
                    msg.push('Please enter valid image file (jpg, jpeg, png)');
                }
            } else if (key === 'text') {
                if (val.length < 10) {
                    msg.push('Event description must be more than 10 character long');
                }
            }
        }

        if  (msg.length > 0) {
            $.each(msg, (i, m) => {
                $('#status').append(
                    `<div class="alert alert-warning">
                        <small>${m}</small>
                    </div>`
                );
            });
        } else {

            $.ajax({
                url: '/events/add',
                type: 'POST',
                dataType: 'json',
                success: (data) => {
                    console.log(data);

                },
                error: (err) => {
                    console.log(err);

                }
            });


            // $('#status').append(
            //     `<div class="alert alert-success">
            //         <small>${m}</small>
            //     </div>`
            // );
        }

    });

}); // DOMLoaded

// CLUB_ID => integer 0, 1, ...
// EVENT_DATA => DATA_FORMAT => 2021-10-27
// EVENT_TIME => TIME_FORMAT => 01:45
// EVENT_NAME => string
// LEVEL_OF_EVENT => enum[0, 1, 2, 3, 4, 5]
// EVENT_POSTER => image-files [UPTO 5]
// DESC => text
// CERTIFICATE => boolean (1, 0)

// CREATED_BY => Auth()->user()->name
// CREATED_AT & UPDATED_AT => timestamp()
