@csrf

<style>
    input[type="date"]::-webkit-calendar-picker-indicator {
        filter: invert(1);
    }
</style>

<div class="mb-3">
    <label for="work_name" class="form-label">Nama Karya</label>
    <input
        type="text"
        id="work_name"
        name="work_name"
        class="form-control @error('work_name') is-invalid @enderror"
        value="{{ old('work_name', $studentWork->work_name ?? '') }}"
        required
    >
    @error('work_name')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="description" class="form-label">Deskripsi Karya</label>
    <textarea
        id="description"
        name="description"
        rows="4"
        class="form-control @error('description') is-invalid @enderror"
    >{{ old('description', $studentWork->description ?? '') }}</textarea>
    @error('description')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="creator_name" class="form-label">Nama Pembuat</label>
    <input
        type="text"
        id="creator_name"
        name="creator_name"
        class="form-control @error('creator_name') is-invalid @enderror"
        value="{{ old('creator_name', $studentWork->creator_name ?? '') }}"
        required
    >
    @error('creator_name')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="created_date" class="form-label">Tanggal Dibuat</label>
    <input
        type="date"
        id="created_date"
        name="created_date"
        class="form-control @error('created_date') is-invalid @enderror"
        value="{{ old('created_date', isset($studentWork) && $studentWork->created_date ? $studentWork->created_date->format('Y-m-d') : '') }}"
        required
    >
    @error('created_date')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="photo" class="form-label">Foto Karya</label>
    <input
        type="file"
        id="photo"
        name="photo"
        class="form-control @error('photo') is-invalid @enderror"
        accept=".jpg,.jpeg,.png,.webp"
    >
    @error('photo')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror

    @if(isset($studentWork) && $studentWork->photo)
        <div class="mt-3">
            <p class="mb-1 text-muted">Foto saat ini:</p>
            <img
                src="{{ asset('storage/' . $studentWork->photo) }}"
                alt="{{ $studentWork->work_name }}"
                style="max-width: 180px; height: auto;"
            >
        </div>
    @endif
</div>
