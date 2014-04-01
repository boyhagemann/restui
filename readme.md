## Install


* Install thru Composer
* Change your database config in the `app/config/database.php` file. The database name defaults to *restui*.
* Use `php artisan restui:install` to migrate and seed the database

## Proof of concept

The `restui:install` command seeds the resources and actions table with it's own resource and actions.
This way we can call our own routes as if they were remote api calls.

Try calling `/manage/1` of `/manage/2` from the browser.
These are the remote api calls.
They are the same as `/resource` and `/resource/create`, which are they original routes.

