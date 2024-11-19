let randCol;
randCol = 0;

function genRandCol() {
    /* generates random value 1-5 (inclusive) */
    randCol = Math.floor(Math.random() * 5);
    /* takes random value and assigns a color */
    if (randCol == 1) {
        return "#3754BE"
    }
    else if (randCol == 2) {
        return "#59cf6a"
    }
    else if (randCol == 3) {
        return "#7357bd"
    }
    else if (randCol == 4) {
        return "#48dd99"
    }
    else if (randCol == 5) {
        return "#8b8e8f"
    }

}