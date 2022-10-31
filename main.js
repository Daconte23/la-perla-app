var end = new Date('11/12/2022 9:30 AM');

    var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour * 24;
    var timer;

    function showRemaining() {
        var now = new Date();
        var distance = end - now;
        if (distance < 0) {

            clearInterval(timer);
            document.getElementById('reloj').innerHTML = 'EXPIRED!';

            return;
        }
        var days = Math.floor(distance / _day);
        var hours = Math.floor((distance % _day) / _hour);
        var minutes = Math.floor((distance % _hour) / _minute);
        var seconds = Math.floor((distance % _minute) / _second);

        document.getElementById('reloj').innerHTML = ' Quedan  ' + days + '  dias / ';
        document.getElementById('reloj').innerHTML += hours + '  horas / ';
        document.getElementById('reloj').innerHTML += minutes + ' minutos / ';
        document.getElementById('reloj').innerHTML += seconds + ' segundos';
    }

    timer = setInterval(showRemaining, 1000);