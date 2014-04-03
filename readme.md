## Install


* Install thru Composer
* Change your database config in the `app/config/database.php` file. The database name defaults to *restui*.
* Use `php artisan restui:install` to migrate and seed the database

## Proof of concept

The `restui:install` command seeds the resources and actions table with it's own resource and actions.
This way we can call our own routes as if they were remote api calls.

Try calling `/dispatch/1` in your browser in the application.
The following flow is called:
* The route points to a PageController with the right Page model.
* The Page model has Nodes which holds information about the Widget, Resources an JSON config.
* Each remote View resource is dispatched with params from the Node

