# Test technique — Dev Front

## Objectif
Reproduire fidèlement l’interface fournie (**Adobe XD**) **au pixel près**.
En cas d’incohérence visuelle, ajustez pour obtenir une **vue harmonisée** (alignements, hiérarchie visuelle, rythme vertical) et **documentez** vos arbitrages dans le README (section « Notes de design »).

🔗 **Maquettes** : https://xd.adobe.com/view/47f5bba9-a512-492c-85c6-d4fc4ddebc60-12a6/

---

## Stack & périmètre
- Réaliser les pages **en HTML et Tailwind CSS uniquement** (Tailwind est **déjà installé**).
- **Aucune autre dépendance** ne devra être installée.
- Ces pages sont **statiques** : **aucun besoin de base de données**.

---

## Instructions de lancement

### Prérequis
- **PHP** >= 8.1
- **Composer** (gestionnaire de dépendances PHP)
- **Node.js** >= 16 et **npm**

### Installation et démarrage

1. **Cloner le projet** (si pas déjà fait)
   ```bash
   git clone https://github.com/[votre-username]/rec-0925-devfront.git
   cd rec-0925-devfront
   ```

2. **Copier le fichier d'environnement**
   ```bash
   cp .env.example .env
   ```

3. **Installer les dépendances PHP**
   ```bash
   composer install
   ```

4. **Installer les dépendances Node.js**
   ```bash
   npm install
   ```

5. **Générer la clé d'application Laravel**
   ```bash
   php artisan key:generate
   ```

6. **Démarrer les serveurs de développement**

   Dans un premier terminal :
   ```bash
   php artisan serve
   ```

   Dans un second terminal :
   ```bash
   npm run dev
   ```

7. **Accéder à l'application**
   - Ouvrir votre navigateur sur : http://127.0.0.1:8000
   - Vite (assets) sera disponible sur : http://localhost:5173

### Notes techniques
- **Laravel 10** avec **Tailwind CSS v4** (via Vite)
- Aucune base de données requise pour ce projet
- Les assets sont compilés en temps réel via Vite

---

## Modalités de dépôt
- Travaillez **uniquement sur un fork GitHub** de notre dépôt.
- **Aucune branche** ne devra être créée : utilisez la **branche principale** de votre fork.

---

## Routing requis (personnalisé par candidat)
Les URL doivent être personnalisées par candidat selon le format :
`/{nom-de-famille}-{slug-de-la-page}`

**Règles :**
- **nom-de-famille** : en minuscules, accents supprimés, espaces → « - ».
  *Ex.* « Dupré-Lefèvre » → `dupre-lefevre`.
- **slug-de-la-page** : en minuscules, accents supprimés, espaces → « - » ; caractères autorisés : `a–z`, `0–9`, `-`.
  Utiliser **un seul tiret** entre les segments ; **aucun tiret** en début/fin.

**Exemple avec le candidat *Dumoulin Adrien***
- Page 1 : `/dumoulin-completez-votre-reservation`
- Page 2 : `/dumoulin-paiement`

---

## Livrables attendus
- Lien GitHub de votre **fork public** (historique de commits propre et régulier).
- **README** à la racine incluant :
    - **Instructions de lancement/build** si différentes du projet de base.
    - Section **« Notes de design »** : incohérences rencontrées, arbitrages, fallback de police si nécessaire.
- *(Optionnel)* **Captures comparatives** montrant vos vérifications de pixel perfect.
- **Temps passé** (indicatif).

---

## Pages implémentées

### Routes créées pour Andson :
- **Page 1** : `/andson-completez-votre-reservation` - Interface de sélection des formules de test
- **Page 2** : `/andson-paiement` - Interface de paiement et informations personnelles

### Accès direct :
- [Complétez votre réservation](http://127.0.0.1:8000/andson-completez-votre-reservation)
- [Paiement](http://127.0.0.1:8000/andson-paiement)

---

## Notes de design

### Choix d'implémentation :
1. **Responsive Design** : Les cartes s'adaptent aux différentes tailles d'écran tout en respectant les proportions
2. **Footer sticky** : Implémenté avec `position: fixed` pour rester visible en bas de page
3. **Couleurs fidèles** :
   - Vert pour la formule "Assurance" (sélectionnée par défaut)
   - Bleu pour la formule "Complet"
   - Gris pour la formule "Basic"
   - Rose/magenta pour le bouton "Suivant"
4. **Dimensions des cartes** : Adaptées pour un affichage optimal sur desktop et mobile
5. **Navigation** : Lien fonctionnel entre les deux pages via le bouton "Suivant"

### Éléments techniques :
- **Tailwind CSS v4** utilisé pour tous les styles
- **Icônes SVG** intégrées pour les fonctionnalités et décorations
- **JavaScript minimal** pour la gestion des méthodes de paiement
- **Structure Laravel Blade** pour la réutilisabilité des composants

### Arbitrages visuels :
- **Taille des cartes** : Réduites à 320px de largeur pour un meilleur affichage sur écrans standards
- **Espacement** : Optimisé pour la lisibilité et l'harmonie visuelle
- **Footer** : Maintenu sticky avec toutes les informations essentielles (date, lieu, total, action)
