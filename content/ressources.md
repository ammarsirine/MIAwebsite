---
title: Ressources Informatiques
nodateline: true
noprevnext: true
disable_comments: true

---
Les ressources informatiques :
- ***Serveur de calcul***

Un serveur de calcul (baptisé "athol") est à la disposition de tous. Il dispose de 800 Go, possède 2 quadcore, 24 Go de ram + 38 Go de swap, ainsi qu'une carte graphique nvidia Quadro FX 1800 et un processeur de calcul Tesla C1060. On y accédera par protocole ssh après avoir créé un compte ici (indépendant du compte samba sur "trust"):

{{< newtabref  href="http://10.4.15.30:10080/naslogin/athol_login.html" title="http://10.4.15.30:10080/naslogin/athol_login.html">}}

Convention: ce qui est en majuscule est variable selon l'utilisateur

Pour se connecter,
> \# ssh MON_LOGIN@athol \
\> MON_PASSWORD

  Vous êtes donc loggé sur le serveur et dorénavant, les commandes que vous taperez s'exécuteront depuis celui-ci.



Pour transférer un fichier du client au serveur et réciproquement,
> \# scp MON_FICHIER_QUE_JE_VEUX_ENVOYER MON_LOGIN@athol:/CHEMIN \
 \# scp MON_LOGIN@athol:/LE_FICHIER_QUE_JE_VEUX_RECUPERER CHEMIN  

Il est à noter que votre mot de passe vous sera demandé à chaque manipulation. Heureusement, il est tout à fait possible de monter une arborescence serveur sur votre machine cliente. Pour cela, on utilise sshfs:

>  \# sshfs MON_LOGIN@athol: MON_REPERTOIRE_DE_MONTAGE



Si vous exécutez un script dans le répertoire monté, ***il s'exécutera côté client.***

Au contraire, si vous voulez exécuter un script côté serveur, en ayant néanmoins la possibilité de parcourir aisément l'arborescence client-serveur grâce à sshfs, il faut faire l'inverse,

>  \# ssh MON_LOGN@athol \
\# sshfs  MON_LOGIN_COTE_CLIENT@MON_ADRESSE_IP: MON_REPERTOIRE_DE_MONTAGE_COTE_SERVEUR

Cependant, deux remarques:

MON_ADRESSE_IP peut être remplacer par le nom (réseau) de votre machine. Votre adresse IP peut être connu en tapant la commande: # ifconfig
Au préalable, il faut démarrer le serveur sshd sur votre machine: # /etc/rc.d/sshd start et éventuellement configurer les restrictions d'accès dans les fichiers /etc/hosts.allow et /etc/hosts.deny


Pour utiliser les applications X coté serveur, il faut ajouter l'option -Y à la commande ssh. Il est par exemple conseillé d'en faire un alias dans votre .bashrc:

> \# echo "alias ssh='ssh -Y' " >> ~/.bashrc

Pour démonter le point de montage:

> \# fusermount -u MON_REPERTOIRE_DE_MONTAGE

L'architecture du service ressemble approximativement à ça:

draw.png

Il est avantageux en terme de débit d'ouvrir une connexion ssh sur athol puis de monter un répertoire samba depuis votre compte athol vers trust. Cependant, vous surchargez inutilement la bande passante d'athol. Dont acte, à chaque connexion ssh, s'ajoutera automatiquement un point de montage samba vers trust dans le repertoire serveur ~/trust/ (ce qui explique la nécessité de fournir les 2 mots de passe, athol puis trust).

Vous pouvez modifier ce comportement en commentant la ligne de commande dans votre .bashrc (côté serveur) contenant  "mount.cifs //trust/trust ..."


Si vous avez besoin des droits d'administration (pour installer un package, modifier smb.conf, restreindre les droits d'accès ssh, etc...), il faut vous logger en ssh avec le compte root. Pour trust, # ssh sys@trust et pour athol, #ssh root@athol

Pour obtenir le mot de passe, demandez le par mail à cette adresse: sing [cguyon03@univ-lr.fr](cguyon03@univ-lr.fr)

***Information pour les administrateurs***

Si trust est amené à redémarrer (coupure de courant, plantage), il faut lancer manuellement le script d'initialisation:

>  \# ssh sys@trust\
\# cd /raid0/data/usr/init/ \
\# ./in

De même pour athol,

> \# ssh root@athol \
\# cd /root/naslogin \
\# ./in


L'ordre a une importance (trust - athol)

- ***Serveur de stockage (NAS)***

Un serveur samba (baptisé "trust") est à la disposition de tous. Il dispose de 7 To, le dépôt de fichiers est très aisé. Pour y accéder, la création d'un compte est nécessaire ici:
{{< newtabref  href="http://10.4.15.30:10080/naslogin/nas_login.html" title="http://193.48.38.208">}}

Ensuite ***sous Windows***, Poste de travail > Outils > Connecter un lecteur réseau.  
- Lecteur: (choix au hasard)
- Dossier: \\193.48.38.208\trust

Désormais, le serveur de partage est accessible à partir du lecteur spécifié.

Privilèges associés:
- Il est impossible de créer un fichier/répertoire à la racine.
- Un fichier/répertoire créé par un utilisateur ne peut être supprimer par un autre utilisateur.

3 exceptions:
- Le proprietaire d'un répertoire a tous les droits dans celui-ci (y compris de supprimer un fichier qui ne lui appartient pas).
- Le propriétaire d'un fichier peut explicitement lui attribuer des droits moins restrictifs. Par exemple, clique droit sur le fichier > Sécurité > smbusers > cocher Ecriture. N'importe quel autre utilisateur pourra supprimer ce fichier.
- Au contraire, le propriétaire d'un fichier peut interdire la suppression/modification y compris par le propriétaire du répertoire. Clic droit sur le fichier > Sécurité > utilisateur > décocher Ecriture

Les procédures précédentes peuvent également s'effectuer ***sous linux***.

(en root)

> \# mount.cifs  //193.48.38.208/trust  DIR_DE_MONTAGE  -o  user=MON_LOGIN \
\# umount.cifs DIR_DE_MONTAGE

Note: il est important d'avoir les privilèges suivants:

> \# ls -la $(dirname $(which mount.cifs))/*cifs \
-rwsr-xr-x 1 root root  /sbin/mount.cifs \
-rwsr-xr-x 1 root root  /sbin/umount.cifs

Si ce n'est pas le cas,

> \# chmod 4755  /sbin/mount.cifs /sbin/umount.cifs



***Sous mac***,  Aller > Se connecter au serveur > smb://193.48.38.208/trust
