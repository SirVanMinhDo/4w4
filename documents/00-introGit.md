# Résumé des commandes GIT 
# Création d'un dépot local 
- Dans visual studio code, sélectionner le dossier puis clicker sur 
  " Open in Integrated Terminal "

- git init (éxecuter une seule fois la commande, va créer le dossier .git)

- git status

- git add --all ou git add .

- git commit -m "s2c1 on décrit les modifications"

- git log

- git log --oneline

- git remote add 4w4 https://github.com/SirVanMinhDo/4w4.git 

- git branch -m main (changer le nom de la branche master pour main)

- git branch lab1 (créer la branche lab1)

- git checkout lab1 (changer de branche vers lab1)

- git log --oneline (les branches lab1 et main pointent vers le même commit)

- git checkout main

- git push 4w4 main (pousse la branche active « main » vers github dans le dépot
    4w4 la branche main)

- git checkout lab1

- git push 4w4 lab1

- git branch lab2

- git checkout lab2

- git push 4w4 lab2 (pousse la branche active lab2 vers 4w4 dans la branche lab2)