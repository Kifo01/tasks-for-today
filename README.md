# Tasks for Today Management System

A CodeIgniter 4 and MySQL task dashboard created for the IT0049 TSA1 assessment.

## Required pages

- `/` — tasks scheduled for the current date only
- `/tasks` — every task, ordered by date
- `/profile` — the single demo user
- `/about` — developer and project information

## Local setup with MAMP

1. Start the MAMP Apache and MySQL servers.
2. Open phpMyAdmin and import `database/tasks_for_today.sql`.
3. Confirm the settings in `.env` match MAMP (defaults: user `root`, password `root`, MySQL port `8889`).
4. Visit `http://localhost:8888/tasks-for-today/public/`.

The SQL import creates the database, both required tables, eight tasks spanning four dates, and exactly one demo user. Today’s records use `CURDATE()`, so the Welcome page is correct on the day the SQL is imported.

## Alternative CLI database setup

The project also includes CodeIgniter migrations and seeders:

```bash
php spark migrate
php spark db:seed DatabaseSeeder
```

## Technology

- CodeIgniter 4.7
- PHP 8.3+
- MySQL or MariaDB
- MVC architecture
