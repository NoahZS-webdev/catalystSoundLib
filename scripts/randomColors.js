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
        return "#6C85E0"
    }
    else if (randCol == 3) {
        return "#6CCFE0"
    }
    else if (randCol == 4) {
        return "#786CE0"
    }
    else if (randCol == 5) {
        return "#3754be"
    }
    else if (randCol == 0) {
        return "#8337be"
    }

}