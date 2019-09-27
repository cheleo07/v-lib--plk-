# v-lib (lkp)
projet sio2d "v-lib"

* Accès bdd
* Screen MEA
* Branches
* Aide Git
  * Pousser
  * Récupérer
## Accès BDD
Pour accéder a la base de donnée, se connecter a PHPMyAdmin avec l'identifiant `bodinp` et le mot de passe `bodinp`.
## Screen MEA
Petit screen des familles du MEA si ça peut aider:
![Screen MEA](MEA.PNG)
## Branches
Sur notre projet il y a 3 branches:
- Master qui est la branche principale, celle ou la version finale sera rendue.
- Develop qui est la branche ou l'ensemble de chacunes de nos portions de code.
- New_Feature (une branche chacun) qui est la branche sur laquelle chacun de nous allons coder.
## Aide Git
Pour ne pas foutre en l'air le projet (même si le principe de Git nous assure une certaine sécurité), il faut impérativement vous habituer a suivre la manip suivante.
### Pousser
Pousser ou Push, c'est envoyer vos fichier **locaux** sur le répertoire de Git **en ligne**. Vous codez tout simplement sur votre machine en local puis une fois votre partie terminée, vous la poussez sur la bonne branche !
1. On ajoute les fichiers selectionnés (comme si on les ajoutais dans un espace virtuel) avec la commande `git add <nomfichier.php>`ou carrément tout le projet (plus rapide) avec `git add *`.
A ce moment la, les fichiers que vous avez modifiés ou tout le projet est dans un espace virtuel.
2. Pour vérifier qu'ils le sont bien on utilise la commande `git status`: un message doit apparaître avec **tous les fichier en vert**.
3. Si tout est bon, on effectue un commit, c'est à dire qu'on prépare l'envoie sur le répertoire de Git avec la commande `git commit -m "nom_commit"` (on peut refaire un `git status`pour vérifier que tout est bien commité).
4. Il ne reste plus qu'a les pousser sur le repertoire git avec `git push -u <branche>`.
### Récupérer