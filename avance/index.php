<?php
    include "menu.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>MO'O REEKS</title>

    <!--Estilos-->
    <link rel="stylesheet" href="css/estilosIndex.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Mono+One&family=Silkscreen&family=Stick+No+Bills:wght@800&display=swap" rel="stylesheet">
</head>

<body>
    <section class="carrusel" id="inicio">
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="imagenes/front-end-developer-1024x512.png" style="width:100%">

            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="imagenes/front-end-developer-resume-example-and-guide-header.png" style="width:100%">

            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="imagenes/How-to-Become-a-Front-End-Developer-in-2020.png" style="width:100%">

            </div>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>

        <script>
            let slideIndex = 0;
            showSlides();

            function showSlides() {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
                setTimeout(showSlides, 2000); // Change image every 2 seconds
            }

        </script>

    </section>
    <br>
    <section class="s2" style="height:600px;">
        <br>
        <br>

        <div class="info">
            <div>
                <img src="imagenes/CDG_blog_post_image_08.jpg" id="img1" width="400px">
            </div>
            <div>
                <img src="imagenes/What-Is-A-Full-Stack-Developer-and-Everything-You-Need-to-Know-to-Start.jpg" id="img1" width="400px">
            </div>
            <div>
                <img src="imagenes/Fig-01-C%C3%B3mo-convertirse-en-un-desarrollador-web.jpg" id="img3" width="400px">
            </div>


        </div>
        <div style="background-color: #dcdcdc; text-align:center;" class="ben">
            <h3 style="color: white;text-shadow: #0f2f76 2px 2px 2px;">Beneficios</h3>
            <p>
                Tener una certificaión te ofrece una adquisicion en tu conocimiento, además de que te posicionas de mejor manera dentro del mercado laboral, obtienes remuneracionas superiores a la medida, te ofrece versatilidad dentro del campo.
            </p>
        </div>
        <div style="background-color: #dcdcdc; text-align:center;" class="emp">
            <h3 style="color: white;text-shadow: #0f2f76 2px 2px 2px;">Comienza</h3>
            <p>
                Hoy es el día en que tienes que comenzar tu certificación para convertirte en un profesional dentro del desarrollo full stack, Full Stack Camp te ofrece 4 certificaciones que tal vez te pueden interesar.
            </p>
        </div>

        <div style="background-color: #dcdcdc; text-align:center;" class="rea">
            <h3 style="color: white;text-shadow: #0f2f76 2px 2px 2px;">Realiza tu Proyecto</h3>
            <p>
                Los conocimientos que adquieres con alguna de nuestras certficaciones te da la oportunidad de comenzar a desarrollar tu propio proyecto dentro del desarrollo web, no pierdas más el tiempo
            </p>
        </div>
    </section>
    <br>
    <section class="cert">

        <div>
            <table class="tabla1">
                <tr>
                    <td><img src="imagenes/logo-2582747_1280.webp" id="i1" width="250px"></td>
                    <td> <img src="imagenes/logo-2582748_1280.webp" id="i2" width="250px"></td>
                </tr>
                <tr>
                    <td><img src="imagenes/php_PNG26.png" id="i3" width="250px;"></td>
                    <td><img src="imagenes/6242e5dd4337267623f1e7a5_js.svg" id="js" width="220px;"></td>
                </tr>
            </table>
        </div>
        <div class="p1">
            <p id="text">CONOCE LAS CERTIFICACIONES <br> QUE TE OFRECEMOS</p>

            <a href="Certificados.php"><button type="button" class="btn btn-outline-primary" style="margin-left:400px;">Más información</button></a>

        </div>

    </section>
    <br>
    <section class="s4">
        <div>
            <img src="imagenes/4-2.png" id="front">
        </div>
        <div>
            <p class="text1">¿por qué certificarte con nostoros?</p>
            <p style="color:white; font-size:20px;"> <b>Full Stack Camp</b> te ofrece las certificaciones más actualizadas, somos una empresa bien posicionada en el mundo laboral, además de que nuestros alumnos certificados son prueba de ello</p>
        </div>
        <div>
            <img src="imagenes/2-4.png" id="p2">
        </div>
    </section>
    <br>
    <section class="testimonial">
        <table class="tabla2">
            <tr>
                <td rowspan="3" style="background-color: #091c47;"><p style="color:white; font-size:80px;">Nuestros <br> Alumnos</p></td>
                <td>  <div class="container">
                    <img src="imagenes/ee849523-7183-469a-a91c-18470e061d68.jfif" alt="Avatar" style="width:90px">
                    <p><span>Perenganito Martinez.</span> Estudiante.</p>
                    <p>Las certificaciones que <b>FSC</b> ofrece, me han ayudado a mejorar en el mundo del desarrollo web</p>
                </div></td>
            </tr>
            <tr>
               <td style="width:900px;">
                    <div class="container">
                    <img src="imagenes/5210da22-74fd-44ec-9cc2-6c9116e13004.jfif" alt="Avatar" style="width:90px">
                    <p><span>Lola Lolita.</span> CEO at Mighty Schools.</p>
                    <p>Mi curriculum se extendió gracias a las certificaciones, lo que hizo que mas empresas se interesaran en mis cervicios.</p>
                </div>
               </td>
              
            </tr>
            <tr>
                <td>
                     <div class="container">
                    <img src="imagenes/8a90059a-4326-4a4e-a24f-b8601b6d9eb7.jfif" alt="Avatar" style="width:90px">
                    <p><span>Fulanita Jimenez</span> Front-End Developer.</p>
                    <p>La certificación en HTML me ayudó a comprender mejor el mundo del diseño web, y actualmente mi carrera va en ascenso gracias a los conocimientos aprendidos.</p>
                </div>
                </td>
            </tr>
        </table>
    </section>
    <br>
    <?php
    include "footer.html";
    ?>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
