<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats des Élections</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Résultats des Élections</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Candidat</th>
                    <th>Nombre de Voix</th>
                    <th>Statut</th>
                </tr>
            </thead>
            <tbody>
                @foreach($results as $result)
                    <tr>
                        <td>{{ $result->candidat->nom }}</td>
                        <td>{{ $result->nombre_de_voix }}</td>
                        <td>
                            @if($result->isWinner())
                                Élu dès le premier tour
                            @elseif($result->isBallotageFavorable())
                                Ballottage favorable
                            @elseif($result->isBallotageDefavorable())
                                Ballottage défavorable
                            @else
                                Battu
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>