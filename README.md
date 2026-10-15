# TP2-PHP-EL-HICHAMI-WALID
TP2 PHP-Programmation web2
**Ex2: la difference entre $note et $Note:**
les noms de variables dans PHP sont sensibles  a la casse, donc $note et $Note sont differentes stockees a deux endroits differents en memoire.
**Ex2: Validation des noms:**
- $a : valide, car commence par un lettre
- $_a : valide, car commence par un underscore
- $a_a : valide
- $AAA : valide, contient des lettres majuscules
- $a1 : valide, car cette ecriture est autorise
- $a! : invalide, car contient un caractere special qui est interdit
- $1a : invalide, car commence par un chiffre qui est interdit en PHP.
**Ex4: la deffirence d'affichage de false entre echo et var_dump()**
- echo: est fait pour afficher le texte pour l'utilisateure,quand tu fais echo false,PHP convertit false en chaine vide, et True devient 1.
- var_dump(): est outil de debug pour le developpeur il affiche le type et la valeur exact.
             var_dump(false) affiche bool(false)
             var_dump(true) affiche bool(true)

