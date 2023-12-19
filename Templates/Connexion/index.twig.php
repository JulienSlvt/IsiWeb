{% extends "layout.php" %}

{% block title %}
    Connexion
{% endblock %} 

{% block content %}
    <div class="container mt-5">
        {% if session.user is not defined %}
            <h1 class="fw-light">Formulaire de Connexion</h1>
            <br>
            <form method="post" action="/connexion/connexion" class="needs-validation" novalidate>
                <div class="mb-3">
                    <label for="username" class="form-label">Nom d'utilisateur:</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                    <div class="invalid-feedback">
                        Veuillez fournir un nom d'utilisateur.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                    <div class="invalid-feedback">
                        Veuillez fournir un mot de passe.
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Se connecter</button>
            </form>
        {% else %}
            <p>Vous êtes déjà connecté</p>
        {% endif %}
    </div>
{% endblock %}
