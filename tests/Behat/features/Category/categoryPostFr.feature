# language: fr
Fonctionnalité: ls
fait un appel du web service pour ajouter une categorie
    Scénario: ajoute une categorie
    Quand J'ajoute l'en-tête "Content-Type" égal à "application/json"
    Et J'ajoute l'en-tête "Accept" égal à "application/json"
    Et J'envoie une demande de "POST" à "/api/category" avec le corps
    """
    {
        "name": "toto"
    }
    """
    Alors le code d'état de la réponse doit être 201
    Et la réponse doit être en JSON
    Et l'en-tête "Content-Type" doit être égal à "application/json"
    Et les nœuds JSON doivent contenir:
    | name | toto |