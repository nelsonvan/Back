-- Jointure interne ou INNER JOIN a lier plusieurs tables entre elles.
-- Cette commande retourne les enregistrements lorsqu'il y a au moins une ligne dans chaque colonne 
-- qui correspondent a la condition
SELECT* FROM nom_de_la_table INNER JOIN nom_de_la_table_2 ON condition;
-- OU
SELECT * FROM nom_de_la_table CROSS JOIN nom_de_la_table_2 WHERE condition;

-- CROSS JOIN sert a croiser chaque ligne d'un tableaux A avec les lignes d'un tableaux B. Retourne le
-- produit(*) de ces 2 tableaux. En générant la commande CROSS JOIN est combiné avec la colonne WHERE
-- pour filtrer les résultat qui respect certaine condition.
SELECT * FROM nom_table_1 CROSS JOIN nom_table_2;
-- Alternative a la commande CROSS JOIN
SELECT * FROM nom_table_1, nom_de_la_table_2;

/*
LEFT JOIN permet de lister tout les enregistrements de la table gauche meme si il n'y a pas 
de correspondances dans la 2éme table.
*/

SELECT * FROM nom_table_1 LEFT JOIN nom_table_2 ON condition;
-- OU
SELECT * FROM nom_table_1 LEFT OUTER JOIN nom_table_2 ON condition;

/*
LEFT RIFHT permet de lister tout les enregistrements de la table droite meme si il n'y a pas 
de correspondances dans la 2éme table.
*/

SELECT * FROM nom_table_1 RIGHT JOIN nom_table_2 ON condition;
-- OU
SELECT * FROM nom_table_1 RIGHT OUTER JOIN nom_table_2 ON condition;


