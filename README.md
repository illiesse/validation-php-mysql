# validation-php-mysql
réalisation de 2 C.R.U.D :
- Un sur les utilisateurs (users)
- Un sur les rôles (roles)

Utilisateurs :
- id
- nom
- email
- mot de passe
- numéro de téléphone
- role_id

Roles :
- id
- nom

Lien entre role_id de la table utilisateurs avec id table roles avec clef étrangère.

Interaction possible avec table utilisateurs et table roles.

Pages contenant des envois de formulaire non accessibles si aucune donnée en POST n'a été envoyée.

Lors du Read de la table utilisateurs, nom des fonctions affichées.
