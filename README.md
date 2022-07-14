# challenge-api

## Project setup
```
# Configuring a bash alias

    alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'

# Start the Docker containers

    sail start
    
    sail artisan migrate
    
    sail artisan db:seed

# Once the application's containers have been started, you may access the project in your web browser at: 

    http://localhost

```

### available endpoints
```
# GET FLIGHTS

GET http://localhost/api/flights

### GET A FLIGHT BY ID

GET http://localhost/api/flights/8

### GET HOTELS

GET http://localhost/api/hotels

### GET A HOTEL BY ID

GET http://localhost/api/hotels/1
```
