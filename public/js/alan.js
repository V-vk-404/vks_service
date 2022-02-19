var service;

var alanBtnInstance = alanBtn({
    bottom: "20px",
    key: "0a852218513167bb5fd45dba3e4d99c72e956eca572e1d8b807a3e2338fdd0dc/stage",
    onCommand: function (commandData) {
        if (commandData.command === "goto-home") {
            //call client code that will react on the received command
            window.location.href = "/";
        } else if (commandData.command === "goto-register") {
            //call client code that will react on the received command
            window.location.href = "/register";
        } else if (commandData.command === "goto-login") {
            //call client code that will react on the received command
            window.location.href = "/login";
        } else if (commandData.command === "goto-contact") {
            //call client code that will react on the received command
            window.location.href = "/contact-us";
        } else if (commandData.command === "goto-service") {
            //call client code that will react on the received command
            window.location.href = "/service-categories";
        } else if (commandData.command === "book-service") {
            //call client code that will react on the received command
            window.location.href = `/${commandData.data.item}/services`;
        } else if (commandData.command === "goto-show-services") {
            //call client code that will react on the received command
            window.location.href = `/${commandData.data.item}/services`;
        }
    },
    rootEl: document.getElementById("alan-btn"),
});
