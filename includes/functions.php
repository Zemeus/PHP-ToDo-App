<?php

    function display_todo($id, $todo) {
        echo
        "<li class='list-group-item list-group-item-light d-flex flex-row text-left'>
                <div class='flex-fill '>$todo</div>
                <div id='todo_{$id}' class='btn btn-outline-success' onclick='delete_todo($id)'><i class='fas fa-check fa-lg'></i></div>
        </li>";
    }
