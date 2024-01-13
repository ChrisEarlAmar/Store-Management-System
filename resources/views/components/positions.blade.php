
<div class="modal" id="positions_modal" tabindex="-1" aria-labelledby="positions_modal_label" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false" >
    <div class="modal-dialog modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="positions_modal_label"><i class="bi bi-person-gear me-1" aria-hidden="true"></i> Employee Positions</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if (session('open_modal_success'))
                    <div id="alert" class="alert alert-success alert-dismissible fade show mb-3" role="alert">
                        <strong><i class="bi bi-check-circle-fill me-2"></i> Success!</strong> {{ session('open_modal_success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @elseif (session('open_modal_delete'))
                    <div id="alert" class="alert alert-danger alert-dismissible fade show mb-3" role="alert">
                        <strong><i class="bi bi-trash-fill me-2"></i> Success!</strong> {{ session('open_modal_delete') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @elseif (session('open_modal_error'))
                    <div id="alert" class="alert alert-danger alert-dismissible fade show mb-3" role="alert">
                        <strong><i class="bi bi-exclamation-triangle-fill me-2"></i>Error!</strong> {{ session('open_modal_error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                
                @if($positions->isEmpty())
                    <div class="alert alert-primary" role="alert">
                        <i class="bi bi-info-circle-fill me-2"></i> No positions available. Add new positions.
                    </div>
                @else
                    <div class="table-responsive" style="max-height: 400px; overflow-y: scroll;">
                        <table class="table text-center">
                            <thead>
                                <tr class="text-center z-index-1">
                                    <th style="width:10%">#</th>
                                    <th style="width:70%">Position</th>
                                    <th tyle="width:20%">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($positions as $position)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $position->name }}</td>
                                        <td>
                                            <form action="{{ route('positions.destroy', ['id' => $position->id]) }}" method="POST" style="display:inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm mb-2" title="Delete position" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="bi bi-trash-fill" aria-hidden="true"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
                <form action="{{ route('positions.store') }}" method="POST">
                    @csrf
                    <div class="my-3">
                        <label for="name" class="form-label">Add New Position</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Position Name Here">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            <script>
                                $(document).ready(function(){
                                    $('#positions_modal').modal('show');
                                });
                            </script>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success my-2 w-100"><i class="bi bi-plus-square me-2"></i> Add</button>
                </form>
            </div>
        </div>
    </div>
</div>

@if (session('open_modal_success'))
    <script>
        $(document).ready(function(){
            $('#positions_modal').modal('show');
        });

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
@elseif (session('open_modal_delete'))
    <script>
        $(document).ready(function(){
            $('#positions_modal').modal('show');
        });

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
@elseif (session('open_modal_error'))
    <script>
        $(document).ready(function(){
            $('#positions_modal').modal('show');
        });

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
@endif