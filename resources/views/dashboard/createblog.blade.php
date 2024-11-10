@extends('dashboard.master')
@section('header')
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@endsection
@section('content')
<div class="col-lg-9 col-md-8">
    <div class="mb-4">
        <h1 class="mb-0 h3">Welcome to Admin Dashboard.</h1>
    </div>


    <div class="row g-4">
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body p-lg-5">
                <div class="mb-5">
                    <h4 class="mb-1">Create Blog</h4>

                </div>
                <form id="blogForm" class="row g-3 needs-validation" enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="col-lg-6 col-md-12">
                        <label for="profileFirstNameInput" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Enter Blog Title" required>
                        <div class="invalid-feedback">Please enter blog title.</div>
                    </div>
                    <div class="col-lg-6">
                        <label for="profileCountryInput" class="form-label">Category</label>
                        <select class="form-select" name="category" required>
                            <option selected disabled value="">Choose...</option>
                            <option value="Headtrax Services">Headtrax Services</option>
                            <option value="Tech Services">Tech Services</option>
                            <option value="Others">Others</option>
                        </select>
                        <div class="invalid-feedback">Please select category.</div>
                    </div>
                    <div class="col-lg-12">
                        <label for="profileAddressInput" class="form-label">Details</label>
                        <div id="editor-container">
                            <div id="editor"></div>
                        </div>
                        <input type="hidden" name="details" id="details">
                        <div class="invalid-feedback">Please enter blog details.</div>
                    </div>
                    <div class="col-lg-12">
                        <label for="profilezipInput" class="form-label">Blog Display Image</label>
                        <input type="file" name="image" class="form-control" id="profilezipInput" required>
                    </div>
                    <div class="col-12 mt-4">
                        <button class="btn btn-primary me-2" type="submit">Create</button>
                        <button class="btn btn-light" type="reset">Cancel</button>
                    </div>
                </form>



            </div>
        </div>

    </div>

</div>

@endsection


@section('script')

<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
    var quill = new Quill('#editor', {
        theme: 'snow'
    });

    $("#editor").on('input', function() {
        var content = quill.root.innerHTML;
        $("#details").val(content)
        console.log(content);
    })
</script>

<script>
$(document).ready(function() {
    $('#blogForm').on('submit', function(event) {
        event.preventDefault();

        // Fetch details from the editor if applicable
        // $('#details').val($('#editor').text());

        // Create FormData object
        let formData = new FormData(this);

        // Send the AJAX request
        $.ajax({
            url: '/admin/save-blog',  // Route to handle saving the blog
            type: 'POST',
            data: formData,
            contentType: false,        // Important for file upload
            processData: false,        // Important for file upload
            success: function(response) {
                Swal.fire('success','Blog created successfully!','success');
                location.reload()
            },
            error: function(xhr) {
                Swal.fire('error','Opps, error encoutered while creating blog, try again later.','error');
                location.reload()
            }
        });
    });
});
</script>
@endsection