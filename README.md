# Hobel.ch - Statamic Website

A multilingual website built with Statamic CMS, Laravel, and a modern frontend stack.

## Tech Stack

### Backend
- **PHP 8.2+** - Modern PHP with strict typing
- **Laravel 11** - Application framework foundation
- **Statamic CMS 5** - Flat-file, Git-powered content management
- **Livewire 3** - Dynamic components without writing JavaScript

### Frontend
- **Vite** - Modern build tool for asset compilation and hot reloading
- **TailwindCSS 3** - Utility-first CSS framework with custom design system
- **Alpine.js 3** - Lightweight JavaScript framework for interactivity
- **Antlers** - Statamic's powerful templating language

### Content Management
- Flat-file content storage (YAML frontmatter + Markdown)
- Version controlled content in `content/` directory
- Multilingual support: German (de) and English (en)

## Getting Started

### Prerequisites
- PHP 8.2 or higher
- Composer
- Node.js and npm
- Laravel Herd (recommended) or another local PHP server

### Installation

1. Install PHP dependencies:
```bash
composer install
```

2. Install JavaScript dependencies:
```bash
npm install
```

3. Copy environment file and configure:
```bash
cp .env.example .env
php artisan key:generate
```

4. Build frontend assets:
```bash
npm run build
```

## Development

### Frontend Development
```bash
# Start development server with hot reloading
npm run dev

# Build for production
npm run build
```

### Statamic & Laravel Commands
```bash
# Statamic CLI (preferred for Statamic-specific tasks)
php please [command]

# Laravel Artisan CLI
php artisan [command]

# Clear caches
php please stache:clear
php please cache:clear
```

### Code Quality
```bash
# Format PHP code with Laravel Pint
./vendor/bin/pint
```

### Testing
```bash
# Run tests
php artisan test

# Run specific test suite
./vendor/bin/phpunit --testsuite=Feature
./vendor/bin/phpunit --testsuite=Unit
```

## Project Structure

```
├── app/                    # PHP application code
├── content/                # Statamic content files
│   ├── collections/        # Content collections (pages, etc.)
│   ├── globals/            # Global settings
│   └── navigation/         # Navigation structures
├── resources/
│   ├── blueprints/         # Content schemas
│   ├── css/                # Source CSS files
│   ├── js/                 # Source JavaScript files
│   └── views/              # Antlers templates
├── config/                 # Application configuration
│   └── statamic/           # Statamic-specific configuration
├── public/                 # Publicly accessible files
└── routes/                 # Route definitions
```

## Custom Design System

The project includes a custom TailwindCSS configuration with:

- **Custom Colors**: mystiris, verdique, flareon, sunella, blushra
- **Custom Font**: FeixenSans (Regular, Medium, Semibold)
- **Extended Spacing Scale**: 1-250
- **Custom Font Sizes**: Tailored typography system
- **Responsive Breakpoints**: Mobile-first design approach

## Content Management

- **Collections**: Pages organized by locale in `content/collections/`
- **Globals**: Contact info, opening hours, social media, special opening hours
- **Navigation**: Main menu, footer, meta navigation
- **Blueprints**: Content schemas defining fields and layouts

## Multilingual Setup

The site supports two locales:
- German (de) - Primary language
- English (en) - Secondary language

Content is organized by locale in the content directory structure.

## Important Notes

- Content is stored as files (YAML/Markdown) and version controlled
- Statamic uses its own cache system (Stache) - clear with `php please stache:clear`
- Template changes use Antlers templating syntax
- Asset compilation uses Vite - ensure `npm run dev` is running during development
- When served with Laravel Herd, the site is available at `https://hobel.test`

## Additional Resources

- [Statamic Documentation](https://statamic.dev/)
- [Laravel Documentation](https://laravel.com/docs)
- [TailwindCSS Documentation](https://tailwindcss.com/docs)
- [Alpine.js Documentation](https://alpinejs.dev/)
- [Livewire Documentation](https://livewire.laravel.com/)
