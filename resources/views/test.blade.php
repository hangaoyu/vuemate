<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hgy</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic">
    <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{asset('/css/vue-material.css')}}" type="text/css"/>
    <link href='http://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
    <!-- Styles -->
    <style>


        .main-content {
            padding: 16px;
        }

        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .bottom-bar {
            width: 100%;
            position: fixed;
            bottom: 0px;
        }

        html, body {
            height: 100%;
            padding: 0;
            margin: 0;
            background: whitesmoke;
        }
        body {
            width: 100%;
            height: 100%;
            position: fixed;
            background-color: whitesmoke;
        }

        .content {
            position: absolute;
            top: 20%;

            left: 55%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            font-size: 35px;
            line-height: 40px;
            font-family: 'Muli';
            color: hotpink;
            height: 160px;
            overflow: hidden;
        }

        .visible {
            font-weight: 600;
            overflow: hidden;
            height: 40px;
            padding: 0 40px;
        }
        /*.visible:before {*/
        /*content: '[';*/
        /*left: 0;*/
        /*line-height: 40px;*/
        /*}*/
        /*.visible:after {*/
        /*content: ']';*/
        /*position: absolute;*/
        /*right: 0;*/
        /*line-height: 40px;*/
        /*}*/
        /*.visible:after, .visible:before {*/
        /*position: absolute;*/
        /*top: 0;*/
        /*color: #ff8200;*/
        /*font-size: 42px;*/
        /*-webkit-animation: 2s linear 0s normal none infinite opacity;*/
        /*animation: 2s linear 0s normal none infinite opacity;*/
        /*}*/

        p {
            display: inline;
            float: left;
            margin: 0;
        }

        ul {
            margin-top: 0;
            padding-left: 10px;
            text-align: left;
            list-style: none;
            -webkit-animation: 22s linear 0s normal none infinite change;
            animation: 22s linear 0s normal none infinite change;
        }

        ul li {
            line-height: 40px;
            margin: 0;
        }

        @-webkit-keyframes opacity {
            0%, 100% {
                opacity: 0;
            }
            50% {
                opacity: 1;
            }
        }

        @keyframes opacity {
            0%, 100% {
                opacity: 0;
            }
            50% {
                opacity: 1;
            }
        }
        @-webkit-keyframes change {
            0%, 12%, 100% {
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }
            17%,29% {
                -webkit-transform: translateY(-25%);
                transform: translateY(-25%);
            }
            34%,46% {
                -webkit-transform: translateY(-50%);
                transform: translateY(-50%);
            }
            51%,63% {
                -webkit-transform: translateY(-75%);
                transform: translateY(-75%);
            }
            68%,80% {
                -webkit-transform: translateY(-50%);
                transform: translateY(-50%);
            }
            85%,97% {
                -webkit-transform: translateY(-25%);
                transform: translateY(-25%);
            }
        }
        @keyframes change {
            0%, 12%, 100% {
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }
            17%,29% {
                -webkit-transform: translateY(-25%);
                transform: translateY(-25%);
            }
            34%,46% {
                -webkit-transform: translateY(-50%);
                transform: translateY(-50%);
            }
            51%,63% {
                -webkit-transform: translateY(-75%);
                transform: translateY(-75%);
            }
            68%,80% {
                -webkit-transform: translateY(-50%);
                transform: translateY(-50%);
            }
            85%,97% {
                -webkit-transform: translateY(-25%);
                transform: translateY(-25%);
            }
        }
        canvas {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .title {
            position: absolute;
            width: 10%;
            left: 45%;
            top: 45%;
            font-size: 18px;
            color: deeppink;
            text-align: center;
            font-family: 'Muli';

        }
    </style>
</head>
<body>


<div id="app">


    <div>

        <div class='content'>
            <div class='visible'>
                {{--<p>--}}
                {{--一--}}
                {{--</p>--}}
                <ul>
                    <li>ntelligent</li>
                    <li></li>
                    <li>mmersive</li>
                    <li></li>
                    <li>nnate</li>
                    <li></li>
                    <li>ncredible</li>
                    <li></li>
                </ul>
            </div>
        </div>
    </div>
    {{--<div>--}}
    {{--<canvas id="pinkboard"></canvas>--}}
    {{--<div class="title">you</div>--}}
    {{--</div>--}}


    {{--<div class="phone-viewport complete-example">--}}
    {{--<md-whiteframe md-tag="md-toolbar" md-elevation="2" md-theme="light-blue" class="md-large">--}}
    {{--<div class="md-toolbar-container">--}}
    {{--<md-button class="md-icon-button">--}}
    {{--<md-icon>search</md-icon>--}}
    {{--</md-button>--}}
    {{--<span style="flex: 1"></span>--}}
    {{--<md-button class="md-icon-button">--}}
    {{--<md-icon>view_module</md-icon>--}}
    {{--</md-button>--}}
    {{--</div>--}}
    {{--<div class="md-toolbar-container">--}}
    {{--<h2 class="md-title">My Files</h2>--}}
    {{--<md-button class="md-fab md-mini">--}}
    {{--<md-icon>add</md-icon>--}}
    {{--</md-button>--}}
    {{--</div>--}}
    {{--</md-whiteframe>--}}

    {{--<md-list class="md-double-line">--}}
    {{--<md-subheader class="md-inset">Folders</md-subheader>--}}
    {{--<md-list-item>--}}
    {{--<md-avatar class="md-avatar-icon">--}}
    {{--<md-icon>folder</md-icon>--}}
    {{--</md-avatar>--}}
    {{--<div class="md-list-text-container">--}}
    {{--<span>Photos</span>--}}
    {{--<p>Jan 9, 2014</p>--}}
    {{--</div>--}}
    {{--<md-button class="md-icon-button md-list-action">--}}
    {{--<md-icon>info</md-icon>--}}
    {{--</md-button>--}}
    {{--</md-list-item>--}}
    {{--</md-list>--}}
    {{--</div>--}}

    {{--<div class="bottom-bar">--}}
    {{--<md-bottom-bar md-shift>--}}
    {{--<md-bottom-bar-item md-icon="ondemand_video">Movies</md-bottom-bar-item>--}}
    {{--<md-bottom-bar-item md-icon="music_note">Music</md-bottom-bar-item>--}}
    {{--<md-bottom-bar-item md-icon="books" md-active>Books</md-bottom-bar-item>--}}
    {{--<md-bottom-bar-item md-icon="photo">Pictures</md-bottom-bar-item>--}}
    {{--</md-bottom-bar>--}}
    {{--</div>--}}


</div>
{{--<script src="{{ asset('/js/app.js') }}" type="text/javascript"></script>--}}
<script>
    /*
     * Settings
     */
    var settings = {
        particles: {
            length: 500, // maximum amount of particles
            duration: 4, // particle duration in sec
            velocity: 50, // particle velocity in pixels/sec
            effect: -1.00, // play with this for a nice effect
            size: 15, // particle size in pixels
        },
    };

    /*
     * RequestAnimationFrame polyfill by Erik M?ller
     */
    (function () {
        var b = 0;
        var c = ["ms", "moz", "webkit", "o"];
        for (var a = 0; a < c.length && !window.requestAnimationFrame; ++a) {
            window.requestAnimationFrame = window[c[a] + "RequestAnimationFrame"];
            window.cancelAnimationFrame = window[c[a] + "CancelAnimationFrame"] || window[c[a] + "CancelRequestAnimationFrame"]
        }
        if (!window.requestAnimationFrame) {
            window.requestAnimationFrame = function (h, e) {
                var d = new Date().getTime();
                var f = Math.max(0, 16 - (d - b));
                var g = window.setTimeout(function () {
                    h(d + f)
                }, f);
                b = d + f;
                return g
            }
        }
        if (!window.cancelAnimationFrame) {
            window.cancelAnimationFrame = function (d) {
                clearTimeout(d)
            }
        }
    }());

    /*
     * Point class
     */
    var Point = (function () {
        function Point(x, y) {
            this.x = (typeof x !== 'undefined') ? x : 0;
            this.y = (typeof y !== 'undefined') ? y : 0;
        }

        Point.prototype.clone = function () {
            return new Point(this.x, this.y);
        };
        Point.prototype.length = function (length) {
            if (typeof length == 'undefined')
                return Math.sqrt(this.x * this.x + this.y * this.y);
            this.normalize();
            this.x *= length;
            this.y *= length;
            return this;
        };
        Point.prototype.normalize = function () {
            var length = this.length();
            this.x /= length;
            this.y /= length;
            return this;
        };
        return Point;
    })();

    /*
     * Particle class
     */
    var Particle = (function () {
        function Particle() {
            this.position = new Point();
            this.velocity = new Point();
            this.acceleration = new Point();
            this.age = 0;
        }

        Particle.prototype.initialize = function (x, y, dx, dy) {
            this.position.x = x;
            this.position.y = y;
            this.velocity.x = dx;
            this.velocity.y = dy;
            this.acceleration.x = dx * settings.particles.effect;
            this.acceleration.y = dy * settings.particles.effect;
            this.age = 0;
        };
        Particle.prototype.update = function (deltaTime) {
            this.position.x += this.velocity.x * deltaTime;
            this.position.y += this.velocity.y * deltaTime;
            this.velocity.x += this.acceleration.x * deltaTime;
            this.velocity.y += this.acceleration.y * deltaTime;
            this.age += deltaTime;
        };
        Particle.prototype.draw = function (context, image) {
            function ease(t) {
                return (--t) * t * t + 1;
            }

            var size = image.width * ease(this.age / settings.particles.duration);
            context.globalAlpha = 1 - this.age / settings.particles.duration;
            context.drawImage(image, this.position.x - size / 2, this.position.y - size / 2, size, size);
        };
        return Particle;
    })();

    /*
     * ParticlePool class
     */
    var ParticlePool = (function () {
        var particles,
                firstActive = 0,
                firstFree = 0,
                duration = settings.particles.duration;

        function ParticlePool(length) {
            // create and populate particle pool
            particles = new Array(length);
            for (var i = 0; i < particles.length; i++)
                particles[i] = new Particle();
        }

        ParticlePool.prototype.add = function (x, y, dx, dy) {
            particles[firstFree].initialize(x, y, dx, dy);

            // handle circular queue
            firstFree++;
            if (firstFree == particles.length) firstFree = 0;
            if (firstActive == firstFree) firstActive++;
            if (firstActive == particles.length) firstActive = 0;
        };
        ParticlePool.prototype.update = function (deltaTime) {
            var i;

            // update active particles
            if (firstActive < firstFree) {
                for (i = firstActive; i < firstFree; i++)
                    particles[i].update(deltaTime);
            }
            if (firstFree < firstActive) {
                for (i = firstActive; i < particles.length; i++)
                    particles[i].update(deltaTime);
                for (i = 0; i < firstFree; i++)
                    particles[i].update(deltaTime);
            }

            // remove inactive particles
            while (particles[firstActive].age >= duration && firstActive != firstFree) {
                firstActive++;
                if (firstActive == particles.length) firstActive = 0;
            }


        };
        ParticlePool.prototype.draw = function (context, image) {
            // draw active particles
            if (firstActive < firstFree) {
                for (i = firstActive; i < firstFree; i++)
                    particles[i].draw(context, image);
            }
            if (firstFree < firstActive) {
                for (i = firstActive; i < particles.length; i++)
                    particles[i].draw(context, image);
                for (i = 0; i < firstFree; i++)
                    particles[i].draw(context, image);
            }
        };
        return ParticlePool;
    })();

    /*
     * Putting it all together
     */
    (function (canvas) {
        var context = canvas.getContext('2d'),
                particles = new ParticlePool(settings.particles.length),
                particleRate = settings.particles.length / settings.particles.duration, // particles/sec
                time;

        // get point on heart with -PI <= t <= PI
        function pointOnHeart(t) {
            return new Point(
                    155 * Math.pow(Math.sin(t), 3),
                    140 * Math.cos(t) - 50 * Math.cos(2 * t) - 20 * Math.cos(3 * t) - 10 * Math.cos(4 * t) + 25
            );
        }

        // creating the particle image using a dummy canvas
        var image = (function () {
            var canvas = document.createElement('canvas'),
                    context = canvas.getContext('2d');
            canvas.width = settings.particles.size;
            canvas.height = settings.particles.size;
            // helper function to create the path
            function to(t) {
                var point = pointOnHeart(t);
                point.x = settings.particles.size / 2 + point.x * settings.particles.size / 350;
                point.y = settings.particles.size / 2 - point.y * settings.particles.size / 350;
                return point;
            }

            // create the path
            context.beginPath();
            var t = -Math.PI;
            var point = to(t);
            context.moveTo(point.x, point.y);
            while (t < Math.PI) {
                t += 0.01; // baby steps!
                point = to(t);
                context.lineTo(point.x, point.y);
            }
            context.closePath();
            // create the fill
            context.fillStyle = '#ea80b0';
            context.fill();
            // create the image
            var image = new Image();
            image.src = canvas.toDataURL();
            return image;
        })();

        // render that thing!
        function render() {
            // next animation frame
            requestAnimationFrame(render);

            // update time
            var newTime = new Date().getTime() / 1000,
                    deltaTime = newTime - (time || newTime);
            time = newTime;

            // clear canvas
            context.clearRect(0, 0, canvas.width, canvas.height);

            // create new particles
            var amount = particleRate * deltaTime;
            for (var i = 0; i < amount; i++) {
                var pos = pointOnHeart(Math.PI - 2 * Math.PI * Math.random());
                var dir = pos.clone().length(settings.particles.velocity);
                particles.add(canvas.width / 2 + pos.x, canvas.height / 2 - pos.y, dir.x, -dir.y);
            }

            // update and draw particles
            particles.update(deltaTime);
            particles.draw(context, image);
        }

        // handle (re-)sizing of the canvas
        function onResize() {
            canvas.width = canvas.clientWidth;
            canvas.height = canvas.clientHeight;
        }

        window.onresize = onResize;

        // delay rendering bootstrap
        setTimeout(function () {
            onResize();
            render();
        }, 10);
    })(document.getElementById('pinkboard'));
</script>

</body>
</html>
