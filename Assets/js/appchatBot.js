const chatBody = document.querySelector(".chat-body"); /*Cuerpo del chat*/
const txtInput = document.querySelector("#txtInput"); /*textbox*/
const send = document.querySelector(".send");   /*Icono de envío*/

send.addEventListener("click", ()=> renderUserMessage());

txtInput.addEventListener('keyup' , ( event ) => {
    if (event.keyCode === 13) {
        renderUserMessage();
    }
});


const renderUserMessage = () => {
    const userInput = txtInput.value;
    renderMessageEle( userInput , "user" );
    txtInput.value = "";
   

    setTimeout(() =>{
         renderChatBotResponse( userInput );
         posicionScroll();
    },600);
};


const renderChatBotResponse = ( userInput ) =>{
    const respuesta = obtenerRespuesta( userInput );
    renderMessageEle( respuesta );
}

//MÉTODO PARA MOSTRAR LOS MENSAJES
const renderMessageEle = ( mensaje , tipo ) => {
    let className = "user-message";
    if (tipo !== 'user') {
        className = "chatbot-message";
    }
    const messageElem = document.createElement("div");
    const txtNode = document.createTextNode( mensaje );
    messageElem.classList.add(className);
    messageElem.append( txtNode );
    chatBody.append( messageElem );
};


const obtenerRespuesta = ( userInput ) =>{
    return respondObjecto[userInput] == undefined ? "No entiendo lo que quiere decir": respondObjecto[userInput];
}

const posicionScroll = () => {
    if (chatBody.scrollHeight > 0) {
        chatBody.scrollTop = chatBody.scrollHeight;
    }
}


/*ICON CLICK*/


const icon = document.querySelector("#iconClick");
const contenedorChat = document.querySelector(".container-chatBot");
const botonDisplay = document.querySelector(".content-Initial ");



icon.addEventListener("click" , ()=> displayContentDown());
contenedorChat.style.display = "none";

const displayContentDown = () =>{
    
        botonDisplay.style.opacity = "1";
        contenedorChat.style.bottom = "0px";
     setTimeout(() =>{
        contenedorChat.style.opacity = "0";
    },50);
    
}




botonDisplay.addEventListener("click" , () => displayContentUp());

const displayContentUp = () => {
    contenedorChat.style.display = "block";
     botonDisplay.style.opacity = "0";
      contenedorChat.style.bottom = "50px";
     setTimeout(() =>{
        contenedorChat.style.opacity = "1";
    },50);
}