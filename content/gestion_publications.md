---
title: Gestion des publications
nodateline: true
noprevnext: true
disable_comments: true

---
Lors d'une précédente réunion du laboratoire, nous avions convenu que :

- Dorénavant les pré-publications et publications du MIA seraient hébergées sur la plateforme HAL
- Une saisie rétrospective du dernier contrat quadriennal au minimum est demandée.
- Les auteurs peuvent en plus, et s'ils le désirent, déposer leurs travaux sur leurs pages personnelles.

Cette page se veut être une présentation de la procédure actuellement en vigueur.

Actuellement, il existe deux "collections" associées au Laboratoire:

- La collection {{< newtabref  href="https://hal.archives-ouvertes.fr/PREMIA" title="PREMIA" >}} qui recense l'ensemble des pré-publications du laboratoire.
- La collection {{< newtabref  href="https://hal.archives-ouvertes.fr/MIA" title="MIA" >}} qui recense l'ensemble des publications du laboratoire lors des contrats quadriennaux précedents ou en cours.
Ces collections sont directement intégrées au site WEB du laboratoire par le menu "Production"

#### Fonctionnement des collections

- Tout article ou référence bibliographique déposé au nom du MIA, LMA ou LMCA est automatiquement inclus dans la collection PREMIA. Le délai d'apparition dans la collection est de 24 heures.

- Le passage de la collection PREMIA à la collection MIA (publication effective) est fait manuellement par une personne baptisée "tamponneur". Ce rôle est temporairement dévolu à {{< newtabref  href="https://sites.google.com/site/csaintje/" title="Christophe S.-J." >}} à qui vous devez écrire pour demander le changement de collection d'une contribution.

#### Remarques sur le dépôt:

- Il est impossible de supprimer un dépôt de HAL (comme ArXiv). Par contre, on peut ne pas l'inclure dans la collection MIA ou PREMIA.

- Le niveau des documents déposés au titre du laboratoire doit être celui d'une publication (pas de rapport technique, de rapport de stage).

- Eviter deux dépôts d'un même document entre co-auteurs.

- Le dépôt des publications des doctorants est confiée à leurs encadrants.

#### Autorisations de déposer:

- Disposer de l'autorisation du ou des co-auteurs éventuels.

- Pour s'informer sur les politiques de diffusion des éditeurs, voir le site Sherpa/Roméo (L'information semble directement
disponible dans l'interface de dépôt version 2.0). Les éditeurs les plus connus ne posent en général aucun problème.

- La dernière version "auteur" est en général la meilleure à déposer.

#### Conseils:

- Privilégier le dépôt du texte intégral pour apparaitre dans la collection de l' Université (et plus encore)

#### Fonctionnement du dépôt:

- Se connecter sur la plateforme {{< newtabref  href="https://hal.archives-ouvertes.fr/" title=" HAL" >}} et {{< newtabref  href="https://hal.archives-ouvertes.fr/user/create" title="créer un compte" >}} s'il s'agit d'un premier dépôt.  
 Le nom du laboratoire est "Mathématiques, Image et Applications" (id. 54851).

- Une fois connecté, le menu dépot est actif.
Quatre modes de dépôt nous intéressent a priori:

***Document avec texte intégral:*** Pré-publication au format ps, pdf ou avec les sources TeX pour un dépôt conjoint sur ArXiv.

***Document avec texte intégral et notice bibliographique:*** Publication effective dans un journal ou une conférence dont on connait la référence (Cas du dépôt rétrospectif sans problème de droits).

***Documents sans référence de publication:*** Intégrer dans HAL un dépôt effectué sur ArXiv  (inverse du premier cas).

***Référence bibliographique:*** Publication effective dans un journal ou une conférence dont on connait la référence (Cas du dépôt rétrospectif avec problème de droits).

- Remplir les champs demandés pour le dépôt (le plus possible).

En particulier, référencer correctement par période l'affiliation du dépôt au laboratoire:

***2000-2003 :*** Laboratoire de Mathématiques et de Calcul Asymptotique [LMCA] (89)

***2004-2007 :*** Laboratoire de Mathématiques et Applications [LMA-Rochelle] (40830)

***2008-2011 :*** Laboratoire de Mathématiques Image et Applications [MIA] (54851)

- Attendre la validation de forme par un technicien du CNRS.

- Ecrire le cas échéant au "tamponneur" pour apparaitre dans la collection MIA après avoir rempli la référence bibliographique.

- Vérifier que vos co-auteurs (extérieurs ou non) au laboratoire remplissent correctement les champs vous concernant lorsqu'ils déposent.

- Il est possible de rajouter une référence de publication à une pré-publication déjà déposée (pour passer dans la collection MIA)

        Aller sur "Mon espace-> Mes dépôts"
        Sélectionner l'article à modifier
        Cliquer sur "Ajouter/modifier la référence de publication"
        Vous n'avez plus qu'a rentrer les champs dont vous disposez.

- Il est possible de rajouter un texte intégral à une référence bibliographique déjà déposée.

        Aller sur "Mon espace-> Mes dépôts"
        Sélectionner la référence déjà déposée.
        Cliquer sur "Ajouter le fichier"
        Aller jusqu'à l'étape finale et déposer le fichier.

- Il est possible de déposer une nouvelle version d'un document de travail (Ex.: pre-review/post-review).

        Aller sur "Mon espace-> Mes dépôts"
        Sélectionner l'article à mettre à jour  
        Cliquer sur "Créer une nouvelle version"  
        Vous n'avez plus qu'a faire une mise à jour des champs, du fichier déposé.

#### Les Flux RSS

- Les publications du laboratoire depuis 1 an: {{< newtabref  href="https://api.archives-ouvertes.fr/search/hal/?q=collCode_s:(LKB)&fq=releasedDate_tdate:[NOW%2FDAY-1YEAR+TO+NOW%2FDAY%2B1DAY]&fq=submitType_s:file&fq=&rows=30&sort=submittedDate_tdate+desc&wt=rss" title="http://hal.archives-ouvertes.fr/rss.php?tampon=MIA&from=yearly" >}}

- Les dernières pré-publications déposées: {{< newtabref  href="https://api.archives-ouvertes.fr/search/hal/?q=collCode_s:(PREMIA)&fq=releasedDate_tdate:[NOW%2FDAY-1DAY+TO+NOW%2FDAY%2B1DAY]&fq=submitType_s:file&fq=&rows=30&sort=submittedDate_tdate+desc&wt=rss" title="http://hal.archives-ouvertes.fr/rss.php?tampon=PREMIA" >}}

-Plus de détails : {{< newtabref  href="https://hal.archives-ouvertes.fr/index.php?action_todo=rss" title="http://hal.archives-ouvertes.fr/index.php?action_todo=rss" >}}

#### Exportation des publications (menu Services):

- Exporter suivant divers critères aux formats(LaTeX, Bibtex, pdf, Excel, etc...)

#### Statistiques de consultation:

- Pour un auteur, connaitre le nombre de téléchargement de ses articles.

- Connaitre les publications les plus consultées d'une collection.

#### Foire Aux Questions:

Qu'est ce que le "tamponneur" ?

C'est quelqu'un qui valide le passage de la collection PREMIA à MIA pour un article publié et donc disposant d'une référence bibliographique. Il n'a pas le pouvoir de remplir les références bibliographiques à la place des auteurs.

Hal est plus contraignant qu'arXiv!

Faux ! Les sources .tex des articles sont également déposées sur arXiv
