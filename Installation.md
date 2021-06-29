##
    php artisan migrate:fresh --seed



## Testing emails
The application use Mailtrap( https://mailtrap.io/ ), so you need just to type in your credentials. 

You will find them in the SMTP Settings tab of your Inbox. 
Also, you can use Integrations data from the same tab. 
Choose Laravel from the list, copy the following details, and paste them to your .env file:

    MAIL_MAILER=smtp
    MAIL_HOST=smtp.mailtrap.io
    MAIL_PORT=2525
    MAIL_USERNAME=1a2b3c4d5e6f7g //your username
    MAIL_PASSWORD=1a2b3c4d5e6f7g // your password
    MAIL_FROM_ADDRESS=from@example.com
    MAIL_FROM_NAME=Example

##  QUEUE    
    
    QUEUE_CONNECTION=database
    php artisan queue:work 
