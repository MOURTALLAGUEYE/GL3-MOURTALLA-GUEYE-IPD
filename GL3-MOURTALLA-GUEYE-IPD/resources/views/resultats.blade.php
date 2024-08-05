<!DOCTYPE html>
<html>
<head>
    <title>Résultats Électoraux</title>
</head>
<body>
    <h1>Résultats Électoraux</h1>
    <table>
        <thead>
            <tr>
                <th>Candidat</th>
                <th>Total Voix</th>
                <th>Pourcentage</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($resultats as $resultat)
                <tr>
                    <td>{{ $resultat['candidat']->nom }}</td>
                    <td>{{ $resultat['total_voix'] }}</td>
                    <td>{{ number_format($resultat['pourcentage'], 2) }}%</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>