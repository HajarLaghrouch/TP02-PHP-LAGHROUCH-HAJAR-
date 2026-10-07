# TP02-PHP-LAGHROUCH-HAJAR-
# TP 02 — Programmation Web 2 — PHP

## Informations

* **Nom :** LAGHROUCH
* **Prénom :** HAJAR
* **Groupe :** 2

## Présentation

Ce dépôt contient les solutions des exercices du TP 02 de PHP.

Les exercices permettent de pratiquer les bases de la programmation PHP : variables, constantes, types, conditions, boucles, `switch`, tableaux associatifs et formulaires GET et POST.

## Liste des exercices

* **Exercice 1 :** Balises, HTML/PHP, commentaires et `echo`
* **Exercice 2 :** Variables et sensibilité à la casse
* **Exercice 3 :** Constantes et calculs
* **Exercice 4 :** Types et conversions
* **Exercice 5 :** Conditions `if`, `elseif`, `else`
* **Exercice 6 :** `switch`, `case`, `break`, `default` et `date()`
* **Exercice 7 :** Boucles `for` et boucles imbriquées
* **Exercice 8 :** Boucles `while`, `do-while`, `continue` et `break`
* **Exercice 9 :** Tableau associatif et traitement des notes
* **Exercice 10 :** Formulaires GET et POST

## Instructions d'exécution

Pour exécuter les fichiers PHP :

1. Démarrer **Apache** avec XAMPP.
2. Placer le dossier du projet dans le dossier `htdocs`.
3. Ouvrir le navigateur.
4. Utiliser une adresse de la forme :

```text
http://localhost/TP02-PHP-LAGHROUCH-HAJAR-/ex01.php
```

Pour tester un autre exercice, remplacer `ex01.php` par le nom du fichier correspondant.

---

## Exercice 1

### Notions utilisées

* PHP s'exécute côté serveur.
* HTML est interprété par le navigateur.
* `echo` permet d'afficher du texte.
* Les commentaires permettent d'expliquer le code.

---

## Exercice 2

### Pourquoi `$note` et `$Note` sont différentes ?

PHP est sensible à la casse (**case-sensitive**).

Donc `$note` et `$Note` sont deux variables différentes.

* `$note` contient `12`.
* `$Note` contient `16`.

### Noms de variables valides

* `$a`
* `$_a`
* `$a_a`
* `$AAA`
* `$a1`

### Noms invalides

* `$a!` : contient un caractère spécial.
* `$1a` : commence par un chiffre.

---

## Exercice 3

### Constantes

Les constantes utilisées sont :

* `TAUX_TVA = 20`
* `DEVISE = "MAD"`

### Calculs

* Prix unitaire HT = `60 MAD`
* Quantité = `3`
* Total HT = `180 MAD`
* TVA = `36 MAD`
* Total TTC = `216 MAD`
* Frais de livraison = `15 MAD`
* Montant final = `231 MAD`

### Opérateur `+=`

L'opérateur `+=` permet d'ajouter une valeur à une variable.

```php
$totalTTC += 15;
```

Cela signifie :

```php
$totalTTC = $totalTTC + 15;
```

### Fonction `defined()`

`defined()` permet de vérifier si une constante existe.

---

## Exercice 4

### Types utilisés

* `int` : nombre entier.
* `float` : nombre décimal.
* `string` : chaîne de caractères.
* `bool` : `true` ou `false`.
* `null` : absence de valeur.

### Conversions

* `"42"` → `int(42)`
* `15.8` → `int(15)`
* `42` → `string(2) "42"`

### `echo` et `var_dump()`

Avec `echo`, `false` n'affiche rien.

Avec `var_dump()`, PHP affiche :

```text
bool(false)
```

Donc :

* `echo false` → rien n'est affiché.
* `var_dump(false)` → `bool(false)`.

### Conversions en booléens

* `(bool) 0` → `false`
* `(bool) "0"` → `false`
* `(bool) "PHP"` → `true`
* `(bool) []` → `false`

---

## Exercice 5

### Conditions utilisées

L'exercice utilise :

