-- selection de tout les champs de la table article
SELECT * FROM `article`;
-- selection de tout les champs de la table article lorsque le champ ar_is_published vaut 1
SELECT * FROM `article` WHERE `ar_is_published` = 1;
-- selection de tout les champs de la table category
SELECT * FROM `category`;
-- selection de tout les champs de la table category lorsque le champ cg_visibility vaut 1
SELECT * FROM `category` WHERE `cg_visibility` = 1;
-- selection de tout les champs de la table user sauf le us_pwd et le us_uniq_id
SELECT `us_id`, `us_login`, `us_email`, `us_active` FROM `user`;
-- selection de tout les champs de la table user sauf le us_pwd et le us_uniq_id lorsque le champ us_active vaut 1
SELECT `us_id`, `us_login`, `us_email`, `us_active` FROM `user` WHERE `us_active` = 1;
-- selection de tout les champs de la table article
SELECT `article`.*, `user`.`us_login`
	FROM `article`
	INNER JOIN `user` ON `user`.`us_id` = `article`.`user_us_id`;