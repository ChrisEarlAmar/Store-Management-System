@if (session('success'))
    <div id="alert" class="alert alert-success alert-dismissible fade show my-3" role="alert">
        <strong><i class="bi bi-check-circle-fill me-2"></i> Success!</strong> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@elseif (session('update'))
    <div id="alert" class="alert alert-primary alert-dismissible fade show my-3" role="alert">
        <strong><i class="bi bi-pencil-square me-2"></i> Success!</strong> {{ session('update') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@elseif (session('error'))
    <div id="alert" class="alert alert-danger alert-dismissible fade show my-3" role="alert">
        <strong><i class="bi bi-exclamation-triangle-fill me-2"></i>Error!</strong> {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@elseif (session('delete'))
    <div id="alert" class="alert alert-danger alert-dismissible fade show my-3" role="alert">
        <strong><i class="bi bi-trash-fill me-2"></i> Success!</strong> {{ session('delete') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<script>
    // Get the alert element
    var alertElement = document.getElementById('alert');

    // Close the alert after 5 seconds
    setTimeout(function() {
        // Add the class to hide the alert (triggering the fade out)
        alertElement.classList.add('alert-hidden');

        // After the fade out animation is complete, remove the element from the DOM
        alertElement.addEventListener('transitionend', function() {
            alertElement.remove();
        }, { once: true }); // Use 'once' option to ensure the event listener is removed after it's triggered
    }, 5000);
</script>
