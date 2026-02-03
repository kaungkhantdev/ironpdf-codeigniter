# IronPDF for C++ - Beta Landing Page

A CodeIgniter 4 landing page for the IronPDF C++ Beta Program signup.

---

## Requirements

- PHP 8.2 or higher
- Composer
- PHP Extensions: `intl`, `mbstring`, `json`

---

## Quick Start

```bash
# Clone the repository
git clone <repository-url>
cd ironpdf-codeigniter

# Install dependencies
composer install

# Copy environment file
cp env .env

# Configure your base URL in .env
# baseURL = 'http://localhost:8080/'

# Start the development server
php spark serve
```

Visit `http://localhost:8080` in your browser.

---

## Content Management

All text content is managed through `content.json` in the project root. Edit this file to update:

| Section | Description |
|---------|-------------|
| `meta` | SEO tags, Open Graph, Twitter cards |
| `navigation` | Navbar brand and menu links |
| `hero` | Hero section titles and text |
| `signup` | Email signup form and banner |
| `features` | Feature list and descriptions |
| `whySection` | "Why C++" section content |
| `earlyAccess` | Product cards and description |
| `betaSignup` | Footer signup form |
| `accessibility` | Skip link text |

### Example: Updating Hero Text

```json
{
  "hero": {
    "subtitle": "Building on the success of IronPDF for .NET",
    "title": "Beta Software Program",
    "product": "IronPDF for C++",
    "comingSoon": "Coming soon"
  }
}
```

---

## Key Files

| File | Purpose |
|------|---------|
| `app/Controllers/Home.php` | Loads content and renders views |
| `app/Services/ContentService.php` | Handles JSON loading with fallback |
| `content.json` | All editable page content |
| `public/assets/css/styles.css` | Custom CSS styles |

---

## Technologies Used

- **Framework**: CodeIgniter 4
- **CSS Framework**: Bootstrap 5.3.3
- **Fonts**: Gotham (Medium, Bold, Black)

---


**Author:** [kaungkhantzaw](https://github.com/kaungkhantdev)
