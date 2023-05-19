<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Php Variables -detailed</title>
</head>

<body bgcolor="whitesmoke">
    <section id="homepage" class='homepage'>
        <h1>Variables</h1>

        <ul>
            <li onclick="window.location.href='?show_global=true'">Global</li>
            <li onclick="location.href='?show_local=true'">Local</li>
            <li onclick="self_link('#section5')">Static</li>

        </ul>
       
        <p>
            There are only three types of Variables in PHP Language
        </p>
    </section>
    <?php
            function addSection2(){
                echo '<section id="section2" class="global">
                <h1 class="gh1">Global</h1>
                <center>
                    <h3>A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:
                    </h3>
                </center>
                <div class="cpContainer">
                    <div class="codepen">
                        <div class="header">
                            <h2>Codes</h2>
                        </div>
                        <div class="codeBox">
                            <img src="../img/code1.png" alt="">
                            <a href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_var_global" target="_blank" rel="noopener noreferrer">Try it</a>
        
                        </div>
                    </div>
        
                </div>
            </section>
        ';
            }

            function addSection3(){
               echo '<section id="section3" class="local">
               <h1 class="gh1">Local</h1>
               <center>
                   <h3>A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:
                   </h3>
               </center>
               <div class="cpContainer">
                   <div class="codepen">
                       <div class="header">
                           <h2>Codes</h2>
                       </div>
                       <div class="codeBox">
                           <img src="../img/code2.png" alt="">
                           <a href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_var_local" target="_blank" rel="noopener noreferrer">Try it</a>
       
                       </div>
                   </div>
       
               </div>
           </section>'; 
        }

            if (isset($_GET['show_global']) == true) {
                addSection2();
            }
            elseif (isset($_GET['show_local']) == true) {
                addSection3();
            }
        ?>
  

    
    <section id="section4">
        <h1 class="gh1">Global Keyword</h1>
        <center>
            <h3>The global keyword is used to access a global variable from within a function.
                To do this, use the global keyword before the variables (inside the function):
            </h3>
        </center>
        <div class="cpContainer">
            <div class="codepen">
                <div class="header">
                    <h2>Codes</h2>
                </div>
                <div class="codeBox">
                    <img src="../img/code3.png" alt="">
                    <a href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_var_global_keyword" target="_blank" rel="noopener noreferrer">Try it</a>

                </div>
            </div>

        </div>

        <center>
            <h3>PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the
                variable. This array is also accessible from within functions and can be used to update global variables
                directly.
                The example above can be rewritten like this:
            </h3>
        </center>
        <div class="cpContainer">
            <div class="codepen">
                <div class="header">
                    <h2>Codes</h2>
                </div>
                <div class="codeBox">
                    <img src="../img/code4.png" alt="">
                    <a href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_var_globals" target="_blank" rel="noopener noreferrer">Try it</a>

                </div>
            </div>

        </div>
    </section>

    <section id="section5" class="static">
        <h1 class="gh1">Static</h1>
        <center>
            <h3>Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we
                want a local variable NOT to be deleted. We need it for a further job.
                To do this, use the static keyword when you first declare the variable:
            </h3>
        </center>
        <div class="cpContainer">
            <div class="codepen">
                <div class="header">
                    <h2>Codes</h2>
                </div>
                <div class="codeBox">
                    <img src="../img/code5.png" alt="">
                    <a href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_var_static" target="_blank" rel="noopener noreferrer">Try it</a>

                </div>
            </div>

        </div>
    </section>


  
</body>

<script src="script/main.js"></script>

<script>
    function alert(a){
        alert(a)
    }
</script>
</html>