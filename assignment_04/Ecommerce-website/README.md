# Simple E-Commerce Website (PHP)

A small e-commerce demo site built with **PHP**, **Bootstrap 5**, and **PHP Sessions**, created as a practice project to apply form validation, sessions, and array/loop concepts.

## Features

- 🏠 **Home page** — hero banner with a call-to-action button
- 🛍️ **Products page** — 6 products rendered from a PHP associative array using Bootstrap cards
- 👤 **Account page**
  - Shows a **login form** (email + password) if the user is not logged in
  - Shows a **profile form** (username, password, email, phone, Facebook, Twitter, Instagram) if the user is logged in
  - Full server-side validation with inline error messages for every field
- 🚪 **Logout** — destroys the session and returns to the home page
- 🧭 Shared, session-aware navbar included on every page

## Tech Stack

- PHP (no framework — plain procedural PHP)
- PHP Sessions for storing logged-in user data
- Bootstrap 5.3.7 (via CDN)
- HTML / CSS

## Project Structure

```
.
├── index.php                     # Home page
├── products.php                  # All products page
├── account.php                   # Login / Profile controller page
├── logout.php                    # Destroys the session
├── css/
│   └── style.css                 # Custom styles (hero background, etc.)
├── images/                       # Product images
└── includes/
    ├── navbar.php                # Shared navigation bar
    ├── login-form.php            # Login form markup
    ├── login-validation.php      # Login server-side validation
    ├── profile-form.php          # Profile form markup
    └── profile-validation.php    # Profile server-side validation
```

## How It Works

1. **Products** are stored in an associative array (`$products`) where each key is the product name and the value is an array of `price`, `img`, and `desc`. The page loops over it with `foreach` and renders each product as a Bootstrap card.
2. **Login/Profile logic** follows a validate → store in session → redirect pattern:
   - If validation fails, errors are collected in an `$errors` array and shown next to the relevant input.
   - If validation passes, the data is saved in `$_SESSION` and the user is redirected (`header("Location: ...")` + `exit()`).
3. **Navbar links change dynamically** based on `isset($_SESSION['email'])` — showing *Account* when logged out and *Account + Logout* when logged in.

## Getting Started

### Requirements
- PHP 7.4+ (or any recent PHP version)
- A local server such as [XAMPP](https://www.apachefriends.org/), [MAMP](https://www.mamp.info/), or PHP's built-in server

### Run locally

```bash
# Clone the repository
git clone https://github.com/your-username/your-repo-name.git
cd your-repo-name

# Start PHP's built-in server
php -S localhost:8000
```

Then open [http://localhost:8000](http://localhost:8000) in your browser.

## Validation Rules

| Field | Rule |
|---|---|
| Email | Required, must be a valid email format |
| Password | Required, minimum 6 characters |
| Username | Required, minimum 3 characters |
| Phone | Required, must match Egyptian mobile number format (`01[0,1,2,5]XXXXXXXX`) |
| Facebook / Twitter / Instagram URL | Required, must be a valid URL |

## Notes

- This is a learning project focused on PHP form validation, sessions, and arrays — not intended for production use (e.g., passwords are stored in session in plain text for simplicity).
- `accounts.php` is a legacy/duplicate file from an earlier version of the account page and can be removed; `account.php` (with the `includes/` files) is the active implementation.

## License

This project is for educational purposes.