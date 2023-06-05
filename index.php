<html>
    <head>    
        <script src="https://smtpjs.com/v3/smtp.js"></script>
        <script src="https://smtpjs.com/v3/smtp.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
        <link rel="icon" href="logot.ico">
        <link rel="stylesheet" href="style.css">
    <style>
      .main-container {
    font-family: 'Orbitron', sans-serif;
    font-size:larger;
    font-weight: bold;
    position: fixed;
    width: 100%;
    background-color: black;
    top: 0%;
    left: 0%;
    height: 5%;
    display: flex;
    align-items: center;
    padding-left: 1%;
}
.in {
    color:rgb(60, 223, 45)
}
.tr {
    color: rgb(255, 255, 255);
}
.whm {
    font-family:'Orbitron', sans-serif;
    width: 70%;
    height: 80%;
    position: absolute;
    background-color: black;
    text-align: center;
    color:white;
    left: 50%;
    text-align: center;
    top:10%;
    border-radius: 10px;
    font-size: 2pc;
    font-weight:400;
    padding-top: 2%;
    display: block;
    top: 47%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%)

}
.maintext{
    font-size: 37%;
    font-family: 'Orbitron', sans-serif;
    width: 85%;
    height: 60%;
    position: absolute;
    text-align: center;
    padding-top: 2%;
    display: block;
    top:45%;
    left:50%;
    margin-right: -50%;
    transform: translate(-50%, -50%);
    text-align: start;
}
.pd {
    font-family: Arial, Helvetica, sans-serif;
    color:rgb(255, 255, 255);
    position: fixed;
    display: block;
    width: 100%;
    background-color: black;
    top:100%;
    height: 5%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%);
    padding-top: auto;
    display: block;
    padding-left: 2%;
    text-align: center;
    padding: 1pc;
}

  .nut_dropdown {
    font-family: 'Orbitron', sans-serif;
    position: absolute;
    background-color: #ffffff;
    color: rgb(0, 0, 0);
    width: 20%;
    height: 4%;
    font-size: 1.8vw;
    border: none;
    font-weight: 700;
    left: 50%;
    transform: translate(-50%, 0%);
    top: 80%;
    border-radius: 10px;
    text-align: center;
 }
 .nut_dropdown:hover {
    transition: 0.5s;
    box-shadow: 4px 5px 50px 5px rgba(255, 255, 255, 0.932);
 }
 .container {
   position: flex;
 }
 .contact_dropdown {
   font-family: Arial, Helvetica, sans-serif; 
   display: none;
   position: absolute;
   min-width: 160px;
   box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
   z-index: 1;
   left: 50%;
   width: 20%;
   top: 85%;
   transform: translate(-50%, 0%);
   border:none;
   border-radius: 10px;
   background-color: rgb(255, 255, 255);
 }
   .contact_dropdown a {
   color: rgb(0, 0, 0);
   padding: 12px 16px;
   text-decoration: none;
   display: block;

 }
 .hienThi{
   display:block;
 }
 #animation {
    border-right: solid 3px rgba(0, 255, 0, .75);
    white-space: nowrap;
    overflow: hidden;
    font-family: 'Orbitron', sans-serif;
    font-size: 28px;
    color: rgba(255, 255, 255, .70);
}

/* Animation */
#animation {
    animation: animated-text 4s steps(29, end) 1s 1 normal both, animated-cursor 600ms steps(29, end) infinite;
}

/* text animation */

@keyframes animated-text {
    from {
        width: 0;
    }
    to {
        width: 250px;
    }
}

/* cursor animations */

@keyframes animated-cursor {
    from {
        border-right-color: rgba(0, 255, 0, .75);
    }
    to {
        border-right-color: transparent;
    }
}

.in {
    color: rgb(60, 223, 45)
}

.tr {
    color: rgb(255, 255, 255);
}


/* (A) FORCE SLIDES INTO SINGLE ROW */
.hmove { display: flex; }
.hslide { width: 100%; flex-shrink: 0; }

/* (B) OUTER WRAPPER HIDE SCROLLBAR */
.hwrap { overflow: hidden; }

/* (C) SHIFT SLIDES WITH CSS ANIMATION */
/* (C1) SLIDES POSITION */
.hmove { position: relative; top: 0; right: 0; }
@keyframes slideh {
    0% { right: 0; }
  16% { right: 0; }
  20% { right: 100%; }
  36% { right: 100%; }
  40% { right: 200%; }
  56% { right: 200%; }
  60% { right: 300%; }
  76% { right: 300%; }
  80% { right: 400%; }
  96% { right: 400%; }
  100% { right: 0; }
}
 
/* (C2) MOVE SLIDES */
.hmove { animation: slideh linear 40s infinite; }
.hmove:hover { animation-play-state: paused; }
.formbut {
  position: fixed;
    background-color: #000000;
    color: white;
    width: 70%;
    height: 4%;
    font-size: 100%;
    border: none;
    font-weight: 700;
    left: 50%;
    transform: translate(-50%, 0%);
    top: 90%;
    border-radius: 10px;
    display: inline-block;
    text-align: center;
    vertical-align: middle;
}
.formbut:hover {
  transition: 0.5s;
  background-color: white;
  color: black;
}
.formbut:not(:hover){
  background-color: black;
  color:rgb(255, 255, 255);
  transition: 0.5s;
}

.form-container {
  position: fixed;
  background-color: white;
  border: 1px solid black;
  width: 50%;
  height: 40%;
  left: 50%;
  top: 60%;
  transform: translate(-50%, -50%);
  border-radius: 10px;
}

.form-group {
  margin: 5%;
}

