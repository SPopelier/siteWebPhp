# 💼 Mon CV en PHP – Projet de structuration web

## 🧭 Contexte

Ce projet a été réalisé dans le cadre de la formation **DAA#2 - PHP de base**, durant la semaine d’initiation au langage PHP procédural.

Objectif personnel : **recréer une version codée de mon CV** à la main, en appliquant les notions de templates, de Front Controller et de modularité apprises durant les itérations du module.

---

## 🎯 Objectifs pédagogiques

- Découverte de PHP procédural
- Création d’un site structuré à l’aide de `header.php`, `footer.php` et `index.php`
- Mise en œuvre du **Front Controller**
- Organisation de contenu dynamique
- Application concrète sur un **projet personnel : mon CV**

---

## 🗂️ Structure du projet

```bash
/mon-cv-php
├── index.php                # Front Controller
├── pages/
│   ├── cv.php               # Contenu principal du CV
│   └── contact.php         # Page de contact (formulaire)
├── includes/
│   ├── header.php          # Haut de page (HTML + menu)
│   └── footer.php          # Pied de page
├── storage/
│   └── messages.txt        # Stockage des messages (si formulaire)
├── assets/
│   ├── style.css           # Feuille de style
│   └── photo.jpg           # Photo de profil
