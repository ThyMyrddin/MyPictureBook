<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
a {
    text-decoration: none;
}
#hero {
  width: 100%;
  height: 100%;
  background: url(img/bg.jpg) no-repeat center;
  background-size: cover;
  overflow: hidden;
  position: relative;
}
@media (min-width: 1024px) {
  #hero {
    background-attachment: fixed;
  }
}
#hero:before {
  content: "";
  background: rgba(6, 12, 34, 0.7);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}
#hero .hero-container {
  position: absolute;
  bottom: 0;
  left: 0;
  top: 90px;
  right: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  text-align: center;
  padding: 0 15px;
}
@media (max-width: 991px) {
  #hero .hero-container {
    top: 70px;
  }
}
#hero h1 {
  color: #fff;
  font-family: "Raleway", sans-serif;
  font-size: 56px;
  font-weight: 600;
  text-transform: uppercase;
}
#hero h1 span {
  color: #f82249;
}
@media (max-width: 991px) {
  #hero h1 {
    font-size: 34px;
  }
}
#hero p {
  color: #ebebeb;
  font-weight: 700;
  font-size: 20px;
}
@media (max-width: 991px) {
  #hero p {
    font-size: 16px;
  }
}
#hero .play-btn {
  width: 94px;
  height: 94px;
  background: radial-gradient(#f82249 50%, rgba(101, 111, 150, 0.15) 52%);
  border-radius: 50%;
  display: block;
  position: relative;
  overflow: hidden;
}
#hero .play-btn::after {
  content: "";
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translateX(-40%) translateY(-50%);
  width: 0;
  height: 0;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 15px solid #fff;
  z-index: 100;
  transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
}
#hero .play-btn:before {
  content: "";
  position: absolute;
  width: 120px;
  height: 120px;
  -webkit-animation-delay: 0s;
  animation-delay: 0s;
  -webkit-animation: pulsate-btn 2s;
  animation: pulsate-btn 2s;
  -webkit-animation-direction: forwards;
  animation-direction: forwards;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
  -webkit-animation-timing-function: steps;
  animation-timing-function: steps;
  opacity: 1;
  border-radius: 50%;
  border: 2px solid rgba(163, 163, 163, 0.4);
  top: -15%;
  left: -15%;
  background: rgba(198, 16, 0, 0);
}
#hero .play-btn:hover::after {
  border-left: 15px solid #f82249;
  transform: scale(20);
}
#hero .play-btn:hover::before {
  content: "";
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translateX(-40%) translateY(-50%);
  width: 0;
  height: 0;
  border: none;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 15px solid #fff;
  z-index: 200;
  -webkit-animation: none;
  animation: none;
  border-radius: 0;
}
#hero .about-btn {
  font-family: "Raleway", sans-serif;
  font-weight: 500;
  font-size: 14px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 12px 32px;
  border-radius: 50px;
  transition: 0.5s;
  line-height: 1;
  margin: 10px;
  color: #fff;
  -webkit-animation-delay: 0.8s;
  animation-delay: 0.8s;
  border: 2px solid #f82249;
}
#hero .about-btn:hover {
  background: #f82249;
  color: #fff;
}

@-webkit-keyframes pulsate-btn {
  0% {
    transform: scale(0.6, 0.6);
    opacity: 1;
  }
  100% {
    transform: scale(1, 1);
    opacity: 0;
  }
}

@keyframes pulsate-btn {
  0% {
    transform: scale(0.6, 0.6);
    opacity: 1;
  }
  100% {
    transform: scale(1, 1);
    opacity: 0;
  }
}


</style>
<body>
<section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="mb-4 pb-0">my <span>picture</span> book</h1>
      <a href="../Login_form/index.html" class="about-btn scrollto">login</a>
      <a href="../Login_form/index3.php" class="about-btn scrollto">view</a>
    </div>
  </section>

</body>
</html>