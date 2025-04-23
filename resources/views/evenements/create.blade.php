<link rel="stylesheet" href="{{ asset('css/CreateE.css') }}">

@extends('layouts.app')

@section('content')
<div class="event-form-container">
    <div class="form-header">
        <h1 class="form-title">Créer un Nouvel Événement</h1>
        <a href="{{ route('evenements.index') }}" class="back-btn">
            <i class="fas fa-arrow-left"></i> Retour à la liste
        </a>
    </div>

    <div class="form-card">
        <form action="{{ route('evenements.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="form-grid">
                <!-- Titre -->
                <div class="form-group">
                    <label for="titre" class="form-label">Titre de l'événement</label>
                    <input type="text" name="titre" id="titre" class="form-input" 
                           placeholder="Ex: Réunion du club" required>
                    <div class="form-icon">
                        <i class="fas fa-heading"></i>
                    </div>
                </div>
                
                <!-- Club -->
                <div class="form-group">
                    <label for="club_id" class="form-label">Club organisateur</label>
                    <div class="select-wrapper">
                        <select name="club_id" id="club_id" class="form-select" required>
                            @foreach($clubs as $club)
                                <option value="{{ $club->id }}">{{ $club->nom }}</option>
                            @endforeach
                        </select>
                        <div class="select-arrow">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="form-icon">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
                
                <!-- Date Début -->
                <div class="form-group">
                    <label for="date_debut" class="form-label">Date et heure de début</label>
                    <input type="datetime-local" name="date_debut" id="date_debut" 
                           class="form-input datetime-input" required>
                    <div class="form-icon">
                        <i class="far fa-calendar-alt"></i>
                    </div>
                </div>
                
                <!-- Date Fin -->
                <div class="form-group">
                    <label for="date_fin" class="form-label">Date et heure de fin</label>
                    <input type="datetime-local" name="date_fin" id="date_fin" 
                           class="form-input datetime-input" required>
                    <div class="form-icon">
                        <i class="far fa-calendar-check"></i>
                    </div>
                </div>
                
                <!-- Description -->
                <div class="form-group full-width">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-textarea" 
                              placeholder="Décrivez l'événement..." rows="4" required></textarea>
                    <div class="form-icon">
                        <i class="fas fa-align-left"></i>
                    </div>
                </div>
                
                <!-- Image -->
                <div class="form-group full-width">
                    <label for="image" class="form-label">Image de l'événement</label>
                    <div class="file-upload-wrapper">
                        <input type="file" name="image" id="image" class="file-upload-input">
                        <label for="image" class="file-upload-label">
                            <i class="fas fa-cloud-upload-alt"></i>
                            <span>Choisir une image</span>
                        </label>
                        <div class="file-preview" id="filePreview"></div>
                    </div>
                </div>
            </div>
            
            <div class="form-actions">
                <button type="submit" class="submit-btn">
                    <i class="fas fa-calendar-plus"></i> Créer l'événement
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Include Font Awesome -->
<script src="https://kit.fontawesome.com/your-code.js" crossorigin="anonymous"></script>

<!-- Preview Uploaded Image -->
<script>
document.getElementById('image').addEventListener('change', function(e) {
    const preview = document.getElementById('filePreview');
    preview.innerHTML = '';
    
    if (this.files && this.files[0]) {
        const reader = new FileReader();
        
        reader.onload = function(e) {
            const img = document.createElement('img');
            img.src = e.target.result;
            img.style.maxWidth = '200px';
            img.style.maxHeight = '150px';
            img.style.marginTop = '10px';
            img.style.borderRadius = '4px';
            preview.appendChild(img);
        }
        
        reader.readAsDataURL(this.files[0]);
    }
});
</script>
@endsection