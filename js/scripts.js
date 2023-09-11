$(document).ready(function() {

    let containerA = document.getElementById("circleA");

    let circleA = new ProgressBar.Circle(containerA, {

        color: "#64DAF9",//cor do circulo
        strokeWidth: 8,//largura da borda do circulo
        duration: 1400, //tempo animação em milisegundos
        from: {color: '#AAA'}, //cor que vai omeçar a animação
        to: {color: '#65daf9'}, //cor que vao terminar a animação

        step: function(state, circle){
            circle.path.setAttribute('stroke', state.color);

            let value = Math.round(circle.value() * 60);

            circle.setText(value);
        }

    });


    let containerB = document.getElementById("circleB");

    let circleB = new ProgressBar.Circle(containerB, {

        color: "#64DAF9",//cor do circulo
        strokeWidth: 8,//largura da borda do circulo
        duration: 1600, //tempo animação em milisegundos
        from: {color: '#AAA'}, //cor que vai omeçar a animação
        to: {color: '#65daf9'}, //cor que vao terminar a animação

        step: function(state, circle){
            circle.path.setAttribute('stroke', state.color);

            let value = Math.round(circle.value() * 58);

            circle.setText(value);
        }

    });

    let containerC = document.getElementById("circleC");

    let circleC = new ProgressBar.Circle(containerC, {

        color: "#64DAF9",//cor do circulo
        strokeWidth: 8,//largura da borda do circulo
        duration: 2000, //tempo animação em milisegundos
        from: {color: '#AAA'}, //cor que vai omeçar a animação
        to: {color: '#65daf9'}, //cor que vao terminar a animação

        step: function(state, circle){
            circle.path.setAttribute('stroke', state.color);

            let value = Math.round(circle.value() * 3);

            circle.setText(value);
        }

    });

   let containerD = document.getElementById("circleD");

    let circleD = new ProgressBar.Circle(containerD, {

        color: "#64DAF9",//cor do circulo
        strokeWidth: 8,//largura da borda do circulo
        duration: 2200, //tempo animação em milisegundos
        from: {color: '#AAA'}, //cor que vai omeçar a animação
        to: {color: '#65daf9'}, //cor que vao terminar a animação

        step: function(state, circle){
            circle.path.setAttribute('stroke', state.color);

            let value = Math.round(circle.value() * 50);

            circle.setText(value);
        }

    });

    //iniciando o loader quando o usuario chega no elemento
    let dataAreaOffset = $('#data-area').offset();//pega a posição da div

    let stop = 0;

    $(window).scroll(function(e){
        let scroll = $(window).scrollTop();//pega a posição do scroll que o usuario está
        //se a posiç~~ao que o usuario está é maior que a da div,
        //no caso 500px acima e se stop está zerado
        if (scroll > (dataAreaOffset.top - 500) && stop == 0) {

            circleA.animate(1.0);
            circleB.animate(1.0);
            circleC.animate(1.0);
            circleD.animate(1.0);

            stop = 1;
        }

        
    });

    //parallax

    //faz a pagina carregar todas as imagens antes do parallax
    setTimeout(function(){
        //pega a div e coloca a img de fundo nela
        $('#data-area').parallax({imageSrc: 'img/cidadeparallax.png'});
        $('#apply-area').parallax({imageSrc: 'img/pattern.png'});

    }, 250);//melisimos de segundos para iniciar

    //Filtro do portifolio

    $('.filter-btn').on('click', function() {

        let type = $(this).attr('id');//pega o id do botao
        let boxes = $('.project-box');//pega todoas tags que tiverem essas classes

        $('.main-btn').removeClass('active');//remove as class active
        $(this).addClass('active');//coloca active no botão que foi clicado

        if(type == 'dsg-btn') {//se p tipo for designer

            eachBoxes('dsg', boxes)//exibe as caixas com id dsg
        } 
        else if( type == 'dev-btn') {
            eachBoxes('dev', boxes );
        }
        else if(type == 'seo-btn'){
            eachBoxes('seo', boxes);
        } else {
            eachBoxes('all', boxes);
        }
           
    });

    //essa função recebe os parametros tipo do id e e qtd de caixas
    function eachBoxes(type, boxes){

        if(type == 'all') {//se o tipi for all todas as caixas aparecem

            $(boxes).fadeIn();
        } else {
            $(boxes).each(function(){
                if(!$(this).hasClass(type)) {
                    $(this).fadeOut('slow');
                } else {
                    $(this).fadeIn();
                }
                
            });
        }
    }

    //scroll para as seções
    let navBtn = $('.nav-item');

    //pega o id das seções
    let bannerSection = $('#mainSlider');
    let aboutSection = $('#about-area');
    let servicesSection = $('#services-area');
    let teamSection = $('#team-area');
    let portifolioSection = $('#portifolio-area');
    let contactSection = $('#contact-area');

    let scrolto = '';

    $(navBtn).click(function(){

        let btnId = $(this).attr('id');

        console.log(btnId);

        if(btnId == 'about-menu') {
            scrolto = aboutSection;
        } else if (btnId == 'services-menu') {
            scrolto = servicesSection;
        }else if (btnId == 'team-menu') {

            scrolto = teamSection;

        } else if (btnId == 'portifolio-menu') {

            scrolto = portifolioSection;

        } else if (btnId == 'contact-menu') {

            scrolto = contactSection;
        } else {

            scrolto = bannerSection;
        }

        $([document.documentElement, document.body]).animate({

            scrollTop: $(scrolto).offset().top - 60
        }, 1500);

    })

    


});
