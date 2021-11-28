require('./bootstrap');


window.addEventListener('load', (event) => {
    $('#modal').addClass('show');
    });

    let username = document.getElementById("username");

    // function closeButton(){
    //     if(username.value == ''){
    //     $('#validate').removeClass('d-none');
    //     $('#validate').addClass('d-block');
    //     }else{
    //     $('#modal').removeClass('show');
    //     document.getElementById("showUsername").innerHTML = username.value;
    //     }
    // }
    const message_input = document.getElementById("message_input");
    const message_form = document.getElementById("message_form");
    // const ms_user = document.getElementById("ms_user");
    const ms_message = document.getElementById("ms_message");

    message_form.addEventListener('submit', function (e){
        e.preventDefault();
        
    if(message_input.value == ''){
        alert("Please Enter a Message");
    }

    const options = {
        method: 'post',
        url: '/send-message',
        data: {
            username: username.value,
            message: message_input.value
        }
    }

        axios(options);
    });

    window.Echo.channel('chat')
        .listen('.message', (e) => {
            ms_message.innerHTML += '<div class="position-absolute pt-1 pe-5 r-0"><span class="text-muted">09:25</span></div><div class="card-body"><div class="d-flex flex-row pb-2"><p class="mb-0 fs-16 text-dark">' + e.username + '</p></div><div class="chat-text-left ps-10"><p class="mb-0">' + e.message + '</p></div></div><div class="clearfix"></div>';
            console.log(e.message);
        })