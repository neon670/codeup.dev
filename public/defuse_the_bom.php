<!DOCTYPE html>
<html>
<head>
    <title>Defuse the BOM</title>
</head>
<body>
    <h2 id="message">This BOM will self destruct in <span id="timer">5</span> seconds...</h2>

    <button id="defuser">Hurry before we all die</button>
    <button id="defuser">now is the time</button>
    <button id="defuser">is this the one to save us all</button>

    <script>
        var detonationTimer = 5;
         var bomInterval = setInterval(function updateTimer()
        // or setInterval(updateTimer, 1000)
        // TODO: This function needs to be called once every second
       
        {
            if (detonationTimer == 0) {
                alert('EXTERMINATE!');
                document.body.innerHTML = '';
            } else if (detonationTimer > 0) {
                document.getElementById('timer').innerHTML = detonationTimer;
            }

            detonationTimer--;
        }, 1000);

        // TODO: When this function runs, it needs to
        // cancel the interval/timeout for updateTimer()
        function defuseTheBOM()
        {
            clearInterval(bomInterval);
            console.log('You defused the bomb');
            alert('Yay, you saved us all !!')
        }

        // Don't modify anything below this line!
        //
        // This causes the defuseTheBOM() function to be called
        // when the "defuser" button is clicked.
        // We will learn about events in the DOM lessons
        var defuser = document.getElementById('defuser');
        defuser.addEventListener('click', defuseTheBOM, false);
    </script>
</body>
</html>
