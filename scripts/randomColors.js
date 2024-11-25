let randCol = 0;
let newCol = 0;
genRandCol

function genRandCol() {
    /* generates random value 1-5 (inclusive) */
    var newCol = Math.floor(Math.random() * 5);
    
    if(newCol != randCol){
        randCol = newCol;
    }else if (newCol == randCol){
        while(newCol == randCol){
            var newCol = Math.floor(Math.random() * 5);
        }
    }
    /* takes random value and assigns a color */
    if (newCol == 1) {
        return "#599dcf"
    }
    else if (newCol == 2) {
        return "#7800F0"
    }
    else if (newCol == 3) {
        return "#0070F0"
    }
    else if (newCol == 4) {
        return "#786CE0"
    }
    else if (newCol == 5) {
        return "#3754be"
    }
    else if (newCol == 0) {
        return "#8337be"
    }
}