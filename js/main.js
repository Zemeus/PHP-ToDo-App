function input(event) {
    if (event.key == 'Enter') {
        event.preventDefault();
        document.getElementById("add_btn").click();
    }
}

function submit_todo() {
    const SUBMIT_URL = "http://localhost/todo_app/insert.php";
    const ajax = new XMLHttpRequest();
    const todo_element = document.getElementById('todo_input');
    const todo = todo_element.value;
    const todo_list = document.getElementById('todo_list');

    ajax.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            todo_list.innerHTML = this.responseText;
        }
    }

    if(todo != "") {
        ajax.open("POST", SUBMIT_URL);
        ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        ajax.send("todo=" + todo);
        todo_element.value = '';
    }
}

function delete_todo(id) {
    const SUBMIT_URL = "http://localhost/todo_app/delete.php";
    const ajax = new XMLHttpRequest();
    const todo_list = document.getElementById('todo_list');

    ajax.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            todo_list.innerHTML = this.responseText;
        }
    }

    ajax.open("POST", SUBMIT_URL);
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.send("id=" + id);
}