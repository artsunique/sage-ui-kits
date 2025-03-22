# 🧩 Sage UI Kits

A modular set of reusable Blade components for [Sage](https://roots.io/sage/) themes and Laravel projects.  
Ideal for structuring UI elements like `<x-text>`, `<x-date>`, `<x-link>`, and more – directly from a Composer package.

---

## ✅ Features

- Clean and reusable Blade components
- Tailwind CSS ready (but not dependent on it)
- Compatible with Sage (Roots) and Laravel
- Easy to extend and customize
- Designed for Composer-based workflows

---

## 📦 Installation

You can use it as a private or public Composer package.

### 1. Add to your project's `composer.json`

For SSH access (recommended):

```json
"repositories": [
  {
    "type": "vcs",
    "url": "git@github.com:artsunique/sage-ui-kits.git"
  }
]
```
Or for HTTPS access:

```json
"repositories": [
  {
    "type": "vcs",
    "url": "https://github.com/artsunique/sage-ui-kits.git"
  }
]
```
2. Require the package via Composer
```
composer require artsunique/sage-ui-kits:dev-main
```
⚙️ Integration with Sage (Roots)
To load the package’s components in a Sage theme, register the service provider manually.

```php
use SageUiKits\SageUiKitServiceProvider;

class ThemeServiceProvider extends \Roots\Acorn\Sage\SageServiceProvider
{
    public function register()
    {
        parent::register();

        // Register the custom UI Kit provider
        $this->app->register(SageUiKitServiceProvider::class);
    }

    public function boot()
    {
        parent::boot();
    }
}
```
🧪 Local Development (Path Repository)
Add the following to your composer.json:

```json
"repositories": [
  {
    "type": "path",
    "url": "../sage-ui-kits"
  }
]
```
Then require it like this:

```json
composer require artsunique/sage-ui-kits:*
```
🛠 Publishable Assets (Optional)
````php
$this->publishes([
    __DIR__.'/../path/to/assets' => public_path('vendor/sage-ui-kits'),
], 'sage-ui-kits');
````
📚 Publish in Sage Theme:
wp acorn vendor:publish --tag=sage-ui-kits

