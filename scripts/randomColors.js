let randCol;
randCol = 0;

function genRandCol() {
    /* generates random value 1-5 (inclusive) */
    randCol = Math.floor(Math.random() * 5);
    /* takes random value and assigns a color */
    if (randCol == 1) {
        return "#599dcf"
    }
    else if (randCol == 2) {
        return "#59cf6a"
    }
    else if (randCol == 3) {
        return "#259ad9"
    }
    else if (randCol == 4) {
        return "#2d7a57"
    }
    else if (randCol == 5) {
        return "#3754be"
    }
    else if (randCol == 0) {
        return "#8337be"
    }

}