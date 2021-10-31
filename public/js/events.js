$(() => {
    console.log('events.js ready!');

    $.fn.addEvent = (data) => {
        $('.main').append(
            `
            <div class="event container">
                <div class="row">
                    <div class="col-md-5 ">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators" id="caro-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li> 
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> 
                            </ol>
                            <div class="carousel-inner" id="caro-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100 " style="height:20rem;" src="https://source.unsplash.com/random/nature" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" style="height:20rem;" src="https://source.unsplash.com/random/dark" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" style="height:20rem;" src="https://source.unsplash.com/random/animals" alt="Second slide">
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="col-md-7 col-lg-6">
                        <div class="row greed " style="display:flex;justify-content:center; align-items:center;margin-top:2rem;">
                            <div class="col-lg-12" style="margin-left:2rem;">
                                <div class="event-name">
                                    <h1>${data.eventName}</h1>
                                </div>
                               
                            </div>
                            <div class="row" style="margin-top:2rem; display:flex; justify-content:space-evenly;">
                                <div class="col-lg-5">
                                    <h4>Date-time: <br> ${data.date} <br/> ${data.time}</h4> 
                                    <div class="event-name">
                                        <h4>certificate: ${data.certificate ? 'YES' : 'NO'}</h4>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <h4>Organized by: ${data.club}</h4>
                                    <h4>Hosted by: ${data.created_by}</h4>
                                    <h4>Event level: ${data.level}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            `    
        );
    }

    $.get('/events/show')
    .then((data) => JSON.parse(data))
    .then((json) => {
        // $('.main').empty();
        $.each(json, (i, row) => {
            $.fn.addEvent(row)
        });
    });



});