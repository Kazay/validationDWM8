# Musicstore Stock Management App

## ATTENTION: BUG CONNU

- Lors de la suppression d'un artiste, plantage de la page des albums si un album avec l'artiste supprimé est existant car l'id stockée ne renvoit sur rien. J'ai tenté d'utiliser les events mais sans succès; le code est visible sur la branche ["EVENTS"](https://github.com/Kazay/validationDWM8/tree/events) de mon projet github. Je ne sais pas la solution n'est pas loin.
Il y avait plus simple pour gérer ça, j'ai tenté plus gros, j'ai perdu et j'ai plus le temps !

## Features

- Gestion des stocks et du tarif des albums dans un magasin de musique.
- Affichage de la liste des albums, artistes et labels.
- Ajout d'albums, artistes et labels.
- Suppression d'albums, artistes et labels.
- Edition d'albums, artistes et labels.

## Quelques détails (dont les trucs cools)

- NO BOOTSTRAP, d'où une perte de temps fabuleuse sur la durée du projet.

- Validation des formulaires via le validator Laravel (dont un validateur custom pour l'update des éléments qui gère les entrées uniques de la BDD (ex: function updateAction dans AlbumController)).

- Affiche des erreurs lors de la validation des formulaires.

## To do (sous entendu, j'ai pas eu le temps)

- Améliorer l'UX (+ de javascript, plus de CSS) et surtout les selects qui sont une plaie à styliser TT
- Responsivité du site (seule la home est responsive)
- Recherche partielle sur les albums, notamment sur la page des stocks dans l'éventualité d'une BDD bien remplie.

## 

