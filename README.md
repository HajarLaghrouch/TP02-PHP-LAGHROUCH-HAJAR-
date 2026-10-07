# TP02-PHP-LAGHROUCH-HAJAR-

## TP 02 PHP — Programmation Web 2 — 2026/2027

**Nom :** LAGHROUCH
**Prénom :** HAJAR
**Groupe :** Groupe 2

## Exercices

* Exercice 1 : Balises, HTML/PHP, commentaires, echo
* Exercice 2 : Variables et concaténation
* Exercice 3 : Constantes, calculs et opérateurs d'affectation
* Exercice 4 : Types, conversions et booléens
* Exercice 5
* Exercice 6
* Exercice 7
* Exercice 8
* Exercice 9
* Exercice 10 : Formulaires GET/POST

## Exercice 2

### Pourquoi `$note` et `$Note` sont différentes ?

PHP est sensible à la casse (case-sensitive).

Donc `$note` et `$Note` sont deux variables différentes :

* `$note` contient 12.
* `$Note` contient 16.

### Noms de variables valides

Les noms valides sont :

* `$a`
* `$_a`
* `$a_a`
* `$AAA`
* `$a1`

Les noms invalides sont :

* `$a!` : contient un caractère spécial `!`.
* `$1a` : un nom de variable ne peut pas commencer par un chiffre.

## Exercice 3

### Constantes

Les constantes utilisées sont :

* `TAUX_TVA = 20`
* `DEVISE = "MAD"`

### Calcul

* Prix unitaire HT = 60 MAD
* Quantité = 3
* Total HT = 180 MAD
* TVA = 36 MAD
* Total TTC = 216 MAD
* Frais de livraison = 15 MAD
* Montant final = 231 MAD

### Opérateur `+=`

L'opérateur `+=` permet d'ajouter une valeur à une variable.

Exemple :

```php
$totalTTC += 15;
```

Cela signifie :

```php
$totalTTC = $totalTTC + 15;
```

### Fonction `defined()`

La fonction `defined()` permet de vérifier si une constante existe.

Exemple :

```php
if (defined("TAUX_TVA")) {
    echo "La constante TAUX_TVA existe.";
}
```

## Exercice 4

### Différence entre `echo` et `var_dump()` pour `false`

Avec `echo`, la valeur `false` n'affiche rien.

Avec `var_dump()`, PHP affiche clairement le type et la valeur :

`bool(false)`

Donc :

* `echo false` → n'affiche rien.
* `var_dump(false)` → affiche `bool(false)`.

### Conversions en booléens

* `(bool) 0` → `false`
* `(bool) "0"` → `false`
* `(bool) "PHP"` → `true`
* `(bool) []` → `false`
