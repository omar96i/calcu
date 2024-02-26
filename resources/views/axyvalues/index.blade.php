<!DOCTYPE html>
<html>
<head>
    <title>Importar AxyValues</title>
</head>
<body>
    <h1>Importar AxyValues</h1>

    <form action="{{ route('axyvalues.import.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" required>
        <button type="submit">Importar</button>
    </form>
</body>
</html>
