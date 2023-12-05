<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .animate-charcter
            {
            text-transform: uppercase;
            background-image: linear-gradient(
                -225deg,
                #231557 0%,
                #44107a 29%,
                #ff1361 67%,
                #fff800 100%
            );
            background-size: auto auto;
            background-clip: border-box;
            background-size: 200% auto;
            color: #fff;
            background-clip: text;
            /* text-fill-color: transparent; */
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: textclip 2s linear infinite;
            display: inline-block;
                font-size: 100px;
            }

            @keyframes textclip {
            to {
                background-position: 200% center;
            }
            }
            .btn_congratulate{
                text-align: center;
            }
            .btn_more{
                text-decoration: none;
                border: 1px solid gray;
                border-radius: 5px;
                padding: 10px 20px;
                margin: 0 30px;
            }
            .btn_more:hover{
                background-color: #855ff7;
            }
    </style>
    <script>
        const Confettiful = function(el) {
        this.el = el;
        this.containerEl = null;
        
        this.confettiFrequency = 10;
        this.confettiColors = ['#EF2964', '#00C09D', '#2D87B0', '#48485E','#EFFF1D'];
        this.confettiAnimations = ['slow', 'medium', 'fast'];
        
        this._setupElements();
        this._renderConfetti();
        };

        Confettiful.prototype._setupElements = function() {
        const containerEl = document.createElement('div');
        const elPosition = this.el.style.position;
        
        if (elPosition !== 'relative' || elPosition !== 'absolute') {
            this.el.style.position = 'relative';
        }
        
        containerEl.classList.add('confetti-container');
        
        this.el.appendChild(containerEl);
        
        this.containerEl = containerEl;
        };

        Confettiful.prototype._renderConfetti = function() {
        this.confettiInterval = setInterval(() => {
            const confettiEl = document.createElement('div');
            const confettiSize = (Math.floor(Math.random() * 3) + 7) + 'px';
            const confettiBackground = this.confettiColors[Math.floor(Math.random() * this.confettiColors.length)];
            const confettiLeft = (Math.floor(Math.random() * this.el.offsetWidth)) + 'px';
            const confettiAnimation = this.confettiAnimations[Math.floor(Math.random() * this.confettiAnimations.length)];
            
            confettiEl.classList.add('confetti', 'confetti--animation-' + confettiAnimation);
            confettiEl.style.left = confettiLeft;
            confettiEl.style.width = confettiSize;
            confettiEl.style.height = confettiSize;
            confettiEl.style.backgroundColor = confettiBackground;
            
            confettiEl.removeTimeout = setTimeout(function() {
            confettiEl.parentNode.removeChild(confettiEl);
            }, 3000);
            
            this.containerEl.appendChild(confettiEl);
        }, 25);
        };

        window.confettiful = new Confettiful(document.querySelector('.js-container'));



    </script>
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
        <h3 class="animate-charcter" style="text-align: center;">Chúc mừng bạn đã đặt đơn hàng thành công!</h3>
        </div>
    </div>
    </div>
    <div class="btn_congratulate">
        <a href="../../index.php" class="btn_more" >Tiếp tục mua sắm</a>
        <a href="../../index.php?act=infouser" class="btn_more" >Xem chi tiết đơn hàng</a>
    </div>
</body>
</html>
