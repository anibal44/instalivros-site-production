$(document).ready(function() {
    var userdata_token = localStorage.getItem('token');
    var userdata_expiration = localStorage.getItem('expiration');
    var userdata_name = localStorage.getItem('name');
    var userdata_email = localStorage.getItem('email');

    var currentdate = new Date().toISOString(); 

    if (currentdate > userdata_expiration) {
        deleteSession();
    }

    $('.modal-plans .modal-title span').html(userdata_name);
    $('.modal-plans .email-title strong').html(userdata_email);

    $(document).on('click', '.bt-logout', function() {
        deleteSession();
    });
    $(document).on('click', '.modal-plans .close', function() {
        location.reload();
    });

    // BOX PLANS SELECTOR
    $(document).on('click', '#plan-selected', function() {
        $('.plan-list').toggle();
    });

    $(document).on('click', '.plan-list > div', function() {
        planId = $(this).attr('rel');
        planName = $(this).find('b').text();
        planInfo = $(this).find('span').text();
        planPrice = $(this).find('strong').text();
        planFullprice = $(this).find('small').text();

        $('#plan-selected').attr('rel', planId);
        $('#plan-selected b').html(planName);
        $('#plan-selected span').html(planInfo);
        $('#plan-selected strong').html(planPrice);
        $('#plan-selected small').html(planFullprice);

        $('.plan-list').hide();
        $('.plan-list > div').show();
        $(this).hide();
    });

    function validateForm() {
        name = $('#name').val();
        email = $('#email').val();
        password = $('#password').val();

        emailFilter=/^.+@.+\..{2,}$/;
        illegalChars= /[\(\)\<\>\,\;\:\\\/\"\[\]]/;

        if((name == undefined) || (name == '') || (name.length < 5)) {
            $('.error').html('<span>Você precisa informar seu nome.</span>');

            return false;
        }else{
            $('.error').html('');
        }
        if((email == undefined) || (email == '')) {
            $('.error').html('<span>Você precisa escolher um e-mail.</span>');

            return false;
        }else{
            $('.error').html('');
        }

        if(!(emailFilter.test(email))||email.match(illegalChars)){
            $('.error').html('<span>Escolha um e-mail válido.</span>');
            return false;
        }

        if((password == undefined) || (password == '') || (password.length < 8)) {
            $('.error').html('<span>Você precisa escolher uma senha.</span>');

            return false;
        }else{
            $('.error').html('');
        }

        // Passou, tudo ok
        $('.bt-sendform').html('Aguarde um momento...').prop('disabled', true);

        // Processar o endpoint
        $.ajax({
            type: "POST",
            dataType: 'json',
            crossDomain: true,
            data: {"name" : name, "email" : email, "password" : password},
            url:'https://api-v2.instalivros.com/v1/client/users',
            success: function(data) {
                newUserId = data.id;
                newUserPass = password;

                createSession();
            },
            error: function() {
                $('.error').html('<span>Este usuário já está sendo usado. Por favor, escolha um outro e-mail.</span>');
                $('.bt-sendform').html('Confirmar').prop('disabled', false);
            }
        });

        // Validando dados e recebendo token
        function createSession() {
            $.ajax({
                type: "POST",
                dataType: 'json',
                crossDomain: true,
                data: { "email" : email, "password" : password},
                url:'https://api-v2.instalivros.com/v1/client/session',
                success: function(data) {

                    localStorage.setItem('token', data.access_token);
                    localStorage.setItem('expiration', data.expires_at);
                    localStorage.setItem('name', name);
                    localStorage.setItem('email', email);

                    $('.modal-plans .modal-title span').html(name);
                    $('.modal-plans .email-title strong').html(email);

                    var userdata_token = localStorage.getItem('token');

                    closeModal();
                    openPlans();
                },
                error: function() {
                    alert('Aconteceu algo inesperado, tente novamente mais tarde.');
                }
            });
        }
        return false;
    }
    function validatePayment() {
        card_name = $('#card-name').val();

        card_fname = card_name.substr(0,card_name.indexOf(' '));
        card_lname = card_name.substr(card_name.indexOf(' ')+1); 
        card_number = $('#card-number').val().replace(/\s/g, '');
        card_month = $('#card-month').val();
        card_year = $('#card-year').val();
        card_cvv = $('#card-cvv').val();
        gateway = 'iugu';
        plan_id = $('#plan-selected').attr('rel');


        if((card_name == undefined) || (card_name == '') || (card_name.length < 6)) {
            $('.error').html('<span>Insira o nome impresso no cartão.</span>');

            return false;
        }else{
            $('.error').html('');
        }
        if((card_number == undefined) || (card_number == '') || (card_number.length < 14)) {
            $('.error').html('<span>Insira um número de cartão de crédito válido.</span>');

            return false;
        }else{
            $('.error').html('');
        }
        if((card_month == '') || (card_year == '')) {
            $('.error').html('<span>Selecione o mês e ano de expiração.</span>');

            return false;
        }else{
            $('.error').html('');
        }
        if((card_cvv == '') || (card_cvv.length < 3)) {
            $('.error').html('<span>Insira os três últimos números que se encontram no verso do cartão (ou os quatro números na frente, se for Amex).</span>');

            return false;
        }else{
            $('.error').html('');
        }

        // Passou, tudo ok
        $('.processing-payment').show();
        $('.bt-sendpayment').html('Estamos processando seu pagamento...').prop('disabled', true);

        // Processar o endpoint
        $.ajax({
            type: "POST",
            dataType: 'text',
            crossDomain: true,
            data: {"gateway" : gateway, "plan_id" : plan_id, "credit_card" : card_number, "cvv" : card_cvv, "month" : card_month, "year" : card_year, "first_name" : card_fname, "last_name" : card_lname},
            url:'https://api-v2.instalivros.com/v1/client/me/subscribe',
            beforeSend: function (request) {
                request.setRequestHeader('Authorization', 'Bearer ' + localStorage.getItem('token'));
            },
            success: function(data) {
                $('.content-payment').hide();
                $('.content-success').show();

                
                localStorage.removeItem('token');
                localStorage.removeItem('name');
                localStorage.removeItem('email');
                localStorage.removeItem('expiration');
                $('.processing-payment').fadeOut();
            },
            error: function(errors) {
                $('.error').html('<span>Não conseguimos processar seu pagamento, tente utilizar outro cartão de crédito ou entre em contato com sua operadora.</span>');
                $('.bt-sendpayment').html('Comecar a usar o premium').prop('disabled', false);
                $('.processing-payment').fadeOut();
            }
        });
    }

    function deleteSession() {
        localStorage.removeItem('token');
        localStorage.removeItem('name');
        localStorage.removeItem('email');
        localStorage.removeItem('expiration');
        console.log(userdata_token);
        $('.modal').hide().removeClass('active');
        location.reload();
    }

    function openPlans() {
        $('.modal-plans').show().addClass('active');
    }

    // MODAL CLOSES
    function closeModal() {
        $('.modal').hide().removeClass('active');
        $('.modal .signbuttons').show();
        $('.modal .form').hide();
    }

    $(document).on('keyup',function(evt) {      
        if (evt.keyCode == 27) {
           closeModal();
        }
    });
    $(document).on('click', '.modal .close', function() {
        closeModal();
    });

    // MODAL OPEN
    $(document).on('click', '.bt-signup', function() {

        console.log(userdata_token);

        if(userdata_token && userdata_token !== null && userdata_token !== 'null') {
            openPlans();
        }
        else {
            $('.modal-signup').show().addClass('active');
        }
    });

    $(document).on('click', '.bt-sendform', function() {
        validateForm();
    });

    $(document).on('click', '.bt-sendpayment', function() {
        validatePayment();
    });

});