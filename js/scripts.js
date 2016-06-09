$(function () {
    $('.pro').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll:1,
        adaptiveHeight: true,
        arrows: true
    });

    $('li[id=tanks]').on('click', function () {
        var tanks = document.getElementById('tank');

        if(tanks.style.display != 'block')
        {
            tanks.style.display = 'block';
        }
        else tanks.style.display = 'none';
    });

    $('li[id=heals]').on('click', function () {
        var heals = document.getElementById('heal');

        if(heals.style.display != 'block')
        {
            heals.style.display = 'block';
        }
        else heals.style.display = 'none';
    });

    $('li[id=dpss]').on('click', function () {
        var dps = document.getElementById('dps');

        if(dps.style.display != 'block')
        {
            dps.style.display = 'block';
        }
        else dps.style.display = 'none';
    });
});