label {
  display: block;
}

input {
  display: block;
  width: 80%;
}
.form-groupb {
    left:10%;
    position: absolute;
    width: 50%;
    height: 40%;
}
.send {
    background-color: black;
    color:white;
    border-radius: 10px;
    width: 40%;
    height: 20%;
    font-size: 1.5vw;
}
.send:hover{
background-color: white;
color:black;
transition: 0.5s;
border: none;
}
.send:not(:hover) {
    transition: 0.5s;
    background-color: black;
    color:white;
    border: none;
}
.close { 
    background-color: #000000;
    color:white;
    border-radius: 10px;
    width: 40%;
    height: 20%;
    font-size: 1.5vw;
}
.close:hover {
    background-color: white;
    border:none;
    color: rgb(0, 0, 0);
    transition: 0.5s;
}
.close:not(:hover){
    background-color: #000000;
    color:white;
    border:none;
    transition: 0.5s;
}
.theme {
    border-radius: 10px;
    width: 80%;
    height: 5%;
    text-decoration: none;
    color:rgb(0, 0, 0);
    text-align: center;
}

/* Стиль для контейнера с падающими цифрами */
.container_r {
  position: absolute;
  width: 100%;
  height: 100vh;
  overflow: hidden;
  font-size: 70%;
  font-family: "Courier New", Courier, monospace;
}

/* Стиль для каждого столбца с падающими цифрами */
.column {
  position: absolute;
  top: -100%;
  left: 0;
  width: 2em;
  height: 200%;
  animation: fall infinite linear;
}

/* Анимация для падения цифр */
@keyframes fall {
  to {
    transform: translateY(100%);
  }
}

/* Стиль для каждой цифры в столбце */
.digit {
  display: block;
  height: 2pc;
  color: rgb(0, 0, 0);
  font-size:30px;
}

/* Стиль для первой цифры в столбце, которая ярче остальных */
.digit:first-child {
  color: #8e918f;
}
.image {
  width: 1.2em;
  height: 1.2em;
  border: none;
  left: 50%;
  top: 2%;
  position: flex;
  text-decoration: none;
}
.contact_dropdown{
  border: none;
}
.email {
  border-radius: 10px;
  border:none;
}
.telegram{
  border-radius: 10px;
  border: none;
}
.email:hover{
  background-color: black;
  color:white;
  transition: 0.5s;
}
.email:not(:hover){
  background-color: white;
  color:black;
  transition: 0.5s;
}
.telegram:hover{
  background-color: black;
  color:white;
  transition: 0.5s;
}
.telegram:not(:hover){
  background-color: white;
  color:black;
  transition: 0.5s;
}
    </style>
    <script>
    
    function hamDropdown() {
         document.querySelector(".contact_dropdown").classList.toggle("hienThi");
     }


    </script>
</head>
<body>
 <div class="main-container">
        <div id="animation">
            <span class="In">In</span><span class="tr">Transfer</span>
            <img src="/logot.png" class="image">
        </div>
    </div>
    <div class="whm"><p>О нас</p>
        <span class="maintext">

<span class="in">In</span>Transfer - ваш надежный партнер в переводах денег из России за границу.
<p>Мы компания специализирующаяся на международных денежных переводах, предлагаем своим клиентам удобные и безопасные решения для отправки средств за пределы России. Наша цель - обеспечить быстрые, надежные и прозрачные переводы для всех наших клиентов.</p>
<p>Почему выбирают <span class="in">In</span>Transfer:
    <div class="hwrap"><div class="hmove">
        <span class="hslide">
<p><span class="in">1.</span> Быстрые и надежные переводы: Мы стремимся обеспечить максимальную скорость и надежность во всех наших операциях. Благодаря нашим технологическим решениям и партнерским связям с ведущими финансовыми учреждениями мы обеспечиваем оперативность и безопасность каждого перевода.</p>
</span>
<span class="hslide">
<p><span class="in">2.</span> Широкий выбор пунктов приема и отправки: Мы предлагаем гибкость в выборе пунктов приема и отправки денежных средств. Наша сеть партнеров охватывает множество стран и географических регионов, что позволяет нам обеспечить удобство и доступность наших услуг для наших клиентов.</p>
</span>
<span class="hslide">
<p><span class="in">3. Личная встреча</span> для удобства клиентов: Мы ценим время и комфорт наших клиентов, поэтому предлагаем возможность личной встречи.</p>
</span>
<span class="hslide">
<p><span class="in">4.</span> Надежность и репутация: <span class="in">In</span>Transfer имеет устоявшуюся репутацию в сфере международных денежных переводов. Наша компания основывается на принципах надежности, честности и интегритета. Мы работаем с проверенными партнерами и следуем строгим стандартам в сфере финансовых операций.</p>
</span>
<span class="hslide">
<p><span class="in">5.</span> Гибкость сумм переводов: В <span class="in">In</span>Transfer мы понимаем, что наши клиенты могут иметь различные потребности в переводе средств за границу. Поэтому мы предлагаем гибкость в выборе суммы перевода.</p>
</span>    
</div>
</span>
</div></div>
        <div class="container">
            <button  onclick="hamDropdown()"  class="nut_dropdown">Контакты</button>
            <div class="contact_dropdown">
              <a class="email" href= "mailto:danil.boskin@gmail.com" type="email">Email</a>
              <a class="telegram" href="https://telegram.me/yourdemonoff">Telegram</a>
            </div>
<footer>
        <p><span class="pd">2023 © <span class="in">In</span>Transfer. Все права защищены.</span></p>
      </footer>
</div>
</body>
</html>
