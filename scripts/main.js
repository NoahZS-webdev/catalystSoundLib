const sounds = [
    {name: 'becky'},
]

function search(){
    const searchInput =document.querySelector('.input')

    searchInput.addEventListener("input", (e) => {
        // Assigns the value of the event's target to a variable (whatever is typed into the search bar)
        let value = e.target.value
        
        // Checks is input exists and if it is larger than zero
        if (value && value.trim().length > 0){
            // Refefines 'value' to exclude white space and changes input to all lowercase letters
            value = value.trim().toLowerCase()
            // Return the results only if the value of the search is included in the sound's display name
            setList(sounds.filter(sound => {
                return sound.name.includes(value)
            }))
        } else {
            // returns nothing
            // input is invalid -- show and error message or show no results
        }
    });
}
                             
// showing results on a page:
function setList(results){
    
    for (const sound of results){
        // creates a li element for each result item
        const resultItem = document.createElement('li')
        
        //adding a class to each item of the results
        resultItem.classList.add('result-item')
    
        // grabbing the name of the current point of the loop and adding the name as the list item's text
        const text = document.createTextNode(sound.name)

        // appending the text to the result item
        resultItem.appendChild(text)

        // appending the result item to the list
        list.appendChild(resultItem)
        
        if (results.length === 0 ){
        noResults()
    }
}


function noResults(){
    // create an element for the error; a list item ("li")
    const error = document.createElement('li')
    // adding a class name of "error-message" to our error element
    error.classList.add('error-message')

    // creating text for our element
    const text = document.createTextNode('No results found. Sorry!')
    // appending the text to our element
    error.appendChild(text)
    // appending the error to our list element
    list.appendChild(error)
}
