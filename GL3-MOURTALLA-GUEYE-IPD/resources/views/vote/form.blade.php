@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saisie des Résultats</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Saisie des Résultats</h1>
        <form method="POST" action="{{ route('vote.store') }}">
            @csrf
            <div class="form-group">
                <label for="bureau">Bureau de Vote</label>
                <select id="bureau" name="bureau_id" class="form-control @error('bureau_id') is-invalid @enderror">
                    <option value="">Choisir un bureau de vote</option>
                    @foreach($bureaux as $bureau)
                        <option value="{{ $bureau->id }}">{{ $bureau->nom }}</option>
                    @endforeach
                </select>
                @error('bureau_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="nombre_de_voix">Nombre de Voix</label>
                <input type="number" id="nombre_de_voix" name="nombre_de_voix" class="form-control @error('nombre_de_voix') is-invalid @enderror" value="{{ old('nombre_de_voix') }}" />
                @error('nombre_de_voix')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
</body>
</html>