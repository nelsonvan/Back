-- Connexion a la BDD --
mysql -u root -p
-- afficher les BDD --
SHOW DATABASES;

--créer une BDD --
CREATE DATABASE nom_de_BDD;

-- sléctionner une BDD --
USE nom-de_BDD;

-- créer d'une TABLE dans la BDD --
-- Type de données(INT, VARCHAR, TEXT, FLOAT, ..) --

fruit INT(3), nom VARCHAR(60), origine VARCHAR(60), calibre INT(1), prix
 FLOAT, categorie VARCHAR (20));

-- afficher toutes les tables --
SHOW TABLES;

-- sléctionné toutes les données d'une table --
SELECT * FROM nom_de_la_table;

-- suprimer une ligne de la table avec une condition --
UPDATE FROM nom_de_la_table WHERE condition;

-- Mettre a jour une colonne d'une table  --
UPDATE 

select*from nom de la table;

---selectionner les données d'une ou plusieurs colonnes, genre:noms et categorie---

select nom,categorie from fruit

----pour supprimer une ligne de la table avec condition

"delete from nom_de_la_table where condition"

--mettre à jour une colonne d'une table

update fruit set calibre='7' where id_fruit='2';

mettre à jour plusieurs colonnes d'une table

UPDATE nom de la table(fruit) SET non de la colonne(calibre ='7') WHERE condition(id_fruit='3');

--ajouter une colonne à la table

ALTER TABLE nom_de_la_table ADD nom_de_la_colonne;

pour ajouter le lieu

on peut faire: UPDATE fruit SET commerce='supermarché' WHERE id_fruit ='3';

-- Selectyionner des données entre (BETWEEN) un interval (fonctionne dans une
requéte utilisant WHERE) --
SELECT * FROM bonbons WHERE id_bonbon  BETWEEN 2 AND 6;
SELECT * FROM nom _de_la_table WHERE nom_de_la_colonne BETWEEN 2 AND 6
-- Sélection des données qui ne sont pas comprise entre (NOT BETWWEN) dans un 
interval
SELECT * FROM bonbons WHERE id_bonbon NOT BETWEEN 2 AND 6;
SELECT * FROM nom _de_la_table WHERE nom_de_la_colonne NOT BETWEEN 3 AND 6;

-- afficher les données par rapport a une valeur --
SELECT prenom FROM stagiaires WEHRE yeux = 'marron';
SELECT nom_colonne FROM nom_de_la_table WHERE nom_colonne 'valeur';

-- afficher les données dans l'ordre alphabetique --
SELECT* FROM stagiaires WHERE yeux = 'marron' ORDER BY prenom;


-- afficher les données dans l'ordre décroissant --
SELECT*FROM stagiaires WHERE yeux = 'marron' ORDER BY id_stagiaire DESC;


-- afficher tout les stagiaires dont le prénom commence par L --
SELECT * FROM stagiaires WHERE prenom LIKE '1%';

-- afficher tout les stagiaires dont le prénom qui termine par n --
SELECT * FROM stagiaires WHERE prenom LIKE '%n';

-- afficher tout les stagiaires dont le prénom qui contenant un a --
SELECT * FROM stagiaires WHERE prenom LIKE '%a%';

-- afficher tout les stagiaires dont le prénomcommencen par j, et contenant a et qui 
se termine par n  --
SELECT * FROM stagiaires WHERE prenom LIKE 'j%a%n';

-- afficher un nombre limite de données --
SELECT * FROM stagiaires LIMIT 2;

-- afficher un nombre limité de données en sautant des lignes  --
SELECT * FROM stagiaires 1,2;
(le premier nombres aprés LIMIT représentent  l' offset donc le nombre de ligne ingnoré,
Le secon nombres de données a afficher)








-- opérateur de comparaison --
= Egale
<> Pas égale
! = Pas égale
> Supérieur
< Inférieur
>= Supérieur ou égale a
<= Inférieur ou égale a
IN liste de plusieur valeurs possible
BETWEEN recherche des valeurs comprrise dans un intérval donné (utile pour les 
nombres ou dates)
LIKE recherche en spécifiant le debut, le milieu ou la fin d'un tocIS NULL valeur est nulle
IS NOT NULL valeur n'est pas null










 -- Insertion dans la BDD --
 INSERT INTO fruits (id_fruit, nom, origine, calibre, prix, categorie) VALUES ('1', 'pomme', 'France', '5', '12.50', 'Golden' ); 

 INSERT INTO fruits (id_fruit, nom, origine, calibre, prix, categorie) VALUES ('2', 'fraise', 'Espagne', '3', '9.50', 'Cléry' );

 INSERT INTO fruits (id_fruit, nom, origine, calibre, prix, categorie) VALUES ('3', 'kiwi', 'France', '4', '15.50', 'Chinabelle' );

 INT PRIMARY KEY AUTO_INCREMENT NOT NULL 
 INSERT INTO Magasain ( Marque,  Origine, Couleur, Prix, Model, Categorie) VALUES ( 'Audi',  'Allemagne', 'Gris', '22000€', 'RS4', Berlin );

 'Marque' VARCHAR(60), 'origine' VARCHAR(60), 'Couleur' VARCHAR(60), 'prix'
 FLOAT, 'Model' VARCHAR(60), 'Categorie' VARCHAR (20));

 INSERT INTO voiture (marque, model, origine, couleur, prix, date_vente, categorie) VALUES ('Audi', 'RS4', 'Allemagne', 'Gris', '22000€', '2019-05-10', 'Berlin');

 
 INSERT INTO voiture (marque, model, origine, couleur, prix, date_vente, categorie) VALUES ('Aston-Martins', 'DB5', 'Angleterre', 'Gris', ' 1.5M€', '2019-09-13', 'Sportive');



 

 



