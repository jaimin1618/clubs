$(document).ready(() => { // console.log('index.js ready!');

    // functions;
    $.fn.ajaxConfig = () => {
        $.ajaxSetup({
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
           }
        });    
    } 

    $.fn.allClubs = () => {
        $.ajax({
            url: `clubs/0`,
            type: 'GET',
            dataType: 'json',
            success: (data) => {
                console.log(data);
            },
            complete: () => {
                console.log('fetch done!');
            }
        })
    }




    // run functions
    $.fn.ajaxConfig();
    $.fn.allClubs();


});