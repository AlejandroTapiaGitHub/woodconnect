@extends('layouts.base');


@section('title')
    create publicacion
@endsection

@section('css')
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
        background-color: #f4f4f4;
    }
    .container {
        max-width: 600px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h1, label, textarea, button {
        display: block;
        margin-bottom: 10px;
    }
    textarea {
        width: 100%;
        height: 100px;
        resize: vertical;
    }
    button {
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    button:hover {
        background-color: #0056b3;
    }
</style>
@endsection

@section('content')
<div class="container">
    <h1>Crear Nueva Publicación</h1>
    <form action="procesar.php" method="post">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required>

        <label for="contenido">Contenido:</label>
        <textarea id="contenido" name="contenido" required></textarea>

        <button type="submit">Publicar</button>
    </form>
</div>
@endsection