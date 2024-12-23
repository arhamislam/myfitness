<!--
    Author: Arham Islam
    Date Created: July 24, 2024
    File Description: PHP file that lets the user add/delete/create/update workouts to their day.
-->

<head>
    <title>Log Sheet</title>
</head>
<body>
    <div class="testing1">
        <br>
        <span class="display-4 m-5 text">Log Sheet</span>
    </div>
    <div>
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" onclick="addExerciseModal()">Add Exercise</button>

        <div class="modal fade" id="addExerciseModal" tabindex="-1" aria-labelledby="addExerciseModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="addExerciseModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-2 ms-5 mb-4 p-0 testing2">
        <label for="exerciseDateInput" class="form-label">Date</label>
        <input type="date" class="form-control" id="exerciseDateInput" onkeydown="return false;">
    </div>

    <script>
        function addExerciseModal() {
            var addExerciseModal = new bootstrap.Modal(document.getElementById("addExerciseModal"));
            addExerciseModal.show();
        }
    </script>
</body>
