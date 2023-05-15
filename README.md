# Projet SIO1 du 15 au 17 mai 2023 – Résidence étudiants
Ce projet vise à gérer l'accès au réseau dans une résidence étudiante. L'équipe responsable a été nommée par le directeur de la résidence pour mettre en place et administrer ce système. Le projet se déroulera du 15 au 17 mai 2023.

## Objectif
L'objectif principal du projet est de permettre aux étudiants résidant dans la résidence d'accéder au réseau local et à Internet via des prises RJ42 disponibles dans chaque chambre. Les étudiants auront également la possibilité d'imprimer leurs documents et d'utiliser les ressources informatiques de la résidence moyennant une cotisation mensuelle.

## Infrastructure réseau



## Liste du matériel

| Matériel | Quantité | Prix unitaire | Prix total |
| -------- | -------- | ------------- | ---------- |


## base de données

| Table | Description |
| ----- | ----------- |
| Etudiant | Table des étudiants |
| Chambre | Table des chambres |
| habite | Table de liaison entre les étudiants et les chambres |

### Table Etudiant

| Champ | Type | Description |
| ----- | ---- | ----------- |
| id | int | Identifiant unique de l'étudiant |
| nom | varchar(255) | Nom de l'étudiant |
| prenom | varchar(255) | Prénom de l'étudiant |
| derniere_cotisation | date | Date de la dernière cotisation de l'étudiant |
| id_chambre | int | Identifiant de la chambre de l'étudiant |

### Table Chambre

| Champ | Type | Description |
| ----- | ---- | ----------- |
| id | int | Identifiant unique de la chambre |

### Table habite

| Champ | Type | Description |
| ----- | ---- | ----------- |
| id_etudiant | int | Identifiant de l'étudiant |
| id_chambre | int | Identifiant de la chambre |

