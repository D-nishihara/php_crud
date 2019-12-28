const userelements = document.getElementsByName("user_name")
const editelements = document.getElementsByName("edit")
var tableelements = document.getElementsByTagName("table")
const inputelements = tableelements[0].getElementsByTagName("input")
var infoelement = Array.prototype.slice.call(inputelements)
var array = []



for (i = 0; i < editelements.length; i++) {
    var split = i * 4
    array.push(infoelement.slice(split, split + 4))
    editelements[i].addEventListener('click', {name: array[i], handleEvent: edit})
}

function edit() {
    var user = this.name[1].value
    this.name[1].style.border = "thin solid black"
    var localthis = this.name
    this.name[1].addEventListener("mouseleave", function() {
        if (user == localthis[1].value) {
            localthis[1].style.border = 'none'
        } else {
            var fd = new FormData()
            fd.append('editid', localthis[0].value)
            fd.append('editname', localthis[1].value)
            var xhr = new XMLHttpRequest();
            xhr.open('POST', '../../src/module/crud_update.php')
            // xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
            xhr.send(fd)
            localthis[1].style.border = 'none'
        }
    })
}

function update() {
    
}