* `if`
* `elseif`
* `else`
* les opérateurs de comparaison
* `||` qui signifie « ou »

### Valeurs testées

| Moyenne | Résultat      |
| ------: | ------------- |
|      -1 | Note invalide |
|       9 | Non validé    |
|      10 | Passable      |
|      12 | Assez bien    |
|      14 | Bien          |
|      16 | Très bien     |
|      21 | Note invalide |

---

## Exercice 6

### Notions utilisées

* `switch` : permet de choisir un cas selon la valeur d'une variable.
* `case` : représente une valeur possible.
* `break` : arrête l'exécution du `switch`.
* `default` : s'exécute lorsqu'aucun `case` ne correspond.
* `date("m")` : récupère le numéro du mois courant.
* `(int)` : convertit une valeur en entier.

### Valeurs testées

| Numéro | Résultat                |
| -----: | ----------------------- |
|      1 | Janvier                 |
|      3 | Mars                    |
|     12 | Décembre                |
|     15 | Numéro de mois invalide |

### Mois courant

La valeur :

```php
$numeroMois = (int) date("m");
```

permet d'obtenir automatiquement le numéro du mois courant du serveur.

Le résultat obtenu lors du test est :

**Octobre**

---

## Exercice 7

### Notions utilisées

* `for` : permet de répéter une instruction.
* compteur : variable utilisée pour contrôler la boucle.
* boucles imbriquées : une boucle `for` placée à l'intérieur d'une autre boucle `for`.

### Table de multiplication

Le nombre utilisé est :

```php
$nombre = 7;
```

La table est affichée de 1 à 10.

Le dernier résultat est :

```text
7 × 10 = 70
```

### Pyramide

Deux boucles `for` imbriquées permettent d'afficher une pyramide de six lignes :

```text
*
**
***
****
*****
******
```

---

## Exercice 8

### Notions utilisées

Le programme permet de :

* afficher les nombres pairs de 0 à 20 avec `while` ;
* mettre le nombre 10 en gras ;
* comparer `while` et `do-while` ;
* utiliser `continue` pour ignorer les multiples de 3 ;
* utiliser `break` pour arrêter la boucle à partir de 16.

### Résultats

* `while` avec compteur initialisé à 5 : **0 exécution**
* `do-while` avec compteur initialisé à 5 : **1 exécution**
* Les multiples de 3 sont ignorés.
* La boucle s'arrête avant d'afficher 16.

---

## Exercice 9

### Tableau associatif

Le programme utilise un tableau associatif contenant les noms des étudiants et leurs notes.

Il permet de :

* afficher les étudiants et leurs notes dans un tableau HTML ;
* afficher « Validé » ou « Non validé » selon la note ;
* calculer la somme des notes ;
* calculer la moyenne de la classe ;
* compter les étudiants validés ;
* déterminer la meilleure note et l'étudiant correspondant.

### Résultats

* Somme des notes : **60**
* Moyenne de la classe : **12**
* Nombre d'étudiants validés : **4**
* Meilleure note : **16**
* Meilleur étudiant : **Sara**

---

## Exercice 10

### Formulaires GET et POST

#### Partie A — GET

Fichiers :

* `ex10_get.html`
* `ex10_get.php`

Le formulaire contient :

* Nom
* Prénom
* Groupe : G1, G2, G3 ou G4

Les données sont envoyées avec la méthode `GET` et récupérées avec `$_GET`.

Avec GET, les valeurs saisies apparaissent dans l'URL.

#### Partie B — POST

Fichiers :

* `ex10_post.html`
* `ex10_post.php`

Le même formulaire est envoyé avec la méthode `POST`.

Les données sont récupérées avec `$_POST`.

Avec POST, les valeurs saisies n'apparaissent pas dans l'URL.

#### Vérifications

Le programme vérifie :

* la présence des champs avec `isset()` ;
* les champs vides avec `trim()` ;
* la sécurité de l'affichage avec `htmlspecialchars()`.

Les pages de traitement peuvent également être ouvertes directement sans provoquer d'erreur `Undefined array key`.

### Résultat

Les formulaires GET et POST ont été testés avec succès avec des données complètes et incomplètes.
