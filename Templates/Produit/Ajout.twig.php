{% extends "layout.php" %}

{% block title %}
    Ajouter un Produit
{% endblock %}

{% block content %}
{% if session.admin is defined %}
    <div class="container">
        <h1 class="fw-light mt-5">Ajouter un Produit</h1>
        <p class="lead text-muted">Formulaire d'ajout de nouveau produit.</p>

        <form method="post" action="/Produit/ajouterProduit" class="mt-4">
            <div class="mb-2">
                <label for="cat_name" class="form-label">Catégorie:</label>
                <input type="text" id="cat_name" name="cat_name" class="form-control" required>
            </div>

            <div class="mb-2">
                <label for="name" class="form-label">Nom:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>

            <div class="mb-2">
                <label for="description" class="form-label">Description:</label>
                <textarea id="description" name="description" class="form-control" required></textarea>
            </div>

            <div class="mb-2">
                <label for="image" class="form-label">Image URL:</label>
                <input type="text" id="image" name="image" class="form-control" required>
            </div>

            <div class="mb-2">
                <label for="price" class="form-label">Prix:</label>
                <input type="text" id="price" name="price" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
{% else %}
    <div class="container mt-5">
        <p class="lead text-danger">Vous n'avez pas l'autorisation d'accéder à cette page.</p>
    </div>
{% endif %}
{% endblock %}
