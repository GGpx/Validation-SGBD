#Validation-SGBD
***
Application réalisée au cours d'une validation sur le système de gestion de base de données.
##
Langages utilisés pour l'application web :<br>
- <a href="https://www.google.com/search?q=html+5&oq=html+5&aqs=chrome..69i57j0j35i39j0l2j69i60l3.900j0j7&sourceid=chrome&ie=UTF-8">HTML</a>
- <a href="https://www.google.com/search?q=css&oq=css+&aqs=chrome..69i57j0l3j69i60j69i65j69i60l2.910j0j4&sourceid=chrome&ie=UTF-8">CSS</a>
- <a href="https://www.google.com/search?sxsrf=ACYBGNQ_wMo4sDiTlDh58vLjJ_OQElqk2Q%3A1576244972807&ei=7JbzXdn3MKiUlwTH743gAw&q=js&oq=js&gs_l=psy-ab.3..35i39l3j0i67l4j0i131j0i67l2.15568.16314..16434...1.2..0.86.321.4......0....1..gws-wiz.....10..0i71j0j0i20i263j35i362i39.4Z29Iui6dLI&ved=0ahUKEwjZnbuN4rLmAhUoyoUKHcd3AzwQ4dUDCAs&uact=5">JS</a>
- <a href="https://www.google.com/search?sxsrf=ACYBGNR3_facD_ygWnk8MWtiBpSRXZGE5Q%3A1576245001087&ei=CZfzXe_pBMGSlwTGjKHACw&q=php&oq=php&gs_l=psy-ab.3..35i39l3j0j0i67l2j0l4.2120.3120..3216...1.0..0.84.407.5......0....1..gws-wiz.....10..35i362i39j0i131._dZ9X3qahGY&ved=0ahUKEwivkvma4rLmAhVByYUKHUZGCLgQ4dUDCAs&uact=5">PHP</a>
- <a href="https://www.google.com/search?sxsrf=ACYBGNSG1-g99uuTgdS8huEpzQlMUiDnTw%3A1576245034996&ei=KpfzXYusPMeKlwTpp7XQAg&q=mysql&oq=mysql&gs_l=psy-ab.3..35i39l3j0i67l7.18776.20929..21041...1.1..1.89.573.7......0....1..gws-wiz.....10..0i71j0i131j0j35i362i39.aKr28nvw5dM&ved=0ahUKEwiL6Y6r4rLmAhVHxYUKHelTDSoQ4dUDCAs&uact=5">MYSQL</a>
***
#### **_Installation :_**
Pour lancer le projet:<br>
- Prendre le dossier "Validation-SGBD-master" et le mettre dans un environnement sous AMP (Apache2, MySql, PHP);

Pour lancer la BDD:<br>
- Pseudo = root
- MDP = 0000
- Prendre le fichier products.sql à l'intérieur du dossier "Validation-SGBD-master", et l'importer dans une BDD, afin de récupérer les tables du projet.
***
#### **_Utilisation de l'application web :_**

1- Veuillez vous connecter avec vos identifiants (ceux enregistrer en BDD);<br>
- (Des identifiants sont renseignés sur la page de login sur le bouton clique ici...)
- Ou alors créer un compte avec le bouton inscription qui est en dessous du bouton de connexion.
##
2- Accès à l'interface du tableau de produits:<br>

- Cette interface permet de voir tous les produits (si des produits sont déjà enregistrés en BDD).
##
3- Sur la barre de navigation, vous pouvez à l'aide des boutons:
- Ajouter un produit
- Modifier un produit
- Supprimer un produit
##
4- Pour se déconnecter de l'application:<br>
- Cliquez sur le bouton de déconnexion dans la barre de navigation
***

#### **_Plus d'informations :_**

J'ai réalisé un compteur de produit afin de créer un triggers sur les tables;<br>
(A chaque création d'un produit un chiffre est incrémenté en BDD pour le compteur).<br>
Le trigger à été créer sur la table product en ciblant la table amountOfProducts.



