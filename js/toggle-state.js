function changeCaughtState (divID) {
    //document.getElementById(divID).classList.toggle("caught");
    let toggleState = document.getElementById(divID).classList;
    
    switch (toggleState.item(3)) {
        case null:
            toggleState.add("trade");
            break;
        case "trade":
            toggleState.remove("trade");
            toggleState.add("place");
            break;
        case "place":
            toggleState.remove("place");
            toggleState.add("caught");
            break;
        case "caught":
            toggleState.remove("caught");
            break;
    }  
}