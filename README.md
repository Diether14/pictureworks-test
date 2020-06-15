Routes
GET /show/{id} - will redirect to page with current user and comments
POST /api/append-user-comments - will append user comments if valid data is submitted

commands
php artisan append:comment {id} {comments} {password=aaa} - will append user comments if valid data is entered 
    i.e: php artisan append:comment 1 comment