# 🎓 Keuzedeel Systeem - Techniek College Rotterdam

Een Laravel webapplicatie voor het beheren van keuzedelen en studentinschrijvingen.

## 👥 Team

| Naam | GitHub | Rol |
|------|--------|-----|
| **Marvellous** | Marvellous010 | Frontend, Authentication, CSV Import |
| **Yunis** | PandaDeveloper13 | Database, Admin Features, Keuzedelen |

## 📋 Projectbeschrijving

Dit systeem stelt Techniek College Rotterdam in staat om:
- **Studenten** te laten inschrijven voor keuzedelen
- **Admins** keuzedelen te beheren (toevoegen, bewerken, verwijderen)
- **CSV bestanden** te importeren met studentgegevens en behaalde keuzedelen
- **Automatisch detecteren** welke keuzedelen studenten hebben behaald

## 🚀 Features

### Student Features
- Inloggen/registreren
- Beschikbare keuzedelen bekijken
- Inschrijven voor keuzedelen
- Eigen inschrijvingen bekijken

### Admin Features
- Dashboard met statistieken
- Keuzedelen toevoegen/bewerken/verwijderen
- Studenten importeren via CSV
- Automatische detectie van behaalde keuzedelen
- Inschrijvingen beheren

## 🛠️ Tech Stack

- **Backend:** Laravel 11
- **Frontend:** Blade Templates + Tailwind CSS
- **Database:** MySQL
- **Styling:** Tailwind CSS met custom TCR kleuren

## 📦 Installatie

```bash
# Clone repository
git clone https://github.com/Marvellous010/Laravel-periode-2-project.git

# Installeer dependencies
composer install
npm install

# Kopieer environment file
cp .env.example .env

# Genereer app key
php artisan key:generate

# Maak database aan en run migrations
php artisan migrate

# Start development server
php artisan serve
npm run dev
```

## 📁 Projectstructuur

```
app/
├── Http/Controllers/
│   ├── AuthController.php          # Login/registratie
│   ├── InschrijvingController.php  # Inschrijvingen beheer
│   ├── KeuzedeelController.php     # Keuzedelen CRUD
│   └── CsvImportController.php     # CSV import functionaliteit
├── Models/
│   ├── User.php                    # Student/Admin model
│   ├── Keuzedeel.php               # Keuzedeel model
│   └── Inschrijving.php            # Inschrijving model
resources/views/
├── admin/                          # Admin pagina's
├── layouts/                        # Layout templates
└── student/                        # Student pagina's
```

## 🔐 Standaard Accounts

Na CSV import krijgen studenten:
- **Email:** `[studentnummer]@student.tcr.nl`
- **Wachtwoord:** `password123`

## 📊 CSV Import Formaat

Het systeem verwacht een CSV bestand met `;` als scheidingsteken:
- Regel 5: Keuzedeel codes in de header
- Kolom 3: Studentnummer
- Kolom 4: Naam
- Resultaten: "V"/"Voldoende"/"G"/"Goed" = Behaald

## 📄 Documentatie

- [RETROSPECTIVE.md](RETROSPECTIVE.md) - Team retrospective en reflectie

## 📝 License

Dit project is gemaakt voor Techniek College Rotterdam - Periode 2 Project.
