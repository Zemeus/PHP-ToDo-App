<?php
    include('includes/header.php');
?>

<div class="container text-center">

    <h1>TO-DO APP</h1>
    <hr>

    <!-- TODO INPUT -->
    <section class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 d-flex flex-row">
            <input id="todo_input" class="form-control" type="text" placeholder="Enter a todo" onkeydown="input(event)">
            <button id="add_btn" class="btn btn-primary float-right" onclick="submit_todo()">ADD</button>
        </div>
        <div class="col-md-3"></div>
    </section>
    <!-- END TODO INPUT -->

    <!-- TODOS OUTPUT -->
    <section id="todo_list">
        <ul class="list-group">
        <?php
            if(isset($_SESSION['result'])) {
                $results = $_SESSION['result'];
                foreach($results as $result) {
                    display_todo($result['id'], $result['todo']);
                }
            }
        ?>
        </ul>
    </section>
    <!-- END TODOS OUTPUT -->

</div>

<?php include('includes/footer.php');?>
