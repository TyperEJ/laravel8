# Start up
```
docker-compose up -d

cp .env.example .env

// set facebook service config
FACEBOOK_CLIENT_ID=
FACEBOOK_CLIENT_SECRET=
FACEBOOK_CLIENT_TOKEN=

php artisan migrate
```

# Run corn job
```
php artisan schedule:run
```
