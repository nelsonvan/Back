
  
-- Lister tous les services : //  OK --
SELECT service FROM employes;
-- Lister tous les salariés avec un salaire entre 40000-55000 : OK --
SELECT prenom, nom FROM employes WHERE salaire BETWEEN 4000 AND 5500;
-- Lister tous les salariée  avec un nom commençanty par la lettre "a" : OK --
SELECT prenom, nom FROM employes WHERE nom LIKE '%a%';
-- lister toutes les salariés : OK -- 
SELECT prenom, nom FROM employes WHERE sexe = 'f';
-- Lister tous les salariés entrer dans l'entreprise avant le 01 janvier 1980 :
SELECT penom, nom FROM employes WHERE date_embauche < '1980-01-01';
 -- AFFIcher toute les salariées embauché aven 1980-01-01 :
 SELECT prenom, nom, date_embauche FROM  employes WHERE date_embauche <= '2004-01-01' AND sexe = 'f';
-- Supprimer tous les salariés en CDI :
DELETE id_employes FROM employes WHERE status = 'cdi';
-- Afficher salariés pour chaque département(pas de doublon):
SELECT DISTINCT prenom, nom, service FROM employes ORDER BY service;


-- Afficher manager pour chaque département (pas de doublon) :

-- Afficher les titres(pas de doublon):
SELECT * FROM employes  GROUP BY service;


