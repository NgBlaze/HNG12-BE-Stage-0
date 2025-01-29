# HNG12 Public API

This is a simple API with GET Request for the HNG12 internship:

- My registered email on the HNG12 Slack workspace.
- The current date/time in ISO 8601 UTC format.
- A link to this project's GitHub repository.

## API Endpoint

- **Base URL:** `https://hng-12-be-stage-0.vercel.app/`
- **Method:** `GET`
- **Response Format:** JSON

### Example Response

```json
{
  "email": "okolaaprecious@gmail.com",
  "current_datetime": "2025-01-30T09:30:00Z",
  "github_url": "https://github.com/NgBlaze/HNG12-BE-Stage-0"
}
```

## How to run locally

```bash
git clone https://github.com/NgBlaze/HNG12-BE-Stage-0.git
cd your-repo
```

## Run a PHP development server

```bash
php -S localhost:8000 index.php
```

## Hiring Links

- [PHP Developers](https://hng.tech/hire/php-developers)
