# Lab 09 — PHP + MySQL

## Run locally

```sh
cd /Users/ngysytho/workspace/Class_Projects/COS10026/lab9
php -S localhost:8083
```

Open http://localhost:8083/cars.php or http://localhost:8083/search_form.php.
Keep the terminal open. Stop with Control+C.

## Database

Import exhibition_db.sql once into MySQL/phpMyAdmin. Do not reimport if the cars table already exists. Run queries.sql statements individually in phpMyAdmin and inspect each result.

settings.php contains connection defaults; settings.local.php contains private local overrides and is ignored by Git. On another computer, configure your own credentials. Never commit settings.local.php.

## Search

The form uses GET because searching only reads data; the model appears in the URL. search_result.php uses a prepared statement to bind input separately from SQL (instead of mysqli_real_escape_string). LIKE allows partial model searches. htmlspecialchars escapes text when writing HTML.

Try Corolla, cor, unknown, an empty model, and a quote character. Shared car_table.inc renders five columns. cars.php displays the required empty-table message.

The Canvas attachments were not accessible; field types follow the supplied task description. This folder remains part of the existing project as requested, not a separate repository cloned into htdocs.
