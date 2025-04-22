# Laboratoire 06-B

Pour ce laboratoire, vous devez reprendre l'application « Liste de contacts » du **Laboratoire 06-A**, et la réimplémenter en utilisant l'architecture MVC. Pour ce faire, vous aurez besoin des éléments suivants:

* **Modèles**
    * `TaskModel`: permet d'obtenir tout le contenu de la table `tache` (`getAll`), insérer une nouvelle tâche (`insert`) et supprimer une tâche (`delete`).
    * `PriorityModel`: permet de récupérer tout le contenu de la table `priorite` (`getAll`).
* **Vue**
    * Cette application a besoin d'une seule vue, que nous appellerons `list`. **Celle-ci est déjà implémentée et vous ne devez pas la modifier.**
* **Contrôleurs**
    * `ListController`: la méthode `handle` de ce contrôleur utilise `TaskModel` pour récupérer toutes les tâches et `PriorityModel` pour récupérer toutes les priorités. Elle doit stocker les tâches dans une variable `$tasks` et les priorités dans une variable `$priorities` avant d'inclure la vue `list`, qui utilise ces deux variables.
    * `AddController`: la méthode `handlePost` de ce contrôleur utilise `TaskModel` pour insérer une nouvelle tâche à partir des données du formulaire affiché par la vue `list`. Elle doit ensuite rediriger l'utilisateur vers la page `?action=list`. La méthode `handle` peut être vide car il n'y a pas de page à afficher pour l'ajout.
    * `DeleteController`: la méthode `handle` de ce contrôleur utilise `TaskModel` pour supprimer la tâche qui correspond à `$_GET['id]`. Elle doit ensuite rediriger l'utilisateur vers la page `?action=list`.
* **Routeur**
    * Le fichier `index.php`, déjà implémenté, s'assure de charger le bon contrôleur selon le contenu de `$_GET['action']` et d'appeler sa bonne méthode (`handle` ou `handlePost`).

> **Conseil:** commencez par implémenter la liste, et testez vos méthodes au fur et à mesure que vous les implémentez.

Pour rappel, voici le résultat attendu pour cette application:

![](images-readme/demo.gif)