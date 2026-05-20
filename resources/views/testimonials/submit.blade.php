<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Submit Testimonial</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body class="bg-light">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-7">
                    <div class="card shadow-sm">
                        <div class="card-body p-4">
                            <h1 class="h4 mb-2">Submit Testimonial</h1>
                            <p class="text-muted mb-4">Testimoni kamu akan tampil di website setelah disetujui admin.</p>

                            @if(session('testimonial_success'))
                                <div class="alert alert-success">{{ session('testimonial_success') }}</div>
                            @endif

                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{ route('testimonials.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input class="form-control" name="name" value="{{ old('name') }}" required maxlength="255">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Photo (optional)</label>
                                    <input class="form-control" type="file" name="photo" accept="image/*">
                                </div>

                                <div class="row g-3">
                                    <div class="col-12 col-md-6">
                                        <label class="form-label">Program (optional)</label>
                                        <input class="form-control" name="program" value="{{ old('program') }}" maxlength="255">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label">Current Job (optional)</label>
                                        <input class="form-control" name="current_job" value="{{ old('current_job') }}" maxlength="255">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label">Company (optional)</label>
                                        <input class="form-control" name="company" value="{{ old('company') }}" maxlength="255">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label">Rating</label>
                                        <select class="form-select" name="rating" required>
                                            @for($i = 5; $i >= 1; $i--)
                                                <option value="{{ $i }}" @selected((int) old('rating', 5) === $i)>{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <label class="form-label">Testimonial</label>
                                    <textarea class="form-control" name="testimonial" rows="6" required maxlength="4000">{{ old('testimonial') }}</textarea>
                                </div>

                                <div class="mt-4 d-flex gap-2">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                    <a class="btn btn-outline-secondary" href="{{ url('/') }}">Back to Home</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

