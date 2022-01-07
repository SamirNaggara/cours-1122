# Cours de GIT et GITHUB

GIT est un logiciel de versionning.
Il nous permet de garder la trace de toutes les modifications effectuées sur notre projet.
Il permet si besoin, de revenir a une version antérieur.
GIT nous permettra aussi d'avoir des branches de nos projets, afin de travailler en parallèle sur des fonctionnalités différentes


Github est un service en ligne qui permet d'héberger le code d'un projet et ses différentes versions.
Un projet peut être partagé à un petit groupe de personnes ou de façon public.


# La ligne de commande

On peux démarrer un terminal directement en faisant clique droit et Git Bash Here

Git Bash est en général installé en même temps que GIT

Il est aussi possible d'utiliser d'autres lignes de commandes, notamment sur votre editeur de code (Visual Studio Code ou autre...), ou sur d'autres terminals.

**$ git --version** -> On utilise git --version pour verifier que git est bien installé et accessible depuis la ligne de commande

## Initialisation de git

**$ git config --global user.name "Sam"**
**$ git config --global user.email "samirm.nagg@gmail.com"**
**$ git config --list** -> Pour vérifier que les deux commandes précédentes ont bien fonctionnées



## Effectuer notre premier enregistrement 

On se debrouille pour que norte ligne de commande sois placé au bon endroit.
(En utilisant cd)
cd signifie Change Directory

Il permet de naviguer dans nos dossiers

**cd projet** -> Permet d'ouvrir le fichier projet si il existe la ou nous sommes
**cd ..**-> Permet de retourner au dossier parent
**cd C:/xampp/htdocs/php-1122/14-GIT** -> Permet de naviguer directement à l'endroit choisi


**$ git init** -> Initialise git
**$ git status** -> Permet de voir l'état actuel de fichiers. Cette ligne de commande est a utilisé régulièrement, elle donne pleins d'info pertinente sur l'état de notre repository
**$ git add .** -> Permet de rendre les fichiers prets à l'enregistrement
**$ git commit -m "Nom de mon enregistrement"** -> Permet d'effectuer un enregistrement.
**$ git log** -> Permet d'acceder à la liste des enregistrements déja effectués

**$ git reset --hard <id-du-commit>** -> Permet de retourner à un enregistrement antérieur. Attention, il faut mettre l'id du commit, que l'on peux trouver avec la commande git log, et non "<id-du-commit>"


## Relié notre repository a github (mise en ligne)

**$ git remote add origin <Lien-du-repository>** -> Permet de faire la connexion avec l'espace git hub en ligne. Attention, il faut remplacer <lien-du-repository> par le lien de votre repository que vous recupererez sur github (ex: github.com/SamirNaggara/prost-1122.git)

**$ git remote rm origin** -> Permet de supprimer la connexion au repository lié a "origin"

**$ git push -u origin master** -> Permet de "pousser" l'enregistrement actuel de notre projet sur gitub en ligne

## Mettre a jour le repository local avec le repository distant

**git pull origin master** -> Permet de mettre a jour notre version local en "tirant" notre version distante


## Cloner un projet en public sur github

**$ git clone <lien-du-repository>** -> Permet de dupliquer le projet d'un repository distant


## Creer une nouvelle branche

**git branch** -> Permet de visualiser toutes les branches en local. Permet aussi de voir sur quel branche nous sommes actuellement

**git checkout ma-branche** -> Permet de changer de branche. Ici, nous allons sur la branch "ma-branche"

-> ATTENTION -> Lorsque nous travaillons sur une branche, tout ce que l'on a vu avant s'applique aussi.
Il nous faut ajouter les changements avec "git add ." puis effectué un commit avec "git commit -m nom-du-commit"

**git push origin nom-de-la-branche** -> Permet de pousser le dernier enregistrement de la branche en ligne


## Fusionner notre branche avec la branche principal

Avant de fusionner une branche, soyez sur d'avoir bien commiter tout les changements que vous avez réalisés.
Vous pouvez aussi push sur votre branche les commit réalisés

Ensuite, encore avant de fusionner une branche, vous pouvez aller sur "pull-request" dans GitHub.
En cliquant sur "new pull request" vous pourrez comparer votre branche master et votre branche en cours.
S'il y a des conflits, vous pourrez directement les résoudre sur place

Ensuite, vous pouvez effectuer votre merge avec la commande suivant :

**$ git checkout master** -> Pour s'assurer d'être sur la branche principal
**$ git merge "nom-de-la-branche"** -> Fusionner les deux branches
**$ git push origin master** -> Pour envoyez la nouvelle version de master au repository distant