## Database Testing

To spin up for database testing, clone the repo and run `vagrant up`. This will 
boot up a vagrant image with Laravel Homestead, which includes:

- MySQL
- MariaDB
- Sqlite3
- Postgres
- Redis
- Memcached
- SQLServer (with manual configuration)

After choosing a database type, the `app/database.php` file should reflect the 
default database type. 

Then, run the migrations by running:

```
php artisan migrate
```

This creates the database tables used for testing, found in 
`database/migrations`.

From there, the database testing can be done in one of two ways - through the
CMS by creating/deleting pages, or through the specially designed endpoints for 
database queries.

- **/database/insert** creates 10000 database unique entries in the `users` 
table, which takes a couple seconds to complete.

- **/database/select** loops through those 10000 entries and displays them on 
the page.

- **/database/delete** clears out that table to allow the /insert endpoint to 
be accessed again.