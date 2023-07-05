<!DOCTYPE html>
<html>
    <head>
        <title>Site van Brandon</title>
        
        <link rel="stylesheet" href="main.css">
        <script src="https://kit.fontawesome.com/d781f1c539.js" crossorigin="anonymous"></script>
  
    </head>
    
    <body>
        <script>
            function showHideAside() {
            //window.alert("Dit is de site van Brandon.");
            if(document.getElementById("leftAside").className == "open") {
                document.getElementById("leftAside").className = "close";
                document.getElementById("ctrllBar").innerHTML = "<i class='fa-solid fa-circle-arrow-right'></i>" 
  
            } else {
                document.getElementById("leftAside").className = "open";
                document.getElementById("ctrllBar").innerHTML = "<i class='fa-sharp fa-solid fa-circle-arrow-left'></i>" 
            }
        
            if(document.getElementById("rightAside").className == "open") {
                document.getElementById("rightAside").className = "close"; 
  
            } else {
                document.getElementById("rightAside").className = "open";
            }
        }

            function showDialog(welkeDialog) {
                console.log('showDialog aangeroepen. Welke?;' + welkeDialog);
                document.getElementById("dialog").style.top = '300px';
                document.getElementById("overlay").style.display = 'block';

            if (welkeDialog == "Log in") {
                document.getElementById("cnDialog").className = "cn";
                document.getElementById("hdDialog").innerHTML = "Sign in";
                document.getElementById("lForm").className = "log";
                document.getElementById("ftDialog").innerHTML = "Sign up";
            }

            if (welkeDialog == "Contact") {
                document.getElementById("cnDialog").className = "cn";
                document.getElementById("hdDialog").innerHTML = "Log in";
                document.getElementById("cForm").className = "con";
                document.getElementById("ftDialog").innerHTML = "Contact";
            } 
        }

            function hideDialog(welkeDialog) {
                console.log('showDialog afgesloten. Welke?;' + welkeDialog);
                document.getElementById("dialog").style.top = '-250px';
                document.getElementById("overlay").style.display = 'none';
        }
            
            function showapi() {
                console.log('showapi aangeroepen.');
                document.getElementById("dialog2").style.top = '300px';
                document.getElementById("overlay").style.display = 'block';
            
                document.getElementById("hdapi").innerHTML = "API's";
                document.getElementById("ftapi").innerHTML = "API's";
        }

            function hideapi() {
                console.log('showapi afgesloten.');
                document.getElementById("dialog2").style.top = '-250px';
                document.getElementById("overlay").style.display = 'none';
        }
                
            function Redirect() {
                window.location.href = "http://localhost/htmlphp/loginsite/inloggen.php";
        }
            
            function tafelsPhp() {
                window.location.href = "http://localhost/htmlphp/tafel/tafel.php/";
        }

            function moveGame() {
                window.location.href = "http://localhost/frontend/jsspel/";
        }

            function ovG() {
                window.location.href = "http://localhost/htmlphp/opdrachten/functions.php/";
        }

            function kerstBoom() {
                window.location.href = "http://localhost/htmlphp/kerstboom/";
        }

            function opJs() {
                window.location.href = "http://localhost/frontend/opjs/";
        }

            function bierapi() {
                window.location.href = "http://localhost/frontend/api/bierapi/bier.html";
        }

            function countryapi() {
                window.location.href = "http://localhost/frontend/api/countryapi/country.html";
        }

            function weatherapi() {
                window.location.href = "http://localhost/frontend/api/weatherapi/weather.html";
        }

            function calculator() {
                window.location.href = "http://localhost/frontend/calc/calc.html";
        }
        </script>

        <div id="overlay" style="display: none;"></div>
        <div id="dialog" style="top: -200px;">
            <div id="hdDialog" class="hd">
                <div style="float: right;">
                    <i class="fa-solid fa-square-xmark"></i>
                </div>
            </div>
            <div id="cnDialog" class="cn">
                <div id="cForm" class="log">
                    <button onclick="Redirect()">Go to sign in page</button>
                </div>
                <br>
                <div id="lForm" class="con">
                    <br>
                    <button onclick="hideDialog('contact')">Return</button>
                </div>
            </div>
            <div id="ftDialog" class="ft"></div>
        </div>

        <div id="dialog2" style="top: -200px;">
            <div id="hdapi" class="hd2"></div>
            <div id="cnapi" class="cn2">
                <div>
                    <button onclick="bierapi()">
                        Bier API
                    </button>
                    <button onclick="countryapi()">
                        Country API
                    </button>
                    <button onclick="weatherapi()">
                        Weather API
                    </button>
                </div>
                <br>
                <div>
                    <button onclick="hideapi()">Return</button>
                </div>
            </div>
            <div id="ftapi" class="ft2"></div>
        </div>
        <div id="container"> 
            <header>
                Brandon's Webpage
            </header>
            <nav>
                <div id="loginbutton" onclick="showDialog('Log in')">Sign in</div>
                <div id="apis" onclick="showapi()">API's</div>
                <div id="tafelbutton" onclick="tafelsPhp()">PHP Tabels</div>
                <div id="mvgamebutton" onclick="moveGame()">JS Movegame</div>
                <div id="opjs" onclick="opJs()">OpJs</div>
                <div id="ovgbutton" onclick="ovG()">O, V of G?</div>
                <div id="kerstboom" onclick="kerstBoom()">Christmas tree</div>
                <div id="calculator" onclick="calculator()">JS Calculator</div>
            </nav>
            <main>
                <aside id="leftAside" class="open">
                    This webpage is made by: <br> 
                    Brandon Fung(17)
                </aside>
               
                <div id="ctrllBar" onclick="showHideAside()">
                    <i class="fa-sharp fa-solid fa-circle-arrow-left"></i>
                </div>
                <section>
                Hi there. <br> 
                My name is Brandon Fung, I am 17 years old and I live in Ermelo.<br>
                Here on this self-made webpage you can view<br>
                most of my projects(minor & major projects) and you can even test them out.<br>
                Feel free to look!
                </section>
                
                <aside id="rightAside" class="open">
                    College information:<br>
                    College: Deltion College Zwolle<br>
                    College e-mail: 97098145@st.deltion.nl<br>
                    Course: Software development ICT<br>
                    Class: SD1A
                    </aside>

            </main>
            <footer>
                    Brandon Fung, 97098145@st.deltion.nl
            </footer>
        </div>
    </body>
</html>